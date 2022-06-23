<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MS Code</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="icon" href="../assets/img/favicon.ico">

    <!-- third party css -->
    <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">
   
         <!-- LOGO -->
         <a href="index.html" class="logo text-center logo-light">
          <span class="logo-lg">
           <img src="assets/images/logo.png" alt="" height="16">
          </span>
          <span class="logo-sm">
           <img src="assets/images/logo_sm.png" alt="" height="16">
          </span>
         </a>
   
         <!-- LOGO -->
         <a href="index.html" class="logo text-center logo-dark">
          <span class="logo-lg">
           <img src="assets/images/logo-dark.png" alt="" height="16">
          </span>
          <span class="logo-sm">
           <img src="assets/images/logo_sm_dark.png" alt="" height="16">
          </span>
         </a>

         <div class="h-100" id="leftside-menu-container" data-simplebar>

            <!--- Sidemenu -->
            <ul class="side-nav">
             <li class="side-nav-title side-nav-item"> Navegação </li>
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
               <i class="fa-solid fa-house-chimney"></i>
               <span class="badge bg-success float-end">4</span>
               <span> Painéis </span>
              </a>
    
              <div class="collapse" id="sidebarDashboards">
               <ul class="side-nav-second-level">
                <li>
                 <a href="dashboard-analytics.html"> Análise </a>
                </li>
                <li>
                 <a href="index.html">Ecommerce</a>
                </li>
                <li>
                 <a href="add-products.php"> Produtos </a>
                </li>
                <li>
                 <a href="dashboard-wallet.html"> Carteira eletrônica <span class="badge rounded bg-danger font-10 float-end">Novo</span></a>
                </li>
               </ul>
              </div>
             </li>
    
            <li class="side-nav-title side-nav-item"> Aplicativos </li>
    
             <li class="side-nav-item">
              <a href="proposal.php" class="side-nav-link">
               <i class="fa-solid fa-calendar-days"></i>
               <span> Proposta </span>
              </a>
             </li>
    
             <li class="side-nav-item">
              <a href="apps-chat.html" class="side-nav-link">
               <i class="fa-solid fa-comments"></i>
               <span> Bate-papo </span>
              </a>
             </li>
    
              <li class="side-nav-item">
               <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm" class="side-nav-link">
                <i class="fa-solid fa-gauge-high"></i>
                <span class="badge bg-danger text-white float-end">Novo</span>
                <span> CRM </span>
               </a>
    
               <div class="collapse" id="sidebarCrm">
                <ul class="side-nav-second-level">
                 <li>
                  <a href="crm-dashboard.html"> Painel </a>
                 </li>
                 <li>
                  <a href="crm-projects.html"> Projeto </a>
                 </li>
                 <li>
                  <a href="crm-orders-list.html"> Lista de pedidos </a>
                 </li>
                 <li>
                  <a href="crm-clients.html"> Clientes </a>
                 </li>
                 <li>
                  <a href="crm-management.html"> Gerenciamento </a>
                 </li>
                </ul>
               </div>
              </li>
    
              <li class="side-nav-item">
               <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="fa-solid fa-store"></i>
                <span> Ecommerce </span>
                <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
               </a>
               <div class="collapse" id="sidebarEcommerce">
                <ul class="side-nav-second-level">
                 <li>
                  <a href="apps-ecommerce-products.html"> Produtos </a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-products-details.html"> Detalhes dos produtos </a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-orders.html"> Pedidos </a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-orders-details.html"> Detalhes do pedido</a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-customers.html"> Clientes </a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-shopping-cart.html"> Carrinho de compras </a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-checkout.html"> Confira </a>
                 </li>
                 <li>
                  <a href="apps-ecommerce-sellers.html"> Vendedores </a>
                 </li>
                </ul>
               </div>
              </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
               <i class="fa-solid fa-envelope"></i>
               <span> Email </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarEmail">
               <ul class="side-nav-second-level">
                <li>
                 <a href="apps-email-inbox.html"> Caixa de entrada </a>
                </li>
                <li>
                 <a href="apps-email-read.html"> Ler e-mail </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
               <i class="fa-solid fa-diagram-project"></i>
               <span> Projects </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarProjects">
               <ul class="side-nav-second-level">
                <li>
                 <a href="apps-projects-list.html"> Lista </a>
                </li>
                <li>
                 <a href="apps-projects-details.html"> Detalhes </a>
                </li>
                <li>
                 <a href="apps-projects-gantt.html"> Gantt <span class="badge rounded-pill bg-light text-dark font-10 float-end">Novo</span></a>
                </li>
                <li>
                 <a href="apps-projects-add.html"> Criar projeto </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a href="apps-social-feed.html" class="side-nav-link">
               <i class="fa-solid fa-wifi"></i>
               <span> Feed Social </span>
              </a>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
               <i class="fa-solid fa-list-check"></i>
               <span> Tarefas </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarTasks">
               <ul class="side-nav-second-level">
                <li>
                 <a href="apps-tasks.html"> Lista </a>
                </li>
                <li>
                 <a href="apps-tasks-details.html"> Detalhes </a>
                </li>
                <li>
                 <a href="apps-kanban.html"> Quadro Kanban </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a href="apps-file-manager.html" class="side-nav-link">
               <i class="fa-solid fa-paste"></i>
               <span> Gerenciador de arquivos </span>
              </a>
             </li>
    
             <li class="side-nav-title side-nav-item"> Personalizado </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
               <i class="fa-solid fa-file-circle-plus"></i>
               <span> Páginas </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarPages">
               <ul class="side-nav-second-level">
                <li>
                 <a href="pages-profile.html"> Perfil </a>
                </li>
                <li>
                 <a href="pages-profile-2.html"> Perfil 2 </a>
                </li>
                <li>
                 <a href="pages-invoice.html"> Fatura </a>
                </li>
                <li>
                 <a href="pages-faq.html"> Perguntas frequentes </a>
                </li>
                <li>
                 <a href="pages-pricing.html"> Preços </a>
                </li>
                <li>
                 <a href="pages-maintenance.html"> Manutenção </a>
                </li>
                <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                  <span> Autenticação </span>
                  <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
                 </a>
                 <div class="collapse" id="sidebarPagesAuth">
                  <ul class="side-nav-third-level">
                   <li>
                    <a href="pages-login.html"> Conecte-se </a>
                   </li>
                   <li>
                    <a href="pages-login-2.html"> Login </a>
                   </li>
                   <li>
                    <a href="pages-register.html"> Registro </a>
                   </li>
                   <li>
                    <a href="pages-register-2.html"> Registro 2 </a>
                   </li>
                   <li>
                    <a href="pages-logout.html"> Sair </a>
                   </li>
                   <li>
                    <a href="pages-logout-2.html"> Sair 2 </a>
                   </li>
                   <li>
                    <a href="pages-recoverpw.html"> Recuperar senha </a>
                   </li>
                   <li>
                    <a href="pages-recoverpw-2.html"> Recuperar senha 2 </a>
                   </li>
                   <li>
                    <a href="pages-lock-screen.html"> Tela de bloqueio </a>
                   </li>
                   <li>
                    <a href="pages-lock-screen-2.html"> Tela de bloqueio 2 </a>
                   </li>
                   <li>
                    <a href="pages-confirm-mail.html"> Confirmar e-mail </a>
                   </li>
                   <li>
                    <a href="pages-confirm-mail-2.html"> Confirmar e-mail 2 </a>
                   </li>
                  </ul>
                 </div>
                </li>
                <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                  <span> Erro </span>
                  <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
                 </a>
                 <div class="collapse" id="sidebarPagesError">
                  <ul class="side-nav-third-level">
                   <li>
                    <a href="pages-404.html"> Erro 404 </a>
                   </li>
                   <li>
                    <a href="pages-404-alt.html"> Erro 404-alt </a>
                   </li>
                   <li>
                    <a href="pages-500.html"> Erro 500 </a>
                   </li>
                  </ul>
                 </div>
                </li>
                <li>
                 <a href="pages-starter.html"> Página inicial </a>
                </li>
                <li>
                 <a href="pages-preloader.html"> Com pré-carregador </a>
                </li>
                <li>
                 <a href="pages-timeline.html"> Linha do tempo </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a href="landing.html" target="_blank" class="side-nav-link">
               <i class="fa-solid fa-globe"></i>
               <span class="badge bg-secondary text-light float-end">Novo</span>
               <span> Pousar </span>
              </a>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
               <i class="fa-brands fa-buromobelexperte"></i>
               <span> Layouts </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarLayouts">
               <ul class="side-nav-second-level">
                <li>
                 <a href="layouts-horizontal.html"> Horizontal </a>
                </li>
                <li>
                 <a href="layouts-detached.html"> Separado </a>
                </li>
                <li>
                 <a href="layouts-full.html"> Cheio </a>
                </li>
               </ul>
              </div>
             </li>
            
             <li class="side-nav-title side-nav-item mt-1"> Componentes </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
               <i class="fa-solid fa-box-archive"></i>
               <span> IU Básica </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarBaseUI">
               <ul class="side-nav-second-level">
                <li>
                 <a href="ui-accordions.html"> Acordeões </a>
                </li>
                <li>
                 <a href="ui-alerts.html"> Alertas </a>
                </li>
                <li>
                 <a href="ui-avatars.html"> Avatares </a>
                </li>
                <li>
                 <a href="ui-badges.html"> Distintivos </a>
                </li>
                <li>
                 <a href="ui-breadcrumb.html"> Migalhas de pão </a>
                </li>
                <li>
                 <a href="ui-buttons.html"> Botões </a>
                </li>
                <li>
                 <a href="ui-cards.html"> Cartões </a>
                </li>
                <li>
                 <a href="ui-carousel.html"> Carrossel </a>
                </li>
                <li>
                 <a href="ui-dropdowns.html"> Listas suspensas </a>
                </li>
                <li>
                 <a href="ui-embed-video.html"> Incorporar vídeo </a>
                </li>
                <li>
                 <a href="ui-grid.html"> Rede </a>
                </li>
                <li>
                 <a href="ui-list-group.html"> Listar Grupo </a>
                </li>
                <li>
                 <a href="ui-modals.html"> Modais </a>
                </li>
                <li>
                 <a href="ui-notifications.html"> Notificações </a>
                </li>
                <li>
                 <a href="ui-offcanvas.html"> Offcanvas </a>
                </li>
                <li>
                 <a href="ui-placeholders.html"> Espaços reservados </a>
                </li>
                <li>
                 <a href="ui-pagination.html"> Paginação </a>
                </li>
                <li>
                 <a href="ui-popovers.html"> Popovers </a>
                </li>
                <li>
                 <a href="ui-progress.html"> Progresso </a>
                </li>
                <li>
                 <a href="ui-ribbons.html"> Fitas </a>
                </li>
                <li>
                 <a href="ui-spinners.html"> Spinners </a>
                </li>
                <li>
                 <a href="ui-tabs.html"> Abas </a>
                </li>
                <li>
                 <a href="ui-tooltips.html"> Dicas de ferramentas </a>
                </li>
                <li>
                 <a href="ui-typography.html"> Tipografia </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
               <i class="fa-solid fa-book-open"></i>
               <span> IU Estendida </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarExtendedUI">
               <ul class="side-nav-second-level">
                <li>
                 <a href="extended-dragula.html"> Drácula </a>
                </li>
                <li>
                 <a href="extended-range-slider.html"> Controle deslizante de intervalo </a>
                </li>
                <li>
                 <a href="extended-ratings.html"> Classificações </a>
                </li>
                <li>
                 <a href="extended-scrollbar.html"> Barra de rolagem </a>
                </li>
                <li>
                 <a href="extended-scrollspy.html"> Espião de rolagem </a>
                </li>
                <li>
                 <a href="extended-treeview.html"> Vista em árvore </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a href="widgets.html" class="side-nav-link">
               <i class="fa-solid fa-layer-group"></i>
               <span> Widgets </span>
              </a>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
               <i class="fa-solid fa-compact-disc"></i>
               <span> Ícones </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarIcons">
               <ul class="side-nav-second-level">
                <li>
                 <a href="icons-dripicons.html"> Dripicons </a>
                </li>
                <li>
                 <a href="icons-mdi.html"> Design Material </a>
                </li>
                <li>
                 <a href="icons-unicons.html"> Unicons </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
               <i class="fa-solid fa-folder-plus"></i>
               <span> Formulários </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarForms">
               <ul class="side-nav-second-level">
                <li>
                 <a href="form-elements.html"> Elementos Básicos </a>
                </li>
                <li>
                 <a href="form-advanced.html"> Formulário Avançado </a>
                </li>
                <li>
                 <a href="form-validation.html"> Validação </a>
                </li>
                <li>
                 <a href="form-wizard.html"> Mago </a>
                </li>
                <li>
                 <a href="form-fileuploads.html"> Uploads de arquivos </a>
                </li>
                <li>
                 <a href="form-editors.html"> Editores </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
               <i class="fa-solid fa-chart-column"></i>
               <span> Gráficos </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarCharts">
               <ul class="side-nav-second-level">
                <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                  <span> Gráficos Apex </span>
                  <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
                 </a>
                 <div class="collapse" id="sidebarApexCharts">
                  <ul class="side-nav-third-level">
                   <li>
                    <a href="charts-apex-area.html"> Área </a>
                   </li>
                   <li>
                    <a href="charts-apex-bar.html"> Bar </a>
                   </li>
                   <li>
                    <a href="charts-apex-bubble.html"> Bolha </a>
                   </li>
                   <li>
                    <a href="charts-apex-candlestick.html"> Castiçal</a>
                   </li>
                   <li>
                    <a href="charts-apex-column.html"> Coluna </a>
                   </li>
                   <li>
                    <a href="charts-apex-heatmap.html"> Mapa de calor </a>
                   </li>
                   <li>
                    <a href="charts-apex-line.html"> Linha </a>
                   </li>
                   <li>
                    <a href="charts-apex-mixed.html"> Misturado </a>
                   </li>
                   <li>
                    <a href="charts-apex-pie.html"> Torta </a>
                   </li>
                   <li>
                    <a href="charts-apex-radar.html"> Radar </a>
                   </li>
                   <li>
                    <a href="charts-apex-radialbar.html"> Barra Radial </a>
                   </li>
                   <li>
                    <a href="charts-apex-scatter.html"> Dispersão </a>
                   </li>
                   <li>
                    <a href="charts-apex-sparklines.html"> Minigráficos </a>
                   </li>
                  </ul>
                 </div>
                </li>
                <li>
                 <a href="charts-brite.html"> Britecharts </a>
                </li>
                <li>
                 <a href="charts-chartjs.html"> Chartjs </a>
                </li>
                <li>
                 <a href="charts-sparkline.html"> Minigráficos </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
               <i class="fa-solid fa-table-cells"></i>
               <span> Tabelas </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span> 
              </a>
              <div class="collapse" id="sidebarTables">
               <ul class="side-nav-second-level">
                <li>
                 <a href="tables-basic.html"> Tabelas Básicas </a>
                </li>
                <li>
                 <a href="tables-datatable.html"> Tabelas de Dados</a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
               <i class="fa-solid fa-map-location"></i>
               <span> Mapas </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarMaps">
               <ul class="side-nav-second-level">
                <li>
                 <a href="maps-google.html"> Google Maps </a>
                </li>
                <li>
                 <a href="maps-vector.html"> Mapas Vetoriais </a>
                </li>
               </ul>
              </div>
             </li>
    
             <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
               <i class="fa-solid fa-folder-plus"></i>
               <span> Vários Níveis </span>
               <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
              </a>
              <div class="collapse" id="sidebarMultiLevel">
               <ul class="side-nav-second-level">
                <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                  <span> Segundo nível </span>
                  <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
                 </a>
                 <div class="collapse" id="sidebarSecondLevel">
                  <ul class="side-nav-third-level">
                   <li>
                    <a href="javascript: void(0);"> Item 1 </a>
                   </li>
                   <li>
                    <a href="javascript: void(0);"> Item 2 </a>
                   </li>
                  </ul>
                 </div>
                </li>
                <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                  <span> Terceiro nivel </span>
                  <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
                 </a>
                 <div class="collapse" id="sidebarThirdLevel">
                  <ul class="side-nav-third-level">
                   <li>
                    <a href="javascript: void(0);"> Item 1 </a>
                   </li>
                   <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                     <span> Item 2 </span>
                     <span class="fa-solid fa-angle-right ml-5 pl-5"></span>
                    </a>
                    <div class="collapse" id="sidebarFourthLevel">
                     <ul class="side-nav-forth-level">
                     <li>
                      <a href="javascript: void(0);"> Item 2.1 </a>
                      </li>
                      <li>
                       <a href="javascript: void(0);"> Item 2.2 </a>
                      </li>
                     </ul>
                    </div>
                   </li>
                  </ul>
                 </div>
                </li>
               </ul>
              </div>
             </li>
            </ul>
    
            <!-- Help Box -->
            <div class="help-box text-white text-center">
             <a href="javascript: void(0);" class="float-end close-btn text-white">
              <i class="mdi mdi-close"></i>
             </a>
             <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
             <h5 class="mt-3"> Acesso ilimitado </h5>
             <p class="mb-3"> Atualize para o plano para ter acesso a relatórios ilimitados </p>
             <a href="javascript: void(0);" class="btn btn-secondary btn-sm"> Melhoria </a>
            </div>
            <!-- end Help Box -->
            <!-- End Sidebar -->
    
            <div class="clearfix"></div>
    
          </div>
          <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
   
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
   
        <div class="content-page">
         <div class="content">
          <!-- Topbar Start -->
          <div class="navbar-custom">
           <ul class="list-unstyled topbar-menu float-end mb-0">
            <li class="dropdown notification-list d-lg-none">
             <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="dripicons-search noti-icon"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
              <form class="p-3">
               <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
              </form>
             </div>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
             <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12"> 
              <span class="align-middle d-none d-sm-inline-block"> Inglês </span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Alemão </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italiano </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Espanhol </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russo </span>
              </a>
   
             </div>
            </li>
   
            <li class="dropdown notification-list">
             <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="fa-solid fa-bell noti-icon"></i>
              <span class="noti-icon-badge"></span>
             </a>
             <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">
   
             <!-- item-->
             <div class="dropdown-item noti-title px-3">
              <h5 class="m-0">
               <span class="float-end">
                <a href="javascript: void(0);" class="text-dark">
                 <small> Limpar tudo </small>
                </a>
               </span> Notificação
              </h5>
             </div>
   
             <div class="px-3" style="max-height: 300px;" data-simplebar>
   
              <h5 class="text-muted font-13 fw-normal mt-0"> Hoje </h5>
   
               <!-- item-->
               <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                <div class="card-body">
                 <span class="float-end noti-close-btn text-muted"><i class="fa-solid fa-x"></i></span>   
                 <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                   <div class="notify-icon bg-primary">
                    <i class="fa-solid fa-comment-dots"></i>
                   </div>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                   <h5 class="noti-item-title fw-semibold font-14"> Datacorp <small class="fw-normal text-muted ms-1"> 1 minuto atrás </small></h5>
                   <small class="noti-item-subtitle text-muted"> Caleb Flakelar comentou em Admin </small>
                  </div>
                 </div>
                </div>
               </a>
   
               <!-- item-->
               <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                <div class="card-body">
                 <span class="float-end noti-close-btn text-muted"><i class="fa-solid fa-x"></i></span>   
                 <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                   <div class="notify-icon bg-info">
                    <i class="fa-solid fa-user-plus"></i>
                   </div>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                   <h5 class="noti-item-title fw-semibold font-14"> Administrador <small class="fw-normal text-muted ms-1"> 1 hora atrás </small></h5>
                   <small class="noti-item-subtitle text-muted"> Novo usuário cadastrado </small>
                  </div>
                 </div>
                </div>
               </a>
   
              <h5 class="text-muted font-13 fw-normal mt-0"> Ontem </h5>
   
               <!-- item-->
               <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                <div class="card-body">
                 <span class="float-end noti-close-btn text-muted"><i class="fa-solid fa-x"></i></span>   
                 <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                   <div class="notify-icon">
                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                   </div>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                   <h5 class="noti-item-title fw-semibold font-14"> Cristina Pride <small class="fw-normal text-muted ms-1"> 1 dia atrás </small></h5>
                   <small class="noti-item-subtitle text-muted"> Oi como você está? E o nosso próximo encontro </small>
                  </div>
                 </div>
                </div>
               </a>
   
              <h5 class="text-muted font-13 fw-normal mt-0"> 30 de dezembro de 2021 </h5>
   
               <!-- item-->
               <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                <div class="card-body">
                 <span class="float-end noti-close-btn text-muted"><i class="fa-solid fa-x"></i></span>   
                 <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                   <div class="notify-icon bg-primary">
                    <i class="mdi mdi-comment-account-outline"></i>
                   </div>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                   <h5 class="noti-item-title fw-semibold font-14"> Datacorp </h5>
                   <small class="noti-item-subtitle text-muted"> Caleb Flakelar comentou em Admin </small>
                  </div>
                 </div>
                </div>
               </a>
   
               <!-- item-->
               <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                <div class="card-body">
                 <span class="float-end noti-close-btn text-muted"><i class="fa-solid fa-x"></i></span>   
                 <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                   <div class="notify-icon">
                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                   </div>
                  </div>
                  <div class="flex-grow-1 text-truncate ms-2">
                   <h5 class="noti-item-title fw-semibold font-14"> Karen Robinson </h5>
                   <small class="noti-item-subtitle text-muted"> Uau ! este administrador parece bom e design incrível </small>
                  </div>
                 </div>
                </div>
               </a>
   
               <div class="text-center">
                <i class="fa-solid fa-spinner text-muted h3 mt-0"></i>
               </div>
              </div>
   
              <!-- All-->
              <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
               Ver Tudo
              </a>
             </div>
            </li>
   
            <li class="dropdown notification-list d-none d-sm-inline-block">
             <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="fa-solid fa-grip noti-icon"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
   
              <div class="p-2">
               <div class="row g-0">
                <div class="col">
                 <a class="dropdown-icon-item" href="#">
                  <img src="assets/images/brands/slack.png" alt="slack">
                  <span>Slack</span>
                 </a>
                </div>
                <div class="col">
                 <a class="dropdown-icon-item" href="#">
                  <img src="assets/images/brands/github.png" alt="Github">
                  <span>GitHub</span>
                 </a>
                </div>
                <div class="col">
                 <a class="dropdown-icon-item" href="#">
                  <img src="assets/images/brands/dribbble.png" alt="dribbble">
                  <span>Dribbble</span>
                 </a>
                </div>
               </div>
   
               <div class="row g-0">
                <div class="col">
                 <a class="dropdown-icon-item" href="#">
                  <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                  <span>Bitbucket</span>
                 </a>
                </div>
                <div class="col">
                 <a class="dropdown-icon-item" href="#">
                  <img src="assets/images/brands/dropbox.png" alt="dropbox">
                  <span>Dropbox</span>
                 </a>
                </div>
                <div class="col">
                 <a class="dropdown-icon-item" href="#">
                  <img src="assets/images/brands/g-suite.png" alt="G Suite">
                  <span>G Suite</span>
                 </a>
                </div>
               </div> <!-- end row-->
              </div>
   
             </div>
            </li>
   
            <li class="notification-list">
             <a class="nav-link end-bar-toggle" href="javascript: void(0);">
              <i class="fa-solid fa-gear noti-icon"></i>
             </a>
            </li>
   
            <li class="dropdown notification-list">
             <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <span class="account-user-avatar"> 
               <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
              </span>
              <span>
               <span class="account-user-name"> Dominic Keller </span>
               <span class="account-position"> Fundador </span>
              </span>
             </a>
             <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
              <!-- item-->
              <div class=" dropdown-header noti-title">
               <h6 class="text-overflow m-0"> Receber ! </h6>
              </div>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <i class="fa-solid fa-circle-user"></i>
               <span> Minha conta </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <i class="fa-solid fa-user-pen"></i>
               <span> Definições </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <i class="fa-solid fa-globe"></i>
               <span> Apoio, suporte </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <i class="fa-solid fa-lock"></i>
               <span> Tela de bloqueio </span>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <i class="fa-solid fa-arrow-right-from-bracket"></i>
               <span> Sair </span>
              </a>
             </div>
            </li>
   
           </ul>
           <button class="button-menu-mobile open-left">
            <i class="fa-solid fa-bars mr-3"></i>
           </button>
           <div class="app-search dropdown d-none d-lg-block">
            <form>
             <div class="input-group">
              <input type="text" class="form-control dropdown-toggle"  placeholder="Procurar..." id="top-search">
              <span class="fa-solid fa-magnifying-glass search-icon"></span>
              <button class="input-group-text btn-primary" type="submit"> Procurar </button>
             </div>
            </form>
   
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
             <!-- item-->
             <div class="dropdown-header noti-title">
              <h5 class="text-overflow mb-2"> Encontrados <span class="text-danger">17</span> resultados </h5>
             </div>
   
             <!-- item-->
             <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="uil-notes font-16 me-1"></i>
              <span> Relatório de análise </span>
             </a>
   
             <!-- item-->
             <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="uil-life-ring font-16 me-1"></i>
              <span> Como posso ajudá-lo? </span>
             </a>
   
             <!-- item-->
             <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="uil-cog font-16 me-1"></i>
              <span> Configurações do perfil do usuário </span>
             </a>
   
             <!-- item-->
             <div class="dropdown-header noti-title">
              <h6 class="text-overflow mb-2 text-uppercase"> Comercial </h6>
             </div>
   
             <div class="notification-list">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <div class="d-flex">
                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                <div class="w-100">
                 <h5 class="m-0 font-14"> Erwin Brown </h5>
                 <span class="font-12 mb-0"> Designer de IU </span>
                </div>
               </div>
              </a>
   
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
               <div class="d-flex">
                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                <div class="w-100">
                 <h5 class="m-0 font-14"> Jacob Deo </h5>
                 <span class="font-12 mb-0"> Desenvolvedor </span>
                </div>
               </div>
              </a>
             </div>
            </div>
           </div>
          </div>
          <!-- end Topbar -->
                   
          <!-- Start Content-->
          <div class="container-fluid">
                        
           <!-- start page title -->
           <div class="row">
            <div class="col-12">
             <div class="page-title-box">
              <div class="page-title-right">
               <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Hiper</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Proposta</a></li>
                <li class="breadcrumb-item active">Proposta dos Fornecedores</li>
               </ol>
              </div>
              <h4 class="page-title"> Proposta dos Fornecedores </h4>
             </div>
            </div>
           </div>
           <!-- end page title --> 

           <div class="row">
            <div class="col-12">
             <div class="card">
              <div class="card-body">

               <div class="row">
                <div class="col-12">
                 <div class="card">
                  <div class="card-body">
                   <div class="row mb-2">
                    <div class="col-xl-12">
                     <form class="row gy-2 gx-2 widht-580px align-items-center justify-content-xl-start justify-content-between">
                      <div class="col-auto widht-580px">
                       <label for="inputPassword2" class="visually-hidden">Procurar...</label>
                       <input type="search" class="form-control" id="inputPassword2" placeholder="Procurar...">
                      </div>
                     </form>                            
                    </div>
                   </div>
    
                   <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                     <thead class="table-light">
                      <tr>
                       <th style="width: 20px;">
                        <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="customCheck1">
                         <label class="form-check-label" for="customCheck1">&nbsp;</label>
                        </div>
                       </th>
                        <th>ID do Pedido</th>
                        <th>ID do Fornecedor</th>
                        <th>Fornecedor</th>
                        <th>Produto</th>
                        <th>Date da Proposta</th>
                        <th>Status</th>
                        <th style="width: 125px;">Ação</th>
                      </tr>
                     </thead>
                     <tbody>

                        <tr>
                         <td>
                          <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="customCheck2">
                           <label class="form-check-label" for="customCheck2">&nbsp;</label>
                          </div>
                         </td>
                         <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9708</a> </td>
                         <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9708</a> </td>
                         <td>
                          <div class="d-flex">
                           <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                             <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </div>
                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Jerry Geiger</h5></div>
                           </div>
                          </div>
                         </td>
                         <td>Landing Page</td>
                         <td>01 January 2022</td>
                         <td><h5 class="my-0"><span class="badge badge-info-lighten">Pendente</span></h5></td>
                         <td>
                          <a href="javascript:void(0);" class="action-icon"><i class="fa-solid fa-check icon-check"></i></a>
                          <a href="javascript:void(0);" class="action-icon"><i class="fa-solid fa-trash icon-delete"></i></a>
                         </td>
                        </tr>
                        
                        <tr>
                         <td>
                          <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="customCheck3">
                           <label class="form-check-label" for="customCheck3">&nbsp;</label>
                          </div>
                         </td>
                         <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9707</a> </td>
                         <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9707</a> </td>
                         <td>
                          <div class="d-flex">
                           <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                             <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </div>
                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Adam Thomas</h5></div>
                           </div>
                          </div>
                         </td>
                         <td>Client Project (Sktech)</td>
                         <td>02 January 2022</td>
                         <td><h5 class="my-0"><span class="badge badge-success-lighten">Aceito</span></h5></td>
                         <td>
                          <a href="javascript:void(0);" class="action-icon"><i class="fa-solid fa-check icon-check"></i></a>
                          <a href="javascript:void(0);" class="action-icon"><i class="fa-solid fa-trash icon-delete"></i></a>
                         </td>
                         
                        </tr>
                        
                        <tr>
                         <td>
                          <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="customCheck5">
                           <label class="form-check-label" for="customCheck5">&nbsp;</label>
                          </div>
                         </td>
                         <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9705</a> </td>
                         <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9705</a> </td>
                         <td>
                          <div class="d-flex">
                           <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                             <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </div>
                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Myrtle Johnson</h5></div>
                           </div>
                          </div>
                         </td>
                         <td>Landing Page (Figma)</td>
                         <td>04 January 2022</td>
                         <td><h5 class="my-0"><span class="badge badge-primary-lighten">Rejeitado</span></h5></td>
                         <td>
                          <a href="javascript:void(0);" class="action-icon"><i class="fa-solid fa-check icon-check"></i></a>
                          <a href="javascript:void(0);" class="action-icon"><i class="fa-solid fa-trash icon-delete"></i></a>
                         </td>
                        </tr>

                     </tbody>
                    </table>
                   </div>
                  </div> <!-- end card-body-->
                 </div> <!-- end card-->
                </div> <!-- end col -->
               </div>

               <!-- end row -->

              </div> <!-- end card-body -->
             </div> <!-- end card-->
            </div> <!-- end col-->
           </div>
           <!-- end row-->
                        
          </div> 
          <!-- container -->

         </div>
         <!-- content -->

            <!-- Footer Start -->
        <footer class="footer">
         <div class="container-fluid">
          <div class="row">
           <div class="col-md-6">
            <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
           </div>
           <div class="col-md-6">
            <div class="text-md-end footer-links d-none d-md-block">
             <a href="javascript: void(0);"> Sobre </a>
             <a href="javascript: void(0);"> Suporte </a>
             <a href="javascript: void(0);"> Fale Conosco </a>
            </div>
           </div>
          </div>
         </div>
        </footer>
        <!-- end Footer -->

       </div>

       <!-- ============================================================== -->
       <!-- End Page content -->
       <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="end-bar">

     <div class="rightbar-title">
      <a href="javascript:void(0);" class="end-bar-toggle float-end">
       <i class="dripicons-cross noti-icon"></i>
      </a>
      <h5 class="m-0"> Definições </h5>
     </div>
   
     <div class="rightbar-content h-100" data-simplebar>
   
      <div class="p-3">
       <div class="alert alert-warning" role="alert">
        <strong> Personalize </strong>  o esquema geral de cores, o menu da barra lateral etc.
       </div>
   
       <!-- Settings -->
       <h5 class="mt-3"> Esquema de cores </h5>
       <hr class="mt-1" />
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
        <label class="form-check-label" for="light-mode-check"> Modo de luz </label>
       </div>
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
        <label class="form-check-label" for="dark-mode-check"> Modo Escuro </label>
       </div>
   
       <!-- Width -->
       <h5 class="mt-4"> Largura </h5>
       <hr class="mt-1" />
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
        <label class="form-check-label" for="fluid-check"> Fluido </label>
       </div>
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
        <label class="form-check-label" for="boxed-check"> Em caixa </label>
       </div>
   
       <!-- Left Sidebar-->
       <h5 class="mt-4"> Barra lateral esquerda </h5>
       <hr class="mt-1" />
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
        <label class="form-check-label" for="default-check"> Predefinição </label>
       </div>
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
        <label class="form-check-label" for="light-check"> Leve </label>
       </div>
   
       <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
        <label class="form-check-label" for="dark-check"> Escuro </label>
       </div>
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
        <label class="form-check-label" for="fixed-check"> Fixo </label>
       </div>
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
        <label class="form-check-label" for="condensed-check"> Condensado </label>
       </div>
   
       <div class="form-check form-switch mb-1">
        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
        <label class="form-check-label" for="scrollable-check"> Rolagem </label>
       </div>
   
       <div class="d-grid mt-4">
        <button class="btn btn-primary" id="resetBtn"> Restaurar ao padrão </button>
        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger mt-3" target="_blank"><i class="fa-solid fa-basket-shopping"></i> Compre agora </a>
       </div>
      </div> <!-- end padding-->
   
     </div>
    </div>
   
    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- end demo js-->
</body>
</html>