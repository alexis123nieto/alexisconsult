    <?php
      $db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $db_name = "wpjkyorbuofp9ov9";
     $db_user = "poa9o3zufh96lr39";
     $db_password = "gz0zsymvbcrt7sia";
    
     $connection = mysqli_connect($db_host,$db_name, $db_password) or die("Connection Error: " . mysql_error());
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

    $sql_query = "SELECT * FROM  tbVentas";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
