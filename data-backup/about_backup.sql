-- MySQL dump 10.13  Distrib 8.0.16, for Linux (x86_64)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wp_posts`
--

DROP TABLE IF EXISTS `wp_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_posts`
--
-- WHERE:  post_type='about'

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;
INSERT INTO `wp_posts` VALUES (53,1,'2019-05-16 19:49:23','0000-00-00 00:00:00','<p>Robin is skilled at finding the client’s core purpose through her investigative process and interpreting that into new visual and verbal expressions. Called the ‘Brand Queen’ she has worked with and invented hundreds of brands over her 30-year career, including for national corporations like Labatt Brewing and Chrysler, international consumer brands like Jolly Jumper and 3M, and entrepreneurial start-ups. She has amassed a specialist expertise in craft beer having branded Forked River, Cowbell Brewing, Equals Brewing and rebranded Big Rock Brewery.</p>','About Robin','','publish','closed','closed','','should-be-final-test','','','2019-05-16 19:49:23','0000-00-00 00:00:00','',0,'',0,'about','',0),(54,1,'2019-05-16 20:13:40','0000-00-00 00:00:00','<p>A former entrepreneur, Robin founded the brand boutique Honey Design in 1989. In 2014, she merged with Arcane Digital and helped to build a creative team that integrated brand with digital practices. Robin has evolved to the next stage of her career, as an independent brand and creative consultant.&nbsp; &nbsp;&nbsp;</p><p>Robin\\\'s work has been featured in international publications and has been awarded local, national and international recognition for excellence in design and strategy. Robin is an author of a primer on branding for business –The Beebrand Manifesto, A Quest for Authenticity and many articles on branding.&nbsp; &nbsp; &nbsp;</p><p>A graduate of the Richard Ivey School of Business’s Strategic Marketing Program, and Sheridan College’s advertising program, Robin is a frequent speaker on branding and has appeared at Design Thinkers and various RGD events for students and practitioners alike, as well as client- focused events throughout Canada and the U.S.</p>','Bio','','publish','closed','closed','','bio','','','2019-05-16 20:13:40','0000-00-00 00:00:00','',0,'',1,'about','',0),(56,1,'2019-05-21 19:13:20','0000-00-00 00:00:00','<p><span class=\\\"text-light\\\">Check out Robin\\\'s articles about branding on Linked in.</span></p><ul class=\\\"rhd-list rhd-bullets\\\"><li>Brand Naming – Why you need a one-two punch</li><li>Brand Naming – Coin something new.&nbsp;</li><li>What’s Your Logo Saying?</li><li>A House of Brands or a Branded House?</li><li>The BeeBrand Manifesto, available on Amazon.</li></ul>','WRITING','','publish','closed','closed','','writing','','','2019-05-21 19:13:20','0000-00-00 00:00:00','',0,'',2,'about','',0),(57,1,'2019-05-22 16:41:22','0000-00-00 00:00:00','<p><span class=\\\"text-light\\\">Robin is a speaker on the topic of branding at creative conferences, client events and B2B seminars.</span></p><ul class=\\\"rhd-list rhd-bullets\\\"><li>MLX Conference, Atlanta, 2018 – The Value of Brand of Brand Consistency</li><li>Creative Direction 2017, Toronto – What Creative Directors Know</li><li>RGD Moderator 2017, Webinar, Feminism in Design</li><li>RGD Design Thinkers 2017, Toronto – The Art &amp; Science of Brand Naming</li><li>MacKay CEO Forums 2017 – The Authenticity Gap; How to manage your brand in a digital world.</li><li>MaxLiving Conference 2017 Florida, U.S. – Brand Launch</li><li>Master Pools Conference North Carolina, U.S. – Brand Launch</li></ul>','SPEAKING','','publish','closed','closed','','testing-tags','','','2019-05-22 16:41:22','0000-00-00 00:00:00','',0,'',2,'about','',0),(58,1,'2019-05-22 16:42:14','0000-00-00 00:00:00','<p><span class=\\\"text-light\\\">Robin has conducted interactive workshops to guide organizations to uncover their hidden potential and help power their growth.</span></p><ul class=\\\"rhd-list rhd-bullets\\\"><li>Brand workshops ‘Find Your Brand Position’ for a variety of industries from insurance, B2B professional services, consumer products, etc.</li></ul>','WORKSHOPS','','publish','closed','closed','','workshops','','','2019-05-22 16:42:14','0000-00-00 00:00:00','',0,'',2,'about','',0);
/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-29 18:27:28
