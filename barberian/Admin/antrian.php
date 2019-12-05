<!doctype html>
<html lang="en">
  <?php 
  include "../koneksi.php";
  session_start();
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $username = $_SESSION['username'];
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM antrian  WHERE ( status_antrian='belum' or status_antrian='proses') and username_bs='".$username."' ";
  $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
  ?>
  ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin2.css">
    <script src="https://kit.fontawesome.com/ef8e8d5793.js" crossorigin="anonymous"></script>
    <title>HALAMAN ANTRIAN</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">BARBERIAN</a>
        
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
                          <a class="nav-link active text-white" href="file:///E:/instalan/xamp/htdocs/template_admin2/tambah_produk.html"><i class="fas fa-tags mr-2"></i>LIHAT PRODUK</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fas fa-store mr-2"></i>LIHAT BARBERSHOP</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fas fa-user-edit mr-2"></i>UBAH PROFIL</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fas fa-money-check mr-2"></i>LIHAT ANTRIAN</a><hr class="bg-secondary">
                        </li>
                       
                      </ul>
        </div>
        <div class="col-md-8 p-5 pt-2">
          <h3><i class="fas fa-money-check mr-2"></i> LIHAT ANTRIAN</h3><hr>
          <a href="#" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH ANTRIAN</a>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Antrian</th>
                <th scope="col">Status Antrian</th>
                <th colspan="3" scope="col">STATUS</th>
              </tr>
            </thead>
            <tbody>
        <?php 
          $no = 1;
          while($data = mysqli_fetch_array($sql)){ ?>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $data['username_cs']; ?></td>
                <td><?php echo $data['no_antrian']; ?></td>
                <td><?php echo $data['status_antrian']; ?></td>
                <?php if ($data['status_antrian'] == 'belum'){ ?>
                  <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit">Proses</i></td>
                <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete">Batal</i></td>
                <?php }else{ ?>
                  <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit">Selesai</i></td>
                <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete">Batal</i></td>
                <?php } ?>
              </tr>
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