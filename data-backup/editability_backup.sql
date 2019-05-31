DROP TABLE IF EXISTS tblCaseStudy;

CREATE TABLE tblCaseStudy (
  ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title varchar(100) DEFAULT NULL,
  heroImage varchar(100) DEFAULT NULL,
  caseDescription varchar(100) DEFAULT NULL,
  clientUrl varchar(100) DEFAULT NULL,
  clientLogo varchar(100) DEFAULT NULL,
  projSummary varchar(500) DEFAULT NULL,
  testimonial varchar(500) DEFAULT NULL,
  tAuthor varchar(80) DEFAULT NULL,
  tTitle varchar(80) DEFAULT NULL,
  seoTitle varchar(300) DEFAULT NULL,
  seoDescription varchar(300) DEFAULT NULL,
  slug varchar(150) DEFAULT NULL,
  thumbnail varchar(100) DEFAULT NULL,
  heroAlt varchar(150) DEFAULT NULL,
  clientAlt varchar(150) DEFAULT NULL,
  thumbAlt varchar(150) DEFAULT NULL,
  note varchar(150) DEFAULT NULL,
  urlTitle varchar(100) DEFAULT NULL
);

LOCK TABLES tblCaseStudy WRITE;

INSERT INTO tblCaseStudy VALUES (1,'NAVIGREAT FINE FOODS','/img/uploads/navigreat-hero.png','Brand Naming, Brand Identity, Brand Strategy','http://navigreatfood.com/','/img/uploads/navigreat.svg','This Arizona-based client needed to find a new brand name and identity that identified the evolution of their business that had significantly changed since their inception. Navigreat was a name Robin developed along with the tagline ‘Finding new taste territories’ that worked for the dual audience of both foodpreneurs and food retailers. The logo and ‘food map’ helped bring whimsy and direction, clearly delineating the brand position.','“There are so many consumer food businesses in the U.S. and we wanted to avoid any trademark problems as well as distinguish ourselves as unique. The other important element was that we have several different audiences - the foodpreneurs we help - and the manufacturers and retailers we distribute to. The brand Robin created for us has worked equally well for all our customers and has the humour that breaks through the clutter.”','Greg Bruni','President of Navigreat Fine Foods Co.','Navigreat','','navigreat-fine-foods','/img/uploads/thumbnails/work-navigreat-thumbnail.png','Navigreat hero','Navigreat logo','Navigreat Logo','',NULL),(2,'cowbell brewing co.','/img/uploads/cowbell-hero.png','Brand Naming, Brand Identity, Brand Strategy','http://www.cowbellbrewing.com','/img/uploads/logo-cowbell.svg','Robin worked on this brand from start to finish, from creating the company brand name, tag line, all the beer varietals names and stories, as well as directing all creative for the packaging and brand collateral. Located in small rural town in Ontario, this craft brewer had to bring people both to the destination brewery and to liquor retail stores. The town has been transformed as the brewery has become a Canadian destination under the leadership of the incredible Cowbell team.','“The brand for Cowbell has been instrumental in our start-up success. The name and the logo connect with people and elicit ‘more Cowbell!’ comments wherever we go with our beer. The brand enjoyed early acceptance, significantly bolstered by the strength of the packaging and our story. We couldn’t have done this without a solid, authentic brand and the creative work by Arcane, led by Robin Honey.”','Founder & CEO of Cowbell Brewing Co.','Steven Sparling','','','cowbell-brewing-co','/img/uploads/thumbnails/work-cowbell-thumbnail.png','Cowbell Hero','Cowbell logo','Cowbell thumbnail','Artwork, website and media for Cowbell was executed by ','Visit Cowbell Brewing Co Website'),(3,'maxliving','/img/uploads/maxliving-hero.png','Brand Naming, Brand Identity, Brand Strategy','https://www.maxliving.com','/img/uploads/logo-maxliving.png','Robin rebranded this alternative health care business based in the US with a shortened name and a new brand position of the ‘5 essentials of health with chiropractic at the core.’ Robin acted as Creative Director for the application of the brand identity to packaging for their supplement product line, and corporate communication materials including office signage.','“I’ve worked with Robin twice over the years - once for my personal business and for the rebrand of MaxLiving. Her leadership and expertise made our transformation both exciting and perfectly suited to our business strategy. MaxLiving doctors were thrilled with the visuals and colour palette of the rebrand executed by Arcane under Robin’s leadership. It has given us new energy and direction.”','Dr. B.J. Hardick','MaxLiving, Board of Directors','','','maxliving','/img/uploads/thumbnails/work-maxliving-thumbnail.png','Maxliving hero','Maxliving logo','Maxliving thumbnail','Creative work was executed by ',NULL);

UNLOCK TABLES;


DROP TABLE IF EXISTS tblLogowall;
CREATE TABLE tblLogowall (
  ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url varchar(200) DEFAULT NULL,
  alt varchar(150) DEFAULT NULL
);

LOCK TABLES tblLogowall WRITE;

INSERT INTO tblLogowall VALUES (1,'/img/uploads/logo-cowbell.svg','Cowbell Alt Text'),(2,'/img/uploads/logo-driversiti.svg',NULL),(3,'/img/uploads/logo-gridiron.svg',NULL),(4,'/img/uploads/logo-renegade.svg',NULL),(5,'/img/uploads/logo-anova.svg',NULL),(6,'/img/uploads/logo-ohvation.svg',NULL),(7,'/img/uploads/logo-shindig.svg',NULL),(8,'/img/uploads/logo-greenius.svg',NULL),(9,'/img/uploads/logo-maplemoose.svg',NULL);

UNLOCK TABLES;

LOCK TABLES wp_70uo8oqigo_posts WRITE;

INSERT INTO wp_70uo8oqigo_posts VALUES (68,1,'2019-05-16 19:49:23','0000-00-00 00:00:00','<p>Robin is skilled at finding the client’s core purpose through her investigative process and interpreting that into new visual and verbal expressions. Called the ‘Brand Queen’ she has worked with and invented hundreds of brands over her 30-year career, including for national corporations like Labatt Brewing and Chrysler, international consumer brands like Jolly Jumper and 3M, and entrepreneurial start-ups. She has amassed a specialist expertise in craft beer having branded Forked River, Cowbell Brewing, Equals Brewing and rebranded Big Rock Brewery.</p>','About Robin','','publish','closed','closed','','should-be-final-test','','','2019-05-16 19:49:23','0000-00-00 00:00:00','',0,'',0,'about','',0),(69,1,'2019-05-16 20:13:40','0000-00-00 00:00:00','<p>A former entrepreneur, Robin founded the brand boutique Honey Design in 1989. In 2014, she merged with Arcane Digital and helped to build a creative team that integrated brand with digital practices. Robin has evolved to the next stage of her career, as an independent brand and creative consultant.&nbsp; &nbsp;&nbsp;</p><p>Robin\\\'s work has been featured in international publications and has been awarded local, national and international recognition for excellence in design and strategy. Robin is an author of a primer on branding for business –The Beebrand Manifesto, A Quest for Authenticity and many articles on branding.&nbsp; &nbsp; &nbsp;</p><p>A graduate of the Richard Ivey School of Business’s Strategic Marketing Program, and Sheridan College’s advertising program, Robin is a frequent speaker on branding and has appeared at Design Thinkers and various RGD events for students and practitioners alike, as well as client- focused events throughout Canada and the U.S.</p>','Bio','','publish','closed','closed','','bio','','','2019-05-16 20:13:40','0000-00-00 00:00:00','',0,'',1,'about','',0),(70,1,'2019-05-21 19:13:20','0000-00-00 00:00:00','<p><span class=\\\"text-light\\\">Check out Robin\\\'s articles about branding on Linked in.</span></p><ul class=\\\"rhd-list rhd-bullets\\\"><li>Brand Naming – Why you need a one-two punch</li><li>Brand Naming – Coin something new.&nbsp;</li><li>What’s Your Logo Saying?</li><li>A House of Brands or a Branded House?</li><li>The BeeBrand Manifesto, available on Amazon.</li></ul>','WRITING','','publish','closed','closed','','writing','','','2019-05-21 19:13:20','0000-00-00 00:00:00','',0,'',2,'about','',0),(71,1,'2019-05-22 16:41:22','0000-00-00 00:00:00','<p><span class=\\\"text-light\\\">Robin is a speaker on the topic of branding at creative conferences, client events and B2B seminars.</span></p><ul class=\\\"rhd-list rhd-bullets\\\"><li>MLX Conference, Atlanta, 2018 – The Value of Brand of Brand Consistency</li><li>Creative Direction 2017, Toronto – What Creative Directors Know</li><li>RGD Moderator 2017, Webinar, Feminism in Design</li><li>RGD Design Thinkers 2017, Toronto – The Art &amp; Science of Brand Naming</li><li>MacKay CEO Forums 2017 – The Authenticity Gap; How to manage your brand in a digital world.</li><li>MaxLiving Conference 2017 Florida, U.S. – Brand Launch</li><li>Master Pools Conference North Carolina, U.S. – Brand Launch</li></ul>','SPEAKING','','publish','closed','closed','','testing-tags','','','2019-05-22 16:41:22','0000-00-00 00:00:00','',0,'',2,'about','',0),(72,1,'2019-05-22 16:42:14','0000-00-00 00:00:00','<p><span class=\\\"text-light\\\">Robin has conducted interactive workshops to guide organizations to uncover their hidden potential and help power their growth.</span></p><ul class=\\\"rhd-list rhd-bullets\\\"><li>Brand workshops ‘Find Your Brand Position’ for a variety of industries from insurance, B2B professional services, consumer products, etc.</li></ul>','WORKSHOPS','','publish','closed','closed','','workshops','','','2019-05-22 16:42:14','0000-00-00 00:00:00','',0,'',2,'about','',0);

UNLOCK TABLES;

