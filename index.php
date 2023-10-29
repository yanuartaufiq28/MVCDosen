<?php
session_start();
include_once("c_cafe.php");

$controller = new c_cafe();
    if (isset($_GET['add'])) {
        $Pesanan = $_POST['Pesanan'];
        $Jumlah = $_POST['Jumlah'];
        $Catatan = $_POST['Catatan'];
        $controller->insert($Pesanan, $Jumlah, $Catatan);
    } elseif (isset($_GET['edit'])) {
        $num = $_GET['edit'];
        $jum = $_POST['Jumlah'];
        $cat = $_POST['Catatan'];
        $controller->updateAction($num, $jum, $cat);
    } elseif (isset($_GET['delete'])) {
        $pesan = $_GET['delete'];
        $controller->deleteAction($pesan);
    } else {
        $controller->invoke();
    }
?>
