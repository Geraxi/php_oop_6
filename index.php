<?php
require_once 'class.php';

class Post {
    private $title;
    private $category;
    private $tags;

    public function __construct($title, Category $category, array $tags) {
        $this->title = $title;
        $this->category = $category;
        $this->tags = $tags;
    }

    public function getFullPost() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Categoria: ";
        $this->category->getMyCategory();
        echo "<br>Tag: " . implode(", ", $this->tags) . "<br><br>";
    }
}

// Creazione delle istanze di categoria
$attualita = new Attualita();
$sport = new Sport();

// Creazione delle istanze di Post
$post1 = new Post("Nuove scoperte scientifiche", $attualita, ["scienza", "innovazione"]);
$post2 = new Post("Finale Champions League", $sport, ["calcio", "Champions League"]);

// Visualizzazione degli articoli
$post1->getFullPost();
$post2->getFullPost();
?>
