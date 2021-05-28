-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 01:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(3, 'Fashion', '2021-05-24 09:30:33'),
(4, 'Politics', '2021-05-24 09:30:48'),
(5, 'Music', '2021-05-24 09:31:07'),
(6, 'Football', '2021-05-24 09:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `no_of_views` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `published_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `user_id`, `category_id`, `no_of_views`, `image`, `content`, `created_at`, `updated_at`, `published_status`) VALUES
(1, 'Patrisse Cullors: Black Lives Matter co-founder resigns', 11, 4, 0, 'http://localhost/fixbit/assets/images/posts/60b0ccfb84bbd6998.jpg', '&lt;p&gt;&lt;strong&gt;Black Lives Matter&amp;#39;s co-founder says she is resigning from its foundation, but not because of what she called right-wing attempts to discredit her.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Patrisse Cullors said Friday would be her last day at the foundation, which she has led for nearly six years.&lt;/p&gt;\r\n\r\n&lt;p&gt;The 37-year-old activist&amp;#39;s finances came under scrutiny last month after it was reported she owned four homes.&lt;/p&gt;\r\n\r\n&lt;p&gt;Black Lives Matter started as a hashtag in 2013 and has since become a global movement.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ms Cullors said she would step down from the Black Lives Matter Global Network to focus on her forthcoming second book, An Abolitionist&amp;#39;s Handbook, and a TV development deal with Warner Bros highlighting black stories.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/world-us-canada-55106268&quot;&gt;BLM founders: We fought to change history and won&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://blacklivesmatter.com/black-lives-matter-global-network-foundation-announces-leadership-transition/&quot;&gt;In a statement&lt;/a&gt;, she said: &amp;quot;With smart, experienced and committed people supporting the organization during this transition, I know that BLMGNF is in good hands.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;The foundation&amp;#39;s agenda remains the same - eradicate white supremacy and build life-affirming institutions.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;Ms Cullors&amp;nbsp;&lt;a href=&quot;https://apnews.com/article/ca-state-wire-george-floyd-philanthropy-race-and-ethnicity-0a89ec240a702537a3d89d281789adcf&quot;&gt;told the AP news agency&lt;/a&gt;&amp;nbsp;her resignation had been planned for more than a year and was not related to claims that she had misused donations to acquire her property portfolio. There is no evidence to suggest that she had done so.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Those were right-wing attacks that tried to discredit my character, and I don&amp;#39;t operate off of what the right thinks about me,&amp;quot; she said.&lt;/p&gt;\r\n\r\n&lt;p&gt;The BLM Foundation told AP in February that it had raised $90m (&amp;pound;63m) amid last year&amp;#39;s racial justice protests following the murder of George Floyd in Minneapolis, Minnesota.&lt;/p&gt;\r\n', '2021-05-28 10:59:07', '2021-05-28 10:59:07', 0),
(2, 'Taiwan must choose between virus and politics', 11, 6, 0, 'http://localhost/fixbit/assets/images/posts/60b0cd8fcf5731405.jpg', '&lt;p&gt;&lt;strong&gt;After successfully keeping coronavirus at bay, Taiwan is currently in the grip of its first serious outbreak.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The island is desperately seeking vaccines to protect its people, and Taiwan&amp;#39;s giant neighbour China has offered to help.&lt;/p&gt;\r\n\r\n&lt;p&gt;But this puts Taiwanese leaders in a dilemma. Should they accept assistance from a country that wants to see Taiwan cease to exist as a self-governing entity?&lt;/p&gt;\r\n\r\n&lt;p&gt;Or, to put it another way, is the virus more important than politics?&lt;/p&gt;\r\n\r\n&lt;p&gt;So far, Taiwan has said no to Beijing.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://ichef.bbci.co.uk/news/976/cpsprodpb/EB45/production/_104492206_gettyimages-1052576002-1.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The dilemma did not exist until the middle of this month. Up until then, Taiwan had seen only 1,500 or so infections and just 12 deaths.&lt;/p&gt;\r\n\r\n&lt;p&gt;But then cases began to increase sharply. On Thursday alone Taiwan reported 13 deaths.&lt;/p&gt;\r\n\r\n&lt;p&gt;And few people in Taiwan are protected against the virus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Up until this week, Taiwan had received around only 700,000 vaccine doses. Just 1% of the population of 23 million had received a jab.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;To fight the upsurge in cases, the authorities in Taiwan realised they needed more vaccines - and fast.&lt;/p&gt;\r\n\r\n&lt;p&gt;On Tuesday, Health Minister Chen Shih-chung said two million shots would arrive in June; 10 million by the end of August.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Taiwan is working to expand vaccination, with imported vaccine doses continuing to arrive,&amp;quot; wrote Taiwan&amp;#39;s President, Tsai Ing-wen, on Twitter.&lt;/p&gt;\r\n\r\n&lt;p&gt;The BBC is not responsible for the content of external sites.&lt;/p&gt;\r\n', '2021-05-28 11:01:35', '2021-05-28 11:01:35', 0),
(3, 'Twitter: Social media giant lists new &#039;Blue&#039; subscription service', 11, 3, 0, 'http://localhost/fixbit/assets/images/posts/60b0ce2e1ff056784.jpg', '&lt;p&gt;&lt;strong&gt;Twitter has listed a new subscription service on app stores, in an indication that the social media giant is preparing to trial the offering soon.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Twitter Blue&amp;quot; is listed as an in-app purchase, priced at &amp;pound;2.49 in the UK and $2.99 in the US.&lt;/p&gt;\r\n\r\n&lt;p&gt;Twitter has given no further details, and declined to confirm online claims that the service could allow users to &amp;quot;undo&amp;quot; tweets.&lt;/p&gt;\r\n\r\n&lt;p&gt;It previously said it was working on special features for paid subscribers.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/business-57004794&quot;&gt;Twitter tells users to be nice and think twice&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/technology-57192898&quot;&gt;Twitter finds racial bias in image-cropping AI&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/business-57004794&quot;&gt;Twitter tells users to be nice and think twice&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;The firm wouldn&amp;#39;t comment directly on the listing but highlighted to the BBC that it had previously announced plans to diversify its revenue sources.&lt;/p&gt;\r\n\r\n&lt;p&gt;Although &amp;quot;Twitter Blue&amp;quot; is now listed on app stores, it isn&amp;#39;t yet fully enabled for users.&lt;/p&gt;\r\n\r\n&lt;p&gt;The BBC understands that pilot offerings of the subscription service are likely to start soon although it is unclear which countries it will be available in first.&lt;/p&gt;\r\n\r\n&lt;p&gt;According to technology blogger Jane Manchun Wong,&amp;nbsp;&lt;a href=&quot;https://twitter.com/wongmjane/status/1398022730553860102&quot;&gt;who claims to be the first paying user of the service&lt;/a&gt;, it includes an &amp;quot;undo tweet&amp;quot; feature as well as a &amp;quot;reader mode&amp;quot; to make reading long threads easier. But Twitter has declined to confirm her claims.&lt;/p&gt;\r\n\r\n&lt;p&gt;The social media giant told the BBC that increasing &amp;quot;revenue durability&amp;quot; is the company&amp;#39;s top objective.&lt;/p&gt;\r\n\r\n&lt;p&gt;The firm also plans to continue developing and experimenting with other ways to diversify its revenues beyond advertising this year and further ahead.&lt;/p&gt;\r\n\r\n&lt;p&gt;These plans could also include subscription services and other ways to offer individuals and businesses access to special features on the platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;Twitter has also made clear that it will continue to focus on growing its advertising business.&lt;/p&gt;\r\n', '2021-05-28 11:04:14', '2021-05-28 11:04:14', 0),
(4, 'Tech Tent: Green Bitcoin and innovative engines', 11, 4, 0, 'http://localhost/fixbit/assets/images/posts/60b0ce85b62c39137.jpg', '&lt;p&gt;&lt;strong&gt;A brand new technology is eager to show it won&amp;#39;t destroy the planet. Meanwhile a tech business, founded more than 100 years ago, wants to prove it can use big data to prosper without damaging the environment.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;On this week&amp;#39;s Tech Tent we explore whether Bitcoin is going green and if the jet engine business Rolls Royce can still innovate.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Podcast available now&quot; src=&quot;https://ichef.bbci.co.uk/news/2048/cpsprodpb/106C9/production/_111837276_rory-tech-tent-nc.png&quot; style=&quot;height:122.938px; margin:0px; width:800px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/sounds/play/w3ct1ngy&quot;&gt;Listen to the latest Tech Tent podcast&lt;/a&gt;&amp;nbsp;on BBC Sounds&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;line&quot; src=&quot;https://ichef.bbci.co.uk/news/464/cpsprodpb/1645D/production/_107492219_5426c5d7-6c63-401e-b07e-46504c03ba9f.jpg&quot; style=&quot;height:3.4375px; margin:0px; width:800px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The key idea behind Bitcoin and other cryptocurrencies is that they are decentralised and nobody is in charge.&lt;/p&gt;\r\n\r\n&lt;p&gt;But this week a group of North American Bitcoin miners, with the encouragement of crypto-enthusiast Elon Musk, decided to take charge.&lt;/p&gt;\r\n\r\n&lt;p&gt;Well, to be clear, the members of the self-appointed Bitcoin Mining Council decided they would act to deal with a major image problem for the cryptocurrency: its energy use.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/technology-56012952&quot;&gt;As Tech Tent has reported&lt;/a&gt;, the process of creating new coins and recording transactions uses as much electricity each year as a country the size of Argentina.&lt;/p&gt;\r\n\r\n&lt;p&gt;That issue has seen China and&lt;a href=&quot;https://www.bbc.co.uk/news/world-middle-east-57260829&quot;&gt;&amp;nbsp;Iran move to ban cryptocurrency mining&lt;/a&gt;, and that has contributed to the wild swings in the Bitcoin price seen recently.&lt;/p&gt;\r\n\r\n&lt;p&gt;Jaime Leverton, chief executive of Hut 8 Mining, one of the members of the Bitcoin Mining Council, tells the programme the aim is to &amp;quot;counter the noise and some of the misinformation that&amp;#39;s coming at the Bitcoin mining industry&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;She says they want to &amp;quot;shape the narrative around the cryptocurrency industry&amp;#39;s energy usage&amp;quot; to address concerns that the industry is not environmentally friendly.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/science-environment-56215787&quot;&gt;How Bitcoin&amp;#39;s vast energy use could burst its bubble&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/technology-56844813&quot;&gt;Dorsey and Musk agree on bitcoin&amp;#39;s green potential&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/uk-england-birmingham-57280115&quot;&gt;Police raid &amp;#39;cannabis farm&amp;#39;, find Bitcoin mine&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;She insists that Bitcoin mining equipment - essentially computers packed with specialised chips - is getting much more efficient and quotes a study showing 39% of the energy used in mining comes from renewable sources.&lt;/p&gt;\r\n\r\n&lt;p&gt;But North America only accounts for a small proportion of mining, with much of it taking place in China using electricity from coal-fired power stations.&lt;/p&gt;\r\n\r\n&lt;p&gt;Even if there is a ban in China, Reuters is reporting that many miners are planning to move to oil-rich Kazhakstan, with its abundant cheap, non-renewable energy.&lt;/p&gt;\r\n\r\n&lt;p&gt;The finance writer Frances Coppola, a long-term critic of cryptocurrencies, concedes that the North American miners are now taking the environmental impact of their activities seriously. But she points out that even a greener Bitcoin presents many problems.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Bitcoin, because it is an add-on to existing financial systems, actually increases emissions - it&amp;#39;s going to increase emissions just because it exists. And there are also things like the ransomware threats - criminals use Bitcoin for ransomware demands,&amp;quot; she said.&lt;/p&gt;\r\n', '2021-05-28 11:05:41', '2021-05-28 11:05:41', 0),
(5, 'The looming battle over abortion in the US', 11, 4, 0, 'http://localhost/fixbit/assets/images/posts/60b0cec1c2c8b2953.jpg', '&lt;p&gt;&lt;strong&gt;Pro-choice activists say that state lawmakers across the country are trying to restrict abortion at a pace not seen in decades. So what will this mean for a decades-long fight over the issue in America?&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;On a Friday night, Julie gets ready to go out with her partner while her two boys curl up on the sofa to watch a Disney movie with their babysitter.&lt;/p&gt;\r\n\r\n&lt;p&gt;It is a typical happy family scene, one that Julie probably never envisaged when, aged just 19, she was raped and took the decision to have an abortion.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I come from a small town in Ohio. All German Catholics, very conservative. So when I found out I was pregnant I panicked. I didn&amp;#39;t know what to do. I knew that I could not have this baby,&amp;quot; she says.&lt;/p&gt;\r\n\r\n&lt;p&gt;She had been fervently anti-abortion then, but when she got pregnant against her will, her views on the subject changed completely.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Julie&quot; src=&quot;https://ichef.bbci.co.uk/news/976/cpsprodpb/15DEB/production/_118697598_unnamed.jpg&quot; style=&quot;height:450px; margin:0px; width:800px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;image captionJulie says she&amp;#39;s concerned by the current proposed legislation in the US&lt;/p&gt;\r\n\r\n&lt;p&gt;And, several years later, after an unplanned pregnancy during an emotionally distressing time following her mother&amp;#39;s death, she took the decision to have another abortion.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;My abortions, I have no regrets whatsoever for them,&amp;quot; she says.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;In fact, it&amp;#39;s changed my life. After my first abortion, I had my first examination as a grown woman. I got on birth control. I made yearly appointments for my pap smear and checks. I feel that girls and young women from small, religious communities have a fear or think that they don&amp;#39;t need that.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;Julie says the current spate of anti-abortion legislation introduced across the country worries her.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I think it&amp;#39;s important for all of us to take a stand and fight for our reproductive rights because, like me, you never know when you are going to be in that position and what you are going to do.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/world-us-canada-54513499&quot;&gt;What is Roe v Wade ruling on abortion?&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;According to a report by two prominent pro-choice groups,&amp;nbsp;&lt;a href=&quot;https://www.guttmacher.org/article/2021/04/2021-track-become-most-devastating-antiabortion-state-legislative-session-decades&quot;&gt;Planned Parenthood and the Guttmacher Institute, more than 500 such restrictions have been introduced so far in 2021&lt;/a&gt;&amp;nbsp;- significantly more than a comparative period in any other year since the 1970s, when abortion was legalised across the country.&lt;/p&gt;\r\n\r\n&lt;p&gt;These restrictions run the gamut from a near total ban in states like Arkansas and Oklahoma - where new laws would bar access to the procedure except under very limited circumstances - to states like Idaho and Texas that limit abortion after six weeks of pregnancy, before many women might know they are pregnant.&lt;/p&gt;\r\n\r\n&lt;p&gt;Furthermore, state legislators in Arizona and Ohio have passed laws that will prohibit doctors from performing abortions based on a foetal diagnosis of Down Syndrome.&lt;/p&gt;\r\n\r\n&lt;p&gt;Some of these laws allow exceptions in cases of medical emergencies, rape and incest.&lt;/p&gt;\r\n\r\n&lt;p&gt;Republican lawmakers across the country pushing for more abortion restrictions are emboldened by a conservative-leaning Supreme Court shaped by former President Donald Trump&amp;#39;s appointments, the most recent being Justice Amy Coney Barrett last year.&lt;/p&gt;\r\n', '2021-05-28 11:06:41', '2021-05-28 11:06:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(11, 'jude33', 'judeugwu9@gmail.com', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 2, '2021-05-19 09:46:12', '2021-05-19 09:46:12'),
(13, 'jude', 'judeugwu22@gmail.com', 'secret', 0, '2021-05-24 08:35:11', '2021-05-24 08:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
