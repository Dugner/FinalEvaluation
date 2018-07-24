
INSERT INTO users (id, firstname, lastname, email, role) VALUES ('3', 'Goran', 'Dajovski', 'gogomkd@gmail.com', 'IT')

INSERT INTO article (id, title, content, picture, date_publish, id_user) VALUES ('10', 'Forest', 'forest is amazing place to be', '/img/kjdsfgvfdasbfdsa.jpg', '21-03-1993', '3');

SELECT a.title, u.firstname FROM articles JOIN LEFT users WHERE u.user.id = a.id_user;