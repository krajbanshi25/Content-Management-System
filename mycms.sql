-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 03:29 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'krishna', 'krishna'),
(2, 'varshita', 'varshita'),
(3, 'Tejasri', 'Tejasri');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Global'),
(2, 'India'),
(3, 'Business'),
(4, 'Technology'),
(5, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(1, 9, 'hello', 'hello@gmail.com', 'ghjghgj', 'approve'),
(4, 11, 'vekso dia', 'dai@gmail.com', 'handsome', 'unapprove'),
(7, 9, 'khan', 'khan@gmail.com', 'hello this is one more comment with some respect and i will do whatever to read this post hello this is one more comment with some respect and i will do whatever to read this post', 'approve'),
(8, 11, 'sas', 'sas@gmail.com', 'jgfkh k', 'unapprove'),
(13, 9, 'Sanjay', 'hello@gmail.com', 'Sanjay', 'approve'),
(14, 15, 'hello mount everesst', 'mounteverest@gmail.com', 'mount everest is in nepal', 'unapprove'),
(15, 16, 'Barack Obama', 'krajbanshi25@gmail.com', 'This is the wonderful site i ever visited.', 'approve'),
(16, 18, 'MILAN', 'milan@gmail.com', 'he is great and he is doing well for us.', 'approve'),
(17, 19, 'Sushan', 'stpdstn@gmail.com', 'Hi,  Hello. Nice news btw.', 'unapprove'),
(18, 22, 'krishna', 'krajbanshi25@gmail.com', 'it is good new', 'approve'),
(19, 31, 'khatam hai ', 'khatam@gmail.com', 'this website is bad', 'approve'),
(20, 30, 'varshita', 'varshita@gmail.com', 'i liked your news', 'approve'),
(21, 22, 'jimmy', 'jimmy@gmail.com', 'hello news how are you', 'approve'),
(22, 22, 'timmy', 'timmy@gmail.com', 'helo i am timy who liked your news .', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_keywords` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`) VALUES
(19, 2, 'Modi calls for strict action on grievances related to customs, excise', '01-28-16', 'Hindustan Times	', 'India, Modi, pm, world news,strict action ', '1.JPG', '<p>Prime Minister Narendra Modi on Wednesday took strong exception at complaints and grievances from people related to the customs and excise sector and asked for strict action against concerned officials.<br /><br />Modi, who chaired his ninth interaction through PRAGATI - Pro-Active Governance And Timely Implementation - urged all secretaries whose departments have extensive public dealing, to set up a system for top-level monitoring of grievances immediately.<br /><br />Later in the day, Modi held a meeting of his council of ministers to review progress on schemes related to some ministries and laid thrust on faster delivery of government initiatives.<br /><br />According to the sources, the meeting reviewed schemes and government initiatives related to ministries such as agriculture, chemical and fertilizer and water resources.<br /><br />Such meetings were likely to be held every month, added the sources.<br /><br />The meeting with to review implementation of schemes came a day after the government completed 20 months in office. The coming year was crucial for the government as it will be completing half of its term.<br /><br />The opposition has accused the government of being high on promises and low on delivery.<br /><br />It has also slammed the government over rise in prices of some food items such as pulses.<br /><br />BJP leaders have dismissed the allegations of the opposition and said that the slew of initiatives government were already showing impact and will show greater results in the coming days.<br /><br />In his interaction through PRAGATI, Modi reviewed the progress of vital infrastructure projects in road, railway, coal, power and renewable energy sectors spread over several states including Maharashtra, Haryana, Uttar Pradesh, Himachal Pradesh, Jharkhand, West Bengal, Odisha, Chhattisgarh, and Rajasthan.<br /><br />An official release concerning the PRAGATI said that among the projects reviewed were the Mumbai Trans-Harbour Link, the Delhi Mumbai Industrial Corridor (DMIC) and the Jal Marg Vikas Project from Allahabad to Haldia.<br /><br />Modi also reviewed the progress of the Ujjwal Discom Assurance Yojana (UDAY).<br /><br />He reviewed implementation of the National Old Age Pension Scheme and emphasized the need to ensure that beneficiaries receive the payment on time.</p>'),
(20, 2, 'Pranab Mukherjee recalls how Rajiv Gandhi became PM after Indiraâ€™s death ', '01-28-16', 'Indian news', 'Pranab Mukherjee,Rajiv Gandhi,PM,Indiraâ€™s death ', 'aicc-bombay_5b899ad0-c512-11e5-b910-0fdc132e0d1d.jpg', '<p>In the second volume of his memoir, The Turbulent Years: 1980-96, President Pranab Mukherjee shares an insider&rsquo;s account of several significant events during the 1980&rsquo;s and early 1990&rsquo;s. In this extract, Mukherjee talks about how Rajiv Gandhi wanted to know &ldquo;how potent&rdquo; the bullets were after his mother Indira Gandhi was shot by her bodyguards in 1984. He also rejects as &ldquo;false and spiteful&rdquo; stories that he aspired to be the Prime Minister after Indira Gandhi&rsquo;s assassination.<br /><br />The hours between Indira&rsquo;s assassination and the naming of Rajiv as the next prime minister have often been the subject of intense political speculation. Here is an excerpt from Mukherjee&rsquo;s memoir on the issue:<br /><br />With the agenda of revamping the faction-ridden party organization, Rajiv Gandhi went on a tour of West Bengal at the end of October 1984. He arrived at Bagdogra airport near Siliguri in North Bengal on 29 October. A.B.A. Ghani Khan Choudhury and I, both Cabinet ministers in lndira Gandhi&rsquo;s government, along with a few other Congress leaders, received him there. After the reception at Bagdogra, Rajiv went on to address a number of meetings at Darjeeling, Jalpaiguri, North Dinajpur and the Malda districts. We spent the night at Malda, where Ghani Khan Choudhury had arranged for our stay at the newly-constructed Department of Irrigation bungalow, Gour Bhavan.<br /><br />The next day, we went from Malda to Kharagpur by a special train organized by Ghani Khan Choudhury, travelling through the districts of Murshidabad, Birbhum, Burdwan, Bankura and Midnapore. From Kharagpur of the Midnapore district, we travelled by car to Digha, where we spent the night of 30 October. The next morning, on 31 October 1984, we set off once again.<br /><br />After addressing the first meeting at Ramnagar, Rajiv Gandhi reached Contai (Kanthi) where he began addressing his second meeting of the day. It was here that I received a message on the police wireless at 9.30 am: &lsquo;lndira Gandhi assaulted. Return to Delhi immediately.&rsquo;</p>'),
(21, 2, 'Pity we have become a nation of criticisers, not doers: Anupam Kher', '01-28-16', 'Hindustan Times', 'Pity,,criticisers, not doers, Anupam Kher', 'jaipur-literature-festival-2016_c2e2b254-c4d9-11e5-878d-765e7b48378d.jpg', '<p>Veteran Bollywood actor Anupam Kher was awarded the Padma Bhushan, India&rsquo;s third-highest civilian honour, 12 years after he was given the Padma Shri in 2004.<br /><br />As soon as the names of the awardees were announced on Monday Kher took to Twitter to celebrate but was soon trolled for forgetting a 2010 post on the same social media platform in which he had dismissed the Padma honours as inauthentic.<br /><br />&ldquo;AWARDS in our country have become a mockery of our system. There is NO authenticity left in any one of them. B it films, National or now PADMA (sic),&rdquo; Kher had tweeted in 2010.<br /><br />After the announcement, he seemed to have a complete change of heart and mind and tweeted, &ldquo;Happy, Humbled &amp; Honoured to share that i have been awarded The PADMA BHUSHAN by the Govt. of India. Greatest news of my life:) #JaiHind (sic)&rdquo;.<br /><br />In an exclusive interview, Kher talked about the controversy surrounding his Padma award and his alleged closeness to the NDA government.</p>'),
(22, 1, 'Oil prices to stay near current level throughout 2016, World Bank says', '01-28-16', 'CNN', 'World Bank, 2016, prices', '4163.jpg', '<p>The World Bank has slashed its forecast for oil prices this year, saying the cost of a barrel of crude will stay near its current lows for the rest of 2016.<br /><br />The Washington-based institution said a glut of oil that sent prices crashing by almost half last year and another 27% this month will continue to dominate the market for the next year.<br /><br />In a message that will cheer motorists and countries that import oil, it added that warm winter weather in Europe and weaker than expected growth in China and other emerging economies will depress demand and keep the average price at $37 (&pound;26) a barrel, down from a projection of $51 last October.<br />Only two yeas ago, oil was trading at above $115 a barrel and petrol pump prices were more than 130p a litre. In recent weeks the price of Brent crude has sunk below $30 a barrel and supermarket petrol prices have dipped below &pound;1 a litre.<br /><br />John Baffes, senior economist and lead author of the World Bank&rsquo;s commodities markets outlook, said: &ldquo;Low prices for oil and commodities are likely to be with us for some time. While we see some prospect for commodity prices to rise slightly over the next two years, significant downside risks remain.&rdquo;<br /><br />Brent crude rose almost 5% to touch $32 a barrel, reversing earlier falls after both Opec and non-Opec producers responded by saying they would adopt further measures to tackle oversupply.<br /><br />The FTSE 100 in London ended 0.6% higher at 5,911 points, while Frankfurt and Paris both added about 1%, shrugging off a 6.4% fall in Shanghai that took the leading Chinese stock market to its lowest close since December 2014. New York continued the recovery to register an early 298-point gain by 5.30pm GMT.<br /><br />The World Bank&rsquo;s intervention follows a forecast by the International Energy Agency that contributed to panic selling last week and a collapse in the price of Brent crude to $27 a barrel. The report said prices could fall further as new Iranian output cancels out production cuts elsewhere, leading to third successive year when supply exceeded demand by 1m barrels a day.<br /><br />Officials at the bank played down the likelihood of a crash, though they warned in a separate report that a synchronised slowdown in the biggest emerging markets could be intensified by a fresh bout of financial turmoil, tipping the world economy into recession.<br /><br />Oil prices began to tumble during the summer of 2014 in response to a slowdown in China&rsquo;s factory output. The country&rsquo;s manufacturing industry, which in the aftermath of the 2008 financial crash has become the world&rsquo;s largest single destination for oil and metals, stopped buying commodities at the previous high levels.</p>'),
(24, 1, 'Sweden to expel up to 80,000 rejected asylum seekers ', '01-28-16', 'BBC News', 'Sweden, Expel,seekers,80000', '35000.jpg', '<p>Sweden intends to expel up to 80,000 asylum seekers who arrived in 2015 and whose applications had been rejected, interior minister Anders Ygeman said on Wednesday.<br /><br />&ldquo;We are talking about 60,000 people but the number could climb to 80,000,&rdquo; the minister was quoted as saying by Swedish media, adding that the government had asked the police and authorities in charge of migrants to organise their expulsion.<br />Ygeman said the expulsions, normally carried out using commercial flights, would have to be done using specially chartered aircraft, given the large numbers, staggered over several years.<br /><br />The proposed measure was announced as Europe struggles to deal with a crisis that has seen tens of thousands of refugees arrive on Greek beaches, with the passengers &ndash; mostly fleeing conflict in Syria, Iraq and Afghanistan &ndash; undeterred by cold, wintry conditions.<br /><br />The United Nations says more than 46,000 people have arrived in Greece so far this year, with more than 170 people killed making the dangerous crossing.<br /><br />Sweden, which is home to 9.8 million people, is one of the European Union countries that has taken in the largest number of refugees in relation to its population. Sweden accepted more than 160,000 asylum seekers in 2015.</p>'),
(25, 3, 'Tips to buy good stocks and get richer', '01-28-16', 'Hindustan Times', 'richer,goods', '07disinvestment1-1.jpg', '<p>Normally, mid-cap stocks rise faster than large-caps during a bull run and fall harder in a bear market. Mid-caps did outperform large-caps in the post-election rally.<br /><br />However, they have remained more expensive than large-caps in the ensuing bear run, though the gap has narrowed in recent weeks (see table: Large-caps trading at a discount).<br /><br />Should investors put their money in large-caps now, given their more attractive valuations?<br /><br />Why have mid-caps outperformed?<br /><br />The earnings growth of many mid-cap companies has been far better than in several large-cap names.<br /><br />Mid-cap companies in India also tend to be exposed more to the domestic market, while many large-cap ones derive a considerable part of their revenue from global markets.<br /><br />Examples are Tata Motors, Tata Steel, Hindalco and Bharti Airtel. Says Taher Badshah, co-head of equities, Motilal Oswal AMC: "Since growth-related challenges have been higher in the global markets, Nifty companies have grown at a weaker pace than mid-caps." <br /><br />In the latter part of 2015, foreign institutional investors (FIIs) were continuously paring their exposure to emerging market exchange-traded funds (ETFs).<br /><br />India gets a large part of its foreign inflows by virtue of being a part of these ETFs. Though FIIs were selling primarily to avoid exposure to countries affected by the commodity slump, such as Brazil, Russia and China, Indian stocks also got sold, being part of the ETF basket.<br /><br />ETFs tend to have greater exposure to large-cap stocks. Domestic institutional investors (DIIs) like mutual funds (MFs), on the other hand, have been investing heavily in the equity market.<br /><br />They have been willing to take exposure wherever they see higher earning prospects, including mid-caps. Says Sachin Shah, fund manager and head, Emkay PMS: "A lot of the inflows that MFs received were in their mid- and small-cap funds, so their mandate led them to invest in these stocks. The impact cost in this space also tends to be higher."<br /><br />Currently, the performance gap over the one-year horizon between the Sensex and the BSE Mid-cap Index is about 10 percentage points.<br /><br />"From a pure valuation standpoint, large-caps as a basket do look more attractive than mid-caps. At the index level, you might see some convergence in performance and valuation over the next six to 12 months in favour of large-caps," says Badshah.<br /><br />However, experts emphasise that not all large-caps will outperform and all mid-caps underperform. Hence, investors need to take a stock-specific and bottom-up approach. <br /><br /></p>'),
(26, 3, 'We want to make Uber the safest place in the city: Travis Kalanick', '01-28-16', 'BBC News', 'Uber, the safest place, Travis Kalanick', '22uber.jpg', '<p>Travis Kalanick, co-founder &amp; chief executive of American taxi aggregator Uber, says India&rsquo;s autorickshaw industry is akin to New York&rsquo;s taxi industry - both offer fixed price and fixed supply. <br /><br />But, &ldquo;the controversial thing Uber does to help one person take another person across town is all about flexible price and flexible supply... and that makes the fundamental difference,&rdquo; Kalanick tells Shekhar Gupta on NDTV&rsquo;s Walk the Talk.</p>'),
(27, 4, 'Suggestion Glitch Crashes Safari Browser', '01-28-16', 'Hindustan Times', 'Safari,apple,mac', 'xl-2015-iphone-6s-3.jpg', 'Apple''s Safari browser has been crashing on Macs and iOS devices when users launch a search through its address bar, according to reports that surfaced Wednesday.\r\n\r\nOS X and iOS users worldwide have been affected, according to The Verge, which confirmed the problem on several iOS devices and at least one OS X machine.\r\n\r\nOne of the first mentions of the glitch was a tweet by app developer Phillip Caudell, who asked if anyone else''s Safari browser on the Mac mysteriously stopped working.'),
(29, 1, 'sports is always good for health', '02-03-16', 'ESPN', 'sport, health', 'four.jpg', '<p>sports is always good for health and it is followed by all of us to be healthy and perform the body circulation .</p>\r\n<p>sports is always good for health and it is followed by all of us to be healthy and perform the body circulation .</p>\r\n<p>sports is always good for health and it is followed by all of us to be healthy and perform the body circulation .</p>\r\n<p>sports is always good for health and it is followed by all of us to be healthy and perform the body circulation .</p>'),
(31, 3, 'i am fine thank you', '03-01-16', 'krishna', 'krishna rahul jay biru', 'photo.jpg', '<p>this is the world best news in the city and always be good and best whole over the city and why not because of its team and organization management</p>'),
(32, 5, 'I am now practicing to finish my project in and always be working ', '03-03-16', 'Krishna Rajbanshi', 'Krishna, Rajbanshi, working, project, practice', 'nature-young-germ.jpg', 'hello guys how you all are now so that you all can imagine and fell my love and that why and want i am from nepal and i lov my country and i will always respect my elders so that i can care them and alwasys be happy hello guys how you all are now so that you all can imagine and fell my love and that why and want i am from nepal and i lov my country and i will always respect my elders so that i can care them and alwasys be happy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
