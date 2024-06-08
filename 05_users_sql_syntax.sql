CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    username VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    website VARCHAR(255)
);

INSERT INTO users (id, name, username, email, phone, website) VALUES
(1, 'Leanne Graham', 'Bret', 'Sincere@april.biz', '1-770-736-8031 x56442', 'hildegard.org'),
(2, 'Ervin Howell', 'Antonette', 'Shanna@melissa.tv', '010-692-6593 x09125', 'anastasia.net');

CREATE TABLE addresses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    street VARCHAR(255),
    suite VARCHAR(255),
    city VARCHAR(255),
    zipcode VARCHAR(255),
    geo_lat DECIMAL(10, 8),
    geo_lng DECIMAL(11, 8),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

(1, 'Kulas Light', 'Apt. 556', 'Gwenborough', '92998-3874', -37.3159, 81.1496),
(2, 'Victor Plains', 'Suite 879', 'Wisokyburgh', '90566-7771', -43.9509, -34.4618);

CREATE TABLE companies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    name VARCHAR(255),
    catchPhrase VARCHAR(255),
    bs VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

(1, 'Romaguera-Crona', 'Multi-layered client-server neural-net', 'harness real-time e-markets'),
(2, 'Deckow-Crist', 'Proactive didactic contingency', 'synergize scalable supply-chains');

