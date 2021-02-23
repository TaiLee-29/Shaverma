<?php


namespace Hillel\Model;


class ShawarmaCalculator
{

    private $bag;
    private $ingredients;
    private $price;
    public function add(ShawarmaInterface $shawarma){

        $title= $shawarma->getTitle();
        $ing = implode(', ',$shawarma->getIngredients());
        $this->price[] = $shawarma->getCost() ;
       $this->bag[]= " $title" ;
        $this->ingredients[] ="$ing" ;


    }


    public function ingredients(){



      return  array_unique(explode(", ",implode(', ' , $this->ingredients)));


    }

    public function price(){


        return array_sum($this->price);

    }

}