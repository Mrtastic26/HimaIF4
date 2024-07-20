<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIF-Divisi</title>
    <link rel="stylesheet" href="Divisi2.css">
</head>
<body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btns = document.querySelectorAll('.btn');
    const imgContainers = document.querySelectorAll('.pict1');

    // Set the first image container to be displayed by default
    imgContainers[0].style.display = 'block';

    btns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            imgContainers.forEach(container => container.style.display = 'none'); // Hide all image containers
            imgContainers[index].style.display = 'block'; // Show the selected image container
        });
    });
});
</script>

    <div class="container">
        <div class="container1 1">
            <div class="container1 2">
                <div class="judul">DIVISI</div>
                <div class="layer1"></div>
                <div class="layer2"></div>
                <div class="layer3"><img class="overlaygel" src="patterngel.png" alt=""></div>
            </div>
        </div>
        <div class="container2">
            <div class="container2.1">
                <div class="container2.2">
                    <div class="Imgslider">
                        <!---IMG btn--->
                        <div class="btn" id="btn1"><img class="btn-img" src="DPP.png" alt=""></div>
                        <div class="btn" id="btn2"><img class="btn-img" src="inti.png" alt=""></div>
                        <div class="btn" id="btn3"><img class="btn-img" src="PR.png" alt=""></div>
                        <div class="btn" id="btn4"><img class="btn-img" src="PSDM.png" alt=""></div>
                        <div class="btn" id="btn5"><img class="btn-img" src="Infomed.png" alt=""></div>
                        <div class="btn" id="btn6"><img class="btn-img" src="Entrepreneur.png" alt=""></div>
                        <div class="btntext"> Click one of the images below <br> ▼ </div>
                        <!---IMG btn--->
                        <!---IMG--->
                        <div class="pict1" id="img1">
                            <img src="carddpp.png" alt="" class="img1">
                            <a href="dpp.html" class="more-btn">Selengkapnya</a>
                        </div>
                        <div class="pict1" id="img2">
                            <img src="cardinti.png" alt="" class="img1">
                            <a href="presidium.html" class="more-btn">Selengkapnya</a>
                        </div>
                        <div class="pict1" id="img3">
                            <img src="cardpr.png" alt="" class="img1">
                                <a href="pr.html" class="more-btn">Selengkapnya</a>
                            </div>
                        <div class="pict1" id="img4">
                            <img src="cardpsdm.png" alt="" class="img1">
                            <a href="hrd.html" class="more-btn">Selengkapnya</a>
                        </div>
                        <div class="pict1" id="img5">
                            <img src="cardinfomed.png" alt="" class="img1">
                            <a href="infomed.html" class="more-btn">Selengkapnya</a>
                        </div>
                        <div class="pict1" id="img6">
                            <img src="cardenter.png" alt="" class="img1">
                            <a href="entre.html" class="more-btn">Selengkapnya</a>
                        </div>
                        <!---IMG--->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="Divisi.js"></script>
</body>
</html>
