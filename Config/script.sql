CREATE DATABASE wiki;
CREATE TABLE role(
	id int PRIMARY key,
    role_type varchar(255)
);
CREATE TABLE category(
	id int PRIMARY key,
    name varchar(255)
);
create table tag(
	id int PRIMARY key,
    tag varchar(255)
);
create table users(
	id int PRIMARY key,
    fullname varchar(255),
    email text,
    pwd text,
    repeatpwd text, 
    id_role int, 
    FOREIGN KEY (id_role) REFERENCES role(id)
);
create table wiki(
	id int PRIMARY key,
    wiki_name varchar(255),
    content text,
    category text,
    tag text, 
    archive boolean,
    id_user int,
    id_category int,
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_category) REFERENCES category(id)
);
