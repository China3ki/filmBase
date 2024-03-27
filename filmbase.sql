-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 10:03 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmbase`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account_type`
--

CREATE TABLE `account_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`type_id`, `type`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'critic');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `actors`
--

CREATE TABLE `actors` (
  `actor_id` int(11) NOT NULL,
  `actor_name` varchar(150) NOT NULL,
  `actor_surname` varchar(150) NOT NULL,
  `fk_actor_country` int(11) NOT NULL,
  `actor_birthday` date NOT NULL,
  `actor_death` date DEFAULT NULL,
  `actor_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actor_id`, `actor_name`, `actor_surname`, `fk_actor_country`, `actor_birthday`, `actor_death`, `actor_image`) VALUES
(5, 'Tobey', 'Maguire', 2, '2024-01-03', NULL, 'https://upload.wikimedia.org/wikipedia/commons/e/ec/Tobey_Maguire_and_Jennifer_Meyer_by_David_Shankbone2.jpg'),
(6, 'Kirsten', 'Dunst', 2, '2024-01-04', NULL, 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Kirsten_Dunst_Cannes_2016.jpg?Kirsten_Dunst70927060');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_desc` text NOT NULL,
  `article_Image` varchar(255) NOT NULL,
  `fk_article_category` int(11) NOT NULL,
  `fk_article_film` int(11) DEFAULT NULL,
  `fk_article_serial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_desc`, `article_Image`, `fk_article_category`, `fk_article_film`, `fk_article_serial`) VALUES
(47, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(48, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(49, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(50, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(51, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(52, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(53, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(54, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(55, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(56, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(57, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(58, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(59, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(60, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(61, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1),
(62, 'The Walking Dead najlepszy serial na świecie', 'abc', 'images/articles/abc.jpg', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles_category`
--

CREATE TABLE `articles_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `articles_category`
--

INSERT INTO `articles_category` (`category_id`, `category_name`) VALUES
(1, 'Filmy'),
(2, 'Seriale');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `character_show`
--

CREATE TABLE `character_show` (
  `character_id` int(11) NOT NULL,
  `character_name` varchar(150) NOT NULL,
  `character_image` varchar(255) NOT NULL,
  `character_image_width` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `character_show`
--

INSERT INTO `character_show` (`character_id`, `character_name`, `character_image`, `character_image_width`) VALUES
(4, 'Peter Parker', 'https://i.pinimg.com/564x/f5/3d/80/f53d8037cce8eca6ed1c44d9dbcb446d.jpg', 'https://www.dexerto.com/cdn-cgi/image/width=3840,quality=75,format=auto/https://editors.dexerto.com/wp-content/uploads/2022/08/18/Tobey-Maguire-Spider-Man-1.jpg'),
(5, 'Mary Jane Watson', 'https://pm1.aminoapps.com/7301/b8c0693c66e781be6f85dde0c3ae13ae6091568er1-736-920v2_uhq.jpg', 'https://static.wikia.nocookie.net/comicfanon/images/3/39/Mary_Jane_Watson_1.jpg/revision/latest/scale-to-width-down/655?cb=20100311125743&path-prefix=de');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(1, 'Polska'),
(2, 'Świat');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `episodes`
--

CREATE TABLE `episodes` (
  `episode_id` int(11) NOT NULL,
  `fk_episode_season` int(11) NOT NULL,
  `episode_name` varchar(100) NOT NULL,
  `episode_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `films`
--

CREATE TABLE `films` (
  `film_id` int(11) NOT NULL,
  `film_name` varchar(100) NOT NULL,
  `film_desc` varchar(300) NOT NULL,
  `film_length` int(11) NOT NULL,
  `fk_film_series` int(11) NOT NULL,
  `film_trailer` varchar(512) NOT NULL,
  `film_premiere` varchar(10) NOT NULL,
  `film_cover` varchar(255) NOT NULL,
  `film_cover_widther` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `film_desc`, `film_length`, `fk_film_series`, `film_trailer`, `film_premiere`, `film_cover`, `film_cover_widther`) VALUES
(1, 'Spider-man', 'Nastoletni Peter Parker zmienia się w Spidermana, gdy mieszkańcom zagraża szalony Zielony Goblin.\n', 121, 2, 'https://www.youtube.com/embed/t06RUxPbp_c?si=ClTABy0HWuFaiKpZ', '20.10.2002', 'images/films/spiderman1/spider.jpg\n', 'https://www.purepc.pl/image/news/2023/05/25_marvel_s_spider_man_2_zostal_zaprezentowany_na_playstation_showcase_w_grze_pojawi_sie_nie_tylko_venom_ale_rowniez_kraven_0_b.jpg'),
(3, 'Spider-man 2', 'Peter Parker jest zmęczony byciem bohaterem i chce zostać zwykłym chłopakiem. Gdy jednak Doktor Octavius przemienia się w złego doktora, Spider-Man staje z nim do walki.', 127, 2, 'aa', '2004', 'images/films/spiderman2/img.jpg', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Horror'),
(2, 'Przygodowe'),
(3, 'Akcja'),
(4, 'Romans'),
(5, 'Fantastyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `genres_show`
--

CREATE TABLE `genres_show` (
  `genre_show_id` int(11) NOT NULL,
  `fk_genre_film` int(11) DEFAULT NULL,
  `fk_genre_serial` int(11) DEFAULT NULL,
  `fk_genre_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `genres_show`
--

INSERT INTO `genres_show` (`genre_show_id`, `fk_genre_film`, `fk_genre_serial`, `fk_genre_genre`) VALUES
(1, 1, NULL, 3),
(2, 1, NULL, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images_episode`
--

CREATE TABLE `images_episode` (
  `image_id` int(11) NOT NULL,
  `fk_episode_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images_show`
--

CREATE TABLE `images_show` (
  `image_id` int(11) NOT NULL,
  `fk_image_film` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `images_show`
--

INSERT INTO `images_show` (`image_id`, `fk_image_film`, `image_path`) VALUES
(1, 1, 'https://s3.think-about.pl/3d-info/images/2023/10/czy-spider-man-2-bedize-na-ps4.jpg'),
(2, 1, 'https://unamglobal.unam.mx/wp-content/uploads/2023/06/destacada-spiderman.jpg'),
(5, 1, 'https://paradoks.net.pl/image_files/text/43482/spi2.jpg'),
(6, 1, 'https://thecinemaholic.com/wp-content/uploads/2019/07/MV5BMjIxNzQ5ODQ4MV5BMl5BanBnXkFtZTgwNjE0ODkxMjI@._V1_.jpg'),
(7, 1, 'https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/A4C5F4FE2BC34CE6202FF6F4E54DA2E0BA5425321AB6BB51B03921E3D60CC720/scale?width=1200&aspectRatio=1.78&format=jpeg'),
(8, 1, 'https://fwcdn.pl/fph/42/81/34281/215657.1.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `premiers`
--

CREATE TABLE `premiers` (
  `premier_id` int(11) NOT NULL,
  `fk_premier_film` int(11) DEFAULT NULL,
  `fk_premier_serial` int(11) DEFAULT NULL,
  `fk_premier_country` int(11) NOT NULL,
  `date_premier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `premiers`
--

INSERT INTO `premiers` (`premier_id`, `fk_premier_film`, `fk_premier_serial`, `fk_premier_country`, `date_premier`) VALUES
(1, 1, NULL, 2, '20.12.2024');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `production`
--

CREATE TABLE `production` (
  `production_id` int(11) NOT NULL,
  `fk_production_country` int(11) NOT NULL,
  `fk_production_film` int(11) DEFAULT NULL,
  `fk_production_serial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`production_id`, `fk_production_country`, `fk_production_film`, `fk_production_serial`) VALUES
(1, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `fk_role_actor` int(11) NOT NULL,
  `fk_role_character` int(11) NOT NULL,
  `fk_role_film` int(11) DEFAULT NULL,
  `fk_role_serial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `fk_role_actor`, `fk_role_character`, `fk_role_film`, `fk_role_serial`) VALUES
(11, 6, 5, 1, NULL),
(12, 5, 4, 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `seasons`
--

CREATE TABLE `seasons` (
  `season_id` int(11) NOT NULL,
  `fk_season_serial` int(11) NOT NULL,
  `season_number` int(11) NOT NULL,
  `season_trailer` varchar(512) NOT NULL,
  `season_premiere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `serials`
--

CREATE TABLE `serials` (
  `seriaL_id` int(11) NOT NULL,
  `serial_name` varchar(100) NOT NULL,
  `serial_desc` varchar(300) NOT NULL,
  `fk_serial_series` int(11) NOT NULL,
  `serial_trailer` varchar(512) NOT NULL,
  `serial_premiere` int(11) NOT NULL,
  `serial_end` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `serial_cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `serials`
--

INSERT INTO `serials` (`seriaL_id`, `serial_name`, `serial_desc`, `fk_serial_series`, `serial_trailer`, `serial_premiere`, `serial_end`, `serial_cover`) VALUES
(1, 'The Walking Dead', 'Oficer policji Rick Grimes przewodzi grupie ocalałych w świecie opanowanym przez zombi.', 1, 'aaa', 2010, '2023-12-16 20:27:59', 'images/serials/thewalkingdead/twd.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `series`
--

CREATE TABLE `series` (
  `series_id` int(11) NOT NULL,
  `series_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`series_id`, `series_name`) VALUES
(1, 'The Walking Dead'),
(2, 'Spider-man');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `show_like`
--

CREATE TABLE `show_like` (
  `id_like` int(11) NOT NULL,
  `fk_like_film` int(11) DEFAULT NULL,
  `fk_like_serial` int(11) DEFAULT NULL,
  `fk_like_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `show_like`
--

INSERT INTO `show_like` (`id_like`, `fk_like_film`, `fk_like_serial`, `fk_like_user`) VALUES
(98, 1, NULL, 17);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `show_rate`
--

CREATE TABLE `show_rate` (
  `id_rate` int(11) NOT NULL,
  `fk_rate_serial` int(11) DEFAULT NULL,
  `fk_rate_film` int(11) DEFAULT NULL,
  `fk_rate_user` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `rate_comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `show_rate`
--

INSERT INTO `show_rate` (`id_rate`, `fk_rate_serial`, `fk_rate_film`, `fk_rate_user`, `rate`, `rate_comment`) VALUES
(1, NULL, 1, 1, 8, 'Fajneeee'),
(2, NULL, 1, 1, 10, 'aff'),
(3, 1, NULL, 1, 5, 'Nawet nawet'),
(4, NULL, 1, 2, 7, 'Fajny film, chociaż mógłby być dłuższy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `show_watch`
--

CREATE TABLE `show_watch` (
  `id_watch` int(11) NOT NULL,
  `fk_watch_user` int(11) NOT NULL,
  `fk_watch_film` int(11) DEFAULT NULL,
  `fk_watch_serial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `show_watch`
--

INSERT INTO `show_watch` (`id_watch`, `fk_watch_user`, `fk_watch_film`, `fk_watch_serial`) VALUES
(12, 17, 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studio`
--

CREATE TABLE `studio` (
  `studio_id` int(11) NOT NULL,
  `studio_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`) VALUES
(1, 'Sony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studio_show`
--

CREATE TABLE `studio_show` (
  `studio_show_id` int(11) NOT NULL,
  `fk_studio_studio` int(11) NOT NULL,
  `fk_studio_film` int(11) DEFAULT NULL,
  `fk_studio_serial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `studio_show`
--

INSERT INTO `studio_show` (`studio_show_id`, `fk_studio_studio`, `fk_studio_film`, `fk_studio_serial`) VALUES
(1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_surname` varchar(100) NOT NULL,
  `user_nick` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `fk_user_type` int(11) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_desc` varchar(250) DEFAULT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `user_background` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_nick`, `user_email`, `fk_user_type`, `user_password`, `user_desc`, `user_avatar`, `user_background`) VALUES
(1, 'Paweł', 'Kwaśniewski', 'China3ki', '', 3, '123', '', 'images/actors/andrewlincoln/andrew.jpg', 'aa'),
(2, 'Andrzej', 'Chmura', 'China3ki', '', 1, '123', '', 'images/actors/andrewlincoln/andrew.jpg', ''),
(10, 'Paweł', 'Kwaśniewski', 'Chinaski', 'gfddf@gmail.com', 1, 'e8be16898b4cdecf69f9fbb0971cb32f86d6427cd17dfb2642115fba74608f29', '', 'images/character/rickgrimes/rick.jpg', 'images/long.jpg'),
(17, 'Paweł', 'Kwaśniewski', 'China3ki', 'pawelkwasn@gmail.com', 1, '366eabfcb4259155d52243ae4e5633a1d5741d9d1b8247fda2c20418150c55de', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim eaque facilis mollitia sit numquam pariatur neque temporibus nihil corporis, dolorum animi voluptatibus illo voluptas quo dolor a assumenda laudantium esse totam asperiores recusandae vit', 'images/character/rickgrimes/rick.jpg', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indeksy dla tabeli `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actor_id`),
  ADD KEY `fk_actor_country` (`fk_actor_country`);

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `fk_article_category` (`fk_article_category`),
  ADD KEY `fk_article_film` (`fk_article_film`),
  ADD KEY `fk_article_serial` (`fk_article_serial`);

--
-- Indeksy dla tabeli `articles_category`
--
ALTER TABLE `articles_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `character_show`
--
ALTER TABLE `character_show`
  ADD PRIMARY KEY (`character_id`);

--
-- Indeksy dla tabeli `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indeksy dla tabeli `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`),
  ADD KEY `fk_episode_season` (`fk_episode_season`);

--
-- Indeksy dla tabeli `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `fk_film_series` (`fk_film_series`);

--
-- Indeksy dla tabeli `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indeksy dla tabeli `genres_show`
--
ALTER TABLE `genres_show`
  ADD PRIMARY KEY (`genre_show_id`),
  ADD KEY `fk_genre_film` (`fk_genre_film`),
  ADD KEY `fk_genre_serial` (`fk_genre_serial`),
  ADD KEY `fk_genre_genre` (`fk_genre_genre`);

--
-- Indeksy dla tabeli `images_episode`
--
ALTER TABLE `images_episode`
  ADD PRIMARY KEY (`image_id`);

--
-- Indeksy dla tabeli `images_show`
--
ALTER TABLE `images_show`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `fk_image_film` (`fk_image_film`);

--
-- Indeksy dla tabeli `premiers`
--
ALTER TABLE `premiers`
  ADD PRIMARY KEY (`premier_id`),
  ADD KEY `fk_premier_film` (`fk_premier_film`),
  ADD KEY `fk_premier_serial` (`fk_premier_serial`),
  ADD KEY `fk_premier_country` (`fk_premier_country`);

--
-- Indeksy dla tabeli `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`production_id`),
  ADD KEY `fk_production_country` (`fk_production_country`),
  ADD KEY `fk_production_film` (`fk_production_film`),
  ADD KEY `fk_production_serial` (`fk_production_serial`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `fk_role_character` (`fk_role_character`),
  ADD KEY `fk_role_film` (`fk_role_film`),
  ADD KEY `fk_role_serial` (`fk_role_serial`),
  ADD KEY `fk_role_actor` (`fk_role_actor`);

--
-- Indeksy dla tabeli `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`season_id`),
  ADD KEY `fk_season_serial` (`fk_season_serial`);

--
-- Indeksy dla tabeli `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`seriaL_id`),
  ADD KEY `fk_serial_series` (`fk_serial_series`);

--
-- Indeksy dla tabeli `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`series_id`);

--
-- Indeksy dla tabeli `show_like`
--
ALTER TABLE `show_like`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `fk_like_film` (`fk_like_film`),
  ADD KEY `fk_like_serial` (`fk_like_serial`),
  ADD KEY `fk_like_user` (`fk_like_user`);

--
-- Indeksy dla tabeli `show_rate`
--
ALTER TABLE `show_rate`
  ADD PRIMARY KEY (`id_rate`),
  ADD KEY `fk_rate_serial` (`fk_rate_serial`),
  ADD KEY `fk_rate_film` (`fk_rate_film`),
  ADD KEY `fk_rate_user` (`fk_rate_user`);

--
-- Indeksy dla tabeli `show_watch`
--
ALTER TABLE `show_watch`
  ADD PRIMARY KEY (`id_watch`),
  ADD KEY `fk_watch_user` (`fk_watch_user`),
  ADD KEY `fk_watch_film` (`fk_watch_film`),
  ADD KEY `fk_watch_serial` (`fk_watch_serial`);

--
-- Indeksy dla tabeli `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studio_id`);

--
-- Indeksy dla tabeli `studio_show`
--
ALTER TABLE `studio_show`
  ADD PRIMARY KEY (`studio_show_id`),
  ADD KEY `fk_studio_studio` (`fk_studio_studio`),
  ADD KEY `fk_studio_film` (`fk_studio_film`),
  ADD KEY `fk_studio_serial` (`fk_studio_serial`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_type` (`fk_user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `actor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `articles_category`
--
ALTER TABLE `articles_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `character_show`
--
ALTER TABLE `character_show`
  MODIFY `character_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genres_show`
--
ALTER TABLE `genres_show`
  MODIFY `genre_show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images_episode`
--
ALTER TABLE `images_episode`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images_show`
--
ALTER TABLE `images_show`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `premiers`
--
ALTER TABLE `premiers`
  MODIFY `premier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `season_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serials`
--
ALTER TABLE `serials`
  MODIFY `seriaL_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `show_like`
--
ALTER TABLE `show_like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `show_rate`
--
ALTER TABLE `show_rate`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `show_watch`
--
ALTER TABLE `show_watch`
  MODIFY `id_watch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studio_show`
--
ALTER TABLE `studio_show`
  MODIFY `studio_show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actors`
--
ALTER TABLE `actors`
  ADD CONSTRAINT `fk_actor_country` FOREIGN KEY (`fk_actor_country`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_article_category` FOREIGN KEY (`fk_article_category`) REFERENCES `articles_category` (`category_id`),
  ADD CONSTRAINT `fk_article_film` FOREIGN KEY (`fk_article_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_article_serial` FOREIGN KEY (`fk_article_serial`) REFERENCES `serials` (`seriaL_id`);

--
-- Constraints for table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `fk_episode_season` FOREIGN KEY (`fk_episode_season`) REFERENCES `seasons` (`season_id`);

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `fk_film_series` FOREIGN KEY (`fk_film_series`) REFERENCES `series` (`series_id`);

--
-- Constraints for table `genres_show`
--
ALTER TABLE `genres_show`
  ADD CONSTRAINT `fk_genre_film` FOREIGN KEY (`fk_genre_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_genre_genre` FOREIGN KEY (`fk_genre_genre`) REFERENCES `genres` (`genre_id`),
  ADD CONSTRAINT `fk_genre_serial` FOREIGN KEY (`fk_genre_serial`) REFERENCES `serials` (`seriaL_id`);

--
-- Constraints for table `images_show`
--
ALTER TABLE `images_show`
  ADD CONSTRAINT `fk_image_film` FOREIGN KEY (`fk_image_film`) REFERENCES `films` (`film_id`);

--
-- Constraints for table `premiers`
--
ALTER TABLE `premiers`
  ADD CONSTRAINT `fk_premier_country` FOREIGN KEY (`fk_premier_country`) REFERENCES `countries` (`country_id`),
  ADD CONSTRAINT `fk_premier_film` FOREIGN KEY (`fk_premier_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_premier_serial` FOREIGN KEY (`fk_premier_serial`) REFERENCES `serials` (`seriaL_id`);

--
-- Constraints for table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `fk_production_country` FOREIGN KEY (`fk_production_country`) REFERENCES `countries` (`country_id`),
  ADD CONSTRAINT `fk_production_film` FOREIGN KEY (`fk_production_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_production_serial` FOREIGN KEY (`fk_production_serial`) REFERENCES `serials` (`seriaL_id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_role_actor` FOREIGN KEY (`fk_role_actor`) REFERENCES `actors` (`actor_id`),
  ADD CONSTRAINT `fk_role_character` FOREIGN KEY (`fk_role_character`) REFERENCES `character_show` (`character_id`),
  ADD CONSTRAINT `fk_role_film` FOREIGN KEY (`fk_role_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_role_serial` FOREIGN KEY (`fk_role_serial`) REFERENCES `serials` (`seriaL_id`);

--
-- Constraints for table `seasons`
--
ALTER TABLE `seasons`
  ADD CONSTRAINT `fk_season_serial` FOREIGN KEY (`fk_season_serial`) REFERENCES `serials` (`seriaL_id`);

--
-- Constraints for table `serials`
--
ALTER TABLE `serials`
  ADD CONSTRAINT `fk_serial_series` FOREIGN KEY (`fk_serial_series`) REFERENCES `series` (`series_id`);

--
-- Constraints for table `show_like`
--
ALTER TABLE `show_like`
  ADD CONSTRAINT `fk_like_film` FOREIGN KEY (`fk_like_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_like_serial` FOREIGN KEY (`fk_like_serial`) REFERENCES `serials` (`seriaL_id`),
  ADD CONSTRAINT `fk_like_user` FOREIGN KEY (`fk_like_user`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `show_rate`
--
ALTER TABLE `show_rate`
  ADD CONSTRAINT `fk_rate_film` FOREIGN KEY (`fk_rate_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_rate_serial` FOREIGN KEY (`fk_rate_serial`) REFERENCES `serials` (`seriaL_id`),
  ADD CONSTRAINT `fk_rate_user` FOREIGN KEY (`fk_rate_user`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `show_watch`
--
ALTER TABLE `show_watch`
  ADD CONSTRAINT `fk_watch_film` FOREIGN KEY (`fk_watch_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_watch_serial` FOREIGN KEY (`fk_watch_serial`) REFERENCES `serials` (`seriaL_id`),
  ADD CONSTRAINT `fk_watch_user` FOREIGN KEY (`fk_watch_user`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `studio_show`
--
ALTER TABLE `studio_show`
  ADD CONSTRAINT `fk_studio_film` FOREIGN KEY (`fk_studio_film`) REFERENCES `films` (`film_id`),
  ADD CONSTRAINT `fk_studio_serial` FOREIGN KEY (`fk_studio_serial`) REFERENCES `serials` (`seriaL_id`),
  ADD CONSTRAINT `fk_studio_studio` FOREIGN KEY (`fk_studio_studio`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_type` FOREIGN KEY (`fk_user_type`) REFERENCES `account_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
