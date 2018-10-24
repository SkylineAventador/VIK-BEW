<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Uzivatele</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mainOwnStyles.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Proper bootstrap elements scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="gBox usersBg pb-1">
    <header>
        <h1 class="mb-3 text-center">Uzivatele konferencniho systemu</h1>
    </header>

    <div class="container border shadow-lg usrBgSq rounded">
        <?php
        $usersNmb = 1;
        if ($usersNmb == 0) {
            echo "<h2 class='text-dark text-center'>Error: There are no users inside!</h2>";
        } else {
            for ($i = 0; $i < 10; $i++) {
                //Testovani beznym jmenem
                echo cUsrCard("USER NAME","USER DESCRIPTION");
            }
        }
        ?>
    </div>
    <footer>
        <h2 class="mt-2 mr-2 text-right text-black-50">Kravtsov Dmytro</h2>
    </footer>
</div>
</body>
</html>

<?php
    function cUsrCard($userName, $userDesc){
        $returnString = "<div class=\"card userCard bg-light text-dark shadow\">
            <img class=\"card-img-top\" src=\"../img/unknown_user_img.png\" alt=\"Unknown user\"/>
            <div class=\"card-body\">
                <h4 class=\"card-title\">$userName</h4>
                <p class=\"card-text\">$userDesc</p>
                <a href=\"#\" class=\"btn btn-outline-info btn-block\">Zobrazit profil</a>
            </div>
        </div>";
        return $returnString;
    }
?>