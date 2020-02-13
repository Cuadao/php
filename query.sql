use php;
CREATE TABLE `php`.`user_register` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `telephone` VARCHAR(50) NOT NULL,
  `gender` VARCHAR(50) NOT NULL,
  `country` VARCHAR(50) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `address` VARCHAR(100) NULL,
  PRIMARY KEY (`iduser`));
  
  select * from php.user_register;