/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/18/2019 8:23:33 AM                        */
/*==============================================================*/


drop table if exists ANTRIAN;

drop table if exists DATA_BARBERMAN;

drop table if exists DATA_BARBERSHOP;

drop table if exists DATA_CUSTOMER;

drop table if exists DETAIL_PENJUALAN;

drop table if exists DETAIL_PESAN;

drop table if exists HARGA_BARBER;

drop table if exists PENJUALAN;

drop table if exists PESAN;

drop table if exists PRODUK;

/*==============================================================*/
/* Table: ANTRIAN                                               */
/*==============================================================*/
create table ANTRIAN
(
   kode_antrian         varchar(10) not null,
   username_cs          varchar(20) not null,
   username_bs          varchar(20),
   no_antrian           varchar(2),
   tanggal_antrian      datetime,
   status_antrian       varchar(20),
   primary key (kode_antrian)
);

/*==============================================================*/
/* Table: DATA_BARBERMAN                                        */
/*==============================================================*/
create table DATA_BARBERMAN
(
   username_bm          varchar(20) not null,
   username_bs          varchar(20) not null,
   nama_bm              varchar(50),
   email_bm             varchar(100),
   no_bm                varchar(13),
   alamat_bm            varchar(100),
   password_bm          varchar(20),
   foto_bm              varchar(255),
   primary key (username_bm)
);

/*==============================================================*/
/* Table: DATA_BARBERSHOP                                       */
/*==============================================================*/
create table DATA_BARBERSHOP
(
   username_bs          varchar(20) not null,
   nama_bs              varchar(100),
   email_bs             varchar(100),
   jam_buka             time,
   jam_tutup            time,
   no_bs                varchar(13),
   foto_bs              varchar(255),
   password_bs          varchar(20),
   status_toko          varchar(10),
   primary key (username_bs)
);

/*==============================================================*/
/* Table: DATA_CUSTOMER                                         */
/*==============================================================*/
create table DATA_CUSTOMER
(
   username_cs          varchar(20) not null,
   nama_cs              varchar(50),
   email_cs             varchar(50),
   alamat_cs            varchar(100),
   no_cs                varchar(13),
   password_cs          varchar(20),
   foto_cs              varchar(255),
   primary key (username_cs)
);

/*==============================================================*/
/* Table: DETAIL_PENJUALAN                                      */
/*==============================================================*/
create table DETAIL_PENJUALAN
(
   kode_produk          varchar(10) not null,
   kode_penjualan       varchar(10) not null,
   primary key (kode_produk, kode_penjualan)
);

/*==============================================================*/
/* Table: DETAIL_PESAN                                          */
/*==============================================================*/
create table DETAIL_PESAN
(
   kode_order           varchar(10) not null,
   kode_ck              varchar(10) not null,
   primary key (kode_order, kode_ck)
);

/*==============================================================*/
/* Table: HARGA_BARBER                                          */
/*==============================================================*/
create table HARGA_BARBER
(
   kode_ck              varchar(10) not null,
   username_bs          varchar(20) not null,
   nama_ck              varchar(50),
   harga_ck             int,
   primary key (kode_ck)
);

/*==============================================================*/
/* Table: PENJUALAN                                             */
/*==============================================================*/
create table PENJUALAN
(
   kode_penjualan       varchar(10) not null,
   username_cs          varchar(20) not null,
   tanggal_penjualan    datetime,
   total_harga          int,
   primary key (kode_penjualan)
);

/*==============================================================*/
/* Table: PESAN                                                 */
/*==============================================================*/
create table PESAN
(
   kode_order           varchar(10) not null,
   username_bm          varchar(20) not null,
   username_cs          varchar(20) not null,
   tgl_order            datetime,
   alamat_order         text,
   status_order         varchar(20),
   latitude_order       varchar(20),
   longitude_order      varchar(20),
   total_order          int,
   primary key (kode_order)
);

/*==============================================================*/
/* Table: PRODUK                                                */
/*==============================================================*/
create table PRODUK
(
   kode_produk          varchar(10) not null,
   username_bs          varchar(20) not null,
   nama_produk          varchar(50),
   harga_produk         int,
   primary key (kode_produk)
);

alter table ANTRIAN add constraint FK_ANTRIAN foreign key (username_cs)
      references DATA_CUSTOMER (username_cs) on delete restrict on update restrict;

alter table ANTRIAN add constraint FK_ANTRIAN1 foreign key (username_bs)
      references DATA_BARBERSHOP (username_bs) on delete restrict on update restrict;

alter table DATA_BARBERMAN add constraint FK_RELATIONSHIP_14 foreign key (username_bs)
      references DATA_BARBERSHOP (username_bs) on delete restrict on update restrict;

alter table DETAIL_PENJUALAN add constraint FK_RELATIONSHIP_12 foreign key (kode_produk)
      references PRODUK (kode_produk) on delete restrict on update restrict;

alter table DETAIL_PENJUALAN add constraint FK_RELATIONSHIP_15 foreign key (kode_penjualan)
      references PENJUALAN (kode_penjualan) on delete restrict on update restrict;

alter table DETAIL_PESAN add constraint FK_RELATIONSHIP_11 foreign key (kode_ck)
      references HARGA_BARBER (kode_ck) on delete restrict on update restrict;

alter table DETAIL_PESAN add constraint FK_RELATIONSHIP_9 foreign key (kode_order)
      references PESAN (kode_order) on delete restrict on update restrict;

alter table HARGA_BARBER add constraint FK_RELATIONSHIP_5 foreign key (username_bs)
      references DATA_BARBERSHOP (username_bs) on delete restrict on update restrict;

alter table PENJUALAN add constraint FK_RELATIONSHIP_13 foreign key (username_cs)
      references DATA_CUSTOMER (username_cs) on delete restrict on update restrict;

alter table PESAN add constraint FK_RELATIONSHIP_10 foreign key (username_cs)
      references DATA_CUSTOMER (username_cs) on delete restrict on update restrict;

alter table PESAN add constraint FK_RELATIONSHIP_16 foreign key (username_bm)
      references DATA_BARBERMAN (username_bm) on delete restrict on update restrict;

alter table PRODUK add constraint FK_RELATIONSHIP_7 foreign key (username_bs)
      references DATA_BARBERSHOP (username_bs) on delete restrict on update restrict;

