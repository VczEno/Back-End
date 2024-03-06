<?php

interface Prestito {
    public function presta();
    public function restituisci();
}

abstract class MaterialeBibliotecario implements Prestito {
    protected static $contatoreMateriale =0; //totale libri + dvd

    public function presta() {
    if(self::$contatoreMateriale > 0){
        self::$contatoreMateriale--;
    } else {
        echo 'non ci sono libri da prestare';
    }
        
    }
    public function restituisci() {
        self::$contatoreMateriale++;
    }

    public static function getCounter() {
        return self::$contatoreMateriale;
    }
}

class Libro extends MaterialeBibliotecario {
    private $titolo;
    private $autore;
    private $annoPubblicazione;
    private $prestato = false;
    private static $contaLibri=0;
    static function contaLibri() {
        return self::$contaLibri=0;
    }

    function __construct($titolo, $autore, $annoPubblicazione) {
        $this->titolo=$titolo;
        $this->autore=$autore;
        $this->annoPubblicazione=$annoPubblicazione;
        self::$contatoreMateriale++;
        self::$contaLibri++;
    }

    public function getAll() {
        return $this->titolo ." - ". $this->autore ." - ". $this->annoPubblicazione;
    }

    public function presta() {
        if($this->prestato !== true) {
            $this->prestato == true;
            return self::$contatoreMateriali--;
        } else {
            return 'il libro è già in prestito'
        }
    }
    public function restituisci() {
        if($this->prestato !== false) {
            $this->prestato == false;
            return self::$contatoreMateriali++;
        } else {
            return 'il libro è già stato restituito'
        }
    }
 
}

class DVD extends MaterialeBibliotecario {
    private $titolo;
    private $regista;
    private $annoPubblicazione;
    private static $contaDVD=0;
    private $prestato = false;
    static function contaDVD() {
        return self::$contaDVD=0;
    }
    function __construct($titolo, $regista, $annoPubblicazione) {
        $this->titolo=$titolo;
        $this->regista=$regista;
        $this->annoPubblicazione=$annoPubblicazione;
        self::$contatoreMateriale++;
        self::$contaDVD++;
    }
    public function getAll() {
        return $this->titolo ." - ". $this->regista ." - ". $this->annoPubblicazione;
    }

    public function presta() {
        if($this->prestato !== true) {
            $this->prestato == true;
            return self::$contatoreMateriali--;
        } else {
            return 'il libro è già in prestito'
        }
    }
    public function restituisci() {
        if($this->prestato !== false) {
            $this->prestato == false;
            return self::$contatoreMateriali++;
        } else {
            return 'il libro è già stato restituito'
        }
    }
    
}