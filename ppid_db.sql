PGDMP         8            
    z            ppid2    12.12    12.12 �   �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    17154    ppid2    DATABASE     �   CREATE DATABASE ppid2 WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';
    DROP DATABASE ppid2;
                postgres    false            �            1259    32885    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    32883    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    217            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    216                       1259    33412    informasipubliks_banner    TABLE     �   CREATE TABLE public.informasipubliks_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 +   DROP TABLE public.informasipubliks_banner;
       public         heap    postgres    false                       1259    33410    informasipubliks_banner_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.informasipubliks_banner_id_seq;
       public          postgres    false    279            �           0    0    informasipubliks_banner_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.informasipubliks_banner_id_seq OWNED BY public.informasipubliks_banner.id;
          public          postgres    false    278                       1259    33420    informasipubliks_secaraberkala    TABLE     1  CREATE TABLE public.informasipubliks_secaraberkala (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 2   DROP TABLE public.informasipubliks_secaraberkala;
       public         heap    postgres    false                       1259    33418 %   informasipubliks_secaraberkala_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_secaraberkala_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.informasipubliks_secaraberkala_id_seq;
       public          postgres    false    281            �           0    0 %   informasipubliks_secaraberkala_id_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.informasipubliks_secaraberkala_id_seq OWNED BY public.informasipubliks_secaraberkala.id;
          public          postgres    false    280                       1259    33431    informasipubliks_sertamerta    TABLE     .  CREATE TABLE public.informasipubliks_sertamerta (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 /   DROP TABLE public.informasipubliks_sertamerta;
       public         heap    postgres    false                       1259    33429 "   informasipubliks_sertamerta_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_sertamerta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.informasipubliks_sertamerta_id_seq;
       public          postgres    false    283            �           0    0 "   informasipubliks_sertamerta_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.informasipubliks_sertamerta_id_seq OWNED BY public.informasipubliks_sertamerta.id;
          public          postgres    false    282                       1259    33442    informasipubliks_setiapsaat    TABLE     .  CREATE TABLE public.informasipubliks_setiapsaat (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 /   DROP TABLE public.informasipubliks_setiapsaat;
       public         heap    postgres    false                       1259    33440 "   informasipubliks_setiapsaat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_setiapsaat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.informasipubliks_setiapsaat_id_seq;
       public          postgres    false    285            �           0    0 "   informasipubliks_setiapsaat_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.informasipubliks_setiapsaat_id_seq OWNED BY public.informasipubliks_setiapsaat.id;
          public          postgres    false    284            !           1259    33703 
   informasis    TABLE     @  CREATE TABLE public.informasis (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    judul character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.informasis;
       public         heap    postgres    false                        1259    33701    informasis_id_seq    SEQUENCE     z   CREATE SEQUENCE public.informasis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.informasis_id_seq;
       public          postgres    false    289            �           0    0    informasis_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.informasis_id_seq OWNED BY public.informasis.id;
          public          postgres    false    288            #           1259    33714    informasis_image    TABLE       CREATE TABLE public.informasis_image (
    id bigint NOT NULL,
    sideimage_path character varying(255) NOT NULL,
    backgroundimage_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.informasis_image;
       public         heap    postgres    false            "           1259    33712    informasis_image_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasis_image_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.informasis_image_id_seq;
       public          postgres    false    291            �           0    0    informasis_image_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.informasis_image_id_seq OWNED BY public.informasis_image.id;
          public          postgres    false    290            	           1259    33218    kontaks    TABLE     �  CREATE TABLE public.kontaks (
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
    DROP TABLE public.kontaks;
       public         heap    postgres    false                       1259    33229    kontaks_dokumentasiruangppid    TABLE     (  CREATE TABLE public.kontaks_dokumentasiruangppid (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 0   DROP TABLE public.kontaks_dokumentasiruangppid;
       public         heap    postgres    false            
           1259    33227 #   kontaks_dokumentasiruangppid_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kontaks_dokumentasiruangppid_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 :   DROP SEQUENCE public.kontaks_dokumentasiruangppid_id_seq;
       public          postgres    false    267            �           0    0 #   kontaks_dokumentasiruangppid_id_seq    SEQUENCE OWNED BY     k   ALTER SEQUENCE public.kontaks_dokumentasiruangppid_id_seq OWNED BY public.kontaks_dokumentasiruangppid.id;
          public          postgres    false    266                       1259    33216    kontaks_id_seq    SEQUENCE     w   CREATE SEQUENCE public.kontaks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.kontaks_id_seq;
       public          postgres    false    265            �           0    0    kontaks_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.kontaks_id_seq OWNED BY public.kontaks.id;
          public          postgres    false    264            �            1259    33001    laporan_berkala    TABLE     9  CREATE TABLE public.laporan_berkala (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 #   DROP TABLE public.laporan_berkala;
       public         heap    postgres    false            �            1259    32999    laporan_berkala_id_seq    SEQUENCE        CREATE SEQUENCE public.laporan_berkala_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.laporan_berkala_id_seq;
       public          postgres    false    233            �           0    0    laporan_berkala_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.laporan_berkala_id_seq OWNED BY public.laporan_berkala.id;
          public          postgres    false    232            �            1259    33017    laporan_serta_merta    TABLE     =  CREATE TABLE public.laporan_serta_merta (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 '   DROP TABLE public.laporan_serta_merta;
       public         heap    postgres    false            �            1259    33015    laporan_serta_merta_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporan_serta_merta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.laporan_serta_merta_id_seq;
       public          postgres    false    235            �           0    0    laporan_serta_merta_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.laporan_serta_merta_id_seq OWNED BY public.laporan_serta_merta.id;
          public          postgres    false    234            �            1259    33033    laporan_setiap_saat    TABLE     =  CREATE TABLE public.laporan_setiap_saat (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 '   DROP TABLE public.laporan_setiap_saat;
       public         heap    postgres    false            �            1259    33031    laporan_setiap_saat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporan_setiap_saat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.laporan_setiap_saat_id_seq;
       public          postgres    false    237            �           0    0    laporan_setiap_saat_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.laporan_setiap_saat_id_seq OWNED BY public.laporan_setiap_saat.id;
          public          postgres    false    236            1           1259    33907    laporans_banner    TABLE     �   CREATE TABLE public.laporans_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.laporans_banner;
       public         heap    postgres    false            0           1259    33905    laporans_banner_id_seq    SEQUENCE        CREATE SEQUENCE public.laporans_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.laporans_banner_id_seq;
       public          postgres    false    305            �           0    0    laporans_banner_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.laporans_banner_id_seq OWNED BY public.laporans_banner.id;
          public          postgres    false    304            7           1259    33937    laporans_hasil_survei    TABLE     :  CREATE TABLE public.laporans_hasil_survei (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 )   DROP TABLE public.laporans_hasil_survei;
       public         heap    postgres    false            6           1259    33935    laporans_hasil_survei_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporans_hasil_survei_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.laporans_hasil_survei_id_seq;
       public          postgres    false    311            �           0    0    laporans_hasil_survei_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.laporans_hasil_survei_id_seq OWNED BY public.laporans_hasil_survei.id;
          public          postgres    false    310            5           1259    33926    laporans_tahunan    TABLE     5  CREATE TABLE public.laporans_tahunan (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.laporans_tahunan;
       public         heap    postgres    false            4           1259    33924    laporans_tahunan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporans_tahunan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.laporans_tahunan_id_seq;
       public          postgres    false    309            �           0    0    laporans_tahunan_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.laporans_tahunan_id_seq OWNED BY public.laporans_tahunan.id;
          public          postgres    false    308            3           1259    33915    laporans_triwulanan    TABLE     8  CREATE TABLE public.laporans_triwulanan (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.laporans_triwulanan;
       public         heap    postgres    false            2           1259    33913    laporans_triwulanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporans_triwulanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.laporans_triwulanan_id_seq;
       public          postgres    false    307            �           0    0    laporans_triwulanan_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.laporans_triwulanan_id_seq OWNED BY public.laporans_triwulanan.id;
          public          postgres    false    306            -           1259    33879 	   mainmenus    TABLE     C  CREATE TABLE public.mainmenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255),
    nama_permission character varying(255),
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.mainmenus;
       public         heap    postgres    false            ,           1259    33877    mainmenus_id_seq    SEQUENCE     y   CREATE SEQUENCE public.mainmenus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.mainmenus_id_seq;
       public          postgres    false    301            �           0    0    mainmenus_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.mainmenus_id_seq OWNED BY public.mainmenus.id;
          public          postgres    false    300            �            1259    32874    menus    TABLE     b  CREATE TABLE public.menus (
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
    DROP TABLE public.menus;
       public         heap    postgres    false            �            1259    32872    menus_id_seq    SEQUENCE     u   CREATE SEQUENCE public.menus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.menus_id_seq;
       public          postgres    false    215            �           0    0    menus_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;
          public          postgres    false    214            �            1259    32689 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    32687    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    203            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    202            �            1259    32835    model_has_permissions    TABLE     �   CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 )   DROP TABLE public.model_has_permissions;
       public         heap    postgres    false            �            1259    32846    model_has_roles    TABLE     �   CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 #   DROP TABLE public.model_has_roles;
       public         heap    postgres    false            �            1259    32802    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    32811    permissions    TABLE     �   CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.permissions;
       public         heap    postgres    false            �            1259    32809    permissions_id_seq    SEQUENCE     {   CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.permissions_id_seq;
       public          postgres    false    208            �           0    0    permissions_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;
          public          postgres    false    207            �            1259    32899    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
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
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    32897    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    219            �           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    218            �            1259    33113 
   ppid_biaya    TABLE     �   CREATE TABLE public.ppid_biaya (
    id bigint NOT NULL,
    deskripsi character varying(255) NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_biaya;
       public         heap    postgres    false            �            1259    33111    ppid_biaya_id_seq    SEQUENCE     z   CREATE SEQUENCE public.ppid_biaya_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.ppid_biaya_id_seq;
       public          postgres    false    247            �           0    0    ppid_biaya_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.ppid_biaya_id_seq OWNED BY public.ppid_biaya.id;
          public          postgres    false    246            �            1259    33065    ppid_faq    TABLE     F  CREATE TABLE public.ppid_faq (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_faq;
       public         heap    postgres    false            �            1259    33063    ppid_faq_id_seq    SEQUENCE     x   CREATE SEQUENCE public.ppid_faq_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.ppid_faq_id_seq;
       public          postgres    false    241            �           0    0    ppid_faq_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.ppid_faq_id_seq OWNED BY public.ppid_faq.id;
          public          postgres    false    240            �            1259    33097    ppid_infografis    TABLE     W  CREATE TABLE public.ppid_infografis (
    id bigint NOT NULL,
    deskripsi character varying(255) NOT NULL,
    direktori_image character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 #   DROP TABLE public.ppid_infografis;
       public         heap    postgres    false            �            1259    33095    ppid_infografis_id_seq    SEQUENCE        CREATE SEQUENCE public.ppid_infografis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ppid_infografis_id_seq;
       public          postgres    false    245            �           0    0    ppid_infografis_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ppid_infografis_id_seq OWNED BY public.ppid_infografis.id;
          public          postgres    false    244            �            1259    32924    ppid_jenis_profil    TABLE     �   CREATE TABLE public.ppid_jenis_profil (
    id bigint NOT NULL,
    jenis_profil character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.ppid_jenis_profil;
       public         heap    postgres    false            �            1259    32922    ppid_jenis_profil_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ppid_jenis_profil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.ppid_jenis_profil_id_seq;
       public          postgres    false    223            �           0    0    ppid_jenis_profil_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.ppid_jenis_profil_id_seq OWNED BY public.ppid_jenis_profil.id;
          public          postgres    false    222            �            1259    32953    ppid_kontak    TABLE     9  CREATE TABLE public.ppid_kontak (
    id bigint NOT NULL,
    nama_data character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    sisi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_kontak;
       public         heap    postgres    false            �            1259    32951    ppid_kontak_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_kontak_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_kontak_id_seq;
       public          postgres    false    227            �           0    0    ppid_kontak_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_kontak_id_seq OWNED BY public.ppid_kontak.id;
          public          postgres    false    226            �            1259    33049    ppid_lap_survey    TABLE     R  CREATE TABLE public.ppid_lap_survey (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 #   DROP TABLE public.ppid_lap_survey;
       public         heap    postgres    false            �            1259    33047    ppid_lap_survey_id_seq    SEQUENCE        CREATE SEQUENCE public.ppid_lap_survey_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ppid_lap_survey_id_seq;
       public          postgres    false    239            �           0    0    ppid_lap_survey_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ppid_lap_survey_id_seq OWNED BY public.ppid_lap_survey.id;
          public          postgres    false    238            �            1259    32969    ppid_lap_th    TABLE     N  CREATE TABLE public.ppid_lap_th (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_lap_th;
       public         heap    postgres    false            �            1259    32967    ppid_lap_th_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_lap_th_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_lap_th_id_seq;
       public          postgres    false    229            �           0    0    ppid_lap_th_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_lap_th_id_seq OWNED BY public.ppid_lap_th.id;
          public          postgres    false    228            �            1259    32985    ppid_lap_tw    TABLE     N  CREATE TABLE public.ppid_lap_tw (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_lap_tw;
       public         heap    postgres    false            �            1259    32983    ppid_lap_tw_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_lap_tw_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_lap_tw_id_seq;
       public          postgres    false    231            �           0    0    ppid_lap_tw_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_lap_tw_id_seq OWNED BY public.ppid_lap_tw.id;
          public          postgres    false    230            �            1259    33081    ppid_maklumat    TABLE     7  CREATE TABLE public.ppid_maklumat (
    id bigint NOT NULL,
    direktori_image character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 !   DROP TABLE public.ppid_maklumat;
       public         heap    postgres    false            �            1259    33079    ppid_maklumat_id_seq    SEQUENCE     }   CREATE SEQUENCE public.ppid_maklumat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.ppid_maklumat_id_seq;
       public          postgres    false    243            �           0    0    ppid_maklumat_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.ppid_maklumat_id_seq OWNED BY public.ppid_maklumat.id;
          public          postgres    false    242            �            1259    32913 	   ppid_menu    TABLE       CREATE TABLE public.ppid_menu (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255) NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.ppid_menu;
       public         heap    postgres    false            �            1259    32911    ppid_menu_id_seq    SEQUENCE     y   CREATE SEQUENCE public.ppid_menu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.ppid_menu_id_seq;
       public          postgres    false    221            �           0    0    ppid_menu_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.ppid_menu_id_seq OWNED BY public.ppid_menu.id;
          public          postgres    false    220            �            1259    32932    ppid_profil    TABLE     _  CREATE TABLE public.ppid_profil (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    narasi character varying(255) NOT NULL,
    direktori_image character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer,
    id_ppid_jenis_profil integer
);
    DROP TABLE public.ppid_profil;
       public         heap    postgres    false            �            1259    32930    ppid_profil_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_profil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_profil_id_seq;
       public          postgres    false    225            �           0    0    ppid_profil_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_profil_id_seq OWNED BY public.ppid_profil.id;
          public          postgres    false    224            �            1259    33126    ppid_regulasi    TABLE     �   CREATE TABLE public.ppid_regulasi (
    id bigint NOT NULL,
    jenis_regulasi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.ppid_regulasi;
       public         heap    postgres    false            �            1259    33124    ppid_regulasi_id_seq    SEQUENCE     }   CREATE SEQUENCE public.ppid_regulasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.ppid_regulasi_id_seq;
       public          postgres    false    249            �           0    0    ppid_regulasi_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.ppid_regulasi_id_seq OWNED BY public.ppid_regulasi.id;
          public          postgres    false    248            �            1259    33134    ppid_regulasi_peraturan    TABLE     a  CREATE TABLE public.ppid_regulasi_peraturan (
    id bigint NOT NULL,
    nama_regulasi character varying(255) NOT NULL,
    direktori_file character varying(255) NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer,
    id_jenis_regulasi integer
);
 +   DROP TABLE public.ppid_regulasi_peraturan;
       public         heap    postgres    false            �            1259    33132    ppid_regulasi_peraturan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ppid_regulasi_peraturan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.ppid_regulasi_peraturan_id_seq;
       public          postgres    false    251            �           0    0    ppid_regulasi_peraturan_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.ppid_regulasi_peraturan_id_seq OWNED BY public.ppid_regulasi_peraturan.id;
          public          postgres    false    250            �            1259    33155    profilsingkats    TABLE     6  CREATE TABLE public.profilsingkats (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    konten text NOT NULL,
    banner_path character varying(255),
    side_image_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.profilsingkats;
       public         heap    postgres    false            �            1259    33153    profilsingkats_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.profilsingkats_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.profilsingkats_id_seq;
       public          postgres    false    253            �           0    0    profilsingkats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.profilsingkats_id_seq OWNED BY public.profilsingkats.id;
          public          postgres    false    252                       1259    33308    regulasis_banner    TABLE     �   CREATE TABLE public.regulasis_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.regulasis_banner;
       public         heap    postgres    false                       1259    33306    regulasis_banner_id_seq    SEQUENCE     �   CREATE SEQUENCE public.regulasis_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.regulasis_banner_id_seq;
       public          postgres    false    273            �           0    0    regulasis_banner_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.regulasis_banner_id_seq OWNED BY public.regulasis_banner.id;
          public          postgres    false    272                       1259    33316    regulasis_peraturankip    TABLE     &  CREATE TABLE public.regulasis_peraturankip (
    id bigint NOT NULL,
    judul_peraturan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.regulasis_peraturankip;
       public         heap    postgres    false                       1259    33314    regulasis_peraturankip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.regulasis_peraturankip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.regulasis_peraturankip_id_seq;
       public          postgres    false    275            �           0    0    regulasis_peraturankip_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.regulasis_peraturankip_id_seq OWNED BY public.regulasis_peraturankip.id;
          public          postgres    false    274                       1259    33327    regulasis_rancanganperaturankip    TABLE     /  CREATE TABLE public.regulasis_rancanganperaturankip (
    id bigint NOT NULL,
    judul_peraturan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 3   DROP TABLE public.regulasis_rancanganperaturankip;
       public         heap    postgres    false                       1259    33325 &   regulasis_rancanganperaturankip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.regulasis_rancanganperaturankip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.regulasis_rancanganperaturankip_id_seq;
       public          postgres    false    277            �           0    0 &   regulasis_rancanganperaturankip_id_seq    SEQUENCE OWNED BY     q   ALTER SEQUENCE public.regulasis_rancanganperaturankip_id_seq OWNED BY public.regulasis_rancanganperaturankip.id;
          public          postgres    false    276            �            1259    32857    role_has_permissions    TABLE     m   CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);
 (   DROP TABLE public.role_has_permissions;
       public         heap    postgres    false            �            1259    32824    roles    TABLE     �   CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.roles;
       public         heap    postgres    false            �            1259    32822    roles_id_seq    SEQUENCE     u   CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public          postgres    false    210            �           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
          public          postgres    false    209                       1259    33692    sliders    TABLE     +  CREATE TABLE public.sliders (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    judul character varying(255),
    deskripsi character varying(255),
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.sliders;
       public         heap    postgres    false                       1259    33690    sliders_id_seq    SEQUENCE     w   CREATE SEQUENCE public.sliders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.sliders_id_seq;
       public          postgres    false    287            �           0    0    sliders_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.sliders_id_seq OWNED BY public.sliders.id;
          public          postgres    false    286                       1259    33240    sosialmedias    TABLE       CREATE TABLE public.sosialmedias (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.sosialmedias;
       public         heap    postgres    false                       1259    33238    sosialmedias_id_seq    SEQUENCE     |   CREATE SEQUENCE public.sosialmedias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.sosialmedias_id_seq;
       public          postgres    false    269            �           0    0    sosialmedias_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.sosialmedias_id_seq OWNED BY public.sosialmedias.id;
          public          postgres    false    268                       1259    33251    sosialmedias_linkapps    TABLE     �   CREATE TABLE public.sosialmedias_linkapps (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 )   DROP TABLE public.sosialmedias_linkapps;
       public         heap    postgres    false                       1259    33249    sosialmedias_linkapps_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sosialmedias_linkapps_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.sosialmedias_linkapps_id_seq;
       public          postgres    false    271            �           0    0    sosialmedias_linkapps_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.sosialmedias_linkapps_id_seq OWNED BY public.sosialmedias_linkapps.id;
          public          postgres    false    270            +           1259    33759    standarlayanans_biayalayanan    TABLE     5  CREATE TABLE public.standarlayanans_biayalayanan (
    id bigint NOT NULL,
    judul character varying(255),
    deskripsi text,
    banner_path character varying(255),
    direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 0   DROP TABLE public.standarlayanans_biayalayanan;
       public         heap    postgres    false            *           1259    33757 #   standarlayanans_biayalayanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.standarlayanans_biayalayanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 :   DROP SEQUENCE public.standarlayanans_biayalayanan_id_seq;
       public          postgres    false    299            �           0    0 #   standarlayanans_biayalayanan_id_seq    SEQUENCE OWNED BY     k   ALTER SEQUENCE public.standarlayanans_biayalayanan_id_seq OWNED BY public.standarlayanans_biayalayanan.id;
          public          postgres    false    298            '           1259    33737    standarlayanans_maklumat    TABLE       CREATE TABLE public.standarlayanans_maklumat (
    id bigint NOT NULL,
    judul character varying(255),
    banner_path character varying(255),
    direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 ,   DROP TABLE public.standarlayanans_maklumat;
       public         heap    postgres    false            &           1259    33735    standarlayanans_maklumat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.standarlayanans_maklumat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.standarlayanans_maklumat_id_seq;
       public          postgres    false    295            �           0    0    standarlayanans_maklumat_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.standarlayanans_maklumat_id_seq OWNED BY public.standarlayanans_maklumat.id;
          public          postgres    false    294            )           1259    33748    standarlayanans_prosedurlayanan    TABLE     C  CREATE TABLE public.standarlayanans_prosedurlayanan (
    id bigint NOT NULL,
    banner_path character varying(255),
    permohonan_direktori_image character varying(255),
    keberatan_direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 3   DROP TABLE public.standarlayanans_prosedurlayanan;
       public         heap    postgres    false            (           1259    33746 &   standarlayanans_prosedurlayanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.standarlayanans_prosedurlayanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.standarlayanans_prosedurlayanan_id_seq;
       public          postgres    false    297            �           0    0 &   standarlayanans_prosedurlayanan_id_seq    SEQUENCE OWNED BY     q   ALTER SEQUENCE public.standarlayanans_prosedurlayanan_id_seq OWNED BY public.standarlayanans_prosedurlayanan.id;
          public          postgres    false    296                       1259    33177    strukturorganisasis    TABLE     �   CREATE TABLE public.strukturorganisasis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    banner_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.strukturorganisasis;
       public         heap    postgres    false                       1259    33196    strukturorganisasis_bagankanan    TABLE       CREATE TABLE public.strukturorganisasis_bagankanan (
    id bigint NOT NULL,
    nomenklatur character varying(255) NOT NULL,
    deskripsi text NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 2   DROP TABLE public.strukturorganisasis_bagankanan;
       public         heap    postgres    false                       1259    33188    strukturorganisasis_bagankiri    TABLE     �   CREATE TABLE public.strukturorganisasis_bagankiri (
    id bigint NOT NULL,
    nomenklatur character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 1   DROP TABLE public.strukturorganisasis_bagankiri;
       public         heap    postgres    false                       1259    33194 &   strukturorganisasis_bagiankanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.strukturorganisasis_bagiankanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.strukturorganisasis_bagiankanan_id_seq;
       public          postgres    false    261            �           0    0 &   strukturorganisasis_bagiankanan_id_seq    SEQUENCE OWNED BY     p   ALTER SEQUENCE public.strukturorganisasis_bagiankanan_id_seq OWNED BY public.strukturorganisasis_bagankanan.id;
          public          postgres    false    260                       1259    33186 %   strukturorganisasis_bagiankiri_id_seq    SEQUENCE     �   CREATE SEQUENCE public.strukturorganisasis_bagiankiri_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.strukturorganisasis_bagiankiri_id_seq;
       public          postgres    false    259            �           0    0 %   strukturorganisasis_bagiankiri_id_seq    SEQUENCE OWNED BY     n   ALTER SEQUENCE public.strukturorganisasis_bagiankiri_id_seq OWNED BY public.strukturorganisasis_bagankiri.id;
          public          postgres    false    258                        1259    33175    strukturorganisasis_id_seq    SEQUENCE     �   CREATE SEQUENCE public.strukturorganisasis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.strukturorganisasis_id_seq;
       public          postgres    false    257            �           0    0    strukturorganisasis_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.strukturorganisasis_id_seq OWNED BY public.strukturorganisasis.id;
          public          postgres    false    256            /           1259    33890    submenus    TABLE     n  CREATE TABLE public.submenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255) NOT NULL,
    nama_permission character varying(255) NOT NULL,
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    main_menu_id integer
);
    DROP TABLE public.submenus;
       public         heap    postgres    false            .           1259    33888    submenus_id_seq    SEQUENCE     x   CREATE SEQUENCE public.submenus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.submenus_id_seq;
       public          postgres    false    303            �           0    0    submenus_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.submenus_id_seq OWNED BY public.submenus.id;
          public          postgres    false    302            �            1259    33166    tugasdanfungsis    TABLE     I  CREATE TABLE public.tugasdanfungsis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    konten text NOT NULL,
    banner_path character varying(255) NOT NULL,
    side_image_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.tugasdanfungsis;
       public         heap    postgres    false            �            1259    33164    tugasdanfungsis_id_seq    SEQUENCE        CREATE SEQUENCE public.tugasdanfungsis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.tugasdanfungsis_id_seq;
       public          postgres    false    255            �           0    0    tugasdanfungsis_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.tugasdanfungsis_id_seq OWNED BY public.tugasdanfungsis.id;
          public          postgres    false    254            �            1259    32791    users    TABLE     �  CREATE TABLE public.users (
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
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    32789    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    205            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    204            %           1259    33725    videos    TABLE       CREATE TABLE public.videos (
    id bigint NOT NULL,
    url character varying(255) NOT NULL,
    deskripsi character varying(255),
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.videos;
       public         heap    postgres    false            $           1259    33723    videos_id_seq    SEQUENCE     v   CREATE SEQUENCE public.videos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.videos_id_seq;
       public          postgres    false    293            �           0    0    videos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.videos_id_seq OWNED BY public.videos.id;
          public          postgres    false    292                       1259    33207 	   visimisis    TABLE     �   CREATE TABLE public.visimisis (
    id bigint NOT NULL,
    visi text NOT NULL,
    misi text NOT NULL,
    banner_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.visimisis;
       public         heap    postgres    false                       1259    33205    visimisis_id_seq    SEQUENCE     y   CREATE SEQUENCE public.visimisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.visimisis_id_seq;
       public          postgres    false    263            �           0    0    visimisis_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.visimisis_id_seq OWNED BY public.visimisis.id;
          public          postgres    false    262            �           2604    32888    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217                       2604    33415    informasipubliks_banner id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_banner ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_banner_id_seq'::regclass);
 I   ALTER TABLE public.informasipubliks_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    279    278    279                       2604    33423 !   informasipubliks_secaraberkala id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_secaraberkala ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_secaraberkala_id_seq'::regclass);
 P   ALTER TABLE public.informasipubliks_secaraberkala ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    281    280    281                       2604    33434    informasipubliks_sertamerta id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_sertamerta ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_sertamerta_id_seq'::regclass);
 M   ALTER TABLE public.informasipubliks_sertamerta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    283    282    283                       2604    33445    informasipubliks_setiapsaat id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_setiapsaat ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_setiapsaat_id_seq'::regclass);
 M   ALTER TABLE public.informasipubliks_setiapsaat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    285    284    285                       2604    33706    informasis id    DEFAULT     n   ALTER TABLE ONLY public.informasis ALTER COLUMN id SET DEFAULT nextval('public.informasis_id_seq'::regclass);
 <   ALTER TABLE public.informasis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    289    288    289                        2604    33717    informasis_image id    DEFAULT     z   ALTER TABLE ONLY public.informasis_image ALTER COLUMN id SET DEFAULT nextval('public.informasis_image_id_seq'::regclass);
 B   ALTER TABLE public.informasis_image ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    290    291    291                       2604    33221 
   kontaks id    DEFAULT     h   ALTER TABLE ONLY public.kontaks ALTER COLUMN id SET DEFAULT nextval('public.kontaks_id_seq'::regclass);
 9   ALTER TABLE public.kontaks ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    264    265    265                       2604    33232    kontaks_dokumentasiruangppid id    DEFAULT     �   ALTER TABLE ONLY public.kontaks_dokumentasiruangppid ALTER COLUMN id SET DEFAULT nextval('public.kontaks_dokumentasiruangppid_id_seq'::regclass);
 N   ALTER TABLE public.kontaks_dokumentasiruangppid ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    267    266    267                       2604    33004    laporan_berkala id    DEFAULT     x   ALTER TABLE ONLY public.laporan_berkala ALTER COLUMN id SET DEFAULT nextval('public.laporan_berkala_id_seq'::regclass);
 A   ALTER TABLE public.laporan_berkala ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232    233                       2604    33020    laporan_serta_merta id    DEFAULT     �   ALTER TABLE ONLY public.laporan_serta_merta ALTER COLUMN id SET DEFAULT nextval('public.laporan_serta_merta_id_seq'::regclass);
 E   ALTER TABLE public.laporan_serta_merta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    234    235    235                       2604    33036    laporan_setiap_saat id    DEFAULT     �   ALTER TABLE ONLY public.laporan_setiap_saat ALTER COLUMN id SET DEFAULT nextval('public.laporan_setiap_saat_id_seq'::regclass);
 E   ALTER TABLE public.laporan_setiap_saat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    237    237            '           2604    33910    laporans_banner id    DEFAULT     x   ALTER TABLE ONLY public.laporans_banner ALTER COLUMN id SET DEFAULT nextval('public.laporans_banner_id_seq'::regclass);
 A   ALTER TABLE public.laporans_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    305    304    305            *           2604    33940    laporans_hasil_survei id    DEFAULT     �   ALTER TABLE ONLY public.laporans_hasil_survei ALTER COLUMN id SET DEFAULT nextval('public.laporans_hasil_survei_id_seq'::regclass);
 G   ALTER TABLE public.laporans_hasil_survei ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    311    310    311            )           2604    33929    laporans_tahunan id    DEFAULT     z   ALTER TABLE ONLY public.laporans_tahunan ALTER COLUMN id SET DEFAULT nextval('public.laporans_tahunan_id_seq'::regclass);
 B   ALTER TABLE public.laporans_tahunan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    309    308    309            (           2604    33918    laporans_triwulanan id    DEFAULT     �   ALTER TABLE ONLY public.laporans_triwulanan ALTER COLUMN id SET DEFAULT nextval('public.laporans_triwulanan_id_seq'::regclass);
 E   ALTER TABLE public.laporans_triwulanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    306    307    307            %           2604    33882    mainmenus id    DEFAULT     l   ALTER TABLE ONLY public.mainmenus ALTER COLUMN id SET DEFAULT nextval('public.mainmenus_id_seq'::regclass);
 ;   ALTER TABLE public.mainmenus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    300    301    301            �           2604    32877    menus id    DEFAULT     d   ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);
 7   ALTER TABLE public.menus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    215    215            �           2604    32692    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202    203            �           2604    32814    permissions id    DEFAULT     p   ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);
 =   ALTER TABLE public.permissions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    208    207    208            �           2604    32902    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218    219            
           2604    33116    ppid_biaya id    DEFAULT     n   ALTER TABLE ONLY public.ppid_biaya ALTER COLUMN id SET DEFAULT nextval('public.ppid_biaya_id_seq'::regclass);
 <   ALTER TABLE public.ppid_biaya ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    246    247                       2604    33068    ppid_faq id    DEFAULT     j   ALTER TABLE ONLY public.ppid_faq ALTER COLUMN id SET DEFAULT nextval('public.ppid_faq_id_seq'::regclass);
 :   ALTER TABLE public.ppid_faq ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    240    241            	           2604    33100    ppid_infografis id    DEFAULT     x   ALTER TABLE ONLY public.ppid_infografis ALTER COLUMN id SET DEFAULT nextval('public.ppid_infografis_id_seq'::regclass);
 A   ALTER TABLE public.ppid_infografis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    245    244    245            �           2604    32927    ppid_jenis_profil id    DEFAULT     |   ALTER TABLE ONLY public.ppid_jenis_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_jenis_profil_id_seq'::regclass);
 C   ALTER TABLE public.ppid_jenis_profil ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223                        2604    32956    ppid_kontak id    DEFAULT     p   ALTER TABLE ONLY public.ppid_kontak ALTER COLUMN id SET DEFAULT nextval('public.ppid_kontak_id_seq'::regclass);
 =   ALTER TABLE public.ppid_kontak ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227                       2604    33052    ppid_lap_survey id    DEFAULT     x   ALTER TABLE ONLY public.ppid_lap_survey ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_survey_id_seq'::regclass);
 A   ALTER TABLE public.ppid_lap_survey ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    238    239    239                       2604    32972    ppid_lap_th id    DEFAULT     p   ALTER TABLE ONLY public.ppid_lap_th ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_th_id_seq'::regclass);
 =   ALTER TABLE public.ppid_lap_th ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229                       2604    32988    ppid_lap_tw id    DEFAULT     p   ALTER TABLE ONLY public.ppid_lap_tw ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_tw_id_seq'::regclass);
 =   ALTER TABLE public.ppid_lap_tw ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    231    231                       2604    33084    ppid_maklumat id    DEFAULT     t   ALTER TABLE ONLY public.ppid_maklumat ALTER COLUMN id SET DEFAULT nextval('public.ppid_maklumat_id_seq'::regclass);
 ?   ALTER TABLE public.ppid_maklumat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    242    243    243            �           2604    32916    ppid_menu id    DEFAULT     l   ALTER TABLE ONLY public.ppid_menu ALTER COLUMN id SET DEFAULT nextval('public.ppid_menu_id_seq'::regclass);
 ;   ALTER TABLE public.ppid_menu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    32935    ppid_profil id    DEFAULT     p   ALTER TABLE ONLY public.ppid_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_profil_id_seq'::regclass);
 =   ALTER TABLE public.ppid_profil ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225                       2604    33129    ppid_regulasi id    DEFAULT     t   ALTER TABLE ONLY public.ppid_regulasi ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_id_seq'::regclass);
 ?   ALTER TABLE public.ppid_regulasi ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    249    248    249                       2604    33137    ppid_regulasi_peraturan id    DEFAULT     �   ALTER TABLE ONLY public.ppid_regulasi_peraturan ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_peraturan_id_seq'::regclass);
 I   ALTER TABLE public.ppid_regulasi_peraturan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    251    250    251                       2604    33158    profilsingkats id    DEFAULT     v   ALTER TABLE ONLY public.profilsingkats ALTER COLUMN id SET DEFAULT nextval('public.profilsingkats_id_seq'::regclass);
 @   ALTER TABLE public.profilsingkats ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    252    253    253                       2604    33311    regulasis_banner id    DEFAULT     z   ALTER TABLE ONLY public.regulasis_banner ALTER COLUMN id SET DEFAULT nextval('public.regulasis_banner_id_seq'::regclass);
 B   ALTER TABLE public.regulasis_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    272    273    273                       2604    33319    regulasis_peraturankip id    DEFAULT     �   ALTER TABLE ONLY public.regulasis_peraturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_peraturankip_id_seq'::regclass);
 H   ALTER TABLE public.regulasis_peraturankip ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    274    275    275                       2604    33330 "   regulasis_rancanganperaturankip id    DEFAULT     �   ALTER TABLE ONLY public.regulasis_rancanganperaturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_rancanganperaturankip_id_seq'::regclass);
 Q   ALTER TABLE public.regulasis_rancanganperaturankip ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    277    276    277            �           2604    32827    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210                       2604    33695 
   sliders id    DEFAULT     h   ALTER TABLE ONLY public.sliders ALTER COLUMN id SET DEFAULT nextval('public.sliders_id_seq'::regclass);
 9   ALTER TABLE public.sliders ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    286    287    287                       2604    33243    sosialmedias id    DEFAULT     r   ALTER TABLE ONLY public.sosialmedias ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_id_seq'::regclass);
 >   ALTER TABLE public.sosialmedias ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    268    269    269                       2604    33254    sosialmedias_linkapps id    DEFAULT     �   ALTER TABLE ONLY public.sosialmedias_linkapps ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_linkapps_id_seq'::regclass);
 G   ALTER TABLE public.sosialmedias_linkapps ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    271    270    271            $           2604    33762    standarlayanans_biayalayanan id    DEFAULT     �   ALTER TABLE ONLY public.standarlayanans_biayalayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_biayalayanan_id_seq'::regclass);
 N   ALTER TABLE public.standarlayanans_biayalayanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    298    299    299            "           2604    33740    standarlayanans_maklumat id    DEFAULT     �   ALTER TABLE ONLY public.standarlayanans_maklumat ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_maklumat_id_seq'::regclass);
 J   ALTER TABLE public.standarlayanans_maklumat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    294    295    295            #           2604    33751 "   standarlayanans_prosedurlayanan id    DEFAULT     �   ALTER TABLE ONLY public.standarlayanans_prosedurlayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_prosedurlayanan_id_seq'::regclass);
 Q   ALTER TABLE public.standarlayanans_prosedurlayanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    297    296    297                       2604    33180    strukturorganisasis id    DEFAULT     �   ALTER TABLE ONLY public.strukturorganisasis ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_id_seq'::regclass);
 E   ALTER TABLE public.strukturorganisasis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    256    257    257                       2604    33199 !   strukturorganisasis_bagankanan id    DEFAULT     �   ALTER TABLE ONLY public.strukturorganisasis_bagankanan ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagiankanan_id_seq'::regclass);
 P   ALTER TABLE public.strukturorganisasis_bagankanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    260    261    261                       2604    33191     strukturorganisasis_bagankiri id    DEFAULT     �   ALTER TABLE ONLY public.strukturorganisasis_bagankiri ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagiankiri_id_seq'::regclass);
 O   ALTER TABLE public.strukturorganisasis_bagankiri ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    259    258    259            &           2604    33893    submenus id    DEFAULT     j   ALTER TABLE ONLY public.submenus ALTER COLUMN id SET DEFAULT nextval('public.submenus_id_seq'::regclass);
 :   ALTER TABLE public.submenus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    302    303    303                       2604    33169    tugasdanfungsis id    DEFAULT     x   ALTER TABLE ONLY public.tugasdanfungsis ALTER COLUMN id SET DEFAULT nextval('public.tugasdanfungsis_id_seq'::regclass);
 A   ALTER TABLE public.tugasdanfungsis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    254    255            �           2604    32794    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204    205            !           2604    33728 	   videos id    DEFAULT     f   ALTER TABLE ONLY public.videos ALTER COLUMN id SET DEFAULT nextval('public.videos_id_seq'::regclass);
 8   ALTER TABLE public.videos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    293    292    293                       2604    33210    visimisis id    DEFAULT     l   ALTER TABLE ONLY public.visimisis ALTER COLUMN id SET DEFAULT nextval('public.visimisis_id_seq'::regclass);
 ;   ALTER TABLE public.visimisis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    263    262    263            J          0    32885    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    217   �      �          0    33412    informasipubliks_banner 
   TABLE DATA           Z   COPY public.informasipubliks_banner (id, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    279   �      �          0    33420    informasipubliks_secaraberkala 
   TABLE DATA           u   COPY public.informasipubliks_secaraberkala (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
    public          postgres    false    281   ^      �          0    33431    informasipubliks_sertamerta 
   TABLE DATA           r   COPY public.informasipubliks_sertamerta (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
    public          postgres    false    283   '      �          0    33442    informasipubliks_setiapsaat 
   TABLE DATA           r   COPY public.informasipubliks_setiapsaat (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
    public          postgres    false    285   i      �          0    33703 
   informasis 
   TABLE DATA           f   COPY public.informasis (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    289   �      �          0    33714    informasis_image 
   TABLE DATA           l   COPY public.informasis_image (id, sideimage_path, backgroundimage_path, created_at, updated_at) FROM stdin;
    public          postgres    false    291   �      z          0    33218    kontaks 
   TABLE DATA           �   COPY public.kontaks (id, alamat, telepon, waktu_pelayanan, banner_path, latitude, longitude, created_at, updated_at, email) FROM stdin;
    public          postgres    false    265         |          0    33229    kontaks_dokumentasiruangppid 
   TABLE DATA           r   COPY public.kontaks_dokumentasiruangppid (id, image_path, keterangan, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    267   �      Z          0    33001    laporan_berkala 
   TABLE DATA           w   COPY public.laporan_berkala (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    233   A      \          0    33017    laporan_serta_merta 
   TABLE DATA           {   COPY public.laporan_serta_merta (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    235   ^      ^          0    33033    laporan_setiap_saat 
   TABLE DATA           {   COPY public.laporan_setiap_saat (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    237   {      �          0    33907    laporans_banner 
   TABLE DATA           R   COPY public.laporans_banner (id, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    305   �      �          0    33937    laporans_hasil_survei 
   TABLE DATA           u   COPY public.laporans_hasil_survei (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
    public          postgres    false    311   �      �          0    33926    laporans_tahunan 
   TABLE DATA           p   COPY public.laporans_tahunan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
    public          postgres    false    309   
      �          0    33915    laporans_triwulanan 
   TABLE DATA           s   COPY public.laporans_triwulanan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
    public          postgres    false    307   '      �          0    33879 	   mainmenus 
   TABLE DATA           l   COPY public.mainmenus (id, nama_menu, routing, nama_permission, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    301   �      H          0    32874    menus 
   TABLE DATA           p   COPY public.menus (id, parent_id, label, icon, status, route_name, "order", created_at, updated_at) FROM stdin;
    public          postgres    false    215   �      <          0    32689 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    203         D          0    32835    model_has_permissions 
   TABLE DATA           T   COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
    public          postgres    false    211   w      E          0    32846    model_has_roles 
   TABLE DATA           H   COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
    public          postgres    false    212   �      ?          0    32802    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    206   �      A          0    32811    permissions 
   TABLE DATA           S   COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
    public          postgres    false    208   �      L          0    32899    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    219   �      h          0    33113 
   ppid_biaya 
   TABLE DATA           a   COPY public.ppid_biaya (id, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    247   �      b          0    33065    ppid_faq 
   TABLE DATA           o   COPY public.ppid_faq (id, judul, deskripsi, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    241         f          0    33097    ppid_infografis 
   TABLE DATA           �   COPY public.ppid_infografis (id, deskripsi, direktori_image, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    245   1      P          0    32924    ppid_jenis_profil 
   TABLE DATA           U   COPY public.ppid_jenis_profil (id, jenis_profil, created_at, updated_at) FROM stdin;
    public          postgres    false    223   N      T          0    32953    ppid_kontak 
   TABLE DATA           h   COPY public.ppid_kontak (id, nama_data, deskripsi, sisi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    227   k      `          0    33049    ppid_lap_survey 
   TABLE DATA           {   COPY public.ppid_lap_survey (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    239   �      V          0    32969    ppid_lap_th 
   TABLE DATA           w   COPY public.ppid_lap_th (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    229   �      X          0    32985    ppid_lap_tw 
   TABLE DATA           w   COPY public.ppid_lap_tw (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    231   �      d          0    33081    ppid_maklumat 
   TABLE DATA           u   COPY public.ppid_maklumat (id, direktori_image, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    243   �      N          0    32913 	   ppid_menu 
   TABLE DATA           \   COPY public.ppid_menu (id, nama_menu, routing, "order", created_at, updated_at) FROM stdin;
    public          postgres    false    221   �      R          0    32932    ppid_profil 
   TABLE DATA           �   COPY public.ppid_profil (id, judul, narasi, direktori_image, created_at, updated_at, parent_id, id_ppid_jenis_profil) FROM stdin;
    public          postgres    false    225         j          0    33126    ppid_regulasi 
   TABLE DATA           S   COPY public.ppid_regulasi (id, jenis_regulasi, created_at, updated_at) FROM stdin;
    public          postgres    false    249   6      l          0    33134    ppid_regulasi_peraturan 
   TABLE DATA           �   COPY public.ppid_regulasi_peraturan (id, nama_regulasi, direktori_file, "order", created_at, updated_at, parent_id, id_jenis_regulasi) FROM stdin;
    public          postgres    false    251   S      n          0    33155    profilsingkats 
   TABLE DATA           q   COPY public.profilsingkats (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
    public          postgres    false    253   p      �          0    33308    regulasis_banner 
   TABLE DATA           S   COPY public.regulasis_banner (id, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    273   �"      �          0    33316    regulasis_peraturankip 
   TABLE DATA           p   COPY public.regulasis_peraturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    275   F#      �          0    33327    regulasis_rancanganperaturankip 
   TABLE DATA           y   COPY public.regulasis_rancanganperaturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    277   �#      F          0    32857    role_has_permissions 
   TABLE DATA           F   COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
    public          postgres    false    213   j$      C          0    32824    roles 
   TABLE DATA           M   COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
    public          postgres    false    210   �&      �          0    33692    sliders 
   TABLE DATA           c   COPY public.sliders (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    287   @'      ~          0    33240    sosialmedias 
   TABLE DATA           U   COPY public.sosialmedias (id, icon, url, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    269   �'      �          0    33251    sosialmedias_linkapps 
   TABLE DATA           V   COPY public.sosialmedias_linkapps (id, icon, url, created_at, updated_at) FROM stdin;
    public          postgres    false    271   �'      �          0    33759    standarlayanans_biayalayanan 
   TABLE DATA           �   COPY public.standarlayanans_biayalayanan (id, judul, deskripsi, banner_path, direktori_image, created_at, updated_at) FROM stdin;
    public          postgres    false    299   �'      �          0    33737    standarlayanans_maklumat 
   TABLE DATA           s   COPY public.standarlayanans_maklumat (id, judul, banner_path, direktori_image, created_at, updated_at) FROM stdin;
    public          postgres    false    295   �*      �          0    33748    standarlayanans_prosedurlayanan 
   TABLE DATA           �   COPY public.standarlayanans_prosedurlayanan (id, banner_path, permohonan_direktori_image, keberatan_direktori_image, created_at, updated_at) FROM stdin;
    public          postgres    false    297   �*      r          0    33177    strukturorganisasis 
   TABLE DATA           ]   COPY public.strukturorganisasis (id, judul, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    257   �*      v          0    33196    strukturorganisasis_bagankanan 
   TABLE DATA           t   COPY public.strukturorganisasis_bagankanan (id, nomenklatur, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    261   S+      t          0    33188    strukturorganisasis_bagankiri 
   TABLE DATA           `   COPY public.strukturorganisasis_bagankiri (id, nomenklatur, created_at, updated_at) FROM stdin;
    public          postgres    false    259   �,      �          0    33890    submenus 
   TABLE DATA           y   COPY public.submenus (id, nama_menu, routing, nama_permission, urutan, created_at, updated_at, main_menu_id) FROM stdin;
    public          postgres    false    303   �,      p          0    33166    tugasdanfungsis 
   TABLE DATA           r   COPY public.tugasdanfungsis (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
    public          postgres    false    255   �-      >          0    32791    users 
   TABLE DATA           �   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, two_factor_secret, two_factor_recovery_codes, two_factor_confirmed_at) FROM stdin;
    public          postgres    false    205   0      �          0    33725    videos 
   TABLE DATA           T   COPY public.videos (id, url, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    293   1      x          0    33207 	   visimisis 
   TABLE DATA           X   COPY public.visimisis (id, visi, misi, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    263   �1      �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    216            �           0    0    informasipubliks_banner_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.informasipubliks_banner_id_seq', 1, true);
          public          postgres    false    278            �           0    0 %   informasipubliks_secaraberkala_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.informasipubliks_secaraberkala_id_seq', 11, true);
          public          postgres    false    280            �           0    0 "   informasipubliks_sertamerta_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.informasipubliks_sertamerta_id_seq', 2, true);
          public          postgres    false    282            �           0    0 "   informasipubliks_setiapsaat_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.informasipubliks_setiapsaat_id_seq', 2, true);
          public          postgres    false    284            �           0    0    informasis_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.informasis_id_seq', 4, true);
          public          postgres    false    288            �           0    0    informasis_image_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.informasis_image_id_seq', 2, true);
          public          postgres    false    290            �           0    0 #   kontaks_dokumentasiruangppid_id_seq    SEQUENCE SET     R   SELECT pg_catalog.setval('public.kontaks_dokumentasiruangppid_id_seq', 11, true);
          public          postgres    false    266            �           0    0    kontaks_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.kontaks_id_seq', 3, true);
          public          postgres    false    264            �           0    0    laporan_berkala_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.laporan_berkala_id_seq', 1, false);
          public          postgres    false    232            �           0    0    laporan_serta_merta_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.laporan_serta_merta_id_seq', 1, false);
          public          postgres    false    234            �           0    0    laporan_setiap_saat_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.laporan_setiap_saat_id_seq', 1, false);
          public          postgres    false    236            �           0    0    laporans_banner_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.laporans_banner_id_seq', 1, true);
          public          postgres    false    304            �           0    0    laporans_hasil_survei_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.laporans_hasil_survei_id_seq', 1, false);
          public          postgres    false    310            �           0    0    laporans_tahunan_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.laporans_tahunan_id_seq', 1, false);
          public          postgres    false    308            �           0    0    laporans_triwulanan_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.laporans_triwulanan_id_seq', 1, true);
          public          postgres    false    306            �           0    0    mainmenus_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.mainmenus_id_seq', 3, true);
          public          postgres    false    300            �           0    0    menus_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.menus_id_seq', 1, false);
          public          postgres    false    214            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 35, true);
          public          postgres    false    202            �           0    0    permissions_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.permissions_id_seq', 96, true);
          public          postgres    false    207            �           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    218            �           0    0    ppid_biaya_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.ppid_biaya_id_seq', 1, false);
          public          postgres    false    246            �           0    0    ppid_faq_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.ppid_faq_id_seq', 1, false);
          public          postgres    false    240            �           0    0    ppid_infografis_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ppid_infografis_id_seq', 1, false);
          public          postgres    false    244            �           0    0    ppid_jenis_profil_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.ppid_jenis_profil_id_seq', 1, false);
          public          postgres    false    222            �           0    0    ppid_kontak_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_kontak_id_seq', 1, false);
          public          postgres    false    226            �           0    0    ppid_lap_survey_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ppid_lap_survey_id_seq', 1, false);
          public          postgres    false    238            �           0    0    ppid_lap_th_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_lap_th_id_seq', 1, false);
          public          postgres    false    228                        0    0    ppid_lap_tw_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_lap_tw_id_seq', 1, false);
          public          postgres    false    230                       0    0    ppid_maklumat_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.ppid_maklumat_id_seq', 1, false);
          public          postgres    false    242                       0    0    ppid_menu_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.ppid_menu_id_seq', 1, false);
          public          postgres    false    220                       0    0    ppid_profil_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_profil_id_seq', 1, false);
          public          postgres    false    224                       0    0    ppid_regulasi_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.ppid_regulasi_id_seq', 1, false);
          public          postgres    false    248                       0    0    ppid_regulasi_peraturan_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.ppid_regulasi_peraturan_id_seq', 1, false);
          public          postgres    false    250                       0    0    profilsingkats_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.profilsingkats_id_seq', 7, true);
          public          postgres    false    252                       0    0    regulasis_banner_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.regulasis_banner_id_seq', 1, true);
          public          postgres    false    272                       0    0    regulasis_peraturankip_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.regulasis_peraturankip_id_seq', 14, true);
          public          postgres    false    274            	           0    0 &   regulasis_rancanganperaturankip_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.regulasis_rancanganperaturankip_id_seq', 2, true);
          public          postgres    false    276            
           0    0    roles_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.roles_id_seq', 7, true);
          public          postgres    false    209                       0    0    sliders_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.sliders_id_seq', 10, true);
          public          postgres    false    286                       0    0    sosialmedias_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.sosialmedias_id_seq', 1, false);
          public          postgres    false    268                       0    0    sosialmedias_linkapps_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.sosialmedias_linkapps_id_seq', 1, false);
          public          postgres    false    270                       0    0 #   standarlayanans_biayalayanan_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.standarlayanans_biayalayanan_id_seq', 1, true);
          public          postgres    false    298                       0    0    standarlayanans_maklumat_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.standarlayanans_maklumat_id_seq', 1, false);
          public          postgres    false    294                       0    0 &   standarlayanans_prosedurlayanan_id_seq    SEQUENCE SET     U   SELECT pg_catalog.setval('public.standarlayanans_prosedurlayanan_id_seq', 1, false);
          public          postgres    false    296                       0    0 &   strukturorganisasis_bagiankanan_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.strukturorganisasis_bagiankanan_id_seq', 7, true);
          public          postgres    false    260                       0    0 %   strukturorganisasis_bagiankiri_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.strukturorganisasis_bagiankiri_id_seq', 3, true);
          public          postgres    false    258                       0    0    strukturorganisasis_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.strukturorganisasis_id_seq', 2, true);
          public          postgres    false    256                       0    0    submenus_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.submenus_id_seq', 4, true);
          public          postgres    false    302                       0    0    tugasdanfungsis_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tugasdanfungsis_id_seq', 1, true);
          public          postgres    false    254                       0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 3, true);
          public          postgres    false    204                       0    0    videos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.videos_id_seq', 4, true);
          public          postgres    false    292                       0    0    visimisis_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.visimisis_id_seq', 1, true);
          public          postgres    false    262            E           2606    32894    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    217            G           2606    32896 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    217            �           2606    33417 4   informasipubliks_banner informasipubliks_banner_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.informasipubliks_banner
    ADD CONSTRAINT informasipubliks_banner_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.informasipubliks_banner DROP CONSTRAINT informasipubliks_banner_pkey;
       public            postgres    false    279            �           2606    33428 B   informasipubliks_secaraberkala informasipubliks_secaraberkala_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.informasipubliks_secaraberkala
    ADD CONSTRAINT informasipubliks_secaraberkala_pkey PRIMARY KEY (id);
 l   ALTER TABLE ONLY public.informasipubliks_secaraberkala DROP CONSTRAINT informasipubliks_secaraberkala_pkey;
       public            postgres    false    281            �           2606    33439 <   informasipubliks_sertamerta informasipubliks_sertamerta_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.informasipubliks_sertamerta
    ADD CONSTRAINT informasipubliks_sertamerta_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.informasipubliks_sertamerta DROP CONSTRAINT informasipubliks_sertamerta_pkey;
       public            postgres    false    283            �           2606    33450 <   informasipubliks_setiapsaat informasipubliks_setiapsaat_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.informasipubliks_setiapsaat
    ADD CONSTRAINT informasipubliks_setiapsaat_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.informasipubliks_setiapsaat DROP CONSTRAINT informasipubliks_setiapsaat_pkey;
       public            postgres    false    285            �           2606    33722 &   informasis_image informasis_image_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.informasis_image
    ADD CONSTRAINT informasis_image_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.informasis_image DROP CONSTRAINT informasis_image_pkey;
       public            postgres    false    291            �           2606    33711    informasis informasis_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.informasis
    ADD CONSTRAINT informasis_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.informasis DROP CONSTRAINT informasis_pkey;
       public            postgres    false    289            |           2606    33237 >   kontaks_dokumentasiruangppid kontaks_dokumentasiruangppid_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.kontaks_dokumentasiruangppid
    ADD CONSTRAINT kontaks_dokumentasiruangppid_pkey PRIMARY KEY (id);
 h   ALTER TABLE ONLY public.kontaks_dokumentasiruangppid DROP CONSTRAINT kontaks_dokumentasiruangppid_pkey;
       public            postgres    false    267            z           2606    33226    kontaks kontaks_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.kontaks
    ADD CONSTRAINT kontaks_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.kontaks DROP CONSTRAINT kontaks_pkey;
       public            postgres    false    265            Z           2606    33009 $   laporan_berkala laporan_berkala_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.laporan_berkala DROP CONSTRAINT laporan_berkala_pkey;
       public            postgres    false    233            \           2606    33025 ,   laporan_serta_merta laporan_serta_merta_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.laporan_serta_merta DROP CONSTRAINT laporan_serta_merta_pkey;
       public            postgres    false    235            ^           2606    33041 ,   laporan_setiap_saat laporan_setiap_saat_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.laporan_setiap_saat DROP CONSTRAINT laporan_setiap_saat_pkey;
       public            postgres    false    237            �           2606    33912 $   laporans_banner laporans_banner_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.laporans_banner
    ADD CONSTRAINT laporans_banner_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.laporans_banner DROP CONSTRAINT laporans_banner_pkey;
       public            postgres    false    305            �           2606    33945 0   laporans_hasil_survei laporans_hasil_survei_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.laporans_hasil_survei
    ADD CONSTRAINT laporans_hasil_survei_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.laporans_hasil_survei DROP CONSTRAINT laporans_hasil_survei_pkey;
       public            postgres    false    311            �           2606    33934 &   laporans_tahunan laporans_tahunan_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.laporans_tahunan
    ADD CONSTRAINT laporans_tahunan_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.laporans_tahunan DROP CONSTRAINT laporans_tahunan_pkey;
       public            postgres    false    309            �           2606    33923 ,   laporans_triwulanan laporans_triwulanan_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.laporans_triwulanan
    ADD CONSTRAINT laporans_triwulanan_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.laporans_triwulanan DROP CONSTRAINT laporans_triwulanan_pkey;
       public            postgres    false    307            �           2606    33887    mainmenus mainmenus_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.mainmenus
    ADD CONSTRAINT mainmenus_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.mainmenus DROP CONSTRAINT mainmenus_pkey;
       public            postgres    false    301            C           2606    32882    menus menus_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.menus DROP CONSTRAINT menus_pkey;
       public            postgres    false    215            ,           2606    32694    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    203            <           2606    32845 0   model_has_permissions model_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);
 Z   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_pkey;
       public            postgres    false    211    211    211            ?           2606    32856 $   model_has_roles model_has_roles_pkey 
   CONSTRAINT     }   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);
 N   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_pkey;
       public            postgres    false    212    212    212            3           2606    32821 .   permissions permissions_name_guard_name_unique 
   CONSTRAINT     u   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);
 X   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_name_guard_name_unique;
       public            postgres    false    208    208            5           2606    32819    permissions permissions_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_pkey;
       public            postgres    false    208            I           2606    32907 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    219            K           2606    32910 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    219            h           2606    33118    ppid_biaya ppid_biaya_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.ppid_biaya DROP CONSTRAINT ppid_biaya_pkey;
       public            postgres    false    247            b           2606    33073    ppid_faq ppid_faq_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.ppid_faq DROP CONSTRAINT ppid_faq_pkey;
       public            postgres    false    241            f           2606    33105 $   ppid_infografis ppid_infografis_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ppid_infografis DROP CONSTRAINT ppid_infografis_pkey;
       public            postgres    false    245            P           2606    32929 (   ppid_jenis_profil ppid_jenis_profil_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.ppid_jenis_profil
    ADD CONSTRAINT ppid_jenis_profil_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.ppid_jenis_profil DROP CONSTRAINT ppid_jenis_profil_pkey;
       public            postgres    false    223            T           2606    32961    ppid_kontak ppid_kontak_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_kontak DROP CONSTRAINT ppid_kontak_pkey;
       public            postgres    false    227            `           2606    33057 $   ppid_lap_survey ppid_lap_survey_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ppid_lap_survey DROP CONSTRAINT ppid_lap_survey_pkey;
       public            postgres    false    239            V           2606    32977    ppid_lap_th ppid_lap_th_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_lap_th DROP CONSTRAINT ppid_lap_th_pkey;
       public            postgres    false    229            X           2606    32993    ppid_lap_tw ppid_lap_tw_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_lap_tw DROP CONSTRAINT ppid_lap_tw_pkey;
       public            postgres    false    231            d           2606    33089     ppid_maklumat ppid_maklumat_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.ppid_maklumat DROP CONSTRAINT ppid_maklumat_pkey;
       public            postgres    false    243            N           2606    32921    ppid_menu ppid_menu_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.ppid_menu
    ADD CONSTRAINT ppid_menu_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.ppid_menu DROP CONSTRAINT ppid_menu_pkey;
       public            postgres    false    221            R           2606    32940    ppid_profil ppid_profil_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_profil DROP CONSTRAINT ppid_profil_pkey;
       public            postgres    false    225            l           2606    33142 4   ppid_regulasi_peraturan ppid_regulasi_peraturan_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.ppid_regulasi_peraturan DROP CONSTRAINT ppid_regulasi_peraturan_pkey;
       public            postgres    false    251            j           2606    33131     ppid_regulasi ppid_regulasi_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.ppid_regulasi
    ADD CONSTRAINT ppid_regulasi_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.ppid_regulasi DROP CONSTRAINT ppid_regulasi_pkey;
       public            postgres    false    249            n           2606    33163 "   profilsingkats profilsingkats_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.profilsingkats
    ADD CONSTRAINT profilsingkats_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.profilsingkats DROP CONSTRAINT profilsingkats_pkey;
       public            postgres    false    253            �           2606    33313 &   regulasis_banner regulasis_banner_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.regulasis_banner
    ADD CONSTRAINT regulasis_banner_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.regulasis_banner DROP CONSTRAINT regulasis_banner_pkey;
       public            postgres    false    273            �           2606    33324 2   regulasis_peraturankip regulasis_peraturankip_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.regulasis_peraturankip
    ADD CONSTRAINT regulasis_peraturankip_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.regulasis_peraturankip DROP CONSTRAINT regulasis_peraturankip_pkey;
       public            postgres    false    275            �           2606    33335 D   regulasis_rancanganperaturankip regulasis_rancanganperaturankip_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.regulasis_rancanganperaturankip
    ADD CONSTRAINT regulasis_rancanganperaturankip_pkey PRIMARY KEY (id);
 n   ALTER TABLE ONLY public.regulasis_rancanganperaturankip DROP CONSTRAINT regulasis_rancanganperaturankip_pkey;
       public            postgres    false    277            A           2606    32871 .   role_has_permissions role_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);
 X   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_pkey;
       public            postgres    false    213    213            7           2606    32834 "   roles roles_name_guard_name_unique 
   CONSTRAINT     i   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);
 L   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_name_guard_name_unique;
       public            postgres    false    210    210            9           2606    32832    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public            postgres    false    210            �           2606    33700    sliders sliders_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.sliders DROP CONSTRAINT sliders_pkey;
       public            postgres    false    287            �           2606    33259 0   sosialmedias_linkapps sosialmedias_linkapps_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.sosialmedias_linkapps
    ADD CONSTRAINT sosialmedias_linkapps_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.sosialmedias_linkapps DROP CONSTRAINT sosialmedias_linkapps_pkey;
       public            postgres    false    271            ~           2606    33248    sosialmedias sosialmedias_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.sosialmedias
    ADD CONSTRAINT sosialmedias_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.sosialmedias DROP CONSTRAINT sosialmedias_pkey;
       public            postgres    false    269            �           2606    33767 >   standarlayanans_biayalayanan standarlayanans_biayalayanan_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.standarlayanans_biayalayanan
    ADD CONSTRAINT standarlayanans_biayalayanan_pkey PRIMARY KEY (id);
 h   ALTER TABLE ONLY public.standarlayanans_biayalayanan DROP CONSTRAINT standarlayanans_biayalayanan_pkey;
       public            postgres    false    299            �           2606    33745 6   standarlayanans_maklumat standarlayanans_maklumat_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.standarlayanans_maklumat
    ADD CONSTRAINT standarlayanans_maklumat_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.standarlayanans_maklumat DROP CONSTRAINT standarlayanans_maklumat_pkey;
       public            postgres    false    295            �           2606    33756 D   standarlayanans_prosedurlayanan standarlayanans_prosedurlayanan_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.standarlayanans_prosedurlayanan
    ADD CONSTRAINT standarlayanans_prosedurlayanan_pkey PRIMARY KEY (id);
 n   ALTER TABLE ONLY public.standarlayanans_prosedurlayanan DROP CONSTRAINT standarlayanans_prosedurlayanan_pkey;
       public            postgres    false    297            v           2606    33204 C   strukturorganisasis_bagankanan strukturorganisasis_bagiankanan_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.strukturorganisasis_bagankanan
    ADD CONSTRAINT strukturorganisasis_bagiankanan_pkey PRIMARY KEY (id);
 m   ALTER TABLE ONLY public.strukturorganisasis_bagankanan DROP CONSTRAINT strukturorganisasis_bagiankanan_pkey;
       public            postgres    false    261            t           2606    33193 A   strukturorganisasis_bagankiri strukturorganisasis_bagiankiri_pkey 
   CONSTRAINT        ALTER TABLE ONLY public.strukturorganisasis_bagankiri
    ADD CONSTRAINT strukturorganisasis_bagiankiri_pkey PRIMARY KEY (id);
 k   ALTER TABLE ONLY public.strukturorganisasis_bagankiri DROP CONSTRAINT strukturorganisasis_bagiankiri_pkey;
       public            postgres    false    259            r           2606    33185 ,   strukturorganisasis strukturorganisasis_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.strukturorganisasis
    ADD CONSTRAINT strukturorganisasis_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.strukturorganisasis DROP CONSTRAINT strukturorganisasis_pkey;
       public            postgres    false    257            �           2606    33898    submenus submenus_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.submenus DROP CONSTRAINT submenus_pkey;
       public            postgres    false    303            p           2606    33174 $   tugasdanfungsis tugasdanfungsis_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.tugasdanfungsis
    ADD CONSTRAINT tugasdanfungsis_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.tugasdanfungsis DROP CONSTRAINT tugasdanfungsis_pkey;
       public            postgres    false    255            .           2606    32801    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    205            0           2606    32799    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    205            �           2606    33733    videos videos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.videos
    ADD CONSTRAINT videos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.videos DROP CONSTRAINT videos_pkey;
       public            postgres    false    293            x           2606    33215    visimisis visimisis_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.visimisis
    ADD CONSTRAINT visimisis_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.visimisis DROP CONSTRAINT visimisis_pkey;
       public            postgres    false    263            :           1259    32838 /   model_has_permissions_model_id_model_type_index    INDEX     �   CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);
 C   DROP INDEX public.model_has_permissions_model_id_model_type_index;
       public            postgres    false    211    211            =           1259    32849 )   model_has_roles_model_id_model_type_index    INDEX     u   CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);
 =   DROP INDEX public.model_has_roles_model_id_model_type_index;
       public            postgres    false    212    212            1           1259    32808    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    206            L           1259    32908 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    219    219            �           2606    33010 1   laporan_berkala laporan_berkala_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 [   ALTER TABLE ONLY public.laporan_berkala DROP CONSTRAINT laporan_berkala_parent_id_foreign;
       public          postgres    false    233    221    3150            �           2606    33026 9   laporan_serta_merta laporan_serta_merta_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 c   ALTER TABLE ONLY public.laporan_serta_merta DROP CONSTRAINT laporan_serta_merta_parent_id_foreign;
       public          postgres    false    3150    221    235            �           2606    33042 9   laporan_setiap_saat laporan_setiap_saat_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 c   ALTER TABLE ONLY public.laporan_setiap_saat DROP CONSTRAINT laporan_setiap_saat_parent_id_foreign;
       public          postgres    false    221    237    3150            �           2606    32839 A   model_has_permissions model_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_permission_id_foreign;
       public          postgres    false    211    3125    208            �           2606    32850 /   model_has_roles model_has_roles_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_role_id_foreign;
       public          postgres    false    3129    210    212            �           2606    33119 '   ppid_biaya ppid_biaya_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 Q   ALTER TABLE ONLY public.ppid_biaya DROP CONSTRAINT ppid_biaya_parent_id_foreign;
       public          postgres    false    3150    221    247            �           2606    33074 #   ppid_faq ppid_faq_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 M   ALTER TABLE ONLY public.ppid_faq DROP CONSTRAINT ppid_faq_parent_id_foreign;
       public          postgres    false    3150    221    241            �           2606    33106 1   ppid_infografis ppid_infografis_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 [   ALTER TABLE ONLY public.ppid_infografis DROP CONSTRAINT ppid_infografis_parent_id_foreign;
       public          postgres    false    221    3150    245            �           2606    32962 )   ppid_kontak ppid_kontak_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_kontak DROP CONSTRAINT ppid_kontak_parent_id_foreign;
       public          postgres    false    227    3150    221            �           2606    33058 1   ppid_lap_survey ppid_lap_survey_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 [   ALTER TABLE ONLY public.ppid_lap_survey DROP CONSTRAINT ppid_lap_survey_parent_id_foreign;
       public          postgres    false    239    221    3150            �           2606    32978 )   ppid_lap_th ppid_lap_th_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_lap_th DROP CONSTRAINT ppid_lap_th_parent_id_foreign;
       public          postgres    false    221    3150    229            �           2606    32994 )   ppid_lap_tw ppid_lap_tw_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_lap_tw DROP CONSTRAINT ppid_lap_tw_parent_id_foreign;
       public          postgres    false    3150    231    221            �           2606    33090 -   ppid_maklumat ppid_maklumat_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 W   ALTER TABLE ONLY public.ppid_maklumat DROP CONSTRAINT ppid_maklumat_parent_id_foreign;
       public          postgres    false    221    243    3150            �           2606    32946 4   ppid_profil ppid_profil_id_ppid_jenis_profil_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign FOREIGN KEY (id_ppid_jenis_profil) REFERENCES public.ppid_jenis_profil(id);
 ^   ALTER TABLE ONLY public.ppid_profil DROP CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign;
       public          postgres    false    225    3152    223            �           2606    32941 )   ppid_profil ppid_profil_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_profil DROP CONSTRAINT ppid_profil_parent_id_foreign;
       public          postgres    false    3150    225    221            �           2606    33148 I   ppid_regulasi_peraturan ppid_regulasi_peraturan_id_jenis_regulasi_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign FOREIGN KEY (id_jenis_regulasi) REFERENCES public.ppid_regulasi(id);
 s   ALTER TABLE ONLY public.ppid_regulasi_peraturan DROP CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign;
       public          postgres    false    251    249    3178            �           2606    33143 A   ppid_regulasi_peraturan ppid_regulasi_peraturan_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 k   ALTER TABLE ONLY public.ppid_regulasi_peraturan DROP CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign;
       public          postgres    false    221    251    3150            �           2606    32860 ?   role_has_permissions role_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_permission_id_foreign;
       public          postgres    false    208    3125    213            �           2606    32865 9   role_has_permissions role_has_permissions_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_role_id_foreign;
       public          postgres    false    213    3129    210            �           2606    33899 &   submenus submenus_main_menu_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_main_menu_id_foreign FOREIGN KEY (main_menu_id) REFERENCES public.mainmenus(id);
 P   ALTER TABLE ONLY public.submenus DROP CONSTRAINT submenus_main_menu_id_foreign;
       public          postgres    false    3230    301    303            J      x������ � �      �   Q   x�3�LL���s,.N-)���K�/�M,�(M����OJ��K-�Rzy�FFF�����f
&V��V�hb�@aK�=... �g�      �   �   x�����0���):� ��Ȧa!FB4n.��Z�B���[w&�����oO.�>���T�x�D�㖲���E�Xv��;�F\}]C�m���<���S���;"�����1^ւ��~�Q�I/�Z��߫	F�Xv�Z��!i����a��[�
Az���Į��0z?0��#�_���b��SJ�F�f�      �   2   x�3䬪�L�����4202�54�54S00�20�26D3�21����� Pm
�      �   0   x�3�,..���?N###]CC]C3s+#+##L1cS�=... ���      �   �   x����N�0���S��6�@#7�6!ġ ��4�m(^��J�oObb��q��-}�Ȱ1do�����G�s�oGg�SN����vM*�޶��'�21�O�}A�Fh[�5��l�zxp)[����p�Cܦ*~��`2��B��3!���_+��bL�C?�1��O�1�?�*x����lR�u�JN2�/V����0>��N���K���[�GC�_�J]���2�])~��P�B7�u��fP�I      �   [   x�3�LL���s,.N-)����M���K�/�M,��/�LI��MLO�+�Kǧ0)19;�(�4/�����H��P��X�������� �W� ��*      z   �  x��W�o�0����^6���4�ڧ�v�V���I}q��S;����w�ZD�=T�� ������˝�t.UH>I�5�Z!N����6!�	����	����Sw�ǌ� ��,�N����ݗ�_�_�'3_��{�G�$��Z��bn�r-Պ8�T��烕�e%3�~�����z���еv��(c3�,4�!��	/A-3�A��v��&���-ڥ��w@c+#�ؒ���-p|*�r_[�яy���K��|Fzq<$Jz/m�>�AO�+�\���u�~ʉo�Bj�W����஌�Y�qϭ���\�����X�=je��@3�-�)d0�g�>��bjM�Ep�����/��X�����`\h�0^��aƽ5m*շgl�\���AhI���rL7�Q��&8ݔ�Zj�$ ���d�.�5q�1�t�<�]�E=�G���H��tnŅ�&'7��+ ��a��aѕ�*��!�~W�ݘ���a<�o�w����P-�!���f����?{�����m<)��Ith3�g��p,�q�i1��-&�i1��P���rY�Ȕ=��0�c�0���	��v%��PT���h{��VW�%���I�ʚ	�����"ʹ�҆��v�AHS�;K��a�����i�K:,f,�4��Ľ��2��`,!�i�Ҭ��`�����Ԅ �7a���Ю	�      |   b   x���LL���s,.N-)�/(�O������+I��O��.�M2�3�
��9�����H��P��D�������� ��%q�6AtCL���q��qqq ��1�      Z      x������ � �      \      x������ � �      ^      x������ � �      �   E   x�3�LL���s,.N-)��I,�/J��OJ��K-�Rzy�FFF����F�
�V�fV&��ĸb���� }��      �      x������ � �      �      x������ � �      �   `   x�3�L,N�LL���s,.N-)��I,�/J̃��%E��9�y@!��^AJ�Z�3SR=s�S�
��9���tu�L�����L,��q��qqq 1�      �   G   x�3�tI,�H�O,J���L�q��2S�9Ab1~\F�E�i�9.�Tؘ3(5�4'�8*a������ Ӵ�      H      x������ � �      <   \  x�U��n� ����i��wi2aul�E؀fӷ/�
h7~��8�MpPA �{p��7�=��黡����to�'�h+�>JD�QH�RHќ�p����a����%��ك^x��E#O~%�c���⸵�&��g=n���̾ڨq�Ă�H�y��D��bh�W�<�ԏ:x�bg�A=�Ұ'�J�����@���;���*��t��P.� ���Tl[�&v���n=}�F��%���mt)��^�����~7��)&��Aq�U�Z&��1��m$d�o��%蘸��m�I�M�I{��չ����[��p�m���>�+10Yʋ���K�F��/����c�s���      D      x������ � �      E   -   x�3�t,(����OI�)��	-N-�4�2�"j�e�EԘ+F��� 9��      ?      x������ � �      A   �  x���]n�0��g�\�6��=˾L��X|��T{�uRu7�i&/Ui���ଆ�r�����lٗ=2����ϳ��P���b������/�p�0lk7����pm[���U�!����CO�^�"h�r�@KT���|G{�>�B���6���|�@sp�M8x�F?�\�M�?70g��Hg��^FE;x�P�J6/g�������ѕ�D�d%���%���l���̋���M09�WDKh'QD;x%�P���`|��QGox�rS��T��°f�gh(E�3��J�?���3JطG�09h�.�a m-�	��j��u��P������p�4n$AT�^�l
���|S XH���'�ᢒ��"E����E������L1ן߅kp6�O�۠Z�9%u:�W+�1<[��Q��*���cw�IASy��S<QBs)�(Q��Ukv0f�L����J%Jx+�(Q�J��8���ٻ����v��.a��D�eR)4��S)����cpY^��"ZBK�"��3�h�b���.�r��Z�����^����LU<Dq2���]��3�m�_�y,���c�P)b�Oy�1�:<���#c!���e�>:���������8ծ��1��-a�kL*�N��P��$z����������;��g�J�%�"������&z�x�u"P�O�O�u��`�Pw��`�� ����q�����Mx�Z{����#w���5�z� ��z?A��
      L      x������ � �      h      x������ � �      b      x������ � �      f      x������ � �      P      x������ � �      T      x������ � �      `      x������ � �      V      x������ � �      X      x������ � �      d      x������ � �      N      x������ � �      R      x������ � �      j      x������ � �      l      x������ � �      n   f  x��UmO�0�����I4o�D),L�BE��$��Ҹ���d�����;;miy��4�R\�w��sϝw���(3�1YIY�Q����b��*��x�m|�.��ms+�k+�i���I���UJ���'�d���,�=�w�{'}US��������/F�a���m̰�b���: �RuA����ݡ ��Ɍ>VR
��F�����ʪ��\cn$DAЅe�CFi&�@2�YՔ�8�M"xq c&p��3�9|�2+����0YDScL��4�MCg��V{����������?��Q+tdh�]�� �jT/��uޢ��,���ɡ�[�O+b��2c��$Ėت063�k��ͺ����R��baj�2��5���'��l����hK�4��e��0�b��o������#�ӎɷc����b2ܬ��F�o�Z��ǝ ��7�a|F��E��C�Y��6��Lc��:mY]�n�L�&����+0QH���`��%�H�65H`��V8^+�� �+6he-ؒ��{��j �Y/;=
��h�t)�T�&e�}�E��a2DͲ���d_�?LuL�̝Y"�|�߸}����N�Ld���*�m����Id7dDP�+�Ҳ��r7�$��Y��&|0��4��-1��-�X+���n�N�A�JN��9�M���u��`�)����)f����X�xm�}bIc��c-
�z�T�mT#���.Ok+F
6�.Xk7a9���ũݣ��d���ML����,��9!-��cK��X����}�����ϯ�LT}�OWn����^�LK.O�bZ�uS͸X|��V�~��$��2{�e�S6(1c�>*�a' 8��V{�[{a���z����'	�m      �   P   x�3�LL���s,.N-)�/JM/�I,��OJ��K-�Rzy�FFF������
��VFV��13C+S#+#�=... ��       �   j   x�34�L�LL���s,.N-)�/JM/�I,��/H-J,)-J̋��,�N���K�Spҵ��u
�5��5202�5�+HI�4�r�tuM������W� �R�      �   �   x���=�@@�z�\`af :M,5F�3�L�Ǎ8O/ZJe�^�bR\>�����U3��]Գ\Y�U=�����ĭ��=���6���! 0h0��Z����4`�d9.�RM������{��(���8��F�?/�@_B���gG;      F   O  x�����@D��`�B]@&�"��P?='~�־\����������_�{�{�[�,?>]�]>^�^>_�_���(F1�Q�b��(Nũ8�?Gq*Nũ8��T\�Kq)��ť���R\�[q+nŭ�����V܊[EQDE���"�(����*����~�ZEU<�G�(ţx���4��U��W�*^ūx?�_6k6k6k6k6k6k6k6k�܀pn��7�܀pn��7�܀pn��7�����˙˙˙˙˙˙˙˙˙˙˙˙�(c�1�e�2F����mq[���mq[���mq[���mq[���mq[���mq[�2F��Q�(c�1�e�2F��Q�(c�1�e�2F��Q�(c�1�e�2F��Q�(c�1�e�2F��Q�(c�1�e�Q�2FZ�Z�Z�Z�Z�Z��~ݣ�e�(�G�=��Qv��{�5�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�b-�����]Dܹ      C   g   x���;
�PD�:Y�P&y~��WX(������4Ny�#��8�{R��"� A�V4^c�}��/h�߈^��1�B�	r�?^��{�X��׸͘���7�      �   g   x���LL���s,.N-)����M�/��LI-�ON,�/-N��5��*H�4�@##]CC]##CS+cK+Slb\��5k�F�#Č��L��L�b���� ��.N      ~      x������ � �      �      x������ � �      �   �  x��U�O�0>ӿ�0i�$B� �)�*ѱôr����M��ؖ������$]K7�6ND�j��������\d��a�Ë�O׷�gV�Z��읚��n5�.3����̦΀bί��x�k�m�ތ�oZ�h	5�u��u/r� ���F����A��`�_b���=����V��'�,!���FTg���ZjkJP�O��>ʤ�E���m��R[��䴤d	=y=�	[��E�d��r��2�����pTfV!Ea���y���g�W�Ս���e���p�k��|�y���\��cH�o�c�����S��	� ��;��h�	rBYj�O%&G�T�(����,m2��@����F��*�\:76��v�Ve�L���!bA���2}x�xt�$��l���� �[@��-�Ơr���yE��.�|��x�������?!q�%|�����7��ݛ�G�k��g�t���q�e��z�W�n�s �t�`�PM(D�s	�����-�P��:k$����]IQ�U�K���;�Q�75�Q��v�]4�e&�v��1U�.Eؼզ��.����O6�rh�wy��w� x���9��>4e��<�B��f��U��Kش�(���8�O��C��oOv:JF����`0x����      �      x������ � �      �      x������ � �      r   u   x�3�.)*�.)-R�tQ�N�M�+I-�L�Sp
���LL���s,.N-)�/(�O���/���/JO��,N,��OJ��K-�+�K�4202�54�54U00�25�26D3�!c�=... �&�      v   I  x�mQ�n�0<�W��&6A��U�%�Jz�e.ۋ��!ߵI�6���g�ݙYNUߟ_Y/� ��j�"[�����N����ȴ��x�_��U�W��'��]�C�C��i@!^�j*qb�����(�S�q�W7����J�h�s3�O:&�]H��ǄK�d:�ioQsOL���J	��s�9#�q0si0J��U�*B�q�NF�TG�Ԙu��I�� �W���]!��32q�R�Zc�ߜ V2����5]C�s-���[���wF�I���:����M���x�m+����g�����x-�(cQ�����Y˻#�?���Y���      t   C   x�3��M�+I-�Tp
���4202�54�54U00�!clb\F��%�ŉy
�.D�2�$Iy� �
 �      �   �   x�m�[
�0E�'����� A�,�`�0TcHRu����P��s/gn�?;�ㅬ�UD)�=(� �ݜ�%�du����
�9��E�
�O�	&�:P+����@�/Nx��Wa���(EV� [����ڱ�i_bMO.�˽��-+���ޔ5c�%�)m��9ō'"?�9c�G�t�      p   A  x��T�o�0~^��cO �K���R	(H�a< U�.�I���`��������:$^��4��~|��g���BK��m�	V��%|QF٠����ۯg��o�~�>�&�X���?Z),�Uv\�M��+��C�ջsM>�z�V���bt���wԴ��Vj���Ɗ;=��x܆kH��nCs�z�ZJ�[e��qY�TK�VlZ�1���x7�l���+�j����$���%�����m����r �Cx���߸�
� �%��6u*�r��ը%M�.�&�}!�R�1���\�tI�v�+Ȑ(m�f�ؓV�Y�o1τ���h���b�葠�jsJ�쟨K:�h�Ix�z�Y*�L��7$�"�2�{j�Ai�Dzv�iВi���o���1�j����+R=�����y�G=�]�Ɓ �B�S|�$Q3�DΦ�Ȅ;�Ky.�{ i�ޓDvgB��T
�V�/��&���죅eRR!����&��%�/�,]MgX�iy�E>k]S��B���2]wY��*w����=��`�R�d4��c��h2{�v6�l�+��M�fӫ��r0�W��I      >   �   x����n�@��3<����H��Rp	/�R���ا/�鍓��Lf�	:�N��W~%B<�S�'h��� )��di�Zc�޴3	1a��l����W!�,_��;:K�]`@����Ȋ2Eh�䉌*Z���?�QH�T��(�%���y��c S��O0{M8	/.��^����*_�yp{7�����]�=������9ƥ�-t�s�d�i�U `�U-��cl��˼�e��m'���.�����Nw�      �   x   x�3��())(���///׫�/-)MJ�K���O�MJM�75NL�((�wϲ�4A##]CC]#c+cS+c13+##+c.c�憔x��U�sVp�lbeb�n����W� B�.�      x   �  x����n�0��ݧ0=�f(iX	Q{�i�jB&a�1���waQ���"����x��g���w�n�o_�������l��Bh�*?�fl��r��X�a���mȘ�b��k��S�4��b��1z��7o��CKj�}s���l-h0ʠ�A�0H��bm�n������!�t�E��{�A�Ijыd��Z��hCL�Ȯ8��VN���'���A/E�:���Թ;�9�����w��X��:���)�G!�����ĭ>���HK��PG�!��%~����U����4���	��`�07W���(N�梂l�Q,���ô-����M���:O&U(�Q@��������KY�آ��A��AZ���<�S��!���Ώ��31�I�;#"o�Z���g�,���O�/�˧UY���O���*�U����b�Z}�K�j     