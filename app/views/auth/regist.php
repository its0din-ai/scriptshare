<div class="dekstop">
    <div class="container d-flex justify-content-center align-items-center min-vh-100 div-desktop regist">
        <div class="" style="max-width: 1200px;">
            <div class="row border rounded-5 p-3 shadow box-area">
                <!-- kiri -->
                <div class="col-md-4 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                    <div class="feature-image mb-3">
                        <img src="./public/img/login.svg" class="img-fluid rounded-start" alt="brand"
                            style="width: 250px;">
                        <p class="text-white fs-2"
                            style="font-family: 'courier new', courier, monospace; font-weight: 600;">Be Verified</p>
                        <small class="text-white text-wrap text-center"
                            style="width: 17rem; font-family: 'courier new', courier, monospace;">Start your adventure
                            here.</small>
                    </div>
                </div>
                <!-- kanan -->
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4 mt-2">
                            <h5 style="color: var(--yellow);">Login / Sign Up</h5>
                        </div>

                        <p class="card-text">
                        <form method="POST" enctype="multipart/form-data">
                            <!-- input username -->
                            <label for="username" class="form-label text-white">Username</label>
                            <div class="input-group mb-3">
                                <input id="username" type="username" class="form-control form-control-lg bg-light fs-6"
                                    name="username" required autocomplete="username"
                                    oninput="this.value = this.value.toLowerCase();">
                            </div>
                            <!-- input nama_pengguna -->
                            <label for="nama_pengguna" class="form-label text-white">Nama Lengkap</label>
                            <div class="input-group mb-3">
                                <input id="nama_pengguna" type="nama_pengguna"
                                    class="form-control form-control-lg bg-light fs-6" name="nama_pengguna" required
                                    autocomplete="nama_pengguna">
                            </div>
                            <!-- input foto -->
                            <label for="foto" class="form-label text-white">Foto Profil
                                <small>(Opsional)</small></label>
                            <div class="input-group mb-3">
                                <input class="form-control form-control-lg bg-light fs-6" type="file"
                                    accept=".jpg,.jpeg,.png" id="foto" name="foto">
                            </div>
                            <!-- input password -->
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control form-control-lg bg-light fs-6"
                                    name="password" required autocomplete="new-password">
                                <button class="btn btn-outline-secondary" type="button" id="mataPassword"
                                    onclick="showPassword()">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            <div class="mt-3">
                                <small><span id="cekUser" class="text-danger"></span></small>
                                <button type="submit" id="tombol-daftar"
                                    class="btn btn-outline-warning mt-3">Daftar</button>
                            </div>
                        </form>
                        </p>
                        <p class="card-text"><small class="text-body-secondary">Sudah punya akun? &dash; <a
                                    href="/login" class="lnk">Login!</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="mobile">
    <div class="container ms-auto me-auto d-flex justify-content-center align-items-center min-vh-60 div-mobile regist">
        <div class="" style="max-width: 1200px;">
            <div class="row border rounded-5 p-3 shadow box-area">
                <!-- kiri -->
                <div class="col-md-4 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                    <div class="feature-image mb-3">
                        <img src="./public/img/login.svg" class="img-fluid rounded-start" alt="brand"
                            style="width: 250px;">
                        <p class="text-white fs-2"
                            style="font-family: 'courier new', courier, monospace; font-weight: 600;">Be Verified</p>
                        <small class="text-white text-wrap text-center"
                            style="width: 17rem; font-family: 'courier new', courier, monospace;">Start your adventure
                            here.</small>
                    </div>
                </div>
                <!-- kanan -->
                <div class="col-md-4 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4 mt-2">
                            <h5 style="color: var(--yellow);">Login / Sign Up</h5>
                        </div>

                        <p class="card-text">
                        <form method="POST" enctype="multipart/form-data">
                            <!-- input username -->
                            <label for="username" class="form-label text-white">Username</label>
                            <div class="input-group mb-3">
                                <input id="username" type="username" class="form-control form-control-lg bg-light fs-6"
                                    name="username" required autocomplete="username"
                                    oninput="this.value = this.value.toLowerCase();">
                            </div>
                            <!-- input nama_pengguna -->
                            <label for="nama_pengguna" class="form-label text-white">Nama Lengkap</label>
                            <div class="input-group mb-3">
                                <input id="nama_pengguna" type="nama_pengguna"
                                    class="form-control form-control-lg bg-light fs-6" name="nama_pengguna" required
                                    autocomplete="nama_pengguna">
                            </div>
                            <!-- input foto -->
                            <label for="foto" class="form-label text-white">Foto Profil
                                <span>(Opsional)</span></label>
                            <div class="input-group mb-3">
                                <input class="form-control form-control-lg bg-light fs-6" type="file"
                                    accept=".jpg,.jpeg,.png" id="foto" name="foto">
                            </div>
                            <!-- input password -->
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control form-control-lg bg-light fs-6"
                                    name="password" required autocomplete="new-password">
                                <button class="btn btn-outline-secondary" type="button" id="mataPassword"
                                    onclick="showPassword()">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            <div class="mt-3">
                                <span id="cekUser" class="text-danger"></span>
                                <button type="submit" id="tombol-daftar"
                                    class="btn btn-outline-warning mt-3">Register</button>
                            </div>
                        </form>
                        </p>
                        <p class="card-text"><small class="text-body-secondary">Sudah punya akun? &dash; <a
                                    href="/login" class="lnk">Login!</a></small></p>
                    </div>
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
        data: {
            username: username
        },
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