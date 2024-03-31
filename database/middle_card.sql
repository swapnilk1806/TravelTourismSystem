
CREATE TABLE public.middle_card
(
    id text,
    name text,
    image text,
    type text,
    duration text,
    departure text,
    amount text
);


ALTER TABLE IF EXISTS public.middle_card  OWNER to postgres;


INSERT INTO public."middle_card"(id,name,image,type,duration,departure,price) 
VALUES(102545363,'Shimla','https://lp-cms-production.imgix.net/2019-06/GettyImages-465018978_master.jpg?fit=crop&q=40&sharp=10&vib=20&auto=format&ixlib=react-8.6.4','Romantic holidays',5,2,30000);

INSERT INTO public."middle_card"(id,name,image,type,duration,price)
VALUES(100801743,'varnashi','https://wallpaperaccess.com/full/2714964.jpg','Devotional',7,38000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,price)
VALUES(101469639,'Harihar Fort','https://indiya.india-goa.today/images/torg_news/IMG_20150906_140944.jpg','Adventure Special',3,24000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,price)
VALUES(104950664,'Hydrabad','https://www.earthsattractions.com/wp-content/uploads/2018/02/Humayun_tomb.jpg','Royal Taj',3,40000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,price)
VALUES(108512959,'Goa','https://cfimages.mercuryholidays.co.uk/3vgdkcmqrnp2/14t4QBlzCYSIwGKGxy3Op1/a4c7ca1cba1310ba05e512c7d1ca3c43/Goa_Beach_Stay.jpg?w=1920&fm=jpg&fl=progressive','family fun',2,33000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,departure,price)
VALUES(105875847,'Mumbai','https://cdn.theculturetrip.com/wp-content/uploads/2017/05/shrutisuman13-wikicommons-1024x683.jpg','city breaks',3,28000); 
 
INSERT INTO public."middle_card"(id,name,image,type,duration,departure,price)
VALUES(101118657,'Leh Ladakh','https://www.holidify.com/images/bgImages/LADAKH.jpg','Road trip',10,2,90000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,cities,departure,price)
VALUES(105481359,'Nainital','https://www.scrolldroll.com/wp-content/uploads/2018/05/Nainital.jpg','Romantic Holidays',6,2,35000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,cities,departure,price)
VALUES(103090403,'vishakhapattanam','http://majumderspecial.in/wp-content/uploads/2019/03/Vizag.jpg','Raod Trip',8,3,85000);
 
INSERT INTO public."middle_card"(id,name,image,type,duration,cities,departure,price)
VALUES(106816408,'Amritsar','https://whyweseek.com/wp-content/uploads/2018/03/Golden-Temple-at-Night-Amritsar.jpg','Getaway',3,2,15000);