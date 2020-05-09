--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

-- Started on 2020-05-09 23:31:42

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE smallfarm;
--
-- TOC entry 2821 (class 1262 OID 32924)
-- Name: smallfarm; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE smallfarm WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';


ALTER DATABASE smallfarm OWNER TO postgres;

\connect smallfarm

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 202 (class 1259 OID 41191)
-- Name: pengguna; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pengguna (
    email character varying(50) NOT NULL,
    username character varying(15) NOT NULL,
    password character varying(50) NOT NULL,
    fname character varying(15) NOT NULL,
    lname character varying(15) NOT NULL,
    bdate date,
    sex character varying(10),
    address character varying(100),
    description character varying(100),
    status character varying DEFAULT 'user'::character varying
);


ALTER TABLE public.pengguna OWNER TO postgres;

--
-- TOC entry 2815 (class 0 OID 41191)
-- Dependencies: 202
-- Data for Name: pengguna; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2688 (class 2606 OID 41199)
-- Name: pengguna pengguna_username_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pengguna
    ADD CONSTRAINT pengguna_username_pk PRIMARY KEY (username);


-- Completed on 2020-05-09 23:31:43

--
-- PostgreSQL database dump complete
--

