-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 10:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attractions`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions_contact`
--

CREATE TABLE `attractions_contact` (
  `id` int(3) NOT NULL,
  `attraction_id` int(3) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `website` varchar(163) DEFAULT NULL,
  `address` varchar(24) DEFAULT NULL,
  `postal_code` varchar(7) DEFAULT NULL,
  `municipality` varchar(14) DEFAULT NULL,
  `city` varchar(7) DEFAULT NULL,
  `Longitude` decimal(11,8) DEFAULT NULL,
  `Latitude` decimal(10,8) DEFAULT NULL,
  KEY `fk_attraction_id` (`attraction_id`),
  CONSTRAINT `fk_attraction_id` FOREIGN KEY (`attraction_id`) REFERENCES `attractions_description` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `attractions_contact`
--

INSERT INTO `attractions_contact` (`id`, `attraction_id`, `phone`, `website`, `address`, `postal_code`, `municipality`, `city`, `Longitude`, `Latitude`) VALUES
(1, 1, '416-384-6104', 'https://www.much.com/', '299 Queen St W', 'M5V 2Z5', 'former Toronto', 'Toronto', -79.39044000, 43.64942000),
(2, 2, '416-646-4677', 'https://www.agakhanmuseum.org/', '77 Wynford Dr', 'M3C 1K1', 'North York', 'Toronto', -79.33223000, 43.72526000),
(3, 4, '416-396-7378', 'https://www.toronto.ca/data/parks/prd/facilities/complex/193/index.html', '2901 Yonge St', 'M4N 3N8', 'former Toronto', 'Toronto', -79.40120000, 43.72157000),
(4, 5, '416-392-7288', 'https://www.toronto.ca/explore-enjoy/parks-recreation/places-spaces/beaches-gardens-attractions/gardens-and-horticulture/conservatories/allan-gardens-conservatory/', '19 Horticultural Ave', 'M5A 2P2', 'former Toronto', 'Toronto', -79.37458000, 43.66153000),
(5, 7, 'None', 'https://www.arcadiaearth.ca/', '486 Front St', 'M5V 0V2', 'former Toronto', 'Toronto', -79.39700000, 43.64297000),
(6, 10, '647-696-6962', 'https://artscapewychwoodbarns.ca/', '601 Christie St', 'M6G 4C7', 'former Toronto', 'Toronto', -79.42384000, 43.67989000),
(7, 11, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/1/index.html', '1561 Lake Shore Blvd E', 'M4L 3W6', 'former Toronto', 'Toronto', -79.31033000, 43.65996000),
(8, 12, '416-392-2489', 'https://www.toronto.ca/explore-enjoy/parks-recreation/places-spaces/parks-and-recreation-facilities/location/?id=427&title=Balmy-Beach-Park', '1 Beech Ave', 'M4E 1A7', 'former Toronto', 'Toronto', -79.28419000, 43.67057000),
(9, 13, '416-798-2277', 'http://www.baps.org/Global-Network/North-America/Toronto.aspx', '61 Claireville Dr', 'M9W 5Z7', 'Etobicoke', 'Toronto', -79.62676000, 43.73865000),
(10, 14, '416-979-7799', 'https://batashoemuseum.ca/', '327 Bloor St W', 'M5S 1W7', 'former Toronto', 'Toronto', -79.40019000, 43.66729000),
(11, 18, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/2/index.html', '1 Brimley Rd S', 'M1M 3W3', 'Scarborough', 'Toronto', -79.23476772, 43.70820476),
(12, 20, 'None', 'https://bubble-planet.com/toronto/', '30 Hanover Rd', 'M3K 0E2', 'North York', 'Toronto', -79.46831000, 43.73808000),
(13, 25, '416-597-0227', 'http://www.campbellhousemuseum.ca/', '160 Queen St W', 'M5H 3H3', 'former Toronto', 'Toronto', -79.38732000, 43.65105000),
(14, 26, '416-367-9255', 'https://www.canadaswalkoffame.com/', '215 King St W', 'M5V 1H8', 'former Toronto', 'Toronto', -79.38676000, 43.64715000),
(15, 27, '416-798-2277', 'https://www.baps.org/cultureandheritage/ExperienceIndia/Exhibitions/CanadianMuseumofCulturalHeritageofIndo-Canadians.aspx', '61 Claireville Dr', 'M9W 5Z7', 'Etobicoke', 'Toronto', -79.62607000, 43.73869000),
(16, 30, '416-923-1171', 'https://casaloma.ca/', '1 Austin Ter', 'M5R 1X8', 'former Toronto', 'Toronto', -79.40944000, 43.67803000),
(17, 32, '416-394-8750', 'https://www.toronto.ca/data/parks/prd/facilities/complex/798/index.html', '256 Centennial Park Rd', 'M9C 5N3', 'Etobicoke', 'Toronto', -79.59015000, 43.65484000),
(18, 33, '416-394-8543', 'https://www.toronto.ca/explore-enjoy/parks-gardens-beaches/gardens-and-horticulture/conservatories/centennial-park-conservatory/', '151 Elmcrest Rd', 'M9C 3S1', 'Etobicoke', 'Toronto', -79.58837000, 43.64938000),
(19, 34, '416-392-2489', 'http://app.toronto.ca/tpha/beach/5.html', '1 Avenue Of The Islands', '', 'former Toronto', 'Toronto', -79.37428000, 43.61568000),
(20, 35, '416-203-0405 ', 'http://www.centreisland.ca/', '21 Avenue Of The Islands', '', 'former Toronto', 'Toronto', -79.37354000, 43.62029000),
(21, 36, '416-491-0151', 'https://www.cfshops.com/fairview-mall.html', '1800 Sheppard Ave E', 'M2J 5A7', 'North York', 'Toronto', -79.34471000, 43.77793000),
(22, 37, '416-621-1070', 'https://www.cfshops.com/sherway-gardens.html', '25 The West Mall', 'M9C 1B8', 'Etobicoke', 'Toronto', -79.55711000, 43.61187000),
(23, 38, '416-598-8560', 'https://www.cfshops.com/toronto-eaton-centre.html', '220 Yonge St', 'M5B 2H1', 'former Toronto', 'Toronto', -79.38072000, 43.65438000),
(24, 39, '416-396-7378', 'https://www.toronto.ca/data/parks/prd/facilities/complex/209/index.html', '1 Cherry St', 'M5A 0B7', 'former Toronto', 'Toronto', -79.34409000, 43.63685000),
(25, 40, '416-292-9293', 'https://www.cccgt.org/', '5183 Sheppard Ave E', 'M1B 5Z5', 'Scarborough', 'Toronto', -79.23400000, 43.79446000),
(26, 41, '416-868-6937', 'http://www.cntower.ca/', '290 Bremner Blvd', 'M5V 3L9', 'former Toronto', 'Toronto', -79.38707000, 43.64256000),
(27, 43, '416-392-6916', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/colborne-lodge/', '11 Colborne Lodge Dr', 'M6S 5A3', 'former Toronto', 'Toronto', -79.45998000, 43.64040000),
(28, 45, '416-933-2919', 'https://designexchangetoronto.com/', '234 Bay St', 'M5K 1B2', 'former Toronto', 'Toronto', -79.38032000, 43.64769000),
(29, 46, '416-634-2559', 'https://en.downsviewpark.ca/home', '70 Canuck Ave', 'M3K 2C5', 'North York', 'Toronto', -79.48417000, 43.74388000),
(30, 49, '416-596-7670', 'http://www.evergreen.ca/get-involved/evergreen-brick-works/', '550 Bayview Ave', 'M4W 3X8', 'East York', 'Toronto', -79.36473000, 43.68432000),
(31, 53, '416-392-6907', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/fort-york-national-historic-site/', '250 Fort York Blvd', 'M5V 3K9', 'former Toronto', 'Toronto', -79.40417000, 43.63924000),
(32, 55, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/1806/index.html', '30 Centre Island Pk', 'M5J 2E9', 'former Toronto', 'Toronto', -79.37627000, 43.61615000),
(33, 56, '416-586-8080', 'https://www.gardinermuseum.on.ca/', '111 Queen\'s Park', 'M5S 2C7', 'former Toronto', 'Toronto', -79.39315000, 43.66808000),
(34, 58, '416-392-2489', 'http://app.toronto.ca/tpha/beach/4.html', '443 Lakeshore Ave', 'M5J 2W2', 'former Toronto', 'Toronto', -79.38407000, 43.61291000),
(35, 59, '416-395-7432', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/gibson-house-museum/', '5172 Yonge St', 'M2N 5P6', 'North York', 'Toronto', -79.41490000, 43.76962000),
(36, 61, '416-392-1975', 'https://www.historicplaces.ca/en/rep-reg/place-lieu.aspx?id=8311', '49 Wellington St E', 'M5E 1C9', 'former Toronto', 'Toronto', -79.37417000, 43.64844000),
(37, 62, '416-392-2489', 'https://artwalk.tdwbia.ca/businesses/graffiti-alley-toronto', '513 Queen St W', 'M5V 2B4', 'former Toronto', 'Toronto', -79.39847000, 43.64792000),
(38, 63, '416-396-7378', 'https://www.toronto.ca/data/parks/prd/facilities/complex/406/index.html', '201 Guildwood Pkwy', 'M1E 1P5', 'Scarborough', 'Toronto', -79.19249000, 43.74809000),
(39, 64, '416-392-8196', 'https://www.toronto.ca/data/parks/prd/facilities/complex/2541/index.html', '695 Lakeshore Ave', 'M5J 2W2', 'former Toronto', 'Toronto', -79.39409000, 43.61986000),
(40, 65, '416-392-2489', 'https://www.toronto.ca/explore-enjoy/parks-recreation/places-spaces/parks-and-recreation-facilities/location/?id=74&title=Harbour-Square-Park', '25 Queens Quay W', 'M5J 2T5', 'former Toronto', 'Toronto', -79.37665000, 43.64019000),
(41, 68, '416-338-0338', 'http://www.highparktoronto.com/', '1873 Bloor St W', 'M6R 2Z3', 'former Toronto', 'Toronto', -79.46378000, 43.64646000),
(42, 69, '416-395-7435', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/zion-schoolhouse/', '1091 Finch Ave E', 'M2J 2X3', 'North York', 'Toronto', -79.36340000, 43.79037000),
(43, 70, '416-360-7765', 'https://www.hhof.com/', '30 Yonge St', 'M5E 1X8', 'former Toronto', 'Toronto', -79.37768000, 43.64726000),
(44, 71, '416-392-8188', 'https://www.toronto.ca/data/parks/prd/facilities/complex/1663/index.html', '339 Queens Quay W', 'M5V 1A2', 'former Toronto', 'Toronto', -79.38817000, 43.63779000),
(45, 72, '416-861-9111', 'https://www.thebay.com/', '176 Yonge St', 'M5C 2L7', 'former Toronto', 'Toronto', -79.37988000, 43.65197000),
(46, 73, '416-675-3111', 'https://humber.ca/arboretum/', '205 Humber College Blvd', 'M9W 5L7', 'Etobicoke', 'Toronto', -79.60749000, 43.72481000),
(47, 74, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/1074/index.html', '100 Humber Bay Park Rd W', 'M8V 3X7', 'Etobicoke', 'Toronto', -79.47727000, 43.62416000),
(48, 75, '416-504-2787', 'https://www.iartsmuseum.ca/', '580 King St W', 'M5V 1M1', 'former Toronto', 'Toronto', -79.39944000, 43.64489000),
(49, 76, '647-368-6070', 'https://www.illuminarium.com/toronto', '28 Gristmill Ln', 'M5A 4R2', 'former Toronto', 'Toronto', -79.36061000, 43.64993000),
(50, 79, '416-392-8188', 'https://www.toronto.ca/data/parks/prd/facilities/complex/3/index.html', '99 Edenbridge Dr', 'M9A 4N1', 'Etobicoke', 'Toronto', -79.51546000, 43.67111000),
(51, 80, '416-392-2489', 'https://www.toronto.ca/explore-enjoy/parks-recreation/places-spaces/parks-and-recreation-facilities/location/?id=107', '2075 Queen St E', 'M4L 1J1', 'former Toronto', 'Toronto', -79.29849000, 43.66816000),
(52, 82, '647-578-4663', 'https://little-canada.ca/', '10 Dundas St E', 'M5B 2G9', 'former Toronto', 'Toronto', -79.38084000, 43.65669000),
(53, 83, '416-392-6915', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/mackenzie-house/', '82 Bond St', 'M5B 1X2', 'former Toronto', 'Toronto', -79.37841000, 43.65567000),
(54, 84, '416-392-2489', 'http://app.toronto.ca/tpha/beach/1.html', '2 Forty Second St', 'L3P 7K7', 'Etobicoke', 'Toronto', -79.54054000, 43.58572000),
(55, 88, '416-395-7584', 'https://mlsquare.ca/', '5100 Yonge St', 'M2N 5V7', 'North York', 'Toronto', -79.41416000, 43.76752000),
(56, 92, '416-394-8113', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/montgomerys-inn/', '4709 Dundas St W', 'M9A 1A8', 'Etobicoke', 'Toronto', -79.52570000, 43.65171000),
(57, 94, '416-889-2285', 'https://museumofillusions.ca/', '132 Front St E', 'M5A 1E2', 'former Toronto', 'Toronto', -79.36963000, 43.65011000),
(58, 97, '416-338-0338', 'https://www.toronto.ca/311/knowledgebase/kb/docs/articles/Corporate-Real-Estate-Management/facilities-management/old-city-hall-toronto-courthouse.html', '60 Queen St W', 'M5H 2M3', 'former Toronto', 'Toronto', -79.38171000, 43.65251000),
(59, 99, '416-947-3300', 'https://www.osgoode.yorku.ca/', '130 Queen St W', 'M5H 2N6', 'former Toronto', 'Toronto', -79.38578000, 43.65202000),
(60, 100, 'None', 'https://g.co/kgs/rY8Pkrh', '11 Polson St', 'M5A 1A4', 'former Toronto', 'Toronto', -79.35559000, 43.64102000),
(61, 103, '416-325-7500', 'https://www.ola.org/en/visit-learn/parliament-government/explore-queens-park', '1 Queen\'s Park', 'M7A 1A2', 'former Toronto', 'Toronto', -79.39159000, 43.66223000),
(62, 105, '416-366-3561', 'https://www.redpathsugar.com/', '95 Queens Quay E', 'M5E 1A3', 'former Toronto', 'Toronto', -79.37124000, 43.64291000),
(63, 106, '647-351-3474', 'https://www.ripleyaquariums.com/canada/', '288 Bremner Blvd', 'M5V 3L9', 'former Toronto', 'Toronto', -79.38661000, 43.64217000),
(64, 107, '416-392-6794', 'http://riverdalefarmtoronto.ca/', '201 Winchester St', 'M4X 1B8', 'former Toronto', 'Toronto', -79.36173000, 43.66697000),
(65, 108, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/343/index.html', '550 Broadview Ave', 'M4K 2N6', 'former Toronto', 'Toronto', -79.35637000, 43.66840000),
(66, 110, '416-396-7378', 'www.toronto.ca/data/parks/prd/facilities/complex/19/index.html', '5 Glen Everest Rd', 'M1N 1J2', 'Scarborough', 'Toronto', -79.25576000, 43.69682000),
(67, 111, '416-264-2020', 'https://www.toronto.ca/data/parks/prd/facilities/complex/340/index.html', '195 Rouge Hills Dr', 'M1C 2Y9', 'Scarborough', 'Toronto', -79.11853000, 43.79314000),
(68, 112, '416-264-2020', 'https://www.pc.gc.ca/en/pn-np/on/rouge', '25 Zoo Rd', 'M1B 5W8', 'Scarborough', 'Toronto', -79.17277000, 43.81793000),
(69, 113, '416-282-8265', 'https://www.rvcc.ca/Rouge_Valley_Conservation_Centre.html', '1749 Meadowvale Rd', 'M1B 5W8', 'former Toronto', 'Toronto', -79.17101000, 43.81904000),
(70, 117, '416-586-8000', 'https://www.rom.on.ca/en', '100 Queen\'s Park', 'M5S 2C6', 'former Toronto', 'Toronto', -79.39479000, 43.66771000),
(71, 118, '416-979-9960', 'https://www.sankofasquare.ca/', '1 Dundas St E', 'M5B 2L6', 'former Toronto', 'Toronto', -79.38043000, 43.65593000),
(72, 119, '416-631-5689', 'https://www.holocaustcentre.com/', '4588 Bathurst St', 'M2R 1W6', 'North York', 'Toronto', -79.44186000, 43.76411000),
(73, 120, '416-338-8807', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/scarborough-museum/', '1007 Brimley Rd', 'M1P 3E8', 'Scarborough', 'Toronto', -79.25482000, 43.75761000),
(74, 124, '416-392-6910', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/spadina-museum/', '285 Spadina Rd', 'M5R 2V5', 'former Toronto', 'Toronto', -79.40818000, 43.67898000),
(75, 125, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/408/index.html', '120 King St E', 'M5C 1G6', 'former Toronto', 'Toronto', -79.37306000, 43.65083000),
(76, 127, '416-392-7220', 'http://www.stlawrencemarket.com/', '93 Front St E', 'M5E 1C3', 'former Toronto', 'Toronto', -79.37156000, 43.64870000),
(77, 128, '416-362-2337', 'https://steamwhistle.ca/', '255 Bremner Blvd', 'M5V 3M9', 'former Toronto', 'Toronto', -79.38570000, 43.64067000),
(78, 129, '416-396-7378', 'https://www.toronto.ca/data/parks/prd/facilities/complex/2261/index.html', '11 Dockside Dr', 'M5A 0B6', 'former Toronto', 'Toronto', -79.36743000, 43.64290000),
(79, 130, '416-392-2489', 'https://www.toronto.ca/data/parks/prd/facilities/complex/394/index.html', '1755 Lake Shore Blvd W', 'M6S 5A3', 'former Toronto', 'Toronto', -79.45703000, 43.63738000),
(80, 131, '416-534-8662', 'https://www.shevchenko.ca/', '1604 Bloor St W', 'M6P 1A7', 'former Toronto', 'Toronto', -79.45524000, 43.65599000),
(81, 133, '416-599-5321', 'https://textilemuseum.ca/', '55 Centre Ave', 'M5G 2H5', 'former Toronto', 'Toronto', -79.38674000, 43.65447000),
(82, 134, '416-596-1382', 'https://museum.48thhighlanders.ca/', '73 Simcoe St', 'M5J 1W9', 'former Toronto', 'Toronto', -79.38571000, 43.64735000),
(83, 136, '647-693-4646', 'https://www.thedistillerydistrict.com/', '55 Mill St', 'M5A 3C4', 'former Toronto', 'Toronto', -79.35915000, 43.65024000),
(84, 138, '416-966-1600', 'https://tr.jpf.go.jp/', '2 Bloor St E', 'M4W 1A8', 'former Toronto', 'Toronto', -79.38651000, 43.67080000),
(85, 143, '416-203-7777', 'https://thewelltoronto.com/', '486 Front St W', 'M5V 0V2', 'former Toronto', 'Toronto', -79.39579000, 43.64279000),
(86, 146, '416-599-2033', 'https://www.tiff.net/', '350 King St W', 'M5V 3X5', 'former Toronto', 'Toronto', -79.39050000, 43.64654000),
(87, 147, '416-396-2819', 'https://www.toronto.ca/explore-enjoy/history-art-culture/museums/todmorden-mills/', '67 Pottery Rd', 'M4K 2B9', 'East York', 'Toronto', -79.36024000, 43.68647000),
(88, 148, '416-661-6600', 'https://tommythompsonpark.ca/', '1 Leslie St', 'M4M 3M2', 'former Toronto', 'Toronto', -79.32487000, 43.63519000),
(89, 149, '416-397-1341', 'https://torontobotanicalgarden.ca/', '777 Lawrence Ave E', 'M3C 1P2', 'North York', 'Toronto', -79.35817000, 43.73415000),
(90, 150, '416-392-2489', 'https://www.toronto.ca/services-payments/venues-facilities-bookings/booking-city-facilities/city-hall/', '100 Queen St W', 'M5H 2N1', 'former Toronto', 'Toronto', -79.38369000, 43.65303000),
(91, 152, '416-392-2489', 'https://www.toronto.ca/explore-enjoy/parks-gardens-beaches/toronto-island-park/', '1 Centre Island Pk', '', 'former Toronto', 'Toronto', -79.37469000, 43.62256000),
(92, 154, '416-973-4000', 'https://www.toronto.ca/explore-enjoy/parks-recreation/places-spaces/parks-and-recreation-facilities/location/?id=1707&title=Toronto-Music-Garden', '479 Queens Quay W', 'M5V 3M8', 'former Toronto', 'Toronto', -79.39430000, 43.63694000),
(93, 156, '416-808-7020', 'https://www.tps.ca/museum/', '40 College St', 'M5G 2J3', 'former Toronto', 'Toronto', -79.38482000, 43.66122000),
(94, 157, '416- 214-9229', 'https://torontorailwaymuseum.com/', '255 Bremner Blvd', 'M5V 3M9', 'former Toronto', 'Toronto', -79.38595000, 43.64071000),
(95, 158, '416-395-5577', 'https://www.torontopubliclibrary.ca/torontoreferencelibrary/', '789 Yonge St', 'M4W 2G8', 'former Toronto', 'Toronto', -79.38682000, 43.67179000),
(96, 161, '416-392-5900', 'https://www.torontozoo.com/', '2000 Meadowvale Rd', 'M1B 5W8', 'Scarborough', 'Toronto', -79.18229000, 43.82034000),
(97, 162, '416-865-1833', 'http://www.townofyork.com/', '260 Adelaide St E', 'M5A 1N1', 'former Toronto', 'Toronto', -79.37040000, 43.65190000),
(98, 164, '416-392-2489', 'https://www.toronto.ca/explore-enjoy/parks-recreation/places-spaces/parks-and-recreation-facilities/location/?id=238', '19 Trinity Sq', 'M5G 1B1', 'former Toronto', 'Toronto', -79.38162000, 43.65470000),
(99, 165, '416-923-9861', 'http://umcontario.com/', '620 Spadina Ave', 'M5S 2H4', 'former Toronto', 'Toronto', -79.40210000, 43.66198000),
(100, 168, '416-736-1733', 'https://blackcreek.ca/', '1000 Murray Ross Pkwy', 'M3J 2P3', 'North York', 'Toronto', -79.51507000, 43.77260000),
(101, 169, '416-338-4386', 'https://www.bloor-yorkville.com/village-yorkville-park-green-space-gem/', '115 Cumberland St', 'M5R 1A6', 'former Toronto', 'Toronto', -79.39168000, 43.67002000),
(102, 170, '416-396-7378', 'http://app.toronto.ca/tpha/beach/6.html', '40 Lakeshore Ave', 'M5J 1X8', 'former Toronto', 'Toronto', -79.35224000, 43.63002000),
(103, 172, '416-396-7378', 'https://www.toronto.ca/data/parks/prd/facilities/complex/311/index.html', '1675 Lake Shore Blvd E', 'M4L 3W6', 'former Toronto', 'Toronto', -79.30709000, 43.66181000),
(104, 173, '416-675-7223', 'https://woodbine.com/', '555 Rexdale Blvd', 'M9W 7G3', 'Etobicoke', 'Toronto', -79.60412000, 43.71446000),
(105, 174, '437-880-8448', 'http://www.fantasyfair.ca/', '500 Rexdale Blvd', 'M9W 6K5', 'Etobicoke', 'Toronto', -79.60003000, 43.72067000),
(106, 175, '416-789-3261', 'https://yorkdale.com/', '3401 Dufferin St', 'M6A 2T9', 'North York', 'Toronto', -79.45217000, 43.72543000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions_contact`
--
ALTER TABLE `attractions_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions_contact`
--
ALTER TABLE `attractions_contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;