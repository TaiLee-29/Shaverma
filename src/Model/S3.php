<?php


namespace Hillel\Model;


class S3 implements ShawarmaInterface
{
    private $cost;
    private $ingredients;
    private $title;
    /**
     * @return float
     */
    public function getCost(): float{
        $cost = '85';

        settype($cost,'float');

        return  $cost;
    }

    /**
     * @return array
     */
    public function getIngredients(): array{
        $ingredients = [' острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский'];



        return $ingredients;

    }

    /**
     * @return string
     */
    public function getTitle(): string{
        $title ='Шаурма из Баранины';

        return $title;
    }

}