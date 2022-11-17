--
-- PostgreSQL database dump
--

-- Dumped from database version 12.12
-- Dumped by pg_dump version 12.12

-- Started on 2022-11-17 16:08:23

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
-- TOC entry 217 (class 1259 OID 32885)
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 32883)
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- TOC entry 3382 (class 0 OID 0)
-- Dependencies: 216
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 279 (class 1259 OID 33412)
-- Name: informasipubliks_banner; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_banner OWNER TO postgres;

--
-- TOC entry 278 (class 1259 OID 33410)
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informasipubliks_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informasipubliks_banner_id_seq OWNER TO postgres;

--
-- TOC entry 3383 (class 0 OID 0)
-- Dependencies: 278
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_banner_id_seq OWNED BY public.informasipubliks_banner.id;


--
-- TOC entry 281 (class 1259 OID 33420)
-- Name: informasipubliks_secaraberkala; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_secaraberkala (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_secaraberkala OWNER TO postgres;

--
-- TOC entry 280 (class 1259 OID 33418)
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informasipubliks_secaraberkala_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informasipubliks_secaraberkala_id_seq OWNER TO postgres;

--
-- TOC entry 3384 (class 0 OID 0)
-- Dependencies: 280
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_secaraberkala_id_seq OWNED BY public.informasipubliks_secaraberkala.id;


--
-- TOC entry 283 (class 1259 OID 33431)
-- Name: informasipubliks_sertamerta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_sertamerta (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_sertamerta OWNER TO postgres;

--
-- TOC entry 282 (class 1259 OID 33429)
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informasipubliks_sertamerta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informasipubliks_sertamerta_id_seq OWNER TO postgres;

--
-- TOC entry 3385 (class 0 OID 0)
-- Dependencies: 282
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_sertamerta_id_seq OWNED BY public.informasipubliks_sertamerta.id;


--
-- TOC entry 285 (class 1259 OID 33442)
-- Name: informasipubliks_setiapsaat; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_setiapsaat (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_setiapsaat OWNER TO postgres;

--
-- TOC entry 284 (class 1259 OID 33440)
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informasipubliks_setiapsaat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informasipubliks_setiapsaat_id_seq OWNER TO postgres;

--
-- TOC entry 3386 (class 0 OID 0)
-- Dependencies: 284
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_setiapsaat_id_seq OWNED BY public.informasipubliks_setiapsaat.id;


--
-- TOC entry 265 (class 1259 OID 33218)
-- Name: kontaks; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.kontaks (
    id bigint NOT NULL,
    alamat character varying(255) NOT NULL,
    telepon character varying(255) NOT NULL,
    waktu_pelayanan text NOT NULL,
    banner_path character varying(255) NOT NULL,
    latitude character varying(255) NOT NULL,
    longitude character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    email character varying(255) NOT NULL
);


ALTER TABLE public.kontaks OWNER TO postgres;

--
-- TOC entry 267 (class 1259 OID 33229)
-- Name: kontaks_dokumentasiruangppid; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.kontaks_dokumentasiruangppid (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kontaks_dokumentasiruangppid OWNER TO postgres;

--
-- TOC entry 266 (class 1259 OID 33227)
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kontaks_dokumentasiruangppid_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kontaks_dokumentasiruangppid_id_seq OWNER TO postgres;

--
-- TOC entry 3387 (class 0 OID 0)
-- Dependencies: 266
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kontaks_dokumentasiruangppid_id_seq OWNED BY public.kontaks_dokumentasiruangppid.id;


--
-- TOC entry 264 (class 1259 OID 33216)
-- Name: kontaks_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kontaks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kontaks_id_seq OWNER TO postgres;

--
-- TOC entry 3388 (class 0 OID 0)
-- Dependencies: 264
-- Name: kontaks_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kontaks_id_seq OWNED BY public.kontaks.id;


--
-- TOC entry 233 (class 1259 OID 33001)
-- Name: laporan_berkala; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporan_berkala (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.laporan_berkala OWNER TO postgres;

--
-- TOC entry 232 (class 1259 OID 32999)
-- Name: laporan_berkala_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporan_berkala_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporan_berkala_id_seq OWNER TO postgres;

--
-- TOC entry 3389 (class 0 OID 0)
-- Dependencies: 232
-- Name: laporan_berkala_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_berkala_id_seq OWNED BY public.laporan_berkala.id;


--
-- TOC entry 235 (class 1259 OID 33017)
-- Name: laporan_serta_merta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporan_serta_merta (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.laporan_serta_merta OWNER TO postgres;

--
-- TOC entry 234 (class 1259 OID 33015)
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporan_serta_merta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporan_serta_merta_id_seq OWNER TO postgres;

--
-- TOC entry 3390 (class 0 OID 0)
-- Dependencies: 234
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_serta_merta_id_seq OWNED BY public.laporan_serta_merta.id;


--
-- TOC entry 237 (class 1259 OID 33033)
-- Name: laporan_setiap_saat; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporan_setiap_saat (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.laporan_setiap_saat OWNER TO postgres;

--
-- TOC entry 236 (class 1259 OID 33031)
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporan_setiap_saat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporan_setiap_saat_id_seq OWNER TO postgres;

--
-- TOC entry 3391 (class 0 OID 0)
-- Dependencies: 236
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_setiap_saat_id_seq OWNED BY public.laporan_setiap_saat.id;


--
-- TOC entry 215 (class 1259 OID 32874)
-- Name: menus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.menus (
    id bigint NOT NULL,
    parent_id integer NOT NULL,
    label character varying(255) NOT NULL,
    icon character varying(255) NOT NULL,
    status boolean NOT NULL,
    route_name text NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.menus OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 32872)
-- Name: menus_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.menus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.menus_id_seq OWNER TO postgres;

--
-- TOC entry 3392 (class 0 OID 0)
-- Dependencies: 214
-- Name: menus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;


--
-- TOC entry 203 (class 1259 OID 32689)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 32687)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- TOC entry 3393 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 211 (class 1259 OID 32835)
-- Name: model_has_permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_permissions OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 32846)
-- Name: model_has_roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_roles OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 32802)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 32811)
-- Name: permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.permissions OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 32809)
-- Name: permissions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permissions_id_seq OWNER TO postgres;

--
-- TOC entry 3394 (class 0 OID 0)
-- Dependencies: 207
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;


--
-- TOC entry 219 (class 1259 OID 32899)
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 32897)
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO postgres;

--
-- TOC entry 3395 (class 0 OID 0)
-- Dependencies: 218
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- TOC entry 247 (class 1259 OID 33113)
-- Name: ppid_biaya; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_biaya (
    id bigint NOT NULL,
    deskripsi character varying(255) NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_biaya OWNER TO postgres;

--
-- TOC entry 246 (class 1259 OID 33111)
-- Name: ppid_biaya_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_biaya_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_biaya_id_seq OWNER TO postgres;

--
-- TOC entry 3396 (class 0 OID 0)
-- Dependencies: 246
-- Name: ppid_biaya_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_biaya_id_seq OWNED BY public.ppid_biaya.id;


--
-- TOC entry 241 (class 1259 OID 33065)
-- Name: ppid_faq; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_faq (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_faq OWNER TO postgres;

--
-- TOC entry 240 (class 1259 OID 33063)
-- Name: ppid_faq_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_faq_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_faq_id_seq OWNER TO postgres;

--
-- TOC entry 3397 (class 0 OID 0)
-- Dependencies: 240
-- Name: ppid_faq_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_faq_id_seq OWNED BY public.ppid_faq.id;


--
-- TOC entry 245 (class 1259 OID 33097)
-- Name: ppid_infografis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_infografis (
    id bigint NOT NULL,
    deskripsi character varying(255) NOT NULL,
    direktori_image character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_infografis OWNER TO postgres;

--
-- TOC entry 244 (class 1259 OID 33095)
-- Name: ppid_infografis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_infografis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_infografis_id_seq OWNER TO postgres;

--
-- TOC entry 3398 (class 0 OID 0)
-- Dependencies: 244
-- Name: ppid_infografis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_infografis_id_seq OWNED BY public.ppid_infografis.id;


--
-- TOC entry 223 (class 1259 OID 32924)
-- Name: ppid_jenis_profil; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_jenis_profil (
    id bigint NOT NULL,
    jenis_profil character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.ppid_jenis_profil OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 32922)
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_jenis_profil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_jenis_profil_id_seq OWNER TO postgres;

--
-- TOC entry 3399 (class 0 OID 0)
-- Dependencies: 222
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_jenis_profil_id_seq OWNED BY public.ppid_jenis_profil.id;


--
-- TOC entry 227 (class 1259 OID 32953)
-- Name: ppid_kontak; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_kontak (
    id bigint NOT NULL,
    nama_data character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    sisi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_kontak OWNER TO postgres;

--
-- TOC entry 226 (class 1259 OID 32951)
-- Name: ppid_kontak_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_kontak_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_kontak_id_seq OWNER TO postgres;

--
-- TOC entry 3400 (class 0 OID 0)
-- Dependencies: 226
-- Name: ppid_kontak_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_kontak_id_seq OWNED BY public.ppid_kontak.id;


--
-- TOC entry 239 (class 1259 OID 33049)
-- Name: ppid_lap_survey; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_lap_survey (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_lap_survey OWNER TO postgres;

--
-- TOC entry 238 (class 1259 OID 33047)
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_lap_survey_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_lap_survey_id_seq OWNER TO postgres;

--
-- TOC entry 3401 (class 0 OID 0)
-- Dependencies: 238
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_survey_id_seq OWNED BY public.ppid_lap_survey.id;


--
-- TOC entry 229 (class 1259 OID 32969)
-- Name: ppid_lap_th; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_lap_th (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_lap_th OWNER TO postgres;

--
-- TOC entry 228 (class 1259 OID 32967)
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_lap_th_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_lap_th_id_seq OWNER TO postgres;

--
-- TOC entry 3402 (class 0 OID 0)
-- Dependencies: 228
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_th_id_seq OWNED BY public.ppid_lap_th.id;


--
-- TOC entry 231 (class 1259 OID 32985)
-- Name: ppid_lap_tw; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_lap_tw (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_lap_tw OWNER TO postgres;

--
-- TOC entry 230 (class 1259 OID 32983)
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_lap_tw_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_lap_tw_id_seq OWNER TO postgres;

--
-- TOC entry 3403 (class 0 OID 0)
-- Dependencies: 230
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_tw_id_seq OWNED BY public.ppid_lap_tw.id;


--
-- TOC entry 243 (class 1259 OID 33081)
-- Name: ppid_maklumat; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_maklumat (
    id bigint NOT NULL,
    direktori_image character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);


ALTER TABLE public.ppid_maklumat OWNER TO postgres;

--
-- TOC entry 242 (class 1259 OID 33079)
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_maklumat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_maklumat_id_seq OWNER TO postgres;

--
-- TOC entry 3404 (class 0 OID 0)
-- Dependencies: 242
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_maklumat_id_seq OWNED BY public.ppid_maklumat.id;


--
-- TOC entry 221 (class 1259 OID 32913)
-- Name: ppid_menu; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_menu (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255) NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.ppid_menu OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 32911)
-- Name: ppid_menu_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_menu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_menu_id_seq OWNER TO postgres;

--
-- TOC entry 3405 (class 0 OID 0)
-- Dependencies: 220
-- Name: ppid_menu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_menu_id_seq OWNED BY public.ppid_menu.id;


--
-- TOC entry 225 (class 1259 OID 32932)
-- Name: ppid_profil; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_profil (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    narasi character varying(255) NOT NULL,
    direktori_image character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer,
    id_ppid_jenis_profil integer
);


ALTER TABLE public.ppid_profil OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 32930)
-- Name: ppid_profil_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_profil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_profil_id_seq OWNER TO postgres;

--
-- TOC entry 3406 (class 0 OID 0)
-- Dependencies: 224
-- Name: ppid_profil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_profil_id_seq OWNED BY public.ppid_profil.id;


--
-- TOC entry 249 (class 1259 OID 33126)
-- Name: ppid_regulasi; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_regulasi (
    id bigint NOT NULL,
    jenis_regulasi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.ppid_regulasi OWNER TO postgres;

--
-- TOC entry 248 (class 1259 OID 33124)
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_regulasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_regulasi_id_seq OWNER TO postgres;

--
-- TOC entry 3407 (class 0 OID 0)
-- Dependencies: 248
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_regulasi_id_seq OWNED BY public.ppid_regulasi.id;


--
-- TOC entry 251 (class 1259 OID 33134)
-- Name: ppid_regulasi_peraturan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_regulasi_peraturan (
    id bigint NOT NULL,
    nama_regulasi character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer,
    id_jenis_regulasi integer
);


ALTER TABLE public.ppid_regulasi_peraturan OWNER TO postgres;

--
-- TOC entry 250 (class 1259 OID 33132)
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_regulasi_peraturan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_regulasi_peraturan_id_seq OWNER TO postgres;

--
-- TOC entry 3408 (class 0 OID 0)
-- Dependencies: 250
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_regulasi_peraturan_id_seq OWNED BY public.ppid_regulasi_peraturan.id;


--
-- TOC entry 253 (class 1259 OID 33155)
-- Name: profilsingkats; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.profilsingkats (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    konten text NOT NULL,
    banner_path character varying(255),
    side_image_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.profilsingkats OWNER TO postgres;

--
-- TOC entry 252 (class 1259 OID 33153)
-- Name: profilsingkats_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.profilsingkats_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profilsingkats_id_seq OWNER TO postgres;

--
-- TOC entry 3409 (class 0 OID 0)
-- Dependencies: 252
-- Name: profilsingkats_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.profilsingkats_id_seq OWNED BY public.profilsingkats.id;


--
-- TOC entry 273 (class 1259 OID 33308)
-- Name: regulasis_banner; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.regulasis_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.regulasis_banner OWNER TO postgres;

--
-- TOC entry 272 (class 1259 OID 33306)
-- Name: regulasis_banner_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.regulasis_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.regulasis_banner_id_seq OWNER TO postgres;

--
-- TOC entry 3410 (class 0 OID 0)
-- Dependencies: 272
-- Name: regulasis_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_banner_id_seq OWNED BY public.regulasis_banner.id;


--
-- TOC entry 275 (class 1259 OID 33316)
-- Name: regulasis_peraturankip; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.regulasis_peraturankip (
    id bigint NOT NULL,
    judul_peraturan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.regulasis_peraturankip OWNER TO postgres;

--
-- TOC entry 274 (class 1259 OID 33314)
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.regulasis_peraturankip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.regulasis_peraturankip_id_seq OWNER TO postgres;

--
-- TOC entry 3411 (class 0 OID 0)
-- Dependencies: 274
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_peraturankip_id_seq OWNED BY public.regulasis_peraturankip.id;


--
-- TOC entry 277 (class 1259 OID 33327)
-- Name: regulasis_rancanganperaturankip; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.regulasis_rancanganperaturankip (
    id bigint NOT NULL,
    judul_peraturan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.regulasis_rancanganperaturankip OWNER TO postgres;

--
-- TOC entry 276 (class 1259 OID 33325)
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.regulasis_rancanganperaturankip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.regulasis_rancanganperaturankip_id_seq OWNER TO postgres;

--
-- TOC entry 3412 (class 0 OID 0)
-- Dependencies: 276
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_rancanganperaturankip_id_seq OWNED BY public.regulasis_rancanganperaturankip.id;


--
-- TOC entry 213 (class 1259 OID 32857)
-- Name: role_has_permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);


ALTER TABLE public.role_has_permissions OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 32824)
-- Name: roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.roles OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 32822)
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roles_id_seq OWNER TO postgres;

--
-- TOC entry 3413 (class 0 OID 0)
-- Dependencies: 209
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;


--
-- TOC entry 269 (class 1259 OID 33240)
-- Name: sosialmedias; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sosialmedias (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.sosialmedias OWNER TO postgres;

--
-- TOC entry 268 (class 1259 OID 33238)
-- Name: sosialmedias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sosialmedias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sosialmedias_id_seq OWNER TO postgres;

--
-- TOC entry 3414 (class 0 OID 0)
-- Dependencies: 268
-- Name: sosialmedias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sosialmedias_id_seq OWNED BY public.sosialmedias.id;


--
-- TOC entry 271 (class 1259 OID 33251)
-- Name: sosialmedias_linkapps; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sosialmedias_linkapps (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.sosialmedias_linkapps OWNER TO postgres;

--
-- TOC entry 270 (class 1259 OID 33249)
-- Name: sosialmedias_linkapps_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sosialmedias_linkapps_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sosialmedias_linkapps_id_seq OWNER TO postgres;

--
-- TOC entry 3415 (class 0 OID 0)
-- Dependencies: 270
-- Name: sosialmedias_linkapps_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sosialmedias_linkapps_id_seq OWNED BY public.sosialmedias_linkapps.id;


--
-- TOC entry 291 (class 1259 OID 33536)
-- Name: standarlayanans_biayalayanan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.standarlayanans_biayalayanan (
    id bigint NOT NULL,
    banner_path character varying(255),
    image_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.standarlayanans_biayalayanan OWNER TO postgres;

--
-- TOC entry 290 (class 1259 OID 33534)
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.standarlayanans_biayalayanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.standarlayanans_biayalayanan_id_seq OWNER TO postgres;

--
-- TOC entry 3416 (class 0 OID 0)
-- Dependencies: 290
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_biayalayanan_id_seq OWNED BY public.standarlayanans_biayalayanan.id;


--
-- TOC entry 287 (class 1259 OID 33514)
-- Name: standarlayanans_maklumat; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.standarlayanans_maklumat (
    id bigint NOT NULL,
    judul character varying(255),
    banner_path character varying(255),
    image_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.standarlayanans_maklumat OWNER TO postgres;

--
-- TOC entry 286 (class 1259 OID 33512)
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.standarlayanans_maklumat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.standarlayanans_maklumat_id_seq OWNER TO postgres;

--
-- TOC entry 3417 (class 0 OID 0)
-- Dependencies: 286
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_maklumat_id_seq OWNED BY public.standarlayanans_maklumat.id;


--
-- TOC entry 289 (class 1259 OID 33525)
-- Name: standarlayanans_prosedurlayanan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.standarlayanans_prosedurlayanan (
    id bigint NOT NULL,
    banner_path character varying(255),
    permohonan_image_path character varying(255),
    keberatan_image_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.standarlayanans_prosedurlayanan OWNER TO postgres;

--
-- TOC entry 288 (class 1259 OID 33523)
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.standarlayanans_prosedurlayanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.standarlayanans_prosedurlayanan_id_seq OWNER TO postgres;

--
-- TOC entry 3418 (class 0 OID 0)
-- Dependencies: 288
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_prosedurlayanan_id_seq OWNED BY public.standarlayanans_prosedurlayanan.id;


--
-- TOC entry 257 (class 1259 OID 33177)
-- Name: strukturorganisasis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.strukturorganisasis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    banner_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.strukturorganisasis OWNER TO postgres;

--
-- TOC entry 261 (class 1259 OID 33196)
-- Name: strukturorganisasis_bagankanan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.strukturorganisasis_bagankanan (
    id bigint NOT NULL,
    nomenklatur character varying(255) NOT NULL,
    deskripsi text NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.strukturorganisasis_bagankanan OWNER TO postgres;

--
-- TOC entry 259 (class 1259 OID 33188)
-- Name: strukturorganisasis_bagankiri; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.strukturorganisasis_bagankiri (
    id bigint NOT NULL,
    nomenklatur character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.strukturorganisasis_bagankiri OWNER TO postgres;

--
-- TOC entry 260 (class 1259 OID 33194)
-- Name: strukturorganisasis_bagiankanan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.strukturorganisasis_bagiankanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.strukturorganisasis_bagiankanan_id_seq OWNER TO postgres;

--
-- TOC entry 3419 (class 0 OID 0)
-- Dependencies: 260
-- Name: strukturorganisasis_bagiankanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_bagiankanan_id_seq OWNED BY public.strukturorganisasis_bagankanan.id;


--
-- TOC entry 258 (class 1259 OID 33186)
-- Name: strukturorganisasis_bagiankiri_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.strukturorganisasis_bagiankiri_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.strukturorganisasis_bagiankiri_id_seq OWNER TO postgres;

--
-- TOC entry 3420 (class 0 OID 0)
-- Dependencies: 258
-- Name: strukturorganisasis_bagiankiri_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_bagiankiri_id_seq OWNED BY public.strukturorganisasis_bagankiri.id;


--
-- TOC entry 256 (class 1259 OID 33175)
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.strukturorganisasis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.strukturorganisasis_id_seq OWNER TO postgres;

--
-- TOC entry 3421 (class 0 OID 0)
-- Dependencies: 256
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_id_seq OWNED BY public.strukturorganisasis.id;


--
-- TOC entry 255 (class 1259 OID 33166)
-- Name: tugasdanfungsis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tugasdanfungsis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    konten text NOT NULL,
    banner_path character varying(255) NOT NULL,
    side_image_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tugasdanfungsis OWNER TO postgres;

--
-- TOC entry 254 (class 1259 OID 33164)
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tugasdanfungsis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tugasdanfungsis_id_seq OWNER TO postgres;

--
-- TOC entry 3422 (class 0 OID 0)
-- Dependencies: 254
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tugasdanfungsis_id_seq OWNED BY public.tugasdanfungsis.id;


--
-- TOC entry 205 (class 1259 OID 32791)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    two_factor_secret text,
    two_factor_recovery_codes text,
    two_factor_confirmed_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 32789)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 3423 (class 0 OID 0)
-- Dependencies: 204
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 263 (class 1259 OID 33207)
-- Name: visimisis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.visimisis (
    id bigint NOT NULL,
    visi text NOT NULL,
    misi text NOT NULL,
    banner_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.visimisis OWNER TO postgres;

--
-- TOC entry 262 (class 1259 OID 33205)
-- Name: visimisis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.visimisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.visimisis_id_seq OWNER TO postgres;

--
-- TOC entry 3424 (class 0 OID 0)
-- Dependencies: 262
-- Name: visimisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.visimisis_id_seq OWNED BY public.visimisis.id;


--
-- TOC entry 2997 (class 2604 OID 32888)
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 3029 (class 2604 OID 33415)
-- Name: informasipubliks_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_banner ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_banner_id_seq'::regclass);


--
-- TOC entry 3030 (class 2604 OID 33423)
-- Name: informasipubliks_secaraberkala id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_secaraberkala ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_secaraberkala_id_seq'::regclass);


--
-- TOC entry 3031 (class 2604 OID 33434)
-- Name: informasipubliks_sertamerta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_sertamerta ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_sertamerta_id_seq'::regclass);


--
-- TOC entry 3032 (class 2604 OID 33445)
-- Name: informasipubliks_setiapsaat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_setiapsaat ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_setiapsaat_id_seq'::regclass);


--
-- TOC entry 3022 (class 2604 OID 33221)
-- Name: kontaks id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks ALTER COLUMN id SET DEFAULT nextval('public.kontaks_id_seq'::regclass);


--
-- TOC entry 3023 (class 2604 OID 33232)
-- Name: kontaks_dokumentasiruangppid id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks_dokumentasiruangppid ALTER COLUMN id SET DEFAULT nextval('public.kontaks_dokumentasiruangppid_id_seq'::regclass);


--
-- TOC entry 3006 (class 2604 OID 33004)
-- Name: laporan_berkala id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala ALTER COLUMN id SET DEFAULT nextval('public.laporan_berkala_id_seq'::regclass);


--
-- TOC entry 3007 (class 2604 OID 33020)
-- Name: laporan_serta_merta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta ALTER COLUMN id SET DEFAULT nextval('public.laporan_serta_merta_id_seq'::regclass);


--
-- TOC entry 3008 (class 2604 OID 33036)
-- Name: laporan_setiap_saat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat ALTER COLUMN id SET DEFAULT nextval('public.laporan_setiap_saat_id_seq'::regclass);


--
-- TOC entry 2996 (class 2604 OID 32877)
-- Name: menus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);


--
-- TOC entry 2992 (class 2604 OID 32692)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 2994 (class 2604 OID 32814)
-- Name: permissions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);


--
-- TOC entry 2999 (class 2604 OID 32902)
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- TOC entry 3013 (class 2604 OID 33116)
-- Name: ppid_biaya id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya ALTER COLUMN id SET DEFAULT nextval('public.ppid_biaya_id_seq'::regclass);


--
-- TOC entry 3010 (class 2604 OID 33068)
-- Name: ppid_faq id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq ALTER COLUMN id SET DEFAULT nextval('public.ppid_faq_id_seq'::regclass);


--
-- TOC entry 3012 (class 2604 OID 33100)
-- Name: ppid_infografis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis ALTER COLUMN id SET DEFAULT nextval('public.ppid_infografis_id_seq'::regclass);


--
-- TOC entry 3001 (class 2604 OID 32927)
-- Name: ppid_jenis_profil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_jenis_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_jenis_profil_id_seq'::regclass);


--
-- TOC entry 3003 (class 2604 OID 32956)
-- Name: ppid_kontak id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak ALTER COLUMN id SET DEFAULT nextval('public.ppid_kontak_id_seq'::regclass);


--
-- TOC entry 3009 (class 2604 OID 33052)
-- Name: ppid_lap_survey id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_survey_id_seq'::regclass);


--
-- TOC entry 3004 (class 2604 OID 32972)
-- Name: ppid_lap_th id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_th_id_seq'::regclass);


--
-- TOC entry 3005 (class 2604 OID 32988)
-- Name: ppid_lap_tw id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_tw_id_seq'::regclass);


--
-- TOC entry 3011 (class 2604 OID 33084)
-- Name: ppid_maklumat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat ALTER COLUMN id SET DEFAULT nextval('public.ppid_maklumat_id_seq'::regclass);


--
-- TOC entry 3000 (class 2604 OID 32916)
-- Name: ppid_menu id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_menu ALTER COLUMN id SET DEFAULT nextval('public.ppid_menu_id_seq'::regclass);


--
-- TOC entry 3002 (class 2604 OID 32935)
-- Name: ppid_profil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_profil_id_seq'::regclass);


--
-- TOC entry 3014 (class 2604 OID 33129)
-- Name: ppid_regulasi id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_id_seq'::regclass);


--
-- TOC entry 3015 (class 2604 OID 33137)
-- Name: ppid_regulasi_peraturan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_peraturan_id_seq'::regclass);


--
-- TOC entry 3016 (class 2604 OID 33158)
-- Name: profilsingkats id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profilsingkats ALTER COLUMN id SET DEFAULT nextval('public.profilsingkats_id_seq'::regclass);


--
-- TOC entry 3026 (class 2604 OID 33311)
-- Name: regulasis_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_banner ALTER COLUMN id SET DEFAULT nextval('public.regulasis_banner_id_seq'::regclass);


--
-- TOC entry 3027 (class 2604 OID 33319)
-- Name: regulasis_peraturankip id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_peraturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_peraturankip_id_seq'::regclass);


--
-- TOC entry 3028 (class 2604 OID 33330)
-- Name: regulasis_rancanganperaturankip id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_rancanganperaturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_rancanganperaturankip_id_seq'::regclass);


--
-- TOC entry 2995 (class 2604 OID 32827)
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


--
-- TOC entry 3024 (class 2604 OID 33243)
-- Name: sosialmedias id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_id_seq'::regclass);


--
-- TOC entry 3025 (class 2604 OID 33254)
-- Name: sosialmedias_linkapps id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias_linkapps ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_linkapps_id_seq'::regclass);


--
-- TOC entry 3035 (class 2604 OID 33539)
-- Name: standarlayanans_biayalayanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_biayalayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_biayalayanan_id_seq'::regclass);


--
-- TOC entry 3033 (class 2604 OID 33517)
-- Name: standarlayanans_maklumat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_maklumat ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_maklumat_id_seq'::regclass);


--
-- TOC entry 3034 (class 2604 OID 33528)
-- Name: standarlayanans_prosedurlayanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_prosedurlayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_prosedurlayanan_id_seq'::regclass);


--
-- TOC entry 3018 (class 2604 OID 33180)
-- Name: strukturorganisasis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_id_seq'::regclass);


--
-- TOC entry 3020 (class 2604 OID 33199)
-- Name: strukturorganisasis_bagankanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankanan ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagiankanan_id_seq'::regclass);


--
-- TOC entry 3019 (class 2604 OID 33191)
-- Name: strukturorganisasis_bagankiri id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankiri ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagiankiri_id_seq'::regclass);


--
-- TOC entry 3017 (class 2604 OID 33169)
-- Name: tugasdanfungsis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugasdanfungsis ALTER COLUMN id SET DEFAULT nextval('public.tugasdanfungsis_id_seq'::regclass);


--
-- TOC entry 2993 (class 2604 OID 32794)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3021 (class 2604 OID 33210)
-- Name: visimisis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.visimisis ALTER COLUMN id SET DEFAULT nextval('public.visimisis_id_seq'::regclass);


--
-- TOC entry 3302 (class 0 OID 32885)
-- Dependencies: 217
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- TOC entry 3364 (class 0 OID 33412)
-- Dependencies: 279
-- Data for Name: informasipubliks_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/informasiPublik/banner/banner.png	2022-11-16 04:17:09	2022-11-16 04:34:19
\.


--
-- TOC entry 3366 (class 0 OID 33420)
-- Dependencies: 281
-- Data for Name: informasipubliks_secaraberkala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_secaraberkala (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
9	Rencana Strategis (Renstra) Kementerian BUMN	https://bumn.go.id/about/report	\N	2022-11-16 04:10:49	2022-11-16 04:10:49
10	Daftar Isian Pelaksanan Anggaran (DIPA)	https://bumn.go.id/about/report	\N	2022-11-16 04:11:20	2022-11-16 04:11:20
11	Profil Singkat Pejabat Struktural	https://bumn.go.id/about/report	\N	2022-11-16 04:11:55	2022-11-16 04:11:55
\.


--
-- TOC entry 3368 (class 0 OID 33431)
-- Dependencies: 283
-- Data for Name: informasipubliks_sertamerta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_sertamerta (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
1	zx	ax	\N	2022-11-16 07:01:31	2022-11-16 07:02:44
\.


--
-- TOC entry 3370 (class 0 OID 33442)
-- Dependencies: 285
-- Data for Name: informasipubliks_setiapsaat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_setiapsaat (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
1	sssx	sx	\N	2022-11-16 07:20:22	2022-11-16 07:20:35
\.


--
-- TOC entry 3350 (class 0 OID 33218)
-- Dependencies: 265
-- Data for Name: kontaks; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kontaks (id, alamat, telepon, waktu_pelayanan, banner_path, latitude, longitude, created_at, updated_at, email) FROM stdin;
3	Jl. Medan Merdeka Selatan No. 13 Gambir, Jakarta 10110	(021) 29935678	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Senin - Kamis : Pukul 08.00 - 16.00 WIB</span><br style="margin: 0px; padding: 0px; box-sizing: border-box; font-family: Poppins, sans-serif; text-transform: capitalize; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: #363636; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Istirahat : Pukul 12.00 - 13.00 WIB</span></li>\r\n<li><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Jumat Pukul 08.00 - 16.00</span><br style="margin: 0px; padding: 0px; box-sizing: border-box; font-family: Poppins, sans-serif; text-transform: capitalize; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: #363636; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Istirahat : Pukul 11.30 - 13.30 WIB</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/kontak/banner.png	-6.1814988	106.82522458349823	2022-11-12 04:42:25	2022-11-14 01:43:53	ppid@bumn.go.id
\.


--
-- TOC entry 3352 (class 0 OID 33229)
-- Dependencies: 267
-- Data for Name: kontaks_dokumentasiruangppid; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kontaks_dokumentasiruangppid (id, image_path, keterangan, urutan, created_at, updated_at) FROM stdin;
8	adminAssets/profil/kontak/dokumentasi1.png	1	1	2022-11-14 03:49:40	2022-11-14 03:49:40
9	adminAssets/profil/kontak/dokumentasi2.png	2	2	2022-11-14 03:49:53	2022-11-14 03:49:53
10	adminAssets/profil/kontak/dokumentasi3.png	3	3	2022-11-14 03:50:22	2022-11-14 03:50:22
\.


--
-- TOC entry 3318 (class 0 OID 33001)
-- Dependencies: 233
-- Data for Name: laporan_berkala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_berkala (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3320 (class 0 OID 33017)
-- Dependencies: 235
-- Data for Name: laporan_serta_merta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_serta_merta (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3322 (class 0 OID 33033)
-- Dependencies: 237
-- Data for Name: laporan_setiap_saat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_setiap_saat (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3300 (class 0 OID 32874)
-- Dependencies: 215
-- Data for Name: menus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.menus (id, parent_id, label, icon, status, route_name, "order", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3288 (class 0 OID 32689)
-- Dependencies: 203
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
6	2014_10_12_000000_create_users_table	1
7	2014_10_12_100000_create_password_resets_table	1
8	2022_10_23_032325_create_roles_table	1
9	2022_10_23_073819_create_permission_tables	1
10	2022_10_24_032253_create_menus_table	1
11	2014_10_12_200000_add_two_factor_columns_to_users_table	2
12	2019_08_19_000000_create_failed_jobs_table	2
13	2019_12_14_000001_create_personal_access_tokens_table	2
14	2022_11_01_012535_create_frontends_table	2
15	2022_11_10_020102_create_profils_table	2
16	2022_11_15_074109_create_regulasis_table	3
19	2022_11_16_021337_create_informasipubliks_table	4
22	2022_11_16_081654_create_standarlayanans_table	5
\.


--
-- TOC entry 3296 (class 0 OID 32835)
-- Dependencies: 211
-- Data for Name: model_has_permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
\.


--
-- TOC entry 3297 (class 0 OID 32846)
-- Dependencies: 212
-- Data for Name: model_has_roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
1	App\\Models\\User	1
2	App\\Models\\User	2
3	App\\Models\\User	3
\.


--
-- TOC entry 3291 (class 0 OID 32802)
-- Dependencies: 206
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 3293 (class 0 OID 32811)
-- Dependencies: 208
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
1	dashboard.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
2	dashboard.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
3	dashboard.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
4	dashboard.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
5	data permohonan.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
6	data permohonan.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
7	data permohonan.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
8	data permohonan.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
9	data keberatan.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
10	data keberatan.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
11	data keberatan.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
12	data keberatan.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
13	profil singkat ppid.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
14	profil singkat ppid.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
15	profil singkat ppid.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
16	profil singkat ppid.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
17	tugas dan fungsi ppid.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
18	tugas dan fungsi ppid.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
19	tugas dan fungsi ppid.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
20	tugas dan fungsi ppid.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
21	struktur organisasi.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
22	struktur organisasi.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
23	struktur organisasi.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
24	struktur organisasi.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
25	visi dan misi.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
26	visi dan misi.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
27	visi dan misi.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
28	visi dan misi.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
29	kontak.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
30	kontak.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
31	kontak.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
32	kontak.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
33	sosial media.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
34	sosial media.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
35	sosial media.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
36	sosial media.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
37	peraturan kip.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
38	peraturan kip.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
39	peraturan kip.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
40	peraturan kip.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
41	rancangan peraturan kip.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
42	rancangan peraturan kip.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
43	rancangan peraturan kip.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
44	rancangan peraturan kip.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
45	informasi secara berkala.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
46	informasi secara berkala.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
47	informasi secara berkala.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
48	informasi secara berkala.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
49	informasi serta merta.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
50	informasi serta merta.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
51	informasi serta merta.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
52	informasi serta merta.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
53	informasi setiap saat.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
54	informasi setiap saat.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
55	informasi setiap saat.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
56	informasi setiap saat.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
57	laporan triwulanan pip.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
58	laporan triwulanan pip.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
59	laporan triwulanan pip.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
60	laporan triwulanan pip.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
61	laporan tahunan pip.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
62	laporan tahunan pip.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
63	laporan tahunan pip.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
64	laporan tahunan pip.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
65	laporan hasil survei.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
66	laporan hasil survei.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
67	laporan hasil survei.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
68	laporan hasil survei.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
69	maklumat pelayanan.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
70	maklumat pelayanan.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
71	maklumat pelayanan.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
72	maklumat pelayanan.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
73	prosedur pelayanan.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
74	prosedur pelayanan.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
75	prosedur pelayanan.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
76	prosedur pelayanan.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
77	biaya pelayanan.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
78	biaya pelayanan.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
79	biaya pelayanan.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
80	biaya pelayanan.delete	web	2022-11-10 03:50:58	2022-11-10 03:50:58
81	faq.create	web	2022-11-10 03:50:58	2022-11-10 03:50:58
82	faq.view	web	2022-11-10 03:50:58	2022-11-10 03:50:58
83	faq.edit	web	2022-11-10 03:50:58	2022-11-10 03:50:58
84	faq.delete	web	2022-11-10 03:50:59	2022-11-10 03:50:59
85	user pemohon.create	web	2022-11-10 03:50:59	2022-11-10 03:50:59
86	user pemohon.view	web	2022-11-10 03:50:59	2022-11-10 03:50:59
87	user pemohon.edit	web	2022-11-10 03:50:59	2022-11-10 03:50:59
88	user pemohon.delete	web	2022-11-10 03:50:59	2022-11-10 03:50:59
89	user admin.create	web	2022-11-10 03:50:59	2022-11-10 03:50:59
90	user admin.view	web	2022-11-10 03:50:59	2022-11-10 03:50:59
91	user admin.edit	web	2022-11-10 03:50:59	2022-11-10 03:50:59
92	user admin.delete	web	2022-11-10 03:50:59	2022-11-10 03:50:59
93	role permission.create	web	2022-11-10 03:50:59	2022-11-10 03:50:59
94	role permission.view	web	2022-11-10 03:50:59	2022-11-10 03:50:59
95	role permission.edit	web	2022-11-10 03:50:59	2022-11-10 03:50:59
96	role permission.delete	web	2022-11-10 03:50:59	2022-11-10 03:50:59
\.


--
-- TOC entry 3304 (class 0 OID 32899)
-- Dependencies: 219
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3332 (class 0 OID 33113)
-- Dependencies: 247
-- Data for Name: ppid_biaya; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_biaya (id, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3326 (class 0 OID 33065)
-- Dependencies: 241
-- Data for Name: ppid_faq; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_faq (id, judul, deskripsi, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3330 (class 0 OID 33097)
-- Dependencies: 245
-- Data for Name: ppid_infografis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_infografis (id, deskripsi, direktori_image, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3308 (class 0 OID 32924)
-- Dependencies: 223
-- Data for Name: ppid_jenis_profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_jenis_profil (id, jenis_profil, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3312 (class 0 OID 32953)
-- Dependencies: 227
-- Data for Name: ppid_kontak; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_kontak (id, nama_data, deskripsi, sisi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3324 (class 0 OID 33049)
-- Dependencies: 239
-- Data for Name: ppid_lap_survey; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_survey (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3314 (class 0 OID 32969)
-- Dependencies: 229
-- Data for Name: ppid_lap_th; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_th (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3316 (class 0 OID 32985)
-- Dependencies: 231
-- Data for Name: ppid_lap_tw; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_tw (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3328 (class 0 OID 33081)
-- Dependencies: 243
-- Data for Name: ppid_maklumat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_maklumat (id, direktori_image, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3306 (class 0 OID 32913)
-- Dependencies: 221
-- Data for Name: ppid_menu; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_menu (id, nama_menu, routing, "order", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3310 (class 0 OID 32932)
-- Dependencies: 225
-- Data for Name: ppid_profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_profil (id, judul, narasi, direktori_image, created_at, updated_at, parent_id, id_ppid_jenis_profil) FROM stdin;
\.


--
-- TOC entry 3334 (class 0 OID 33126)
-- Dependencies: 249
-- Data for Name: ppid_regulasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_regulasi (id, jenis_regulasi, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3336 (class 0 OID 33134)
-- Dependencies: 251
-- Data for Name: ppid_regulasi_peraturan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_regulasi_peraturan (id, nama_regulasi, direktori_file, "order", created_at, updated_at, parent_id, id_jenis_regulasi) FROM stdin;
\.


--
-- TOC entry 3338 (class 0 OID 33155)
-- Dependencies: 253
-- Data for Name: profilsingkats; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.profilsingkats (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
7	Tentang PPID Kementerian BUMN	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style="line-height: 1.4;">Sejalan Dengan Semangat Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik, Pelayanan Informasi Publik Di Lingkungan Kementerian BUMN Mengacu Pada Peraturan Menteri BUMN Nomor: PER-09/MBU/08/2020 Tentang Perubahan Kedua Atas Peraturan Menteri BUMN Nomor: PER-08/MBU/2014 Tanggal 30Juni 2014 Tentang Pedoman Pengelolaan Informasi Dan Dokumentasi Di Lingkungan Kementerian BUMN, Yang Di Dalamnya Mencakup Ruang Lingkup Kewenangan Pelayanan Informasi Publik Kementerian BUMN Serta Penunjukan Pejabat Pengelola Informasi Dan Dokumentasi (PPID) Kementerian BUMN. Pemenuhan Pelayanan Informasi Publik Di Kementerian BUMN Juga Mengacu Pada Keputusan Pejabat Pengelola Informasi Dan Dokumentasi (PPID) Nomor KEP-01/PPID.KBUMN/09/2020 Tanggal 8 September 2020 Tentang Daftar Informasi Publik Di Lingkungan Kementerian BUMN Serta Keputusan PPID Nomor KEP-02/PPID.KBUMN/12/2018 Tanggal 21 Desember 2018 Dan Daftar Informasi Dikecualikan Di Lingkungan Kementerian BUMN. Dalam Rangka Penilaian Implementasi Keterbukaan Informasi Badan Publik Tahun 2020, PPID Kementerian BUMN Mendapat Nilai Skor 85.27 Dengan Kategori Keterbukaan Badan Publik &ldquo;Menuju Informatif&rdquo;. Tentunya Hal Ini Semakin Memacu PPID Kementerian BUMN Untuk Terus Meningkatkan Kualitas Pelayanan Informasi Publik Yang Sejalan Dengan Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik. Selain Menerima Permohonan Secara Langsung, PPID Kementerian BUMN Juga Melayani Permohonan Informasi Yang Disampaikan Secara Tidak Langsung. Pada Februari 2021, PPID Kementerian BUMN Resmi Meluncurkan Aplikasi Mobile PPID Sehingga Memperkaya Kanal Informasi Yang Dapat Dimanfaatkan Oleh Masyarakat Untuk Mendapatkan Informasi Publik Kementerian BUMN.</p>\r\n</body>\r\n</html>	adminAssets/profil/profil_singkat/banner.png	adminAssets/profil/profil_singkat/sideImage.png	2022-11-10 09:10:10	2022-11-15 21:43:08
\.


--
-- TOC entry 3358 (class 0 OID 33308)
-- Dependencies: 273
-- Data for Name: regulasis_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/regulasi/banner/banner.png	2022-11-15 19:02:59	2022-11-16 01:52:20
\.


--
-- TOC entry 3360 (class 0 OID 33316)
-- Dependencies: 275
-- Data for Name: regulasis_peraturankip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_peraturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
14	a	adminAssets/regulasi/peraturan_kip/Salinan PER-9-MBU-08-2020-1.pdf	1	2022-11-15 21:21:14	2022-11-15 21:21:14
\.


--
-- TOC entry 3362 (class 0 OID 33327)
-- Dependencies: 277
-- Data for Name: regulasis_rancanganperaturankip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_rancanganperaturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
1	a2	adminAssets/regulasi/rancangan_peraturan_kip/Salinan PER-9-MBU-08-2020-1-1.pdf	22	2022-11-16 01:49:17	2022-11-16 01:49:25
2	zs	adminAssets/regulasi/rancangan_peraturan_kip/UU_No_14_Tahun_2008-2.pdf	333	2022-11-16 01:49:51	2022-11-16 01:50:00
\.


--
-- TOC entry 3298 (class 0 OID 32857)
-- Dependencies: 213
-- Data for Name: role_has_permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
85	1
86	1
87	1
88	1
89	1
90	1
91	1
92	1
93	1
94	1
95	1
96	1
17	2
18	2
19	2
20	2
21	2
22	2
23	2
24	2
25	2
26	2
27	2
28	2
29	2
30	2
31	2
32	2
33	2
34	2
35	2
36	2
1	3
2	3
3	3
4	3
5	3
6	3
7	3
8	3
9	3
10	3
11	3
12	3
13	3
14	3
15	3
16	3
17	3
18	3
19	3
20	3
21	3
22	3
23	3
24	3
25	3
26	3
27	3
28	3
29	3
30	3
31	3
32	3
33	3
34	3
35	3
36	3
37	3
38	3
39	3
40	3
41	3
42	3
43	3
44	3
45	3
46	3
47	3
48	3
49	3
50	3
51	3
52	3
53	3
54	3
55	3
56	3
57	3
58	3
59	3
60	3
61	3
62	3
63	3
64	3
65	3
66	3
67	3
68	3
69	3
70	3
71	3
72	3
73	3
74	3
75	3
76	3
85	3
86	3
87	3
88	3
89	3
90	3
91	3
92	3
93	3
94	3
95	3
96	3
\.


--
-- TOC entry 3295 (class 0 OID 32824)
-- Dependencies: 210
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
1	admin	web	2022-11-10 03:50:59	2022-11-10 03:50:59
2	user	web	2022-11-10 03:50:59	2022-11-10 03:50:59
3	super	web	2022-11-10 03:51:00	2022-11-10 03:51:00
\.


--
-- TOC entry 3354 (class 0 OID 33240)
-- Dependencies: 269
-- Data for Name: sosialmedias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sosialmedias (id, icon, url, urutan, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3356 (class 0 OID 33251)
-- Dependencies: 271
-- Data for Name: sosialmedias_linkapps; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sosialmedias_linkapps (id, icon, url, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3376 (class 0 OID 33536)
-- Dependencies: 291
-- Data for Name: standarlayanans_biayalayanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_biayalayanan (id, banner_path, image_path, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3372 (class 0 OID 33514)
-- Dependencies: 287
-- Data for Name: standarlayanans_maklumat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_maklumat (id, judul, banner_path, image_path, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3374 (class 0 OID 33525)
-- Dependencies: 289
-- Data for Name: standarlayanans_prosedurlayanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_prosedurlayanan (id, banner_path, permohonan_image_path, keberatan_image_path, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3342 (class 0 OID 33177)
-- Dependencies: 257
-- Data for Name: strukturorganisasis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis (id, judul, banner_path, created_at, updated_at) FROM stdin;
2	Struktur PPID Kementerian BUMN	adminAssets/profil/struktur_organisasi/banner.png	2022-11-15 01:53:31	2022-11-15 04:04:03
\.


--
-- TOC entry 3346 (class 0 OID 33196)
-- Dependencies: 261
-- Data for Name: strukturorganisasis_bagankanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis_bagankanan (id, nomenklatur, deskripsi, urutan, created_at, updated_at) FROM stdin;
4	PPID Pelaksana	PPID Pelaksana dijabat oleh pejabat di masing-masing unit kerja/satuan kerja/unit organisasi/organisasi perangkat daerah/sebutan lainnya	3	2022-11-15 02:45:12	2022-11-15 02:45:12
3	PPID	PPID merupakan pejabat struktural yang ditunjuk untuk melaksanakan tugas Pelayanan Informasi kepada publik, PPID memiliki kompetensi di bidang pengelolaan dokumen, pengolahan data, pelayanan informasi dan kehumasan	2	2022-11-15 02:44:44	2022-11-15 03:34:47
2	Atasan PPID	Atasan PPID adalah Pimpinan Tinggi Madya yang merupakan atasan langsung pejabat yang menjadi PPID	1	2022-11-15 02:44:25	2022-11-15 03:51:01
\.


--
-- TOC entry 3344 (class 0 OID 33188)
-- Dependencies: 259
-- Data for Name: strukturorganisasis_bagankiri; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis_bagankiri (id, nomenklatur, created_at, updated_at) FROM stdin;
1	Menteri BUMN	2022-11-15 04:04:03	2022-11-15 04:04:03
2	Atasan PPID	2022-11-15 04:04:03	2022-11-15 04:04:03
3	PPID	2022-11-15 04:04:03	2022-11-15 04:04:03
\.


--
-- TOC entry 3340 (class 0 OID 33166)
-- Dependencies: 255
-- Data for Name: tugasdanfungsis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tugasdanfungsis (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
1	Tugas Dan Fungsi PPID Kementerian BUMN	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li>Mengoordinasikan pengumpulan seluruh Informasi Publik secara fisik dari setiap unit kerja, meliputi informasi yang wajib disediakan dan diumumkan secara berkala, wajib tersedia setiap saat dan informasi terbuka lainnya yang diminta pemohon Informasi Publik</li>\r\n<li>Mengoordinasikan pendataan Informasi Publik yang dikuasai oleh setiap unit kerja di Kementerian BUMN dalam rangka pembuatan dan pemutakhiran Daftar Informasi Publik setelah dimutakhirkan oleh pimpinan masingmasing unit kerja sekurang-kurangnya 1 (satu) kali dalam sebulan</li>\r\n<li>Mengoordinasikan penyediaan dan pelayanan Informasi Publik melalui pengumuman dan/atau permohonan</li>\r\n<li>Mengoordinasikan pengumuman Informasi Publik melalui media yang secara efektif dapat menjangkau seluruh pemangku kepentingan</li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/tugas_dan_fungsi/banner.png	adminAssets/profil/tugas_dan_fungsi/sideImage.png	2022-11-11 02:58:44	2022-11-11 07:54:05
\.


--
-- TOC entry 3290 (class 0 OID 32791)
-- Dependencies: 205
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, two_factor_secret, two_factor_recovery_codes, two_factor_confirmed_at) FROM stdin;
1	Admin Role	admin@role.test	\N	$2y$10$BH.9x/az5v9gUX3UudKRMu3CchL3rX.jKS5KqTd4iATVC/z/NuxaS	\N	2022-11-10 03:51:02	2022-11-10 03:51:02	\N	\N	\N
2	User Role	user@role.test	\N	$2y$10$PUzn3/D4Fka./id9Zc/jIezUXpPdrbRV6OBy3EkFxkVvQCNUYg71.	\N	2022-11-10 03:51:02	2022-11-10 03:51:02	\N	\N	\N
3	Super Role	super@role.test	\N	$2y$10$fUAz833oPLnAJzzJJurJMuEV./tyrx1jobaKopNRjRYGHyZMNYqde	\N	2022-11-10 03:51:02	2022-11-10 03:51:02	\N	\N	\N
\.


--
-- TOC entry 3348 (class 0 OID 33207)
-- Dependencies: 263
-- Data for Name: visimisis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.visimisis (id, visi, misi, banner_path, created_at, updated_at) FROM stdin;
1	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Menjadi PPID terdepan dalam melaksanakan pelayanan informasi publik melalui pelayanan informasi yang cepat dan akurat sesuai dengan ketentuan peraturan perundang-undangan yang berlaku</p>\r\n</body>\r\n</html>	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li>Memberikan pelayanan informasi publik dengan cepat dan tepat sesuai ketentuan peraturan yang berlaku</li>\r\n<li>Menyediakan sumber daya manusia yang kompeten, santun serta bertanggung jawab dalam pelayanan informasi</li>\r\n<li>Menyediakan fasilitas pelayanan informasi yang prima berupa sistem dan infrastruktur pelayanan informasi publik yang modern dan mendukung</li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/visi_dan_misi/banner.png	2022-11-11 05:54:21	2022-11-11 08:07:51
\.


--
-- TOC entry 3425 (class 0 OID 0)
-- Dependencies: 216
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 3426 (class 0 OID 0)
-- Dependencies: 278
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_banner_id_seq', 1, true);


--
-- TOC entry 3427 (class 0 OID 0)
-- Dependencies: 280
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_secaraberkala_id_seq', 11, true);


--
-- TOC entry 3428 (class 0 OID 0)
-- Dependencies: 282
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_sertamerta_id_seq', 2, true);


--
-- TOC entry 3429 (class 0 OID 0)
-- Dependencies: 284
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_setiapsaat_id_seq', 2, true);


--
-- TOC entry 3430 (class 0 OID 0)
-- Dependencies: 266
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kontaks_dokumentasiruangppid_id_seq', 10, true);


--
-- TOC entry 3431 (class 0 OID 0)
-- Dependencies: 264
-- Name: kontaks_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kontaks_id_seq', 3, true);


--
-- TOC entry 3432 (class 0 OID 0)
-- Dependencies: 232
-- Name: laporan_berkala_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_berkala_id_seq', 1, false);


--
-- TOC entry 3433 (class 0 OID 0)
-- Dependencies: 234
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_serta_merta_id_seq', 1, false);


--
-- TOC entry 3434 (class 0 OID 0)
-- Dependencies: 236
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_setiap_saat_id_seq', 1, false);


--
-- TOC entry 3435 (class 0 OID 0)
-- Dependencies: 214
-- Name: menus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menus_id_seq', 1, false);


--
-- TOC entry 3436 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 22, true);


--
-- TOC entry 3437 (class 0 OID 0)
-- Dependencies: 207
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.permissions_id_seq', 96, true);


--
-- TOC entry 3438 (class 0 OID 0)
-- Dependencies: 218
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- TOC entry 3439 (class 0 OID 0)
-- Dependencies: 246
-- Name: ppid_biaya_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_biaya_id_seq', 1, false);


--
-- TOC entry 3440 (class 0 OID 0)
-- Dependencies: 240
-- Name: ppid_faq_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_faq_id_seq', 1, false);


--
-- TOC entry 3441 (class 0 OID 0)
-- Dependencies: 244
-- Name: ppid_infografis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_infografis_id_seq', 1, false);


--
-- TOC entry 3442 (class 0 OID 0)
-- Dependencies: 222
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_jenis_profil_id_seq', 1, false);


--
-- TOC entry 3443 (class 0 OID 0)
-- Dependencies: 226
-- Name: ppid_kontak_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_kontak_id_seq', 1, false);


--
-- TOC entry 3444 (class 0 OID 0)
-- Dependencies: 238
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_survey_id_seq', 1, false);


--
-- TOC entry 3445 (class 0 OID 0)
-- Dependencies: 228
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_th_id_seq', 1, false);


--
-- TOC entry 3446 (class 0 OID 0)
-- Dependencies: 230
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_tw_id_seq', 1, false);


--
-- TOC entry 3447 (class 0 OID 0)
-- Dependencies: 242
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_maklumat_id_seq', 1, false);


--
-- TOC entry 3448 (class 0 OID 0)
-- Dependencies: 220
-- Name: ppid_menu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_menu_id_seq', 1, false);


--
-- TOC entry 3449 (class 0 OID 0)
-- Dependencies: 224
-- Name: ppid_profil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_profil_id_seq', 1, false);


--
-- TOC entry 3450 (class 0 OID 0)
-- Dependencies: 248
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_regulasi_id_seq', 1, false);


--
-- TOC entry 3451 (class 0 OID 0)
-- Dependencies: 250
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_regulasi_peraturan_id_seq', 1, false);


--
-- TOC entry 3452 (class 0 OID 0)
-- Dependencies: 252
-- Name: profilsingkats_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.profilsingkats_id_seq', 7, true);


--
-- TOC entry 3453 (class 0 OID 0)
-- Dependencies: 272
-- Name: regulasis_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_banner_id_seq', 1, true);


--
-- TOC entry 3454 (class 0 OID 0)
-- Dependencies: 274
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_peraturankip_id_seq', 14, true);


--
-- TOC entry 3455 (class 0 OID 0)
-- Dependencies: 276
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_rancanganperaturankip_id_seq', 2, true);


--
-- TOC entry 3456 (class 0 OID 0)
-- Dependencies: 209
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roles_id_seq', 4, true);


--
-- TOC entry 3457 (class 0 OID 0)
-- Dependencies: 268
-- Name: sosialmedias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sosialmedias_id_seq', 1, false);


--
-- TOC entry 3458 (class 0 OID 0)
-- Dependencies: 270
-- Name: sosialmedias_linkapps_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sosialmedias_linkapps_id_seq', 1, false);


--
-- TOC entry 3459 (class 0 OID 0)
-- Dependencies: 290
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_biayalayanan_id_seq', 1, false);


--
-- TOC entry 3460 (class 0 OID 0)
-- Dependencies: 286
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_maklumat_id_seq', 1, false);


--
-- TOC entry 3461 (class 0 OID 0)
-- Dependencies: 288
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_prosedurlayanan_id_seq', 1, false);


--
-- TOC entry 3462 (class 0 OID 0)
-- Dependencies: 260
-- Name: strukturorganisasis_bagiankanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_bagiankanan_id_seq', 7, true);


--
-- TOC entry 3463 (class 0 OID 0)
-- Dependencies: 258
-- Name: strukturorganisasis_bagiankiri_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_bagiankiri_id_seq', 3, true);


--
-- TOC entry 3464 (class 0 OID 0)
-- Dependencies: 256
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_id_seq', 2, true);


--
-- TOC entry 3465 (class 0 OID 0)
-- Dependencies: 254
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tugasdanfungsis_id_seq', 1, true);


--
-- TOC entry 3466 (class 0 OID 0)
-- Dependencies: 204
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 3, true);


--
-- TOC entry 3467 (class 0 OID 0)
-- Dependencies: 262
-- Name: visimisis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.visimisis_id_seq', 1, true);


--
-- TOC entry 3062 (class 2606 OID 32894)
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- TOC entry 3064 (class 2606 OID 32896)
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- TOC entry 3129 (class 2606 OID 33417)
-- Name: informasipubliks_banner informasipubliks_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_banner
    ADD CONSTRAINT informasipubliks_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3131 (class 2606 OID 33428)
-- Name: informasipubliks_secaraberkala informasipubliks_secaraberkala_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_secaraberkala
    ADD CONSTRAINT informasipubliks_secaraberkala_pkey PRIMARY KEY (id);


--
-- TOC entry 3133 (class 2606 OID 33439)
-- Name: informasipubliks_sertamerta informasipubliks_sertamerta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_sertamerta
    ADD CONSTRAINT informasipubliks_sertamerta_pkey PRIMARY KEY (id);


--
-- TOC entry 3135 (class 2606 OID 33450)
-- Name: informasipubliks_setiapsaat informasipubliks_setiapsaat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_setiapsaat
    ADD CONSTRAINT informasipubliks_setiapsaat_pkey PRIMARY KEY (id);


--
-- TOC entry 3117 (class 2606 OID 33237)
-- Name: kontaks_dokumentasiruangppid kontaks_dokumentasiruangppid_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks_dokumentasiruangppid
    ADD CONSTRAINT kontaks_dokumentasiruangppid_pkey PRIMARY KEY (id);


--
-- TOC entry 3115 (class 2606 OID 33226)
-- Name: kontaks kontaks_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks
    ADD CONSTRAINT kontaks_pkey PRIMARY KEY (id);


--
-- TOC entry 3083 (class 2606 OID 33009)
-- Name: laporan_berkala laporan_berkala_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_pkey PRIMARY KEY (id);


--
-- TOC entry 3085 (class 2606 OID 33025)
-- Name: laporan_serta_merta laporan_serta_merta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_pkey PRIMARY KEY (id);


--
-- TOC entry 3087 (class 2606 OID 33041)
-- Name: laporan_setiap_saat laporan_setiap_saat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_pkey PRIMARY KEY (id);


--
-- TOC entry 3060 (class 2606 OID 32882)
-- Name: menus menus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);


--
-- TOC entry 3037 (class 2606 OID 32694)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 3053 (class 2606 OID 32845)
-- Name: model_has_permissions model_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);


--
-- TOC entry 3056 (class 2606 OID 32856)
-- Name: model_has_roles model_has_roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);


--
-- TOC entry 3044 (class 2606 OID 32821)
-- Name: permissions permissions_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);


--
-- TOC entry 3046 (class 2606 OID 32819)
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- TOC entry 3066 (class 2606 OID 32907)
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 3068 (class 2606 OID 32910)
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- TOC entry 3097 (class 2606 OID 33118)
-- Name: ppid_biaya ppid_biaya_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_pkey PRIMARY KEY (id);


--
-- TOC entry 3091 (class 2606 OID 33073)
-- Name: ppid_faq ppid_faq_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_pkey PRIMARY KEY (id);


--
-- TOC entry 3095 (class 2606 OID 33105)
-- Name: ppid_infografis ppid_infografis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_pkey PRIMARY KEY (id);


--
-- TOC entry 3073 (class 2606 OID 32929)
-- Name: ppid_jenis_profil ppid_jenis_profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_jenis_profil
    ADD CONSTRAINT ppid_jenis_profil_pkey PRIMARY KEY (id);


--
-- TOC entry 3077 (class 2606 OID 32961)
-- Name: ppid_kontak ppid_kontak_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_pkey PRIMARY KEY (id);


--
-- TOC entry 3089 (class 2606 OID 33057)
-- Name: ppid_lap_survey ppid_lap_survey_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_pkey PRIMARY KEY (id);


--
-- TOC entry 3079 (class 2606 OID 32977)
-- Name: ppid_lap_th ppid_lap_th_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_pkey PRIMARY KEY (id);


--
-- TOC entry 3081 (class 2606 OID 32993)
-- Name: ppid_lap_tw ppid_lap_tw_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_pkey PRIMARY KEY (id);


--
-- TOC entry 3093 (class 2606 OID 33089)
-- Name: ppid_maklumat ppid_maklumat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_pkey PRIMARY KEY (id);


--
-- TOC entry 3071 (class 2606 OID 32921)
-- Name: ppid_menu ppid_menu_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_menu
    ADD CONSTRAINT ppid_menu_pkey PRIMARY KEY (id);


--
-- TOC entry 3075 (class 2606 OID 32940)
-- Name: ppid_profil ppid_profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_pkey PRIMARY KEY (id);


--
-- TOC entry 3101 (class 2606 OID 33142)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_pkey PRIMARY KEY (id);


--
-- TOC entry 3099 (class 2606 OID 33131)
-- Name: ppid_regulasi ppid_regulasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi
    ADD CONSTRAINT ppid_regulasi_pkey PRIMARY KEY (id);


--
-- TOC entry 3103 (class 2606 OID 33163)
-- Name: profilsingkats profilsingkats_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profilsingkats
    ADD CONSTRAINT profilsingkats_pkey PRIMARY KEY (id);


--
-- TOC entry 3123 (class 2606 OID 33313)
-- Name: regulasis_banner regulasis_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_banner
    ADD CONSTRAINT regulasis_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3125 (class 2606 OID 33324)
-- Name: regulasis_peraturankip regulasis_peraturankip_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_peraturankip
    ADD CONSTRAINT regulasis_peraturankip_pkey PRIMARY KEY (id);


--
-- TOC entry 3127 (class 2606 OID 33335)
-- Name: regulasis_rancanganperaturankip regulasis_rancanganperaturankip_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_rancanganperaturankip
    ADD CONSTRAINT regulasis_rancanganperaturankip_pkey PRIMARY KEY (id);


--
-- TOC entry 3058 (class 2606 OID 32871)
-- Name: role_has_permissions role_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);


--
-- TOC entry 3048 (class 2606 OID 32834)
-- Name: roles roles_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);


--
-- TOC entry 3050 (class 2606 OID 32832)
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- TOC entry 3121 (class 2606 OID 33259)
-- Name: sosialmedias_linkapps sosialmedias_linkapps_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias_linkapps
    ADD CONSTRAINT sosialmedias_linkapps_pkey PRIMARY KEY (id);


--
-- TOC entry 3119 (class 2606 OID 33248)
-- Name: sosialmedias sosialmedias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias
    ADD CONSTRAINT sosialmedias_pkey PRIMARY KEY (id);


--
-- TOC entry 3141 (class 2606 OID 33544)
-- Name: standarlayanans_biayalayanan standarlayanans_biayalayanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_biayalayanan
    ADD CONSTRAINT standarlayanans_biayalayanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3137 (class 2606 OID 33522)
-- Name: standarlayanans_maklumat standarlayanans_maklumat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_maklumat
    ADD CONSTRAINT standarlayanans_maklumat_pkey PRIMARY KEY (id);


--
-- TOC entry 3139 (class 2606 OID 33533)
-- Name: standarlayanans_prosedurlayanan standarlayanans_prosedurlayanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_prosedurlayanan
    ADD CONSTRAINT standarlayanans_prosedurlayanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3111 (class 2606 OID 33204)
-- Name: strukturorganisasis_bagankanan strukturorganisasis_bagiankanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankanan
    ADD CONSTRAINT strukturorganisasis_bagiankanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3109 (class 2606 OID 33193)
-- Name: strukturorganisasis_bagankiri strukturorganisasis_bagiankiri_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankiri
    ADD CONSTRAINT strukturorganisasis_bagiankiri_pkey PRIMARY KEY (id);


--
-- TOC entry 3107 (class 2606 OID 33185)
-- Name: strukturorganisasis strukturorganisasis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis
    ADD CONSTRAINT strukturorganisasis_pkey PRIMARY KEY (id);


--
-- TOC entry 3105 (class 2606 OID 33174)
-- Name: tugasdanfungsis tugasdanfungsis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugasdanfungsis
    ADD CONSTRAINT tugasdanfungsis_pkey PRIMARY KEY (id);


--
-- TOC entry 3039 (class 2606 OID 32801)
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 3041 (class 2606 OID 32799)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 3113 (class 2606 OID 33215)
-- Name: visimisis visimisis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.visimisis
    ADD CONSTRAINT visimisis_pkey PRIMARY KEY (id);


--
-- TOC entry 3051 (class 1259 OID 32838)
-- Name: model_has_permissions_model_id_model_type_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);


--
-- TOC entry 3054 (class 1259 OID 32849)
-- Name: model_has_roles_model_id_model_type_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);


--
-- TOC entry 3042 (class 1259 OID 32808)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 3069 (class 1259 OID 32908)
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- TOC entry 3151 (class 2606 OID 33010)
-- Name: laporan_berkala laporan_berkala_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3152 (class 2606 OID 33026)
-- Name: laporan_serta_merta laporan_serta_merta_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3153 (class 2606 OID 33042)
-- Name: laporan_setiap_saat laporan_setiap_saat_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3142 (class 2606 OID 32839)
-- Name: model_has_permissions model_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- TOC entry 3143 (class 2606 OID 32850)
-- Name: model_has_roles model_has_roles_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- TOC entry 3158 (class 2606 OID 33119)
-- Name: ppid_biaya ppid_biaya_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3155 (class 2606 OID 33074)
-- Name: ppid_faq ppid_faq_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3157 (class 2606 OID 33106)
-- Name: ppid_infografis ppid_infografis_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3148 (class 2606 OID 32962)
-- Name: ppid_kontak ppid_kontak_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3154 (class 2606 OID 33058)
-- Name: ppid_lap_survey ppid_lap_survey_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3149 (class 2606 OID 32978)
-- Name: ppid_lap_th ppid_lap_th_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3150 (class 2606 OID 32994)
-- Name: ppid_lap_tw ppid_lap_tw_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3156 (class 2606 OID 33090)
-- Name: ppid_maklumat ppid_maklumat_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3147 (class 2606 OID 32946)
-- Name: ppid_profil ppid_profil_id_ppid_jenis_profil_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign FOREIGN KEY (id_ppid_jenis_profil) REFERENCES public.ppid_jenis_profil(id);


--
-- TOC entry 3146 (class 2606 OID 32941)
-- Name: ppid_profil ppid_profil_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3160 (class 2606 OID 33148)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_id_jenis_regulasi_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign FOREIGN KEY (id_jenis_regulasi) REFERENCES public.ppid_regulasi(id);


--
-- TOC entry 3159 (class 2606 OID 33143)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3144 (class 2606 OID 32860)
-- Name: role_has_permissions role_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- TOC entry 3145 (class 2606 OID 32865)
-- Name: role_has_permissions role_has_permissions_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


-- Completed on 2022-11-17 16:08:23

--
-- PostgreSQL database dump complete
--

