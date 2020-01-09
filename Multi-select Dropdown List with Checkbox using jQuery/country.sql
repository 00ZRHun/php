CREATE TABLE `countries` (
 `country_id` int(11) NOT NULL AUTO_INCREMENT,
 `country_name` varchar(50) CHARACTER SET utf8 NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
 PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `states` (
 `state_id` int(11) NOT NULL AUTO_INCREMENT,
 `country_id` int(11) NOT NULL,
 `state_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
 PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `cities` (
 `city_id` int(11) NOT NULL AUTO_INCREMENT,
 `state_id` int(11) NOT NULL,
 `city_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
 PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;