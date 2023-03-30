# CashTransfer
Webpage made with the objetive that create a connection with the MySQL DB.

## DB SQL Script
```(sql)
create database cajero;
use cajero;

CREATE TABLE usuarios(
	idusuario INT PRIMARY KEY auto_increment,
    nombre VARCHAR(100),
    saldo double,
    tipo_cuenta boolean
);
```

## SQL Users Script
```
INSERT INTO usuarios (nombre, saldo, tipo_cuenta) VALUES (kevin, 100000, 0);
INSERT INTO usuarios (nombre, saldo, tipo_cuenta) VALUES (juanito, 5000, 1);
```
