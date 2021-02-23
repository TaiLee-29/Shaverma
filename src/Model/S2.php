<?php


namespace Hillel\Model;


class S2 implements ShawarmaInterface
{
    private $cost;
    private $ingredients;
    private $title;
    /**
     * @return float
     */
    public function getCost(): float{
        $cost = '75';

        settype($cost,'float');

        return  $cost;
    }

    /**
     * @return array
     */
    public function getIngredients(): array{
        $ingredients = ['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин'];



        return $ingredients;

    }

    /**
     * @return string
     */
    public function getTitle(): string{
        $title ='Шаурма говяжья';

        return $title;
    }

}