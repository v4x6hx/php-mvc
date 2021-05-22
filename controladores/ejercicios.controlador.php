<?php 
  class PracticaMatematicas{
    
    static public function sumarPares(){
      //Capturar el valor del formulario
      if(isset($_POST["numero1"])){
        if($_POST["numero1"] < 2){
          echo '<br>Error el numero debe de ser mayor a 1';
        }else{
          $valor = $_POST["numero1"];
          $listaPares = array();
          for ($i=1; $i <= $valor; $i++) { 
            if($i % 2 == 0){
              array_push($listaPares, $i);
            }
          }
          echo '<br>';
          $ultElem = array_pop($listaPares);
          foreach ($listaPares as $key => $value) {
            echo $value.' + ';
          }
          $valoresSumados = array_sum($listaPares);
          echo $ultElem.' = ' .number_format($valoresSumados+$ultElem).'.';
        }
      }
    }

    static public function cuadradosPrimos(){
      $limite = 15;
      echo '<p>Cuadrados de los numeros primos del
           1 al '.$limite.'</p>
      ';
      for ($i=1; $i <= $limite ; $i++) { 
        if ($i % 2 != 0) {
          echo $i.'² = '.pow($i,2).'<br>';
        }
      }
    }


  }