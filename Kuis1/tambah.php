<?php

include_once 'dbconfig.php';

if (isset($_POST['btn-save'])) {
    $judul= $_POST['judul'];

    $pengarang= $_POST['pengarang'];

    $tahun_terbit= $_POST['tahun_terbit'];

    if ($buku->insertData( $judul, $pengarang, $tahun_terbit)) {
        header("Location: tambah.php?inserted");
    } else {
        header("Location: tambah.php?failure");
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Manajemen Buku</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">Form Tambah Buku</div>

        <div class="panel-body">

            <?php

            if (isset($_GET['inserted'])) {
                ?>

                <div class="container">

                    <div class="alert alert-info">

                        <strong>Info!</strong> Buku berhasil tersimpan! Silakan klik di <a href="index.php">sini</a> untuk kembali ke beranda.

                    </div>

                </div>

                <?php
            } elseif (isset($_GET['failure'])) {
                ?>

                <div class="container">

                    <div class="alert alert-warning">

                        <strong>Warning!</strong> Buku gagal tersimpan !

                    </div>

                </div>

                <?php
            }

            ?>

            <div class="clearfix"></div><br />

            <form method='post'>

                <table class='table table-bordered'>

                   
                    <tr>

                        <td>Judul Buku</td>

                        <td><input type='text' name='judul' class='form-control' required maxlength="50"></td>

                    </tr>

                    <tr>

                        <td>Pengarang</td>

                        <td><input type='text' name='pengarang' class='form-control' required></td>

                    </tr>

                    <tr>

                        <td>Tahun Terbit</td>

                        <td><input type='text' name='tahun_terbit' class='form-control' required></td>

                    </tr>

                    <tr>

                        <td colspan="2">

                            <button type="submit" class="btn btn-primary" name="btn-save">Simpan

                            </button>

                            <button type="reset" class="btn btn-primary" name="btn-reset">Reset

                            </button> <br /><br />

                            <a href="index.php" class="btn btn-large btn-success">

                                <i class="glyphicon glyphicon-backward"></i> &nbsp; Kembali ke halaman utama</a>

                        </td>

                    </tr>

                </table>

            </form>

        </div>

    </div>

</div>

<div class="container">

    <div class="alert alert-success">
        <p><strong>H1D022045 - Destian Ardan Alfatanu</strong></p>
    </div>

</div>

<!--Bootstrap-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>