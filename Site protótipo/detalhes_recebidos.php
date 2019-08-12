<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Desenvolvido com muito café!">
  <meta name="author" content="João Emerson">



  <link rel="shortcut icon" href="img/logos/Logo branca sem slogan.png">
  <title>Include Junior</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Contact -->
  <div>
    <div class="container">
      <div class="row">
          <h1>Detalhes dos produtos</h1>
      </div>

      <div>
        <div class="row">
          <div class="col-md-4">
            <?php 
              // === : operador de identico (mesmo tipo e mesmo valor)
              // !== : operadoor de não identico (tipos diferentes e mesmo valor)
            
              $id_produto = $_GET["nome"]; //ou $_POST
              /*$id_produto[2] = $_GET["email"];
              $id_produto[3] = $_GET["número"];
              $id_produto[4] = $_GET["mensagem"];
              */
              $detalhes[nome] = 'Detalhes das cadeiras';
              /*
              $detalhes[email] = 'Detalhes dos fogões';
              $detalhes[número] = 'Detalhes dos roteadores';
              $detalhes[mensagem] = 'Detalhes das televisões';
              */
              echo $detalhes[$id_produto];
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
