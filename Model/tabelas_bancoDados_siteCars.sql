CREATE TABLE dadosCarros
(
  dadosId INT NOT null  PRIMARY KEY AUTO_INCREMENT,
  dadosNome VARCHAR (50) NOT null,
  dadosCategoria VARCHAR (50) NOT null,
  dadosMarca VARCHAR (50) NOT null,
  dadosResumo VARCHAR (400) NOT null,
  dadosValor FLOAT (8,2) DEFAUlT 0
);

SELECT * FROM dadosCarros ORDER BY dadosId ASC LIMIT 10;
SELECT * FROM dadosCarros ORDER BY dadosId DESC LIMIT 1;

SELECT * FROM dadosCarros ORDER BY dadosId DESC LIMIT 1;

SELECT COUNT(dadosId) FROM dadosCarros

23/10

echo ceil(2.3);

1|2|3


CREATE TABLE imgCarros
(
  imgId INT NOT null PRIMARY KEY AUTO_INCREMENT,
  idDadosCarros INT NOT null,
  imgCaminho VARCHAR (400) NOT null,
  FOREIGN KEY(idDadosCarros) REFERENCES dadosCarros(dadosId)
);


INSERT INTO dadosCarros (dadosNome, dadosMarca, dadosResumo, dadosCategoria, dadosValor) 
VALUES('Onix', 'GM', '33333333333333333', 'Hatch pequeno', '35000.00'),
('Prisma', 'GM', '444444444444444444444', 'Hatch pequeno', '45000.00'),
('Fiesta', 'Ford', '5555555555555555555', 'Hatch pequeno', '45000.00'),
('Hilux', 'Toyota', '666666666666666666', 'Picape', '80000.00');


INSERT INTO imgCarros (idDadosCarros, imgCaminho) 
VALUES('3', '33333333333333333'),
('4', '444444444444444444444'),
('5', 'Ford', '5555555555555555555'),
('6', 'Toyota', '666666666666666666', 'Picape', '80000.00');