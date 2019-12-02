

DROP DATABASE IF EXISTS bug_me2;
CREATE DATABASE bug_me2;
USE bug_me2;



CREATE TABLE 'Users' (
'id' int(10) UNSIGNED NOT NULL PRIMARY KEY,
'firstname' varchar(50) NOT NULL,
'lastname' varchar(50) NOT NULL,
'password' varchar(50) NOT NULL,
'email' varchar(50) NOT NULL,
'date_joined' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE 'Issues' (
'id' int(10) UNSIGNED NOT NULL PRIMARY KEY,
'title' varchar(50) NOT NULL,
'description' varchar(50) NOT NULL,
'type' varchar(50) NOT NULL,
'priority' varchar(50) NOT NULL,
'status' varchar(50) NOT NULL,
'assigned_to' int(10) UNSIGNED NOT NULL,
'created_by' int(10) UNSIGNED NOT NULL,
'created' varchar(50) NOT NULL,
'updated' varchar(50) NOT NULL
);

INSERT INTO Users ('id', 'firstname', 'lastname', 'password', 'email', 'date_joined')
VALUES
(1, "Moesha", "Amos", "42f749ade7f9e195bf475f37a44cafcb", "admin@bugme.com",date); 
