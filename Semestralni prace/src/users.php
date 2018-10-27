<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Uzivatele</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mainOwnStyles.css">
    <!--FontAwesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
          crossorigin="anonymous">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="gBox usersBg pb-1">
<!--    <header>-->
<!--        <h1 class="mb-3 text-center">Uzivatele konferencniho systemu</h1>-->
<!--    </header>-->

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
            <img class=\"card-img-top\" src=\"../Images/unknown_user_img.png\" alt=\"Unknown user\"/>
            <div class=\"card-body\">
                <h4 class=\"card-title\">$userName</h4>
                <p class=\"card-text\">$userDesc</p>
                <a href=\"#\" class=\"btn btn-outline-info btn-block\">Zobrazit profil</a>
            </div>
        </div>";
        return $returnString;
    }
?>