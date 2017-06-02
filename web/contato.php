<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Do Norte Madeiras - Contato</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">

    <meta property="og:type" content="website"/>
			<meta property="og:title" content="Do Norte Madeiras"/>
			<meta property="og:description" content="Conceito em Qualidade"/>
			<meta property="og:url" content="donortemadeiras.com.br"/>
			<meta property="og:image" content="img/logo.png"/>

			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="shortcut icon" href="favicon.ico">

    <!--Owl Carrousel-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.min.css">
  </head>

  <body>

    <section class="intro">
      <div class="container">
        <div class="grid-3">
          <img class="logo" src="img/home/logo.png" alt="">
        </div>
        <div class="grid-6">
          <h1 class="titulo menu-titulo">Conceito em Qualidade</h1>
        </div>
        <div class="grid-3">
          <h2 class="tel">Tel: (85) 3282-2496</h2>
        </div>
      </div>
    </section>

    <header>
      <div class="container">
        <!--<div class="offset-3 grid-6">-->
          <div class="menu">
            <ul>
              <li><a href="index.html">Início</a></li>
              <li><a href="quem-somos.html">Quem Somos</a></li>
              <li><a href="produtos.html">Produtos</a></li>
              <li class="menu-ativo"><a href="contato.php">Contato</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
        </div>
        
        <!--</div>-->
      </div>
    </header>
    <hr class="linha-verde">

    <section class="intro-contato">
      <div class="container">
        <h1 class="titulo branco sem-padding">Contato</h1>
      </div>
    </section>

    <section class="contatos espaco-sessao margem-top">
      <div class="container">
      <div class="grid-6">
          <form action="mail_send.php" method="post" name="form" class="formphp contato_form">
						<label for="nome">Nome</label>
						<input required name="nome" type="text">

						<label for="email">E-mail</label>
						<input required name="email" type="text">
						<label for="telefone">Telefone</label>
						<input required name="telefone" type="text">

						<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
						<input type="text" class="nao-aparece" name="leaveblank">
						<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
						<input type="text" class="nao-aparece" name="dontchange" value="http://" >

						<label for="mensagem">Mensagem</label>
						<textarea required name="mensagem"></textarea>

						<button type="submit" class="btn btn-form">Enviar</button>
        </form>
      </div>

      <div class="grid-4 margin-left">
          <h2 class="subtitulo text-left">Nosso Contato</h2>
          <p class="margem text-left">- Av. Cel. Carvalho, 1751 - Jardim Guanabara, 
  Fortaleza - CE, 60347-110</p>
          <p class="margem text-left">- Tel: 3282-2496</p>
          <p class="margem text-left">- E-mail: contato@donortemadeiras.com.br</p>
          <a href="https://www.google.com.br/maps/place/Do+Norte+Madeiras/@-3.7176594,-38.5898785,17z/data=!3m1!4b1!4m5!3m4!1s0x7c74a3f1c6ef7b5:0x5c5070e29050aa93!8m2!3d-3.7176594!4d-38.5876898" target="_blank"><img class="borda" src="img/contato/mapa.jpg" alt="Mapa"></a>
      </div>

      </div>
    </section>


        <section class="footer">
      <div class="container margem">
        <div class="grid-3">
          <img src="img/home/logo-branca.png" alt="Logo">
        </div>
        <div class="grid-3">
          <h2 class="subtitulo-footer">Nossa Loja</h2>
          <p class="branco">Av. Cel. Carvalho, 1751,</p>
          <p class="branco">Jardim Guanabara,</p>
          <p class="branco">Fortaleza - CE, 60347-110</p>
        </div>

         <div class="grid-4">
          <h2 class="subtitulo-footer">Nosso Contato</h2>
          <p class="branco">Tel: 3282-2496</p>
          <p class="branco">E-mail: contato@donortemadeiras.com.br</p>
        </div>
      </div>
    </section>

    <!--js-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>