-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Sty 2021, 13:37
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `budzet`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszty`
--

CREATE TABLE `koszty` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `typ` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `kwota` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `koszty`
--

INSERT INTO `koszty` (`id`, `nazwa`, `typ`, `kwota`, `email`, `data`) VALUES
(4, 'Wycieczka', 'inne', 400, 'a@a', '2021-01-17'),
(5, 'Piwo', 'jedzenie', 15, 'a@a', '2021-01-17'),
(6, 'PaLiwo', 'wydatki', 200, 'a@a', '2021-01-17'),
(7, 'Czynsz', 'wydatki', 700, 'b@b', '2021-01-17'),
(8, 'Naprawa', 'inne', 15, 'b@b', '2021-01-17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `birthday` date NOT NULL,
  `budget` int(11) NOT NULL,
  `dependents` int(11) NOT NULL,
  `expenses` int(11) NOT NULL,
  `goal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `pass`, `birthday`, `budget`, `dependents`, `expenses`, `goal`) VALUES
(1, 'Zenek', 'Koles', 'a@a', '$2y$10$lt.QrWsiUih1t6TPovE3feL9KqYU0aMa6PMA8xbkmHd', '2020-01-13', 2000, 2, 800, 200),
(4, 'antek', 'ziom', 'b@b', '$2y$10$WIXEtv.CgYz478PqXlYJSO4dYiVik7oJSnALvShvvJQ', '0000-00-00', 5000, 3, 1500, 2000);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `koszty`
--
ALTER TABLE `koszty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `koszty`
--
ALTER TABLE `koszty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
