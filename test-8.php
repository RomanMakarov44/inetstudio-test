<?php

class SomeObject {
    protected $name;

    // Добавил тело в функцию __construct
    public function __construct(string $name) {
        $this->name = $name;
    }

    //Вернул имя объекта в функции getObjectName
    public function getObjectName() {
        return $this->name;
    }
}

class SomeObjectsHandler {
    public function __construct() { }

    public function handleObjects(array $objects): array {
        $handlers = [];
        foreach ($objects as $object) {
            // Убрал условия if, чтобы при добавлении других объектов не нужно было менять код класса
            // Таким образом он стал закрытым для изменений
            $handlers[] = 'handle_' . $object->getObjectName();
        }

        return $handlers;
    }
}

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);