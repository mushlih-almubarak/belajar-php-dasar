<?php
    require 'Index.php';
    $id = $_GET["id"];

    if (isset($id)) {
        mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
            if (mysqli_affected_rows($db) > 0) {
                echo "  <script>alert('Alhamdulillah, Data Berhasil Dihapus');
                        document.location.href = 'index.php';</script>";
            } else {
                echo "  <script>alert('Maaf, Data Gagal Dihapus');
                        document.location.href = 'index.php';</script>";
            }
    }
?>