<?php include dirname(__FILE__) . '/../home/dashboard.php';?>

<div class="container-sm">

    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Pemilik</th>
            <th scope="col">Shortlink</th>
            <th scope="col">Tujuan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $short) {
                    // check if 'tujuan' have http:// or https://
                    if (strpos($short['tujuan'], 'http://') !== false || strpos($short['tujuan'], 'https://') !== false) {
                        continue;
                    } else {
                        $short['tujuan'] = 'http://' . $short['tujuan'];
                    }

                    echo '
                    <tr>
                        <th scope="row">' . $short['id'] . '</th>
                        <td>' . $short['owner'] . '</td>
                        <td>
                            <button class="btn btn-sm btn-outline-light" onclick="copyToClipboard(\'http://scriptshare.tech/sh/'.$short['short_slug'].'\')">
                                '.$short['short_slug'].'
                            </button>
                        </td>
                        <td><a class="hvr-bounce-in link-light" target="_blank" href="' . $short['tujuan'] . '">' . $short['tujuan'] . '</a></td>
                        
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#konfirmasiToggler-' . $short['id'] . '">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- ModalEdit -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalDialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editModalDialog">Edit Shortlink</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/update/sc">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Short URL</label>
                                    <input type="text" class="form-control disabled" id="slug" name="slug" value="' . $short['short_slug'] . '" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Original URL</label>
                                    <input type="text" class="form-control disabled" id="slug" name="tujuan" value="' . $short['tujuan'] . '" readonly>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-outline-warning">Simpan Perubahan</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    <!-- ModalSukses -->
                    <div class="modal fade" id="konfirmasiToggler-' . $short['id'] . '" aria-hidden="true" aria-labelledby="konfirmasiTogglerLabel-' . $short['id'] . '" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body me-auto ms-auto">
                                    <p>
                                        <span>
                                            <i class="fa-regular fa-circle-xmark fa-bounce fa-lg align-center me-2" style="color: #fafafa;"></i>
                                        </span>
                                        Yakin ingin menghapus short?
                                    </p>
                                    <div class="row">
                                        <button class="btn btn-sm btn-outline-light" data-bs-dismiss="modal">Tidak</button>
                                        <a class="btn btn-sm btn-outline-danger mt-2" href="/delete/short/' . $short['id'] . '">Ya</a>
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
        }else if(isset($_SESSION['sukses-tambah'])){
            echo '<script>
                let isi = document.getElementById("konten");
                isi.innerHTML = "<span><i class=\"fa-regular fa-circle-check fa-bounce fa-lg align-center me-2\" style=\"color: #fafafa;\"></i></span> Berhasil menambahkan Shortlink";
            
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

    function copyToClipboard(text) {
        const textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
    
        const btn = event.target;
        btn.textContent = 'Copied!';
        btn.disabled = true;
    }
</script>