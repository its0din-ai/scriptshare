<?php include dirname(__FILE__) . '/../home/dashboard.php';?>

<div class="container-sm">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Pengguna</th>
            <th scope="col">Roles</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $num = 0;
                foreach ($data as $user) {
                    echo '
                    <tr>
                        <th scope="row">' . (++$num) . '</th>
                        <td>' . $user['username'] . '</td>
                        <td>' . $user['nama_pengguna'] . '</td>
                        <td>' . $user['roles'] . '</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <a type="button" class="btn btn-outline-light" href="/manage/user/' . $user['username'] . '">Edit</a>
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#konfirmasiToggler-' . $user['username'] . '">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="konfirmasiToggler-' . $user['username'] . '" aria-hidden="true" aria-labelledby="konfirmasiTogglerLabel-' . $user['username'] . '" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body me-auto ms-auto">
                                    <p>
                                        <span>
                                            <i class="fa-regular fa-circle-xmark fa-bounce fa-lg align-center me-2" style="color: #fafafa;"></i>
                                        </span>
                                        Yakin ingin menghapus user?
                                    </p>
                                    <div class="row">
                                        <button class="btn btn-sm btn-outline-light" data-bs-dismiss="modal">Tidak</button>
                                        <a class="btn btn-sm btn-outline-danger mt-2" href="/delete/user/' . $user['username'] . '">Ya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </tbody>
    </table>

    <button type="button" id="suksesTrigger" style="display: none;" data-bs-target="#suksesToggle" data-bs-toggle="modal"></button>
    <div class="modal fade" id="suksesToggle" aria-hidden="true" aria-labelledby="suksesToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body me-auto ms-auto">
                <p id="konten">
                    <span>
                        <i class="fa-regular fa-circle-check fa-bounce fa-lg align-center me-2" style="color: #fafafa;"></i>
                    </span>
                Berhasil mengubah profil <em>@<?php echo $_SESSION['sukses-edit'][1];?></em></p>
                <div class="row">
                    <button class="btn btn-sm btn-outline-light" data-bs-target="#suksesToggle2" data-bs-toggle="modal">Done</button>

                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_SESSION['sukses-edit'])){
            echo '<script>
                let isi = document.getElementById("konten");
                isi.innerHTML = "<span><i class=\"fa-regular fa-circle-check fa-bounce fa-lg align-center me-2\" style=\"color: #fafafa;\"></i></span> Berhasil mengubah user <em>@' . $_SESSION['sukses-edit'][1] . '</em>";
            
                window.addEventListener("DOMContentLoaded", function() {
                    // Find the trigger button element
                    const triggerButton = document.getElementById("suksesTrigger");

                    // Trigger the modal
                    if (triggerButton) {
                        triggerButton.click();
                    }
                });
            </script>';
            unset($_SESSION['sukses-edit']);
        }else if(isset($_SESSION['sukses-delete'])){
            echo '<script>
                let isi = document.getElementById("konten");
                isi.innerHTML = "<span><i class=\"fa-regular fa-circle-check fa-bounce fa-lg align-center me-2\" style=\"color: #fafafa;\"></i></span> Berhasil menghapus user <em>@' . $_SESSION['sukses-delete'] . '</em>";
                
                window.addEventListener("DOMContentLoaded", function() {
                    // Find the trigger button element
                    const triggerButton = document.getElementById("suksesTrigger");

                    // Trigger the modal
                    if (triggerButton) {
                        triggerButton.click();
                    }
                });
            </script>';
            unset($_SESSION['sukses-delete']);
        }
    ?>
</div>


<script>
    function getClientHours() {
        const currentTime = new Date();
        return currentTime.getHours();
    }
    const clientHours = getClientHours();
    const greetz = document.getElementById("greetz");
    if (clientHours >= 0 && clientHours < 12) {
        greetz.innerHTML = "Selamat Pagi 🌅";
    } else if (clientHours >= 12 && clientHours < 15) {
        greetz.innerHTML = "Selamat Siang 🌞";
    } else if (clientHours >= 15 && clientHours < 18) {
        greetz.innerHTML = "Selamat Sore 🌇";
    } else if (clientHours >= 18 && clientHours < 24) {
        greetz.innerHTML = "Selamat Malam 🌙";
    }
</script>