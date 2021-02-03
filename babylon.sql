-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2020 at 01:20 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babylon`
--
CREATE DATABASE IF NOT EXISTS `babylon` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `babylon`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `p_id`, `quantity`) VALUES
('1', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `ordered_items` varchar(255) NOT NULL,
  `date_placed` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `track` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `ordered_items`, `date_placed`, `Address`, `Status`, `cust_email`, `track`) VALUES
(2, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', '1', NULL),
(3, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', '1', NULL),
(4, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', '1', NULL),
(5, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', '1', NULL),
(6, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', '1', NULL),
(7, 'items', '1970-01-01', '[UAE]', 'placed', '1', NULL),
(8, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', '1', NULL),
(9, 'items', '1970-01-01', '[UAE]', 'placed', 'admin@test.com', NULL),
(10, 'items', '1970-01-01', '[Saudi Arabia]', 'placed', 'admin@test.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `owner` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `exp` varchar(7) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `billing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `price`, `quantity`, `category`, `image`, `added_by`, `description`) VALUES
(1, 'Brooklyn Floor Lamp', 2000, 20, 'living-room', 'lamp-', 'Alajaji@email.com', 'Bolster loft or contemporary styling with this Adesso Brooklyn floor lamp. Light walnut finished wood legs merge into a stable tripod base with a twist at the top for a stunning tapered profile'),
(2, 'Vintage Style Sofa ', 4200, 50, 'living-room', 'sofa-', 'alawlqi@email.com', 'Mid Century Modern Style Velvet Sleeper Futon Sofa, Living Room L Shape Sectional Couch with Reclining Backrest and Chaise Lounge.'),
(3, 'Safavieh Vintage Rug', 2155, 6, 'living-room', 'rug-', 'Alnemer@email.com', 'The perfect decorative centerpiece for any room can be found in Safavieh\'s Vintage Hamadan Collection. Classic motifs are vividly displayed in distinctive hues and finished in an antique patina'),
(4, 'Tulip Gallery Wrapped Canvas', 521, 12, 'living-room', 'paint-', 'ashour@email.com', 'Add a touch of instant sophistication to your decor when you hang Cora Niele\'s \'White Tulip\' canvas print from ArtWall.'),
(5, 'Black Corner Computer Desk', 567, 111, 'office', 'desk-', 'hassanovic@email.com', 'Make room for your corner office with the Lincoln desk. Clever yet classic, this corner desk blends seamlessly into most decors with a modest footprint and simple silhouette'),
(6, 'Classic Swoop Chair with Suri Blue Upholstery\r\n', 634, 30, 'living-room', 'chair-', 'hussain@email.com', 'We paired our best-selling Classic Swoop Accent Chair with our popular suri slate blue patterned fabric to create the perfect seating solution for any room of your home. Featuring a global-inspired damask pattern'),
(7, 'Safavieh Malone White/ Chrome Coffee Table', 557, 10, 'office', 'table-', 'Alajaji@email.com', 'Retro modern design is celebrated in the clean-lined contemporary Malone coffee table.'),
(8, 'Wood Platform Bed with Headboard', 665, 39, 'bedroom', 'bed-', 'alawlqi@email.com', 'Set up a spot for optimum support with this platform bed from Carbon Loft. The sleek lines and crisp construction provide an instant update to any bedroom'),
(9, 'Oak Finish 3-bin Curtained Storage Center', 1080, 37, 'bedroom', 'storage-', 'ashour@email.com', 'Keep your bedroom, laundry room, or walk-in closet organized with this Lola storage center. A clothing rack lets you sort apparel neatly'),
(10, 'White 42-inch Round Dining Table', 1122, 3, 'office', 'teatable-', 'Alnemer@email.com', 'Add a modern touch to your shabby chic home with this country-style transitional dining table by Furniture of America. This impressive round table is supported with a flared four-legged base'),
(11, 'Mid-Century 3-shelf Bookshelf', 918, 82, 'living-room', 'bookshelf-', 'Alajaji@email.com', 'Group reading materials and decorative pieces on the three roomy shelves of this bookcase.'),
(12, 'wooden book storage', 786, 21, 'office', 'storageA-', 'hassanovic@email.com', 'store your books in very creative and looky way. '),
(13, 'carbon tv shelf', 866, 45, 'living-room', 'bookshelfA-', 'Alnemer@email.com', 'Make room for modern organization in your home with this durable bookshelf.'),
(14, 'Glass Table Lamp', 300, 127, 'room', 'tablelamp-', 'Alnemer@email.com', 'Turn your living space into a tranquil retreat with the Emma table lamp.'),
(15, 'Maxton LED Table Lamp (Set of 2)', 402, 133, 'room', 'tablelampA-', 'ashour@email.com', 'This stylish contemporary urn table lamp elevates any living room with its graceful curves and artistic pattern'),
(16, 'Fabric Sofa Set', 3897, 3, 'living-room', 'sofaset-', 'hussain@email.com', 'Create the perfect nesting spot with this chic loveseat and sofa ensemble. '),
(17, 'Mathais Living Room Set', 1453, 4, 'living-room', 'officesofa-', 'alawlqi@email.com', 'Modern design meets mid-century influence with this sofa, a perfect pick for rounding out a living room seating arrangement. '),
(18, 'dragon nightstand ', 375, 144, 'bed-room', 'nightstand-', 'hassanovic@email.com', 'Scandinavian design to your bedroom with this convenient nightstand from Carson Carrington. '),
(19, 'Nomad Avoca Woven Wicker Papasan Chair', 875, 211, 'outdoors', 'comfychair-', 'alawlqi@email.com', 'Create a laid back vibe in your home with our twist on the classic papasan chair design'),
(20, 'Mid-century TV table', 1175, 12, 'living-room', 'tvtable-', 'Alajaji@email.com', 'Add mid-century style to your living room with this 58-inch TV console from Carson Carrington. '),
(21, 'Vintage Boho Chic Rug', 147, 231, 'bed-room', 'rugA-', 'Alnemer@email.com', 'A marvelous exhibit of trendsetting transitional rugs, the Madison Collection instills life into extraordinary spaces.'),
(22, 'Floral Outdoor Area Rug', 157, 204, 'outdoors', 'rugB-', 'ashour@email.com', 'This outdoor rug from the Aloha Collection features soft cut pile and textural woven patterns in bursts of brilliant color sure to liven any outdoor space.'),
(23, 'Seaside Kitchen Pantry', 2010, 134, 'kitchen', 'kitchenstorage-', 'hussain@email.com', 'Capture the feeling of an effortless beach home with the Seaside Pantry from Crosley.'),
(24, 'Archie Metal Bakers Rack and Baskets', 1131, 30, 'kitchen', 'kitchenstorageA-', 'Alnemer@email.com', 'Bring your juicing station dreams to fruition with this multi functional bakers rack. Oodles of vertical shelving display small kitchen appliances, coffee mugs or juice glasses, and canisters of toppings.'),
(25, 'Radiance Cocoa Peeled and Polished Reed Blind', 134, 222, 'outdoors', 'woodcurtain-', 'hussain@email.com', 'Create a fun, tropical vibe with this handy polished reed blind. Easy to install with a simple hook,'),
(26, 'Ceramic Decorative Garden Stool\r\n', 488, 455, 'outdoors', 'teatableA-', 'Alajaji@email.com', 'Playful and practical, this dynamic ceramic garden stool instantly upgrades any outdoor living space.'),
(27, 'Cabinet Deluxe Potting Bench', 886, 442, 'outdoors', 'bbqbench-', 'Alnemer@email.com', 'Make gardening convenient with this deluxe potting bench. This bench with cabinet is crafted from solid wood'),
(28, 'Potting Bench in Natural Wood', 2429, 334, 'outdoors', 'pottingbench-', 'ashour@email.com', 'Multi-user compatibility: Perfect potting bench for parents and kids to work on a gardening project. '),
(29, 'Hamper in White', 844, 357, 'laundry', 'toweltable-', 'hassanovic@email.com', 'Access and separate your laundry with this white Lydia linen hamper.'),
(30, 'Espresso Oversized Divided Hamper', 556, 245, 'laundry', 'hamper-', 'hussain@email.com', 'Keep your dirty clothes together and in one spot with this Espresso Oversized Divided Hamper. '),
(31, '60-inch laundry Closet', 255, 655, 'laundry', 'laundrycloset-', 'alawlqi@email.com', 'Keep your out-of-season or low-use clothing safe and in great condition with this storage closet, which is made of steel and plastic for durability and easy cleaning.'),
(32, 'hamper sorter', 180, 346, 'laundry', 'hamperA-', 'Alnemer@email.com', 'Keep dirty clothes organized and make laundry day a cinch with this two-compartment hamper');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `DoB` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `pass`, `fName`, `lName`, `phone`, `DoB`, `isAdmin`) VALUES
('admin1@test.com', '12345', 'dsa', 'das', 'd321312', '0011-01-01', 0),
('admin@test.com', '12345', 'Hamad', 'AlAjaji', '0500279991', '2020-04-15', 1),
('Alajaji@email.com', '12345', 'test', 'test', '321321321231', '2020-04-08', 1),
('alawlqi@email.com', '1234', 'Test', 'Test', '13121232', '2020-04-08', 1),
('Alnemer@email.com', '1234', 'Test', 'Test', '13121232', '2020-04-08', 1),
('ashour@email.com', '1234', 'Test', 'Test', '13121232', '2020-04-08', 1),
('hassanovic@email.com', '1234', 'Test', 'Test', '13121232', '2020-04-08', 1),
('hussain@email.com', '1234', 'Test', 'Test', '13121232', '2020-04-08', 1),
('Test@testing.test', '123456', 'Meow', 'Tea', '123456789', '2020-04-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`num`),
  ADD KEY `owner_idx` (`owner`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `owner` FOREIGN KEY (`owner`) REFERENCES `user` (`email`) ON DELETE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
