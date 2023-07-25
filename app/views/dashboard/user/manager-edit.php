
<div class="container-sm">
    <div class="row">
        <div class="col-9">
            <h2>Edit Data Pengguna</h2>
            <a href="/manage/user" class="link link-success"><i class="fa-solid fa-arrow-left-long me-2"></i>Kembali</a>
            <hr>
        </div>
        <div class="col-9">
        <form method="POST" enctype="multipart/form-data" action="/update/user">
            <div class="mb-3">
                <input id="crntUser" type="text"
                    style="display: none;" name="crntUser" value="<?= substr($_SERVER['REQUEST_URI'], 13);?>" aria-hidden>
                <label for="username" class="form-label">Username</label>
                <input id="username" type="text"
                    class="form-control" name="username" value="<?= $dat[0];?>">
            </div>
            <div class="mb-3">
                <label for="nama_baru" class="form-label">Nama Lengkap</label>
                <input id="nama_baru" type="text"
                    class="form-control" name="nama_baru"
                    autocomplete="nama_baru" value="<?= $dat[1];?>">
            </div>
            <div class="mb-3">
                <label for="roles" class="form-label">Role</label>
                <select class="form-select" aria-label="Admin" name="roles">
                    <option value="admin" <?php if ($dat[4] === 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="users" <?php if ($dat[4] === 'users') echo 'selected'; ?>>User</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Profil</label>
                <div>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="container masking ms-0">
                            <div class="mask lingkar" ></div>
                            <img src="<?= $dat[2]; ?>" alt="Profil" class="gambar-profil rounded-circle img-fluid"/>
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
                <label for="passBaru" class="form-label">Password Baru</label>
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
            <div class="mt-3">
                <small><span id="cekUser" class="text-danger"></span></small><br>
                <button type="submit" id="tombol-daftar" class="btn btn-outline-warning m1">Update Data</button>
            </div>
        </form>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body me-auto ms-auto">
                <p>
                    <span>
                        <i class="fa-regular fa-circle-check fa-bounce fa-lg align-center me-2" style="color: #fafafa;"></i>
                    </span>
                Profil kamu berhasil diubah!</p>
                <div class="row">
                    <button class="btn btn-sm btn-outline-light" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Done</button>

                </div>
            </div>
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

    function displayFileName() {
        const fileInput = document.getElementById('fotoBaru');
        const selectedFileName = document.getElementById('selectedFileName');

        if (fileInput.files.length > 0) {
            selectedFileName.textContent = `File dipilih: ${fileInput.files[0].name}`;
        } else {
            selectedFileName.textContent = 'Tidak ada file yang dipilih';
        }
    }
    
</script>