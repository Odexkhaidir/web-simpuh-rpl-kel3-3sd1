-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table laravel.cache_locks: ~0 rows (approximately)

-- Dumping data for table laravel.desa: ~18 rows (approximately)
INSERT INTO `desas` (`kode_desa`, `nama_desa`, `kode_kecamatan`, `kecamatan_id`, `created_at`, `updated_at`) VALUES
	('332601001', 'Bojong', 332601, 1, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332601002', 'Bojong Timur', 332601, 1, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332601003', 'Bojong Wetan', 332601, 1, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332602001', 'Kedungwuni Barat', 332602, 2, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332602002', 'Kedungwuni Timur', 332602, 2, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332602003', 'Kedungwuni Selatan', 332602, 2, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332603001', 'Kajen', 332603, 3, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332603002', 'Kajen Timur', 332603, 3, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332603003', 'Kajen Barat', 332603, 3, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332604001', 'Kesesi', 332604, 4, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332604002', 'Kesesi Timur', 332604, 4, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332604003', 'Kesesi Barat', 332604, 4, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332605001', 'Sragi', 332605, 5, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332605002', 'Sragi Barat', 332605, 5, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332605003', 'Sragi Timur', 332605, 5, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332606001', 'Siwalan', 332606, 6, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332606002', 'Siwalan Tengah', 332606, 6, '2024-12-16 12:12:52', '2024-12-16 12:12:52'),
	('332606003', 'Siwalan Timur', 332606, 6, '2024-12-16 12:12:52', '2024-12-16 12:12:52');

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)

-- Dumping data for table laravel.indikator: ~0 rows (approximately)

-- Dumping data for table laravel.jobs: ~0 rows (approximately)

-- Dumping data for table laravel.job_batches: ~0 rows (approximately)

-- Dumping data for table laravel.kecamatan: ~0 rows (approximately)
INSERT INTO `kecamatans` (`kode_kecamatan`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
	('332601', 'Bojong', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332602', 'Kedungwuni', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332603', 'Kajen', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332604', 'Kesesi', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332605', 'Sragi', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332606', 'Siwalan', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332607', 'Wonopringgo', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332608', 'Wiradesa', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332609', 'Karanganyar', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332610', 'Talun', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332611', 'Doro', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332612', 'Paninggaran', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332613', 'Lebakbarang', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332614', 'Petungkriyono', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332615', 'Karangdadap', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332616', 'Buaran', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332617', 'Tirto', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332618', 'Wonokerto', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332619', 'Pekalongan Barat', '2024-12-16 12:13:35', '2024-12-16 12:13:35'),
	('332620', 'Pekalongan Timur', '2024-12-16 12:13:35', '2024-12-16 12:13:35');

-- Dumping data for table laravel.laporan: ~0 rows (approximately)

-- Dumping data for table laravel.migrations: ~1 rows (approximately)
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('0001_01_01_000000_create_users_table', 1),
	('0001_01_01_000001_create_cache_table', 1),
	('0001_01_01_000002_create_jobs_table', 1),
	('2024_12_16_145627_create_notifikasis_table', 1),
	('2024_12_16_145628_create_laporans_table', 1),
	('2024_12_16_145629_create_kecamatans_table', 1),
	('2024_12_16_145630_create_desas_table', 1),
	('2024_12_16_145631_create_saran_penanganans_table', 1),
	('2024_12_16_145632_create_indikators_table', 1),
	('2024_12_16_145633_create_sub_indikators_table', 1),
	('2024_12_16_145634_create_parameter_indikators_table', 1),
	('2024_12_16_145635_create_parameter_umums_table', 1),
	('2024_12_16_145636_create_output_kekumuhans_table', 1);

-- Dumping data for table laravel.notifikasi: ~0 rows (approximately)

-- Dumping data for table laravel.output_kekumuhan: ~0 rows (approximately)

-- Dumping data for table laravel.parameter_indikator: ~0 rows (approximately)

-- Dumping data for table laravel.parameter_umum: ~0 rows (approximately)

-- Dumping data for table laravel.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table laravel.saran_penanganan: ~0 rows (approximately)

-- Dumping data for table laravel.sessions: ~0 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('2xcfW3BK6lZncsuCLmed2OfeLrxEVy4JB1JR6w3t', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNmhxTzk0MmtjVXg0Rmd5R0tld04wT0NQd3JpUXljbTlQZzY5NjRsQyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkaVpkTnZtcXpSeXlEQkoxZ2gxakFqdWo2Y3d6SEFrZ25sZC5iUkpKMi9oOEkubGVhTC96bEsiO30=', 1734412773),
	('ulOk0ZASFMegfWSgrhNrFOgEH13MuRqNZ7GkIdHu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVh2U0M0dFFYdjRvRFAxMDlvODd0M01Gb0tQbEE1WUZRYUZ6OEZ3eiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rlc2EvMTMvZWRpdCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGVzYS8xMy9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1734408209);

-- Dumping data for table laravel.sub_indikator: ~0 rows (approximately)

-- Dumping data for table laravel.user: ~1 rows (approximately)
INSERT INTO `user` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin SIMPUH', 'adminsimpuh@gmail.com', NULL, '$2y$12$iZdNvmqzRyyDBJ1gh1jAjuj6cwzHAkgnld.bRJJ2/h8I.leaL/zlK', NULL, '2024-12-16 12:07:42', '2024-12-16 12:07:42');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
