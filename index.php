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

        .artone{
          position:relative;
          width:30%;
          float:left;
          padding: 42px 0 0 98px;
        }

        .arttwo{
          position:relative;
          width:30%;
          float:right;
          margin: 115px -21px 0;
        }

        .artthree{
          position:relative;
          width:30%;
          float:right;
          margin: 115px -21px 0;
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.5em;
        }

        .swal2-popup .swal2-styled.swal2-cancel {
              border: 0;
              border-radius: .25em;
              background: initial;
              background-color: #aaa;
              color: #fff;
              font-size: 1.5em;
          }

        .swal2-popup {
   
          width: 60%;
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

        .title_show{
          background: #5b7baa;
          margin-left: 16%;
          padding-left: 395px;
          width: 71%;
        }

        .fundo-costumer{
          padding: 0px;
          background: url(./img/pattern.png) no-repeat center top fixed !important;
          width: 100%;
          overflow: hidden;
          background-repeat: repeat !important;
          background-size: unset !important;

        }

        .fundo-video{
          padding: 0px;
          background: url('img/13651.jpg') ;
          width: 100%;
          overflow: hidden;
          background-repeat: repeat !important;
          background-size: 61%;

        }

        .fundo-integrador{

           padding: 0px;
          background: url('img/4880.jpg') fixed ;
          width: 100%;
          overflow: hidden;
          background-repeat: repeat !important;
          background-size: 100%;
          height: 400px;

        }

        .fundo-diferencial{

          padding: 0px;
          background: url('img/25060.jpg') fixed;
          width: 100%;
          overflow: hidden;
          background-repeat: repeat !important;
          background-size: 100%;
          height: 400px;

          }

        .hvr-rectangle-out:before {
            background: #678ec6 !important;
         }

         @media(max-width:1366px){
            .art-1{
              left: 3% !important;
            }

            .art-2{
              left: -6% !important;
            }

         }
    </style>
  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed mobile_menu_logo2" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <img src="/controlcondo/img/logo.png" class="mobile_menu_logo" style="width: 48%;margin-top: 1.99999%;"/>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">Funções</a>
              <ul class="dropdown-menu">
                <li><a id="fcsobre" href="#">Sobre</a></li>
                <li><a id="fcsimular" href="#">Simulação</a></li>
                <li><a id="fcfuncionalidade" href="#">Funcionalidades</a></li>
              </ul>
            </li>
            <li><a href="#">Novidades</a></li>
            <li><a  id="fccontato" href="#">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider">
      <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 mainart">
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
                      <div class="col-md-8">
                        <div class="hvr-bounce-in btn_effect" id="btn-fz-simula" style="background: #33be33;">
                          <i class="fa fa-share"></i> Fazer Simulação
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                      <div class="hvr-bounce-in btn_effect">
                        <i class="fab fa-apple" style="font-size: 1.4em;"></i> App Store
                      </div> 
                     </div> -->
                    </div>
                    <div class="row" style="margin-top: 6px;">
                    <a  href="https://www.controlcondo.com.br/controlcondo/v2/">
                      <div class="col-md-8">
                        <div class="hvr-bounce-in btn_effect">
                          <i class="fa fa-building"></i> Meu Condominio
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                      <div class="hvr-bounce-in btn_effect">
                        <i class="fab fa-android" style="font-size: 1.4em;"></i> Android
                      </div> 
                     </div> -->
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
            <div class="col-md-4 col-xs-4 art-1" style="left: -8%;margin-top: 128px;"><img style="width: 62%;" src="/controlcondo/img/home.png"></div>
            <div class="col-md-2 col-xs-2 art-2" style="left: -15%;margin-top: 240px;"><img style="width: 100%;" src="/controlcondo/img/ocorrencia.png"></div>

              <div class="col-md-6">
                <div class="probootstrap-slider-text text-center" style="padding: 24px;">
                  <h1 class="probootstrap-heading" style="text-shadow: 0 2px 3px rgba(5, 5, 5, 0.48);margin-right: 517px;color:#3599d2"><span>Control</span><span style="margin-left: 18px;">Condo</span></h1>
                  <p style="text-align: left;">Control Condo é uma rede social desenvolvida para facilitar a comunicação entre moradores, síndico e portaria. Proporcionando experiências únicas, aproximando as pessoas e melhorando a convivência em grupo. O grande diferencial desse sistema, é a plataforma online que possibilita a sincronização dos dados e informações gerados em nossos servidores na nuvem com o servidor Control Guarita instalado em seu condomínio. Nesse sentido temos total interação entre todas as esferas do condomínio de forma produtiva e descomplicada.</p>
                </div>
              </div>
             
            </div>
          </div>
          
        </li>
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-xs-6 art-3" style="left:9%;margin-top: 163px;"><img style="width: 64%;" src="/controlcondo/img/qrcode.png"></div>
              <div class="col-md-6">
                <div class="probootstrap-slider-text text-center" style="padding: 24px;">
                  <h1 class="probootstrap-heading" style="text-shadow: 0 2px 3px rgba(5, 5, 5, 0.48);margin-right: 517px;color:#3599d2"><span>Control</span><span style="margin-left: 18px;">Guarita</h1>
                  <p style="text-align: left;">Todas as ferramentas necessárias em um único software. Permitindo assim a atualização direta do sistema com os eventos do Control Guarita. E a atualização do software da portaria instantaneamente com os dados do sistema. Sem a necessidade de consultar vários sites/softwares para verificar a liberação de um visitante.</p>
                </div>
              </div>
             
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container panelfuncoes">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>FUNÇÕES</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
            <div class="row probootstrap-gutter60 panelfirst">
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
          <div class="row panelfirst">
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
        <div class="row morefunction panelfirst" style="padding-right: 0px;display:none">
        <div class="col-md-4 probootstrap-animate fadeIn probootstrap-animated" style="padding-left: 0px;" data-animate-effect="fadeIn">
                <div class="service hover_service text-center" style="height: 429px;">
                <div class="icon"><i class="fa fa-comment"></i></div>
                <div class="text">
                    <h3>CHAT</h3>
                    <p>O morador pode habilitar a função de chat, para comunicação com outros condôminos, síndicos e administradores.</p>
                </div>  
                </div>
            </div>  
        </div>
        <div class="row mt50">
          <div class="col-md-12 text-center">
            <a class="btn btn-primary btn-lg" role="button" onclick="morefunction()">Mais Funções</a>
          </div>
        </div>
      </div>
    </section> 
    
  
    <!--<section class="probootstrap-section probootstrap-bg-white" style="padding-bottom: 25px;">
    <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
              <h2>Website e Mobile App</h2>
              <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">
                 Confira a interface grafica de alguns de nossos modulos.
              </h3>
            </div>
        </div>
      <div class="owl-carousel owl-work" style="background-color:rgb(251, 251, 251);padding:56px 0 56px 0">
        <div class="item">
            <img src="/controlcondo/img/home.png" style="width:37%;margin-left:30%" id="cel1" />
        </div>
        <div class="item">
          <img src="/controlcondo/img/ocorrencia.png" style="width:37%;margin-left: 30%" id="cel2"/> 
        </div>
        <div class="item">
          <img src="/controlcondo/img/qrcode.png" style="width:37%;margin-left: 30%" id="cel3"/>
        </div>
        <div class="item">
          <img src="/controlcondo/img/controlcondo_web.png" style="width:85%;" id="cel4"/>
        </div> 
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/controlcondo/img/controlcondo_reserva.png" style="width:100%;" id="cel5">
          </a>
        </div>
      </div>
    </section> -->

    <section class="probootstrap-section probootstrap-bg-white mobilephoto" style="padding-bottom: 25px;">
      <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
              <h2>Funcionalidades</h2>
              <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">Confira as funcionalidades contidas no sistema.</h3>
            </div>
        </div>
      <div class="owl-carousel owl-work" style="background-color:rgb(251, 251, 251);padding:56px 0 56px 0" >
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
                <div style="width:348px;height:400px"> 
                    <img src="/controlcondo/img/home_mobile.png"   />  
                </div>
                           
             </div>
        </div>
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <div style="width:448px;height:500px;padding-top:11px"> 
                    <img src="/controlcondo/img/monitor_home.png"  class="art_monitor" />  
                </div>                
             </div>
        </div> 
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <div style="width:348px;height:400px"> 
                    <img src="/controlcondo/img/ocorrencia_mobile.png" />  
                </div>              
             </div>
        </div>
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <div style="width:348px;height:400px"> 
                    <img src="/controlcondo/img/qrcode_mobile.png" />  
                </div>  
             </div>
        </div>
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <div style="width:448px;height:500px;padding-top:11px"> 
                    <img src="/controlcondo/img/monitor_reserva.png"  class="art_monitor"/>  
                </div>                
             </div>
        </div>   
      </div>
    </section> 

    
    <section class="probootstrap-section probootstrap-bg-white" style="padding-bottom: 25px;">
      <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
              <h2>SEJA UM INTEGRADOR CONTROL CONDO</h2>
              <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">
                 Sendo um representante Control Condo você complementa sua renda e melhora a vida dos moradores!
              </h3>
            </div>
        </div>
      <div class="fundo-integrador" >
        <div class="row integradorresp" style="margin: 13% 0 0 20%;" >
        <div class="col-md-7 col-xs-7">
          <input type="text" placeholder="E-mail" style="padding-left: 18px;width:100%" />
        </div>
        <div class="col-md-5 col-xs-5">
          <button class="btn btn-success" style="height: 49px;"><span class="fa fa-email"></span> Enviar</button>
        </div>
        </div>
      </div>
    </section> 

     <section class="probootstrap-section probootstrap-bg-white" style="padding-bottom: 25px;">
      <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
              <h2>Diferencial</h2>
              <h3 style="font-size: 19px;color:rgba(0,0,0,.3)"></h3>
            </div>
        </div>
      <div class="fundo-diferencial" >
        <div class="row fundo-diferencialresp"  style="margin: 8% 0 0 20%;">
          <div class="col-md-4" style="color:white;background-color: rgba(37, 52, 81, 0.78);">
            <h2 style="color:white">Condomínios residenciais horizontais</h2>
            O Control Condo permite total controle dos acessos ao condomínio, com muita agilidade e praticidade para moradores, síndicos e administradores
          </div>
          <div class="col-md-4 diferencialresp2" style="color:white;background-color: rgba(37, 52, 81, 0.78);margin-left: 12%;">
            <h2 style="color:white">Condomínios residenciais verticais</h2>
            Nos prédios o Control Condo oferece uma praticidade de controle de acesso, sem que o morador precise sair de seu apartamento.
          </div>
       
        </div>
      </div>
    </section> 




    <section class="probootstrap-section probootstrap-bg-white" style="padding-bottom: 25px;">
      <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
              <h2>Funcionalidades</h2>
              <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">Confira as funcionalidades contidas no sistema.</h3>
            </div>
        </div>
      <div class="owl-carousel owl-work fundo-video" >
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
                  <iframe class="video" width="400" height="400" src="https://www.youtube.com/embed/g9gu8TNTRME" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
              </div>
        </div>
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <iframe class="video" width="400" height="400" src="https://www.youtube.com/embed/TS4woa5CO-0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <iframe class="video" width="400" height="400" src="https://www.youtube.com/embed/T6vbtlkMHCg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="item">
             <div class="videofather col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated"  style="padding: 76px;">
             <iframe class="video" width="400" height="400" src="https://www.youtube.com/embed/lk8yDscZ4aA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>  
      </div>
    </section> 


          
   <!-- <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase" style="padding: 0 20px 0 19px;">
         <div class="owl-carousel owl-work owl-theme owl-loaded owl-text-select-on">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
                <h2>Diferenciais</h2>
                <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">Confira as funcionalidades criadas para auxiliar na gestão do seu condominio.</h3>
              </div>
              <div class="col-md-12 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated fundo-video"  style="padding: 76px;">
                  <iframe width="800" height="400" src="https://www.youtube.com/embed/g9gu8TNTRME" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
              </div>
          </div> 
      </div>
   </section>  -->
    
    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase" style="padding: 0 0px 0 0px;">
      <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
            <h2>SOBRE</h2>
            <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">Confira alguns de nossos processos na gestão de condominio.</h3>
          </div>
      </div>
      <div class="fundo-costumer container">
      <section>
       <div class="col-md-4 col-xs-12 interacao1" style="margin: 33px 0 0 31%;">
          <img src="img/interacao1.png" style="width: 100%;" class="text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
       </div>
       <!--<div class="col-md-4" style="margin-left: 201px;margin-top: 280px;">
          <img src="img/teste.png" class="text-center section-heading probootstrap-animate fadeInUp probootstrap-animated">
       </div>-->
       </section>
      </div>
   </section>
   
    <!--<section class="fundo-costumer probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase" style="padding:0px">
      <div class="col-md-12 section-heading probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
              <div class="title_show">
                <h1 style="color:white">PACOTE DE SISTEMA - CONTROL CONDO</h1>
              </div>
              <h3 style="font-size: 19px;color: rgba(0,0,0,.3);margin-left: 35%;">Confira todos os nossos planos e preços do pacote de sistema</h3>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn">
            <div class="card bg-dark text-white">
              <div class="card-img-overlay" style="border: 1px solid #d2d2d2;">
                <div style="background: #e68f2b;padding: 6px;">
                  <span class="fa fa-trophy" style="font-size: 5em;color: white;"></span>
                </div>
                <div style="background: #cd8a3c;"><h5 style="margin-top: 0px;color:white" class="card-title">Plano : Bronze</h5></div>
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
                <div style="background: #e6d54d;padding: 6px;">
                  <span class="fa fa-trophy" style="font-size: 5em;color: white;"></span>
                </div>
                <div style="background: #d6c53f;"><h5 style="margin-top: 0px;color:white" class="card-title">Plano : Ouro</h5></div>
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
    </section>-->
         
   

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <div class="text">
                <h3>Interface</h3>
                <p>Interface amigável e de fácil utilização</p>
              </div>  
            </div>
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="fa fa-car"></i></div>
              <div class="text">
                <h3>Comodidade e Mobilidade</h3>
                <p>Seu condomínio onde você estiver</p>
              </div>
            </div>
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="fa fa-lock"></i></div>
              <div class="text">
                <h3>Segurança</h3>
                <p>Todos os dados estão seguros, o Control Condo utiliza as melhores tecnologias de criptografia na conexão.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="fa fa-ring"></i></div>
              <div class="text">
                <h3>Integração Total</h3>
                <p>Integração total com o controle de acesso do condomínio</p>
              </div>  
            </div>
            
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="fa fa-check-circle"></i></div>
              <div class="text">
                <h3>Control Guarita</h3>
                <p>Integração total com o sistema Control Guarita</p>
              </div>
            </div>
            
            <div class="service left-icon probootstrap-animate" data-animate-effect="fadeInLeft">
              <div class="icon"><i class="fa fa-check"></i></div>
              <div class="text">
                <h3>Oportunidades</h3>
                <p>Divulgação de oportunidades em uma área de classificados para todos moradores.</p>
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
            <h2>PERGUNTAS FREQUENTES</h2>
            <h3 style="font-size: 19px;color:rgba(0,0,0,.3)">Confira algumas dúvidas dos nossos usuários e vê se a sua se encaixa</h3>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel-fullwidth">
              <div class="item">

                <div class="probootstrap-testimony-wrap text-center">
                  <!--<figure>
                    <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>-->
                  <blockquote class="quote">&ldquo;Posso ter mais de um perfil vinculados a mesma conta no Control Condo?.&rdquo; <cite class="author">&mdash; Lucas Silva <br></cite></blockquote>
                </div>

              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <!--<figure>
                    <img src="img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>-->
                  <blockquote class="quote">&ldquo;Esqueci minha senha, como recuperar?.&rdquo; <cite class="author">&mdash; Rafael Aranha <br></cite></blockquote>
                </div>
              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <!--<figure>
                    <img src="img/person_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>-->
                  <blockquote class="quote">&ldquo;Como liberar um visitante pelo app?.&rdquo; <cite class="author">&mdash; Nicolas Souza <br></cite></blockquote>
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
          <div class="simular2" style="margin: -39px 0 0 38%;">
            <h1 style="color:white">Simule agora o seu plano! </h1>
          </div>

          <div class="row" style="margin-top: 34px;">
            <div class="col-md-4 col-xs-5 simule1" style="margin-left: 26%;">
              <input type="number" id="qtd_unid" class="form-control" placeholder="Unidades"/>
            </div>
            <div class="col-md-4 col-xs-7" style="margin-top: 10px;">
               <span class="btn-calcular" onclick="calc()"><span class="fa fa-calculator"></span> Calcular</span>
            </div>
        </div>
              
        </div>
        <!-- END row -->
      </div>
    </section>
    

    <footer class="probootstrap-footer">
      <div class="container" style="width:95%">
        <div class="row">
          <div class="col-md-6">
            <div class="probootstrap-footer-widget">
              <h3>Control Condo</h3>
              <p>Control Condo é uma rede social desenvolvida para facilitar a comunicação entre moradores, síndico e portaria. Proporcionando experiências únicas, aproximando as pessoas e melhorando a convivência em grupo. O grande diferencial desse sistema, é a plataforma online que possibilita a sincronização dos dados e informações gerados em nossos servidores na nuvem com o servidor Control Guarita instalado em seu condomínio.</p>
              <ul class="probootstrap-footer-social">
                <li><a href="https://www.facebook.com/controlguarita/"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCdas9PY7vrJhL9GENETHsew"><i class="icon-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Informações de contato</h3>
                  <ul>
                    <li><span class="fa fa-map-marker"></span> Endereço: Av. Argentina, 252
                        <br>CEP: 13145-705, Jardim América – Paulinia – SP
                    </li>
                    <li><span class="fa fa-user"></span> Suporte Técnico Segunda à Sábado das 8:00 às 21:00</li>
                    <li><span class="fa fa-phone"></span> Telefone: (19) 3244-7142</li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Mapa Do Site</h3>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Control Condo</a></li>
                    <li><a href="#">O Control Condo é indicado</a></li>
                    <li><a href="#">Funções</a></li>
                    <li><a href="#">Mais funções</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Imagens Control Condo</a></li>
                    <li><a href="#">Diferenciais</a></li>
                    <li><a href="#">Depoimentos</a></li>
                    <li><a href="#">Seja Um Integrador Control Condo</a></li>
                    <li><a href="#">Perguntas Frequentes</a></li>
                    <li><a href="#">Blog Na Principal</a></li>
                    <li><a href="#">Pacote Do Sistema</a></li>
                    <li><a href="#">Novidades</a></li>
                    <li><a href="#">Contato</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Facebook</h3>
                  <ul>
                   <li>
                      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcontrolcondo%2F&tabs=timeline&width=286&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="284" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12 copyright">
            <p><small>&copy; 2019. Todos os direitos Reservados.</small></p>
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


      $(document).ready(function(){
         let len = $(window).width();

         if(len < 738){

            $('.art-1').hide();
            $('.art-2').hide();
            $('.art-3').hide();
         }
      });

      $('.c_button').click(function(){
         $('#send-email').fadeIn();
      });

      function calc(){
          let qtd   = $('#qtd_unid').val();
          let calc  = qtd*2;

          if(calc <= 200){
              calc = 200;
          };
          
          let valor = calc.toLocaleString('pt-br', {minimumFractionDigits: 2});

          if(qtd == ''){
              Swal.fire(
                'Erro',
                'Preencha a quantidade de unidades.',
                'error'
              )
          }else{
              Swal.fire({
                type: 'success',
                title: 'Enviar Solicitação',
                html: formulario(valor,qtd),
                showCancelButton: true,
                confirmButtonText: 'Enviar Solicitação',
                showLoaderOnConfirm: true
            }).then((result) => {
              if (result.value) {
                  sendEmail();
                  confirma_envio();
              } else if (
                result.dismiss === Swal.DismissReason.cancel
              ) {
                
                }
            })
         }     
      }

      function confirma_envio(){
            Swal.fire(
                'Sucesso',
                'Sua Solicitação foi enviada com sucesso!',
                'success'
              )
      }

      function formulario(valor,unidade){
          let html = '<div class="row"><div class="col-md-12"><input style="margin-bottom: 9px;" class="form-control" type="text" id="nomeCond" placeholder="Nome Condominio"/></div>';
              html += '<div class="col-md-12"><input style="margin-bottom: 9px;"  class="form-control" type="text" id="nomeContato" placeholder="Nome Contato"/></div>';
              html += '<div class="col-md-12"><input style="margin-bottom: 9px;width:50%"  class="form-control" type="text" id="TelefoneContato" placeholder="Telefone"/></div>';
              html += '<div class="col-md-12"><input style="margin-bottom: 9px;"  class="form-control" type="text" id="EmailContato" placeholder="E-mail"/></div>';
              html += '<div class="col-md-3"><input disabled value="'+unidade+' Unidades" style="color: #1b3ef7;margin-bottom: 9px;" id="UnidadeContato" class="form-control" type="text" placeholder="Unidades"/></div>';
              html += '<div class="col-md-4"><input disabled value="'+valor+' R$ / Mês" style="color: #1b3ef7;margin-bottom: 9px;" id="ValorContato" class="form-control" type="text" placeholder="Valor R$"/></div>';             
              html += '<div class="col-md-12"><textarea style="margin-bottom: 9px;" rows="5" class="form-control" type="text" id="ObsContato" placeholder="Observação"></textarea></div>';
        
          return html;
      }

      $('#btn-fz-simula').click(function(){
        var position  = $('.simular').offset();
        $('html, body').animate({ scrollTop: position.top-100 }, 2000);
      });

       $('#fcsobre').click(function(){
        var position  = $('.probootstrap-footer').offset();
        $('html, body').animate({ scrollTop: position.top-100 }, 1000);
      });

      $('#fcsimular').click(function(){
        var position  = $('.simular').offset();
        $('html, body').animate({ scrollTop: position.top-100 }, 1000);
      });

      $('#fcfuncionalidade').click(function(){
        var position  = $('.panelfuncoes').offset();
        $('html, body').animate({ scrollTop: position.top-100 }, 1000);
      });

      $('#fccontato').click(function(){
        var position  = $('.probootstrap-footer').offset();
        $('html, body').animate({ scrollTop: position.top-100 }, 1000);
      });

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));


    function morefunction(){

          $('.morefunction').slideToggle()
      
    }

    function sendEmail(){

      let condominio = $('#nomeCond').val();
      let nome       = $('#nomeContato').val();
      let telefone   = $('#TelefoneContato').val();
      let email      = $('#EmailContato').val();
      let unidades   = $('#UnidadeContato').val();
      let valor      = $('#ValorContato').val();
      let obs        = $('#ObsContato').val();

      $.ajax({

          type:'POST',
          url:'https://www.controlcondo.com.br/controlcondo/v2/sentemail/index.php',
          data:{

             nomecond:condominio,
             nome:nome,
             telefone:telefone,
             de:email,
             qtdunidade:unidades,
             valor:valor,
             obs:obs
          },
          success:function(){


          }
     })

 }

    
    </script>
  </body>
</html>