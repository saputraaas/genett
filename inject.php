$unsafe_variable = $_POST['user_input']; 

mysql_query("INSERT INTO `table` (`column`) VALUES ('$unsafe_variable')");
