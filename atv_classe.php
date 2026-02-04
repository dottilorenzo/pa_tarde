<?php


class Veiculo {
    private string $marca;       
    protected string $modelo;  
    public string $ano;          
    public function __construct(string $marca, string $modelo, string $ano)
    {
        $this->marca  = $marca;
        $this->modelo = $modelo;
        $this->ano    = $ano;
    }


    public function getMarca(): string
    {
        return $this->marca;
    }

    public function info(): void
    {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}\n";
    }
}


class Carro extends Veiculo {
    private int $portas;

    public function __construct(string $marca, string $modelo, string $ano, int $portas)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->portas = $portas;
    }

    public function detalhes(): void
    {
        
        echo "O carro {$this->getMarca()} {$this->modelo} tem {$this->portas} portas e é do ano {$this->ano}\n";
    }
}

// Objeto
$fiesta = new Carro("Ford", "Fiesta", "2020", 4);

$fiesta->info();
$fiesta->detalhes();

?>
