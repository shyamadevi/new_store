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
    user_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
)
?>
