<?php include dirname(__FILE__) . '/../home/dashboard.php';?>

<div class="container-sm">
    <a type="button" class="btn btn-primary mb-5" href="/dashboard/script">Tambah Script</a>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Pemilik</th>
            <th scope="col">Judul</th>
            <th scope="col">Visibility</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $script) {
                    echo '
                    <tr>
                        <th scope="row">' . $script['id'] . '</th>
                        <td>' . $script['uploader'] . '</td>
                        <td><a class="link link-light" href="/script/'.$script['script_slug'].'">' . $script['judul_script'] . '</a></td>
                        <td>' . $script['visibility'] . '</td>
                        <td>' . $script['tanggal'] . '</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <a type="button" class="btn btn-outline-light" href="/edit/sc/' . $script['script_slug'] . '">Edit</a>
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#konfirmasiToggler-' . $script['id'] . '">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="konfirmasiToggler-' . $script['id'] . '" aria-hidden="true" aria-labelledby="konfirmasiTogglerLabel-' . $script['id'] . '" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body me-auto ms-auto">
                                    <p>
                                        <span>
                                            <i class="fa-regular fa-circle-xmark fa-bounce fa-lg align-center me-2" style="color: #fafafa;"></i>
                                        </span>
                                        Yakin ingin menghapus script?
                                    </p>
                                    <div class="row">
                                        <button class="btn btn-sm btn-outline-light" data-bs-dismiss="modal">Tidak</button>
                                        <a class="btn btn-sm btn-outline-danger mt-2" href="/delete/sc/' . $script['id'] . '">Ya</a>
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
                ...... isi text</p>
                <div class="row">
                    <button class="btn btn-sm btn-outline-light" data-bs-target="#suksesToggle2" data-bs-toggle="modal">Done</button>

                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_SESSION['sukses-tambah'])){
            echo '<script>
                let isi = document.getElementById("konten");
                isi.innerHTML = "<span><i class=\"fa-regular fa-circle-check fa-bounce fa-lg align-center me-2\" style=\"color: #fafafa;\"></i></span> Berhasil menambahkan <u>' . $_SESSION['sukses-tambah'] . '</u>";
            
                window.addEventListener("DOMContentLoaded", function() {
                    // Find the trigger button element
                    const triggerButton = document.getElementById("suksesTrigger");

                    // Trigger the modal
                    if (triggerButton) {
                        triggerButton.click();
                    }
                });
            </script>';
            unset($_SESSION['sukses-tambah']);
        }else if(isset($_SESSION['sukses-hapus'])){
            echo '<script>
                let isi = document.getElementById("konten");
                isi.innerHTML = "<span><i class=\"fa-regular fa-circle-check fa-bounce fa-lg align-center me-2\" style=\"color: #fafafa;\"></i></span> Script berhasil dihapus</u>";
            
                window.addEventListener("DOMContentLoaded", function() {
                    // Find the trigger button element
                    const triggerButton = document.getElementById("suksesTrigger");

                    // Trigger the modal
                    if (triggerButton) {
                        triggerButton.click();
                    }
                });
            </script>';
            unset($_SESSION['sukses-hapus']);
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