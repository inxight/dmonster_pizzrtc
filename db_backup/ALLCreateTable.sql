 CREATE TABLE F007 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_title text NULL ,
	DB_title_1 text NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE F011 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_title text NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE F012 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE F013 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data_M text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE F019 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_title varchar (100) NULL ,
	DB_data text NULL ,
	DB_check varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE F020 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (100) NULL ,
	DB_title_1 varchar (100) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE F022 (
	DB_num int primary key NOT NULL auto_increment ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE F022_R (
	DB_num int primary key NOT NULL auto_increment ,
	DB_data text NULL 
);

CREATE TABLE F024 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE F033 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE F034 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE G001 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G003 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G004 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G005 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G006 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G007 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G012 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G016 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G019 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (100) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G020 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G022 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G023 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G024 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G026 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G028 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G031 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G032 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE G034 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J004 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_que varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J005 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_que varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J006 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_que varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J009 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_que varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J010 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_que varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J015 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_que varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J017 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J018 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J019 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J020 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J021 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J022 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J023 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J024 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J025 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J026 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J027 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J028 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J029 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J030 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J033 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_title text NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J036 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_title text NULL ,
	DB_title_1 text NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J037 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J038 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J039 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J040 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J041 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J042 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J043 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J044 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J045 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_data_9 text NULL ,
	DB_data_10 text NULL ,
	DB_data_11 text NULL ,
	DB_data_12 text NULL ,
	DB_data_13 text NULL ,
	DB_data_14 text NULL ,
	DB_data_15 text NULL ,
	DB_data_16 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J047 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J048 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J049 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_data_9 text NULL ,
	DB_data_10 text NULL ,
	DB_data_11 text NULL ,
	DB_data_12 text NULL ,
	DB_check varchar (50) NULL ,
	DB_information text NULL 
);

CREATE TABLE J050 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J051 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE J052 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_title varchar (50) NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_data_9 text NULL ,
	DB_data_10 text NULL ,
	DB_data_11 text NULL ,
	DB_data_12 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);


CREATE TABLE N002 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N003 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N004 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N005 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N008 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N009 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N010 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N011 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N012 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N013 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N014 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE N015 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S002 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S005 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S006 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S007 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S008 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S009 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S010 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S013 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S014 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S015 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_data text NOT NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S016 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S018 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S019 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S020 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S021 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S022 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S023 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S024 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S026 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S027 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S028 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_numerical int NULL ,
	DB_information text NULL 
);

CREATE TABLE S029 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S030 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S031 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S033 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S034 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S035 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S036 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S037 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S040 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S042 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S045 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S046 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S047 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S048 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S049 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S050 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S051 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S052 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S053 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S054 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S055 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S056 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S057 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S058 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S059 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S060 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S061 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_numerical int NULL ,
	DB_title text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S063 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S064 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S065 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S066 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S067 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S068 (
	DB_num int NOT NULL ,
	DB_numerical int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S070 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S071 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S072 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S073 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S074 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S077 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S078 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S079 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S080 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S081 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S082 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S083 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S084 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S085 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S087 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S088 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S089 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S090 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S091 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S092 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S095 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S097 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S098 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S099 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S100 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S101 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_data_9 text NULL ,
	DB_data_10 text NULL ,
	DB_data_11 text NULL ,
	DB_data_12 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S103 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data_1 text NULL ,
	DB_title_2 varchar (50) NULL ,
	DB_data_2 text NULL ,
	DB_title_3 varchar (50) NULL ,
	DB_data_3 text NULL ,
	DB_title_4 varchar (50) NULL ,
	DB_data_4 text NULL ,
	DB_title_5 varchar (50) NULL ,
	DB_data5 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S104 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S106 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S107 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S108 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S109 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S110 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_data_9 text NULL ,
	DB_data_10 text NULL ,
	DB_data_11 text NULL ,
	DB_data_12 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S111 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S112 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S113 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S116 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S117 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S118 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S119 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S121 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S122 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S124 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S126 (
	DB_num int NOT NULL ,
	DB_express varchar (30) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S128 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S129 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S130 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S131 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S132 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S133 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S134 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S135 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S142 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE S143 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE S144 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE S145 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE S146 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T010 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T013 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL 
);

CREATE TABLE T017 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T022 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T023 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T024 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T026 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (50) NULL ,
	DB_data text NOT NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T028 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T029 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title text NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T034 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T035 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T039 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_title varchar (50) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T042 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title text NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T043 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title text NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T046 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T048 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T052 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T053 (
	DB_num int NOT NULL ,
	DB_express varchar (10) NULL ,
	DB_title text NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T056 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T057 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_express_1 varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T058 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T060 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T061 (
	DB_num int NOT NULL ,
	DB_express varchar (50) NULL ,
	DB_title varchar (50) NULL ,
	DB_title_1 varchar (50) NULL ,
	DB_data text NULL ,
	DB_data_1 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE T063 (
	DB_num int NOT NULL ,
	DB_express varchar (100) NULL ,
	DB_temp varchar (50) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE Y001 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE Y003 (
	DB_num int NULL ,
	DB_express varchar (10) NULL ,
	DB_data_m text NULL ,
	DB_data_w text NULL ,
	DB_numerical int NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);

CREATE TABLE Y004 (
	DB_num int NOT NULL ,
	DB_data text NULL ,
	DB_express varchar (50) NULL ,
	DB_data_1 text NULL ,
	DB_data_2 text NULL ,
	DB_data_3 text NULL ,
	DB_data_4 text NULL ,
	DB_data_5 text NULL ,
	DB_data_6 text NULL ,
	DB_data_7 text NULL ,
	DB_data_8 text NULL ,
	DB_data_9 text NULL ,
	DB_data_10 text NULL ,
	DB_data_11 text NULL ,
	DB_data_12 text NULL ,
	DB_check varchar (10) NULL ,
	DB_information text NULL 
);


CREATE TABLE namedata (
	no varchar (8) NOT NULL ,
	what varchar (22) NULL ,
	hanjawin varchar (4) NULL ,
	hanja varchar (20) NULL ,
	hanjano tinyint NULL ,
	hangul varchar (4) NULL ,
	mokwha char (1) NULL ,
	hangulno char (2) NULL ,
	bulcomment text NULL ,
	doccomment text NULL ,
	etccomment text NULL ,
	mokwha11 char (1) NULL ,
	newold char (1) NULL ,
	sungOption char (1) NULL 
);