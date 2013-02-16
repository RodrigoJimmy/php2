<?php

class Nome {

    protected $nome;
    protected $sobreNome;
    public $x;

    public function setNome($nome)
    {
        if (! is_string($nome) )
            die("somente strings no nome, por favor!");

        $this->nome = $nome;
    }

    public function setSobreNome($sobreNome)
    {
        if (! is_string($sobreNome) )
            die("somente strings no sobrenome, por favor!");

        $this->sobreNome = $sobreNome;

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobreNome()
    {
        return $this->sobreNome;
    }

}


$rodrigo = new Nome();

$rodrigo->setNome("Rodrigo");
$rodrigo->setSobreNome("de Lima Vieira");

$rodrigo->setNome(3);

echo "<br> Nome: " . $rodrigo->getNome();
echo "<br> Sobrenome: " . $rodrigo->getSobreNome();

