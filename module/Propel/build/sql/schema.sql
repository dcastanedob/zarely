
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
    `cliente_amaterno` VARCHAR(45),
    `cliente_rfc` VARCHAR(45),
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
    PRIMARY KEY (`idmedida`)
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

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
