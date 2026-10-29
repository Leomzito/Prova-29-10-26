<?php

        if(!isset($_SESSION['total_recargas'])) {
            $_SESSION['total_recargas'] = 0;
        }

    abstract class robo {
        public $nome;
        public $energiaInicial;
        public $potencia;
        public $modelo;
    }

    function __contruct($nome, $modelo) {
        $this-> $nome = nome;
        $this-> $modelo = modelo;
    }

    class Explorador {
        new Personagem Explorador ("01", 100, 20, $funcao);
    }

    class Engenheiro {
        new Personagem Engenheiro ("02", 120, 15, $funcao);
    }

    class Defensor {
        new Personagem Defensor ("03", 150, 30, $funcao);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && 
    isset($_POST['cadastrar'])) {
        $nome = trim($_POST['nome'] ?? '');
        $modelo = trim($_POST['modelo'] ?? '');
        $operador = trim($_POST['operador'] ?? '');

        if (empty($nome) || empty($modelo) || empty ($operador)) {
            $mensagem = "Erro: Todos os campos são obrigatorios";
        } else {
            $_SESSION['operador'] = $operador;
        }

        $novorobo = new Robo ($nome, $modelo, $operador);
        $mensagem = "Sucesso: Robo cadastrado com sucesso";

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <header>
        <h1>CENTRAL DE ROBÔS</h1>
    </header>
    
    <form method="$_POST" >
        <div>
            <label>Nome do Robô</label>
        <form type="text" id="nome" name="nome" required>Nome do Robô</form>
        </div>
        <div>
            <label>Modelo do Robô</label>
            <input type="text" name="nome" required>
            <select name="modelo" required>
                <option value="">Selecione o modelo</option>
                <option value="Explorador">Explorador (Energia: 100 | Potência: 20)</option>
                <option value="Engenheiro">Engenheiro (Energia: 120 | Potência: 15)</option>
                <option value="Defensor">Defensor (Energia: 150 | Potência: 30)</option>
            </select>
            
        </div>
        <div>
            <label>Nome do Operador</label>
            <form type="text" id="operador" name="operador" required>Nome do operador</form>
        </div>
        
        <button type="submit">Cadastrar</button>
    </form>


</body>
</html>