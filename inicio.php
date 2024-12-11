<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio || Golden Hour</title>

        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="icon" type="imagem/x-icon" href="imagens/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <style>
        .fullscreen-bg {
            background-image: url('imagens/img1inicio.jpg'); 
            background-size: cover;
            background-position: center;
            width: 99vw;
            height: 100vh;
            position: relative;
        }
        .text-box {
            position: absolute;
            bottom: 20px; 
            width: 50%; 
            left: 50%;
            transform: translateX(-50%); 
            background-color: rgba(216, 195, 165, 0.6); 
            padding: 20px;
            text-align: center;
            border-radius: 10px; 
        }
        .button{
            background: #844D36;
            padding: 5px 19px;
            border-radius: 5px; 
            
        }
    </style>
    </head>
    <body class="raleway-uniquifier">
        <?php include 'menu.html'; ?>

            <div class="fullscreen-bg">
                <div class="text-box">
                    <h4>Força e confiança para enfrentar qualquer situação</h4>
                    <p>Pela sua segurança!</p>
                    <button type="button" class=" button font-weight-bold">Sobre Nós</button>
                </div>
            </div>

        <?php include 'rodape.html'; ?>
    </body>
</html>