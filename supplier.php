<?php
include 'component/connection.php';
include 'function.php';

$dataSupplier = getAllData($connect, "tb_supplier");
$title = "Supplier";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="datatables/datatables.css">
    <script src="datatables/datatables.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <?php include 'component/sidebar.php'; ?>

    <div class="main--content">
        <?php include 'component/header.php'; ?>

        <div class="card--container">
            <!-- table start -->
            <a href="input_component/input_supplier.php" class="button mb-3 btn"><i class="fas fa-plus-square me-2"></i>Tambah Data</a>
            <table id="tableformat" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataSupplier as $tampil) : ?>
                        <tr>
                            <td><?= $tampil['Nama']; ?></td>
                            <td><?= $tampil['alamat']; ?></td>
                            <td><?= $tampil['np']; ?></td>
                            <td>
                                <a href="input_component/input_supplier.php?edit_supplier=<?= $tampil['id_supplier']?>" class="me-2 edit link-light">
                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                </a>
                                <a href="logic/delete.php?delete_supplier=<?= $tampil['id_supplier']?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- table end -->
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        $(document).ready(function() {
            $('#tableformat').DataTable();
        });
    </script>
</body>

</html>
