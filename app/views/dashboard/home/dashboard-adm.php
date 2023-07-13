<div class="container-sm">
<div class="row">
    <div class="col-9">
        <h2>Halo <strong><?= $_SESSION['users']['nama_pengguna'];?></strong> !</h2>
        <p class="lead">Selamat datang di dashboard anda.</p>
    </div>
    <div class="col-8">
    <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="<?= $_SESSION['users']['profile'];?>"
                        alt="Avatar" class="img-fluid my-3" style="width: 150px;" />
                    <h5><?= $_SESSION['users']['nama_pengguna'];?></h5>
                    <p>@<?= $_SESSION['users']['username'];?></p>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4">
                        <h6>Information</h6>
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
                        </div>
                    </div>
                    </div>
                </div>
                </div>
    </div>
    <div class="col-4">
        <nav class="nav flex-column">
            <a class="nav-link active" aria-current="page" href="#">Profile</a>
            <a class="nav-link" href="#">Manage Users</a>
            <a class="nav-link" href="#">Manage Scripts</a>
            <a class="nav-link" href="#">Manage Shortlinks</a>
        </nav>
    </div>
</div>
</div>