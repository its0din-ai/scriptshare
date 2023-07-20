<div class="container-sm">
    <div class="mx-auto w-md-50">
        <div class="">
            <a href="/dashboard/script" class="link link-success"><h6>Tambah Script</h6></a>
            <h6>Script Personal</h6>
        </div>
        <hr>
        <?php
            foreach($prv as $data){
                $dateTime = new DateTime($data['tanggal']);
                $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                $formatter->setPattern('d MMMM yyyy, HH:mm');
                $tanggal = $formatter->format($dateTime);
                
                if($data['visibility'] == 'Public'){
                    echo '
                        <div class="card border-info mt-3">
                            <div class="card-body ">
                                <h4 class="card-title mb-0">'.$data['judul_script'].'</h4>
                                <small class="card-text disabled mt-0"><p><em>pada, '. $tanggal .'</em></p></small>
                                <small class="card-text disabled mt-0"><p><em>Uploader:: '. $data['uploader'] .'<br>Status:: '. $data['visibility'] .'</em></p></small>
                                <small class="card-text disabled mt-0"><p><em></em></p></small>
                                <hr>
                                <p class="card-text">'.htmlspecialchars($data['konten_script']).'</p>
                                <br>
                                <a href="/script/'.$data['script_slug'].'" class="hvr-bounce-in link-light" style="font-size: 15px;"><small>Selengkapnya</small></a>
                            </div>
                        </div>
                        ';
                }else{
                    echo '
                        <div class="card border-danger mt-3">
                            <div class="card-body ">
                                <h4 class="card-title mb-0">'.$data['judul_script'].'</h4>
                                <small class="card-text disabled mt-0"><p><em>pada, '. $tanggal .'</em></p></small>
                                <small class="card-text disabled mt-0"><p><em>Uploader:: '. $data['uploader'] .'<br>Status:: '. $data['visibility'] .'</em></p></small>
                                <small class="card-text disabled mt-0"><p><em></em></p></small>
                                <hr>
                                <p class="card-text">'.htmlspecialchars($data['konten_script']).'</p>
                                <br>
                                <a href="/script/'.$data['script_slug'].'" class="hvr-bounce-in link-light" style="font-size: 15px;"><small>Selengkapnya</small></a>
                            </div>
                        </div>
                        ';
                }
                
            }
            if($prv == null){
                echo '<div class="alert alert-sm alert-warning mt-3" role="alert">
                    Anda tidak memiliki script apapun, silahkan menambahkan data.
                </div>';
            }
        ?>
    </div>
</div>