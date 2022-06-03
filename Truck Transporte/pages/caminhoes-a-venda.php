<?php
	include_once ("../model/db_connection.php");
	include_once ("../model/conexao.php");


	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
  session_start();



  $query_products = "SELECT id, name, price, image FROM products ORDER BY id ASC";
  $result_products = $conn->prepare($query_products);
  $result_products->execute();
?>

<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Gevel Multimarcas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet"/>
   
</head>
<body>
<header role="banner">
<div class="tophead">

<nav class="navbar navbar-expand-lg ">

<a class="navbar-brand" href="../index.php"><img id="logo-main" src="../logo_crua.png" class="img-fluid"  width="190" height="190" alt="Logo Thing main logo"></a>

  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <img  src="../menu.png"width="30" height="30">

  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link"  href="../index.php" class="active" style="color: white">| Home |</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="caminhoes-a-venda.php"  style="color: white">| CAMINHÕES À VENDAS |</a>
      </li>


    <li class="nav-item">
        <a class="nav-link" href="empresa.php"  style="color: white">| EMPRESA |</a>
      </li>
      </ul>
    </div>
  </div>
   
  </div>

  <div class="icones">

                    <a href="https://api.whatsapp.com/send?phone=5511965838246"  target="_blank">
                    <img class='' src="../whatsapp.png" style="width: 5vh;">
                    <i class="icon ion-social-whatsapp"></i></a>

                    <a href="https://www.facebook.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="../facebook.png" style="width: 5vh;">
                      <i class="icon ion-social-facebook"></i></a>

                    <a href="https://www.instagram.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="../instagram.png" style="width: 5vh;">
                    <i class="icon ion-social-instagram"></i></a>


                    <a href="https://www.google.com/maps/dir//Avenida+General+Ataliba+Leonel,+3173+-+Parada+Inglesa,+S%C3%A3o+Paulo+-+SP/@-23.4880174,-46.6129528,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94cef6113331e2af:0x798c25890d737ace!2m2!1d-46.6085754!2d-23.4880273" target="_blank">
                    <img class='' src="../icon_mapa.png" style="width: 5vh;">
                    <i class="icon ion-social-maps"></i></a>
                    </div>


</nav>
</div>


</header><!-- header role="banner" -->
	


<div class='produtos'>

<img  src="../logo_crua.png" class="img-fluid"   alt="Logo Thing main logo">
<h1>CAMINHÕES À VENDAS</h1>



            <?php



$result_products = "SELECT * FROM products LIMIT 3";
         
        $query_products = "SELECT id, name, price, image FROM products ORDER BY id ";
        $result_products = $conn->prepare($query_products);
        $result_products->execute();

  
        ?>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
        <?php
            while ($row_product = $result_products->fetch(PDO::FETCH_ASSOC)) {
                extract($row_product);
                $str=($row_product['image']);
                $img = str_replace(' ', '',  $str);
                
                ?>
              
                <div class="card" style="width: 18rem;">
                <img class="img-fluid" src="../upload/<?php echo $img?> ">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $name; ?></h5>
                            <p class="card-text">R$: <?php echo$price; ?>,00</p>
                           

                            <a href="view-products.php?id=<?php echo $id; ?>" class="btn btn-primary">Detalhes</a>
                        </div>
                        </div>
              
                <?php
            }
            ?>
            </div>
      
            </div>
            </div>




            <div class="fixed">
<a href="https://api.whatsapp.com/send?phone=5511999753444" class="fixed"  style="color: black;"target="_blank">
                    <img class='' src="../whatsapp.png" style="width: 10vh;">
                    <i class="icon ion-social-whatsapp" ></i>+55 11 965838246</a>
  </div>

            <footer>
        <div class="footer-clean">
            <div class="container">

            <div class="row justify-content-center">
            <div class="col-sm-4 col-md-3 item">

            <a href="https://www.google.com/maps/dir//Avenida+General+Ataliba+Leonel,+3173+-+Parada+Inglesa,+S%C3%A3o+Paulo+-+SP/@-23.4880174,-46.6129528,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94cef6113331e2af:0x798c25890d737ace!2m2!1d-46.6085754!2d-23.4880273" target="_blank"  style="color: white;">
<img  src="../map.png" class="img-fluid"   alt="map image">Av. General Ataliba Leonel</a>


          
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
                    <img class='' src="../facebook.png" style="width: 5vh;">
                      <i class="icon ion-social-facebook"></i></a>


                    <a href="https://api.whatsapp.com/send?phone=5511965838246" target="_blank">
                    <img class='' src="../whatsapp.png" style="width: 5vh;">
                    <i class="icon ion-social-whatsapp"></i></a>


                    <a href="https://www.instagram.com/estevao.gabriel.16/" target="_blank">
                    <img class='' src="../instagram.png" style="width: 5vh;">
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
       
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../script.js"></script>
</body>
</html>




































