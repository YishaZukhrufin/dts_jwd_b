<!DOCTYPE html>
<html>
<head>
    <title>Website Sekolah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS untuk navbar */
        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            margin-left: 1%;
        }

        .navbar-nav .nav-link {
            font-size: 20px;
            color: #ffffff;
        }

        .navbar-nav .nav-link:hover {
            color: #ff6600;
        }

        /* CSS untuk footer */
        .footer {
            background-color: #007bff;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin-bottom: 0;
            color: #ffffff;
        }

        .small-image{
            width: 3%;
            height: auto;
            margin-left: 2%;
        }
        .header { 
            background-size: cover;
            background-position: center;
          
        }

        .image-header {
            position: relative;
            display: inline-block;
           
        }

        .text-overlay {
            position: absolute;
            top: 0;
            left: 0;
           padding: 33.4% ;
           right: -80%;
            background-color: rgba(0, 0, 0, 0.3);
            color: #fff;
            font-size: 40px;
            text-align: center;
            font-weight: bold;
        }


       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="identitas1.png"  class="small-image">

        <a class="navbar-brand" href="#">SMAN 1 LOCERET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Visi Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </nav>

   
    <div class="header">
        <div class="row">
            <div class="col-md-12">
                <div class="image-header">
                    <span class="text-overlay">
                        Selamat Datang <br>
                        SMA NEGERI 1 LOCERET
                    </span>
                    <img src="smasal.jpeg" alt="Gambar" width="180%">
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <p>Media Sosial</p>
            
                <a href="#"><img src="twitter.png" width="2%" ></a>
                <a href=""><img src="ig.png" width="2%"></a>
                <a href=""><img src="fb.png" width="2%"></a>
         
            <!-- <p>Hak Cipta &copy; 2023 Website SMAN 1 LOCERET. All rights reserved.</p> -->
            
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
