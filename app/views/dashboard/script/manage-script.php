<?php include dirname(__FILE__) . '\..\home\dashboard.php';?>
<h1>DEBUG SCRIPT MANAGER</h1>

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