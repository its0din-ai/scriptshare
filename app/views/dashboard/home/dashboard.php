<div class="container-sm">
<div class="row">
    <div class="col-9">
        <h2>Halo <strong><?= $_SESSION['users']['nama_pengguna'];?></strong> !</h2>
        <p class="lead" id="greetz"></p>
    </div>
    <div class="col-9">
    <?php
    function checkPage($crntPage){
        if(basename($_SERVER['PHP_SELF']) == $crntPage){
            return 'active';
        }else{
            return 'hvr-shrink';
        }
    }
    ?>
        <nav class="nav mb-3">
            <a class="nav-link text-warning <?php echo checkPage('dashboard'); ?>" aria-current="page" href="/dashboard">Profile</a>
            <?php
                if($_SESSION['users']['roles'] == "admin"){
                    echo '<a class="nav-link text-warning '.checkPage('user').' " href="/manage/user">Manage User</a>';
                }
            ?>
            <a class="nav-link text-warning <?php echo checkPage('script'); ?>" href="/manage/script">Manage Script</a>
            <a class="nav-link text-warning <?php echo checkPage('short'); ?>" href="/manage/short">Manage Short</a>
        </nav>
    </div>

