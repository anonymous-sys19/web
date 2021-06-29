<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <form method="post" class="myform">
            <div class="fadeinput">

                <input type="text" name="name" placeholder="name">
                <input type="email" name="email" id="" placeholder="email">
                <input type="text" name="" id="asunto" placeholder="asunto">
                <textarea name="msg" placeholder="mensage"></textarea>
                <input type="submit" value="Enviar" name="enviar" >
                
            </div>
        </form>
        <?php 
            include("correo.php");
        ?>
    </header>



    
</body>
</html>