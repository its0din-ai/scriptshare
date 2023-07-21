<div class="container-sm">
<div class="row">
    <div class="col-9">
        <h2>Menu Edit Profil</h2>
    </div>
    <div class="col-9">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="username" class="form-label">Username<br><small><span class="text-danger">hubungi admin untuk merubah username</span></small></label>
                <input id="username" type="username"
                    class="form-control" name="username" readonly value="<?= $userdata[0];?>">
            </div>
            <div class="mb-3">
                <label for="nama_baru" class="form-label">Nama Lengkap</label>
                <input id="nama_baru" type="nama_baru"
                    class="form-control" name="nama_baru"
                    autocomplete="nama_baru" value="<?= $userdata[1];?>">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Profil</label>
                <div>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="container masking ms-0">
                            <div class="mask lingkar" ></div>
                            <img src="<?= $_SESSION['users']['profile_path']; ?>" alt="Profil" class="gambar-profil rounded-circle img-fluid"/>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="btn btn-sm btn-outline-primary btn-rounded">
                            <label class="form-label text-white m-1" for="fotoBaru">Choose file</label>
                            <input type="file" class="form-control d-none" accept=".jpg,.jpeg,.png" id="fotoBaru" name="fotoBaru" onchange="displayFileName()"/>
                        </div>
                    </div>
                    <p id="selectedFileName" class="pt-2 mb-4 text-primary"></p>
                </div>
            </div>
            <div class="mb-3">
                <label for="passBaru" class="form-label">Password Baru <small>(Opsional)</small></label>
                <div class="input-group">
                    <input id="passBaru" type="password"
                        class="form-control" name="passBaru"
                        autocomplete="new-passBaru">
                    <button class="btn btn-outline-secondary" type="button" id="mataPasswords"
                        onclick="showPassword1()">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label">Password saat ini <small>(<span class="text-danger">*</span>)</small></label>
                <div class="input-group">
                    <input id="crntPass" type="password"
                        class="form-control" name="crntPass"
                        required>
                    <button class="btn btn-outline-secondary" type="button" id="mataPassword"
                        onclick="showPassword2()">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="mt-3">
                <small><span id="cekUser" class="text-danger"></span></small><br>
                <button type="submit" id="tombol-daftar" class="btn btn-outline-warning m1 disabled">Update Data</button>
            </div>
        </form>
    </div>
</div>
</div>

<script>
    function showPassword1() {
        var inputan = document.getElementById("passBaru");
        if (inputan.type === "password") {
            inputan.type = "text";
            document.getElementById("mataPasswords").innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
        } else {
            inputan.type = "password";
            document.getElementById("mataPasswords").innerHTML = '<i class="fa-solid fa-eye"></i>';
        }
    }

    function showPassword2() {
        var inputan = document.getElementById("crntPass");
        if (inputan.type === "password") {
            inputan.type = "text";
            document.getElementById("mataPassword").innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
        } else {
            inputan.type = "password";
            document.getElementById("mataPassword").innerHTML = '<i class="fa-solid fa-eye"></i>';
        }
    }

    function displayFileName() {
        const fileInput = document.getElementById('fotoBaru');
        const selectedFileName = document.getElementById('selectedFileName');

        if (fileInput.files.length > 0) {
            selectedFileName.textContent = `File dipilih: ${fileInput.files[0].name}`;
        } else {
            selectedFileName.textContent = 'Tidak ada file yang dipilih';
        }
    }

    $(document).ready(function() {
        $('#crntPass').on('input', function() {
            var passwd = $(this).val();
            checkPass(passwd);
        });
    });

    function checkPass(passwd) {
    $.ajax({
        url: '/cekpass',
        method: 'POST',
        data: { passwd: passwd, username: '<?= $_SESSION['users']['username'];?>' },
        success: function(response) {
            if (response == 'match') {
                $('#cekUser').html('');
                $('#tombol-daftar').removeClass('disabled');
            } else {
                $('#cekUser').html('Password salah!');
            }
        },
        error: function() {
            console.error('ERROR 500');
        }
    });
    }
</script>