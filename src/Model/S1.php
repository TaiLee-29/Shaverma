<?php


namespace Hillel\Model;


class S1 implements \Hillel\Model\ShawarmaInterface
{

    private $cost;
    private $ingredients;
    private $title;
    /**
     * @return float
     */
    public function getCost(): float{
        $cost = '69';

        settype($cost,'float');

        return  $cost;
    }

    /**
     * @return array
     */
    public function getIngredients(): array{
        $ingredients = ['огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу', 'корейская морковь'];



        return $ingredients;

    }

    /**
     * @return string
     */
    public function getTitle(): string{
       $title ='Шаурма Одесская';

       return $title;
    }

}