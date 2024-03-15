<?php

include_once 'dbconfig.php';

if (isset($_POST['btn-del'])) {
    $id = $_GET['delete_id'];

    $buku->deleteData($id);

    header("Location: hapus.php?deleted");
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Manajemen Buku</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">Halaman Hapus Buku</div>

        <div class="panel-body">

            <?php

            if (isset($_GET['deleted'])) {
                ?>

                <div class="alert alert-success">

                    <strong>Info!</strong> Buku berhasil dihapus...

                </div>

                <?php
            } else {
                ?>

                <div class="alert alert-danger">

                    <strong>Warning!</strong> apa anda yakin ingin menghapusnya ?

                </div>

                <?php
            }

            ?>

        </div>

        <div class="container">

            <?php

            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id']; ?>

                <table class='table table-bordered'>

                    <tr>

                        <th>#</th>

                        <th>Judul</th>

                        <th>Pengarang</th>

                        <th>Tahun Terbit</th>

                    </tr>

                    <?php

                    extract($buku->getID($id)); ?>

                    <tr>

                        <td><?php echo $id; ?></td>

                        <td><?php echo $judul; ?></td>

                        <td><?php echo $pengarang; ?></td>

                        <td><?php echo $tahun_terbit; ?></td>

                    </tr>

                </table>

                <?php
            }

            ?>

        </div>

        <div class="container">

            <p>

                <?php

                if (isset($id)) {
                ?>

            <form method="post">

                <input type="hidden" name="id" value="<?php echo $id; ?>"/>

                <button class="btn btn-large btn-primary" type="submit" name="btn-del">

                    <i class="glyphicon glyphicon-trash"></i> &nbsp; YES
                </button>

                <a href="index.php" class="btn btn-large btn-success">

                    <i class="glyphicon glyphicon-remove"></i> &nbsp; NO</a>

            </form>

            <?php
            } else {
                ?>

                <a href="index.php" class="btn btn-large btn-success">

                    <i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>

                <?php
            }

            ?>

            </p>

        </div>

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