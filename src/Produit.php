<?

use function PHPUnit\Framework\throwException;
class Produit {
    private $nom ;
    private $prix ;

    public function __construct($nom,$prix) {
        if ($nom===""){
            throwException("Le nom est vide !");
        }
        if($prix<0){
            throwException("Le prix est inferieur a 0 !");
        }
        $this->nom=$nom;
        $this->prix=$prix ;
    }
    public function __getnom(){
        return $this->nom ;
    }
    public function __getprix(){
        return $this->prix ;
    }
    public function __setprix($p){
        if($p<0){
            throwException("Le prix est inferieur a 0 !");
        }
        $this->prix=$p ;
    }
    
    

}