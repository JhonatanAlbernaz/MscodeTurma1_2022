<?php
  session_start(); // Inicia a sessão.
?>

<!DOCTYPE html>
 <html lang="pt">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
   <title class="font-size-title">MS Code</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
   <!-- Custom styles for this template-->
   <link rel="icon" href="assets/img/favicon.ico">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/index.css">
   <link rel="stylesheet" href="assets/css/app.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

   <link href="app/View/assets/css/sb-admin-2.css" rel="stylesheet">

   <style>
    .bg-dark-transparent {
      background-color: rgba(0, 0, 0, 0.85);
    }

    .select {
      height: calc(1.5em + 0.5rem rem + 2px);
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
      border-radius: 0.2rem;
      background: transparent;
      border: 1px solid gray;
    }

    .text-decoration-none {
      text-decoration: none;
      cursor: pointer;
    }
   </style>
 </head>

 <body>

  <div id="header" class="section header header--fixed header--none section--n4oj2k38vq" style="background-color:rgb(40, 40, 40);border-color:rgba(0, 0, 0, 0.1);--wr-max:1200px">
   <div class="wr color-1" style="margin-top:20px;margin-bottom:20px">
    <div id="headerNav"><a id="headerLogo" href="" class="header__logoImg"><img src="assets/img/6ilrpjqsny80b5ti.png" width="200" alt="[object Object]"></a>
     <div class="spacer"></div>
     <div class="headerNav__links"></div>
     <div class="header__navCtas">
      <a href="app/View/admin/login.php" class="btn btn--b btn--primary font-size-menu" style="color:#3e4134;background-color:#fff">LOGIN</a>
      <a href="#inscricao" class="btn btn--b btn--primary font-size-menu" style="color:#3e4134;background-color:#fff">Cadastrar<svg width="13" height="12" xmlns="http://www.w3.org/2000/svg">
       <path d="M9.6 7H1a1 1 0 1 1 0-2h8.6L7 2.4A1 1 0 0 1 8.4 1l4.3 4.2c.2.3.3.5.3.8 0 .3-.1.5-.3.7L8.4 11A1 1 0 1 1 7 9.5L9.6 7z" fill="#3e4134"></path>
       </svg></a>
     </div>
    </div>
    <div id="headerMenuButton" class="burger font-size-menu">Menu</div>
   </div>
   <div class="headerMenu">
    <div id="headerDrawerBackdrop" class="headerMenu__backdrop"></div>
    <div class="headerMenu__wrapper bg-dark-transparent ">
     <ul class="headerMenu__links">
      <li>
       <a href="app/View/admin/login.php" class="drawerLink font-size-menu"> LOGIN  </a>
      </li>
      <li>
       <a href="#inscricao" class="drawerLink font-size-menu"> Cadastrar
        <svg width="13" height="12" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.557 7H1a1 1 0 1 1 0-2h8.586L7.007 2.421a1 1 0 0 1 1.414-1.414l4.243 4.243c.203.202.3.47.292.736a.997.997 0 0 1-.292.735L8.42 10.964A1 1 0 1 1 7.007 9.55L9.557 7z" fill="currentColor"></path>
        </svg>
       </a>
      </li>
     </ul>
    </div>
   </div>
  </div>

  <div id="hero" class="section section--hero section--noPadding section--left" style="background-color:rgb(40, 40, 40);min-height:100vh;--pdx-min-height:0px;--wr-max:1200px">
    <div id="headerSpacer" style="height:90px"></div>
    <script>
     ! function() {
      var e, t = document.getElementById("header"),
        n = document.getElementById("headerSpacer");
        t && n && (e = t.getBoundingClientRect().height, n.setAttribute("style", "height:" + e + "px"))
      }()
    </script>
    <div class="divider divider--slantedTwo"><svg viewBox="0 0 1694 364" preserveAspectRatio="none">
     <path d="M.8 358.6v5H1694V.7z" fill="rgb(255, 255, 255)" fill-rule="evenodd"></path>
     </svg></div>
    <div class="ft ft--left" style="--pdx-pt:0;--pdx-pb:0">
     <div class="ft__half">
      <div class="ft__wrapper" style="max-width:570px">
       <div class="ft__content">
        <h1 class="hero__title color-1 weight-title-h font-title font-size-albernaz-company"> Albernaz Company </h1>
        <p class="hero__subtitle weight-text font-size-subtitle"> Software ERP de fabricação desenvolvido para oferecer visibilidade e controle sobre todas as partes móveis do seu negócio. Estoque, vendas e muito mais. </p>
        <div class="ctas"><a href="#inscricao" class="btn btn--b btn--primary btn--large font-size-menu" style="color:#3e4134;background-color:#fff">Embarque nessa jornada<svg width="13" height="12" xmlns="http://www.w3.org/2000/svg">
         <path d="M9.6 7H1a1 1 0 1 1 0-2h8.6L7 2.4A1 1 0 0 1 8.4 1l4.3 4.2c.2.3.3.5.3.8 0 .3-.1.5-.3.7L8.4 11A1 1 0 1 1 7 9.5L9.6 7z" fill="#3e4134"></path>
         </svg></a>
        </div>
        <div class="hero__ctaInfo"></div>
       </div>
      </div>
     </div>
     <div class="ft__half pdx pdxParent--img-transparent" style="--pdx-maxheight:1">
      <div class="pdxItem pdxItem--img-transparent">
       <img src="assets/img/developer.png">
      </div>
     </div>
    </div>
   </div>
   <div id="press" class="section section--logos section--center dark" style="background-color:rgb(255, 255, 255);padding-bottom:60px;padding-top:60px;--pdx-min-height:0px;--wr-max:1200px">
    <div class="wr">
     <h2 class="color-1 weight-title-h font-title section__title center font-size-title-company">
      Inspirado por pequenos empresários
     </h2>
     <p class="weight-text section__subtitle center font-size-subtitle">
      Obtenha as ferramentas necessárias para iniciar, administrar e expandir seus negócios. Use o software de 
      aluguel para gerenciar estoque, pedidos, documentos e pagamentos. Tudo dentro de um único sistema de aluguel.
     </p>
     <div class="logos logos--fill">
      <div target=""></div>
      <div target=""></div>
      <div target=""><img src="assets/img/t48vcxi0t6y84itt.png" class="logos__logo"></div>
      <div target=""><img src="assets/img/zpbvyx9hp7eji7oy.png" class="logos__logo"></div>
      <div target=""></div>
      <div target=""></div>
     </div>
    </div>
   </div>
   <div id="features" class="section section--features section--center section--k4xrqdwompn" style="background-color:rgb(40, 40, 40);padding-bottom:60px;padding-top:60px;--pdx-min-height:0px;--wr-max:1200px">
    <div class="wr">
     <p class="weight-text section__subtitle center standalone font-size-subtitle">
      Para quem quer voar na era digital essa é a sua chance de fazer história.🚀
     </p>
     <div class="row">
      <div class="col-lg-12">
       <div class="row d-flex align-content-between justify-content-between">

       <div class="col-md-3 col-sm-6 mb-sm-4 mb-3 d-flex align-items-center justify-content-center">
        <div class="feature d-flex flex-column justify-content-center align-items-center">
         <div class="iconWrapper xlarge rounded bg-danger" style="width:80px;height:80px">
          <i class="fa-solid fa-hand-holding-dollar" style="font-size: 35px;"></i>
         </div>
         <h5 class="color-1 weight-text-m text-center font-size-name-icons">70+ Integrações</h5>
         <div class="feature__description"></div>
        </div>
       </div>

       <div class="col-md-3 col-sm-6 mb-sm-4 mb-3 d-flex align-items-center justify-content-center">
        <div class="feature d-flex flex-column justify-content-center align-items-center">
         <div class="iconWrapper xlarge rounded bg-danger" style="width:80px;height:80px">
          <i class="fa-solid fa-boxes-stacked" style="font-size: 35px;"></i>
         </div>
         <h5 class="color-1 weight-text-m text-center font-size-name-icons">Armazém</h5>
         <div class="feature__description"></div>
        </div>
       </div>

       <div class="col-md-3 col-sm-6 mb-sm-4 mb-3 d-flex align-items-center justify-content-center">
        <div class="feature d-flex flex-column justify-content-center align-items-center">
         <div class="iconWrapper xlarge rounded bg-danger" style="width:80px;height:80px">
         <i class="fa-solid fa-cart-plus" style="font-size: 35px;"></i>
         </div>
         <h5 class="color-1 weight-text-m text-center font-size-name-icons">Pedido</h5>
         <div class="feature__description"></div>
        </div>
       </div>

       <div class="col-md-3 col-sm-6 mb-sm-4 mb-3 d-flex align-items-center justify-content-center">
        <div class="feature d-flex flex-column justify-content-center align-items-center">
         <div class="iconWrapper xlarge rounded bg-danger" style="width:80px;height:80px">
          <i class="fa-solid fa-truck-ramp-box" style="font-size: 35px;"></i>
         </div>
         <h5 class="color-1 weight-text-m text-center font-size-name-icons">Inventário </h5>
         <div class="feature__description"></div>
        </div>
       </div>

      </div>
     </div>
    </div>
   </div>
  </div>

  <div id="feature" class="section section--feature section--noPadding section--right" style="background-color:rgb(40, 40, 40);--pdx-min-height:0px;--wr-max:1200px">
   <div class="divider divider--wave divider--front"><svg viewBox="0 0 1695 57" preserveAspectRatio="none">
    <path d="M0 23c135.4 19 289.6 28.5 462.5 28.5C721.9 51.5 936.7 1 1212.2 1 1395.8.9 1556.7 8.3 1695 23v34H0V23z" fill="rgb(255, 255, 255)" fill-rule="evenodd"></path>
    </svg></div>
    <div class="ft ft--right" style="--pdx-pt:0;--pdx-pb:0">
     <div class="ft__half pdx pdxParent--img-transparent" style="--pdx-maxheight:0.72">
      <div class="pdxItem pdxItem--img-transparent"><img src="assets/img/4a7bsc4om3rvtzul.png"> </div>
     </div>
     <div class="ft__half">
      <div class="ft__wrapper" style="max-width:570px">
       <div class="ft__content">
        <h2 class="color-1 weight-title-h font-title section__title right noMargin font-size-title-inventory">Visibilidade do inventário em tempo real</h2>
        <p class="weight-text section__subtitle right noMargin font-size-subtitle">
         Desfrute de visibilidade detalhada e em tempo real sobre as principais medidas de controle de 
         estoque e gerenciamento da cadeia de suprimentos, incluindo tendências de estoque, estoque sob pedido
         e desempenho pontual do fornecedor.
        </p>
        <div class="ft__description">
         <div class="ftChecks col-sec">
          <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
           <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
           <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
           </polygon>
           </g>
           </g>
           </svg>Alertas de ações</div>

           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Devoluções de Mercadorias de Clientes / Fornecedores</div>

           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Disponibilidade do fornecedor e prazos de entrega</div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>

  <div id="feature" class="section section--feature section--noPadding section--left dark" style="background-color:rgb(255, 255, 255);--pdx-min-height:0px;--wr-max:1200px">
   <div class="divider divider--wave divider--front"><svg viewBox="0 0 1695 57" preserveAspectRatio="none">
    <path d="M0 23c135.4 19 289.6 28.5 462.5 28.5C721.9 51.5 936.7 1 1212.2 1 1395.8.9 1556.7 8.3 1695 23v34H0V23z" fill="rgb(40, 40, 40)" fill-rule="evenodd"></path>
    </svg></div>
    <div class="ft ft--left" style="--pdx-pt:10.000000000000014;--pdx-pb:20">
     <div class="ft__half">
      <div class="ft__wrapper" style="max-width:570px">
       <div class="ft__content">
        <h2 class="color-1 weight-title-h font-title section__title left noMargin font-size-title-inventory">Compra completa do Procure-to-Pay</h2>
        <p class="weight-text section__subtitle left noMargin font-size-subtitle">
         A Albernaz Company permite que você passe de compras manuais baseadas em papel para compras 
         automatizadas de baixo custo e maior controle. Simplifique as compras e economize mais dinheiro em seus resultados.
        </p>
        <div class="ft__description">
         <div class="ftChecks col-sec">
          <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
           <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
           <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
           </polygon>
           </g>
           </g>
           </svg>Cotações de vendas para clientes</div>

           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Envio Parcial / Recebimento Parcial</div>

           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Pedidos de vendas de clientes</div>

           </div>
          </div>
         </div>
        </div>
       </div>
      <div class="ft__half pdx pdxParent--img-transparent" style="--pdx-maxheight:0.72">
       <div class="pdxItem pdxItem--img-transparent"><img src="assets/img/q6nvv9sa1k80jc8i.svg"></div>
      </div>
     </div>
    </div>
    <div id="feature" class="section section--feature section--noPadding section--right" style="background-color:rgb(40, 40, 40);--pdx-min-height:0px;--wr-max:1200px">
     <div class="divider divider--doubleWave divider--front"><svg viewBox="0 0 1695 75">
      <g fill="rgb(255, 255, 255)" fill-rule="evenodd">
      <path d="M1695 37c-172.267-24.667-288.075-37-347.424-37-235.393 0-362.51 37-500.076 37C729.142 37 554.567 0 363.792 0 287.247 0 165.982 12.333 0 37v38l1695-1V37z" opacity=".61"></path>
      <path d="M0 12c170.016 20.667 304.159 31 402.428 31 147.405 0 205.312-31 441.418-31s298.731 31 492.4 31C1465.36 43 1584.945 32.667 1695 12v62H0V12z">
      </path>
      </g>
      </svg></div>
     <div class="ft ft--right" style="--pdx-pt:100;--pdx-pb:100">
      <div class="ft__half pdx pdxParent--img-transparent" style="--pdx-maxheight:0.72">
       <div class="pdxItem pdxItem--img-transparent"><img src="assets/img/zu0u04ko03if1dax.svg"></div>
      </div>
      <div class="ft__half">
       <div class="ft__wrapper" style="max-width:570px">
        <div class="ft__content">
         <h2 class="color-1 weight-title-h font-title section__title right noMargin font-size-title-inventory">Inventário avançado e atendimento de pedidos</h2>
         <p class="weight-text section__subtitle right noMargin font-size-subtitle">
          A Albernaz Company economiza em qualquer distribuição inúmeras horas de trabalho associadas à entrada, organização e atendimento 
          de dados. Você poderá converter leads em pedidos, pedidos em remessas e remessas em receita em pouco tempo.
         </p>
         <div class="ft__description">
          <div class="ftChecks col-sec">
           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Vendas e compras de dropshipping</div>

           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Verificação de capacidade de atendimento automatizada</div>

           <div class="ftCheck font-size-name-icons"><svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="ui-icons" transform="translate(-109.000000, -67.000000)" fill="#F00000">
            <polygon id="check" points="108.994099 76.4000626 115.987848 83.419577 129.407253 69.9978283 126.587674 67.1592372 115.987848 77.7490936 111.827057 73.5894775">
            </polygon>
            </g>
            </g>
            </svg>Acompanhamento de custos do produto ao longo do tempo</div>
           </div>

          </div>
         </div>
        </div>
       </div>
      </div>
     </div>

  <div id="testimonials" class="section section--grid section--center dark" style="background-color:rgb(255, 255, 255);padding-bottom:60px;padding-top:60px;--pdx-min-height:0px;--wr-max:1200px">
   <div class="divider divider--curve divider--front"><svg viewBox="0 0 1695 72" preserveAspectRatio="none">
    <path d="M0 0c282.5 45 565 67.5 847.5 67.5S1412.5 45 1695 0v72H0V0z" fill="rgb(40, 40, 40)" fill-rule="evenodd">
    </path>
    </svg></div>
    <div class="wr titleAlign--top">
     <div class="titleWrapper">
      <h2 class="color-1 weight-title-h font-title section__title center font-size-title-inventory">Uma solução unificada de gerenciamento de serviços</h2>
      <p class="weight-text section__subtitle center font-size-subtitle">Ofereça prazer, aumente a eficiência e obtenha maior ROI com o Freshservice</p>
     </div>
     <div class="testimonials--horizontal">
      <div class="testimonial">
       <div class="rating"></div>
       <div class="testimonial__quote color-1 font-size-title-quotes">
       <p>
        Automações robustas
       </p>
      </div>
      <b><a target="" class="testimonial__about weight-text-m text-danger text-decoration-none font-size-subtitle-quotes">Elimine tarefas repetitivas e processos manuais e aumente a eficiência do serviço usando fluxos de trabalho sem código e automações poderosas</a></b>
     </div>
     <div class="testimonial">
      <div class="rating"></div>
      <div class="testimonial__quote color-1 font-size-title-quotes">
       <p>
        Plataforma Integrada
       </p>
      </div>
      <b><a target="" class="testimonial__about weight-text-m text-danger text-decoration-none font-size-subtitle-quotes">Integre o gerenciamento de serviços em uma única plataforma para unir silos, melhorar o tempo de resolução, reduzir custos e melhorar a visibilidade</a></b>
     </div>
     <div class="testimonial">
      <div class="rating"></div>
       <div class="testimonial__quote color-1 font-size-title-quotes">
        <p>
         Desenvolvimento rápido
        </p>
       </div>
       <b><a target="" class="testimonial__about weight-text-m text-danger text-decoration-none font-size-subtitle-quotes">Personalize rapidamente com a plataforma sem código do Freshservice. Obtenha integração especializada, serviços de migração e suporte 24 horas por dia, 7 dias por semana</a></b>
      </div>
     </div>
    </div>
   </div>

  <div id="grid" class="section section--grid section--center" style="background-color:rgb(40, 40, 40);padding-bottom:60px;padding-top:60px;--pdx-min-height:0px;--wr-max:1200px">
   <div class="wr titleAlign--top">
    <div class="titleWrapper">
     <h2 class="color-1 weight-title-h font-title section__title center standalone font-size-title-inventory">Mais do que um ERP de manufatura</h2>
    </div>

    <div class="row my-5">
     <div class="col-lg-3 col-md-6 mb-3 p-md-4">
      <div class="card text-dark h-100">
       <div class="card-body">
        <div class="row text-center d-flex justify-content-center align-content-center mb-3">
         <div class="iconWrapper rounded bg-danger" style="width:70px;height:70px">
          <i class="fa-solid fa-user-astronaut" style="font-size: 35px;"></i>
         </div>
        </div>
        <div class="row">
         <h5 class="text-center font-size-title-icons">Dados que se movem tão rápido quanto seu inventário</h5>
         <p class="text-center mt-3 font-size-subtitle" style="font-size: 13px;">
          Monitore suas equipes, vendas e movimentos de estoque em tempo 
          real com software desenvolvido para velocidade e precisão.
         </p>
         </div>
        </div>
       </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-3 p-md-4">
       <div class="card text-dark h-100">
        <div class="card-body">
         <div class="row text-center d-flex justify-content-center align-content-center mb-3">
          <div class="iconWrapper rounded bg-danger" style="width:70px;height:70px">
           <i class="fa-solid fa-user-tie" style="font-size: 35px;"></i>
          </div>
         </div>
         <div class="row">
          <h5 class="text-center font-size-title-icons">Integração e suporte ao cliente de primeira linha</h5>
          <p class="text-center mt-3 font-size-subtitle" style="font-size: 13px;">
           Seu feedback é o que molda nosso desenvolvimento de produtos, e nossas 
           equipes voltadas para o cliente são nosso maior patrimônio.
          </p>
         </div>
        </div>
       </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-3 p-md-4">
       <div class="card text-dark h-100">
        <div class="card-body">
         <div class="row text-center d-flex justify-content-center align-content-center mb-3">
          <div class="iconWrapper rounded bg-danger" style="width:70px;height:70px">
           <i class="fa-solid fa-code" style="font-size: 35px;"></i>
          </div>
         </div>
         <div class="row">
          <h5 class="text-center font-size-title-icons">Integrações nativas e infinitas opções via API</h5>
          <p class="text-center mt-3 font-size-subtitle" style="font-size: 13px;">
           Sincronize todas as suas ferramentas de negócios e crie fluxos de trabalho 
           personalizados com a API aberta da Katana, Integromat e Zapier.
          </p>
         </div>
        </div>
       </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-3 p-md-4">
       <div class="card text-dark h-100">
        <div class="card-body">
         <div class="row text-center d-flex justify-content-center align-content-center mb-3">
          <div class="iconWrapper rounded bg-danger" style="width:70px;height:70px">
           <i class="fa-solid fa-user-gear" style="font-size: 35px;"></i>
          </div>
         </div>
         <div class="row">
          <h5 class="text-center font-size-title-icons">Fácil de configurar e agradável de usar</h5>
          <p class="text-center mt-3 font-size-subtitle" style="font-size: 13px;">
           Não há espaço para manuais de software na era digital. Implemente o 
           Katana e veja os resultados em menos de uma semana.
          </p>
         </div>
        </div>
       </div>
      </div>
    </div>

      <!-- Outer Row -->
    <div class="row justify-content-center mt-0" id="inscricao">
     <h2 class="text-white weight-title-h font-title section__title mt-4 text-center font-size-title-inventory">Realize o seu cadastro!</h2>
      <div class="col-xl-10 col-lg-12 col-md-9 mt-4">
       <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body text-dark p-0">
         <!-- Nested Row within Card Body -->
         <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-login-svg p-0">

           <div class="text-center mt-5">
            <img src="app/View/assets/img/logo-4.png" alt="" style="max-width: 150px;">
            <img src="app/View/assets/img/working-animate.svg" style="max-width: 340px;">
           </div>
          </div>

          <div class="col-lg-7 d-flex justify-content-center align-items-center">
           <div class="py-lg-0 py-4 px-3">
            <form action="back-end/controllers/createUser.php" method="POST" class="row g-2" enctype="multipart/form-data">

             <div class="col-12 input-group-sm font-size-register">
              <label for="name" class="form-label">Nome Completo</label>
              <input type="text" class="form-control form-control-md text-dark" id="name" name="name" required>
             </div>

             <div class="col-md-6 input-group-sm font-size-register">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control form-control-md text-dark" id="email" name="email" required>
             </div>

             <div class="col-md-4 col-6 input-group-sm font-size-register">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control form-control-md text-dark password" id="password" name="password" required>
             </div>

             <div class="col-md-4 col-6 input-group-sm font-size-register">
              <label for="userType" class="form-label">Tipo</label><br>
              <select class="select" widht="10px" name="userType">
               <option value=""></option>
               <option value="1">Gestor</option>
               <option value="2">Fornecedor</option>
              </select>
             </div>

             <div class="col-md-6 input-group-sm font-size-register">
              <label for="numberRecord" class="form-label">CPF/CNPJ</label>
              <input type="text" class="form-control form-control-md text-dark" id="numberRecord" name="numberRecord" required>
             </div>

             <div class="col-12 input-group-sm mt-4 d-flex justify-content-end">
              <input type="submit" class="btn btn-danger btn-block mb-3 font-size-register" value="CADASTRAR" style="border-radius: 15px;">
             </div>

             </form>

           </div>
          <?php include('app/View/erros/alerts.php') ?>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <script>
        ! function() {
          function e() {
            window.innerWidth < s + h + 60 + (l ? 60 : 40) + 10 ? d.classList.add("header--withDrawer") : d.classList.remove("header--withDrawer")
          }

          function t() {
            d.classList.toggle("header--drawerOpen")
          }
          var d = document.getElementById("header"),
            n = document.getElementById("headerMenuButton"),
            r = (document.getElementById("headerDrawer"), document.getElementById("headerDrawerBackdrop")),
            a = document.getElementById("headerLogo"),
            o = document.getElementById("headerNav"),
            c = document.querySelector("#headerNav .headerNav__links"),
            i = document.querySelector("#headerNav .header__navCtas"),
            s = a ? a.offsetWidth : 0,
            h = (c ? c.offsetWidth : 0) + (i ? i.offsetWidth : 0),
            l = o.classList.contains("logoCenter");
          n && (n.onclick = t), r && (r.onclick = t), window.addEventListener("resize", e), e()
        }()
      </script>
      <script>
        ! function(e, t) {
          "function" == typeof define && define.amd ? define([], function() {
            return t(e)
          }) : "object" == typeof exports ? module.exports = t(e) : e.SmoothScroll = t(e)
        }("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, function(I) {
          "use strict";

          function C() {
            for (var n = {}, e = 0; e < arguments.length; e++) ! function(e) {
              for (var t in e) e.hasOwnProperty(t) && (n[t] = e[t])
            }(arguments[e]);
            return n
          }

          function c(t) {
            var n;
            try {
              n = decodeURIComponent(t)
            } catch (e) {
              n = t
            }
            return n
          }

          function s(e) {
            "#" === e.charAt(0) && (e = e.substr(1));
            for (var t, n, o = String(e), r = o.length, a = -1, i = "", c = o.charCodeAt(0); ++a < r;) {
              if (0 === (t = o.charCodeAt(a))) throw new InvalidCharacterError("Invalid character: the input contains U+0000.");
              i += 1 <= t && t <= 31 || 127 == t || 0 === a && 48 <= t && t <= 57 || 1 === a && 48 <= t && t <= 57 && 45 === c ? "\\" + t.toString(16) + " " : 128 <= t || 45 === t || 95 === t || 48 <= t && t <= 57 || 65 <= t && t <= 90 || 97 <= t && t <= 122 ? o.charAt(a) : "\\" + o.charAt(a)
            }
            try {
              n = decodeURIComponent("#" + i)
            } catch (e) {
              n = "#" + i
            }
            return n
          }

          function w() {
            return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight)
          }

          function L(e) {
            return e ? (t = e, parseInt(I.getComputedStyle(t).height, 10) + e.offsetTop) : 0;
            var t
          }

          function A(e, t, n, o) {
            var r;
            t.emitEvents && "function" == typeof I.CustomEvent && (r = new CustomEvent(e, {
              bubbles: !0,
              detail: {
                anchor: n,
                toggle: o
              }
            }), document.dispatchEvent(r))
          }
          var H = {
            ignore: "[data-scroll-ignore]",
            header: null,
            topOnEmptyHash: !0,
            speed: 500,
            clip: !0,
            offset: 0,
            easing: "easeInOutCubic",
            customEasing: null,
            updateURL: !0,
            popstate: !0,
            emitEvents: !0
          };
          return function(o, e) {
            var v, r, S, E, t, b, O = {
              cancelScroll: function(e) {
                cancelAnimationFrame(b), b = null, e || A("scrollCancel", v)
              }
            };
            O.animateScroll = function(i, c, e) {
              var s, u, r, a, l, d, m, f, h, p, t, n, g = C(v || H, e || {}),
                y = "[object Number]" === Object.prototype.toString.call(i),
                o = y || !i.tagName ? null : i;
              (y || o) && (s = I.pageYOffset, g.header && !S && (S = document.querySelector(g.header)), E = E || L(S), l = y ? i : function(e, t, n, o) {
                var r = 0;
                if (e.offsetParent)
                  for (; r += e.offsetTop, e = e.offsetParent;);
                return r = Math.max(r - t - n, 0), o && (r = Math.min(r, w() - I.innerHeight)), r
              }(o, E, parseInt("function" == typeof g.offset ? g.offset(i, c) : g.offset, 10), g.clip), d = l - s, m = w(), h = function(e, t) {
                var n, o, r, a = I.pageYOffset;
                if (e == t || a == t || (s < t && I.innerHeight + a) >= m) return O.cancelScroll(!0), o = t, r = y, 0 === (n = i) && document.body.focus(), r || (n.focus(), document.activeElement !== n && (n.setAttribute("tabindex", "-1"), n.focus(), n.style.outline = "none"), I.scrollTo(0, o)), A("scrollStop", g, i, c), !(b = u = null)
              }, p = function(e) {
                var t, n, o;
                r = (f += e - (u = u || e)) / parseInt(g.speed, 10), a = s + d * (n = r = 1 < r ? 1 : r, "easeInQuad" === (t = g).easing && (o = n * n), "easeOutQuad" === t.easing && (o = n * (2 - n)), "easeInOutQuad" === t.easing && (o = n < .5 ? 2 * n * n : (4 - 2 * n) * n - 1), "easeInCubic" === t.easing && (o = n * n * n), "easeOutCubic" === t.easing && (o = --n * n * n + 1), "easeInOutCubic" === t.easing && (o = n < .5 ? 4 * n * n * n : (n - 1) * (2 * n - 2) * (2 * n - 2) + 1), "easeInQuart" === t.easing && (o = n * n * n * n), "easeOutQuart" === t.easing && (o = 1 - --n * n * n * n), "easeInOutQuart" === t.easing && (o = n < .5 ? 8 * n * n * n * n : 1 - 8 * --n * n * n * n), "easeInQuint" === t.easing && (o = n * n * n * n * n), "easeOutQuint" === t.easing && (o = 1 + --n * n * n * n * n), "easeInOutQuint" === t.easing && (o = n < .5 ? 16 * n * n * n * n * n : 1 + 16 * --n * n * n * n * n), t.customEasing && (o = t.customEasing(n)), o || n), I.scrollTo(0, Math.floor(a)), h(a, l) || (b = I.requestAnimationFrame(p), u = e)
              }, (f = 0) === I.pageYOffset && I.scrollTo(0, 0), t = i, n = g, y || history.pushState && n.updateURL && history.pushState({
                smoothScroll: JSON.stringify(n),
                anchor: t.id
              }, document.title, t === document.documentElement ? "#top" : "#" + t.id), A("scrollStart", g, i, c), O.cancelScroll(!0), I.requestAnimationFrame(p))
            };

            function n(e) {
              var t, n;
              !("matchMedia" in I && I.matchMedia("(prefers-reduced-motion)").matches || 0 !== e.button || e.metaKey || e.ctrlKey) && "closest" in e.target && (r = e.target.closest(o)) && "a" === r.tagName.toLowerCase() && !e.target.closest(v.ignore) && r.hostname === I.location.hostname && r.pathname === I.location.pathname && /#/.test(r.href) && (t = s(c(r.hash)), (n = (n = v.topOnEmptyHash && "#" === t ? document.documentElement : document.querySelector(t)) || "#top" !== t ? n : document.documentElement) && (e.preventDefault(), O.animateScroll(n, r)))
            }

            function a(e) {
              var t;
              null !== history.state && history.state.smoothScroll && history.state.smoothScroll === JSON.stringify(v) && history.state.anchor && ((t = document.querySelector(s(c(history.state.anchor)))) && O.animateScroll(t, null, {
                updateURL: !1
              }))
            }

            function i(e) {
              t = t || setTimeout(function() {
                t = null, E = L(S)
              }, 66)
            }
            return O.destroy = function() {
              v && (document.removeEventListener("click", n, !1), I.removeEventListener("resize", i, !1), I.removeEventListener("popstate", a, !1), O.cancelScroll(), b = t = E = S = r = v = null)
            }, O.init = function(e) {
              if (!("querySelector" in document && "addEventListener" in I && "requestAnimationFrame" in I && "closest" in I.Element.prototype)) throw "Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";
              O.destroy(), v = C(H, e || {}), S = v.header ? document.querySelector(v.header) : null, E = L(S), document.addEventListener("click", n, !1), S && I.addEventListener("resize", i, !1), v.updateURL && v.popstate && I.addEventListener("popstate", a, !1)
            }, O.init(e), O
          }
        })
      </script>
      <script data-version="1.5.66">
        ! function() {
          var e = 0;
          document.getElementsByClassName("header--fixed").length && (e = document.getElementsByClassName("header--fixed")[0].clientHeight), new window.SmoothScroll('a[href*="#"]', {
            offset: e
          })
        }(),
        function() {
          var e = document.querySelectorAll("a");
          Array.prototype.forEach.call(e, function(e, t) {
            e.addEventListener("click", function(e) {
              var t = JSON.stringify({
                siteId: "own5jthi6ism",
                category: "button",
                name: e.target.innerText,
                data: {
                  url: e.target.href
                }
              });
              navigator.sendBeacon && navigator.sendBeacon("/api/event", t)
            })
          })
        }()
      </script>
      
  <footer id="footer" class="section section--footer section--left" style="background-color:#191a16;padding-bottom:30px;padding-top:30px;--pdx-min-height:0px;--wr-max:1200px">
   <div class="wr">
    <div class="footer footer--simple">
     <div class="footer__primary">
      <nav class="footer__linkRow"></nav><span>© 2022 - Jhonatan Albernaz de Oliveira Pereira</span>
      <nav class="footer__linkRow">
       <strong><a class="text-danger" href="https://www.moveissimonetti.com.br/" target="_blank" style="font-size: 15px;">Móveis Simonetti</a></strong>
      </nav>
     </div>
     <ul class="footer__social">
      <li><a href="https://github.com/JhonatanAlbernaz" target="_blank" class="color-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
       <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" fill="currentColor"></path>
       </svg></a></li>
      <li><a href="https://www.instagram.com/jhonatan_albernaz_1/" target="_blank" class="color-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
       <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="currentColor"></path>
       </svg></a></li>
      <li><a href="mailto:jhonatanalbernaz124@gmail.com" target="_blank" class="color-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
       <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" fill="currentColor"></path>
       </svg></a>
      </li>
     </ul>
    </div>
   </div>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets/js/app.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>