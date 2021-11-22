<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <video class="background" src="../resources/video/Chip - 84086.mp4" muted autoplay loop></video>

    <div class="container">

        <div class="loginCard">

            <h1 class="loginCard_title">Editar Usuario</h1>

            <form class="loginCard_form" method="post">

                <div class="loginCard_form_inputs">

                    <div class="normalInput">


                    </div>

                    <div class="normalInput">

                    </div>

                </div>

                <button class="normalBtn normalBtn-size-v-m normalBtn-ratio-v-7 btn-bg-initial-v-primary btn-bg-hover-v-light btn-border-radius-v-xs" type="submit">Entrar</button>

            </form>
            <?php
            include("../functions/login_servidor.php");
            ?>
        </div>



    </div>

    <script src="../js/buttons.js"></script>
    <script src="../js/normalInput.js"></script>





</body>

</html>