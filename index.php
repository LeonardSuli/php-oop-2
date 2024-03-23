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


class Dog extends Product
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

class Cat extends Product
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


$animals = [

    $dog = new Dog(
        'Paperella',
        'Oggetto di gomma da mordere',
        'https://m.media-amazon.com/images/I/41yvxsHIJ6L._AC_UF1000,1000_QL80_.jpg',
        '4.99 €',
        'toys',
        'Golden Retriver',
        'Medium'
    ),

    $cat = new Cat(
        'Tiragraffi',
        'Oggetto che mantiene le unghie del gatto sane',
        'https://m.media-amazon.com/images/I/71AvbGKoyoL._AC_UF894,1000_QL80_.jpg',
        '29.99 €',
        'toys',
        'Siriano',
        'Small'
    ),

];

var_dump($dog, $cat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="mt-5">

        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 g-3 text-center">

                    <?php foreach ($animals as $animal) : ?>

                        <div class="col">

                            <div class="card">

                                <div class="card-body">
                                    <h3><?= $animal->name ?></h3>
                                    <p><?= $animal->description ?></p>
                                    <img style="width: 200px;" src="<?= $animal->image ?>" alt="">
                                    <p><?= $animal->price ?></p>
                                </div>

                                <div class="card-footer">
                                    <p><?= $animal->breed ?></p>
                                    <p><?= $animal->size ?></p>
                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

    </main>

</body>

</html>