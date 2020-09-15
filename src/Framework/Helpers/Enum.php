<?php

namespace ModuleBZ\Framework\Helpers;

use ModuleBZ\Framework\Helpers\Enum\EnumElement;

/**
 * Описываем абстрактный класс, который умеет инициализировать список вариантов используя собственные статичные переменные
 * Class ENum
 */
abstract class ENum {
    /**
     * Ленивый вариант для инициализации переменных.
     * Можно использовать в случаях, когда нам не важно, какое именно уникальное значение хранить в переменной.
     * После описания класса вызвать функцию
     * <code>(static function(){ static::lazyInit(MyClassEnumElement::class); })->bindTo(null,MyClassEnum::class)();</code>
     * @param string $class название класса, который должен быть использован для инициализации, должен быть расширением класса EnumElement
     */
    protected static function lazyInit(string $class){
        $a = get_class_vars(static::class);
        $counter = 1;
        foreach ($a as $key=>$value){
            static::$$key = new $class($key,$counter++);
        }
    }

    /**
     * Функция, которая возвращает массив ключей
     * @return string[]
     */
    static function keys(){
        /** @var EnumElement[] $a */
        $a = get_class_vars(static::class);
        /** @var string[] $res */
        $res = [];
        foreach ($a as $v){
            $res[] = $v->key;
        }
        return $res;
    }
    /**
     * Функция, которая возвращает массив значений
     * @return string[]
     */
    static function values(){
        /** @var EnumElement[] $a */
        $a = get_class_vars(static::class);
        /** @var string[] $res */
        $res = [];
        foreach ($a as $v){
            $res[] = $v->value;
        }
        return $res;
    }

    /**
     * Функция, которая возвращает все элементы
     * @return array
     */
    static function elements(){
        return get_class_vars(static::class);
    }

}
