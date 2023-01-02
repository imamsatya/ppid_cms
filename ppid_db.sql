--
-- PostgreSQL database dump
--

-- Dumped from database version 12.12
-- Dumped by pg_dump version 12.12

-- Started on 2023-01-02 07:57:47

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
-- TOC entry 204 (class 1259 OID 42546)
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
-- TOC entry 205 (class 1259 OID 42553)
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
-- TOC entry 3763 (class 0 OID 0)
-- Dependencies: 205
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 206 (class 1259 OID 42555)
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
-- TOC entry 207 (class 1259 OID 42561)
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
-- TOC entry 208 (class 1259 OID 42564)
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
-- TOC entry 3764 (class 0 OID 0)
-- Dependencies: 208
-- Name: faqs_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.faqs_banner_id_seq OWNED BY public.faqs_banner.id;


--
-- TOC entry 209 (class 1259 OID 42566)
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
-- TOC entry 3765 (class 0 OID 0)
-- Dependencies: 209
-- Name: faqs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.faqs_id_seq OWNED BY public.faqs.id;


--
-- TOC entry 210 (class 1259 OID 42568)
-- Name: forward_permohonan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.forward_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    forward_by character varying(255) NOT NULL,
    forward_to character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    nota_dinas character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.forward_permohonan OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 42574)
-- Name: forward_permohonan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.forward_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.forward_permohonan_id_seq OWNER TO postgres;

--
-- TOC entry 3766 (class 0 OID 0)
-- Dependencies: 211
-- Name: forward_permohonan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.forward_permohonan_id_seq OWNED BY public.forward_permohonan.id;


--
-- TOC entry 212 (class 1259 OID 42576)
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
-- TOC entry 213 (class 1259 OID 42579)
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
-- TOC entry 3767 (class 0 OID 0)
-- Dependencies: 213
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_banner_id_seq OWNED BY public.informasipubliks_banner.id;


--
-- TOC entry 214 (class 1259 OID 42581)
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
-- TOC entry 215 (class 1259 OID 42587)
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
-- TOC entry 3768 (class 0 OID 0)
-- Dependencies: 215
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_secaraberkala_id_seq OWNED BY public.informasipubliks_secaraberkala.id;


--
-- TOC entry 216 (class 1259 OID 42589)
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
-- TOC entry 217 (class 1259 OID 42595)
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
-- TOC entry 3769 (class 0 OID 0)
-- Dependencies: 217
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_sertamerta_id_seq OWNED BY public.informasipubliks_sertamerta.id;


--
-- TOC entry 218 (class 1259 OID 42597)
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
-- TOC entry 219 (class 1259 OID 42603)
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
-- TOC entry 3770 (class 0 OID 0)
-- Dependencies: 219
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasipubliks_setiapsaat_id_seq OWNED BY public.informasipubliks_setiapsaat.id;


--
-- TOC entry 220 (class 1259 OID 42605)
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
-- TOC entry 221 (class 1259 OID 42611)
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
-- TOC entry 3771 (class 0 OID 0)
-- Dependencies: 221
-- Name: informasis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasis_id_seq OWNED BY public.informasis.id;


--
-- TOC entry 222 (class 1259 OID 42613)
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
-- TOC entry 223 (class 1259 OID 42619)
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
-- TOC entry 3772 (class 0 OID 0)
-- Dependencies: 223
-- Name: informasis_image_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informasis_image_id_seq OWNED BY public.informasis_image.id;


--
-- TOC entry 224 (class 1259 OID 42621)
-- Name: jawab_permohonan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.jawab_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    ket_jawaban text NOT NULL,
    file_jawaban character varying(255),
    jawab_by character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    ket_jawaban_path character varying(255)
);


ALTER TABLE public.jawab_permohonan OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 42627)
-- Name: jawab_permohonan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.jawab_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jawab_permohonan_id_seq OWNER TO postgres;

--
-- TOC entry 3773 (class 0 OID 0)
-- Dependencies: 225
-- Name: jawab_permohonan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.jawab_permohonan_id_seq OWNED BY public.jawab_permohonan.id;


--
-- TOC entry 226 (class 1259 OID 42629)
-- Name: jenis_identitas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.jenis_identitas (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.jenis_identitas OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 42632)
-- Name: jenis_identitas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.jenis_identitas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jenis_identitas_id_seq OWNER TO postgres;

--
-- TOC entry 3774 (class 0 OID 0)
-- Dependencies: 227
-- Name: jenis_identitas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.jenis_identitas_id_seq OWNED BY public.jenis_identitas.id;


--
-- TOC entry 228 (class 1259 OID 42634)
-- Name: jenis_pemohon; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.jenis_pemohon (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.jenis_pemohon OWNER TO postgres;

--
-- TOC entry 229 (class 1259 OID 42637)
-- Name: jenis_pemohon_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.jenis_pemohon_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jenis_pemohon_id_seq OWNER TO postgres;

--
-- TOC entry 3775 (class 0 OID 0)
-- Dependencies: 229
-- Name: jenis_pemohon_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.jenis_pemohon_id_seq OWNED BY public.jenis_pemohon.id;


--
-- TOC entry 349 (class 1259 OID 43739)
-- Name: jenis_status_keberatan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.jenis_status_keberatan (
    id bigint NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.jenis_status_keberatan OWNER TO postgres;

--
-- TOC entry 348 (class 1259 OID 43737)
-- Name: jenis_status_keberatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.jenis_status_keberatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jenis_status_keberatan_id_seq OWNER TO postgres;

--
-- TOC entry 3776 (class 0 OID 0)
-- Dependencies: 348
-- Name: jenis_status_keberatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.jenis_status_keberatan_id_seq OWNED BY public.jenis_status_keberatan.id;


--
-- TOC entry 345 (class 1259 OID 43705)
-- Name: kategori_keberatan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.kategori_keberatan (
    id bigint NOT NULL,
    jenis_keberatan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kategori_keberatan OWNER TO postgres;

--
-- TOC entry 344 (class 1259 OID 43703)
-- Name: kategori_keberatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kategori_keberatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kategori_keberatan_id_seq OWNER TO postgres;

--
-- TOC entry 3777 (class 0 OID 0)
-- Dependencies: 344
-- Name: kategori_keberatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kategori_keberatan_id_seq OWNED BY public.kategori_keberatan.id;


--
-- TOC entry 230 (class 1259 OID 42639)
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
-- TOC entry 231 (class 1259 OID 42645)
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
-- TOC entry 232 (class 1259 OID 42651)
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
-- TOC entry 3778 (class 0 OID 0)
-- Dependencies: 232
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kontaks_dokumentasiruangppid_id_seq OWNED BY public.kontaks_dokumentasiruangppid.id;


--
-- TOC entry 233 (class 1259 OID 42653)
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
-- TOC entry 3779 (class 0 OID 0)
-- Dependencies: 233
-- Name: kontaks_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kontaks_id_seq OWNED BY public.kontaks.id;


--
-- TOC entry 234 (class 1259 OID 42655)
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
-- TOC entry 235 (class 1259 OID 42661)
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
-- TOC entry 3780 (class 0 OID 0)
-- Dependencies: 235
-- Name: laporan_berkala_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_berkala_id_seq OWNED BY public.laporan_berkala.id;


--
-- TOC entry 236 (class 1259 OID 42663)
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
-- TOC entry 237 (class 1259 OID 42669)
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
-- TOC entry 3781 (class 0 OID 0)
-- Dependencies: 237
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_serta_merta_id_seq OWNED BY public.laporan_serta_merta.id;


--
-- TOC entry 238 (class 1259 OID 42671)
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
-- TOC entry 239 (class 1259 OID 42677)
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
-- TOC entry 3782 (class 0 OID 0)
-- Dependencies: 239
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporan_setiap_saat_id_seq OWNED BY public.laporan_setiap_saat.id;


--
-- TOC entry 240 (class 1259 OID 42679)
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
-- TOC entry 241 (class 1259 OID 42682)
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
-- TOC entry 3783 (class 0 OID 0)
-- Dependencies: 241
-- Name: laporans_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_banner_id_seq OWNED BY public.laporans_banner.id;


--
-- TOC entry 242 (class 1259 OID 42684)
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
-- TOC entry 243 (class 1259 OID 42690)
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
-- TOC entry 3784 (class 0 OID 0)
-- Dependencies: 243
-- Name: laporans_hasil_survei_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_hasil_survei_id_seq OWNED BY public.laporans_hasil_survei.id;


--
-- TOC entry 244 (class 1259 OID 42692)
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
-- TOC entry 245 (class 1259 OID 42698)
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
-- TOC entry 3785 (class 0 OID 0)
-- Dependencies: 245
-- Name: laporans_tahunan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_tahunan_id_seq OWNED BY public.laporans_tahunan.id;


--
-- TOC entry 246 (class 1259 OID 42700)
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
-- TOC entry 247 (class 1259 OID 42706)
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
-- TOC entry 3786 (class 0 OID 0)
-- Dependencies: 247
-- Name: laporans_triwulanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.laporans_triwulanan_id_seq OWNED BY public.laporans_triwulanan.id;


--
-- TOC entry 248 (class 1259 OID 42708)
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
-- TOC entry 249 (class 1259 OID 42714)
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
-- TOC entry 3787 (class 0 OID 0)
-- Dependencies: 249
-- Name: linkapps_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.linkapps_id_seq OWNED BY public.linkapps.id;


--
-- TOC entry 250 (class 1259 OID 42716)
-- Name: log_permohonan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.log_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.log_permohonan OWNER TO postgres;

--
-- TOC entry 251 (class 1259 OID 42719)
-- Name: log_permohonan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.log_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.log_permohonan_id_seq OWNER TO postgres;

--
-- TOC entry 3788 (class 0 OID 0)
-- Dependencies: 251
-- Name: log_permohonan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.log_permohonan_id_seq OWNED BY public.log_permohonan.id;


--
-- TOC entry 341 (class 1259 OID 43586)
-- Name: mainmenus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mainmenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255),
    is_active boolean DEFAULT false NOT NULL,
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mainmenus OWNER TO postgres;

--
-- TOC entry 340 (class 1259 OID 43584)
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
-- TOC entry 3789 (class 0 OID 0)
-- Dependencies: 340
-- Name: mainmenus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.mainmenus_id_seq OWNED BY public.mainmenus.id;


--
-- TOC entry 252 (class 1259 OID 42729)
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
-- TOC entry 253 (class 1259 OID 42735)
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
-- TOC entry 3790 (class 0 OID 0)
-- Dependencies: 253
-- Name: menus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;


--
-- TOC entry 203 (class 1259 OID 42515)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 42513)
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
-- TOC entry 3791 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 254 (class 1259 OID 42737)
-- Name: model_has_permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_permissions OWNER TO postgres;

--
-- TOC entry 255 (class 1259 OID 42740)
-- Name: model_has_roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_roles OWNER TO postgres;

--
-- TOC entry 256 (class 1259 OID 42743)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- TOC entry 257 (class 1259 OID 42749)
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
-- TOC entry 258 (class 1259 OID 42755)
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
-- TOC entry 3792 (class 0 OID 0)
-- Dependencies: 258
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;


--
-- TOC entry 259 (class 1259 OID 42757)
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
-- TOC entry 260 (class 1259 OID 42763)
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
-- TOC entry 3793 (class 0 OID 0)
-- Dependencies: 260
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- TOC entry 261 (class 1259 OID 42765)
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
-- TOC entry 262 (class 1259 OID 42768)
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
-- TOC entry 3794 (class 0 OID 0)
-- Dependencies: 262
-- Name: ppid_biaya_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_biaya_id_seq OWNED BY public.ppid_biaya.id;


--
-- TOC entry 263 (class 1259 OID 42770)
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
-- TOC entry 264 (class 1259 OID 42776)
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
-- TOC entry 3795 (class 0 OID 0)
-- Dependencies: 264
-- Name: ppid_faq_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_faq_id_seq OWNED BY public.ppid_faq.id;


--
-- TOC entry 265 (class 1259 OID 42778)
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
-- TOC entry 266 (class 1259 OID 42784)
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
-- TOC entry 3796 (class 0 OID 0)
-- Dependencies: 266
-- Name: ppid_infografis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_infografis_id_seq OWNED BY public.ppid_infografis.id;


--
-- TOC entry 267 (class 1259 OID 42786)
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
-- TOC entry 268 (class 1259 OID 42789)
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
-- TOC entry 3797 (class 0 OID 0)
-- Dependencies: 268
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_jenis_profil_id_seq OWNED BY public.ppid_jenis_profil.id;


--
-- TOC entry 347 (class 1259 OID 43713)
-- Name: ppid_keberatan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_keberatan (
    id bigint NOT NULL,
    ticket_keberatan character varying(255) NOT NULL,
    perihal_keberatan character varying(255) NOT NULL,
    id_kategori_keberatan bigint NOT NULL,
    id_permohonan bigint,
    id_ppid_pendaftar bigint NOT NULL,
    expired_date date,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    jenis_kanal character varying(255) NOT NULL
);


ALTER TABLE public.ppid_keberatan OWNER TO postgres;

--
-- TOC entry 346 (class 1259 OID 43711)
-- Name: ppid_keberatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_keberatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_keberatan_id_seq OWNER TO postgres;

--
-- TOC entry 3798 (class 0 OID 0)
-- Dependencies: 346
-- Name: ppid_keberatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_keberatan_id_seq OWNED BY public.ppid_keberatan.id;


--
-- TOC entry 269 (class 1259 OID 42791)
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
-- TOC entry 270 (class 1259 OID 42797)
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
-- TOC entry 3799 (class 0 OID 0)
-- Dependencies: 270
-- Name: ppid_kontak_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_kontak_id_seq OWNED BY public.ppid_kontak.id;


--
-- TOC entry 271 (class 1259 OID 42799)
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
-- TOC entry 272 (class 1259 OID 42805)
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
-- TOC entry 3800 (class 0 OID 0)
-- Dependencies: 272
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_survey_id_seq OWNED BY public.ppid_lap_survey.id;


--
-- TOC entry 273 (class 1259 OID 42807)
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
-- TOC entry 274 (class 1259 OID 42813)
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
-- TOC entry 3801 (class 0 OID 0)
-- Dependencies: 274
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_th_id_seq OWNED BY public.ppid_lap_th.id;


--
-- TOC entry 275 (class 1259 OID 42815)
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
-- TOC entry 276 (class 1259 OID 42821)
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
-- TOC entry 3802 (class 0 OID 0)
-- Dependencies: 276
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_lap_tw_id_seq OWNED BY public.ppid_lap_tw.id;


--
-- TOC entry 277 (class 1259 OID 42823)
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
-- TOC entry 278 (class 1259 OID 42829)
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
-- TOC entry 3803 (class 0 OID 0)
-- Dependencies: 278
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_maklumat_id_seq OWNED BY public.ppid_maklumat.id;


--
-- TOC entry 279 (class 1259 OID 42831)
-- Name: ppid_memberikan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_memberikan (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.ppid_memberikan OWNER TO postgres;

--
-- TOC entry 280 (class 1259 OID 42834)
-- Name: ppid_memberikan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_memberikan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_memberikan_id_seq OWNER TO postgres;

--
-- TOC entry 3804 (class 0 OID 0)
-- Dependencies: 280
-- Name: ppid_memberikan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_memberikan_id_seq OWNED BY public.ppid_memberikan.id;


--
-- TOC entry 281 (class 1259 OID 42836)
-- Name: ppid_mendapatkan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_mendapatkan (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.ppid_mendapatkan OWNER TO postgres;

--
-- TOC entry 282 (class 1259 OID 42839)
-- Name: ppid_mendapatkan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_mendapatkan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_mendapatkan_id_seq OWNER TO postgres;

--
-- TOC entry 3805 (class 0 OID 0)
-- Dependencies: 282
-- Name: ppid_mendapatkan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_mendapatkan_id_seq OWNED BY public.ppid_mendapatkan.id;


--
-- TOC entry 283 (class 1259 OID 42841)
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
-- TOC entry 284 (class 1259 OID 42847)
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
-- TOC entry 3806 (class 0 OID 0)
-- Dependencies: 284
-- Name: ppid_menu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_menu_id_seq OWNED BY public.ppid_menu.id;


--
-- TOC entry 285 (class 1259 OID 42849)
-- Name: ppid_pendaftar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_pendaftar (
    id bigint NOT NULL,
    nama_lengkap character varying(255) NOT NULL,
    jenis_pemohon bigint NOT NULL,
    jenis_identitas bigint NOT NULL,
    nomor_identitas character varying(255) NOT NULL,
    alamat character varying(255) NOT NULL,
    pekerjaan character varying(255) NOT NULL,
    no_hp character varying(255) NOT NULL,
    npwp character varying(255),
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    status character varying(255),
    identitas_file_path character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.ppid_pendaftar OWNER TO postgres;

--
-- TOC entry 286 (class 1259 OID 42855)
-- Name: ppid_pendaftar_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_pendaftar_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_pendaftar_id_seq OWNER TO postgres;

--
-- TOC entry 3807 (class 0 OID 0)
-- Dependencies: 286
-- Name: ppid_pendaftar_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_pendaftar_id_seq OWNED BY public.ppid_pendaftar.id;


--
-- TOC entry 287 (class 1259 OID 42857)
-- Name: ppid_permohonan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_permohonan (
    id bigint NOT NULL,
    id_ppid_pendaftar bigint NOT NULL,
    ticket_permohonan character varying(255) NOT NULL,
    jenis_kanal character varying(255) NOT NULL,
    informasi_diminta text NOT NULL,
    tujuan_informasi text NOT NULL,
    id_cara bigint NOT NULL,
    id_mendapatkan bigint NOT NULL,
    file_identitas character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    expired_date1 date,
    expired_date2 date
);


ALTER TABLE public.ppid_permohonan OWNER TO postgres;

--
-- TOC entry 288 (class 1259 OID 42863)
-- Name: ppid_permohonan_dkk; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ppid_permohonan_dkk (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.ppid_permohonan_dkk OWNER TO postgres;

--
-- TOC entry 289 (class 1259 OID 42866)
-- Name: ppid_permohonan_dkk_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_permohonan_dkk_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_permohonan_dkk_id_seq OWNER TO postgres;

--
-- TOC entry 3808 (class 0 OID 0)
-- Dependencies: 289
-- Name: ppid_permohonan_dkk_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_permohonan_dkk_id_seq OWNED BY public.ppid_permohonan_dkk.id;


--
-- TOC entry 290 (class 1259 OID 42868)
-- Name: ppid_permohonan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ppid_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ppid_permohonan_id_seq OWNER TO postgres;

--
-- TOC entry 3809 (class 0 OID 0)
-- Dependencies: 290
-- Name: ppid_permohonan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_permohonan_id_seq OWNED BY public.ppid_permohonan.id;


--
-- TOC entry 291 (class 1259 OID 42870)
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
-- TOC entry 292 (class 1259 OID 42876)
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
-- TOC entry 3810 (class 0 OID 0)
-- Dependencies: 292
-- Name: ppid_profil_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_profil_id_seq OWNED BY public.ppid_profil.id;


--
-- TOC entry 293 (class 1259 OID 42878)
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
-- TOC entry 294 (class 1259 OID 42881)
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
-- TOC entry 3811 (class 0 OID 0)
-- Dependencies: 294
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_regulasi_id_seq OWNED BY public.ppid_regulasi.id;


--
-- TOC entry 295 (class 1259 OID 42883)
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
-- TOC entry 296 (class 1259 OID 42889)
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
-- TOC entry 3812 (class 0 OID 0)
-- Dependencies: 296
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ppid_regulasi_peraturan_id_seq OWNED BY public.ppid_regulasi_peraturan.id;


--
-- TOC entry 297 (class 1259 OID 42891)
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
-- TOC entry 298 (class 1259 OID 42897)
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
-- TOC entry 3813 (class 0 OID 0)
-- Dependencies: 298
-- Name: profilsingkats_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.profilsingkats_id_seq OWNED BY public.profilsingkats.id;


--
-- TOC entry 353 (class 1259 OID 43768)
-- Name: proses_keberatan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.proses_keberatan (
    id bigint NOT NULL,
    id_ppid_keberatan bigint NOT NULL,
    ket_jawaban character varying(255) NOT NULL,
    file_jawaban character varying(255),
    jawab_by character varying(255) NOT NULL,
    ket_jawaban_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) with time zone NOT NULL
);


ALTER TABLE public.proses_keberatan OWNER TO postgres;

--
-- TOC entry 352 (class 1259 OID 43766)
-- Name: proses_keberatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.proses_keberatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.proses_keberatan_id_seq OWNER TO postgres;

--
-- TOC entry 3814 (class 0 OID 0)
-- Dependencies: 352
-- Name: proses_keberatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.proses_keberatan_id_seq OWNED BY public.proses_keberatan.id;


--
-- TOC entry 299 (class 1259 OID 42899)
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
-- TOC entry 300 (class 1259 OID 42905)
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
-- TOC entry 3815 (class 0 OID 0)
-- Dependencies: 300
-- Name: regulasis_banner_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_banner_id_seq OWNED BY public.regulasis_banner.id;


--
-- TOC entry 301 (class 1259 OID 42907)
-- Name: regulasis_peraturankip; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.regulasis_peraturankip (
    id bigint NOT NULL,
    judul_peraturan text NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.regulasis_peraturankip OWNER TO postgres;

--
-- TOC entry 302 (class 1259 OID 42913)
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
-- TOC entry 3816 (class 0 OID 0)
-- Dependencies: 302
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_peraturankip_id_seq OWNED BY public.regulasis_peraturankip.id;


--
-- TOC entry 303 (class 1259 OID 42915)
-- Name: regulasis_rancanganperaturankip; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.regulasis_rancanganperaturankip (
    id bigint NOT NULL,
    judul_peraturan text NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.regulasis_rancanganperaturankip OWNER TO postgres;

--
-- TOC entry 304 (class 1259 OID 42921)
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
-- TOC entry 3817 (class 0 OID 0)
-- Dependencies: 304
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.regulasis_rancanganperaturankip_id_seq OWNED BY public.regulasis_rancanganperaturankip.id;


--
-- TOC entry 305 (class 1259 OID 42923)
-- Name: reject_permohonan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.reject_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    id_template_reject bigint NOT NULL,
    file character varying(255) NOT NULL,
    rejected_by character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.reject_permohonan OWNER TO postgres;

--
-- TOC entry 306 (class 1259 OID 42929)
-- Name: reject_permohonan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.reject_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reject_permohonan_id_seq OWNER TO postgres;

--
-- TOC entry 3818 (class 0 OID 0)
-- Dependencies: 306
-- Name: reject_permohonan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.reject_permohonan_id_seq OWNED BY public.reject_permohonan.id;


--
-- TOC entry 307 (class 1259 OID 42931)
-- Name: role_has_permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);


ALTER TABLE public.role_has_permissions OWNER TO postgres;

--
-- TOC entry 308 (class 1259 OID 42934)
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
-- TOC entry 309 (class 1259 OID 42940)
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
-- TOC entry 3819 (class 0 OID 0)
-- Dependencies: 309
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;


--
-- TOC entry 310 (class 1259 OID 42942)
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
-- TOC entry 311 (class 1259 OID 42948)
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
-- TOC entry 3820 (class 0 OID 0)
-- Dependencies: 311
-- Name: sliders_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sliders_id_seq OWNED BY public.sliders.id;


--
-- TOC entry 312 (class 1259 OID 42950)
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
-- TOC entry 313 (class 1259 OID 42956)
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
-- TOC entry 3821 (class 0 OID 0)
-- Dependencies: 313
-- Name: sosialmedias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sosialmedias_id_seq OWNED BY public.sosialmedias.id;


--
-- TOC entry 314 (class 1259 OID 42958)
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
-- TOC entry 315 (class 1259 OID 42964)
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
-- TOC entry 3822 (class 0 OID 0)
-- Dependencies: 315
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_biayalayanan_id_seq OWNED BY public.standarlayanans_biayalayanan.id;


--
-- TOC entry 316 (class 1259 OID 42966)
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
-- TOC entry 317 (class 1259 OID 42972)
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
-- TOC entry 3823 (class 0 OID 0)
-- Dependencies: 317
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_maklumat_id_seq OWNED BY public.standarlayanans_maklumat.id;


--
-- TOC entry 318 (class 1259 OID 42974)
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
-- TOC entry 319 (class 1259 OID 42980)
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
-- TOC entry 3824 (class 0 OID 0)
-- Dependencies: 319
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.standarlayanans_prosedurlayanan_id_seq OWNED BY public.standarlayanans_prosedurlayanan.id;


--
-- TOC entry 320 (class 1259 OID 42982)
-- Name: status; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.status (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.status OWNER TO postgres;

--
-- TOC entry 321 (class 1259 OID 42985)
-- Name: status_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.status_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.status_id_seq OWNER TO postgres;

--
-- TOC entry 3825 (class 0 OID 0)
-- Dependencies: 321
-- Name: status_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.status_id_seq OWNED BY public.status.id;


--
-- TOC entry 351 (class 1259 OID 43747)
-- Name: status_keberatan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.status_keberatan (
    id bigint NOT NULL,
    id_ppid_keberatan bigint NOT NULL,
    id_jenis_status_keberatan bigint NOT NULL,
    modified_date character varying(255),
    modified_by character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.status_keberatan OWNER TO postgres;

--
-- TOC entry 350 (class 1259 OID 43745)
-- Name: status_keberatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.status_keberatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.status_keberatan_id_seq OWNER TO postgres;

--
-- TOC entry 3826 (class 0 OID 0)
-- Dependencies: 350
-- Name: status_keberatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.status_keberatan_id_seq OWNED BY public.status_keberatan.id;


--
-- TOC entry 322 (class 1259 OID 42987)
-- Name: status_permohonan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.status_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    id_status bigint NOT NULL,
    modified_by character varying(255),
    modified_date timestamp(0) without time zone NOT NULL,
    aktif boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.status_permohonan OWNER TO postgres;

--
-- TOC entry 323 (class 1259 OID 42990)
-- Name: status_permohonan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.status_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.status_permohonan_id_seq OWNER TO postgres;

--
-- TOC entry 3827 (class 0 OID 0)
-- Dependencies: 323
-- Name: status_permohonan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.status_permohonan_id_seq OWNED BY public.status_permohonan.id;


--
-- TOC entry 324 (class 1259 OID 42992)
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
-- TOC entry 325 (class 1259 OID 42998)
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
-- TOC entry 326 (class 1259 OID 43004)
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
-- TOC entry 3828 (class 0 OID 0)
-- Dependencies: 326
-- Name: strukturorganisasis_bagankanan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_bagankanan_id_seq OWNED BY public.strukturorganisasis_bagankanan.id;


--
-- TOC entry 327 (class 1259 OID 43006)
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
-- TOC entry 328 (class 1259 OID 43009)
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
-- TOC entry 3829 (class 0 OID 0)
-- Dependencies: 328
-- Name: strukturorganisasis_bagankiri_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_bagankiri_id_seq OWNED BY public.strukturorganisasis_bagankiri.id;


--
-- TOC entry 329 (class 1259 OID 43011)
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
-- TOC entry 3830 (class 0 OID 0)
-- Dependencies: 329
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.strukturorganisasis_id_seq OWNED BY public.strukturorganisasis.id;


--
-- TOC entry 343 (class 1259 OID 43598)
-- Name: submenus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.submenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255),
    is_active boolean DEFAULT false NOT NULL,
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    main_menu_id integer
);


ALTER TABLE public.submenus OWNER TO postgres;

--
-- TOC entry 342 (class 1259 OID 43596)
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
-- TOC entry 3831 (class 0 OID 0)
-- Dependencies: 342
-- Name: submenus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.submenus_id_seq OWNED BY public.submenus.id;


--
-- TOC entry 330 (class 1259 OID 43021)
-- Name: template_reject; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.template_reject (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.template_reject OWNER TO postgres;

--
-- TOC entry 331 (class 1259 OID 43024)
-- Name: template_reject_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.template_reject_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.template_reject_id_seq OWNER TO postgres;

--
-- TOC entry 3832 (class 0 OID 0)
-- Dependencies: 331
-- Name: template_reject_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.template_reject_id_seq OWNED BY public.template_reject.id;


--
-- TOC entry 332 (class 1259 OID 43026)
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
-- TOC entry 333 (class 1259 OID 43032)
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
-- TOC entry 3833 (class 0 OID 0)
-- Dependencies: 333
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tugasdanfungsis_id_seq OWNED BY public.tugasdanfungsis.id;


--
-- TOC entry 334 (class 1259 OID 43034)
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
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 335 (class 1259 OID 43040)
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
-- TOC entry 3834 (class 0 OID 0)
-- Dependencies: 335
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 336 (class 1259 OID 43042)
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
-- TOC entry 337 (class 1259 OID 43048)
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
-- TOC entry 3835 (class 0 OID 0)
-- Dependencies: 337
-- Name: videos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.videos_id_seq OWNED BY public.videos.id;


--
-- TOC entry 338 (class 1259 OID 43050)
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
-- TOC entry 339 (class 1259 OID 43056)
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
-- TOC entry 3836 (class 0 OID 0)
-- Dependencies: 339
-- Name: visimisis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.visimisis_id_seq OWNED BY public.visimisis.id;


--
-- TOC entry 3199 (class 2604 OID 43444)
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 3200 (class 2604 OID 43445)
-- Name: faqs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs ALTER COLUMN id SET DEFAULT nextval('public.faqs_id_seq'::regclass);


--
-- TOC entry 3201 (class 2604 OID 43446)
-- Name: faqs_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs_banner ALTER COLUMN id SET DEFAULT nextval('public.faqs_banner_id_seq'::regclass);


--
-- TOC entry 3202 (class 2604 OID 43447)
-- Name: forward_permohonan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.forward_permohonan ALTER COLUMN id SET DEFAULT nextval('public.forward_permohonan_id_seq'::regclass);


--
-- TOC entry 3203 (class 2604 OID 43448)
-- Name: informasipubliks_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_banner ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_banner_id_seq'::regclass);


--
-- TOC entry 3204 (class 2604 OID 43449)
-- Name: informasipubliks_secaraberkala id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_secaraberkala ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_secaraberkala_id_seq'::regclass);


--
-- TOC entry 3205 (class 2604 OID 43450)
-- Name: informasipubliks_sertamerta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_sertamerta ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_sertamerta_id_seq'::regclass);


--
-- TOC entry 3206 (class 2604 OID 43451)
-- Name: informasipubliks_setiapsaat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_setiapsaat ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_setiapsaat_id_seq'::regclass);


--
-- TOC entry 3207 (class 2604 OID 43452)
-- Name: informasis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis ALTER COLUMN id SET DEFAULT nextval('public.informasis_id_seq'::regclass);


--
-- TOC entry 3208 (class 2604 OID 43453)
-- Name: informasis_image id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis_image ALTER COLUMN id SET DEFAULT nextval('public.informasis_image_id_seq'::regclass);


--
-- TOC entry 3209 (class 2604 OID 43454)
-- Name: jawab_permohonan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jawab_permohonan ALTER COLUMN id SET DEFAULT nextval('public.jawab_permohonan_id_seq'::regclass);


--
-- TOC entry 3210 (class 2604 OID 43455)
-- Name: jenis_identitas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jenis_identitas ALTER COLUMN id SET DEFAULT nextval('public.jenis_identitas_id_seq'::regclass);


--
-- TOC entry 3211 (class 2604 OID 43456)
-- Name: jenis_pemohon id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jenis_pemohon ALTER COLUMN id SET DEFAULT nextval('public.jenis_pemohon_id_seq'::regclass);


--
-- TOC entry 3271 (class 2604 OID 43742)
-- Name: jenis_status_keberatan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jenis_status_keberatan ALTER COLUMN id SET DEFAULT nextval('public.jenis_status_keberatan_id_seq'::regclass);


--
-- TOC entry 3269 (class 2604 OID 43708)
-- Name: kategori_keberatan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kategori_keberatan ALTER COLUMN id SET DEFAULT nextval('public.kategori_keberatan_id_seq'::regclass);


--
-- TOC entry 3212 (class 2604 OID 43457)
-- Name: kontaks id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks ALTER COLUMN id SET DEFAULT nextval('public.kontaks_id_seq'::regclass);


--
-- TOC entry 3213 (class 2604 OID 43458)
-- Name: kontaks_dokumentasiruangppid id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks_dokumentasiruangppid ALTER COLUMN id SET DEFAULT nextval('public.kontaks_dokumentasiruangppid_id_seq'::regclass);


--
-- TOC entry 3214 (class 2604 OID 43459)
-- Name: laporan_berkala id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala ALTER COLUMN id SET DEFAULT nextval('public.laporan_berkala_id_seq'::regclass);


--
-- TOC entry 3215 (class 2604 OID 43460)
-- Name: laporan_serta_merta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta ALTER COLUMN id SET DEFAULT nextval('public.laporan_serta_merta_id_seq'::regclass);


--
-- TOC entry 3216 (class 2604 OID 43461)
-- Name: laporan_setiap_saat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat ALTER COLUMN id SET DEFAULT nextval('public.laporan_setiap_saat_id_seq'::regclass);


--
-- TOC entry 3217 (class 2604 OID 43462)
-- Name: laporans_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_banner ALTER COLUMN id SET DEFAULT nextval('public.laporans_banner_id_seq'::regclass);


--
-- TOC entry 3218 (class 2604 OID 43463)
-- Name: laporans_hasil_survei id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_hasil_survei ALTER COLUMN id SET DEFAULT nextval('public.laporans_hasil_survei_id_seq'::regclass);


--
-- TOC entry 3219 (class 2604 OID 43464)
-- Name: laporans_tahunan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_tahunan ALTER COLUMN id SET DEFAULT nextval('public.laporans_tahunan_id_seq'::regclass);


--
-- TOC entry 3220 (class 2604 OID 43465)
-- Name: laporans_triwulanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_triwulanan ALTER COLUMN id SET DEFAULT nextval('public.laporans_triwulanan_id_seq'::regclass);


--
-- TOC entry 3221 (class 2604 OID 43466)
-- Name: linkapps id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.linkapps ALTER COLUMN id SET DEFAULT nextval('public.linkapps_id_seq'::regclass);


--
-- TOC entry 3222 (class 2604 OID 43467)
-- Name: log_permohonan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.log_permohonan ALTER COLUMN id SET DEFAULT nextval('public.log_permohonan_id_seq'::regclass);


--
-- TOC entry 3265 (class 2604 OID 43589)
-- Name: mainmenus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mainmenus ALTER COLUMN id SET DEFAULT nextval('public.mainmenus_id_seq'::regclass);


--
-- TOC entry 3223 (class 2604 OID 43469)
-- Name: menus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);


--
-- TOC entry 3197 (class 2604 OID 43470)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 3224 (class 2604 OID 43471)
-- Name: permissions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);


--
-- TOC entry 3225 (class 2604 OID 43472)
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- TOC entry 3226 (class 2604 OID 43473)
-- Name: ppid_biaya id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya ALTER COLUMN id SET DEFAULT nextval('public.ppid_biaya_id_seq'::regclass);


--
-- TOC entry 3227 (class 2604 OID 43474)
-- Name: ppid_faq id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq ALTER COLUMN id SET DEFAULT nextval('public.ppid_faq_id_seq'::regclass);


--
-- TOC entry 3228 (class 2604 OID 43475)
-- Name: ppid_infografis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis ALTER COLUMN id SET DEFAULT nextval('public.ppid_infografis_id_seq'::regclass);


--
-- TOC entry 3229 (class 2604 OID 43476)
-- Name: ppid_jenis_profil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_jenis_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_jenis_profil_id_seq'::regclass);


--
-- TOC entry 3270 (class 2604 OID 43716)
-- Name: ppid_keberatan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_keberatan ALTER COLUMN id SET DEFAULT nextval('public.ppid_keberatan_id_seq'::regclass);


--
-- TOC entry 3230 (class 2604 OID 43477)
-- Name: ppid_kontak id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak ALTER COLUMN id SET DEFAULT nextval('public.ppid_kontak_id_seq'::regclass);


--
-- TOC entry 3231 (class 2604 OID 43478)
-- Name: ppid_lap_survey id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_survey_id_seq'::regclass);


--
-- TOC entry 3232 (class 2604 OID 43479)
-- Name: ppid_lap_th id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_th_id_seq'::regclass);


--
-- TOC entry 3233 (class 2604 OID 43480)
-- Name: ppid_lap_tw id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_tw_id_seq'::regclass);


--
-- TOC entry 3234 (class 2604 OID 43481)
-- Name: ppid_maklumat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat ALTER COLUMN id SET DEFAULT nextval('public.ppid_maklumat_id_seq'::regclass);


--
-- TOC entry 3235 (class 2604 OID 43482)
-- Name: ppid_memberikan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_memberikan ALTER COLUMN id SET DEFAULT nextval('public.ppid_memberikan_id_seq'::regclass);


--
-- TOC entry 3236 (class 2604 OID 43483)
-- Name: ppid_mendapatkan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_mendapatkan ALTER COLUMN id SET DEFAULT nextval('public.ppid_mendapatkan_id_seq'::regclass);


--
-- TOC entry 3237 (class 2604 OID 43484)
-- Name: ppid_menu id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_menu ALTER COLUMN id SET DEFAULT nextval('public.ppid_menu_id_seq'::regclass);


--
-- TOC entry 3238 (class 2604 OID 43485)
-- Name: ppid_pendaftar id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_pendaftar ALTER COLUMN id SET DEFAULT nextval('public.ppid_pendaftar_id_seq'::regclass);


--
-- TOC entry 3239 (class 2604 OID 43486)
-- Name: ppid_permohonan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan ALTER COLUMN id SET DEFAULT nextval('public.ppid_permohonan_id_seq'::regclass);


--
-- TOC entry 3240 (class 2604 OID 43487)
-- Name: ppid_permohonan_dkk id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan_dkk ALTER COLUMN id SET DEFAULT nextval('public.ppid_permohonan_dkk_id_seq'::regclass);


--
-- TOC entry 3241 (class 2604 OID 43488)
-- Name: ppid_profil id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_profil_id_seq'::regclass);


--
-- TOC entry 3242 (class 2604 OID 43489)
-- Name: ppid_regulasi id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_id_seq'::regclass);


--
-- TOC entry 3243 (class 2604 OID 43490)
-- Name: ppid_regulasi_peraturan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_peraturan_id_seq'::regclass);


--
-- TOC entry 3244 (class 2604 OID 43491)
-- Name: profilsingkats id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profilsingkats ALTER COLUMN id SET DEFAULT nextval('public.profilsingkats_id_seq'::regclass);


--
-- TOC entry 3273 (class 2604 OID 43771)
-- Name: proses_keberatan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.proses_keberatan ALTER COLUMN id SET DEFAULT nextval('public.proses_keberatan_id_seq'::regclass);


--
-- TOC entry 3245 (class 2604 OID 43492)
-- Name: regulasis_banner id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_banner ALTER COLUMN id SET DEFAULT nextval('public.regulasis_banner_id_seq'::regclass);


--
-- TOC entry 3246 (class 2604 OID 43493)
-- Name: regulasis_peraturankip id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_peraturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_peraturankip_id_seq'::regclass);


--
-- TOC entry 3247 (class 2604 OID 43494)
-- Name: regulasis_rancanganperaturankip id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_rancanganperaturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_rancanganperaturankip_id_seq'::regclass);


--
-- TOC entry 3248 (class 2604 OID 43495)
-- Name: reject_permohonan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reject_permohonan ALTER COLUMN id SET DEFAULT nextval('public.reject_permohonan_id_seq'::regclass);


--
-- TOC entry 3249 (class 2604 OID 43496)
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


--
-- TOC entry 3250 (class 2604 OID 43497)
-- Name: sliders id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sliders ALTER COLUMN id SET DEFAULT nextval('public.sliders_id_seq'::regclass);


--
-- TOC entry 3251 (class 2604 OID 43498)
-- Name: sosialmedias id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_id_seq'::regclass);


--
-- TOC entry 3252 (class 2604 OID 43499)
-- Name: standarlayanans_biayalayanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_biayalayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_biayalayanan_id_seq'::regclass);


--
-- TOC entry 3253 (class 2604 OID 43500)
-- Name: standarlayanans_maklumat id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_maklumat ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_maklumat_id_seq'::regclass);


--
-- TOC entry 3254 (class 2604 OID 43501)
-- Name: standarlayanans_prosedurlayanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_prosedurlayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_prosedurlayanan_id_seq'::regclass);


--
-- TOC entry 3255 (class 2604 OID 43502)
-- Name: status id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status ALTER COLUMN id SET DEFAULT nextval('public.status_id_seq'::regclass);


--
-- TOC entry 3272 (class 2604 OID 43750)
-- Name: status_keberatan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_keberatan ALTER COLUMN id SET DEFAULT nextval('public.status_keberatan_id_seq'::regclass);


--
-- TOC entry 3256 (class 2604 OID 43503)
-- Name: status_permohonan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_permohonan ALTER COLUMN id SET DEFAULT nextval('public.status_permohonan_id_seq'::regclass);


--
-- TOC entry 3257 (class 2604 OID 43504)
-- Name: strukturorganisasis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_id_seq'::regclass);


--
-- TOC entry 3258 (class 2604 OID 43505)
-- Name: strukturorganisasis_bagankanan id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankanan ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagankanan_id_seq'::regclass);


--
-- TOC entry 3259 (class 2604 OID 43506)
-- Name: strukturorganisasis_bagankiri id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankiri ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagankiri_id_seq'::regclass);


--
-- TOC entry 3267 (class 2604 OID 43601)
-- Name: submenus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.submenus ALTER COLUMN id SET DEFAULT nextval('public.submenus_id_seq'::regclass);


--
-- TOC entry 3260 (class 2604 OID 43508)
-- Name: template_reject id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.template_reject ALTER COLUMN id SET DEFAULT nextval('public.template_reject_id_seq'::regclass);


--
-- TOC entry 3261 (class 2604 OID 43509)
-- Name: tugasdanfungsis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugasdanfungsis ALTER COLUMN id SET DEFAULT nextval('public.tugasdanfungsis_id_seq'::regclass);


--
-- TOC entry 3262 (class 2604 OID 43510)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3263 (class 2604 OID 43511)
-- Name: videos id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.videos ALTER COLUMN id SET DEFAULT nextval('public.videos_id_seq'::regclass);


--
-- TOC entry 3264 (class 2604 OID 43512)
-- Name: visimisis id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.visimisis ALTER COLUMN id SET DEFAULT nextval('public.visimisis_id_seq'::regclass);


--
-- TOC entry 3608 (class 0 OID 42546)
-- Dependencies: 204
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- TOC entry 3610 (class 0 OID 42555)
-- Dependencies: 206
-- Data for Name: faqs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.faqs (id, pertanyaan, jawaban, created_at, updated_at) FROM stdin;
1	Apakah persyaratan penyampaian permohonan informasi publik dan pengajuan keberatan?	Melampirkan Kartu Tanda Penduduk untuk pemohon perorangan atau bukti pengesahan badan hukum yang diterbitkan oleh kementerian yang membidangi urusan hukum dan hak asasi manusia untuk pemohon badan hukum Indonesia.	2022-12-01 01:53:29	2022-12-01 01:53:29
2	Siapa yang dapat menyampaikan permohonan informasi publik?	Setiap warga negara Indonesia dan/atau badan hukum Indonesia sebagaimana diatur dalam Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.	2022-12-01 01:53:58	2022-12-01 01:53:58
\.


--
-- TOC entry 3611 (class 0 OID 42561)
-- Dependencies: 207
-- Data for Name: faqs_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.faqs_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/faq/banner/banner.png	2022-12-01 01:52:28	2022-12-01 01:52:28
\.


--
-- TOC entry 3614 (class 0 OID 42568)
-- Dependencies: 210
-- Data for Name: forward_permohonan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.forward_permohonan (id, id_ppid_permohonan, forward_by, forward_to, keterangan, nota_dinas, created_at, updated_at) FROM stdin;
3	11	3	6	<p>ppp 1</p>	ppp 1	2022-12-13 06:26:59	2022-12-13 06:26:59
4	20	7	6	<p>sdfdfs</p>	zzz	2022-12-19 08:14:06	2022-12-19 08:14:06
6	26	7	8	<p>123123</p>	123	2022-12-29 06:25:51	2022-12-29 06:25:51
\.


--
-- TOC entry 3616 (class 0 OID 42576)
-- Dependencies: 212
-- Data for Name: informasipubliks_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/informasiPublik/banner/banner.png	2022-11-29 04:32:19	2022-11-29 04:32:19
\.


--
-- TOC entry 3618 (class 0 OID 42581)
-- Dependencies: 214
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
-- TOC entry 3620 (class 0 OID 42589)
-- Dependencies: 216
-- Data for Name: informasipubliks_sertamerta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_sertamerta (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
1	Informasi Percepatan Penanganan Covid19	https://covid19.go.id/id	\N	2022-12-01 01:35:23	2022-12-01 01:35:23
\.


--
-- TOC entry 3622 (class 0 OID 42597)
-- Dependencies: 218
-- Data for Name: informasipubliks_setiapsaat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasipubliks_setiapsaat (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
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
1	Informasi tentang Peraturan, Keputusan dan/atau Kebijakan kementerian BUMN	https://jdih.bumn.go.id/	adminAssets/informasiPublik/informasi_setiap_saat/PP 61 TAHUN 2010.pdf	2022-12-01 01:22:46	2022-12-23 08:59:25
\.


--
-- TOC entry 3624 (class 0 OID 42605)
-- Dependencies: 220
-- Data for Name: informasis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasis (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	adminAssets/home/informasi/logo-bumn.png	Informasi Berkala	Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala	1	2022-11-30 14:54:47	2022-12-30 03:07:45
3	adminAssets/home/informasi/logo-bumn.png	Informasi Setiap Saat	Informasi yang Wajib Tersedia Setiap Saat	3	2022-11-30 14:56:41	2022-12-30 03:07:56
2	adminAssets/home/informasi/eyeem-153355172.jpg	Informasi Serta Merta	Informasi yang dapat mengancam Hajat Hidup Orang Banyak dan Ketertiban Umum	2	2022-11-30 14:56:06	2022-12-30 14:12:29
\.


--
-- TOC entry 3626 (class 0 OID 42613)
-- Dependencies: 222
-- Data for Name: informasis_image; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informasis_image (id, sideimage_path, backgroundimage_path, created_at, updated_at) FROM stdin;
1	adminAssets/home/informasi/sideimage.png	adminAssets/home/informasi/backgroundimage.png	2022-11-30 14:53:12	2022-11-30 14:53:12
\.


--
-- TOC entry 3628 (class 0 OID 42621)
-- Dependencies: 224
-- Data for Name: jawab_permohonan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.jawab_permohonan (id, id_ppid_permohonan, ket_jawaban, file_jawaban, jawab_by, created_at, updated_at, ket_jawaban_path) FROM stdin;
4	9	<p>tes aa1</p>	\N	3	2022-12-13 06:33:02	2022-12-13 06:33:02	permohonan/jawaban/01-Per-web-12-2022.pdf
5	11	<p>aa 3</p>	permohonan/jawaban/03-Per-web-12-2022-pendukung.png	3	2022-12-13 06:33:24	2022-12-13 06:33:24	permohonan/jawaban/03-Per-web-12-2022.pdf
6	14	<p>j1</p>	\N	3	2022-12-15 07:42:45	2022-12-15 07:42:45	permohonan/jawaban/05-Per-web-12-2022.pdf
7	18	<p>tes tolak</p>	\N	7	2022-12-19 04:31:58	2022-12-19 04:31:58	\N
8	17	<p>zczxczczxc</p>	\N	7	2022-12-22 14:55:50	2022-12-22 14:55:50	permohonan/jawaban/10-Per-web-12-2022.pdf
9	21	<p>111 11 11 111</p>	permohonan/jawaban/11-Per-web-12-2022-pendukung.jpg	7	2022-12-23 14:26:23	2022-12-23 14:26:23	permohonan/jawaban/11-Per-web-12-2022.pdf
10	22	<p>222 22 22 2</p>	\N	7	2022-12-23 14:26:50	2022-12-23 14:26:50	permohonan/jawaban/12-Per-web-12-2022.pdf
11	19	<p>zzzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzz</p>	\N	7	2022-12-23 14:31:01	2022-12-23 14:31:01	permohonan/jawaban/13-Per-web-12-2022.pdf
12	23	<p>bbbb bb bbb</p>	\N	7	2022-12-23 14:35:10	2022-12-23 14:35:10	permohonan/jawaban/14-Per-web-12-2022.pdf
13	26	<p>pppppppppp</p>	\N	8	2022-12-29 06:33:04	2022-12-29 06:33:04	permohonan/jawaban/15-Per-web-12-2022.pdf
\.


--
-- TOC entry 3630 (class 0 OID 42629)
-- Dependencies: 226
-- Data for Name: jenis_identitas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.jenis_identitas (id, name) FROM stdin;
1	KTP/NPWP
2	Surat Kuasa
3	Anggaran Dasar
\.


--
-- TOC entry 3632 (class 0 OID 42634)
-- Dependencies: 228
-- Data for Name: jenis_pemohon; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.jenis_pemohon (id, name) FROM stdin;
1	Perorangan
2	Kelompok Orang
3	Badan Hukum
\.


--
-- TOC entry 3753 (class 0 OID 43739)
-- Dependencies: 349
-- Data for Name: jenis_status_keberatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.jenis_status_keberatan (id, status, created_at, updated_at) FROM stdin;
1	Belum Dikonfirmasi	\N	\N
2	Proses	\N	\N
3	Selesai	\N	\N
\.


--
-- TOC entry 3749 (class 0 OID 43705)
-- Dependencies: 345
-- Data for Name: kategori_keberatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kategori_keberatan (id, jenis_keberatan, created_at, updated_at) FROM stdin;
1	Permohonan Informasi Ditolak	\N	\N
2	Informasi Berkala Tidak Disediakan	\N	\N
3	Permintaan Informasi tidak Ditanggapi	\N	\N
4	Permintaan Informasi Ditanggapi tidak Sebagaimana yang Diminta	\N	\N
5	Permintaan Informasi tidak Dipenuhi	\N	\N
6	Biaya yang Dikenakan tidak Wajar	\N	\N
7	Informasi Disampaikan melebihi jangka waktu yang ditentukan	\N	\N
\.


--
-- TOC entry 3634 (class 0 OID 42639)
-- Dependencies: 230
-- Data for Name: kontaks; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kontaks (id, alamat, telepon, waktu_pelayanan, banner_path, latitude, longitude, created_at, updated_at, email) FROM stdin;
1	Jl. Medan Merdeka Selatan No. 13 Gambir, Jakarta 10110	(021) 29935678	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Senin - Kamis : Pukul 08.00 - 16.00 WIB</span><br style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: Lato, sans-serif; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: #363636; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Istirahat : Pukul 12.00 - 13.00 WIB</span></li>\r\n<li><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Jumat Pukul 08.00 - 16.00</span><br style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: Lato, sans-serif; text-decoration-line: none !important; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; color: #363636; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" /><span style="color: #363636; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Istirahat : Pukul 11.30 - 13.30 WIB</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/kontak/banner.png	-6.1814988	106.82522458349823	2022-11-28 19:26:43	2022-11-28 19:26:43	ppid@bumn.go.id
\.


--
-- TOC entry 3635 (class 0 OID 42645)
-- Dependencies: 231
-- Data for Name: kontaks_dokumentasiruangppid; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kontaks_dokumentasiruangppid (id, image_path, keterangan, urutan, created_at, updated_at) FROM stdin;
4	adminAssets/profil/kontak/dokumentasi2.png	2	2	2022-12-23 07:52:26	2022-12-23 07:52:26
3	adminAssets/profil/kontak/dokumentasi1.jpg	1x	5	2022-12-23 07:52:17	2022-12-30 13:50:01
\.


--
-- TOC entry 3638 (class 0 OID 42655)
-- Dependencies: 234
-- Data for Name: laporan_berkala; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_berkala (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3640 (class 0 OID 42663)
-- Dependencies: 236
-- Data for Name: laporan_serta_merta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_serta_merta (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3642 (class 0 OID 42671)
-- Dependencies: 238
-- Data for Name: laporan_setiap_saat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporan_setiap_saat (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3644 (class 0 OID 42679)
-- Dependencies: 240
-- Data for Name: laporans_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_banner (id, banner_path, created_at, updated_at) FROM stdin;
1	adminAssets/laporan/banner/banner.png	2022-12-01 01:57:46	2022-12-01 01:57:46
\.


--
-- TOC entry 3646 (class 0 OID 42684)
-- Dependencies: 242
-- Data for Name: laporans_hasil_survei; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_hasil_survei (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
2	Laporan Hasil Survei PIP	adminAssets/laporan/laporan_hasil_survei/LPPPID2021_opt-1.pdf	adminAssets/laporan/laporan_hasil_survei/alphamon.jpg	2022-12-23 13:29:04	2022-12-23 13:29:04
\.


--
-- TOC entry 3648 (class 0 OID 42692)
-- Dependencies: 244
-- Data for Name: laporans_tahunan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_tahunan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
5	Laporan Tahunan PIP 1	adminAssets/laporan/laporan_tahunan/LPPPID2021_opt-1.pdf	adminAssets/laporan/laporan_tahunan/matcha3.png	2022-12-23 13:28:01	2022-12-23 13:28:01
\.


--
-- TOC entry 3650 (class 0 OID 42700)
-- Dependencies: 246
-- Data for Name: laporans_triwulanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.laporans_triwulanan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
5	Laporan Pelayanan Informasi Tahun 2021	adminAssets/laporan/laporan_triwulanan/LPPPID2021_opt-1.pdf	adminAssets/laporan/laporan_triwulanan/logo_bumn.png	2022-12-23 13:26:48	2022-12-30 13:58:34
\.


--
-- TOC entry 3652 (class 0 OID 42708)
-- Dependencies: 248
-- Data for Name: linkapps; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.linkapps (id, icon, url, created_at, updated_at) FROM stdin;
1	adminAssets/home/footer/linkapps/play-store-logo-nisi-filters-australia-11.png	https://play.google.com/store/apps/details?id=tech.arifandi.bumn_ppid	2022-11-30 05:00:58	2022-11-30 05:00:58
\.


--
-- TOC entry 3654 (class 0 OID 42716)
-- Dependencies: 250
-- Data for Name: log_permohonan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.log_permohonan (id, id_ppid_permohonan, status, created_at, updated_at) FROM stdin;
13	9	1	2022-12-13 04:49:44	2022-12-13 04:49:44
14	10	1	2022-12-13 04:50:03	2022-12-13 04:50:03
15	9	2	2022-12-13 06:22:53	2022-12-13 06:22:53
16	10	5	2022-12-13 06:23:23	2022-12-13 06:23:23
17	11	1	2022-12-13 06:24:41	2022-12-13 06:24:41
18	11	2	2022-12-13 06:24:54	2022-12-13 06:24:54
19	11	3	2022-12-13 06:26:59	2022-12-13 06:26:59
20	9	4	2022-12-13 06:33:02	2022-12-13 06:33:02
21	11	4	2022-12-13 06:33:24	2022-12-13 06:33:24
23	13	1	2022-12-13 06:41:35	2022-12-13 06:41:35
24	13	2	2022-12-13 06:50:24	2022-12-13 06:50:24
25	14	1	2022-12-15 07:34:19	2022-12-15 07:34:19
26	14	2	2022-12-15 07:36:07	2022-12-15 07:36:07
27	14	4	2022-12-15 07:42:45	2022-12-15 07:42:45
28	15	1	2022-12-15 07:56:05	2022-12-15 07:56:05
29	16	1	2022-12-15 07:56:27	2022-12-15 07:56:27
30	15	2	2022-12-15 07:56:48	2022-12-15 07:56:48
31	16	5	2022-12-15 07:56:56	2022-12-15 07:56:56
32	17	1	2022-12-18 01:12:41	2022-12-18 01:12:41
33	18	1	2022-12-19 03:48:52	2022-12-19 03:48:52
34	19	1	2022-12-19 03:49:10	2022-12-19 03:49:10
35	18	5	2022-12-19 04:31:58	2022-12-19 04:31:58
36	20	1	2022-12-19 04:32:52	2022-12-19 04:32:52
37	20	2	2022-12-19 04:33:39	2022-12-19 04:33:39
38	20	3	2022-12-19 08:14:06	2022-12-19 08:14:06
39	17	5	2022-12-22 14:55:50	2022-12-22 14:55:50
40	21	1	2022-12-23 14:24:41	2022-12-23 14:24:41
41	22	1	2022-12-23 14:24:49	2022-12-23 14:24:49
42	21	2	2022-12-23 14:26:04	2022-12-23 14:26:04
43	21	4	2022-12-23 14:26:23	2022-12-23 14:26:23
44	22	5	2022-12-23 14:26:50	2022-12-23 14:26:50
45	19	5	2022-12-23 14:31:01	2022-12-23 14:31:01
46	23	1	2022-12-23 14:34:49	2022-12-23 14:34:49
47	23	5	2022-12-23 14:35:10	2022-12-23 14:35:10
48	24	1	2022-12-27 04:50:23	2022-12-27 04:50:23
49	25	1	2022-12-27 04:52:51	2022-12-27 04:52:51
50	26	1	2022-12-29 06:23:04	2022-12-29 06:23:04
51	27	1	2022-12-29 06:23:18	2022-12-29 06:23:18
52	28	1	2022-12-29 06:23:29	2022-12-29 06:23:29
53	29	1	2022-12-29 06:23:41	2022-12-29 06:23:41
54	26	2	2022-12-29 06:24:55	2022-12-29 06:24:55
55	26	3	2022-12-29 06:25:51	2022-12-29 06:25:51
56	26	4	2022-12-29 06:33:04	2022-12-29 06:33:04
57	24	2	2022-12-29 09:18:02	2022-12-29 09:18:02
58	29	2	2023-01-01 15:53:04	2023-01-01 15:53:04
59	28	2	2023-01-01 15:53:39	2023-01-01 15:53:39
\.


--
-- TOC entry 3745 (class 0 OID 43586)
-- Dependencies: 341
-- Data for Name: mainmenus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.mainmenus (id, nama_menu, routing, is_active, urutan, created_at, updated_at) FROM stdin;
1	Profil	\N	t	1	\N	\N
2	Regulasi	regulasi.index	t	2	\N	2022-12-15 07:11:46
3	Informasi Publik	informasipublik.index	t	3	\N	2022-12-15 07:11:46
4	Standar Layanan	\N	t	4	\N	2022-12-15 07:11:46
5	Laporan	laporan.index	t	5	\N	2022-12-15 07:12:01
6	FAQ	faq.index	t	6	\N	2022-12-15 07:12:01
\.


--
-- TOC entry 3656 (class 0 OID 42729)
-- Dependencies: 252
-- Data for Name: menus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.menus (id, parent_id, label, icon, status, route_name, "order", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3607 (class 0 OID 42515)
-- Dependencies: 203
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
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
18	2022_11_25_020835_create_laporans_table	2
19	2022_11_26_055528_create_faqs_table	2
20	2014_10_12_000000_create_users_table	3
21	2014_10_12_100000_create_password_resets_table	3
22	2022_10_21_011702_create_foos_table	3
23	2022_10_23_032325_create_roles_table	3
24	2022_10_23_073819_create_permission_tables	3
25	2022_10_24_032253_create_menus_table	3
26	2022_12_01_095604_create_usersppid_table	4
27	2022_12_01_231203_create_ppid_mendapatkan	5
28	2022_12_02_014354_create_ppid_memberikan	5
32	2022_12_02_022118_create_ppid_pendaftar_dkk	6
35	2022_12_02_025337_create_ppid_permohonan_dkk	8
37	2022_11_24_022005_create_manajemenmenus_table	10
39	2022_12_07_233206_create_keberatan_table	11
\.


--
-- TOC entry 3658 (class 0 OID 42737)
-- Dependencies: 254
-- Data for Name: model_has_permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
\.


--
-- TOC entry 3659 (class 0 OID 42740)
-- Dependencies: 255
-- Data for Name: model_has_roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
2	App\\Models\\User	2
3	App\\Models\\User	3
3	App\\Models\\User	4
3	App\\Models\\User	5
4	App\\Models\\User	6
3	App\\Models\\User	7
4	App\\Models\\User	8
\.


--
-- TOC entry 3660 (class 0 OID 42743)
-- Dependencies: 256
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 3661 (class 0 OID 42749)
-- Dependencies: 257
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
1	dashboard.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
2	dashboard.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
3	dashboard.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
4	dashboard.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
5	data permohonan.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
6	data permohonan.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
7	data permohonan.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
8	data permohonan.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
9	data keberatan.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
10	data keberatan.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
11	data keberatan.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
12	data keberatan.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
13	profil singkat ppid.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
14	profil singkat ppid.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
15	profil singkat ppid.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
16	profil singkat ppid.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
17	tugas dan fungsi ppid.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
18	tugas dan fungsi ppid.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
19	tugas dan fungsi ppid.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
20	tugas dan fungsi ppid.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
21	struktur organisasi.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
22	struktur organisasi.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
23	struktur organisasi.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
24	struktur organisasi.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
25	visi dan misi.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
26	visi dan misi.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
27	visi dan misi.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
28	visi dan misi.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
29	kontak.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
30	kontak.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
31	kontak.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
32	kontak.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
33	sosial media.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
34	sosial media.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
35	sosial media.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
36	sosial media.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
37	peraturan kip.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
38	peraturan kip.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
39	peraturan kip.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
40	peraturan kip.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
41	rancangan peraturan kip.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
42	rancangan peraturan kip.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
43	rancangan peraturan kip.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
44	rancangan peraturan kip.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
45	informasi secara berkala.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
46	informasi secara berkala.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
47	informasi secara berkala.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
48	informasi secara berkala.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
49	informasi serta merta.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
50	informasi serta merta.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
51	informasi serta merta.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
52	informasi serta merta.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
53	informasi setiap saat.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
54	informasi setiap saat.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
55	informasi setiap saat.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
56	informasi setiap saat.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
57	laporan triwulanan pip.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
58	laporan triwulanan pip.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
59	laporan triwulanan pip.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
60	laporan triwulanan pip.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
61	laporan tahunan pip.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
62	laporan tahunan pip.view	web	2022-12-01 07:55:24	2022-12-01 07:55:24
63	laporan tahunan pip.edit	web	2022-12-01 07:55:24	2022-12-01 07:55:24
64	laporan tahunan pip.delete	web	2022-12-01 07:55:24	2022-12-01 07:55:24
65	laporan hasil survei.create	web	2022-12-01 07:55:24	2022-12-01 07:55:24
66	laporan hasil survei.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
67	laporan hasil survei.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
68	laporan hasil survei.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
69	maklumat pelayanan.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
70	maklumat pelayanan.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
71	maklumat pelayanan.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
72	maklumat pelayanan.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
73	prosedur pelayanan.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
74	prosedur pelayanan.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
75	prosedur pelayanan.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
76	prosedur pelayanan.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
77	biaya pelayanan.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
78	biaya pelayanan.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
79	biaya pelayanan.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
80	biaya pelayanan.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
81	faq.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
82	faq.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
83	faq.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
84	faq.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
85	user pemohon.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
86	user pemohon.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
87	user pemohon.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
88	user pemohon.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
89	user admin.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
90	user admin.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
91	user admin.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
92	user admin.delete	web	2022-12-01 07:55:25	2022-12-01 07:55:25
93	role permission.create	web	2022-12-01 07:55:25	2022-12-01 07:55:25
94	role permission.view	web	2022-12-01 07:55:25	2022-12-01 07:55:25
95	role permission.edit	web	2022-12-01 07:55:25	2022-12-01 07:55:25
96	role permission.delete	web	2022-12-01 07:55:26	2022-12-01 07:55:26
97	slider.create	web	2022-12-01 07:55:26	2022-12-01 07:55:26
98	slider.view	web	2022-12-01 07:55:26	2022-12-01 07:55:26
99	slider.edit	web	2022-12-01 07:55:26	2022-12-01 07:55:26
100	slider.delete	web	2022-12-01 07:55:26	2022-12-01 07:55:26
101	informasi.create	web	2022-12-01 07:55:26	2022-12-01 07:55:26
102	informasi.view	web	2022-12-01 07:55:26	2022-12-01 07:55:26
103	informasi.edit	web	2022-12-01 07:55:26	2022-12-01 07:55:26
104	informasi.delete	web	2022-12-01 07:55:26	2022-12-01 07:55:26
105	video.create	web	2022-12-01 07:55:26	2022-12-01 07:55:26
106	video.view	web	2022-12-01 07:55:26	2022-12-01 07:55:26
107	video.edit	web	2022-12-01 07:55:26	2022-12-01 07:55:26
108	video.delete	web	2022-12-01 07:55:26	2022-12-01 07:55:26
109	footer.create	web	2022-12-01 07:55:26	2022-12-01 07:55:26
110	footer.view	web	2022-12-01 07:55:26	2022-12-01 07:55:26
111	footer.edit	web	2022-12-01 07:55:26	2022-12-01 07:55:26
112	footer.delete	web	2022-12-01 07:55:26	2022-12-01 07:55:26
\.


--
-- TOC entry 3663 (class 0 OID 42757)
-- Dependencies: 259
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3665 (class 0 OID 42765)
-- Dependencies: 261
-- Data for Name: ppid_biaya; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_biaya (id, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3667 (class 0 OID 42770)
-- Dependencies: 263
-- Data for Name: ppid_faq; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_faq (id, judul, deskripsi, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3669 (class 0 OID 42778)
-- Dependencies: 265
-- Data for Name: ppid_infografis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_infografis (id, deskripsi, direktori_image, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3671 (class 0 OID 42786)
-- Dependencies: 267
-- Data for Name: ppid_jenis_profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_jenis_profil (id, jenis_profil, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3751 (class 0 OID 43713)
-- Dependencies: 347
-- Data for Name: ppid_keberatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_keberatan (id, ticket_keberatan, perihal_keberatan, id_kategori_keberatan, id_permohonan, id_ppid_pendaftar, expired_date, created_at, updated_at, jenis_kanal) FROM stdin;
7	01/Keb-web/12/2022	<p>keb 1</p>	2	\N	1	2023-01-24	2022-12-13 04:50:23	2022-12-14 03:51:04	web
8	02/Keb-web/12/2022	<p>asddsadsadsa</p>	4	9	1	2023-01-24	2022-12-14 01:27:15	2022-12-14 01:27:15	web
12	03/Keb-web/12/2022	<p>aaaaa</p>	1	\N	1	2023-01-24	2022-12-14 03:52:23	2022-12-14 03:52:23	web
11	04/Keb-web/12/2022	<p>tes k3</p>	4	11	1	2023-01-24	2022-12-14 03:51:59	2022-12-14 03:51:59	web
13	05/Keb-web/12/2022	<p>keb1</p>	1	\N	4	2023-01-25	2022-12-15 07:43:53	2022-12-15 07:43:53	web
10	06/Keb-web/12/2022	<p>tes k2</p>	1	\N	1	2023-01-27	2022-12-14 03:43:00	2022-12-14 03:51:31	web
9	07/Keb-web/12/2022	<p>tes k1</p>	2	\N	1	2023-01-27	2022-12-14 03:42:33	2022-12-14 03:51:16	web
16	-	<p>22222 222222</p>	4	11	1	\N	2022-12-20 04:45:11	2022-12-20 04:45:11	web
15	-	<p>111 111 111 x</p>	3	9	1	\N	2022-12-20 04:43:24	2022-12-20 06:27:54	web
17	-	<p>vvvv</p>	3	18	1	\N	2022-12-20 06:29:55	2022-12-20 06:29:55	web
\.


--
-- TOC entry 3673 (class 0 OID 42791)
-- Dependencies: 269
-- Data for Name: ppid_kontak; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_kontak (id, nama_data, deskripsi, sisi, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3675 (class 0 OID 42799)
-- Dependencies: 271
-- Data for Name: ppid_lap_survey; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_survey (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3677 (class 0 OID 42807)
-- Dependencies: 273
-- Data for Name: ppid_lap_th; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_th (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3679 (class 0 OID 42815)
-- Dependencies: 275
-- Data for Name: ppid_lap_tw; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_lap_tw (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3681 (class 0 OID 42823)
-- Dependencies: 277
-- Data for Name: ppid_maklumat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_maklumat (id, direktori_image, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
\.


--
-- TOC entry 3683 (class 0 OID 42831)
-- Dependencies: 279
-- Data for Name: ppid_memberikan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_memberikan (id, name) FROM stdin;
1	Mengambil Langsung
2	Dikirim lewat Pos
3	Email
\.


--
-- TOC entry 3685 (class 0 OID 42836)
-- Dependencies: 281
-- Data for Name: ppid_mendapatkan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_mendapatkan (id, name) FROM stdin;
1	Melihat/Membaca/Mendengar/Mencatat
2	Salinan dalam bentuk Hardcopy
3	Salinan dalam bentuk Softcopy
\.


--
-- TOC entry 3687 (class 0 OID 42841)
-- Dependencies: 283
-- Data for Name: ppid_menu; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_menu (id, nama_menu, routing, "order", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3689 (class 0 OID 42849)
-- Dependencies: 285
-- Data for Name: ppid_pendaftar; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_pendaftar (id, nama_lengkap, jenis_pemohon, jenis_identitas, nomor_identitas, alamat, pekerjaan, no_hp, npwp, email, password, status, identitas_file_path, remember_token, created_at, updated_at) FROM stdin;
2	zzzz	1	1	12341234	aasdads	dasdsadsa	143214321342	1111	asdf@asdf.asd	$2y$10$2l3xXnHOMmgGDVjecuhJ4OlgIuq2Rt5MSejWmo2FQAt4kaV7ETgki	\N	adminAssets/user/identitas/1669953421586.\n.png	\N	2022-12-02 03:57:01	2022-12-02 03:57:01
3	zxxxzx	1	1	1234123412341234	adsdasasddsa	adssdadsa	123412341234	123412341234	wert@wert.qew	$2y$10$YarWlJH1EW74sQVnFnNcfOdhmtxcN5ySyL7uPdxNcjhuX2RLOQYVO	\N	adminAssets/user/identitas/1669955082462.\npng	\N	2022-12-02 04:24:42	2022-12-02 04:24:42
4	tes2	1	1	1234123412341234	tes2	1234	123412341234	12341234	tes2@tes.tes	$2y$10$Oyby0T2q6fKkICsPezE96eHSy05xH/2.LWB8YuaQc4am7x5zlEFjO	\N	adminAssets/user/identitas/1671089120045.png	\N	2022-12-15 07:25:20	2022-12-15 07:25:20
5	zzzz	1	1	1234123412341234	asddsaads	1234	123412341234	12341234	qwer@qwer.qwer	$2y$10$Bpu5boXEWKszCapbZRIUCewBfu2U3Ua7GRV0CZDJsisJTCZ5yU2cu	\N	adminAssets/user/identitas/1671500171452.jpg	\N	2022-12-20 01:36:11	2022-12-20 01:36:11
6	zzzz	1	1	1234123412341234	asddsaads	1234	123412341234	12341234	wer@wer.wer	$2y$10$yT0rGJOtpBZlxdBn8LEYeuOx2W3UYopjBLKAIHA5cBYSNVeYhJQTS	\N	adminAssets/user/identitas/1671500228894.jpg	\N	2022-12-20 01:37:08	2022-12-20 01:37:08
7	zzzz	1	1	1234123412341234	asddsaads	1234	123412341234	12341234	wer1@wer.wer	$2y$10$8AIjYe5e/jDzGgfgUy2BReSXDP7Kr5PfhG0OyKfYOGL66YuFLws.2	\N	adminAssets/user/identitas/1671500354014.jpg	\N	2022-12-20 01:39:14	2022-12-20 01:39:14
8	zzzz	1	1	1234123412341234	asddsaads	1234	123412341234	12341234	wer2@wer.wer	$2y$10$vZjvXl8uV5dxx2GWaiSUaOFGSm3FSGhcbHLUZBOYth8j/bu0NYxB2	\N	adminAssets/user/identitas/1671500480687.jpg	\N	2022-12-20 01:41:20	2022-12-20 01:41:20
9	a	1	1	1234123412341234	a	qa	123412341234	12341234	asd1@asd.asd	$2y$10$neSZgUnBAo3/ukmVn7RJ9OS24nIK66CWgsMjudCxtGeWoRoKdOtF6	\N	adminAssets/user/identitas/1671500715275.jpg	\N	2022-12-20 01:45:15	2022-12-20 01:45:15
10	a	1	1	1234123412341234	a	qa	123412341234	12341234	asd2@asd.asd	$2y$10$oGB330JZ/KCEMOP2ejTBUOtmxU5Wf3QlUl1pt3NRfaO76knQBFSgO	\N	adminAssets/user/identitas/1671500749008.jpg	\N	2022-12-20 01:45:49	2022-12-20 01:45:49
11	123456789	1	1	1234123412341234	123412341234	1234	123412341234	12341234	mnbv@mnbv.mnbv	$2y$10$QF.XljrbiaF76pBhesogtujQ9WXG067UUFVKdifguKmPeOzTWnaYC	\N	adminAssets/user/identitas/12345-1672017274418.jpg	\N	2022-12-26 01:14:34	2022-12-26 01:14:34
12	tes 5	1	1	55555555	555	5	5555666677778888	8888777766665555	tyui@tyu.tyu	$2y$10$/Ibb/xzuW/tM2Gy.ZSpl3uyvz6J5HaliL5rbya9N.5KkW8MjhFV5e	\N	adminAssets/user/identitas/tes 5-1672115545352.jpg	\N	2022-12-27 04:32:25	2022-12-27 04:32:25
13	a	1	1	123456778	1234567	asdfgd	1234567	123456557	mnb@mnb.mnb	$2y$10$b3I2vA9aM/3W7JVcRq/K/uv6fMy7ULIKKeP8Cx.39BNHfO3xj2g4e	\N	adminAssets/user/identitas/a-1672403971451.png	\N	2022-12-27 04:51:56	2022-12-30 12:39:31
15	ssssss sssssss	1	1	2134123213.34213---423432	sssss	sss ss	121221211123	\N	sss@sss.sss	$2y$10$n5Spoqqk2c6p0phz0D0y0Olobf6vtwxhC1y2ZsbDwdvpZW6XJEEHC	\N	adminAssets/user/identitas/sssss-1672443105747.png	\N	2022-12-30 23:31:45	2022-12-30 23:31:45
16	ffff	1	1	123456789.-876854	sdfsdfds	12344	987654321	\N	fff@fff.fff	$2y$10$IgcihD6VR4n1tSrraf2iweTUmJPasDrVo7YZJyFm5oxtU7F/8ambq	\N	adminAssets/user/identitas/ffff-1672443659307.png	\N	2022-12-30 23:40:59	2022-12-30 23:40:59
1	adssadsad	1	1	1234123412341234	adssad	adsasd	123412341234	12341234	asd@asd.asd	$2y$10$44852m25ll5uFGO147ZgI.uCDwj0cM1n5Nhz8ytdKTlcnCBgTiWSG	\N	adminAssets/user/identitas/1669953041119.\npng	\N	2022-12-02 03:50:41	2023-01-01 07:42:58
\.


--
-- TOC entry 3691 (class 0 OID 42857)
-- Dependencies: 287
-- Data for Name: ppid_permohonan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_permohonan (id, id_ppid_pendaftar, ticket_permohonan, jenis_kanal, informasi_diminta, tujuan_informasi, id_cara, id_mendapatkan, file_identitas, created_at, updated_at, expired_date1, expired_date2) FROM stdin;
29	1	17/Per-web/12/2022	web	<p>2222s</p>	<p>22222s</p>	2	3	adminAssets/user/identitas/1669953041119.\npng	2022-12-29 06:23:41	2022-12-29 06:23:41	2023-01-12	2023-01-23
28	1	18/Per-web/12/2022	web	<p>222222</p>	<p>22222222</p>	2	3	adminAssets/user/identitas/1669953041119.\npng	2022-12-29 06:23:29	2022-12-29 06:23:29	2023-01-12	2023-01-23
9	1	01/Per-web/12/2022	web	<p>tes 1</p>	<p>tes 1 a</p>	1	1	adminAssets/user/identitas/1669953041119.png	2022-12-13 04:49:44	2022-12-13 04:49:44	2022-12-26	2023-01-04
10	1	02/Per-web/12/2022	web	<p>tes 2</p>	<p>tes 2 a</p>	3	1	adminAssets/user/identitas/1669953041119.png	2022-12-13 04:50:03	2022-12-13 04:50:03	\N	\N
11	1	03/Per-web/12/2022	web	<p>tes 3</p>	<p>tes 3</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-13 06:24:41	2022-12-13 06:24:41	2022-12-26	2023-01-04
13	1	04/Per-web/12/2022	web	<p>tes 4 eeee</p>	<p>tes 4 eeee</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-13 06:41:35	2022-12-13 06:41:59	2022-12-12	2022-12-01
14	4	05/Per-web/12/2022	web	<p>1</p>	<p>1</p>	1	1	adminAssets/user/identitas/1671089120045.png	2022-12-15 07:34:19	2022-12-15 07:34:19	2022-12-28	2023-01-06
15	1	06/Per-web/12/2022	web	<p>2</p>	<p>2</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-15 07:56:05	2022-12-15 07:56:05	2022-12-28	2023-01-06
16	1	07/Per-web/12/2022	web	<p>3</p>	<p>3</p>	3	3	adminAssets/user/identitas/1669953041119.\npng	2022-12-15 07:56:27	2022-12-15 07:56:27	\N	\N
18	1	08/Per-web/12/2022	web	<p>z</p>	<p>z</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-19 03:48:52	2022-12-19 03:48:52	\N	\N
20	1	09/Per-web/12/2022	web	<p>tes tes</p>	<p>tes tes</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-19 04:32:52	2022-12-19 04:32:52	2022-12-30	2023-01-10
17	1	10/Per-web/12/2022	web	<p>z</p>	<p>z</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-18 01:12:41	2022-12-18 01:12:41	\N	\N
21	1	11/Per-web/12/2022	web	<p>1</p>	<p>1</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-23 14:24:41	2022-12-23 14:24:41	2023-01-05	2023-01-16
22	1	12/Per-web/12/2022	web	<p>2</p>	<p>2</p>	2	2	adminAssets/user/identitas/1669953041119.\npng	2022-12-23 14:24:49	2022-12-23 14:24:49	\N	\N
19	1	13/Per-web/12/2022	web	<p>sadas</p>	<p>asddasdsa</p>	2	2	adminAssets/user/identitas/1669953041119.\npng	2022-12-19 03:49:10	2022-12-19 03:49:10	\N	\N
23	1	14/Per-web/12/2022	web	<p>cccc cc cc</p>	<p>cc ccc cc</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-23 14:34:49	2022-12-23 14:34:49	\N	\N
25	13	-	web	<p>777</p>	<p>777</p>	1	1	adminAssets/user/identitas/a-1672116716351.jpg	2022-12-27 04:52:51	2022-12-27 04:52:51	\N	\N
27	1	-	web	<p>111111111q</p>	<p>1111111q</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-29 06:23:18	2022-12-29 06:23:18	\N	\N
26	1	15/Per-web/12/2022	web	<p>1111111111111</p>	<p>1111111111111111</p>	1	1	adminAssets/user/identitas/1669953041119.\npng	2022-12-29 06:23:04	2022-12-29 06:23:04	2023-01-11	2023-01-20
24	12	16/Per-web/12/2022	web	<p>1</p>	<p>1</p>	1	1	adminAssets/user/identitas/tes 5-1672115545352.jpg	2022-12-27 04:50:23	2022-12-27 04:50:23	2023-01-11	2023-01-20
\.


--
-- TOC entry 3692 (class 0 OID 42863)
-- Dependencies: 288
-- Data for Name: ppid_permohonan_dkk; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_permohonan_dkk (id, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3695 (class 0 OID 42870)
-- Dependencies: 291
-- Data for Name: ppid_profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_profil (id, judul, narasi, direktori_image, created_at, updated_at, parent_id, id_ppid_jenis_profil) FROM stdin;
\.


--
-- TOC entry 3697 (class 0 OID 42878)
-- Dependencies: 293
-- Data for Name: ppid_regulasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_regulasi (id, jenis_regulasi, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3699 (class 0 OID 42883)
-- Dependencies: 295
-- Data for Name: ppid_regulasi_peraturan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ppid_regulasi_peraturan (id, nama_regulasi, direktori_file, "order", created_at, updated_at, parent_id, id_jenis_regulasi) FROM stdin;
\.


--
-- TOC entry 3701 (class 0 OID 42891)
-- Dependencies: 297
-- Data for Name: profilsingkats; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.profilsingkats (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
2	Tentang PPID Kementerian BUMN	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style="line-height: 1.4;"><span style="color: #474747; font-family: Lato, sans-serif; font-size: 11pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Sejalan dengan semangat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pelayanan Informasi Publik di lingkungan Kementerian BUMN mengacu pada Peraturan Menteri BUMN Nomor: PER-09/MBU/08/2020 tentang Perubahan Kedua Atas Peraturan Menteri BUMN Nomor: PER-08/MBU/2014 tanggal 30Juni 2014 tentang Pedoman Pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian BUMN, yang di dalamnya mencakup ruang lingkup kewenangan Pelayanan Informasi Publik Kementerian BUMN serta penunjukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Kementerian BUMN. Pemenuhan Pelayanan Informasi Publik di Kementerian BUMN juga mengacu pada Keputusan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Nomor KEP-01/PPID.KBUMN/09/2020 tanggal 8 September 2020 tentang Daftar Informasi Publik di Lingkungan Kementerian BUMN serta Keputusan PPID Nomor KEP-02/PPID.KBUMN/12/2018 Tanggal 21 Desember 2018 dan Daftar Informasi Dikecualikan di lingkungan Kementerian BUMN. Dalam rangka penilaian implementasi keterbukaan informasi Badan Publik tahun 2020, PPID Kementerian BUMN mendapat nilai skor 85.27 dengan kategori Keterbukaan Badan Publik &ldquo;Menuju Informatif&rdquo;. Tentunya hal ini semakin memacu PPID Kementerian BUMN untuk terus meningkatkan kualitas pelayanan informasi publik yang sejalan dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. Selain menerima permohonan secara langsung, PPID Kementerian BUMN juga melayani permohonan informasi yang disampaikan secara tidak langsung. Pada Februari 2021, PPID Kementerian BUMN resmi meluncurkan Aplikasi Mobile PPID sehingga memperkaya kanal informasi yang dapat dimanfaatkan oleh masyarakat untuk mendapatkan informasi publik Kementerian BUMN.</span></p>\r\n</body>\r\n</html>	adminAssets/profil/profil_singkat/banner.png	adminAssets/profil/profil_singkat/sideImage.jpg	2022-11-28 18:49:55	2022-12-30 11:52:48
\.


--
-- TOC entry 3757 (class 0 OID 43768)
-- Dependencies: 353
-- Data for Name: proses_keberatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.proses_keberatan (id, id_ppid_keberatan, ket_jawaban, file_jawaban, jawab_by, ket_jawaban_path, created_at, updated_at) FROM stdin;
3	7	<p>tes 1 a</p>	\N	3	keberatan/jawaban/01-Keb-web-12-2022.pdf	2022-12-14 06:39:21	2022-12-14 06:39:21+07
4	8	<p>asd keb 2</p>	keberatan/jawaban/02-Keb-web-12-2022-pendukung.jpg	3	keberatan/jawaban/02-Keb-web-12-2022.pdf	2022-12-14 07:21:48	2022-12-14 07:21:48+07
5	13	<p>keb1</p>	\N	3	keberatan/jawaban/05-Keb-web-12-2022.pdf	2022-12-15 07:44:33	2022-12-15 07:44:33+07
6	12	<p>tes sto</p>	keberatan/jawaban/03-Keb-web-12-2022-pendukung.png	7	keberatan/jawaban/03-Keb-web-12-2022.pdf	2022-12-23 14:02:25	2022-12-23 14:02:25+07
7	11	<p>2222 222 222</p>	keberatan/jawaban/04-Keb-web-12-2022-pendukung.jpg	7	keberatan/jawaban/04-Keb-web-12-2022.pdf	2022-12-23 14:18:07	2022-12-23 14:18:07+07
\.


--
-- TOC entry 3703 (class 0 OID 42899)
-- Dependencies: 299
-- Data for Name: regulasis_banner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_banner (id, banner_path, created_at, updated_at, thumbnail_path) FROM stdin;
1	adminAssets/regulasi/banner/banner.png	2022-11-28 19:29:19	2022-12-01 07:18:01	adminAssets/regulasi/banner/thumbnail.png
\.


--
-- TOC entry 3705 (class 0 OID 42907)
-- Dependencies: 301
-- Data for Name: regulasis_peraturankip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_peraturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
4	Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik	adminAssets/regulasi/peraturan_kip/UU_No_14_Tahun_2008.pdf	1	2022-12-23 08:15:07	2022-12-23 08:15:07
\.


--
-- TOC entry 3707 (class 0 OID 42915)
-- Dependencies: 303
-- Data for Name: regulasis_rancanganperaturankip; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.regulasis_rancanganperaturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
2	PP 61 Tahun 2010	adminAssets/regulasi/rancangan_peraturan_kip/PP 61 TAHUN 2010.pdf	1	2022-12-23 08:48:10	2022-12-23 08:48:41
\.


--
-- TOC entry 3709 (class 0 OID 42923)
-- Dependencies: 305
-- Data for Name: reject_permohonan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.reject_permohonan (id, id_ppid_permohonan, id_template_reject, file, rejected_by, created_at, updated_at) FROM stdin;
2	10	1	adminAssets/user/identitas/1669953041119.png	3	2022-12-13 06:23:23	2022-12-13 06:23:23
3	16	1	adminAssets/user/identitas/1669953041119.\npng	3	2022-12-15 07:56:56	2022-12-15 07:56:56
4	18	1	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-19 04:31:58	2022-12-19 04:31:58
5	18	2	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-19 04:31:58	2022-12-19 04:31:58
6	18	3	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-19 04:31:58	2022-12-19 04:31:58
7	17	1	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-22 14:55:50	2022-12-22 14:55:50
8	17	2	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-22 14:55:50	2022-12-22 14:55:50
9	22	1	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-23 14:26:50	2022-12-23 14:26:50
10	22	2	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-23 14:26:50	2022-12-23 14:26:50
11	22	3	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-23 14:26:50	2022-12-23 14:26:50
12	19	1	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-23 14:31:01	2022-12-23 14:31:01
13	19	2	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-23 14:31:01	2022-12-23 14:31:01
14	23	2	adminAssets/user/identitas/1669953041119.\npng	7	2022-12-23 14:35:10	2022-12-23 14:35:10
\.


--
-- TOC entry 3711 (class 0 OID 42931)
-- Dependencies: 307
-- Data for Name: role_has_permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
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
5	4
6	4
7	4
8	4
9	4
10	4
11	4
12	4
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
1	1
2	1
3	1
4	1
5	1
6	1
7	1
8	1
9	1
10	1
11	1
12	1
13	1
14	1
15	1
16	1
17	1
18	1
19	1
20	1
21	1
22	1
23	1
24	1
25	1
26	1
27	1
28	1
29	1
30	1
31	1
32	1
33	1
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
97	3
98	3
99	3
100	3
101	3
102	3
103	3
104	3
105	3
106	3
107	3
108	3
109	3
110	3
111	3
112	3
34	1
35	1
36	1
37	1
38	1
39	1
40	1
41	1
42	1
43	1
44	1
45	1
46	1
47	1
48	1
49	1
50	1
51	1
52	1
53	1
54	1
55	1
56	1
57	1
58	1
59	1
60	1
61	1
62	1
63	1
64	1
65	1
66	1
67	1
68	1
69	1
70	1
71	1
72	1
73	1
74	1
75	1
76	1
77	1
78	1
79	1
80	1
81	1
82	1
83	1
84	1
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
97	1
98	1
99	1
100	1
101	1
102	1
103	1
104	1
105	1
106	1
107	1
108	1
109	1
110	1
111	1
112	1
\.


--
-- TOC entry 3712 (class 0 OID 42934)
-- Dependencies: 308
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
1	admin	web	2022-12-01 07:55:26	2022-12-01 07:55:26
2	user	web	2022-12-01 07:55:26	2022-12-01 07:55:26
3	super	web	2022-12-01 07:55:27	2022-12-01 07:55:27
4	user penghubung	web	2022-12-04 13:10:37	2022-12-04 13:10:37
\.


--
-- TOC entry 3714 (class 0 OID 42942)
-- Dependencies: 310
-- Data for Name: sliders; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sliders (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
5	adminAssets/home/slider/logo-bumn.png	1	1	1	2022-12-23 13:35:49	2022-12-30 03:06:53
7	adminAssets/home/slider/logo-bumn.png	3	3	3	2022-12-23 13:36:07	2022-12-30 03:07:03
6	adminAssets/home/slider/logo-bumn.png	2	2	2	2022-12-23 13:35:58	2022-12-30 03:07:22
8	adminAssets/home/slider/logo-bumn.png	4	4	4	2022-12-23 13:36:22	2022-12-30 03:07:31
\.


--
-- TOC entry 3716 (class 0 OID 42950)
-- Dependencies: 312
-- Data for Name: sosialmedias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sosialmedias (id, icon, url, urutan, created_at, updated_at) FROM stdin;
1	adminAssets/home/footer/sosialmedia/instagram1.png	https://www.instagram.com/kementerianbumn/	1	2022-11-30 04:17:32	2022-11-30 04:58:05
2	adminAssets/home/footer/sosialmedia/twitter1.png	https://twitter.com/kemenbumn?lang=en	2	2022-11-30 04:58:37	2022-11-30 04:58:37
3	adminAssets/home/footer/sosialmedia/youtube1.png	https://www.youtube.com/c/KEMENTERIANBUMNRI/videos	3	2022-11-30 04:59:17	2022-11-30 04:59:17
4	adminAssets/home/footer/sosialmedia/facebook1.png	https://www.facebook.com/KementerianBUMNRI/?_rdc=2&_rdr	4	2022-11-30 05:00:30	2022-11-30 05:00:30
\.


--
-- TOC entry 3718 (class 0 OID 42958)
-- Dependencies: 314
-- Data for Name: standarlayanans_biayalayanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_biayalayanan (id, judul, deskripsi, banner_path, direktori_image, created_at, updated_at) FROM stdin;
1	Bebas Biaya xxxx	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>pelayanan informasi publik xxxxx</p>\r\n</body>\r\n</html>	adminAssets/standarlayanan/biayaLayanan/banner.png	adminAssets/standarlayanan/biayaLayanan/biaya.jpg	2022-12-01 01:40:03	2022-12-30 14:10:50
\.


--
-- TOC entry 3720 (class 0 OID 42966)
-- Dependencies: 316
-- Data for Name: standarlayanans_maklumat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_maklumat (id, judul, banner_path, direktori_image, created_at, updated_at) FROM stdin;
1	Maklumat PPID Kementerian BUMN	adminAssets/standarlayanan/maklumat/banner.jpg	adminAssets/standarlayanan/maklumat/maklumat.jpg	2022-12-01 01:37:40	2022-12-30 14:08:36
\.


--
-- TOC entry 3722 (class 0 OID 42974)
-- Dependencies: 318
-- Data for Name: standarlayanans_prosedurlayanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.standarlayanans_prosedurlayanan (id, banner_path, permohonan_direktori_image, keberatan_direktori_image, created_at, updated_at) FROM stdin;
1	adminAssets/standarlayanan/prosedurLayanan/banner/banner.jpg	adminAssets/standarlayanan/prosedurLayanan/permohonan.jpg	adminAssets/standarlayanan/prosedurLayanan/keberatan.jpg	2022-12-01 01:38:13	2022-12-30 14:10:13
\.


--
-- TOC entry 3724 (class 0 OID 42982)
-- Dependencies: 320
-- Data for Name: status; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.status (id, name) FROM stdin;
1	Permohonan Masuk
3	Diteruskan
6	Selesai
2	Dikonfirmasi
4	Dijawab
5	Ditolak
\.


--
-- TOC entry 3755 (class 0 OID 43747)
-- Dependencies: 351
-- Data for Name: status_keberatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.status_keberatan (id, id_ppid_keberatan, id_jenis_status_keberatan, modified_date, modified_by, created_at, updated_at) FROM stdin;
5	7	3	2022-12-13 04:50:23	\N	2022-12-13 04:50:23	2022-12-13 04:50:23
6	8	3	2022-12-14 01:27:15	\N	2022-12-14 01:27:15	2022-12-14 01:27:15
11	13	3	2022-12-15 07:43:53	\N	2022-12-15 07:43:53	2022-12-15 07:43:53
8	10	2	2022-12-14 03:43:00	\N	2022-12-14 03:43:00	2022-12-14 03:43:00
7	9	2	2022-12-14 03:42:33	\N	2022-12-14 03:42:33	2022-12-14 03:42:33
13	15	1	2022-12-20 04:43:24	\N	2022-12-20 04:43:24	2022-12-20 04:43:24
14	16	1	2022-12-20 04:45:11	\N	2022-12-20 04:45:11	2022-12-20 04:45:11
15	17	1	2022-12-20 06:29:55	\N	2022-12-20 06:29:55	2022-12-20 06:29:55
10	12	3	2022-12-14 03:52:23	\N	2022-12-14 03:52:23	2022-12-14 03:52:23
9	11	3	2022-12-14 03:51:59	\N	2022-12-14 03:51:59	2022-12-14 03:51:59
\.


--
-- TOC entry 3726 (class 0 OID 42987)
-- Dependencies: 322
-- Data for Name: status_permohonan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.status_permohonan (id, id_ppid_permohonan, id_status, modified_by, modified_date, aktif, created_at, updated_at) FROM stdin;
16	10	1	\N	2022-12-13 04:50:03	f	2022-12-13 04:50:03	2022-12-13 04:50:03
18	10	5	3	2022-12-13 06:23:23	t	2022-12-13 06:23:23	2022-12-13 06:23:23
15	9	1	\N	2022-12-13 04:49:44	f	2022-12-13 04:49:44	2022-12-13 04:49:44
17	9	2	3	2022-12-13 06:22:53	f	2022-12-13 06:22:53	2022-12-13 06:22:53
22	9	4	3	2022-12-13 06:33:02	t	2022-12-13 06:33:02	2022-12-13 06:33:02
19	11	1	\N	2022-12-13 06:24:41	f	2022-12-13 06:24:41	2022-12-13 06:24:41
20	11	2	3	2022-12-13 06:24:54	f	2022-12-13 06:24:54	2022-12-13 06:24:54
21	11	3	3	2022-12-13 06:26:59	f	2022-12-13 06:26:59	2022-12-13 06:26:59
23	11	4	3	2022-12-13 06:33:24	t	2022-12-13 06:33:24	2022-12-13 06:33:24
25	13	1	\N	2022-12-13 06:41:35	f	2022-12-13 06:41:35	2022-12-13 06:41:35
26	13	2	3	2022-12-13 06:50:24	t	2022-12-13 06:50:24	2022-12-13 06:50:24
27	14	1	\N	2022-12-15 07:34:19	f	2022-12-15 07:34:19	2022-12-15 07:34:19
28	14	2	3	2022-12-15 07:36:07	f	2022-12-15 07:36:07	2022-12-15 07:36:07
29	14	4	3	2022-12-15 07:42:45	t	2022-12-15 07:42:45	2022-12-15 07:42:45
30	15	1	\N	2022-12-15 07:56:05	f	2022-12-15 07:56:05	2022-12-15 07:56:05
32	15	2	3	2022-12-15 07:56:48	t	2022-12-15 07:56:48	2022-12-15 07:56:48
31	16	1	\N	2022-12-15 07:56:27	f	2022-12-15 07:56:27	2022-12-15 07:56:27
33	16	5	3	2022-12-15 07:56:56	t	2022-12-15 07:56:56	2022-12-15 07:56:56
35	18	1	\N	2022-12-19 03:48:52	f	2022-12-19 03:48:52	2022-12-19 03:48:52
37	18	5	7	2022-12-19 04:31:58	t	2022-12-19 04:31:58	2022-12-19 04:31:58
38	20	1	\N	2022-12-19 04:32:52	f	2022-12-19 04:32:52	2022-12-19 04:32:52
39	20	2	7	2022-12-19 04:33:39	f	2022-12-19 04:33:39	2022-12-19 04:33:39
40	20	3	7	2022-12-19 08:14:06	t	2022-12-19 08:14:06	2022-12-19 08:14:06
34	17	1	\N	2022-12-18 01:12:41	f	2022-12-18 01:12:41	2022-12-18 01:12:41
41	17	5	7	2022-12-22 14:55:50	t	2022-12-22 14:55:50	2022-12-22 14:55:50
42	21	1	\N	2022-12-23 14:24:41	f	2022-12-23 14:24:41	2022-12-23 14:24:41
44	21	2	7	2022-12-23 14:26:04	f	2022-12-23 14:26:04	2022-12-23 14:26:04
45	21	4	7	2022-12-23 14:26:23	t	2022-12-23 14:26:23	2022-12-23 14:26:23
43	22	1	\N	2022-12-23 14:24:49	f	2022-12-23 14:24:49	2022-12-23 14:24:49
46	22	5	7	2022-12-23 14:26:50	t	2022-12-23 14:26:50	2022-12-23 14:26:50
36	19	1	\N	2022-12-19 03:49:10	f	2022-12-19 03:49:10	2022-12-19 03:49:10
47	19	5	7	2022-12-23 14:31:01	t	2022-12-23 14:31:01	2022-12-23 14:31:01
48	23	1	\N	2022-12-23 14:34:49	f	2022-12-23 14:34:49	2022-12-23 14:34:49
49	23	5	7	2022-12-23 14:35:10	t	2022-12-23 14:35:10	2022-12-23 14:35:10
51	25	1	\N	2022-12-27 04:52:51	t	2022-12-27 04:52:51	2022-12-27 04:52:51
53	27	1	\N	2022-12-29 06:23:18	t	2022-12-29 06:23:18	2022-12-29 06:23:18
52	26	1	\N	2022-12-29 06:23:04	f	2022-12-29 06:23:04	2022-12-29 06:23:04
56	26	2	7	2022-12-29 06:24:55	f	2022-12-29 06:24:55	2022-12-29 06:24:55
57	26	3	7	2022-12-29 06:25:51	f	2022-12-29 06:25:51	2022-12-29 06:25:51
58	26	4	8	2022-12-29 06:33:04	t	2022-12-29 06:33:04	2022-12-29 06:33:04
50	24	1	\N	2022-12-27 04:50:23	f	2022-12-27 04:50:23	2022-12-27 04:50:23
59	24	2	7	2022-12-29 09:18:02	t	2022-12-29 09:18:02	2022-12-29 09:18:02
55	29	1	\N	2022-12-29 06:23:41	f	2022-12-29 06:23:41	2022-12-29 06:23:41
60	29	2	7	2023-01-01 15:53:04	t	2023-01-01 15:53:04	2023-01-01 15:53:04
54	28	1	\N	2022-12-29 06:23:29	f	2022-12-29 06:23:29	2022-12-29 06:23:29
61	28	2	7	2023-01-01 15:53:39	t	2023-01-01 15:53:39	2023-01-01 15:53:39
\.


--
-- TOC entry 3728 (class 0 OID 42992)
-- Dependencies: 324
-- Data for Name: strukturorganisasis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis (id, judul, banner_path, created_at, updated_at) FROM stdin;
3	Struktur PPID Kementerian BUMN	adminAssets/profil/struktur_organisasi/banner.png	2022-11-28 19:18:24	2022-11-28 19:18:24
\.


--
-- TOC entry 3729 (class 0 OID 42998)
-- Dependencies: 325
-- Data for Name: strukturorganisasis_bagankanan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis_bagankanan (id, nomenklatur, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	Atasan PPID	Atasan PPID adalah Pimpinan Tinggi Madya yang merupakan atasan langsung pejabat yang menjadi PPID	1	2022-11-28 19:18:46	2022-11-28 19:18:46
2	PPID	PPID merupakan pejabat struktural yang ditunjuk untuk melaksanakan tugas Pelayanan Informasi kepada publik, PPID memiliki kompetensi di bidang pengelolaan dokumen, pengolahan data, pelayanan informasi dan kehumasan	2	2022-11-28 19:19:12	2022-11-28 19:19:12
3	PPID Pelaksana	PPID Pelaksana dijabat oleh pejabat di masing-masing unit kerja/satuan kerja/unit organisasi/organisasi perangkat daerah/sebutan lainnya	3	2022-11-28 19:19:28	2022-11-28 19:19:28
\.


--
-- TOC entry 3731 (class 0 OID 43006)
-- Dependencies: 327
-- Data for Name: strukturorganisasis_bagankiri; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.strukturorganisasis_bagankiri (id, nomenklatur, created_at, updated_at) FROM stdin;
1	Menteri BUMN	2022-12-30 12:02:50	2022-12-30 12:02:50
2	Atasan PPID Kementerian BUMN	2022-12-30 12:02:50	2022-12-30 12:02:50
3	PPID Kementerian BUMN	2022-12-30 12:02:50	2022-12-30 12:02:50
\.


--
-- TOC entry 3747 (class 0 OID 43598)
-- Dependencies: 343
-- Data for Name: submenus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.submenus (id, nama_menu, routing, is_active, urutan, created_at, updated_at, main_menu_id) FROM stdin;
1	Tentang PPID	tentangppid.index	t	1	\N	\N	1
2	Tugas dan Fungsi	tugasdanfungsi.index	t	1	\N	2022-12-15 02:18:40	1
3	Struktur PPID	strukturppid.index	t	1	\N	2022-12-15 02:18:40	1
4	Visi dan Misi	visimisi.index	t	1	\N	2022-12-15 02:18:40	1
5	Kontak	kontak.index	t	1	\N	2022-12-15 02:18:40	1
6	Maklumat	maklumat.index	t	4	\N	2022-12-15 07:11:46	4
7	Prosedur Layanan	prosedurlayanan.index	t	4	\N	2022-12-15 07:11:46	4
8	Biaya Layanan	standarlayananbiaya.index	t	4	\N	2022-12-15 07:11:46	4
\.


--
-- TOC entry 3734 (class 0 OID 43021)
-- Dependencies: 330
-- Data for Name: template_reject; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.template_reject (id, name) FROM stdin;
1	Data tidak lengkap
2	File identitas tidak terbaca
3	Data tidak dikuasai PPID Kementrian BUMN
\.


--
-- TOC entry 3736 (class 0 OID 43026)
-- Dependencies: 332
-- Data for Name: tugasdanfungsis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tugasdanfungsis (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
1	Tugas dan Fungsi PPID Kementerian BUMN	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumpulan seluruh Informasi Publik secara fisik dari setiap unit kerja, meliputi informasi yang wajib disediakan dan diumumkan secara berkala, wajib tersedia setiap saat dan informasi terbuka lainnya yang diminta pemohon Informasi Publik;</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pendataan Informasi Publik yang dikuasai oleh setiap unit kerja di Kementerian BUMN dalam rangka pembuatan dan pemutakhiran Daftar Informasi Publik setelah dimutakhirkan oleh pimpinan masingmasing unit kerja sekurang-kurangnya 1 (satu) kali dalam sebulan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan penyediaan dan pelayanan Informasi Publik melalui pengumuman dan/atau permohonan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumuman Informasi Publik melalui media yang secara efektif dapat menjangkau seluruh pemangku kepentingan;</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/tugas_dan_fungsi/banner.png	adminAssets/profil/tugas_dan_fungsi/sideImage.png	2022-11-28 18:51:18	2022-11-28 18:51:32
\.


--
-- TOC entry 3738 (class 0 OID 43034)
-- Dependencies: 334
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, jenispemohon, jenisidentitas, noidentitas, alamat, nohp, npwp, pekerjaan, identitas_file_path, remember_token, created_at, updated_at) FROM stdin;
2	User Role	user@role.test	\N	$2y$10$orU/biBH2Qk17UlHu/FBa.hOyjuqIdivYhp9AP9tZ6HKqaKCGgm0e	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-12-01 07:55:29	2022-12-01 07:55:29
6	user p	ppp@ppp.ppp	\N	$2y$10$yLmt/fd0PR8FHPMUTEFUwuX9LpI2dgHVilnVWd3v210PVAQMV1piC	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-12-13 06:25:44	2022-12-13 06:25:44
7	super	super@role.test	\N	$2y$10$QHtc/TKisIinVcQj/aTqjeoPcekzMFYPE538j8ygQF.JSUgCAOfiW	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-12-15 08:54:28	2022-12-15 08:54:28
8	user p2	p2p2@tes.tes	\N	$2y$10$gBwMwCZJsJAV8Tx17zytK.1HnT04Jo9oXCQgKiGn1Wbk0oJwLXU3u	\N	\N	\N	\N	\N	\N	\N	\N	\N	2022-12-29 05:07:04	2022-12-29 05:07:04
\.


--
-- TOC entry 3740 (class 0 OID 43042)
-- Dependencies: 336
-- Data for Name: videos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.videos (id, url, deskripsi, urutan, created_at, updated_at) FROM stdin;
1	https://www.youtube.com/embed/l65aJUqkgko	\N	1	2022-11-30 14:59:15	2022-11-30 14:59:15
2	https://www.youtube.com/embed/53agHpqOGj8	\N	2	2022-11-30 14:59:58	2022-11-30 14:59:58
\.


--
-- TOC entry 3742 (class 0 OID 43050)
-- Dependencies: 338
-- Data for Name: visimisis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.visimisis (id, visi, misi, banner_path, created_at, updated_at) FROM stdin;
1	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="color: #000000; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat placerat odio eget congue. Vestibulum pellentesque sem eu dolor egestas pulvinar. Curabitur vitae nulla sed leo semper faucibus eu non nibh. Nullam et dignissim quam. Mauris at metus nisl. Phasellus consectetur, erat vel molestie tristique, lacus tellus porttitor arcu,</span></p>\r\n</body>\r\n</html>	<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style="list-style-type: square;">\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumpulan seluruh Informasi Publik secara fisik dari setiap unit kerja, meliputi informasi yang wajib disediakan dan diumumkan secara berkala, wajib tersedia setiap saat dan informasi terbuka lainnya yang diminta pemohon Informasi Publik;</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pendataan Informasi Publik yang dikuasai oleh setiap unit kerja di Kementerian BUMN dalam rangka pembuatan dan pemutakhiran Daftar Informasi Publik setelah dimutakhirkan oleh pimpinan masingmasing unit kerja sekurang-kurangnya 1 (satu) kali dalam sebulan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan penyediaan dan pelayanan Informasi Publik melalui pengumuman dan/atau permohonan</span></li>\r\n<li><span style="color: #474747; font-family: Lato, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f4f4f4; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Mengoordinasikan pengumuman Informasi Publik melalui media yang secara efektif dapat menjangkau seluruh pemangku kepentingan;</span></li>\r\n</ul>\r\n</body>\r\n</html>	adminAssets/profil/visi_dan_misi/banner.png	2022-11-28 19:21:33	2022-12-16 03:56:54
\.


--
-- TOC entry 3837 (class 0 OID 0)
-- Dependencies: 205
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 3838 (class 0 OID 0)
-- Dependencies: 208
-- Name: faqs_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.faqs_banner_id_seq', 1, true);


--
-- TOC entry 3839 (class 0 OID 0)
-- Dependencies: 209
-- Name: faqs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.faqs_id_seq', 2, true);


--
-- TOC entry 3840 (class 0 OID 0)
-- Dependencies: 211
-- Name: forward_permohonan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.forward_permohonan_id_seq', 6, true);


--
-- TOC entry 3841 (class 0 OID 0)
-- Dependencies: 213
-- Name: informasipubliks_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_banner_id_seq', 1, true);


--
-- TOC entry 3842 (class 0 OID 0)
-- Dependencies: 215
-- Name: informasipubliks_secaraberkala_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_secaraberkala_id_seq', 13, true);


--
-- TOC entry 3843 (class 0 OID 0)
-- Dependencies: 217
-- Name: informasipubliks_sertamerta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_sertamerta_id_seq', 1, true);


--
-- TOC entry 3844 (class 0 OID 0)
-- Dependencies: 219
-- Name: informasipubliks_setiapsaat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasipubliks_setiapsaat_id_seq', 11, true);


--
-- TOC entry 3845 (class 0 OID 0)
-- Dependencies: 221
-- Name: informasis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasis_id_seq', 4, true);


--
-- TOC entry 3846 (class 0 OID 0)
-- Dependencies: 223
-- Name: informasis_image_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informasis_image_id_seq', 1, true);


--
-- TOC entry 3847 (class 0 OID 0)
-- Dependencies: 225
-- Name: jawab_permohonan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jawab_permohonan_id_seq', 13, true);


--
-- TOC entry 3848 (class 0 OID 0)
-- Dependencies: 227
-- Name: jenis_identitas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jenis_identitas_id_seq', 1, false);


--
-- TOC entry 3849 (class 0 OID 0)
-- Dependencies: 229
-- Name: jenis_pemohon_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jenis_pemohon_id_seq', 1, false);


--
-- TOC entry 3850 (class 0 OID 0)
-- Dependencies: 348
-- Name: jenis_status_keberatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jenis_status_keberatan_id_seq', 3, true);


--
-- TOC entry 3851 (class 0 OID 0)
-- Dependencies: 344
-- Name: kategori_keberatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kategori_keberatan_id_seq', 7, true);


--
-- TOC entry 3852 (class 0 OID 0)
-- Dependencies: 232
-- Name: kontaks_dokumentasiruangppid_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kontaks_dokumentasiruangppid_id_seq', 4, true);


--
-- TOC entry 3853 (class 0 OID 0)
-- Dependencies: 233
-- Name: kontaks_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kontaks_id_seq', 1, true);


--
-- TOC entry 3854 (class 0 OID 0)
-- Dependencies: 235
-- Name: laporan_berkala_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_berkala_id_seq', 1, false);


--
-- TOC entry 3855 (class 0 OID 0)
-- Dependencies: 237
-- Name: laporan_serta_merta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_serta_merta_id_seq', 1, false);


--
-- TOC entry 3856 (class 0 OID 0)
-- Dependencies: 239
-- Name: laporan_setiap_saat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporan_setiap_saat_id_seq', 1, false);


--
-- TOC entry 3857 (class 0 OID 0)
-- Dependencies: 241
-- Name: laporans_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_banner_id_seq', 1, true);


--
-- TOC entry 3858 (class 0 OID 0)
-- Dependencies: 243
-- Name: laporans_hasil_survei_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_hasil_survei_id_seq', 2, true);


--
-- TOC entry 3859 (class 0 OID 0)
-- Dependencies: 245
-- Name: laporans_tahunan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_tahunan_id_seq', 5, true);


--
-- TOC entry 3860 (class 0 OID 0)
-- Dependencies: 247
-- Name: laporans_triwulanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.laporans_triwulanan_id_seq', 5, true);


--
-- TOC entry 3861 (class 0 OID 0)
-- Dependencies: 249
-- Name: linkapps_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.linkapps_id_seq', 1, true);


--
-- TOC entry 3862 (class 0 OID 0)
-- Dependencies: 251
-- Name: log_permohonan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.log_permohonan_id_seq', 59, true);


--
-- TOC entry 3863 (class 0 OID 0)
-- Dependencies: 340
-- Name: mainmenus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.mainmenus_id_seq', 17, true);


--
-- TOC entry 3864 (class 0 OID 0)
-- Dependencies: 253
-- Name: menus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menus_id_seq', 1, false);


--
-- TOC entry 3865 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 39, true);


--
-- TOC entry 3866 (class 0 OID 0)
-- Dependencies: 258
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.permissions_id_seq', 112, true);


--
-- TOC entry 3867 (class 0 OID 0)
-- Dependencies: 260
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- TOC entry 3868 (class 0 OID 0)
-- Dependencies: 262
-- Name: ppid_biaya_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_biaya_id_seq', 1, false);


--
-- TOC entry 3869 (class 0 OID 0)
-- Dependencies: 264
-- Name: ppid_faq_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_faq_id_seq', 1, false);


--
-- TOC entry 3870 (class 0 OID 0)
-- Dependencies: 266
-- Name: ppid_infografis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_infografis_id_seq', 1, false);


--
-- TOC entry 3871 (class 0 OID 0)
-- Dependencies: 268
-- Name: ppid_jenis_profil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_jenis_profil_id_seq', 1, false);


--
-- TOC entry 3872 (class 0 OID 0)
-- Dependencies: 346
-- Name: ppid_keberatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_keberatan_id_seq', 17, true);


--
-- TOC entry 3873 (class 0 OID 0)
-- Dependencies: 270
-- Name: ppid_kontak_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_kontak_id_seq', 1, false);


--
-- TOC entry 3874 (class 0 OID 0)
-- Dependencies: 272
-- Name: ppid_lap_survey_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_survey_id_seq', 1, false);


--
-- TOC entry 3875 (class 0 OID 0)
-- Dependencies: 274
-- Name: ppid_lap_th_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_th_id_seq', 1, false);


--
-- TOC entry 3876 (class 0 OID 0)
-- Dependencies: 276
-- Name: ppid_lap_tw_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_lap_tw_id_seq', 1, false);


--
-- TOC entry 3877 (class 0 OID 0)
-- Dependencies: 278
-- Name: ppid_maklumat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_maklumat_id_seq', 1, false);


--
-- TOC entry 3878 (class 0 OID 0)
-- Dependencies: 280
-- Name: ppid_memberikan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_memberikan_id_seq', 1, false);


--
-- TOC entry 3879 (class 0 OID 0)
-- Dependencies: 282
-- Name: ppid_mendapatkan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_mendapatkan_id_seq', 1, false);


--
-- TOC entry 3880 (class 0 OID 0)
-- Dependencies: 284
-- Name: ppid_menu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_menu_id_seq', 1, false);


--
-- TOC entry 3881 (class 0 OID 0)
-- Dependencies: 286
-- Name: ppid_pendaftar_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_pendaftar_id_seq', 16, true);


--
-- TOC entry 3882 (class 0 OID 0)
-- Dependencies: 289
-- Name: ppid_permohonan_dkk_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_permohonan_dkk_id_seq', 1, false);


--
-- TOC entry 3883 (class 0 OID 0)
-- Dependencies: 290
-- Name: ppid_permohonan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_permohonan_id_seq', 29, true);


--
-- TOC entry 3884 (class 0 OID 0)
-- Dependencies: 292
-- Name: ppid_profil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_profil_id_seq', 1, false);


--
-- TOC entry 3885 (class 0 OID 0)
-- Dependencies: 294
-- Name: ppid_regulasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_regulasi_id_seq', 1, false);


--
-- TOC entry 3886 (class 0 OID 0)
-- Dependencies: 296
-- Name: ppid_regulasi_peraturan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ppid_regulasi_peraturan_id_seq', 1, false);


--
-- TOC entry 3887 (class 0 OID 0)
-- Dependencies: 298
-- Name: profilsingkats_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.profilsingkats_id_seq', 2, true);


--
-- TOC entry 3888 (class 0 OID 0)
-- Dependencies: 352
-- Name: proses_keberatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.proses_keberatan_id_seq', 7, true);


--
-- TOC entry 3889 (class 0 OID 0)
-- Dependencies: 300
-- Name: regulasis_banner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_banner_id_seq', 1, true);


--
-- TOC entry 3890 (class 0 OID 0)
-- Dependencies: 302
-- Name: regulasis_peraturankip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_peraturankip_id_seq', 4, true);


--
-- TOC entry 3891 (class 0 OID 0)
-- Dependencies: 304
-- Name: regulasis_rancanganperaturankip_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.regulasis_rancanganperaturankip_id_seq', 2, true);


--
-- TOC entry 3892 (class 0 OID 0)
-- Dependencies: 306
-- Name: reject_permohonan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.reject_permohonan_id_seq', 14, true);


--
-- TOC entry 3893 (class 0 OID 0)
-- Dependencies: 309
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roles_id_seq', 4, true);


--
-- TOC entry 3894 (class 0 OID 0)
-- Dependencies: 311
-- Name: sliders_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sliders_id_seq', 8, true);


--
-- TOC entry 3895 (class 0 OID 0)
-- Dependencies: 313
-- Name: sosialmedias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sosialmedias_id_seq', 4, true);


--
-- TOC entry 3896 (class 0 OID 0)
-- Dependencies: 315
-- Name: standarlayanans_biayalayanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_biayalayanan_id_seq', 1, true);


--
-- TOC entry 3897 (class 0 OID 0)
-- Dependencies: 317
-- Name: standarlayanans_maklumat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_maklumat_id_seq', 1, true);


--
-- TOC entry 3898 (class 0 OID 0)
-- Dependencies: 319
-- Name: standarlayanans_prosedurlayanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.standarlayanans_prosedurlayanan_id_seq', 1, true);


--
-- TOC entry 3899 (class 0 OID 0)
-- Dependencies: 321
-- Name: status_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.status_id_seq', 1, false);


--
-- TOC entry 3900 (class 0 OID 0)
-- Dependencies: 350
-- Name: status_keberatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.status_keberatan_id_seq', 15, true);


--
-- TOC entry 3901 (class 0 OID 0)
-- Dependencies: 323
-- Name: status_permohonan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.status_permohonan_id_seq', 61, true);


--
-- TOC entry 3902 (class 0 OID 0)
-- Dependencies: 326
-- Name: strukturorganisasis_bagankanan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_bagankanan_id_seq', 3, true);


--
-- TOC entry 3903 (class 0 OID 0)
-- Dependencies: 328
-- Name: strukturorganisasis_bagankiri_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_bagankiri_id_seq', 3, true);


--
-- TOC entry 3904 (class 0 OID 0)
-- Dependencies: 329
-- Name: strukturorganisasis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.strukturorganisasis_id_seq', 3, true);


--
-- TOC entry 3905 (class 0 OID 0)
-- Dependencies: 342
-- Name: submenus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.submenus_id_seq', 20, true);


--
-- TOC entry 3906 (class 0 OID 0)
-- Dependencies: 331
-- Name: template_reject_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.template_reject_id_seq', 1, false);


--
-- TOC entry 3907 (class 0 OID 0)
-- Dependencies: 333
-- Name: tugasdanfungsis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tugasdanfungsis_id_seq', 1, true);


--
-- TOC entry 3908 (class 0 OID 0)
-- Dependencies: 335
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 8, true);


--
-- TOC entry 3909 (class 0 OID 0)
-- Dependencies: 337
-- Name: videos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.videos_id_seq', 2, true);


--
-- TOC entry 3910 (class 0 OID 0)
-- Dependencies: 339
-- Name: visimisis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.visimisis_id_seq', 1, true);


--
-- TOC entry 3277 (class 2606 OID 43128)
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- TOC entry 3279 (class 2606 OID 43130)
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- TOC entry 3283 (class 2606 OID 43132)
-- Name: faqs_banner faqs_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs_banner
    ADD CONSTRAINT faqs_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3281 (class 2606 OID 43134)
-- Name: faqs faqs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.faqs
    ADD CONSTRAINT faqs_pkey PRIMARY KEY (id);


--
-- TOC entry 3285 (class 2606 OID 43136)
-- Name: forward_permohonan forward_permohonan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.forward_permohonan
    ADD CONSTRAINT forward_permohonan_pkey PRIMARY KEY (id);


--
-- TOC entry 3287 (class 2606 OID 43138)
-- Name: informasipubliks_banner informasipubliks_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_banner
    ADD CONSTRAINT informasipubliks_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3289 (class 2606 OID 43140)
-- Name: informasipubliks_secaraberkala informasipubliks_secaraberkala_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_secaraberkala
    ADD CONSTRAINT informasipubliks_secaraberkala_pkey PRIMARY KEY (id);


--
-- TOC entry 3291 (class 2606 OID 43142)
-- Name: informasipubliks_sertamerta informasipubliks_sertamerta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_sertamerta
    ADD CONSTRAINT informasipubliks_sertamerta_pkey PRIMARY KEY (id);


--
-- TOC entry 3293 (class 2606 OID 43144)
-- Name: informasipubliks_setiapsaat informasipubliks_setiapsaat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasipubliks_setiapsaat
    ADD CONSTRAINT informasipubliks_setiapsaat_pkey PRIMARY KEY (id);


--
-- TOC entry 3297 (class 2606 OID 43146)
-- Name: informasis_image informasis_image_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis_image
    ADD CONSTRAINT informasis_image_pkey PRIMARY KEY (id);


--
-- TOC entry 3295 (class 2606 OID 43148)
-- Name: informasis informasis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informasis
    ADD CONSTRAINT informasis_pkey PRIMARY KEY (id);


--
-- TOC entry 3299 (class 2606 OID 43150)
-- Name: jawab_permohonan jawab_permohonan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jawab_permohonan
    ADD CONSTRAINT jawab_permohonan_pkey PRIMARY KEY (id);


--
-- TOC entry 3301 (class 2606 OID 43152)
-- Name: jenis_identitas jenis_identitas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jenis_identitas
    ADD CONSTRAINT jenis_identitas_pkey PRIMARY KEY (id);


--
-- TOC entry 3303 (class 2606 OID 43154)
-- Name: jenis_pemohon jenis_pemohon_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jenis_pemohon
    ADD CONSTRAINT jenis_pemohon_pkey PRIMARY KEY (id);


--
-- TOC entry 3437 (class 2606 OID 43744)
-- Name: jenis_status_keberatan jenis_status_keberatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jenis_status_keberatan
    ADD CONSTRAINT jenis_status_keberatan_pkey PRIMARY KEY (id);


--
-- TOC entry 3433 (class 2606 OID 43710)
-- Name: kategori_keberatan kategori_keberatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kategori_keberatan
    ADD CONSTRAINT kategori_keberatan_pkey PRIMARY KEY (id);


--
-- TOC entry 3307 (class 2606 OID 43156)
-- Name: kontaks_dokumentasiruangppid kontaks_dokumentasiruangppid_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks_dokumentasiruangppid
    ADD CONSTRAINT kontaks_dokumentasiruangppid_pkey PRIMARY KEY (id);


--
-- TOC entry 3305 (class 2606 OID 43158)
-- Name: kontaks kontaks_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kontaks
    ADD CONSTRAINT kontaks_pkey PRIMARY KEY (id);


--
-- TOC entry 3309 (class 2606 OID 43160)
-- Name: laporan_berkala laporan_berkala_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_pkey PRIMARY KEY (id);


--
-- TOC entry 3311 (class 2606 OID 43162)
-- Name: laporan_serta_merta laporan_serta_merta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_pkey PRIMARY KEY (id);


--
-- TOC entry 3313 (class 2606 OID 43164)
-- Name: laporan_setiap_saat laporan_setiap_saat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_pkey PRIMARY KEY (id);


--
-- TOC entry 3315 (class 2606 OID 43166)
-- Name: laporans_banner laporans_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_banner
    ADD CONSTRAINT laporans_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3317 (class 2606 OID 43168)
-- Name: laporans_hasil_survei laporans_hasil_survei_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_hasil_survei
    ADD CONSTRAINT laporans_hasil_survei_pkey PRIMARY KEY (id);


--
-- TOC entry 3319 (class 2606 OID 43170)
-- Name: laporans_tahunan laporans_tahunan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_tahunan
    ADD CONSTRAINT laporans_tahunan_pkey PRIMARY KEY (id);


--
-- TOC entry 3321 (class 2606 OID 43172)
-- Name: laporans_triwulanan laporans_triwulanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporans_triwulanan
    ADD CONSTRAINT laporans_triwulanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3323 (class 2606 OID 43174)
-- Name: linkapps linkapps_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.linkapps
    ADD CONSTRAINT linkapps_pkey PRIMARY KEY (id);


--
-- TOC entry 3325 (class 2606 OID 43176)
-- Name: log_permohonan log_permohonan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.log_permohonan
    ADD CONSTRAINT log_permohonan_pkey PRIMARY KEY (id);


--
-- TOC entry 3429 (class 2606 OID 43595)
-- Name: mainmenus mainmenus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mainmenus
    ADD CONSTRAINT mainmenus_pkey PRIMARY KEY (id);


--
-- TOC entry 3327 (class 2606 OID 43180)
-- Name: menus menus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);


--
-- TOC entry 3275 (class 2606 OID 42520)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 3330 (class 2606 OID 43182)
-- Name: model_has_permissions model_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);


--
-- TOC entry 3333 (class 2606 OID 43184)
-- Name: model_has_roles model_has_roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);


--
-- TOC entry 3336 (class 2606 OID 43186)
-- Name: permissions permissions_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);


--
-- TOC entry 3338 (class 2606 OID 43188)
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- TOC entry 3340 (class 2606 OID 43190)
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 3342 (class 2606 OID 43192)
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- TOC entry 3345 (class 2606 OID 43194)
-- Name: ppid_biaya ppid_biaya_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_pkey PRIMARY KEY (id);


--
-- TOC entry 3347 (class 2606 OID 43196)
-- Name: ppid_faq ppid_faq_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_pkey PRIMARY KEY (id);


--
-- TOC entry 3349 (class 2606 OID 43198)
-- Name: ppid_infografis ppid_infografis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_pkey PRIMARY KEY (id);


--
-- TOC entry 3351 (class 2606 OID 43200)
-- Name: ppid_jenis_profil ppid_jenis_profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_jenis_profil
    ADD CONSTRAINT ppid_jenis_profil_pkey PRIMARY KEY (id);


--
-- TOC entry 3435 (class 2606 OID 43721)
-- Name: ppid_keberatan ppid_keberatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_keberatan
    ADD CONSTRAINT ppid_keberatan_pkey PRIMARY KEY (id);


--
-- TOC entry 3353 (class 2606 OID 43202)
-- Name: ppid_kontak ppid_kontak_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_pkey PRIMARY KEY (id);


--
-- TOC entry 3355 (class 2606 OID 43204)
-- Name: ppid_lap_survey ppid_lap_survey_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_pkey PRIMARY KEY (id);


--
-- TOC entry 3357 (class 2606 OID 43206)
-- Name: ppid_lap_th ppid_lap_th_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_pkey PRIMARY KEY (id);


--
-- TOC entry 3359 (class 2606 OID 43208)
-- Name: ppid_lap_tw ppid_lap_tw_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_pkey PRIMARY KEY (id);


--
-- TOC entry 3361 (class 2606 OID 43210)
-- Name: ppid_maklumat ppid_maklumat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_pkey PRIMARY KEY (id);


--
-- TOC entry 3363 (class 2606 OID 43212)
-- Name: ppid_memberikan ppid_memberikan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_memberikan
    ADD CONSTRAINT ppid_memberikan_pkey PRIMARY KEY (id);


--
-- TOC entry 3365 (class 2606 OID 43214)
-- Name: ppid_mendapatkan ppid_mendapatkan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_mendapatkan
    ADD CONSTRAINT ppid_mendapatkan_pkey PRIMARY KEY (id);


--
-- TOC entry 3367 (class 2606 OID 43216)
-- Name: ppid_menu ppid_menu_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_menu
    ADD CONSTRAINT ppid_menu_pkey PRIMARY KEY (id);


--
-- TOC entry 3369 (class 2606 OID 43218)
-- Name: ppid_pendaftar ppid_pendaftar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_pendaftar
    ADD CONSTRAINT ppid_pendaftar_pkey PRIMARY KEY (id);


--
-- TOC entry 3373 (class 2606 OID 43220)
-- Name: ppid_permohonan_dkk ppid_permohonan_dkk_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan_dkk
    ADD CONSTRAINT ppid_permohonan_dkk_pkey PRIMARY KEY (id);


--
-- TOC entry 3371 (class 2606 OID 43222)
-- Name: ppid_permohonan ppid_permohonan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_pkey PRIMARY KEY (id);


--
-- TOC entry 3375 (class 2606 OID 43224)
-- Name: ppid_profil ppid_profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_pkey PRIMARY KEY (id);


--
-- TOC entry 3379 (class 2606 OID 43226)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_pkey PRIMARY KEY (id);


--
-- TOC entry 3377 (class 2606 OID 43228)
-- Name: ppid_regulasi ppid_regulasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi
    ADD CONSTRAINT ppid_regulasi_pkey PRIMARY KEY (id);


--
-- TOC entry 3381 (class 2606 OID 43230)
-- Name: profilsingkats profilsingkats_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profilsingkats
    ADD CONSTRAINT profilsingkats_pkey PRIMARY KEY (id);


--
-- TOC entry 3441 (class 2606 OID 43776)
-- Name: proses_keberatan proses_keberatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.proses_keberatan
    ADD CONSTRAINT proses_keberatan_pkey PRIMARY KEY (id);


--
-- TOC entry 3383 (class 2606 OID 43232)
-- Name: regulasis_banner regulasis_banner_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_banner
    ADD CONSTRAINT regulasis_banner_pkey PRIMARY KEY (id);


--
-- TOC entry 3385 (class 2606 OID 43234)
-- Name: regulasis_peraturankip regulasis_peraturankip_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_peraturankip
    ADD CONSTRAINT regulasis_peraturankip_pkey PRIMARY KEY (id);


--
-- TOC entry 3387 (class 2606 OID 43236)
-- Name: regulasis_rancanganperaturankip regulasis_rancanganperaturankip_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.regulasis_rancanganperaturankip
    ADD CONSTRAINT regulasis_rancanganperaturankip_pkey PRIMARY KEY (id);


--
-- TOC entry 3389 (class 2606 OID 43238)
-- Name: reject_permohonan reject_permohonan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reject_permohonan
    ADD CONSTRAINT reject_permohonan_pkey PRIMARY KEY (id);


--
-- TOC entry 3391 (class 2606 OID 43240)
-- Name: role_has_permissions role_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);


--
-- TOC entry 3393 (class 2606 OID 43242)
-- Name: roles roles_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);


--
-- TOC entry 3395 (class 2606 OID 43244)
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- TOC entry 3397 (class 2606 OID 43246)
-- Name: sliders sliders_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);


--
-- TOC entry 3399 (class 2606 OID 43248)
-- Name: sosialmedias sosialmedias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sosialmedias
    ADD CONSTRAINT sosialmedias_pkey PRIMARY KEY (id);


--
-- TOC entry 3401 (class 2606 OID 43250)
-- Name: standarlayanans_biayalayanan standarlayanans_biayalayanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_biayalayanan
    ADD CONSTRAINT standarlayanans_biayalayanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3403 (class 2606 OID 43252)
-- Name: standarlayanans_maklumat standarlayanans_maklumat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_maklumat
    ADD CONSTRAINT standarlayanans_maklumat_pkey PRIMARY KEY (id);


--
-- TOC entry 3405 (class 2606 OID 43254)
-- Name: standarlayanans_prosedurlayanan standarlayanans_prosedurlayanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.standarlayanans_prosedurlayanan
    ADD CONSTRAINT standarlayanans_prosedurlayanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3439 (class 2606 OID 43755)
-- Name: status_keberatan status_keberatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_keberatan
    ADD CONSTRAINT status_keberatan_pkey PRIMARY KEY (id);


--
-- TOC entry 3409 (class 2606 OID 43256)
-- Name: status_permohonan status_permohonan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_permohonan
    ADD CONSTRAINT status_permohonan_pkey PRIMARY KEY (id);


--
-- TOC entry 3407 (class 2606 OID 43258)
-- Name: status status_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_pkey PRIMARY KEY (id);


--
-- TOC entry 3413 (class 2606 OID 43260)
-- Name: strukturorganisasis_bagankanan strukturorganisasis_bagankanan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankanan
    ADD CONSTRAINT strukturorganisasis_bagankanan_pkey PRIMARY KEY (id);


--
-- TOC entry 3415 (class 2606 OID 43262)
-- Name: strukturorganisasis_bagankiri strukturorganisasis_bagankiri_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis_bagankiri
    ADD CONSTRAINT strukturorganisasis_bagankiri_pkey PRIMARY KEY (id);


--
-- TOC entry 3411 (class 2606 OID 43264)
-- Name: strukturorganisasis strukturorganisasis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.strukturorganisasis
    ADD CONSTRAINT strukturorganisasis_pkey PRIMARY KEY (id);


--
-- TOC entry 3431 (class 2606 OID 43607)
-- Name: submenus submenus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_pkey PRIMARY KEY (id);


--
-- TOC entry 3417 (class 2606 OID 43268)
-- Name: template_reject template_reject_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.template_reject
    ADD CONSTRAINT template_reject_pkey PRIMARY KEY (id);


--
-- TOC entry 3419 (class 2606 OID 43270)
-- Name: tugasdanfungsis tugasdanfungsis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugasdanfungsis
    ADD CONSTRAINT tugasdanfungsis_pkey PRIMARY KEY (id);


--
-- TOC entry 3421 (class 2606 OID 43272)
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 3423 (class 2606 OID 43274)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 3425 (class 2606 OID 43276)
-- Name: videos videos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.videos
    ADD CONSTRAINT videos_pkey PRIMARY KEY (id);


--
-- TOC entry 3427 (class 2606 OID 43278)
-- Name: visimisis visimisis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.visimisis
    ADD CONSTRAINT visimisis_pkey PRIMARY KEY (id);


--
-- TOC entry 3328 (class 1259 OID 43279)
-- Name: model_has_permissions_model_id_model_type_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);


--
-- TOC entry 3331 (class 1259 OID 43280)
-- Name: model_has_roles_model_id_model_type_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);


--
-- TOC entry 3334 (class 1259 OID 43281)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 3343 (class 1259 OID 43282)
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- TOC entry 3442 (class 2606 OID 43283)
-- Name: forward_permohonan forward_permohonan_id_ppid_permohonan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.forward_permohonan
    ADD CONSTRAINT forward_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);


--
-- TOC entry 3443 (class 2606 OID 43288)
-- Name: jawab_permohonan jawab_permohonan_id_ppid_permohonan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jawab_permohonan
    ADD CONSTRAINT jawab_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);


--
-- TOC entry 3444 (class 2606 OID 43293)
-- Name: laporan_berkala laporan_berkala_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3445 (class 2606 OID 43298)
-- Name: laporan_serta_merta laporan_serta_merta_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3446 (class 2606 OID 43303)
-- Name: laporan_setiap_saat laporan_setiap_saat_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3447 (class 2606 OID 43308)
-- Name: log_permohonan log_permohonan_id_ppid_permohonan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.log_permohonan
    ADD CONSTRAINT log_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);


--
-- TOC entry 3448 (class 2606 OID 43313)
-- Name: model_has_permissions model_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- TOC entry 3449 (class 2606 OID 43318)
-- Name: model_has_roles model_has_roles_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- TOC entry 3450 (class 2606 OID 43323)
-- Name: ppid_biaya ppid_biaya_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3451 (class 2606 OID 43328)
-- Name: ppid_faq ppid_faq_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3452 (class 2606 OID 43333)
-- Name: ppid_infografis ppid_infografis_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3474 (class 2606 OID 43722)
-- Name: ppid_keberatan ppid_keberatan_id_kategori_keberatan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_keberatan
    ADD CONSTRAINT ppid_keberatan_id_kategori_keberatan_foreign FOREIGN KEY (id_kategori_keberatan) REFERENCES public.kategori_keberatan(id);


--
-- TOC entry 3475 (class 2606 OID 43727)
-- Name: ppid_keberatan ppid_keberatan_id_permohonan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_keberatan
    ADD CONSTRAINT ppid_keberatan_id_permohonan_foreign FOREIGN KEY (id_permohonan) REFERENCES public.ppid_permohonan(id);


--
-- TOC entry 3476 (class 2606 OID 43732)
-- Name: ppid_keberatan ppid_keberatan_id_ppid_pendaftar_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_keberatan
    ADD CONSTRAINT ppid_keberatan_id_ppid_pendaftar_foreign FOREIGN KEY (id_ppid_pendaftar) REFERENCES public.ppid_pendaftar(id);


--
-- TOC entry 3453 (class 2606 OID 43338)
-- Name: ppid_kontak ppid_kontak_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3454 (class 2606 OID 43343)
-- Name: ppid_lap_survey ppid_lap_survey_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3455 (class 2606 OID 43348)
-- Name: ppid_lap_th ppid_lap_th_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3456 (class 2606 OID 43353)
-- Name: ppid_lap_tw ppid_lap_tw_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3457 (class 2606 OID 43358)
-- Name: ppid_maklumat ppid_maklumat_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3458 (class 2606 OID 43363)
-- Name: ppid_pendaftar ppid_pendaftar_jenis_identitas_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_pendaftar
    ADD CONSTRAINT ppid_pendaftar_jenis_identitas_foreign FOREIGN KEY (jenis_identitas) REFERENCES public.jenis_identitas(id);


--
-- TOC entry 3459 (class 2606 OID 43368)
-- Name: ppid_pendaftar ppid_pendaftar_jenis_pemohon_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_pendaftar
    ADD CONSTRAINT ppid_pendaftar_jenis_pemohon_foreign FOREIGN KEY (jenis_pemohon) REFERENCES public.jenis_pemohon(id);


--
-- TOC entry 3460 (class 2606 OID 43373)
-- Name: ppid_permohonan ppid_permohonan_id_cara_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_id_cara_foreign FOREIGN KEY (id_cara) REFERENCES public.ppid_memberikan(id);


--
-- TOC entry 3461 (class 2606 OID 43378)
-- Name: ppid_permohonan ppid_permohonan_id_mendapatkan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_id_mendapatkan_foreign FOREIGN KEY (id_mendapatkan) REFERENCES public.ppid_mendapatkan(id);


--
-- TOC entry 3462 (class 2606 OID 43383)
-- Name: ppid_permohonan ppid_permohonan_id_ppid_pendaftar_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_id_ppid_pendaftar_foreign FOREIGN KEY (id_ppid_pendaftar) REFERENCES public.ppid_pendaftar(id);


--
-- TOC entry 3463 (class 2606 OID 43388)
-- Name: ppid_profil ppid_profil_id_ppid_jenis_profil_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign FOREIGN KEY (id_ppid_jenis_profil) REFERENCES public.ppid_jenis_profil(id);


--
-- TOC entry 3464 (class 2606 OID 43393)
-- Name: ppid_profil ppid_profil_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3465 (class 2606 OID 43398)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_id_jenis_regulasi_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign FOREIGN KEY (id_jenis_regulasi) REFERENCES public.ppid_regulasi(id);


--
-- TOC entry 3466 (class 2606 OID 43403)
-- Name: ppid_regulasi_peraturan ppid_regulasi_peraturan_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);


--
-- TOC entry 3479 (class 2606 OID 43777)
-- Name: proses_keberatan proses_keberatan_id_ppid_keberatan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.proses_keberatan
    ADD CONSTRAINT proses_keberatan_id_ppid_keberatan_foreign FOREIGN KEY (id_ppid_keberatan) REFERENCES public.ppid_keberatan(id);


--
-- TOC entry 3467 (class 2606 OID 43408)
-- Name: reject_permohonan reject_permohonan_id_ppid_permohonan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reject_permohonan
    ADD CONSTRAINT reject_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);


--
-- TOC entry 3468 (class 2606 OID 43413)
-- Name: reject_permohonan reject_permohonan_id_template_reject_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reject_permohonan
    ADD CONSTRAINT reject_permohonan_id_template_reject_foreign FOREIGN KEY (id_template_reject) REFERENCES public.template_reject(id);


--
-- TOC entry 3469 (class 2606 OID 43418)
-- Name: role_has_permissions role_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- TOC entry 3470 (class 2606 OID 43423)
-- Name: role_has_permissions role_has_permissions_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- TOC entry 3478 (class 2606 OID 43761)
-- Name: status_keberatan status_keberatan_id_jenis_status_keberatan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_keberatan
    ADD CONSTRAINT status_keberatan_id_jenis_status_keberatan_foreign FOREIGN KEY (id_jenis_status_keberatan) REFERENCES public.jenis_status_keberatan(id);


--
-- TOC entry 3477 (class 2606 OID 43756)
-- Name: status_keberatan status_keberatan_id_ppid_keberatan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_keberatan
    ADD CONSTRAINT status_keberatan_id_ppid_keberatan_foreign FOREIGN KEY (id_ppid_keberatan) REFERENCES public.ppid_keberatan(id);


--
-- TOC entry 3471 (class 2606 OID 43428)
-- Name: status_permohonan status_permohonan_id_ppid_permohonan_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_permohonan
    ADD CONSTRAINT status_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);


--
-- TOC entry 3472 (class 2606 OID 43433)
-- Name: status_permohonan status_permohonan_id_status_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status_permohonan
    ADD CONSTRAINT status_permohonan_id_status_foreign FOREIGN KEY (id_status) REFERENCES public.status(id);


--
-- TOC entry 3473 (class 2606 OID 43608)
-- Name: submenus submenus_main_menu_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_main_menu_id_foreign FOREIGN KEY (main_menu_id) REFERENCES public.mainmenus(id);


-- Completed on 2023-01-02 07:57:48

--
-- PostgreSQL database dump complete
--

