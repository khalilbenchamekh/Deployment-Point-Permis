-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2016 at 11:25 AM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routiere`
--
CREATE DATABASE IF NOT EXISTS `routiere` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `routiere`;

-- --------------------------------------------------------

--
-- Table structure for table `absences`
--

CREATE TABLE `absences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idStagaire` int(11) NOT NULL,
  `idJournee` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `absences`
--

INSERT INTO `absences` (`id`, `idStagaire`, `idJournee`, `idModule`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2016-09-27 13:39:30', '2016-09-27 13:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `animateurs`
--

CREATE TABLE `animateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumeroInscription` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `animateurs`
--

INSERT INTO `animateurs` (`id`, `nom`, `prenom`, `NumeroInscription`, `created_at`, `updated_at`) VALUES
(1, 'Soufiane', 'Soubela', 12345, NULL, '2016-09-27 10:02:23'),
(2, 'skjgkdzef', 'kdjfbg', 12456, '2016-09-19 10:28:31', '2016-09-19 10:28:31'),
(5, 'ldkfjbg', 'lskfgnlgkn', 5555555, '2016-09-19 10:31:56', '2016-09-27 10:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `attestations`
--

CREATE TABLE `attestations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idStagaire` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `IdStagaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `note` double NOT NULL,
  `idSession` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `IdStagaire` int(10) UNSIGNED NOT NULL,
  `idSession` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journees`
--

CREATE TABLE `journees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idSession` int(10) UNSIGNED NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `journees`
--

INSERT INTO `journees` (`id`, `idSession`, `heureDebut`, `heureFin`, `created_at`, `updated_at`) VALUES
(1, 3, '06:26:00', '08:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_23_135208_create_types_table', 1),
('2016_08_23_140113_create_themes_table', 1),
('2016_08_23_140137_create_statu_table', 1),
('2016_08_23_140157_create_module_table', 1),
('2016_08_23_140253_create_journee_table', 2),
('2016_08_23_142349_create_registreStagaire_table', 2),
('2016_08_23_143539_create_evaluation_table', 2),
('2016_08_23_144243_create_attestation_table', 2),
('2016_08_23_145759_create_animateur', 2),
('2016_08_23_150219_create_inscription_table', 2),
('2016_08_23_150919_create_stagaire_table', 2),
('2016_08_23_151442_create_session_table', 2),
('2016_08_25_114923_create_adsense_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `duree` double NOT NULL,
  `idJournee` int(10) UNSIGNED NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `duree`, `idJournee`, `heureDebut`, `heureFin`, `created_at`, `updated_at`) VALUES
(1, 'Module1', 20, 1, '05:39:12', '08:27:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrestagaires`
--

CREATE TABLE `registrestagaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idStagaire` int(10) UNSIGNED NOT NULL,
  `idInscription` int(10) UNSIGNED NOT NULL,
  `motif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idStatu` int(10) UNSIGNED NOT NULL,
  `idTheme` int(10) UNSIGNED NOT NULL,
  `idAnimateur` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `dateDebut`, `dateFin`, `idStatu`, `idTheme`, `idAnimateur`, `created_at`, `updated_at`) VALUES
(3, '2016-09-22', '2016-09-23', 1, 1, 1, '2016-09-19 11:07:16', '2016-09-19 11:07:16'),
(5, '2016-09-20', '2016-09-19', 1, 1, 1, '2016-09-19 11:32:08', '2016-09-19 11:32:08'),
(8, '2016-09-28', '2016-09-29', 1, 1, 1, '2016-09-27 14:12:25', '2016-09-27 14:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `stagaires`
--

CREATE TABLE `stagaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idPermis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idSession` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stagaires`
--

INSERT INTO `stagaires` (`id`, `cin`, `nom`, `prenom`, `idPermis`, `tel`, `email`, `idSession`, `created_at`, `updated_at`) VALUES
(1, 'J12345', 'ahmed', 'ouberka', 'JG34JF', 12345, 'lkjdfg@kjf.com', 3, NULL, '2016-09-27 12:28:40'),
(2, 'J12345', 'lsdknf', 'mldfkngldng', 'DFg45', 123455, 'kjbfg@gh.com', 3, '2016-09-27 11:23:55', '2016-09-27 11:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Statu1', NULL, NULL),
(2, 'Statu2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'theme1', NULL, NULL),
(2, 'theme2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ahmed', 'ahmedouberka@hotmail.com', '$2y$10$gQvrS4VmNGTh9NpxAWsImOKdkPL.7pYNXku.DGSTVtuorV0jHgKea', 'ADsuvFmRKwWq62tS12evYvPhfmmNgRuaWZ89ghAqdpsSjdy9uJHntUGqIVyl', '2016-10-11 13:31:09', '2016-10-12 08:21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animateurs`
--
ALTER TABLE `animateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `animateurs_id_unique` (`id`);

--
-- Indexes for table `attestations`
--
ALTER TABLE `attestations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attestations_id_unique` (`id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `evaluations_id_unique` (`id`);

--
-- Indexes for table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inscriptions_id_unique` (`id`);

--
-- Indexes for table `journees`
--
ALTER TABLE `journees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `registrestagaires`
--
ALTER TABLE `registrestagaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `stagaires`
--
ALTER TABLE `stagaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status_id_unique` (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `themes_id_unique` (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_id_unique` (`id`),
  ADD KEY `types_nom_index` (`nom`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absences`
--
ALTER TABLE `absences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `animateurs`
--
ALTER TABLE `animateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `attestations`
--
ALTER TABLE `attestations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `journees`
--
ALTER TABLE `journees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registrestagaires`
--
ALTER TABLE `registrestagaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `stagaires`
--
ALTER TABLE `stagaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
