PGDMP             
            z            ppid2    12.12    12.12    n           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            o           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            p           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            q           1262    17154    ppid2    DATABASE     �   CREATE DATABASE ppid2 WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';
    DROP DATABASE ppid2;
                postgres    false            �            1259    34337    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    34335    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    205            r           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    204            +           1259    34938    faqs    TABLE     �   CREATE TABLE public.faqs (
    id bigint NOT NULL,
    pertanyaan text NOT NULL,
    jawaban text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.faqs;
       public         heap    postgres    false            )           1259    34930    faqs_banner    TABLE     �   CREATE TABLE public.faqs_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.faqs_banner;
       public         heap    postgres    false            (           1259    34928    faqs_banner_id_seq    SEQUENCE     {   CREATE SEQUENCE public.faqs_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.faqs_banner_id_seq;
       public          postgres    false    297            s           0    0    faqs_banner_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.faqs_banner_id_seq OWNED BY public.faqs_banner.id;
          public          postgres    false    296            *           1259    34936    faqs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.faqs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.faqs_id_seq;
       public          postgres    false    299            t           0    0    faqs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.faqs_id_seq OWNED BY public.faqs.id;
          public          postgres    false    298            O           1259    42345    forward_permohonan    TABLE     �  CREATE TABLE public.forward_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    forward_by character varying(255) NOT NULL,
    forward_to character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    nota_dinas character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public.forward_permohonan;
       public         heap    postgres    false            N           1259    42343    forward_permohonan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.forward_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.forward_permohonan_id_seq;
       public          postgres    false    335            u           0    0    forward_permohonan_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.forward_permohonan_id_seq OWNED BY public.forward_permohonan.id;
          public          postgres    false    334                       1259    34722    informasipubliks_banner    TABLE     �   CREATE TABLE public.informasipubliks_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 +   DROP TABLE public.informasipubliks_banner;
       public         heap    postgres    false                       1259    34720    informasipubliks_banner_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.informasipubliks_banner_id_seq;
       public          postgres    false    263            v           0    0    informasipubliks_banner_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.informasipubliks_banner_id_seq OWNED BY public.informasipubliks_banner.id;
          public          postgres    false    262            	           1259    34730    informasipubliks_secaraberkala    TABLE     (  CREATE TABLE public.informasipubliks_secaraberkala (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255),
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 2   DROP TABLE public.informasipubliks_secaraberkala;
       public         heap    postgres    false                       1259    34728 %   informasipubliks_secaraberkala_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_secaraberkala_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.informasipubliks_secaraberkala_id_seq;
       public          postgres    false    265            w           0    0 %   informasipubliks_secaraberkala_id_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.informasipubliks_secaraberkala_id_seq OWNED BY public.informasipubliks_secaraberkala.id;
          public          postgres    false    264                       1259    34741    informasipubliks_sertamerta    TABLE     %  CREATE TABLE public.informasipubliks_sertamerta (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255),
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 /   DROP TABLE public.informasipubliks_sertamerta;
       public         heap    postgres    false            
           1259    34739 "   informasipubliks_sertamerta_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_sertamerta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.informasipubliks_sertamerta_id_seq;
       public          postgres    false    267            x           0    0 "   informasipubliks_sertamerta_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.informasipubliks_sertamerta_id_seq OWNED BY public.informasipubliks_sertamerta.id;
          public          postgres    false    266                       1259    34752    informasipubliks_setiapsaat    TABLE     %  CREATE TABLE public.informasipubliks_setiapsaat (
    id bigint NOT NULL,
    judul_informasi character varying(255) NOT NULL,
    url character varying(255),
    file_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 /   DROP TABLE public.informasipubliks_setiapsaat;
       public         heap    postgres    false                       1259    34750 "   informasipubliks_setiapsaat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasipubliks_setiapsaat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.informasipubliks_setiapsaat_id_seq;
       public          postgres    false    269            y           0    0 "   informasipubliks_setiapsaat_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.informasipubliks_setiapsaat_id_seq OWNED BY public.informasipubliks_setiapsaat.id;
          public          postgres    false    268                       1259    34807 
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
       public         heap    postgres    false                       1259    34805    informasis_id_seq    SEQUENCE     z   CREATE SEQUENCE public.informasis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.informasis_id_seq;
       public          postgres    false    279            z           0    0    informasis_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.informasis_id_seq OWNED BY public.informasis.id;
          public          postgres    false    278                       1259    34818    informasis_image    TABLE       CREATE TABLE public.informasis_image (
    id bigint NOT NULL,
    sideimage_path character varying(255) NOT NULL,
    backgroundimage_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.informasis_image;
       public         heap    postgres    false                       1259    34816    informasis_image_id_seq    SEQUENCE     �   CREATE SEQUENCE public.informasis_image_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.informasis_image_id_seq;
       public          postgres    false    281            {           0    0    informasis_image_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.informasis_image_id_seq OWNED BY public.informasis_image.id;
          public          postgres    false    280            S           1259    42374    jawab_permohonan    TABLE     F  CREATE TABLE public.jawab_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    ket_jawaban text NOT NULL,
    file_jawaban character varying(255) NOT NULL,
    jawab_by character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.jawab_permohonan;
       public         heap    postgres    false            R           1259    42372    jawab_permohonan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.jawab_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.jawab_permohonan_id_seq;
       public          postgres    false    339            |           0    0    jawab_permohonan_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.jawab_permohonan_id_seq OWNED BY public.jawab_permohonan.id;
          public          postgres    false    338            ?           1259    42197    jenis_identitas    TABLE     j   CREATE TABLE public.jenis_identitas (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);
 #   DROP TABLE public.jenis_identitas;
       public         heap    postgres    false            >           1259    42195    jenis_identitas_id_seq    SEQUENCE        CREATE SEQUENCE public.jenis_identitas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.jenis_identitas_id_seq;
       public          postgres    false    319            }           0    0    jenis_identitas_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.jenis_identitas_id_seq OWNED BY public.jenis_identitas.id;
          public          postgres    false    318            A           1259    42205    jenis_pemohon    TABLE     h   CREATE TABLE public.jenis_pemohon (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);
 !   DROP TABLE public.jenis_pemohon;
       public         heap    postgres    false            @           1259    42203    jenis_pemohon_id_seq    SEQUENCE     }   CREATE SEQUENCE public.jenis_pemohon_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.jenis_pemohon_id_seq;
       public          postgres    false    321            ~           0    0    jenis_pemohon_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.jenis_pemohon_id_seq OWNED BY public.jenis_pemohon.id;
          public          postgres    false    320            �            1259    34670    kontaks    TABLE     �  CREATE TABLE public.kontaks (
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
       public         heap    postgres    false            �            1259    34681    kontaks_dokumentasiruangppid    TABLE     (  CREATE TABLE public.kontaks_dokumentasiruangppid (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 0   DROP TABLE public.kontaks_dokumentasiruangppid;
       public         heap    postgres    false            �            1259    34679 #   kontaks_dokumentasiruangppid_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kontaks_dokumentasiruangppid_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 :   DROP SEQUENCE public.kontaks_dokumentasiruangppid_id_seq;
       public          postgres    false    255                       0    0 #   kontaks_dokumentasiruangppid_id_seq    SEQUENCE OWNED BY     k   ALTER SEQUENCE public.kontaks_dokumentasiruangppid_id_seq OWNED BY public.kontaks_dokumentasiruangppid.id;
          public          postgres    false    254            �            1259    34668    kontaks_id_seq    SEQUENCE     w   CREATE SEQUENCE public.kontaks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.kontaks_id_seq;
       public          postgres    false    253            �           0    0    kontaks_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.kontaks_id_seq OWNED BY public.kontaks.id;
          public          postgres    false    252            �            1259    34453    laporan_berkala    TABLE     9  CREATE TABLE public.laporan_berkala (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 #   DROP TABLE public.laporan_berkala;
       public         heap    postgres    false            �            1259    34451    laporan_berkala_id_seq    SEQUENCE        CREATE SEQUENCE public.laporan_berkala_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.laporan_berkala_id_seq;
       public          postgres    false    221            �           0    0    laporan_berkala_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.laporan_berkala_id_seq OWNED BY public.laporan_berkala.id;
          public          postgres    false    220            �            1259    34469    laporan_serta_merta    TABLE     =  CREATE TABLE public.laporan_serta_merta (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 '   DROP TABLE public.laporan_serta_merta;
       public         heap    postgres    false            �            1259    34467    laporan_serta_merta_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporan_serta_merta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.laporan_serta_merta_id_seq;
       public          postgres    false    223            �           0    0    laporan_serta_merta_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.laporan_serta_merta_id_seq OWNED BY public.laporan_serta_merta.id;
          public          postgres    false    222            �            1259    34485    laporan_setiap_saat    TABLE     =  CREATE TABLE public.laporan_setiap_saat (
    id bigint NOT NULL,
    nama_laporan character varying(255) NOT NULL,
    support_link character varying(255) NOT NULL,
    deskripsi integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 '   DROP TABLE public.laporan_setiap_saat;
       public         heap    postgres    false            �            1259    34483    laporan_setiap_saat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporan_setiap_saat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.laporan_setiap_saat_id_seq;
       public          postgres    false    225            �           0    0    laporan_setiap_saat_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.laporan_setiap_saat_id_seq OWNED BY public.laporan_setiap_saat.id;
          public          postgres    false    224            !           1259    34889    laporans_banner    TABLE     �   CREATE TABLE public.laporans_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.laporans_banner;
       public         heap    postgres    false                        1259    34887    laporans_banner_id_seq    SEQUENCE        CREATE SEQUENCE public.laporans_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.laporans_banner_id_seq;
       public          postgres    false    289            �           0    0    laporans_banner_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.laporans_banner_id_seq OWNED BY public.laporans_banner.id;
          public          postgres    false    288            '           1259    34919    laporans_hasil_survei    TABLE     1  CREATE TABLE public.laporans_hasil_survei (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 )   DROP TABLE public.laporans_hasil_survei;
       public         heap    postgres    false            &           1259    34917    laporans_hasil_survei_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporans_hasil_survei_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.laporans_hasil_survei_id_seq;
       public          postgres    false    295            �           0    0    laporans_hasil_survei_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.laporans_hasil_survei_id_seq OWNED BY public.laporans_hasil_survei.id;
          public          postgres    false    294            %           1259    34908    laporans_tahunan    TABLE     ,  CREATE TABLE public.laporans_tahunan (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.laporans_tahunan;
       public         heap    postgres    false            $           1259    34906    laporans_tahunan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporans_tahunan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.laporans_tahunan_id_seq;
       public          postgres    false    293            �           0    0    laporans_tahunan_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.laporans_tahunan_id_seq OWNED BY public.laporans_tahunan.id;
          public          postgres    false    292            #           1259    34897    laporans_triwulanan    TABLE     /  CREATE TABLE public.laporans_triwulanan (
    id bigint NOT NULL,
    judul_laporan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    thumbnail_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.laporans_triwulanan;
       public         heap    postgres    false            "           1259    34895    laporans_triwulanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.laporans_triwulanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.laporans_triwulanan_id_seq;
       public          postgres    false    291            �           0    0    laporans_triwulanan_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.laporans_triwulanan_id_seq OWNED BY public.laporans_triwulanan.id;
          public          postgres    false    290                       1259    34851    linkapps    TABLE     �   CREATE TABLE public.linkapps (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.linkapps;
       public         heap    postgres    false                       1259    34849    linkapps_id_seq    SEQUENCE     x   CREATE SEQUENCE public.linkapps_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.linkapps_id_seq;
       public          postgres    false    287            �           0    0    linkapps_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.linkapps_id_seq OWNED BY public.linkapps.id;
          public          postgres    false    286            Q           1259    42361    log_permohonan    TABLE     �   CREATE TABLE public.log_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.log_permohonan;
       public         heap    postgres    false            P           1259    42359    log_permohonan_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.log_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.log_permohonan_id_seq;
       public          postgres    false    337            �           0    0    log_permohonan_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.log_permohonan_id_seq OWNED BY public.log_permohonan.id;
          public          postgres    false    336            E           1259    42266 	   mainmenus    TABLE       CREATE TABLE public.mainmenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255),
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.mainmenus;
       public         heap    postgres    false            D           1259    42264    mainmenus_id_seq    SEQUENCE     y   CREATE SEQUENCE public.mainmenus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.mainmenus_id_seq;
       public          postgres    false    325            �           0    0    mainmenus_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.mainmenus_id_seq OWNED BY public.mainmenus.id;
          public          postgres    false    324            7           1259    35051    menus    TABLE     b  CREATE TABLE public.menus (
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
       public         heap    postgres    false            6           1259    35049    menus_id_seq    SEQUENCE     u   CREATE SEQUENCE public.menus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.menus_id_seq;
       public          postgres    false    311            �           0    0    menus_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;
          public          postgres    false    310            �            1259    34235 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    34233    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    203            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    202            3           1259    35012    model_has_permissions    TABLE     �   CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 )   DROP TABLE public.model_has_permissions;
       public         heap    postgres    false            4           1259    35023    model_has_roles    TABLE     �   CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 #   DROP TABLE public.model_has_roles;
       public         heap    postgres    false            .           1259    34979    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            0           1259    34988    permissions    TABLE     �   CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.permissions;
       public         heap    postgres    false            /           1259    34986    permissions_id_seq    SEQUENCE     {   CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.permissions_id_seq;
       public          postgres    false    304            �           0    0    permissions_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;
          public          postgres    false    303            �            1259    34351    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
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
       public         heap    postgres    false            �            1259    34349    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    207            �           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    206            �            1259    34565 
   ppid_biaya    TABLE     �   CREATE TABLE public.ppid_biaya (
    id bigint NOT NULL,
    deskripsi character varying(255) NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_biaya;
       public         heap    postgres    false            �            1259    34563    ppid_biaya_id_seq    SEQUENCE     z   CREATE SEQUENCE public.ppid_biaya_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.ppid_biaya_id_seq;
       public          postgres    false    235            �           0    0    ppid_biaya_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.ppid_biaya_id_seq OWNED BY public.ppid_biaya.id;
          public          postgres    false    234            �            1259    34517    ppid_faq    TABLE     F  CREATE TABLE public.ppid_faq (
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
       public         heap    postgres    false            �            1259    34515    ppid_faq_id_seq    SEQUENCE     x   CREATE SEQUENCE public.ppid_faq_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.ppid_faq_id_seq;
       public          postgres    false    229            �           0    0    ppid_faq_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.ppid_faq_id_seq OWNED BY public.ppid_faq.id;
          public          postgres    false    228            �            1259    34549    ppid_infografis    TABLE     W  CREATE TABLE public.ppid_infografis (
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
       public         heap    postgres    false            �            1259    34547    ppid_infografis_id_seq    SEQUENCE        CREATE SEQUENCE public.ppid_infografis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ppid_infografis_id_seq;
       public          postgres    false    233            �           0    0    ppid_infografis_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ppid_infografis_id_seq OWNED BY public.ppid_infografis.id;
          public          postgres    false    232            �            1259    34376    ppid_jenis_profil    TABLE     �   CREATE TABLE public.ppid_jenis_profil (
    id bigint NOT NULL,
    jenis_profil character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.ppid_jenis_profil;
       public         heap    postgres    false            �            1259    34374    ppid_jenis_profil_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ppid_jenis_profil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.ppid_jenis_profil_id_seq;
       public          postgres    false    211            �           0    0    ppid_jenis_profil_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.ppid_jenis_profil_id_seq OWNED BY public.ppid_jenis_profil.id;
          public          postgres    false    210            �            1259    34405    ppid_kontak    TABLE     9  CREATE TABLE public.ppid_kontak (
    id bigint NOT NULL,
    nama_data character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    sisi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
    DROP TABLE public.ppid_kontak;
       public         heap    postgres    false            �            1259    34403    ppid_kontak_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_kontak_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_kontak_id_seq;
       public          postgres    false    215            �           0    0    ppid_kontak_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_kontak_id_seq OWNED BY public.ppid_kontak.id;
          public          postgres    false    214            �            1259    34501    ppid_lap_survey    TABLE     R  CREATE TABLE public.ppid_lap_survey (
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
       public         heap    postgres    false            �            1259    34499    ppid_lap_survey_id_seq    SEQUENCE        CREATE SEQUENCE public.ppid_lap_survey_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ppid_lap_survey_id_seq;
       public          postgres    false    227            �           0    0    ppid_lap_survey_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ppid_lap_survey_id_seq OWNED BY public.ppid_lap_survey.id;
          public          postgres    false    226            �            1259    34421    ppid_lap_th    TABLE     N  CREATE TABLE public.ppid_lap_th (
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
       public         heap    postgres    false            �            1259    34419    ppid_lap_th_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_lap_th_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_lap_th_id_seq;
       public          postgres    false    217            �           0    0    ppid_lap_th_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_lap_th_id_seq OWNED BY public.ppid_lap_th.id;
          public          postgres    false    216            �            1259    34437    ppid_lap_tw    TABLE     N  CREATE TABLE public.ppid_lap_tw (
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
       public         heap    postgres    false            �            1259    34435    ppid_lap_tw_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_lap_tw_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_lap_tw_id_seq;
       public          postgres    false    219            �           0    0    ppid_lap_tw_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_lap_tw_id_seq OWNED BY public.ppid_lap_tw.id;
          public          postgres    false    218            �            1259    34533    ppid_maklumat    TABLE     7  CREATE TABLE public.ppid_maklumat (
    id bigint NOT NULL,
    direktori_image character varying(255) NOT NULL,
    deskripsi character varying(255) NOT NULL,
    is_active boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    parent_id integer
);
 !   DROP TABLE public.ppid_maklumat;
       public         heap    postgres    false            �            1259    34531    ppid_maklumat_id_seq    SEQUENCE     }   CREATE SEQUENCE public.ppid_maklumat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.ppid_maklumat_id_seq;
       public          postgres    false    231            �           0    0    ppid_maklumat_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.ppid_maklumat_id_seq OWNED BY public.ppid_maklumat.id;
          public          postgres    false    230            ;           1259    42107    ppid_memberikan    TABLE     j   CREATE TABLE public.ppid_memberikan (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);
 #   DROP TABLE public.ppid_memberikan;
       public         heap    postgres    false            :           1259    42105    ppid_memberikan_id_seq    SEQUENCE        CREATE SEQUENCE public.ppid_memberikan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ppid_memberikan_id_seq;
       public          postgres    false    315            �           0    0    ppid_memberikan_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ppid_memberikan_id_seq OWNED BY public.ppid_memberikan.id;
          public          postgres    false    314            9           1259    42099    ppid_mendapatkan    TABLE     k   CREATE TABLE public.ppid_mendapatkan (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);
 $   DROP TABLE public.ppid_mendapatkan;
       public         heap    postgres    false            8           1259    42097    ppid_mendapatkan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ppid_mendapatkan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.ppid_mendapatkan_id_seq;
       public          postgres    false    313            �           0    0    ppid_mendapatkan_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.ppid_mendapatkan_id_seq OWNED BY public.ppid_mendapatkan.id;
          public          postgres    false    312            �            1259    34365 	   ppid_menu    TABLE       CREATE TABLE public.ppid_menu (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255) NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.ppid_menu;
       public         heap    postgres    false            �            1259    34363    ppid_menu_id_seq    SEQUENCE     y   CREATE SEQUENCE public.ppid_menu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.ppid_menu_id_seq;
       public          postgres    false    209            �           0    0    ppid_menu_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.ppid_menu_id_seq OWNED BY public.ppid_menu.id;
          public          postgres    false    208            C           1259    42213    ppid_pendaftar    TABLE     �  CREATE TABLE public.ppid_pendaftar (
    id bigint NOT NULL,
    nama_lengkap character varying(255) NOT NULL,
    jenis_pemohon bigint NOT NULL,
    jenis_identitas bigint NOT NULL,
    nomor_identitas character varying(255) NOT NULL,
    alamat character varying(255) NOT NULL,
    pekerjaan character varying(255) NOT NULL,
    no_hp character varying(255) NOT NULL,
    npwp character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    status character varying(255),
    identitas_file_path character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.ppid_pendaftar;
       public         heap    postgres    false            B           1259    42211    ppid_pendaftar_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.ppid_pendaftar_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.ppid_pendaftar_id_seq;
       public          postgres    false    323            �           0    0    ppid_pendaftar_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.ppid_pendaftar_id_seq OWNED BY public.ppid_pendaftar.id;
          public          postgres    false    322            I           1259    42293    ppid_permohonan    TABLE     �  CREATE TABLE public.ppid_permohonan (
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
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.ppid_permohonan;
       public         heap    postgres    false            =           1259    42152    ppid_permohonan_dkk    TABLE     �   CREATE TABLE public.ppid_permohonan_dkk (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.ppid_permohonan_dkk;
       public         heap    postgres    false            <           1259    42150    ppid_permohonan_dkk_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ppid_permohonan_dkk_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.ppid_permohonan_dkk_id_seq;
       public          postgres    false    317            �           0    0    ppid_permohonan_dkk_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.ppid_permohonan_dkk_id_seq OWNED BY public.ppid_permohonan_dkk.id;
          public          postgres    false    316            H           1259    42291    ppid_permohonan_id_seq    SEQUENCE        CREATE SEQUENCE public.ppid_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ppid_permohonan_id_seq;
       public          postgres    false    329            �           0    0    ppid_permohonan_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ppid_permohonan_id_seq OWNED BY public.ppid_permohonan.id;
          public          postgres    false    328            �            1259    34384    ppid_profil    TABLE     _  CREATE TABLE public.ppid_profil (
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
       public         heap    postgres    false            �            1259    34382    ppid_profil_id_seq    SEQUENCE     {   CREATE SEQUENCE public.ppid_profil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.ppid_profil_id_seq;
       public          postgres    false    213            �           0    0    ppid_profil_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.ppid_profil_id_seq OWNED BY public.ppid_profil.id;
          public          postgres    false    212            �            1259    34578    ppid_regulasi    TABLE     �   CREATE TABLE public.ppid_regulasi (
    id bigint NOT NULL,
    jenis_regulasi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.ppid_regulasi;
       public         heap    postgres    false            �            1259    34576    ppid_regulasi_id_seq    SEQUENCE     }   CREATE SEQUENCE public.ppid_regulasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.ppid_regulasi_id_seq;
       public          postgres    false    237            �           0    0    ppid_regulasi_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.ppid_regulasi_id_seq OWNED BY public.ppid_regulasi.id;
          public          postgres    false    236            �            1259    34586    ppid_regulasi_peraturan    TABLE     a  CREATE TABLE public.ppid_regulasi_peraturan (
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
       public         heap    postgres    false            �            1259    34584    ppid_regulasi_peraturan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ppid_regulasi_peraturan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.ppid_regulasi_peraturan_id_seq;
       public          postgres    false    239            �           0    0    ppid_regulasi_peraturan_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.ppid_regulasi_peraturan_id_seq OWNED BY public.ppid_regulasi_peraturan.id;
          public          postgres    false    238            �            1259    34607    profilsingkats    TABLE     6  CREATE TABLE public.profilsingkats (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    konten text NOT NULL,
    banner_path character varying(255),
    side_image_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.profilsingkats;
       public         heap    postgres    false            �            1259    34605    profilsingkats_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.profilsingkats_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.profilsingkats_id_seq;
       public          postgres    false    241            �           0    0    profilsingkats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.profilsingkats_id_seq OWNED BY public.profilsingkats.id;
          public          postgres    false    240                       1259    34692    regulasis_banner    TABLE     �   CREATE TABLE public.regulasis_banner (
    id bigint NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    thumbnail_path character varying(255)
);
 $   DROP TABLE public.regulasis_banner;
       public         heap    postgres    false                        1259    34690    regulasis_banner_id_seq    SEQUENCE     �   CREATE SEQUENCE public.regulasis_banner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.regulasis_banner_id_seq;
       public          postgres    false    257            �           0    0    regulasis_banner_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.regulasis_banner_id_seq OWNED BY public.regulasis_banner.id;
          public          postgres    false    256                       1259    34700    regulasis_peraturankip    TABLE     &  CREATE TABLE public.regulasis_peraturankip (
    id bigint NOT NULL,
    judul_peraturan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.regulasis_peraturankip;
       public         heap    postgres    false                       1259    34698    regulasis_peraturankip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.regulasis_peraturankip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.regulasis_peraturankip_id_seq;
       public          postgres    false    259            �           0    0    regulasis_peraturankip_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.regulasis_peraturankip_id_seq OWNED BY public.regulasis_peraturankip.id;
          public          postgres    false    258                       1259    34711    regulasis_rancanganperaturankip    TABLE     /  CREATE TABLE public.regulasis_rancanganperaturankip (
    id bigint NOT NULL,
    judul_peraturan character varying(255) NOT NULL,
    file_path character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 3   DROP TABLE public.regulasis_rancanganperaturankip;
       public         heap    postgres    false                       1259    34709 &   regulasis_rancanganperaturankip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.regulasis_rancanganperaturankip_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.regulasis_rancanganperaturankip_id_seq;
       public          postgres    false    261            �           0    0 &   regulasis_rancanganperaturankip_id_seq    SEQUENCE OWNED BY     q   ALTER SEQUENCE public.regulasis_rancanganperaturankip_id_seq OWNED BY public.regulasis_rancanganperaturankip.id;
          public          postgres    false    260            W           1259    42398    reject_permohonan    TABLE     K  CREATE TABLE public.reject_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    id_template_reject bigint NOT NULL,
    file character varying(255) NOT NULL,
    rejected_by character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.reject_permohonan;
       public         heap    postgres    false            V           1259    42396    reject_permohonan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.reject_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.reject_permohonan_id_seq;
       public          postgres    false    343            �           0    0    reject_permohonan_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.reject_permohonan_id_seq OWNED BY public.reject_permohonan.id;
          public          postgres    false    342            5           1259    35034    role_has_permissions    TABLE     m   CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);
 (   DROP TABLE public.role_has_permissions;
       public         heap    postgres    false            2           1259    35001    roles    TABLE     �   CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.roles;
       public         heap    postgres    false            1           1259    34999    roles_id_seq    SEQUENCE     u   CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public          postgres    false    306            �           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
          public          postgres    false    305                       1259    34796    sliders    TABLE     +  CREATE TABLE public.sliders (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    judul character varying(255),
    deskripsi character varying(255),
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.sliders;
       public         heap    postgres    false                       1259    34794    sliders_id_seq    SEQUENCE     w   CREATE SEQUENCE public.sliders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.sliders_id_seq;
       public          postgres    false    277            �           0    0    sliders_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.sliders_id_seq OWNED BY public.sliders.id;
          public          postgres    false    276                       1259    34840    sosialmedias    TABLE       CREATE TABLE public.sosialmedias (
    id bigint NOT NULL,
    icon character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.sosialmedias;
       public         heap    postgres    false                       1259    34838    sosialmedias_id_seq    SEQUENCE     |   CREATE SEQUENCE public.sosialmedias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.sosialmedias_id_seq;
       public          postgres    false    285            �           0    0    sosialmedias_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.sosialmedias_id_seq OWNED BY public.sosialmedias.id;
          public          postgres    false    284                       1259    34785    standarlayanans_biayalayanan    TABLE     5  CREATE TABLE public.standarlayanans_biayalayanan (
    id bigint NOT NULL,
    judul character varying(255),
    deskripsi text,
    banner_path character varying(255),
    direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 0   DROP TABLE public.standarlayanans_biayalayanan;
       public         heap    postgres    false                       1259    34783 #   standarlayanans_biayalayanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.standarlayanans_biayalayanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 :   DROP SEQUENCE public.standarlayanans_biayalayanan_id_seq;
       public          postgres    false    275            �           0    0 #   standarlayanans_biayalayanan_id_seq    SEQUENCE OWNED BY     k   ALTER SEQUENCE public.standarlayanans_biayalayanan_id_seq OWNED BY public.standarlayanans_biayalayanan.id;
          public          postgres    false    274                       1259    34763    standarlayanans_maklumat    TABLE       CREATE TABLE public.standarlayanans_maklumat (
    id bigint NOT NULL,
    judul character varying(255),
    banner_path character varying(255),
    direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 ,   DROP TABLE public.standarlayanans_maklumat;
       public         heap    postgres    false                       1259    34761    standarlayanans_maklumat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.standarlayanans_maklumat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.standarlayanans_maklumat_id_seq;
       public          postgres    false    271            �           0    0    standarlayanans_maklumat_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.standarlayanans_maklumat_id_seq OWNED BY public.standarlayanans_maklumat.id;
          public          postgres    false    270                       1259    34774    standarlayanans_prosedurlayanan    TABLE     C  CREATE TABLE public.standarlayanans_prosedurlayanan (
    id bigint NOT NULL,
    banner_path character varying(255),
    permohonan_direktori_image character varying(255),
    keberatan_direktori_image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 3   DROP TABLE public.standarlayanans_prosedurlayanan;
       public         heap    postgres    false                       1259    34772 &   standarlayanans_prosedurlayanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.standarlayanans_prosedurlayanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.standarlayanans_prosedurlayanan_id_seq;
       public          postgres    false    273            �           0    0 &   standarlayanans_prosedurlayanan_id_seq    SEQUENCE OWNED BY     q   ALTER SEQUENCE public.standarlayanans_prosedurlayanan_id_seq OWNED BY public.standarlayanans_prosedurlayanan.id;
          public          postgres    false    272            K           1259    42319    status    TABLE     a   CREATE TABLE public.status (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);
    DROP TABLE public.status;
       public         heap    postgres    false            J           1259    42317    status_id_seq    SEQUENCE     v   CREATE SEQUENCE public.status_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.status_id_seq;
       public          postgres    false    331            �           0    0    status_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.status_id_seq OWNED BY public.status.id;
          public          postgres    false    330            M           1259    42327    status_permohonan    TABLE     f  CREATE TABLE public.status_permohonan (
    id bigint NOT NULL,
    id_ppid_permohonan bigint NOT NULL,
    id_status bigint NOT NULL,
    modified_by character varying(255),
    modified_date timestamp(0) without time zone NOT NULL,
    aktif boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.status_permohonan;
       public         heap    postgres    false            L           1259    42325    status_permohonan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.status_permohonan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.status_permohonan_id_seq;
       public          postgres    false    333            �           0    0    status_permohonan_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.status_permohonan_id_seq OWNED BY public.status_permohonan.id;
          public          postgres    false    332            �            1259    34629    strukturorganisasis    TABLE     �   CREATE TABLE public.strukturorganisasis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    banner_path character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.strukturorganisasis;
       public         heap    postgres    false            �            1259    34648    strukturorganisasis_bagankanan    TABLE       CREATE TABLE public.strukturorganisasis_bagankanan (
    id bigint NOT NULL,
    nomenklatur character varying(255) NOT NULL,
    deskripsi text NOT NULL,
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 2   DROP TABLE public.strukturorganisasis_bagankanan;
       public         heap    postgres    false            �            1259    34646 %   strukturorganisasis_bagankanan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.strukturorganisasis_bagankanan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.strukturorganisasis_bagankanan_id_seq;
       public          postgres    false    249            �           0    0 %   strukturorganisasis_bagankanan_id_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.strukturorganisasis_bagankanan_id_seq OWNED BY public.strukturorganisasis_bagankanan.id;
          public          postgres    false    248            �            1259    34640    strukturorganisasis_bagankiri    TABLE     �   CREATE TABLE public.strukturorganisasis_bagankiri (
    id bigint NOT NULL,
    nomenklatur character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 1   DROP TABLE public.strukturorganisasis_bagankiri;
       public         heap    postgres    false            �            1259    34638 $   strukturorganisasis_bagankiri_id_seq    SEQUENCE     �   CREATE SEQUENCE public.strukturorganisasis_bagankiri_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ;   DROP SEQUENCE public.strukturorganisasis_bagankiri_id_seq;
       public          postgres    false    247            �           0    0 $   strukturorganisasis_bagankiri_id_seq    SEQUENCE OWNED BY     m   ALTER SEQUENCE public.strukturorganisasis_bagankiri_id_seq OWNED BY public.strukturorganisasis_bagankiri.id;
          public          postgres    false    246            �            1259    34627    strukturorganisasis_id_seq    SEQUENCE     �   CREATE SEQUENCE public.strukturorganisasis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.strukturorganisasis_id_seq;
       public          postgres    false    245            �           0    0    strukturorganisasis_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.strukturorganisasis_id_seq OWNED BY public.strukturorganisasis.id;
          public          postgres    false    244            G           1259    42277    submenus    TABLE     9  CREATE TABLE public.submenus (
    id bigint NOT NULL,
    nama_menu character varying(255) NOT NULL,
    routing character varying(255) NOT NULL,
    urutan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    main_menu_id integer
);
    DROP TABLE public.submenus;
       public         heap    postgres    false            F           1259    42275    submenus_id_seq    SEQUENCE     x   CREATE SEQUENCE public.submenus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.submenus_id_seq;
       public          postgres    false    327            �           0    0    submenus_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.submenus_id_seq OWNED BY public.submenus.id;
          public          postgres    false    326            U           1259    42390    template_reject    TABLE     j   CREATE TABLE public.template_reject (
    id bigint NOT NULL,
    name character varying(255) NOT NULL
);
 #   DROP TABLE public.template_reject;
       public         heap    postgres    false            T           1259    42388    template_reject_id_seq    SEQUENCE        CREATE SEQUENCE public.template_reject_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.template_reject_id_seq;
       public          postgres    false    341            �           0    0    template_reject_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.template_reject_id_seq OWNED BY public.template_reject.id;
          public          postgres    false    340            �            1259    34618    tugasdanfungsis    TABLE     I  CREATE TABLE public.tugasdanfungsis (
    id bigint NOT NULL,
    judul character varying(255) NOT NULL,
    konten text NOT NULL,
    banner_path character varying(255) NOT NULL,
    side_image_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.tugasdanfungsis;
       public         heap    postgres    false            �            1259    34616    tugasdanfungsis_id_seq    SEQUENCE        CREATE SEQUENCE public.tugasdanfungsis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.tugasdanfungsis_id_seq;
       public          postgres    false    243            �           0    0    tugasdanfungsis_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.tugasdanfungsis_id_seq OWNED BY public.tugasdanfungsis.id;
          public          postgres    false    242            -           1259    34968    users    TABLE     �  CREATE TABLE public.users (
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
    DROP TABLE public.users;
       public         heap    postgres    false            ,           1259    34966    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    301            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    300                       1259    34829    videos    TABLE       CREATE TABLE public.videos (
    id bigint NOT NULL,
    url character varying(255) NOT NULL,
    deskripsi character varying(255),
    urutan integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.videos;
       public         heap    postgres    false                       1259    34827    videos_id_seq    SEQUENCE     v   CREATE SEQUENCE public.videos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.videos_id_seq;
       public          postgres    false    283            �           0    0    videos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.videos_id_seq OWNED BY public.videos.id;
          public          postgres    false    282            �            1259    34659 	   visimisis    TABLE     �   CREATE TABLE public.visimisis (
    id bigint NOT NULL,
    visi text NOT NULL,
    misi text NOT NULL,
    banner_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.visimisis;
       public         heap    postgres    false            �            1259    34657    visimisis_id_seq    SEQUENCE     y   CREATE SEQUENCE public.visimisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.visimisis_id_seq;
       public          postgres    false    251            �           0    0    visimisis_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.visimisis_id_seq OWNED BY public.visimisis.id;
          public          postgres    false    250            ]           2604    34340    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204    205            �           2604    34941    faqs id    DEFAULT     b   ALTER TABLE ONLY public.faqs ALTER COLUMN id SET DEFAULT nextval('public.faqs_id_seq'::regclass);
 6   ALTER TABLE public.faqs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    298    299    299            �           2604    34933    faqs_banner id    DEFAULT     p   ALTER TABLE ONLY public.faqs_banner ALTER COLUMN id SET DEFAULT nextval('public.faqs_banner_id_seq'::regclass);
 =   ALTER TABLE public.faqs_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    296    297    297            �           2604    42348    forward_permohonan id    DEFAULT     ~   ALTER TABLE ONLY public.forward_permohonan ALTER COLUMN id SET DEFAULT nextval('public.forward_permohonan_id_seq'::regclass);
 D   ALTER TABLE public.forward_permohonan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    335    334    335            {           2604    34725    informasipubliks_banner id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_banner ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_banner_id_seq'::regclass);
 I   ALTER TABLE public.informasipubliks_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    263    262    263            |           2604    34733 !   informasipubliks_secaraberkala id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_secaraberkala ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_secaraberkala_id_seq'::regclass);
 P   ALTER TABLE public.informasipubliks_secaraberkala ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    265    264    265            }           2604    34744    informasipubliks_sertamerta id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_sertamerta ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_sertamerta_id_seq'::regclass);
 M   ALTER TABLE public.informasipubliks_sertamerta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    267    266    267            ~           2604    34755    informasipubliks_setiapsaat id    DEFAULT     �   ALTER TABLE ONLY public.informasipubliks_setiapsaat ALTER COLUMN id SET DEFAULT nextval('public.informasipubliks_setiapsaat_id_seq'::regclass);
 M   ALTER TABLE public.informasipubliks_setiapsaat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    269    268    269            �           2604    34810    informasis id    DEFAULT     n   ALTER TABLE ONLY public.informasis ALTER COLUMN id SET DEFAULT nextval('public.informasis_id_seq'::regclass);
 <   ALTER TABLE public.informasis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    278    279    279            �           2604    34821    informasis_image id    DEFAULT     z   ALTER TABLE ONLY public.informasis_image ALTER COLUMN id SET DEFAULT nextval('public.informasis_image_id_seq'::regclass);
 B   ALTER TABLE public.informasis_image ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    280    281    281            �           2604    42377    jawab_permohonan id    DEFAULT     z   ALTER TABLE ONLY public.jawab_permohonan ALTER COLUMN id SET DEFAULT nextval('public.jawab_permohonan_id_seq'::regclass);
 B   ALTER TABLE public.jawab_permohonan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    338    339    339            �           2604    42200    jenis_identitas id    DEFAULT     x   ALTER TABLE ONLY public.jenis_identitas ALTER COLUMN id SET DEFAULT nextval('public.jenis_identitas_id_seq'::regclass);
 A   ALTER TABLE public.jenis_identitas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    318    319    319            �           2604    42208    jenis_pemohon id    DEFAULT     t   ALTER TABLE ONLY public.jenis_pemohon ALTER COLUMN id SET DEFAULT nextval('public.jenis_pemohon_id_seq'::regclass);
 ?   ALTER TABLE public.jenis_pemohon ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    321    320    321            v           2604    34673 
   kontaks id    DEFAULT     h   ALTER TABLE ONLY public.kontaks ALTER COLUMN id SET DEFAULT nextval('public.kontaks_id_seq'::regclass);
 9   ALTER TABLE public.kontaks ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    252    253    253            w           2604    34684    kontaks_dokumentasiruangppid id    DEFAULT     �   ALTER TABLE ONLY public.kontaks_dokumentasiruangppid ALTER COLUMN id SET DEFAULT nextval('public.kontaks_dokumentasiruangppid_id_seq'::regclass);
 N   ALTER TABLE public.kontaks_dokumentasiruangppid ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    254    255            f           2604    34456    laporan_berkala id    DEFAULT     x   ALTER TABLE ONLY public.laporan_berkala ALTER COLUMN id SET DEFAULT nextval('public.laporan_berkala_id_seq'::regclass);
 A   ALTER TABLE public.laporan_berkala ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220    221            g           2604    34472    laporan_serta_merta id    DEFAULT     �   ALTER TABLE ONLY public.laporan_serta_merta ALTER COLUMN id SET DEFAULT nextval('public.laporan_serta_merta_id_seq'::regclass);
 E   ALTER TABLE public.laporan_serta_merta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            h           2604    34488    laporan_setiap_saat id    DEFAULT     �   ALTER TABLE ONLY public.laporan_setiap_saat ALTER COLUMN id SET DEFAULT nextval('public.laporan_setiap_saat_id_seq'::regclass);
 E   ALTER TABLE public.laporan_setiap_saat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            �           2604    34892    laporans_banner id    DEFAULT     x   ALTER TABLE ONLY public.laporans_banner ALTER COLUMN id SET DEFAULT nextval('public.laporans_banner_id_seq'::regclass);
 A   ALTER TABLE public.laporans_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    289    288    289            �           2604    34922    laporans_hasil_survei id    DEFAULT     �   ALTER TABLE ONLY public.laporans_hasil_survei ALTER COLUMN id SET DEFAULT nextval('public.laporans_hasil_survei_id_seq'::regclass);
 G   ALTER TABLE public.laporans_hasil_survei ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    294    295    295            �           2604    34911    laporans_tahunan id    DEFAULT     z   ALTER TABLE ONLY public.laporans_tahunan ALTER COLUMN id SET DEFAULT nextval('public.laporans_tahunan_id_seq'::regclass);
 B   ALTER TABLE public.laporans_tahunan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    293    292    293            �           2604    34900    laporans_triwulanan id    DEFAULT     �   ALTER TABLE ONLY public.laporans_triwulanan ALTER COLUMN id SET DEFAULT nextval('public.laporans_triwulanan_id_seq'::regclass);
 E   ALTER TABLE public.laporans_triwulanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    291    290    291            �           2604    34854    linkapps id    DEFAULT     j   ALTER TABLE ONLY public.linkapps ALTER COLUMN id SET DEFAULT nextval('public.linkapps_id_seq'::regclass);
 :   ALTER TABLE public.linkapps ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    287    286    287            �           2604    42364    log_permohonan id    DEFAULT     v   ALTER TABLE ONLY public.log_permohonan ALTER COLUMN id SET DEFAULT nextval('public.log_permohonan_id_seq'::regclass);
 @   ALTER TABLE public.log_permohonan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    336    337    337            �           2604    42269    mainmenus id    DEFAULT     l   ALTER TABLE ONLY public.mainmenus ALTER COLUMN id SET DEFAULT nextval('public.mainmenus_id_seq'::regclass);
 ;   ALTER TABLE public.mainmenus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    324    325    325            �           2604    35054    menus id    DEFAULT     d   ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);
 7   ALTER TABLE public.menus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    311    310    311            \           2604    34238    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202    203            �           2604    34991    permissions id    DEFAULT     p   ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);
 =   ALTER TABLE public.permissions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    304    303    304            _           2604    34354    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    207    207            m           2604    34568    ppid_biaya id    DEFAULT     n   ALTER TABLE ONLY public.ppid_biaya ALTER COLUMN id SET DEFAULT nextval('public.ppid_biaya_id_seq'::regclass);
 <   ALTER TABLE public.ppid_biaya ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    234    235    235            j           2604    34520    ppid_faq id    DEFAULT     j   ALTER TABLE ONLY public.ppid_faq ALTER COLUMN id SET DEFAULT nextval('public.ppid_faq_id_seq'::regclass);
 :   ALTER TABLE public.ppid_faq ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            l           2604    34552    ppid_infografis id    DEFAULT     x   ALTER TABLE ONLY public.ppid_infografis ALTER COLUMN id SET DEFAULT nextval('public.ppid_infografis_id_seq'::regclass);
 A   ALTER TABLE public.ppid_infografis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    233    233            a           2604    34379    ppid_jenis_profil id    DEFAULT     |   ALTER TABLE ONLY public.ppid_jenis_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_jenis_profil_id_seq'::regclass);
 C   ALTER TABLE public.ppid_jenis_profil ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    210    211            c           2604    34408    ppid_kontak id    DEFAULT     p   ALTER TABLE ONLY public.ppid_kontak ALTER COLUMN id SET DEFAULT nextval('public.ppid_kontak_id_seq'::regclass);
 =   ALTER TABLE public.ppid_kontak ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215            i           2604    34504    ppid_lap_survey id    DEFAULT     x   ALTER TABLE ONLY public.ppid_lap_survey ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_survey_id_seq'::regclass);
 A   ALTER TABLE public.ppid_lap_survey ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227            d           2604    34424    ppid_lap_th id    DEFAULT     p   ALTER TABLE ONLY public.ppid_lap_th ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_th_id_seq'::regclass);
 =   ALTER TABLE public.ppid_lap_th ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            e           2604    34440    ppid_lap_tw id    DEFAULT     p   ALTER TABLE ONLY public.ppid_lap_tw ALTER COLUMN id SET DEFAULT nextval('public.ppid_lap_tw_id_seq'::regclass);
 =   ALTER TABLE public.ppid_lap_tw ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218    219            k           2604    34536    ppid_maklumat id    DEFAULT     t   ALTER TABLE ONLY public.ppid_maklumat ALTER COLUMN id SET DEFAULT nextval('public.ppid_maklumat_id_seq'::regclass);
 ?   ALTER TABLE public.ppid_maklumat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    231    231            �           2604    42110    ppid_memberikan id    DEFAULT     x   ALTER TABLE ONLY public.ppid_memberikan ALTER COLUMN id SET DEFAULT nextval('public.ppid_memberikan_id_seq'::regclass);
 A   ALTER TABLE public.ppid_memberikan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    314    315    315            �           2604    42102    ppid_mendapatkan id    DEFAULT     z   ALTER TABLE ONLY public.ppid_mendapatkan ALTER COLUMN id SET DEFAULT nextval('public.ppid_mendapatkan_id_seq'::regclass);
 B   ALTER TABLE public.ppid_mendapatkan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    313    312    313            `           2604    34368    ppid_menu id    DEFAULT     l   ALTER TABLE ONLY public.ppid_menu ALTER COLUMN id SET DEFAULT nextval('public.ppid_menu_id_seq'::regclass);
 ;   ALTER TABLE public.ppid_menu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208    209            �           2604    42216    ppid_pendaftar id    DEFAULT     v   ALTER TABLE ONLY public.ppid_pendaftar ALTER COLUMN id SET DEFAULT nextval('public.ppid_pendaftar_id_seq'::regclass);
 @   ALTER TABLE public.ppid_pendaftar ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    323    322    323            �           2604    42296    ppid_permohonan id    DEFAULT     x   ALTER TABLE ONLY public.ppid_permohonan ALTER COLUMN id SET DEFAULT nextval('public.ppid_permohonan_id_seq'::regclass);
 A   ALTER TABLE public.ppid_permohonan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    329    328    329            �           2604    42155    ppid_permohonan_dkk id    DEFAULT     �   ALTER TABLE ONLY public.ppid_permohonan_dkk ALTER COLUMN id SET DEFAULT nextval('public.ppid_permohonan_dkk_id_seq'::regclass);
 E   ALTER TABLE public.ppid_permohonan_dkk ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    317    316    317            b           2604    34387    ppid_profil id    DEFAULT     p   ALTER TABLE ONLY public.ppid_profil ALTER COLUMN id SET DEFAULT nextval('public.ppid_profil_id_seq'::regclass);
 =   ALTER TABLE public.ppid_profil ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    212    213    213            n           2604    34581    ppid_regulasi id    DEFAULT     t   ALTER TABLE ONLY public.ppid_regulasi ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_id_seq'::regclass);
 ?   ALTER TABLE public.ppid_regulasi ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236    237            o           2604    34589    ppid_regulasi_peraturan id    DEFAULT     �   ALTER TABLE ONLY public.ppid_regulasi_peraturan ALTER COLUMN id SET DEFAULT nextval('public.ppid_regulasi_peraturan_id_seq'::regclass);
 I   ALTER TABLE public.ppid_regulasi_peraturan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    238    239    239            p           2604    34610    profilsingkats id    DEFAULT     v   ALTER TABLE ONLY public.profilsingkats ALTER COLUMN id SET DEFAULT nextval('public.profilsingkats_id_seq'::regclass);
 @   ALTER TABLE public.profilsingkats ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    240    241            x           2604    34695    regulasis_banner id    DEFAULT     z   ALTER TABLE ONLY public.regulasis_banner ALTER COLUMN id SET DEFAULT nextval('public.regulasis_banner_id_seq'::regclass);
 B   ALTER TABLE public.regulasis_banner ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    256    257    257            y           2604    34703    regulasis_peraturankip id    DEFAULT     �   ALTER TABLE ONLY public.regulasis_peraturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_peraturankip_id_seq'::regclass);
 H   ALTER TABLE public.regulasis_peraturankip ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    258    259    259            z           2604    34714 "   regulasis_rancanganperaturankip id    DEFAULT     �   ALTER TABLE ONLY public.regulasis_rancanganperaturankip ALTER COLUMN id SET DEFAULT nextval('public.regulasis_rancanganperaturankip_id_seq'::regclass);
 Q   ALTER TABLE public.regulasis_rancanganperaturankip ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    261    260    261            �           2604    42401    reject_permohonan id    DEFAULT     |   ALTER TABLE ONLY public.reject_permohonan ALTER COLUMN id SET DEFAULT nextval('public.reject_permohonan_id_seq'::regclass);
 C   ALTER TABLE public.reject_permohonan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    342    343    343            �           2604    35004    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    306    305    306            �           2604    34799 
   sliders id    DEFAULT     h   ALTER TABLE ONLY public.sliders ALTER COLUMN id SET DEFAULT nextval('public.sliders_id_seq'::regclass);
 9   ALTER TABLE public.sliders ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    277    276    277            �           2604    34843    sosialmedias id    DEFAULT     r   ALTER TABLE ONLY public.sosialmedias ALTER COLUMN id SET DEFAULT nextval('public.sosialmedias_id_seq'::regclass);
 >   ALTER TABLE public.sosialmedias ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    284    285    285            �           2604    34788    standarlayanans_biayalayanan id    DEFAULT     �   ALTER TABLE ONLY public.standarlayanans_biayalayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_biayalayanan_id_seq'::regclass);
 N   ALTER TABLE public.standarlayanans_biayalayanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    274    275    275                       2604    34766    standarlayanans_maklumat id    DEFAULT     �   ALTER TABLE ONLY public.standarlayanans_maklumat ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_maklumat_id_seq'::regclass);
 J   ALTER TABLE public.standarlayanans_maklumat ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    270    271    271            �           2604    34777 "   standarlayanans_prosedurlayanan id    DEFAULT     �   ALTER TABLE ONLY public.standarlayanans_prosedurlayanan ALTER COLUMN id SET DEFAULT nextval('public.standarlayanans_prosedurlayanan_id_seq'::regclass);
 Q   ALTER TABLE public.standarlayanans_prosedurlayanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    273    272    273            �           2604    42322 	   status id    DEFAULT     f   ALTER TABLE ONLY public.status ALTER COLUMN id SET DEFAULT nextval('public.status_id_seq'::regclass);
 8   ALTER TABLE public.status ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    331    330    331            �           2604    42330    status_permohonan id    DEFAULT     |   ALTER TABLE ONLY public.status_permohonan ALTER COLUMN id SET DEFAULT nextval('public.status_permohonan_id_seq'::regclass);
 C   ALTER TABLE public.status_permohonan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    333    332    333            r           2604    34632    strukturorganisasis id    DEFAULT     �   ALTER TABLE ONLY public.strukturorganisasis ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_id_seq'::regclass);
 E   ALTER TABLE public.strukturorganisasis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    244    245    245            t           2604    34651 !   strukturorganisasis_bagankanan id    DEFAULT     �   ALTER TABLE ONLY public.strukturorganisasis_bagankanan ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagankanan_id_seq'::regclass);
 P   ALTER TABLE public.strukturorganisasis_bagankanan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    249    248    249            s           2604    34643     strukturorganisasis_bagankiri id    DEFAULT     �   ALTER TABLE ONLY public.strukturorganisasis_bagankiri ALTER COLUMN id SET DEFAULT nextval('public.strukturorganisasis_bagankiri_id_seq'::regclass);
 O   ALTER TABLE public.strukturorganisasis_bagankiri ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    246    247            �           2604    42280    submenus id    DEFAULT     j   ALTER TABLE ONLY public.submenus ALTER COLUMN id SET DEFAULT nextval('public.submenus_id_seq'::regclass);
 :   ALTER TABLE public.submenus ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    326    327    327            �           2604    42393    template_reject id    DEFAULT     x   ALTER TABLE ONLY public.template_reject ALTER COLUMN id SET DEFAULT nextval('public.template_reject_id_seq'::regclass);
 A   ALTER TABLE public.template_reject ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    341    340    341            q           2604    34621    tugasdanfungsis id    DEFAULT     x   ALTER TABLE ONLY public.tugasdanfungsis ALTER COLUMN id SET DEFAULT nextval('public.tugasdanfungsis_id_seq'::regclass);
 A   ALTER TABLE public.tugasdanfungsis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    243    242    243            �           2604    34971    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    301    300    301            �           2604    34832 	   videos id    DEFAULT     f   ALTER TABLE ONLY public.videos ALTER COLUMN id SET DEFAULT nextval('public.videos_id_seq'::regclass);
 8   ALTER TABLE public.videos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    282    283    283            u           2604    34662    visimisis id    DEFAULT     l   ALTER TABLE ONLY public.visimisis ALTER COLUMN id SET DEFAULT nextval('public.visimisis_id_seq'::regclass);
 ;   ALTER TABLE public.visimisis ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    251    250    251            �          0    34337    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    205   �      ?          0    34938    faqs 
   TABLE DATA           O   COPY public.faqs (id, pertanyaan, jawaban, created_at, updated_at) FROM stdin;
    public          postgres    false    299   �      =          0    34930    faqs_banner 
   TABLE DATA           N   COPY public.faqs_banner (id, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    297   `�      c          0    42345    forward_permohonan 
   TABLE DATA           �   COPY public.forward_permohonan (id, id_ppid_permohonan, forward_by, forward_to, keterangan, nota_dinas, created_at, updated_at) FROM stdin;
    public          postgres    false    335   ��                0    34722    informasipubliks_banner 
   TABLE DATA           Z   COPY public.informasipubliks_banner (id, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    263   �                0    34730    informasipubliks_secaraberkala 
   TABLE DATA           u   COPY public.informasipubliks_secaraberkala (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
    public          postgres    false    265   _�                0    34741    informasipubliks_sertamerta 
   TABLE DATA           r   COPY public.informasipubliks_sertamerta (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
    public          postgres    false    267   ;�      !          0    34752    informasipubliks_setiapsaat 
   TABLE DATA           r   COPY public.informasipubliks_setiapsaat (id, judul_informasi, url, file_path, created_at, updated_at) FROM stdin;
    public          postgres    false    269   ��      +          0    34807 
   informasis 
   TABLE DATA           f   COPY public.informasis (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    279   ��      -          0    34818    informasis_image 
   TABLE DATA           l   COPY public.informasis_image (id, sideimage_path, backgroundimage_path, created_at, updated_at) FROM stdin;
    public          postgres    false    281   ��      g          0    42374    jawab_permohonan 
   TABLE DATA              COPY public.jawab_permohonan (id, id_ppid_permohonan, ket_jawaban, file_jawaban, jawab_by, created_at, updated_at) FROM stdin;
    public          postgres    false    339   	�      S          0    42197    jenis_identitas 
   TABLE DATA           3   COPY public.jenis_identitas (id, name) FROM stdin;
    public          postgres    false    319   ��      U          0    42205    jenis_pemohon 
   TABLE DATA           1   COPY public.jenis_pemohon (id, name) FROM stdin;
    public          postgres    false    321   д                0    34670    kontaks 
   TABLE DATA           �   COPY public.kontaks (id, alamat, telepon, waktu_pelayanan, banner_path, latitude, longitude, created_at, updated_at, email) FROM stdin;
    public          postgres    false    253   �                0    34681    kontaks_dokumentasiruangppid 
   TABLE DATA           r   COPY public.kontaks_dokumentasiruangppid (id, image_path, keterangan, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    255   ��      �          0    34453    laporan_berkala 
   TABLE DATA           w   COPY public.laporan_berkala (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    221   +�      �          0    34469    laporan_serta_merta 
   TABLE DATA           {   COPY public.laporan_serta_merta (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    223   H�      �          0    34485    laporan_setiap_saat 
   TABLE DATA           {   COPY public.laporan_setiap_saat (id, nama_laporan, support_link, deskripsi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    225   e�      5          0    34889    laporans_banner 
   TABLE DATA           R   COPY public.laporans_banner (id, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    289   ��      ;          0    34919    laporans_hasil_survei 
   TABLE DATA           u   COPY public.laporans_hasil_survei (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
    public          postgres    false    295   ׸      9          0    34908    laporans_tahunan 
   TABLE DATA           p   COPY public.laporans_tahunan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
    public          postgres    false    293   x�      7          0    34897    laporans_triwulanan 
   TABLE DATA           s   COPY public.laporans_triwulanan (id, judul_laporan, file_path, thumbnail_path, created_at, updated_at) FROM stdin;
    public          postgres    false    291   ]�      3          0    34851    linkapps 
   TABLE DATA           I   COPY public.linkapps (id, icon, url, created_at, updated_at) FROM stdin;
    public          postgres    false    287   w�      e          0    42361    log_permohonan 
   TABLE DATA           `   COPY public.log_permohonan (id, id_ppid_permohonan, status, created_at, updated_at) FROM stdin;
    public          postgres    false    337    �      Y          0    42266 	   mainmenus 
   TABLE DATA           [   COPY public.mainmenus (id, nama_menu, routing, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    325   ��      K          0    35051    menus 
   TABLE DATA           p   COPY public.menus (id, parent_id, label, icon, status, route_name, "order", created_at, updated_at) FROM stdin;
    public          postgres    false    311   i�      �          0    34235 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    203   ��      G          0    35012    model_has_permissions 
   TABLE DATA           T   COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
    public          postgres    false    307   W�      H          0    35023    model_has_roles 
   TABLE DATA           H   COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
    public          postgres    false    308   t�      B          0    34979    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    302   ��      D          0    34988    permissions 
   TABLE DATA           S   COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
    public          postgres    false    304   Կ      �          0    34351    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    207   "�      �          0    34565 
   ppid_biaya 
   TABLE DATA           a   COPY public.ppid_biaya (id, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    235   ?�      �          0    34517    ppid_faq 
   TABLE DATA           o   COPY public.ppid_faq (id, judul, deskripsi, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    229   \�      �          0    34549    ppid_infografis 
   TABLE DATA           �   COPY public.ppid_infografis (id, deskripsi, direktori_image, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    233   y�      �          0    34376    ppid_jenis_profil 
   TABLE DATA           U   COPY public.ppid_jenis_profil (id, jenis_profil, created_at, updated_at) FROM stdin;
    public          postgres    false    211   ��      �          0    34405    ppid_kontak 
   TABLE DATA           h   COPY public.ppid_kontak (id, nama_data, deskripsi, sisi, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    215   ��      �          0    34501    ppid_lap_survey 
   TABLE DATA           {   COPY public.ppid_lap_survey (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    227   ��      �          0    34421    ppid_lap_th 
   TABLE DATA           w   COPY public.ppid_lap_th (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    217   ��      �          0    34437    ppid_lap_tw 
   TABLE DATA           w   COPY public.ppid_lap_tw (id, judul, direktori_file, "order", is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    219   
�      �          0    34533    ppid_maklumat 
   TABLE DATA           u   COPY public.ppid_maklumat (id, direktori_image, deskripsi, is_active, created_at, updated_at, parent_id) FROM stdin;
    public          postgres    false    231   '�      O          0    42107    ppid_memberikan 
   TABLE DATA           3   COPY public.ppid_memberikan (id, name) FROM stdin;
    public          postgres    false    315   D�      M          0    42099    ppid_mendapatkan 
   TABLE DATA           4   COPY public.ppid_mendapatkan (id, name) FROM stdin;
    public          postgres    false    313   ��      �          0    34365 	   ppid_menu 
   TABLE DATA           \   COPY public.ppid_menu (id, nama_menu, routing, "order", created_at, updated_at) FROM stdin;
    public          postgres    false    209   ��      W          0    42213    ppid_pendaftar 
   TABLE DATA           �   COPY public.ppid_pendaftar (id, nama_lengkap, jenis_pemohon, jenis_identitas, nomor_identitas, alamat, pekerjaan, no_hp, npwp, email, password, status, identitas_file_path, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    323   �      ]          0    42293    ppid_permohonan 
   TABLE DATA           �   COPY public.ppid_permohonan (id, id_ppid_pendaftar, ticket_permohonan, jenis_kanal, informasi_diminta, tujuan_informasi, id_cara, id_mendapatkan, file_identitas, created_at, updated_at) FROM stdin;
    public          postgres    false    329   ��      Q          0    42152    ppid_permohonan_dkk 
   TABLE DATA           I   COPY public.ppid_permohonan_dkk (id, created_at, updated_at) FROM stdin;
    public          postgres    false    317   ��      �          0    34384    ppid_profil 
   TABLE DATA           �   COPY public.ppid_profil (id, judul, narasi, direktori_image, created_at, updated_at, parent_id, id_ppid_jenis_profil) FROM stdin;
    public          postgres    false    213   ��                0    34578    ppid_regulasi 
   TABLE DATA           S   COPY public.ppid_regulasi (id, jenis_regulasi, created_at, updated_at) FROM stdin;
    public          postgres    false    237   ��                0    34586    ppid_regulasi_peraturan 
   TABLE DATA           �   COPY public.ppid_regulasi_peraturan (id, nama_regulasi, direktori_file, "order", created_at, updated_at, parent_id, id_jenis_regulasi) FROM stdin;
    public          postgres    false    239   ��                0    34607    profilsingkats 
   TABLE DATA           q   COPY public.profilsingkats (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
    public          postgres    false    241   �                0    34692    regulasis_banner 
   TABLE DATA           c   COPY public.regulasis_banner (id, banner_path, created_at, updated_at, thumbnail_path) FROM stdin;
    public          postgres    false    257   8�                0    34700    regulasis_peraturankip 
   TABLE DATA           p   COPY public.regulasis_peraturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    259   ��                0    34711    regulasis_rancanganperaturankip 
   TABLE DATA           y   COPY public.regulasis_rancanganperaturankip (id, judul_peraturan, file_path, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    261   ��      k          0    42398    reject_permohonan 
   TABLE DATA           �   COPY public.reject_permohonan (id, id_ppid_permohonan, id_template_reject, file, rejected_by, created_at, updated_at) FROM stdin;
    public          postgres    false    343   ��      I          0    35034    role_has_permissions 
   TABLE DATA           F   COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
    public          postgres    false    309   ��      F          0    35001    roles 
   TABLE DATA           M   COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
    public          postgres    false    306   �      )          0    34796    sliders 
   TABLE DATA           c   COPY public.sliders (id, image_path, judul, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    277   ��      1          0    34840    sosialmedias 
   TABLE DATA           U   COPY public.sosialmedias (id, icon, url, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    285   |�      '          0    34785    standarlayanans_biayalayanan 
   TABLE DATA           �   COPY public.standarlayanans_biayalayanan (id, judul, deskripsi, banner_path, direktori_image, created_at, updated_at) FROM stdin;
    public          postgres    false    275   ��      #          0    34763    standarlayanans_maklumat 
   TABLE DATA           s   COPY public.standarlayanans_maklumat (id, judul, banner_path, direktori_image, created_at, updated_at) FROM stdin;
    public          postgres    false    271   '�      %          0    34774    standarlayanans_prosedurlayanan 
   TABLE DATA           �   COPY public.standarlayanans_prosedurlayanan (id, banner_path, permohonan_direktori_image, keberatan_direktori_image, created_at, updated_at) FROM stdin;
    public          postgres    false    273   ��      _          0    42319    status 
   TABLE DATA           *   COPY public.status (id, name) FROM stdin;
    public          postgres    false    331   *�      a          0    42327    status_permohonan 
   TABLE DATA           �   COPY public.status_permohonan (id, id_ppid_permohonan, id_status, modified_by, modified_date, aktif, created_at, updated_at) FROM stdin;
    public          postgres    false    333   ��      	          0    34629    strukturorganisasis 
   TABLE DATA           ]   COPY public.strukturorganisasis (id, judul, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    245   K�                0    34648    strukturorganisasis_bagankanan 
   TABLE DATA           t   COPY public.strukturorganisasis_bagankanan (id, nomenklatur, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    249   ��                0    34640    strukturorganisasis_bagankiri 
   TABLE DATA           `   COPY public.strukturorganisasis_bagankiri (id, nomenklatur, created_at, updated_at) FROM stdin;
    public          postgres    false    247   �      [          0    42277    submenus 
   TABLE DATA           h   COPY public.submenus (id, nama_menu, routing, urutan, created_at, updated_at, main_menu_id) FROM stdin;
    public          postgres    false    327   x�      i          0    42390    template_reject 
   TABLE DATA           3   COPY public.template_reject (id, name) FROM stdin;
    public          postgres    false    341   d�                0    34618    tugasdanfungsis 
   TABLE DATA           r   COPY public.tugasdanfungsis (id, judul, konten, banner_path, side_image_path, created_at, updated_at) FROM stdin;
    public          postgres    false    243   ��      A          0    34968    users 
   TABLE DATA           �   COPY public.users (id, name, email, email_verified_at, password, jenispemohon, jenisidentitas, noidentitas, alamat, nohp, npwp, pekerjaan, identitas_file_path, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    301    �      /          0    34829    videos 
   TABLE DATA           T   COPY public.videos (id, url, deskripsi, urutan, created_at, updated_at) FROM stdin;
    public          postgres    false    283   �                0    34659 	   visimisis 
   TABLE DATA           X   COPY public.visimisis (id, visi, misi, banner_path, created_at, updated_at) FROM stdin;
    public          postgres    false    251   ��      �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    204            �           0    0    faqs_banner_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.faqs_banner_id_seq', 1, true);
          public          postgres    false    296            �           0    0    faqs_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.faqs_id_seq', 2, true);
          public          postgres    false    298            �           0    0    forward_permohonan_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.forward_permohonan_id_seq', 1, true);
          public          postgres    false    334            �           0    0    informasipubliks_banner_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.informasipubliks_banner_id_seq', 1, true);
          public          postgres    false    262            �           0    0 %   informasipubliks_secaraberkala_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.informasipubliks_secaraberkala_id_seq', 13, true);
          public          postgres    false    264            �           0    0 "   informasipubliks_sertamerta_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.informasipubliks_sertamerta_id_seq', 1, true);
          public          postgres    false    266            �           0    0 "   informasipubliks_setiapsaat_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.informasipubliks_setiapsaat_id_seq', 11, true);
          public          postgres    false    268            �           0    0    informasis_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.informasis_id_seq', 3, true);
          public          postgres    false    278            �           0    0    informasis_image_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.informasis_image_id_seq', 1, true);
          public          postgres    false    280            �           0    0    jawab_permohonan_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.jawab_permohonan_id_seq', 1, true);
          public          postgres    false    338            �           0    0    jenis_identitas_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.jenis_identitas_id_seq', 1, false);
          public          postgres    false    318            �           0    0    jenis_pemohon_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.jenis_pemohon_id_seq', 1, false);
          public          postgres    false    320            �           0    0 #   kontaks_dokumentasiruangppid_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.kontaks_dokumentasiruangppid_id_seq', 2, true);
          public          postgres    false    254            �           0    0    kontaks_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.kontaks_id_seq', 1, true);
          public          postgres    false    252            �           0    0    laporan_berkala_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.laporan_berkala_id_seq', 1, false);
          public          postgres    false    220            �           0    0    laporan_serta_merta_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.laporan_serta_merta_id_seq', 1, false);
          public          postgres    false    222            �           0    0    laporan_setiap_saat_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.laporan_setiap_saat_id_seq', 1, false);
          public          postgres    false    224            �           0    0    laporans_banner_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.laporans_banner_id_seq', 1, true);
          public          postgres    false    288            �           0    0    laporans_hasil_survei_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.laporans_hasil_survei_id_seq', 1, true);
          public          postgres    false    294            �           0    0    laporans_tahunan_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.laporans_tahunan_id_seq', 4, true);
          public          postgres    false    292            �           0    0    laporans_triwulanan_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.laporans_triwulanan_id_seq', 4, true);
          public          postgres    false    290            �           0    0    linkapps_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.linkapps_id_seq', 1, true);
          public          postgres    false    286            �           0    0    log_permohonan_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.log_permohonan_id_seq', 11, true);
          public          postgres    false    336            �           0    0    mainmenus_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.mainmenus_id_seq', 6, true);
          public          postgres    false    324            �           0    0    menus_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.menus_id_seq', 1, false);
          public          postgres    false    310            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 35, true);
          public          postgres    false    202            �           0    0    permissions_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.permissions_id_seq', 112, true);
          public          postgres    false    303            �           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    206            �           0    0    ppid_biaya_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.ppid_biaya_id_seq', 1, false);
          public          postgres    false    234            �           0    0    ppid_faq_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.ppid_faq_id_seq', 1, false);
          public          postgres    false    228            �           0    0    ppid_infografis_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ppid_infografis_id_seq', 1, false);
          public          postgres    false    232            �           0    0    ppid_jenis_profil_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.ppid_jenis_profil_id_seq', 1, false);
          public          postgres    false    210            �           0    0    ppid_kontak_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_kontak_id_seq', 1, false);
          public          postgres    false    214            �           0    0    ppid_lap_survey_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ppid_lap_survey_id_seq', 1, false);
          public          postgres    false    226            �           0    0    ppid_lap_th_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_lap_th_id_seq', 1, false);
          public          postgres    false    216            �           0    0    ppid_lap_tw_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_lap_tw_id_seq', 1, false);
          public          postgres    false    218            �           0    0    ppid_maklumat_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.ppid_maklumat_id_seq', 1, false);
          public          postgres    false    230            �           0    0    ppid_memberikan_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ppid_memberikan_id_seq', 1, false);
          public          postgres    false    314            �           0    0    ppid_mendapatkan_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.ppid_mendapatkan_id_seq', 1, false);
          public          postgres    false    312            �           0    0    ppid_menu_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.ppid_menu_id_seq', 1, false);
          public          postgres    false    208            �           0    0    ppid_pendaftar_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.ppid_pendaftar_id_seq', 3, true);
          public          postgres    false    322            �           0    0    ppid_permohonan_dkk_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.ppid_permohonan_dkk_id_seq', 1, false);
          public          postgres    false    316            �           0    0    ppid_permohonan_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.ppid_permohonan_id_seq', 7, true);
          public          postgres    false    328            �           0    0    ppid_profil_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.ppid_profil_id_seq', 1, false);
          public          postgres    false    212            �           0    0    ppid_regulasi_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.ppid_regulasi_id_seq', 1, false);
          public          postgres    false    236            �           0    0    ppid_regulasi_peraturan_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.ppid_regulasi_peraturan_id_seq', 1, false);
          public          postgres    false    238            �           0    0    profilsingkats_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.profilsingkats_id_seq', 2, true);
          public          postgres    false    240            �           0    0    regulasis_banner_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.regulasis_banner_id_seq', 1, true);
          public          postgres    false    256            �           0    0    regulasis_peraturankip_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.regulasis_peraturankip_id_seq', 3, true);
          public          postgres    false    258            �           0    0 &   regulasis_rancanganperaturankip_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.regulasis_rancanganperaturankip_id_seq', 1, true);
          public          postgres    false    260            �           0    0    reject_permohonan_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.reject_permohonan_id_seq', 1, true);
          public          postgres    false    342            �           0    0    roles_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.roles_id_seq', 4, true);
          public          postgres    false    305            �           0    0    sliders_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.sliders_id_seq', 4, true);
          public          postgres    false    276            �           0    0    sosialmedias_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.sosialmedias_id_seq', 4, true);
          public          postgres    false    284            �           0    0 #   standarlayanans_biayalayanan_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.standarlayanans_biayalayanan_id_seq', 1, true);
          public          postgres    false    274            �           0    0    standarlayanans_maklumat_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.standarlayanans_maklumat_id_seq', 1, true);
          public          postgres    false    270            �           0    0 &   standarlayanans_prosedurlayanan_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.standarlayanans_prosedurlayanan_id_seq', 1, true);
          public          postgres    false    272            �           0    0    status_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.status_id_seq', 1, false);
          public          postgres    false    330            �           0    0    status_permohonan_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.status_permohonan_id_seq', 13, true);
          public          postgres    false    332            �           0    0 %   strukturorganisasis_bagankanan_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.strukturorganisasis_bagankanan_id_seq', 3, true);
          public          postgres    false    248            �           0    0 $   strukturorganisasis_bagankiri_id_seq    SEQUENCE SET     R   SELECT pg_catalog.setval('public.strukturorganisasis_bagankiri_id_seq', 3, true);
          public          postgres    false    246            �           0    0    strukturorganisasis_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.strukturorganisasis_id_seq', 3, true);
          public          postgres    false    244            �           0    0    submenus_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.submenus_id_seq', 8, true);
          public          postgres    false    326            �           0    0    template_reject_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.template_reject_id_seq', 1, false);
          public          postgres    false    340            �           0    0    tugasdanfungsis_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tugasdanfungsis_id_seq', 1, true);
          public          postgres    false    242            �           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 5, true);
          public          postgres    false    300            �           0    0    videos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.videos_id_seq', 2, true);
          public          postgres    false    282            �           0    0    visimisis_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.visimisis_id_seq', 1, true);
          public          postgres    false    250            �           2606    34346    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    205            �           2606    34348 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    205                       2606    34935    faqs_banner faqs_banner_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.faqs_banner
    ADD CONSTRAINT faqs_banner_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.faqs_banner DROP CONSTRAINT faqs_banner_pkey;
       public            postgres    false    297                       2606    34946    faqs faqs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.faqs
    ADD CONSTRAINT faqs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.faqs DROP CONSTRAINT faqs_pkey;
       public            postgres    false    299            7           2606    42353 *   forward_permohonan forward_permohonan_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.forward_permohonan
    ADD CONSTRAINT forward_permohonan_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.forward_permohonan DROP CONSTRAINT forward_permohonan_pkey;
       public            postgres    false    335            �           2606    34727 4   informasipubliks_banner informasipubliks_banner_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.informasipubliks_banner
    ADD CONSTRAINT informasipubliks_banner_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.informasipubliks_banner DROP CONSTRAINT informasipubliks_banner_pkey;
       public            postgres    false    263            �           2606    34738 B   informasipubliks_secaraberkala informasipubliks_secaraberkala_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.informasipubliks_secaraberkala
    ADD CONSTRAINT informasipubliks_secaraberkala_pkey PRIMARY KEY (id);
 l   ALTER TABLE ONLY public.informasipubliks_secaraberkala DROP CONSTRAINT informasipubliks_secaraberkala_pkey;
       public            postgres    false    265            �           2606    34749 <   informasipubliks_sertamerta informasipubliks_sertamerta_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.informasipubliks_sertamerta
    ADD CONSTRAINT informasipubliks_sertamerta_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.informasipubliks_sertamerta DROP CONSTRAINT informasipubliks_sertamerta_pkey;
       public            postgres    false    267            �           2606    34760 <   informasipubliks_setiapsaat informasipubliks_setiapsaat_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.informasipubliks_setiapsaat
    ADD CONSTRAINT informasipubliks_setiapsaat_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.informasipubliks_setiapsaat DROP CONSTRAINT informasipubliks_setiapsaat_pkey;
       public            postgres    false    269            �           2606    34826 &   informasis_image informasis_image_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.informasis_image
    ADD CONSTRAINT informasis_image_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.informasis_image DROP CONSTRAINT informasis_image_pkey;
       public            postgres    false    281            �           2606    34815    informasis informasis_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.informasis
    ADD CONSTRAINT informasis_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.informasis DROP CONSTRAINT informasis_pkey;
       public            postgres    false    279            ;           2606    42382 &   jawab_permohonan jawab_permohonan_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.jawab_permohonan
    ADD CONSTRAINT jawab_permohonan_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.jawab_permohonan DROP CONSTRAINT jawab_permohonan_pkey;
       public            postgres    false    339            '           2606    42202 $   jenis_identitas jenis_identitas_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.jenis_identitas
    ADD CONSTRAINT jenis_identitas_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.jenis_identitas DROP CONSTRAINT jenis_identitas_pkey;
       public            postgres    false    319            )           2606    42210     jenis_pemohon jenis_pemohon_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.jenis_pemohon
    ADD CONSTRAINT jenis_pemohon_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.jenis_pemohon DROP CONSTRAINT jenis_pemohon_pkey;
       public            postgres    false    321            �           2606    34689 >   kontaks_dokumentasiruangppid kontaks_dokumentasiruangppid_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.kontaks_dokumentasiruangppid
    ADD CONSTRAINT kontaks_dokumentasiruangppid_pkey PRIMARY KEY (id);
 h   ALTER TABLE ONLY public.kontaks_dokumentasiruangppid DROP CONSTRAINT kontaks_dokumentasiruangppid_pkey;
       public            postgres    false    255            �           2606    34678    kontaks kontaks_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.kontaks
    ADD CONSTRAINT kontaks_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.kontaks DROP CONSTRAINT kontaks_pkey;
       public            postgres    false    253            �           2606    34461 $   laporan_berkala laporan_berkala_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.laporan_berkala DROP CONSTRAINT laporan_berkala_pkey;
       public            postgres    false    221            �           2606    34477 ,   laporan_serta_merta laporan_serta_merta_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.laporan_serta_merta DROP CONSTRAINT laporan_serta_merta_pkey;
       public            postgres    false    223            �           2606    34493 ,   laporan_setiap_saat laporan_setiap_saat_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.laporan_setiap_saat DROP CONSTRAINT laporan_setiap_saat_pkey;
       public            postgres    false    225            �           2606    34894 $   laporans_banner laporans_banner_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.laporans_banner
    ADD CONSTRAINT laporans_banner_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.laporans_banner DROP CONSTRAINT laporans_banner_pkey;
       public            postgres    false    289                       2606    34927 0   laporans_hasil_survei laporans_hasil_survei_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.laporans_hasil_survei
    ADD CONSTRAINT laporans_hasil_survei_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.laporans_hasil_survei DROP CONSTRAINT laporans_hasil_survei_pkey;
       public            postgres    false    295                       2606    34916 &   laporans_tahunan laporans_tahunan_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.laporans_tahunan
    ADD CONSTRAINT laporans_tahunan_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.laporans_tahunan DROP CONSTRAINT laporans_tahunan_pkey;
       public            postgres    false    293                        2606    34905 ,   laporans_triwulanan laporans_triwulanan_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.laporans_triwulanan
    ADD CONSTRAINT laporans_triwulanan_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.laporans_triwulanan DROP CONSTRAINT laporans_triwulanan_pkey;
       public            postgres    false    291            �           2606    34859    linkapps linkapps_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.linkapps
    ADD CONSTRAINT linkapps_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.linkapps DROP CONSTRAINT linkapps_pkey;
       public            postgres    false    287            9           2606    42366 "   log_permohonan log_permohonan_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.log_permohonan
    ADD CONSTRAINT log_permohonan_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.log_permohonan DROP CONSTRAINT log_permohonan_pkey;
       public            postgres    false    337            -           2606    42274    mainmenus mainmenus_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.mainmenus
    ADD CONSTRAINT mainmenus_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.mainmenus DROP CONSTRAINT mainmenus_pkey;
       public            postgres    false    325                       2606    35059    menus menus_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.menus DROP CONSTRAINT menus_pkey;
       public            postgres    false    311            �           2606    34240    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    203                       2606    35022 0   model_has_permissions model_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);
 Z   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_pkey;
       public            postgres    false    307    307    307                       2606    35033 $   model_has_roles model_has_roles_pkey 
   CONSTRAINT     }   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);
 N   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_pkey;
       public            postgres    false    308    308    308                       2606    34998 .   permissions permissions_name_guard_name_unique 
   CONSTRAINT     u   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);
 X   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_name_guard_name_unique;
       public            postgres    false    304    304                       2606    34996    permissions permissions_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_pkey;
       public            postgres    false    304            �           2606    34359 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    207            �           2606    34362 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    207            �           2606    34570    ppid_biaya ppid_biaya_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.ppid_biaya DROP CONSTRAINT ppid_biaya_pkey;
       public            postgres    false    235            �           2606    34525    ppid_faq ppid_faq_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.ppid_faq DROP CONSTRAINT ppid_faq_pkey;
       public            postgres    false    229            �           2606    34557 $   ppid_infografis ppid_infografis_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ppid_infografis DROP CONSTRAINT ppid_infografis_pkey;
       public            postgres    false    233            �           2606    34381 (   ppid_jenis_profil ppid_jenis_profil_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.ppid_jenis_profil
    ADD CONSTRAINT ppid_jenis_profil_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.ppid_jenis_profil DROP CONSTRAINT ppid_jenis_profil_pkey;
       public            postgres    false    211            �           2606    34413    ppid_kontak ppid_kontak_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_kontak DROP CONSTRAINT ppid_kontak_pkey;
       public            postgres    false    215            �           2606    34509 $   ppid_lap_survey ppid_lap_survey_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ppid_lap_survey DROP CONSTRAINT ppid_lap_survey_pkey;
       public            postgres    false    227            �           2606    34429    ppid_lap_th ppid_lap_th_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_lap_th DROP CONSTRAINT ppid_lap_th_pkey;
       public            postgres    false    217            �           2606    34445    ppid_lap_tw ppid_lap_tw_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_lap_tw DROP CONSTRAINT ppid_lap_tw_pkey;
       public            postgres    false    219            �           2606    34541     ppid_maklumat ppid_maklumat_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.ppid_maklumat DROP CONSTRAINT ppid_maklumat_pkey;
       public            postgres    false    231            #           2606    42112 $   ppid_memberikan ppid_memberikan_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ppid_memberikan
    ADD CONSTRAINT ppid_memberikan_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ppid_memberikan DROP CONSTRAINT ppid_memberikan_pkey;
       public            postgres    false    315            !           2606    42104 &   ppid_mendapatkan ppid_mendapatkan_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.ppid_mendapatkan
    ADD CONSTRAINT ppid_mendapatkan_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.ppid_mendapatkan DROP CONSTRAINT ppid_mendapatkan_pkey;
       public            postgres    false    313            �           2606    34373    ppid_menu ppid_menu_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.ppid_menu
    ADD CONSTRAINT ppid_menu_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.ppid_menu DROP CONSTRAINT ppid_menu_pkey;
       public            postgres    false    209            +           2606    42221 "   ppid_pendaftar ppid_pendaftar_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.ppid_pendaftar
    ADD CONSTRAINT ppid_pendaftar_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.ppid_pendaftar DROP CONSTRAINT ppid_pendaftar_pkey;
       public            postgres    false    323            %           2606    42157 ,   ppid_permohonan_dkk ppid_permohonan_dkk_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.ppid_permohonan_dkk
    ADD CONSTRAINT ppid_permohonan_dkk_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.ppid_permohonan_dkk DROP CONSTRAINT ppid_permohonan_dkk_pkey;
       public            postgres    false    317            1           2606    42301 $   ppid_permohonan ppid_permohonan_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.ppid_permohonan DROP CONSTRAINT ppid_permohonan_pkey;
       public            postgres    false    329            �           2606    34392    ppid_profil ppid_profil_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.ppid_profil DROP CONSTRAINT ppid_profil_pkey;
       public            postgres    false    213            �           2606    34594 4   ppid_regulasi_peraturan ppid_regulasi_peraturan_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.ppid_regulasi_peraturan DROP CONSTRAINT ppid_regulasi_peraturan_pkey;
       public            postgres    false    239            �           2606    34583     ppid_regulasi ppid_regulasi_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.ppid_regulasi
    ADD CONSTRAINT ppid_regulasi_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.ppid_regulasi DROP CONSTRAINT ppid_regulasi_pkey;
       public            postgres    false    237            �           2606    34615 "   profilsingkats profilsingkats_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.profilsingkats
    ADD CONSTRAINT profilsingkats_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.profilsingkats DROP CONSTRAINT profilsingkats_pkey;
       public            postgres    false    241            �           2606    34697 &   regulasis_banner regulasis_banner_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.regulasis_banner
    ADD CONSTRAINT regulasis_banner_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.regulasis_banner DROP CONSTRAINT regulasis_banner_pkey;
       public            postgres    false    257            �           2606    34708 2   regulasis_peraturankip regulasis_peraturankip_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.regulasis_peraturankip
    ADD CONSTRAINT regulasis_peraturankip_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.regulasis_peraturankip DROP CONSTRAINT regulasis_peraturankip_pkey;
       public            postgres    false    259            �           2606    34719 D   regulasis_rancanganperaturankip regulasis_rancanganperaturankip_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.regulasis_rancanganperaturankip
    ADD CONSTRAINT regulasis_rancanganperaturankip_pkey PRIMARY KEY (id);
 n   ALTER TABLE ONLY public.regulasis_rancanganperaturankip DROP CONSTRAINT regulasis_rancanganperaturankip_pkey;
       public            postgres    false    261            ?           2606    42406 (   reject_permohonan reject_permohonan_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.reject_permohonan
    ADD CONSTRAINT reject_permohonan_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.reject_permohonan DROP CONSTRAINT reject_permohonan_pkey;
       public            postgres    false    343                       2606    35048 .   role_has_permissions role_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);
 X   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_pkey;
       public            postgres    false    309    309                       2606    35011 "   roles roles_name_guard_name_unique 
   CONSTRAINT     i   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);
 L   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_name_guard_name_unique;
       public            postgres    false    306    306                       2606    35009    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public            postgres    false    306            �           2606    34804    sliders sliders_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.sliders DROP CONSTRAINT sliders_pkey;
       public            postgres    false    277            �           2606    34848    sosialmedias sosialmedias_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.sosialmedias
    ADD CONSTRAINT sosialmedias_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.sosialmedias DROP CONSTRAINT sosialmedias_pkey;
       public            postgres    false    285            �           2606    34793 >   standarlayanans_biayalayanan standarlayanans_biayalayanan_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.standarlayanans_biayalayanan
    ADD CONSTRAINT standarlayanans_biayalayanan_pkey PRIMARY KEY (id);
 h   ALTER TABLE ONLY public.standarlayanans_biayalayanan DROP CONSTRAINT standarlayanans_biayalayanan_pkey;
       public            postgres    false    275            �           2606    34771 6   standarlayanans_maklumat standarlayanans_maklumat_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.standarlayanans_maklumat
    ADD CONSTRAINT standarlayanans_maklumat_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.standarlayanans_maklumat DROP CONSTRAINT standarlayanans_maklumat_pkey;
       public            postgres    false    271            �           2606    34782 D   standarlayanans_prosedurlayanan standarlayanans_prosedurlayanan_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.standarlayanans_prosedurlayanan
    ADD CONSTRAINT standarlayanans_prosedurlayanan_pkey PRIMARY KEY (id);
 n   ALTER TABLE ONLY public.standarlayanans_prosedurlayanan DROP CONSTRAINT standarlayanans_prosedurlayanan_pkey;
       public            postgres    false    273            5           2606    42332 (   status_permohonan status_permohonan_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.status_permohonan
    ADD CONSTRAINT status_permohonan_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.status_permohonan DROP CONSTRAINT status_permohonan_pkey;
       public            postgres    false    333            3           2606    42324    status status_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.status DROP CONSTRAINT status_pkey;
       public            postgres    false    331            �           2606    34656 B   strukturorganisasis_bagankanan strukturorganisasis_bagankanan_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.strukturorganisasis_bagankanan
    ADD CONSTRAINT strukturorganisasis_bagankanan_pkey PRIMARY KEY (id);
 l   ALTER TABLE ONLY public.strukturorganisasis_bagankanan DROP CONSTRAINT strukturorganisasis_bagankanan_pkey;
       public            postgres    false    249            �           2606    34645 @   strukturorganisasis_bagankiri strukturorganisasis_bagankiri_pkey 
   CONSTRAINT     ~   ALTER TABLE ONLY public.strukturorganisasis_bagankiri
    ADD CONSTRAINT strukturorganisasis_bagankiri_pkey PRIMARY KEY (id);
 j   ALTER TABLE ONLY public.strukturorganisasis_bagankiri DROP CONSTRAINT strukturorganisasis_bagankiri_pkey;
       public            postgres    false    247            �           2606    34637 ,   strukturorganisasis strukturorganisasis_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.strukturorganisasis
    ADD CONSTRAINT strukturorganisasis_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.strukturorganisasis DROP CONSTRAINT strukturorganisasis_pkey;
       public            postgres    false    245            /           2606    42285    submenus submenus_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.submenus DROP CONSTRAINT submenus_pkey;
       public            postgres    false    327            =           2606    42395 $   template_reject template_reject_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.template_reject
    ADD CONSTRAINT template_reject_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.template_reject DROP CONSTRAINT template_reject_pkey;
       public            postgres    false    341            �           2606    34626 $   tugasdanfungsis tugasdanfungsis_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.tugasdanfungsis
    ADD CONSTRAINT tugasdanfungsis_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.tugasdanfungsis DROP CONSTRAINT tugasdanfungsis_pkey;
       public            postgres    false    243            
           2606    34978    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    301                       2606    34976    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    301            �           2606    34837    videos videos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.videos
    ADD CONSTRAINT videos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.videos DROP CONSTRAINT videos_pkey;
       public            postgres    false    283            �           2606    34667    visimisis visimisis_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.visimisis
    ADD CONSTRAINT visimisis_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.visimisis DROP CONSTRAINT visimisis_pkey;
       public            postgres    false    251                       1259    35015 /   model_has_permissions_model_id_model_type_index    INDEX     �   CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);
 C   DROP INDEX public.model_has_permissions_model_id_model_type_index;
       public            postgres    false    307    307                       1259    35026 )   model_has_roles_model_id_model_type_index    INDEX     u   CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);
 =   DROP INDEX public.model_has_roles_model_id_model_type_index;
       public            postgres    false    308    308                       1259    34985    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    302            �           1259    34360 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    207    207            [           2606    42354 @   forward_permohonan forward_permohonan_id_ppid_permohonan_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.forward_permohonan
    ADD CONSTRAINT forward_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);
 j   ALTER TABLE ONLY public.forward_permohonan DROP CONSTRAINT forward_permohonan_id_ppid_permohonan_foreign;
       public          postgres    false    335    329    3377            ]           2606    42383 <   jawab_permohonan jawab_permohonan_id_ppid_permohonan_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.jawab_permohonan
    ADD CONSTRAINT jawab_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);
 f   ALTER TABLE ONLY public.jawab_permohonan DROP CONSTRAINT jawab_permohonan_id_ppid_permohonan_foreign;
       public          postgres    false    339    3377    329            E           2606    34462 1   laporan_berkala laporan_berkala_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.laporan_berkala
    ADD CONSTRAINT laporan_berkala_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 [   ALTER TABLE ONLY public.laporan_berkala DROP CONSTRAINT laporan_berkala_parent_id_foreign;
       public          postgres    false    209    221    3246            F           2606    34478 9   laporan_serta_merta laporan_serta_merta_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.laporan_serta_merta
    ADD CONSTRAINT laporan_serta_merta_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 c   ALTER TABLE ONLY public.laporan_serta_merta DROP CONSTRAINT laporan_serta_merta_parent_id_foreign;
       public          postgres    false    3246    209    223            G           2606    34494 9   laporan_setiap_saat laporan_setiap_saat_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.laporan_setiap_saat
    ADD CONSTRAINT laporan_setiap_saat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 c   ALTER TABLE ONLY public.laporan_setiap_saat DROP CONSTRAINT laporan_setiap_saat_parent_id_foreign;
       public          postgres    false    3246    209    225            \           2606    42367 8   log_permohonan log_permohonan_id_ppid_permohonan_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.log_permohonan
    ADD CONSTRAINT log_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);
 b   ALTER TABLE ONLY public.log_permohonan DROP CONSTRAINT log_permohonan_id_ppid_permohonan_foreign;
       public          postgres    false    337    329    3377            O           2606    35016 A   model_has_permissions model_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_permission_id_foreign;
       public          postgres    false    3345    304    307            P           2606    35027 /   model_has_roles model_has_roles_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_role_id_foreign;
       public          postgres    false    308    306    3349            L           2606    34571 '   ppid_biaya ppid_biaya_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_biaya
    ADD CONSTRAINT ppid_biaya_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 Q   ALTER TABLE ONLY public.ppid_biaya DROP CONSTRAINT ppid_biaya_parent_id_foreign;
       public          postgres    false    3246    209    235            I           2606    34526 #   ppid_faq ppid_faq_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_faq
    ADD CONSTRAINT ppid_faq_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 M   ALTER TABLE ONLY public.ppid_faq DROP CONSTRAINT ppid_faq_parent_id_foreign;
       public          postgres    false    3246    209    229            K           2606    34558 1   ppid_infografis ppid_infografis_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_infografis
    ADD CONSTRAINT ppid_infografis_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 [   ALTER TABLE ONLY public.ppid_infografis DROP CONSTRAINT ppid_infografis_parent_id_foreign;
       public          postgres    false    233    3246    209            B           2606    34414 )   ppid_kontak ppid_kontak_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_kontak
    ADD CONSTRAINT ppid_kontak_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_kontak DROP CONSTRAINT ppid_kontak_parent_id_foreign;
       public          postgres    false    3246    209    215            H           2606    34510 1   ppid_lap_survey ppid_lap_survey_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_lap_survey
    ADD CONSTRAINT ppid_lap_survey_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 [   ALTER TABLE ONLY public.ppid_lap_survey DROP CONSTRAINT ppid_lap_survey_parent_id_foreign;
       public          postgres    false    3246    227    209            C           2606    34430 )   ppid_lap_th ppid_lap_th_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_lap_th
    ADD CONSTRAINT ppid_lap_th_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_lap_th DROP CONSTRAINT ppid_lap_th_parent_id_foreign;
       public          postgres    false    3246    209    217            D           2606    34446 )   ppid_lap_tw ppid_lap_tw_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_lap_tw
    ADD CONSTRAINT ppid_lap_tw_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_lap_tw DROP CONSTRAINT ppid_lap_tw_parent_id_foreign;
       public          postgres    false    3246    219    209            J           2606    34542 -   ppid_maklumat ppid_maklumat_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_maklumat
    ADD CONSTRAINT ppid_maklumat_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 W   ALTER TABLE ONLY public.ppid_maklumat DROP CONSTRAINT ppid_maklumat_parent_id_foreign;
       public          postgres    false    3246    209    231            T           2606    42227 5   ppid_pendaftar ppid_pendaftar_jenis_identitas_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_pendaftar
    ADD CONSTRAINT ppid_pendaftar_jenis_identitas_foreign FOREIGN KEY (jenis_identitas) REFERENCES public.jenis_identitas(id);
 _   ALTER TABLE ONLY public.ppid_pendaftar DROP CONSTRAINT ppid_pendaftar_jenis_identitas_foreign;
       public          postgres    false    3367    323    319            S           2606    42222 3   ppid_pendaftar ppid_pendaftar_jenis_pemohon_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_pendaftar
    ADD CONSTRAINT ppid_pendaftar_jenis_pemohon_foreign FOREIGN KEY (jenis_pemohon) REFERENCES public.jenis_pemohon(id);
 ]   ALTER TABLE ONLY public.ppid_pendaftar DROP CONSTRAINT ppid_pendaftar_jenis_pemohon_foreign;
       public          postgres    false    3369    321    323            W           2606    42307 /   ppid_permohonan ppid_permohonan_id_cara_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_id_cara_foreign FOREIGN KEY (id_cara) REFERENCES public.ppid_memberikan(id);
 Y   ALTER TABLE ONLY public.ppid_permohonan DROP CONSTRAINT ppid_permohonan_id_cara_foreign;
       public          postgres    false    329    3363    315            X           2606    42312 6   ppid_permohonan ppid_permohonan_id_mendapatkan_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_id_mendapatkan_foreign FOREIGN KEY (id_mendapatkan) REFERENCES public.ppid_mendapatkan(id);
 `   ALTER TABLE ONLY public.ppid_permohonan DROP CONSTRAINT ppid_permohonan_id_mendapatkan_foreign;
       public          postgres    false    329    313    3361            V           2606    42302 9   ppid_permohonan ppid_permohonan_id_ppid_pendaftar_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_permohonan
    ADD CONSTRAINT ppid_permohonan_id_ppid_pendaftar_foreign FOREIGN KEY (id_ppid_pendaftar) REFERENCES public.ppid_pendaftar(id);
 c   ALTER TABLE ONLY public.ppid_permohonan DROP CONSTRAINT ppid_permohonan_id_ppid_pendaftar_foreign;
       public          postgres    false    329    3371    323            A           2606    34398 4   ppid_profil ppid_profil_id_ppid_jenis_profil_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign FOREIGN KEY (id_ppid_jenis_profil) REFERENCES public.ppid_jenis_profil(id);
 ^   ALTER TABLE ONLY public.ppid_profil DROP CONSTRAINT ppid_profil_id_ppid_jenis_profil_foreign;
       public          postgres    false    213    3248    211            @           2606    34393 )   ppid_profil ppid_profil_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_profil
    ADD CONSTRAINT ppid_profil_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 S   ALTER TABLE ONLY public.ppid_profil DROP CONSTRAINT ppid_profil_parent_id_foreign;
       public          postgres    false    3246    209    213            N           2606    34600 I   ppid_regulasi_peraturan ppid_regulasi_peraturan_id_jenis_regulasi_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign FOREIGN KEY (id_jenis_regulasi) REFERENCES public.ppid_regulasi(id);
 s   ALTER TABLE ONLY public.ppid_regulasi_peraturan DROP CONSTRAINT ppid_regulasi_peraturan_id_jenis_regulasi_foreign;
       public          postgres    false    239    3274    237            M           2606    34595 A   ppid_regulasi_peraturan ppid_regulasi_peraturan_parent_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ppid_regulasi_peraturan
    ADD CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.ppid_menu(id);
 k   ALTER TABLE ONLY public.ppid_regulasi_peraturan DROP CONSTRAINT ppid_regulasi_peraturan_parent_id_foreign;
       public          postgres    false    3246    239    209            ^           2606    42407 >   reject_permohonan reject_permohonan_id_ppid_permohonan_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.reject_permohonan
    ADD CONSTRAINT reject_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);
 h   ALTER TABLE ONLY public.reject_permohonan DROP CONSTRAINT reject_permohonan_id_ppid_permohonan_foreign;
       public          postgres    false    329    343    3377            _           2606    42412 >   reject_permohonan reject_permohonan_id_template_reject_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.reject_permohonan
    ADD CONSTRAINT reject_permohonan_id_template_reject_foreign FOREIGN KEY (id_template_reject) REFERENCES public.template_reject(id);
 h   ALTER TABLE ONLY public.reject_permohonan DROP CONSTRAINT reject_permohonan_id_template_reject_foreign;
       public          postgres    false    3389    343    341            Q           2606    35037 ?   role_has_permissions role_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_permission_id_foreign;
       public          postgres    false    309    304    3345            R           2606    35042 9   role_has_permissions role_has_permissions_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_role_id_foreign;
       public          postgres    false    3349    306    309            Y           2606    42333 >   status_permohonan status_permohonan_id_ppid_permohonan_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.status_permohonan
    ADD CONSTRAINT status_permohonan_id_ppid_permohonan_foreign FOREIGN KEY (id_ppid_permohonan) REFERENCES public.ppid_permohonan(id);
 h   ALTER TABLE ONLY public.status_permohonan DROP CONSTRAINT status_permohonan_id_ppid_permohonan_foreign;
       public          postgres    false    329    3377    333            Z           2606    42338 5   status_permohonan status_permohonan_id_status_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.status_permohonan
    ADD CONSTRAINT status_permohonan_id_status_foreign FOREIGN KEY (id_status) REFERENCES public.status(id);
 _   ALTER TABLE ONLY public.status_permohonan DROP CONSTRAINT status_permohonan_id_status_foreign;
       public          postgres    false    3379    331    333            U           2606    42286 &   submenus submenus_main_menu_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.submenus
    ADD CONSTRAINT submenus_main_menu_id_foreign FOREIGN KEY (main_menu_id) REFERENCES public.mainmenus(id);
 P   ALTER TABLE ONLY public.submenus DROP CONSTRAINT submenus_main_menu_id_foreign;
       public          postgres    false    327    3373    325            �      x������ � �      ?   H  x�}QAN�@<'��Z�@��Kű�@�G1ɲYo�Y��xӪE(�X���̞���@a<a���3��h�98�y���G�Խ�М�-~�N�j����z՛`�c�o���F,G�4�N>��aP�@-6�i3��)Zc��Ċ���1�Bmb2�=uj�K�'�#WU�$�x�O����!YF�����q㙔�̪��e�(J(���~S=�ay�xI�S�4�F���n�#E�7���Փ�2��w��"�H5�h�UJ5%�BOX��J�ޔ/�� ����(���D�S*[,����0��ie����e��?� Ո      =   A   x�3�LL���s,.N-)�OK,�OJ��K-�Rzy�FFF��F��
�V�FVF�ĸb���� ���      c   A   x�3�4�4���)��H.+�d�;β�
 ��4202�54�50Q04�22�20�&����� T         M   x�3�LL���s,.N-)���K�/�M,�(M����OJ��K-�Rzy�FFF����F�
&V�FV���ĸb���� ���         �  x���Mo�0���� ;��܂�������@&�I�D����;f�
�*�J>L^'~��u�h�]_��b�@E��b�S)���2�E��"��4ښ~đ>�5� �|/O��]�:
�غ֍��k�1����ӳ���r~ �h��x*$2�"�!�eg�[lF���G�nP��W��Z�>���5�yV���`g��,�B�-��`�jT'X(,(!�E��r�-B��}������fqHcߣ��PE����+�e]<�F�ڢ�I-ޞ7w�i�!����wր�Z�DE=���ӛn{�=FO@��Q*}*}ET��wtGLm�O�֫�=��D�4&�7`�Z�#�5`	w��p�u�����REo��iҘ��R�]7}�Y^�RY,�dQp��{JNrq�1�1_��F��z�C���gN���8��dr)r�[�gժ�o�[�\�??��i.n��5�>c����g�         b   x�3���K�/�M,�TH-JN-H,I�2������s~Yf��%gFIIA���~2�������������id`d�kh�k`�``heljed�M�+F��� P��      !   �  x��T�n�0<�_����;խAQ�Hb	�^rYEk�_ �������`Hn�`9��;dξ�q
�H� �M6� ����:i@�` �;�	�Q�t��w/�kօ`}���Ft�zPzޚ�hR��fEV���ey��UQT�2��=	��0j>�5�5�[�F�v���4{�K�>�:+�k?���s�ٴ3
#m,�l���ݑ� �D��0aW�H5�}�9�08b�d�N���Nkz?{3z��[���6��������
-H��ڎ���e���="�_x��	e:���� m�Z���l�h�[����=��fp1�e��b_�I6hQj�Ƌ�}�D��.�n��m��-;�*�8��~%�WG��8�K�e����� %�:P����T;}@UC�a|�A4�'�����oY��|��}��H����(P�����hY�0�瓯�[A�Ǹ��k�p+��H+�e�s����l�      +   �   x����N�0���S���R�ܨzhU!qA�&�	�`7��C���
���+Ϸkkf�B�~�V:���I��������Uji:|b��6��P�������8R�7d� t�\���A*�J60�>N�,ɲE�.�EyW���cٿ�ZiT(#�U`�1Աk��+�[��oq�zKb���	k�3�K��t�����Ǌ���U����o���$Dh��w�W�,�e�&�b����ے1�>�%      -   [   x�3�LL���s,.N-)����M���K�/�M,��/�LI��MLO�+�Kǧ0)19;�(�4/�����H��P��@���������W� ��)�      g   r   x�m�A
�0@���^@���"B�!H0AD:L�鋮���Gh���*�c��Zp���'Ɛ�Y��y˼8�ؾڷE����i����wǕ�5�!*�J�Xw������J)�0�&      S   5   x�3��	���2�.-J,Q�.M,N�2�t�KOO,J�Sp�b���� =�)      U   7   x�3�H-�/J�KO��2��N���-��V�	qs:%�$�)x�f��r��qqq ���         �  x��Wmk�0���
5��A�";�'{e�{+t0�r���,y��4�����B�`�N V���=>=�Ctp!|�3��W3^ �����Q����-��Srh������aD��h:��&O������W��^�!k[�ŵ���{+l�
��L��nUb�V�g#��z�ڳۊ��|�A��h(p17��օ/�P:%��I�\I��P�ئ�=XuJH��1��8\:�nnVJ��%���4��
\��57��P�6Wk��qΈ��r�9�K��}����KI4#��X\&����v��K�6D[����!48���f������o���y�4��n���@�� �U�=w�]w���J�Z2ﶸy��80�T,*��5.ɍ˅-6�c��>��r���J������`Y)':骒�{���K��#��n��˺p2
?��N������b��[�d��@[���m�3�H	z��+C���Y>T�|����~G_�^���	�vӷ��ݜ��`�Z��V���M�~Z��/���t�92����k��O�a���sd>Q?��S||>uw<�G��=���(_í	*�rA�v� )��+�x�&t<M�'~�E��,��%�QE�^�:M�I:>n�*dϳ���J�Ȇ��p8�	"B�         b   x�3�LL���s,.N-)�/(�O������+I��O��.�M2�3�
��9�����H��P��B����������q�6AtC�,��q��qqq ��1�      �      x������ � �      �      x������ � �      �      x������ � �      5   E   x�3�LL���s,.N-)��I,�/J��OJ��K-�Rzy�FFF��F��
�V��V&f�ĸb���� |��      ;   �   x���A
�0 ��+�@�$�(�	>�����H���Z�׋o����V��KH'Z��X2c�f�A�Qh�$���z�%�9aҶ.����+�1��
�Jl{0~�ћ���Էr��qN[���߹���WS�Z)�LF�      9   �   x��O=k�0��_�?`W�%��J��1 �\+ؒ���կ�B�R<t(]��ݽ{�8y��#���	>����>ΐl���U�	N�4[��.�i��|g�<�J��	��}�	��1�~�eP�&��_��a1#�Mp�芚��񊵝��oaT�lV�������IG{ŨCDc�5�y�cR�v/�*$c�9l�P|��会lJ�'��Oթ�F���Y;��      7   
  x����n� �g�~;p���R�H<t���R��'�Mۧ��*�=8K.蠣{>.�8a�]�*������]|��t����J�x�ڽ��rژ?�}�9��`&��Զ��09����Z���4FF���Qu:�NIʷ�<I�k��5 �Gx/����Z�Y ,i�?�Z��௃U���N�G��N���ɤbF;�:�Yح�lI#|�4`5�J��l�O*�VE�{?^T�2����H��L�nI#�*��_4�G������ ������. U      3   �   x�m�M
�0��9E/�-BJ��251M2!3.z���n?���;�����F9ؕHB�	�je[|5��E����X��� !�7��n�<��e"QL�,��	��A ?��%,���+����}7�a8D}u7N�M��ߦ�F)�Z#@K      e   �   x�m��!�~U������kI�u�q�7�%'!e�K�b�%�t>1ز�.�T?18����d�CP��fo�A�ۑ:O���;1�ˎ���#�g��ƙ�~����:�i-e3�,�N�ɵ�a��� 4(RW      Y   �   x�u�=�0�g��@����	�B�.FmQDHJ�ܞ� R'�ϟ߳��у�����}��z�	�q�1IYa�2L�֫txM`1*8��7i�O�c��ZQƌ\-����B����j8:{�����Ԝ�*�κi��!>=��D��=n4����+�N��ǊK�      K      x������ � �      �   �  x�U�a�� �7��@�wلЊ;�h:s�-�V�c���QU���	ͨf���K�a��+���[��n_|�[�{�_�������J����5�E��젿ó�݁��iv�+��8m�ަl5[_���P�4�7H./��f�P�좱-��.���U,Vj�
F������L�*���ʌ���'?�� ��O7͕H�D�5R���?��̯�nXM�i'�h���������]��
��ʨB�<	U����ͳ+0�SJ	���@����^�`5�n�jRz�8����*͹�!e{c��5���j.g+R�Ȗ+�U�[����<e^^�ʘ��_�߫��*��N6T�F��������3�W�7����m6�!	��g��%8|y�84�����k.>n&�a��%��K����߂q��x��ݖpy��U�?q	_�'���"�B��V�      G      x������ � �      H   3   x�3�t,(����OI�)��	-N-�4�2�"j�e�E���	VQS�=... i�$      B      x������ � �      D   >  x���Yn�0E��Uh	HJ�����m�!Aw_ڍZ����c��%�Ҏ�sg���}pvr�ӝ	���0�BYF՛o��];�U�ûOP8_�]�'P�X�KW;�!>٬wC�ݺֶ��� ;P؄> >�H��n_P:�C�:�#�:�#:XN����:}{����G�!����fD��#��#E��jǬ�mv�����t��d$�)N$�+��8s5�C�W��ю���Q�ϣ��"��8���wݍGڑ;܋��F�qaHյ��0r���d�D��s�D}����:k�[T�b��w[ ܀�0��o�y���=J��1�&̎ ߝ��`$��m*ٷ�<I�)�$n�H�0�������F�n��mPek�=U�4nM�apm:�x3�����#M�lL�	�K�	3:���m���N(WE�w%$�+� a\)R۾�����?�ڶ���:��2)X��)d�`�6C��Q̣ؔ��"��8I��D� 7�]�2�zbIĮ�����hJ�t��SeHc�zn�3���/��c�8H��H�lH��G=�8FW���{~��G�0p?2���Q��C��r�7c�M������x���w��#�[<r����a�D=�SQe�o�� x}�`<�?[6e��5 ���ul��u�߄)����`ݏ��-S(p�����S'2v�dk_�ṊDX/�'Q�D��G�KQ����)��j�gt5maʯ,\���l�:\w�F�V_QDg�E�5��un�3F�4�1cK^��%�����t:��      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      O   >   x�3��M�KO�M��Q�I�K/.�K�2�t���,��U�I-O,Q�/�2�t�M������� �g�      M   W   x�3��M���H,��M�MJLN�y)�y�E VrbIb	�gpbNf^b�BJbNb�BRj^Ii��GbQJr~A%�1v�����|� �!$      �      x������ � �      W   q  x���QO�0ǟ�O��@{��$�Ht�����1`Uh6>�-j�8����_��L��!�7��\�i}��]��o�`����AY#�6��N�_/ߦQvO�,6�ώ�+��N��8(��ǘ��b��vh�FYʻB�R4s�)��Le(���r�Ĕ�|�D���c���ka������"
ռ�1u�� j�I&�����l�s8ؚŔ���,���q����&�F�z��I�wî��0�{/�&���ڭj8���t�0ѱ(�c񯃊P��	��싵�����eG�]|�a����v�'��M�0�w܋�>[e��<���v��
/Z��)���,�b�ph*���UNTČy�0�O-t�R      ]   �   x���Q�� ���Sx��Ψ	�R�z���D�<l��BO_M���e��0�#��+2d�vWv��]�A��T�M[�qt��8��w��/�1�n
c���n[��F�v�F��B���H�4�d�����<��\���*$�ve�{T�y��ԟQ���ղ�A�;��\X�2d����~�hGʢ�F�<�S�.�u]y�id�5�����6jJ�D����ß+�=;����VQɃ� < �Z�      Q      x������ � �      �      x������ � �            x������ � �            x������ � �         "  x��VmO�F��b�J�V±�.(4T�9�Q>TB�����x���K���wf��A�NU�7;;3�������WT�f��	��r#@�����G��&������U��WO�I]n�8�*�,3],�Uˬ[J�Ӊ�Ge��l88�8���-�����ڌ�wg���͵r�!�c�	�>e��,"��f+��lغ��3�M����IQ���7�9�/M�=ܳ$�`�;�J��s���Iǿ�0����N̗��Pvr̒�k���0GGrW��=W��s��6�&O�F(Y-0 E���GϢpUo� �K��*�U#��O\�\pB��U"��X�Pu[g�>�i�s�텰��%���hZmPSD����zO���Hd;S��A�c���E�=�g�hÆg�*�X�$#�Љtʑ��׀�w��	V��Ϥ�Oٌ#P{l�!���!�K���垵P �1$��w��3ט�n������c���4I�5:t�T!A�];��m��	�LqJ����W������ç*��r�	�;6ѵ������%�,�OB��@=ȡ�-3�L�s�j��� ����xU��+��9/ C���`�������w|u�
�����y�ߐu��΢d��`JibF������[Ǜ��#�	����?�i��-�4�����`�)ij����ل�4��^����g�vXD�F�0wY��2��|ղz�Ίu���}ծ��ir��=D��"I!�5V<:�Vä�Km�Έ�I�^y}���/��`���M�0zz�	6�[P�P��!��G��	+��o	%u���&�h�Rݔ�v��%��c����Tv��+D�=�ѕVa��`�a��"�o5��4������OMA1}h'
��	��ҕ��g8[��t�VR|I7��z�{C!�[#&�י���$k"�Ո5�s���l
쀚Cǌ��bxb�H�����}D���eL0W�q� m>{���tE#Ե��ٸ5z.d���v"�3P�͠U�7���w�<����p�#6��>�����?����`�xF         a   x�3�LL���s,.N-)�/JM/�I,��OJ��K-�Rzy�FFF����F
��VF�V��P1#]Cs+C+C�ƕd��&�%f�L����� #'F           x����n�0Eg���ϐ��Q$�ڲU��B,� ��}��T�ԡ���w|�5�Jtz��������>�W�cgZ���`�M��}��ϳ����m��ӭ�V�W*[�Q�}\)�W���:���8�joO��7�\�#]����ɧ��w���Z3�e���^�b�I���3�c�8c�m$0�y~4#�]��Л�}��z��fwe�'v�	�ڦ�I�� �֨bH@-9꒣��/�̅d�ь@�?^U�VA��2���j����@2��V����7��'         �   x�m���0���}�VeӰҘ��4W�`\Ho��v����|'�G�+���G\b���1M�pB
�]2��E��))k�x�P7�	�I�d���Q?���o]@;9�3c��c�T-���.�!��vpKY#�#k���֠���L@��vB	��:W*�[�v�ZW��?/�Y��-�K      k   V   x�mȽ� �������@�6$C!1����6�z����)���^ۘ}1�1����q�#����_�2bv��Ա*�>#��      I     x�-�˕�@DѵҘ9�/_�;�G�"bŭSR��S�J����K	��QN!!�鑢zJ/%�RF9ԣ�P�!aC����ϛ�&=�K	��gG'6�IL�$'5���d�[�X�΅{B���P�"�E(B�0���A��0�!�G8��	�p�#�@"��}hD �@<�C<�C<����x��x�D$"�HD"r_-"�(D!
Q�B��k 
шF4��hD#�;��;���xwŻ3����w��;�]�7��� ~��s��g�      F   `   x�3�LL����,OM�4202�54�50T00�25�22�&�e�YZ�ZD�c����ẕ�q���Q(H�K�(M*�KG�m�`hleh`el�M�+F��� kQ0�      )   �   x���AN�0E��)�I<����TT	���%C�6q";�?%b�Ҭ�4�}��/c�9f�8p{�p�ZR�m�N����#A�(ALrX�������M��y{~B���/4Z���dqS�n�x��'��V�����4E�n7�(��#l��<��u�ȓ����Sc;Q�M����х������{;,!��-@�B���9�s��[�쀿�Ȩ��oF�BPk���ܥR�OH�{�      1   �   x���Mk�@�ϻ�����~%XD,� b��
e��q�ݕ���o*iE�!���exfR��v�=O�� �9�&�y��J���>��V�E'[�}'/	i�6����r ����捱1�)��&���X����%o�&��2	�������{qT���Eub:İ�pqMhrx>E\5
�N7i��nW���s�mW�Kp���Yw�!��Q>;U@���Y�/��o��}�uY��k7j�$�R)��_��XD��      '   �  x��UMS�0=�_!ҙN;��c��N3C�:���Ჶ{�,y$�!���l�	�tzh9��]������`!2�l��������OW7�V�Z�oͭ����~5�.3������l�Y����8�R���	�'aK�\���:f���`�� b������c���A�`�-� �a�����V�����7!�s��g����Ԧ)AQh�0'�] TI�쮵�����E��^;�3��$1���(�A$lU�]��AV���/�҆o���Q�Y��ѧ���J����A^F��d��3t�E�8�*p%��j�B������g�C�_~������J�C�maN0K�ϩD2�����""|U���6�X����i�U������������[��&�M<��J�*6d���'JWF���)a5�� Q�o}·#f�K�>�}0���|��~	�Q8Ӓ&O�o���G��ּ��ϯ���]C�k]�rİ�[�r�*W�y�:g�"=?X*TAŁ�q�%���y�IWXg�$VQ�� f�K)J�U�R?��#R��%�ٵrm��ﳑ^�>��^�i����=\��E�M��.�X��7b9i����o<����kTg�
g��~(3��$�u�7���q����]DFQ0��p��i�!�Ó}�I|�n�G��O.��7      #   s   x�3��M��)�M,Q�tQ�N�M�+I-�L�Sp
���LL���s,.N-)�/.I�KI,�I�L�K��υ��OJ��K-�+�K'J9��`d`d�kh�k`�``helneb�M�+F��� 7�      %   p   x���;�0�9E/ ��R��s�.F� ��CoC&6��!}�¸�<�R�NrD�����eIJ��	�Ij���'8��iIW}*4�`��Y�p�����?����m�1'�L�      _   \   x�3�H-�����K�S�M,.��2�t����K�,�M,�T��I��2����g'�q� 9Y��I9S�\~Nb6�k����Z������� 8�      a   �   x�uл�0Eњ�"8�O��!2��L��E�̗�x�bP���"�Mm�x����7T`�挑�ߎ��+K�q�+QVT�}�����l^b.�*s�՚��j�R`�S�Sc�Lƪs�^XGFԚ����#T�Vk�c��j�tp��X}��h�RO|)0>���u���      	   q   x�3�.)*�.)-R�tQ�N�M�+I-�L�Sp
���LL���s,.N-)�/(�O���/���/JO��,N,��OJ��K-�+�K�4202�54�5�P0��2��22�&����� $&�         >  x�mQ�n�0<�W���8U����*q豗E�`l/ȏC���)I�FB�;��١*N�������XPK�zQk7i�������B�B�	�|�ȠF˜*������@�^�B>K����<���X�/���Ry k�1��C�����.$����dD∷S�$噘:
��V�g�����Q�Sj�6���42G7��}P���e�);Zv4	�m2��1X1+��ra|}r�U����C��/��Ew)�-��V�W{ x&�n�|`�����Ŕ��I�G����-�.��ͼ������o��*�����#��z*���J�;         N   x�3��M�+I-�Tp
���4202�54�5�P0��2��22�&�e��X�X��������1(@�1Ɯ������ � ,�      [   �   x���Mj�0��O��,����
�M04t��9F8V�%���;�tђ����7���ҕ�+G>�34�o�c|�[g�/�8��S�%vԞcG]J~�љ�3�gY!3U�TK6�P_�8���TH��=��YU�[���{k�W��]����!6�!'��k�E�O���"�[bx���zl���ۉ���:�w��oڢ�����V���p�!�+���      i   \   x�3�tI,IT(�LI�V�I�K�N,�2�t��IU�LI�+�,I,�J��%%&'r#�I��.M,N�T�tQ�N��)�L�Sp
������� �� �            x��WKo�@>��b(�0NB��	���TA��r@����ڞx�k�A0��ٵ�T���s)��{G�7�L�|�
T�ޫ�\^����
�!���r��`����۫���v�<�6�jq�$�N����N^�u���$Y��s��Nd`�{4b~4J:]؎s��K-�������C��KJlI�|D���Ee˕����/�;}���B��6-�Q���\"�B獰�����Z�j���d2)w)ᚗ����6]ͅe0��?]��Ie���QُBRw9�I�5J�a����PJ�a]�1��+����!�Z�b�>�
�8Vh�эH��գ>�eS�U�l�[��XC!�ڠ#�WӲQ�r.R�($��fl��1Ǎ� �I�D����N���K�n����P����BK��c�o;/B����p�B�0 ��V,� ��>�kC,��x� aV�Z!�󎸈�{���5�(%��0��(ȷ�mb�;�A�asF@��$��.:n��I���T�C��ZR�Z���ڹ�|�2�.R�Ş{~�?
t��P� ��h�@KQ�҂�;��q,�n{�D��3��_�aSk�K��.::!�`�C����oƵ+��>o�cE�C�d�
ę�#ˈ|L@��"#aϖ=[��-}�7h�8��"?-Pz�?�<R&�g���{��=��g��h�qm�+��wQ���� �x��a�����,D<������;�jw�H�����5=������<�m�]�L]����1������i���2�T��+=f��,�N��	LO���lz�+{6;�~zxx��=�g      A   �   x���Ko�@����+\�f,W�JD�7(S.�"c�����;�39�7'��=��z�mJ
�!_���:�:pt��{A�a.v��\��nk���w]�����T��^�ͼT�I�������)�S�&P��fsL�~��_Ԩ���)7,�}!-(-./�X�6}��U��>��]�E/ֺ��3� }�N>���ؐ��ʪv�V�֑?�����*�đ�� ��p�E�>%7�3�bj��Q�#ǂ      /   m   x�3��())(���///׫�/-)MJ�K���O�MJM��13M�
-�N�����4�4202�54�56P04�2��24�&�eD�`S��t��B�,��F���Z`����� ��/�         �  x��W�n�F}��b����.�b�"�ڤE��m��!9�\�2{��~}�R�m��6�[!��������Z�8{���7��y�5�3�W�ʞ�{�vO���U��S~z������Jg�_����)���i͝���qt
l�4��zT�KV������X+��wlF�{e|]sL^�3������躉+:ɀ��(~
̥�����}`+Z�R�Oq��dWt�B�z;
�Vb�8c$�ëF���)m�2ĿW�F+���8_ݥa�*b�!z������ڻd�龿�I~�*)���Nc�ek% �Z���?����~�q��4�Yb�
�Ԯw>��h�q��_��s^:�>�����F�N�Jg��Q�xĕ�rH���lw���#!Y)�B�RG�����$3�C�E2�ߋ1X	�P@ZIcNx�ȁ�dnԲ�ћ�М�F#�dé�8��܋��S��!B=d�hf�>�"xD�VCЎ����'�����J3�ˆ�����'4�s#�:grB�Q~B��q�[5��e���3�����H�;����7�&�g���hL��|�����F�&��7��? ��:X�oX~!v�P���H��t��!&�Ԁѹ]0��Tm�(�3�
���� sO	��0�h����}��%6|�E�(�rNY�M]��!��߲A��9���'
fǻ�0)R�`�Z��]�J;��QV�lK9��$Hq ǁ�D��#��9�O[�8���1'��_��']^Z������|&���v���H
|K��F���\G�Oq�7y�G�t У2`����z�~O�6����Gf͂�ǯ��\�"����9T���v���S��9�&�x�n�1d~ط�w�Ͼ����u�ubض�+�����!��~��aSN�� ��Y��{"CD'�>�@̓y�z�n#?l�a�{W���������ü`k��z�~�<^.���t�--�[-�ׯ��]͎����E��     