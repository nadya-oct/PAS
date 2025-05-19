<?php
include 'connect.php';
$id = $_GET['id'];

$query = "DELETE FROM tb_dataakun WHERE id = $id";
$result = mysqli_query($connect, $query);
if ($result) {
    echo "Data berhasil dihapus";
    header("Location: lihatdata.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($connect);
}
?>