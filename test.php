<html>
<body>

<?php
$host_name = 'db775091168.hosting-data.io';
$database = 'db775091168';
$user_name = 'dbo775091168';
$password = 'FtgTfR567Hg51';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
} else {
    echo '<p>Connection to MySQL server successfully established.</p >';
}
?>

	<?php
	//phpinfo();
	/*	$host_name = 'db775091168.hosting-data.io';
		$database = 'db775091168';
		$user_name = 'dbo775091168';
		$password = 'FtgTfR567Hg51';
		
		if($link = mysqli_connect($host_name, $user_name, $password, $database)){
			echo "Database found";
		} else {
			echo "Could not find. ".mysqli_connect_error() . PHP_EOL;	
		}	
*/


	?>

</body>
</html>