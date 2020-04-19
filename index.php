<?php
require './Classes/OpenWheatherApi.php';
use GuzzleHttp\Client;



$openWheater = new OpenWheatherApi();
$clima = $openWheater->getClima();
?>

<!-- Coloque seu HTML aqui -->
<html>
    <head>
        <title>Clima Brusque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
      
        </style>
    </head>
    <body>
   <main role="main">
       <div class="container">
        <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex  justify-content">
          <a class="p-2 text-muted font-weight-bold" href="#">Mundo</a>
          <a class="p-2 text-muted font-weight-bold" href="#">Nacional</a>
                 </nav>
      </div>

           <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-6 font-weight-bold">Temperatura atual em Brusque <?php echo $clima->getTemperaturaCelsius(); ?>°C </h1>
          <p class="font-weight-bold"><?php echo $clima->getTemperaturaFahrenheit(); ?> °F</p>
          <p class="font-weight-bold"> <?php echo $clima->temperatura; ?> °K</p>
          <p class="lead my-4">Acompanhe todas as informeções sobre o clima de Brusque e cidades próximas, para ajudar em sua rotina ou passeios.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
        </div>
      </div> 
           
         
             
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start ">
              <h3 class="mb-0">
                <a class="text-dark" href="https://pt.wikipedia.org/wiki/Brusque"><?php echo $clima->cidade;?></a>
              </h3>
              <div class="mb-1 text-muted">Descrição <u><?php echo $clima->descricao; ?></u></div> <br/>
              <p class="font-weight-normal">Umidade <u><?php echo $clima->humidade; ?>%</u></p>
              <p class="font-weight-normal">Nascer do sol <u><?php echo $clima->nascerDoSol; ?></u></p>
               <p class="font-weight-normal">Por do sol <u><?php echo $clima->porDoSol; ?></u></p>
                </div>
            </div>
            </div>
              <div class="col-md-6">
                  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start ">
              <h4 class="mb-0">
                  <a class="text-dark">Código da cidade (<?php echo $clima->codCidade;?>)</a></h4> <br/>
               <p class="font-weight-normal">Velocidade do vento <u><?php echo $clima->velocidadeVento; ?> Km/h</u></p>
               <p class="font-weight-normal">Ícone <u><?php echo $clima->icone; ?></u></p>
               <p class="font-weight-normal">Pressão atmosférica<u><?php echo $clima->pressao; ?>(hPa)</u></p>
          </div>
              </div>
          
            </div>
      </div>
        
       </div>
       <footer class="footer">
           <div class="container">
           <div class="footer__inner">
                                                <div class="footer__item">
                                <form action="//getbootstrap.us13.list-manage.com/subscribe/post?u=e3428dd6b8fda73bc5ba8b6e6&amp;id=198881a019" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="form-group">
                                            <h5 class="mb-1">Fique por dentro de mais notícias meteorológicas</h5>
                                            <div class="form-text mt-0">Cadastre já seu e-mail.</div>
                                        </div>
                                                                                                                            <div id="signup_footer" class="d-flex align-items-start">
                                                <div class="form-group w-100 mr-2">
                                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e3428dd6b8fda73bc5ba8b6e6_198881a019" tabindex="-1" value=""></div>
                                                    <input id="mce-EMAIL" class="footer__email-input form-control form-control--muted" name="EMAIL" type="email" aria-describedby="footerEmail" placeholder="Email address">
                                                </div>
                                                <input class="btn btn-brand" type="submit" value="Subscribe" name="subscibe" id="mc-embedded-subscribe">
                                            </div>
                                                                            </div>
                                </form>
                            </div>
                                                <div class="footer__item d-lg-flex justify-content-lg-between align-items-lg-center">
                        <ul id="menu-seller-footer" class="nav sub-nav footer__sub-nav"><li id="menu-item-1333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1333"><a title="Centro de ajuda" href="#">Centro de ajuda</a></li>
<li id="menu-item-1335" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1335"><a title="Termos de serviços" href="#">Termos de serviços</a></li>
<li id="menu-item-1334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1334"><a title="Licenças" href="#">Licenças</a></li>
</ul>                        <p class="hidden-sm-down d-none d-lg-block"><a href="https://www.postman.com/">Api de tempo.</a></p>
                    </div>
                </div>
               </div>
   </footer>
        </main>
       <script src="js/jquery-3.5.0.min.js" type="text/javascript"></script>
            <script src="js/bootstrap.min.js"
            type="text/javascript"></script>

            <script src="js/bootstrap.bundle.min.js"
            type="text/javascript"></script>

       </body>
</html>