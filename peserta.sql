/*
Navicat MySQL Data Transfer

Source Server         : local_computer
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : diaryerror

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-07-06 07:09:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `peserta`
-- ----------------------------
DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `umur` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of peserta
-- ----------------------------
INSERT INTO `peserta` VALUES ('1', 'Massimiliano', 'Rawsthorn', 'mrawsthorn0@cafepress.com', 'Genderfluid', '02472 Kingsford Point');
INSERT INTO `peserta` VALUES ('2', 'Turner', 'Keat', 'tkeat1@cbslocal.com', 'Genderfluid', '77857 Red Cloud Crossing');
INSERT INTO `peserta` VALUES ('3', 'Mariam', 'Titford', 'mtitford2@sciencedirect.com', 'Bigender', '93692 Moland Court');
INSERT INTO `peserta` VALUES ('4', 'Darcey', 'Clemonts', 'dclemonts3@irs.gov', 'Agender', '97 Roth Court');
INSERT INTO `peserta` VALUES ('6', 'Grange', 'Sawday', 'gsawday5@macromedia.com', 'Polygender', '154 Esker Crossing');
INSERT INTO `peserta` VALUES ('7', 'Cristin', 'Wasiel', 'cwasiel6@istockphoto.com', 'Female', '6010 Graceland Pass');
INSERT INTO `peserta` VALUES ('8', 'Marthena', 'Lowes', 'mlowes7@squidoo.com', 'Non-binary', '950 Golf View Pass');
INSERT INTO `peserta` VALUES ('9', 'Cyndi', 'Grancher', 'cgrancher8@cisco.com', 'Genderqueer', '0218 Morningstar Drive');
INSERT INTO `peserta` VALUES ('10', 'Jessika', 'Starsmeare', 'jstarsmeare9@taobao.com', 'Genderfluid', '46 Service Park');
INSERT INTO `peserta` VALUES ('11', 'Edita', 'Currum', 'ecurruma@imdb.com', 'Non-binary', '06 Lerdahl Court');
INSERT INTO `peserta` VALUES ('12', 'Joyann', 'Avo', 'javob@privacy.gov.au', 'Non-binary', '41239 Eastwood Alley');
INSERT INTO `peserta` VALUES ('14', 'Julita', 'Preddle', 'jpreddled@netscape.com', 'Female', '2721 Ridgeway Pass');
INSERT INTO `peserta` VALUES ('15', 'Kris', 'Sabine', 'ksabinee@livejournal.com', 'Genderfluid', '552 Hermina Hill');
INSERT INTO `peserta` VALUES ('16', 'Sissie', 'Winslet', 'swinsletf@imgur.com', 'Bigender', '621 Bluestem Avenue');
INSERT INTO `peserta` VALUES ('17', 'Arleyne', 'Rathke', 'arathkeg@bizjournals.com', 'Genderqueer', '33 Del Sol Junction');
INSERT INTO `peserta` VALUES ('18', 'Udell', 'Stopford', 'ustopfordh@dion.ne.jp', 'Female', '2346 Main Hill');
INSERT INTO `peserta` VALUES ('19', 'Zonnya', 'Claibourn', 'zclaibourni@forbes.com', 'Female', '35220 Harbort Trail');
INSERT INTO `peserta` VALUES ('20', 'Miltie', 'Hammersley', 'mhammersleyj@ehow.com', 'Bigender', '2 4th Parkway');
INSERT INTO `peserta` VALUES ('21', 'Nadya', 'Wallbutton', 'nwallbuttonk@nifty.com', 'Non-binary', '6 Logan Terrace');
INSERT INTO `peserta` VALUES ('22', 'Terence', 'Luca', 'tlucal@jigsy.com', 'Male', '48365 Judy Court');
INSERT INTO `peserta` VALUES ('23', 'Gusta', 'Wilcockes', 'gwilcockesm@shop-pro.jp', 'Female', '25384 Rusk Crossing');
INSERT INTO `peserta` VALUES ('24', 'Yasmin', 'Lage', 'ylagen@tamu.edu', 'Male', '86 Saint Paul Parkway');
INSERT INTO `peserta` VALUES ('25', 'Charlena', 'Beels', 'cbeelso@prlog.org', 'Polygender', '075 Judy Circle');
INSERT INTO `peserta` VALUES ('26', 'Jake', 'Matysik', 'jmatysikp@fda.gov', 'Agender', '1 Moland Drive');
INSERT INTO `peserta` VALUES ('27', 'Em', 'Gauch', 'egauchq@naver.com', 'Bigender', '209 Sugar Trail');
INSERT INTO `peserta` VALUES ('28', 'Jarrid', 'Lidgely', 'jlidgelyr@free.fr', 'Genderfluid', '72999 David Road');
INSERT INTO `peserta` VALUES ('29', 'Ardine', 'Doe', 'adoes@deviantart.com', 'Genderqueer', '681 Forest Place');
INSERT INTO `peserta` VALUES ('31', 'Bridie', 'McNirlan', 'bmcnirlanu@intel.com', 'Male', '390 Ridge Oak Trail');
INSERT INTO `peserta` VALUES ('32', 'Estelle', 'Veque', 'evequev@sun.com', 'Bigender', '7 Bayside Parkway');
INSERT INTO `peserta` VALUES ('33', 'Stephannie', 'Camamill', 'scamamillw@angelfire.com', 'Polygender', '9 Superior Crossing');
INSERT INTO `peserta` VALUES ('34', 'Dani', 'Odeson', 'dodesonx@samsung.com', 'Genderqueer', '15 Killdeer Court');
INSERT INTO `peserta` VALUES ('35', 'Casi', 'McPeice', 'cmcpeicey@bloglines.com', 'Genderqueer', '0 Sullivan Street');
INSERT INTO `peserta` VALUES ('36', 'Katheryn', 'Attride', 'kattridez@ucsd.edu', 'Genderfluid', '52679 Dovetail Terrace');
INSERT INTO `peserta` VALUES ('37', 'Gabriella', 'Backes', 'gbackes10@weibo.com', 'Female', '4 Novick Avenue');
INSERT INTO `peserta` VALUES ('38', 'Bryana', 'Kundt', 'bkundt11@reference.com', 'Genderqueer', '91277 Eliot Drive');
INSERT INTO `peserta` VALUES ('39', 'Kate', 'Sange', 'ksange12@imageshack.us', 'Agender', '472 South Parkway');
INSERT INTO `peserta` VALUES ('40', 'Saundra', 'Biddell', 'sbiddell13@shop-pro.jp', 'Male', '2159 Superior Circle');
INSERT INTO `peserta` VALUES ('41', 'Elli', 'Sturman', 'esturman14@baidu.com', 'Genderqueer', '32193 Golf Road');
INSERT INTO `peserta` VALUES ('43', 'Erasmus', 'Elvish', 'eelvish16@newsvine.com', 'Genderfluid', '2 Crescent Oaks Plaza');
INSERT INTO `peserta` VALUES ('44', 'Othilia', 'Krystek', 'okrystek17@seesaa.net', 'Bigender', '6635 Petterle Avenue');
INSERT INTO `peserta` VALUES ('45', 'Peirce', 'Corsar', 'pcorsar18@ifeng.com', 'Non-binary', '537 Utah Park');
INSERT INTO `peserta` VALUES ('46', 'Eal', 'Eakins', 'eeakins19@gov.uk', 'Female', '2 Maryland Point');
INSERT INTO `peserta` VALUES ('47', 'Nisse', 'Gye', 'ngye1a@bloglovin.com', 'Agender', '689 Northwestern Junction');
INSERT INTO `peserta` VALUES ('48', 'Romona', 'Rottger', 'rrottger1b@mit.edu', 'Female', '728 Holmberg Drive');
INSERT INTO `peserta` VALUES ('49', 'Joyan', 'Wedderburn', 'jwedderburn1c@histats.com', 'Female', '201 Lerdahl Center');
INSERT INTO `peserta` VALUES ('50', 'Malena', 'Juhruke', 'mjuhruke1d@samsung.com', 'Female', '8 Bashford Road');
INSERT INTO `peserta` VALUES ('51', 'Dusty', 'Edbrooke', 'dedbrooke1e@illinois.edu', 'Genderfluid', '16 Eliot Hill');
INSERT INTO `peserta` VALUES ('52', 'Sherman', 'Rouchy', 'srouchy1f@nydailynews.com', 'Agender', '46 Eastlawn Parkway');
INSERT INTO `peserta` VALUES ('53', 'Karlan', 'Shorrock', 'kshorrock1g@de.vu', 'Bigender', '72 Village Green Crossing');
INSERT INTO `peserta` VALUES ('54', 'Marsh', 'Labrone', 'mlabrone1h@hubpages.com', 'Polygender', '1868 Bellgrove Drive');
INSERT INTO `peserta` VALUES ('55', 'Yanaton', 'Northen', 'ynorthen1i@hp.com', 'Bigender', '60890 Carioca Road');
INSERT INTO `peserta` VALUES ('56', 'Oswald', 'Lapley', 'olapley1j@msn.com', 'Male', '18123 Veith Trail');
INSERT INTO `peserta` VALUES ('57', 'Carry', 'Verdun', 'cverdun1k@angelfire.com', 'Bigender', '5 Prentice Place');
INSERT INTO `peserta` VALUES ('58', 'Clifford', 'Pester', 'cpester1l@newyorker.com', 'Genderfluid', '2 Banding Center');
INSERT INTO `peserta` VALUES ('59', 'Augustus', 'Ledekker', 'aledekker1m@uol.com.br', 'Genderqueer', '4 Victoria Place');
INSERT INTO `peserta` VALUES ('60', 'Tucky', 'Fippe', 'tfippe1n@vinaora.com', 'Female', '71 Reindahl Center');
INSERT INTO `peserta` VALUES ('61', 'Daven', 'Oganian', 'doganian1o@springer.com', 'Agender', '1741 Glacier Hill Center');
INSERT INTO `peserta` VALUES ('62', 'Ulrick', 'Morley', 'umorley1p@state.gov', 'Non-binary', '535 Hayes Junction');
INSERT INTO `peserta` VALUES ('63', 'Odo', 'Di Maria', 'odimaria1q@latimes.com', 'Bigender', '9 Thierer Parkway');
INSERT INTO `peserta` VALUES ('64', 'Berkley', 'Cleugher', 'bcleugher1r@businesswire.com', 'Agender', '63420 Bobwhite Park');
INSERT INTO `peserta` VALUES ('65', 'Carlye', 'Earwaker', 'cearwaker1s@webs.com', 'Male', '47673 Comanche Street');
INSERT INTO `peserta` VALUES ('66', 'Beverly', 'Costock', 'bcostock1t@independent.co.uk', 'Female', '219 Moose Circle');
INSERT INTO `peserta` VALUES ('67', 'Fedora', 'Swaffer', 'fswaffer1u@aol.com', 'Genderqueer', '964 Straubel Point');
INSERT INTO `peserta` VALUES ('68', 'Laughton', 'Gorges', 'lgorges1v@barnesandnoble.com', 'Agender', '7074 Waubesa Way');
INSERT INTO `peserta` VALUES ('69', 'Brittany', 'Sinson', 'bsinson1w@nifty.com', 'Female', '5 Steensland Hill');
INSERT INTO `peserta` VALUES ('70', 'Salem', 'Tunnacliffe', 'stunnacliffe1x@issuu.com', 'Agender', '9 Northfield Road');
INSERT INTO `peserta` VALUES ('71', 'Manda', 'Murrum', 'mmurrum1y@lycos.com', 'Male', '46093 Merrick Place');
INSERT INTO `peserta` VALUES ('73', 'Ethe', 'Alban', 'ealban20@nationalgeographic.com', 'Male', '232 Sauthoff Way');
INSERT INTO `peserta` VALUES ('75', 'Garvin', 'Brissard', 'gbrissard22@va.gov', 'Genderfluid', '756 Basil Pass');
INSERT INTO `peserta` VALUES ('76', 'Wenona', 'Bracchi', 'wbracchi23@arizona.edu', 'Bigender', '83596 Warner Court');
INSERT INTO `peserta` VALUES ('77', 'Halley', 'Kilner', 'hkilner24@go.com', 'Non-binary', '16309 Meadow Ridge Trail');
INSERT INTO `peserta` VALUES ('78', 'Killie', 'Cornillot', 'kcornillot25@netscape.com', 'Male', '09 Daystar Center');
INSERT INTO `peserta` VALUES ('79', 'Leroy', 'Heister', 'lheister26@pen.io', 'Genderfluid', '279 Loftsgordon Drive');
INSERT INTO `peserta` VALUES ('80', 'Laverna', 'Sambles', 'lsambles27@google.co.jp', 'Genderqueer', '6370 Red Cloud Park');
INSERT INTO `peserta` VALUES ('81', 'Frederik', 'Blanchard', 'fblanchard28@msn.com', 'Agender', '8 Vahlen Hill');
INSERT INTO `peserta` VALUES ('82', 'Frannie', 'Brun', 'fbrun29@qq.com', 'Genderqueer', '5 Bunker Hill Place');
INSERT INTO `peserta` VALUES ('83', 'Gallard', 'Kieran', 'gkieran2a@prnewswire.com', 'Bigender', '0868 Cottonwood Junction');
INSERT INTO `peserta` VALUES ('84', 'Stanfield', 'Sivell', 'ssivell2b@skyrock.com', 'Bigender', '2676 Nevada Terrace');
INSERT INTO `peserta` VALUES ('85', 'Renate', 'Kilgour', 'rkilgour2c@flickr.com', 'Polygender', '0 Memorial Terrace');
INSERT INTO `peserta` VALUES ('86', 'Malinde', 'Wiggam', 'mwiggam2d@dion.ne.jp', 'Genderfluid', '650 Cambridge Center');
INSERT INTO `peserta` VALUES ('87', 'Cherice', 'McGowan', 'cmcgowan2e@dailymail.co.uk', 'Agender', '9 Starling Terrace');
INSERT INTO `peserta` VALUES ('88', 'Devin', 'Spencock', 'dspencock2f@sfgate.com', 'Genderfluid', '2489 Corry Crossing');
INSERT INTO `peserta` VALUES ('89', 'Giraud', 'Pizzie', 'gpizzie2g@goodreads.com', 'Agender', '25 Fordem Circle');
INSERT INTO `peserta` VALUES ('91', 'Ellette', 'Coniff', 'econiff2i@comcast.net', 'Female', '16 Vahlen Way');
INSERT INTO `peserta` VALUES ('92', 'Janey', 'Olivella', 'jolivella2j@nature.com', 'Genderqueer', '3705 Corscot Road');
INSERT INTO `peserta` VALUES ('93', 'Shep', 'Walczak', 'swalczak2k@bravesites.com', 'Female', '2666 Donald Road');
INSERT INTO `peserta` VALUES ('94', 'Emalia', 'Rookesby', 'erookesby2l@pbs.org', 'Male', '28104 Warner Pass');
INSERT INTO `peserta` VALUES ('95', 'Celinka', 'Kyd', 'ckyd2m@cbslocal.com', 'Agender', '9279 Claremont Center');
INSERT INTO `peserta` VALUES ('96', 'Barry', 'Hovert', 'bhovert2n@dedecms.com', 'Non-binary', '20 Park Meadow Drive');
INSERT INTO `peserta` VALUES ('97', 'Matilde', 'Cholmondeley', 'mcholmondeley2o@desdev.cn', 'Genderqueer', '5746 Westerfield Hill');
INSERT INTO `peserta` VALUES ('98', 'Devlen', 'Wetherhead', 'dwetherhead2p@google.co.jp', 'Bigender', '35 Meadow Valley Center');
INSERT INTO `peserta` VALUES ('99', 'Kenyon', 'Harmstone', 'kharmstone2q@wisc.edu', 'Genderfluid', '88905 Evergreen Junction');
INSERT INTO `peserta` VALUES ('100', 'Ray', 'Schonfelder', 'rschonfelder2r@facebook.com', 'Female', '751 Lakewood Point');
INSERT INTO `peserta` VALUES ('101', 'josep', '34', 'contoh@gmail.com', 'laki-laki', null);
INSERT INTO `peserta` VALUES ('102', 'dilan', '90', 'dilan@gmail.com', 'laki-laki', null);
