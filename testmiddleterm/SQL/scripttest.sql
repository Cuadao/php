use Camilo200399644;
CREATE TABLE networks (
networkId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
networkName VARCHAR(50) NOT NULL);

use Camilo200399644;
INSERT INTO networks (networkName) VALUES  ('AMC'), ('FX'), ('HBO'), ('Showtime');

select * from Camilo200399644.networks;

