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
-- Table structure for table `tblCaseStudy`
--

DROP TABLE IF EXISTS `tblCaseStudy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblCaseStudy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `heroImage` varchar(100) DEFAULT NULL,
  `caseDescription` varchar(100) DEFAULT NULL,
  `clientUrl` varchar(100) DEFAULT NULL,
  `clientLogo` varchar(100) DEFAULT NULL,
  `projSummary` varchar(500) DEFAULT NULL,
  `testimonial` varchar(500) DEFAULT NULL,
  `tAuthor` varchar(80) DEFAULT NULL,
  `tTitle` varchar(80) DEFAULT NULL,
  `seoTitle` varchar(300) DEFAULT NULL,
  `seoDescription` varchar(300) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `heroAlt` varchar(150) DEFAULT NULL,
  `clientAlt` varchar(150) DEFAULT NULL,
  `thumbAlt` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblCaseStudy`
--

LOCK TABLES `tblCaseStudy` WRITE;
/*!40000 ALTER TABLE `tblCaseStudy` DISABLE KEYS */;
INSERT INTO `tblCaseStudy` VALUES (1,'NAVIGREAT FINE FOODS','/img/uploads/navigreat-hero.png','Brand Naming, Brand Identity, Brand Strategy','http://navigreatfood.com/','/img/uploads/navigreat.svg','This Arizona-based client needed to find a new brand name and identity that identified the evolution of their business that had significantly changed since their inception. Navigreat was a name Robin developed along with the tagline ‘Finding new taste territories’ that worked for the dual audience of both foodpreneurs and food retailers. The logo and ‘food map’ helped bring whimsy and direction, clearly delineating the brand position.','“There are so many consumer food businesses in the U.S. and we wanted to avoid any trademark problems as well as distinguish ourselves as unique. The other important element was that we have several different audiences - the foodpreneurs we help - and the manufacturers and retailers we distribute to. The brand Robin created for us has worked equally well for all our customers and has the humour that breaks through the clutter.”','Greg Bruni','President of Navigreat Fine Foods Co.','Navigreat','','navigreat-fine-foods','/img/uploads/thumbnails/work-navigreat-thumbnail.png','Navigreat hero','Navigreat logo','Navigreat Logo'),(2,'cowbell brewing co.','/img/uploads/cowbell-hero.png','Brand Naming, Brand Identity, Brand Strategy','http://www.cowbellbrewing.com','/img/uploads/logo-cowbell.svg','Robin worked on this brand from start to finish, from creating the company brand name, tag line, all the beer varietals names and stories, as well as directing all creative for the packaging and brand collateral. Located in small rural town in Ontario, this craft brewer had to bring people both to the destination brewery and to liquor retail stores. The town has been transformed as the brewery has become a Canadian destination under the leadership of the incredible Cowbell team.','“The brand for Cowbell has been instrumental in our start-up success. The name and the logo connect with people and elicit ‘more Cowbell!’ comments wherever we go with our beer. The brand enjoyed early acceptance, significantly bolstered by the strength of the packaging and our story. We couldn’t have done this without a solid, authentic brand and the creative work by Arcane, led by Robin Honey.”','Steven Sparling','Founder & CEO of Cowbell Brewing Co.','','','cowbell-brewing-co','/img/uploads/thumbnails/work-cowbell-thumbnail.png','Cowbell Hero','Cowbell logo','Cowbell thumbnail'),(3,'maxliving','/img/uploads/maxliving-hero.png','Brand Naming, Brand Identity, Brand Strategy','https://www.maxliving.com','/img/uploads/logo-maxliving.png','Robin rebranded this alternative health care business based in the US with a shortened name and a new brand position of the ‘5 essentials of health with chiropractic at the core.’ Robin acted as Creative Director for the application of the brand identity to packaging for their supplement product line, and corporate communication materials including office signage.','“I’ve worked with Robin twice over the years - once for my personal business and for the rebrand of MaxLiving. Her leadership and expertise made our transformation both exciting and perfectly suited to our business strategy. MaxLiving doctors were thrilled with the visuals and colour palette of the rebrand executed by Arcane under Robin’s leadership. It has given us new energy and direction.”','MaxLiving, Board of Directors','Dr. B.J. Hardick','','','maxliving','/img/uploads/thumbnails/work-maxliving-thumbnail.png','Maxliving hero','Maxliving logo','Maxliving thumbnail');
/*!40000 ALTER TABLE `tblCaseStudy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblLogowall`
--

DROP TABLE IF EXISTS `tblLogowall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblLogowall` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblLogowall`
--

LOCK TABLES `tblLogowall` WRITE;
/*!40000 ALTER TABLE `tblLogowall` DISABLE KEYS */;
INSERT INTO `tblLogowall` VALUES (1,'/img/uploads/logo-cowbell.png'),(2,'/img/uploads/logo-driversiti.svg'),(3,'/img/uploads/logo-gridiron.svg'),(4,'/img/uploads/logo-renegade.svg'),(5,'/img/uploads/logo-anova.svg'),(6,'/img/uploads/logo-ohvation.svg'),(7,'/img/uploads/logo-shindig.svg'),(8,'/img/uploads/logo-greenius.svg'),(9,'/img/uploads/logo-maplemoose.svg');
/*!40000 ALTER TABLE `tblLogowall` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-29 18:28:03
