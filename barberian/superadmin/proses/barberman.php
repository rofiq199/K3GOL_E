<?php 
include "../../koneksi.php";
$ref = $_GET['ref'];
$username = $_GET['username'];
// if (isset($_GET['act'])){
//     $act = $_GET['act'];
//     $kode = $_GET['id'];
//     if ($act == 'tambah'){
//         $query = "INSERT INTO antrian  ";
//         $sql = mysqli_query($koneksi,$query);
//     }else if ($act == 'proses'){
//         $query1 = "UPDATE antrian SET status_antrian= 'proses' WHERE kode_antrian='$kode'";
//         $sql1 = mysqli_query($koneksi,$query1);
//     }else if ($act == 'selesai'){
//         $query2 = "UPDATE antrian set status_antrian='selesai' where kode_antrian='$kode'";
//         $sql2 = mysqli_query($koneksi,$query2);
//     }else if($act == 'batal'){
//         $query = "UPDATE antrian set status_antrian='batal' where kode_antrian='$kode'" ;
//         $sql = mysqli_query($koneksi,$query);   
//     }
// header ("location:" . $ref);
// }
?>
<div class="halaman">
          <h3><i class="fas fa-store mr-2"></i> LIHAT BARBERMAN</h3><hr>
          <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalplus" title="plus" ><i class="fas fa-plus-square mr-2"></i>Tambah Barberman</a>
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
                  <!-- Modal hapus barberman -->
                <form action="barbermanh.php" method="POST">
                <div class="modal fade" id="modalhapus<?php echo $no ?>"tabindex="-1" role="dialog">
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
                      <input type="text" value="<?php echo $data['username_bm'];?>" name="username">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger" >Hapus </button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            <!-- Modal edit barberman -->
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
                  <div class="md-form mb-2">
                    <br>
                      <input type="file" name="foto" >
                    </div>
                  <div class="md-form mb-2">
                      <input type="hidden" value="<?php echo $data['username_bm'];?>" name="username">
                    </div>
                    <div class="md-form mb-2">
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['nama_bm'];?>" name="nama" placeholder="Nama Barberman">
                    </div>
                    <div class="md-form mb-2">
                      
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['email_bm'];?>" name="email" placeholder="Email">
                    </div>
                    <div class="md-form mb-2">
                    
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['alamat_bm'];?>" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="md-form mb-2">
                     
                      <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $data['no_bm'];?>" name="no" placeholder="Nomor Telepon">
                    </div>
                    <div class="md-form mb-2">
                     
                      <input type="password" id="defaultForm-email" class="form-control validate" value="<?php echo $data['password_bm'];?>" name="password" placeholder="Masukkan Password">
                    </div>
                    
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
            </form> 

            <!-- Modal tambah barang -->
          <form class="formtambah" action="barbermant.php" method="POST" enctype="multipart/form-data">
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
                <div class="md-form mb-2">
                  <br>
                    <input type="file" name="foto" >
                  </div>
                <div class="md-form mb-2">
                    <input type="text" id="username" class="form-control validate" name="username" placeholder="Username">
                  </div>
                  <div class="md-form mb-2">
                    <input type="text" id="defaultForm-name" class="form-control validate"  name="nama" placeholder="Nama Barberman">
                  </div>
                  <div class="md-form mb-2">
                    <input type="text" id="defaultForm-email" class="form-control validate" name="email" placeholder="Email">
                  </div>
                  <div class="md-form mb-2">
                    <input type="text" id="defaultForm-address" class="form-control validate" name="alamat" placeholder="Alamat">
                  </div>
                  <div class="md-form mb-2">
                    <input type="text" id="defaultForm-numbr" class="form-control validate" name="no" placeholder="Nomor Telepon">
                  </div>
                  <div class="md-form mb-2">
                    <input type="password" id="defaultForm-password" class="form-control validate" name="password" placeholder="Masukkan Password">
                  </div>
                  
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" id="tambah" class="btn btn-primary">Tambah</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>
          </form>  
              <?php }?>
            </tbody>
          </table>