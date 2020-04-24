USE database;

CREATE TABLE authors (
    email VARCHAR(128) NOT NULL PRIMARY KEY,
    hash_password VARCHAR(255) NOT NULL,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    biography TEXT NOT NULL,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

INSERT INTO authors (email,hash_password, first_name, last_name, biography) VALUES ("Srinusaikiran@gmail.com","$2y$10$WgH8kiXfGVcGk3J1/f4sKez7dSnCR.hJ8MRAq3fkAcl.dCl94vAOq","Saikiran","puli","software programmer");


CREATE TABLE posts (
    slug VARCHAR(128) NOT NULL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    author VARCHAR(128) NOT NULL,
    post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (author),
    FOREIGN KEY (author)
    REFERENCES authors (email)

);

INSERT INTO `posts` (slug, title, content, author) VALUES ("post-1", "Mypost1", "<article><h2>Mypost1<h2><section><p>This is My Blog Page</p></section></article>","srinusaikiran@gmail.com");
INSERT INTO `posts` (slug, title, content, author) VALUES ("post-2" , "Mypost2", "<article><h2>Mypost2<h2><section><p>This is My Blog Page</p></section></article>","srinusaikiran@gmail.com");
INSERT INTO `posts` (slug, title, content, author) VALUES ("post-3", "Mypost3", "<article><h2>Mypost3<h2><section><p>This is My Blog Page</p></section></article>","srinusaikiran@gmail.com");
INSERT INTO `posts` (slug, title, content, author) VALUES ("post-4", "Mypost4", "<article><h2>Mypost4<h2><section><p>This is My Blog Page/p></section></article>", "srinusaikiran@gmail.com");
INSERT INTO `posts` (slug, title, content, author) VALUES ("post-5", "Mypost5", "<article><h2>Mypost5<h2><section><p>This is My Blog Page</p></section></article>","srinusaikiran@gmail.com");
