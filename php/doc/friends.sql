DROP DATABASE IF EXISTS users;
CREATE DATABASE IF NOT EXISTS users;
USE users;

CREATE TABLE userInfo (
	userID			INT								NOT NULL,
    FirstName			VARCHAR(50)						NOT NULL,
    LastName			VARCHAR(50)						NOT NULL,		
    Email				VARCHAR(50)						NOT NULL,
    MoviesLiked			VARCHAR(100),		 
    Friends				INT,
    MoviesRated			INT
);

-- ------------------------------------------------------------------------------------------------------------------------------------------
--                                              Insert Data                                                                                --
-- ---------------------------------------------------------------------------------------------------------------------

INSERT INTO users.userInfo	
VALUES
(1, 'Bob', 'Burger', 'bob@burger.com', 'Glass', 30, 20),
(2, 'Chris', 'Boo', 'bob@burger.com', 'Glass', 30, 20),
(3, 'Maria', 'Gai', 'bob@burger.com', 'Glass', 30, 20),
(4, 'Shihpei', 'Lamp', 'bob@burger.com', 'Glass', 30, 20),
(5, 'Ruth', 'Todo', 'bob@burger.com', 'Glass', 30, 20),
(6, 'Tim', 'Goma', 'bob@burger.com', 'Glass', 30, 20),
(7, 'Tom', 'Reepa', 'bob@burger.com', 'Glass', 30, 20),
(8, 'Georgie', 'Moop', 'bob@burger.com', 'Glass', 30, 20),
(9, 'Laura', 'Doop', 'bob@burger.com', 'Glass', 30, 20),
(10, 'Christina', 'Soup', 'bob@burger.com', 'Glass', 30, 20),
(11, 'Natalie', 'Loop', 'bob@burger.com', 'Glass', 30, 20);
