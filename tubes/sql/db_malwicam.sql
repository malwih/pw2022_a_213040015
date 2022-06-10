-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_malwicam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Malwi Hidayat', 'admin', '21232f297a57a5a743894a0e4a801fc3', '085280091009', 'malwihidayatt@gmail.com', 'Jl. Flamboyan Jaya, Kel.Setiamekar, Kec.Tambun Selatan, Kab. Bekasi'),
(6, 'Amalia Chalista', 'amalia', '51e0a46ceb9b9f53a96281bd6b4f38e8', '087879198914', 'amalia@gmail.com', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(9, 'SONY'),
(10, 'CANON'),
(11, 'NIKON'),
(12, 'LUMIX'),
(13, 'FUJIFILM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(10, 9, 'Sony A7 Mark III Body Only', 25399000, '<ul>\r\n	<li>24.2MP Full-Frame Exmor R BSI CMOS Sensor</li>\r\n	<li>399-Point AF System &amp; 10 fps Shooting</li>\r\n	<li>UHD 4K30p Video with HLG &amp; S-Log3 Gamma</li>\r\n	<li>3.0&Prime; 1.44m-Dot Tilting Touchscreen LCD</li>\r\n	<li>5-Axis SteadyShot INSIDE Stabilization</li>\r\n	<li>ISO 102400 &amp; Pixel Shift Multi Shooting</li>\r\n	<li>Built-In Wi-Fi/Bluetooth, Dual SD Slot</li>\r\n</ul>\r\n', 'produk1654476923.jpg', 1, NULL),
(11, 9, 'Sony A7C Kit 28-60mm Black', 32289000, '<ul>\r\n	<li>24.2MP Full-Frame Exmor R BSI Sensor</li>\r\n	<li>BIONZ X Image Processor</li>\r\n	<li>UHD 4K30p Video with HLG &amp; S-Log3 Gammas</li>\r\n	<li>693-Point Hybrid AF System</li>\r\n	<li>2.36m-Dot OLED Electronic Viewfinder</li>\r\n	<li>3.0&Prime; 921.6k-Dot Vari-Angle Touchscreen</li>\r\n	<li>5-Axis In-Body Image Stabilization</li>\r\n	<li>Shooting Up to 10 fps, ISO 50-204800</li>\r\n	<li>Bluetooth dan Wi-Fi Connectivity</li>\r\n</ul>\r\n', 'produk1654476983.jpg', 1, NULL),
(12, 9, 'Sony A6600 With 18-135mm', 27244445, '<ul>\r\n	<li>24.2MP APS-C Exmor CMOS Sensor</li>\r\n	<li>BIONZ X Image Processor</li>\r\n	<li>UHD 4K30p Video with HLG &amp; S-Log3 Gammas</li>\r\n	<li>XGA Tru-Finder 2.36m-Dot OLED EVF</li>\r\n	<li>ISO 100 &ndash; 32000;&nbsp;3 Tilting Screen</li>\r\n	<li>5-axis Sensor-shift Image Stabilization</li>\r\n	<li>11.0 fps continuous shooting</li>\r\n	<li>Termasuk lensa Sony E 18-135mm f/3.5-5.6 OSS</li>\r\n</ul>\r\n', 'produk1654477130.jpg', 1, NULL),
(13, 9, 'Sony A6400 Body Only', 13199000, '<ul>\r\n	<li>24.2MP APS-C Exmor CMOS Sensor</li>\r\n	<li>Real-Time Eye AF &amp; Real-Time Tracking</li>\r\n	<li>XGA Tru-Finder 2.36m-Dot OLED EVF</li>\r\n	<li>3.0&Prime; 921.6k-Dot 180&deg; Tilting Touchscreen</li>\r\n	<li>Internal UHD 4K Video, S-Log3, &amp; HLG</li>\r\n	<li>S&amp;Q Motion pada Full HD dari 1-120 fps</li>\r\n	<li>425 Phase- &amp; Contrast-Detect AF Point</li>\r\n	<li>Hingga 11 fps Shooting &amp; ISO 102.400</li>\r\n	<li>Built-In Wi-Fi dengan NFC</li>\r\n</ul>\r\n', 'produk1654477202.jpg', 1, NULL),
(14, 10, 'Canon EOS M200 Kit EF-M 15-45mm IS STM Black', 7699000, '<ul>\r\n	<li>24.1MP APS-C CMOS Sensor</li>\r\n	<li>DIGIC 8 Image Processor</li>\r\n	<li>3.0&Prime; 1.04m-Dot 180&deg; Tilt Touchscreen</li>\r\n	<li>UHD 4K and HD 720p120 Video Recording</li>\r\n	<li>Built-in Wi-Fi dengan NFC dan Bluetooth</li>\r\n</ul>\r\n', 'produk1654477292.jpg', 1, NULL),
(15, 10, 'Canon PowerShot SX620 HS Black', 3780000, '<ul>\r\n	<li>20.2MP 1/2.3&Prime; CMOS Sensor</li>\r\n	<li>DIGIC 4+ Image Sensor</li>\r\n	<li>25x Optical Zoom Lens</li>\r\n	<li>25-625mm (35mm Equivalent)</li>\r\n	<li>3.0&Prime; 922k-Dot LCD Monitor</li>\r\n	<li>Full HD 1080p Video Recording at 30 fps</li>\r\n	<li>Intelligent IS Image Stabilization</li>\r\n	<li>Built-In Wi-Fi dan&nbsp;NFC</li>\r\n	<li>ISO 3200 dan Up to 7.1 fps Shooting</li>\r\n	<li>Auto Zoom dan&nbsp;Smart AUTO Modes</li>\r\n</ul>\r\n', 'produk1654477413.jpg', 1, NULL),
(16, 10, 'Canon EOS 80D Kit EF-S 18-55mm IS STM', 17950000, '<ul>\r\n	<li>24.2MP APS-C CMOS Sensor</li>\r\n	<li>3.0&Prime; 1.04m-Dot Vari-Angle Touchscreen</li>\r\n	<li>Full HD 1080p Video Recording at 60 fps</li>\r\n	<li>45-Point All Cross-Type AF System</li>\r\n	<li>Expanded ISO 25600, Up to 7 fps Shooting</li>\r\n	<li>Built-In Wi-Fi with NFC</li>\r\n</ul>\r\n', 'produk1654477486.jpg', 1, NULL),
(17, 10, 'Canon iNSPIC S Pearl White', 2258300, '<ul>\r\n	<li><strong>Pilihan Warna:&nbsp;Rose Gold,&nbsp;Pearl White,&nbsp;Matte Black</strong></li>\r\n	<li>Bidik dan Cetak Instan</li>\r\n	<li>Lampu Kilat Kamera Dapat Disesuaikan</li>\r\n	<li>Cahaya Front-Ring (Cahaya Pengisi)</li>\r\n	<li>Cetak ulang cepat Sekali Sentuh</li>\r\n	<li>Cetakan foto anti-noda</li>\r\n	<li>tahan sobek dengan kemampuan kertas stiker</li>\r\n	<li>Cetakan tanpa tinta dengan teknologi ZINK&trade;</li>\r\n</ul>\r\n', 'produk1654477581.jpg', 1, NULL),
(18, 11, 'Nikon Coolpix P950', 10500000, '<ul>\r\n	<li>16MP 1/2.3&Prime; BSI CMOS Sensor</li>\r\n	<li>Lensa NIKKOR 83x Optical Zoom</li>\r\n	<li>24-2000mm (35mm Equivalent)</li>\r\n	<li>UHD 4K30 dan Full HD 60p Video</li>\r\n	<li>Dual Detect Optical Vibration Reduction</li>\r\n	<li>2.36m-Dot OLED Electronic Viewfinder</li>\r\n	<li>3.2&Prime; 921k-Dot Vari-Angle LCD Monitor</li>\r\n	<li>ISO 100-6400, 7 fps Shooting</li>\r\n	<li>Built-In Wi-Fi dan Bluetooth</li>\r\n</ul>\r\n', 'produk1654477628.jpg', 1, NULL),
(19, 11, 'Nikon D750 Body', 23999000, '<ul>\r\n	<li>24.3MP FX-Format CMOS Sensor</li>\r\n	<li>3.2&Prime; 1,229k-Dot RGBW Tilting LCD Monitor</li>\r\n	<li>Full HD 1080p Video Recording at 60 fps</li>\r\n	<li>Native ISO 12800, Extended to ISO 51200</li>\r\n	<li>Continuous Shooting Up to 6.5 fps</li>\r\n	<li>91k-Pixel RGB Sensor and Group Area AF</li>\r\n	<li>Built-In Wi-Fi Connectivity</li>\r\n	<li>Time Lapse Shooting &amp; Exposure Smoothing</li>\r\n</ul>\r\n', 'produk1654477707.jpg', 1, NULL),
(20, 11, 'Nikon D610 Body', 19530000, '<ul>\r\n	<li>24.3MP FX-Format CMOS Sensor</li>\r\n	<li>EXPEED 3 Image Processor</li>\r\n	<li>3.2&Prime; 921k-Dot LCD Monitor</li>\r\n	<li>Full HD 1080p Video Recording at 30 fps</li>\r\n	<li>Multi-CAM 4800 39-Point AF Sensor</li>\r\n	<li>Native ISO 6400, Extended to ISO 25600</li>\r\n	<li>6 fps Shooting at Full Resolution</li>\r\n	<li>Built-In Flash with Commander Mode</li>\r\n</ul>\r\n', 'produk1654477765.jpg', 1, NULL),
(21, 11, 'Nikon D800E Body', 32410000, '<ul>\r\n	<li>Optimized for NEF Raw File Capture</li>\r\n	<li>Modified OLP Filter for High Resolution</li>\r\n	<li>36.3Mp CMOS FX Format Sensor</li>\r\n	<li>EXPEED 3 Image-Processing Engine</li>\r\n	<li>3.2&Prime; LCD Monitor</li>\r\n	<li>Nikon F Mount Lens Mount</li>\r\n	<li>Eye-Level Pentaprism Viewfinder</li>\r\n	<li>1920 x 1080/30/25/24p HD Video Capture</li>\r\n	<li>Built-In Flash + i-TTL Flash Control</li>\r\n	<li>Matrix/Center-Weighted/Spot Metering</li>\r\n</ul>\r\n', 'produk1654477812.jpg', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
