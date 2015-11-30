-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2014 at 04:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `panti_rehab`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id_aboutus` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_aboutus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id_aboutus`, `judul`, `isi`) VALUES
(1, 'as', 'aku adalah'),
(2, 'erwin jelek', 'aku adalah gsjdhfcjgfh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE IF NOT EXISTS `administrasi` (
  `id_administrasi` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `nm_pembayar` varchar(30) NOT NULL,
  `tgl_transaksi` varchar(30) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id_administrasi`),
  UNIQUE KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- RELATIONS FOR TABLE `administrasi`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id_administrasi`, `id_pasien`, `nm_pembayar`, `tgl_transaksi`, `total`) VALUES
(7, 1, 'ass', '07/08/2014', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `cara_penggunaan`
--

CREATE TABLE IF NOT EXISTS `cara_penggunaan` (
  `k_cp` int(10) NOT NULL,
  `cp` varchar(30) NOT NULL,
  PRIMARY KEY (`k_cp`),
  UNIQUE KEY `k_cp` (`k_cp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cara_penggunaan`
--

INSERT INTO `cara_penggunaan` (`k_cp`, `cp`) VALUES
(0, '-'),
(1, 'Oral'),
(2, 'Nasal/sublingual/suppositoria'),
(3, 'Merokok'),
(4, 'Injeksi Non-IV'),
(5, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `nip_dokter` int(30) NOT NULL,
  `nm_dokter` varchar(30) NOT NULL,
  `ttl_dokter` varchar(30) NOT NULL,
  `alamat_dokter` varchar(50) NOT NULL,
  `nohp_dokter` int(20) NOT NULL,
  `jabatan_dokter` varchar(30) NOT NULL,
  PRIMARY KEY (`id_dokter`),
  UNIQUE KEY `id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- RELATIONS FOR TABLE `dokter`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_login`, `nip_dokter`, `nm_dokter`, `ttl_dokter`, `alamat_dokter`, `nohp_dokter`, `jabatan_dokter`) VALUES
(3, 17, 3454578, 'asdf', '08/07/2014', 'paris', 2147483647, 'asdfvghnjmk');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_asesmen`
--

CREATE TABLE IF NOT EXISTS `hasil_asesmen` (
  `id_hasesmen` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `id_smedis` int(10) NOT NULL,
  `id_spekerjaan` int(10) NOT NULL,
  `id_spnarkotika` int(10) NOT NULL,
  `id_slegal` int(10) NOT NULL,
  `id_rksosial` int(10) NOT NULL,
  `id_spsikiatris` int(10) NOT NULL,
  `tgl_dtg` varchar(30) NOT NULL,
  `medis` int(10) NOT NULL,
  `dukungan` int(10) NOT NULL,
  `napza` int(10) NOT NULL,
  `legal` int(10) NOT NULL,
  `keluarga` int(10) NOT NULL,
  `psikiatris` int(10) NOT NULL,
  `d_napza` varchar(50) NOT NULL,
  `d_lain` varchar(300) NOT NULL,
  `r_masalah` varchar(300) NOT NULL,
  `r_tlanjut` varchar(300) NOT NULL,
  PRIMARY KEY (`id_hasesmen`),
  UNIQUE KEY `id_pasien` (`id_pasien`),
  KEY `id_pasien_2` (`id_pasien`,`id_smedis`,`id_spekerjaan`,`id_spnarkotika`,`id_slegal`,`id_rksosial`,`id_spsikiatris`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `hasil_asesmen`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Dumping data for table `hasil_asesmen`
--

INSERT INTO `hasil_asesmen` (`id_hasesmen`, `id_pasien`, `id_smedis`, `id_spekerjaan`, `id_spnarkotika`, `id_slegal`, `id_rksosial`, `id_spsikiatris`, `tgl_dtg`, `medis`, `dukungan`, `napza`, `legal`, `keluarga`, `psikiatris`, `d_napza`, `d_lain`, `r_masalah`, `r_tlanjut`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, '01/10/2014', 0, 4, 1, 0, 4, 0, 'F10: Gangguan mental dan perilaku akibat pengunaan', 'tidak tahu', 'ntahlah', 'asesmen lanjutan / mendalam');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_demografis`
--

CREATE TABLE IF NOT EXISTS `informasi_demografis` (
  `id_idemografis` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_datang` varchar(30) NOT NULL,
  `s_kawin` enum('m','bm','dj') NOT NULL,
  `p_terakhir` enum('sd','smp','sma','ak','pt') NOT NULL,
  PRIMARY KEY (`id_idemografis`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `informasi_demografis`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE IF NOT EXISTS `jadwal_dokter` (
  `id_jdokter` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_jdokter` varchar(30) NOT NULL,
  `minggu` varchar(30) NOT NULL,
  `dr_umum` varchar(30) NOT NULL,
  `dr_konsulen` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_jdokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jdokter`, `tgl_jdokter`, `minggu`, `dr_umum`, `dr_konsulen`, `ket`) VALUES
(3, '04/08/2014', '1', 'ana', 'mahmud', 'sakit'),
(6, '06/08/2014', '2', 'fina', 'mimi', 'apa sih'),
(7, '09/07/2014', '3', 'alex', 'dina', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `nip_karyawan` int(30) NOT NULL,
  `nm_karyawan` varchar(30) NOT NULL,
  `ttl_karyawan` varchar(30) NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `nohp_karyawan` int(20) NOT NULL,
  `jabatan_karyawan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_karyawan`),
  UNIQUE KEY `id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `karyawan`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_login`, `nip_karyawan`, `nm_karyawan`, `ttl_karyawan`, `alamat_karyawan`, `nohp_karyawan`, `jabatan_karyawan`) VALUES
(1, 6, 45, 'erwh', '31/07/2014', 'dansen', 2147483647, 'kepala');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_pasien`
--

CREATE TABLE IF NOT EXISTS `kebutuhan_pasien` (
  `id_kpasien` int(10) NOT NULL AUTO_INCREMENT,
  `nm_barang` varchar(30) NOT NULL,
  `j_barang` int(5) NOT NULL,
  PRIMARY KEY (`id_kpasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kebutuhan_pasien`
--

INSERT INTO `kebutuhan_pasien` (`id_kpasien`, `nm_barang`, `j_barang`) VALUES
(1, 'sabun mandi', 50);

-- --------------------------------------------------------

--
-- Table structure for table `keperawatan`
--

CREATE TABLE IF NOT EXISTS `keperawatan` (
  `id_keperawatan` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `tgl_keperawatan` varchar(30) NOT NULL,
  `jam_keperawatan` varchar(30) NOT NULL,
  `mhs_percaya` int(5) NOT NULL,
  `m_halusinasi` int(5) NOT NULL,
  `mpm_ha` int(5) NOT NULL,
  `mpm_ja` int(5) NOT NULL,
  `mengevaluasi_ja` int(5) NOT NULL,
  `mpm_hb` int(5) NOT NULL,
  `mpm_jb` int(5) NOT NULL,
  `mengevaluasi_jb` int(5) NOT NULL,
  `mpm_hc` int(5) NOT NULL,
  `mpm_jc` int(5) NOT NULL,
  `mengevaluasi_jc` int(5) NOT NULL,
  `mpm_hd` int(5) NOT NULL,
  `mpm_jd` int(5) NOT NULL,
  PRIMARY KEY (`id_keperawatan`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- RELATIONS FOR TABLE `keperawatan`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Dumping data for table `keperawatan`
--

INSERT INTO `keperawatan` (`id_keperawatan`, `id_pasien`, `ruangan`, `tgl_keperawatan`, `jam_keperawatan`, `mhs_percaya`, `m_halusinasi`, `mpm_ha`, `mpm_ja`, `mengevaluasi_ja`, `mpm_hb`, `mpm_jb`, `mengevaluasi_jb`, `mpm_hc`, `mpm_jc`, `mengevaluasi_jc`, `mpm_hd`, `mpm_jd`) VALUES
(1, 1, 'mawar', '01/10/2014', '12.00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(2, 1, 'mawar', '02/10/2014', '12.00', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 1, 'mawar', '03/10/2014', '12.00', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 1, 'mawar', '04/10/2014', '12.00', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, 'mawar', '05/10/2014', '12.00', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(6, 1, 'mawar', '06/10/2014', '12.00', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 1, 'mawar', '07/10/2014', '12.00', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 1, 'mawar', '08/10/2014', '12.00', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 1, 'mawar', '09/10/2014', '12.00', 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0),
(10, 1, 'mawar', '10/10/2014', '12.00', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(11, 8, 'mawar', '11/10/2014', '12.00', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(12, 1, 'mawar', '12/10/2014', '12.00', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 1, 'mawar', '13/10/2014', '12.00', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(14, 1, 'mawar', '14/10/2014', '12.00', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(15, 1, 'mawar', '15/10/2014', '12.00', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kode_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `kode_pekerjaan` (
  `k_pekerjaan` int(10) NOT NULL,
  `nm_pekerjaan` varchar(50) NOT NULL,
  PRIMARY KEY (`k_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pekerjaan`
--

INSERT INTO `kode_pekerjaan` (`k_pekerjaan`, `nm_pekerjaan`) VALUES
(0, 'Angkatan bersenjata'),
(1, 'Anggota dewan legislatif'),
(2, 'Profesional'),
(3, 'Teknisi'),
(4, 'Juru Tulis'),
(5, 'Jasa servis dan penjualan'),
(6, 'Pekerja terlatih di bidang pertanian dan perikanan'),
(7, 'Keterampilan dan perdagangan'),
(8, 'Operator alat/pabrik dan mesin'),
(9, 'Pekerja kasar');

-- --------------------------------------------------------

--
-- Table structure for table `konseling`
--

CREATE TABLE IF NOT EXISTS `konseling` (
  `id_konseling` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_konseling` varchar(30) NOT NULL,
  `jam_konseling` varchar(30) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id_konseling`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- RELATIONS FOR TABLE `konseling`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Dumping data for table `konseling`
--

INSERT INTO `konseling` (`id_konseling`, `id_pasien`, `tgl_konseling`, `jam_konseling`, `catatan`) VALUES
(4, 1, '06/08/2014', '12.00', 'saya sedang uji coba');

-- --------------------------------------------------------

--
-- Table structure for table `konselor`
--

CREATE TABLE IF NOT EXISTS `konselor` (
  `id_konselor` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `nip_konselor` int(30) NOT NULL,
  `nm_konselor` varchar(30) NOT NULL,
  `ttl_konselor` varchar(30) NOT NULL,
  `alamat_konselor` varchar(50) NOT NULL,
  `nohp_konselor` int(20) NOT NULL,
  `jabatan_konselor` varchar(30) NOT NULL,
  PRIMARY KEY (`id_konselor`),
  UNIQUE KEY `id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `konselor`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `konselor`
--

INSERT INTO `konselor` (`id_konselor`, `id_login`, `nip_konselor`, `nm_konselor`, `ttl_konselor`, `alamat_konselor`, `nohp_konselor`, `jabatan_konselor`) VALUES
(2, 4, 123, 'erwhfgh', '28/08/2014', 'dansen', 2147483647, 'asdfvghnjmk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `uname`, `password`, `kategori`) VALUES
(1, 'aji', '8d045450ae16dc81213a75b725ee2760', 'petugas rekam medik'),
(3, 'perawat', '5d6a514ee02a5fc910dee69cc07017cc', 'perawat'),
(4, 'konselor', '1c1861bcfa010bce718bf4bf46d64f84', 'konselor'),
(5, 'logistik', 'cb1f02561c07f62717a4814c048a6239', 'logistik'),
(6, 'karyawan', '9e014682c94e0f2cc834bf7348bda428', 'karyawan'),
(10, 'bayu', 'a430e06de5ce438d499c2e4063d60fd6', 'orang tua'),
(17, 'dokter', 'd22af4180eee4bd95072eb90f94930e5', 'dokter'),
(18, 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 'orang tua'),
(19, 'doni', '2da9cd653f63c010b6d6c5a5ad73fe32', 'orang tua');

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE IF NOT EXISTS `logistik` (
  `id_logistik` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `nip_logistik` int(30) NOT NULL,
  `nm_logistik` varchar(30) NOT NULL,
  `ttl_logistik` varchar(30) NOT NULL,
  `alamat_logistik` varchar(50) NOT NULL,
  `nohp_logistik` int(20) NOT NULL,
  `jabatan_logistik` varchar(30) NOT NULL,
  PRIMARY KEY (`id_logistik`),
  UNIQUE KEY `id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `logistik`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `logistik`
--

INSERT INTO `logistik` (`id_logistik`, `id_login`, `nip_logistik`, `nm_logistik`, `ttl_logistik`, `alamat_logistik`, `nohp_logistik`, `jabatan_logistik`) VALUES
(1, 5, 674, 'aji', '05/07/2014', 'sdfhg', 2147483647, 'logistik');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE IF NOT EXISTS `orang_tua` (
  `id_otua` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `id_pasien` int(10) NOT NULL,
  `nm_otua` varchar(30) NOT NULL,
  `alamat_otua` varchar(50) NOT NULL,
  `nohp_otua` int(20) NOT NULL,
  `kode_unik` varchar(10) NOT NULL,
  PRIMARY KEY (`id_otua`),
  UNIQUE KEY `id_login` (`id_login`),
  UNIQUE KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- RELATIONS FOR TABLE `orang_tua`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_otua`, `id_login`, `id_pasien`, `nm_otua`, `alamat_otua`, `nohp_otua`, `kode_unik`) VALUES
(10, 10, 1, 'ana', 'gfhmm', 987654232, '123asd'),
(23, 18, 8, 'rahmanto', 'kuburaya', 2147483647, 'fhsgdh7325'),
(24, 19, 9, 'Doni Setiawan', 'danau sentarum', 2147483647, 'ron142');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(10) NOT NULL AUTO_INCREMENT,
  `no_rmedik` varchar(30) NOT NULL,
  `nm_pasien` varchar(30) NOT NULL,
  `tgl_masuk` varchar(30) NOT NULL,
  `tgl_keluar` varchar(30) NOT NULL,
  `ttl_pasien` varchar(30) NOT NULL,
  `usia` int(5) NOT NULL,
  `j_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `s_perkawinan` varchar(30) NOT NULL,
  `hiv_aids` varchar(10) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `nohp_pasien` int(20) NOT NULL,
  `bangsa_suku` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_rmedik`, `nm_pasien`, `tgl_masuk`, `tgl_keluar`, `ttl_pasien`, `usia`, `j_kelamin`, `agama`, `pendidikan`, `pekerjaan`, `status`, `s_perkawinan`, `hiv_aids`, `alamat_pasien`, `nohp_pasien`, `bangsa_suku`, `jenis`, `keterangan`) VALUES
(1, '003', 'aman', '01/07/2014', '15/07/2014', '06/07/2014', 23, 'Laki-laki', 'Islam', 'Akademik', 'dfg', 'Lama', 'Belum Menikah', '-', 'ghjk   ', 435678, 'dfghj', 'Ganja', 'dsfg'),
(8, '002', 'sasa', '02/09/2014', '20/09/2014', '11/08/2014', 23, 'Perempuan', 'Protestan', 'SMA', 'mahasiswa', 'Baru', 'Belum Menikah', '-', 'bsagd asdgha', 2147483647, 'melayu', 'Alkohol', 'minum'),
(9, '001', 'roni', '01/09/2014', '27/09/2014', '14/09/2014', 17, 'Laki-laki', 'Budha', 'Akademik', 'kontraktor', 'Lama', 'Duda', '-', 'bsagd asdgha       ', 2147483647, 'cina', 'Shabu', 'abc'),
(10, '004', 'amanah', '01/10/2014', '25/10/2014', '07/10/2014', 17, 'Perempuan', 'Protestan', 'SMA', 'pelajar', 'Baru', 'Belum Menikah', '-', 'bsagd asdgha', 2147483647, 'cina', 'Shabu', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_fisik`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan_fisik` (
  `id_pfisik` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_asesmen` varchar(30) NOT NULL,
  `tekanan_darah` varchar(30) NOT NULL,
  `nadi` varchar(30) NOT NULL,
  `pernapasan` varchar(30) NOT NULL,
  `suhu` varchar(30) NOT NULL,
  `s_pencernaan` varchar(30) NOT NULL,
  `s_jantung` varchar(30) NOT NULL,
  `s_pernapasan` varchar(30) NOT NULL,
  `s_spusat` varchar(30) NOT NULL,
  `tht_kulit` varchar(30) NOT NULL,
  `ktrngn` text NOT NULL,
  `u_benzodiazepin` enum('ya','tidak') NOT NULL,
  `u_kanabis` enum('ya','tidak') NOT NULL,
  `u_opiat` enum('ya','tidak') NOT NULL,
  `u_amfetamin` enum('ya','tidak') NOT NULL,
  `u_kokain` enum('ya','tidak') NOT NULL,
  `u_barbiturat` enum('ya','tidak') NOT NULL,
  `u_alkohol` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_pfisik`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `pemeriksaan_fisik`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE IF NOT EXISTS `perawat` (
  `id_perawat` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `nip_perawat` int(30) NOT NULL,
  `nm_perawat` varchar(30) NOT NULL,
  `ttl_perawat` varchar(30) NOT NULL,
  `alamat_perawat` varchar(50) NOT NULL,
  `nohp_perawat` int(20) NOT NULL,
  `jabatan_perawat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_perawat`),
  UNIQUE KEY ` id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `perawat`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`id_perawat`, `id_login`, `nip_perawat`, `nm_perawat`, `ttl_perawat`, `alamat_perawat`, `nohp_perawat`, `jabatan_perawat`) VALUES
(1, 3, 34, 'sdf', '08/07/2014', 'sepakat', 89787654, 'pembantu');

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan`
--

CREATE TABLE IF NOT EXISTS `perkembangan` (
  `id_perkembangan` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `tgl_perkembangan` varchar(30) NOT NULL,
  `jam_perkembangan` varchar(30) NOT NULL,
  `mhs_percaya` int(5) NOT NULL,
  `m_pk` int(5) NOT NULL,
  `mpk_cfa` int(5) NOT NULL,
  `mpm_ja` int(5) NOT NULL,
  `mengevaluasi_ja` int(5) NOT NULL,
  `mpk_cfb` int(5) NOT NULL,
  `mpm_jb` int(5) NOT NULL,
  `mengevaluasi_jb` int(5) NOT NULL,
  `mpk_cv` int(5) NOT NULL,
  `mpm_jc` int(5) NOT NULL,
  `mengevaluasi_jc` int(5) NOT NULL,
  `mpk_cs` int(5) NOT NULL,
  `mpm_jd` int(5) NOT NULL,
  `mengevaluasi_jd` int(5) NOT NULL,
  `mpk_mo` int(5) NOT NULL,
  `mpm_je` int(5) NOT NULL,
  PRIMARY KEY (`id_perkembangan`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `perkembangan`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Dumping data for table `perkembangan`
--

INSERT INTO `perkembangan` (`id_perkembangan`, `id_pasien`, `ruangan`, `tgl_perkembangan`, `jam_perkembangan`, `mhs_percaya`, `m_pk`, `mpk_cfa`, `mpm_ja`, `mengevaluasi_ja`, `mpk_cfb`, `mpm_jb`, `mengevaluasi_jb`, `mpk_cv`, `mpm_jc`, `mengevaluasi_jc`, `mpk_cs`, `mpm_jd`, `mengevaluasi_jd`, `mpk_mo`, `mpm_je`) VALUES
(2, 1, 'mawar', '02/10/2014', '12.00', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profil_panti`
--

CREATE TABLE IF NOT EXISTS `profil_panti` (
  `id_ppanti` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_ppanti`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `profil_panti`
--

INSERT INTO `profil_panti` (`id_ppanti`, `judul`, `isi`) VALUES
(1, 'coba', 'aku adalah'),
(6, 'erwin jelek', 'aku adalah gsjdhfcjgfh'),
(7, 'panti', 'bngcm ');

-- --------------------------------------------------------

--
-- Table structure for table `p_rmedik`
--

CREATE TABLE IF NOT EXISTS `p_rmedik` (
  `id_prmedik` int(10) NOT NULL AUTO_INCREMENT,
  `id_login` int(10) NOT NULL,
  `nip_prmedik` int(30) NOT NULL,
  `nm_prmedik` varchar(30) NOT NULL,
  `ttl_prmedik` varchar(30) NOT NULL,
  `alamat_prmedik` varchar(50) NOT NULL,
  `nohp_prmedik` int(20) NOT NULL,
  `jabatan_prmedik` varchar(30) NOT NULL,
  PRIMARY KEY (`id_prmedik`),
  UNIQUE KEY `id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `p_rmedik`:
--   `id_login`
--       `login` -> `id_login`
--

--
-- Dumping data for table `p_rmedik`
--

INSERT INTO `p_rmedik` (`id_prmedik`, `id_login`, `nip_prmedik`, `nm_prmedik`, `ttl_prmedik`, `alamat_prmedik`, `nohp_prmedik`, `jabatan_prmedik`) VALUES
(1, 1, 3454578, 'aji', '15/07/2014', 'sdfhg', 2147483647, 'dxfgchj');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medik`
--

CREATE TABLE IF NOT EXISTS `rekam_medik` (
  `id_rmedik` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `nm_ayah` varchar(30) NOT NULL,
  `nm_ibu` varchar(30) NOT NULL,
  `nm_si` varchar(30) NOT NULL,
  `nm_dihubungi` varchar(30) NOT NULL,
  `hubungan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `dokter_pengirim` varchar(30) NOT NULL,
  `alamat_pengirim` varchar(50) NOT NULL,
  `perubahan_alamat` varchar(50) NOT NULL,
  `dr_pjawab` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rmedik`),
  UNIQUE KEY ` id_pasien` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rekam_medik`
--

INSERT INTO `rekam_medik` (`id_rmedik`, `id_pasien`, `nm_ayah`, `nm_ibu`, `nm_si`, `nm_dihubungi`, `hubungan`, `alamat`, `no_hp`, `dokter_pengirim`, `alamat_pengirim`, `perubahan_alamat`, `dr_pjawab`) VALUES
(8, 1, 'ayah', 'ibu', 'suami', 'ama', 'keluarga', 'alamat', 2147483647, 'dokter', 'alamat', 'perubahan', 'penanggung');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE IF NOT EXISTS `rekomendasi` (
  `id_rp` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `id_perkembangan` int(10) NOT NULL,
  `id_keperawatan` int(10) NOT NULL,
  `id_konseling` int(10) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rp`),
  UNIQUE KEY `id_pasien` (`id_pasien`,`id_perkembangan`,`id_keperawatan`,`id_konseling`),
  KEY `id_perkembangan` (`id_perkembangan`),
  KEY `id_keperawatan` (`id_keperawatan`),
  KEY `id_konseling` (`id_konseling`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `rekomendasi`:
--   `id_perkembangan`
--       `perkembangan` -> `id_perkembangan`
--   `id_keperawatan`
--       `keperawatan` -> `id_keperawatan`
--   `id_konseling`
--       `konseling` -> `id_konseling`
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_klinik`
--

CREATE TABLE IF NOT EXISTS `riwayat_klinik` (
  `id_rklinik` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `id_rmedik` int(10) NOT NULL,
  `tgl_rklinik` varchar(30) NOT NULL,
  `diagnosa` varchar(300) NOT NULL,
  `catatan` text NOT NULL,
  `dokter` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rklinik`),
  UNIQUE KEY `id_pasien` (`id_pasien`,`id_rmedik`),
  KEY `id_rmedik` (`id_rmedik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- RELATIONS FOR TABLE `riwayat_klinik`:
--   `id_rmedik`
--       `rekam_medik` -> `id_rmedik`
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Dumping data for table `riwayat_klinik`
--

INSERT INTO `riwayat_klinik` (`id_rklinik`, `id_pasien`, `id_rmedik`, `tgl_rklinik`, `diagnosa`, `catatan`, `dokter`) VALUES
(3, 1, 8, '05/08/2014', 'apa ya', 'catatan', 'ana');

-- --------------------------------------------------------

--
-- Table structure for table `rk_sosial`
--

CREATE TABLE IF NOT EXISTS `rk_sosial` (
  `id_rksosial` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_asesmen` varchar(30) NOT NULL,
  `situasi` enum('pa','ps','as','ot','k','t','s','lt','kts') NOT NULL,
  `o_zat` enum('ya','tidak') NOT NULL,
  `kandung_tiri` enum('ya','tidak') NOT NULL,
  `ayah_ibu` enum('ya','tidak') NOT NULL,
  `pasangan` enum('ya','tidak') NOT NULL,
  `om_tante` enum('ya','tidak') NOT NULL,
  `teman` enum('ya','tidak') NOT NULL,
  `lainnya` enum('ya','tidak') NOT NULL,
  `ibu` enum('ya','tidak') NOT NULL,
  `ayah` enum('ya','tidak') NOT NULL,
  `adik_kakak` enum('ya','tidak') NOT NULL,
  `psgn` enum('ya','tidak') NOT NULL,
  `anak` enum('ya','tidak') NOT NULL,
  `keluarga_lain` enum('ya','tidak') NOT NULL,
  `hb_klain` varchar(30) NOT NULL,
  `t_akrab` enum('ya','tidak') NOT NULL,
  `tetangga` enum('ya','tidak') NOT NULL,
  `t_kerja` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_rksosial`),
  UNIQUE KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `rk_sosial`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `sp_narkotika`
--

CREATE TABLE IF NOT EXISTS `sp_narkotika` (
  `id_spnarkotika` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_asesmen` varchar(30) NOT NULL,
  `alkohol` int(10) NOT NULL,
  `cp_alkohol` int(10) NOT NULL,
  `heroin` int(10) NOT NULL,
  `cp_heroin` int(10) NOT NULL,
  `metadon` int(10) NOT NULL,
  `cp_metadon` int(10) NOT NULL,
  `analgesik` int(10) NOT NULL,
  `cp_analgesik` int(10) NOT NULL,
  `barbiturat` int(10) NOT NULL,
  `cp_barbiturat` int(10) NOT NULL,
  `sedatif` int(10) NOT NULL,
  `cp_sedatif` int(10) NOT NULL,
  `kokain` int(10) NOT NULL,
  `cp_kokain` int(10) NOT NULL,
  `amfetamin` int(10) NOT NULL,
  `cp_amfetamin` int(10) NOT NULL,
  `kanabis` int(10) NOT NULL,
  `cp_kanabis` int(10) NOT NULL,
  `halusinogen` int(10) NOT NULL,
  `cp_halusinogen` int(10) NOT NULL,
  `inhalan` int(10) NOT NULL,
  `cp_inhalan` int(10) NOT NULL,
  `b_zat` int(10) NOT NULL,
  `cp_bzat` int(10) NOT NULL,
  `zat_utama` varchar(30) NOT NULL,
  `t_rehabilitasi` enum('ya','tidak') NOT NULL,
  `j_trehabilitasi` varchar(30) NOT NULL,
  `od` enum('ya','tidak') NOT NULL,
  `kapan` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `c_penanggulangan` enum('rs','ps','sn') NOT NULL,
  PRIMARY KEY (`id_spnarkotika`),
  KEY `id_pasien` (`id_pasien`),
  KEY `cp_alkohol` (`cp_alkohol`),
  KEY `cp_heroin` (`cp_heroin`,`cp_metadon`,`cp_analgesik`,`cp_barbiturat`,`cp_sedatif`,`cp_kokain`,`cp_amfetamin`,`cp_kanabis`,`cp_halusinogen`,`cp_inhalan`,`cp_bzat`),
  KEY `cp_metadon` (`cp_metadon`),
  KEY `cp_analgesik` (`cp_analgesik`),
  KEY `cp_barbiturat` (`cp_barbiturat`),
  KEY `cp_sedatif` (`cp_sedatif`),
  KEY `cp_kokain` (`cp_kokain`),
  KEY `cp_amfetamin` (`cp_amfetamin`),
  KEY `cp_kanabis` (`cp_kanabis`),
  KEY `cp_halusinogen` (`cp_halusinogen`),
  KEY `cp_inhalan` (`cp_inhalan`),
  KEY `cp_bzat` (`cp_bzat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `sp_narkotika`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--   `cp_kanabis`
--       `cara_penggunaan` -> `k_cp`
--   `cp_halusinogen`
--       `cara_penggunaan` -> `k_cp`
--   `cp_inhalan`
--       `cara_penggunaan` -> `k_cp`
--   `cp_bzat`
--       `cara_penggunaan` -> `k_cp`
--   `cp_alkohol`
--       `cara_penggunaan` -> `k_cp`
--   `cp_heroin`
--       `cara_penggunaan` -> `k_cp`
--   `cp_metadon`
--       `cara_penggunaan` -> `k_cp`
--   `cp_analgesik`
--       `cara_penggunaan` -> `k_cp`
--   `cp_barbiturat`
--       `cara_penggunaan` -> `k_cp`
--   `cp_sedatif`
--       `cara_penggunaan` -> `k_cp`
--   `cp_kokain`
--       `cara_penggunaan` -> `k_cp`
--   `cp_amfetamin`
--       `cara_penggunaan` -> `k_cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_legal`
--

CREATE TABLE IF NOT EXISTS `status_legal` (
  `id_slegal` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_asesmen` varchar(30) NOT NULL,
  `mencuri` int(10) NOT NULL,
  `bb_mp` int(10) NOT NULL,
  `m_narkoba` int(10) NOT NULL,
  `pemalsuan` int(10) NOT NULL,
  `p_bersenjata` int(10) NOT NULL,
  `pembobolan` int(10) NOT NULL,
  `perampokan` int(10) NOT NULL,
  `penyerangan` int(10) NOT NULL,
  `p_rumah` int(10) NOT NULL,
  `pemerkosaan` int(10) NOT NULL,
  `pembunuhan` int(10) NOT NULL,
  `pelacuran` int(10) NOT NULL,
  `m_pengadilan` int(10) NOT NULL,
  `lain_lain` int(10) NOT NULL,
  `tuntutan` int(10) NOT NULL,
  PRIMARY KEY (`id_slegal`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `status_legal`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_medis`
--

CREATE TABLE IF NOT EXISTS `status_medis` (
  `id_smedis` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_datang` varchar(30) NOT NULL,
  `j_penyakit` varchar(30) NOT NULL,
  `t_rawat` varchar(30) NOT NULL,
  `lama` varchar(30) NOT NULL,
  `rp_kronis` enum('ya','tidak') NOT NULL,
  `j_pykt` varchar(30) NOT NULL,
  `t_medis` enum('ya','tidak') NOT NULL,
  `j_tmedis` varchar(30) NOT NULL,
  `hiv` enum('ya','tidak') NOT NULL,
  `hepatitis_b` enum('ya','tidak') NOT NULL,
  `hepatitis_c` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_smedis`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `status_medis`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `status_pekerjaan` (
  `id_spekerjaan` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `k_pekerjaan` int(10) NOT NULL,
  `tgl_asesmen` varchar(30) NOT NULL,
  `s_pekerjaan` enum('tb','b','m','irt') NOT NULL,
  `p_pekerjaan` enum('pu','pa','tt') NOT NULL,
  `keterampilan` varchar(30) NOT NULL,
  `dhidup` enum('ya','tidak') NOT NULL,
  `nm_dhidup` varchar(30) NOT NULL,
  `finansial` enum('ya','tidak') NOT NULL,
  `t_tinggal` enum('ya','tidak') NOT NULL,
  `makan` enum('ya','tidak') NOT NULL,
  `perawatan` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_spekerjaan`),
  KEY `id_pasien` (`id_pasien`,`k_pekerjaan`),
  KEY `k_pekerjaan` (`k_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `status_pekerjaan`:
--   `k_pekerjaan`
--       `kode_pekerjaan` -> `k_pekerjaan`
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_psikiatris`
--

CREATE TABLE IF NOT EXISTS `status_psikiatris` (
  `id_spsikiatris` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `tgl_asesmen` varchar(30) NOT NULL,
  `depresi` enum('ya','tidak') NOT NULL,
  `cemas` enum('ya','tidak') NOT NULL,
  `halusinasi` enum('ya','tidak') NOT NULL,
  `s_mengingat` enum('ya','tidak') NOT NULL,
  `s_mengontrol` enum('ya','tidak') NOT NULL,
  `p_bdiri` enum('ya','tidak') NOT NULL,
  `b_bdiri` enum('ya','tidak') NOT NULL,
  `p_psikiater` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_spsikiatris`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `status_psikiatris`:
--   `id_pasien`
--       `pasien` -> `id_pasien`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `administrasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `hasil_asesmen`
--
ALTER TABLE `hasil_asesmen`
  ADD CONSTRAINT `hasil_asesmen_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `informasi_demografis`
--
ALTER TABLE `informasi_demografis`
  ADD CONSTRAINT `informasi_demografis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `keperawatan`
--
ALTER TABLE `keperawatan`
  ADD CONSTRAINT `keperawatan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `konseling`
--
ALTER TABLE `konseling`
  ADD CONSTRAINT `konseling_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `konselor`
--
ALTER TABLE `konselor`
  ADD CONSTRAINT `konselor_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `logistik`
--
ALTER TABLE `logistik`
  ADD CONSTRAINT `logistik_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `pemeriksaan_fisik`
--
ALTER TABLE `pemeriksaan_fisik`
  ADD CONSTRAINT `pemeriksaan_fisik_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `perawat`
--
ALTER TABLE `perawat`
  ADD CONSTRAINT `perawat_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `perkembangan`
--
ALTER TABLE `perkembangan`
  ADD CONSTRAINT `perkembangan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `p_rmedik`
--
ALTER TABLE `p_rmedik`
  ADD CONSTRAINT `p_rmedik_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_ibfk_2` FOREIGN KEY (`id_perkembangan`) REFERENCES `perkembangan` (`id_perkembangan`),
  ADD CONSTRAINT `rekomendasi_ibfk_3` FOREIGN KEY (`id_keperawatan`) REFERENCES `keperawatan` (`id_keperawatan`),
  ADD CONSTRAINT `rekomendasi_ibfk_4` FOREIGN KEY (`id_konseling`) REFERENCES `konseling` (`id_konseling`),
  ADD CONSTRAINT `rekomendasi_ibfk_5` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `riwayat_klinik`
--
ALTER TABLE `riwayat_klinik`
  ADD CONSTRAINT `riwayat_klinik_ibfk_2` FOREIGN KEY (`id_rmedik`) REFERENCES `rekam_medik` (`id_rmedik`),
  ADD CONSTRAINT `riwayat_klinik_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `rk_sosial`
--
ALTER TABLE `rk_sosial`
  ADD CONSTRAINT `rk_sosial_ibfk_4` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `sp_narkotika`
--
ALTER TABLE `sp_narkotika`
  ADD CONSTRAINT `sp_narkotika_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `sp_narkotika_ibfk_10` FOREIGN KEY (`cp_kanabis`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_11` FOREIGN KEY (`cp_halusinogen`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_12` FOREIGN KEY (`cp_inhalan`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_13` FOREIGN KEY (`cp_bzat`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_2` FOREIGN KEY (`cp_alkohol`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_3` FOREIGN KEY (`cp_heroin`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_4` FOREIGN KEY (`cp_metadon`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_5` FOREIGN KEY (`cp_analgesik`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_6` FOREIGN KEY (`cp_barbiturat`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_7` FOREIGN KEY (`cp_sedatif`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_8` FOREIGN KEY (`cp_kokain`) REFERENCES `cara_penggunaan` (`k_cp`),
  ADD CONSTRAINT `sp_narkotika_ibfk_9` FOREIGN KEY (`cp_amfetamin`) REFERENCES `cara_penggunaan` (`k_cp`);

--
-- Constraints for table `status_legal`
--
ALTER TABLE `status_legal`
  ADD CONSTRAINT `status_legal_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `status_medis`
--
ALTER TABLE `status_medis`
  ADD CONSTRAINT `status_medis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `status_pekerjaan`
--
ALTER TABLE `status_pekerjaan`
  ADD CONSTRAINT `status_pekerjaan_ibfk_1` FOREIGN KEY (`k_pekerjaan`) REFERENCES `kode_pekerjaan` (`k_pekerjaan`),
  ADD CONSTRAINT `status_pekerjaan_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `status_psikiatris`
--
ALTER TABLE `status_psikiatris`
  ADD CONSTRAINT `status_psikiatris_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
