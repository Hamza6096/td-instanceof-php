<?php

declare(strict_types=1);

$tableau = ["livres", "stylos", "stylobilles"];


class Stylo
{
    public function __construct(public string $marque)
    {
        $this->marque = $marque;
    }
    public function ecrire(): void
    {
        echo"Le stylo {$this->marque} écrit<br>";
    }
}
class StyloBille extends Stylo
{
    public function __construct(string $marque,public string $couleur)
    {
        parent::__construct($marque);
    }
    public function fuir(): void
    {
        echo"Le style-bille {$this->marque} {$this->couleur} fuit<br>";
    }
}

class Livre
{
}

$tab = [
new Stylo("Bic"),
new Livre(),
new StyloBille("Pentel", "bleu"),
];
foreach($tab as $obj){
    if($obj instanceof StyloBille){
        $obj->fuir();
    }elseif($obj instanceof Stylo){
        $obj->ecrire();
    }else{
        echo "Une instance de" . $obj::class. "n'est pas un stylo<br>";
    }


}
