<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Uzivatele</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/BSFixed.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="gBox">
    <div class="container col-10">
        <div class="card userCard">
            <img class="card-img-top" src="../img/unknown_user_img.png" alt="Unknown user"/>
            <div class="card-body">
                <h4 class="card-title">Dmytro Kravtsov</h4>
                <p class="card-text">Creator of this web pages</p>
                <a href="#" class="btn btn-primary">Prozkoumat profil</a>
            </div>
        </div>
        <div class="card userCard">
            <img class="card-img-top" src="../img/unknown_user_img.png" alt="Unknown user"/>
            <div class="card-body">
                <h4 class="card-title">Jan Novak</h4>
                <p class="card-text">Bezny uzivatel</p>
                <a href="#" class="btn btn-primary">Prozkoumat profil</a>
            </div>
        </div>
        <?php
        for ($i = 1; $i < 5; $i++) {
            echo cUsrCard();
        }
        ?>
    </div>
</div>
</body>
</html>

<?php
    function cUsrCard(){
        $returnString = "<div class=\"card userCard\">
            <img class=\"card-img-top\" src=\"../img/unknown_user_img.png\" alt=\"Unknown user\"/>
            <div class=\"card-body\">
                <h4 class=\"card-title\">Dalsi uzivatel</h4>
                <p class=\"card-text\">Bezny uzivatel</p>
                <a href=\"#\" class=\"btn btn-primary\">Prozkoumat profil</a>
            </div>
        </div>";
        return $returnString;
    }
?>