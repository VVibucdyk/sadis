<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profile</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- akhir navbar -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="img/myimage/logo.png" alt="404 Not Found">

            <h1 class="say">Hai admin jurnalis</h1>
            <h3>Ada berita apa hari ini ?</h3>
        </div>
    </div>

    <div class="container">
        <section id="nav-box">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a href="add_news.php" class="card">
                        <div class="card-image-top"><img src="img/myimage/post.png" alt="404 not found!"></div>
    
                         <div class="card-body text-center">
                            <h3 class="card-title">Add new news</h3>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="card">
                        <div class="card-image-top"><img src="img/myimage/chart.png" alt="404 not found!"></div>
    
                         <div class="card-body text-center">
                            <h3 class="card-title">Statistics</h3>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="card">
                        <div class="card-image-top"><img src="img/myimage/chat.png" alt="404 not found!"></div>
    
                         <div class="card-body text-center">
                            <h3 class="card-title">Comments</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="chart">
            <h3 class="black-text text-center">Statistics <hr></h3>

            <div id="chart_div" style="width: 100%; height: 400px;"></div>
        </section>
    </div>

    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">
            &copy;2019 Copyright <span>Software Engineer</span>
        </div>
    </footer>

    <?php require 'template/js.php' ?>
</body>
</html>