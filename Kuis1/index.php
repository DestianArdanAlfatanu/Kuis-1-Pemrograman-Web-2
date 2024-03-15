<?php

include_once 'dbconfig.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Manajemen Buku</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">Data Buku</div>

        <div class="panel-body">

            <table class='table table-bordered table-responsive'>

                <tr>

                    <th>ID Buku</th>

                    <th>Judul Buku</th>

                    <th>Pengarang</th>

                    <th>Tahun Terbit</th>

                    <th colspan="2"> <center> Edit | Hapus </center></th>

                </tr>

                <?php

                $query = "SELECT * FROM buku";

                $records_per_page = 5;

                $newquery = $buku->paging($query, $records_per_page);

                $buku->viewData($newquery);

                ?>

                <tr>

                    <td colspan="7" align="center">

                        <div class="pagination-wrap">

                            <?php $buku->paginglink($query, $records_per_page); ?>

                        </div>

                    </td>

                </tr>

            </table>
            <a href="tambah.php" class="btn btn-large btn-default"> <i class="glyphicon glyphicon-plus-sign"></i> 
                &nbsp; Tambah Buku</a>

        </div>
    </div>
</div>

<div class="container">

    <div class="alert alert-success">
        <p><strong>H1D022045 - Destian Ardan Alfatanu</strong></p>
    </div>

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>

</html>