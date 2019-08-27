-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 04:36 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_smartbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_seat` int(10) UNSIGNED NOT NULL DEFAULT '40',
  `cost_per_unit` double UNSIGNED DEFAULT NULL,
  `booked_seat` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `paid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `driver_id` int(10) UNSIGNED DEFAULT NULL,
  `route_id` int(10) UNSIGNED DEFAULT NULL,
  `station_id` int(10) UNSIGNED DEFAULT NULL,
  `schedule_id` int(10) UNSIGNED DEFAULT NULL,
  `trip_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `name`, `license_number`, `total_seat`, `cost_per_unit`, `booked_seat`, `paid`, `driver_id`, `route_id`, `station_id`, `schedule_id`, `trip_id`, `created_at`, `updated_at`) VALUES
(1, 'bus1', '2143124234', 60, 100, 0, 0, 2, 1, NULL, 2, NULL, '2019-08-26 19:22:38', '2019-08-26 19:22:38'),
(2, 'bus2', '21341243242', 70, 200, 0, 0, 4, 2, NULL, 4, NULL, '2019-08-26 19:23:09', '2019-08-26 19:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `bus_routes`
--

CREATE TABLE `bus_routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_counter` int(10) UNSIGNED DEFAULT NULL,
  `end_counter` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_routes`
--

INSERT INTO `bus_routes` (`id`, `name`, `start_counter`, `end_counter`, `created_at`, `updated_at`) VALUES
(1, 'Route1', 1, 4, '2019-08-26 19:21:46', '2019-08-26 19:21:46'),
(2, 'route2', 2, 6, '2019-08-26 19:22:12', '2019-08-26 19:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `bus_schedules`
--

CREATE TABLE `bus_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `schedule` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_schedules`
--

INSERT INTO `bus_schedules` (`id`, `schedule`, `created_at`, `updated_at`) VALUES
(1, '07:30:00', '2019-08-26 19:20:49', '2019-08-26 19:20:49'),
(2, '05:30:00', '2019-08-26 19:20:57', '2019-08-26 19:20:57'),
(3, '10:30:00', '2019-08-26 19:21:03', '2019-08-26 19:21:03'),
(4, '10:30:00', '2019-08-26 19:21:10', '2019-08-26 19:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stations`
--

CREATE TABLE `bus_stations` (
  `id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_hour` time DEFAULT NULL,
  `closing_hour` time DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_stations`
--

INSERT INTO `bus_stations` (`id`, `bus_id`, `name`, `lat`, `long`, `address`, `opening_hour`, `closing_hour`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, NULL, 'City college', 23.739449, 90.383057, 'Dhaka Science lab', '19:10:00', '23:10:00', '634754364', NULL, '2019-08-25 18:59:24'),
(2, NULL, 'Kolabagan Busstop', 23.747539, 90.380509, 'Dhaka Kolabagan', '10:25:00', '23:25:00', NULL, NULL, '2019-08-25 19:01:49'),
(3, NULL, 'Dhanmondi 32', 23.751598, 90.377844, 'Dhaka Dhanmondi', '10:25:00', '23:25:00', NULL, NULL, '2019-08-25 19:03:25'),
(4, NULL, 'Dhanmondi 27', 23.756191, 90.375571, 'Dhaka Dhanmondi', '01:25:00', '03:25:00', NULL, NULL, '2019-08-25 19:05:49'),
(5, NULL, 'Asadgate', 23.759768, 90.373396, 'Dhaka Asadgate', '01:25:00', '03:25:00', NULL, NULL, '2019-08-25 19:06:45'),
(6, NULL, 'Sishumela Busstand', 23.773077, 90.367489, 'sishumela', '01:25:00', '03:25:00', NULL, NULL, '2019-08-25 19:08:36'),
(7, NULL, 'Badda', 23789.435, 67845.235, 'Dhaka kolabagan', '01:25:00', '03:25:00', NULL, NULL, NULL),
(8, NULL, 'Malibug', 23789.435, 67845.235, 'Dhaka kolabagan', '01:25:00', '03:25:00', NULL, NULL, NULL),
(9, NULL, 'Mouchak', 23789.435, 67845.235, 'Dhaka kolabagan', '01:25:00', '03:25:00', NULL, NULL, NULL),
(10, NULL, 'Hatirjhil', 23789.435, 67845.235, 'Dhaka kolabagan', '01:25:00', '03:25:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bus_trips`
--

CREATE TABLE `bus_trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `departure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_ticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0',
  `expiration` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `route_id` int(10) UNSIGNED DEFAULT NULL,
  `bus_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_trips`
--

INSERT INTO `bus_trips` (`id`, `departure`, `destination`, `ticket_id`, `no_of_ticket`, `price`, `payment_status`, `expiration`, `user_id`, `route_id`, `bus_id`, `created_at`, `updated_at`) VALUES
(1, '3', '1', 'VtSgp3lR', '3', 570, 0, 0, 1, 1, 1, '2019-08-26 19:23:48', '2019-08-26 19:23:48'),
(2, '3', '1', 'PQQBGX2t', '3', 570, 0, 0, 1, 1, 1, '2019-08-26 19:24:20', '2019-08-26 19:24:20'),
(3, '3', '1', 'wWQjtR7P', '3', 570, 0, 0, 1, 1, 1, '2019-08-26 19:30:36', '2019-08-26 19:30:36'),
(4, '3', '1', 'Vb2dFSVO', '2', 380, 0, 0, 1, 1, 1, '2019-08-26 19:33:44', '2019-08-26 19:33:44'),
(5, '4', '1', 'J1lsUMAc', '2', 520, 0, 0, 1, 1, 1, '2019-08-26 19:35:42', '2019-08-26 19:35:42'),
(6, '4', '1', 'pKcHLLIL', '2', 520, 0, 0, 1, 1, 1, '2019-08-26 19:36:34', '2019-08-26 19:36:34'),
(7, '4', '1', 'bT9XTM5z', '2', 520, 0, 0, 1, 1, 1, '2019-08-26 19:37:02', '2019-08-26 19:37:02'),
(8, '4', '1', 'YSDlLH9B', '2', 520, 0, 0, 1, 1, 1, '2019-08-26 19:37:13', '2019-08-26 19:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(107, '2014_10_12_000000_create_users_table', 1),
(108, '2014_10_12_100000_create_password_resets_table', 1),
(109, '2019_08_05_174303_create_roles_table', 1),
(110, '2019_08_05_174551_create_photos_table', 1),
(111, '2019_08_11_200852_create_trips_table', 1),
(112, '2019_08_14_103711_create_bus_routes_table', 1),
(113, '2019_08_14_105345_create_bus_stations_table', 1),
(114, '2019_08_14_195219_create_route_station_table', 1),
(115, '2019_08_16_102743_create_buses_table', 1),
(116, '2019_08_17_173140_create_bus_schedules_table', 1),
(117, '2019_08_17_173340_create_route_schedule_table', 1),
(118, '2019_08_20_123618_create_bus_trips_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(2, 'User', NULL, NULL),
(3, 'Driver', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route_schedule`
--

CREATE TABLE `route_schedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED DEFAULT NULL,
  `schedule_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route_schedule`
--

INSERT INTO `route_schedule` (`id`, `route_id`, `schedule_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route_station`
--

CREATE TABLE `route_station` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED DEFAULT NULL,
  `station_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route_station`
--

INSERT INTO `route_station` (`id`, `route_id`, `station_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 2, 3, NULL, NULL),
(6, 2, 5, NULL, NULL),
(7, 2, 6, NULL, NULL),
(8, 2, 2, NULL, NULL),
(9, 2, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `departure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` int(11) NOT NULL,
  `price` double NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0',
  `expire_status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `route_id` int(10) UNSIGNED DEFAULT NULL,
  `bus_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '2',
  `photo_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` double NOT NULL DEFAULT '0',
  `about` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_active`, `role_id`, `photo_id`, `name`, `city`, `phone_number`, `email`, `balance`, `about`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 1, NULL, 'Admin', NULL, NULL, 'admin1@email.com', 0, 'Something about yourself.', '$2y$10$wrG5RRFKuSXeoq3YKSiMIeYyI9.2Z7I6cDVX.xf1UcQv//0E0DoY6', NULL, '2019-08-26 19:18:31', '2019-08-26 19:39:41'),
(2, 0, 3, NULL, 'Driver2', NULL, NULL, 'driver5@email.com', 0, NULL, 'driver124', NULL, NULL, NULL),
(3, 0, 3, NULL, 'Driver3', NULL, NULL, 'driver6@email.com', 0, NULL, 'driver124', NULL, NULL, NULL),
(4, 0, 3, NULL, 'Driver4', NULL, NULL, 'driver8@email.com', 0, NULL, 'driver124', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_driver_id_index` (`driver_id`),
  ADD KEY `buses_route_id_index` (`route_id`),
  ADD KEY `buses_station_id_index` (`station_id`),
  ADD KEY `buses_schedule_id_index` (`schedule_id`),
  ADD KEY `buses_trip_id_index` (`trip_id`);

--
-- Indexes for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_routes_start_counter_index` (`start_counter`),
  ADD KEY `bus_routes_end_counter_index` (`end_counter`);

--
-- Indexes for table `bus_schedules`
--
ALTER TABLE `bus_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_stations`
--
ALTER TABLE `bus_stations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_stations_bus_id_index` (`bus_id`);

--
-- Indexes for table `bus_trips`
--
ALTER TABLE `bus_trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_trips_user_id_index` (`user_id`),
  ADD KEY `bus_trips_route_id_index` (`route_id`),
  ADD KEY `bus_trips_bus_id_index` (`bus_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_schedule`
--
ALTER TABLE `route_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_schedule_route_id_index` (`route_id`),
  ADD KEY `route_schedule_schedule_id_index` (`schedule_id`);

--
-- Indexes for table `route_station`
--
ALTER TABLE `route_station`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_station_route_id_index` (`route_id`),
  ADD KEY `route_station_station_id_index` (`station_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_user_id_index` (`user_id`),
  ADD KEY `trips_route_id_index` (`route_id`),
  ADD KEY `trips_bus_id_index` (`bus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_photo_id_index` (`photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_routes`
--
ALTER TABLE `bus_routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_schedules`
--
ALTER TABLE `bus_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bus_stations`
--
ALTER TABLE `bus_stations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bus_trips`
--
ALTER TABLE `bus_trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `route_schedule`
--
ALTER TABLE `route_schedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `route_station`
--
ALTER TABLE `route_station`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bus_routes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bus_trips`
--
ALTER TABLE `bus_trips`
  ADD CONSTRAINT `bus_trips_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `route_schedule`
--
ALTER TABLE `route_schedule`
  ADD CONSTRAINT `route_schedule_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bus_routes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `route_station`
--
ALTER TABLE `route_station`
  ADD CONSTRAINT `route_station_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bus_routes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `route_station_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `bus_stations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
