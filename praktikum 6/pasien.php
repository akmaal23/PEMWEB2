<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = 'SELECT * FROM pasien';
$pasiens = $dbh->query($query);
?>
<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="template/css/styles.css" rel="stylesheet" />

</head>
<style>
    h1{
        font-family: poppins, sans-serif;
        font-weight: 500;
        text-decoration: underline;
    }
</style>
<body>
<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3>Daftar Pasien</h3>
            <a href="#" class="btn btn-primary ms-auto mx-5">+ Pasien</a>
        </div>

        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>

            <?php
            $no = 0;
             foreach ($pasiens as $pasiens): 
             ?>
                <tr>
                    <td><?= $no += 1;?></td>
                    <td><?= $pasiens['nama']?></td>
                    <td><?= $pasiens['tmp_lahir']?></td>
                    <td><?= $pasiens['tgl_lahir']?></td>
                    <td><?= $pasiens['gender']?></td>
                    <td><?= $pasiens['alamat']?></td>
                    <td>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fas fa-trash"></i></a>

                    </td>
                </tr>
             <?php endforeach; ?>
        </table>
    </div>
</main>
<!--charts-->








<?php
include_once('bottom.php');
?>