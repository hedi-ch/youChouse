<?php
class Produit {
    public $name;
    public $price;
    public $image;
    //public $desc;
    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}
$produits=array(new Produit("PRODUCT NAME 1",120000,"off.png"),
new Produit("PRODUCT NAME 2",120000,"bg3.jpg"),
new Produit("PRODUCT NAME 3",120000,"3.PNG"),
new Produit("PRODUCT NAME 4",120000,"4.PNG"),
new Produit("PRODUCT NAME 5",120000,"5.PNG"),
new Produit("PRODUCT NAME 6",120000,"6.PNG"),
new Produit("PRODUCT NAME 20",120000,"2.PNG"),
new Produit("PRODUCT NAME 30",120000,"3.PNG"),
new Produit("PRODUCT NAME 40",120000,"4.PNG"),
new Produit("PRODUCT NAME 50",120000,"5.PNG"),
new Produit("PRODUCT NAME 60",120000,"6.PNG"));  
?>