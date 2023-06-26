<div class="container-sm ">
    <div class="mx-auto mt-5 pt-5 w-50">
        <div>
            <a href="/dashboard/script" class="link-success"><h6>Tambah Konten</h6></a>
            <h6>Konten Personal</h6>
        </div>
        <hr style="max-width: 768px;">
        <?php
            foreach($prv as $data){
                $dateTime = new DateTime($data['tanggal']);
                $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                $formatter->setPattern('d MMMM yyyy, HH:mm');
                $tanggal = $formatter->format($dateTime);
                
                echo '
                <div class="card mt-3" style="max-width: 768px;">
                    <div class="card-body ">
                        <h4 class="card-title mb-0">'.$data['judul_script'].'</h4>
                        <small class="card-text disabled mt-0"><p><em>Pada, '. $tanggal .'</em></p></small>
                        <small class="card-text disabled mt-0"><p><em>Uploader:: '. $data['uploader'] .'</em></p></small>
                        <hr>
                        <p class="card-text">'.$data['konten_script'].'</p>
                        <br>
                        <a href="/script/'.$data['slug_script'].'" class="hvr-bounce-in link-warning" style="font-size: 15px;"><small>Selengkapnya</small></a>
                    </div>
                </div>
                ';
            }
        ?>
    </div>
</div>