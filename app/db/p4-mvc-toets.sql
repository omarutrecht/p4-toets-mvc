-- Check if the database exists--
DROP DATABASE IF EXISTS `p4-mvc-toets`;

-- Create a new Database--
CREATE DATABASE IF NOT EXISTS `p4-mvc-toets`;

Use `p4-mvc-toets`;


CREATE TABLE IF NOT EXISTS Examen (
  id INT PRIMARY KEY,
  studentid INT,
  rijschool VARCHAR(255),
  stad VARCHAR(255),
  rijbewijscategorie VARCHAR(10),
  datum DATE,
  uitslag VARCHAR(10),
  FOREIGN KEY (studentid) REFERENCES Examinator(id)
);

CREATE TABLE IF NOT EXISTS ExamenPerExaminator (
  id INT PRIMARY KEY,
  Examenid INT,
  Examinatorid INT,
  FOREIGN KEY (Examenid) REFERENCES Examen(id),
  FOREIGN KEY (Examinatorid) REFERENCES Examinator(id)
);

CREATE TABLE IF NOT EXISTS Examinator (
  id INT PRIMARY KEY,
  Voornaam VARCHAR(255),
  Tussenvoegsel VARCHAR(255),
  Achternaam VARCHAR(255),
  Mobiel VARCHAR(20)
);


-- Voeg gegevens toe aan de tabellen

INSERT INTO Examen (id, studentid, rijschool, stad, rijbewijscategorie, datum, uitslag)
VALUES
  (1, 100234, 'VolGasVooruit', 'rotterdam', 'B', '2023-04-03', 'geslaagd'),
  (2, 123432, 'InZijnVierDoorDeBocht', 'Sliedrecht', 'C', '2023-03-01', 'geslaagd'),
  (3, 103234, 'LinksomRechtsom', 'Dordrecht', 'D', '2023-05-15', 'geslaagd'),
  (4, 106452, 'OpDeVluchtStrook', 'Zwijndrecht', 'AM', '2023-05-08', 'gezakt'),
  (5, 104546, 'RechtDoorEnGaan', 'Rotterdam', 'B', '2023-04-17', 'gezakt'),
  (6, 100333, 'AltijdDeslaagd', 'Dordrecht', 'B', '2023-05-12', 'geslaagd'),
  (7, 124444, 'RijlesVoorJou', 'Rotterdam', 'B', '2023-04-12', 'geslaagd');

INSERT INTO ExamenPerExaminator (id, Examenid, Examinatorid)
VALUES
  (1, 1, 3),
  (2, 3, 3),
  (3, 2, 2),
  (4, 4, 1),
  (5, 7, 3),
  (6, 6, 2),
  (7, 5, 4);

INSERT INTO Examinator (id, Voornaam, Tussenvoegsel, Achternaam, Mobiel)
VALUES
  (1, 'Manuel', 'van', 'Meekeren', '06-28493823'),
  (2, 'Lissette', 'den', 'Dongen', '06-24383299'),
  (3, 'Jurswailly', '', 'Luciano', '06-48293846'),
  (4, 'Naswha', '', 'Salawi', '06-34291219');
