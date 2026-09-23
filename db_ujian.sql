-- Database: `db_ujian`
-- Proyek: Okana Bolu Kemojo (Khas Kepulauan Riau)

CREATE DATABASE IF NOT EXISTS `db_ujian` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_ujian`;

-- --------------------------------------------------------
-- Struktur dari tabel `menus`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `menus` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `description` TEXT NOT NULL,
  `image_url` VARCHAR(500) DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Data Seeder untuk tabel `menus`
-- Minimal 8 varian Bolu Kemojo khas Kepulauan Riau
-- --------------------------------------------------------

INSERT INTO `menus` (`id`, `name`, `category`, `price`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Bolu Kemojo Pandan Wangi Asli', 'Pandan', 35000.00, 'Bolu Kemojo otentik khas Kepulauan Riau dengan sari daun pandan suji murni pilihan. Teksturnya legit, lembut, beraroma wangi semerbak kelopak bunga kamboja yang memanjakan lidah di setiap gigitan.', 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(2, 'Bolu Kemojo Keju Cheddar Melimpah', 'Keju', 42000.00, 'Perpaduan sempurna resep tradisional Melayu dengan limpahan keju cheddar parut premium yang gurih dan lelehan keju di bagian tengah bolu. Rasa manis dan gurih berpadu harmonis.', 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(3, 'Bolu Kemojo Cokelat Meleleh (Lava Dark Chocolate)', 'Cokelat', 40000.00, 'Dibuat khusus bagi pecinta cokelat dengan bubuk kakao kualitas tinggi dan isian cokelat Belgia yang lumer saat dinikmati hangat. Manisnya pas dengan aroma cokelat yang menggoda selera.', 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(4, 'Bolu Kemojo Durian Musang King', 'Durian', 50000.00, 'Menggunakan daging buah durian asli pilihan tanpa perisa buatan. Harum semerbak khas durian berpadu dengan adonan santan murni yang lembut dan lumer di mulut.', 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(5, 'Bolu Kemojo Klasik Resep Leluhur Riau', 'Original', 32000.00, 'Resep warisan turun-temurun leluhur Kepulauan Riau. Tekstur padat lembut, legit bersantan kental gurih dengan sentuhan manis yang seimbang. Sajian wajib pesta adat dan teman minum teh sore.', 'https://images.unsplash.com/photo-1587314168485-3236d6710814?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(6, 'Bolu Kemojo Red Velvet Creamy', 'Modern', 45000.00, 'Inovasi modern artisan dengan sentuhan Red Velvet lembut bercampur krim vanila lembut. Tampilan merah merona yang memikat dengan cita rasa mewah kekinian.', 'https://images.unsplash.com/photo-1616541823729-00fe0aacd32c?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(7, 'Bolu Kemojo Kopi Robusta Karimun', 'Modern', 38000.00, 'Sentuhan aroma kopi robusta sangrai khas Kepulauan Riau berpadu rasa legit bolu kemojo. Memberikan sensasi rasa kopi autentik yang mantap dan relaksasi nikmat.', 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(8, 'Bolu Kemojo Hampers Tradisi Riau (Paket 4 Rasa)', 'Paket', 155000.00, 'Paket bingkisan istimewa berisi 4 varian favorit (Pandan, Keju, Cokelat, Durian) dikemas dalam box premium motif songket Melayu Riau. Sangat cocok untuk oleh-oleh dan hadiah sanak saudara.', 'https://images.unsplash.com/photo-1557308536-ee471ef2c390?auto=format&fit=crop&w=800&q=80', NOW(), NOW()),
(9, 'Bolu Kemojo Matcha Almond Crunch', 'Modern', 46000.00, 'Perpaduan teh hijau Jepang premium dengan taburan almond renyah di atas bolu kemojo lembut bersantan. Varian fusion favorit anak muda pecinta dessert artisan.', 'https://images.unsplash.com/photo-1535141192574-5d4897c13136?auto=format&fit=crop&w=800&q=80', NOW(), NOW());

-- --------------------------------------------------------
-- Struktur dari tabel `users`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `username` VARCHAR(100) NOT NULL UNIQUE,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `role` ENUM('admin', 'user') NOT NULL DEFAULT 'user',
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Data Seeder untuk tabel `users` (Akun Admin & User)
-- Password Admin: admin123 ($2y$10$p3Q...)
-- Password User: user123
-- --------------------------------------------------------

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Administrator Okana', 'admin', 'admin@okana.com', '$2y$10$1PZZ3Lpndu2.Ue0cT.vWkuxaY56c2jV3gCqQkXgU4R8iH8/1Eti.S', 'admin', NOW(), NOW()),
(2, 'Pelanggan Setia Okana', 'user', 'user@okana.com', '$2y$10$rNn4q8z9w9eKx3k0q7XbCe5pGk2l5y2h3j4k5l6m7n8o9p0q1r2s3', 'user', NOW(), NOW());

