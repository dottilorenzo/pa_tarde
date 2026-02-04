<?php
// Classe Pai
class Animal {
    // Todos os atributos são públicos
    public $especie;
    public $nome;
    public $idade;

    // Construtor
    public function __construct($especie, $nome, $idade) {
        $this->especie = $especie;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método público
    public function mostrarInfo() {
        echo "Espécie: " . $this->especie . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
    }
}

// Classe Filha
class Cachorro extends Animal {
    // Método público
    public function latir() {
        echo $this->nome . " está latindo: Au Au!<br>";
    }
}

// Criando um objeto (instância)
$meuCachorro = new Cachorro("Canino", "Rex", 5);

// Chamando métodos
$meuCachorro->mostrarInfo();
$meuCachorro->latir();

// Como os atributos são públicos, podemos acessá-los diretamente
echo "O cachorro se chama " . $meuCachorro->nome . " e tem " . $meuCachorro->idade . " anos.";
