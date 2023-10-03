<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION['info'])){
            echo $_SESSION['info'];
        }
    ?>
    

    <form action="" method="post">
        <input type="text" name="npm" placeholder="npm" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>

    <?php 
        // cek apakah ada submit dari form 
        if(isset($_POST['npm'])){
            // cek apakah username = rosyiid dan passwornd = 123
            if($_POST['npm'] == "2226250089" && $_POST["password"] == 123){
                // buat session username
                session_start();
                $_SESSION['npm'] = $_POST['npm'];
                // arahkan halaman ke dasboard.php
                header("Location: dasboard.php");
            }else{
                echo "Kamu siapa";
            }
        }

    ?>
</body>
</html>