<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <?php require_once('css.php'); ?>    
</head>

<body>
    <!-- Start your project here-->
    <!--Navbar-->
    <nav class="navbar scrolling-navbar fixed-top navbar-expand-lg navbar-dark primary-color">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">(Logo Sekolah)SMKN 13 Bandung</a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Kelas</a>
                </li>                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbar-mauNgapain" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mau Ngapain ? </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbar-mauNgapain">
                        <a class="dropdown-item active" href="#">Absen</a>
                        <a class="dropdown-item" href="#">Bayaran</a>
                        <a class="dropdown-item" href="#">Berita</a>
                    </div>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown invisible">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>


            </ul>
            <!-- Links -->
            
            <ul class="navbar-nav ml-auto nav-flex-icons">
            	<li class="nav-item">
	            	<form class="form-inline my-2 my-lg-0 ml-auto">
		                <input class="form-control rounded-pill" type="search" placeholder="Kelas/Nama" aria-label="Search">
		                <button class="btn rounded-pill btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cari</button>
	            	</form>
            	</li>
            	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
			          aria-expanded="false">
			          <i class="fas fa-user"></i> Profile </a>
			        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
			          <a class="dropdown-item" href="#">Profil</a>
			          <a class="dropdown-item" href="#">Keluar</a>
			        </div>
			    </li>
            </ul>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
    
    <?php require_once('js.php'); ?>
</body>

</html>