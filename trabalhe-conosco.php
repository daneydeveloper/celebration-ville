<?php
   $id_page = 'trabalhe_conosco';
?>
<!doctype html>
<html ng-app="app" class="no-js" lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Trabalhe Conosco | Celebration Ville - Seja um de nossos corretores</title>
      <meta name="description" content="Trabalhe Conosco | para agendamento de visitas, acesso a tabela de vendas e unidades disponíveis, realize o cadastro que entraremos em contato.">
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
      <div class="fundo_trabalhe_conosco contact-page seja_corretor">
         <div class="container">
            <div class="section-headline text-center">
               <h3 style="color: #ffffff;">SEJA UM DE NOSSOS CORRETORES</h3>
            </div>
            <div class="row mar-row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="contact-head">
                     <h3>CORRETOR<span class="color"> PARCEIRO,</span></h3>
                     <p class="text-justify">para agendamento de visitas, acesso a tabela de vendas e unidades disponíveis, realize o cadastro que entraremos em contato</p>
                     <p class="text-justify">A Celebration Ville entende que o corretor parceiro é parte importante do nosso processo de vendas. Assim, nos preocupamos em construir uma relação de confiança que possa ser duradoura.</p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12" id="margin-top-form">
                  <div class="contact-form">
                     <div class="row">
                        <form name="contato" class="contact-form">
                           <input type="hidden" ng-init="dados.LE_CodigoTipo='9996'"> 
                           <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'"> 
                           <input type="hidden" ng-init="dados.LE_CodigoProduto='1119'"> 
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" type="text" class="form-control" placeholder="Nome">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" class="email form-control" placeholder="Email">
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input ng-model="dados.LE_Telefone" type="text" class="form-control" placeholder="Telefone" mask="(99) 9-9999-9999">
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input ng-model="dados.LE_Metadado.Creci" type="text" class="form-control" placeholder="Numero do Creci">
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
      <?php include_once 'includes/footer.php'; ?>
      <!-- all js here -->
      <!-- jquery latest version -->
      <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
      <!-- bootstrap js -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- owl.carousel js -->
      <script src="assets/js/owl.carousel.min.js"></script>
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