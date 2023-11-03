-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `rank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id`, `nama`, `jenis`, `deskripsi`, `gambar`, `rank`) VALUES
(1, 'Vanie', 'Founder', 'Orang pertama yang mempelopori pendirian Taichan 99', 'dian.jpg', 'Founder'),
(2, 'Hendrawan', 'Founder', 'Orang kedua yang menjadi pelopor pendirian Restaurant', 'hendra.jpg', 'Co Founder'),
(3, 'Taichan 99 Pusat', 'Location', 'Alamat : Jl. Cokrobaskoro 2, No 1, Tipes, Solo', 'loc1.jpg', 'Pusat'),
(4, 'Taichan 99 Pengadilan', 'Location', 'Jl. Prof. DR. Supomo No.9, Sriwedari, Kec. Laweyan, Kota Surakarta, ', 'loc2.jpg', ''),
(5, 'Taichan 99 Solo Grand Mall', 'Location', 'Jl. Slamet Riyadi No.273, Penumping, Kec. Laweyan, Kota Surakarta lt.3', 'loc3.jpg', ''),
(6, 'INTERNATIONAL MASK FESTIVAL 2023', 'Event', 'Pertunjukkan spektakuler pagelaran karya seni topeng dalam International Mask Festival\r\nDimeriahkan dengan pameran topeng, konferensi nasional IMO, dan tari topeng Indonesia dan mancanegara yang siap menampilkan karya seni yang memanjakan mata.\r\nSalam Budaya!', 'mask.jpg', '17 dan 18 November 2023'),
(7, 'PASAR SENI DAN BUDAYA 2023', 'Event', 'Rasakan Keindahan Tradisi dan budaya di PASAR SENI DAN BUDAYA 2023!\r\n\r\nDatang dan meriahkan, event tahunan PASAR SENI DAN BUDAYA 2023 yang akan diadakan:\r\nHari & Tanggal:Kamis – Minggu, 26 – 29 Oktober 2023\r\n\r\nLokasi: Halaman Graha Wisata Niaga\r\n\r\nWaktu: 15.00 – 22.00', 'ramayana.jpg', '26 – 29 Oktober 2023'),
(8, 'Jambore Pokdarwis Surakarta “Gumregah Nyawiji Hambangun Nagari”', 'Event', 'Halo sobat wisata!\r\n\r\nJambore Pokdarwis Surakarta akan digelar akhir bulan ini!\r\n\r\n“Gumregah Nyawiji Hambangun Nagari”\r\n\r\nLokasi: Taman Sriwedari\r\nTanggal: 26-29 Oktober 2023\r\nHari: Kamis-Sabtu\r\nWaktu: 09.00-21.00 WIB\r\n\r\nAkan banyak menampilkan kegiatan menarik dan seru pastinya! Jangan sampai kelewatan, catat tanggalnya yaaa!', 'jambore.jpg', '26-29 Oktober 2023'),
(9, 'Asean Panji Festival 2023', 'Event', 'Datang & Saksikan !!! ASEAN PANJI FESTIVAL di Kota Solo\r\n\r\n \r\n\r\nUntuk memperingati ditetapkannya Naskah Cerita Panji sebagai Warisan Dunia UNESCO yang diselenggarakan pada :\r\n\r\nTanggal: 24 – 25 Oktober 2023\r\n\r\nLokasi: Balaikota Surakarta', 'panji.jpg', '24 – 25 Oktober 2023'),
(10, 'Sendratari Candra Purnama Ramayana Oktober 2023, “Brubuh Alengka”', 'Event', 'Saksikan!!!\r\n\r\nSENDRATARI CANDRA PURNAMA RAMAYANA\r\n\r\nDipersembahkan oleh Sanggar Hasta Mataya dengan Judul BRUBUH ALENGKA\r\n\r\n \r\n\r\nKematian Kumbakarna adik Rahwana menjadi titik kekalahan telak pasukan Alengka, pesimis akan kemenangan karena kekuatan besar yang digadang-gadang menjadi senjata pamungkas rupanya luput dari rencana.\r\n\r\nTetapi, tidak untuk indrajit yang merupakan anak sekaligus putra mahkota kerajaan Alengka. Dengan pasukan yang hanya tersisa sedikit, dia maju memantaskan diri menjadi senopati. Namun na’as kekuatan nya tidak sebanding dengan Rama dan pasukannya. Ditangan Pamannya Wibisana sendiri, dia mati dan berubah wujud awan hitam. Gusar, gundah, gagap, gagal, mengepung hidup Rahwana yang hanya diam terpaku menyaksikan kekalahan yang sudah didepan mata.\r\n\r\nHari & Tanggal: Jumat, 20 Oktober 2023\r\n\r\nWaktu : 19.30 WIB\r\n\r\nTempat : Lapangan Losari, Kel Semanggi\r\n\r\nLIVE STREAMING DI CHANNEL\r\n\r\n– BALKAMTV\r\n\r\n– Pariwisata Solo\r\n\r\n–  Disbudpar Surakarta\r\n\r\n– GIBRANTV\r\n\r\nGratis untuk semua umur.\r\n\r\nYok saksikan dan ramaikan !!!\r\n\r\nSalam Budaya dan Pariwisata !!!', 'candra.jpg', 'Jumat, 20 Oktober 2023'),
(11, 'Solo Street Art Market; Solo is Solo', 'Event', 'Ada pasar di pinggir jalan? Sobat Wisata pasti sudah tidak asing lagi dong sama vibes sepanjang jalan Gatot Subroto, Solo ini?\r\n\r\nSolo Street Art Market, wisata belanja malam hari yang diinisiasikan oleh komunitas Solo is Solo, digelar setiap jumat dan sabtu malam di koridor Jalan Gatsu atau Gatot Subroto. Wisata ini digunakan sebagai ajang pameran dan promosi para pelaku kreatif terhadap barang atau jasa yang mereka jual.\r\n\r\nTidak hanya barang-barang gemas, di sana juga ada banyak kuliner yang bisa kalian cicipi dan penampilan keren dari para seniman, mulai dari band, solois, dance cover, sulap dan masih banyak lagi.\r\n𝗦𝗼𝗹𝗼 𝗦𝘁𝗿𝗲𝗲𝘁 𝗔𝗿𝘁 𝗠𝗮𝗿𝗸𝗲𝘁\r\n📍Jl. Gatot Subroto, Kemlayan, Kec. Serengan, Kota Surakarta, Jawa Tengah\r\n\r\nKalian sudah jajan apa saja selama di sini? Tulis di kolom komentar yaa! Atau bagikan momen seru kamu selama di Solo Street Art Market dengan cara tag instagram @pariwisatasolo dan gunakan hashtag #Ayokesolo & #YourSolo.\r\n\r\n ', 'street.jpg', 'Setiap Hari 17.00-24.00'),
(12, 'Kompetisi Menulis dan Story Telling Rajamala dengan Bahasa Jawa', 'Event', 'Kamu pelajar SMP sederajat di Kota Solo? Tahu kan apa itu Rajamala? Yuk ikuti kompetisi menulis dan story telling Rajamala dengan bahasa pengantar bahasa Jawa.\r\n\r\nKisah Rajamala harus bersumber dari cerita yang dipublikasikan di Instagram Museum Radya Pustaka Surakarta ya? Kamu tinggal menyajikannya semenarik mungkin, bisa dengan gaya penulisan karya ilmiah popular atau cerita cekak (cerkak).\r\n\r\nAyo buruan daftar dan kirimkan karyamu. Kamu juga berpeluang dapat uang pembinaan, piala, dan sertifikat. Untuk informasi lebih lanjut, bisa juga menghubungi Bangkit 0821-3883-2200 atau Nanang 0858-6752-9994\r\n\r\n \r\n\r\nTag dan follow @museumradyapustakasurakarta\r\n\r\n@uptmuseum_surakarta', 'lomba.jpg', '10-20 Oktober 2023'),
(13, 'Jadwal Pertunjukan Wayang Orang Sriwedari Bulan Oktober 2023', 'Event', 'Pertunjukan Wayang Orang Sriwedari Bulan Oktober 2023 digelar setiap hari Senin-Sabtu pukul 19.30 WIB. Kelas kursi yang disediakan saat ini adalah kelas VIP dengan harga tiket Rp. 10.000,00.\r\n\r\n \r\n\r\nPembelian tiket masuk Pertunjukan Wayang Orang Sriwedari  dapat didapatkan langsung pada loket tiket di Gedung Wayang Orang Sriwedari pukul 18.00-21.00\r\n\r\nuntuk reservasi online bisa melalui link berikut : bit.ly/tiketseptember atau melalui nomor WA : 0856-4720-3310\r\n\r\n \r\n\r\nGedung Wayang Orang Sriwedari terletak di dalam kompleks Taman Sriwedari Jl. Kebangkitan Nasional No. 15 Surakarta. Sobat wisata bisa menemukannya di sisi barat daya. Sebagai penanda, akan ada sebuah patung kecil berbentuk Gatotkaca sedang bertarung\r\n\r\n \r\n\r\nBerikut Jadwal Wayang Orang Sriwedari Bulan Oktober 2023 :\r\n\r\n2 Oktober: Pandhu Papa\r\n3 Oktober: Sayembara Drupadi\r\n4 Oktober: Palgunadhi Rabi\r\n5 Oktober: Gathutkaca Winisudha\r\n6 Oktober: Salaga Seta\r\n7 Oktober: Kikis Tunggarana\r\n\r\n9 Oktober: Alap-Alapan Padmarini\r\n10 Oktober: Pandhawa Gubah\r\n11 Oktober: Durga Sendhang\r\n12 Oktober: Renuka\r\n13 Oktober: Punakawan Sungging\r\n14 Oktober: Bima Bungkus\r\n\r\n16 Oktober: Antareja Lair\r\n17 Oktober: Arjuna Ilang\r\n18 Oktober: Begawan Sidalancang\r\n19 Oktober: Naga Bendung\r\n20 Oktober: Brajadenta Braja Musti\r\n21 Oktober: Prabu Tejanata\r\n\r\n23 Oktober: Pramusinta\r\n24 Oktober: Dewasrani Lair\r\n25 Oktober: Abimanyu Kerem\r\n26 Oktober: Sayembara Mantili\r\n27 Oktober: Semar Mbangun Khayangan\r\n28 Oktober: Bagong Kembar\r\n\r\n30 Oktober: Indrajid Lena\r\n31 Oktober: Burisrawa', 'jadwal.jpg', 'Oktober 2023');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `jenis`, `deskripsi`, `gambar`, `harga`) VALUES
(1, 'Paket Sate 10 + lontong', 'Makanan', 'Paket 10 tusuk sate taichan lengkap dengan lontong 1 porsi', '10tusuk.jpg', 25000),
(2, 'Kopi Susu Gula Aren', 'Minuman', 'Kopi Arabica Gayo, Susu, Krimer dan Gula Aren', 'kopsus.jpg', 18000),
(3, 'Mie Taichan', 'Makanan', 'Indomie goreng + 5 tusuk sate + es teh', 'mietaichan.jpg', 21000),
(4, 'Paket Kenyang Mix', 'Makanan', '(7 tusuk)daging ayam / usus / kulit + lontong\r\n\r\n32.600', 'kenyangmix.jpg', 32000),
(5, 'Taichan Besar', 'Makanan', '25 tusuk sate taichan varian : daging, kulit,usus,sambal,jeruk.', 'taichanbesar.jpg', 90000),
(6, 'Lontong', 'Makanan', 'Tambahan 1 Porsi Lontong. Bonus extra sambal pedas.', 'lontong.jpg', 5000),
(8, 'Taichan Super Besar', 'Makanan', '50 Tusuk sate taichan varian :daging, kulit,usus,sambal,danjeruk.', 'sbhemat.jpg', 160000),
(9, 'Bakwan Jagung', 'Snack', 'Bakwan Jagung isi 5-6 pc. Lengkap dengan cabai dan kecap.', 'bakwan.jpg', 9000),
(10, 'Kentang Goreng', 'Snack', 'Kentang goreng pilihan, digoreng dadakan. Dijamin gurih dan renyah.', 'kentang.jpg', 11000),
(11, 'Churros', 'Snack', 'Churros khas Mexico, dengan topping cinnamons sugar. Disajikan Panas.', 'churros.jpg', 20000),
(13, 'Kulit', 'Snack', 'Kulit digoreng kering dan renyah. Harga per tusuk.', 'kulit.jpg', 4000),
(14, 'Kopi Taro', 'Minuman', 'Es Kopi Taro, espresso+susu+vanilla+bubuk taro.', 'kopitaro.jpg', 16000),
(15, 'Kopi Red Velvet ', 'Minuman', 'Es Kopi Redvelvet, espresso+susu+vanilla+bubuk Redvelvet', 'redvelvet.jpg', 16000),
(16, 'Kopi Green Tea', 'Minuman', 'Kopi Arabica Gayo, Susu, Krimer dan Bubuk Green Tea', 'greentea.jpg', 19000),
(17, 'Yoghurt Manggo (NC)', 'Minuman', 'Minuman segar yogurth dengan topping nata de coco.', 'mango.jpg', 16000),
(18, 'Tambahan Sarang Walet', 'Minuman', 'Tambahan topping sarang burung walet yang sudah diolah.', 'walet.jpg', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Andhika', 'andhikakristianp@gmail.com', 'swsws'),
(2, 'Kris', 'andhikakristaaianp@gmail.com', 'Tes2'),
(3, 'Flora fauna', 'flora@gmail.com', 'Haloooo'),
(4, 'Flora fauna', 'flora@gmail.com', 'Haloooo'),
(5, 'swwd', 'flora@gmail.com', 'wdwdwd'),
(6, 'sws', 'dwdd@DD.COM', 'DWDWD'),
(7, 'ssws', 'andhikakristaaianp@gmail.com', 'ddw'),
(8, 'cdcdc', 'ddd@tototo.com', 'eded'),
(9, 'ded', 'fefe@gmail.com', 'fefef'),
(10, 'xsx', 'andhikakristaaianp@gmail.com', 'sx'),
(11, 'xsx', 'andhikakristianp@gmail.com', 'axa'),
(12, 'sss', 'andhikakristianp@gmail.com', 'ssss'),
(13, 'sqsq', 'flora@gmail.com', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
