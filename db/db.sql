SELECT DATABASE();

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Tourist', 'Owner') NOT NULL
);

INSERT INTO users (name, email, password, role) 
VALUES ('Test User', 'test@example.com', PASSWORD_HASH('password123', PASSWORD_DEFAULT), 'Tourist');

