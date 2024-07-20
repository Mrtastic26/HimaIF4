<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<style>
    *.html,body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .parallax{
        width: 100%;
        height: 100vh;
    }
    .navbar{
        background-color:;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
    } 
    .about{
       
        width: 100%;
        height: 100vh;
    }
    .divisi{
        background-color: #333333;
        width: 100%;
        height: 80vh;
    }
    .video{
        background-color: aliceblue;
        width: 100%;
        height: 100vh;

    }
    .contact{
        background-color: black;
        height: 100vh;
        height: 100vh;
    }
</style>
<body>
    <!--Navbar-->
    <div class="parallax navbar">
        <div id="navbar1" class="connav">
            <div class="nav">
                <a href="#Landing">
                    <div><img class="hmiflogo1" src="HMIFnav.png" alt=""></div>
                </a>
                <div class="navtext">
                    <a href="#Landing"><h2 class="thome">Beranda</h2></a>
                    <div class="dropdown">
                        <a href="#Tentang"><h2 class="ttentang">Tentang</h2></a>
                      
                    </div>
                    <div class="dropdown">
                        <a href="#Divisi"><h2 class="tdivisi">Divisi ▼</h2></a>
                        <div class="dropdown-content">
                            <a href="dpp.php">DPP</a>
                            <a href="presidium.php">Presidium Inti</a>
                            <a href="hrd.php">HRD</a>
                            <a href="pr.php">PR</a>
                            <a href="infomed.php">INFOMED</a>
                            <a href="entre.php">ENTERENEUR</a>
                        </div>
                    </div>
                    <a href="#video"><h2 class="tevent">Gallery</h2></a>
                    <div class="dropdown">
                        <a href="#contact"><h2 class="tsosmed">Sosmed ▼</h2></a>
                        <div class="dropdown-content">
                            <a href="mailto:HMIF@gmail.com">EMAIL</a>
                            <a href="tel:+62 851 6000 1122">WHATSAPP</a>  
                            <a href="https://www.instagram.com/hmif_unand/">INSTAGRAM</a>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Content Landing Page-->        
        <div id="Landing" class="navcontent">
            <div><img class="overlay" src="tone.png" alt=""></div>
            <div>
                <img class="DG1" src="Gelembungkanan.png" alt="">  
                <img class="DG2" src="Gelembungkiri.png" alt="">
            </div>
            <div>
                <div><img class="hmiflogo2" src="LogoHMIF.png" alt=""></div>
                <div class="ex2">
                    <div class="back"></div>
                    <div class="btext1">HIMPUNAN MAHASISWA</div>
                    <div class="conbtext2"> 
                        <div class="btext2">INFORMATIKA</div> 
                    </div>
                </div>
            </div>
        </div>
        <div id="marquee" class="marquee">
            <div class="marquee-content" id="text">
                HMIF + Selamat Datang di website Himpunan Mahasiswa Informatika +  HMIF + Selamat Datang di website Himpunan Mahasiswa Informatika +  HMIF + Selamat Datang di website Himpunan Mahasiswa Informatika + HMIF + Selamat Datang di website Himpunan Mahasiswa Informatika
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.navbar a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                // Check if the href is a valid section ID
                if (document.querySelector(this.getAttribute('href'))) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const text = document.getElementById("text");
            const repeatedText = text.innerText + " " + text.innerText;
            text.innerText = repeatedText;
            const spanWidth = text.offsetWidth;
            const marqueeWidth = text.parentElement.offsetWidth;
            const duration = (spanWidth / marqueeWidth) * 10; // Adjust timing based on width
            text.style.animationDuration = `${duration}s`;
        });
    </script>
    <!---About US-->
    <div id="Tentang" class="parallax about">

    <object data="AboutUs.html" width="100%" height="110%"></object>
    </div>

       
        
        

   
       
    <!--DIVISI-->
    <div id="Divisi" class="divisi">
    <?php include 'Divisi.php'; ?>
    </div>
   


      <!--Video-->

    <div id="video" class="video">
        <object data="Gallery.html" width="100%" height="100%"></object>
      
    </div>
   
      <!--Contact-->

    <div id="contact" class="contact">

        <object data="footer.html" width="100%" height="100%"></object>
    </div>
</body>
</html>
