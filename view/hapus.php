<?php
  $id = $_GET['id'];

  $hapus = mysqli_query($con, "DELETE FROM data_siswa WHERE id = '$id'");
  if (!$hapus) {
    echo mysqli_error($con);
  }else {
    echo "<script>alert('Berhasil Di Hapus')</script>";
    echo "<script>document.location='?p=table'</script>";
  }
 ?>
