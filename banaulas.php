<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/57080fa270.js" crossorigin="anonymous"></script>

    <title>MY PERSONAL WEBSITE | İBRAHİM ÖZMEN</title>
</head>

<body>

    <!-- menü başlangıç kısmı -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MY PERSONAL WEBSITE | İBRAHİM ÖZMEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">ANASAYFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.html">HAKKIMDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="egitim.html">EĞİTİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="memleketmiras.html">MEMLEKETİM VE KÜLTÜREL MİRAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="takim.html">TAKIMIM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="banaulas.php">BANA ULAŞIN</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <!-- menü bitiş kısmı -->

    <!--- iletisim baslangıc --->

    <section class="p-5 text-center banaulas">

        <div class="container">

            <h2 class="mb-5 font-weight-bold">BANA ULAŞIN</h2>
            <hr class="cizgi"><i class="fas fa-at ikonbanaulas"></i>

            <form action="banaulas.php" method="post" class="col-md-10 text-left m-auto">

                <div class="form-group row">
                    <label for="" class="col-md-1 align-self-center">İSİM:</label>
                    <input type="text" name="isim" class="form-control col-md-8">
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-1 align-self-center">SOYİSİM:</label>
                    <input type="text" name="soyisim" class="form-control col-md-8">
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-1 align-self-center">EMAIL:</label>
                    <input type="email" name="mail" class="form-control col-md-8">
                </div>

                <div class="form-group row">
                    <label for="" class="col-md-1 align-self-center">MESAJINIZ:</label>
                    <textarea name="mesaj" id="" cols="30" rows="10" class="form-control col-md-8"></textarea>
                </div>

                <div class="form-group row">
                    <button type="submit" class="col-md-1 btn btn-primary">GÖNDER</button>
                </div>

            </form>

        </div>

    </section>


    <!--- iletisim bitis --->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>



<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["soyisim"], $_POST["mail"], $_POST["mesaj"]))
{
   $isim=$_POST["isim"];
   $soyisim=$_POST["soyisim"];
   $email=$_POST["mail"];
   $mesaj=$_POST["mesaj"];
    
    
   $ekleme="INSERT INTO iletisim(isim, soyisim, email, mesaj) 
   VALUES ('".$isim."','".$soyisim."','".$email."','".$mesaj."')";
    
    if($baglan->query($ekleme)===TRUE)
    {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir.')</script>";
    }
    
    else
    {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
    }
    
    
    
    
}

?>
