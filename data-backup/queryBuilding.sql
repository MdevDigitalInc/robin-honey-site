create table tblCaseStudy (ID int not null primary key auto_increment,title VARCHAR(100),heroImage VARCHAR(100),caseDescription VARCHAR(100),clientUrl VARCHAR(100),clientLogo VARCHAR(100),projSummary VARCHAR(300),testimonial VARCHAR(500),tAuthor VARCHAR(80),tTitle VARCHAR(80),seoTitle VARCHAR(300),seoDescription VARCHAR(300));


insert into tblCaseStudy (ID,title,heroImage,caseDescription,clientUrl,clientLogo,projSummary,testimonial,tAuthor,tTitle,seoTitle,seoDescription) values(%d,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s);



update tblCaseStudy set title = %s, heroImage = %s, caseDescription = %s, clientUrl = %s, clientLogo = %s, projSummary = %s, testimonial = %s, tAuthor = %s, tTitle = %s, seoTitle = %s, seoDescription = %s where ID = %d;






create table tblLogowall (ID int not null primary key auto_increment, url varchar(200));

insert into tblLogowall (url) values (%s);

update tblLogowall set url = %s; where ID = %d;