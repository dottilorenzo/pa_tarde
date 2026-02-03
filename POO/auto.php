<?php

    
abstract class Automovel {
    public $marca;
    public $nome;
    public $modelo;
    public int $velocidade = 0;

    public function __construct(string $marca, string $nome, string $modelo) {
        $this->marca  = $marca;
        $this->nome   = $nome;
        $this->modelo = $modelo;
    }

    abstract public function tipo(): string;

    public function andar(): void {
        $this->velocidade += 20;
        echo "{$this->nome} est andando a {$this->velocidade} km/h<br>";
    }

    public function virar(string $lado): void {
        echo "{$this->nome} virou para a {$lado}<br>";
    }

    public function frear(): void {
        $this->velocidade = 0;
        echo "{$this->nome} freou e parou<br>";
    }

    public function info(): void {
        echo "Marca: {$this->marca}<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Modelo: {$this->modelo}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}



class CarroPasseio extends Automovel {

    public function tipo(): string {
        return "Carro de Passeio";
    }
}

class Moto extends Automovel {

    public function tipo(): string {
        return "Moto";
    }


    public function andar(): void {
        $this->velocidade += 50;
        echo "{$this->nome} acelerou forte! {$this->velocidade} km/h<br>";
    }
}


$gol = new CarroPasseio("Volkswagen", "Gol", "2020");
$Yamanha = new Moto("Yamaha", "343", "2023");

$gol->info();
$gol->andar();
$gol->virar("esquerda");
$gol->frear();

echo "<hr>";

$Yamanha->info();
$Yamanha->andar();
$Yamanha->virar("direita");
$Yamanha ->frear();
      





      
    
        