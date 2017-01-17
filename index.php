<html lang="en">
    <head>		
        <title>Pencarian Video Youtube</title>
        <meta charset="UTF-8" />					
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Awesome videos!" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <header>
            <h1 class="w100 text-center"><a href="index.php">Cari Video Viewer Terbanyak</a></h1>
        </header>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#">
                    <p><input type="text" id="search" placeholder="Cari Video" autocomplete="off" class="form-control" /></p>
                    <p><input type="submit" value="Cari" class="form-control btn btn-primary w100"></p>
                </form>
                <div id="results"></div>
            </div>
        </div>
        
        <!-- scripts -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
    </body>
</html>
