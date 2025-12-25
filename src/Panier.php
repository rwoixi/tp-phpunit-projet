<?php 

use function PHPUnit\Framework\throwException;

class Panier{
    private array $produits ;
    private float $tauxTaxe;
    function __construct($produits , $tauxTaxe){
        $this->produits=$produits ;
        $this->tauxTaxe=$tauxTaxe ;
    }
    public function ajouterProduit($produit){
        $this->produits=array_push($this->produits,$produit);

    }
    public function retirerProduit($produit){
        if (in_array($produit,$this->produits,true)){
            $index = array_search($produit,$this->produits,true);
            unset($this->produits[$index]);
        }
    }
    public function getTotalHT(){
        if (!is_array($this->produits) && empty($this->produits)){
            throwException("Le panier est vide !!") ;
        }
        $total=0;
        foreach ($this->produits as $produit){
            $total+=$produit->prix ;
        }
        return $total ;
    }
    public function getTotalTTC(){
        return $this->getTotalHT() * (1 + $this->tauxTaxe / 100);
    }
    public function getNombreProduits(){
        return count($this->produits);
    }
    
}
