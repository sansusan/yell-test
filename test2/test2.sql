CREATE TABLE autor (
  autor_id int(11) NOT NULL AUTO_INCREMENT,
  autor_name varchar(50) DEFAULT NULL,
  autor_surname varchar(50) NOT NULL,
  autor_patr varchar(50) DEFAULT NULL,
  PRIMARY KEY (autor_id)
);


CREATE TABLE book (
  book_id int(11) NOT NULL AUTO_INCREMENT,
  book_name varchar(500) NOT NULL,
  PRIMARY KEY (book_id)
);


CREATE TABLE book_autor (
  id int(11) NOT NULL AUTO_INCREMENT,
  book_id int(11) NOT NULL,
  autor_id int(11) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY `uix_book_autor` (`book_id`,`autor_id`),
  CONSTRAINT FK_boot_autor_autor_autor_id FOREIGN KEY (autor_id)
  REFERENCES autor (autor_id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_boot_autor_book_book_id FOREIGN KEY (book_id)
  REFERENCES book (book_id) ON DELETE RESTRICT ON UPDATE RESTRICT
);
