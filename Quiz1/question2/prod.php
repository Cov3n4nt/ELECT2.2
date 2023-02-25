<?php
abstract class product{

    protected $ProductName;
    protected $Price;



    public function __construct($Price,$ProductName){
        $this->ProductName = $ProductName;
        $this->Price =$Price;
    }


     abstract function Display();

}

class Movie extends product{

    public $Director;
    public $Rating;
    public function __construct($Director,$Rating,$ProductName,$Price){

        $this->Director =$Director;
        $this->Rating =$Rating;
        $this->ProductName=$ProductName;
        $this->Price=$Price;

    }
    public function Display(){

        return "Product Name: ". $this->ProductName . "</br>".
         "Price: ". $this->Price. "</br>" .
          "Director: ". $this->Director. "</br>".
          "Rating: ".$this-> Rating."</br>";
    }


    
}

class Book extends product{

    public $Author;
    public $Genre;

    public function __construct($Author,$Genre,$ProductName,$Price){
        $this->Author =$Author;
        $this->Genre =$Genre;
        $this->ProductName=$ProductName;
        $this->Price=$Price;


    }

    public function Display(){

        return "Product Name: ". $this->ProductName."</br>".
         "Price: ". $this->Price."</br>".
          "Author: ". $this->Author."</br>".
          "Genre: ". $this->Genre."</br>";
    }




}

?>