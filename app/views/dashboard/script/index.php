<div class="container-sm ">
    <h2><strong>Index Script</strong></h2>
    <hr>
    <div class="me-auto ms-auto w-md-50 mt-3">
        <form method="POST">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Tidak ada Judul" name="judul">
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <textarea class="form-control" id="konten" rows="7" name="konten"></textarea>
            </div>
            <div class="mb-3">
                <label for="visibility" class="form-label">Akses</label>
                <select class="form-select" aria-label="Private" name="visibility">
                    <option value="private">Private</option>
                    <option value="public">Public</option>
                </select>
            <!-- Button -->
            <div class="hvr-bounce-in d-grid gap-2 w-25 me-auto ms-auto mt-3">
                <button type="submit" class="btn btn-sm btn-light" name="submit">Share!</button>
            </div>
        </form>
    </div>
    <div class="mx-auto mt-5 pt-5">
        <div>
            <a href="/dashboard/script/personal" class="link-success"><h6>Script Personal</h6></a>
            <h6>Script Publik</h6>
        </div>
        <hr>
        <?php
            foreach($script as $data){
                if($data['visibility'] == "Public"){
                    $dateTime = new DateTime($data['tanggal']);
                    $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                    $formatter->setPattern('d MMMM yyyy, HH:mm');
                    $tanggal = $formatter->format($dateTime);
                    
                    echo '
                    <div class="card border-info mt-3 w-100 w-sm-175">
                    
                        <div class="card-body ">
                            <h4 class="card-title mb-0">'.$data['judul_script'].'</h4>
                            <small class="card-text disabled mt-0"><p><em>Pada, '. $tanggal .'</em></p></small>

                            <small class="card-text disabled mt-0"><p><em>Uploader:: '. $data['nama_pengguna'] .'</em></p></small>
                            
                            <hr>
                            <p class="card-text">'.htmlspecialchars($data['konten_script']).'</p>
                            <br>
                            <a href="/script/'.$data['script_slug'].'" class="hvr-bounce-in link-light" style="font-size: 15px;"><small>Selengkapnya</small></a>
                        </div>
                    </div>
                    ';
                }
            }
        ?>
    </div>
</div>