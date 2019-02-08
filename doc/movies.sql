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
    MovieLanguage	VARCHAR(30),
    ImageReference	VARCHAR(50)							
);

-- ------------------------------------------------------------------------------------------------------------------------------------------
--                                              Insert Data                                                                                --
-- ---------------------------------------------------------------------------------------------------------------------

INSERT INTO movies.MovieInfo	
VALUES
(1,'Glass','R','Thriller', '2019-03-01', 4.5, 'English', 'glass.jpg'),
(2,'Matrix','R','Thriller', '2019-03-01', 3.1, 'English', 'matrix.jpg'),
(3,'Lego Movie','PG','Comedy', '2019-03-01', 4.3, 'English', 'lego_movie.jpg'),
(4,'Requiem for a Dream','G','Thriller', '2019-03-01', 2.0, 'English', 'requiem_for_a_dream.jpg'),
(5,'The Truman Show','PG-13','Thriller', '2019-03-01', 4.4, 'English', 'truman_show.jpg'),
(6,'Big Daddy','R','Comedy', '2019-03-01', 4.3, 'English', 'big_daddy.jpg'),
(7,'Happy Gilmore','R','Comedy', '2019-03-01', 4.5, 'English', 'happy_gilmore.jpg'),
(8,'Inception','R','Thriller', '2019-03-01', 4.5, 'English', 'no_image.jpg'),
(9,'Murder By Numbers','R','Horror', '2019-03-01', 4.9, 'English', 'murder_by_numbers.jpg'),
(10,'Elf','G','Comedy', '2019-03-01', 4.2, 'English', 'elf.jpg'),
(11,'Ace Ventura','PG','Comedy', '2019-03-01', 4.4, 'English', 'ace_ventura.jpg'),
(12,'50 First Dates','PG','Comedy', '2019-03-01', 4.3, 'English', '50_first_dates.jpg')
;