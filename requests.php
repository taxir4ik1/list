<?php
// Подключаем файл для соединения с СУБД MySQL
require_once( 'database.php' );
// Подключаем файл, в котором будем объявлять пользовательские функции
require_once( 'functions.php' );


if ( empty( $_POST ) ) {
	
	die( "Массив \$_POST пустой" );
	
}
elseif ( empty( $_POST[ 'request' ] ) ) {
	
	die( "Не передан запрос" );
	
}
else {
	

	$request = htmlspecialchars( trim( $_POST[ 'request' ] ) );
	

	unset( $_POST[ 'request' ] );
	
}


$response = NULL;

switch ( $request ) {
	case "getModels":
		
		$response = getModels( $_POST );
		
	break;
}

echo json_encode( $response );
?>