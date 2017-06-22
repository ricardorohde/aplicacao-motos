<?php 
session_start();
 require_once 'conexao.php';
  
 if(!$_SESSION['status'] == "logado"){
                echo $_SESSION['logar'];
                header("Location: login.php");
            }

?>
                

<html>
    <head>
        <title>Cadastrar Apreensões</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="js/jquery-ui.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>  
        <script src="js/jquery-ui.min.js" type="text/javascript">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


       
        <style type="text/css">
            
            a{ font-size: 13pt;text-decoration:none;}
            a:hover{text-decoration: none}
            .teste{background: green}
        </style>
    </head>
    <body style=" background: orange; margin: 0 auto;">
    
        <h2 style="text-align: center;color: white; "><u>Apreensões de Veículos</u></h2>
        <hr>
    <div class="menu">
        <form action="cad_apreencao.php" method="post" >
            <div class="row">
              <div class="form-group col-md-6 col-sm-6 col-xs-6 ">
                  <label for="datepicker">Data:</label>
                  <input type="date" class="form-control mar_form"  id="ddata" name="data" placeholder="" required>
              </div>
              <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label for="time">Hora:</label>
                  <input type="time" class="form-control" id="hora" name="hora" placeholder="" required>
              </div>
            </div>
            
            
            <div class="form-group">
                <label for="local">Local:</label>
                <input type="text" class="form-control text-uppercase" id="local" name="local" placeholder="Preencha o Local" required>
            </div>
            
            <div class="form-group">
                <label for="placa">Placa:</label>
                <input type="text" class="form-control text-uppercase" id="placa" name="placa" placeholder="AAA-9999" required>
            </div>
                       
            <div class="ui-widget" class="form-group">
                <label for="motivo">Motivo da Apreensão:</label>
                <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Motivo da Apreensão" required>
            </div>

            <div class="form-group">
                <label for="equipe">Equipe:</label>
                <select class="form-control" name="equipe" id="equipe" required>
                    <option value="">Selecione a Equipe</option>
                    <option value="1">BRAVO 1</option>
                    <option value="2">BRAVO 2</option>
                    <option value="3">BRAVO 3</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea type="text" class="form-control" id="observacoes" name="observacao" placeholder="Preenchimento Opcional"></textarea>
            </div>
            
             <div class="form-group">
                 <input   type="submit" name="submit" class="btn btn-block btn-success" value="Salvar" >
              
             </div>
        </div>
        </form>
        
            <div class="form-group" style="margin-bottom: 0">
                <button class="btn  btn-block "><a href="index.php">Voltar<br></a></button>
            </div>

 
<script>
  $(function() {
    var motivos = [
      "Art. 162-I  -  sem possuir Carteira Nacional de Habilitação, Permissão para Dirigir ou Autorização para Conduzir Ciclomotor",
      "Art. 162-II  -  com Carteira Nacional de Habilitação, Permissão para Dirigir ou Autorização para Conduzir Ciclomotor cassada ou com suspensão do direito de dirigir",
      "Art. 162-III  -  com Carteira Nacional de Habilitação ou Permissão para Dirigir de categoria diferente da do veículo que esteja conduzindo",
      
      "Art. 162-V -  com validade da Carteira Nacional de Habilitação vencida há mais de trinta dias",
      "Art. 162-VI  -  sem usar lentes corretoras de visão, aparelho auxiliar de audição, de prótese física ou as adaptações do veículo impostas por ocasião da concessão ou da renovação da licença para conduzir",
      "Art. 163  -  Entregar a direção do veículo a pessoa nas condições previstas no artigo anterior",
      "Art. 164  -  Permitir que pessoa nas condições referidas nos incisos do art. 162 tome posse do veículo automotor e passe a conduzi-lo na via",
      "Art. 165  -  Dirigir sob a influência de álcool ou de qualquer outra substância psicoativa que determine dependência",
      "Art. 165-A  -  Recusar-se a ser submetido a teste, exame clínico, perícia ou outro procedimento que permita certificar influência de álcool ou outra substância psicoativa, na forma estabelecida pelo art. 277",
      
      "Art. 167  -  Deixar o condutor ou passageiro de usar o cinto de segurança, conforme previsto no art. 65",
      "Art. 168  -  Transportar crianças em veículo automotor sem observância das normas de segurança especiais estabelecidas neste Código",
      
      "Art. 170  -  Dirigir ameaçando os pedestres que estejam atravessando a via pública, ou os demais veículos",
      
      "Art. 173  -  Disputar corrida",
      "Art. 174  -  Promover, na via, competição, eventos organizados, exibição e demonstração de perícia em manobra de veículo, ou deles participar, como condutor, sem permissão da autoridade de trânsito com circunscrição sobre a via",
      "Art. 175  -  Utilizar-se de veículo para demonstrar ou exibir manobra perigosa, mediante arrancada brusca, derrapagem ou frenagem com deslizamento ou arrastamento de pneus",
      
      
      "Art. 181-I  -  nas esquinas e a menos de cinco metros do bordo do alinhamento da via transversal",
      "Art. 181-II  -  afastado da guia da calçada (meio-fio) de cinqüenta centímetros a um metro",
      "Art. 181-III  -  afastado da guia da calçada (meio-fio) a mais de um metro",
      "Art. 181-IV  -  em desacordo com as posições estabelecidas neste Código",
      "Art. 181-V  -  na pista de rolamento das estradas, das rodovias, das vias de trânsito rápido e das vias dotadas de acostamento",
      "Art. 181-VI  -   junto ou sobre hidrantes de incêndio, registro de água ou tampas de poços de visita de galerias subterrâneas, desde que devidamente identificados, conforme especificação do CONTRAN",
      "Art. 181-VII  -  nos acostamentos, salvo motivo de força maior",
      "181-VIII  -  no passeio ou sobre faixa destinada a pedestre, sobre ciclovia ou ciclofaixa, bem como nas ilhas, refúgios, ao lado ou sobre canteiros centrais, divisores de pista de rolamento, marcas de canalização, gramados ou jardim público",
      "Art. 181-IX  -  onde houver guia de calçada (meio-fio) rebaixada destinada à entrada ou saída de veículos",
      "Art. 181-X  -  impedindo a movimentação de outro veículo",
      "Art. 181-XI  -  ao lado de outro veículo em fila dupla",
      "Art. 181-XII  -  na área de cruzamento de vias, prejudicando a circulação de veículos e pedestres",
      "Art. 181-XIII  -  onde houver sinalização horizontal delimitadora de ponto de embarque ou desembarque de passageiros de transporte coletivo ou, na inexistência desta sinalização, no intervalo compreendido entre dez metros antes e depois do marco do ponto",
      "Art. 181-XIV  -  nos viadutos, pontes e túneis",
      "Art. 181-XVI  -  em aclive ou declive, não estando devidamente freado e sem calço de segurança, quando se tratar de veículo com peso bruto total superior a três mil e quinhentos quilogramas",
      "Art. 181-XVII  -  em desacordo com as condições regulamentadas especificamente pela sinalização (placa - Estacionamento Regulamentado)",
      "Art. 181-XVIII  -  em locais e horários proibidos especificamente pela sinalização (placa - Proibido Estacionar)",
      "Art. 181-XIX  -  em locais e horários de estacionamento e parada proibidos pela sinalização (placa - Proibido Parar e Estacionar)",
      "Art. 181-XX  -  nas vagas reservadas às pessoas com deficiência ou idosos, sem credencial que comprove tal condição",
      
      
      "Art. 184-III  -  na faixa ou via de trânsito exclusivo, regulamentada com circulação destinada aos veículos de transporte público coletivo de passageiros, salvo casos de força maior e com autorização do poder público competente",
      
      
      "Art. 210  -  Transpor, sem autorização, bloqueio viário policial",
      "Art. 221  -  Portar no veículo placas de identificação em desacordo com as especificações e modelos estabelecidos pelo CONTRAN",
      "Art. 223  -  Transitar com o farol desregulado ou com o facho de luz alta de forma a perturbar a visão de outro condutor",
      "Art. 228  -  Usar no veículo equipamento com som em volume ou freqüência que não sejam autorizados pelo CONTRAN",
      "Art. 229  -  Usar indevidamente no veículo aparelho de alarme ou que produza sons e ruído que perturbem o sossego público, em desacordo com normas fixadas pelo CONTRAN",
      "Art. 230-I  -  com o lacre, a inscrição do chassi, o selo, a placa ou qualquer outro elemento de identificação do veículo violado ou falsificado",
      "Art. 230-II  -  transportando passageiros em compartimento de carga, salvo por motivo de força maior, com permissão da autoridade competente e na forma estabelecida pelo CONTRAN",
      "Art. 230-III  -  com dispositivo anti-radar",
      "Art. 230-IV  -  sem qualquer uma das placas de identificação",
      "Art. 230-V  -  que não esteja registrado e devidamente licenciado",
      "Art. 230-VI  -  com qualquer uma das placas de identificação sem condições de legibilidade e visibilidade",
      "Art. 230-VII  -  com a cor ou característica alterada",
      "Art. 230-VIII  -  sem ter sido submetido à inspeção de segurança veicular, quando obrigatória",
      "Art. 230-IX  -  sem equipamento obrigatório ou estando este ineficiente ou inoperante",
      "Art. 230-X  -  com equipamento obrigatório em desacordo com o estabelecido pelo CONTRAN",
      "Art. 230-XI  -  com descarga livre ou silenciador de motor de explosão defeituoso, deficiente ou inoperante",
      "Art. 230-XII  -  com equipamento ou acessório proibido",
      "Art. 230-XIII  -  com o equipamento do sistema de iluminação e de sinalização alterados",
      "Art. 230-XIV  -  com registrador instantâneo inalterável de velocidade e tempo viciado ou defeituoso, quando houver exigência desse aparelho",
      "Art. 230-XV  -  com inscrições, adesivos, legendas e símbolos de caráter publicitário afixados ou pintados no pára-brisa e em toda a extensão da parte traseira do veículo, excetuadas as hipóteses previstas neste Código",
      "Art. 230-XVI  -  com vidros total ou parcialmente cobertos por películas refletivas ou não, painéis decorativos ou pinturas",
      "Art. 230-XVII  -  com cortinas ou persianas fechadas, não autorizadas pela legislação",
      "Art. 230-XVIII  -  em mau estado de conservação, comprometendo a segurança, ou reprovado na avaliação de inspeção de segurança e de emissão de poluentes e ruído, prevista no art. 104",
      "Art. 230-XIX  -  sem acionar o limpador de pára-brisa sob chuva",
      "Art. 230-XX  -  sem portar a autorização para condução de escolares, na forma estabelecida no art. 136",
      "Art. 231-I  -  danificando a via, suas instalações e equipamentos",
      "Art. 231-II  -  derramando, lançando ou arrastando sobre a via",
      "Art. 231-III  -  produzindo fumaça, gases ou partículas em níveis superiores aos fixados pelo CONTRAN",
      "Art. 231-IV  -  com suas dimensões ou de sua carga superiores aos limites estabelecidos legalmente ou pela sinalização, sem autorização",
      
      "Art. 231-VI  -  em desacordo com a autorização especial, expedida pela autoridade competente para transitar com dimensões excedentes, ou quando a mesma estiver vencida",
      "Art. 231-VII  -  com lotação excedente",
      "Art. 231-VIII   -  efetuando transporte remunerado de pessoas ou bens, quando não for licenciado para esse fim, salvo casos de força maior ou com permissão da autoridade competente",
      "Art. 231-IX  -  desligado ou desengrenado, em declive",
      "Art. 231-X  -  excedendo a capacidade máxima de tração",
      
      "Art. 232 - Conduzir veículo sem os documentos de porte obrigatório referidos neste Código",
      "Art. 233 - Deixar de efetuar o registro de veículo no prazo de trinta dias, junto ao órgão executivo de trânsito, ocorridas as hipóteses previstas no art. 123",
      "Art. 234 - Falsificar ou adulterar documento de habilitação e de identificação do veículo",
      "Art. 235 - Conduzir pessoas, animais ou carga nas partes externas do veículo, salvo nos casos devidamente autorizados",
      "Art. 237 - Transitar com o veículo em desacordo com as especificações, e com falta de inscrição e simbologia necessárias à sua identificação, quando exigidas pela legislação",
      "Art. 238 - Recusar-se a entregar à autoridade de trânsito ou a seus agentes, mediante recibo, os documentos de habilitação, de registro, de licenciamento de veículo e outros exigidos por lei, para averiguação de sua autenticidade",
      "Art. 239 - Retirar do local veículo legalmente retido para regularização, sem permissão da autoridade competente ou de seus agentes",
      "Art. 240 - Deixar o responsável de promover a baixa do registro de veículo irrecuperável ou definitivamente desmontado",
      "Art. 244-IX  -  efetuando transporte remunerado de mercadorias em desacordo com o previsto no art. 139-A desta Lei ou com as normas que regem a atividade profissional dos mototaxistas",
      "Art. 248 - Transportar em veículo destinado ao transporte de passageiros carga excedente em desacordo com o estabelecido no art. 109",
      "Art. 253 - Bloquear a via com veículo",
      "Art. 253-A  -  Usar qualquer veículo para, deliberadamente, interromper, restringir ou perturbar a circulação na via sem autorização do órgão ou entidade de trânsito com circunscrição sobre ela",
    ];
    $("#motivo").autocomplete({
      source: motivos
    });
  } );
</script>   
    </body>
</html>
