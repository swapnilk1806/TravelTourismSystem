

-- ==================================== DATABASE TABLE BOOING======================

CREATE TABLE public."Booking"
(
    id_reg integer NOT NULL,
    fullname text NOT NULL,
    mo_number integer NOT NULL,
    email_id text NOT NULL,
    "AD_card_no" integer NOT NULL,
    amnount integer NOT NULL,
    date text NOT NULL
);

ALTER TABLE IF EXISTS public."Booking"
    OWNER to postgres;


--   /  ===============================================================================