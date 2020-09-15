<?php

/**
 * Описываем класс для элемента Enum
 * Class EnumElement
 */
class EnumElement {
    /** @var string $key Ключ элемента */
    var string $key;
    var $value;
    public function __construct(string $_key,$value) {
        $this->key = $_key;
        $this->value = $value;
    }
}
