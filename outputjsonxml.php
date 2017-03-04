<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$host = '127.0.0.1';
$user = 'root';
$pass = 'rootroot';
$db = 'top_karyawan';

// 1. Create a database connection
$con = mysqli_connect($host,$user,$pass);
if (!$con) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($con, $db);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

$login = mysqli_query($con, "select * from karyawan");
			//var_dump($login); exit;
			$ketemu = mysqli_num_rows($login);
			$tampil = mysqli_fetch_array($login);
			//ada user
	
			if (isset($login->num_rows) && $login->num_rows > 0){
				session_start();
				// echo $tampil['kd_karyawan'];
				// echo $tampil['nm_karyawan'];
				// echo $tampil['alamat'];
				// echo $tampil['telepon'];
				// echo $tampil['username'];
				// echo $tampil['password'];
				// echo $tampil['level'];
				// echo "<br>";
				// $karyawan = array(
				// 'kd_karyawan' => $tampil['kd_karyawan'], 
				// 'nm_karyawan' => $tampil['nm_karyawan'], 
				// 'alamat' => $tampil['alamat'], 
				// 'telepon' => $tampil['telepon'], 
				// 'username' => $tampil['username']);

// echo json_encode($karyawan);


	header('Content-Type: application/xml');
      // $output = "<root><name>sample_name</name></root>";
      // print ($output);
	  
	  $string = <<<XML
<a>
 <b>
  <c>text</c>
  <c>stuff</c>
 </b>
 <d>
  <c>code</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

echo $xml->asXML();
			
			
				
			}
?>
