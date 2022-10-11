<?php
    $Nome = $_POST['nomePess'];
        $dtaNasc = $_POST['dataNasc'];
        $date = new DateTime($dtaNasc);
        $dtaSigno = $date->format('m-d');
        $xml = simplexml_load_file('signos.xml');
        ?>


<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Seu Signo</title>
 <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap");

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 550px;
  height: 600px;
  border-radius: 20px;
  padding: 20px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: clamp(1em, 1em + 1vw, 1.5em);
  color: #1da1f2;
  letter-spacing: 1px;
}

button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}
p {
  font-size: clamp(1em, 1em + 1vw, 1.5em);
}
button {
  color: white;
  margin-top: 1px;
  background: #1da1f2;
  height: 50px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.1s;
  align-items:top;
}

button:hover {
  box-shadow: none;
}

</style>
</head>

<body>
    <Div class="container">
        <?php
       
        foreach ($xml->signo as $retorno) :
        if ($dtaSigno >= $retorno->dtaInicio and $dtaSigno <= $retorno->dtaFinal) {
        echo' <div class="brand-title">' . $Nome.', o seu signo é: ' . $retorno->descSigno . '</div>';
        echo '<p>' . nl2br($retorno->personalidade) . '<p>';
        }
        endforeach;       
        ?>
        <p>  </p>
<button onclick="history.go(-1);">Voltar</button>
    </div>
    
   
</body>
</html>