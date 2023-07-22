<?php include dirname(__FILE__) . '\..\home\dashboard.php';?>

<div class="container-sm">
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Nama Pengguna</th>
        <th scope="col">Roles</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $num = 0;
            foreach($data as $user){
                echo '<tr>
                <th scope="row">'.($num+=1).'</th>
                <td>'.$user['username'].'</td>
                <td>'.$user['nama_pengguna'].'</td>
                <td>'.$user['roles'].'</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <a type="button" class="btn btn-outline-light" href="/edit">Edit</a>
                        <a type="button" class="btn btn-outline-light" href="/del">Hapus</a>
                    </div>
                </td>
                </tr>';
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