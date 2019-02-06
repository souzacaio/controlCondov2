<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control Condo</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <link href="css/hover.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="icon" href="/controlcondo/img/cropped-icon1024-32x32.png" sizes="32x32" />
    <link rel="icon" href="/controlcondo/img/cropped-icon1024-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="/controlcondo/img/cropped-icon1024-180x180.png" />
    <meta name="msapplication-TileImage" content="/controlcondo/img/cropped-icon1024-270x270.png" />

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <style>
        .probootstrap-slider-text p{
            color:white;
        }

        .swal2-popup {
   
          width: 60% !important;
          
        }

        .swal2-popup .swal2-content {

            font-size: 2.125em !important;
 
          }

        .simular{
          background: #3599d2;
          width: 100%;
          padding: 46px;
        }

        .btn-calcular{
          background: #33be33;
          color: white;
          /* width: 128px; */
          padding: 15px 32px 15px 35px;
          /* width: 58%; */
          /* margin-top: 11px; */
          cursor:pointer

        }

        .flexslider .slides>li.overlay:before {
            background: rgba(0, 0, 0, 0.69);
            position: absolute;
        }

        .flexslider .probootstrap-slider-text {
          margin-top: 200px;
        }

        #calculator{
          
          width: 30%;
          height: 415px;
          background: #ccdbf3;
          color: white;
          border-radius: 8px;
        }

        .calculator_btn{
          background: #3599d2;
          width: 60px;
          /* padding: 0 0 24px 50px; */
          border-radius: 9px;
          height: 51px;
          cursor:pointer;
        }

        .calculator_value{
          position: relative;
          left: 46%;
          width: 10px;
          top: 21%;
          height: 10px;
          /* padding: 0 0 0px 0; */
        }

        #calculator_body{
          padding: 12px;
          width: 88%;
          height: auto;
          /* border: 1px solid red; */
          position: relative;
          top: 7%;
          left: 5%;
          height: auto;
          /* padding-bottom: 277px;*/
        }

        #calculator_body .row{
           margin-top: 4px;
        }

        #calculator_header h1{
          color: #678bbe;
        }

        #calculator_header{
          position: relative;
          width: 100%;
          top: 4%;
          left: 10%;

        }

        .hvr-rectangle-out:before {
            background: #678ec6 !important;
         }
    </style>
  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <img src="/controlcondo/img/logo.png" style="width: 48%;margin-top: 1.99999%;"/>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">Funções</a>
              <ul class="dropdown-menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                <li class="dropdown-submenu dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                    <li><a href="#">Second Level Menu</a></li>
                  </ul>
                </li>
                <li><a href="services.html">Services</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Diferenciais</a></li>
            <li><a href="contact.html">Pacote do Sistema</a></li>
            <li><a href="contact.html">Novidades</a></li>
            <li><a href="contact.html">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center;" style="">
                <p><h1 style="text-shadow: 0 1px 3px rgba(5, 5, 5, 0.69);" class="probootstrap-heading">A <span style="color: #3599d2;">aplicação</span> definitiva para o seu condomínio !</h1></p>
                <p style="font-size: 17px;margin-top: -21px;">Incrível, Simples e Produtivo</p>
                   <div class="row">
                   <div class="col-md-4">
                      <!--<div class="hvr-bounce-in btn_effect" style="background:#3599d2;">
                      <i class="fas fa-hands-helping"></i> Contratar
                      </div>-->
                     </div>
                    </div>
                    <div class="row" style="margin-top: 6px;">
                      <div class="col-md-4">
                        <div class="hvr-bounce-in btn_effect" id="btn-fz-simula" style="background: #33be33;">
                          <i class="fa fa-share"></i> Fazer Simulação
                        </div>
                      </div>
                    </div>
                    <div class="row" style="margin-top: 6px;">
                    <a  href="https://www.controlcondo.com.br/controlcondo/v2/">
                      <div class="col-md-4">
                        <div class="hvr-bounce-in btn_effect" >
                          <i class="fa fa-building"></i> Meu Condominio
                        </div>
                      </div>
                    </a>
                    </div>
                      
                 
                     
                  <!--
                  <div class="row" style="margin-top: 6px;">
                    <div class="col-md-12">
                      <div class="hvr-bounce-in btn_effect">
                        <i class="fab fa-apple" style="font-size: 1.4em;"></i> App Store
                      </div> 
                     </div> 
                  </div>
                  <div class="row" style="margin-top: 6px;">
                    <div class="col-md-12">
                      <div class="hvr-bounce-in btn_effect">
                        <i class="fab fa-android" style="font-size: 1.4em;"></i> Android
                      </div> 
                     </div> 
                  </div>-->
                  
                 </div> 
               </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
            <div class="col-md-4" style="left: 13%;margin-top: 163px;"><img style="width: 55%;" src="/controlcondo/img/home.png"></div>
            <div class="col-md-2" style="margin-top: 224px;"><img style="width: 100%;" src="/controlcondo/img/ocorrencia.png"></div>

              <div class="col-md-6">
                <div class="probootstrap-slider-text text-center" style="padding: 24px;">
                  <h1 class="probootstrap-heading" style="text-shadow: 0 2px 3px rgba(5, 5, 5, 0.48);margin-right: 517px;color:#3599d2">ControlCondo</h1>
                  <p style="text-align: left;">Control Condo é uma rede social desenvolvida para facilitar a comunicação entre moradores, síndico e portaria. Proporcionando experiências únicas, aproximando as pessoas e melhorando a convivência em grupo. O grande diferencial desse sistema, é a plataforma online que possibilita a sincronização dos dados e informações gerados em nossos servidores na nuvem com o servidor Control Guarita instalado em seu condomínio. Nesse sentido temos total interação entre todas as esferas do condomínio de forma produtiva e descomplicada.</p>
                </div>
              </div>
             
            </div>
          </div>
          
        </li>
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
        <div class="container">
            <div class="row">
            <div class="col-md-4" style="left: 13%;margin-top: 163px;"><img style="width: 55%;" src="/controlcondo/img/qrcode.png"></div>
              <div class="col-md-6">
                <div class="probootstrap-slider-text text-center" style="padding: 24px;">
                  <h1 class="probootstrap-heading" style="text-shadow: 0 2px 3px rgba(5, 5, 5, 0.48);margin-right: 517px;color:#3599d2">ControlGuarita</h1>
                  <p style="text-align: left;">Todas as ferramentas necessárias em um único software. Permitindo assim a atualização direta do sistema com os eventos do Control Guarita. E a atualização do software da portaria instantaneamente com os dados do sistema. Sem a necessidade de consultar vários sites/softwares para verificar a liberação de um visitante.</p>
                </div>
              </div>
             
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>FUNÇÕES</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
            <div class="row probootstrap-gutter60">
            <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="fa fa-bullhorn"></i></div>
                <div class="text">
                    <h3>TECNOLOGIA ANTI-PASS BACK</h3>
                    <p>Esta tecnologia permite ao morador controlar quantas vezes um visitante pode entrar e sair com total comodidade. O morador por exemplo pode liberar apenas uma entrada.</p>
                </div>  
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="fa fa-comments"></i></div>
                <div class="text">
                    <h3>INTEGRAÇÃO OFF-LINE</h3>
                    <p>Integração off-line, caso o condomínio fique sem internet, os dados não são perdidos. O Control Condo funciona de forma off-line.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="fa fa-qrcode"></i></div>
                <div class="text">
                    <h3>QR CODE</h3>
                    <p>O QR Code gerado automático para entrada do visitante pode ser enviado via e-mail e Whatsapp.</p>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="icon icon-alarm"></i></div>
                <div class="text">
                    <h3>INTEGRAÇÃO TOTAL</h3>
                    <p>Integração total com o controle de acesso do condomínio</p>
                </div>  
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="fa fa-child"></i></div>
                <div class="text">
                    <h3>ENQUETES</h3>
                    <p>Possibilidade de geração de enquetes para moradores, síndico e administradores</p>
                </div>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="fa fa-check-circle"></i></div>
                <div class="text">
                    <h3>CONTROL GUARITA</h3>
                    <p>Integração total com o sistema Control Guarita</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- END row -->
        <div class="row mt50">
          <div class="col-md-12 text-center">
            <a href="services.html" class="btn btn-primary btn-lg" role="button">MAIS FUNÇÕES</a>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white ">
      <div class="owl-carousel owl-work">
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_1.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_2.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_3.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_4.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>  
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_5.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_6.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="img/work_7.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
      </div>
    </section>      
    
    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">

        <!-- END row -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
            <div class="card bg-dark text-white">
              <div class="card-img-overlay" style="border: 1px solid #d2d2d2;">
                <div style="background: #72bd5f;padding: 6px;">
                  <span class="fa fa-trophy" style="font-size: 5em;color: white;"></span>
                </div>
                <div style="background: #6aad59;"><h5 style="margin-top: 0px;color:white" class="card-title">Plano : Bronze</h5></div>
                <p class="card-text">
                  <ul style="list-style: none;text-align: left;">
                    <li class="destaque"><strong>Está Incluso:</strong></li>
                    <li><span class="fa fa-arrow-right"></span> Comunicados</li>
                    <li><span class="fa fa-arrow-right"></span> Enquetes</li>
                    <li><span class="fa fa-arrow-right"></span> Chat</li>
                    <li><span class="fa fa-arrow-right"></span> Ocorrências</li>
                    <li><span class="fa fa-arrow-right"></span> Fórum</li>
                    <li><span class="fa fa-arrow-right"></span> Classificados</li>
                    <li><span class="fa fa-arrow-right"></span> Cadastro de Pets</li>
                    <li><span class="fa fa-arrow-right"></span> Documentos</li>
                    <li><span class="fa fa-arrow-right"></span> Reserva de áreas comuns</li>
                    <li><span class="fa fa-arrow-right"></span> Liberação de visitantes</li>
                    <li><span class="fa fa-arrow-right"></span> Qr Code</li>
                    <li><span class="fa fa-arrow-right"></span> Alertas de entrada e saída de visitantes</li>
                    <li><span class="fa fa-arrow-right"></span> Alertas de chegada de correspondências</li>
                    <li><span class="fa fa-arrow-right"></span> Até 100 unidades</li>
                    <li><span class="fa fa-arrow-right"></span> Integração Control Guarita</li>
                    <li><span class="fa fa-arrow-right"></span> Backup Control Guarita em nuvem</li>
                  </ul>
                </p>
              </div>
          </div>
          <div class="hvr-rectangle-out c_button"><span>COMPRAR O PACOTE</span></div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
          <div class="card bg-dark text-white">
              <div class="card-img-overlay" style="border: 1px solid #d2d2d2;">
                <div style="background: #6588bb;padding: 6px;">
                  <span class="fa fa-trophy" style="font-size: 5em;color: white;"></span>
                </div>
                <div style="background: #557aaf;"><h5 style="margin-top: 0px;color:white" class="card-title">Plano : Prata</h5></div>
                <p class="card-text">
                  <ul style="list-style: none;text-align: left;">
                    <li class="destaque"><strong>Está Incluso:</strong></li>
                    <li><span class="fa fa-arrow-right"></span> Comunicados</li>
                    <li><span class="fa fa-arrow-right"></span> Enquetes</li>
                    <li><span class="fa fa-arrow-right"></span> Chat</li>
                    <li><span class="fa fa-arrow-right"></span> Ocorrências</li>
                    <li><span class="fa fa-arrow-right"></span> Fórum</li>
                    <li><span class="fa fa-arrow-right"></span> Classificados</li>
                    <li><span class="fa fa-arrow-right"></span> Cadastro de Pets</li>
                    <li><span class="fa fa-arrow-right"></span> Documentos</li>
                    <li><span class="fa fa-arrow-right"></span> Reserva de áreas comuns</li>
                    <li><span class="fa fa-arrow-right"></span> Liberação de visitantes</li>
                    <li><span class="fa fa-arrow-right"></span> Qr Code</li>
                    <li><span class="fa fa-arrow-right"></span> Alertas de entrada e saída de visitantes</li>
                    <li><span class="fa fa-arrow-right"></span> Alertas de chegada de correspondências</li>
                    <li><span class="fa fa-arrow-right"></span> De 310 a 600 unidades</li>
                    <li><span class="fa fa-arrow-right"></span> Integração Control Guarita</li>
                    <li><span class="fa fa-arrow-right"></span> Backup Control Guarita em nuvem</li>
                  </ul>
                </p>
              </div>
          </div>
          <div class="hvr-rectangle-out c_button">COMPRAR O PACOTE</div>
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
          <div class="card bg-dark text-white">
              <div class="card-img-overlay" style="border: 1px solid #d2d2d2;">
                <div style="background: #c9bd60;padding: 6px;">
                  <span class="fa fa-trophy" style="font-size: 5em;color: white;"></span>
                </div>
                <div style="background: #bbb05b;"><h5 style="margin-top: 0px;color:white" class="card-title">Plano : Ouro</h5></div>
                <p class="card-text">
                  <ul style="list-style: none;text-align: left;">
                    <li class="destaque"><strong>Está Incluso:</strong></li>
                    <li><span class="fa fa-arrow-right"></span> Comunicados</li>
                    <li><span class="fa fa-arrow-right"></span> Enquetes</li>
                    <li><span class="fa fa-arrow-right"></span> Chat</li>
                    <li><span class="fa fa-arrow-right"></span> Ocorrências</li>
                    <li><span class="fa fa-arrow-right"></span> Fórum</li>
                    <li><span class="fa fa-arrow-right"></span> Classificados</li>
                    <li><span class="fa fa-arrow-right"></span> Cadastro de Pets</li>
                    <li><span class="fa fa-arrow-right"></span> Documentos</li>
                    <li><span class="fa fa-arrow-right"></span> Reserva de áreas comuns</li>
                    <li><span class="fa fa-arrow-right"></span> Liberação de visitantes</li>
                    <li><span class="fa fa-arrow-right"></span> Qr Code</li>
                    <li><span class="fa fa-arrow-right"></span> Alertas de entrada e saída de visitantes</li>
                    <li><span class="fa fa-arrow-right"></span> Alertas de chegada de correspondências</li>
                    <li><span class="fa fa-arrow-right"></span> A partir de 610 unidades</li>
                    <li><span class="fa fa-arrow-right"></span> Integração Control Guarita</li>
                    <li><span class="fa fa-arrow-right"></span> Backup Control Guarita em nuvem</li>
                  </ul>
                </p>
              </div>
              <div class="hvr-rectangle-out c_button">COMPRAR O PACOTE</span></div>
          </div>
          </div>
        </div>
      </div>

       <!-- send email -->
    <div class="container" style="display:none" id="send-email">
         <div class="row" style="margin-bottom: 17px;">
            <div class="col-md-7">
                <input id="Nome" type="text" class="form-control" name="Nome" placeholder="Nome">
            </div>
            <div class="col-md-5">
                <input id="Email" type="Email" class="form-control" name="Email" placeholder="Email">
            </div>
         </div>  
         <div class="row" style="margin-bottom: 17px;">
            <div class="col-md-12">
                <input id="Assunto" type="text" class="form-control" name="Assunto" placeholder="Assunto">
            </div>
         </div>    
         <div class="row" style="margin-bottom: 17px;">
            <div class="col-md-12">
                <textarea class="form-control" rows="6" placeholder="Menssagem"></textarea>
            </div>
         </div>  
         <div class="row" style="margin-bottom: 17px;">
            <div class="col-md-12">
                <button class="btn btn-primary"><i class="fa fa-share-square"></i> Enviar Mensagem</button>
            </div>
         </div> 
     </div>
    </section>
         
   

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-mobile3"></i></div>
              <div class="text">
                <h3>Responsive Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit iusto provident.</p>
              </div>  
            </div>
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-presentation"></i></div>
              <div class="text">
                <h3>Business Solutions</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit iusto provident.</p>
              </div>
            </div>
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-circle-compass"></i></div>
              <div class="text">
                <h3>Brand Identity</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit iusto provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-lightbulb"></i></div>
              <div class="text">
                <h3>Creative Ideas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
            
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-magnifying-glass2"></i></div>
              <div class="text">
                <h3>Search Engine Friendly</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
            
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="icon-browser2"></i></div>
              <div class="text">
                <h3>Easy Customization</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>

          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section probootstrap-border-top probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Testimonial</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel-fullwidth">
              <div class="item">

                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author">&mdash; Ferdinand A. Porsche <br> <span>Design Lead at AirBNB</span></cite></blockquote>
                </div>

              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author">&mdash; Steve Jobs <br> <span>Co-Founder Square</span></cite></blockquote>
                </div>
              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="img/person_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; Frank Chimero <br> <span>Creative Director at Twitter</span></cite></blockquote>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section probootstrap-border-top probootstrap-bg-white">
      <div class="container" style="width:100%">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            
          </div>
        </div>
        <!-- END row -->
        <div class="simular">
          <div style="margin: -39px 0 0 38%;">
            <h1 style="color:white">Simule agora o seu plano! </h1>
          </div>

          <div class="row" style="margin-top: 34px;">
            <div class="col-md-4" style="margin-left: 26%;">
              <input type="number" id="qtd_unid" class="form-control" placeholder="Quantidade de Unidades"/>
            </div>
            <div class="col-md-4" style="margin-top: 10px;">
               <span class="btn-calcular" onclick="calc()"><span class="fa fa-calculator"></span> Calcular</span>
            </div>
        </div>
              
        </div>
        <!-- END row -->
      </div>
    </section>
    
 
    <footer class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="probootstrap-footer-widget">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <ul class="probootstrap-footer-social">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-github"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Terms of services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Terms of services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Terms of services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12 copyright">
            <p><small>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Stack</a>. All Rights Reserved. <br> Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/">uicookies.com</a></small></p>
          </div>
        </div>
      </div>
    </footer>
    

    <!-- Modal login -->
    <div class="modal fadeInUp probootstrap-animated" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
            <div class="probootstrap-modal-flex">
              <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
              <div class="probootstrap-modal-content">
                <form action="#" class="probootstrap-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div> 
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div> 
                  <div class="form-group clearfix mb40">
                    <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                  </div>
                  <div class="form-group text-left">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-primary btn-block" value="Sign In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group probootstrap-or">
                    <span><em>or</em></span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END modal login -->
    
    <!-- Modal signup -->
    <div class="modal fadeInUp probootstrap-animated" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
            <div class="probootstrap-modal-flex">
              <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
              <div class="probootstrap-modal-content">
                <form action="#" class="probootstrap-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div> 
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div> 
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Re-type Password">
                  </div> 
                  <div class="form-group clearfix mb40">
                    <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                  </div>
                  <div class="form-group text-left">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group probootstrap-or">
                    <span><em>or</em></span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END modal signup -->

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script>
      $('.c_button').click(function(){
         $('#send-email').fadeIn();
      });

      function calc(){
          var qtd  = $('#qtd_unid').val();
          var calc = qtd*2;
          var f2 = calc.toLocaleString('pt-br', {minimumFractionDigits: 2});

          if(qtd == ''){
            Swal.fire(
            'Valor Plano',
            'Preencha a quantidade de unidades.',
            'error'
          )
          }else{
            Swal.fire(
            'Valor Plano',
            f2+' R$ / Mês.',
            'success'
          )
         }   
      }

      $('#btn-fz-simula').click(function(){
        var position  = $('.simular').offset();
        $('html, body').animate({ scrollTop: position.top-100 }, 1000);
      });

      
        
    </script>

  </body>
</html>