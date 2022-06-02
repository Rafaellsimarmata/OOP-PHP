<?php 

class person {

    const Author = "Rafael Simarmata" ;

    var ?string $name= NULL;
    var $class;
    var $age;

    function intro(){
        echo "Hello, $this->name " ;
    }

    function SayHello(?string $name){
        if(is_null($name)){
            echo "Hello, Nama saya adalah $this->name";
        }else{
            echo "Hello $name, Nama saya adalah $this->name";
        }
    }

    function Info(){
        echo "Author :" . self::Author ;

    }

    function __destruct(){
        echo "Object " . $this->name . "Has been destroyes";
    }

}

class Induk{
    
    var string $name;

    function Hi(string $name): void {
        echo "Hi !!" . $this->name . " Nama saya : " . $name ;

    }

}

class Anak extends Induk {

    
}


?>