<div class="container-sm ">
    <div class="me-auto ms-auto w-md-50">
        <form method="POST" action="/update/sc">
            <div class="mb-3">
                <label for="slug" class="form-label">Link</label>
                <input type="text" class="form-control disabled" id="slug" name="slug" value="<?php echo $detail['script_slug']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $detail['judul_script']; ?>">
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <textarea class="form-control" id="konten" rows="7" name="konten"><?php echo $detail['konten_script']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="visibility" class="form-label">Akses</label>
                <select class="form-select" aria-label="Private" name="visibility">
                    <option value="private" <?php if ($detail['visibility'] === 'Private') echo 'selected'; ?>>Private</option>
                    <option value="public" <?php if ($detail['visibility'] === 'Public') echo 'selected'; ?>>Public</option>
                </select>
            </div>
            <!-- Button -->
            <div class="hvr-bounce-in d-grid gap-2 w-25 me-auto ms-auto mt-3">
                <button type="submit" class="btn btn-sm btn-light" name="submit">Update Data!</button>
            </div>
        </form>
    </div>
</div>