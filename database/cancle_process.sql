CREATE TABLE public.cancle_procss
(
    username text,
    email text,
    password text,
    mo_number text
);

ALTER TABLE IF EXISTS public.cancle_procss
    OWNER to postgres;