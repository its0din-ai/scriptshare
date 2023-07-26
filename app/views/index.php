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
        <!-- <div class="card mx-auto" style="max-width: 540px;">
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
        </div> -->
        <!-- SAMPAI SINI-->
    </div>
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staff">Tim Kami</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
          quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
          quod.
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img
              src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
              class="rounded-circle mb-3"
            />
            <h4>MUHAMMAD WAHYU SYAFI’UDDIN</h4>
            <p>Web Designer</p>
            <p>
              <a href="" class="social"><i class="fab fa-instagram"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="https://tse2.explicit.bing.net/th?id=OIP.z8xqsQs0C52pRHy3QQQzlQHaHV&pid=Api&P=0&h=180"
              class="rounded-circle mb-3"
            />
            <h4>HYUGA DEWANTO KOJYRO</h4>
            <p>Data Scientist</p>
            <p>
              <a href="" class="social"><i class="fab fa-instagram"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="https://i.pinimg.com/736x/17/18/f2/1718f2d56be86b350e8fde5af7d5017a.jpg"
              class="rounded-circle mb-3"
            />
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