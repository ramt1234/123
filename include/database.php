<?php
  $conn = pg_connect("host=gnomo.fe.up.pt dbname=sibd1402 user=sibd1402 password=Leonor1991");
  if (!$conn) {
    echo "An error occured.\n";
    exit;
  }
  
  $query = "set search_path to \"SIBD_DB\";";
	$result = pg_exec($conn, $query);
  
?>