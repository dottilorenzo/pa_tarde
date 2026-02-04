<?php

// Classe Pai
class Veiculo {
    public $marca;
    public $modelo;
    public $ano;

    function __construct(string $marca, string $modelo, string $ano)
    {
        $this->marca  = $marca;
        $this->modelo = $modelo;
        $this->ano    = $ano;
    }

    function info()
    {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}\n";
    }

    function ligar()
    {
        echo "{$this->modelo} está ligado\n";
    }

    function desligar()
    {
        echo "{$this->modelo} foi desligado\n";
    }
}

// Classe Filho 1
class Carro extends Veiculo {
    function andar()
    {
        echo "{$this->modelo} está andando na estrada\n";
    }
}

// Classe Filho 2
class Moto extends Veiculo {
    function empinar()
    {
        echo "{$this->modelo} está empinando a moto!\n";
    }
}

// Classe Filho 3
class Caminhao extends Veiculo {
    function carregar()
    {
        echo "{$this->modelo} está carregando mercadorias\n";
    }
}

// Criando objetos
$gol = new Carro("Volkswagen", "Gol", "2020");
$cb500 = new Moto("Honda", "CB 500", "2021");
$volvoTruck = new Caminhao("Volvo", "FH16", "2019");

// Usando métodos
$gol->info();
$gol->ligar();
$gol->andar();
$gol->desligar();

echo "\n";

$cb500->info();
$cb500->ligar();
$cb500->empinar();
$cb500->desligar();

echo "\n";

$volvoTruck->info();
$volvoTruck->ligar();
$volvoTruck->carregar();
$volvoTruck->desligar();

?>