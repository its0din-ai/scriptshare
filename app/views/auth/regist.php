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
                                    <label for="username" class="form-label">Username <small>(<span class="text-danger">*</span>)</small></label>
                                    <input id="username" type="username"
                                        class="form-control" name="username"
                                        required autocomplete="username" oninput="this.value = this.value.toLowerCase();">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_pengguna" class="form-label">Nama Lengkap</label>
                                    <input id="nama_pengguna" type="nama_pengguna"
                                        class="form-control" name="nama_pengguna"
                                        required autocomplete="nama_pengguna">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto Profil <small>(Opsional)</small></label>
                                    <input class="form-control" type="file" accept=".jpg,.jpeg,.png" id="foto" name="foto">
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
                                <div class="mt-3">
                                    <small><span id="cekUser" class="text-danger"></span></small>
                                    <button type="submit" id="tombol-daftar" class="btn btn-outline-success">Daftar</button>
                                </div>
                            </form>
                        </p>
                        <p class="card-text"><small class="text-body-secondary">Sudah punya akun? &dash; <a href="/login" class="lnk">Login!</a></small></p>
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

        $(document).ready(function() {
            $('#username').on('input', function() {
                var username = $(this).val();
                checkUsernameAvailability(username);
            });
        });

        function checkUsernameAvailability(username) {
        $.ajax({
            url: '/cekuser',
            method: 'POST',
            data: { username: username },
            success: function(response) {
            if (response === 'exist') {
                $('#cekUser').text('Maaf, Username sudah digunakan');
                $('#tombol-daftar').addClass('d-none');
            } else {
                $('#cekUser').text('');
                $('#tombol-daftar').removeClass('d-none');
            }
            },
            error: function() {
                console.error('ERROR 500');
            }
        });
        }
    </script>