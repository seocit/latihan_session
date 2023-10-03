<?php
    setcookie("user", "rosyiid",time() + (86400 * 30));

    // cara memanggil cookie
    if(isset($_COOKIE['user'])){
        echo "Cookie: ".$_COOKIE['user'];
    }
?>