CREATE TABLE IF NOT EXISTS `pet` (
  `name` varchar(20) NOT NULL,
  `species` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `age` tinyint(4) NOT NULL
)
INSERT INTO `pet` (`name`, `species`, `owner`, `age`) 
VALUES ('Chomper', 'Rabbit', '2', 3);
SELECT name FROM pet;
SELECT name, species, age, owner FROM pet;
INSERT INTO pet VALUES
("Chomper", "Rabbit", 2, "Hannah");
UPDATE pet SET age=3; WHERE name="Flopsy";
DELETE FROM pet;WHERE name="Flopsy";