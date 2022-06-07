<?php

require 'functions.php';
if(hapus ($_GET["id"]) > 0) {
    echo "<script>
    alert('Data Berhasil Di Hapus');
    document.location.href='index.php';
    </script>";
}

?>