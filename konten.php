<?php
switch (@$_GET['p']) {
  case 'tambah':
    require_once("view/tambah.php");
  break;
  case 'hapus':
    require_once("view/hapus.php");
  break;
  case 'edit':
    require_once("view/edit.php");
  break;
  case 'cari':
    require_once("view/cari.php");
  break;
  default:
    require_once("view/table.php");
  break;
}
?>
