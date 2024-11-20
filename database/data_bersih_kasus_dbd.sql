-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 09:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_cilandak`
--

CREATE TABLE `kecamatan_cilandak` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_cilandak`
--

INSERT INTO `kecamatan_cilandak` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'gandaria selatan', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'cilandak barat', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'lebak bulus', 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'cipete selatan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'pondok labu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_jagakarsa`
--

CREATE TABLE `kecamatan_jagakarsa` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_jagakarsa`
--

INSERT INTO `kecamatan_jagakarsa` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'jaga karsa', 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'tanjung barat', 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'lenteng agung', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'cipedak', 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'ciganjur', 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'srenseng sawah', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_kebayoran_baru`
--

CREATE TABLE `kecamatan_kebayoran_baru` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_kebayoran_baru`
--

INSERT INTO `kecamatan_kebayoran_baru` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'cipete utara', 9, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'gunung', 1, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'gandaria utara', 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'petogogan', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'rawa barat', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'kramat pela', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'senayan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'selong', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'melawai', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'pulo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_kebayoran_lama`
--

CREATE TABLE `kecamatan_kebayoran_lama` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_kebayoran_lama`
--

INSERT INTO `kecamatan_kebayoran_lama` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'kebayoran lama selatan', 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'kebayoran lama utara', 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'cipulir', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'grogol selatan', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'grogol utara', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'pondok pinang', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_mampang_prapatan`
--

CREATE TABLE `kecamatan_mampang_prapatan` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_mampang_prapatan`
--

INSERT INTO `kecamatan_mampang_prapatan` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'bangka', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'kuningan barat', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'pela mampang', 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'mampang prapatan', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'tegal parang', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_pancoran`
--

CREATE TABLE `kecamatan_pancoran` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(10) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_pancoran`
--

INSERT INTO `kecamatan_pancoran` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'duren tiga', 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'kali bata', 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'pancoran', 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'rawa jati', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'pangadegan', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'cikoko', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_pasar_minggu`
--

CREATE TABLE `kecamatan_pasar_minggu` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_pasar_minggu`
--

INSERT INTO `kecamatan_pasar_minggu` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'cilandak timur', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'ragunan', 4, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'pejaten timur', 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'jati padang', 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'kebagusan', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'pejaten barat', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'pasar minggu', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_pesanggrahan`
--

CREATE TABLE `kecamatan_pesanggrahan` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(10) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_pesanggrahan`
--

INSERT INTO `kecamatan_pesanggrahan` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'pesanggrahan', 11, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'bintaro', 11, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'ulujami', 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'petukangan selatan', 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'petukangan utara', 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_setia_budi`
--

CREATE TABLE `kecamatan_setia_budi` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_setia_budi`
--

INSERT INTO `kecamatan_setia_budi` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'pasar manggis', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'karet semanggi', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'menteng atas', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'karet kuningan', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'kuningan timur', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'setia budi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'guntur', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'karet', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_tebet`
--

CREATE TABLE `kecamatan_tebet` (
  `id` int(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jan` int(30) NOT NULL,
  `feb` int(30) NOT NULL,
  `maret` int(30) NOT NULL,
  `april` int(30) NOT NULL,
  `mei` int(30) NOT NULL,
  `juni` int(30) NOT NULL,
  `juli` int(30) NOT NULL,
  `ags` int(30) NOT NULL,
  `sept` int(30) NOT NULL,
  `okt` int(30) NOT NULL,
  `nov` int(30) NOT NULL,
  `des` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan_tebet`
--

INSERT INTO `kecamatan_tebet` (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) VALUES
(1, 'menteng dalam', 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'kebon baru', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'bukit duri', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'manggarai selatan', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'tebet barat', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'tebet timur', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'manggarai', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `katasandi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `katasandi`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan_cilandak`
--
ALTER TABLE `kecamatan_cilandak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_jagakarsa`
--
ALTER TABLE `kecamatan_jagakarsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_kebayoran_baru`
--
ALTER TABLE `kecamatan_kebayoran_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_kebayoran_lama`
--
ALTER TABLE `kecamatan_kebayoran_lama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_mampang_prapatan`
--
ALTER TABLE `kecamatan_mampang_prapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_pancoran`
--
ALTER TABLE `kecamatan_pancoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_pasar_minggu`
--
ALTER TABLE `kecamatan_pasar_minggu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_pesanggrahan`
--
ALTER TABLE `kecamatan_pesanggrahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_setia_budi`
--
ALTER TABLE `kecamatan_setia_budi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan_tebet`
--
ALTER TABLE `kecamatan_tebet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
