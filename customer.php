<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stock Barang</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">CV. Syuki</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-card-list"></i></div>
                                Stock Barang
                            </a>
                            <a class="nav-link" href="customer.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-people"></i></div>
                                Customer
                            </a>
                            <a class="nav-link" href="Transaksi.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-cash-coin"></i></div>
                                Transaksi
                            </a>
                            <a class="nav-link" href="Pengembalian.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-add-fill"></i></div>
                                Pengembalian
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Support by:</div>
                        @Syuki Channel
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><div class="sb-nav-link-icon"><i class="bi bi-people"></i></div>Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">CV.SYUKUR INDONESIA</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                             Tambah Customer
                            </button>
                            <a href="exportcustomer.php" class="btn btn-info">Cetak Data</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>ID Customer</th>
                                            <th>Tanggal</th>
                                            <th>Nama Customer</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Pesanan</th>
                                            <th>Jumlah Hari</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Harga Satuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $ambilsemuadatacustomer = mysqli_query($conn,"select * from customer");
                                        while($data=mysqli_fetch_array($ambilsemuadatacustomer)){
                                            $id = $data['id'];
                                            $idc = $data['idcustomer'];
                                            $tglpesanan = $data['tglpesanan'];
                                            $namacustomer = $data['namacustomer'];
                                            $namabarang = $data['namabarang'];
                                            $jmlhpesanan = $data['jmlhpesanan'];
                                            $jmlhhari = $data['jmlhhari'];
                                            $alamat = $data['alamat'];
                                            $nohp = $data['nohp'];
                                            $hargasatuan = $data['hargasatuan'];
                                        ?>
                                        <tr>
                                            <td><?=$idc?></td>
                                            <td><?=$tglpesanan?></td>
                                            <td><?=$namacustomer?></td>
                                            <td><?=$namabarang?></td>
                                            <td><?=$jmlhpesanan?></td>
                                            <td><?=$jmlhhari?></td>
                                            <td><?=$alamat?></td>
                                            <td><?=$nohp?></td>
                                            <td><?=$hargasatuan?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$id;?>">
                                                    Edit
                                                </button>                                            
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$id;?>">
                                                    Delete
                                                </button>
                                        </td>
                                        </tr>
                                       <!-- Edit Modal -->
                                            <div class="modal fade" id="edit<?=$id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Barang</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form method="post" action="function.php"> <!-- Form action ditambahkan untuk mengarahkan ke function.php -->
                                                            <div class="modal-body">
                                                                <input type="text" name="namacustomer" value="<?=$namacustomer;?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="namabarang" value="<?=$namabarang;?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="jmlhpesanan" value="<?=$jmlhpesanan;?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="jmlhhari" value="<?=$jmlhhari;?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="alamat" value="<?=$alamat;?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="nohp" value="<?=$nohp;?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="hargasatuan" placeholder="Harga Satuan" class="form-control" required>
                                                                <br>
                                                                <input type="hidden" name="idc" value="<?=$idc;?>">
                                                                <button type="submit" class="btn btn-warning" name="updatecustomer">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="delete<?=$id;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Barang</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <form method="post" action="function.php">
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin Ingin Menghapus <?=$namabarang;?>?
                                                        <input type="hidden" name="id" value="<?=$id;?>">
                                                        <input type="hidden" name="jmlhpesanan" value="<?=$jmlhpesanan;?>">
                                                        <input type="hidden" name="idc" value="<?=$idc;?>">
                                                        <input type="hidden" name="namabarang" value="<?=$namabarang;?>">
                                                        <br>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="submit" class="btn btn-danger" name="deletecustomer">Delete</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                        </div>
                                        <?php
                                        };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
             <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambahkan Costumer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="POST">
        <div class="modal-body">
    <?php 
    // Panggil fungsi untuk menghasilkan ID pelanggan otomatis
    $customer_id = generateCustomerID($conn);
    ?>
    <form method="POST" action="customer.php">
        <input type="text" name="idcustomer" value="<?php echo $customer_id; ?>" readonly class="form-control">
        <br>
        <input type="text" name="namacustomer" placeholder="Nama Customer" class="form-control" required>
        <br>
        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
        <br>
        <input type="text" name="jmlhpesanan" placeholder="Jumlah Pesanan" class="form-control" required>
        <br>
        <input type="text" name="jmlhhari" placeholder="Jumlah Hari" class="form-control" required>
        <br>
        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
        <br>
        <input type="number" name="nohp" placeholder="No Hp" class="form-control" required>
        <br>
        <input type="text" name="hargasatuan" placeholder="Harga Satuan" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary" name="customer">Submit</button>
    </form>
</div>

        
</html>