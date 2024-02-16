<?php
 include_once ("model/db_connection.php");

	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
   
?>

<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Gevel Multimarcas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
   

</head>
<body>
<header role="banner">
<div class="tophead">


<div class="container_logo">
</div>
 


<nav class="navbar navbar-expand-lg ">

<a class="navbar-brand" href="index.php"><img id="logo-main" src="logo_crua.png" class="logo"  width="190" height="190" alt="Logo Thing main logo"></a>

  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <img  src="menu.png"width="30" height="30">

  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link"  href="index.php" class="active" style="color: white">| Home |</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="pages/caminhoes-a-venda.php"  style="color: white">| CAMINHÕES À VENDAS |</a>
      </li>


    <li class="nav-item">
    <a class="nav-link" href="pages/empresa.php"  style="color: white">| EMPRESA |</a>

      </li>
      </ul>
    </div>
  </div>
   
  </div>


  <div class="icones">

  <a href="https://api.whatsapp.com/send?phone=5511965838246"  target="_blank">
                    <img class='' src="whatsapp.png" style="width: 5vh;">
                    <i class="icon ion-social-whatsapp"></i></a>

                    <a href="https://www.facebook.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="facebook.png" style="width: 5vh;">
                      <i class="icon ion-social-facebook"></i></a>

                    <a href="https://www.instagram.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="instagram.png" style="width: 5vh;">
                    <i class="icon ion-social-instagram"></i></a>


                    <a href="https://www.google.com/maps/dir//Avenida+General+Ataliba+Leonel,+3173+-+Parada+Inglesa,+S%C3%A3o+Paulo+-+SP/@-23.4880174,-46.6129528,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94cef6113331e2af:0x798c25890d737ace!2m2!1d-46.6085754!2d-23.4880273" target="_blank">
                    <img class='' src="icon_mapa.png" style="width: 5vh;">
                    <i class="icon ion-social-maps"></i></a>
                    </div>

</nav>


</header><!-- header role="banner" -->
 

<section class="vh-100">
  <div class="container-fluid "  style=" display: flex;
  justify-content:center">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085; "></i>
        </div>

       

          <form  style="width: 23rem;"target="_blank"  action="controller/controle.php" style='width: 23vh;' method="post">
          <img  src="logo_crua.png" class="img-fluid"  w alt="Logo Thing main logo">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email"  name="email" id="form2Example18" class="form-control form-control-lg" >
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password"  name="senha" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block"   type="submit" >Login</button>
            </div>

            
          </form>
        
      </section>
    
      <footer>
        <div class="footer-clean">
            <div class="container">

            <div class="row justify-content-center">
            <div class="col-sm-4 col-md-3 item">

            <a href="https://www.google.com/maps/dir//Avenida+General+Ataliba+Leonel,+3173+-+Parada+Inglesa,+S%C3%A3o+Paulo+-+SP/@-23.4880174,-46.6129528,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94cef6113331e2af:0x798c25890d737ace!2m2!1d-46.6085754!2d-23.4880273" target="_blank"  style="color: white;">
<img  src="map.png" class="img-fluid"   alt="map image">Av. General Ataliba Leonel</a>


          
                    </div>


              
                    <div class="col-sm-4 col-md-3 item">
                        <h3><a href="caminhoes-a-venda.php" target="_blank"style='color:white;'>Serviços</h3>
                        <ul>
                            <li><a href="pages/caminhoes-a-venda.php"target="_blank">Vendas</a></li>
                            <li><a href="pages/caminhoes-a-venda.php"target="_blank">Trocas</a></li>
                            <li><a href="pages/caminhoes-a-venda.php"target="_blank">Financiamentos</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-3 item">
                        <h3> <a href="caminhoes-a-venda.php" target="_blank"style='color:white;'>Produtos</h3>
                        <ul>
                            <li><a href="pages/caminhoes-a-venda.php" target="_blank">Caminhão</a></li>
                            <li><a href="pages/caminhoes-a-venda.php" target="_blank">Ônibus ou micro-ônibus</a></li>
                            <li><a href="pages/caminhoes-a-venda.php" target="_blank">Tratores</a></li>
                            <li><a href="pages/caminhoes-a-venda.php" target="_blank">Vans</a></li>
                        </ul>
                    </div>
                   
                   
                    <div>
                  

                    <a href="https://www.facebook.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="facebook.png" style="width: 5vh;">
                      <i class="icon ion-social-facebook"></i></a>


                    <a href="https://api.whatsapp.com/send?phone=5511965838246" target="_blank">
                    <img class='' src="whatsapp.png" style="width: 5vh;">
                    <i class="icon ion-social-whatsapp"></i></a>


                    <a href="https://www.instagram.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="instagram.png" style="width: 5vh;">
                    <i class="icon ion-social-whatsapp"></i></a>
                   
                        <p class="copyright"  style="color: white;">Truck Transporte© 2022</p>
                    </div>


                    <div class="col-sm-4 col-md-3 item">
                        <h3>Site desenvolvido por:</h3>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/estev%C3%A3o-gabriel-oliveira-5339aa174/">Estevão Gabriel Oliveira</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            </div>
         
        </footer>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>