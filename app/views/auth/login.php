<div class="container-sm content-align-center mt-5">
        <div class="card mx-auto" style="max-width: 1200px;">
            <div class="row g-0">
                <div class="col-md-4 rounded-start" style="background-color: #DFDCD4;">
                    <img src="./public/img/brand-lg.png" class="img-fluid rounded-start" alt="brand">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login / Sign Up</h5>
                        <hr>

                        <p class="card-text">
                            <form method="POST">
                                <?php if(isset($_SESSION['success']) && $_SESSION['success']){ ?>
                                    <div class="alert alert-info d-flex align-items-center mt-2 ms-auto me-auto" role="alert" style="max-width: 390px; height: 35px;">
                                        <i class="fa-solid fa-check me-3"></i>
                                        <div class="">
                                            <small>Anda berhasil mendaftar, silahkan Masuk!</small>
                                        </div>
                                        <button type="button" class="btn btn-sm" data-bs-dismiss="alert" aria-label="Close">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                    </div>
                                <?php }; unset($_SESSION['success']); ?>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input id="username" type="username"
                                        class="form-control" name="username"
                                        required autocomplete="username">
                                </div>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input id="password" type="password"
                                        class="form-control" name="password"
                                        required autocomplete="new-password">
                                    <button class="btn btn-outline-secondary" type="button" id="mataPassword"
                                        onclick="showPassword()">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-outline-success mt-3">Login</button>
                                </div>
                            </form>
                        </p>


                        <p class="card-text"><small class="text-body-secondary">Belum punya akun? &dash; <a
                                    href="/regist" class="lnk">Daftar!</a></small></p>
                        
                                <?php if(isset($_SESSION['error']) && $_SESSION['error']){ ?>
                                    <div class="alert alert-danger d-flex align-items-center mt-2 ms-auto me-auto" role="alert" style="max-width: 360px; height: 35px;">
                                        <i class="fa-solid fa-triangle-exclamation me-3"></i>
                                        <div class="">
                                            <small>Username dan Password tidak sesuai!</small>
                                        </div>
                                        <button type="button" class="btn btn-sm" data-bs-dismiss="alert" aria-label="Close">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                    </div>
                                <?php }; unset($_SESSION['error']); ?>
                        
                        <p class="card-text text-end"><small class="text-body-secondary"><a href="/lupaaa">Lupa
                                    Password</a></small>
                        </p>
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