<?php

    abstract class modelo {
        public $tipo;
        public $energiaInicial;
        public $potencia;
        private $funcao;
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
    <h1>
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
    </h1>

</body>
</html>