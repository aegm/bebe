INSERT INTO `fashion`.`lineas` (`CodigoLineas`, `CodigoEmpresa`, `Descripcion`) VALUES ('1', '003', 'GENERAL');

INSERT INTO `fashion`.`unidades` (`CodigoUnidad`, `CodigoEmpresa`, `descripcion`) VALUES ('PZA', '003', 'UNIDADES MANEJADAS POR PIEZAS');

INSERT INTO `fashion`.`proveedores` (`CodigoProv`, `CodigoEmpresa`, `Nombre`, `Direccion`, `Rfc`, `Ciudad`, `Estado`, `Cp`, `Fecha`, `Fax`, `Telefono`, `Contac1Nombre`, `Contac1Correo`, `Contac1Tel`, `Contac1Cel`) VALUES ('1', '003', 'ALMACEN PRINCIPAL', NULL, NULL, NULL, NULL, NULL, '2014-07-09', NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `fashion`.`monedas` (`CodigoMonedas`, `CodigoEmpresa`, `Descripcion`, `Equivalencia`, `Simbolo`, `Abreviatura`) VALUES ('1', '003', 'PESOS', '1.00', '$', 'M.N.');

INSERT INTO `fashion`.`impuestos` (`CodigoImpuestos`, `CodigoEmpresa`, `Descripcion`, `Porcentaje`) VALUES ('2', '003', 'IVA 15%', '15.00');


INSERT INTO `fashion`.`marcas` (`CodigoMarca`, `Descripcion`, `CodigoEmpresa`) VALUES ('1', 'S/M', '003');

