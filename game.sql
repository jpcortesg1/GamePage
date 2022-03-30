-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2022 a las 06:19:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `game`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-image.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Racing', 'Browse the newest, top selling and discounted Racing Games', '2022-03-30 08:21:32', '2022-03-30 08:21:32', '1648610492forza 8.jpg'),
(2, 'Action', 'Browse the newest, top selling and discounted Action Games', '2022-03-30 08:22:00', '2022-03-30 08:22:00', '1648610520cod 3.jpg'),
(3, 'Survival', 'Browse the newest, top selling and discounted Survival Games', '2022-03-30 08:22:25', '2022-03-30 08:22:25', '1648610545ark4.jpg'),
(4, 'Sports', 'Browse the newest, top selling and discounted Sports Games', '2022-03-30 08:22:55', '2022-03-30 08:22:55', '1648610575fifa 2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_comment` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `comment`, `id_game`, `id_user`, `id_comment`, `created_at`, `updated_at`) VALUES
(1, 'NICE GAME!', 2, 1, NULL, '2022-03-30 08:44:28', '2022-03-30 08:44:28'),
(2, 'cool graphics!', 2, 1, NULL, '2022-03-30 08:44:47', '2022-03-30 08:44:47'),
(3, 'nice game', 1, 1, NULL, '2022-03-30 08:45:57', '2022-03-30 08:45:57'),
(4, 'cool races, and content', 1, 1, NULL, '2022-03-30 08:46:10', '2022-03-30 08:46:10'),
(5, 'when is gta 6 comming??', 6, 1, NULL, '2022-03-30 08:46:28', '2022-03-30 08:46:28'),
(6, 'worst COD ever, dont waste yor money!!', 4, 1, NULL, '2022-03-30 08:46:51', '2022-03-30 08:46:51'),
(7, 'nice campaing and multiplayer', 5, 1, NULL, '2022-03-30 08:47:17', '2022-03-30 08:47:17'),
(8, 'I wawnt to trow up when i play this game, where is my refund?!', 3, 1, NULL, '2022-03-30 08:47:45', '2022-03-30 08:47:45'),
(9, 'i love this game', 13, 1, NULL, '2022-03-30 08:48:03', '2022-03-30 08:48:03'),
(10, 'soooo scaryyyy', 11, 1, NULL, '2022-03-30 08:48:17', '2022-03-30 08:48:17'),
(11, 'btw nice with friends', 11, 1, 10, '2022-03-30 08:48:31', '2022-03-30 08:48:31'),
(12, 'nice open world, way to many things to do!', 12, 1, NULL, '2022-03-30 08:48:55', '2022-03-30 08:48:55'),
(13, 'OLD BUT GOLD!!', 10, 1, NULL, '2022-03-30 08:49:12', '2022-03-30 08:49:12'),
(14, 'LOVE DINOSAURS!!! nice maps and nice variety of dinos', 9, 1, NULL, '2022-03-30 08:49:53', '2022-03-30 08:49:53'),
(15, 'same as fifa 21-20-19 i dont know why people keep buying same game evey year', 8, 1, NULL, '2022-03-30 08:50:44', '2022-03-30 08:50:44'),
(16, 'the rock!!!!!!!! yesss!!!!!!!!', 7, 1, NULL, '2022-03-30 08:50:59', '2022-03-30 08:50:59'),
(17, 'awesome graphics!!', 2, 2, 2, '2022-03-30 08:51:45', '2022-03-30 08:51:45'),
(18, 'love the new cars they add every week', 2, 2, NULL, '2022-03-30 08:52:04', '2022-03-30 08:52:04'),
(19, 'not as much content as you might think', 1, 2, 4, '2022-03-30 08:52:32', '2022-03-30 08:52:32'),
(20, 'NEVER!!', 6, 2, 5, '2022-03-30 08:52:48', '2022-03-30 08:52:48'),
(21, '12 year old game! dont keep giving money to rockstar', 6, 2, NULL, '2022-03-30 08:53:27', '2022-03-30 08:53:27'),
(22, 'im with you, it\'s awufull', 4, 2, 6, '2022-03-30 08:53:53', '2022-03-30 08:53:53'),
(23, 'nice free to play multiplayer', 5, 2, 7, '2022-03-30 08:55:34', '2022-03-30 08:55:34'),
(24, 'it sucks!!!', 3, 2, 8, '2022-03-30 08:55:46', '2022-03-30 08:55:46'),
(25, 'GIVE ME MY MONEY BACK!!!', 3, 2, NULL, '2022-03-30 08:55:55', '2022-03-30 08:55:55'),
(26, 'SHOULD I BUY IT???', 13, 2, 9, '2022-03-30 08:56:27', '2022-03-30 08:56:27'),
(27, 'nice zombies game!', 12, 2, NULL, '2022-03-30 08:56:50', '2022-03-30 08:56:50'),
(28, 'want to play with me???', 12, 2, 12, '2022-03-30 08:56:59', '2022-03-30 08:56:59'),
(29, 'super scary', 11, 2, 10, '2022-03-30 09:00:09', '2022-03-30 09:00:09'),
(30, 'want to be my friend???', 11, 2, 11, '2022-03-30 09:00:28', '2022-03-30 09:00:28'),
(31, 'lit!', 10, 2, 13, '2022-03-30 09:03:57', '2022-03-30 09:03:57'),
(32, 'i want a server', 9, 2, 14, '2022-03-30 09:04:17', '2022-03-30 09:04:17'),
(33, 'a bit buggy sometimes', 9, 2, NULL, '2022-03-30 09:04:31', '2022-03-30 09:04:31'),
(34, 'hate this game, same shi**t allways', 8, 2, 15, '2022-03-30 09:04:56', '2022-03-30 09:04:56'),
(35, 'yeahhhh!!', 7, 2, 16, '2022-03-30 09:05:09', '2022-03-30 09:05:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `releasedate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `agerating` int(11) NOT NULL,
  `buyquantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-image.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id`, `name`, `developer`, `description`, `id_category`, `releasedate`, `price`, `agerating`, `buyquantity`, `created_at`, `updated_at`, `image`) VALUES
(1, 'F1® 2021', 'Codemasters', 'Every story has a beginning in F1® 2021, the official videogame of the 2021 FIA FORMULA ONE WORLD CHAMPIONSHIP™. Enjoy the stunning new features of F1® 2021, including the thrilling story experience ‘Braking Point’, two-player Career, and get even closer to the grid with ‘Real-Season Start’. Take your team to the top in the acclaimed ten-year ‘My Team’ Career mode, or race head-to-head in split-screen and multiplayer. Immerse yourself in the greatest racing spectacle on the planet and race with the authentic lineup of twenty heroic drivers and ten iconic teams from the 2021 season.', 1, '15 Jul, 2021', 214000, 0, 0, '2022-03-30 08:24:52', '2022-03-30 08:24:52', '1648610692f1 bp.jpg'),
(2, 'Forza Horizon 5', 'Playground Games', 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars.', 1, '8 Nov, 2021', 214000, 0, 1, '2022-03-30 08:25:39', '2022-03-30 09:12:08', '1648610739forza bp.jpg'),
(3, 'Battlefield™ 2042', 'DICE', 'Battlefield™ 2042 is a first-person shooter that marks the return to the iconic all-out warfare of the franchise. Adapt and overcome in a near-future world transformed by disorder. Squad up and bring a cutting-edge arsenal into dynamically-changing battlegrounds supporting 128 players, unprecedented scale, and epic destruction.', 2, '19 Nov, 2021', 214000, 17, 0, '2022-03-30 08:26:36', '2022-03-30 08:26:36', '1648610796battlefield bp.jpg'),
(4, 'Call of Duty®: WWII', 'Sledgehammer Games', 'Call of Duty® returns to its roots with Call of Duty®: WWII - a breathtaking experience that redefines World War II for a new gaming generation. Land in Normandy on D-Day and battle across Europe through iconic locations in history’s most monumental war. Experience classic Call of Duty combat, the bonds of camaraderie, and the unforgiving nature of war against a global power throwing the world into tyranny.', 2, '2 Nov, 2017', 219000, 17, 0, '2022-03-30 08:27:17', '2022-03-30 08:27:17', '1648610837cod bp.jpg'),
(5, 'Halo Infinite', '343 Industries', 'When all hope is lost and humanity’s fate hangs in the balance, the Master Chief is ready to confront the most ruthless foe he’s ever faced. Step inside the armor of humanity’s greatest hero to experience an epic adventure and explore the massive scale of the Halo ring. To experience the campaign, purchase Halo Infinite (Campaign).', 2, '15 Nov, 2021', 214900, 17, 0, '2022-03-30 08:28:01', '2022-03-30 08:28:01', '1648610881Halo bp.jpg'),
(6, 'Grand Theft Auto V', 'Rockstar Games', 'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.', 2, '14 Apr, 2015', 99900, 18, 0, '2022-03-30 08:28:38', '2022-03-30 08:28:38', '1648610918gta bp.jpg'),
(7, 'WWE 2K22', 'Visual Concepts', 'Get ripped out of the stands and hit with complete control of the WWE Universe. Hitting this hard has never been so easy. Everything from the controls to the stunning graphics has been redesigned, and feels as real as being ringside at WrestleMania.', 4, '15 Oct, 2021', 219900, 15, 0, '2022-03-30 08:30:03', '2022-03-30 08:30:03', '1648611003WWE bp.jpg'),
(8, 'FIFA 22', 'EA Canada & EA Romania', 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode. Play The World’s Game with 17,000+ players, over 700 teams in 90+ stadiums and more than 30 leagues from all over the globe.', 4, '30 Sep, 2021', 200000, 0, 0, '2022-03-30 08:30:36', '2022-03-30 08:30:36', '1648611036fifa bp.jpg'),
(9, 'ARK: Survival Evolved', 'Studio Wildcard', 'As a man or woman stranded naked, freezing and starving on the shores of a mysterious island called ARK, you must hunt, harvest resources, craft items, grow crops, research technologies, and build shelters to withstand the elements. Use your cunning and resources to kill or tame & breed the leviathan dinosaurs and other primeval creatures roaming the land, and team up with or prey on hundreds of other players to survive, dominate... and escape!', 3, '27 AGO 2017', 39500, 12, 0, '2022-03-30 08:31:18', '2022-03-30 08:31:18', '1648611078ark bp.jpg'),
(10, 'DayZ', 'Bohemia Interactive', 'DayZ is a hardcore open-world survival game with only one rule: stay alive, no matter what. But with a myriad of threats lurking around every corner, that might be easier said than done...', 3, '13 Dec, 2018', 129900, 17, 0, '2022-03-30 08:31:53', '2022-03-30 08:31:53', '1648611113day z bp.jpg'),
(11, 'Dead by Daylight', 'Behaviour Interactive Inc.', 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed. Survivors play in third-person and have the advantage of better situational awareness. The Killer plays in first-person and is more focused on their prey. The Survivors\' goal in each encounter is to escape the Killing Ground without getting caught by the Killer - something that sounds easier than it is, especially when the environment changes every time you play.', 3, '14 Jun, 2016', 40000, 17, 0, '2022-03-30 08:32:34', '2022-03-30 08:32:34', '1648611154Dead by daylight bp.jpg'),
(12, 'Dying Light 2 Stay Human', 'Techland', 'Over twenty years ago in Harran, we fought the virus—and lost. Now, we’re losing again. The City, one of the last large human settlements, is torn by conflict. Civilization has fallen back into the Dark Ages. And yet, we still have hope. You are a wanderer with the power to change the fate of The City. But your exceptional abilities come at a price. Haunted by memories you cannot decipher, you set out to learn the truth… and find yourself in a combat zone. Hone your skills, as to defeat your enemies and make allies, you’ll need both fists and wits. Unravel the dark secrets behind the wielders of power, choose sides and decide your destiny. But wherever your actions take you, there\'s one thing you can never forget—stay human.', 3, '3 Feb, 2022', 199900, 17, 0, '2022-03-30 08:33:13', '2022-03-30 08:34:10', '1648611250dying light bp.jpg'),
(13, 'ELDEN RING', 'FromSoftware Inc.', 'THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.', 3, '24 Feb, 2022', 207000, 17, 0, '2022-03-30 08:33:53', '2022-03-30 08:34:19', '1648611259elden ring bp.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2022_03_28_190122_add_image_to_user_table', 2),
(25, '2014_10_12_000000_create_users_table', 3),
(26, '2014_10_12_100000_create_password_resets_table', 3),
(27, '2019_08_19_000000_create_failed_jobs_table', 3),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(29, '2022_03_19_162137_add_rol_to_users_table', 3),
(30, '2022_03_19_223826_create_categories_table', 3),
(31, '2022_03_19_224511_create_games_table', 3),
(32, '2022_03_19_225739_create_comments_table', 3),
(33, '2022_03_20_211249_add_image_to_categories_table', 3),
(34, '2022_03_21_051549_add_image_to_games_table', 3),
(35, '2022_03_28_190207_add_image_to_users_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-image.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `image`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Tg90a3RUkGlkiIHKkxFNq.bw0LOCYQd/Xbqv0xC6qdJa74tR861..', NULL, '2022-03-30 08:19:53', '2022-03-30 08:19:53', 'admin', 'no-image.png'),
(2, 'sebastian', 'sebastian@gmail.com', NULL, '$2y$10$.ERTye7.H.TwwHCdALBTEeZaMFy0l69fIz1mtG/IxdihT6xZYYUGm', NULL, '2022-03-30 08:51:21', '2022-03-30 08:51:21', 'client', 'no-image.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_id_game_foreign` (`id_game`),
  ADD KEY `comments_id_user_foreign` (`id_user`),
  ADD KEY `comments_id_comment_foreign` (`id_comment`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_id_category_foreign` (`id_category`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_id_comment_foreign` FOREIGN KEY (`id_comment`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comments_id_game_foreign` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `comments_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
