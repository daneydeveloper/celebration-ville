<?php
   $id_page = 'contato';
?>
<!doctype html>
<html ng-app="app" class="no-js" lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Contato | Celebration Ville - Infraestrutura e acessibilidade perfeitas</title>
      <meta name="description" content="Contato | Utilize nosso canal de comunicação para entrar em contato conosco, solicitar maiores informações e esclarecer dúvidas.">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- favicon -->      
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
      <!-- bootstrap v3.3.6 css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- owl.carousel css -->
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <!-- meanmenu css -->
      <link rel="stylesheet" href="assets/css/meanmenu.min.css">
      <!-- font-awesome css -->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/icon.css">
      <!-- magnific css -->
      <link rel="stylesheet" href="assets/css/magnific.min.css">
      <!-- venobox css -->
      <link rel="stylesheet" href="assets/css/venobox.css">
      <!-- style css -->
      <link rel="stylesheet" href="style.css">
      <!-- responsive css -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- Main css -->
      <link rel="stylesheet" href="assets/css/midia9.css">
      <link rel="stylesheet" href="assets/css/flutuante.css">
      <link rel="stylesheet" type="text/css" href="//cdn.marketingmidia9.com.br/css/sweetalert2.css">
      <link rel="stylesheet" type="text/css" href="//cdn.marketingmidia9.com.br/css/ngDialog.min.css">
      <!-- modernizr css -->
      <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
   </head>
   <body ng-controller="Lead">
      <!-- Header -->
      <?php include_once 'includes/header.php'; ?>
      <!-- Flutuante -->
      <?php include_once 'includes/flutuante.php'; ?>
      <!-- Form -->
      <div class="fundo_contato contact-page area-padding">
         <div class="container">
            <div class="section-contato text-center">
               <h1 class="color-title">Se você está procurando um novo lar para morar, consulte nossos corretores pelo formulário abaixo:</h1>
               <hr class="hr_contato">
            </div>
            <div class="row mar-row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="contact-head">
                     <h3><span class="color">CONTATE-NOS</span></h3>
                     <p class="text-justify">Utilize nosso canal de comunicação para entrar em contato conosco, solicitar maiores informações, esclarecer dúvidas sobre aquisição de nossos imóveis, ou para o que você necessitar.</p>
                     <p class="text-justify">Retornaremos seu contato com rapidez, afinal é muito importante para nós continuarmos sintonizados com você, nosso cliente.</p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12" id="margin-top-form">
                  <div class="contact-form">
                     <div class="row">
                        <form name="contato" class="contact-form">
                           <input type="hidden" ng-init="dados.LE_CodigoTipo='9996'"> 
                           <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'"> 
                           <input type="hidden" ng-init="dados.LE_CodigoProduto='1118'"> 
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" type="text" class="form-control" placeholder="Nome">
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" class="email form-control" placeholder="Email">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input ng-model="dados.LE_Telefone" type="text" class="form-control" placeholder="Telefone" mask="(99) 9-9999-9999">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea ng-model="dados.LE_Descricao" ng-required="false" ng-disabled="load" rows="7" placeholder="Mensagem" class="form-control"></textarea>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                              <button ng-click="enviarLead(dados)" ng-disabled="contato.$invalid || load" class="contact-btn">
                                 <b ng-if="load ">ENVIANDO...</b>
                                 <b ng-if="!load ">ENVIAR</b>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Form -->
      <div class="map-area-top">
         <div class="container-full">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="map-area">
                     <!-- googleMap MAPA TEMPLATE -->
                     <div id="gmap_canvas7" style="width:100%;height:450px;"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <?php include_once 'includes/footer.php'; ?>
      <!-- jquery latest version -->
      <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
      <!-- bootstrap js -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- owl.carousel js -->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!-- Google Map js -->
      <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAm-mlSwDscHV5q_MuS0g9g9IEApI-yg8s&amp;callback=initMap"  type="text/javascript"></script>
      <script src="assets/js/mapcode.js"></script>
      <!-- Counter js -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!-- waypoint js -->
      <script src="assets/js/waypoints.js"></script>
      <!-- isotope js -->
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <!-- stellar js -->
      <script src="assets/js/jquery.stellar.min.js"></script>
      <!-- magnific js -->
      <script src="assets/js/magnific.min.js"></script>
      <!-- venobox js -->
      <script src="assets/js/venobox.min.js"></script>
      <!-- meanmenu js -->
      <script src="assets/js/jquery.meanmenu.js"></script>
      <!-- Form validator js -->
      <script src="assets/js/form-validator.min.js"></script>
      <!-- plugins js -->
      <script src="assets/js/plugins.js"></script>
      <!-- main js -->
      <script src="assets/js/main.js"></script>
      <script src="//cdn.marketingmidia9.com.br/js/angular.min.js"></script>
      <script src="//cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
      <script src="//cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
      <script src="//cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
      <script src='//cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
      <script src="assets/js/integracao.js"></script>
   </body>
</html>