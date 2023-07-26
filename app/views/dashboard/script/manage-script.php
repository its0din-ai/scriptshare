<?php include dirname(__FILE__) . '/../home/dashboard.php';?>

<div class="container-sm">

    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
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
                                        <a class="btn btn-sm btn-outline-danger mt-2" href="/delete/script/' . $script['id'] . '">Ya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </tbody>
    </table>
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