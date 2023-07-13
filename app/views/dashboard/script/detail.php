<div class="container-sm ">
    <div class="mx-auto w-md-50">
        <div class="">
            <?php
                if($_SESSION == null){
                    echo '<a href="/" class="link link-success"><h6>Kembali</h6></a>';
                }else{
                    echo '<a href="/dashboard/script" class="link link-success"><h6>Kembali</h6></a>';
                }
            ?>
            <h6>Detail Personal</h6>
        </div>
        <hr>
        <?php
            $dateTime = new DateTime($detail['tanggal']);
            $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $formatter->setPattern('d MMMM yyyy, HH:mm');
            $tanggal = $formatter->format($dateTime);
            
            if($_SESSION == null){
                if($detail['visibility'] == "Public"){
                echo '
                    <div class="card border-danger mt-3">
                        <div class="card-body ">
                            <h4 class="card-title mb-0">'.$detail['judul_script'].'</h4>
                            <small class="card-text disabled mt-0"><p><em>pada, '. $tanggal .'</em></p></small>
                            <small class="card-text disabled mt-0"><p><em>Uploader:: '. $detail['uploader'] .'<br>Status:: '. $detail['visibility'] .'</em></p></small>
                            <small class="card-text disabled mt-0"><p><em></em></p></small>
                            <hr>
                            <p class="card-text">'.htmlspecialchars($detail['konten_script']).'</p>
                        </div>
                    </div>
                    ';
                }else{
                    echo '
                    <div class="card border-danger mt-3">
                        <div class="card-body ">
                            <h4 class="card-title mb-0">SCRIPT INI PRIVATE ATAU SUDAH DIHAPUS!!</h4>
                        </div>
                    </div>
                    ';
                }
            }
            else{
                if($detail['uploader'] == $_SESSION['users']['username']){
                    echo '
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a type="button" class="btn btn-outline-warning" href="/edit/sc/'.$detail['script_slug'].'">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alert!</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus script <em>'.$detail['judul_script'].'</em> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tidak</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="hapus()">Hapus</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>
                        <div class="card border-info mt-3">
                            <div class="card-body ">
                                <h4 class="card-title mb-0">'.$detail['judul_script'].'</h4>
                                <small class="card-text disabled mt-0"><p><em>pada, '. $tanggal .'</em></p></small>
                                <small class="card-text disabled mt-0"><p><em>Uploader:: '. $detail['uploader'] .'<br>Status:: '. $detail['visibility'] .'</em></p></small>
                                <small class="card-text disabled mt-0"><p><em></em></p></small>
                                <hr>
                                <p class="card-text">'.htmlspecialchars($detail['konten_script']).'</p>
                            </div>
                        </div>
                        ';
                }else{
                echo '
                    <div class="card border-danger mt-3">
                        <div class="card-body ">
                            <h4 class="card-title mb-0">'.$detail['judul_script'].'</h4>
                            <small class="card-text disabled mt-0"><p><em>pada, '. $tanggal .'</em></p></small>
                            <small class="card-text disabled mt-0"><p><em>Uploader:: '. $detail['uploader'] .'<br>Status:: '. $detail['visibility'] .'</em></p></small>
                            <small class="card-text disabled mt-0"><p><em></em></p></small>
                            <hr>
                            <p class="card-text">'.htmlspecialchars($detail['konten_script']).'</p>
                        </div>
                    </div>
                    ';
                }
            }
        ?>
    </div>
</div>
<script>
    function hapus(){
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/hapus/sc';
        var slugInput = document.createElement('input');
        slugInput.type = 'hidden';
        slugInput.name = 'slug';
        slugInput.value = '<?php echo $detail['script_slug']; ?>';
        form.appendChild(slugInput);

        document.body.appendChild(form);
        form.submit();
    }
</script>