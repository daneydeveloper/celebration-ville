<footer >
   <div class="footer-area">
      <div class="container">
         <div class="row">
            <!-- <div class="col-md-3 col-sm-4 col-xs-12">
               <div class="footer-content">
                  <div class="footer-head">
                     <h4>Celebration Ville</h4>
                     <hr>
                     <p class="text-justify">A Celebration Ville é uma construtora e incorporadora que busca promover, através de seus empreendimentos, uma relação harmoniosa entre as pessoas e as cidades.</p>
                  </div>
               </div>
            </div> -->

            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="footer-content">
                  <div class="footer-head">
                     <h4>Páginas</h4>
                     <hr>
                     <ul class="footer-list">
                        <li><a href="index">HOME</a></li>
                        <li><a href="loteamento">O LOTEAMENTO</a></li>
                        <li><a href="trabalhe-conosco">SEJA UM CORRETOR</a></li>
                        <li><a href="contato">CONTATO</a></li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="footer-content">
                  <div class="footer-head">
                     <h4>Contato</h4>
                     <hr>
                     <div class="footer-contacts">
                        <p><span>Telefone:</span> (85) 3486-9258</p>
                        <p><span>WhatsApp:</span> (85) 9938-5011</p>
                        <p><span>Endereço:</span> Rodovia CE 040, Aquiraz</p>
                     </div>
                     <div class="footer-icons">
                        <ul>
                           <li>
                              <a href="#">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-instagram"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="footer-content">
                  <div class="footer-head">
                     <h4>nossa newsletter</h4>
                     <hr>
                     <p>
                        Quer ganhar ofertas especiais no seu e-mail?
                     </p>
                     <div class="subs-feilds">
                        <div class="suscribe-input">
                           <form name="newsletter">
                              <input type="hidden" ng-init="dados.LE_CodigoTipo='2'"> 
                              <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'"> 
                              <input type="hidden" ng-init="dados.LE_CodigoProduto='1120'">
                              <input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" class="email form-control width-80" placeholder="DIGITE SEU EMAIL:">
                              <button ng-click="enviarLead(dados)" ng-disabled="newsletter.$invalid || load" class="add-btn">
                                 <b ng-if="load ">ENVIANDO...</b>
                                 <b ng-if="!load ">ENVIAR</b>
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-area-bottom" id="footerimg">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-7 col-lg-6" id="pull-left">
               <div class="copyright">
                  <p>&copy; <?=Date('Y')?> <strong class="color_celebration_ville">Celebration Ville</strong></p>
               </div>
            </div>
            <div class="col-md-6 col-sm-5 col-lg-6" id="pull-right">
               <div class="copyright">
                  <p>Desenvolvido por <a href="https://agenciamidia9.com.br/" target="_blank"><strong>Agência Midia9</strong></a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>