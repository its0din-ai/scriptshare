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

                <?php
                if ($adaSesiLogin) {
                    echo '<a href="/dashboard" class="btn btn-outline-info rounded-pill">Dashboard</a>';
                } else {
                    echo '<a href="/regist" class="btn btn-outline-warning rounded-pill px-4">Register Now</a>';
                }
                ?>
            </div>
        </section>
        <!-- SAMPAI SINI-->
    </div>
</section>


<section id="about" class="abt-sec">
    <div class="container-sm pt-5 abt">
        <!-- GANTI ABOUT MULAI DARI SINI-->
        <div class="d-flex justify-content-center mt-5">
            <h1 class="text-white">Profiles</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card card-pfp">
                    <img src="/public/img/pfp.png" class="card-img" alt="profil">
                    <div class="card-img-overlay align-items-end txt-pfp">
                        <p class="card-text nama">Muhammad Wahyu Syafiuddin</p>
                        <p class="card-text nim">L200210056</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card card-pfp">
                    <img src="/public/img/hyugenk.png" class="card-img" alt="profil">
                    <div class="card-img-overlay align-items-end txt-pfp">
                        <p class="card-text nama">Hyuga Dewanto Kojyro</p>
                        <p class="card-text nim">L200210023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card card-pfp">
                    <img src="/public/img/aji.jpg" class="card-img" alt="profil">
                    <div class="card-img-overlay align-items-end txt-pfp">
                        <p class="card-text nama">Muhammad Aji Saputra</p>
                        <p class="card-text nim">L200210030</p>
                    </div>
                </div>
            </div>
        </div>
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