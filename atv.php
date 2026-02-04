<?php

abstract class Filme {
    protected string $titulo;
    protected string $diretor;
    protected string $ano;
    protected string $genero;

    public function __construct(string $titulo, string $diretor, string $ano, string $genero) {
        $this->titulo  = $titulo;
        $this->diretor = $diretor;
        $this->ano     = $ano;
        $this->genero  = $genero;
    }

    abstract public function tipo(): string;

    public function info(): void {
        echo "Título: {$this->titulo}<br>";
        echo "Diretor: {$this->diretor}<br>";
        echo "Ano: {$this->ano}<br>";
        echo "Gênero: {$this->genero}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}

// Tipos de filmes
class Comedia extends Filme {
    public function tipo(): string {
        return "Comédia";
    }
}

class Acao extends Filme {
    public function tipo(): string {
        return "Ação";
    }
}

class Romance extends Filme {
    public function tipo(): string {
        return "Romance";
    }
}

class Aventura extends Filme {
    public function tipo(): string {
        return "Aventura";
    }
}

class Documentario extends Filme {
    public function tipo(): string {
        return "Documentário";
    }
}

// Exemplos de uso
$filme1 = new Comedia("Se Beber, Não Case", "Todd Phillips", "2009", "Comédia");
$filme2 = new Acao("Vingadores: Ultimato", "Anthony e Joe Russo", "2019", "Ação");
$filme3 = new Romance("Titanic", "James Cameron", "1997", "Romance");
$filme4 = new Aventura("Indiana Jones e os Caçadores da Arca Perdida", "Steven Spielberg", "1981", "Aventura");
$filme5 = new Documentario("Planeta Terra", "Alastair Fothergill", "2006", "Documentário");

$filme1->info();
$filme2->info();
$filme3->info();
$filme4->info();
$filme5->info();

?>
