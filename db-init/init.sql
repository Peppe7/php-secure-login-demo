CREATE TABLE IF NOT EXISTS users(
  id INT AUTO_INCREMENT PRIMARY KEY
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users(username, password) VALUES (
  'admin',
  '$2y$10$e0NRoNznf2Qu2z7qeRul2eV8WQCFyMWhxDCDOJKI/p.SIHV/mfNGq'
);
