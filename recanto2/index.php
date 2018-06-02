<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/personal.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">

          <div class="show">

            <nav class="navbar-personal navbar  navbar-fixed-top sombra">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img class="logo" src="img\logo-recanto-da-serra.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Recanto</a></li>
                    <li><a href="#">Acomodações</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Contato</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> </span> 42 3522 1963 </a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>42 99953 6020 </a></li>
                    <!--
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                    -->
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="http://localhost/recanto2/img/slide-show/slide-recanto-01.png" alt="Slide">
                  <div class="carousel-caption">
                    <h1>Chales Recanto da Serra</h1>
                    <p>Chale superir  para você curti com a familia, o conforto de casa mais proximo da Natureza!
                      </br>
                      Com 4 Quartos, 2 banheiros, churasqueira esse chale e destinado para familias e econtros menores. </br>
                      Tudo oque precisa temos a sua disposição, cozinha com exelente espaço, fogão, forno, pratos e talheres.</br>
                      Agende sua visita <button class="btn-default btn">Clique aqui.</button>
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="http://localhost/recanto2/img/slide-show/slide-recanto-02.png" alt="Slide">
                  <div class="carousel-caption">
                    <h1>Slide 02</h1>
                  </div>
                </div>

                <div class="item">
                  <img src="http://localhost/recanto2/img/slide-show/slide-recanto-03.png" alt="Slide">
                  <div class="carousel-caption">
                    <h1>Slide 02</h1>
                  </div>
                </div>

              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </div>


      <section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">Chaler Alto</div>
            <div class="col-md-6">Chaler Baixo</div>
          </div>
        </div>


        <div class="container-fluid">

            <div class="row">
              <div div="" class="col-md-12">
                <div class="col-md-3 col-atividades-1 col-atividades">
                  <img class="img-circle img-responsive center-block" src="http://localhost/recanto2/img/painel/atividades-1.png"></img>
                  <h3>Pésca</h3>
                  <p>Pratica de pesca com varas é molinetes podem ser realizadas no local.<br>
                    Não esqueça seu material de pesca.
                   </p>
                </div>
                <div class="col-md-3 col-atividades-2 col-atividades">
                  <img class="img-circle img-responsive center-block" src="http://localhost/recanto2/img/painel/camping.png"></img>
                  <h3>Camping</h3>
                  <p>Pratica de pesca com varas é molinetes podem ser realizadas no local.<br>
                    Não esqueça seu material de pesca.
                   </p>
                </div>
                <div class="col-md-3 col-atividades-3 col-atividades">
                  <img class="img-circle img-responsive center-block" src="http://localhost/recanto2/img/painel/eventos.png"></img>
                  <h3>Eventos</h3>
                  <p>Pratica de pesca com varas é molinetes podem ser realizadas no local.<br>
                    Não esqueça seu material de pesca.
                   </p>
                </div>
                <div class="col-md-3 col-atividades-4 col-atividades">
                  <img class="img-circle img-responsive center-block" src="http://localhost/recanto2/img/painel/trilhas.png"></img>
                  <h3>Trilhas</h3>
                  <p>Pratica de pesca com varas é molinetes podem ser realizadas no local.<br>
                    Não esqueça seu material de pesca.
                   </p>
                </div>
              </div>
            </div>

        </div>


      </section>

      <section>
        <div class="row">
          <div class="col-md-12  contato">
            <div class="row">
            <h2 class=" titulo-contato col-md-12">Fale Conosco</h2>
          </div>

            <div class="col-md-6 col-xs-12 contato-info">
            <h4 class="titulo-p">Dados</h4>
              <small class="samall-contato">Email:</small>
              <p class="info-contato">contato@recantodaserra.tu.br</p>
              <small class="samall-contato">Telefone:</small>
              <p class="info-contato">42 3522 1963</p>
              <small class="samall-contato">Celular:</small>
              <p class="info-contato">42 99953 1963</p>

              <div class="contato-obs">
                <p>Reservas e demas atendimentos de segunda a sexta em horario comercial</br>
                  Agende uma visita para conhecer nossa pousada, temos tudo oque você precisa para seu evento, retiro ou descanço.
                </p>
              </div>
            </div>


            <div class="col-md-6 col-xs-12 formulario-contato">
              <h4 class="titulo-p">Formulario de Contato</h4>
              <form action="">
                <div class="form-group col-md-7">
                  <label for="nome">Seu Nome</label>
                  <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
                </div>

                <div class="form-group col-md-7">
                  <label for="nome">Assunto</label>
                  <input type="text" class="form-control" id="assunto" placeholder="Assunto">
                </div>

                <div class="form-group col-md-12">
                  <label for="nome">Sua Mensagem</label>
                  <textarea class="form-control" placeholder="Mensagem" id="mensagem"></textarea>
                </div>
              <div class="form-group col-md-12">
                <button type="button" class="btn btn-default" aria-label="Alinhar na esquerda">
                  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Enviar Mensagem
                </button>
              </div>
              </form>
            </div>

          </div>

          <div class="localização">
            <div class="titulo-localizacao">
            <h2><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Nossa Localização</h2>
          </div>
            <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>


          </div>

        </div>
      </section>

      <div class="row info-chales">

      </div>

      <div class="row">

        <div class="container-fluid">

        </div>

      </div>

      <footer class="footer">

        <div class="footer-full row">
          <div class="col-md-4">
            <h4 class="sombra">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Pousada Recanto da Serra </h4>
              <div class="col-md-12 footer-01">
                <h5>A Melhor da Região</h5>
                <p>A Pusada Recanto da serra tem esta cheia de novidades pra você e sua familia</p>
              </div>
          </div>
          <div class="col-md-4">
            <h4 class="sombra">  <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Nossa Localização </h4>
            <div class="col-md-12 footer-02">
              <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57256.33391133519!2d-51.11892725947633!3d-26.24475342099006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e68a0ce021408d%3A0x8cf955b54a9f709e!2sPorto+Uni%C3%A3o%2C+SC!5e0!3m2!1spt-BR!2sbr!4v1521152025011"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <h4 class="sombra">  <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Curta nossas Redes Socias </h4>
            <div class="col-md-12 footer-03 facebook">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPousada-Recanto-da-Serra-389285991167630%2F&tabs&width=340&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1886785788002553" width="auto" height="199" style="border:none;overflow:hidden; margin:0 auto;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
          </div>

        </div>
        <div class="row footer-10">
          <div class="direitos col-md-5"><span>Todos os Direitos reservados a Recanto da Serra </span></div>
          <div class="desenvolvidopor col-md-3 col-sm-12 ">Desenvolvido por <a href="#">Starthelp</a></div>
        </div>
      </footer>

    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
