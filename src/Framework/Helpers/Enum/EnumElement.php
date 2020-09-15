<?php

namespace ModuleBZ\Framework\Helpers\Enum;

/**
 * Описываем класс для элемента Enum
 * Class EnumElement
 */
class EnumElement {
    /** @var string $key Ключ элемента */
    var string $key;
    var $value;
    public function __construct(string $key,$value) {
        $this->key = $key;
        $this->value = $value;
    }
}
