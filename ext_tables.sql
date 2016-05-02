#
# Table structure for table "static_countries"
#
CREATE TABLE static_countries (
  cn_short_sk varchar(50) DEFAULT '' NOT NULL
);

#
# Table structure for table "static_country_zones"
#
CREATE TABLE static_country_zones (
    zn_name_sk varchar(50) DEFAULT '' NOT NULL
);


#
# Table structure for table "static_currencies"
#
CREATE TABLE static_currencies (
    cu_name_sk varchar(50) DEFAULT '' NOT NULL,
    cu_sub_name_sk varchar(20) DEFAULT '' NOT NULL
);

#
# Table structure for table "static_languages"
#
CREATE TABLE static_languages (
    lg_name_sk varchar(50) DEFAULT '' NOT NULL
);

#
# Table structure for table "static_territories"
#
CREATE TABLE static_territories (
    tr_name_sk varchar(50) DEFAULT '' NOT NULL
);

#
# Table structure for table "static_taxes"
#
CREATE TABLE static_taxes (
    tx_name_sk varchar(50) DEFAULT '' NOT NULL
);