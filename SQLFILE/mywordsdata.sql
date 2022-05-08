-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2020, 12:23:59
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mywordsdata`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `user_img` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_img`) VALUES
(1, 'mert', 'mertgaygusuz@hotmail.com', '123', 'indir.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `term` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `defination` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sentence` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `words_id` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `words`
--

INSERT INTO `words` (`id`, `title`, `term`, `defination`, `sentence`, `words_id`, `img`) VALUES
(1, 'Animals', 'Tiger', 'Kaplan', ' Tiger strolling through the forest.', '1', 'tiger (2).jpg'),
(2, 'Fruits', 'Orange', 'Portakal', ' I bought Orange from the market.', '1', 'images.jpg'),
(3, 'Jobs', 'Doctor', 'Doktor', 'tomorrow I will go to the Doctor', '1', 'doctor-character-background_1270-84.jpg'),
(4, 'Colors', 'Red', 'Kırmızı', 'My favorite color is Red', '1', '1200px-Red_flag.svg.png'),
(5, 'Jobs', 'Carpenter', 'Marangoz', 'I became a Carpenter', '1', 'carpenter-png-vector-free-carpenter-vectorpng-transparent-carpenter-png-650_651.png'),
(6, 'Objects', ' Scissors', 'Makas', 'Where did you put the Scissors?', '1', 'scissors-vector-collection-design_1096-889.jpg'),
(7, 'Animals', 'Rabbit', 'Tavşan', 'Rabbit eats carrots', '1', 'images (1).jpg'),
(8, ' Vegetables', 'Tomato', 'Domates', 'Tomato was very sour', '1', 'indir.jpg'),
(9, 'Cities', 'London', 'Londra', ' we will travel to London tomorrow', '1', 'london.jpg'),
(11, 'Colors', 'Green', 'Yeşil', ' The trees were Green', '1', '800px-auto_racing_green-svg.png'),
(12, 'Animals', 'Goat', 'Keçi', 'Goats climbed the mountain', '1', 'images (2).jpg'),
(13, 'Objects', 'Cabinet', 'Dolap', ' we bought a new Cabinet', '1', 'documents-cabinet-files-archive-storage-box_33099-829.jpg'),
(14, 'Fruits', 'Watermelon', 'Karpuz', ' Watermelon is a very sweet fruit', '1', 'shutterstock_735185545_1_1_1562216950-400x400.jpg'),
(15, ' Countries', 'England', 'İngiltere', ' England is located in Europe', '1', '1200px-Flag_of_England.svg.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
