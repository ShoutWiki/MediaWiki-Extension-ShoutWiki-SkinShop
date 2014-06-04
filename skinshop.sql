CREATE TABLE /*_*/skinshop (
  ss_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ss_skin_name varchar(255) NOT NULL default '',
  ss_is_active tinyint(1) NOT NULL default 0,
  ss_price int(11) NOT NULL default '',
  ss_demo_link text NOT NULL,
  ss_screenshots blob NOT NULL
) /*$wgDBTableOptions*/;