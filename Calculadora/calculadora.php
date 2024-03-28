<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="formStyle.css" rel="stylesheet">

    <title>Calculadora</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
   
</head>

<body>
    <form action="" method="GET">
   
    <h1 id="titulo">CALCULADORA</h1><p></p>
    <P id="subtitulo">Preencha as informações logo abaixo:</P>
    <br>
    <form id="form">
       
        <label class="campo"><strong>1° Número:</strong></label>
        <input type="number"  name="n01" id="n01" placeholder="Digite o 1° número:" minlength="5" >

        <label class="campo"><strong>2° Número:</strong></label>
        <input type="number"  name="n02" id="n02"placeholder="Digite o 2° número:" >
        <p>

        <div class="botoes">
            <button type="submit" name="operacao" value="soma">+</button>
            <button type="submit" name="operacao" value="subtracao">-</button>
            <button type="submit" name="operacao" value="multiplicacao">*</button>
            <button type="submit" name="operacao" value="divisao">÷</button>
        </div>
      
        <P id="resul">Resultado:</P>
        <p>
  
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (isset($_GET['operacao']) && isset($_GET['n01']) && isset($_GET['n02'])) {
              
                $n1 = $_GET["n01"];
                $n2 = $_GET["n02"];
                $operacao = $_GET["operacao"];
  
                if ($operacao == "soma") {
                  // "." para juntar PHP com HTML
                  $resultado = $n1 + $n2;
                  echo "<input type='number' name='resultado' id='resultado' value='" . $resultado . "' disabled>";
                  // header("Location: ".$_SERVER['PHP_SELF']."?n1=$n1&n2=$n2&operacao=$operacao&resultado=$resultado");
            
                } 
                else
                  if ($operacao == "subtracao") {
                    $resultado = $n1 - $n2;
                    echo "<input type='number' name='resultado' id='resultado' value='" . $resultado . "' disabled>";
                  } 
                  else
                    if ($operacao == "multiplicacao") {
                    $resultado = $n1 * $n2;
                    echo "<input type='number' name='resultado' id='resultado' value='" . $resultado . "' disabled>";
                    } 
                    else
                      if ($operacao == "divisao") {
                        if ($n2 != 0) {
                          $resultado = $n1 / $n2;
                          echo "<input type='number' name='resultado' id='resultado' value='" . $resultado . "' disabled>";
                        } 
                        else {
                        echo "<span>Erro: Divisão por zero</span>";
                        }
                      }
                        
                    }
              }
            ?>
        </div>
    </form>
    </form>
</body>
</html>