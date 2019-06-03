<?php
/**
 *  Функция для получения перечня производителей автомобилей
 */
function getProducers() {
	

	connect();
	
	
	$sql = "SELECT * FROM `producers` ORDER BY `producer`";
	
	
	$query = mysql_query( $sql ) or die ( mysql_error() );

	$array = array();
	

	$i = 0;
	
	while ( $row = mysql_fetch_assoc( $query ) ) {
		
		$array[ $i ][ 'id' ] = $row[ 'id' ];				
		$array[ $i ][ 'producer' ] = $row[ 'producer' ];	
		
	
		$i++;
		
	}
	
	
	return $array;
	
}


function getModels( array $array ) {
	
	
	$sProducerId = htmlspecialchars( trim ( $array[ 'producer_id' ] ) );
	
	connect();
	
	$sql = "SELECT `id`, `model` FROM `models` WHERE `producer_id` = '" . $sProducerId . "' ORDER BY `model`";
	
	$query = mysql_query( $sql ) or die ( mysql_error() );
	
	$array = array();
	
	$i = 0;
	
	while ( $row = mysql_fetch_assoc( $query ) ) {
		
		$array[ $i ][ 'id' ] = $row[ 'id' ];		
		$array[ $i ][ 'model' ] = $row[ 'model' ];
		$i++;
		
	}

	return $array;
	
}
?>