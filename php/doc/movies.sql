DROP DATABASE IF EXISTS movies;
CREATE DATABASE IF NOT EXISTS movies;
USE movies;

CREATE TABLE MovieInfo (
	MovieID			INT								NOT NULL,
    Title			VARCHAR(50)						NOT NULL,
    Rating			ENUM('G', 'PG', 'PG-13', 'R'),		
    Genre			VARCHAR(50),
    ReleaseDate		DATE,		 
    StarRating		DECIMAL(2,1),
    MovieLanguage	VARCHAR(30)
);

-- ------------------------------------------------------------------------------------------------------------------------------------------
--                                              Insert Data                                                                                --
-- ---------------------------------------------------------------------------------------------------------------------

INSERT INTO movies.MovieInfo	
VALUES
(1,'Glass','R','Thriller', '2019-03-01', 4.5, 'English'),
(2,'Matrix','R','Thriller', '2019-03-01', 3.1, 'English'),
(3,'Lego Movie','PG','Comedy', '2019-03-01', 4.3, 'English'),
(4,'Requiem for a Dream','G','Thriller', '2019-03-01', 2.0, 'English'),
(5,'The Truman Show','PG-13','Thriller', '2019-03-01', 4.4, 'English'),
(6,'Big Daddy','R','Comedy', '2019-03-01', 4.3, 'English'),
(7,'Happy Gilmore','R','Comedy', '2019-03-01', 4.5, 'English'),
(8,'Inception','R','Thriller', '2019-03-01', 4.5, 'English'),
(9,'Murder By Numbers','R','Horror', '2019-03-01', 4.9, 'English'),
(10,'Elf','G','Comedy', '2019-03-01', 4.2, 'English'),
(11,'Ace Ventura','PG','Comedy', '2019-03-01', 4.4, 'English'),
(12,'50 First Dates','PG','Comedy', '2019-03-01', 4.3, 'English');