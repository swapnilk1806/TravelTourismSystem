INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(102620461,'Shimla','','Romantic Holidays',5,2,30000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(104872562,'Nainital','','Romantic Holidays',6,2,35000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(103354138,'Maldives','','Romantic Holidays',3,2,33000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(101082931,'Goa','','Family Fun',2,2,35000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106816408,'Amritsar','','Family Fun',3,2,15000);  

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(101283388,'Tirupati','','Family Fun',3,2,19000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(103032346,'Prague city break','','City Breaks',3,1,22710);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(103933812,'Mumbai','','City Breaks',3,2,27000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Udaipur','','Getaways',4,2,23000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Hydrabad','','Getaways',4,1,25000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Delhi Agra','','Getways',5,2,24700);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Harihar Fort','','Adventure Stories',3,1,24300);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Darjeeling Pelling Gangtok','','Adventure Stories',7,4,49000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Leh Ladhakh','','Road Trip',10,2,90000);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'Vishakhapattanam','','Road Trip',8,3,85500);

INSERT INTO public."sub_card"(id,name,image,type,duration,departure,Amount)
VALUES(106129685,'The Indian Peninsula Road Trip','','Road Trip',10,5,78000);



CREATE TABLE public.middle_card
(
    id text,
    name text,
    image text,
    type text,
    duration text,
    departure text,
    "Amount" text,
    state text,
    zone text
);

ALTER TABLE IF EXISTS public.middle_card
    OWNER to postgres;
    