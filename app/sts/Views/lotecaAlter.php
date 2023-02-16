<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php URL ?>app/sts/public/style.css">
    <title>Document</title>
</head>
<body>
   <a href="http://localhost/loteca/loteca">Loteca</a><br><br>
   <a href="http://localhost/loteca/lotecasimples">Loteca simples</a>
    <h1>Pronostique pour loteca</h1>
    <form action="" method="POST">
        <div class="field textarea">
            <input type="text" name="word" id="word" placeholder="Digite o número decimal">
        </div>
        <div class="buttom-area">
            <button type="submit" name="smgSend" value=" ">  Enviar</button>
        </div>
    </form>

    <form action="" method="POST">
        <div class="field2 textarea">
            <input type="text" name="number" id="number" placeholder="Digite o número inteiro" value="">
        </div>
        <div class="buttom-area">
            <button type="submit" name="smgSend2" value=" ">  Enviar e Calcular</button>
        </div>
    </form>

    <div>
        <h3>Inteiro = <?php if(isset($_SESSION['inteiro'])){echo $_SESSION['inteiro'];} ?></h3><br>
        <h3>Inteiro / 9 = <?php if(isset($_SESSION['division'])){echo $_SESSION['division'];} ?></h3><br>

    </div>
    <div class="resulta">
        <?php if(isset($_SESSION['result'])){echo $_SESSION['result'];} ?>
    </div>
</body>
</html>