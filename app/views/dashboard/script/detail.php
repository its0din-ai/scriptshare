<div class="container-sm ">
    <div class="mx-auto mt-5 pt-5 w-md-50">
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
                            <h4 class="card-title mb-0">PRIVATE!!</h4>
                        </div>
                    </div>
                    ';
                }
            }
            else{
                if($detail['uploader'] == $_SESSION['users']['username']){
                    echo '
                    <h3>INI BISA EDIT & AKSES YG PRIVAT</h3>
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