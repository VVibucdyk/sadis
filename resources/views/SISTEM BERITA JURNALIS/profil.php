<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <?php require 'template/css.php'; ?>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark primary-color">
        <a class="navbar-brand" href="#">Jurnalis13</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profil.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- akhir navbar -->

    <div class="box">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img src="img/myimage/logo.png" width="250px" alt="404 not found!!!">               
            </div>

            <div class="col-md-8 col-sm-12">
                
            </div>
        </div>
    </div>

    <?php require 'template/js.php'; ?>
</body>
</html>