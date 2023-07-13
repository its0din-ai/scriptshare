<div class="container-sm">
<div class="row">
    <div class="col-9">
        <h2>Halo <strong><?= $_SESSION['users']['nama_pengguna'];?></strong> !</h2>
        <p class="lead">Selamat datang di dashboard anda.</p>
    </div>
    <div class="col-9">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Manage Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Manage Scripts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Manage Shortlinks</a>
        </li>
    </ul>
    <div class="card mb-3" style="border-radius: .5rem;">
        <div class="row g-0">
            
            <div class="col-md-4 text-center text-white"
            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <div class="container masking my-3">
                    <div class="mask lingkar" ></div>
                    <img src="<?= $_SESSION['users']['profile']; ?>" alt="Profil" class="gambar-profil rounded-circle img-fluid"/>
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
                            <p class="text-muted">info@example.com</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Links Shorted</h6>
                            <p class="text-muted">123 456 789</p>
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