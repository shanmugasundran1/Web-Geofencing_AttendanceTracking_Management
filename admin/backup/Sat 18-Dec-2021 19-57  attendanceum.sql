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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
INSERT INTO access VALUES("36","wif180010","wif180010@siswa.um.edu.my","0192023a7bbd73250516f069df18b500","1","YEO MING");



DROP TABLE analysis_data;

CREATE TABLE `analysis_data` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(6) NOT NULL,
  `week` int(6) NOT NULL,
  `attendance_count` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_id` (`course_id`,`week`)
) ENGINE=InnoDB AUTO_INCREMENT=1009 DEFAULT CHARSET=utf8mb4;

INSERT INTO analysis_data VALUES("827","57","1","19");
INSERT INTO analysis_data VALUES("828","57","2","20");
INSERT INTO analysis_data VALUES("829","57","3","18");
INSERT INTO analysis_data VALUES("830","57","4","17");
INSERT INTO analysis_data VALUES("831","57","5","17");
INSERT INTO analysis_data VALUES("832","57","6","16");
INSERT INTO analysis_data VALUES("833","57","7","15");
INSERT INTO analysis_data VALUES("834","57","8","14");
INSERT INTO analysis_data VALUES("835","57","9","14");
INSERT INTO analysis_data VALUES("836","57","10","13");
INSERT INTO analysis_data VALUES("837","57","11","12");
INSERT INTO analysis_data VALUES("838","57","12","11");
INSERT INTO analysis_data VALUES("839","57","13","11");
INSERT INTO analysis_data VALUES("840","57","14","10");
INSERT INTO analysis_data VALUES("841","58","1","19");
INSERT INTO analysis_data VALUES("842","58","2","20");
INSERT INTO analysis_data VALUES("843","58","3","18");
INSERT INTO analysis_data VALUES("844","58","4","17");
INSERT INTO analysis_data VALUES("845","58","5","17");
INSERT INTO analysis_data VALUES("846","58","6","16");
INSERT INTO analysis_data VALUES("847","58","7","15");
INSERT INTO analysis_data VALUES("848","58","8","14");
INSERT INTO analysis_data VALUES("849","58","9","14");
INSERT INTO analysis_data VALUES("850","58","10","13");
INSERT INTO analysis_data VALUES("851","58","11","12");
INSERT INTO analysis_data VALUES("852","58","12","11");
INSERT INTO analysis_data VALUES("853","58","13","11");
INSERT INTO analysis_data VALUES("854","58","14","10");
INSERT INTO analysis_data VALUES("855","4","1","20");
INSERT INTO analysis_data VALUES("856","4","2","18");
INSERT INTO analysis_data VALUES("857","4","3","15");
INSERT INTO analysis_data VALUES("858","4","4","17");
INSERT INTO analysis_data VALUES("859","4","5","16");
INSERT INTO analysis_data VALUES("860","4","6","14");
INSERT INTO analysis_data VALUES("861","4","7","13");
INSERT INTO analysis_data VALUES("862","4","8","12");
INSERT INTO analysis_data VALUES("863","4","9","11");
INSERT INTO analysis_data VALUES("864","4","10","10");
INSERT INTO analysis_data VALUES("865","4","11","9");
INSERT INTO analysis_data VALUES("866","4","12","9");
INSERT INTO analysis_data VALUES("867","4","13","8");
INSERT INTO analysis_data VALUES("868","4","14","7");
INSERT INTO analysis_data VALUES("967","1","1","20");
INSERT INTO analysis_data VALUES("968","1","2","18");
INSERT INTO analysis_data VALUES("969","1","3","15");
INSERT INTO analysis_data VALUES("970","1","4","17");
INSERT INTO analysis_data VALUES("971","1","5","16");
INSERT INTO analysis_data VALUES("972","1","6","14");
INSERT INTO analysis_data VALUES("973","1","7","13");
INSERT INTO analysis_data VALUES("974","1","8","12");
INSERT INTO analysis_data VALUES("975","1","9","11");
INSERT INTO analysis_data VALUES("976","1","10","10");
INSERT INTO analysis_data VALUES("977","1","11","9");
INSERT INTO analysis_data VALUES("978","1","12","9");
INSERT INTO analysis_data VALUES("979","1","13","8");
INSERT INTO analysis_data VALUES("980","1","14","7");



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
) ENGINE=InnoDB AUTO_INCREMENT=406 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO attendance_data VALUES("41","57","wif180001","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("42","57","wif180002","17122291","14/05/2021","1","0","","","","","");
INSERT INTO attendance_data VALUES("43","57","wif180003","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("44","57","wif180004","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("45","57","wif180005","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("46","57","wif180006","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("47","57","wif180007","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("48","57","wif180008","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("49","57","wif180009","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("50","57","wif180010","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("51","57","wif180011","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("52","57","wif180012","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("53","57","wif180013","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("54","57","wif180014","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("55","57","wif180015","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("56","57","wif180016","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("57","57","wif180017","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("58","57","wif180018","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("59","57","wif180019","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("60","57","wif180020","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("61","58","wif180001","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("62","58","wif180002","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("63","58","wif180003","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("64","58","wif180004","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("65","58","wif180005","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("66","58","wif180006","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("67","58","wif180007","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("68","58","wif180008","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("69","58","wif180009","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("70","58","wif180010","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("71","58","wif180011","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("72","58","wif180012","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("73","58","wif180013","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("74","58","wif180014","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("75","58","wif180015","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("76","58","wif180016","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("77","58","wif180017","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("78","58","wif180018","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("79","58","wif180019","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("80","58","wif180020","17122291","14/05/2021","1","1","","","","","");
INSERT INTO attendance_data VALUES("81","1","wif180001","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("82","1","wif180002","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("83","1","wif180003","17122295","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("84","1","wif180004","17122295","14/05/2021","2","2","Medical leave","Went to clinic for medication","84WhatsApp Image 2021-11-23 at 22.48.04.jpeg","26/11/2021","1");
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
INSERT INTO attendance_data VALUES("121","57","wif180001","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("122","57","wif180002","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("123","57","wif180003","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("124","57","wif180004","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("125","57","wif180005","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("126","57","wif180006","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("127","57","wif180007","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("128","57","wif180008","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("129","57","wif180009","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("130","57","wif180010","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("131","57","wif180011","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("132","57","wif180012","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("133","57","wif180013","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("134","57","wif180014","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("135","57","wif180015","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("136","57","wif180016","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("137","57","wif180017","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("138","57","wif180018","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("139","57","wif180019","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("140","57","wif180020","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("141","58","wif180001","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("142","58","wif180002","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("143","58","wif180003","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("144","58","wif180004","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("145","58","wif180005","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("146","58","wif180006","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("147","58","wif180007","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("148","58","wif180008","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("149","58","wif180009","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("150","58","wif180010","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("151","58","wif180011","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("152","58","wif180012","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("153","58","wif180013","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("154","58","wif180014","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("155","58","wif180015","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("156","58","wif180016","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("157","58","wif180017","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("158","58","wif180018","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("159","58","wif180019","17122291","14/05/2021","2","1","","","","","");
INSERT INTO attendance_data VALUES("160","58","wif180020","17122291","14/05/2021","2","1","","","","","");
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
INSERT INTO attendance_data VALUES("201","57","wif180001","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("202","57","wif180002","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("203","57","wif180003","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("204","57","wif180004","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("205","57","wif180005","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("206","57","wif180006","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("207","57","wif180007","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("208","57","wif180008","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("209","57","wif180009","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("210","57","wif180010","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("211","57","wif180011","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("212","57","wif180012","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("213","57","wif180013","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("214","57","wif180014","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("215","57","wif180015","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("216","57","wif180016","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("217","57","wif180017","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("218","57","wif180018","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("219","57","wif180019","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("220","57","wif180020","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("221","58","wif180001","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("222","58","wif180002","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("223","58","wif180003","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("224","58","wif180004","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("225","58","wif180005","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("226","58","wif180006","17122291","14/05/2021","3","0","","","","","");
INSERT INTO attendance_data VALUES("227","58","wif180007","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("228","58","wif180008","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("229","58","wif180009","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("230","58","wif180010","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("231","58","wif180011","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("232","58","wif180012","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("233","58","wif180013","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("234","58","wif180014","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("235","58","wif180015","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("236","58","wif180016","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("237","58","wif180017","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("238","58","wif180018","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("239","58","wif180019","17122291","14/05/2021","3","1","","","","","");
INSERT INTO attendance_data VALUES("240","58","wif180020","17122291","14/05/2021","3","1","","","","","");
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
INSERT INTO attendance_data VALUES("281","57","wif180001","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("282","57","wif180002","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("283","57","wif180003","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("284","57","wif180004","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("285","57","wif180005","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("286","57","wif180006","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("287","57","wif180007","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("288","57","wif180008","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("289","57","wif180009","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("290","57","wif180010","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("291","57","wif180011","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("292","57","wif180012","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("293","57","wif180013","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("294","57","wif180014","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("295","57","wif180015","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("296","57","wif180016","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("297","57","wif180017","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("298","57","wif180018","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("299","57","wif180019","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("300","57","wif180020","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("301","58","wif180001","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("302","58","wif180002","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("303","58","wif180003","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("304","58","wif180004","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("305","58","wif180005","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("306","58","wif180006","17122291","14/05/2021","4","0","","","","","");
INSERT INTO attendance_data VALUES("307","58","wif180007","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("308","58","wif180008","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("309","58","wif180009","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("310","58","wif180010","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("311","58","wif180011","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("312","58","wif180012","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("313","58","wif180013","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("314","58","wif180014","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("315","58","wif180015","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("316","58","wif180016","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("317","58","wif180017","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("318","58","wif180018","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("319","58","wif180019","17122291","14/05/2021","4","1","","","","","");
INSERT INTO attendance_data VALUES("320","58","wif180020","17122291","14/05/2021","4","0","","","","","");
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
INSERT INTO attendance_data VALUES("361","57","wif180001","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("362","57","wif180002","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("363","57","wif180003","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("364","57","wif180004","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("365","57","wif180005","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("366","57","wif180006","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("367","57","wif180007","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("368","57","wif180008","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("369","57","wif180009","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("370","57","wif180010","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("371","57","wif180011","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("372","57","wif180012","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("373","57","wif180013","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("374","57","wif180014","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("375","57","wif180015","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("376","57","wif180016","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("377","57","wif180017","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("378","57","wif180018","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("379","57","wif180019","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("380","57","wif180020","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("381","58","wif180001","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("382","58","wif180002","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("383","58","wif180003","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("384","58","wif180004","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("385","58","wif180005","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("386","58","wif180006","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("387","58","wif180007","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("388","58","wif180008","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("389","58","wif180009","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("390","58","wif180010","17122291","14/05/2021","5","0","","","","","");
INSERT INTO attendance_data VALUES("391","58","wif180011","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("392","58","wif180012","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("393","58","wif180013","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("394","58","wif180014","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("395","58","wif180015","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("396","58","wif180016","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("397","58","wif180017","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("398","58","wif180018","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("399","58","wif180019","17122291","14/05/2021","5","1","","","","","");
INSERT INTO attendance_data VALUES("400","58","wif180020","17122291","14/05/2021","5","1","","","","","");



DROP TABLE backup;

CREATE TABLE `backup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4;

INSERT INTO backup VALUES("121","Fri 29-Oct-2021 02-50","Fri 29-Oct","2021","02-50");
INSERT INTO backup VALUES("122","Tue 09-Nov-2021 21-40","Tue 09-Nov","2021","21-40");
INSERT INTO backup VALUES("123","Wed 10-Nov-2021 18-40","Wed 10-Nov","2021","18-40");
INSERT INTO backup VALUES("124","Fri 12-Nov-2021 20-06","Fri 12-Nov","2021","20-06");
INSERT INTO backup VALUES("125","Fri 26-Nov-2021 15-24","Fri 26-Nov","2021","15-24");
INSERT INTO backup VALUES("126","Mon 29-Nov-2021 21-22","Mon 29-Nov","2021","21-22");
INSERT INTO backup VALUES("127","Tue 30-Nov-2021 19-55","Tue 30-Nov","2021","19-55");
INSERT INTO backup VALUES("128","Wed 01-Dec-2021 18-40","Wed 01-Dec","2021","18-40");
INSERT INTO backup VALUES("129","Wed 08-Dec-2021 01-24","Wed 08-Dec","2021","01-24");
INSERT INTO backup VALUES("130","Wed 08-Dec-2021 18-55","Wed 08-Dec","2021","18-55");
INSERT INTO backup VALUES("131","Fri 10-Dec-2021 18-40","Fri 10-Dec","2021","18-40");
INSERT INTO backup VALUES("132","Sat 18-Dec-2021 14-42","Sat 18-Dec","2021","14-42");



DROP TABLE course;

CREATE TABLE `course` (
  `courseid` int(255) NOT NULL,
  `CourseType` int(10) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` varchar(255) DEFAULT NULL,
  `ClassDetail` varchar(255) DEFAULT NULL,
  `ClassDay` text NOT NULL,
  `ClassDate` text NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("1","1","WIX1001","Computing Mathematics","K1","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("2","1","WIX1001","Computing Mathematics","K2","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("3","1","WIX1001","Computing Mathematics","K3","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("4","1","WIX1001","Computing Mathematics","T1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("5","1","WIX1001","Computing Mathematics","T2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("6","1","WIX1001","Computing Mathematics","T3","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("7","1","WIX1001","Computing Mathematics","T4","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("8","1","WIX1001","Computing Mathematics","T5","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("9","1","WIX1001","Computing Mathematics","T6","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("10","1","WIX1001","Computing Mathematics","T7","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("11","1","WIX1001","Computing Mathematics","T8","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("12","1","WIX1001","Computing Mathematics","T9","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("13","1","WIX1002","Fundamentals of Programming","K1","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("14","1","WIX1002","Fundamentals of Programming","K2","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("15","1","WIX1002","Fundamentals of Programming","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("16","1","WIX1002","Fundamentals of Programming","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("17","1","WIX1002","Fundamentals of Programming","T3","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("18","1","WIX1002","Fundamentals of Programming","T4","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("19","1","WIX1002","Fundamentals of Programming","T5","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("20","1","WIX1002","Fundamentals of Programming","T6","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("21","1","WIX1002","Fundamentals of Programming","T7","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("22","1","WIX1002","Fundamentals of Programming","T8","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("23","1","WIX1003","Computer System & Organization","K1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("24","1","WIX1003","Computer System & Organization","K2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("25","1","WIX1003","Computer System & Organization","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("26","1","WIX1003","Computer System & Organization","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("27","1","WIX1003","Computer System & Organization","T3","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("28","1","WIX1003","Computer System & Organization","T4","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("29","1","WIX1003","Computer System & Organization","T5","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("30","1","WIX1003","Computer System & Organization","T6","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("31","1","WIX1003","Computer System & Organization","T7","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("32","1","WIX1003","Computer System & Organization","T8","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("33","1","WIX1003","Computer System & Organization","T9","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("34","1","WIX1003","Computer System & Organization","T10","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("35","1","WIX1003","Computer System & Organization","T11","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("36","1","WIX2001","Thinking and Communication Skills","G1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("37","1","WIX2001","Thinking and Communication Skills","G2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("38","1","WIX2001","Thinking and Communication Skills","G3","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("39","1","WIX2001","Thinking and Communication Skills","G4","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("40","1","WIX2001","Thinking and Communication Skills","G5","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("41","1","WIX2001","Thinking and Communication Skills","G6","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("42","1","WIX2001","Thinking and Communication Skills","G7","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("43","1","WIX2001","Thinking and Communication Skills","G8","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("44","1","WIX2001","Thinking and Communication Skills","G9","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("45","1","WIX2002","Project Management","K1","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("46","1","WIX2002","Project Management","K2","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("47","1","WIX2002","Project Management","K3","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("48","1","WIX2002","Project Management","T1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("49","1","WIX2002","Project Management","T2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("50","1","WIX2002","Project Management","T3","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("51","1","WIX2002","Project Management","T4","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","17:00:00","18:00:00");
INSERT INTO course VALUES("52","1","WIX2002","Project Management","T5","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","17:00:00","18:00:00");
INSERT INTO course VALUES("53","1","WIX2002","Project Management","T6","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","17:00:00","18:00:00");
INSERT INTO course VALUES("54","2","WIA1001","Information System","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","15:00:00");
INSERT INTO course VALUES("55","2","WIA1001","Information System","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("56","2","WIA1001","Information System","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("57","2","WIA1002","Data Structure","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("58","2","WIA1002","Data Structure","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("59","2","WIA1003","Computer System Architecture","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("60","2","WIA1003","Computer System Architecture","T","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("61","2","WIA1004","Fundamentals of AI","K","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("62","2","WIA1005","Network Technology Foundation","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","17:00:00");
INSERT INTO course VALUES("63","2","WIA1005","Network Technology Foundation","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","14:00:00");
INSERT INTO course VALUES("64","2","WIA1007","Introduction to Data Science","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","15:00:00");
INSERT INTO course VALUES("65","2","WIA1007","Introduction to Data Science","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("66","2","WIA1007","Introduction to Data Science","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("67","2","WIA1008","Fundamental of Multimedia","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","18:00:00");
INSERT INTO course VALUES("68","2","WIA2001","Database","K1","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("69","2","WIA2001","Database","K2","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("70","2","WIA2001","Database","K3","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("71","2","WIA2001","Database","T1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("72","2","WIA2001","Database","T2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("73","2","WIA2001","Database","T3","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("74","2","WIA2001","Database","T4","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("75","2","WIA2001","Database","T5","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("76","2","WIA2001","Database","T6","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("77","2","WIA2002","Software Modelling","K1","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","13:00:00");
INSERT INTO course VALUES("78","2","WIA2002","Software Modelling","K2","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","13:00:00");
INSERT INTO course VALUES("79","2","WIA2002","Software Modelling","K3","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","13:00:00");
INSERT INTO course VALUES("80","2","WIA2002","Software Modelling","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("81","2","WIA2002","Software Modelling","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("82","2","WIA2002","Software Modelling","T3","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("83","2","WIA2002","Software Modelling","T4","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("84","2","WIA2002","Software Modelling","T5","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("85","2","WIA2002","Software Modelling","T6","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("86","2","WIB2002","Interactive Design","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","13:00:00");
INSERT INTO course VALUES("87","2","WIB2002","Interactive Design","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("88","2","WIA2003","Probability & Statistics","K1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("89","2","WIA2003","Probability & Statistics","K2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("90","2","WIA2003","Probability & Statistics","K3","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("91","2","WIA2003","Probability & Statistics","T1","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("92","2","WIA2003","Probability & Statistics","T2","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("93","2","WIA2003","Probability & Statistics","T3","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("94","2","WIA2003","Probability & Statistics","T4","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("95","2","WIA2003","Probability & Statistics","T5","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("96","2","WIA2003","Probability & Statistics","T6","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("97","2","WIA2004 ","Operating System","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","17:00:00");
INSERT INTO course VALUES("98","2","WIA2004 ","Operating System","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("99","2","WIA2010","Human Computer Interaction","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","15:00:00");
INSERT INTO course VALUES("100","2","WIA2010","Human Computer Interaction","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("101","2","WIA2010","Human Computer Interaction","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("102","3","WIX3002","Social Informatics","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","15:00:00");
INSERT INTO course VALUES("103","3","WIX3002","Social Informatics","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("104","3","WIX3002","Social Informatics","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("105","3","WIX3003","Information Security Management and Ethics","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","13:00:00");
INSERT INTO course VALUES("106","3","WIX3003","Information Security Management and Ethics","T1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("107","3","WIX3003","Information Security Management and Ethics","T2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("108","3","WIX3004","Mobile Application Development","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","16:00:00");
INSERT INTO course VALUES("109","3","WIX3004","Mobile Application Development","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","10:00:00");
INSERT INTO course VALUES("110","3","WIX3004","Mobile Application Development","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","11:00:00");
INSERT INTO course VALUES("111","3","WIX3004","Mobile Application Development","T3","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","14:00:00","15:00:00");
INSERT INTO course VALUES("112","3","WIX3004","Mobile Application Development","T4","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("113","4","WIC3007","Principle of Distributed Systems","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("114","4","WIC3007","Principle of Distributed Systems","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("115","4","WID3007","Fuzzy Logic ","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("116","4","WID3007","Fuzzy Logic ","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("117","4","WID3008 ","Image Processing","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","15:00:00");
INSERT INTO course VALUES("118","4","WID3008 ","Image Processing","T","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("119","4","WID3009 ","AI Intelligence Game Programming","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("120","4","WID3009 ","AI Intelligence Game Programming","T","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("121","4","WIE3001","Advanced Database","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","18:00:00");
INSERT INTO course VALUES("122","4","WIE3006","Information System Auditing","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","12:00:00");
INSERT INTO course VALUES("123","4","WIE3006","Information System Auditing","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("124","4","WIE3007","Data Mining & Warehousing","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("125","4","WIE3007","Data Mining & Warehousing","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("126","4","WIE3008","Business Analytics & Intelligence","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","13:00:00");
INSERT INTO course VALUES("127","4","WIE3010","Data Visualization","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","15:00:00");
INSERT INTO course VALUES("128","4","WIE3010","Data Visualization","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","17:00:00","18:00:00");
INSERT INTO course VALUES("129","4","WIH3003","Big Data Applications and Analytics ","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("130","4","WIF3005","Software Maintenance & Evolution","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("131","4","WIF3005","Software Maintenance & Evolution","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","17:00:00");
INSERT INTO course VALUES("132","4","WIF3005","Software Maintenance & Evolution","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","17:00:00","18:00:00");
INSERT INTO course VALUES("133","4","WIF3006","Component-Based Software Engineering","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO course VALUES("134","4","WIF3007 ","Design Patterns","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","10:00:00","12:00:00");
INSERT INTO course VALUES("135","4","WIF3007 ","Design Patterns","T1","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("136","4","WIF3007 ","Design Patterns","T2","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","16:00:00");
INSERT INTO course VALUES("137","4","WIF3008","Real Time Systems","K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("138","4","WIF3008","Real Time Systems","T1","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO course VALUES("139","4","WIF3008","Real Time Systems","T2","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","13:00:00","14:00:00");
INSERT INTO course VALUES("140","4","WIG3003","Multimedia Programming","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO course VALUES("141","4","WIG3003","Multimedia Programming","T","Thursday","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("142","4","WIF3006","Digital Video Processing","K","Wednesday","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO course VALUES("143","4","WIF3006","Digital Video Processing","T","Friday","{\"dow\":\"5\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","11:00:00","12:00:00");
INSERT INTO course VALUES("144","4","WIF3007 ","Special Topics in Multimedia","K","Tuesday","{\"dow\":\"2\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","18:00:00");
INSERT INTO course VALUES("145","4","WIG3008","Multimedia Forensics & Security"," K","Monday","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","15:00:00","18:00:00");



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
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=utf8mb4;

INSERT INTO feedback VALUES("182","wif180001","17122291","Dr.HAZRINA BINTI SOFIAN","Computing Mathematics","WIX1001","T1","5","Great class","<p>Great class Dr., easy to understand contents, and effective teaching </p>","09-Dec-2021");



DROP TABLE lecturer_course;

CREATE TABLE `lecturer_course` (
  `subject_id` int(30) NOT NULL,
  `acc_uname` varchar(30) NOT NULL,
  `CourseCode` varchar(200) NOT NULL,
  `CourseName` text NOT NULL,
  `ClassDetail` text NOT NULL,
  `ClassDay` text NOT NULL,
  `ClassRepeat` int(10) NOT NULL DEFAULT 1,
  `ClassDate` text NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  PRIMARY KEY (`subject_id`,`acc_uname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO lecturer_course VALUES("1","17122295","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO lecturer_course VALUES("4","17122291","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO lecturer_course VALUES("57","17122291","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO lecturer_course VALUES("58","17122291","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");



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
  `subject_id` int(30) NOT NULL,
  `acc_uname` varchar(30) NOT NULL,
  `CourseCode` varchar(200) NOT NULL,
  `CourseName` text NOT NULL,
  `ClassDetail` text NOT NULL,
  `ClassDay` text NOT NULL,
  `ClassRepeat` int(10) NOT NULL DEFAULT 1,
  `ClassDate` text NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  PRIMARY KEY (`subject_id`,`acc_uname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO student_course VALUES("1","wif180001","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180002","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180003","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180004","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180005","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180006","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180007","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180008","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180009","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180010","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180011","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180012","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180013","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180014","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180015","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180016","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180017","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180018","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180019","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("1","wif180020","WIX1001","Computing Mathematics","K1","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","16:00:00","18:00:00");
INSERT INTO student_course VALUES("4","wif180001","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180002","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180003","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180004","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180005","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180006","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180007","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180008","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180009","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180010","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180011","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180012","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180013","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180014","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180015","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180016","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180017","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180018","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180019","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("4","wif180020","WIX1001","Computing Mathematics","T1","Wednesday","1","{\"dow\":\"3\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","12:00:00","13:00:00");
INSERT INTO student_course VALUES("57","wif180001","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180002","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180003","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180004","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180005","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180006","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180007","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180008","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180009","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180010","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180011","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180012","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180013","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180014","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180015","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180016","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180017","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180018","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180019","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("57","wif180020","WIA1002","Data Structure","K","Monday","1","{\"dow\":\"1\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","11:00:00");
INSERT INTO student_course VALUES("58","wif180001","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180002","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180003","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180004","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180005","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180006","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180007","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180008","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180009","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180010","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180011","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180012","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180013","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180014","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180015","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180016","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180017","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180018","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180019","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");
INSERT INTO student_course VALUES("58","wif180020","WIA1002","Data Structure","T","Thursday","1","{\"dow\":\"4\",\"start\":\"2021-10-01\",\"end\":\"2022-01-31\"}","09:00:00","12:00:00");



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
  `nationality` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
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

INSERT INTO student_profile VALUES("wif180001","SHANMUGASUNDRAN A/L RAMACHANDRAN","wif180001@siswa.um.edu.my","wif180001_shan.jpg","Software Engineering","4","I am Groot!","0166302589","shanmuga.sundran@yahoo.com","Bandar Laguna Merbok, Sungai Petani","08000","Sungai Petani","Kedah","Malaysian Citizen","Malaysia","Ramachandran","0103757131","kjora33@yahoo.com","Bandar Laguna Merbok, Sungai Petani","08000","Sungai Petani","Kedah");
INSERT INTO student_profile VALUES("wif180002","THARVINASH A/L VISVANATHAN","wif180002@siswa.um.edu.my","tharvinash.jpg","Software Engineering","3","I am Tharvin","167644245","tharvin@gmail.com","Butterworth","12000","Butterworth","Penang","","","VISVANATHAN","167644245","visvanathan@gmail.com","Butterworth","12000","Butterworth","Penang");
INSERT INTO student_profile VALUES("wif180003","SHIVA A/L CHIVATHANNU @ SIDAMBARAM","wif180003@siswa.um.edu.my","shiva.jpg","Software Engineering","3","I am Shiva","105684572","shiva@gmail.com","Shan Xi Sheng","215000","Shuzou","Shanxi","Non-Citizen","China","CHIVATHANNU","105684572","chivathannu@gmail.com","Shan Xi Sheng","215000","Shuzou","Shanxi");
INSERT INTO student_profile VALUES("wif180004","KISHEN A/L NAHINDRAN","wif180004@siswa.um.edu.my","kishen.jpg","Artificial Engineering","3","I am Kishen","189724199","kishen@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","","","NAHINDRAN","189724199","nahindran@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180005","PRASANTH A/L MANIMARAN","wif180005@siswa.um.edu.my","prasanth.jpg","Software Engineering","3","I am Pras","146642285","pras@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","","","MANIMARAN","146642285","manimaran@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180006","LOGAN A/L SATHIVELOO","wif180006@siswa.um.edu.my","logan.jpg","Software Engineering","3","I am Logan","183714461","logan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","","","SATHIVELOO","183714461","sathiveloo@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180007","THINAGAAR A/L GANESAN","wif180007@siswa.um.edu.my","thinagaar.jpg","Software Engineering","3","I am Thina","164474370","thina@gmail.com","Bedong","8100","Bedong","Kedah","","","GANESAN","164474370","ganesan@gmail.com","Bedong","8100","Bedong","Kedah");
INSERT INTO student_profile VALUES("wif180008","KALAIARASAN A/L BALAN","wif180008@siswa.um.edu.my","kalaiarasan.jpg","Artificial Intelligence","3","I am Kalai","1111341338","kalai@gmail.com","139-10, Samseongri, Namcheon-myeon","712010","Gyeongsan-si","Gyeongsangbuk-do","Non-Citizen","Korea Sout","BALAN","1111341338","balan@gmail.com","139-10, Samseongri, Namcheon-myeon","712010","Gyeongsan-si","Gyeongsangbuk-do");
INSERT INTO student_profile VALUES("wif180009","CHONG EE","wif180009@siswa.um.edu.my","chong.jpg","Multimedia","3","I am Chong","143296789","chong@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","","","KIM EE","143296789","kim@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180010","YEO MING","wif180010@siswa.um.edu.my","yeo.jpg","Information System","3","I am Yeo","165478965","yeo@gmail.com","Jian Guo Men","100029","Dongcheng","Beijing","Non-Citizen","China","CHIN YEO","165478965","chin@gmail.com","Jian Guo Men","100029","Dongcheng","Beijing");
INSERT INTO student_profile VALUES("wif180011","AZLAN RAHMAN","wif180011@siswa.um.edu.my","azlan.jpg","Software Engineering","3","I am Azlan","187661141","azlan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","","","FATURRAHMAN","187661141","faturrahman@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180012","MOHAMMAD ADLI ","wif180012@siswa.um.edu.my","mohammad.jpg","Software Engineering","3","I am Mohammad","209843317","mohammad@gmail.com","Bedong","8100","Bedong","Kedah","","","MAZLI ISKANDAR","209843317","mazli@gmail.com","Bedong","8100","Bedong","Kedah");
INSERT INTO student_profile VALUES("wif180013","ESTHER CHIN","wif180013@siswa.um.edu.my","esther.jpg","Software Engineering","3","I am Esther","232025493","esther@gmail.com","Kulim","9000","Kulim","Kedah","","","CHAI GOH CHIN","232025493","chai@gmail.com","Kulim","9000","Kulim","Kedah");
INSERT INTO student_profile VALUES("wif180014","VINOTHINI A/P PARAMASIVAM","wif180014@siswa.um.edu.my","vinothini.jpg","Multimedia","3","I am Vinothini","254207669","vinothini@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","","","PARAMASIVAM","254207669","paramasivam@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180015","KARTHIGAA A/P VELAYUTHAM","wif180015@siswa.um.edu.my","karthigaa.jpg","Information System","3","I am Karthigaa","276389845","karthigaa@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","","","VELAYUTHAM","276389845","velayutham@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180016","KARAN A/L KARUNAS","wif180016@siswa.um.edu.my","karan.jpg","Software Engineering","3","I am Karan","298572021","karan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","","","KARUNAS","298572021","karunas@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");
INSERT INTO student_profile VALUES("wif180017","FARID ISKANDAR","wif180017@siswa.um.edu.my","farid.jpg","Artificial Intelligence","3","I am Farid","320754197","farid@gmail.com","Bedong","8100","Bedong","Kedah","","","AZMAN AMIN","320754197","azman@gmail.com","Bedong","8100","Bedong","Kedah");
INSERT INTO student_profile VALUES("wif180018","GRACE KIEW","wif180018@siswa.um.edu.my","grace.jpg","Multimedia","3","I am Grace","342936373","grace@gmail.com","Kulim","9000","Kulim","Kedah","","","TAN PENG KIEW","342936373","peng@gmail.com","Kulim","9000","Kulim","Kedah");
INSERT INTO student_profile VALUES("wif180019","TAN YEE KIM","wif180019@siswa.um.edu.my","tan.jpg","Multimedia","3","I am Tan","365118549","tan@gmail.com","Johor Bharu","79100","Johor Bharu","Johor","","","LIM KUOK","365118549","lim@gmail.com","Johor Bharu","79100","Johor Bharu","Johor");
INSERT INTO student_profile VALUES("wif180020","NURNAJIHAH FADLAN","wif180020@siswa.um.edu.my","nurnajihah.jpg","Information System","3","I am Nurnajihah","387300725","nurnajihah@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor","","","FADLAN SHAFI","387300725","fadlan@gmail.com","Petaling Jaya","40150","Petaling Jaya","Selangor");



DROP TABLE visa_application;

CREATE TABLE `visa_application` (
  `matric_id` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `post_name` varchar(50) NOT NULL,
  `given_name` varchar(50) NOT NULL,
  `sur_name` varchar(50) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `pass_number` varchar(20) NOT NULL,
  `issue_country` varchar(100) NOT NULL,
  `issue_date` varchar(20) NOT NULL,
  `expiry_date` varchar(20) NOT NULL,
  `renewal_period` varchar(50) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `transcript` varchar(100) NOT NULL,
  `approval_status` int(11) NOT NULL,
  PRIMARY KEY (`matric_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO visa_application VALUES("wif180010","YEO MING","Yeo Ming","Yeo Ming","Ming","1999-01-01","1822842","China","2018-08-09","2023-06-05","2 years","wif180010485F0C3F-0811-4647-86E9-5B419D9AB8B5.pdf","wif180010Result Semester 6 (WIF180068).pdf","2");



DROP TABLE warning;

CREATE TABLE `warning` (
  `warning_id` int(100) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(100) NOT NULL,
  `student_uname` varchar(100) NOT NULL,
  `lecturer_uname` varchar(100) NOT NULL,
  `warning_message` text NOT NULL,
  `warning_date` varchar(100) NOT NULL,
  PRIMARY KEY (`warning_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO warning VALUES("9","57","wif180002","17122291","You are being listed in the poor attendance record with only 20% attendance clocked for the past 5 sessions. You need to attend another 8 sessions to maintain your attendance above the limit of 9/14 sessions.","18/12/2021");



