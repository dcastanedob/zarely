
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- cliente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente`
(
    `idcliente` INTEGER NOT NULL AUTO_INCREMENT,
    `cliente_nombre` VARCHAR(45) NOT NULL,
    `cliente_apaterno` VARCHAR(45) NOT NULL,
    `cliente_amaterno` VARCHAR(45) NOT NULL,
    `cliente_rfc` VARCHAR(45),
    `cliente_razonsocial` VARCHAR(45),
    `cliente_callefiscal` VARCHAR(45),
    `cliente_numerofiscal` VARCHAR(45),
    `cliente_interiorfiscal` VARCHAR(45),
    `cliente_coloniafiscal` VARCHAR(45),
    `cliente_ciudadfiscal` VARCHAR(45),
    `cliente_cpfiscal` VARCHAR(45),
    `cliente_estadofiscal` VARCHAR(45),
    `cliente_calle` VARCHAR(45),
    `cliente_numero` VARCHAR(45),
    `cliente_interior` VARCHAR(45),
    `cliente_colonia` VARCHAR(45),
    `cliente_cp` VARCHAR(45),
    `cliente_ciudad` VARCHAR(45),
    `cliente_estado` VARCHAR(45),
    `cliente_tipo` enum('mayorista','general') NOT NULL,
    `cliente_fecharegistro` DATE NOT NULL,
    `cliente_estatus` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- color
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `color`;

CREATE TABLE `color`
(
    `idcolor` INTEGER NOT NULL AUTO_INCREMENT,
    `color_nombre` TEXT NOT NULL,
    PRIMARY KEY (`idcolor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- compra
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra`
(
    `idcompra` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedor` INTEGER NOT NULL,
    `compra_fechacreacion` DATE NOT NULL,
    `compra_fechacompra` DATE NOT NULL,
    `compra_total` DECIMAL(10,5) NOT NULL,
    `compra_estatuspago` TINYINT(1) NOT NULL,
    `compra_estatus` enum('pendiente','enviada','procesando','en transito','recibido','revisado') NOT NULL,
    `compra_nota` VARCHAR(45),
    `compra_comprobante` VARCHAR(45),
    `compra_fechaentrega` DATE,
    PRIMARY KEY (`idcompra`),
    INDEX `idproveedor` (`compra_fechacreacion`),
    INDEX `idproveedor_compra_idx` (`idproveedor`),
    CONSTRAINT `idproveedor_compra`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- compradetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compradetalle`;

CREATE TABLE `compradetalle`
(
    `idcompradetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idcompra` INTEGER NOT NULL,
    `idproductovariante` INTEGER NOT NULL,
    `compradetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `compradetalle_preciounitario` DECIMAL(10,2) NOT NULL,
    `compradetalle_subtotal` DECIMAL(10,2) NOT NULL,
    `compradetalle_costo` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idcompradetalle`),
    INDEX `idcompra` (`idcompra`),
    INDEX `idproductovariante` (`idproductovariante`),
    CONSTRAINT `idcompra_compradetalle`
        FOREIGN KEY (`idcompra`)
        REFERENCES `compra` (`idcompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductovariante_compradetalle`
        FOREIGN KEY (`idproductovariante`)
        REFERENCES `productovariante` (`idproductovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- configuracion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion`
(
    `idconfiguracion` INTEGER NOT NULL AUTO_INCREMENT,
    `configuracion_` VARCHAR(45),
    PRIMARY KEY (`idconfiguracion`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cuentabancaria
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cuentabancaria`;

CREATE TABLE `cuentabancaria`
(
    `idcuentabancaria` INTEGER NOT NULL AUTO_INCREMENT,
    `cuentabancaria_banco` VARCHAR(255) NOT NULL,
    `cuentabancaria_cuenta` VARCHAR(45) NOT NULL,
    `cuentabancaria_saldo` DECIMAL(15,5) NOT NULL,
    PRIMARY KEY (`idcuentabancaria`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cuentabancariamovimiento
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cuentabancariamovimiento`;

CREATE TABLE `cuentabancariamovimiento`
(
    `idcuentabancariamovimiento` INTEGER NOT NULL AUTO_INCREMENT,
    `idcuentabancaria` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    `cuentabancariamovimiento_proceso` enum('compra','venta') NOT NULL,
    `idproceso` INTEGER NOT NULL,
    `cuentabancariamovimiento_cantidad` DECIMAL(10,2) NOT NULL,
    `cuentabancariamovimiento_comprobante` TEXT,
    `cuentabancariamovimiento_fechamovimiento` DATETIME NOT NULL,
    `cuentabancariamovimiento_fechacreacion` DATETIME NOT NULL,
    `cuentabancariamovimiento_balance` DECIMAL(10,2) NOT NULL,
    `cuentabancariamovimiento_referencia` VARCHAR(45),
    `cuentabancariamovimiento_medio` enum('cheque','efectivo','transferencia'),
    PRIMARY KEY (`idcuentabancariamovimiento`),
    INDEX `idcuentabancaria` (`idcuentabancaria`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idcuentabancaria_cuentabancariamovimiento`
        FOREIGN KEY (`idcuentabancaria`)
        REFERENCES `cuentabancaria` (`idcuentabancaria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_cuentabancariamovimiento`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- descuento
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `descuento`;

CREATE TABLE `descuento`
(
    `iddescuento` INTEGER NOT NULL AUTO_INCREMENT,
    `descuento_nombre` TEXT NOT NULL,
    `descuento_fechainicio` DATE NOT NULL,
    `descuento_fechafin` DATE NOT NULL,
    `descuento_estatus` TINYINT(1) NOT NULL,
    `descuento_tipo` enum('porcentaje','cantidad') NOT NULL,
    PRIMARY KEY (`iddescuento`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- descuentodetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `descuentodetalle`;

CREATE TABLE `descuentodetalle`
(
    `iddescuentodetalle` INTEGER NOT NULL,
    `iddescuento` INTEGER NOT NULL,
    `idproducto` INTEGER,
    `idmarca` INTEGER,
    PRIMARY KEY (`iddescuentodetalle`),
    INDEX `iddescuento` (`iddescuento`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idmarca` (`idmarca`),
    CONSTRAINT `iddescuento_descuentodetalle`
        FOREIGN KEY (`iddescuento`)
        REFERENCES `descuento` (`iddescuento`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmarca_descuentodetalle`
        FOREIGN KEY (`idmarca`)
        REFERENCES `marca` (`idmarca`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_descuentodetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- devolucion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `devolucion`;

CREATE TABLE `devolucion`
(
    `iddevolucion` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedor` INTEGER NOT NULL,
    `devolucion_fecha` DATE NOT NULL,
    `devolucion_total` DECIMAL(10,5) NOT NULL,
    `devolucion_estatus` enum('pendiente','completado') NOT NULL,
    `devolucion_nota` TEXT,
    `devolucion_comprobante` TEXT,
    PRIMARY KEY (`iddevolucion`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idproveedor_devolucion`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- devoluciondetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `devoluciondetalle`;

CREATE TABLE `devoluciondetalle`
(
    `iddevoluciondetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `iddevolucion` INTEGER NOT NULL,
    `idproductovariante` INTEGER NOT NULL,
    `devoluciondetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `devoluciondetalle_preciounitario` DECIMAL(10,2) NOT NULL,
    `devoluciondetalle_subtotal` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`iddevoluciondetalle`),
    INDEX `iddevolucion` (`iddevolucion`),
    INDEX `idproductovariante` (`idproductovariante`),
    CONSTRAINT `iddevolucion_devoluciondetalle`
        FOREIGN KEY (`iddevolucion`)
        REFERENCES `devolucion` (`iddevolucion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductovariante_devoluciondetalle`
        FOREIGN KEY (`idproductovariante`)
        REFERENCES `productovariante` (`idproductovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado`
(
    `idempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `empleado_nombre` VARCHAR(45) NOT NULL,
    `empleado_apaterno` VARCHAR(45) NOT NULL,
    `empleado_amaterno` VARCHAR(45) NOT NULL,
    `empleado_rfc` VARCHAR(45),
    `empleado_nss` VARCHAR(45),
    `empleado_curp` VARCHAR(45),
    `empleado_telefono` VARCHAR(45),
    `empleado_email` VARCHAR(45),
    `empleado_estatus` TINYINT(1) NOT NULL,
    `empleado_username` VARCHAR(45) NOT NULL,
    `empleado_password` VARCHAR(45) NOT NULL,
    `empleado_comision` TINYINT(1) NOT NULL,
    `empleado_fechaentrada` DATETIME NOT NULL,
    `empleado_fechanacimiento` DATE NOT NULL,
    `empleado_calle` VARCHAR(45),
    `empleado_numexterno` VARCHAR(45),
    `empleado_numinterno` VARCHAR(45),
    `empleado_colonia` VARCHAR(45),
    `empleado_codigopostal` VARCHAR(45),
    `empleado_ciudad` VARCHAR(45),
    `empleado_estado` VARCHAR(45),
    `idrol` INTEGER,
    PRIMARY KEY (`idempleado`),
    INDEX `idrol` (`idrol`),
    CONSTRAINT `idrol_empleado`
        FOREIGN KEY (`idrol`)
        REFERENCES `rol` (`idrol`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- gasto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `gasto`;

CREATE TABLE `gasto`
(
    `idgasto` INTEGER NOT NULL AUTO_INCREMENT,
    `gasto_nombre` VARCHAR(100) NOT NULL,
    `gasto_descripcion` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idgasto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- marca
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `marca`;

CREATE TABLE `marca`
(
    `idmarca` INTEGER NOT NULL AUTO_INCREMENT,
    `marca_nombre` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- marcatallaje
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `marcatallaje`;

CREATE TABLE `marcatallaje`
(
    `idmarcatallaje` INTEGER NOT NULL AUTO_INCREMENT,
    `idmarca` INTEGER NOT NULL,
    `idtallaje` INTEGER NOT NULL,
    PRIMARY KEY (`idmarcatallaje`),
    INDEX `idmarca` (`idmarca`),
    INDEX `idtallaje` (`idtallaje`),
    CONSTRAINT `idmarca_marcatallaje`
        FOREIGN KEY (`idmarca`)
        REFERENCES `marca` (`idmarca`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtallaje_marcatallaje`
        FOREIGN KEY (`idtallaje`)
        REFERENCES `tallaje` (`idtallaje`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- material
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `material`;

CREATE TABLE `material`
(
    `idmaterial` INTEGER NOT NULL AUTO_INCREMENT,
    `material_nombre` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idmaterial`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- medida
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `medida`;

CREATE TABLE `medida`
(
    `idmedida` INTEGER NOT NULL AUTO_INCREMENT,
    `medida_nombre` VARCHAR(45),
    `medida_xs` TINYINT(1),
    `medida_s` TINYINT(1),
    `medida_m` TINYINT(1),
    `medida_l` TINYINT(1),
    `medida_xl` TINYINT(1),
    `medida_xxl` TINYINT(1),
    `medida_unitalla` TINYINT(1),
    `medidasrango` VARCHAR(45),
    PRIMARY KEY (`idmedida`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pedido
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `pedido`;

CREATE TABLE `pedido`
(
    `idpedido` INTEGER NOT NULL AUTO_INCREMENT,
    `idsucursal` INTEGER NOT NULL,
    `pedido_fecha` DATE NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `pedido_cantidad` INTEGER NOT NULL,
    `idproductovariante` INTEGER NOT NULL,
    `pedido_nota` TEXT,
    `pedido_estatus` enum('pendiente','solicitado','transito','completado') DEFAULT 'pendiente' NOT NULL,
    PRIMARY KEY (`idpedido`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idproductovariante` (`idproductovariante`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idproducto_pedido`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductovariante_pedido`
        FOREIGN KEY (`idproductovariante`)
        REFERENCES `productovariante` (`idproductovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_pedido`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pedidomayorista
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `pedidomayorista`;

CREATE TABLE `pedidomayorista`
(
    `idpedidomayorista` INTEGER NOT NULL AUTO_INCREMENT,
    `idcliente` INTEGER NOT NULL,
    `pedidomayorista_fechasolicitud` DATE NOT NULL,
    `pedidomayorista_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL,
    `pedidomayorista_fechaentrega` DATE NOT NULL,
    `pedidomayorista_nota` TEXT,
    PRIMARY KEY (`idpedidomayorista`),
    INDEX `idcliente` (`idcliente`),
    CONSTRAINT `idcliente_pedidomayorista`
        FOREIGN KEY (`idcliente`)
        REFERENCES `cliente` (`idcliente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pedidomayoristadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `pedidomayoristadetalle`;

CREATE TABLE `pedidomayoristadetalle`
(
    `idpedidomayoristadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idpedidomayorista` INTEGER NOT NULL,
    `idproductovariante` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `pedidomayoristadetalle_cantidad` INTEGER NOT NULL,
    `pedidomayoristadetalle_estatus` enum('pendiente','solicitado','transito','completado','cancelado') NOT NULL,
    `pedidomayoristadetalle_fecha` DATE NOT NULL,
    PRIMARY KEY (`idpedidomayoristadetalle`),
    INDEX `idpedidomayorista` (`idpedidomayorista`),
    INDEX `idproducto_pedidomayoristadetalle_idx` (`idproducto`),
    INDEX `idproductovariante_pedidomayoristadetalle_idx` (`idproductovariante`),
    CONSTRAINT `idpedidomayorista_pedidomayoristadetalle`
        FOREIGN KEY (`idpedidomayorista`)
        REFERENCES `pedidomayorista` (`idpedidomayorista`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_pedidomayoristadetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductovariante_pedidomayoristadetalle`
        FOREIGN KEY (`idproductovariante`)
        REFERENCES `productovariante` (`idproductovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- producto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto`
(
    `idproducto` INTEGER NOT NULL AUTO_INCREMENT,
    `producto_modelo` VARCHAR(100) NOT NULL,
    `idmarca` INTEGER NOT NULL,
    `idtemporada` INTEGER NOT NULL,
    `producto_comisionable` TINYINT NOT NULL,
    `idproveedor` INTEGER NOT NULL,
    `producto_dirigidoa` enum('dama','caballero','nino','nina','jovenes') NOT NULL,
    `producto_precioventa` DECIMAL(15,5) NOT NULL,
    `producto_preciomayoreo` DECIMAL(15,5) NOT NULL,
    `producto_minimo` INTEGER NOT NULL,
    `producto_reorden` INTEGER NOT NULL,
    `producto_maximo` INTEGER,
    `idtipocalzado` INTEGER NOT NULL,
    `producto_descripcion` VARCHAR(500),
    `producto_costo` DECIMAL(10,5) NOT NULL,
    PRIMARY KEY (`idproducto`),
    INDEX `idmarca` (`idmarca`),
    INDEX `idtemporada` (`idtemporada`),
    INDEX `idproveedor` (`idproveedor`),
    INDEX `idtipocalzado` (`idtipocalzado`),
    CONSTRAINT `idmarca_producto`
        FOREIGN KEY (`idmarca`)
        REFERENCES `marca` (`idmarca`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_producto`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtemporada_producto`
        FOREIGN KEY (`idtemporada`)
        REFERENCES `temporada` (`idtemporada`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtipocalzado_producto`
        FOREIGN KEY (`idtipocalzado`)
        REFERENCES `tipocalzado` (`idtipocalzado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productocolor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productocolor`;

CREATE TABLE `productocolor`
(
    `idproductocolor` INTEGER NOT NULL AUTO_INCREMENT,
    `idproducto` INTEGER NOT NULL,
    `idcolor` INTEGER NOT NULL,
    `productocolor_foto` TEXT,
    PRIMARY KEY (`idproductocolor`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idcolor` (`idcolor`),
    CONSTRAINT `idcolor_productocolor`
        FOREIGN KEY (`idcolor`)
        REFERENCES `color` (`idcolor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_productocolor`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productomaterial
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productomaterial`;

CREATE TABLE `productomaterial`
(
    `idproductomaterial` INTEGER NOT NULL AUTO_INCREMENT,
    `idproducto` INTEGER NOT NULL,
    `idmaterial` INTEGER NOT NULL,
    PRIMARY KEY (`idproductomaterial`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idmaterial` (`idmaterial`),
    CONSTRAINT `idmaterial_productomaterial`
        FOREIGN KEY (`idmaterial`)
        REFERENCES `material` (`idmaterial`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_productomaterial`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productomedida
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productomedida`;

CREATE TABLE `productomedida`
(
    `idproductomedida` INTEGER NOT NULL AUTO_INCREMENT,
    `idproducto` INTEGER NOT NULL,
    `idmedida` INTEGER NOT NULL,
    PRIMARY KEY (`idproductomedida`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idmedida` (`idmedida`),
    CONSTRAINT `idmedida_productomedida`
        FOREIGN KEY (`idmedida`)
        REFERENCES `medida` (`idmedida`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_productomedida`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productosucursal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productosucursal`;

CREATE TABLE `productosucursal`
(
    `idproductosucursal` INTEGER NOT NULL AUTO_INCREMENT,
    `idproductovariante` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `productosucursal_existencia` INTEGER DEFAULT 0 NOT NULL,
    `productosucursal_minimo` INTEGER NOT NULL,
    `productosucursal_reorden` INTEGER NOT NULL,
    `productosucursal_precioventa` DECIMAL(10,5) NOT NULL,
    `productosucursal_preciomayoreo` DECIMAL(10,5) NOT NULL,
    `productosucursal_estatus` TINYINT(1) DEFAULT 1 NOT NULL,
    `productosucursal_costo` DECIMAL(10,5) NOT NULL,
    PRIMARY KEY (`idproductosucursal`),
    INDEX `idproductovariante` (`idproductovariante`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idproductovariante_productosucursal`
        FOREIGN KEY (`idproductovariante`)
        REFERENCES `productovariante` (`idproductovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_productosucursal`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productotallaje
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productotallaje`;

CREATE TABLE `productotallaje`
(
    `idproductotallaje` INTEGER NOT NULL AUTO_INCREMENT,
    `idproducto` INTEGER NOT NULL,
    `idtallaje` INTEGER NOT NULL,
    PRIMARY KEY (`idproductotallaje`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idtallaje` (`idtallaje`),
    CONSTRAINT `idproducto_productotallaje`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtallaje_productotallaje`
        FOREIGN KEY (`idtallaje`)
        REFERENCES `tallaje` (`idtallaje`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productovariante
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productovariante`;

CREATE TABLE `productovariante`
(
    `idproductovariante` INTEGER NOT NULL AUTO_INCREMENT,
    `idproducto` INTEGER NOT NULL,
    `idproductocolor` INTEGER NOT NULL,
    `idproductomaterial` INTEGER NOT NULL,
    `productovariante_codigobarras` VARCHAR(45),
    `productovariante_talla` VARCHAR(45) NOT NULL,
    `productovariante_tallatipo` enum('medida','numero','ninguno'),
    `productovariante_estatus` TINYINT(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (`idproductovariante`),
    INDEX `idproductocolor` (`idproductocolor`),
    INDEX `idproductomaterial` (`idproductomaterial`),
    INDEX `idproducto_productovariante_idx` (`idproducto`),
    CONSTRAINT `idproducto_productovariante`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductocolor_productovariante`
        FOREIGN KEY (`idproductocolor`)
        REFERENCES `productocolor` (`idproductocolor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductomaterial_productomaterial`
        FOREIGN KEY (`idproductomaterial`)
        REFERENCES `productomaterial` (`idproductomaterial`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- promocion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `promocion`;

CREATE TABLE `promocion`
(
    `idpromocion` INTEGER NOT NULL AUTO_INCREMENT,
    `promocion_nombre` TEXT NOT NULL,
    `promocion_fechainicio` DATE NOT NULL,
    `promocion_fechafin` DATE NOT NULL,
    `promocion_estatus` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idpromocion`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- promociondetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `promociondetalle`;

CREATE TABLE `promociondetalle`
(
    `idpromociondetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idpromocion` INTEGER NOT NULL,
    `idmarcaoperando` INTEGER NOT NULL,
    `idproductooperando` INTEGER NOT NULL,
    `promociondetalle_cantidadoperando` DECIMAL(10,2) NOT NULL,
    `idmarcaresultado` INTEGER NOT NULL,
    `idproductoresultado` INTEGER NOT NULL,
    `promociondetalle_cantidadresultado` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idpromociondetalle`),
    INDEX `idpromocion` (`idpromocion`),
    INDEX `idmarcaoperando` (`idmarcaoperando`),
    INDEX `idproductooperando` (`idproductooperando`),
    INDEX `idmarcaresultado` (`idmarcaresultado`),
    INDEX `idproductoresultado` (`idproductoresultado`),
    CONSTRAINT `idmarcaoperando_promociondetalle`
        FOREIGN KEY (`idmarcaoperando`)
        REFERENCES `marca` (`idmarca`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmarcaresultado_promociondetalle`
        FOREIGN KEY (`idmarcaresultado`)
        REFERENCES `marca` (`idmarca`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductooperando_promociondetalle`
        FOREIGN KEY (`idproductooperando`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductoresultado_promociondetalle`
        FOREIGN KEY (`idproductoresultado`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpromocion_promociondetalle`
        FOREIGN KEY (`idpromocion`)
        REFERENCES `promocion` (`idpromocion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor`
(
    `idproveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedor_nombrecomercial` VARCHAR(45),
    `proveedor_telefono` VARCHAR(45),
    `proveedor_celular` VARCHAR(45),
    `proveedor_fechainicio` DATE,
    `proveedor_email` VARCHAR(45),
    PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedormarca
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedormarca`;

CREATE TABLE `proveedormarca`
(
    `idproveedormarca` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedor` INTEGER NOT NULL,
    `idmarca` INTEGER NOT NULL,
    PRIMARY KEY (`idproveedormarca`),
    INDEX `idproveedor` (`idproveedor`),
    INDEX `idmarca` (`idmarca`),
    CONSTRAINT `idmarca_proveedormarca`
        FOREIGN KEY (`idmarca`)
        REFERENCES `marca` (`idmarca`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_proveedormarca`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rol
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol`
(
    `idrol` INTEGER NOT NULL AUTO_INCREMENT,
    `rol_nombre` VARCHAR(45) NOT NULL,
    `rol_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idrol`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sucursal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sucursal`;

CREATE TABLE `sucursal`
(
    `idsucursal` INTEGER NOT NULL AUTO_INCREMENT,
    `sucursal_nombrecomercial` VARCHAR(255) NOT NULL,
    `sucursal_razonsocial` VARCHAR(255) NOT NULL,
    `sucursal_calle` VARCHAR(45),
    `sucursal_numexterno` VARCHAR(45),
    `sucursal_numinterior` VARCHAR(45),
    `sucursal_colonia` VARCHAR(45),
    `sucursal_codigopostal` VARCHAR(45),
    `sucursal_ciudad` VARCHAR(45),
    `sucursal_estado` VARCHAR(45),
    PRIMARY KEY (`idsucursal`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sucursalempleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sucursalempleado`;

CREATE TABLE `sucursalempleado`
(
    `idsucursalempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `idsucursal` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    `sucursalempleado_estatus` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idsucursalempleado`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idempleado_sucursalempleado`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_sucursalempleado`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tallaje
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tallaje`;

CREATE TABLE `tallaje`
(
    `idtallaje` INTEGER NOT NULL AUTO_INCREMENT,
    `tallaje_nombre` VARCHAR(45) NOT NULL,
    `talla_70` TINYINT(1),
    `talla_75` TINYINT(1),
    `talla_80` TINYINT(1),
    `talla_85` TINYINT(1),
    `talla_90` TINYINT(1),
    `talla_95` TINYINT(1),
    `talla_100` TINYINT(1),
    `talla_105` TINYINT(1),
    `talla_110` TINYINT(1),
    `talla_115` TINYINT(1),
    `talla_120` TINYINT(1),
    `talla_125` TINYINT(1),
    `talla_130` TINYINT(1),
    `talla_135` TINYINT(1),
    `talla_140` TINYINT(1),
    `talla_145` TINYINT(1),
    `talla_150` TINYINT(1),
    `talla_155` TINYINT(1),
    `talla_160` TINYINT(1),
    `talla_165` TINYINT(1),
    `talla_170` TINYINT(1),
    `talla_175` TINYINT(1),
    `talla_180` TINYINT(1),
    `talla_185` TINYINT(1),
    `talla_190` TINYINT(1),
    `talla_195` TINYINT(1),
    `talla_200` TINYINT(1),
    `talla_205` TINYINT(1),
    `talla_210` TINYINT(1),
    `talla_215` TINYINT(1),
    `talla_220` TINYINT(1),
    `talla_225` TINYINT(1),
    `talla_230` TINYINT(1),
    `talla_235` TINYINT(1),
    `talla_240` TINYINT(1),
    `talla_245` TINYINT(1),
    `talla_250` TINYINT(1),
    `talla_255` TINYINT(1),
    `talla_260` TINYINT(1),
    `talla_265` TINYINT(1),
    `talla_270` TINYINT(1),
    `talla_275` TINYINT(1),
    `talla_280` TINYINT(1),
    `talla_285` TINYINT(1),
    `talla_290` TINYINT(1),
    `talla_295` TINYINT(1),
    `talla_300` TINYINT(1),
    `talla_305` TINYINT(1),
    `talla_310` TINYINT(1),
    `talla_315` TINYINT(1),
    `talla_320` TINYINT(1),
    `talla_325` TINYINT(1),
    `talla_330` TINYINT(1),
    `talla_335` TINYINT(1),
    `talla_340` TINYINT(1),
    `talla_345` TINYINT(1),
    `talla_350` TINYINT(1),
    `tallajerango` VARCHAR(45),
    PRIMARY KEY (`idtallaje`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- temporada
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `temporada`;

CREATE TABLE `temporada`
(
    `idtemporada` INTEGER NOT NULL AUTO_INCREMENT,
    `temporada_nombre` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`idtemporada`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tipocalzado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tipocalzado`;

CREATE TABLE `tipocalzado`
(
    `idtipocalzado` INTEGER NOT NULL AUTO_INCREMENT,
    `tipocalzado_nombre` VARCHAR(45) NOT NULL,
    `tipocalzado_descripcion` TEXT,
    PRIMARY KEY (`idtipocalzado`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- transferencia
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `transferencia`;

CREATE TABLE `transferencia`
(
    `idtransferencia` INTEGER NOT NULL AUTO_INCREMENT,
    `idsucursalorigen` INTEGER NOT NULL,
    `idsucursaldestino` INTEGER NOT NULL,
    `transferencia_fecha` DATETIME NOT NULL,
    `transferencia_estatus` enum('creada','aceptada','rechazada') NOT NULL,
    `idempleadocreador` INTEGER NOT NULL,
    `idempleadoreceptor` INTEGER,
    `transferencia_nota` VARCHAR(45),
    `transferencia_fecharecepcion` DATETIME,
    PRIMARY KEY (`idtransferencia`),
    INDEX `idsucursalorigen` (`idsucursalorigen`),
    INDEX `idsucursaldestino` (`idsucursaldestino`),
    INDEX `idempleadocreador` (`idempleadocreador`),
    INDEX `idempleadoreceptor` (`idempleadoreceptor`),
    CONSTRAINT `idempleadocreador_transferencia`
        FOREIGN KEY (`idempleadocreador`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleadoreceptor_transferencia`
        FOREIGN KEY (`idempleadoreceptor`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursaldestino_transferencia`
        FOREIGN KEY (`idsucursaldestino`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursalorigen_transferencia`
        FOREIGN KEY (`idsucursalorigen`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- transferenciadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `transferenciadetalle`;

CREATE TABLE `transferenciadetalle`
(
    `idtransferenciadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idtransferencia` INTEGER NOT NULL,
    `idproductovariante` INTEGER NOT NULL,
    `transferenciadetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `transferenciadetalle_preciounitario` DECIMAL(10,2) NOT NULL,
    `transferenciadetalle_subtotal` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idtransferenciadetalle`),
    INDEX `idtransferencia` (`idtransferencia`),
    INDEX `idproductovariante` (`idproductovariante`),
    CONSTRAINT `idproductovariante_transferenciadetalle`
        FOREIGN KEY (`idproductovariante`)
        REFERENCES `productovariante` (`idproductovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtransferencia_transferenciadetalle`
        FOREIGN KEY (`idtransferencia`)
        REFERENCES `transferencia` (`idtransferencia`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
