<?php 

// Informações do cliente 
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$cpf = addslashes($_POST['cpf']);
$telefone = addslashes($_POST['telefone']);
$endereco = addslashes($_POST['endereco']);
$cep = addslashes($_POST['cep']);
$cartao = addslashes($_POST['cartao']);
$depositransf = addslashes($_POST['deptfbanca']);
$dinheiro = addslashes($_POST['dinheiro']);
$troco = addslashes($_POST['troco']);

// Gerador de numero de pedidos
$codigo = substr(uniqid(rand()), 0, 8);

// Pedido no WhatsApp

$enviarwhatsapp = header("refresh:5; URL=https://api.whatsapp.com/send?phone=5585998541169&text= - Numero do Pedido: $codigo                                                                                                                                                                                                                                                                                                                                                          - Nome: $nome                                                                                                                                                                                                                                                                                                                                                     - CPF: $cpf                                                                                                                                                                                                                                                                                                                                                      - E-mail: $email                                                                                                                                                                                                                                                                                                                                                    - Telefone: $telefone                                                                                                                                                                                                                                                                                                                                                 - Endereco de Entrega: $endereco                                                                                                                                                                                                                                                                                                                                                 - CEP: $cep                                                                                                                                                                                                                                                                                                                                                      - Forma de Pagamento:                                                                                                                                                                                                                                                                                                                                              - Cartão de Crédito / Débito:  $cartao                                                                                                                                                                    - Depósito / Transferência Bancária: $depositransf                                                                                                                                                               - Dinheiro: $dinheiro                                                                                                                                                    Troco: $troco"); 

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Surprise Conceito - Compra Finalizada</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="css/style.css"/>

</head>
<body>

  <header>
    <div id="top-header">
      <div class="container">
        <ul class="header-links pull-left">
          <li><a href="#"><i class="fa fa-phone"></i> +55 (85) 0000-000</a></li>
          <li><a href="#"><i class="fa fa-envelope-o"></i> contato@surpriseconceito.com.br</a></li>
        </ul>
      </div>
    </div>

    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="header-logo">
              <a href="index.html" class="logo">
                <img src="img/surprise03.jpeg" alt="">
              </a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="header-search">
            </div>
          </div>
          <div class="col-md-3 clearfix">
            <div class="header-ctn">
              <div class="menu-toggle">
                <a href="#">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                </a>
              </div>

              <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <a href="carrinho.html"><i class="fa fa-shopping-cart"></i>
                  <span>Carrinho</span>
                  </a>
                </a>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>

  </header>

  <nav id="navigation">

    <div class="container">

      <div id="responsive-nav">

        <ul class="main-nav nav navbar-nav">
          <li><a>Surprise Conceito &nbsp;<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a></li>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="#">Canecas</a></li>
          <li><a href="#">Taças</a></li>
          <li><a href="#">Cestas</a></li>
          <li><a href="#">Caixinhas</a></li>
          <li><a href="#">Fale Conosco</a></li>
        </ul>

      </div>

    </div>

  </nav>

  
  </br>
  </br>
  </br>
  </br>
  </br>

		<footer id="footer">

			<div class="section">

			</div>

			<div id="bottom-footer" class="section">
				<div class="container">

					<div class="row">
						<div class="col-md-12 text-center">
							<div class="newsletter">
								<ul class="newsletter-follow">
									<li>
										<a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</li>
								</ul>
							</div>
							<span class="copyright">

								Copyright &copy; Alth Devops | <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados

							</span>
						</div>
					</div>

				</div>

			</div>

		</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>