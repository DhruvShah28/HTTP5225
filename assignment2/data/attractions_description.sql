-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 09:51 PM
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
-- Table structure for table `attractions_description`
--

CREATE TABLE `attractions_description` (
  `id` int(3) NOT NULL,
  `name` varchar(56) DEFAULT NULL,
  `category` varchar(21) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `attractions_description`
--

INSERT INTO `attractions_description` (`id`, `name`, `category`, `description`) VALUES
(1, '299 Queen Street West', 'Landmark', 'A monumental building that was once dedicated to engaging the youth through popular music and popular television series.'),
(2, 'Aga Khan Museum', 'Museum', 'Dedicated to sharing the artistic, intellectual, and scientific contributions that Islamic civilizations and cultures have made to world heritage.'),
(4, 'Alexander Muir Memorial Gardens', 'Nature/ Park', 'Named after the famous composer Alexander Muir. The gardens act as a path into the tranquil ravine system that includes walking trails. The gardens are open year round.'),
(5, 'Allan Gardens', 'Nature/ Park', 'Allan Gardens is a park and indoor botanical garden built in 1910. The building houses six greenhouses featuring plants and flowers from across the globe. Open year round and free to the public.'),
(7, 'Arcadia Earth', 'Attraction', 'Arcadia Earth is a multi-sensory journey that combines creative art installations and exciting technology that showcases the beauty of our planet.'),
(10, 'Artscape Wychwood Barns', 'Landmark', 'A heritage building converted into a community centre that hosts many events, festivals, farmers market and a children\'s theatre.'),
(11, 'Ashbridges Bay Park', 'Nature/ Park', 'Ashbridges Bay waterfront park features large beaches, fishing areas, a marina, and the Woodbine Beach boardwalk.'),
(12, 'Balmy Beach Park', 'Nature/ Park', 'Created in 1903, the historic park features a lawn bowling club, a playground and outdoor fitness equipment.'),
(13, 'BAPS Shri Swaminarayan Mandir', 'Landmark', 'This unique-to-Canada architectural monument is made with 24,000 pieces of marble and stone. Discover the more than 10,000-year-old heritage of India.'),
(14, 'Bata Shoe Museum', 'Museum', 'Home to hundreds of shoes (from a collection numbering over 13,000). The museum celebrates the style and function of footwear in impressive galleries from ancient Egypt to modern fashion.'),
(18, 'Bluffer\'s Park and Beach (Scarborough Bluffs)', 'Nature/ Park', 'Providing a beautiful backdrop for locals and visitors alike, the Bluffs are one of Toronto\'s great natural wonders.'),
(20, 'Bubble Planet', 'Attraction', 'Bubble Planet is an immersive experience featuring VR technology, illusions, ball pits and more.'),
(25, 'Campbell House', 'Museum', 'The Campbell house dates back to 1822 and was once home to Judge William Campbell.  It is the last example of Palladian architecture in  Toronto.'),
(26, 'Canada\'s Walk of Fame', 'Landmark', 'Canada\'s Walk of Fame celebrates Canadians who have excelled in their respective fields for at least 10 years. The stars are displayed throughout the Entertainment District along King Street West and Simcoe Street.'),
(27, 'Canadian Museum of Cultural Heritage of Indo-Canadian', 'Museum', 'The Canadian Museum of Cultural Heritage of Indo-Canadians is a museum committed to the understanding of India\'s rich cultural heritage. See BAPS Shri Swaminarayan Mandir.'),
(30, 'Casa Loma', 'Attraction', 'Canadas foremost castle is complete with decorated suites, secret passages, an 800-foot tunnel, towers, stables, and beautiful 5-acre estate gardens.'),
(32, 'Centennial Park', 'Nature/ Park', 'Centennial Park is situated in Etobicoke and was opened in 1967 to celebrate Canada\'s 100th birthday. The park features sports fields, a conservatory, a ski hill, an Olympic size swimming pool, picnic areas and a Frisbee golf course.'),
(33, 'Centennial Park Conservatory', 'Nature/ Park', 'The Centennial Park conservatory is located within Centennial Park. At a size of 12,000 square feet it features an arid house, a show house and a tropical house. The conservatory is open year round and is free to the public.'),
(34, 'Centre Island Beach', 'Nature/ Park', 'Centre Island Beach also known as Manitou Beach has been used by locals and tourists alike for more than a century. The beach is located on the south end of Centre Island. It is surrounded by park space and amenities such as bike and boat rentals.'),
(35, 'Centreville Amusement Park', 'Attraction', 'Centreville is a 14-acre, turn-of-the-century, Ontario village theme park for children located on Centre Island, featuring over 30 rides.'),
(36, 'CF Fairview Mall', 'Landmark', 'An upscale shopping centre in the north eastern part of Toronto.'),
(37, 'CF Sherway Gardens', 'Landmark', 'An upscale shopping centre in Toronto\'s West end.'),
(38, 'CF Toronto Eaton Centre', 'Landmark', 'The Toronto Eaton Centre is downtown Toronto\'s only shopping mall. It features over 200 stores and restaurants as well as the sculpture called Flightstop designed by Michael Snow.'),
(39, 'Cherry Beach/ Clarke Beach Park', 'Nature/ Park', 'Cherry Beach is located within the port lands and features a dog\'s off leash area, the Martin Goodman Trail and a picnic site.'),
(40, 'Chinese Cultural Centre of Greater Toronto', 'Attraction', 'The building houses the P.C. Ho theatre, studios, conference rooms, a resource centre, a reception hall and an art gallery.'),
(41, 'CN Tower', 'Attraction', 'The CN Tower is an engineering marvel and one of the city\'s most visited sites. It features the world\'s highest wine cellar, a fine dining revolving restaurant (360), a glass floor. For the true adventure seeker, the Edge walk.'),
(43, 'Colborne Lodge', 'Museum', 'This quaint cottage located within High Park was home to John and Jemma Howard. In 1873 the couple deeded the part to lodge to the City of Toronto. The house is a great example of a regency style building.'),
(45, 'Design Exchange', 'Museum', 'Canada\'s only museum dedicated to the preservation of design which includes the design heritage from an array of mediums.'),
(46, 'Downsview Park', 'Nature/ Park', 'The vast green space allows for an array of small-to-large scale events such as culture, dining, leisure, sports, and recreation.'),
(49, 'Evergreen Brick Works', 'Attraction', 'A former brickyard, the Evergreen Brick Works is an urban model for ecosystem planning. Filled with activities for the whole family and a farmers market.'),
(53, 'Fort York National Historic Site', 'Museum', 'Birthplace of Toronto in 1793 and scene of the Battle of York in 1813, Fort York has Canadas largest collection of original War of 1812 buildings. Open year round for tours, exhibits, and demonstrations.'),
(55, 'Franklin Children\'s Garden', 'Garden / Conservatory', 'The garden, inspired by Franklin the Turtle, is an area to discover nature, play, while learning something new.'),
(56, 'Gardiner Museum', 'Museum', 'A museum dedicated to one of the oldest forms of art. The Gardiner Museum of Ceramic Art is home to over 3,000 historical and contemporary ceramic pieces.'),
(58, 'Gibraltar Point Beach', 'Nature/ Park', 'Surrounded by eastern cottonwood trees, the Gibraltar Point Beach is located on the southwest shore of Toronto Island Park. The Gibraltar Point Centre for the Arts is walking distance from the beach.'),
(59, 'Gibson House Museum', 'Museum', 'Operated  by the City of Toronto, the Gibson House is a museum where visitors experience an exquisite farmhouse and learn more about the rural development of the area.'),
(61, 'Gooderham Flatiron Building', 'Landmark', 'Gooderham Building is a historic office building known for its unique location and triangular architecture.'),
(62, 'Graffiti Alley', 'Landmark', 'The graffiti hub showcases several blocks of colourful murals and art.'),
(63, 'Guild Park and Gardens (formely known as Guildwood Park)', 'Nature/ Park', 'A sculptural alluring park and garden, the Guild Park and Gardens is rich in local history and a must-see for locals and visitors alike.'),
(64, 'Hanlan\'s Point Beach', 'Nature/ Park', 'Situated on the west shore of Toronto Island Park, this beach is Toronto\'s only clothing optional beach.'),
(65, 'Harbour Square Park', 'Nature/ Park', 'Located next to the Toronto Ferry Docks, Harbour Square Park offers downtown folks a spot to sit and watch the ferries travel back and forth to the island.'),
(68, 'High Park', 'Nature/ Park', 'High Park is one of Torontos largest parks, and attracts visitors each spring for the blooming of its famous cherry blossoms. It also contains attractions and amenities such as recreational programs, a local zoo, a unique playground and a pond.'),
(69, 'Historic Zion Schoolhouse', 'Museum', 'Built in 1869, the Historic Zion Schoolhouse has been restored to emulate schooling as it once was in the farming  district of L\'Amaroux'),
(70, 'Hockey Hall of Fame', 'Attraction', 'Unique to Toronto, and featuring the Stanley Cup, interactive exhibits, shows, and the finest collection of hockey artifacts in the world.'),
(71, 'HTO Park', 'Nature/ Park', 'Facing the inner harbour with Toronto Island Park in clear viewing,  HTO Park includes an urban beach which is decorated with yellow umbrellas and Muskoka chairs.'),
(72, 'Hudson\'s Bay', 'Landmark', 'Famously known as being North America\'s oldest company, the Hudson Bay is a chain of department stores  that operate throughout the country.'),
(73, 'Humber Arboretum', 'Nature/ Park', 'Located nearby the West Humber River Valley, the Humber Arboretum offers trails through environmentally-rich areas like forests, and wetlands.'),
(74, 'Humber Bay Park West (Humber Bay Butterfly Habitat)', 'Nature/ Park', 'Located at a waterfront park at the mouth of Mimico Creek, the Humber Bay Butterfly Habitat is focused on providing habitat for an array of native butterfly species.'),
(75, 'iArts Museum', 'Museum', 'This unique museum features larger-than-life 3D illusions as an immersive experience.'),
(76, 'Illuminarium Toronto', 'Attraction', 'An immerseive experience featuring cutting edge visual, audio and projection technology, occasionally hosting shows.'),
(79, 'James Garden Park', 'Garden / Conservatory', 'Former estate gardens located in Toronto\'s west end that include rare trees, spring-fed pools, and other seasonal displays.'),
(80, 'Kew Gardens Park', 'Nature/ Park', 'Located in The Beaches, Kew Gardens act as one of Toronto\'s most popular picnic grounds while having access to the boardwalk on the lakeshore.'),
(82, 'Little Canada', 'Attraction', 'This attraction is an immersive joruney through the sights, sounds and wonder of Canada on a miniature scale.'),
(83, 'Mackenzie House', 'Museum', 'Mackenzie House is the restored home of William Lyon Mackenzie, Toronto\'s first Mayor. It is one of 10 museums operated by the City of Toronto.'),
(84, 'Marie Curtis Park East Beach', 'Nature/ Park', 'Located at the mouth of Etobicoke Creek near the foot of Forty-Second Street. Most users of this beach come from the bordering Long Branch community.'),
(88, 'Mel Lastman Square', 'Landmark', 'A public park featuring 20,000 square feet of open space, a garden court, an outdoor amphitheatre, fountains and a reflecting pool.'),
(92, 'Montgomery\'s Inn', 'Museum', 'A museum that was once a historic home, visitors can delve into the lifestyle of a 19th century Irish farm family with access to the bedrooms, kitchen wing and much more.'),
(94, 'Museum of Illusions Toronto', 'Museum', 'The Museum of Illusions offers a wide array of mind-bending exhibits and optical illusions.'),
(97, 'Old City Hall', 'Landmark', 'Old City Hall is a landmark building that was used as Toronto\'s second City Hall and is a great example of beautiful architecture. Today, it is used as a courthouse.'),
(99, 'Osgoode Hall', 'Landmark', 'Constructed in the 19th century, Osgoode Hall acts as the judicial landmark of Toronto, with institutions like the Ontario Court of Appeal, the Law Society of Upper Canada, and the Divisional Court of the Superior Court of Justice.'),
(100, 'Polson Pier', 'Landmark', 'Located on the water, the Polson Pier is a waterfront property that includes a drive-in cinema, patio bar, concert venues, and much more.'),
(103, 'Queen\'s Park: Legislative Assembly of Ontario', 'Landmark', 'A variety of free tour options are available all year round to visit Ontarios historic Legislative Building (iconic sandstone Richardson Romanesque style building, completed in 1893).'),
(105, 'Redpath Sugar Museum', 'Museum', 'Located inside the Redpath Refinery, the Redpath Sugar Museum is for those interested in the history of sugar, the development and the role of the Redpath family in Canada\'s industry sector, and much more.'),
(106, 'Ripley\'s Aquarium of Canada', 'Attraction', 'Canadas largest aquarium. Interactive attractions feature over 5.7 million litres of water and more than 16,000 marine animals.'),
(107, 'Riverdale Farm', 'Attraction', 'On 7.5 acres, Riverdale Farm is an historic working farm with many scenic pathways and farm animals.'),
(108, 'Riverdale Park (East and West)', 'Nature/ Park', 'A Toronto park that is great for all seasons. Riverdale Park West has three multipurpose sport fields, seven tennis courts, an outdoor ice rink, two baseball diamonds, and much more.'),
(110, 'Rosetta McClain Gardens', 'Nature/ Park', 'The Rosetta McClain Gardens is a great place to safely see the Scarborough Bluffs and has beautiful rose gardens. There are signs available in braille, textured paths, raised planters, and a ramp to ensure accessibility.'),
(111, 'Rouge Beach Park', 'Nature/ Park', 'One of Toronto\'s designated swimming beaches, Rouge Beach has two distinct areas a white sand beach and a marsh habitat.'),
(112, 'Rouge National Urban Park', 'Nature/ Park', 'Canada\'s first national park within an urban area, the park is Toronto\'s largest. It features hiking trails, a campground and Rouge Beach.'),
(113, 'Rouge Valley Conservation Centre', 'Nature/ Park', 'The Centre focuses on environmental restoration and research while also offering interpretive walks and educational programs for the public.'),
(117, 'Royal Ontario Museum', 'Museum', 'Canadas largest museum of natural history and world cultures, presents engaging galleries of art, archaeology, and natural science from around the world.'),
(118, 'Sankofa Square (formerly known as Yonge-Dundas Square)', 'Landmark', 'Yonge-Dundas Square is one of the city\'s largest public squares. It is located directly across from the Toronto Eaton Centre. The square is home to free movie screenings, concerts, shows and exhibits.'),
(119, 'Sarah and Chaim Neuberger Holocaust Education Centre', 'Museum', 'The Sarah and Chaim Neuberger Holocaust Education Centre provides all its visitors a complete understanding of the Holocaust.30, 000 students pass through its doors during educational trips.'),
(120, 'Scarborough Museum', 'Museum', 'The Scarborough Museum and its gardens are located within Thomson Memorial Park.It is one of 10 museums operated by the City of Toronto.The Museum looks back on the story of Scarborough\'s roots and history.'),
(124, 'Spadina Museum', 'Museum', 'Operated by the City of Toronto, the Spadina Museum is a historic manor house that allows visitors to learn about the history and architecture of  late 19th century to early 20th century Toronto.'),
(125, 'St. James Park', 'Nature/ Park', 'A large green space, home to a Victorian garden, live performances, and is a popular spot for photos. The park is adjacent to historic St. James Cathedral.'),
(127, 'St. Lawrence Market and Market Gallery', 'Attraction', 'Voted best fresh food market in the world by National Geographic in 2012, Torontos historic and premier market also includes The Market Gallery, housed within part of Torontos original 19th century City Hall.'),
(128, 'Steam Whistle Brewery', 'Attraction', 'A microbrewery located in downtown Toronto, Steam Whistle Brewery produces a premium pale lager composed of only four ingredients.'),
(129, 'Sugar Beach Park', 'Nature/ Park', 'Sugar Beach is one of Toronto\'s urban beach parks. Famous for its pink umbrellas and Muskoka chairs.'),
(130, 'Sunnyside Beach', 'Nature/ Park', 'One of Toronto\'s designated swimming beaches, Sunnyside Beach provides rowers and paddlers calm waters with an offshore break wall.'),
(131, 'Taras H. Shevchenko Museum', 'Museum', 'The Taras H. Shevchenko Museum is the home to  exhibitions dedicated to the contribution of Ukrainians in Canada and the life of famed writer Taras Shevchenko.'),
(133, 'Textile Museum of Canada', 'Museum', 'With more than 13,000 objects from more than 200 countries and regions, the Textile Museum of Canada celebrates cultural diversity through traditional fabrics, garments, carpets and related artifacts such as beadwork and basketry.'),
(134, 'The 48th Highlanders Museum', 'Museum', 'This museum is dedicated to one of Canada\'s famous military regiments. The museum holds historical artifacts dating from Victorian Toronto in 1891, when the 48th Highlanders was formed, to the present day.'),
(136, 'The Distillery Historic District', 'Landmark', 'A pedestrian-only historic area that represents the largest and best preserved collection of Victorian Industrial Architecture in North America. The refurbished warehouses are now home to restaurants, bars, galleries, studios, and a theatre.'),
(138, 'The Japan Foundation', 'Museum', 'A cultural establishment aiming towards effective development of its international cultural exchange programs in Japanese arts and cultural exchange.'),
(143, 'The Well', 'Landmark', 'The Well opened in 2023, offering diverse dining experiences, retail stores and unique architecture.'),
(146, 'TIFF Bell Lightbox', 'Landmark', 'The TIFF Bell Lightbox is the home of the Toronto International Film Festival and a year-round destination for unique screenings, themed festivals, and exhibitions. It also houses two restaurants.'),
(147, 'Todmorden Mills Heritage Site', 'Landmark', 'Todmorden Mills Heritage Site is situated within the Don Valley and is located beside a 9.2 hectare wildflower preserve. It features historic buildings such as the Brewery building and the Papermill theatre and gallery.'),
(148, 'Tommy Thompson Park', 'Nature/ Park', 'This narrow peninsula park is a perfect place for hiking, jogging, cycling and birdwatching, with 10km of paved trails.'),
(149, 'Toronto Botanical Gardens and Edwards Gardens', 'Nature/ Park', 'Located at the stunning Edwards Gardens, Toronto Botanical Garden features award-winning themed gardens and an indoor education/interpretation facility.'),
(150, 'Toronto City Hall and Nathan Phillips Square', 'Landmark', 'Toronto\'s City Hall is one of Toronto\'s best known and visited landmarks. Nathan Phillips Square located directly in front of City Hall, is the site of  the iconic Toronto sign, concerts, farmers\' markets, and iconic events.'),
(152, 'Toronto Island Park', 'Nature/ Park', 'The Toronto Island Park is North America\'s largest car free neighbourhood and is only a short ferry ride away from downtown Toronto. The park is features several attractions, beaches, restaurants, bike and boat rentals and plenty of open green space.'),
(154, 'Toronto Music Garden', 'Nature/ Park', 'The Toronto Music Garden is situated on Toronto\'s newly revamped waterfront. The garden was designed by landscape designer Julie Moir Messervy and by the cellist Yo Yo Ma.'),
(156, 'Toronto Police Museum & Discovery Centre', 'Museum', 'The Toronto Police Museum & Discovery Centre occupies 3,000 square feet within the Police Headquarters building on College Street. The museum solely relies on private donations and is a not for profit registered charity.'),
(157, 'Toronto Railway Museum', 'Museum', 'The Toronto Railway Museum encompasses the Canadian Pacific Railway John Street Roundhouse at Roundhouse Park and features a restored turntable, a number of trains and the 1896 Canadian Pacific Don Station.'),
(158, 'Toronto Reference Library', 'Landmark', 'The Toronto Reference Library is situated in a 5 storey building within the Yorkville neighbourhood. It is the largest public reference library in Canada.'),
(161, 'Toronto Zoo', 'Attraction', 'The Toronto Zoo is one of the largest zoos in the world at 287 hectares (710 acres) and is known for interactive education and conservation activities. It is currently home to 2 giant pandas, and more than 5,000 animals representing over 500 species.'),
(162, 'Toronto\'s First Post Office', 'Museum', 'Toronto\'s First Post Office acts as a museum but also continues to operate as a full service Canada Post office. Admission to the museum is by donation.'),
(164, 'Trinity Square', 'Landmark', 'Located in between the Toronto Eaton Centre and Old City Hall, the park features a fountain, ornamental pond, a labryrinth and seating; the park is a hotspot for music and events.'),
(165, 'Ukrainian Museum of Canada', 'Museum', 'The Ukrainian Museum of Canada features over 4,000 artifacts. These artifacts include prints, coins, maps jewellery, textiles and historic costumes.'),
(168, 'Village at Black Creek (Black Creek Pioneer Village)', 'Museum', 'Become immersed in the lifestyles, customs, and surroundings of early residents who built the foundations for modern Toronto and Ontario at this 30-acre site.'),
(169, 'Village of Yorkville Park', 'Nature/ Park', 'The Village of Yorkville Park was built on the site of a former parking lot, in the heart of the Bloor Yorkville neighbourhood. The main focal point of the park is the rock which weighs 650 tonnes and is approximately 1 billion years old.'),
(170, 'Ward\'s Island Beach', 'Nature/ Park', 'Ward\'s Island beach is located on the most Eastern part of the Toronto Islands. It features a residential neighbourhood, 2 restaurants, a beach and boardwalk.'),
(172, 'Woodbine Beach', 'Nature/ Park', 'Woodbine Beach is one of the city\'s main beaches. The park is located over 15.2 hectares.  Features include the Martin Goodman Trail and the Donald D. Summerville Outdoor Olympic Pool.'),
(173, 'Woodbine Racetracks', 'Attraction', 'Offers both Standardbred and Thoroughbred racing and hosts many prominent events (including the Queens Plate)throughout the year.'),
(174, 'Woodbine Shopping Centre and Fantasy Fair', 'Attraction', 'The Woodbine Shopping Centre is located in the north western part of the city; close to Pearson Airport and Woodbine Racetrack. Fantasy Fair located within the mall is an indoor amusement park for children.  In 2015 it celebrates 30 years.'),
(175, 'Yorkdale Shopping Centre', 'Landmark', 'An upscale shopping centre in the northern part of Toronto.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions_description`
--
ALTER TABLE `attractions_description`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions_description`
--
ALTER TABLE `attractions_description`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
