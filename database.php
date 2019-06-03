<?

function connect() {
	$db_host = 'localhost';					// Сервер
	$db_user = 'root';						// Имя пользователя
	$db_password = '';						// Пароль пользователя
	$db_name = 'list';						// Имя базы данных
	
	// Подключаемся к серверу
	$conn = mysql_connect($db_host, $db_user, $db_password) or die("<p>Невозможно подключиться к СУБД: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
	
	
	$db = mysql_select_db($db_name, $conn) or die("<p>Невозможно подключиться к базе данных: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
	
	
	$query = mysql_query("set names utf8", $conn) or die("<p>Невозможно выполнить запрос к базе данных: " . mysql_error() . ". Ошибка произошла в строке " . __LINE__ . "</p>");
}
?>