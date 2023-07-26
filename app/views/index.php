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
                    echo '<a href="/dashboard" class="btn btn-outline-info rounded-pill"><span>Dashboard</span></a>';
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
        <!-- Cards for medium and larger screens -->
        <div class="d-flex justify-content-center">
            <h1 class="text-white">Profiles</h1>
        </div>

        <section id="about">
            <div class="container-sm ">
                <!-- GANTI ABOUT MULAI DARI SINI-->
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
                            <img src="/public/img/j.jpg" class="card-img" alt="profil">
                            <div class="card-img-overlay align-items-end txt-pfp">
                                <p class="card-text nama">Muhammad Aji Saputra</p>
                                <p class="card-text nim">L200210030</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- SAMPAI SINI-->
    </div>
    <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="staff">Tim Kami</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
                quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
                quod.
            </p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                    <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" class="rounded-circle mb-3" />
                    <h4>MUHAMMAD WAHYU SYAFI’UDDIN</h4>
                    <p>Web Designer</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <img src="https://tse2.explicit.bing.net/th?id=OIP.z8xqsQs0C52pRHy3QQQzlQHaHV&pid=Api&P=0&h=180" class="rounded-circle mb-3" />
                    <h4>HYUGA DEWANTO KOJYRO</h4>
                    <p>Data Scientist</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <img src="https://i.pinimg.com/736x/17/18/f2/1718f2d56be86b350e8fde5af7d5017a.jpg" class="rounded-circle mb-3" />
                    <h4>MUHAMMAD AJI SAPUTRA</h4>
                    <p>Network Engineer</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
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