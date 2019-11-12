<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin2.css">
    <script src="https://kit.fontawesome.com/ef8e8d5793.js" crossorigin="anonymous"></script>
    <title>HALAMAN LIHAT BARBERMAN</title>
  </head>
  <body>
      <?php
      // Load file koneksi.php 
      $koneksi = mysqli_connect("localhost","root","","barberian");
      
      // Check connection
      if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
      }
      session_start();
      // Ambil data NIS yang dikirim oleh index.php melalui URL
      $username = $_SESSION['username'];
      // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
      $query = "SELECT * FROM data_barberman  WHERE username_bs='".$username."'";
      $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
      ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="../index.php">BARBERSHOP</a>
        
          <form class="form-inline my-2 my-lg-0 ml-auto">
            
          </form>
          <div class="icon ml-4">
              <h5>
                  <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
              </h5>

          </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-2,5 bg-dark mt-2 pr-3 pt-4">
                <ul class="nav flex-column ml-3 mb-5">
                        <li class="nav-item">
                          <a class="nav-link active text-white" href="produk.php"><i class="fas fa-tags mr-2"></i>LIHAT PRODUK</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fas fa-store mr-2"></i>LIHAT BARBERMAN</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="profil.php"><i class="fas fa-user-edit mr-2"></i>UBAH PROFIL</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="ANTRIAN_ADMIN.html"><i class="fas fa-money-check mr-2"></i>LIHAT ANTRIAN</a><hr class="bg-secondary">
                        </li>
                       
                      </ul>
        </div>
        <div class="col-md-8 p-5 pt-2">
          <h3><i class="fas fa-store mr-2"></i> LIHAT BARBERMAN</h3><hr>
          <a class="btn btn-primary mb-3"data-toggle="modal" data-target="#modalplus" title="plus" ><i class="fas fa-plus-square mr-2"></i>Tambah Barberman</a>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
              <th scope="col">NO</th>
                <th scope="col">FOTO</th>
                <th scope="col"> <i class="col-p-4"></i> NAMA BARBERMAN</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">NOMOR TELEPON</th>
                <th scope="col">PASSWORD</th>
                <th colspan="3" scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
               while ($data = mysqli_fetch_array($sql)){ ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><img src= "../barberman/img/<?php echo $data['foto_bm'];?>" width = 50px height = 50px ></td>
                <td><?php echo $data['nama_bm'];?></td>
                <td><?php echo $data['email_bm'];?></td>
                <td><?php echo $data['alamat_bm'];?></td>
                <td><?php echo $data['no_bm'];?></td>
                <td><?php echo $data['password_bm'];?></td>  
                <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="modal" data-target="#modaledit<?php echo $no ?>" title="Edit"></i></td>
                <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="modal" data-target=#modalhapus<?php echo $no ?> title="Delete"></i></td>
              </tr>
                  <!-- Modal hapus barang -->
                <form action="barbermanh.php" method="POST">
                <div class="modal" id="modalhapus<?php echo $no ?>"tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Hapus</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda ingin menghapus barberman ini?</p>
                      <input type="hidden" value="<?php echo $data['username_bm'];?>" name="username">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" >Hapus </button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            <!-- Modal edit barang -->
            <form action="barbermane.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="modaledit<?php echo $no?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                      <input type="hidden" value="<?php echo $data['username_bm'];?>" name="username">
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Nama Barberman</label>
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['nama_bm'];?>" name="nama">
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">E-mail</label>
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['email_bm'];?>" name="email">
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Alamat</label>
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['alamat_bm'];?>" name="alamat">
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Nomor telepon</label>
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['no_bm'];?>" name="no">
                    </div>
                    <div class="md-form mb-5">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
                      <input type="password" id="defaultForm-email" class="form-control validate" value="<?php echo $data['password_bm'];?>" name="password">
                    </div>
                    <div class="md-form mb-4">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Foto</label>
                    <br>
                      <input type="file" name="foto" >
                    </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
            </form> 

            <!-- Modal tambah barang -->
          <form action="barbermant.php" method="POST" enctype="multipart/form-data">
          <div class="modal fade" id="modalplus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Tambah Barberman
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <label>Username</label>
                    <input type="text" class="form-control validate" name="username">
                  </div>
                  <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Nama Barberman</label>
                    <input type="text" id="defaultForm-name" class="form-control validate"  name="nama">
                  </div>
                  <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">E-Mail</label>
                    <input type="text" id="defaultForm-email" class="form-control validate" name="email">
                  </div>
                  <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Alamat</label>
                    <input type="text" id="defaultForm-address" class="form-control validate" name="alamat">
                  </div>
                  <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Nomor Telepon</label>
                    <input type="text" id="defaultForm-numbr" class="form-control validate" name="no">
                  </div>
                  <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
                    <input type="password" id="defaultForm-password" class="form-control validate" name="password">
                  </div>
                  <div class="md-form mb-4">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">Foto</label>
                  <br>
                    <input type="file" name="foto" >
                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>
          </form>  
              <?php }?>
            </tbody>
          </table>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin2.js"></script>
  </body>
</html>