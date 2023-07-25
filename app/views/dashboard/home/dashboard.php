<div class="container-sm">
<div class="row">
    <div class="col-9">
        <h2>Halo <strong><?= $_SESSION['users']['nama_pengguna'];?></strong> !</h2>
        <p class="lead" id="greetz"></p>
    </div>
    <div class="col-9">
    <?php
    function checkPage($crntPage){
        
        if(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == $crntPage){
            return 'active';
        }else{
            return 'hvr-shrink';
        }
    }
    ?>
        <nav class="nav mb-3">
            <a class="nav-link text-warning <?php echo checkPage('/dashboard'); ?>" aria-current="page" href="/dashboard">Profile</a>
            <?php
                if($_SESSION['users']['roles'] == "admin"){
                    echo '<a class="nav-link text-warning '.checkPage('/manage/user').' " href="/manage/user">Manage User</a>';
                }
            ?>
            <a class="nav-link text-warning <?php echo checkPage('/manage/script'); ?>" href="/manage/script">Manage Script</a>
            <a class="nav-link text-warning <?php echo checkPage('/manage/short'); ?>" href="/manage/short">Manage Short</a>
        </nav>
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body me-auto ms-auto">
                <p>
                    <span>
                        <i class="fa-regular fa-circle-check fa-bounce fa-lg align-center me-2" style="color: #fafafa;"></i>
                    </span>
                Profil kamu berhasil diubah!</p>
                <div class="row">
                    <button class="btn btn-sm btn-outline-light" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Done</button>

                </div>
            </div>
        </div>
    </div>
    </div>
    <button type="button" id="myModalTriggerButton" style="display: none;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" aria-hidden></button>
    <?php
        if(isset($_SESSION['success-edit'])){
            echo '<script>
                // JavaScript to trigger the modal when the PHP condition is true
                window.addEventListener("DOMContentLoaded", function() {
                    // Find the trigger button element
                    const triggerButton = document.getElementById("myModalTriggerButton");

                    // Trigger the modal
                    if (triggerButton) {
                        triggerButton.click();
                    }
                });
            </script>';
            unset($_SESSION['success-edit']);
        }
    ?>

