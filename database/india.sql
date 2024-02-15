-- Table: public.IndiaT

-- DROP TABLE IF EXISTS public."IndiaT";

CREATE TABLE IF NOT EXISTS public."IndiaT"
(
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public."IndiaT"
    OWNER to postgres;



ALTER TABLE IF EXISTS public."IndiaT"
    ADD COLUMN id integer NOT NULL;

ALTER TABLE IF EXISTS public."IndiaT"
    ADD COLUMN name "char"[];

ALTER TABLE IF EXISTS public."IndiaT"
    ADD COLUMN image "char"[];

ALTER TABLE IF EXISTS public."IndiaT"
    ADD COLUMN dest "char"[];


    