-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 08:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical accessories shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `des`) VALUES
(1, 'Founded in the year 2006,Medical Accessories Shop is a manufacturer of cutting-edge medical devices for a highly demanding global market.MAS has set a benchmark when it comes to manufacturing a plethora of medical equipment,thus aiding medical  experts to save and sustain human lives across the globe.All products manufactured at MAS plants are marketed through a highly regulated national distribution network,comprising more than 4500 authorized dealers,ensuring ready availability of every product from their inventory ,even in the most secluded of the areas,backed up by value-adding customer support.As pioneers in maufacturing medical devices,MAS  Aimes \r\nto maintain International Standards at all costs;thereby offering cutting-edge medical consumables to a higly demanding global market.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'First Aid Kit'),
(2, 'Mask'),
(4, 'Thermometer'),
(5, 'Oxygen Cylinder'),
(6, 'Medicine'),
(7, 'Plus Oximeter');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `customername` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `item` int(100) NOT NULL,
  `totalprice` varchar(1000) NOT NULL,
  `c-id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`customername`, `address`, `item`, `totalprice`, `c-id`, `email`) VALUES
('tt', 'Banasree dhaka', 2, 'BDT1200', 12, '180204080@aust.edu'),
('Umayer Islam', '49/B East', 2, 'BDT890', 13, 'umayer@gmail.com'),
('Tazrian Tabassum', '1/B khilgaon', 2, 'BDT450', 14, 'tazrian@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `concern` varchar(1000) NOT NULL,
  `dt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`sno`, `name`, `email`, `concern`, `dt`) VALUES
(51, 'tabassum', 'tabassum@gmail.com', 'Bye!', '2021-09-20 02:22:57'),
(52, 'nileema', 'nileema@gmail.com', 'Hi!', '2021-09-20 02:24:33'),
(53, 'Hrida', 'hrida@gmail.com', 'Hello!', '2021-09-20 02:25:26'),
(54, 'Tajruba Tahsin', 'tajruba@gmail.com', 'Hi Its Tajruba I need your help', '2021-09-20 03:03:18'),
(55, 'Fariya Islam', 'fariya@gmail.com', 'Hi! I am fariya. Need help.', '2021-09-20 03:04:59'),
(57, 'Raisa', 'raisa@gmail.com', 'Hi. I need help.', '2021-10-06 23:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 'First Aid Box _Medicine shorage Box _White', 200, '1.Dual Layers For Large Storage Capacity\r\n2.Three component plastic tray\r\n3.Suitable for House,Office,Vehicle/Car,\r\nFactory,Medical,Clinic and so no', 'admin_area/first_aid1.png', 'first aid box'),
(2, 1, 'Eco Friendly Multi Purpose Medicine', 250, 'Inner Material:Nylon lining\r\nAluminum Frame\r\nPlastic Handle\r\nDurable and portable', 'admin_area/first_aid2.jpg', 'first aid box'),
(3, 1, 'First Aid Kit Box PVC Body', 1249, 'Plastic Handle\r\nStainless Steel Lock\r\nDurable and Portable', 'admin_area/first_aid3.jpg', 'first aid box'),
(4, 2, 'Disposable Face Mask 1 box(25 pieces)', 280, '1.Without Glass Fibers\r\n2.Very Low Resistance to Breathing\r\n3.perfect fitting', 'admin_area/mask1.png', 'mask'),
(6, 5, 'Portable 12Ltr Can Natural Oxygen Cylinder', 550, 'Content:Oxygen contains more than 95% v/v remaining pure air v/v\r\nCompact,portable and lightwight', 'admin_area/oc1.jpg', 'oxygen cylinder '),
(7, 4, 'Digital Thermometer', 200, 'Range:32~42\r\nAccuracy:+-2\r\nMin,scale:0.1', 'admin_area/tt1.jpg', 'Thermometer'),
(8, 4, 'Digital Thermometer', 100, 'Mesurment System:C/F\r\nEasy to read LCD\r\nAuto shut Off', 'admin_area/tt2.jpg', 'thermometer'),
(9, 2, 'Green Guava Face Mask Box(50PCS)', 300, 'Brand:Green guava\r\nProduct Type:Face Mask(Box)\r\nFor everyday use', 'admin_area/mask3.png', 'mask'),
(10, 2, 'Disposable 3 Ply/Layer White Face Mask with Nose Clip', 350, 'High Filtering Capacity\r\nThe breathable earloop\r\nColor:white\r\n', 'admin_area/mask4.jpg', 'mask'),
(11, 1, '9pcs Set Emergency First Aid Item kit', 1000, 'This product is made of high quality Oxford material\r\nCompact And Portable\r\nColor:red\r\nMaterial:Oxford Cloth\r\n', 'admin_area/first_aid4.jpg', 'first aid box'),
(12, 5, 'Vigor Pure Oxygen 8L canned', 1500, 'Provides immediate relief as a first aid during emergencies\r\nUseful if suffering from lung disorders or respiratory diseases including asthma,COPD ,etc', 'admin_area/oc3.jpg', 'oxygen cylinder'),
(15, 6, 'Entcyd Plus', 400, 'Hyperacidity,pepctic ulcer,gastritis,sour\r\nstomach or hiatus hernia,gastric hyperacidity', 'admin_area/med1.jpg', 'medicine'),
(16, 6, 'tylace', 250, 'As an adjunctive treatment for patients with abnormal ,viscid or inspissated mucus\r\nsecretion associated with conditions such as Acute and chornic brochopulmonary disorders,Atelectasis', 'admin_area/med2.jpg', 'medicine'),
(17, 6, 'Napa 500(Paracetamol)', 400, 'Napa is a fast acting and safe anagesic with marked antipyretic property.\r\nquantity:1box', 'admin_area/med3.jpg', 'medicine'),
(18, 6, 'Virux', 300, 'For the treatment of viral infections due to herpes simplex virus(type 1 and type2) and varicella zoster (herpes zoster &chickenpox)', 'admin_area/med4.jpg', 'medicine'),
(19, 6, 'Antiva', 500, 'Antiva is indicated for the treatment of chornic hepatitis B in adults with evidence of active viral replication.', 'admin_area/med5.jpg', 'medicine'),
(20, 7, 'JPD-500D Color Fingertrip Pluse Oximeter', 4200, 'Small,light,convient\r\nspO2,PR and prefusion index value display\r\nplus rate value display,bar graph display', 'admin_area/po1.jpg', 'plus oximeter'),
(21, 7, 'jziki 303 Plus Oximeter', 4700, 'integrate blood oxygen probe and process display module into one\r\nThe product is small in size ,light in weight and easy to carry', 'admin_area/po2.jpg', 'plus oximeter'),
(22, 7, 'LK87 Fingertrip Plus Oximeter', 700, 'Blood oxygen saturation value display,pulse rate value ,bar graph display ,pulse waveform display ', 'admin_area/po3.jpg', 'plus oximeter'),
(23, 7, 'AFK Fingertrip pluse Oximeter', 1000, 'Display:LED display\r\nwarranty:1year\r\nMaterial:ABS\r\nColor:Blue', 'admin_area/po4.jpg', 'plus oximeter'),
(24, 7, 'JUMPER PLUSE OXIMETER JPD 500D', 2300, 'Free battery (2pc AAA size)\r\njumper JPD-500D model\r\ncolor OLED display ,Auto Power off when no signal', 'admin_area/po5.jpg', 'plus oximeter'),
(25, 10, 'Germ Kill 50ml instant Hand sanitizer Bottle', 100, 'Brand:SMC\r\nproductType:Hand Sanitizer\r\nBrand:Germ Kill\r\nCapacity:50ml\r\nTravel friendly pack\r\n', 'admin_area/handsanitizer1.jpg', ''),
(27, 10, 'Washable Disposable Polyester Isolation Gown', 790, 'Non-woven fabric-material,soft /light/non-toxic/eco-friendly polyester gown,prevent and isolate dust /particle/alcohol/blood/bacteria and virus', 'admin_area/ppe1.jpg', ''),
(28, 10, 'Disposable Isolation Coverall Protection PPE Suit', 1900, 'Disposable non-woven spun-bond polypropylene material,sterility,non-sterile,dust/virus/droplet proof and bacteria protected,elastic sleeve,easy wear for an emergency ', 'admin_area/ppe2.jpg', ''),
(29, 10, 'Latex Examination Powder Free Gloves', 850, 'Smooth surface,powder-free,alternative for sensitive skin,S/M/L size,100pieces in 1 box,made in Malaysia', 'admin_area/HG1.jpeg', ''),
(30, 10, '3M 1860 N95 Health Care Particulate Respirator Mask', 260, 'Natural rubber latex component ,teal color,99% bacterial filtration efficiency,FDA cleared for use as a mask,cup shape design,origin china', 'admin_area/mask5.jpg', ''),
(31, 10, '3M 9541V Respirator Mask with Valve', 450, 'The 3M 9541V face mask is composed of four layers.The interior and exterior layers are contructed of PP microfibre', 'admin_area/mask6.jpg', ''),
(32, 10, 'Face Shield Protective with Glasses', 220, 'Eye protective and comforting face shield,quick and easy to put on ,protect the face from blood/body fluid or harmful chemical splash', 'admin_area/glass1.jpg', ''),
(33, 10, 'UniCare Face Shield', 950, 'Full Protection for your face,it can successfully help block droplets ,bacteria and dust ,soft and comfortable ,no harm to the human body', 'admin_area/glass2.jpg', ''),
(34, 10, 'Alcohol Prep Pad', 120, 'For desinfection use,100 pieces in box,70% isopropyl alcohol,for external use only', 'admin_area/AP1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `team1`
--

CREATE TABLE `team1` (
  `id` int(100) NOT NULL,
  `img` text NOT NULL,
  `name` varchar(700) NOT NULL,
  `qualification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team1`
--

INSERT INTO `team1` (`id`, `img`, `name`, `qualification`) VALUES
(1, 'admin_area/Nileema.jpg', 'Tajruba Tahsin Nileema', 'BSc in CSE'),
(2, 'admin_area/hrida.jpg', 'Rushmia Ahmed Hrida', 'BSC in CSE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  `created_date` datetime NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `created_date`, `photo`) VALUES
(2, 'Tajruba Nileema', 'ttajruba@gmail.com', '060f89d333f9e0b4cfdc3510bd04c473', '01876853244', '2021-09-21 11:27:42', '4859912904ff5cadd8726d5eca20d6660544134a9.jpg'),
(3, 'Hrida Ahmed', 'hridaa12@gmail.com', '46d045ff5190f6ea93739da6c0aa19bc', '01648393725', '2021-09-21 11:30:54', ''),
(4, 'Fariya Islam', 'faria123@gmaail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '01864736578', '2021-09-21 21:04:04', ''),
(5, 'Asfiqun Isha', 'isha67@gmail.com', '43eb5dc0d1463f16b583438a20ad210f', '019674536373', '2021-09-21 22:24:42', ''),
(6, 'Tazrian Tabassum', 'tabassum@gmail.com', 'a6a29e510d09ed857da65ece614a6e61', '01718473635', '2021-09-22 00:01:31', ''),
(7, 'Fariha Azrin', 'faria123@gmail.com', '33c9e9fb84a9ecae780e56cfe5097923', '01735677754', '2021-09-22 00:55:50', ''),
(8, 'Nusayer Islam', 'nusayer@gmail.com', 'f61702b33546591bfe020842d663e7df', '01846453573', '2021-09-25 14:34:18', '2106220346argentina-barcelona-lionel-messi-wallpaper-preview.jpg'),
(10, 'Umayer Islam', 'umayer@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea', '019798', '2021-10-05 02:28:04', '1414531459337-3378445_eligibility-login-icon-png.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`c-id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `team1`
--
ALTER TABLE `team1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `c-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `team1`
--
ALTER TABLE `team1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
