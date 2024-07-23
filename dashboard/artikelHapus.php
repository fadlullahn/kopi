<?php

$id = $_GET['id'];

$sql = "DELETE FROM artikel WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Artikel berhasil dihapus.');
    window.location.href = 'index.php?page=artikel';
  </script>";
}
$conn->close();
