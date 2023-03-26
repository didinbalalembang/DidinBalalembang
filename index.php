<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css" >
    <title>ANIME MOVIES</title>
   
</head>
<body>
  <div class="container15">
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=3bfedf39&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> </div>
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <h3>ANIME</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="btn btn-outline-dark bg-dark text-white">
      <ul class="navbar-nav ms-5">
        <li class="nav-item">HOME</li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="bg" style="margin-top:-15px">

<div class="container-new" style=background-image:url('Gambar7.jpg'); >
<br>
<div class="container">
<div class="row mt-5 text-left">
  <div class="col">
  <div class="text-primary text-light bg-transparant">
  <h1 class="display-10">TOP ANIME TERFAVORIT</h1> 
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="Gambar1.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white">
        <center>
        <h5 class="card-title">Attack on Titan </h5></center>
        <p class="card-text">Setelah kampung halamannya dihancurkan dan ibunya terbunuh, Eren Jaeger muda bersumpah untuk membersihkan bumi dari raksasa humanoid Titans yang telah membawa umat manusia ke ambang kepunahan.</p>
        <center>
        <a href="https://www.vidio.com/watch/7390243-attack-on-titan-musim-terakhir-bagian-tiga-babak-pertama" class="btn btn-outline-primary">TRAILER</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">  
      <img src="Gambar2.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white bg-gradiant">
        <center>
        <h5 class="text-white bg ">Naruto: Shippuden</h5></center>
        <p class="card-text">Naruto Uzumaki, adalah seorang ninja remaja yang keras, hiperaktif, yang terus-menerus mencari persetujuan dan pengakuan, serta menjadi Hokage, yang diakui sebagai pemimpin dan terkuat dari semua ninja di desa.</p>
        <center>
        <a href="https://www.vidio.com/watch/2366860-ep-01-masuklah-naruto-uzumaki" class="btn btn-outline-primary">TRAILER</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar3.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white">
        <center>
        <h5 class="text-white">Jujutsu Kaisen</h5></center>
        <p class="card-text">Seorang anak laki-laki menelan jimat terkutuk jari setan dan menjadi terkutuk sendiri. Dia memasuki sekolah dukun untuk dapat menemukan bagian tubuh iblis lainnya dan dengan demikian mengusir dirinya sendiri.
          <center>
          <a href="https://www.vidio.com/watch/2337629-ep-01-akomodasi-dua-sisi" class="btn btn-outline-primary">TRAILER</a></center>

</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar4.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white">
        <center>
        <h5 class="text-white">SPY x FAMILY</h5></center>
        <p class="card-text">Ceritanya mengikuti mata-mata yang harus "membangun keluarga" untuk menjalankan misi, tidak menyadari bahwa gadis yang dia adopsi sebagai anak perempuan dan wanita yang dia setujui untuk menikah palsu dengannya masing-masing adalah pembaca pikiran dan pembunuh.</p>
        <center>
        <a href="https://www.vidio.com/watch/7306125-episode-25" class="btn btn-outline-primary">TRAILER</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar5.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white">
        <center>
        <h5 class="text-white">Blue Lock</h5></center>
        <p class="card-text">Perjalanan Asosiasi Sepak Bola Jepang (JFA) yang mencari sosok striker (penyerang) bola terbaik.</p>
        <center>
        <a href="https://www.vidio.com/watch/7197520-ep-01-impian" class="btn btn-outline-primary">TRAILER</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar6.jpg" class="card-img-top" height="300px">
      <div class="card-body bg-dark text-white">
        <center>
        <h5 class="text-white">Haikyuu!!</h5></center>
        <p class="card-text">Bertekad untuk menjadi seperti pemain bintang kejuaraan bola voli Shouyou, seorang anak laki-laki pendek yang dijuluki "raksasa kecil", bergabung dengan klub bola voli sekolahnya.</p>
        <center>
        <a href="https://www.vidio.com/watch/2337973-episode-01" class="btn btn-outline-primary">TRAILER</a></center>
      </div>
    </div>
  </div>
  
    </div>
    </div>
    </div>
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
