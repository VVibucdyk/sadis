<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add news</title>

    <?php require 'template/css.php'; ?>
</head>
<body>
    <div class="container">
        <div class="card">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Edit news</strong>
            </h5>

            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-12">        
                            <div class="md-form">
                                <input type="text" name="judul" id="judul" class="form-control" value="">
                                <label for="judul">Title</label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/myimage/foto3.png" alt="404 nott found!">
                                </div>
    
                                <div class="col-md-8">
                                    <div class="md-form">
                                        <div class="input-default-wrapper mt-3">
                                        
                                        <input type="file" id="file-with-current" class="input-default-js">
        
                                        <label class="label-for-default-js rounded-right mb-3" for="file-with-current"><span class="span-choose-file">Image news</span>
        
                                        <div class="float-right span-browse">Upload</div>
        
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div><br>
                        </div>
                    </div><br>

                    <div class="md-form">
                        <label for="isi" style="font-size: 17px;"><b>News content</b></label>
                        <textarea name="isi_berita" id="isi" cols="30" rows="10" class="form-control" placeholder="Enter news here..."></textarea>
                    </div>
                </form>
                <br>
                <button type="submit" class="btn btn-success">Edit news</button>
                <a href="news.php" class="btn btn-danger">Cancel Edit</a>
            </div>
        </div>
    </div>

    <?php require 'template/js.php' ?>
</body>
</html>