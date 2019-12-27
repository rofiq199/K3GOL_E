<link rel="stylesheet" href="sidebar.css">
<?php session_start(); ?>
   <div class="wrapper">
   	<nav id="sidebar">
   		<ul class="list-unstyled components">
   			<li>
   				<a href="#">Ubah Profil</a>
   			</li>
   			<li>
   				<a href="#">Lihat Pesanan</a> 
   			</li>
   			<li>
   				<a href="#">Histori Pemesanan</a>
   			</li>
   		</ul>	
   	</nav>
   	
   	<div class="content">
   		<nav class="navbar navbar-expand-lg">
   			<i class="fas fa-align-justify" id="sidebarCollapse"></i>
   		
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </div>
</nav>
</div>