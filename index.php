<?php 

$servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_tablename = "logistik";

$conn = new mysqli($servername, $db_username, $db_password, $db_tablename);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$input_data = json_decode($_POST["data"]);
var_dump($input_data);
echo $input_data->serviceID;

$service_id = $input_data->serviceID;

switch ($service_id) {
	case 1:
		$nama = $input_data->nama;
		$bulan = $input_data->bulan;
		$tahun = $input_data->tahun;
		$sql = "INSERT INTO project (Nama,Bulan,Tahun) VALUES ('$nama', '$bulan', '$tahun')";
		mysqli_query($conn, $sql);
		break;
	case 2:
		$id_project = $input_data->id_project;
		$id_barang = $input_data->id_barang;
		$qty = $input_data->qty;
		$sql = "INSERT INTO project_barang (ID_Project,ID_Barang,Qty) VALUES ('$id_project', '$id_barang', '$qty')";
		mysqli_query($conn, $sql);
		break;
	case 3:
		$id_project_barang = $input_data->id_project_barang;
		$current_qty = $input_data->current_qty;
		$sql = "UPDATE project_barang SET CurrentQty = '$current_qty' WHERE ID = '$id_project_barang'";
		mysqli_query($conn, $sql);
		break;
	case 4:
		$sql = "SELECT * FROM project";
		$sth = mysqli_query($conn, $sql);
		$rows = array();
		while ($r = mysqli_fetch_assoc($sth)){
			$rows[] = $r;
		}
		echo json_encode($rows);
	case 5:
		$id_project = $input_data->id_project;
		$sql = "SELECT * FROM project JOIN project_barang ON project.id_project = project_barang.id_project JOIN barang ON project_barang.id_barang  = barang.id_barang 
				WHERE project.id_project = '$id_project'";
		$sth = mysqli_query($conn, $sql);
		$rows = array();
		while ($r = mysqli_fetch_assoc($sth)){
			$rows[] = $r;
		}
		echo json_encode($rows);
			
	default:
		echo "~";
		break;

}




/*

  
$nama = "Perbaikan Kamar Mandi";
$bulan = 3;
$tahun = 2017;
$id_project = 1;
$id_barang = 2;
$id_project_barang = 1;
$current_qty = 5;
$qty = 10;

$sql = "INSERT INTO project (Nama,Bulan,Tahun) VALUES ('$nama', '$bulan', '$tahun')";
mysqli_query($conn, $sql);
$sql = "INSERT INTO project_barang (ID_Project,ID_Barang,Qty) VALUES ('$id_project', '$id_barang', '$qty')";
mysqli_query($conn, $sql);
$sql = "UPDATE project_barang SET CurrentQty = '$current_qty' WHERE ID = '$id_project_barang'";
mysqli_query($conn, $sql);


$sql = "SELECT * FROM project";
$sth = mysqli_query($conn, $sql);
$rows = array();
while ($r = mysqli_fetch_assoc($sth)){
	$rows[] = $r;
}
echo json_encode($rows);

echo "<br>";


$sql = "SELECT * FROM project JOIN project_barang ON project.id_project = project_barang.id_project JOIN barang ON project_barang.id_barang  = barang.id_barang 
WHERE project.id_project = '$id_project'";
$sth = mysqli_query($conn, $sql);
$rows = array();
while ($r = mysqli_fetch_assoc($sth)){
	$rows[] = $r;
}
echo json_encode($rows);

*/



?>