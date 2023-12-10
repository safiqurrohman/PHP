<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <script src="homepage.js" defer></script>

       <!-- fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

       <!-- feather icon --> 
       <script src="https://unpkg.com/feather-icons"></script>
       <script src="https://unpkg.com/feather-icons"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
        <video  autoplay loop muted plays-inline class="back-video">
            <source src="../properti/bg1.mp4" type="video/mp4">
        </video>
    
            <nav class="navbar">
                    <nav class="navbar-nav">
                        <div class="nav-logo">
                            <img src="../properti/logofix.png" alt="logo">
                        </div>
                        <div class="nav">
                            <a href="#home" class="active">Home</a>
                            <a href="#kategori">
                                <select class="pilihan" name="" id="">
                                    <option value="solo culture"><a href="admin.php">Solo culture</a></option>
                                    <option value="solo Tour"><a href="#">Solo Tour</a></option>
                                    <option value="solo Food"><a href="#">Solo Food</a></option>
                                    <option value="solo Festival"><a href="#">Solo Festival</a></option>
                                </select>
                            </a>
                            <a href="#destinasi">Destinatin</a>
                            <a href="#tentang">About</a>
                            <a href="#kontak">contact</a>
                        </div>
                    </nav>
                    <div class="box-extra">
                        <nav class="extra">
                            <div class="navbar-extra">
                                <a href="login.php">Sign In</a>
                                <a class="search" href="datanama/data.html" id="search"><i data-feather="search"></i></a>
                            </div>
                        </nav>
                    </div>
                
            </nav>
       
    <section class="hero" id="home">
        <main class="content">
            <h2>SOLO</h2>
            <p>DESTINASION</p>
            <div class="starter">
                <a href="../Daftar/daftar.html">Explore</a>
            </div>
            
        </main>
</section>

<section class="destinasi" id="destinasi">
    <h2>Explore Your Destination</h2>
    <div class="box-destinasi">
        <div class="row">
            <div class="menu-card">
                <img src="../properti/gambar2.jpg" alt="">
                <h4>Sup Timlo</h4>
                <p>sup yang berisi irisan ati ampela ayam, irisan sosis Solo, irisan dadar gulung, bihun, telur pindang, dan ayam goreng suwir.Timlo Solo dapat disantap dengan nasi dipisah </p>
                <div class="more-learn">
                    <div class="more-">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                    <div class="more">
                        <a href="">pelajari ></a> 
                    </div>
                    
                </div>
                
                <!-- <img src="gambar1.jpg" alt=""> -->
            </div>
            
            <div class="menu-card">
                <img src="../properti/solo1.jpg" alt="">
                <h4>Bestik solo</h4>
                <p>Makanan asli khas daerah Solo yaitu bestik. Dikutip dari laman resmi Pemerintah Kota Surakarta, makanan yang juga identik dengan Keraton Solo ini diadopsi dari kuliner Eropa.</p>
                <div class="more-learn">
                    <div class="more-">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div class="more">
                        <a href="">pelajari ></a>    
                    </div> 
                </div>
               <!-- <img src="gambar2.jpg" alt=""> -->
            </div>
            <div class="menu-card">
                <img src="../properti/food2.jpg" alt="">
                <h4>Tongseng</h4>
                <p>Makanan khas Solo lainnya dengan olahan daging kambing adalah tongseng. Tongseng pada umumnya menggunakan daging kambing,</p>
                <div class="more-learn">
                    <div class="more-">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div class="more">
                        <a href="">pelajari ></a> 
                    </div>
                    
                </div>
               <!-- <img src="gambar3.jpg" alt=""> -->
            </div>
            <div class="menu-card">
                <img src="../properti/food3.png" alt="">
                <h4>Wedang Khas Solo</h4>
                <p>Minuman yang sebetulnya asal-usulnya dari Malang tapi malah ngetopnya di Solo.
                    Rasa wedang ini gurih, manis dan hangat, jadi cocok sekali untuk diminum di kala musim hujan.</p>
                <div class="more-learn">
                    <div class="more-">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                    <div class="more">
                        <a href="">pelajari ></a> 
                    </div>
                    
                </div>
            </div>
         
        </div>
        <div class="swep">
            <embed width="600px" src="https://www.youtube.com/embed/sgMVXrZCrDE" type="">
        </div>
    </div>
    <div class="content-box">
        
        <h4>Solo Culture</h4>
        <div class="row">
            <div class="wrapper">
                <div class="gallery">
                  <div class="image"><span><img src="../properti/gambar1.jpg" alt=""></span></div>
                  <div class="image"><span><img src="../properti/gambar2.jpg" alt=""></span></div>
                  <div class="image"><span><img src="../properti/gambar4.jpg" alt=""></span></div>
                  <div class="image"><span><img src="../properti/food3.png" alt=""></span></div>
                  <div class="image"><span><img src="../properti/gambar3.jpg" alt=""></span></div>
                  <div class="image"><span><img src="../properti/food3.png" alt=""></span></div>
                </div>
              </div>
              <div class="preview-box">
                <div class="details">
                  <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
                  <span class="icon fas fa-times"></span>
                </div>
                <div class="image-box">
                  <div class="slide prev"><i class="fas fa-angle-left"></i></div>
                  <div class="slide next"><i class="fas fa-angle-right"></i></div>
                  <img src="" alt="">
                </div>
              </div>
              <div class="shadow"></div>
            
            <!-- <div class="wrapper">
                <i class="fa-solid fa-arrow-left button" id="prev"></i>
                <div class="image-container">
                <div class="carousel">
                    <img src="properti/gambar1.jpg" alt="" />
                    <img src="properti/gambar1.jpg" alt="" />
                    <img src="properti/gambar1.jpg" alt="" />
                    <img src="properti/gambar1.jpg" alt="" />
                    <img src="properti/gambar1.jpg" alt="" />
                    <img src="properti/gambar1.jpg" alt="" />
                    
                </div>
                <i class="fa-solid fa-arrow-right button" id="next"></i>
                </div>
            
            </div> -->
        
        </div>

    </div>
</section>

<section class="tentang" id="tentang">
    <h2>About solo</h2>
    <div class="box-tentang">
        <p>Kota Solo juga terkenal dengan batiknya yang digemari banyak wisatawan. Tempat wisata Solo yang paling terkenal yaitu wilayah Keraton Kasunanan dan Mangkunegaran</p>
        
        <video class="video" autoplay loop muted plays-inline >
            <source src="../properti/solo.mp4" type="video/mp4">
        </video>
        
        <div class="isi">
            <p class="judul-isi">Yuk cari tahu tentang solo???</p>
            <div class="content-sejarah">
                <div class="box">
                    <div class="gambar">
                        <img src="../properti/batik.jpg" alt="">
                    </div>
                    <div class="isi-sejarah">
                        <p>Jawa berakar pada tradisi keraton. Pada mulanya, batik juga merupakan seni kerajinan lukis yang berkembang di lingkungan keraton. Ia dibuat para putri keraton dan abdi dalem untuk kebutuhan busana yang dikenakan keluarga kerajaan. 
                            Sebagai seni dan tradisi, batik mengalami perkembangan pesat pada masa Mataram Islam.</p>
                        <p> Perjanjian Giyanti pada 1755, batik keraton berkembang secara terpisah di dua keraton: Yogyakarta dan Surakarta. Saat itu barang-barang kerajaan dibawa ke Yogyakarta, dari perabotan keraton sampai kain batik. 
                                Maka, Paku Buwana IV memutuskan untuk membuat busana keraton baru yang diberi nama Gagrak Surakarta atau berarti Gaya Surakarta.</p>
                        <p>Seiring waktu, pembuatan batik menjalar keluar lingkungan keraton yang dikelola dan diperdagangkan para saudagar batik. Mereka mengambil ragam hias batik keraton dan memodifikasikannya dengan selera pasar. Munculnya teknik cap,
                             dari yang semula cap dari kayu lalu beralih ke tembaga, membuat industri batik berkembang pesat. Sentra industri atau dikenal sebagai kampung batik tumbuh di Laweyan dan Kauman.</p>
                    </div>
                </div>
            
                <div class="pelajari">
                    <a href="">Pelajari lebih lanjut</a>
                </div>
            </div>

            <div class="content-sejarah">
                <div class="box">
                    <div class="gambar">
                        <img src="../properti/batik.jpg" alt="">
                    </div>
                    <div class="isi-sejarah">
                        <p>Jawa berakar pada tradisi keraton. Pada mulanya, batik juga merupakan seni kerajinan lukis yang berkembang di lingkungan keraton. Ia dibuat para putri keraton dan abdi dalem untuk kebutuhan busana yang dikenakan keluarga kerajaan. 
                            Sebagai seni dan tradisi, batik mengalami perkembangan pesat pada masa Mataram Islam.</p>
                        <p> Perjanjian Giyanti pada 1755, batik keraton berkembang secara terpisah di dua keraton: Yogyakarta dan Surakarta. Saat itu barang-barang kerajaan dibawa ke Yogyakarta, dari perabotan keraton sampai kain batik. 
                                Maka, Paku Buwana IV memutuskan untuk membuat busana keraton baru yang diberi nama Gagrak Surakarta atau berarti Gaya Surakarta.</p>
                        <p>Seiring waktu, pembuatan batik menjalar keluar lingkungan keraton yang dikelola dan diperdagangkan para saudagar batik. Mereka mengambil ragam hias batik keraton dan memodifikasikannya dengan selera pasar. Munculnya teknik cap,
                             dari yang semula cap dari kayu lalu beralih ke tembaga, membuat industri batik berkembang pesat. Sentra industri atau dikenal sebagai kampung batik tumbuh di Laweyan dan Kauman.</p>
                    </div>
                </div>
            
                <div class="pelajari">
                    <a href="">Pelajari lebih lanjut</a>
                </div>
            </div>

            <div class="content-sejarah">
                <div class="box">
                    <div class="gambar">
                        <img src="../properti/batik.jpg" alt="">
                    </div>
                    <div class="isi-sejarah">
                        <p>Jawa berakar pada tradisi keraton. Pada mulanya, batik juga merupakan seni kerajinan lukis yang berkembang di lingkungan keraton. Ia dibuat para putri keraton dan abdi dalem untuk kebutuhan busana yang dikenakan keluarga kerajaan. 
                            Sebagai seni dan tradisi, batik mengalami perkembangan pesat pada masa Mataram Islam.</p>
                        <p> Perjanjian Giyanti pada 1755, batik keraton berkembang secara terpisah di dua keraton: Yogyakarta dan Surakarta. Saat itu barang-barang kerajaan dibawa ke Yogyakarta, dari perabotan keraton sampai kain batik. 
                                Maka, Paku Buwana IV memutuskan untuk membuat busana keraton baru yang diberi nama Gagrak Surakarta atau berarti Gaya Surakarta.</p>
                        <p>Seiring waktu, pembuatan batik menjalar keluar lingkungan keraton yang dikelola dan diperdagangkan para saudagar batik. Mereka mengambil ragam hias batik keraton dan memodifikasikannya dengan selera pasar. Munculnya teknik cap,
                             dari yang semula cap dari kayu lalu beralih ke tembaga, membuat industri batik berkembang pesat. Sentra industri atau dikenal sebagai kampung batik tumbuh di Laweyan dan Kauman.</p>
                    </div>
                </div>
            
                <div class="pelajari">
                    <a href="">Pelajari lebih lanjut</a>
                </div>
            </div>

        </div>

        <div class="drop-about">
            <div class="about-wrapper">
                <i class="fa-solid fa-arrow-left button" id="prev"></i>
                <div class="image-container">
                    <div class="carousel">
                        <img src="../properti/gambar1.jpg" alt="" />
                        <img src="../properti/gambar2.jpg" alt="" />
                        <img src="../properti/gambar3.jpg" alt="" />
                        <img src="../properti/gambar4.jpg" alt="" />
                    </div>
                <i class="fa-solid fa-arrow-right button" id="next"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

include ("kontak.php");
include ("footer.php");

?>

  <script src="../js/homepage.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>