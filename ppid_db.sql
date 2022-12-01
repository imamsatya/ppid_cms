--
-- PostgreSQL database dump
--

-- Dumped from database version 12.12
-- Dumped by pg_dump version 12.12

-- Started on 2022-12-01 14:22:32

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
-- TOC entry 217 (class 1259 OID 34337)
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
-- TOC entry 216 (class 1259 OID 34335)
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
-- TOC entry 3526 (class 0 OID 0)
-- Dependencies: 216
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 315 (class 1259 OID 34938)
-- Name: faqs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.faqs (
    id bigint NOT NULL,
    pertanyaan text NOT NULL,
    jawaban text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.faqs OWNER TO postgres;

--
-- TOC entry 313 (class 1259 OID 34930)
-- Name: faqs_banner; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.faqs_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.faqs_banner OWNER TO postgres;

--
-- TOC entry 312 (class 1259 OID 34928)
-- Name: faqs_banner_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.faqs_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.faqs_banner_id_seq OWNER TO postgres;

--
-- TOC entry 3527 (class 0 OID 0)
-- Dependencies: 312
-- Name: faqs_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.faqs_banner_id_seq OWNED BY public.faqs_banner.id;


--
-- TOC entry 314 (class 1259 OID 34936)
-- Name: faqs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.faqs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.faqs_id_seq OWNER TO postgres;

--
-- TOC entry 3528 (class 0 OID 0)
-- Dependencies: 314
-- Name: faqs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.faqs_id_seq OWNED BY public.faqs.id;


--
-- TOC entry 275 (class 1259 OID 34722)
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
-- TOC entry 274 (class 1259 OID 34720)
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
-- TOC entry 3529 (class 0 OID 0)
-- Dependencies: 274
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_banner_id_seq OWNED BY public.informasipubliks_banner.id;


--
-- TOC entry 277 (class 1259 OID 34730)
-- Name: informasipubliks_secaraberkala; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_secaraberkala (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255),
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_secaraberkala OWNER TO postgres;

--
-- TOC entry 276 (class 1259 OID 34728)
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
-- TOC entry 3530 (class 0 OID 0)
-- Dependencies: 276
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_secaraberkala_id_seq OWNED BY public.informasipubliks_secaraberkala.id;


--
-- TOC entry 279 (class 1259 OID 34741)
-- Name: informasipubliks_sertamerta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_sertamerta (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255),
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_sertamerta OWNER TO postgres;

--
-- TOC entry 278 (class 1259 OID 34739)
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
-- TOC entry 3531 (class 0 OID 0)
-- Dependencies: 278
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_sertamerta_id_seq OWNED BY public.informasipubliks_sertamerta.id;


--
-- TOC entry 281 (class 1259 OID 34752)
-- Name: informasipubliks_setiapsaat; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasipubliks_setiapsaat (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255),
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasipubliks_setiapsaat OWNER TO postgres;

--
-- TOC entry 280 (class 1259 OID 34750)
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
-- TOC entry 3532 (class 0 OID 0)
-- Dependencies: 280
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_setiapsaat_id_seq OWNED BY public.informasipubliks_setiapsaat.id;


--
-- TOC entry 291 (class 1259 OID 34807)
-- Name: informasis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasis (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    judul character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasis OWNER TO postgres;

--
-- TOC entry 290 (class 1259 OID 34805)
-- Name: informasis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informasis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informasis_id_seq OWNER TO postgres;

--
-- TOC entry 3533 (class 0 OID 0)
-- Dependencies: 290
-- Name: informasis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasis_id_seq OWNED BY public.informasis.id;


--
-- TOC entry 293 (class 1259 OID 34818)
-- Name: informasis_image; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informasis_image (
    id bigint NOT NULL,
    sideimage_path character varying(255) NOT NULL,
    backgroundimage_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.informasis_image OWNER TO postgres;

--
-- TOC entry 292 (class 1259 OID 34816)
-- Name: informasis_image_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informasis_image_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informasis_image_id_seq OWNER TO postgres;

--
-- TOC entry 3534 (class 0 OID 0)
-- Dependencies: 292
-- Name: informasis_image_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasis_image_id_seq OWNED BY public.informasis_image.id;


--
-- TOC entry 265 (class 1259 OID 34670)
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
-- TOC entry 267 (class 1259 OID 34681)
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
-- TOC entry 266 (class 1259 OID 34679)
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
-- TOC entry 3535 (class 0 OID 0)
-- Dependencies: 266
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kontaks_dokumentasiruangppid_id_seq OWNED BY public.kontaks_dokumentasiruangppid.id;


--
-- TOC entry 264 (class 1259 OID 34668)
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
-- TOC entry 3536 (class 0 OID 0)
-- Dependencies: 264
-- Name: kontaks_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kontaks_id_seq OWNED BY public.kontaks.id;


--
-- TOC entry 233 (class 1259 OID 34453)
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
-- TOC entry 232 (class 1259 OID 34451)
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
-- TOC entry 3537 (class 0 OID 0)
-- Dependencies: 232
-- Name: laporan_berkala_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_berkala_id_seq OWNED BY public.laporan_berkala.id;


--
-- TOC entry 235 (class 1259 OID 34469)
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
-- TOC entry 234 (class 1259 OID 34467)
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
-- TOC entry 3538 (class 0 OID 0)
-- Dependencies: 234
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_serta_merta_id_seq OWNED BY public.laporan_serta_merta.id;


--
-- TOC entry 237 (class 1259 OID 34485)
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
-- TOC entry 236 (class 1259 OID 34483)
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
-- TOC entry 3539 (class 0 OID 0)
-- Dependencies: 236
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_setiap_saat_id_seq OWNED BY public.laporan_setiap_saat.id;


--
-- TOC entry 305 (class 1259 OID 34889)
-- Name: laporans_banner; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporans_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.laporans_banner OWNER TO postgres;

--
-- TOC entry 304 (class 1259 OID 34887)
-- Name: laporans_banner_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporans_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporans_banner_id_seq OWNER TO postgres;

--
-- TOC entry 3540 (class 0 OID 0)
-- Dependencies: 304
-- Name: laporans_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_banner_id_seq OWNED BY public.laporans_banner.id;


--
-- TOC entry 311 (class 1259 OID 34919)
-- Name: laporans_hasil_survei; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporans_hasil_survei (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.laporans_hasil_survei OWNER TO postgres;

--
-- TOC entry 310 (class 1259 OID 34917)
-- Name: laporans_hasil_survei_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporans_hasil_survei_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporans_hasil_survei_id_seq OWNER TO postgres;

--
-- TOC entry 3541 (class 0 OID 0)
-- Dependencies: 310
-- Name: laporans_hasil_survei_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_hasil_survei_id_seq OWNED BY public.laporans_hasil_survei.id;


--
-- TOC entry 309 (class 1259 OID 34908)
-- Name: laporans_tahunan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporans_tahunan (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.laporans_tahunan OWNER TO postgres;

--
-- TOC entry 308 (class 1259 OID 34906)
-- Name: laporans_tahunan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporans_tahunan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporans_tahunan_id_seq OWNER TO postgres;

--
-- TOC entry 3542 (class 0 OID 0)
-- Dependencies: 308
-- Name: laporans_tahunan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_tahunan_id_seq OWNED BY public.laporans_tahunan.id;


--
-- TOC entry 307 (class 1259 OID 34897)
-- Name: laporans_triwulanan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.laporans_triwulanan (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.laporans_triwulanan OWNER TO postgres;

--
-- TOC entry 306 (class 1259 OID 34895)
-- Name: laporans_triwulanan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.laporans_triwulanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.laporans_triwulanan_id_seq OWNER TO postgres;

--
-- TOC entry 3543 (class 0 OID 0)
-- Dependencies: 306
-- Name: laporans_triwulanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_triwulanan_id_seq OWNED BY public.laporans_triwulanan.id;


--
-- TOC entry 299 (class 1259 OID 34851)
-- Name: linkapps; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.linkapps (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.linkapps OWNER TO postgres;

--
-- TOC entry 298 (class 1259 OID 34849)
-- Name: linkapps_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.linkapps_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.linkapps_id_seq OWNER TO postgres;

--
-- TOC entry 3544 (class 0 OID 0)
-- Dependencies: 298
-- Name: linkapps_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.linkapps_id_seq OWNED BY public.linkapps.id;


--
-- TOC entry 301 (class 1259 OID 34862)
-- Name: mainmenus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mainmenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255),
    nama_permission character varying(255),
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mainmenus OWNER TO postgres;

--
-- TOC entry 300 (class 1259 OID 34860)
-- Name: mainmenus_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.mainmenus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mainmenus_id_seq OWNER TO postgres;

--
-- TOC entry 3545 (class 0 OID 0)
-- Dependencies: 300
-- Name: mainmenus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.mainmenus_id_seq OWNED BY public.mainmenus.id;


--
-- TOC entry 215 (class 1259 OID 34326)
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
-- TOC entry 214 (class 1259 OID 34324)
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
-- TOC entry 3546 (class 0 OID 0)
-- Dependencies: 214
-- Name: menus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;


--
-- TOC entry 203 (class 1259 OID 34235)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 34233)
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
-- TOC entry 3547 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 211 (class 1259 OID 34287)
-- Name: model_has_permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_permissions OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 34298)
-- Name: model_has_roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_roles OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 34254)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 34263)
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
-- TOC entry 207 (class 1259 OID 34261)
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
-- TOC entry 3548 (class 0 OID 0)
-- Dependencies: 207
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;


--
-- TOC entry 219 (class 1259 OID 34351)
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
-- TOC entry 218 (class 1259 OID 34349)
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
-- TOC entry 3549 (class 0 OID 0)
-- Dependencies: 218
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- TOC entry 247 (class 1259 OID 34565)
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
-- TOC entry 246 (class 1259 OID 34563)
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
-- TOC entry 3550 (class 0 OID 0)
-- Dependencies: 246
-- Name: ppid_biaya_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_biaya_id_seq OWNED BY public.ppid_biaya.id;


--
-- TOC entry 241 (class 1259 OID 34517)
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
-- TOC entry 240 (class 1259 OID 34515)
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
-- TOC entry 3551 (class 0 OID 0)
-- Dependencies: 240
-- Name: ppid_faq_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_faq_id_seq OWNED BY public.ppid_faq.id;


--
-- TOC entry 245 (class 1259 OID 34549)
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
-- TOC entry 244 (class 1259 OID 34547)
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
-- TOC entry 3552 (class 0 OID 0)
-- Dependencies: 244
-- Name: ppid_infografis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_infografis_id_seq OWNED BY public.ppid_infografis.id;


--
-- TOC entry 223 (class 1259 OID 34376)
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
-- TOC entry 222 (class 1259 OID 34374)
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
-- TOC entry 3553 (class 0 OID 0)
-- Dependencies: 222
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_jenis_profil_id_seq OWNED BY public.ppid_jenis_profil.id;


--
-- TOC entry 227 (class 1259 OID 34405)
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
-- TOC entry 226 (class 1259 OID 34403)
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
-- TOC entry 3554 (class 0 OID 0)
-- Dependencies: 226
-- Name: ppid_kontak_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_kontak_id_seq OWNED BY public.ppid_kontak.id;


--
-- TOC entry 239 (class 1259 OID 34501)
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
-- TOC entry 238 (class 1259 OID 34499)
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
-- TOC entry 3555 (class 0 OID 0)
-- Dependencies: 238
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_survey_id_seq OWNED BY public.ppid_lap_survey.id;


--
-- TOC entry 229 (class 1259 OID 34421)
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
-- TOC entry 228 (class 1259 OID 34419)
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
-- TOC entry 3556 (class 0 OID 0)
-- Dependencies: 228
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_th_id_seq OWNED BY public.ppid_lap_th.id;


--
-- TOC entry 231 (class 1259 OID 34437)
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
-- TOC entry 230 (class 1259 OID 34435)
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
-- TOC entry 3557 (class 0 OID 0)
-- Dependencies: 230
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_tw_id_seq OWNED BY public.ppid_lap_tw.id;


--
-- TOC entry 243 (class 1259 OID 34533)
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
-- TOC entry 242 (class 1259 OID 34531)
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
-- TOC entry 3558 (class 0 OID 0)
-- Dependencies: 242
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_maklumat_id_seq OWNED BY public.ppid_maklumat.id;


--
-- TOC entry 221 (class 1259 OID 34365)
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
-- TOC entry 220 (class 1259 OID 34363)
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
-- TOC entry 3559 (class 0 OID 0)
-- Dependencies: 220
-- Name: ppid_menu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_menu_id_seq OWNED BY public.ppid_menu.id;


--
-- TOC entry 225 (class 1259 OID 34384)
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
-- TOC entry 224 (class 1259 OID 34382)
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
-- TOC entry 3560 (class 0 OID 0)
-- Dependencies: 224
-- Name: ppid_profil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_profil_id_seq OWNED BY public.ppid_profil.id;


--
-- TOC entry 249 (class 1259 OID 34578)
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
-- TOC entry 248 (class 1259 OID 34576)
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
-- TOC entry 3561 (class 0 OID 0)
-- Dependencies: 248
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_regulasi_id_seq OWNED BY public.ppid_regulasi.id;


--
-- TOC entry 251 (class 1259 OID 34586)
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
-- TOC entry 250 (class 1259 OID 34584)
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
-- TOC entry 3562 (class 0 OID 0)
-- Dependencies: 250
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_regulasi_peraturan_id_seq OWNED BY public.ppid_regulasi_peraturan.id;


--
-- TOC entry 253 (class 1259 OID 34607)
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
-- TOC entry 252 (class 1259 OID 34605)
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
-- TOC entry 3563 (class 0 OID 0)
-- Dependencies: 252
-- Name: profilsingkats_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.profilsingkats_id_seq OWNED BY public.profilsingkats.id;


--
-- TOC entry 269 (class 1259 OID 34692)
-- Name: regulasis_banner; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.regulasis_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    thumbnail_path character varying(255)
);


ALTER TABLE public.regulasis_banner OWNER TO postgres;

--
-- TOC entry 268 (class 1259 OID 34690)
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
-- TOC entry 3564 (class 0 OID 0)
-- Dependencies: 268
-- Name: regulasis_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_banner_id_seq OWNED BY public.regulasis_banner.id;


--
-- TOC entry 271 (class 1259 OID 34700)
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
-- TOC entry 270 (class 1259 OID 34698)
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
-- TOC entry 3565 (class 0 OID 0)
-- Dependencies: 270
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_peraturankip_id_seq OWNED BY public.regulasis_peraturankip.id;


--
-- TOC entry 273 (class 1259 OID 34711)
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
-- TOC entry 272 (class 1259 OID 34709)
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
-- TOC entry 3566 (class 0 OID 0)
-- Dependencies: 272
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_rancanganperaturankip_id_seq OWNED BY public.regulasis_rancanganperaturankip.id;


--
-- TOC entry 213 (class 1259 OID 34309)
-- Name: role_has_permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);


ALTER TABLE public.role_has_permissions OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 34276)
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
-- TOC entry 209 (class 1259 OID 34274)
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
-- TOC entry 3567 (class 0 OID 0)
-- Dependencies: 209
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;


--
-- TOC entry 289 (class 1259 OID 34796)
-- Name: sliders; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sliders (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    judul character varying(255),
    deskripsi character varying(255),
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.sliders OWNER TO postgres;

--
-- TOC entry 288 (class 1259 OID 34794)
-- Name: sliders_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sliders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sliders_id_seq OWNER TO postgres;

--
-- TOC entry 3568 (class 0 OID 0)
-- Dependencies: 288
-- Name: sliders_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sliders_id_seq OWNED BY public.sliders.id;


--
-- TOC entry 297 (class 1259 OID 34840)
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
-- TOC entry 296 (class 1259 OID 34838)
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
-- TOC entry 3569 (class 0 OID 0)
-- Dependencies: 296
-- Name: sosialmedias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sosialmedias_id_seq OWNED BY public.sosialmedias.id;


--
-- TOC entry 287 (class 1259 OID 34785)
-- Name: standarlayanans_biayalayanan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.standarlayanans_biayalayanan (
    id bigint NOT NULL,
    judul character varying(255),
    deskripsi text,
    banner_path character varying(255),
    direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.standarlayanans_biayalayanan OWNER TO postgres;

--
-- TOC entry 286 (class 1259 OID 34783)
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
-- TOC entry 3570 (class 0 OID 0)
-- Dependencies: 286
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_biayalayanan_id_seq OWNED BY public.standarlayanans_biayalayanan.id;


--
-- TOC entry 283 (class 1259 OID 34763)
-- Name: standarlayanans_maklumat; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.standarlayanans_maklumat (
    id bigint NOT NULL,
    judul character varying(255),
    banner_path character varying(255),
    direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.standarlayanans_maklumat OWNER TO postgres;

--
-- TOC entry 282 (class 1259 OID 34761)
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
-- TOC entry 3571 (class 0 OID 0)
-- Dependencies: 282
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_maklumat_id_seq OWNED BY public.standarlayanans_maklumat.id;


--
-- TOC entry 285 (class 1259 OID 34774)
-- Name: standarlayanans_prosedurlayanan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.standarlayanans_prosedurlayanan (
    id bigint NOT NULL,
    banner_path character varying(255),
    permohonan_direktori_image character varying(255),
    keberatan_direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.standarlayanans_prosedurlayanan OWNER TO postgres;

--
-- TOC entry 284 (class 1259 OID 34772)
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
-- TOC entry 3572 (class 0 OID 0)
-- Dependencies: 284
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_prosedurlayanan_id_seq OWNED BY public.standarlayanans_prosedurlayanan.id;


--
-- TOC entry 257 (class 1259 OID 34629)
-- Name: strukturorganisasis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.strukturorganisasis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.strukturorganisasis OWNER TO postgres;

--
-- TOC entry 261 (class 1259 OID 34648)
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
-- TOC entry 260 (class 1259 OID 34646)
-- Name: strukturorganisasis_bagankanan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.strukturorganisasis_bagankanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.strukturorganisasis_bagankanan_id_seq OWNER TO postgres;

--
-- TOC entry 3573 (class 0 OID 0)
-- Dependencies: 260
-- Name: strukturorganisasis_bagankanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_bagankanan_id_seq OWNED BY public.strukturorganisasis_bagankanan.id;


--
-- TOC entry 259 (class 1259 OID 34640)
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
-- TOC entry 258 (class 1259 OID 34638)
-- Name: strukturorganisasis_bagankiri_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.strukturorganisasis_bagankiri_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.strukturorganisasis_bagankiri_id_seq OWNER TO postgres;

--
-- TOC entry 3574 (class 0 OID 0)
-- Dependencies: 258
-- Name: strukturorganisasis_bagankiri_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_bagankiri_id_seq OWNED BY public.strukturorganisasis_bagankiri.id;


--
-- TOC entry 256 (class 1259 OID 34627)
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
-- TOC entry 3575 (class 0 OID 0)
-- Dependencies: 256
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_id_seq OWNED BY public.strukturorganisasis.id;


--
-- TOC entry 303 (class 1259 OID 34873)
-- Name: submenus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.submenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255) NOT NULL,
    nama_permission character varying(255) NOT NULL,
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    main_menu_id integer
);


ALTER TABLE public.submenus OWNER TO postgres;

--
-- TOC entry 302 (class 1259 OID 34871)
-- Name: submenus_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.submenus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.submenus_id_seq OWNER TO postgres;

--
-- TOC entry 3576 (class 0 OID 0)
-- Dependencies: 302
-- Name: submenus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.submenus_id_seq OWNED BY public.submenus.id;


--
-- TOC entry 255 (class 1259 OID 34618)
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
-- TOC entry 254 (class 1259 OID 34616)
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
-- TOC entry 3577 (class 0 OID 0)
-- Dependencies: 254
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tugasdanfungsis_id_seq OWNED BY public.tugasdanfungsis.id;


--
-- TOC entry 205 (class 1259 OID 34243)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255),
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    jenispemohon integer,
    jenisidentitas integer,
    noidentitas character varying(255),
    alamat character varying(255),
    nohp character varying(255),
    npwp character varying(255),
    pekerjaan character varying(255),
    identitas_file_path character varying(255),
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    two_factor_secret text,
    two_factor_recovery_codes text,
    two_factor_confirmed_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 34241)
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
-- TOC entry 3578 (class 0 OID 0)
-- Dependencies: 204
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 295 (class 1259 OID 34829)
-- Name: videos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.videos (
    id bigint NOT NULL,
    url character varying(255) NOT NULL,
    deskripsi character varying(255),
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.videos OWNER TO postgres;

--
-- TOC entry 294 (class 1259 OID 34827)
-- Name: videos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.videos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.videos_id_seq OWNER TO postgres;

--
-- TOC entry 3579 (class 0 OID 0)
-- Dependencies: 294
-- Name: videos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.videos_id_seq OWNED BY public.videos.id;


--
-- TOC entry 263 (class 1259 OID 34659)
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
-- TOC entry 262 (class 1259 OID 34657)
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
-- TOC entry 3580 (class 0 OID 0)
-- Dependencies: 262
-- Name: visimisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.visimisis_id_seq OWNED BY public.visimisis.id;


--
-- TOC entry 3080 (class 2604 OID 34340)
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 3130 (class 2604 OID 34941)
-- Name: faqs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs ALTER COLUMN id SET DEFAULT nextval('public.faqs_id_seq'::regclass);


--
-- TOC entry 3129 (class 2604 OID 34933)
-- Name: faqs_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs_banner ALTER COLUMN id SET DEFAULT nextval('public.faqs_banner_id_seq'::regclass);


--
-- TOC entry 3110 (class 2604 OID 34725)
-- Name: informasipubliks_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_banner ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_banner_id_seq'::regclass);


--
-- TOC entry 3111 (class 2604 OID 34733)
-- Name: informasipubliks_secaraberkala id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_secaraberkala ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_secaraberkala_id_seq'::regclass);


--
-- TOC entry 3112 (class 2604 OID 34744)
-- Name: informasipubliks_sertamerta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_sertamerta ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_sertamerta_id_seq'::regclass);


--
-- TOC entry 3113 (class 2604 OID 34755)
-- Name: informasipubliks_setiapsaat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_setiapsaat ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_setiapsaat_id_seq'::regclass);


--
-- TOC entry 3118 (class 2604 OID 34810)
-- Name: informasis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis ALTER COLUMN id SET DEFAULT nextval('public.informasis_id_seq'::regclass);


--
-- TOC entry 3119 (class 2604 OID 34821)
-- Name: informasis_image id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis_image ALTER COLUMN id SET DEFAULT nextval('public.informasis_image_id_seq'::regclass);


--
-- TOC entry 3105 (class 2604 OID 34673)
-- Name: kontaks id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks ALTER COLUMN id SET DEFAULT nextval('public.kontaks_id_seq'::regclass);


--
-- TOC entry 3106 (class 2604 OID 34684)
-- Name: kontaks_dokumentasiruangppid id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks_dokumentasiruangppid ALTER COLUMN id SET DEFAULT nextval('public.kontaks_dokumentasiruangppid_id_seq'::regclass);


--
-- TOC entry 3089 (class 2604 OID 34456)
-- Name: laporan_berkala id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala ALTER COLUMN id SET DEFAULT nextval('public.laporan_berkala_id_seq'::regclass);


--
-- TOC entry 3090 (class 2604 OID 34472)
-- Name: laporan_serta_merta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta ALTER COLUMN id SET DEFAULT nextval('public.laporan_serta_merta_id_seq'::regclass);


--
-- TOC entry 3091 (class 2604 OID 34488)
-- Name: laporan_setiap_saat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat ALTER COLUMN id SET DEFAULT nextval('public.laporan_setiap_saat_id_seq'::regclass);


--
-- TOC entry 3125 (class 2604 OID 34892)
-- Name: laporans_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_banner ALTER COLUMN id SET DEFAULT nextval('public.laporans_banner_id_seq'::regclass);


--
-- TOC entry 3128 (class 2604 OID 34922)
-- Name: laporans_hasil_survei id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_hasil_survei ALTER COLUMN id SET DEFAULT nextval('public.laporans_hasil_survei_id_seq'::regclass);


--
-- TOC entry 3127 (class 2604 OID 34911)
-- Name: laporans_tahunan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_tahunan ALTER COLUMN id SET DEFAULT nextval('public.laporans_tahunan_id_seq'::regclass);


--
-- TOC entry 3126 (class 2604 OID 34900)
-- Name: laporans_triwulanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_triwulanan ALTER COLUMN id SET DEFAULT nextval('public.laporans_triwulanan_id_seq'::regclass);


--
-- TOC entry 3122 (class 2604 OID 34854)
-- Name: linkapps id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.linkapps ALTER COLUMN id SET DEFAULT nextval('public.linkapps_id_seq'::regclass);


--
-- TOC entry 3123 (class 2604 OID 34865)
-- Name: mainmenus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mainmenus ALTER COLUMN id SET DEFAULT nextval('public.mainmenus_id_seq'::regclass);


--
-- TOC entry 3079 (class 2604 OID 34329)
-- Name: menus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);


--
-- TOC entry 3075 (class 2604 OID 34238)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 3077 (class 2604 OID 34266)
-- Name: permissions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);


--
-- TOC entry 3082 (class 2604 OID 34354)
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- TOC entry 3096 (class 2604 OID 34568)
-- Name: ppid_biaya id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya ALTER COLUMN id SET DEFAULT nextval('public.ppid_biaya_id_seq'::regclass);


--
-- TOC entry 3093 (class 2604 OID 34520)
-- Name: ppid_faq id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq ALTER COLUMN id SET DEFAULT nextval('public.ppid_faq_id_seq'::regclass);


--
-- TOC entry 3095 (class 2604 OID 34552)
-- Name: ppid_infografis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis ALTER COLUMN id SET DEFAULT nextval('public.ppid_infografis_id_seq'::regclass);


--
-- TOC entry 3084 (class 2604 OID 34379)
-- Name: ppid_jenis_profil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_jenis_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_jenis_profil_id_seq'::regclass);


--
-- TOC entry 3086 (class 2604 OID 34408)
-- Name: ppid_kontak id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak ALTER COLUMN id SET DEFAULT nextval('public.ppid_kontak_id_seq'::regclass);


--
-- TOC entry 3092 (class 2604 OID 34504)
-- Name: ppid_lap_survey id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_survey_id_seq'::regclass);


--
-- TOC entry 3087 (class 2604 OID 34424)
-- Name: ppid_lap_th id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_th_id_seq'::regclass);


--
-- TOC entry 3088 (class 2604 OID 34440)
-- Name: ppid_lap_tw id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_tw_id_seq'::regclass);


--
-- TOC entry 3094 (class 2604 OID 34536)
-- Name: ppid_maklumat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat ALTER COLUMN id SET DEFAULT nextval('public.ppid_maklumat_id_seq'::regclass);


--
-- TOC entry 3083 (class 2604 OID 34368)
-- Name: ppid_menu id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_menu ALTER COLUMN id SET DEFAULT nextval('public.ppid_menu_id_seq'::regclass);


--
-- TOC entry 3085 (class 2604 OID 34387)
-- Name: ppid_profil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_profil_id_seq'::regclass);


--
-- TOC entry 3097 (class 2604 OID 34581)
-- Name: ppid_regulasi id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_id_seq'::regclass);


--
-- TOC entry 3098 (class 2604 OID 34589)
-- Name: ppid_regulasi_peraturan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_peraturan_id_seq'::regclass);


--
-- TOC entry 3099 (class 2604 OID 34610)
-- Name: profilsingkats id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profilsingkats ALTER COLUMN id SET DEFAULT nextval('public.profilsingkats_id_seq'::regclass);


--
-- TOC entry 3107 (class 2604 OID 34695)
-- Name: regulasis_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_banner ALTER COLUMN id SET DEFAULT nextval('public.regulasis_banner_id_seq'::regclass);


--
-- TOC entry 3108 (class 2604 OID 34703)
-- Name: regulasis_peraturankip id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_peraturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_peraturankip_id_seq'::regclass);


--
-- TOC entry 3109 (class 2604 OID 34714)
-- Name: regulasis_rancanganperaturankip id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_rancanganperaturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_rancanganperaturankip_id_seq'::regclass);


--
-- TOC entry 3078 (class 2604 OID 34279)
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


--
-- TOC entry 3117 (class 2604 OID 34799)
-- Name: sliders id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sliders ALTER COLUMN id SET DEFAULT nextval('public.sliders_id_seq'::regclass);


--
-- TOC entry 3121 (class 2604 OID 34843)
-- Name: sosialmedias id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_id_seq'::regclass);


--
-- TOC entry 3116 (class 2604 OID 34788)
-- Name: standarlayanans_biayalayanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_biayalayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_biayalayanan_id_seq'::regclass);


--
-- TOC entry 3114 (class 2604 OID 34766)
-- Name: standarlayanans_maklumat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_maklumat ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_maklumat_id_seq'::regclass);


--
-- TOC entry 3115 (class 2604 OID 34777)
-- Name: standarlayanans_prosedurlayanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_prosedurlayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_prosedurlayanan_id_seq'::regclass);


--
-- TOC entry 3101 (class 2604 OID 34632)
-- Name: strukturorganisasis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_id_seq'::regclass);


--
-- TOC entry 3103 (class 2604 OID 34651)
-- Name: strukturorganisasis_bagankanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankanan ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagankanan_id_seq'::regclass);


--
-- TOC entry 3102 (class 2604 OID 34643)
-- Name: strukturorganisasis_bagankiri id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankiri ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagankiri_id_seq'::regclass);


--
-- TOC entry 3124 (class 2604 OID 34876)
-- Name: submenus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.submenus ALTER COLUMN id SET DEFAULT nextval('public.submenus_id_seq'::regclass);


--
-- TOC entry 3100 (class 2604 OID 34621)
-- Name: tugasdanfungsis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugasdanfungsis ALTER COLUMN id SET DEFAULT nextval('public.tugasdanfungsis_id_seq'::regclass);


--
-- TOC entry 3076 (class 2604 OID 34246)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3120 (class 2604 OID 34832)
-- Name: videos id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.videos ALTER COLUMN id SET DEFAULT nextval('public.videos_id_seq'::regclass);


--
-- TOC entry 3104 (class 2604 OID 34662)
-- Name: visimisis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.visimisis ALTER COLUMN id SET DEFAULT nextval('public.visimisis_id_seq'::regclass);


--
-- TOC entry 3422 (class 0 OID 34337)
-- Dependencies: 217
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- TOC entry 3520 (class 0 OID 34938)
-- Dependencies: 315
-- Data for Name: faqs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.faqs (id, pertanyaan, jawaban, created_at, updated_at) FROM stdin;
1	Apakah persyaratan penyampaian permohonan informasi publik dan pengajuan keberatan?	Melampirkan Kartu Tanda Penduduk untuk pemohon perorangan atau bukti pengesahan badan hukum yang diterbitkan oleh kementerian yang membidangi urusan hukum dan hak asasi manusia untuk pemohon badan hukum Indonesia.	2022-12-01 01:53:29	2022-12-01 01:53:29
2	Siapa yang dapat menyampaikan permohonan informasi publik?	Setiap warga negara Indonesia dan/atau badan hukum Indonesia sebagaimana diatur dalam Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.	2022-12-01 01:53:58	2022-12-01 01:53:58
\.


--
-- TOC entry 3518 (class 0 OID 34930)
-- Dependencies: 313
-- Data for Name: faqs_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.faqs_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/faq/banner/banner.png	2022-12-01 01:52:28	2022-12-01 01:52:28
\.


--
-- TOC entry 3480 (class 0 OID 34722)
-- Dependencies: 275
-- Data for Name: informasipubliks_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/informasiPublik/banner/banner.png	2022-11-29 04:32:19	2022-11-29 04:32:19
\.


--
-- TOC entry 3482 (class 0 OID 34730)
-- Dependencies: 277
-- Data for Name: informasipubliks_secaraberkala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_secaraberkala (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
3	Demografi Pegawai	\N	\N	2022-11-30 15:05:40	2022-11-30 15:05:40
4	Proses Pengadaan Pegawai dan Pengumuman Kelulusan	https://bumn.go.id/career	\N	2022-12-01 01:10:09	2022-12-01 01:10:09
5	Proses Seleksi Jabatan Pimpinan Tinggi Secara Terbuka dan Pengumuman Kelulusan	https://panseljpt.bumn.go.id/	\N	2022-12-01 01:10:35	2022-12-01 01:10:35
6	Daftar Isian Pelaksanan Anggaran (DIPA)	https://bumn.go.id/about/report	\N	2022-12-01 01:10:52	2022-12-01 01:10:52
7	Rencana Kerja dan Anggaran (RKA) Kementerian BUMN	https://bumn.go.id/about/report	\N	2022-12-01 01:11:14	2022-12-01 01:11:14
8	Rencana Strategis (Renstra) Kementerian BUMN	https://bumn.go.id/about/report	\N	2022-12-01 01:11:45	2022-12-01 01:11:45
9	Laporan Kinerja Instansi Pemerintah (LKIP)	https://bumn.go.id/about/report	\N	2022-12-01 01:12:30	2022-12-01 01:12:30
10	Profil Singkat Pejabat Struktural	https://bumn.go.id/about/official	\N	2022-12-01 01:12:43	2022-12-01 01:12:43
11	Laporan Keuangan Kementerian BUMN Audited (BA 041)	https://bumn.go.id/about/report	\N	2022-12-01 01:13:02	2022-12-01 01:13:02
12	Rencana Umum Pengadaan	https://bumn.go.id/procurement	\N	2022-12-01 01:13:55	2022-12-01 01:13:55
13	Laporan Barang Milik Negara Audited	\N	\N	2022-12-01 01:14:04	2022-12-01 01:14:04
\.


--
-- TOC entry 3484 (class 0 OID 34741)
-- Dependencies: 279
-- Data for Name: informasipubliks_sertamerta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_sertamerta (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
1	Informasi Percepatan Penanganan Covid19	https://covid19.go.id/id	\N	2022-12-01 01:35:23	2022-12-01 01:35:23
\.


--
-- TOC entry 3486 (class 0 OID 34752)
-- Dependencies: 281
-- Data for Name: informasipubliks_setiapsaat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_setiapsaat (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
1	Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian BUMN	https://jdih.bumn.go.id/	\N	2022-12-01 01:22:46	2022-12-01 01:22:46
2	Ringkasan Laporan Pengelolaan Whistleblowing System	https://wbs.bumn.go.id/index.php/home	\N	2022-12-01 01:23:03	2022-12-01 01:23:03
3	Berita/Artikel	https://bumn.go.id/media/news	\N	2022-12-01 01:23:16	2022-12-01 01:23:16
4	Siaran Pers	https://bumn.go.id/media/press-conference	\N	2022-12-01 01:23:28	2022-12-01 01:23:28
5	Foto/Video	https://bumn.go.id/media/gallery/photo	\N	2022-12-01 01:23:40	2022-12-01 01:23:40
6	Mekanisme Permohonan Informasi Publik	https://ppid.bumn.go.id/standarlayananprosedure	\N	2022-12-01 01:24:07	2022-12-01 01:24:07
7	Laporan Penerimaan Unjuk Rasa	\N	\N	2022-12-01 01:25:47	2022-12-01 01:25:47
8	Video Profil Kementerian BUMN	https://bumn.go.id/media/gallery/video	\N	2022-12-01 01:26:07	2022-12-01 01:26:07
9	Nota Kesepahaman antar Kementerian/Lembaga yang tidak rahasia	\N	\N	2022-12-01 01:26:17	2022-12-01 01:26:17
10	Daftar Informasi Publik	https://ppid.bumn.go.id/profileinformasipublik	\N	2022-12-01 01:26:44	2022-12-01 01:26:44
11	Informasi Kegiatan Pelayanan Informasi Publik	https://ppid.bumn.go.id/profilelaporan	\N	2022-12-01 01:27:23	2022-12-01 01:27:23
\.


--
-- TOC entry 3496 (class 0 OID 34807)
-- Dependencies: 291
-- Data for Name: informasis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasis (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	adminAssets/home/informasi/ic_informasi_berkala.png	Informasi Berkala	Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala	1	2022-11-30 14:54:47	2022-11-30 14:54:47
2	adminAssets/home/informasi/ic_informasi_sertamerta.png	Informasi Serta Merta	Informasi yang dapat mengancam Hajat Hidup Orang Banyak dan Ketertiban Umum	2	2022-11-30 14:56:06	2022-11-30 14:56:06
3	adminAssets/home/informasi/ic_informasi_setiapsaat.png	Informasi Setiap Saat	Informasi yang Wajib Tersedia Setiap Saat	3	2022-11-30 14:56:41	2022-11-30 14:56:41
\.


--
-- TOC entry 3498 (class 0 OID 34818)
-- Dependencies: 293
-- Data for Name: informasis_image; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasis_image (id, sideimage_path, backgroundimage_path, created_at, updated_at) FROM stdin;
1	adminAssets/home/informasi/sideimage.png	adminAssets/home/informasi/backgroundimage.png	2022-11-30 14:53:12	2022-11-30 14:53:12
\.


--
-- TOC entry 3470 (class 0 OID 34670)
-- Dependencies: 265
-- Data for Name: kontaks; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kontaks (id, alamat, telepon, waktu_pelayanan, banner_path, latitude, longitude, created_at, updated_at, email) FROM stdin;
1	Jl. Medan Merdeka Selatan No. 13 Gambir, Jakarta 10110	(021) 29935678	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Senin - Kamis : Pukul 08.00 - 16.00 WIB</span><br style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: Lato, sans-serif; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: #363636; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Istirahat : Pukul 12.00 - 13.00 WIB</span></li>\r\n<li><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Jumat Pukul 08.00 - 16.00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: Lato, sans-serif; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: #363636; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Istirahat : Pukul 11.30 - 13.30 WIB</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/kontak/banner.png	-6.1814988	106.82522458349823	2022-11-28 19:26:43	2022-11-28 19:26:43	ppid@bumn.go.id
\.


--
-- TOC entry 3472 (class 0 OID 34681)
-- Dependencies: 267
-- Data for Name: kontaks_dokumentasiruangppid; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kontaks_dokumentasiruangppid (id, image_path, keterangan, urutan, created_at, updated_at) FROM stdin;
1	adminAssets/profil/kontak/dokumentasi1.png	1	1	2022-11-28 19:27:17	2022-11-28 19:27:17
2	adminAssets/profil/kontak/dokumentasi2.png	2	2	2022-11-28 19:27:29	2022-11-28 19:27:29
\.


--
-- TOC entry 3438 (class 0 OID 34453)
-- Dependencies: 233
-- Data for Name: laporan_berkala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_berkala (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3440 (class 0 OID 34469)
-- Dependencies: 235
-- Data for Name: laporan_serta_merta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_serta_merta (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3442 (class 0 OID 34485)
-- Dependencies: 237
-- Data for Name: laporan_setiap_saat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_setiap_saat (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3510 (class 0 OID 34889)
-- Dependencies: 305
-- Data for Name: laporans_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/laporan/banner/banner.png	2022-12-01 01:57:46	2022-12-01 01:57:46
\.


--
-- TOC entry 3516 (class 0 OID 34919)
-- Dependencies: 311
-- Data for Name: laporans_hasil_survei; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_hasil_survei (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
1	zzzzz	adminAssets/laporan/laporan_hasil_survei/Desain_Proses_Permohonan-1.pdf	adminAssets/laporan/laporan_hasil_survei/waterfall_river_precipice_137045_3840x2400.jpg	2022-12-01 04:23:11	2022-12-01 04:23:11
\.


--
-- TOC entry 3514 (class 0 OID 34908)
-- Dependencies: 309
-- Data for Name: laporans_tahunan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_tahunan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
1	Laporan Pelayanan Informasi Tahun 2021	adminAssets/laporan/laporan_tahunan/Desain_Proses_Permohonan-1.pdf	adminAssets/laporan/laporan_tahunan/matcha3.png	2022-12-01 03:54:18	2022-12-01 03:54:18
2	zcxcxz	adminAssets/laporan/laporan_tahunan/Desain_Proses_Permohonan-1.pdf	adminAssets/laporan/laporan_tahunan/waterfall_river_precipice_137045_3840x2400.jpg	2022-12-01 03:54:51	2022-12-01 03:54:51
4	zzxczczxc	adminAssets/laporan/laporan_tahunan/Desain_Proses_Permohonan-1.pdf	\N	2022-12-01 03:55:57	2022-12-01 03:55:57
\.


--
-- TOC entry 3512 (class 0 OID 34897)
-- Dependencies: 307
-- Data for Name: laporans_triwulanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_triwulanan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
1	Laporan Pelayanan Informasi Tahun 2021	adminAssets/laporan/laporan_triwulanan/LPPPID2021_opt.pdf	adminAssets/laporan/laporan_triwulanan/waterfall_river_precipice_137045_3840x2400.jpg	2022-12-01 02:16:00	2022-12-01 02:16:00
2	zzzzz	adminAssets/laporan/laporan_triwulanan/Dokumen_teknis.pdf	adminAssets/laporan/laporan_triwulanan/ic_informasi_sertamerta.png	2022-12-01 02:17:32	2022-12-01 02:17:32
3	Laporan Pelayanan Informasi Tahun 2020	adminAssets/laporan/laporan_triwulanan/Desain_Proses_Permohonan-1.pdf	adminAssets/laporan/laporan_triwulanan/matcha3.png	2022-12-01 03:12:08	2022-12-01 03:12:08
4	Laporan Pelayanan Informasi Tahun 2019	adminAssets/laporan/laporan_triwulanan/Desain_Proses_Permohonan-1.pdf	adminAssets/laporan/laporan_triwulanan/alphamon.jpg	2022-12-01 03:13:02	2022-12-01 03:13:02
\.


--
-- TOC entry 3504 (class 0 OID 34851)
-- Dependencies: 299
-- Data for Name: linkapps; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.linkapps (id, icon, url, created_at, updated_at) FROM stdin;
1	adminAssets/home/footer/linkapps/play-store-logo-nisi-filters-australia-11.png	https://play.google.com/store/apps/details?id=tech.arifandi.bumn_ppid	2022-11-30 05:00:58	2022-11-30 05:00:58
\.


--
-- TOC entry 3506 (class 0 OID 34862)
-- Dependencies: 301
-- Data for Name: mainmenus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.mainmenus (id, nama_menu, routing, nama_permission, urutan, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3420 (class 0 OID 34326)
-- Dependencies: 215
-- Data for Name: menus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.menus (id, parent_id, label, icon, status, route_name, "order", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3408 (class 0 OID 34235)
-- Dependencies: 203
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2022_10_21_011702_create_foos_table	1
4	2022_10_23_032325_create_roles_table	1
5	2022_10_23_073819_create_permission_tables	1
6	2022_10_24_032253_create_menus_table	1
7	2014_10_12_200000_add_two_factor_columns_to_users_table	2
8	2019_08_19_000000_create_failed_jobs_table	2
9	2019_12_14_000001_create_personal_access_tokens_table	2
10	2022_11_01_012535_create_frontends_table	2
11	2022_11_10_020102_create_profils_table	2
12	2022_11_15_074109_create_regulasis_table	2
13	2022_11_16_021337_create_informasipubliks_table	2
14	2022_11_16_081654_create_standarlayanans_table	2
15	2022_11_17_094047_users	2
16	2022_11_22_065317_create_homes_table	2
17	2022_11_24_022005_create_manajemenmenus_table	2
18	2022_11_25_020835_create_laporans_table	2
19	2022_11_26_055528_create_faqs_table	2
\.


--
-- TOC entry 3416 (class 0 OID 34287)
-- Dependencies: 211
-- Data for Name: model_has_permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
\.


--
-- TOC entry 3417 (class 0 OID 34298)
-- Dependencies: 212
-- Data for Name: model_has_roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
1	App\\Models\\User	1
2	App\\Models\\User	2
3	App\\Models\\User	3
2	App\\Models\\User	4
2	App\\Models\\User	5
2	App\\Models\\User	6
2	App\\Models\\User	7
\.


--
-- TOC entry 3411 (class 0 OID 34254)
-- Dependencies: 206
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 3413 (class 0 OID 34263)
-- Dependencies: 208
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
1	dashboard.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
2	dashboard.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
3	dashboard.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
4	dashboard.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
5	data permohonan.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
6	data permohonan.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
7	data permohonan.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
8	data permohonan.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
9	data keberatan.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
10	data keberatan.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
11	data keberatan.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
12	data keberatan.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
13	profil singkat ppid.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
14	profil singkat ppid.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
15	profil singkat ppid.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
16	profil singkat ppid.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
17	tugas dan fungsi ppid.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
18	tugas dan fungsi ppid.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
19	tugas dan fungsi ppid.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
20	tugas dan fungsi ppid.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
21	struktur organisasi.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
22	struktur organisasi.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
23	struktur organisasi.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
24	struktur organisasi.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
25	visi dan misi.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
26	visi dan misi.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
27	visi dan misi.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
28	visi dan misi.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
29	kontak.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
30	kontak.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
31	kontak.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
32	kontak.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
33	sosial media.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
34	sosial media.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
35	sosial media.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
36	sosial media.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
37	peraturan kip.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
38	peraturan kip.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
39	peraturan kip.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
40	peraturan kip.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
41	rancangan peraturan kip.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
42	rancangan peraturan kip.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
43	rancangan peraturan kip.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
44	rancangan peraturan kip.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
45	informasi secara berkala.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
46	informasi secara berkala.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
47	informasi secara berkala.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
48	informasi secara berkala.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
49	informasi serta merta.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
50	informasi serta merta.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
51	informasi serta merta.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
52	informasi serta merta.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
53	informasi setiap saat.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
54	informasi setiap saat.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
55	informasi setiap saat.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
56	informasi setiap saat.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
57	laporan triwulanan pip.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
58	laporan triwulanan pip.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
59	laporan triwulanan pip.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
60	laporan triwulanan pip.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
61	laporan tahunan pip.create	web	2022-11-28 18:40:22	2022-11-28 18:40:22
62	laporan tahunan pip.view	web	2022-11-28 18:40:22	2022-11-28 18:40:22
63	laporan tahunan pip.edit	web	2022-11-28 18:40:22	2022-11-28 18:40:22
64	laporan tahunan pip.delete	web	2022-11-28 18:40:22	2022-11-28 18:40:22
65	laporan hasil survei.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
66	laporan hasil survei.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
67	laporan hasil survei.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
68	laporan hasil survei.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
69	maklumat pelayanan.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
70	maklumat pelayanan.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
71	maklumat pelayanan.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
72	maklumat pelayanan.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
73	prosedur pelayanan.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
74	prosedur pelayanan.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
75	prosedur pelayanan.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
76	prosedur pelayanan.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
77	biaya pelayanan.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
78	biaya pelayanan.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
79	biaya pelayanan.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
80	biaya pelayanan.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
81	faq.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
82	faq.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
83	faq.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
84	faq.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
85	user pemohon.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
86	user pemohon.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
87	user pemohon.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
88	user pemohon.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
89	user admin.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
90	user admin.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
91	user admin.edit	web	2022-11-28 18:40:23	2022-11-28 18:40:23
92	user admin.delete	web	2022-11-28 18:40:23	2022-11-28 18:40:23
93	role permission.create	web	2022-11-28 18:40:23	2022-11-28 18:40:23
94	role permission.view	web	2022-11-28 18:40:23	2022-11-28 18:40:23
95	role permission.edit	web	2022-11-28 18:40:24	2022-11-28 18:40:24
96	role permission.delete	web	2022-11-28 18:40:24	2022-11-28 18:40:24
\.


--
-- TOC entry 3424 (class 0 OID 34351)
-- Dependencies: 219
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3452 (class 0 OID 34565)
-- Dependencies: 247
-- Data for Name: ppid_biaya; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_biaya (id, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3446 (class 0 OID 34517)
-- Dependencies: 241
-- Data for Name: ppid_faq; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_faq (id, judul, deskripsi, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3450 (class 0 OID 34549)
-- Dependencies: 245
-- Data for Name: ppid_infografis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_infografis (id, deskripsi, direktori_image, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3428 (class 0 OID 34376)
-- Dependencies: 223
-- Data for Name: ppid_jenis_profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_jenis_profil (id, jenis_profil, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3432 (class 0 OID 34405)
-- Dependencies: 227
-- Data for Name: ppid_kontak; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_kontak (id, nama_data, deskripsi, sisi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3444 (class 0 OID 34501)
-- Dependencies: 239
-- Data for Name: ppid_lap_survey; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_survey (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3434 (class 0 OID 34421)
-- Dependencies: 229
-- Data for Name: ppid_lap_th; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_th (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3436 (class 0 OID 34437)
-- Dependencies: 231
-- Data for Name: ppid_lap_tw; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_tw (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3448 (class 0 OID 34533)
-- Dependencies: 243
-- Data for Name: ppid_maklumat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_maklumat (id, direktori_image, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3426 (class 0 OID 34365)
-- Dependencies: 221
-- Data for Name: ppid_menu; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_menu (id, nama_menu, routing, "order", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3430 (class 0 OID 34384)
-- Dependencies: 225
-- Data for Name: ppid_profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_profil (id, judul, narasi, direktori_image, created_at, updated_at, parent_id, id_ppid_jenis_profil) FROM stdin;
\.


--
-- TOC entry 3454 (class 0 OID 34578)
-- Dependencies: 249
-- Data for Name: ppid_regulasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_regulasi (id, jenis_regulasi, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3456 (class 0 OID 34586)
-- Dependencies: 251
-- Data for Name: ppid_regulasi_peraturan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_regulasi_peraturan (id, nama_regulasi, direktori_file, "order", created_at, updated_at, parent_id, id_jenis_regulasi) FROM stdin;
\.


--
-- TOC entry 3458 (class 0 OID 34607)
-- Dependencies: 253
-- Data for Name: profilsingkats; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.profilsingkats (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
2	Tentang PPID Kementerian BUMN	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style="line-height: 1.4;"><span style="color: #474747; font-family: Lato, sans-serif; font-size: 11pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Sejalan dengan semangat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pelayanan Informasi Publik di lingkungan Kementerian BUMN mengacu pada Peraturan Menteri BUMN Nomor: PER-09/MBU/08/2020 tentang Perubahan Kedua Atas Peraturan Menteri BUMN Nomor: PER-08/MBU/2014 tanggal 30Juni 2014 tentang Pedoman Pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian BUMN, yang di dalamnya mencakup ruang lingkup kewenangan Pelayanan Informasi Publik Kementerian BUMN serta penunjukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Kementerian BUMN. Pemenuhan Pelayanan Informasi Publik di Kementerian BUMN juga mengacu pada Keputusan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Nomor KEP-01/PPID.KBUMN/09/2020 tanggal 8 September 2020 tentang Daftar Informasi Publik di Lingkungan Kementerian BUMN serta Keputusan PPID Nomor KEP-02/PPID.KBUMN/12/2018 Tanggal 21 Desember 2018 dan Daftar Informasi Dikecualikan di lingkungan Kementerian BUMN. Dalam rangka penilaian implementasi keterbukaan informasi Badan Publik tahun 2020, PPID Kementerian BUMN mendapat nilai skor 85.27 dengan kategori Keterbukaan Badan Publik &ldquo;Menuju Informatif&rdquo;. Tentunya hal ini semakin memacu PPID Kementerian BUMN untuk terus meningkatkan kualitas pelayanan informasi publik yang sejalan dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. Selain menerima permohonan secara langsung, PPID Kementerian BUMN juga melayani permohonan informasi yang disampaikan secara tidak langsung. Pada Februari 2021, PPID Kementerian BUMN resmi meluncurkan Aplikasi Mobile PPID sehingga memperkaya kanal informasi yang dapat dimanfaatkan oleh masyarakat untuk mendapatkan informasi publik Kementerian BUMN.</span></p>\r\n</body>\r\n</html>	adminAssets/profil/profil_singkat/banner.png	adminAssets/profil/profil_singkat/sideImage.png	2022-11-28 18:49:55	2022-11-28 18:49:55
\.


--
-- TOC entry 3474 (class 0 OID 34692)
-- Dependencies: 269
-- Data for Name: regulasis_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_banner (id, banner_path, created_at, updated_at, thumbnail_path) FROM stdin;
1	adminAssets/regulasi/banner/banner.png	2022-11-28 19:29:19	2022-12-01 07:18:01	adminAssets/regulasi/banner/thumbnail.png
\.


--
-- TOC entry 3476 (class 0 OID 34700)
-- Dependencies: 271
-- Data for Name: regulasis_peraturankip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_peraturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
2	Peraturan Pemerintah Republik Indonesia Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik	adminAssets/regulasi/peraturan_kip/PP 61 TAHUN 2010.pdf	2	2022-11-30 05:10:57	2022-11-30 05:10:57
3	Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Penyelesaian Sengketa Informasi Publik	adminAssets/regulasi/peraturan_kip/Perki_No.1_Tahun_2013_.pdf	3	2022-11-30 09:48:02	2022-11-30 09:48:02
1	Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik	adminAssets/regulasi/peraturan_kip/UU_No_14_Tahun_2008.pdf	1	2022-11-28 19:31:08	2022-11-30 09:48:08
\.


--
-- TOC entry 3478 (class 0 OID 34711)
-- Dependencies: 273
-- Data for Name: regulasis_rancanganperaturankip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_rancanganperaturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
1	Rancangan Keputusan PPID Kementerian BUMN tentang Daftar Informasi Publik di Lingkungan Kementerian BUMN	adminAssets/regulasi/rancangan_peraturan_kip/Desain_Proses_Permohonan.pdf	1	2022-11-28 19:32:40	2022-11-28 19:32:40
\.


--
-- TOC entry 3418 (class 0 OID 34309)
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
77	3
78	3
79	3
80	3
81	3
82	3
83	3
84	3
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
-- TOC entry 3415 (class 0 OID 34276)
-- Dependencies: 210
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
1	admin	web	2022-11-28 18:40:24	2022-11-28 18:40:24
2	user	web	2022-11-28 18:40:24	2022-11-28 18:40:24
3	super	web	2022-11-28 18:40:24	2022-11-28 18:40:24
\.


--
-- TOC entry 3494 (class 0 OID 34796)
-- Dependencies: 289
-- Data for Name: sliders; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sliders (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	adminAssets/home/slider/carousel-1.jpg	Selamat Datang <br> Di PPID Kementrian BUMN	\N	1	2022-11-30 12:04:48	2022-11-30 14:47:43
2	adminAssets/home/slider/g20real.png	\N	\N	2	2022-11-30 14:49:16	2022-11-30 14:49:16
3	adminAssets/home/slider/kinerja20212.png	\N	\N	3	2022-11-30 14:50:17	2022-11-30 14:50:17
4	adminAssets/home/slider/carousel-2.jpg	Mobile Apps PPID	Akses Informasi Lebih Cepat Dan Mudah	4	2022-11-30 14:50:55	2022-11-30 14:51:54
\.


--
-- TOC entry 3502 (class 0 OID 34840)
-- Dependencies: 297
-- Data for Name: sosialmedias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sosialmedias (id, icon, url, urutan, created_at, updated_at) FROM stdin;
1	adminAssets/home/footer/sosialmedia/instagram1.png	https://www.instagram.com/kementerianbumn/	1	2022-11-30 04:17:32	2022-11-30 04:58:05
2	adminAssets/home/footer/sosialmedia/twitter1.png	https://twitter.com/kemenbumn?lang=en	2	2022-11-30 04:58:37	2022-11-30 04:58:37
3	adminAssets/home/footer/sosialmedia/youtube1.png	https://www.youtube.com/c/KEMENTERIANBUMNRI/videos	3	2022-11-30 04:59:17	2022-11-30 04:59:17
4	adminAssets/home/footer/sosialmedia/facebook1.png	https://www.facebook.com/KementerianBUMNRI/?_rdc=2&_rdr	4	2022-11-30 05:00:30	2022-11-30 05:00:30
\.


--
-- TOC entry 3492 (class 0 OID 34785)
-- Dependencies: 287
-- Data for Name: standarlayanans_biayalayanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_biayalayanan (id, judul, deskripsi, banner_path, direktori_image, created_at, updated_at) FROM stdin;
1	Bebas Biaya	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="color: #000000; font-family: Lato; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Pelayanan Informasi Publik Di Lingkungan Kementerian BUMN&nbsp;</span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: Lato, sans-serif; text-transform: capitalize; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; font-weight: bolder; color: #000000; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Tidak Dipungut Biaya</strong><span style="color: #000000; font-family: Lato; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: capitalize; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">&nbsp;Adapun Biaya Penggandaan Atau Perekaman Yang Timbul Ditanggung Oleh Pemohon Informasi Publik, Kecuali Untuk Informasi Yang Telah Ditentukan Biaya Penerimaan Negara Bukan Pajak (PNBP).</span></p>\r\n</body>\r\n</html>	adminAssets/standarlayanan/biayaLayanan/banner.png	adminAssets/standarlayanan/biayaLayanan/biaya.png	2022-12-01 01:40:03	2022-12-01 01:43:52
\.


--
-- TOC entry 3488 (class 0 OID 34763)
-- Dependencies: 283
-- Data for Name: standarlayanans_maklumat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_maklumat (id, judul, banner_path, direktori_image, created_at, updated_at) FROM stdin;
1	Maklumat PPID Kementerian BUMN	adminAssets/standarlayanan/maklumat/banner.png	adminAssets/standarlayanan/maklumat/maklumat.png	2022-12-01 01:37:40	2022-12-01 01:37:40
\.


--
-- TOC entry 3490 (class 0 OID 34774)
-- Dependencies: 285
-- Data for Name: standarlayanans_prosedurlayanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_prosedurlayanan (id, banner_path, permohonan_direktori_image, keberatan_direktori_image, created_at, updated_at) FROM stdin;
1	adminAssets/standarlayanan/prosedurLayanan/banner/banner.png	adminAssets/standarlayanan/prosedurLayanan/permohonan.png	adminAssets/standarlayanan/prosedurLayanan/keberatan.png	2022-12-01 01:38:13	2022-12-01 01:39:31
\.


--
-- TOC entry 3462 (class 0 OID 34629)
-- Dependencies: 257
-- Data for Name: strukturorganisasis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis (id, judul, banner_path, created_at, updated_at) FROM stdin;
3	Struktur PPID Kementerian BUMN	adminAssets/profil/struktur_organisasi/banner.png	2022-11-28 19:18:24	2022-11-28 19:18:24
\.


--
-- TOC entry 3466 (class 0 OID 34648)
-- Dependencies: 261
-- Data for Name: strukturorganisasis_bagankanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis_bagankanan (id, nomenklatur, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	Atasan PPID	Atasan PPID adalah Pimpinan Tinggi Madya yang merupakan atasan langsung pejabat yang menjadi PPID	1	2022-11-28 19:18:46	2022-11-28 19:18:46
2	PPID	PPID merupakan pejabat struktural yang ditunjuk untuk melaksanakan tugas Pelayanan Informasi kepada publik, PPID memiliki kompetensi di bidang pengelolaan dokumen, pengolahan data, pelayanan informasi dan kehumasan	2	2022-11-28 19:19:12	2022-11-28 19:19:12
3	PPID Pelaksana	PPID Pelaksana dijabat oleh pejabat di masing-masing unit kerja/satuan kerja/unit organisasi/organisasi perangkat daerah/sebutan lainnya	3	2022-11-28 19:19:28	2022-11-28 19:19:28
\.


--
-- TOC entry 3464 (class 0 OID 34640)
-- Dependencies: 259
-- Data for Name: strukturorganisasis_bagankiri; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis_bagankiri (id, nomenklatur, created_at, updated_at) FROM stdin;
1	Menteri BUMN	2022-11-28 19:18:24	2022-11-28 19:18:24
2	Atasan PPID Kementerian BUMN	2022-11-28 19:18:24	2022-11-28 19:18:24
3	PPID Kementerian BUMN	2022-11-28 19:18:24	2022-11-28 19:18:24
\.


--
-- TOC entry 3508 (class 0 OID 34873)
-- Dependencies: 303
-- Data for Name: submenus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.submenus (id, nama_menu, routing, nama_permission, urutan, created_at, updated_at, main_menu_id) FROM stdin;
\.


--
-- TOC entry 3460 (class 0 OID 34618)
-- Dependencies: 255
-- Data for Name: tugasdanfungsis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tugasdanfungsis (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
1	Tugas dan Fungsi PPID Kementerian BUMN	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumpulan seluruh Informasi Publik secara fisik dari setiap unit kerja, meliputi informasi yang wajib disediakan dan diumumkan secara berkala, wajib tersedia setiap saat dan informasi terbuka lainnya yang diminta pemohon Informasi Publik;</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pendataan Informasi Publik yang dikuasai oleh setiap unit kerja di Kementerian BUMN dalam rangka pembuatan dan pemutakhiran Daftar Informasi Publik setelah dimutakhirkan oleh pimpinan masingmasing unit kerja sekurang-kurangnya 1 (satu) kali dalam sebulan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan penyediaan dan pelayanan Informasi Publik melalui pengumuman dan/atau permohonan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumuman Informasi Publik melalui media yang secara efektif dapat menjangkau seluruh pemangku kepentingan;</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/tugas_dan_fungsi/banner.png	adminAssets/profil/tugas_dan_fungsi/sideImage.png	2022-11-28 18:51:18	2022-11-28 18:51:32
\.


--
-- TOC entry 3410 (class 0 OID 34243)
-- Dependencies: 205
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, jenispemohon, jenisidentitas, noidentitas, alamat, nohp, npwp, pekerjaan, identitas_file_path, remember_token, created_at, updated_at, two_factor_secret, two_factor_recovery_codes, two_factor_confirmed_at) FROM stdin;
1	Admin Role	admin@role.test	\N	$2y$10$1gESzXSynp/7eKjjJlil9uLSvmhMmxQ3j4IoTUtd.aQSqEnch3QmK	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-11-28 18:40:27	2022-11-28 18:40:27	\N	\N	\N
2	User Role	user@role.test	\N	$2y$10$7KiiTjHEawDw2UdntaFhK.rlrUT4UrHVThVVb8lGK4HM.VvV1IaHm	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-11-28 18:40:27	2022-11-28 18:40:27	\N	\N	\N
3	Super Role	super@role.test	\N	$2y$10$0BKD1VeGVQIHcFyWqXmp/eHzgUbd54ZCobIKmwxgUMkR4esdr0pVq	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-11-28 18:40:27	2022-11-28 18:40:27	\N	\N	\N
4	\N	tes@tes.tes	\N	$2y$10$0BKD1VeGVQIHcFyWqXmp/eHzgUbd54ZCobIKmwxgUMkR4esdr0pVq	1	1	1234123412341234	aaaa	123412341234	12341234	aaasssaaa	adminAssets/user/identitas/1669705727060jpg	\N	2022-11-29 07:08:47	2022-11-29 07:08:47	\N	\N	\N
5	\N	qwe@qwe.qwe	\N	$2y$10$NzR3lwtQp/vDFSfpoRdf7esgLrQWMutmv/Ht0yt6P7KHSeWiWf8b2	1	1	1234123412341234	aaaaa	1231231231	123412341	aaasssaa	adminAssets/user/identitas/1669706390148png	\N	2022-11-29 07:19:50	2022-11-29 07:19:50	\N	\N	\N
6	\N	zxc@zxc.zxc	\N	$2y$10$nXgmu3P/OdXYhrRUU9kOHudX70qr.sfcXmVfbBHJ5WaF1k2MQGB7m	1	1	4321432143214321	zxc	432143214321	43214321	aaaaa	adminAssets/user/identitas/1669706547196png	\N	2022-11-29 07:22:27	2022-11-29 07:22:27	\N	\N	\N
7	\N	xcv@xcv.xcv	\N	$2y$10$vhMGZMHhZAbynjQx5qdyGO1fF/r5TRRwSn0fkRd41fTnzp2ZsvuNO	1	1	123412341234	xcvxcv	12344321	13245678	asdfg	adminAssets/user/identitas/1669707002292png	\N	2022-11-29 07:30:02	2022-11-29 07:30:02	\N	\N	\N
\.


--
-- TOC entry 3500 (class 0 OID 34829)
-- Dependencies: 295
-- Data for Name: videos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.videos (id, url, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	https://www.youtube.com/embed/l65aJUqkgko	\N	1	2022-11-30 14:59:15	2022-11-30 14:59:15
2	https://www.youtube.com/embed/53agHpqOGj8	\N	2	2022-11-30 14:59:58	2022-11-30 14:59:58
\.


--
-- TOC entry 3468 (class 0 OID 34659)
-- Dependencies: 263
-- Data for Name: visimisis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.visimisis (id, visi, misi, banner_path, created_at, updated_at) FROM stdin;
1	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="color: #000000; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat placerat odio eget congue. Vestibulum pellentesque sem eu dolor egestas pulvinar. Curabitur vitae nulla sed leo semper faucibus eu non nibh. Nullam et dignissim quam. Mauris at metus nisl. Phasellus consectetur, erat vel molestie tristique, lacus tellus porttitor arcu,</span></p>\r\n</body>\r\n</html>	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumpulan seluruh Informasi Publik secara fisik dari setiap unit kerja, meliputi informasi yang wajib disediakan dan diumumkan secara berkala, wajib tersedia setiap saat dan informasi terbuka lainnya yang diminta pemohon Informasi Publik;</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pendataan Informasi Publik yang dikuasai oleh setiap unit kerja di Kementerian BUMN dalam rangka pembuatan dan pemutakhiran Daftar Informasi Publik setelah dimutakhirkan oleh pimpinan masingmasing unit kerja sekurang-kurangnya 1 (satu) kali dalam sebulan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan penyediaan dan pelayanan Informasi Publik melalui pengumuman dan/atau permohonan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumuman Informasi Publik melalui media yang secara efektif dapat menjangkau seluruh pemangku kepentingan;</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/visi_dan_misi/banner.png	2022-11-28 19:21:33	2022-11-28 19:21:33
\.


--
-- TOC entry 3581 (class 0 OID 0)
-- Dependencies: 216
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 3582 (class 0 OID 0)
-- Dependencies: 312
-- Name: faqs_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.faqs_banner_id_seq', 1, true);


--
-- TOC entry 3583 (class 0 OID 0)
-- Dependencies: 314
-- Name: faqs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.faqs_id_seq', 2, true);


--
-- TOC entry 3584 (class 0 OID 0)
-- Dependencies: 274
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_banner_id_seq', 1, true);


--
-- TOC entry 3585 (class 0 OID 0)
-- Dependencies: 276
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_secaraberkala_id_seq', 13, true);


--
-- TOC entry 3586 (class 0 OID 0)
-- Dependencies: 278
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_sertamerta_id_seq', 1, true);


--
-- TOC entry 3587 (class 0 OID 0)
-- Dependencies: 280
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_setiapsaat_id_seq', 11, true);


--
-- TOC entry 3588 (class 0 OID 0)
-- Dependencies: 290
-- Name: informasis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasis_id_seq', 3, true);


--
-- TOC entry 3589 (class 0 OID 0)
-- Dependencies: 292
-- Name: informasis_image_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasis_image_id_seq', 1, true);


--
-- TOC entry 3590 (class 0 OID 0)
-- Dependencies: 266
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kontaks_dokumentasiruangppid_id_seq', 2, true);


--
-- TOC entry 3591 (class 0 OID 0)
-- Dependencies: 264
-- Name: kontaks_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kontaks_id_seq', 1, true);


--
-- TOC entry 3592 (class 0 OID 0)
-- Dependencies: 232
-- Name: laporan_berkala_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_berkala_id_seq', 1, false);


--
-- TOC entry 3593 (class 0 OID 0)
-- Dependencies: 234
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_serta_merta_id_seq', 1, false);


--
-- TOC entry 3594 (class 0 OID 0)
-- Dependencies: 236
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_setiap_saat_id_seq', 1, false);


--
-- TOC entry 3595 (class 0 OID 0)
-- Dependencies: 304
-- Name: laporans_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_banner_id_seq', 1, true);


--
-- TOC entry 3596 (class 0 OID 0)
-- Dependencies: 310
-- Name: laporans_hasil_survei_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_hasil_survei_id_seq', 1, true);


--
-- TOC entry 3597 (class 0 OID 0)
-- Dependencies: 308
-- Name: laporans_tahunan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_tahunan_id_seq', 4, true);


--
-- TOC entry 3598 (class 0 OID 0)
-- Dependencies: 306
-- Name: laporans_triwulanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_triwulanan_id_seq', 4, true);


--
-- TOC entry 3599 (class 0 OID 0)
-- Dependencies: 298
-- Name: linkapps_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.linkapps_id_seq', 1, true);


--
-- TOC entry 3600 (class 0 OID 0)
-- Dependencies: 300
-- Name: mainmenus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.mainmenus_id_seq', 1, false);


--
-- TOC entry 3601 (class 0 OID 0)
-- Dependencies: 214
-- Name: menus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menus_id_seq', 1, false);


--
-- TOC entry 3602 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 19, true);


--
-- TOC entry 3603 (class 0 OID 0)
-- Dependencies: 207
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.permissions_id_seq', 96, true);


--
-- TOC entry 3604 (class 0 OID 0)
-- Dependencies: 218
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- TOC entry 3605 (class 0 OID 0)
-- Dependencies: 246
-- Name: ppid_biaya_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_biaya_id_seq', 1, false);


--
-- TOC entry 3606 (class 0 OID 0)
-- Dependencies: 240
-- Name: ppid_faq_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_faq_id_seq', 1, false);


--
-- TOC entry 3607 (class 0 OID 0)
-- Dependencies: 244
-- Name: ppid_infografis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_infografis_id_seq', 1, false);


--
-- TOC entry 3608 (class 0 OID 0)
-- Dependencies: 222
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_jenis_profil_id_seq', 1, false);


--
-- TOC entry 3609 (class 0 OID 0)
-- Dependencies: 226
-- Name: ppid_kontak_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_kontak_id_seq', 1, false);


--
-- TOC entry 3610 (class 0 OID 0)
-- Dependencies: 238
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_survey_id_seq', 1, false);


--
-- TOC entry 3611 (class 0 OID 0)
-- Dependencies: 228
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_th_id_seq', 1, false);


--
-- TOC entry 3612 (class 0 OID 0)
-- Dependencies: 230
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_tw_id_seq', 1, false);


--
-- TOC entry 3613 (class 0 OID 0)
-- Dependencies: 242
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_maklumat_id_seq', 1, false);


--
-- TOC entry 3614 (class 0 OID 0)
-- Dependencies: 220
-- Name: ppid_menu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_menu_id_seq', 1, false);


--
-- TOC entry 3615 (class 0 OID 0)
-- Dependencies: 224
-- Name: ppid_profil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_profil_id_seq', 1, false);


--
-- TOC entry 3616 (class 0 OID 0)
-- Dependencies: 248
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_regulasi_id_seq', 1, false);


--
-- TOC entry 3617 (class 0 OID 0)
-- Dependencies: 250
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_regulasi_peraturan_id_seq', 1, false);


--
-- TOC entry 3618 (class 0 OID 0)
-- Dependencies: 252
-- Name: profilsingkats_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.profilsingkats_id_seq', 2, true);


--
-- TOC entry 3619 (class 0 OID 0)
-- Dependencies: 268
-- Name: regulasis_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_banner_id_seq', 1, true);


--
-- TOC entry 3620 (class 0 OID 0)
-- Dependencies: 270
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_peraturankip_id_seq', 3, true);


--
-- TOC entry 3621 (class 0 OID 0)
-- Dependencies: 272
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_rancanganperaturankip_id_seq', 1, true);


--
-- TOC entry 3622 (class 0 OID 0)
-- Dependencies: 209
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roles_id_seq', 3, true);


--
-- TOC entry 3623 (class 0 OID 0)
-- Dependencies: 288
-- Name: sliders_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sliders_id_seq', 4, true);


--
-- TOC entry 3624 (class 0 OID 0)
-- Dependencies: 296
-- Name: sosialmedias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sosialmedias_id_seq', 4, true);


--
-- TOC entry 3625 (class 0 OID 0)
-- Dependencies: 286
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_biayalayanan_id_seq', 1, true);


--
-- TOC entry 3626 (class 0 OID 0)
-- Dependencies: 282
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_maklumat_id_seq', 1, true);


--
-- TOC entry 3627 (class 0 OID 0)
-- Dependencies: 284
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_prosedurlayanan_id_seq', 1, true);


--
-- TOC entry 3628 (class 0 OID 0)
-- Dependencies: 260
-- Name: strukturorganisasis_bagankanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_bagankanan_id_seq', 3, true);


--
-- TOC entry 3629 (class 0 OID 0)
-- Dependencies: 258
-- Name: strukturorganisasis_bagankiri_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_bagankiri_id_seq', 3, true);


--
-- TOC entry 3630 (class 0 OID 0)
-- Dependencies: 256
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_id_seq', 3, true);


--
-- TOC entry 3631 (class 0 OID 0)
-- Dependencies: 302
-- Name: submenus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.submenus_id_seq', 1, false);


--
-- TOC entry 3632 (class 0 OID 0)
-- Dependencies: 254
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tugasdanfungsis_id_seq', 1, true);


--
-- TOC entry 3633 (class 0 OID 0)
-- Dependencies: 204
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 7, true);


--
-- TOC entry 3634 (class 0 OID 0)
-- Dependencies: 294
-- Name: videos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.videos_id_seq', 2, true);


--
-- TOC entry 3635 (class 0 OID 0)
-- Dependencies: 262
-- Name: visimisis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.visimisis_id_seq', 1, true);


--
-- TOC entry 3157 (class 2606 OID 34346)
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- TOC entry 3159 (class 2606 OID 34348)
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- TOC entry 3258 (class 2606 OID 34935)
-- Name: faqs_banner faqs_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs_banner
    ADD CONSTRAINT faqs_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3260 (class 2606 OID 34946)
-- Name: faqs faqs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs
    ADD CONSTRAINT faqs_pkey PRIMARY KEY (id);


--
-- TOC entry 3220 (class 2606 OID 34727)
-- Name: informasipubliks_banner informasipubliks_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_banner
    ADD CONSTRAINT informasipubliks_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3222 (class 2606 OID 34738)
-- Name: informasipubliks_secaraberkala informasipubliks_secaraberkala_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_secaraberkala
    ADD CONSTRAINT informasipubliks_secaraberkala_pkey PRIMARY KEY (id);


--
-- TOC entry 3224 (class 2606 OID 34749)
-- Name: informasipubliks_sertamerta informasipubliks_sertamerta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_sertamerta
    ADD CONSTRAINT informasipubliks_sertamerta_pkey PRIMARY KEY (id);


--
-- TOC entry 3226 (class 2606 OID 34760)
-- Name: informasipubliks_setiapsaat informasipubliks_setiapsaat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_setiapsaat
    ADD CONSTRAINT informasipubliks_setiapsaat_pkey PRIMARY KEY (id);


--
-- TOC entry 3238 (class 2606 OID 34826)
-- Name: informasis_image informasis_image_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis_image
    ADD CONSTRAINT informasis_image_pkey PRIMARY KEY (id);


--
-- TOC entry 3236 (class 2606 OID 34815)
-- Name: informasis informasis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis
    ADD CONSTRAINT informasis_pkey PRIMARY KEY (id);


--
-- TOC entry 3212 (class 2606 OID 34689)
-- Name: kontaks_dokumentasiruangppid kontaks_dokumentasiruangppid_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks_dokumentasiruangppid
    ADD CONSTRAINT kontaks_dokumentasiruangppid_pkey PRIMARY KEY (id);


--
-- TOC entry 3210 (class 2606 OID 34678)
-- Name: kontaks kontaks_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks
    ADD CONSTRAINT kontaks_pkey PRIMARY KEY (id);


--
-- TOC entry 3178 (class 2606 OID 34461)
-- Name: laporan_berkala laporan_berkala_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_pkey PRIMARY KEY (id);


--
-- TOC entry 3180 (class 2606 OID 34477)
-- Name: laporan_serta_merta laporan_serta_merta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_pkey PRIMARY KEY (id);


--
-- TOC entry 3182 (class 2606 OID 34493)
-- Name: laporan_setiap_saat laporan_setiap_saat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_pkey PRIMARY KEY (id);


--
-- TOC entry 3250 (class 2606 OID 34894)
-- Name: laporans_banner laporans_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_banner
    ADD CONSTRAINT laporans_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3256 (class 2606 OID 34927)
-- Name: laporans_hasil_survei laporans_hasil_survei_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_hasil_survei
    ADD CONSTRAINT laporans_hasil_survei_pkey PRIMARY KEY (id);


--
-- TOC entry 3254 (class 2606 OID 34916)
-- Name: laporans_tahunan laporans_tahunan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_tahunan
    ADD CONSTRAINT laporans_tahunan_pkey PRIMARY KEY (id);


--
-- TOC entry 3252 (class 2606 OID 34905)
-- Name: laporans_triwulanan laporans_triwulanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_triwulanan
    ADD CONSTRAINT laporans_triwulanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3244 (class 2606 OID 34859)
-- Name: linkapps linkapps_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.linkapps
    ADD CONSTRAINT linkapps_pkey PRIMARY KEY (id);


--
-- TOC entry 3246 (class 2606 OID 34870)
-- Name: mainmenus mainmenus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mainmenus
    ADD CONSTRAINT mainmenus_pkey PRIMARY KEY (id);


--
-- TOC entry 3155 (class 2606 OID 34334)
-- Name: menus menus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);


--
-- TOC entry 3132 (class 2606 OID 34240)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 3148 (class 2606 OID 34297)
-- Name: model_has_permissions model_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);


--
-- TOC entry 3151 (class 2606 OID 34308)
-- Name: model_has_roles model_has_roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);


--
-- TOC entry 3139 (class 2606 OID 34273)
-- Name: permissions permissions_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);


--
-- TOC entry 3141 (class 2606 OID 34271)
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- TOC entry 3161 (class 2606 OID 34359)
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 3163 (class 2606 OID 34362)
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- TOC entry 3192 (class 2606 OID 34570)
-- Name: ppid_biaya ppid_biaya_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_pkey PRIMARY KEY (id);


--
-- TOC entry 3186 (class 2606 OID 34525)
-- Name: ppid_faq ppid_faq_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_pkey PRIMARY KEY (id);


--
-- TOC entry 3190 (class 2606 OID 34557)
-- Name: ppid_infografis ppid_infografis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_pkey PRIMARY KEY (id);


--
-- TOC entry 3168 (class 2606 OID 34381)
-- Name: ppid_jenis_profil ppid_jenis_profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_jenis_profil
    ADD CONSTRAINT ppid_jenis_profil_pkey PRIMARY KEY (id);


--
-- TOC entry 3172 (class 2606 OID 34413)
-- Name: ppid_kontak ppid_kontak_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_pkey PRIMARY KEY (id);


--
-- TOC entry 3184 (class 2606 OID 34509)
-- Name: ppid_lap_survey ppid_lap_survey_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_pkey PRIMARY KEY (id);


--
-- TOC entry 3174 (class 2606 OID 34429)
-- Name: ppid_lap_th ppid_lap_th_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_pkey PRIMARY KEY (id);


--
-- TOC entry 3176 (class 2606 OID 34445)
-- Name: ppid_lap_tw ppid_lap_tw_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_pkey PRIMARY KEY (id);


--
-- TOC entry 3188 (class 2606 OID 34541)
-- Name: ppid_maklumat ppid_maklumat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_pkey PRIMARY KEY (id);


--
-- TOC entry 3166 (class 2606 OID 34373)
-- Name: ppid_menu ppid_menu_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_menu
    ADD CONSTRAINT ppid_menu_pkey PRIMARY KEY (id);


--
-- TOC entry 3170 (class 2606 OID 34392)
-- Name: ppid_profil ppid_profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_pkey PRIMARY KEY (id);


--
-- TOC entry 3196 (class 2606 OID 34594)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_pkey PRIMARY KEY (id);


--
-- TOC entry 3194 (class 2606 OID 34583)
-- Name: ppid_regulasi ppid_regulasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi
    ADD CONSTRAINT ppid_regulasi_pkey PRIMARY KEY (id);


--
-- TOC entry 3198 (class 2606 OID 34615)
-- Name: profilsingkats profilsingkats_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profilsingkats
    ADD CONSTRAINT profilsingkats_pkey PRIMARY KEY (id);


--
-- TOC entry 3214 (class 2606 OID 34697)
-- Name: regulasis_banner regulasis_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_banner
    ADD CONSTRAINT regulasis_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3216 (class 2606 OID 34708)
-- Name: regulasis_peraturankip regulasis_peraturankip_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_peraturankip
    ADD CONSTRAINT regulasis_peraturankip_pkey PRIMARY KEY (id);


--
-- TOC entry 3218 (class 2606 OID 34719)
-- Name: regulasis_rancanganperaturankip regulasis_rancanganperaturankip_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_rancanganperaturankip
    ADD CONSTRAINT regulasis_rancanganperaturankip_pkey PRIMARY KEY (id);


--
-- TOC entry 3153 (class 2606 OID 34323)
-- Name: role_has_permissions role_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);


--
-- TOC entry 3143 (class 2606 OID 34286)
-- Name: roles roles_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);


--
-- TOC entry 3145 (class 2606 OID 34284)
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- TOC entry 3234 (class 2606 OID 34804)
-- Name: sliders sliders_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);


--
-- TOC entry 3242 (class 2606 OID 34848)
-- Name: sosialmedias sosialmedias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias
    ADD CONSTRAINT sosialmedias_pkey PRIMARY KEY (id);


--
-- TOC entry 3232 (class 2606 OID 34793)
-- Name: standarlayanans_biayalayanan standarlayanans_biayalayanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_biayalayanan
    ADD CONSTRAINT standarlayanans_biayalayanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3228 (class 2606 OID 34771)
-- Name: standarlayanans_maklumat standarlayanans_maklumat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_maklumat
    ADD CONSTRAINT standarlayanans_maklumat_pkey PRIMARY KEY (id);


--
-- TOC entry 3230 (class 2606 OID 34782)
-- Name: standarlayanans_prosedurlayanan standarlayanans_prosedurlayanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_prosedurlayanan
    ADD CONSTRAINT standarlayanans_prosedurlayanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3206 (class 2606 OID 34656)
-- Name: strukturorganisasis_bagankanan strukturorganisasis_bagankanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankanan
    ADD CONSTRAINT strukturorganisasis_bagankanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3204 (class 2606 OID 34645)
-- Name: strukturorganisasis_bagankiri strukturorganisasis_bagankiri_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankiri
    ADD CONSTRAINT strukturorganisasis_bagankiri_pkey PRIMARY KEY (id);


--
-- TOC entry 3202 (class 2606 OID 34637)
-- Name: strukturorganisasis strukturorganisasis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis
    ADD CONSTRAINT strukturorganisasis_pkey PRIMARY KEY (id);


--
-- TOC entry 3248 (class 2606 OID 34881)
-- Name: submenus submenus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_pkey PRIMARY KEY (id);


--
-- TOC entry 3200 (class 2606 OID 34626)
-- Name: tugasdanfungsis tugasdanfungsis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugasdanfungsis
    ADD CONSTRAINT tugasdanfungsis_pkey PRIMARY KEY (id);


--
-- TOC entry 3134 (class 2606 OID 34253)
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 3136 (class 2606 OID 34251)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 3240 (class 2606 OID 34837)
-- Name: videos videos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.videos
    ADD CONSTRAINT videos_pkey PRIMARY KEY (id);


--
-- TOC entry 3208 (class 2606 OID 34667)
-- Name: visimisis visimisis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.visimisis
    ADD CONSTRAINT visimisis_pkey PRIMARY KEY (id);


--
-- TOC entry 3146 (class 1259 OID 34290)
-- Name: model_has_permissions_model_id_model_type_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);


--
-- TOC entry 3149 (class 1259 OID 34301)
-- Name: model_has_roles_model_id_model_type_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);


--
-- TOC entry 3137 (class 1259 OID 34260)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 3164 (class 1259 OID 34360)
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- TOC entry 3270 (class 2606 OID 34462)
-- Name: laporan_berkala laporan_berkala_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3271 (class 2606 OID 34478)
-- Name: laporan_serta_merta laporan_serta_merta_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3272 (class 2606 OID 34494)
-- Name: laporan_setiap_saat laporan_setiap_saat_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3261 (class 2606 OID 34291)
-- Name: model_has_permissions model_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- TOC entry 3262 (class 2606 OID 34302)
-- Name: model_has_roles model_has_roles_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- TOC entry 3277 (class 2606 OID 34571)
-- Name: ppid_biaya ppid_biaya_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3274 (class 2606 OID 34526)
-- Name: ppid_faq ppid_faq_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3276 (class 2606 OID 34558)
-- Name: ppid_infografis ppid_infografis_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3267 (class 2606 OID 34414)
-- Name: ppid_kontak ppid_kontak_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3273 (class 2606 OID 34510)
-- Name: ppid_lap_survey ppid_lap_survey_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3268 (class 2606 OID 34430)
-- Name: ppid_lap_th ppid_lap_th_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3269 (class 2606 OID 34446)
-- Name: ppid_lap_tw ppid_lap_tw_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3275 (class 2606 OID 34542)
-- Name: ppid_maklumat ppid_maklumat_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3266 (class 2606 OID 34398)
-- Name: ppid_profil ppid_profil_id_ppid_jenis_profil_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign FOREIGN KEY (id_ppid_jenis_profil) REFERENCES public.ppid_jenis_profil(id);


--
-- TOC entry 3265 (class 2606 OID 34393)
-- Name: ppid_profil ppid_profil_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3279 (class 2606 OID 34600)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_id_jenis_regulasi_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign FOREIGN KEY (id_jenis_regulasi) REFERENCES public.ppid_regulasi(id);


--
-- TOC entry 3278 (class 2606 OID 34595)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3263 (class 2606 OID 34312)
-- Name: role_has_permissions role_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- TOC entry 3264 (class 2606 OID 34317)
-- Name: role_has_permissions role_has_permissions_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- TOC entry 3280 (class 2606 OID 34882)
-- Name: submenus submenus_main_menu_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_main_menu_id_foreign FOREIGN KEY (main_menu_id) REFERENCES public.mainmenus(id);


-- Completed on 2022-12-01 14:22:32

--
-- PostgreSQL database dump complete
--

