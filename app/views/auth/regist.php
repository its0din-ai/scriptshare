<div class="container mt-5">
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
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input id="username" type="username"
                                        class="form-control" name="username"
                                        required autocomplete="username">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_pengguna" class="form-label">Nama Lengkap</label>
                                    <input id="nama_pengguna" type="nama_pengguna"
                                        class="form-control" name="nama_pengguna"
                                        required autocomplete="nama_pengguna">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Upload Foto Profil</label>
                                    <input class="form-control" type="file" accept=".jpg,.gif,.png" id="foto" name="foto">
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
                                    <button type="submit" class="btn btn-outline-success mt-3">Daftar</button>
                                </div>
                            </form>
                        </p>
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