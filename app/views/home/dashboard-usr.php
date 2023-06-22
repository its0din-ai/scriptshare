<div class="container mt-5">
    <div class="me-auto ms-auto text-center">
        <div>
            <h1>Dashboard User Biasaaa</h1>
            <h3>Hi, <?= $_SESSION['users']['nama_pengguna']; ?>!</h3>

            <div class="container masking">
                <div class="mask lingkar" ></div>
                <img src="<?= $_SESSION['users']['profile']; ?>" alt="Profil" class="gambar-profil rounded-circle img-fluid"/>
            </div>
            
        </div>
    </div>
</div>