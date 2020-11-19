-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2020 at 09:47 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recipe` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `type`, `image`, `recipe`) VALUES
(1, 'Chocolate chip cookie delight', 'Desert', 'upload/1.jpg', '<h2><strong>Ingredients</strong></h2><ul><li>1 tube (16-1/2 ounces) refrigerated chocolate chip cookie dough</li><li>1 package (8 ounces) cream cheese, softened</li><li>1 cup confectioners\' sugar</li><li>1 carton (12 ounces) frozen whipped topping, thawed, divided</li><li>3 cups cold 2% milk</li><li>1 package (3.9 ounces) instant chocolate pudding mix</li></ul><h2><strong>Directions</strong></h2><ul><li>Let cookie dough stand at room temperature for 5-10 minutes to soften. Press into an ungreased <a href=\"https://amzn.to/2ZIu4TG\">13x9-in. baking pan</a>. Bake at 350° until golden brown, 14-16 minutes. Cool on a wire rack.</li><li>In a large bowl, beat cream cheese and confectioners\' sugar until smooth. Fold in 1-3/4 cups whipped topping. Spread over crust.</li><li>In a large bowl, whisk milk and pudding mixes for 2 minutes. Spread over cream cheese layer. Top with remaining whipped topping. Sprinkle with nuts and chocolate curls if desired.</li></ul>'),
(2, 'Whipped Shortbread', 'Desert', 'upload/Whipped-Shortbread.jpg', '<h2><strong>Ingredients</strong></h2><ul><li>3 cups butter, softened</li><li>1-1/2 cups confectioners\' sugar, sifted</li><li>4-1/2 cups all-purpose flour</li><li>1-1/2 cups cornstarch</li><li>Nonpareils <i>and/or</i> halved candied cherries</li></ul><h2><strong>Directions</strong></h2><ul><li>In a large bowl, cream butter and confectioners\' sugar until light and fluffy, about 5 minutes. Gradually add flour and cornstarch, beating until well blended.</li><li>With hands lightly dusted with additional cornstarch, roll dough into 1-in. balls. Place 1 in. apart on ungreased <a href=\"https://amzn.to/2LlenxW\">baking sheets</a>. Press lightly with a floured fork. Top with nonpareils or cherry halves.</li><li>Bake at 300° until bottoms are lightly browned, 20-22 minutes. Cool for 5 minutes before removing from pans to wire racks.</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

DROP TABLE IF EXISTS `tips`;
CREATE TABLE IF NOT EXISTS `tips` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `title`, `image`, `tip`) VALUES
(1, 'Tips on frying', 'upload/frying.jfif', '<ul><li>Heat the oil thoroughly before adding seasonings or vegetables.</li><li>Fry the seasonings until they change color, to get full flavour of seasonings.</li><li>If masala sticks to the pan that shows quantity of fat included is not enough.</li><li>Add some hot oil and 1/2 tsp of baking soda in batter while making pakodas.</li><li>When coconut is used in grinding masala, do not fry for a longer time.</li></ul>'),
(2, 'Tips on Gravies', 'upload/gravies.jfif', '<ul><li>Fry the ground masala in reduced flame, so that it retains its colour and taste.</li><li>Little plain sugar or caramelised sugar added to the gravy makes it tasty.</li><li>When tomatoes are not in season, tomato ketchup or sauce can be successfully used in the gravies.</li><li>To retain colour in the gravy always use ripe red tomatoes. Discard green portions if any.</li><li>Good variety chillies and chilli powder also gives colour to the gravy. As far as possible try to use</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `user_recipe`
--

DROP TABLE IF EXISTS `user_recipe`;
CREATE TABLE IF NOT EXISTS `user_recipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_reg_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `recipe` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_recipe`
--

INSERT INTO `user_recipe` (`id`, `user_reg_id`, `name`, `title`, `image`, `recipe`) VALUES
(1, 1, 'Nidhi', 'Grilled Sandwich', 'upload/sandwich.jpg', '<p>sandwich</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `user_reg_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_reg_id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Nidhi', 'nidhi@gmail.com', 'nidhi1', '12345678'),
(2, 'pranali', 'pranali@gmail.com', 'pranali1', 'pranali123'),
(3, 'prachi', 'prachi@gmail.com', 'prachi1', 'prachi123');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

DROP TABLE IF EXISTS `user_request`;
CREATE TABLE IF NOT EXISTS `user_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_reg_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `recipe_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `recipe` varchar(2555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `user_reg_id`, `name`, `recipe_title`, `image`, `recipe`) VALUES
(2, 1, 'Nidhi', 'Grilled Sandwich', 'upload/sandwich.jpg', 'sandwich'),
(3, 2, 'pranali', 'Cake', 'upload/8.jpg', '<p>cake recipe</p>'),
(4, 1, 'Nidhi', 'chocolate desert', 'upload/6.jpg', '<p>chocolate</p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
