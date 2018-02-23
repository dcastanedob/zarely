<?php



/**
 * Skeleton subclass for representing a row from the 'notificacion' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.zarely
 */
class Notificacion extends BaseNotificacion
{
	public static function getNotifications($idSucursal)
	{
		if ( $idSucursal == null)
		{
			return \NotificacionQuery::create()->filterByNotificacionAplicada(false);
		}else{
			return \NotificacionQuery::create()->filterByNotificacionAplicada(false)->filterByIdsucursal($idSucursal);
		}
		
		
	}

}
