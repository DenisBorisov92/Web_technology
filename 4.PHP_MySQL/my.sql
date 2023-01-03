
-- create
CREATE TABLE classmate (
  Id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress TEXT NOT NULL
);

-- insert
INSERT INTO classmate VALUES (1, 'Clark', '17', 'Moskva');
INSERT INTO classmate VALUES (2, 'Dave', '22', 'Novosibirsk');
INSERT INTO classmate VALUES (3, 'Elena', '25', 'Moskva');
INSERT INTO classmate VALUES (4, 'Andrey', '21', 'Moskva');
INSERT INTO classmate VALUES (5, 'David', '18', 'Paris');
INSERT INTO classmate VALUES (6, 'Den', '17', 'Samara');
INSERT INTO classmate VALUES (7, 'Stas', '24', 'Moskva');
INSERT INTO classmate VALUES (8, 'Anna', '30', 'Moskva');
INSERT INTO classmate VALUES (9, 'Paul', '16', 'Abakan');

-- fetch 
SELECT name FROM classmate WHERE adress = 'Moskva' AND age >= 18 AND age < 30;
