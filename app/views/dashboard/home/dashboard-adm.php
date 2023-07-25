<?php include dirname(__FILE__) . '/dashboard.php';?>

    <div class="col-9">
        <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
                
                <div class="col-md-4 text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <div class="container masking my-3">
                        <div class="mask lingkar" ></div>
                        <img src="<?= $_SESSION['users']['profile_path']; ?>" alt="Profil" class="gambar-profil rounded-circle img-fluid"/>
                    </div>
                    <h5><?= $_SESSION['users']['nama_pengguna'];?></h5>
                    <h6>@<?= $_SESSION['users']['username'];?></h6>
                </div>

                <div class="col-md-8">
                    <div class="card-body p-4">
                        <h5>Information</h5>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Script Created</h6>
                                <div class="text-muted numAnim" max="<?php
                                    $x = new UserController();
                                    $totalScript = $x->totalScript();

                                    echo $totalScript;
                                ?>">0</div>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Links Shorted</h6>
                                <div class="text-muted numAnim" max="<?php
                                    $x = new UserController();
                                    $totalShort = $x->totalShort();

                                    echo $totalShort;
                                ?>"></div>
                            </div>
                            <div class="col-12 pt-5 text-end">
                                <a href="/dashboard/edit" class="btn btn-sm btn-outline-info">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    const counters = document.querySelectorAll('.numAnim');
    const animationDuration = 10*10000000;

    counters.forEach(counter => {
        const value = +counter.getAttribute('max');
        const initialValue = +counter.innerText;
        const increment = (value - initialValue) / (animationDuration / 16);
        
        const animate = () => {
            let currentValue = +counter.innerText;

            if (currentValue < value) {
                counter.innerText = Math.ceil(currentValue + increment);
                requestAnimationFrame(animate);
            } else {
                counter.innerText = value;
            }
        }

        animate();
    });

    // greeting
    function getClientHours() {
        const currentTime = new Date();
        return currentTime.getHours();
    }
    const clientHours = getClientHours();
    const greetz = document.getElementById("greetz");
    if (clientHours >= 0 && clientHours < 12) {
        greetz.innerHTML = "Selamat Pagi 🌅";
    } else if (clientHours >= 12 && clientHours < 15) {
        greetz.innerHTML = "Selamat Siang 🌞";
    } else if (clientHours >= 15 && clientHours < 18) {
        greetz.innerHTML = "Selamat Sore 🌇";
    } else if (clientHours >= 18 && clientHours < 24) {
        greetz.innerHTML = "Selamat Malam 🌙";
    }
</script>