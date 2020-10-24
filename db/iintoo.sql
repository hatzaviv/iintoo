


CREATE DATABASE IF NOT EXISTS iintoo DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;

-- DATABASE VERSION 01

USE iintoo;

-- creating the products table

CREATE TABLE IF NOT EXISTS products (
	id            		MEDIUMINT unsigned NOT NULL AUTO_INCREMENT,
	title         		VARCHAR(100),
	brand         		VARCHAR(100),
	price	         	VARCHAR(20),
	description  		VARCHAR(300),
	image		  		VARCHAR(300),
	on_sale 			BOOLEAN DEFAULT false,
	entered_on 			TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	INDEX title (title),
	INDEX brand (brand),
	INDEX price (price),
	INDEX on_sale (on_sale),
	INDEX entered_on (entered_on)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;



