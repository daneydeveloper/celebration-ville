<?php $origem = (@$_GET['utm_source'])?$_GET['utm_source']:'Site';?>
<header>
   <div class="header-middle-area hidden-xs">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-3">
               <div class="logo">
                  <a class="navbar-brand page-scroll sticky-logo" href="index">
                  <img src="assets/img/logo/logotipo.png" alt="" width="60%">
                  </a>
               </div>
            </div>
            <div class="col-md-8 col-sm-9">
               <div class="header-middle-link">
                  <div class="header-info">
                     <div class="header-icon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <div class="header-info-text">
                        <span class="info-first">Telefone:</span>
                        <span class="info-simple">(85) 3486-9258</span>
                     </div>
                  </div>
                  <div class="header-info">
                     <div class="header-icon">
                        <i class="fa fa-map-marker"></i>
                     </div>
                     <div class="header-info-text">
                        <span class="info-first">Endereço:</span>
                        <span class="info-simple">Rodovia CE 040, Aquiraz</span>
                     </div>
                  </div>
                  <div class="header-info hidden-sm">
                     <div class="header-icon">
                        <i class="fa fa-clock-o"></i>
                     </div>
                     <div class="header-info-text">
                        <span class="info-first">Funcionamento:</span>
                        <span class="info-simple">08:30 às 17:00</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="sticker" class="header-area hidden-xs">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <nav class="navbar navbar-default">
                  <div class="collapse navbar-collapse" id="navbar-example">
                     <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                           <li class=""><a class="<?php if($id_page == 'index'){echo 'ativo';}?>" href="index">Home</a></li>
                           <!-- <li class=""><a class="<?php if($id_page == 'institucional'){echo 'ativo';}?>" href="institucional">Institucional</a></li> -->
                           <li class=""><a class="<?php if($id_page == 'loteamento'){echo 'ativo';}?>" href="loteamento">O Loteamento</a></li>
                           <!-- <li class=""><a class="<?php if($id_page == 'galeria'){echo 'ativo';}?>" href="galeria">Galeria</a></li> -->
                           <li class=""><a class="<?php if($id_page == 'trabalhe_conosco'){echo 'ativo';}?>" href="trabalhe-conosco">Seja um Corretor</a></li>
                           <!-- <li class=""><a class="<?php if($id_page == 'novidades'){echo 'ativo';}?>" href="novidades">Novidades</a></li> -->
                           <li class=""><a class="<?php if($id_page == 'contato'){echo 'ativo';}?>" href="contato">Contato</a></li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mobile-menu">
                  <div class="logo">
                     <a href="index"><img src="assets/img/logo/logotipo.png" alt="" width="40%"></a>
                  </div>
                  <nav id="dropdown">
                     <ul>
                        <li class=""><a class="<?php if($id_page == 'index'){echo 'ativo';}?>" href="index">Home</a></li>
                        <!-- <li class=""><a class="<?php if($id_page == 'institucional'){echo 'ativo';}?>" href="institucional">Institucional</a></li> -->
                        <li class=""><a class="<?php if($id_page == 'loteamento'){echo 'ativo';}?>" href="loteamento">O Loteamento</a></li>
                        <!-- <li class=""><a class="<?php if($id_page == 'galeria'){echo 'ativo';}?>" href="galeria">Galeria</a></li> -->
                        <li class=""><a class="<?php if($id_page == 'trabalhe_conosco'){echo 'ativo';}?>" href="trabalhe-conosco">Seja um Corretor</a></li>
                        <!-- <li class=""><a class="<?php if($id_page == 'novidades'){echo 'ativo';}?>" href="novidades">Novidades</a></li> -->
                        <li class=""><a class="<?php if($id_page == 'contato'){echo 'ativo';}?>" href="contato">Contato</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>