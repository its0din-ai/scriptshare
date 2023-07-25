<section id="home" class="">
    <div class="container-sm ">
        <!-- GANTI HOME MULAI DARI SINI-->
        <div class="bgAnimation" id="bgAnimation">
            <div class="backgroundAmim">
            </div>
        </div>

        <section class="hero text-center" id="">
            <div class="container">
                <!-- image  -->
                <img src="/public/img/fav.png" width="112" alt="hero-img">
                <!-- Text -->
                <div class="text">
                    <h1 class="display-4">Scriptshare</h1>
                    <p>Bersama kami, bagikan tulisan Anda disini</p>
                </div>
                <a href="" class="btn btn-warning rounded-pill ">Join with Us</a>
                <a href="" class="btn btn-outline-light ms-3 rounded-pill">Learn more</a>
            </div>
        </section>

        <!-- SAMPAI SINI-->
    </div>
</section>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<section id="about">
    <div class="container-sm ">
        <!-- GANTI ABOUT MULAI DARI SINI-->
        <div class="card mx-auto" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./public/img/brand-lg.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">INI NANTI HOME, OKe bro</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- SAMPAI SINI-->
    </div>
</section>

<script>
    const bgAnimation = document.getElementById('bgAnimation');

    const numberOfColorBoxes = 400;

    for (let i = 0; i < numberOfColorBoxes; i++) {
        const colorBox = document.createElement('div');
        colorBox.classList.add('colorBox');
        bgAnimation.append(colorBox)
    }
</script>