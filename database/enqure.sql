CREATE TABLE public.enqure
(
    name text,
    "package" text,
    email text,
    message text
);

ALTER TABLE IF EXISTS public.enqure
    OWNER to postgres;