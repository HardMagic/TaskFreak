<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

if (!@constant('TZN_IS_IMPORTED')) {
    redirect('index.php');
    exit;
}

$sqlCountry = <<< EOSQL
CREATE TABLE `{$dbPrefix}country` (
  `countryId` char(2) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`countryId`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}country` VALUES ('AF', 'Afghanistan');
INSERT INTO `{$dbPrefix}country` VALUES ('AL', 'Albania');
INSERT INTO `{$dbPrefix}country` VALUES ('DZ', 'Algeria');
INSERT INTO `{$dbPrefix}country` VALUES ('AS', 'American samoa');
INSERT INTO `{$dbPrefix}country` VALUES ('AD', 'Andorra');
INSERT INTO `{$dbPrefix}country` VALUES ('AO', 'Angola');
INSERT INTO `{$dbPrefix}country` VALUES ('AI', 'Anguilla');
INSERT INTO `{$dbPrefix}country` VALUES ('AQ', 'Antarctica');
INSERT INTO `{$dbPrefix}country` VALUES ('AG', 'Antigua and barbuda');
INSERT INTO `{$dbPrefix}country` VALUES ('AR', 'Argentina');
INSERT INTO `{$dbPrefix}country` VALUES ('AM', 'Armenia');
INSERT INTO `{$dbPrefix}country` VALUES ('AW', 'Aruba');
INSERT INTO `{$dbPrefix}country` VALUES ('AU', 'Australia');
INSERT INTO `{$dbPrefix}country` VALUES ('AT', 'Austria');
INSERT INTO `{$dbPrefix}country` VALUES ('AZ', 'Azerbaijan');
INSERT INTO `{$dbPrefix}country` VALUES ('BS', 'Bahamas');
INSERT INTO `{$dbPrefix}country` VALUES ('BH', 'Bahrain');
INSERT INTO `{$dbPrefix}country` VALUES ('BD', 'Bangladesh');
INSERT INTO `{$dbPrefix}country` VALUES ('BB', 'Barbados');
INSERT INTO `{$dbPrefix}country` VALUES ('BY', 'Belarus');
INSERT INTO `{$dbPrefix}country` VALUES ('BE', 'Belgium');
INSERT INTO `{$dbPrefix}country` VALUES ('BZ', 'Belize');
INSERT INTO `{$dbPrefix}country` VALUES ('BJ', 'Benin');
INSERT INTO `{$dbPrefix}country` VALUES ('BM', 'Bermuda');
INSERT INTO `{$dbPrefix}country` VALUES ('BT', 'Bhutan');
INSERT INTO `{$dbPrefix}country` VALUES ('BO', 'Bolivia');
INSERT INTO `{$dbPrefix}country` VALUES ('BA', 'Bosnia and herzegovina');
INSERT INTO `{$dbPrefix}country` VALUES ('BW', 'Botswana');
INSERT INTO `{$dbPrefix}country` VALUES ('BV', 'Bouvet island');
INSERT INTO `{$dbPrefix}country` VALUES ('BR', 'Brazil');
INSERT INTO `{$dbPrefix}country` VALUES ('IO', 'British indian ocean territory');
INSERT INTO `{$dbPrefix}country` VALUES ('BN', 'Brunei darussalam');
INSERT INTO `{$dbPrefix}country` VALUES ('BG', 'Bulgaria');
INSERT INTO `{$dbPrefix}country` VALUES ('BF', 'Burkina faso');
INSERT INTO `{$dbPrefix}country` VALUES ('BI', 'Burundi');
INSERT INTO `{$dbPrefix}country` VALUES ('KH', 'Cambodia');
INSERT INTO `{$dbPrefix}country` VALUES ('CM', 'Cameroon');
INSERT INTO `{$dbPrefix}country` VALUES ('CA', 'Canada');
INSERT INTO `{$dbPrefix}country` VALUES ('CV', 'Cape verde');
INSERT INTO `{$dbPrefix}country` VALUES ('KY', 'Cayman islands');
INSERT INTO `{$dbPrefix}country` VALUES ('CF', 'Central african republic');
INSERT INTO `{$dbPrefix}country` VALUES ('TD', 'Chad');
INSERT INTO `{$dbPrefix}country` VALUES ('CL', 'Chile');
INSERT INTO `{$dbPrefix}country` VALUES ('CN', 'China');
INSERT INTO `{$dbPrefix}country` VALUES ('CX', 'Christmas island');
INSERT INTO `{$dbPrefix}country` VALUES ('CC', 'Cocos (keeling) islands');
INSERT INTO `{$dbPrefix}country` VALUES ('CO', 'Colombia');
INSERT INTO `{$dbPrefix}country` VALUES ('KM', 'Comoros');
INSERT INTO `{$dbPrefix}country` VALUES ('CG', 'Congo');
INSERT INTO `{$dbPrefix}country` VALUES ('CD', 'Congo');
INSERT INTO `{$dbPrefix}country` VALUES ('CK', 'Cook islands');
INSERT INTO `{$dbPrefix}country` VALUES ('CR', 'Costa rica');
INSERT INTO `{$dbPrefix}country` VALUES ('CI', 'Cote d''ivoire');
INSERT INTO `{$dbPrefix}country` VALUES ('HR', 'Croatia');
INSERT INTO `{$dbPrefix}country` VALUES ('CU', 'Cuba');
INSERT INTO `{$dbPrefix}country` VALUES ('CY', 'Cyprus');
INSERT INTO `{$dbPrefix}country` VALUES ('CZ', 'Czech republic');
INSERT INTO `{$dbPrefix}country` VALUES ('DK', 'Denmark');
INSERT INTO `{$dbPrefix}country` VALUES ('DJ', 'Djibouti');
INSERT INTO `{$dbPrefix}country` VALUES ('DM', 'Dominica');
INSERT INTO `{$dbPrefix}country` VALUES ('DO', 'Dominican republic');
INSERT INTO `{$dbPrefix}country` VALUES ('TP', 'East timor');
INSERT INTO `{$dbPrefix}country` VALUES ('EC', 'Ecuador');
INSERT INTO `{$dbPrefix}country` VALUES ('EG', 'Egypt');
INSERT INTO `{$dbPrefix}country` VALUES ('SV', 'El salvador');
INSERT INTO `{$dbPrefix}country` VALUES ('GQ', 'Equatorial guinea');
INSERT INTO `{$dbPrefix}country` VALUES ('ER', 'Eritrea');
INSERT INTO `{$dbPrefix}country` VALUES ('EE', 'Estonia');
INSERT INTO `{$dbPrefix}country` VALUES ('ET', 'Ethiopia');
INSERT INTO `{$dbPrefix}country` VALUES ('FK', 'Falkland islands (malvinas)');
INSERT INTO `{$dbPrefix}country` VALUES ('FO', 'Faroe islands');
INSERT INTO `{$dbPrefix}country` VALUES ('FJ', 'Fiji');
INSERT INTO `{$dbPrefix}country` VALUES ('FI', 'Finland');
INSERT INTO `{$dbPrefix}country` VALUES ('FR', 'France');
INSERT INTO `{$dbPrefix}country` VALUES ('GF', 'French guiana');
INSERT INTO `{$dbPrefix}country` VALUES ('PF', 'French polynesia');
INSERT INTO `{$dbPrefix}country` VALUES ('TF', 'French southern territories');
INSERT INTO `{$dbPrefix}country` VALUES ('GA', 'Gabon');
INSERT INTO `{$dbPrefix}country` VALUES ('GM', 'Gambia');
INSERT INTO `{$dbPrefix}country` VALUES ('GE', 'Georgia');
INSERT INTO `{$dbPrefix}country` VALUES ('DE', 'Germany');
INSERT INTO `{$dbPrefix}country` VALUES ('GH', 'Ghana');
INSERT INTO `{$dbPrefix}country` VALUES ('GI', 'Gibraltar');
INSERT INTO `{$dbPrefix}country` VALUES ('GR', 'Greece');
INSERT INTO `{$dbPrefix}country` VALUES ('GL', 'Greenland');
INSERT INTO `{$dbPrefix}country` VALUES ('GD', 'Grenada');
INSERT INTO `{$dbPrefix}country` VALUES ('GP', 'Guadeloupe');
INSERT INTO `{$dbPrefix}country` VALUES ('GU', 'Guam');
INSERT INTO `{$dbPrefix}country` VALUES ('GT', 'Guatemala');
INSERT INTO `{$dbPrefix}country` VALUES ('GN', 'Guinea');
INSERT INTO `{$dbPrefix}country` VALUES ('GW', 'Guinea-bissau');
INSERT INTO `{$dbPrefix}country` VALUES ('GY', 'Guyana');
INSERT INTO `{$dbPrefix}country` VALUES ('HT', 'Haiti');
INSERT INTO `{$dbPrefix}country` VALUES ('HM', 'Heard and mcdonald islands');
INSERT INTO `{$dbPrefix}country` VALUES ('VA', 'Holy see (vatican city state)');
INSERT INTO `{$dbPrefix}country` VALUES ('HN', 'Honduras');
INSERT INTO `{$dbPrefix}country` VALUES ('HK', 'Hong kong');
INSERT INTO `{$dbPrefix}country` VALUES ('HU', 'Hungary');
INSERT INTO `{$dbPrefix}country` VALUES ('IS', 'Iceland');
INSERT INTO `{$dbPrefix}country` VALUES ('IN', 'India');
INSERT INTO `{$dbPrefix}country` VALUES ('ID', 'Indonesia');
INSERT INTO `{$dbPrefix}country` VALUES ('IR', 'Iran, islamic republic of');
INSERT INTO `{$dbPrefix}country` VALUES ('IQ', 'Iraq');
INSERT INTO `{$dbPrefix}country` VALUES ('IE', 'Ireland');
INSERT INTO `{$dbPrefix}country` VALUES ('IL', 'Israel');
INSERT INTO `{$dbPrefix}country` VALUES ('IT', 'Italy');
INSERT INTO `{$dbPrefix}country` VALUES ('JM', 'Jamaica');
INSERT INTO `{$dbPrefix}country` VALUES ('JP', 'Japan');
INSERT INTO `{$dbPrefix}country` VALUES ('JO', 'Jordan');
INSERT INTO `{$dbPrefix}country` VALUES ('KZ', 'Kazakstan');
INSERT INTO `{$dbPrefix}country` VALUES ('KE', 'Kenya');
INSERT INTO `{$dbPrefix}country` VALUES ('KI', 'Kiribati');
INSERT INTO `{$dbPrefix}country` VALUES ('KP', 'Korea, democratic');
INSERT INTO `{$dbPrefix}country` VALUES ('KR', 'Korea, republic of');
INSERT INTO `{$dbPrefix}country` VALUES ('KW', 'Kuwait');
INSERT INTO `{$dbPrefix}country` VALUES ('KG', 'Kyrgyzstan');
INSERT INTO `{$dbPrefix}country` VALUES ('LA', 'Laos');
INSERT INTO `{$dbPrefix}country` VALUES ('LV', 'Latvia');
INSERT INTO `{$dbPrefix}country` VALUES ('LB', 'Lebanon');
INSERT INTO `{$dbPrefix}country` VALUES ('LS', 'Lesotho');
INSERT INTO `{$dbPrefix}country` VALUES ('LR', 'Liberia');
INSERT INTO `{$dbPrefix}country` VALUES ('LY', 'Libyan arab jamahiriya');
INSERT INTO `{$dbPrefix}country` VALUES ('LI', 'Liechtenstein');
INSERT INTO `{$dbPrefix}country` VALUES ('LT', 'Lithuania');
INSERT INTO `{$dbPrefix}country` VALUES ('LU', 'Luxembourg');
INSERT INTO `{$dbPrefix}country` VALUES ('MO', 'Macau');
INSERT INTO `{$dbPrefix}country` VALUES ('MK', 'Macedonia');
INSERT INTO `{$dbPrefix}country` VALUES ('MG', 'Madagascar');
INSERT INTO `{$dbPrefix}country` VALUES ('MW', 'Malawi');
INSERT INTO `{$dbPrefix}country` VALUES ('MY', 'Malaysia');
INSERT INTO `{$dbPrefix}country` VALUES ('MV', 'Maldives');
INSERT INTO `{$dbPrefix}country` VALUES ('ML', 'Mali');
INSERT INTO `{$dbPrefix}country` VALUES ('MT', 'Malta');
INSERT INTO `{$dbPrefix}country` VALUES ('MH', 'Marshall islands');
INSERT INTO `{$dbPrefix}country` VALUES ('MQ', 'Martinique');
INSERT INTO `{$dbPrefix}country` VALUES ('MR', 'Mauritania');
INSERT INTO `{$dbPrefix}country` VALUES ('MU', 'Mauritius');
INSERT INTO `{$dbPrefix}country` VALUES ('YT', 'Mayotte');
INSERT INTO `{$dbPrefix}country` VALUES ('MX', 'Mexico');
INSERT INTO `{$dbPrefix}country` VALUES ('FM', 'Micronesia');
INSERT INTO `{$dbPrefix}country` VALUES ('MD', 'Moldova, republic of');
INSERT INTO `{$dbPrefix}country` VALUES ('MC', 'Monaco');
INSERT INTO `{$dbPrefix}country` VALUES ('MN', 'Mongolia');
INSERT INTO `{$dbPrefix}country` VALUES ('MS', 'Montserrat');
INSERT INTO `{$dbPrefix}country` VALUES ('MA', 'Morocco');
INSERT INTO `{$dbPrefix}country` VALUES ('MZ', 'Mozambique');
INSERT INTO `{$dbPrefix}country` VALUES ('MM', 'Myanmar');
INSERT INTO `{$dbPrefix}country` VALUES ('NA', 'Namibia');
INSERT INTO `{$dbPrefix}country` VALUES ('NR', 'Nauru');
INSERT INTO `{$dbPrefix}country` VALUES ('NP', 'Nepal');
INSERT INTO `{$dbPrefix}country` VALUES ('NL', 'Netherlands');
INSERT INTO `{$dbPrefix}country` VALUES ('AN', 'Netherlands antilles');
INSERT INTO `{$dbPrefix}country` VALUES ('NC', 'New caledonia');
INSERT INTO `{$dbPrefix}country` VALUES ('NZ', 'New zealand');
INSERT INTO `{$dbPrefix}country` VALUES ('NI', 'Nicaragua');
INSERT INTO `{$dbPrefix}country` VALUES ('NE', 'Niger');
INSERT INTO `{$dbPrefix}country` VALUES ('NG', 'Nigeria');
INSERT INTO `{$dbPrefix}country` VALUES ('NU', 'Niue');
INSERT INTO `{$dbPrefix}country` VALUES ('NF', 'Norfolk island');
INSERT INTO `{$dbPrefix}country` VALUES ('MP', 'Northern mariana islands');
INSERT INTO `{$dbPrefix}country` VALUES ('NO', 'Norway');
INSERT INTO `{$dbPrefix}country` VALUES ('OM', 'Oman');
INSERT INTO `{$dbPrefix}country` VALUES ('PK', 'Pakistan');
INSERT INTO `{$dbPrefix}country` VALUES ('PW', 'Palau');
INSERT INTO `{$dbPrefix}country` VALUES ('PS', 'Palestinian territory');
INSERT INTO `{$dbPrefix}country` VALUES ('PA', 'Panama');
INSERT INTO `{$dbPrefix}country` VALUES ('PG', 'Papua new guinea');
INSERT INTO `{$dbPrefix}country` VALUES ('PY', 'Paraguay');
INSERT INTO `{$dbPrefix}country` VALUES ('PE', 'Peru');
INSERT INTO `{$dbPrefix}country` VALUES ('PH', 'Philippines');
INSERT INTO `{$dbPrefix}country` VALUES ('PN', 'Pitcairn');
INSERT INTO `{$dbPrefix}country` VALUES ('PL', 'Poland');
INSERT INTO `{$dbPrefix}country` VALUES ('PT', 'Portugal');
INSERT INTO `{$dbPrefix}country` VALUES ('PR', 'Puerto rico');
INSERT INTO `{$dbPrefix}country` VALUES ('QA', 'Qatar');
INSERT INTO `{$dbPrefix}country` VALUES ('RE', 'Reunion');
INSERT INTO `{$dbPrefix}country` VALUES ('RO', 'Romania');
INSERT INTO `{$dbPrefix}country` VALUES ('RU', 'Russian federation');
INSERT INTO `{$dbPrefix}country` VALUES ('RW', 'Rwanda');
INSERT INTO `{$dbPrefix}country` VALUES ('SH', 'Saint helena');
INSERT INTO `{$dbPrefix}country` VALUES ('KN', 'Saint kitts and nevis');
INSERT INTO `{$dbPrefix}country` VALUES ('LC', 'Saint lucia');
INSERT INTO `{$dbPrefix}country` VALUES ('PM', 'Saint pierre and miquelon');
INSERT INTO `{$dbPrefix}country` VALUES ('VC', 'Saint vincent and the grenadines');
INSERT INTO `{$dbPrefix}country` VALUES ('WS', 'Samoa');
INSERT INTO `{$dbPrefix}country` VALUES ('SM', 'San marino');
INSERT INTO `{$dbPrefix}country` VALUES ('ST', 'Sao tome and principe');
INSERT INTO `{$dbPrefix}country` VALUES ('SA', 'Saudi arabia');
INSERT INTO `{$dbPrefix}country` VALUES ('SN', 'Senegal');
INSERT INTO `{$dbPrefix}country` VALUES ('SC', 'Seychelles');
INSERT INTO `{$dbPrefix}country` VALUES ('SL', 'Sierra leone');
INSERT INTO `{$dbPrefix}country` VALUES ('SG', 'Singapore');
INSERT INTO `{$dbPrefix}country` VALUES ('SK', 'Slovakia');
INSERT INTO `{$dbPrefix}country` VALUES ('SI', 'Slovenia');
INSERT INTO `{$dbPrefix}country` VALUES ('SB', 'Solomon islands');
INSERT INTO `{$dbPrefix}country` VALUES ('SO', 'Somalia');
INSERT INTO `{$dbPrefix}country` VALUES ('ZA', 'South africa');
INSERT INTO `{$dbPrefix}country` VALUES ('GS', 'South georgia');
INSERT INTO `{$dbPrefix}country` VALUES ('ES', 'Spain');
INSERT INTO `{$dbPrefix}country` VALUES ('LK', 'Sri lanka');
INSERT INTO `{$dbPrefix}country` VALUES ('SD', 'Sudan');
INSERT INTO `{$dbPrefix}country` VALUES ('SR', 'Suriname');
INSERT INTO `{$dbPrefix}country` VALUES ('SJ', 'Svalbard and jan mayen');
INSERT INTO `{$dbPrefix}country` VALUES ('SZ', 'Swaziland');
INSERT INTO `{$dbPrefix}country` VALUES ('SE', 'Sweden');
INSERT INTO `{$dbPrefix}country` VALUES ('CH', 'Switzerland');
INSERT INTO `{$dbPrefix}country` VALUES ('SY', 'Syrian arab republic');
INSERT INTO `{$dbPrefix}country` VALUES ('TW', 'Taiwan, province of china');
INSERT INTO `{$dbPrefix}country` VALUES ('TJ', 'Tajikistan');
INSERT INTO `{$dbPrefix}country` VALUES ('TZ', 'Tanzania, united republic of');
INSERT INTO `{$dbPrefix}country` VALUES ('TH', 'Thailand');
INSERT INTO `{$dbPrefix}country` VALUES ('TG', 'Togo');
INSERT INTO `{$dbPrefix}country` VALUES ('TK', 'Tokelau');
INSERT INTO `{$dbPrefix}country` VALUES ('TO', 'Tonga');
INSERT INTO `{$dbPrefix}country` VALUES ('TT', 'Trinidad and tobago');
INSERT INTO `{$dbPrefix}country` VALUES ('TN', 'Tunisia');
INSERT INTO `{$dbPrefix}country` VALUES ('TR', 'Turkey');
INSERT INTO `{$dbPrefix}country` VALUES ('TM', 'Turkmenistan');
INSERT INTO `{$dbPrefix}country` VALUES ('TC', 'Turks and caicos islands');
INSERT INTO `{$dbPrefix}country` VALUES ('TV', 'Tuvalu');
INSERT INTO `{$dbPrefix}country` VALUES ('UG', 'Uganda');
INSERT INTO `{$dbPrefix}country` VALUES ('UA', 'Ukraine');
INSERT INTO `{$dbPrefix}country` VALUES ('AE', 'United Arab Emirates');
INSERT INTO `{$dbPrefix}country` VALUES ('GB', 'United Kingdom');
INSERT INTO `{$dbPrefix}country` VALUES ('US', 'United States');
INSERT INTO `{$dbPrefix}country` VALUES ('UM', 'United States minor islands');
INSERT INTO `{$dbPrefix}country` VALUES ('UY', 'Uruguay');
INSERT INTO `{$dbPrefix}country` VALUES ('UZ', 'Uzbekistan');
INSERT INTO `{$dbPrefix}country` VALUES ('VU', 'Vanuatu');
INSERT INTO `{$dbPrefix}country` VALUES ('VE', 'Venezuela');
INSERT INTO `{$dbPrefix}country` VALUES ('VN', 'Viet nam');
INSERT INTO `{$dbPrefix}country` VALUES ('VG', 'Virgin islands, british');
INSERT INTO `{$dbPrefix}country` VALUES ('VI', 'Virgin islands, u.s.');
INSERT INTO `{$dbPrefix}country` VALUES ('WF', 'Wallis and futuna');
INSERT INTO `{$dbPrefix}country` VALUES ('EH', 'Western sahara');
INSERT INTO `{$dbPrefix}country` VALUES ('YE', 'Yemen');
INSERT INTO `{$dbPrefix}country` VALUES ('YU', 'Yugoslavia');
INSERT INTO `{$dbPrefix}country` VALUES ('ZM', 'Zambia');
INSERT INTO `{$dbPrefix}country` VALUES ('ZW', 'Zimbabwe');
EOSQL;

$sqlItem = <<< EOSQL
CREATE TABLE `{$dbPrefix}item` (
  `itemId` int(10) unsigned NOT NULL auto_increment,
  `projectId` mediumint(8) unsigned NOT NULL default '0',
  `itemParentId` int(10) unsigned NOT NULL default '0',
  `priority` tinyint(3) unsigned NOT NULL default '0',
  `context` varchar(80) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `deadlineDate` date NOT NULL default '1000-01-01',
  `expectedDuration` smallint(5) unsigned NOT NULL default '0',
  `showInCalendar` tinyint(1) unsigned NOT NULL default '0',
  `showPrivate` tinyint(1) unsigned NOT NULL default '0',
  `memberId` mediumint(8) unsigned NOT NULL default '0',
  `authorId` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`itemId`),
  KEY `projectId` (`projectId`),
  KEY `memberId` (`memberId`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}item` VALUES (1, 1, 0, 3, '1', 'Congratulations! This is your first task', 'First of all, read the README.txt if you haven''t done it yet.\r\n\r\nLots of informations in there.', '9999-12-31', 0, 0, 0, 1, 1);
INSERT INTO `{$dbPrefix}item` VALUES (2, 1, 0, 5, '1', 'How to create a user', 'To create a new user, go to menu <i>manage > users</i> \r\n\r\nthen click on the <img src="skins/redfreak/images/b_new.png" /> button.', '9999-12-31', 0, 0, 2, 1, 1);
INSERT INTO `{$dbPrefix}item` VALUES (3, 1, 0, 7, '4', 'Send some feedback', 'To send some feedback to the author, go to\r\n<a href="http://forum.taskfreak.com" target="_blank">http://forum.taskfreak.com</a>\r\n\r\nPlease remember you can donate by paypal on\r\n<a href="http://www.taskfreak.com" target="_blank">http://www.taskfreak.com</a>', '9999-12-31', 0, 0, 1, 1, 1);
EOSQL;

$sqlItemComment = <<< EOSQL
CREATE TABLE `{$dbPrefix}itemComment` (
  `itemCommentId` bigint(20) unsigned NOT NULL auto_increment,
  `itemId` int(10) unsigned NOT NULL default '0',
  `memberId` mediumint(8) unsigned NOT NULL default '0',
  `postDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `body` text NOT NULL,
  `lastChangeDate` datetime NOT NULL default '1000-01-01 00:00:00',
  PRIMARY KEY  (`itemCommentId`),
  KEY `taskId` (`itemId`)
) ENGINE=InnoDB;
EOSQL;

$sqlItemFile = <<< EOSQL
CREATE TABLE `{$dbPrefix}itemFile` (
  `itemFileId` bigint(20) unsigned NOT NULL auto_increment,
  `itemId` int(10) unsigned NOT NULL default '0',
  `memberId` mediumint(8) unsigned NOT NULL default '0',
  `fileTitle` varchar(200) NOT NULL default '',
  `filename` varchar(127) NOT NULL default '',
  `filetype` varchar(30) NOT NULL default '',
  `filesize` bigint(20) NOT NULL default '0',
  `postDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `lastChangeDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `fileTags` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`itemFileId`),
  KEY `taskId` (`itemId`)
) ENGINE=InnoDB;
EOSQL;

$sqlItemStatus = <<< EOSQL
CREATE TABLE `{$dbPrefix}itemStatus` (
  `itemStatusId` bigint(20) unsigned NOT NULL auto_increment,
  `itemId` int(10) unsigned NOT NULL default '0',
  `statusDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `statusKey` tinyint(3) unsigned NOT NULL default '0',
  `memberId` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`itemStatusId`),
  KEY `itemId` (`itemId`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}itemStatus` VALUES (1, 1, '2006-06-01 00:00:00', 0, 1);
INSERT INTO `{$dbPrefix}itemStatus` VALUES (2, 2, '2006-06-01 00:00:00', 0, 1);
INSERT INTO `{$dbPrefix}itemStatus` VALUES (3, 3, '2006-06-01 00:00:00', 0, 1);
EOSQL;

$sqlMember = <<< EOSQL
CREATE TABLE `{$dbPrefix}member` (
  `memberId` mediumint(8) unsigned NOT NULL auto_increment,
  `email` varchar(120) NOT NULL default '',
  `title` varchar(20) NOT NULL default '',
  `firstName` varchar(50) NOT NULL default '',
  `middleName` varchar(50) NOT NULL default '',
  `lastName` varchar(50) NOT NULL default '',
  `zipCode` varchar(20) NOT NULL default '',
  `city` varchar(60) NOT NULL default '',
  `stateCode` char(2) NOT NULL default '',
  `countryId` char(2) NOT NULL default '',
  `phone` varchar(30) NOT NULL default '',
  `mobile` varchar(30) NOT NULL default '',
  `fax` varchar(30) NOT NULL default '',
  `username` varchar(20) NOT NULL default '',
  `password` varchar(60) NOT NULL default '',
  `salt` varchar(8) NOT NULL default '',
  `autoLogin` tinyint(1) NOT NULL default '0',
  `timeZone` smallint(6) NOT NULL default '0',
  `expirationDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `lastLoginDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `lastLoginAddress` varchar(60) NOT NULL default '',
  `creationDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `lastChangeDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `visits` mediumint(8) unsigned NOT NULL default '0',
  `badAccess` tinyint(3) unsigned NOT NULL default '0',
  `level` tinyint(3) unsigned NOT NULL default '0',
  `activation` varchar(16) NOT NULL default '',
  `authorId` mediumint(8) unsigned NOT NULL default '0',
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`memberId`),
  KEY `username` (`username`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}member` VALUES (1, 'admin@taskfreak.com', 'Mr', 'Admin', '', 'Istrator', '', '', '', 'FR', '', '', '', 'admin', '', '12345678', 0, 7200, '1000-01-01 00:00:00', '1000-01-01 00:00:00', '', '2006-06-01 00:00:00', '1000-01-01 00:00:00', 0, 0, 4, '', 1, 1);
EOSQL;

$sqlMemberProject = <<< EOSQL
CREATE TABLE `{$dbPrefix}memberProject` (
  `memberId` mediumint(8) unsigned NOT NULL default '0',
  `projectId` mediumint(8) unsigned NOT NULL default '0',
  `position` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`memberId`,`projectId`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}memberProject` VALUES (1, 1, 5);
EOSQL;

$sqlProject = <<< EOSQL
CREATE TABLE `{$dbPrefix}project` (
  `projectId` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(120) NOT NULL default '',
  `description` text NOT NULL,
  PRIMARY KEY  (`projectId`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}project` VALUES (1, 'Your first project', '');
EOSQL;

$sqlProjectStatus = <<< EOSQL
CREATE TABLE `{$dbPrefix}projectStatus` (
  `projectStatusId` int(10) unsigned NOT NULL auto_increment,
  `projectId` mediumint(10) unsigned NOT NULL default '0',
  `statusDate` datetime NOT NULL default '1000-01-01 00:00:00',
  `statusKey` tinyint(3) unsigned NOT NULL default '0',
  `memberId` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`projectStatusId`),
  KEY `projectId` (`projectId`)
) ENGINE=InnoDB;
INSERT INTO `{$dbPrefix}projectStatus` VALUES (1, 1, '2006-06-01 00:00:00', 0, 1);
EOSQL;
?>
