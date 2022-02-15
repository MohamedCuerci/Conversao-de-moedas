<?php



//conversor de moedas
function converterMoeda($montante, $moedaA, $moedaB) {
    //chave da api é unica
    $apikey = '5d19b9c7486ef82ae5d4';

    $MoedaA = urlencode($moedaA);
    $MoedaB = urlencode($moedaB);
    $query = "{$MoedaA}_{$MoedaB}";

    //url free
    $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
    $obj = json_decode($json, true);

    $val = floatval($obj["$query"]);

    $total = $val * $montante;
    return number_format($total, 2, ',', '.');
}

//test
//echo converterMoeda(1, 'usd', 'BRL');

#link para verificar todas as conversões
#https://free.currconv.com/api/v7/currencies?apiKey=[5d19b9c7486ef82ae5d4]


function precoCripto($cripto){

    $Cripto = urlencode($cripto);
    
    //url
    $json = file_get_contents("https://www.mercadobitcoin.net/api/{$Cripto}/ticker/");
    $obj = json_decode($json, true);
    #var_dump($obj)

    //retorna o json 
    foreach($obj['ticker'] as $chave=>$valor){
        //verifica o ultimo preço negociado para retorna formatado
        if($chave == "last"){
            $valorFinal = $valor; 
            return number_format($valorFinal, 2, ',', '.');
        }
    }
}

#teste
#echo precoCripto('ADA');



if(isset($_POST['submit'])){
    
    $moedaA = strtoupper($_POST['from']);
    $moedaB = strtoupper($_POST['to']);
    $montante = intval($_POST['quantia']);

    $resultado = converterMoeda($montante, $moedaA, $moedaB);
    

}