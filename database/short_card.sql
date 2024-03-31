

CREATE TABLE public.short_card
(
    id text NOT NULL,
    name text,
    image text,
    amount text,
    tours integer,
    departure integer,
    tourists integer
);

ALTER TABLE IF EXISTS public.short_card
    OWNER to postgres;




INSERT INTO public."card_addr"(id,name,image,amount,tours,departure,tourists)
VALUES(10215677,'Rajasthan','https://img.veenaworld.com/group-tours/india/rajasthan/rjup/rjhk-hlt-3-rjup-1762021.jpg',35000,30221,4,56892);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourists)
VALUES(10087601,'Shimla Manali','https://img.veenaworld.com/group-tours/india/himachal-pradesh/hpps/hpms-thb-hpps-22112023.jpg',37000,27945,3,54983);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourists)
VALUES(10085221,'Andman','https://img.veenaworld.com/group-tours/india/andaman-and-nicobar/anpa/anex-i-thb-ANPA-412024.jpg',50000,190432,2,39056);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourists)
VALUES(10782758,'Rameshwaram','https://img.veenaworld.com/customized-holidays/india/south-india/shsi4/shsi4-thb.jpg',34000,33786,2,69978);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourists)
VALUES(10160995,'TajMahal','https://gallery.veenaworld.com/vw-assets/delhi-honeymoon/Delhi_1667316474837.jpg',30000,41934,3,70431);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourist)
VALUES(10357395,'Jaipur','https://img.veenaworld.com/group-tours/india/rajasthan/rjzp/rjsk-i-ftr-rjzp-672021.jpg',37000,39874,2,70564);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourist)
VALUES(10657016,'Goa','https://img.veenaworld.com/group-tours/india/goa/gawa/gawa-thb-gawa-1212024.jpg',36500,40021,4,79567);

INSERT INTO public."short_card"(id,name,image,amount,tours,departure,tourist)
VALUES(10734862,'Ayodhya','https://images.news18.com/ibnlive/uploads/2023/12/untitled-design-32-2023-12-4ffc9c2b571baae7aff1cfdf4f8ac54d-16x9.png',32000,21675,4,45980);