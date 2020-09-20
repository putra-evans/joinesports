-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2020 pada 21.47
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_join`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_achievement`
--

CREATE TABLE `tb_achievement` (
  `achievement_id` int(11) NOT NULL,
  `achievement_idtournament` varchar(255) NOT NULL,
  `achievement_idtim` varchar(255) NOT NULL,
  `achievement_idplayer` varchar(255) NOT NULL,
  `achievement_peringkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_achievement`
--

INSERT INTO `tb_achievement` (`achievement_id`, `achievement_idtournament`, `achievement_idtim`, `achievement_idplayer`, `achievement_peringkat`) VALUES
(1, '8991', '1', '0001', '1'),
(2, '8995', '2', '01', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bagan`
--

CREATE TABLE `tb_bagan` (
  `bagan_id` int(11) NOT NULL,
  `bagan_tournamentid` varchar(255) NOT NULL,
  `bagan_tima` varchar(255) NOT NULL,
  `bagan_timb` varchar(255) NOT NULL,
  `bagan_waktu` text NOT NULL,
  `bagan_scorea` varchar(11) NOT NULL,
  `bagan_scoreb` varchar(11) NOT NULL,
  `bagan_babak` varchar(255) NOT NULL,
  `bagan_menang` varchar(255) NOT NULL,
  `bagan_keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bagan`
--

INSERT INTO `tb_bagan` (`bagan_id`, `bagan_tournamentid`, `bagan_tima`, `bagan_timb`, `bagan_waktu`, `bagan_scorea`, `bagan_scoreb`, `bagan_babak`, `bagan_menang`, `bagan_keterangan`) VALUES
(17, '8995', '1', '2', '2020-06-16 13:00', '10', '20', 'semi final', '2', 'Ganas'),
(18, '8995', '3', '4', '2020-06-17 13:00', '10', '20', 'semi final', '4', 'Terbaik'),
(19, '8995', '2', '4', '2020-06-18 13:00', '30', '25', 'final', '2', 'Jangan Terlewatkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `berita_id` int(10) NOT NULL,
  `berita_judul` varchar(255) NOT NULL,
  `berita_post` date NOT NULL,
  `berita_isi` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`berita_id`, `berita_judul`, `berita_post`, `berita_isi`, `image`) VALUES
(54, 'Ketahuan Pakai Cheat, Akun PUBG Diblokir Selama 10 Tahun', '2020-03-06', 'Liputan6.com, Jakarta - Sejak gim PlayerUnknown\'s Battlegrounds (PUBG) meluncur di platform PC pada 2017, Tencent dan PUBG Corp berusaha keras untuk memberantas gamer yang suka berbuat curang (cheater) di dalam gim kompetitif tersebut.\r\n\r\nTak hanya di PC, cheater--kebanyakan pakai akun Tiongkok--di dalam PUBG versi mobile pun marak bermunculan dan diblokir pengembang setiap harinya.\r\n\r\nIngin memberikan pengalaman terbaik bagi gamer setianya, Tencent Games dan PUBG Corp akhirnya memiliki solusi untuk memberantas cheater. \r\n\r\n    HomeTeknoGame\r\n\r\nKetahuan Pakai Cheat, Akun PUBG Diblokir Selama 10 Tahun\r\nYusliansonYuslianson\r\n\r\n02 Mar 2020, 10:30 WIB\r\nPUBG Mobile\r\nPUBG Mobile x Resident Evil 2. (Doc: PUBG Mobile)\r\n\r\nLiputan6.com, Jakarta - Sejak gim PlayerUnknown\'s Battlegrounds (PUBG) meluncur di platform PC pada 2017, Tencent dan PUBG Corp berusaha keras untuk memberantas gamer yang suka berbuat curang (cheater) di dalam gim kompetitif tersebut.\r\n\r\nTak hanya di PC, cheater--kebanyakan pakai akun Tiongkok--di dalam PUBG versi mobile pun marak bermunculan dan diblokir pengembang setiap harinya.\r\n\r\nIngin memberikan pengalaman terbaik bagi gamer setianya, Tencent Games dan PUBG Corp akhirnya memiliki solusi untuk memberantas cheater.\r\n\r\nBaca Juga\r\n\r\n    Penjualan Galaxy S20 di Korea Selatan Ikut Terdampak Virus Corona\r\n    Oppo Find X2 Pro Bocor di Internet\r\n    Warganet Ucapkan Selamat Ulang Tahun kepada Mereka yang Lahir Tanggal 29 Februari\r\n\r\nAdapun solusi kedua perusahaan tersebut adalah sebuah metode baru untuk menangkap cheater, yang diberi nama Project Ban Pan, sebagaimana dikutip dari Gamerant, Senin (2/3/2020).\r\n\r\nDalam sebuah video singkat, pengembang menangkap basah seorang cheater membuat karakter mereka di dalam gim PUBG agar tidak terkalahkan dengan teknik pintar.', '54.jpg'),
(55, 'Timnas Esports Mobile Legends Indonesia Sumbang Perak di SEA Games 2019', '2020-03-06', 'Liputan6.com, Jakarta - Tim nasional (timnas) Mobile Legends yang mewakili Indonesia di cabang olahraga (cabor) eSports harus mengakui keunggulan tim tuan rumah Filipina.\r\n\r\nBerlangsung di Filoil Flying V Centre, San Juan, Metro Manila, Filipina, Minggu (8/12/2019), tim terbaik di Tanah Air ini harus puas dengan perolehan medali perak untuk nomor Mobile Legends ini..  Walau sempat kalah 1-0, timnas esports Indonesia sempat tampil lebih agresif, sehingga mampu comeback dua babak sekaligus dalam menekan pergerakan tim lawan.\r\n\r\nNamun, pada babak keempat dari pertandingan best of five (BO5), tim Merah Putih dipukul mundur, sehingga perolehan skor pun menjadi imbang 2-2.\r\n\r\nDi babak penentuan, kedua tim tampil \"beringas\" untuk dapat mengakhiri pertandingan terakhir Mobile Legends di SEA Games 2019. Namun apa daya, dewi fortuna saat ini lebih memihak timnas Filipina.', '55.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bracket`
--

CREATE TABLE `tb_bracket` (
  `bracket_id` int(11) NOT NULL,
  `bracket_tournamentid` int(11) NOT NULL,
  `bracket_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bracket`
--

INSERT INTO `tb_bracket` (`bracket_id`, `bracket_tournamentid`, `bracket_gambar`) VALUES
(2, 8991, 'default.jpg'),
(3, 8995, '.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftartim`
--

CREATE TABLE `tb_daftartim` (
  `daftartim_id` int(11) NOT NULL,
  `daftartim_idplayer` varchar(255) NOT NULL,
  `daftartim_tgldaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftartim`
--

INSERT INTO `tb_daftartim` (`daftartim_id`, `daftartim_idplayer`, `daftartim_tgldaftar`) VALUES
(1, 'qwerty  ', '2020-04-09'),
(2, 'a', '2020-04-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftartournament`
--

CREATE TABLE `tb_daftartournament` (
  `daftartournament_id` int(11) NOT NULL,
  `tournamentid` varchar(255) NOT NULL,
  `daftartournament_idtim` varchar(255) NOT NULL,
  `daftartournament_idplayer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftartournament`
--

INSERT INTO `tb_daftartournament` (`daftartournament_id`, `tournamentid`, `daftartournament_idtim`, `daftartournament_idplayer`) VALUES
(37, '8995', '1', '0001'),
(38, '8995', '2', '01'),
(39, '8995', '4', '21'),
(40, '8995', '3', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_klaim`
--

CREATE TABLE `tb_klaim` (
  `klaim_id` int(11) NOT NULL,
  `klaim_poin` int(11) NOT NULL,
  `klaim_tgl` date NOT NULL,
  `klaim_registrasiid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_klaim`
--

INSERT INTO `tb_klaim` (`klaim_id`, `klaim_poin`, `klaim_tgl`, `klaim_registrasiid`) VALUES
(4, 32, '2020-04-12', '51'),
(5, 20, '2020-04-12', '54'),
(6, 37, '2020-04-12', '53'),
(7, 22, '2020-04-14', '54'),
(8, 38, '2020-04-14', '51'),
(9, 44, '2020-04-14', '53'),
(10, 32, '2020-04-14', '56'),
(11, 43, '2020-04-15', '51'),
(12, 45, '2020-04-17', '53'),
(13, 29, '2020-04-17', '53'),
(14, 47, '2020-04-17', '56'),
(15, 30, '2020-04-18', '51'),
(16, 22, '2020-06-12', '60'),
(17, 50, '2020-06-12', '59'),
(18, 39, '2020-06-12', '61'),
(19, 42, '2020-06-12', '61'),
(20, 25, '2020-06-12', '62'),
(21, 40, '2020-06-12', '63'),
(22, 46, '2020-06-12', '51'),
(23, 33, '2020-06-15', '51'),
(24, 20, '2020-06-16', '51'),
(25, 37, '2020-06-17', '66');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_koin`
--

CREATE TABLE `tb_koin` (
  `koin_id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `koin_tgl` date NOT NULL,
  `koin_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_koin`
--

INSERT INTO `tb_koin` (`koin_id`, `register_id`, `koin_tgl`, `koin_total`) VALUES
(45, 45, '2020-04-06', 1),
(46, 44, '2020-04-06', 1),
(47, 46, '2020-04-06', 1),
(48, 47, '2020-04-06', 1),
(49, 48, '2020-04-06', 1),
(50, 50, '2020-04-11', 1),
(51, 51, '2020-06-18', 11),
(52, 54, '2020-04-14', 2),
(53, 53, '2020-04-17', 4),
(54, 52, '2020-04-16', 2),
(55, 56, '2020-06-17', 4),
(56, 57, '2020-06-12', 2),
(57, 59, '2020-06-12', 1),
(58, 60, '2020-06-12', 1),
(59, 61, '2020-06-12', 1),
(60, 62, '2020-06-12', 1),
(61, 63, '2020-06-12', 1),
(62, 64, '2020-06-12', 1),
(63, 65, '2020-06-12', 1),
(64, 66, '2020-06-18', 4),
(65, 67, '2020-06-15', 1),
(66, 68, '2020-06-18', 1),
(67, 69, '2020-06-18', 1),
(68, 70, '2020-06-19', 2),
(69, 71, '2020-06-19', 2),
(70, 72, '2020-06-18', 1),
(71, 73, '2020-06-18', 1),
(72, 74, '2020-06-18', 1),
(73, 75, '2020-06-18', 1),
(74, 76, '2020-06-18', 1),
(75, 77, '2020-06-18', 1),
(76, 78, '2020-06-18', 1),
(77, 79, '2020-06-18', 1),
(78, 80, '2020-06-18', 1),
(79, 81, '2020-06-18', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_idtournament` int(11) NOT NULL,
  `komentar_status` int(11) NOT NULL,
  `komentar_nama` varchar(255) NOT NULL,
  `komentar_isi` text NOT NULL,
  `komentar_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`komentar_id`, `komentar_idtournament`, `komentar_status`, `komentar_nama`, `komentar_isi`, `komentar_waktu`) VALUES
(29, 8989, 0, 'intan', 'succes', '2020-04-06 04:59:40'),
(30, 8989, 1, 'fanny', '<p>llllllllllllllll</p>\r\n', '2020-04-07 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `kota_id` int(11) NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `kota_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`kota_id`, `provinsi_id`, `kota_nama`) VALUES
(1, 1, 'Banda Aceh'),
(2, 1, 'Langsa'),
(3, 1, 'Lhokseumawe'),
(4, 1, 'Sabang'),
(5, 1, 'Meulaboh'),
(6, 1, 'Sabulussalam'),
(7, 2, 'Medan'),
(8, 2, 'Binjai'),
(9, 2, 'Padang Sidempuan'),
(10, 2, 'Pematang Siantar'),
(11, 2, 'Sibolga'),
(12, 2, 'Tanjung Balai'),
(13, 2, 'Tebing Tinggi'),
(14, 3, 'Padang'),
(15, 3, 'Bukittinggi'),
(16, 3, 'Pariaman'),
(17, 3, 'Sawahlunto'),
(18, 3, 'Padang Panjang'),
(19, 3, 'Solok'),
(20, 3, 'Payakumbuh'),
(21, 4, 'Pangkal Pinang'),
(22, 5, 'Bengkulu'),
(23, 6, 'Jambi'),
(24, 6, 'Sungai Penuh'),
(25, 7, 'Batam'),
(26, 7, 'Tanjung Pinang'),
(27, 8, 'Bandar Lampung'),
(28, 8, 'Metro'),
(29, 9, 'Pekan Baru'),
(30, 9, 'Dumai'),
(31, 10, 'Palembang'),
(32, 10, 'Lubuk Linggau'),
(33, 10, 'Prabumulih'),
(34, 10, 'Pagralam'),
(35, 18, 'Gorontalo'),
(36, 19, 'Makassar'),
(37, 19, 'Palopo'),
(38, 19, 'Pare-pare'),
(39, 20, 'Palu'),
(40, 21, 'Baubau'),
(41, 21, 'Kendari'),
(42, 55, 'Bitung'),
(43, 55, 'Manado'),
(44, 55, 'Tomohon'),
(45, 55, 'Kotamobagu'),
(46, 28, 'Maluku'),
(47, 28, 'Tual'),
(50, 29, 'Ternate'),
(51, 29, 'Tidore'),
(52, 32, 'Jayapura'),
(53, 32, 'Sorong'),
(54, 37, 'Pontianak'),
(55, 37, 'Singkawang'),
(56, 35, 'Banjarmasin'),
(57, 35, 'Banjarbaru'),
(58, 36, 'Balikpapan'),
(59, 36, 'Bontang'),
(60, 36, 'Samarinda'),
(61, 38, 'Tarakan'),
(62, 56, 'Cilegon'),
(63, 56, 'Serang'),
(64, 56, 'Tangerang'),
(65, 50, 'Jakarta'),
(66, 51, 'Bandung'),
(67, 51, 'Bekasi'),
(68, 51, 'Bogor'),
(69, 51, 'Cimahi'),
(70, 51, 'Cirebon'),
(71, 51, 'Depok'),
(72, 51, 'Sukabumi'),
(73, 51, 'Tasikmalaya'),
(74, 51, 'Banjar'),
(75, 53, 'Magelang'),
(76, 53, 'Pekalongan'),
(77, 53, 'Purwokerto'),
(78, 53, 'Salatiga'),
(79, 53, 'Semarang'),
(80, 53, 'Surakarta'),
(81, 53, 'Tegal'),
(82, 52, 'Batu'),
(83, 52, 'Blitar'),
(84, 52, 'Kediri'),
(85, 52, 'Madiun'),
(86, 52, 'Malang'),
(87, 52, 'Mojokerto'),
(88, 52, 'Pasuruan'),
(89, 52, 'Probolinggo'),
(90, 52, 'Surabaya'),
(91, 54, 'Yogyakarta'),
(92, 44, 'Denpasar'),
(93, 45, 'Bima'),
(94, 45, 'Mataram'),
(95, 46, 'Kupang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(64) NOT NULL,
  `login_nama` varchar(255) NOT NULL,
  `login_username` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_player`
--

CREATE TABLE `tb_player` (
  `player_id` varchar(255) NOT NULL,
  `player_nickname` varchar(255) NOT NULL,
  `player_tglmasuk` date NOT NULL,
  `player_jenis` varchar(200) NOT NULL,
  `player_registrasi` int(11) NOT NULL,
  `player_cek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_player`
--

INSERT INTO `tb_player` (`player_id`, `player_nickname`, `player_tglmasuk`, `player_jenis`, `player_registrasi`, `player_cek`) VALUES
('0001', 'intan', '2020-06-17', 'pb', 51, 'no'),
('0002', 'gaduik', '2020-06-17', 'pb', 66, 'no'),
('0003', 'budi', '2020-06-18', 'pb', 68, 'no'),
('0004', 'bodo', '2020-06-18', 'pb', 69, 'no'),
('01', 'putra1', '2020-06-18', 'pb', 70, 'no'),
('02', 'putra2', '2020-06-18', 'pb', 71, 'no'),
('03', 'putra3', '2020-06-18', 'pb', 72, 'no'),
('04', 'putra4', '2020-06-18', 'pb', 73, 'no'),
('11', 'put1', '2020-06-18', 'pb', 74, 'no'),
('12', 'put2', '2020-06-18', 'pb', 75, 'no'),
('13', 'put3', '2020-06-18', 'pb', 76, 'no'),
('14', 'put4', '2020-06-18', 'pb', 77, 'no'),
('21', 'evans1', '2020-06-18', 'pb', 78, 'no'),
('22', 'evans2', '2020-06-18', 'pb', 79, 'no'),
('23', 'evans3', '2020-06-18', 'pb', 80, 'no'),
('24', 'evans4', '2020-06-18', 'pb', 81, 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poin`
--

CREATE TABLE `tb_poin` (
  `poin_id` int(11) NOT NULL,
  `poin_tournament` varchar(255) NOT NULL,
  `poin_playertim` varchar(255) NOT NULL,
  `poin_playernama` varchar(255) NOT NULL,
  `poin_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_posisi`
--

CREATE TABLE `tb_posisi` (
  `posisi_id` int(11) NOT NULL,
  `posisi_timid` varchar(255) NOT NULL,
  `posisi_playerid` varchar(255) NOT NULL,
  `posisi_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_posisi`
--

INSERT INTO `tb_posisi` (`posisi_id`, `posisi_timid`, `posisi_playerid`, `posisi_nama`) VALUES
(62, '1', '0001', 'Leader'),
(63, '1', '0002', 'belakang'),
(64, '1', '0003', 'kiri'),
(65, '1', '0004', 'depan'),
(66, '2', '01', 'Leader'),
(67, '2', '02', 'depan'),
(68, '2', '03', 'belakang'),
(69, '2', '04', 'Kiri'),
(70, '3', '11', 'Leader'),
(71, '3', '12', 'depan'),
(72, '3', '13', 'belakang'),
(73, '3', '14', 'kiri'),
(74, '4', '21', 'Leader'),
(75, '4', '22', 'backend'),
(76, '4', '23', 'depan'),
(77, '4', '24', 'depan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `provinsi_id` int(11) NOT NULL,
  `pulau_id` int(11) NOT NULL,
  `provinsi_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`provinsi_id`, `pulau_id`, `provinsi_nama`) VALUES
(1, 1, 'Nanggroe Aceh Darussslam'),
(2, 1, 'Sumatera Utara'),
(3, 1, 'Sumatera Barat'),
(4, 1, 'Bangka Belitung'),
(5, 1, 'Bengkulu'),
(6, 1, 'Jambi'),
(7, 1, 'Kepulauan Riau'),
(8, 1, 'Lampung'),
(9, 1, 'Riau'),
(10, 1, 'Sumatera Selatan'),
(18, 2, 'Gorontalo'),
(19, 2, 'Sulawesi Selatan'),
(20, 2, 'Sulawesi Tengah'),
(21, 2, 'Sulawesi Tenggara'),
(28, 3, 'Maluku'),
(29, 3, 'Maluku Utara'),
(32, 4, 'Papua'),
(34, 5, 'Kalimantan Tengah'),
(35, 5, 'Kalimantan Selatan'),
(36, 5, 'Kalimantan Timur'),
(37, 5, 'Kalimantan Barat'),
(38, 5, 'Kalimantan Utara'),
(44, 7, 'Bali'),
(45, 7, 'Nusa Tenggara Barat'),
(46, 7, 'Nusa Tenggara Timur'),
(50, 6, 'Jakarta'),
(51, 6, 'Jawa Barat'),
(52, 6, 'Jawa Timur'),
(53, 6, 'Jawa Tengah'),
(54, 6, 'Yogyakarta'),
(55, 2, 'Sulawesi Utara'),
(56, 6, 'Banten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pulau`
--

CREATE TABLE `tb_pulau` (
  `pulau_id` int(11) NOT NULL,
  `pulau_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pulau`
--

INSERT INTO `tb_pulau` (`pulau_id`, `pulau_nama`) VALUES
(1, 'Sumatera'),
(2, 'Sulawesi'),
(3, 'Maluku'),
(4, 'Papua'),
(5, 'Kalimantan'),
(6, 'Jawa'),
(7, 'Nusa Tenggara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `registrasi_id` int(11) NOT NULL,
  `registrasi_nama` varchar(255) NOT NULL,
  `registrasi_nohp` varchar(20) NOT NULL,
  `registrasi_email` varchar(255) NOT NULL,
  `registrasi_username` varchar(255) NOT NULL,
  `registrasi_password` varchar(255) NOT NULL,
  `registrasi_tgllahir` date NOT NULL,
  `registrasi_alamat` text NOT NULL,
  `registrasi_fb` varchar(255) NOT NULL,
  `registrasi_yt` varchar(255) NOT NULL,
  `registrasi_ig` varchar(255) NOT NULL,
  `registrasi_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`registrasi_id`, `registrasi_nama`, `registrasi_nohp`, `registrasi_email`, `registrasi_username`, `registrasi_password`, `registrasi_tgllahir`, `registrasi_alamat`, `registrasi_fb`, `registrasi_yt`, `registrasi_ig`, `registrasi_image`) VALUES
(51, 'intan', '098765434', 'intan@gmail.com', 'intan', 'b1098cab9c2db3eb9f576eb66c33449c', '1999-03-11', 'Banda Aceh', '', '', '', '2.jpg'),
(66, 'gaduik', '3343323232', 'gaduik@gmail.com', 'gaduik', 'c25b1fc593c8ed1974bd45810031b883', '1995-09-23', 'Padang', 'gaduik', 'gaduik', '@gaduik', 'default.jpg'),
(68, 'Nulla ipsum ad moll', 'Ex non quasi pariatu', 'rumyga@mailinator.com', 'budi', '00dfc53ee86af02e742515cdcf075ed3', '1979-05-02', 'Tual', 'Rerum maiores qui id', 'Voluptatem Ex sequi', 'Eveniet voluptas ea', 'default.jpg'),
(69, 'bodo', 'Consequatur quo eni', 'povyxuhy@mailinator.com', 'bodo', '0032a598e52fc6f3eb3dd7b886490570', '1997-12-04', 'Padang', 'Duis facere consecte', 'Eligendi tenetur lau', 'Et ut voluptates nih', 'default.jpg'),
(70, 'putra1', 'Ullamco provident n', 'hilav@mailinator.com', 'putra1', 'ecc66e7dfb4e7b72bc10f1f6685a5414', '1980-08-10', 'Jayapura', 'Culpa incidunt mag', 'Veritatis unde ratio', 'Nemo commodi officii', 'default.jpg'),
(71, 'putra2', 'Est fugiat obcaecat', 'bepe@mailinator.com', 'putra2', '3a6052db135e03cd9b3baf14f8331467', '1999-11-23', 'Jambi', 'Eum ut doloremque vo', 'Ut aliquid dolore te', 'Quia nihil nulla mol', 'default.jpg'),
(72, 'putra3', 'Illum reiciendis co', 'sizex@mailinator.com', 'putra3', 'e1a2c7585f0e7ae4cf8b7ab1b4d49d95', '1994-07-15', 'Gorontalo', 'Eligendi id voluptat', 'Commodo cum quas qui', 'Ut sit debitis vel ', 'default.jpg'),
(73, 'putra4', 'Blanditiis eum omnis', 'byrotag@mailinator.com', 'putra4', 'e1691d7d7db5c532d61995bcbe62e8f2', '1988-02-15', 'Denpasar', 'Nemo eu et ab ipsum', 'Alias eum ratione ut', 'Illum consequatur ', 'default.jpg'),
(74, 'put1', 'Sunt fugiat ut qua', 'fadu@mailinator.com', 'put1', '5c8bdd8df0d81369e8e23d7a52fa6e79', '2000-01-05', 'Palopo', 'Sunt dolore ea qui ', 'Necessitatibus quia ', 'Dolores minim autem ', 'default.jpg'),
(75, 'put2', 'Vero earum pariatur', 'baguxojom@mailinator.com', 'put2', '6e367c0b257b6c0294f3a4a899406b06', '1972-09-14', 'Padang', 'Non in totam est dol', 'Aut sed qui culpa q', 'Ut veritatis eveniet', 'default.jpg'),
(76, 'put3', 'Esse laboriosam bea', 'zuwop@mailinator.com', 'put3', 'ba1a1d567d1dd1b3f99e08e1c16ec497', '2016-03-23', 'Padang', 'Vel reprehenderit ma', 'Nisi magni et ullam ', 'Exercitationem enim ', 'default.jpg'),
(77, 'put4', 'Illo sunt id assume', 'pacosasaw@mailinator.com', 'put4', '2fa83ef8e2705316e7ca92fb5dbdd3a5', '2016-12-27', 'Makassar', 'Ut ut consequatur cu', 'Laboris aut aut eos ', 'Cupiditate cum recus', 'default.jpg'),
(78, 'evans1', 'Lorem minim do molli', 'nypykubymu@mailinator.com', 'evans1', '6e414feec8efb2696f06385031095e2e', '2015-07-22', 'Banjarmasin', 'Sit in nisi sint et', 'Rerum qui reiciendis', 'Cupiditate fugit po', 'default.jpg'),
(79, 'evans2', 'Odit reprehenderit c', 'vypidow@mailinator.com', 'evans2', 'b0854088ca5680aa7eaf7b7beb9456a8', '2008-05-17', 'Padang Sidempuan', 'Consectetur asperio', 'Nostrum dolores mini', 'Fuga Voluptatem Cu', 'default.jpg'),
(80, 'evans3', 'Voluptatem Commodi ', 'gupor@mailinator.com', 'evans3', '30170c467f7d286296c7f46c987f9877', '1995-04-25', 'Bogor', 'Excepteur blanditiis', 'Enim quam pariatur ', 'Impedit excepteur n', 'default.jpg'),
(81, 'evans4', 'Ut facilis dolore at', 'livywenewe@mailinator.com', 'evans4', 'aef2597bc240703616ba98f5f61e37f3', '1978-10-06', 'Balikpapan', 'Aliquam do culpa et', 'Perspiciatis volupt', 'Ut qui ea et illo re', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_request`
--

CREATE TABLE `tb_request` (
  `request_id` int(11) NOT NULL,
  `request_timid` varchar(100) NOT NULL,
  `request_playerid` varchar(500) NOT NULL,
  `request_posisi` varchar(500) NOT NULL,
  `request_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reward`
--

CREATE TABLE `tb_reward` (
  `reward_id` int(11) NOT NULL,
  `reward_jenis` varchar(255) NOT NULL,
  `reward_nama` varchar(255) NOT NULL,
  `reward_stok` int(11) NOT NULL,
  `reward_koin` int(11) NOT NULL,
  `reward_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sponsor`
--

CREATE TABLE `tb_sponsor` (
  `sponsor_id` int(10) NOT NULL,
  `sponsor_nama` varchar(255) NOT NULL,
  `sponsor_tglmulai` date NOT NULL,
  `sponsor_tglselesai` date NOT NULL,
  `sponsor_link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sponsor`
--

INSERT INTO `tb_sponsor` (`sponsor_id`, `sponsor_nama`, `sponsor_tglmulai`, `sponsor_tglselesai`, `sponsor_link`, `image`) VALUES
(10, 'Mediatama Web ', '2020-03-01', '2020-03-14', 'http://mediatamaweb.co.id', '111.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tim`
--

CREATE TABLE `tb_tim` (
  `tim_id` int(11) NOT NULL,
  `tim_registrasi` varchar(100) NOT NULL,
  `tim_about` text NOT NULL,
  `tim_nama` varchar(255) NOT NULL,
  `tim_lokasi` varchar(255) NOT NULL,
  `tim_jenis` varchar(500) NOT NULL,
  `tim_tahunmasuk` date NOT NULL,
  `tim_fb` varchar(255) NOT NULL,
  `tim_yt` varchar(255) NOT NULL,
  `tim_ig` varchar(255) NOT NULL,
  `tim_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `tim_cek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tim`
--

INSERT INTO `tb_tim` (`tim_id`, `tim_registrasi`, `tim_about`, `tim_nama`, `tim_lokasi`, `tim_jenis`, `tim_tahunmasuk`, `tim_fb`, `tim_yt`, `tim_ig`, `tim_image`, `tim_cek`) VALUES
(1, '51', '<p>tim baru ko mah</p>\r\n', 'coba1', 'Padang', 'pb', '2020-06-17', 'coba1', 'coba1', 'coba1', '13.png', 'no'),
(2, '70', '<p>qwerty</p>\r\n', 'coba2', 'Padang', 'pb', '2020-06-18', 'coba2', 'coba2', 'coba2', 'images.jpg', 'no'),
(3, '74', '<p>asd</p>\r\n', 'coba3', 'Padang', 'pb', '2020-06-18', 'coba3', 'coba3', 'coba3', '3.png', 'no'),
(4, '78', '<p>zxc</p>\r\n', 'coba4', 'Padang', 'pb', '2020-06-18', 'coba4', 'coba4', 'coba4', '4.png', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tournament`
--

CREATE TABLE `tb_tournament` (
  `tournament_id` int(11) NOT NULL,
  `tournament_jenis` varchar(255) NOT NULL,
  `tournament_nama` varchar(255) NOT NULL,
  `tournament_status` varchar(255) NOT NULL,
  `tournament_tglmulai` date NOT NULL,
  `tournament_tglakhir` date NOT NULL,
  `tournament_participan` int(10) NOT NULL,
  `tournament_mode` varchar(255) NOT NULL,
  `tournament_lokasi` text NOT NULL,
  `tournament_prize` varchar(255) NOT NULL,
  `tournament_prize1` varchar(100) NOT NULL,
  `tournament_fee` varchar(255) NOT NULL,
  `tournament_detail` text NOT NULL,
  `tournament_region` varchar(255) NOT NULL,
  `tournament_format` varchar(255) NOT NULL,
  `tournament_organizer` varchar(255) NOT NULL,
  `tournament_rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tournament`
--

INSERT INTO `tb_tournament` (`tournament_id`, `tournament_jenis`, `tournament_nama`, `tournament_status`, `tournament_tglmulai`, `tournament_tglakhir`, `tournament_participan`, `tournament_mode`, `tournament_lokasi`, `tournament_prize`, `tournament_prize1`, `tournament_fee`, `tournament_detail`, `tournament_region`, `tournament_format`, `tournament_organizer`, `tournament_rules`) VALUES
(8991, 'pb', 'PB Pro Circuit', 'selesai', '2020-04-07', '2020-04-14', 18, 'squad', 'Medan', '1000000', '100', 'free', '<p>ini turnament</p>\r\n', 'Indonesia', 'double elimination', 'valve', '<p>asa</p>\r\n'),
(8992, 'pubg', 'PUBG pro circuit', 'mulai', '2020-04-07', '2020-04-14', 100, 'squad', 'Padang', '1.000.000', '10000', 'free', '<p>ini turnament</p>\r\n', 'Indonesia', 'Single elimination', 'valve', '<p>qqq</p>\r\n'),
(8993, 'ml', 'ML Pro Circuit', 'mulai', '2020-04-07', '2020-04-14', 18, 'squad', 'Medan', '1000000', '100', 'free', '<p>ini turnament</p>\r\n', 'Indonesia', 'double elimination', 'valve', '<p>mnsa</p>\r\n'),
(8994, 'pb', 'pb test', 'selesai', '2020-04-17', '2020-04-24', 11, 'squad', 'Padang', '1000000', '100', 'free', '<p>qq</p>\r\n', 'indonesia', 'single', 'admin', '<p>aa</p>\r\n'),
(8995, 'pb', 'Point Blank  R.Sumatera 1sT', 'mulai', '2020-06-12', '2020-06-15', 32, 'squad', 'Padang', '200', '5000000', 'Mobil Mercedes Bens Ci-Native Ambrul', '<p>Silahkan Ramaikan Guys</p>\r\n', 'Sumatera 1st PBNC 12', 'Upper Bracket', 'Cyber Gaming', '<p>FULL CASH&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_achievement`
--
ALTER TABLE `tb_achievement`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indeks untuk tabel `tb_bagan`
--
ALTER TABLE `tb_bagan`
  ADD PRIMARY KEY (`bagan_id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `tb_bracket`
--
ALTER TABLE `tb_bracket`
  ADD PRIMARY KEY (`bracket_id`);

--
-- Indeks untuk tabel `tb_daftartim`
--
ALTER TABLE `tb_daftartim`
  ADD PRIMARY KEY (`daftartim_id`);

--
-- Indeks untuk tabel `tb_daftartournament`
--
ALTER TABLE `tb_daftartournament`
  ADD PRIMARY KEY (`daftartournament_id`);

--
-- Indeks untuk tabel `tb_klaim`
--
ALTER TABLE `tb_klaim`
  ADD PRIMARY KEY (`klaim_id`);

--
-- Indeks untuk tabel `tb_koin`
--
ALTER TABLE `tb_koin`
  ADD PRIMARY KEY (`koin_id`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indeks untuk tabel `tb_player`
--
ALTER TABLE `tb_player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indeks untuk tabel `tb_poin`
--
ALTER TABLE `tb_poin`
  ADD PRIMARY KEY (`poin_id`);

--
-- Indeks untuk tabel `tb_posisi`
--
ALTER TABLE `tb_posisi`
  ADD PRIMARY KEY (`posisi_id`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indeks untuk tabel `tb_pulau`
--
ALTER TABLE `tb_pulau`
  ADD PRIMARY KEY (`pulau_id`);

--
-- Indeks untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`registrasi_id`);

--
-- Indeks untuk tabel `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indeks untuk tabel `tb_reward`
--
ALTER TABLE `tb_reward`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indeks untuk tabel `tb_sponsor`
--
ALTER TABLE `tb_sponsor`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indeks untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD PRIMARY KEY (`tim_id`);

--
-- Indeks untuk tabel `tb_tournament`
--
ALTER TABLE `tb_tournament`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_achievement`
--
ALTER TABLE `tb_achievement`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_bagan`
--
ALTER TABLE `tb_bagan`
  MODIFY `bagan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `berita_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tb_bracket`
--
ALTER TABLE `tb_bracket`
  MODIFY `bracket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_daftartim`
--
ALTER TABLE `tb_daftartim`
  MODIFY `daftartim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_daftartournament`
--
ALTER TABLE `tb_daftartournament`
  MODIFY `daftartournament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_klaim`
--
ALTER TABLE `tb_klaim`
  MODIFY `klaim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_koin`
--
ALTER TABLE `tb_koin`
  MODIFY `koin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_poin`
--
ALTER TABLE `tb_poin`
  MODIFY `poin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_posisi`
--
ALTER TABLE `tb_posisi`
  MODIFY `posisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `provinsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_pulau`
--
ALTER TABLE `tb_pulau`
  MODIFY `pulau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `registrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_reward`
--
ALTER TABLE `tb_reward`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sponsor`
--
ALTER TABLE `tb_sponsor`
  MODIFY `sponsor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  MODIFY `tim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tournament`
--
ALTER TABLE `tb_tournament`
  MODIFY `tournament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8996;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
