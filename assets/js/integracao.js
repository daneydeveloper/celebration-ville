angular.module('app', ['ngMask', 'ngDialog']).controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike, $timeout) {
   $scope.enviarwpp = !1;
   $scope.load = !1;
   $scope.load1 = !1;
   $scope.dados = {};
   var host = 'http://crm2.marketingmidia9.com.br'
   var registra_acesso = function() {
      $http.get(host + '/api/registraAcesso/DmZHrxudZIlAR9iULAos2QHT2UGzb2TMpVDImJBs9IY').success(function(result) {
         $log.info(result);
         $scope.request = result.data
      })
   }
   $scope.enviarLead = function(dados, tmp = null) {
      $scope.load = !0;
      // dados.EMP_Key = $scope.request.EMP_Key;
      dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
      $log.info(dados);
      $http({
         method: 'POST',
         url: host + '/api2/registraLead',
         data: $httpParamSerializerJQLike(dados),
         headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
         }
      }).success(function(retorno) {
         $scope.load = !1;
         if (!retorno.error) {
            swal({
               title: "Obrigado!",
               text: "suas informações foram enviadas com sucesso, um de nossos consultores irá lhe contactar em breve",
               type: "success",
               confirmButtonColor: "#DD6B55",
               confirmButtonText: "Ok",
               closeOnConfirm: !1
            }, function() {
               $log.info($scope.enviarwpp);
               if ($scope.enviarwpp == !0) {
                  window.location.href = "https://api.whatsapp.com/send?phone=5585988788003&text=Olá, me chamo  " + dados.LE_Nome + "   e gostaria de receber mais informações sobre os Loteamentos da Celebration Ville."
               } else {
                  window.location.href = ""
               }
            })
         } else {
            swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error")
         }
      }).error(function(retorno) {
         $scope.load = !1;
         $log.error(retorno)
      })
   }
   $scope.openForm = function(template, tipo, whatsapp) {
      $scope.enviarwpp = whatsapp;
      $scope.dados.LE_CodigoTipo = tipo;
      ngDialog.openConfirm({
         template: template,
         scope: $scope,
         showClose: !1,
         closeByDocument: !0,
         closeByEscape: !0
      })
   }
   registra_acesso()
})