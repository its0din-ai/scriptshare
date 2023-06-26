<div class="container-sm ">
    <div class="me-auto ms-auto w-50">
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
                <label for="visibility" class="form-label">Visibility</label>
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
            <a href="/dashboard/script/personal" class="link-success"><h6>Konten Personal</h6></a>
            <h6>Konten Publik</h6>
        </div>
        <hr style="max-width: 768px;">
        <?php
            foreach($script as $data){
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