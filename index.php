<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

// 1 - L'e-commerce vende prodotti per animali.

// 2 - I prodotti sono categorizzati, le categorie sono Cani o Gatti.

// 3 - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

// Stampiamo delle card contenenti i dettagli dei prodotti, come:
// 1 - immagine,
// 2 - titolo, 
// 3 - prezzo, 
// 4 - icona della categoria 
// 5 - il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).


class Product
{

    // public $name;
    // public $description;
    // public $image;
    // public $price;
    // public $articleType;
    // public $category;

    public function __construct(public $name, public $description, public $image, public $price, public $articleType)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->articleType = $articleType;
    }
}


class Dogs extends Product
{
    // public $breed;
    // public $size;

    public function __construct($name, $description, $image, $price, $articleType, public $breed, public $size)
    {
        parent::__construct($name, $description, $image, $price, $articleType);
        $this->breed = $breed;
        $this->size = $size;
    }
}

// $product = new Product('a', 'b', 'c', 'd', 'e');
$dogs = new Dogs('paperella', 'oggetto di gomma da mordere', 'https://picsum.photos/id/237/400/300', 4.99, 'toys', 'golden retriver', 'medium');

var_dump($dogs);


// class Cats extends Product
// {
// }
