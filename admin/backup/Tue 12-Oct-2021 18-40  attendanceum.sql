DROP TABLE access;

CREATE TABLE `access` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_uname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `acc_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `acc_pass` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `acc_role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `acc_fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`acc_id`),
  UNIQUE KEY `acc_uname` (`acc_uname`),
  UNIQUE KEY `acc_email` (`acc_email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

INSERT INTO access VALUES("2","wif180002","wif180002@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","THARVINASH A/L VISVANATHAN");
INSERT INTO access VALUES("3","wif180003","wif180003@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","SHIVA A/L CHIVATHANNU @ SIDAMBARAM");
INSERT INTO access VALUES("4","wif180004","wif180004@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","KISHEN A/L NAHINDRAN");
INSERT INTO access VALUES("5","wif180005","wif180005@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","PRASANTH A/L MANIMARAN");
INSERT INTO access VALUES("6","wif180006","wif180006@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","LOGAN A/L SATHIVELOO");
INSERT INTO access VALUES("7","wif180007","wif180007@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","THINAGAAR A/L GANESAN");
INSERT INTO access VALUES("8","wif180008","wif180008@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","KALAIARASAN A/L BALAN");
INSERT INTO access VALUES("10","17122292","tkchiew@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.CHIEW THIAM KIAN");
INSERT INTO access VALUES("11","17122293","hema@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.HEMA A/P SUBRAMANIAM");
INSERT INTO access VALUES("12","17122294","aznulqalid@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.AZNUL QALID BIN MD SABRI");
INSERT INTO access VALUES("13","17122295","erma@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.ERMA RAHAYU BINTI MOHD FAIZAL ABDULLAH");
INSERT INTO access VALUES("14","17122296","norjihan@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.NORJIHAN BINTI ABDUL GHANI");
INSERT INTO access VALUES("15","17122297","badrul@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.NOR BADRUL ANUAR BIN JUMA\'AT");
INSERT INTO access VALUES("16","17122298","ainuddin@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.AINUDDIN WAHID BIN ABDUL WAHAB");
INSERT INTO access VALUES("17","ms1718001","jalal@um.edu.my","0192023a7bbd73250516f069df18b500","3","Dr.MOHD JALALUDDIN AHMAD");
INSERT INTO access VALUES("31","17122291","hazrina@um.edu.my","0192023a7bbd73250516f069df18b500","2","Dr.HAZRINA BINTI SOFIAN");
INSERT INTO access VALUES("34","wif180001","wif180001@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","SHANMUGASUNDRAN A/L RAMACHANDRAN");



DROP TABLE analysis_data;

CREATE TABLE `analysis_data` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(6) NOT NULL,
  `week` int(6) NOT NULL,
  `attendance_count` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_id` (`course_id`,`week`)
) ENGINE=InnoDB AUTO_INCREMENT=757 DEFAULT CHARSET=utf8mb4;

INSERT INTO analysis_data VALUES("71","12","1","19");
INSERT INTO analysis_data VALUES("72","12","2","20");
INSERT INTO analysis_data VALUES("73","12","3","18");
INSERT INTO analysis_data VALUES("74","12","4","17");
INSERT INTO analysis_data VALUES("75","12","5","17");
INSERT INTO analysis_data VALUES("76","12","6","0");
INSERT INTO analysis_data VALUES("77","12","7","0");
INSERT INTO analysis_data VALUES("78","12","8","0");
INSERT INTO analysis_data VALUES("79","12","9","0");
INSERT INTO analysis_data VALUES("80","12","10","0");
INSERT INTO analysis_data VALUES("81","12","11","0");
INSERT INTO analysis_data VALUES("82","12","12","0");
INSERT INTO analysis_data VALUES("83","12","13","0");
INSERT INTO analysis_data VALUES("84","12","14","0");
INSERT INTO analysis_data VALUES("85","4","1","20");
INSERT INTO analysis_data VALUES("86","4","2","18");
INSERT INTO analysis_data VALUES("87","4","3","15");
INSERT INTO analysis_data VALUES("88","4","4","17");
INSERT INTO analysis_data VALUES("89","4","5","16");
INSERT INTO analysis_data VALUES("90","4","6","14");
INSERT INTO analysis_data VALUES("91","4","7","13");
INSERT INTO analysis_data VALUES("92","4","8","12");
INSERT INTO analysis_data VALUES("93","4","9","11");
INSERT INTO analysis_data VALUES("94","4","10","10");
INSERT INTO analysis_data VALUES("95","4","11","9");
INSERT INTO analysis_data VALUES("96","4","12","9");
INSERT INTO analysis_data VALUES("97","4","13","8");
INSERT INTO analysis_data VALUES("98","4","14","7");



DROP TABLE attendance_data;

CREATE TABLE `attendance_data` (
  `attendance_id` int(100) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(100) NOT NULL,
  `student_uname` varchar(15) NOT NULL,
  `lecturer_uname` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  `week` varchar(20) NOT NULL,
  `attendance_status` varchar(100) NOT NULL,
  `absence_category` varchar(1000) NOT NULL,
  `absence_reason` varchar(10000) NOT NULL,
  `absence_doc` varchar(1000) NOT NULL,
  `absence_submit` varchar(20) NOT NULL,
  `absence_status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8mb4;

INSERT INTO attendance_data VALUES("1","1","wif180001","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("2","1","wif180002","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("3","1","wif180003","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("4","1","wif180004","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("5","1","wif180005","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("6","1","wif180006","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("7","1","wif180007","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("8","1","wif180008","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("9","1","wif180009","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("10","1","wif180010","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("11","1","wif180011","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("12","1","wif180012","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("13","1","wif180013","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("14","1","wif180014","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("15","1","wif180015","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("16","1","wif180016","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("17","1","wif180017","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("18","1","wif180018","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("19","1","wif180019","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("20","1","wif180020","17122295","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("21","4","wif180001","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("22","4","wif180002","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("23","4","wif180003","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("24","4","wif180004","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("25","4","wif180005","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("26","4","wif180006","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("27","4","wif180007","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("28","4","wif180008","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("29","4","wif180009","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("30","4","wif180010","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("31","4","wif180011","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("32","4","wif180012","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("33","4","wif180013","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("34","4","wif180014","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("35","4","wif180015","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("36","4","wif180016","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("37","4","wif180017","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("38","4","wif180018","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("39","4","wif180019","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("40","4","wif180020","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("41","10","wif180001","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("42","10","wif180002","17122291","14/05/2021","1","0","","","","","");
INSERT INTO attendance_data VALUES("43","10","wif180003","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("44","10","wif180004","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("45","10","wif180005","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("46","10","wif180006","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("47","10","wif180007","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("48","10","wif180008","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("49","10","wif180009","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("50","10","wif180010","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("51","10","wif180011","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("52","10","wif180012","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("53","10","wif180013","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("54","10","wif180014","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("55","10","wif180015","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("56","10","wif180016","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("57","10","wif180017","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("58","10","wif180018","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("59","10","wif180019","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("60","10","wif180020","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("61","12","wif180001","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("62","12","wif180002","17122291","14/05/2021","1","0","","","","","");
INSERT INTO attendance_data VALUES("63","12","wif180003","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("64","12","wif180004","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("65","12","wif180005","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("66","12","wif180006","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("67","12","wif180007","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("68","12","wif180008","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("69","12","wif180009","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("70","12","wif180010","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("71","12","wif180011","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("72","12","wif180012","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("73","12","wif180013","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("74","12","wif180014","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("75","12","wif180015","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("76","12","wif180016","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("77","12","wif180017","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("78","12","wif180018","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("79","12","wif180019","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("80","12","wif180020","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("81","1","wif180001","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("82","1","wif180002","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("83","1","wif180003","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("84","1","wif180004","17122295","14/05/2021","2","0","","","","","");
INSERT INTO attendance_data VALUES("85","1","wif180005","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("86","1","wif180006","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("87","1","wif180007","17122295","14/05/2021","2","0","","","","","");
INSERT INTO attendance_data VALUES("88","1","wif180008","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("89","1","wif180009","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("90","1","wif180010","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("91","1","wif180011","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("92","1","wif180012","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("93","1","wif180013","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("94","1","wif180014","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("95","1","wif180015","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("96","1","wif180016","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("97","1","wif180017","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("98","1","wif180018","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("99","1","wif180019","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("100","1","wif180020","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("101","4","wif180001","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("102","4","wif180002","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("103","4","wif180003","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("104","4","wif180004","17122291","14/05/2021","2","0","","","","","");
INSERT INTO attendance_data VALUES("105","4","wif180005","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("106","4","wif180006","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("107","4","wif180007","17122291","14/05/2021","2","0","","","","","");
INSERT INTO attendance_data VALUES("108","4","wif180008","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("109","4","wif180009","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("110","4","wif180010","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("111","4","wif180011","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("112","4","wif180012","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("113","4","wif180013","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("114","4","wif180014","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("115","4","wif180015","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("116","4","wif180016","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("117","4","wif180017","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("118","4","wif180018","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("119","4","wif180019","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("120","4","wif180020","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("121","10","wif180001","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("122","10","wif180002","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("123","10","wif180003","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("124","10","wif180004","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("125","10","wif180005","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("126","10","wif180006","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("127","10","wif180007","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("128","10","wif180008","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("129","10","wif180009","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("130","10","wif180010","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("131","10","wif180011","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("132","10","wif180012","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("133","10","wif180013","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("134","10","wif180014","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("135","10","wif180015","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("136","10","wif180016","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("137","10","wif180017","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("138","10","wif180018","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("139","10","wif180019","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("140","10","wif180020","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("141","12","wif180001","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("142","12","wif180002","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("143","12","wif180003","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("144","12","wif180004","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("145","12","wif180005","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("146","12","wif180006","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("147","12","wif180007","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("148","12","wif180008","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("149","12","wif180009","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("150","12","wif180010","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("151","12","wif180011","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("152","12","wif180012","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("153","12","wif180013","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("154","12","wif180014","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("155","12","wif180015","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("156","12","wif180016","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("157","12","wif180017","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("158","12","wif180018","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("159","12","wif180019","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("160","12","wif180020","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("161","1","wif180001","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("162","1","wif180002","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("163","1","wif180003","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("164","1","wif180004","17122295","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("165","1","wif180005","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("166","1","wif180006","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("167","1","wif180007","17122295","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("168","1","wif180008","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("169","1","wif180009","17122295","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("170","1","wif180010","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("171","1","wif180011","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("172","1","wif180012","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("173","1","wif180013","17122295","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("174","1","wif180014","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("175","1","wif180015","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("176","1","wif180016","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("177","1","wif180017","17122295","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("178","1","wif180018","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("179","1","wif180019","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("180","1","wif180020","17122295","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("181","4","wif180001","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("182","4","wif180002","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("183","4","wif180003","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("184","4","wif180004","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("185","4","wif180005","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("186","4","wif180006","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("187","4","wif180007","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("188","4","wif180008","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("189","4","wif180009","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("190","4","wif180010","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("191","4","wif180011","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("192","4","wif180012","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("193","4","wif180013","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("194","4","wif180014","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("195","4","wif180015","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("196","4","wif180016","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("197","4","wif180017","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("198","4","wif180018","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("199","4","wif180019","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("200","4","wif180020","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("201","10","wif180001","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("202","10","wif180002","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("203","10","wif180003","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("204","10","wif180004","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("205","10","wif180005","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("206","10","wif180006","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("207","10","wif180007","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("208","10","wif180008","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("209","10","wif180009","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("210","10","wif180010","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("211","10","wif180011","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("212","10","wif180012","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("213","10","wif180013","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("214","10","wif180014","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("215","10","wif180015","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("216","10","wif180016","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("217","10","wif180017","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("218","10","wif180018","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("219","10","wif180019","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("220","10","wif180020","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("221","12","wif180001","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("222","12","wif180002","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("223","12","wif180003","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("224","12","wif180004","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("225","12","wif180005","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("226","12","wif180006","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("227","12","wif180007","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("228","12","wif180008","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("229","12","wif180009","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("230","12","wif180010","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("231","12","wif180011","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("232","12","wif180012","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("233","12","wif180013","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("234","12","wif180014","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("235","12","wif180015","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("236","12","wif180016","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("237","12","wif180017","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("238","12","wif180018","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("239","12","wif180019","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("240","12","wif180020","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("241","1","wif180001","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("242","1","wif180002","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("243","1","wif180003","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("244","1","wif180004","17122295","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("245","1","wif180005","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("246","1","wif180006","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("247","1","wif180007","17122295","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("248","1","wif180008","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("249","1","wif180009","17122295","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("250","1","wif180010","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("251","1","wif180011","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("252","1","wif180012","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("253","1","wif180013","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("254","1","wif180014","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("255","1","wif180015","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("256","1","wif180016","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("257","1","wif180017","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("258","1","wif180018","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("259","1","wif180019","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("260","1","wif180020","17122295","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("261","4","wif180001","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("262","4","wif180002","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("263","4","wif180003","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("264","4","wif180004","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("265","4","wif180005","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("266","4","wif180006","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("267","4","wif180007","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("268","4","wif180008","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("269","4","wif180009","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("270","4","wif180010","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("271","4","wif180011","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("272","4","wif180012","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("273","4","wif180013","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("274","4","wif180014","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("275","4","wif180015","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("276","4","wif180016","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("277","4","wif180017","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("278","4","wif180018","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("279","4","wif180019","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("280","4","wif180020","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("281","10","wif180001","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("282","10","wif180002","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("283","10","wif180003","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("284","10","wif180004","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("285","10","wif180005","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("286","10","wif180006","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("287","10","wif180007","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("288","10","wif180008","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("289","10","wif180009","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("290","10","wif180010","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("291","10","wif180011","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("292","10","wif180012","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("293","10","wif180013","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("294","10","wif180014","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("295","10","wif180015","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("296","10","wif180016","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("297","10","wif180017","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("298","10","wif180018","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("299","10","wif180019","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("300","10","wif180020","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("301","12","wif180001","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("302","12","wif180002","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("303","12","wif180003","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("304","12","wif180004","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("305","12","wif180005","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("306","12","wif180006","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("307","12","wif180007","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("308","12","wif180008","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("309","12","wif180009","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("310","12","wif180010","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("311","12","wif180011","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("312","12","wif180012","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("313","12","wif180013","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("314","12","wif180014","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("315","12","wif180015","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("316","12","wif180016","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("317","12","wif180017","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("318","12","wif180018","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("319","12","wif180019","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("320","12","wif180020","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("321","1","wif180001","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("322","1","wif180002","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("323","1","wif180003","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("324","1","wif180004","17122295","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("325","1","wif180005","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("326","1","wif180006","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("327","1","wif180007","17122295","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("328","1","wif180008","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("329","1","wif180009","17122295","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("330","1","wif180010","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("331","1","wif180011","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("332","1","wif180012","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("333","1","wif180013","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("334","1","wif180014","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("335","1","wif180015","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("336","1","wif180016","17122295","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("337","1","wif180017","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("338","1","wif180018","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("339","1","wif180019","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("340","1","wif180020","17122295","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("341","4","wif180001","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("342","4","wif180002","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("343","4","wif180003","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("344","4","wif180004","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("345","4","wif180005","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("346","4","wif180006","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("347","4","wif180007","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("348","4","wif180008","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("349","4","wif180009","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("350","4","wif180010","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("351","4","wif180011","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("352","4","wif180012","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("353","4","wif180013","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("354","4","wif180014","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("355","4","wif180015","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("356","4","wif180016","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("357","4","wif180017","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("358","4","wif180018","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("359","4","wif180019","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("360","4","wif180020","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("361","10","wif180001","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("362","10","wif180002","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("363","10","wif180003","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("364","10","wif180004","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("365","10","wif180005","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("366","10","wif180006","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("367","10","wif180007","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("368","10","wif180008","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("369","10","wif180009","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("370","10","wif180010","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("371","10","wif180011","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("372","10","wif180012","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("373","10","wif180013","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("374","10","wif180014","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("375","10","wif180015","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("376","10","wif180016","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("377","10","wif180017","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("378","10","wif180018","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("379","10","wif180019","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("380","10","wif180020","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("381","12","wif180001","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("382","12","wif180002","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("383","12","wif180003","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("384","12","wif180004","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("385","12","wif180005","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("386","12","wif180006","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("387","12","wif180007","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("388","12","wif180008","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("389","12","wif180009","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("390","12","wif180010","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("391","12","wif180011","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("392","12","wif180012","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("393","12","wif180013","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("394","12","wif180014","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("395","12","wif180015","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("396","12","wif180016","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("397","12","wif180017","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("398","12","wif180018","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("399","12","wif180019","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("400","12","wif180020","17122291","14/05/2021","5","1","","","","","");



DROP TABLE backup;

CREATE TABLE `backup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4;

INSERT INTO backup VALUES("101","Tue 28-Sep-2021 17-36","Tue 28-Sep","2021","17-36");
INSERT INTO backup VALUES("102","Tue 28-Sep-2021 17-53","Tue 28-Sep","2021","17-53");
INSERT INTO backup VALUES("104","Tue 28-Sep-2021 18-24","Tue 28-Sep","2021","18-24");
INSERT INTO backup VALUES("106","Tue 28-Sep-2021 18-26","Tue 28-Sep","2021","18-26");
INSERT INTO backup VALUES("110","Tue 28-Sep-2021 18-35","Tue 28-Sep","2021","18-35");
INSERT INTO backup VALUES("112","Tue 28-Sep-2021 18-41","Tue 28-Sep","2021","18-41");
INSERT INTO backup VALUES("113","Wed 29-Sep-2021 14-35","Wed 29-Sep","2021","14-35");
INSERT INTO backup VALUES("114","Wed 29-Sep-2021 22-04","Wed 29-Sep","2021","22-04");
INSERT INTO backup VALUES("115","Thu 30-Sep-2021 20-38","Thu 30-Sep","2021","20-38");
INSERT INTO backup VALUES("116","Sat 02-Oct-2021 20-01","Sat 02-Oct","2021","20-01");
INSERT INTO backup VALUES("117","Sun 03-Oct-2021 21-05","Sun 03-Oct","2021","21-05");
INSERT INTO backup VALUES("118","Tue 05-Oct-2021 20-31","Tue 05-Oct","2021","20-31");



DROP TABLE course;

CREATE TABLE `course` (
  `courseid` int(255) NOT NULL,
  `CourseType` int(10) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` varchar(255) DEFAULT NULL,
  `ClassDetail` varchar(255) DEFAULT NULL,
  `ClassDay` varchar(10) NOT NULL,
  `ClassTime` varchar(255) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("1","1","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO course VALUES("2","1","WIX1002","Fundamentals of Programming","Tutorial 1","Thursday","11.00 AM - 2.00 PM");
INSERT INTO course VALUES("3","1","WIX1003","Computer System and Organization","Lecture 1","Tuesday","3.00 PM - 6.00 PM");
INSERT INTO course VALUES("4","1","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO course VALUES("5","1","WIX2002","Project Management","Tutorial 1","Thursday","11.00 AM - 12.00 PM");
INSERT INTO course VALUES("6","2","WIX3001","Soft Computing","Lecture 1","Wednesday ","4.00 PM - 6.00 PM");
INSERT INTO course VALUES("7","2","WIX3001","Soft Computing","Tutorial 1","Thursday","1.00 PM - 2.00 PM");
INSERT INTO course VALUES("8","2","WIX3001","Soft Computing","Tutorial 2","Friday","2.00 PM - 3.00 PM");
INSERT INTO course VALUES("9","2","WIX3005","Digital Cinematography","Lecture 1","Tuesday","12.00 PM - 3.00 PM");
INSERT INTO course VALUES("10","3","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO course VALUES("11","3","WIA1002","Data Structure","Tutorial 1","Tuesday","11.00 AM - 2.00 PM");
INSERT INTO course VALUES("12","3","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO course VALUES("13","3","WIA1003","Computer System Architecture","Lecture 1","Monday","4.00 PM - 6.00 PM");
INSERT INTO course VALUES("14","3","WIA1003","Computer System Architecture","Tutorial 1","Wednesday","6.00 PM - 7.00 PM");
INSERT INTO course VALUES("15","3","WIA1003","Computer System Architecture","Tutorial 2","Thursday","3.00 PM - 4.00 PM");
INSERT INTO course VALUES("16","3","WIA1003","Computer System Architecture","Tutorial 3","Thursday","4.00 PM - 5.00 PM");
INSERT INTO course VALUES("17","3","WIA1004","Fundamental Artificial Intelligence","Lecture 1","Monday","9.00 AM - 11.00 AM");
INSERT INTO course VALUES("18","3","WIA1004","Fundamental Artificial Intelligence","Tutorial 1","Wednesday","3.00 PM - 4.00 PM");
INSERT INTO course VALUES("19","3","WIA1004","Fundamental Artificial Intelligence","Tutorial 2","Wednesday","4.00 PM - 5.00 PM");
INSERT INTO course VALUES("20","4","WIF3001","Software Testing","Lecture 1","Monday","11.00 AM - 1.00 PM");
INSERT INTO course VALUES("21","4","WIF3001","Software Testing","Tutorial 1","Friday","9.00 AM - 10.00 AM");
INSERT INTO course VALUES("22","4","WIF3001","Software Testing","Tutorial 2","Friday","10.00 AM - 11.00 AM");
INSERT INTO course VALUES("23","4","WIF3001","Software Testing","Tutorial 3","Friday","4.00 PM - 5.00 PM");
INSERT INTO course VALUES("24","4","WIF3002","Software Process and Quality","Lecture 1","Tuesday","3.00 PM - 5.00 PM");
INSERT INTO course VALUES("25","4","WIF3002","Software Process and Quality","Tutorial 1","Thursday","9.00 AM - 10.00 AM");
INSERT INTO course VALUES("26","4","WIF3002","Software Process and Quality","Tutorial 2","Thursday","10.00 AM - 11.00 AM");
INSERT INTO course VALUES("27","4","WIF3002","Software Process and Quality","Tutorial 3","Thursday","12.00 PM - 1.00 PM");
INSERT INTO course VALUES("28","4","WIF3003","Concurrent Programming","Lecture 1","Wednesday","2.00 PM - 4.00 PM");
INSERT INTO course VALUES("29","4","WIF3003","Concurrent Programming","Tutorial 1","Friday","9.00 AM - 10.00 AM");



DROP TABLE feedback;

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_uname` varchar(15) NOT NULL,
  `lecturer_uname` varchar(100) NOT NULL,
  `lecturer_name` varchar(100) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_occurence` varchar(250) NOT NULL,
  `rating` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4;

INSERT INTO feedback VALUES("165","wif180001","17122293","Dr.HEMA A/P SUBRAMANIAM","Data Structure","WIA1002","Lecture 1","2","Chumma anupikiren","<p>xsaxa</p>","04-Jul-2021");
INSERT INTO feedback VALUES("166","wif180001","17122293","Dr.HEMA A/P SUBRAMANIAM","Data Structure","WIA1002","Tutorial 1","2","Chumma anupikiren","<p>xsaxa</p>","04-Jul-2021");
INSERT INTO feedback VALUES("169","wif180004","17122293","Dr.HEMA A/P SUBRAMANIAM","Data Structure","WIA1002","Lecture 1","5","Naanum Chumma anupikiren","<p>Hii</p>","14-Jul-2021");
INSERT INTO feedback VALUES("172","wif180001","17122291","Dr.HAZRINA BINTI SOFIAN","Project Management","WIX2002","Lecture 1","5","Nallavange","<p>Teacher ninge rombe nallavange</p>","16-Jul-2021");
INSERT INTO feedback VALUES("177","wif180003","17122291","Dr.HAZRINA BINTI SOFIAN","Project Management","WIX2002","Lecture 1","4","Nallavange","<p>Teacher ninge rombe nallavange</p>","16-Jul-2021");



DROP TABLE lecturer_course;

CREATE TABLE `lecturer_course` (
  `register_id_lecturer` int(255) NOT NULL,
  `acc_uname` varchar(15) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `ClassDetail` varchar(255) NOT NULL,
  `ClassDay` varchar(10) NOT NULL,
  `ClassTime` varchar(255) NOT NULL,
  PRIMARY KEY (`register_id_lecturer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO lecturer_course VALUES("1","17122295","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO lecturer_course VALUES("4","17122291","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO lecturer_course VALUES("10","17122293","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO lecturer_course VALUES("12","17122291","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");



DROP TABLE lecturer_profile;

CREATE TABLE `lecturer_profile` (
  `acc_uname` varchar(15) NOT NULL,
  `acc_fullname` varchar(100) NOT NULL,
  `acc_email` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `department` varchar(40) NOT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `mobile_office` varchar(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`acc_uname`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `acc_email` (`acc_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO lecturer_profile VALUES("17122291","Dr.HAZRINA BINTI SOFIAN","hazrina@um.edu.my","17122291_hazrina.JPG","Software Engineering","I love Teaching!","0105684572","0166302580","A21, Level 2, Block B, FSKTM");
INSERT INTO lecturer_profile VALUES("17122292","Dr.CHIEW THIAM KIAN","tkchiew@um.edu.my","17122292_tkchiew.jfif","Software Engineering","I Love Teaching!","0379676363","0379676363","A2, Level 2, Block B, FSKTM, UM");
INSERT INTO lecturer_profile VALUES("17122293","Dr.HEMA A/P SUBRAMANIAM","hema@um.edu.my","17122293_hema.jfif","Software Engineering","I Love Teaching!","","","A3, Level 2, Block B, FSKTM, UM");
INSERT INTO lecturer_profile VALUES("17122294","Dr.AZNUL QALID BIN MD SABRI","aznulqalid@um.edu.my","17122294_aznulqalid.jfif","Artificial Intelligence","I Love Teaching!","0379676308","0379676308","A4, Level 2, Block B, FSKTM, UM");
INSERT INTO lecturer_profile VALUES("17122295","Dr.ERMA RAHAYU BINTI MOHD FAIZAL ABDULLAH","erma@um.edu.my","17122295_erma.jfif","Artificial Intelligence","I Love Teaching!","0379672516","0379672516","A5, Level 2, Block B, FSKTM, UM");
INSERT INTO lecturer_profile VALUES("17122296","Dr.NORJIHAN BINTI ABDUL GHANI","norjihan@um.edu.my","17122296_norjihan.jfif","Information System","I Love Teaching!","0379676351","0379676351","A6, Level 2, Block B, FSKTM, UM");
INSERT INTO lecturer_profile VALUES("17122297","Dr.NOR BADRUL ANUAR BIN JUMA\'AT","badrul@um.edu.my","17122297_badrul.jfif","Computer System and Network","I Love Teaching!","0379676436","0379676436","A7, Level 2, Block B, FSKTM, UM");
INSERT INTO lecturer_profile VALUES("17122298","Dr.AINUDDIN WAHID BIN ABDUL WAHAB","ainuddin@um.edu.my","17122298_ainuddin.jfif","Multimedia","I Love Teaching!","0379676383","0379676383","A8, Level 2, Block B, FSKTM, UM");



DROP TABLE student_course;

CREATE TABLE `student_course` (
  `courseid` int(255) NOT NULL,
  `acc_uname` varchar(15) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `ClassDetail` varchar(255) NOT NULL,
  `ClassDay` varchar(10) NOT NULL,
  `ClassTime` varchar(255) NOT NULL,
  PRIMARY KEY (`courseid`,`acc_uname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO student_course VALUES("1","wif180001","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180002","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180003","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180004","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180005","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180006","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180007","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180008","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180009","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180010","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180011","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180012","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180013","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180014","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180015","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180016","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180017","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180018","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180019","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("1","wif180020","WIX1002","Fundamentals of Programming","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("4","wif180001","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180002","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180003","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180004","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180005","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180006","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180007","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180008","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180009","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180010","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180011","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180012","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180013","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180014","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180015","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180016","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180017","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180018","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180019","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("4","wif180020","WIX2002","Project Management","Lecture 1","Tuesday","11.00 AM - 1.00 PM");
INSERT INTO student_course VALUES("10","wif180001","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180002","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180003","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180004","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180005","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180006","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180007","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180008","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180009","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180010","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180011","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180012","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180013","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180014","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180015","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180016","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180017","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180018","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180019","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("10","wif180020","WIA1002","Data Structure","Lecture 1","Tuesday","9.00 AM - 11.00 AM");
INSERT INTO student_course VALUES("12","wif180001","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180002","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180003","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180004","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180005","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180006","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180007","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180008","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180009","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180010","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180011","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180012","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180013","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180014","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180015","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180016","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180017","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180018","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180019","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");
INSERT INTO student_course VALUES("12","wif180020","WIA1002","Data Structure","Tutorial 2","Friday","2.00 PM - 5.00 PM");



DROP TABLE student_profile;

CREATE TABLE `student_profile` (
  `acc_uname` varchar(15) NOT NULL,
  `acc_fullname` varchar(100) NOT NULL,
  `acc_email` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `course` varchar(40) NOT NULL,
  `year_study` varchar(15) NOT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `priv_email` varchar(70) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `parent_mobile` varchar(15) NOT NULL,
  `parent_email` varchar(70) DEFAULT NULL,
  `parent_address` varchar(100) NOT NULL,
  `parent_postcode` varchar(10) NOT NULL,
  `parent_city` varchar(30) NOT NULL,
  `parent_state` varchar(30) NOT NULL,
  PRIMARY KEY (`acc_uname`),
  UNIQUE KEY `priv_email` (`priv_email`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `acc_email` (`acc_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO student_profile VALUES("wif180001","SHANMUGASUNDRAN A/L RAMACHANDRAN","wif180001@siswa.um.edu.my","wif180001_shan.jpg","Artificial Engineering","3","Work Hard","166302589","shanmugasundran1@gmail.com","Sungai Petani","8000","Sungai Petani","Kedah","RAMACHANDRAN","103757131","kjora33@yahoo.com","Kedah","8000","Sungai Petani","Kedah");
INSERT INTO student_profile VALUES("wif180002","THARVINASH A/L VISVANATHAN","wif180002@siswa.um.edu.my","tharvinash.jpg","Software Engineering","3","I am Tharvin","167644245","tharvin@gmail.com","Butterworth","12000","Butterworth","Penang","VISVANATHAN","167644245","visvanathan@gmail.com","Butterworth","12000","Butterworth","Penang");
INSERT INTO student_profile VALUES("wif180003","SHIVA A/L CHIVATHANNU @ SIDAMBARAM","wif180003@siswa.um.edu.my","shiva.jpg","Software Engineering","3","I am Shiva","105684572","shiva@gmail.com","Puchong Baru","41700","Puchong Baru","Selangor","CHIVATHANNU","105684572","chivathannu@gmail.com","Puchong Baru","41700","Puchong Baru","Selangor");
INSERT INTO student_profile VALUES("wif180004","KISHEN A/L NAHINDRAN","wif180004@siswa.um.edu.my","kishen.jpg","Artificial Engineering","3","I am Kishen","189724199","kishen@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","NAHINDRAN","189724199","nahindran@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180005","PRASANTH A/L MANIMARAN","wif180005@siswa.um.edu.my","prasanth.jpg","Software Engineering","3","I am Pras","146642285","pras@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","MANIMARAN","146642285","manimaran@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180006","LOGAN A/L SATHIVELOO","wif180006@siswa.um.edu.my","logan.jpg","Software Engineering","3","I am Logan","183714461","logan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","SATHIVELOO","183714461","sathiveloo@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180007","THINAGAAR A/L GANESAN","wif180007@siswa.um.edu.my","thinagaar.jpg","Software Engineering","3","I am Thina","164474370","thina@gmail.com","Bedong","8100","Bedong","Kedah","GANESAN","164474370","ganesan@gmail.com","Bedong","8100","Bedong","Kedah");
INSERT INTO student_profile VALUES("wif180008","KALAIARASAN A/L BALAN","wif180008@siswa.um.edu.my","kalaiarasan.jpg","Artificial Intelligence","3","I am Kalai","1111341338","kalai@gmail.com","Kulim","9000","Kulim","Kedah","BALAN","1111341338","balan@gmail.com","Kulim","9000","Kulim","Kedah");
INSERT INTO student_profile VALUES("wif180009","CHONG EE","wif180009@siswa.um.edu.my","chong.jpg","Multimedia","3","I am Chong","143296789","chong@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","KIM EE","143296789","kim@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180010","YEO MING","wif180010@siswa.um.edu.my","yeo.jpg","Information System","3","I am Yeo","165478965","yeo@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","CHIN YEO","165478965","chin@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180011","AZLAN RAHMAN","wif180011@siswa.um.edu.my","azlan.jpg","Software Engineering","3","I am Azlan","187661141","azlan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","FATURRAHMAN","187661141","faturrahman@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180012","MOHAMMAD ADLI ","wif180012@siswa.um.edu.my","mohammad.jpg","Software Engineering","3","I am Mohammad","209843317","mohammad@gmail.com","Bedong","8100","Bedong","Kedah","MAZLI ISKANDAR","209843317","mazli@gmail.com","Bedong","8100","Bedong","Kedah");
INSERT INTO student_profile VALUES("wif180013","ESTHER CHIN","wif180013@siswa.um.edu.my","esther.jpg","Software Engineering","3","I am Esther","232025493","esther@gmail.com","Kulim","9000","Kulim","Kedah","CHAI GOH CHIN","232025493","chai@gmail.com","Kulim","9000","Kulim","Kedah");
INSERT INTO student_profile VALUES("wif180014","VINOTHINI A/P PARAMASIVAM","wif180014@siswa.um.edu.my","vinothini.jpg","Multimedia","3","I am Vinothini","254207669","vinothini@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","PARAMASIVAM","254207669","paramasivam@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180015","KARTHIGAA A/P VELAYUTHAM","wif180015@siswa.um.edu.my","karthigaa.jpg","Information System","3","I am Karthigaa","276389845","karthigaa@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","VELAYUTHAM","276389845","velayutham@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180016","KARAN A/L KARUNAS","wif180016@siswa.um.edu.my","karan.jpg","Software Engineering","3","I am Karan","298572021","karan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","KARUNAS","298572021","karunas@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180017","FARID ISKANDAR","wif180017@siswa.um.edu.my","farid.jpg","Artificial Intelligence","3","I am Farid","320754197","farid@gmail.com","Bedong","8100","Bedong","Kedah","AZMAN AMIN","320754197","azman@gmail.com","Bedong","8100","Bedong","Kedah");
INSERT INTO student_profile VALUES("wif180018","GRACE KIEW","wif180018@siswa.um.edu.my","grace.jpg","Multimedia","3","I am Grace","342936373","grace@gmail.com","Kulim","9000","Kulim","Kedah","TAN PENG KIEW","342936373","peng@gmail.com","Kulim","9000","Kulim","Kedah");
INSERT INTO student_profile VALUES("wif180019","TAN YEE KIM","wif180019@siswa.um.edu.my","tan.jpg","Multimedia","3","I am Tan","365118549","tan@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","LIM KUOK","365118549","lim@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180020","NURNAJIHAH FADLAN","wif180020@siswa.um.edu.my","nurnajihah.jpg","Information System","3","I am Nurnajihah","387300725","nurnajihah@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","FADLAN SHAFI","387300725","fadlan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");



DROP TABLE subjects;

CREATE TABLE `subjects` (
  `subject_code` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO subjects VALUES("PBBA11A","Innovation and Entrepreneurship (Elective)");
INSERT INTO subjects VALUES("PBBA21A","International Business (Elective)");
INSERT INTO subjects VALUES("PBBA31A","Human Resources Development (Elective)");
INSERT INTO subjects VALUES("PBBA32A","Organizational Development (Elective)");
INSERT INTO subjects VALUES("PBBA33A","Security Analysis and Portfolio Management (Elective)");
INSERT INTO subjects VALUES("PBBA34A","Merchant Banking and Financial Services (Elective)");
INSERT INTO subjects VALUES("PBBA41A","Performance Management (Elective)");
INSERT INTO subjects VALUES("PBBA42A","Banking and Insurance (Elective)");
INSERT INTO subjects VALUES("PBBI21A","Internship");
INSERT INTO subjects VALUES("PBBM11A","Management Principles and Business Ethics");
INSERT INTO subjects VALUES("PBBM12A","Quantitative and Research Methods in Business");
INSERT INTO subjects VALUES("PBBM13A","Organisational Behaviour");
INSERT INTO subjects VALUES("PBBM14A","Accounting for Managers");
INSERT INTO subjects VALUES("PBBM15A","Managerial Economics");



DROP TABLE warning;

CREATE TABLE `warning` (
  `warning_id` int(100) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(100) NOT NULL,
  `student_uname` varchar(100) NOT NULL,
  `lecturer_uname` varchar(100) NOT NULL,
  `warning_message` text NOT NULL,
  `warning_date` varchar(100) NOT NULL,
  PRIMARY KEY (`warning_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;




