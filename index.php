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


class product
{

    public $name;
    public $description;
    public $image;
    public $price;
    public $category;
    public $articleType;

    public function __construct($name, $description, $image, $price, $category, $articleType)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->articleType = $articleType;
    }
}
