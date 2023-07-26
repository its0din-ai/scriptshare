<div class="container d-flex justify-content-center align-items-center  min-vh-100">
    <div class="" style="max-width: 1200px;">
        <div class="row border rounded-5 p-3 shadow box-area bg-white">
            <!-- kiri -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-color: #103cbe;">
                <div class="feature-image mb-3">
                    <img src="./public/img/login.svg" class="img-fluid rounded-start" alt="brand" style="width: 250px;">
                    <p class="text-white fs-2"
                        style="font-family: 'courier new', courier, monospace; font-weight: 600;">Be Verified</p>
                    <small class="text-white text-wrap text-center"
                        style="width: 17rem; font-family: 'courier new', courier, monospace;">Join with Us on this
                        platform</small>
                </div>
            </div>
            <!-- kanan -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h5>Login / Sign Up</h5>
                    </div>

                    <p class="card-text">
                    <form method="POST">
                        <?php if (isset($_SESSION['success']) && $_SESSION['success']) { ?>
                        <div class="alert alert-info d-flex align-items-center mt-2 ms-auto me-auto" role="alert"
                            style="max-width: 390px; height: 35px;">
                            <i class="fa-solid fa-check me-3"></i>
                            <div class="">
                                <small>Anda berhasil mendaftar, silahkan Masuk!</small>
                            </div>
                            <button type="button" class="btn btn-sm" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <?php };
                        unset($_SESSION['success']); ?>
                        <!-- input username -->
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group mb-3">
                            <input class="form-control form-control-lg bg-light fs-6" id="username" type="username"
                                name="username" required autocomplete="username" placeholder="username">
                        </div>
                        <!-- input password -->
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control form-control-lg bg-light fs-6"
                                name="password" required autocomplete="new-password" placeholder="password">
                            <button class="btn btn-outline-secondary" type="button" id="mataPassword"
                                onclick="showPassword()">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                        <div>
                            <button type="submit" onclick="cekAkun()" class="btn btn-outline-success mt-3">Log
                                in</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_SESSION['stats']) && $_SESSION['stats'] == "salah") { ?>
                    <div id="handlingSalah" class="text-danger mt-1">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <small>Username dan Password salah!</small>
                    </div>
                    <?php } ?>
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Belum punya akun? &dash; <a href="/regist"
                                class="lnk">Daftar!</a></small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showPassword() {
    var inputan = document.getElementById("password");
    if (inputan.type === "password") {
        inputan.type = "text";
        document.getElementById("mataPassword").innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    } else {
        inputan.type = "password";
        document.getElementById("mataPassword").innerHTML = '<i class="fa-solid fa-eye"></i>';
    }
}
</script>