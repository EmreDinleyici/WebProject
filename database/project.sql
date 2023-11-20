-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Oca 2023, 10:41:52
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname`, `email`, `phone`, `message`, `message_time`) VALUES
(1, 'Emre', 'Dinleyici', 'emre@gmail.com', '5375481206', 'This is first contact-us page message', '2023-01-01 08:03:50'),
(2, 'Mehmet', 'Karahanlı', 'baron@gmail.com', '5361254045', 'thank you for this wonderful site.', '2023-01-01 09:07:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `deliver` varchar(20) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `donation_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `donations`
--

INSERT INTO `donations` (`id`, `name`, `surname`, `phone`, `email`, `city`, `deliver`, `itemName`, `location`, `message`, `donation_time`) VALUES
(1, 'Mehmet', 'Karahanlı', '5361254045', 'baron@gmail.com', '27', 'MD', 'fridge', './uploads/63b14dfcd82068.46550964.png', 'I hope it goes to someone who needs it', '2023-01-01 09:10:20'),
(2, 'Emre', 'Dinleyici', '5375481206', 'emre@gmail.com', '80', 'personally', 'clock', './uploads/63b14eb38f9884.08639528.png', 'This wonderful clock', '2023-01-01 09:13:23'),
(3, 'Tony', 'Montana', '8506985214', 'tony.montana@outlook.com', '34', 'MD', 't-shirt', './uploads/63b15050b66903.26707259.jpg', 'a t-shirt in good condition', '2023-01-01 09:20:16'),
(4, 'Polat', 'Alemdar', '5345897451', 'polat.alemdar@hotmail.com', '6', 'personally', 'polat&#039;s shoes', './uploads/63b152ca2eeb68.56068657.jpg', 'Polat Alemdar&#039;s shoes', '2023-01-01 09:30:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `needdonation`
--

CREATE TABLE `needdonation` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `item` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `needdonation`
--

INSERT INTO `needdonation` (`id`, `name`, `surname`, `phone`, `email`, `item`, `city`, `address`, `salary`, `message`, `message_time`) VALUES
(1, 'Ayşe', 'Yılmaz', '4587410236', 'ayse@hotmail.com', 'shoes', '48', 'shoes', 5000, 'I need this', '2023-01-01 09:23:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_registration` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_enter` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `gender`, `email`, `password`, `first_registration`, `last_enter`) VALUES
(1, 'Admin', 'Admin', '0000000000', 'Male', 'admin@gmail.com', 'DanceMonkey.123', '2022-12-25 16:14:42', '2022-12-25 16:15:23'),
(2, 'Emre', 'Dinleyici', '5375481206', 'Male', 'emre@gmail.com', 'Emre.123', '2022-12-25 16:16:13', '2023-01-01 09:12:49'),
(3, 'Ayşe', 'Yılmaz', '4587410236', 'Female', 'ayse@hotmail.com', 'Esya321', '2023-01-01 08:47:42', '2023-01-01 09:22:23'),
(4, 'Polat', 'Alemdar', '5345897451', 'Male', 'polat.alemdar@hotmail.com', 'Vadi.34', '2023-01-01 08:54:32', '2023-01-01 09:32:18'),
(5, 'Mehmet', 'Karahanlı', '5361254045', 'Male', 'baron@gmail.com', 'Baron.123', '2023-01-01 08:56:31', '2023-01-01 09:06:30'),
(6, 'Eyşan', 'Tezcan', '5551240203', 'Female', 'eysan@yahoo.com', 'Eyşanlar.123', '2023-01-01 08:57:36', '2023-01-01 08:57:36'),
(7, 'Margot', 'Robbie', '8501479658', 'Female', 'margot.robbie@gmail.com', 'Margot.789', '2023-01-01 08:58:58', '2023-01-01 08:58:58'),
(8, 'Tony', 'Montana', '8506985214', 'Male', 'tony.montana@outlook.com', 'SayHello', '2023-01-01 09:00:28', '2023-01-01 09:18:58');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `needdonation`
--
ALTER TABLE `needdonation`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `needdonation`
--
ALTER TABLE `needdonation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
