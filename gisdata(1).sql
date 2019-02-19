-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 02:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gisdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(10) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `longi` double NOT NULL,
  `latti` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `desa`, `id_kecamatan`, `kecamatan`, `longi`, `latti`) VALUES
(1, 'Bangkiling', 1, 'Banua Lawas', 115.257591, -2.326109),
(2, 'Bangkiling Raya', 1, 'Banua Lawas', 115.254385, -2.331912),
(3, 'Banua Lawas', 1, 'Banua Lawas', 115.275505, -2.319675),
(4, 'Banua Rantau', 1, 'Banua Lawas', 115.276636, -2.301119),
(5, 'Batang Banyu', 1, 'Banua Lawas', 115.269186, -2.349322),
(6, 'Bungin', 1, 'Banua Lawas', 115.276574, -2.329413),
(7, 'Habau', 1, 'Banua Lawas', 115.26647, -2.297535),
(8, 'Habau Hulu', 1, 'Banua Lawas', 115.260241, -2.279683),
(9, 'Hapalah', 1, 'Banua Lawas', 115.211702, -2.330059),
(10, 'Hariang', 1, 'Banua Lawas', 115.289736, -2.327968),
(11, 'Pematang', 1, 'Banua Lawas', 115.290908, -2.339301),
(12, 'Purai', 1, 'Banua Lawas', 115.275048, -2.27937),
(13, 'Sungai Anyar', 1, 'Banua Lawas', 115.287458, -2.315984),
(14, 'Sungai Durian', 1, 'Banua Lawas', 115.279664, -2.347707),
(15, 'Talan', 1, 'Banua Lawas', 115.265213, -2.264964),
(16, 'Argo Mulyo', 12, 'Bintang Ara', 115.463133, -1.97719),
(17, 'Bintang Ara', 12, 'Bintang Ara', 115.444691, -1.970966),
(18, 'Bumi Makmur', 12, 'Bintang Ara', 115.455738, -1.935226),
(19, 'Burum', 12, 'Bintang Ara', 115.431564, -1.891233),
(20, 'Dambung Raya', 12, 'Bintang Ara', 115.437537, -1.63419),
(21, 'Hegarmanah', 12, 'Bintang Ara', 115.352288, -1.728192),
(22, 'Panaan', 12, 'Bintang Ara', 115.395198, -1.834865),
(23, 'Usih', 12, 'Bintang Ara', 115.446464, -1.997794),
(24, 'Waling', 12, 'Bintang Ara', 115.446725, -2.022445),
(25, 'Bongkang', 5, 'Haruai', 115.565255, -2.015241),
(26, 'Catur Karya', 5, 'Haruai', 115.51166, -2.053301),
(27, 'Halong', 5, 'Haruai', 115.502949, -2.014775),
(28, 'Hayup', 5, 'Haruai', 115.512361, -1.971352),
(29, 'Kembang Kuning', 5, 'Haruai', 115.518358, -2.072793),
(30, 'Lokbatu', 5, 'Haruai', 115.534063, -2.141482),
(31, 'Mahe Pasar', 5, 'Haruai', 115.459531, -2.041306),
(32, 'Marindi', 5, 'Haruai', 115.610754, -2.014179),
(33, 'Nawin', 5, 'Haruai', 115.528089, -2.024269),
(34, 'Nawin (Sialing)', 5, 'Haruai', 115.506479, -1.914734),
(35, 'Seradang', 5, 'Haruai', 115.554001, -2.040508),
(36, 'Suput', 5, 'Haruai', 115.48853, -2.035445),
(37, 'Suriyan', 5, 'Haruai', 115.472315, -2.018089),
(38, 'Wirang', 5, 'Haruai', 115.589015, -2.005443),
(39, 'Garagata', 11, 'Jaro', 115.644469, -1.808569),
(40, 'Jaro', 11, 'Jaro', 115.629652, -1.83662),
(41, 'Lano', 11, 'Jaro', 115.660536, -1.750659),
(42, 'Muang', 11, 'Jaro', 115.655833, -1.862228),
(43, 'Nalui', 11, 'Jaro', 115.687414, -1.82402),
(44, 'Namun', 11, 'Jaro', 115.623927, -1.866051),
(45, 'Purui', 11, 'Jaro', 115.690177, -1.878189),
(46, 'Solan', 11, 'Jaro', 115.648357, -1.772808),
(47, 'Teratau', 11, 'Jaro', 115.648859, -1.87953),
(48, 'Ampukung', 2, 'Kelua', 115.303157, -2.295374),
(49, 'Bahungin', 2, 'Kelua', 115.281943, -2.267095),
(50, 'Binturu', 2, 'Kelua', 115.29486, -2.244648),
(51, 'Karangan Putih', 2, 'Kelua', 115.269922, -2.236374),
(52, 'Masintan', 2, 'Kelua', 115.316093, -2.271382),
(53, 'Paliat', 2, 'Kelua', 115.305324, -2.264157),
(54, 'Pasar Panas', 2, 'Kelua', 115.249052, -2.223206),
(55, 'Pudak Setegal', 2, 'Kelua', 115.290613, -2.287679),
(56, 'Pulau', 2, 'Kelua', 115.295815, -2.276567),
(57, 'Sungai Buluh', 2, 'Kelua', 115.310834, -2.249384),
(58, 'Takulat', 2, 'Kelua', 115.291801, -2.266054),
(59, 'Telaga Itar', 2, 'Kelua', 115.289949, -2.301978),
(60, 'Harus', 8, 'Muara Harus', 115.336638, -2.243833),
(61, 'Madang', 8, 'Muara Harus', 115.335969, -2.2827),
(62, 'Manduin', 8, 'Muara Harus', 115.331613, -2.230701),
(63, 'Mantuil', 8, 'Muara Harus', 115.325214, -2.223285),
(64, 'Murung Karangan', 8, 'Muara Harus', 115.318842, -2.239381),
(65, 'Padangin', 8, 'Muara Harus', 115.34159, -2.259689),
(66, 'Tantaringin', 8, 'Muara Harus', 115.325297, -2.24698),
(67, 'Binjai', 7, 'Muara Uya', 115.518664, -1.842017),
(68, 'Kampung Baru', 7, 'Muara Uya', 115.627351, -1.929354),
(69, 'Kupang Nunding', 7, 'Muara Uya', 115.57212, -1.962572),
(70, 'Lumbang', 7, 'Muara Uya', 115.641731, -1.902257),
(71, 'Mangkupum', 7, 'Muara Uya', 115.621428, -1.964856),
(72, 'Muara Uya', 7, 'Muara Uya', 115.604859, -1.898793),
(73, 'Palapi', 7, 'Muara Uya', 115.583428, -1.9333),
(74, 'Pasar Batu', 7, 'Muara Uya', 115.55253, -1.935343),
(75, 'Ribang', 7, 'Muara Uya', 115.551135, -1.97268),
(76, 'Salikung', 7, 'Muara Uya', 115.585316, -1.676667),
(77, 'Santu`un', 7, 'Muara Uya', 115.587239, -1.814922),
(78, 'Simpung Layung', 7, 'Muara Uya', 115.583933, -1.913077),
(79, 'Sungai Kumap', 7, 'Muara Uya', 115.554867, -1.655785),
(80, 'Uwie', 7, 'Muara Uya', 115.556307, -1.897018),
(81, 'Belimbing', 6, 'Murung Pudak', 115.407077, -2.149623),
(82, 'Belimbing Raya', 6, 'Murung Pudak', 115.400529, -2.158288),
(83, 'Kapar', 6, 'Murung Pudak', 115.413951, -2.139203),
(84, 'Kasiau', 6, 'Murung Pudak', 115.48863, -2.09064),
(85, 'Kasiau Raya', 6, 'Murung Pudak', 115.46072, -2.096634),
(86, 'Mabu`un', 6, 'Murung Pudak', 115.41523, -2.170954),
(87, 'Maburai', 6, 'Murung Pudak', 115.439543, -2.184722),
(88, 'Masukau', 6, 'Murung Pudak', 115.430976, -2.12565),
(89, 'Pembataan', 6, 'Murung Pudak', 115.398365, -2.170299),
(90, 'Sulingan', 6, 'Murung Pudak', 115.384244, -2.170515),
(91, 'Halangan', 9, 'Pugaan', 115.30665, -2.32294),
(92, 'Jirak', 9, 'Pugaan', 115.329585, -2.301847),
(93, 'Pampanan', 9, 'Pugaan', 115.348251, -2.330185),
(94, 'Pugaan', 9, 'Pugaan', 115.304778, -2.333187),
(95, 'Sei Rukam I', 9, 'Pugaan', 115.300285, -2.31558),
(96, 'Sei Rukam II', 9, 'Pugaan', 115.305192, -2.312534),
(97, 'Tamunti', 9, 'Pugaan', 115.3204, -2.326753),
(98, 'Agung', 4, 'Tanjung', 115.388076, -2.148519),
(99, 'Banyu Tajun', 4, 'Tanjung', 115.312042, -2.209975),
(100, 'Garunggung', 4, 'Tanjung', 115.438301, -2.070564),
(101, 'Hikun', 4, 'Tanjung', 115.390291, -2.136236),
(102, 'Jangkung', 4, 'Tanjung', 115.368276, -2.159004),
(103, 'Juai', 4, 'Tanjung', 115.42148, -2.08521),
(104, 'Kambitin', 4, 'Tanjung', 115.366187, -2.095574),
(105, 'Kambitin Raya', 4, 'Tanjung', 115.371959, -2.074393),
(106, 'Kitang', 4, 'Tanjung', 115.453004, -2.055965),
(107, 'Mahe Seberang', 4, 'Tanjung', 115.453997, -2.049983),
(108, 'Pamarangan Kiwa', 4, 'Tanjung', 115.342759, -2.184381),
(109, 'Puain Kiwa', 4, 'Tanjung', 115.352657, -2.175094),
(110, 'Sungai Pimping', 4, 'Tanjung', 115.324953, -2.193974),
(111, 'Tanjung', 4, 'Tanjung', 115.383929, -2.162061),
(112, 'Wayau', 4, 'Tanjung', 115.40319, -2.103648),
(113, 'Barimbun', 3, 'Tanta', 115.395884, -2.219043),
(114, 'Luk Bayur', 3, 'Tanta', 115.356223, -2.220957),
(115, 'Mangkusip', 3, 'Tanta', 115.36937, -2.214508),
(116, 'Murung Baru', 3, 'Tanta', 115.335201, -2.216442),
(117, 'Padang Panjang', 3, 'Tanta', 115.465685, -2.252843),
(118, 'Padangin', 3, 'Tanta', 115.350808, -2.23378),
(119, 'Pamarangan Kanan', 3, 'Tanta', 115.34963, -2.201126),
(120, 'Puain Kanan', 3, 'Tanta', 115.368388, -2.187653),
(121, 'Pulau Ku`u', 3, 'Tanta', 115.395452, -2.285612),
(122, 'Tamiang', 3, 'Tanta', 115.429904, -2.262838),
(123, 'Tanta', 3, 'Tanta', 115.377136, -2.202849),
(124, 'Tanta Hulu', 3, 'Tanta', 115.379322, -2.192954),
(125, 'Walangkir', 3, 'Tanta', 115.359055, -2.257342),
(126, 'Warukin', 3, 'Tanta', 115.425166, -2.247037),
(127, 'Bilas', 10, 'Upau', 115.566166, -2.115474),
(128, 'Kaong', 10, 'Upau', 115.590452, -2.092967),
(129, 'Kinarum', 10, 'Upau', 115.623481, -2.035315),
(130, 'Masingai I', 10, 'Upau', 115.547392, -2.101954),
(131, 'Masingai II', 10, 'Upau', 115.543652, -2.115831),
(132, 'Pangelak', 10, 'Upau', 115.630915, -2.082248);

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket_galeri` text NOT NULL,
  `proses` int(5) NOT NULL,
  `disimpan` date NOT NULL,
  `diupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `id_tempat`, `id_proyek`, `nama_galeri`, `gambar`, `ket_galeri`, `proses`, `disimpan`, `diupdate`) VALUES
(1, 1, 1, 'Foto Setelah Gapura Diperbaharui', '5110img_20181030_110850_615.jpg', '<p>Gapura Terbaru</p>', 100, '2019-02-10', '2019-02-10'),
(2, 1, 2, 'Bagian Halaman Pemda', '72735.1.jpg', '<p>Setelah Diaspal</p>', 100, '2019-02-10', '2019-02-10'),
(3, 2, 3, 'Bagian Halaman DISHUB', '432521.1.jpg', '<p>Foto Dari&nbsp;Samping</p>', 100, '2019-02-10', '2019-02-10'),
(4, 2, 3, 'Bagian Halaman DISHUB', '651221.2.jpg', '<p>Foto Dari Depan</p>', 100, '2019-02-10', '2019-02-10'),
(5, 2, 4, 'Mobil Transportasi', '119521.3.jpg', '<p>Mobil Pemerintah</p>', 100, '2019-02-10', '2019-02-10'),
(6, 2, 5, 'Pagar Beserta Gapura', '313521.4.jpg', '<p>-</p>', 90, '2019-02-10', '2019-02-10'),
(7, 3, 6, 'Jembatan Dari Ujung Start', '5000whatsapp-image-2019-02-08-at-18.27.21.jpeg', '<p>-</p>', 100, '2019-02-10', '2019-02-10'),
(8, 3, 6, 'Jembatan Dari Ujung Seberang', '3296whatsapp-image-2019-02-08-at-18.27.20-(1).jpeg', '<p>-</p>', 100, '2019-02-10', '2019-02-10'),
(9, 3, 7, 'Plang SUdah Jabuk', '5499whatsapp-image-2019-02-08-at-18.27.21-(1).jpeg', '<p>-</p>', 100, '2019-02-10', '2019-02-10'),
(10, 4, 8, 'Parkir 1', '87126.1.jpg', '<p>-</p>', 100, '2019-02-12', '2019-02-12'),
(11, 4, 8, 'Lahan Parkir 2', '27686.3.jpg', '<p>-</p>', 70, '2019-02-12', '2019-02-12'),
(12, 4, 9, 'Fisik Wind Detector', '37256.4.jpg', '<p>-</p>', 55, '2019-02-12', '2019-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `id_unsur` int(10) NOT NULL,
  `unsur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`, `id_unsur`, `unsur`) VALUES
(1, 'Gedung/Bangunan', 1, 'Toponimi Bangunan'),
(2, 'Bounding Box', 2, 'Toponimi Cakupan'),
(3, 'Industri Aeronautika', 3, 'Toponimi Industri'),
(4, 'Industri Bahan Dasar Bangunan', 3, 'Toponimi Industri'),
(5, 'Industri Bahan Dasar Kimia', 3, 'Toponimi Industri'),
(6, 'Industri Bahan Dasar Logam', 3, 'Toponimi Industri'),
(7, 'Industri Bahan Pangan dan Makanan', 3, 'Toponimi Industri'),
(8, 'Industri Elektronik', 3, 'Toponimi Industri'),
(9, 'Industri Manufaktur Lainnya', 3, 'Toponimi Industri'),
(10, 'Industri Maritim', 3, 'Toponimi Industri'),
(11, 'Industri Obat/Farmasi', 3, 'Toponimi Industri'),
(12, 'Industri Otomotif', 3, 'Toponimi Industri'),
(13, 'Industri Pakan Ternak', 3, 'Toponimi Industri'),
(14, 'Industri Perlengkapan Pakaian', 3, 'Toponimi Industri'),
(15, 'Industri Sarana dan Bahan Perkantoran', 3, 'Toponimi Industri'),
(16, 'Industri Senjata dan Bahan Peledak', 3, 'Toponimi Industri'),
(17, 'Industri Tekstil dan Produk Tekstil', 3, 'Toponimi Industri'),
(18, 'Arena Atletik dan Olah Raga', 4, 'Toponimi Olahraga'),
(19, 'Arena Balap Otomotif', 4, 'Toponimi Olahraga'),
(20, 'Arena Balap Sepeda/Velodrome', 4, 'Toponimi Olahraga'),
(21, 'Arena Kolam Renang/Olah Raga Air', 4, 'Toponimi Olahraga'),
(22, 'Arena Olah Raga/Jalur Golf', 4, 'Toponimi Olahraga'),
(23, 'Arena Pacuan Kuda', 4, 'Toponimi Olahraga'),
(24, 'Stadion/Tribun/Bangunan Olah Raga', 4, 'Toponimi Olahraga'),
(25, 'Bioskop', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(26, 'Cagar Alam', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(27, 'Candi', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(28, 'Gardu Pandang', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(29, 'Hotel/Motel/Hostel/Losmen', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(30, 'Kandang/Sangkar Binatang', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(31, 'Kebun Binatang', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(32, 'Menara', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(33, 'Museum', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(34, 'Pariwisata/Rekreasi Budaya', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(35, 'Pariwisata/Rekreasi Pantai', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(36, 'Pariwisata/Rekreasi Pegunungan', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(37, 'Pariwisata/Seni/Budaya/Olah Raga Lainnya', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(38, 'Pasar Seni/Galeri', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(39, 'Peternakan/Penangkaran', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(40, 'Prasasti', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(41, 'Restauran/Tempat Makan', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(42, 'Rumah Kaca Taman Botani', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(43, 'Situs Purbakala', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(44, 'Taman Botani', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(45, 'Taman Margasatwa', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(46, 'Taman Sumber Air Panas', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(47, 'Teater Seni/Konser/Pameran/Pertemuan', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(48, 'Tempat Hiburan', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(49, 'Tugu/Monumen/Gapura', 5, 'Toponimi Pariwisata, Seni dan Budaya'),
(50, 'Istana', 6, 'Toponimi Pemerintahan'),
(51, 'Istana Negara', 6, 'Toponimi Pemerintahan'),
(52, 'Kantor Bupati', 6, 'Toponimi Pemerintahan'),
(53, 'Kantor Camat', 6, 'Toponimi Pemerintahan'),
(54, 'Kantor DPRD', 6, 'Toponimi Pemerintahan'),
(55, 'Kantor Gubernur', 6, 'Toponimi Pemerintahan'),
(56, 'Kantor Kepala Desa', 6, 'Toponimi Pemerintahan'),
(57, 'Kantor Lembaga Negara', 6, 'Toponimi Pemerintahan'),
(58, 'Kantor Lurah', 6, 'Toponimi Pemerintahan'),
(59, 'Kantor Menteri/Kementerian/LPNK', 6, 'Toponimi Pemerintahan'),
(60, 'Kantor Pemerintah Lainnya', 6, 'Toponimi Pemerintahan'),
(61, 'Kantor Presiden', 6, 'Toponimi Pemerintahan'),
(62, 'Kantor Wakil Presiden', 6, 'Toponimi Pemerintahan'),
(63, 'Kantor Wali Kota', 6, 'Toponimi Pemerintahan'),
(64, 'Lembaga Pemasyarakatan', 6, 'Toponimi Pemerintahan'),
(65, 'Kantor Pemerintah Asing Lainnya', 7, 'Toponimi Pemerintahan Negara Asing'),
(66, 'Kedutaan Besar', 7, 'Toponimi Pemerintahan Negara Asing'),
(67, 'Konsulat', 7, 'Toponimi Pemerintahan Negara Asing'),
(68, 'Pusat Kebudayaan Asing', 7, 'Toponimi Pemerintahan Negara Asing'),
(69, 'Laboratorium Pendidikan/Penelitian', 8, 'Toponimi Pendidikan dan IPTEK'),
(70, 'Observatorium', 8, 'Toponimi Pendidikan dan IPTEK'),
(71, 'Pendidikan Anak Usia Dini', 8, 'Toponimi Pendidikan dan IPTEK'),
(72, 'Pendidikan Dasar', 8, 'Toponimi Pendidikan dan IPTEK'),
(73, 'Pendidikan Keagamaan', 8, 'Toponimi Pendidikan dan IPTEK'),
(74, 'Pendidikan Kedinasan', 8, 'Toponimi Pendidikan dan IPTEK'),
(75, 'Pendidikan Khusus', 8, 'Toponimi Pendidikan dan IPTEK'),
(76, 'Pendidikan Luar Sekolah', 8, 'Toponimi Pendidikan dan IPTEK'),
(77, 'Pendidikan Menengah Pertama', 8, 'Toponimi Pendidikan dan IPTEK'),
(78, 'Pendidikan Menengah Umum', 8, 'Toponimi Pendidikan dan IPTEK'),
(79, 'Pendidikan Tinggi', 8, 'Toponimi Pendidikan dan IPTEK'),
(80, 'Pendidikan/Penelitian Lainnya', 8, 'Toponimi Pendidikan dan IPTEK'),
(81, 'Perpustakaan', 8, 'Toponimi Pendidikan dan IPTEK'),
(82, 'Air Terjun', 9, 'Toponimi Perairan'),
(83, 'Alur Sungai', 9, 'Toponimi Perairan'),
(84, 'Bendung', 9, 'Toponimi Perairan'),
(85, 'Bendungan', 9, 'Toponimi Perairan'),
(86, 'Danau/Situ', 9, 'Toponimi Perairan'),
(87, 'Delta', 9, 'Toponimi Perairan'),
(88, 'Empang', 9, 'Toponimi Perairan'),
(89, 'Hulu', 9, 'Toponimi Perairan'),
(90, 'Jeram', 9, 'Toponimi Perairan'),
(91, 'Kanal', 9, 'Toponimi Perairan'),
(92, 'Kolam', 9, 'Toponimi Perairan'),
(93, 'Laguna', 9, 'Toponimi Perairan'),
(94, 'Laut', 9, 'Toponimi Perairan'),
(95, 'Mata Air', 9, 'Toponimi Perairan'),
(96, 'Muara', 9, 'Toponimi Perairan'),
(97, 'Muara/Kuala', 9, 'Toponimi Perairan'),
(98, 'Perairan Lainnya', 9, 'Toponimi Perairan'),
(99, 'Rawa', 9, 'Toponimi Perairan'),
(100, 'Riam', 9, 'Toponimi Perairan'),
(101, 'Saluran Irigasi/Drainase', 9, 'Toponimi Perairan'),
(102, 'Samudera', 9, 'Toponimi Perairan'),
(103, 'Selat', 9, 'Toponimi Perairan'),
(104, 'Sungai', 9, 'Toponimi Perairan'),
(105, 'Tambak', 9, 'Toponimi Perairan'),
(106, 'Tanggul', 9, 'Toponimi Perairan'),
(107, 'Teluk', 9, 'Toponimi Perairan'),
(108, 'Terusan', 9, 'Toponimi Perairan'),
(109, 'Waduk', 9, 'Toponimi Perairan'),
(110, 'Kantor Bank', 10, 'Toponimi Perekonomian dan Perdagangan'),
(111, 'Kantor Bursa Saham/Efek', 10, 'Toponimi Perekonomian dan Perdagangan'),
(112, 'Kantor Keuangan Lainnya', 10, 'Toponimi Perekonomian dan Perdagangan'),
(113, 'Kantor Pegadaian', 10, 'Toponimi Perekonomian dan Perdagangan'),
(114, 'Kantor Penukaran Uang Asing', 10, 'Toponimi Perekonomian dan Perdagangan'),
(115, 'Pusat Bisnis dan Perdagangan Lainnya', 10, 'Toponimi Perekonomian dan Perdagangan'),
(116, 'Pusat Pelelangan Bahan Pokok Pangan', 10, 'Toponimi Perekonomian dan Perdagangan'),
(117, 'Pusat Pelelangan Produk Industri', 10, 'Toponimi Perekonomian dan Perdagangan'),
(118, 'Pusat Perdagangan dan Niaga Kota (Mal/Toserba)', 10, 'Toponimi Perekonomian dan Perdagangan'),
(119, 'Pusat Perdagangan Tradisional (Pasar Eceran/Grosir/Induk)', 10, 'Toponimi Perekonomian dan Perdagangan'),
(120, 'Pusat Pergudangan/Terminal Peti Kemas/Cargo', 10, 'Toponimi Perekonomian dan Perdagangan'),
(121, 'Pusat Perkantoran Bisnis/Komersial Terpadu', 10, 'Toponimi Perekonomian dan Perdagangan'),
(122, 'Rumah Toko/Rumah Kantor', 10, 'Toponimi Perekonomian dan Perdagangan'),
(123, 'Gereja', 11, 'Toponimi Peribadatan'),
(124, 'Kelenteng', 11, 'Toponimi Peribadatan'),
(125, 'Masjid', 11, 'Toponimi Peribadatan'),
(126, 'Peribadatan/Sosial Lainnya', 11, 'Toponimi Peribadatan'),
(127, 'Pura', 11, 'Toponimi Peribadatan'),
(128, 'Vihara', 11, 'Toponimi Peribadatan'),
(129, 'Kantor Pemakaman', 12, 'Toponimi Permakaman'),
(130, 'Krematorium', 12, 'Toponimi Permakaman'),
(131, 'Pemakaman Bukan Umum', 12, 'Toponimi Permakaman'),
(132, 'Pemakaman Khusus', 12, 'Toponimi Permakaman'),
(133, 'Pemakaman Umum', 12, 'Toponimi Permakaman'),
(134, 'Tempat Penyimpanan Jenazah', 12, 'Toponimi Permakaman'),
(135, 'Ibukota Daerah Istimewa', 13, 'Toponimi Permukiman'),
(136, 'Ibukota Desa', 13, 'Toponimi Permukiman'),
(137, 'Ibukota Kabupaten', 13, 'Toponimi Permukiman'),
(138, 'Ibukota Kecamatan', 13, 'Toponimi Permukiman'),
(139, 'Ibukota Kelurahan', 13, 'Toponimi Permukiman'),
(140, 'Ibukota Kota', 13, 'Toponimi Permukiman'),
(141, 'Ibukota Negara', 13, 'Toponimi Permukiman'),
(142, 'Ibukota Provinsi', 13, 'Toponimi Permukiman'),
(143, 'Kampung/Dusun', 13, 'Toponimi Permukiman'),
(144, 'Permukiman Lainnya', 13, 'Toponimi Permukiman'),
(145, 'Properti Tumpang Susun', 13, 'Toponimi Permukiman'),
(146, 'Rumah Adat', 13, 'Toponimi Permukiman'),
(147, 'Rumah Hunian Lainnya', 13, 'Toponimi Permukiman'),
(148, 'Rumah Komplek/Properti Real Estate', 13, 'Toponimi Permukiman'),
(149, 'Bangunan/Kantor Pertahanan Keamanan Lainnya', 14, 'Toponimi Pertahanan dan Keamanan'),
(150, 'Instalasi TNI (AD/AL/AU)', 14, 'Toponimi Pertahanan dan Keamanan'),
(151, 'Kantor Polisi', 14, 'Toponimi Pertahanan dan Keamanan'),
(152, 'Pangkalan Transportasi TNI', 14, 'Toponimi Pertahanan dan Keamanan'),
(153, 'Pos Keamanan', 14, 'Toponimi Pertahanan dan Keamanan'),
(154, 'Pertambangan Bahan Dasar Bangunan', 15, 'Toponimi Pertambangan Mineral'),
(155, 'Pertambangan Batu Bara', 15, 'Toponimi Pertambangan Mineral'),
(156, 'Pertambangan Lainnya', 15, 'Toponimi Pertambangan Mineral'),
(157, 'Pertambangan Logam Dasar', 15, 'Toponimi Pertambangan Mineral'),
(158, 'Pertambangan Logam Mulia', 15, 'Toponimi Pertambangan Mineral'),
(159, 'Bukit', 16, 'Toponimi Relief'),
(160, 'Dataran Tinggi', 16, 'Toponimi Relief'),
(161, 'Goa', 16, 'Toponimi Relief'),
(162, 'Gosong', 16, 'Toponimi Relief'),
(163, 'Gunung', 16, 'Toponimi Relief'),
(164, 'Karang', 16, 'Toponimi Relief'),
(165, 'Kawah', 16, 'Toponimi Relief'),
(166, 'Kepulauan', 16, 'Toponimi Relief'),
(167, 'Lembah', 16, 'Toponimi Relief'),
(168, 'Patahan', 16, 'Toponimi Relief'),
(169, 'Pegunungan', 16, 'Toponimi Relief'),
(170, 'Pulau', 16, 'Toponimi Relief'),
(171, 'Puncak', 16, 'Toponimi Relief'),
(172, 'Relief Lainnya', 16, 'Toponimi Relief'),
(173, 'Semenanjung', 16, 'Toponimi Relief'),
(174, 'Tanjung', 16, 'Toponimi Relief'),
(175, 'Ujung', 16, 'Toponimi Relief'),
(176, 'Fasilitas Kesehatan Lainnya', 17, 'Toponimi Sarana Kesehatan'),
(177, 'Poliklinik/Polindes/Posyandu', 17, 'Toponimi Sarana Kesehatan'),
(178, 'Puskesmas/Puskesmas Pembantu', 17, 'Toponimi Sarana Kesehatan'),
(179, 'Rumah Sakit Khusus', 17, 'Toponimi Sarana Kesehatan'),
(180, 'Rumah Sakit Umum', 17, 'Toponimi Sarana Kesehatan'),
(181, 'Rumah Panti Asuhan Anak Yatim Piatu', 18, 'Toponimi Sosial'),
(182, 'Rumah Panti Jompo', 18, 'Toponimi Sosial'),
(183, 'Rumah Panti Lainnya', 18, 'Toponimi Sosial'),
(184, 'Balai Yasa Kereta Api', 19, 'Toponimi Transportasi'),
(185, 'Depo Kendaraan (Pool)', 19, 'Toponimi Transportasi'),
(186, 'Depo Kereta Api', 19, 'Toponimi Transportasi'),
(187, 'Dermaga Laut', 19, 'Toponimi Transportasi'),
(188, 'Dermaga Sungai', 19, 'Toponimi Transportasi'),
(189, 'Hanggar Pesawat Udara', 19, 'Toponimi Transportasi'),
(190, 'Helikopter Pad Gedung', 19, 'Toponimi Transportasi'),
(191, 'Helikopter Pad Tanah', 19, 'Toponimi Transportasi'),
(192, 'Jalan', 19, 'Toponimi Transportasi'),
(193, 'Jalan Kereta Api', 19, 'Toponimi Transportasi'),
(194, 'Jalan/Transportasi Darat Lainnya', 19, 'Toponimi Transportasi'),
(195, 'Jembatan', 19, 'Toponimi Transportasi'),
(196, 'Menara Suar', 19, 'Toponimi Transportasi'),
(197, 'Pelabuhan Antar Pulau', 19, 'Toponimi Transportasi'),
(198, 'Pelabuhan Nelayan', 19, 'Toponimi Transportasi'),
(199, 'Pelabuhan Samudera', 19, 'Toponimi Transportasi'),
(200, 'Pelabuhan Sungai dan Danau', 19, 'Toponimi Transportasi'),
(201, 'Pelabuhan Udara Domestik', 19, 'Toponimi Transportasi'),
(202, 'Pelabuhan Udara Internasional', 19, 'Toponimi Transportasi'),
(203, 'Pelabuhan Udara Non Reguler', 19, 'Toponimi Transportasi'),
(204, 'Pelabuhan Udara Perintis', 19, 'Toponimi Transportasi'),
(205, 'Perhentian Bus/Halte', 19, 'Toponimi Transportasi'),
(206, 'Perhentian/Halte Kereta Api', 19, 'Toponimi Transportasi'),
(207, 'Stasiun Kereta Api', 19, 'Toponimi Transportasi'),
(208, 'Tempat Parkir Kendaraan Bermotor', 19, 'Toponimi Transportasi'),
(209, 'Tempat Parkir Tumpang Susun', 19, 'Toponimi Transportasi'),
(210, 'Terminal Bus/Angkutan Kendaraan Lainnya', 19, 'Toponimi Transportasi'),
(211, 'Terowongan', 19, 'Toponimi Transportasi'),
(212, 'Transportasi Perairan Lainnya', 19, 'Toponimi Transportasi'),
(213, 'Depo Bahan Bakar Gas', 20, 'Toponimi Utilitas'),
(214, 'Depo Bahan Bakar Minyak', 20, 'Toponimi Utilitas'),
(215, 'Gardu Induk', 20, 'Toponimi Utilitas'),
(216, 'Gardu Induk Listrik Tegangan Tinggi', 20, 'Toponimi Utilitas'),
(217, 'Gardu Kabel Listrik Laut', 20, 'Toponimi Utilitas'),
(218, 'Kantor Gas Negara', 20, 'Toponimi Utilitas'),
(219, 'Kantor Pengiriman Paket', 20, 'Toponimi Utilitas'),
(220, 'Kantor Perusahaan Air Minum', 20, 'Toponimi Utilitas'),
(221, 'Kantor PLN', 20, 'Toponimi Utilitas'),
(222, 'Kantor Pos Besar', 20, 'Toponimi Utilitas'),
(223, 'Kantor Pos Lainnya', 20, 'Toponimi Utilitas'),
(224, 'Kantor Pos Pembantu', 20, 'Toponimi Utilitas'),
(225, 'Kantor Radio', 20, 'Toponimi Utilitas'),
(226, 'Kantor Telepon', 20, 'Toponimi Utilitas'),
(227, 'Kantor Televisi', 20, 'Toponimi Utilitas'),
(228, 'Lingkungan/Tempat Pembuangan Lainnya', 20, 'Toponimi Utilitas'),
(229, 'Menara Air Minum', 20, 'Toponimi Utilitas'),
(230, 'Menara Pemancar Radio', 20, 'Toponimi Utilitas'),
(231, 'Menara Pemancar Televisi', 20, 'Toponimi Utilitas'),
(232, 'Menara Telepon', 20, 'Toponimi Utilitas'),
(233, 'Pembangkit Listrik Tenaga Air', 20, 'Toponimi Utilitas'),
(234, 'Pembangkit Listrik Tenaga Angin', 20, 'Toponimi Utilitas'),
(235, 'Pembangkit Listrik Tenaga Diesel', 20, 'Toponimi Utilitas'),
(236, 'Pembangkit Listrik Tenaga Gas', 20, 'Toponimi Utilitas'),
(237, 'Pembangkit Listrik Tenaga Lainnya', 20, 'Toponimi Utilitas'),
(238, 'Pembangkit Listrik Tenaga Nuklir', 20, 'Toponimi Utilitas'),
(239, 'Pembangkit Listrik Tenaga Panas Bumi', 20, 'Toponimi Utilitas'),
(240, 'Pembangkit Listrik Tenaga Surya', 20, 'Toponimi Utilitas'),
(241, 'Pembangkit Listrik Tenaga Uap', 20, 'Toponimi Utilitas'),
(242, 'Penanganan Air Minum Lainnya', 20, 'Toponimi Utilitas'),
(243, 'Pengolahan Air Minum', 20, 'Toponimi Utilitas'),
(244, 'Pengolahan Bahan Bakar Gas', 20, 'Toponimi Utilitas'),
(245, 'Pengolahan Bahan Bakar Minyak', 20, 'Toponimi Utilitas'),
(246, 'Stasiun Bumi', 20, 'Toponimi Utilitas'),
(247, 'Stasiun Pasut', 20, 'Toponimi Utilitas'),
(248, 'Stasiun Pompa Bahan Bakar Gas', 20, 'Toponimi Utilitas'),
(249, 'Stasiun Pompa Bahan Bakar Umum', 20, 'Toponimi Utilitas'),
(250, 'Sumber Air Minum', 20, 'Toponimi Utilitas'),
(251, 'Telekomunikasi Lainnya', 20, 'Toponimi Utilitas'),
(252, 'Tempat Pembuangan Akhir Sampah', 20, 'Toponimi Utilitas'),
(253, 'Tempat Penampungan Barang Bekas', 20, 'Toponimi Utilitas'),
(254, 'Tempat Penyimpanan Limbah Kimia', 20, 'Toponimi Utilitas'),
(255, 'Warung Internet', 20, 'Toponimi Utilitas'),
(256, 'Warung Telekomunikasi', 20, 'Toponimi Utilitas'),
(257, 'Hutan Bakau/Mangrove', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(258, 'Hutan Rakyat/Tanaman Campur', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(259, 'Hutan Rawa/Gambut', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(260, 'Hutan Rimba', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(261, 'Hutan Tanaman Industri', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(262, 'Lumpur', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(263, 'Padang Rumput', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(264, 'Perkebunan/Kebun', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(265, 'Permukaan/Lapangan Diperkeras', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(266, 'Taman', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(267, 'Vegetasi Budidaya Lainnya', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(268, 'Vegetasi Non Budidaya Lainnya', 21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(269, 'Daerah Administratif Lainnya', 22, 'Toponimi Wilayah Administrasi'),
(270, 'Daerah Istimewa', 22, 'Toponimi Wilayah Administrasi'),
(271, 'Desa', 22, 'Toponimi Wilayah Administrasi'),
(272, 'Kabupaten', 22, 'Toponimi Wilayah Administrasi'),
(273, 'Kecamatan', 22, 'Toponimi Wilayah Administrasi'),
(274, 'Kelurahan', 22, 'Toponimi Wilayah Administrasi'),
(275, 'Kota', 22, 'Toponimi Wilayah Administrasi'),
(276, 'Negara', 22, 'Toponimi Wilayah Administrasi'),
(277, 'Provinsi', 22, 'Toponimi Wilayah Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(10) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Banua Lawas'),
(2, 'Kelua'),
(3, 'Tanta'),
(4, 'Tanjung'),
(5, 'Haruai'),
(6, 'Murung Pudak'),
(7, 'Muara Uya'),
(8, 'Muara Harus'),
(9, 'Pugaan'),
(10, 'Upau'),
(11, 'Jaro'),
(12, 'Bintang Ara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_options`
--

CREATE TABLE `tb_options` (
  `option_name` varchar(16) NOT NULL,
  `option_value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_options`
--

INSERT INTO `tb_options` (`option_name`, `option_value`) VALUES
('default_lat', '-1.876543'),
('default_lng', '115.456789'),
('default_zoom', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proyek`
--

CREATE TABLE `tb_proyek` (
  `id_proyek` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `kontrak` varchar(100) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `waktu` int(10) NOT NULL,
  `pelaksana` varchar(100) NOT NULL,
  `pengawas` varchar(100) NOT NULL,
  `disimpan` date NOT NULL,
  `diupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proyek`
--

INSERT INTO `tb_proyek` (`id_proyek`, `id_tempat`, `kontrak`, `kegiatan`, `pekerjaan`, `biaya`, `awal`, `akhir`, `waktu`, `pelaksana`, `pengawas`, `disimpan`, `diupdate`) VALUES
(1, 1, 'PMD/201901/BTP', 'Pemeliharaan Gapura', 'Penambahan Tulisan Pada Gapura PEMDA', '1.000.000', '2019-02-01', '2019-02-28', 27, 'CV. Adhiyaksa', 'SETDA Tabalong', '2019-02-10', '2019-02-10'),
(2, 1, 'PMD/201901/HJK', 'Pengaspalan Halaman PEMDA', 'Mengaspal Bagian Halaman Pemda', '1.000.000', '2019-02-01', '2019-02-28', 27, 'PT. SIS', 'PT. Adaro', '2019-02-10', '2019-02-10'),
(3, 2, 'DPH/201901/DFG', 'Pengaspalan Halaman Kantor DISHUB', 'Mengaspal Halaman Bagian Depan DISHUB', '10.000.000', '2019-02-01', '2019-02-28', 27, 'PT. SIS', 'PT. Adaro', '2019-02-10', '2019-02-10'),
(4, 2, 'DPH/201901/DFH', 'Pembelian Alat Transportasi', 'Pengantaran Mobil Pemerintah', '50.000.000', '2019-02-01', '2019-02-28', 27, 'PT. J&T Exprees', 'Kepala Dinas Perhubungan', '2019-02-10', '2019-02-10'),
(5, 2, 'DPH/201901/DFI', 'Pembangunan Gapura Bertuliskan DISHUB', 'Pengecoran Gapura Serta Pagar Pada Bagian Depan DISHUB', '20.000.000', '2019-02-01', '2019-02-28', 27, 'PT. SIS', 'PT. Adaro', '2019-02-10', '2019-02-10'),
(6, 3, 'DSJ/201901/JLK', 'Pembuatan Jembatan Titian', 'Membangun Tiang Dan Pemapanan Jembatan', '13.000.000', '2019-02-01', '2019-03-09', 36, 'TPK (Tim Pelaksana Kegiatan) Desa Juai', 'Kepala Desa Juai', '2019-02-10', '2019-02-10'),
(7, 3, 'DSJ/201901/JLH', 'Pembuatan Plang Proyek', 'Pembelian Dan Pembuatan Plang Proyek', '300.000', '2019-02-27', '2019-02-28', 1, 'TPK (Tim Pelaksana Kegiatan) Desa Juai', 'Kepala Desa Juai', '2019-02-10', '2019-02-10'),
(8, 4, 'BDR/201901/GHJ', 'Pembuatan Lahan Parkir', 'Pengecoran Lantai, dan atap parkir', '10.000.000', '2019-02-01', '2019-02-28', 27, 'CV. Adhiyaksa', 'PT. Adaro', '2019-02-12', '2019-02-12'),
(9, 4, 'LKJ/201902/HKJ', 'Pemeliharaan Jaringan Udara', 'Menamnah Kapasitas Radius Detector', '5.000.000', '2019-03-01', '2019-03-30', 29, 'PT. SIS', 'PT. Adaro', '2019-02-12', '2019-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_unsur` int(10) NOT NULL,
  `unsur` varchar(50) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `radius` int(10) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `keterangan` text,
  `disimpan` date NOT NULL,
  `diupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `nama_tempat`, `gambar`, `id_unsur`, `unsur`, `kategori`, `lat`, `lng`, `radius`, `lokasi`, `id_kecamatan`, `kecamatan`, `desa`, `keterangan`, `disimpan`, `diupdate`) VALUES
(1, 'Sekretariat Daerah Kabupaten Tabalong', '1470img_20181030_110850_615.jpg', 6, 'Toponimi Pemerintahan', 'Kantor Bupati', -2.16461, 115.382537, 50, 'Jl. Antasari No 1', 4, 'Tanjung', 'Tanjung', '<p>Sekretariat Daerah Kabupaten Tabalong Meliputi :</p>\r\n<ol>\r\n<li>Pemerintahan</li>\r\n<li>Hukum</li>\r\n<li>Aset</li>\r\n<li>Pembangunan</li>\r\n<li>Perencanaan</li>\r\n<li>Keuangan</li>\r\n</ol>', '2019-02-10', '2019-02-13'),
(2, 'Dinas Perhubungan Kabupaten Tabalong', '524821.1.jpg', 6, 'Toponimi Pemerintahan', 'Kantor Pemerintah Lainnya', -2.1778, 115.433207, 10, 'Jl. A. Yani Maburai', 6, 'Murung Pudak', 'Maburai', '<p>DISHUB TABALONG</p>', '2019-02-10', '2019-02-13'),
(3, 'Jembatan Titian Kayu Desa Juai', '8059whatsapp-image-2019-02-08-at-18.27.21.jpeg', 19, 'Toponimi Transportasi', 'Jembatan', -2.09647, 115.424519, 5, 'Sawah Tebing Siring', 4, 'Tanjung', 'Juai', '<p>Jembatan Titian Pa bariah</p>', '2019-02-10', '2019-02-13'),
(4, 'Bandara Warukin', '59676.1.jpg', 19, 'Toponimi Transportasi', 'Pelabuhan Udara Domestik', -2.212264, 115.441792, 100, 'Jl. A. Yani 1', 3, 'Tanta', 'Warukin', '<p>-</p>', '2019-02-12', '2019-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unsur`
--

CREATE TABLE `tb_unsur` (
  `id_unsur` int(10) NOT NULL,
  `unsur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unsur`
--

INSERT INTO `tb_unsur` (`id_unsur`, `unsur`) VALUES
(1, 'Toponimi Bangunan'),
(2, 'Toponimi Cakupan'),
(3, 'Toponimi Industri'),
(4, 'Toponimi Olahraga'),
(5, 'Toponimi Pariwisata, Seni dan Budaya'),
(6, 'Toponimi Pemerintahan'),
(7, 'Toponimi Pemerintahan Negara Asing'),
(8, 'Toponimi Pendidikan dan IPTEK'),
(9, 'Toponimi Perairan'),
(10, 'Toponimi Perekonomian dan Perdagangan'),
(11, 'Toponimi Peribadatan'),
(12, 'Toponimi Permakaman'),
(13, 'Toponimi Permukiman'),
(14, 'Toponimi Pertahanan dan Keamanan'),
(15, 'Toponimi Pertambangan Mineral'),
(16, 'Toponimi Relief'),
(17, 'Toponimi Sarana Kesehatan'),
(18, 'Toponimi Sosial'),
(19, 'Toponimi Transportasi'),
(20, 'Toponimi Utilitas'),
(21, 'Toponimi Vegetasi dan Lahan Terbuka'),
(22, 'Toponimi Wilayah Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user`, `pass`) VALUES
(1, 'Asrani', '112233'),
(2, 'admin', 'nimda'),
(3, 'LPSE', '123456'),
(4, 'PEMPROPEM', 'GIS'),
(5, 'Umum', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_options`
--
ALTER TABLE `tb_options`
  ADD PRIMARY KEY (`option_name`);

--
-- Indexes for table `tb_proyek`
--
ALTER TABLE `tb_proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tb_unsur`
--
ALTER TABLE `tb_unsur`
  ADD PRIMARY KEY (`id_unsur`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;
--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_proyek`
--
ALTER TABLE `tb_proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_unsur`
--
ALTER TABLE `tb_unsur`
  MODIFY `id_unsur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
