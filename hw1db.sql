-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2023 at 01:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw1db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(11) DEFAULT NULL,
  `product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `descrizione`
--

CREATE TABLE `descrizione` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `descr` varchar(4000) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `descrizione`
--

INSERT INTO `descrizione` (`id`, `type`, `descr`, `picture`) VALUES
(1, 'Hollow', 'Hollow body guitars are a specific type of guitar that feature a hollow body or soundbox. This design allows for a unique and warm tone that is distinct from solid body guitars. The sound of hollow body guitars is often described as full and resonant, making them a popular choice for jazz and blues musicians.', 'hollow-body-box1.jpeg'),
(2, 'Hollow', 'One of the main benefits of playing a hollow body guitar is its versatility. These guitars can be used for a wide range of music genres including jazz, blues, rock, and even country. Hollow body guitars are known for their clean tone and are often favored by guitarists who prefer a more organic sound.', 'hollow-body-box2.jpeg'),
(3, 'Hollow', 'They are typically larger in size than solid body guitars. This larger body size can make them more comfortable to play for some musicians, although it can also make them more difficult to maneuver. Additionally, hollow body guitars often have arched tops and f-holes like a violin, which adds to their unique aesthetic appeal.', 'hollow-body-box3.jpeg'),
(4, 'SemiHollow', 'Semi-hollow body guitars are a popular choice for musicians looking for a versatile instrument that can be used in a variety of musical styles. These guitars have a sound that is somewhere between a solid body and a hollow body guitar, offering a unique tonality that many players appreciate.', 'semi-hollow-body-box1.jpeg'),
(5, 'SemiHollow', 'One of the defining features of a semi-hollow body guitar is the presence of a center block running through the body of the guitar. This block helps to reduce feedback and adds sustain to the instrument, while still allowing the guitar to resonate and produce rich, warm tones.', 'semi-hollow-body-box2.jpeg'),
(6, 'SemiHollow', 'Another advantage of semi-hollow body guitars is their versatility. They can be used for a wide range of musical styles, from blues to rock to jazz. Additionally, semi-hollow body guitars are relatively lightweight, making them comfortable to play for extended periods of time.', 'semi-hollow-body-box3.jpeg'),
(7, 'electric', 'An electric solid body guitar is a popular instrument among musicians for its versatility in sound and playability. These guitars have a solid body that does not have any sound holes, which makes them less sensitive to feedback and reduces unwanted noise. This also allows the guitar to be played at high volumes without distortion.', 'electric-box1.jpeg'),
(8, 'electric', 'Solid body guitars come in a variety of shapes and sizes, with different materials being used to construct the body. Popular woods used for solid body guitars include alder, ash, and mahogany, which all have different tonal qualities. The neck is usually made of maple, and the fretboard can be made of rosewood, ebony, or maple.', 'electric-box2.jpeg'),
(9, 'electric', 'Electric solid body guitars have magnetic pickups that convert the vibrations of the strings into an electrical signal, which can then be amplified and manipulated with various effects pedals. The pickup configuration can vary between guitars, with single-coil pickups providing a bright and clear tone, and humbuckers producing a thicker and more powerful sound.', 'electric-box3.jpeg'),
(10, 'acoustic', 'Acoustic guitars are among the most popular musical instruments in the world. With their unique sound and versatility, acoustic guitars are ideal for a variety of musical genres, from folk and country to rock and pop. These guitars are known for their warm, natural tone and rich resonance, making them a favorite among both beginner and seasoned guitar players.', 'acoustic-box1.jpeg'),
(11, 'acoustic', 'One of the most striking features of acoustic guitars is their unique construction. Unlike their electric counterparts, which require amplification to produce sound, acoustic guitars rely solely on the body of the instrument to project sound. This is achieved through the vibration of the strings, which resonate through the guitar`s hollow body and produce a rich, natural tone that is both powerful and nuanced.', 'acoustic-box2.jpeg'),
(12, 'acoustic', 'Acoustic guitars come in a range of shapes and sizes, each designed to suit different playing styles and musical preferences. Some of the most popular styles include dreadnoughts, jumbos, and parlors, each of which offers a unique sound and feel. Whether you`re a beginner or a seasoned guitarist, an acoustic guitar is an excellent choice for anyone looking to explore the world of music and express themselves through this timeless instrument.', 'acoustic-box3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `guitars`
--

CREATE TABLE `guitars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guitars`
--

INSERT INTO `guitars` (`id`, `name`, `type`, `picture`) VALUES
(1, 'Gretsch G5410T', 'Hollow', 'hollow1.jpeg'),
(2, 'Harley Benton BigTone', 'Hollow', 'hollow2.jpeg'),
(3, 'Larry Carlton H7 STR', 'Hollow', 'hollow3.jpeg'),
(4, 'Guild X-175B Manhattan', 'Hollow', 'hollow4.jpeg'),
(5, 'Heritage Guitar H-575 OSB', 'Hollow', 'hollow5.jpeg'),
(6, 'Larry Carlton H7 WH', 'Hollow', 'hollow6.jpeg'),
(7, 'Gretsch G6196T-59VS', 'Hollow', 'hollow7.jpeg'),
(8, 'Epiphone ES-335', 'Hollow', 'hollow8.jpeg'),
(9, 'Gibson ES-339 60s', 'Hollow', 'hollow9.jpeg'),
(10, 'Duesenberg Starplayer III', 'Hollow', 'hollow10.jpeg'),
(11, 'Harley Benton TE-69TL', 'SemiHollow', 'semihollow1.jpeg'),
(12, 'Epiphone Jim James ES-335', 'SemiHollow', 'semihollow2.jpeg'),
(13, 'Squier CV 60s Thinline', 'SemiHollow', 'semihollow3.jpeg'),
(14, 'Gretsch G5655T-QM Electromatic', 'SemiHollow', 'semihollow4.jpeg'),
(15, 'Squier CV Starcaster', 'SemiHollow', 'semihollow5.jpeg'),
(16, 'DAngelico Excel', 'SemiHollow', 'semihollow6.jpeg'),
(17, 'Gibson CS-356 Ebony ', 'SemiHollow', 'semihollow7.jpeg'),
(18, 'PRS SE Custom 22 Semi-Hollow', 'SemiHollow', 'semihollow8.jpeg'),
(19, 'Harley Benton Aeolus Bengal Flame', 'SemiHollow', 'semihollow9.jpeg'),
(20, 'Chapman Guitars ML3 Pro', 'SemiHollow', 'semihollow10.jpeg'),
(21, 'Epiphone Matt Heafy LP', 'electric', 'electric1.jpeg'),
(22, 'Gibson LP 57 Black Beauty VOS', 'electric', 'electric2.jpeg'),
(23, 'Fender AM Pro II Strat', 'electric', 'electric3.jpeg'),
(24, 'Harley Benton ST-20HSS', 'electric', 'electric4.jpeg'),
(25, 'Epiphone Slash Les Paul', 'electric', 'electric5.jpeg'),
(26, 'Squier Jazzmaster 40th Anniv', 'electric', 'electric6.jpeg'),
(27, 'Gibson SG Standard', 'electric', 'electric7.jpeg'),
(28, 'PRS SE Custom 24/08 VS', 'electric', 'electric8.jpeg'),
(29, 'Evh Frankie Striped MN Relic', 'electric', 'electric9.jpeg'),
(30, 'Gretsch G5210-P90', 'electric', 'electric10.jpeg'),
(31, 'Martin Guitars D-28', 'acoustic', 'acoustic1.jpeg'),
(32, 'Taylor 724ce', 'acoustic', 'acoustic2.jpeg'),
(33, 'Gibson Hummingbird Standard', 'acoustic', 'acoustic3.jpeg'),
(34, 'Furch Red Masters Choice', 'acoustic', 'acoustic4.jpeg'),
(35, 'Cole Clark AN3EC-RDBL', 'acoustic', 'acoustic5.jpeg'),
(36, 'Lakewood A-30', 'acoustic', 'acoustic6.jpeg'),
(37, 'Harley Benton CLA-15M', 'acoustic', 'acoustic7.jpeg'),
(38, 'Cordoba Fusion 12 Rose II', 'acoustic', 'acoustic8.jpeg'),
(39, 'Cort Core-OC ABW', 'acoustic', 'acoustic9.jpeg'),
(40, 'Fender Acoustasonic Player', 'acoustic', 'acoustic10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `type`, `title`, `picture`, `link`) VALUES
(1, 'home', 'Top 5', 'music-genres.jpeg', 'top-5.php'),
(2, 'home', 'Quiz', 'background.png', 'quiz.php'),
(3, 'home', 'Our Story', 'history.jpeg', 'history.php'),
(1, 'home', 'Top 5', 'music-genres.jpeg', 'top-5.php'),
(2, 'home', 'Quiz', 'background.png', 'quiz.php'),
(3, 'home', 'Our Story', 'history.jpeg', 'history.php');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `prezzo` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `type`, `prezzo`, `nome`, `picture`) VALUES
(1, 'T-Shirts', 'Starting from 19.99€', 'primai', 'maglietta1_0.jpeg'),
(2, 'Covers', 'Starting from 14.99€', 'primai', 'cover1.jpeg'),
(3, 'Mugs', 'Starting from 9.99€', 'primai', 'tazza1.jpg'),
(4, 'Posters', 'Starting from 9.99€', 'primai', 'poster1.jpg'),
(5, '', '', 'secondai', 'maglietta.jpeg'),
(6, '', '', 'secondai', 'maglietta1_0.jpg'),
(7, '', '', 'secondai', 'maglietta2_1.jpg'),
(8, '', '', 'secondai', 'maglietta2_2.jpeg'),
(9, '', '', 'secondai', 'maglietta2_3.jpeg'),
(10, '', '', 'secondai', 'maglietta1_0.jpeg'),
(11, '', '', 'secondai', 'cover1.jpeg'),
(12, '', '', 'secondai', 'cover2.jpg'),
(13, '', '', 'secondai', 'cover3.jpg'),
(14, '', '', 'secondai', 'tazza1.jpg'),
(15, '', '', 'secondai', 'tazza2.jpg'),
(16, '', '', 'secondai', 'tazza3.jpg'),
(17, '', '', 'secondai', 'poster1.jpg'),
(18, '', '', 'secondai', 'poster2.jpg'),
(19, '', '', 'secondai', 'poster3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `user` int(11) NOT NULL,
  `guitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`user`, `guitar`) VALUES
(1, 1),
(1, 3),
(1, 10),
(1, 5),
(1, 17),
(1, 22),
(1, 25),
(1, 34),
(2, 1),
(2, 4),
(2, 3),
(2, 13),
(2, 25),
(2, 31),
(3, 1),
(3, 3),
(3, 9),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `storia`
--

CREATE TABLE `storia` (
  `id` int(11) NOT NULL,
  `anno` int(11) DEFAULT NULL,
  `testo` varchar(5000) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storia`
--

INSERT INTO `storia` (`id`, `anno`, `testo`, `picture`, `type`) VALUES
(1, 2017, 'I discover the world of music and more specifically that of the electric guitar and I get passionate about it very quickly. I also start studying it as a self-taught, buying my first Epiphone electric guitar coupled with a very classic Marshall. it`s complicated but I`m totally intent on making it, and I start studying the first chords and first scales, coming to play my first complete song: Sweet Child`o Mine by Guns n Roses.', '20210327_224346.jpg', 'story'),
(2, 2022, 'I deepen my musical knowledge, perhaps still too immature, and continue to practice the guitar. it is in this period that I discover a song in particular: \"The Spirit Carries On\" by Dream Theater. the music and above all the lyrics hit me so much that I made the decision to dedicate it my first tattoo. I get very close to more progressive music, starting to listen to King Crimson and above all Pink Floyd with a more attentive ear.', '20220415_154224.jpg', 'story'),
(3, 2023, 'it`s been practically 6 years since my journey began, and the passion has remained the same as when I was just 16, and even my faithful guitar continues to accompany me in all my sessions. it is precisely in these months that while learning HTML, CSS and Javascript in parallel that I decide to create (UN)Real Music, a website for people like me who are passionate about music.', '20221228_231541.jpg', 'story');

-- --------------------------------------------------------

--
-- Table structure for table `top5`
--

CREATE TABLE `top5` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `punteggio` varchar(255) DEFAULT NULL,
  `descr` varchar(6000) DEFAULT NULL,
  `opinione` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `top5`
--

INSERT INTO `top5` (`id`, `nome`, `punteggio`, `descr`, `opinione`, `picture`, `type`) VALUES
(1, 'pop', 'score: 9', 'One of the most engaging and popular musical genres in the world. Thanks to its catchy melodies and simple but meaningful lyrics, pop music it is able to touch the deepest chords of our soul and make us dance and sing lightheartedly. Whether you`re looking for an upbeat song to listen to in the car, a sweet melody to relax, or a tune whether it makes you jump and move your body, pop music always has something to suit your needs. Also, thanks to its ability to reach a very large audience, pop music is often associated with moments happy and sharing, such as parties, evenings with friends or live concerts.', 'engaging', 'img1.jpg', 'top5'),
(2, 'rock', 'score 8', 'Musical genre that has been able to conquer and still conquers the hearts of thousands of people all over the world. With its electric guitars, powerful drums and the voices of its singers, rock music is capable of shaking the soul and make the whole body vibrate. Rock was born in the 50s as an evolution of blues and rock n roll, but yes rapidly develops into a wide range of sub-genres, including psychedelic rock, punk rock, grunge and alternative rock. Thanks to its ability to continually evolve and reinvent itself, rock music has become an icon of youth culture and an inspiration for many artists of different genres.', 'energic', 'img2.jpg', 'top5'),
(3, '90`s music', 'score: 8', 'The 1990s was one of the most important and influential eras in the history of modern music. In this decade, numerous musical genres have developed, from grunge to britpop, from rap to alternative rock, creating an atmosphere of great ferment and innovation. The songs of the 90s are characterized by rousing melodies, deep and innovative lyrics and rhythms which often mix acoustic and electronic elements. Many artists of this period have become icons of pop culture, such as Nirvana, Oasis, Spice Girls, Backstreet Boys and Britney Spears. It is absolutely no wonder that, despite the fact that they have moved on thirty years old, is still able to make the youngest fall in love and arouse beautiful memories in the grown-ups.', 'evocative', 'img3.jpg', 'top5'),
(4, '80`s music', 'score: 7.5', 'The magical 80s, a golden age for music, which saw the birth of numerous styles and trends who have left an indelible mark on the world`s musical culture. This period was marked by great innovation technological, with the spread of digital synthesis and drum machines, which have allowed the creation of electronic sounds that have marked the era. The music of the 80s was very varied and diverse, ranging from pop to rock, from dance to new wave. Many artists have been able to create unforgettable songs, such as Michael Jackson, Madonna, Queen, Duran Duran, Prince and many others. The songs of the 80s are characterized by their driving rhythms, catchy melodies and lyrics often inspired by pop culture and to technology.', 'timeless', 'img4.jpg', 'top5'),
(5, 'soundtracks', 'score: 7', 'We put master Ennio Morricone as an image for this category, and is absolutely no coincidence. Soundtracks are the cornerstone of movies, TV series and video games and create a unique atmosphere and unforgettable. Thanks to the soundtracks, the images come to life and the emotions intensify, making the experience of use even more engaging and suggestive. Soundtracks are often composed of original songs, created specifically for the work to which are associated with, or from pre-existing pieces selected for their emotional or symbolic value. Many soundtracks have become famous a world-class, such as those of Star Wars, Titanic, Rocky and many others, and have become symbols of an era or a genre cinematic.', 'undying', 'img5.jpg', 'top5');

-- --------------------------------------------------------

--
-- Table structure for table `tracceAudio`
--

CREATE TABLE `tracceAudio` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `trace` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tracceAudio`
--

INSERT INTO `tracceAudio` (`id`, `type`, `trace`, `name`) VALUES
(1, 'Hollow', 'hollow-blues.wav', 'Blues'),
(2, 'Hollow', 'hollow-funky.wav', 'Funky'),
(3, 'Hollow', 'hollow-hiphop.wav', 'Hip-Hop'),
(4, 'SemiHollow', 'semihollow-funky.wav', 'Funky'),
(5, 'SemiHollow', 'semihollow-jazz.wav', 'Jazz'),
(6, 'SemiHollow', 'semihollow-soul.wav', 'Soul'),
(7, 'Solid', 'electric-electrofunk.wav', 'Electro-Funk'),
(8, 'Solid', 'electric-funky.wav', 'Funky'),
(9, 'Solid', 'electric-wahwah.wav', 'WahWah'),
(10, 'Acoustic', 'acoustic-arp.wav', 'Arp'),
(11, 'Acoustic', 'acoustic-funky.wav', 'Funky'),
(12, 'Acoustic', 'acoustic-strum.wav', 'Strum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `propic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `surname`, `propic`) VALUES
(1, 'Raksam21', '$2y$10$gHdQBr4eVod8inIsjyMxIua07W.5nOnJa7iW3NmoY7OXPOIqTW4P6', 'scarfvit@gmail.com', 'Vittorio', 'Scarfalloto', './assets/6470f5d43b3177.48751051.png'),
(2, 'gina', '$2y$10$xOwhaBIP.nJUUVY.jZwvoeSfLhUhlVsjzVIhXCrERvwP2m8U6fFsC', '123@gmail.com', 'gina', 'Ernesti', './assets/6470fa4751e0a8.16812747.png'),
(3, 'Mario', '$2y$10$Y7YoRr7aZNTeoBLh.MBaUuOpOe5ZHrdcbDTbBrIY6kG5zfeUxL6S2', 'mario@gmail.com', 'Mario', 'Rossi', './assets/6471dab1bbaf82.67770280.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guitars`
--
ALTER TABLE `guitars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracceAudio`
--
ALTER TABLE `tracceAudio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guitars`
--
ALTER TABLE `guitars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
