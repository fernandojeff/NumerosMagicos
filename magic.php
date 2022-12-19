<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de numeros magicos</title>
    <link rel="stylesheet" href="magic.css">
</head>
<body>
    <fieldset>
        <table>
            <?php
                $n = $_POST['num'];
                $op = $_POST['op'];
                $ini =  1;
                if (is_numeric($n) and $n > 0 and $op != "nada"){
                    echo "<legend>Números ". $op . "es que aparecem antes de $n</legend>";
                    switch ($op){
                        case "par":
                            $ini = $ini + 1;
                            while ($ini < $n){
                                echo "<td>$ini</td></tr>";
                                $ini = $ini + 2;
                            }
                        case "impar":
                            while ($ini < $n) {
                                echo "<td>$ini</td></tr>";
                                $ini = $ini + 2;
                            }
                    }
                }
                else{
                    echo "Não foi possivel efetuar a operação";
                }
            ?>
        </table>
        <p class="centro"><a href="magic.html"><button>Escolher outro número</button></a></p>
        <p class="centro"><a href="../"><button>Voltar para página inicial</button></a></p>
    </fieldset>
</body>
</html>