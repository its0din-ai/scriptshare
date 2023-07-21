<div class="container-sm">
<div class="row">
    <div class="col-9">
        <h2>Hai <strong><?= $_SESSION['users']['nama_pengguna'];?></strong> !</h2>
        <p class="lead">Selamat datang di dashboard anda.</p>
    </div>
    <div class="col-8">
    <div class="card mb-3" style="border-radius: .5rem;">
        <div class="row g-0">
            <div class="col-md-4 text-center text-white"
            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <div class="container masking my-3">
                    <div class="mask lingkar" ></div>
                    <img src="<?= $_SESSION['users']['profile_path']; ?>" alt="Profil" class="gambar-profil rounded-circle img-fluid"/>
                </div>
                <h5><?= $_SESSION['users']['nama_pengguna'];?></h5>
                <p>@<?= $_SESSION['users']['username'];?></p>
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
</script>