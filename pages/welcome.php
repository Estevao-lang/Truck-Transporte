<?php
include_once ("../model/db_connection.php");
include_once ("../model/conexao.php");


session_start();


    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

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
    <script src="scripts/seu-script.js"></script>
  
</head>
<body>
<header role="banner">
<div class="tophead">


<div class="container_logo">
</div>
 


<nav class="navbar navbar-expand-lg ">

<a class="navbar-brand" href="../index.php"><img id="logo-main" src="../logo_crua.png" class="logo"  width="190" height="190" alt="Logo Thing main logo"></a>

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


</header><!-- header role="banner" -->
 

<section class="vh-100">
<h3 class="my-5">Olá, <b><?php echo htmlspecialchars(   $_SESSION['usuarioNome']); ?></b>. Bem vindo ao site da Gevel Multimarcas.</h3>

<section >

 <form enctype="multipart/form-data" action="../controller/cadastro.php" method="POST">

<h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Cadastro de produtos</h3>

<div class="form-outline mb-4">
<input name="name" type="text" id="form2Example18" placeholder="Nome do produto" class="form-control form-control-lg" >
  <label class="form-label" for="form2Example18"></label>
</div>

<div class="form-outline mb-4">
<input name="quantity" type="text"  id="form2Example28" placeholder="Quantidade" class="form-control form-control-lg" />
  <label class="form-label" for="form2Example28"></label>
</div>

<div class="form-outline mb-4">
<input name="description" type="text"  id="form2Example18"  placeholder="Descrição" class="form-control form-control-lg" >
  <label class="form-label" for="form2Example18"></label>
</div>

<div class="form-outline mb-4">
<input name="price"  type="text" id="form2Example28" placeholder="Preço" class="form-control form-control-lg" />
  <label class="form-label" for="form2Example28"></label>
</div>

<div class="form-outline mb-4">
<input  type="text" name="type" id="form2Example28" placeholder=" Tipo de veículo" class="form-control form-control-lg" />
  <label class="form-label"label for="conteudo"></label>
</div>

<div class="form-outline mb-4">
<input  type="date" name="created" id="form2Example28" placeholder="Data de criação" class="form-control form-control-lg" />
  <label class="form-label"label for="conteudo"></label>
</div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Cadastre uma imagem</label>
    <input name="arquivo" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>


<div class="pt-1 mb-4">
  <button class="btn btn-info btn-lg btn-block"nome="submit" type="submit" >Cadastrar produto</button>
</div>


</form>



</section>


        
        
        <div class="container-tbl">
        <table class="table" >
  <thead>
    <tr >
  
      <th >imagem</th>
      <th>Nome do produto</th>
      <th>Quantidade</th>
      <th >Descrição</th>
      <th >Preço</th>
      <th >Tipo de veículo</th>
      <th >Data de criação</th>
      <th >Excluir</th>


    </tr>
  </thead>
  <tbody>
         <?php


   
$query_products = "SELECT id, name, quantity, price, description,type,created,image FROM products";
$result_products = $conn->prepare($query_products);
$result_products->execute();



                while ($row_product = $result_products->fetch(PDO::FETCH_ASSOC)) {
                  extract($row_product);
               $str=($row_product['image']);
               $img = str_replace(' ', '',  $str);
               
             
                ?>

<tr>
<td><img height="50vh"src="../upload/<?php echo $img?> "></td>
  <td ><?php echo $row_product['name'] ;?></td>
  <td ><?php echo $row_product['quantity']; ?></td>
  <td ><?php echo $row_product['description']; ?></td>
  <td ><?php echo $row_product['price'] ;?></td>
  <td ><?php echo $row_product['type']; ?></td>
  <td ><?php echo $row_product['created']; ?></td>
  <td ><a href ="../controller/deletar.php?id=<?php echo $row_product['id'] ?>">DELETAR</td>

  </tr>
  <?php
                }
                ?>
        </div>
  
  </tbody>
</table>
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
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>
</html>
