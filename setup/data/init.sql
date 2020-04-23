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

INSERT INTO authors (email,hash_password, first_name, last_name, biography) VALUES ("Srinusaikiran@gmail.com","     ","Saikiran","puli","engineer");


CREATE TABLE posts (
    slug VARCHAR(128) NOT NULL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    author VARCHAR(128) NOT NULL,
    post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (author),
    FOREIGN KEY (author)
    REFERENCES users (email)

);

INSERT INTO `posts` (slug, title, content, author) VALUES ("post-a", "post A", "<article><h2>Post A><section><p>This is a modern painting</p></section></article>","srinusaikiran@gmail.com");


