<?php


include "koneksi.php";

$id = $_GET["id"];
$sql = "DELETE FROM tugas WHERE iduser =$id";

if ($koneksi->query($sql) === true) {
    echo "<script> window.alert('data dihapus'); document.locaition.href = 'index.php' </script>; ";
    echo mysqli_error($koneksi);
} else {
    "<script> window.alert('hapus gagal'); document.locaition.href = 'index.php' </script>; ";
    echo mysqli_error($koneksi);
}
