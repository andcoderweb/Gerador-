<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
// Inicializamos uma variável array que ira armazenar os números sorteados.
$arr_numeros_sorteados = array(); 
//Vamos usar um laço while para que enquanto não tivermos os 6 números, continuar a sortear.
while (count($arr_numeros_sorteados) < 7){
  $numero_sorteado = mt_rand(1,80); // Irá sortear um numero dentro do intervalo de 1 até 60

//Antes de salvar o numero sorteado, verificamos se ele já foi sorteado anteriormente
  if( !in_array($numero_sorteado, $arr_numeros_sorteados) ){
    $arr_numeros_sorteados[] = $numero_sorteado; //Armazena o numero sorteado no array.
  }
}

echo 'Números Sorteados: '. implode(', ', $arr_numeros_sorteados);
    
?>

       
    
 
    
    
</body>
</html>