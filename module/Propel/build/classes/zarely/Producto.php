<?php



/**
 * Skeleton subclass for representing a row from the 'producto' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.zarely
 */
class Producto extends BaseProducto
{
	public function generarCodigoDeBarras()
	{
		$productos_variantes = $this->getProductovariantes();
		foreach ($productos_variantes as $variante) {
			$producto = $variante->getProducto();
            $color = $variante->getProductocolor();
            $color = $color->getColor();
            $material = $variante->getProductomaterial();
            $material = $material->getMaterial();
            $tallaje = $variante->getProductovarianteTalla();

            $information =$producto->getProductoModelo() .'-' . $material->getMaterialNombre() .''  . $color->getColorNombre(). '-' . $tallaje;

            $variante->setProductovarianteCodigobarras($information);
            $variante->save();
		}

	}
}
