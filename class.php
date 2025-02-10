<?php

abstract class Category {
    abstract public function getMyCategory();
}

class Attualita extends Category {
    public function getMyCategory() {
        echo "Attualità";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        echo "Sport";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        echo "Gossip";
    }
}

class Storia extends Category {
    public function getMyCategory() {
        echo "Storia";
    }
}

// Esempio di utilizzo
$attualita = new Attualita();
$attualita->getMyCategory(); // Output: Attualità

?>
