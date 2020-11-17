<?php

session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Evolution Technology</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "shortcut icon" type = "image / x-icon" href = "imagens/favicon.ico">
        <!---classe css editavel a ajustes -->
        <link href="css/estilo.css" rel="stylesheet"/>
        <link rel="stylesheet" href="js/sweetalert2.min.css"/>
        

        <!---classe css do bootstrap não mexer -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <!--Sweet alert -->
        <script type="text/javascript" src="js/sweetalert2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>

        <script type="text/javascript">
            
        $(document).ready(function(){
            
            $("#celular").mask("(00) 0 0000-0000")
        });
            
        </script>
    </head>

<body>
    <!---container é a classe do bootstrap se caso queira 
        fazer modificação fora é só dar espaco e criar novo nome para classe -->
        <p><br>
	<h1 class="titulo">Evolution Technology</h1>
    </p>
    
        

    <!---esse container é usado pela nav os menus -->
        <div class="container">

                <nav class="navbar ">
                    <div style="padding-left: 25%;" >
                        <a class="btn btn-outline-dark" id="bar" href="index.html">Home</a>
                        <a class="btn btn-outline-dark" id="bar" href="sobre.html">Sobre</a>
                        <a class="btn btn-outline-dark" id="bar" href="produtos.html">Produtos</a>
                        <a class="btn btn-outline-dark" id="bar" href="servicos.html">Serviços</a>
                        <a class="btn btn-outline-dark" id="bar" href="faleconosco.php">Fale Conosco</a>
                    </div>
            </nav>
        </div>

        <!---aqui é o formulário -->
        <form id="formulario" method="POST" action="enviar.php">
                <!--Mensagem Alerta Modal-->
                <?php echo $_SESSION['mensagem'];
                    unset($_SESSION['mensagem']);
                ?>
            <!---form-group é do bootstrap -->
            <div class="form-group">
                <label for="nome" style="color: floralwhite;">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required="required" >
              </div>
              <!---form-group é do bootstrap -->
            <div class="form-group">
                <label for="celu" style="color: floralwhite;">Celular</label>
                <input type="text" name="celular" id="celular" class="form-control" placeholder="(92) 0 0000-0000" required="required">
            </div>

            
            <!---form-group é do bootstrap -->
            <div class="form-group">
                <label for="email" style="color: floralwhite;">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required="required">
            </div>
           
            <!---form-group é do bootstrap -->
            <div class="form-group">
                <label for="texto" style="color: floralwhite;">Menssagem</label>
                <textarea type="text" class="form-control" name="texto" id="texto" rows="5" required="required"></textarea>
            </div>

            <input type="submit" name="enviar" class="btn btn-outline-primary" value="Enviar"/>
          </form>
        
          <a href="https://api.whatsapp.com/send?phone=5592984969007&text=Ola!"><img src="imagens/whatsapp.png" id="imagem"></a>
            
    </div>



</body>
</html>