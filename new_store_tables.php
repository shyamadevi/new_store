<?php
// Table creation query for a new store database

1. "CREATE TABLE users(
    user_id int PRIMARY KEY AUTO_INCREMENT,
    user_name text,
    user_phone text,
    user_email text,
    user_password text,
    user_address text,
    user_profile_picture text,
    user_status text,
    user_sign DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

2. "CREATE TABLE main_admin(
    admin_id int PRIMARY KEY AUTO_INCREMENT,
    admin_name text,
    admin_email text,
    admin_password text,
    admin_pic text,
    admin_address text,
    admin_status text,
    admin_sign DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

3. "CREATE TABLE loginform(
    form_id int PRIMARY KEY AUTO_INCREMENT,
    form_heading text,
    form_desc text,
    form_email text,
    created DATETIME  DEFAULT CURRENT_TIMESTAMP,
    updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


?>
