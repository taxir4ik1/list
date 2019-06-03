<?php
require_once( 'database.php' );
require_once( 'functions.php' );
?>

<!DOCTYPE html>
<html>
<head>
	<title>Выбор марки и модели автомобиля</title>

	<script src="//libs.raltek.ru/libs/jquery/1.8.3/js/jquery-1.8.3.js"></script>
	
	<link href="style.css" rel="stylesheet" type="text/css" />

	<script src="scripts.js"></script>
</head>
<body>

	<div id="car_producers_wrapper">
		
		<form name="car_producers" id="car_producers" >
			<div class="row">
		
				<label for="producer">Производитель автомобилей:</label>
				<select id="producer">
					<option value="0">Выберите из списка</option>
					<?php					
					
					$aProducers = getProducers();
					
					
					foreach ( $aProducers as $aProducer ) {
						print '<option value="' . $aProducer[ 'id' ] . '">' . $aProducer[ 'producer' ] . '</option>';	
					}
					?>
				</select>
			</div>
			
			<div class="row">
				<label for="model">Марка автомобиля:</label>
				<select id="model" disabled >
					<option value="0">Выберите из списка</option>
				</select>
			</div>
			
		</form>
	</div>
</body>
</html>