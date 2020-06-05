<?php

return [
    'abilities'     => [
        'title' => 'Потомки Способности :name',
    ],
    'create'        => [
        'success'   => 'Способность ":name" создана.',
        'title'     => 'Новая Способность',
    ],
    'destroy'       => [
        'success'   => 'Способность ":name" удалена.',
    ],
    'edit'          => [
        'success'   => 'Способность ":name" обновлена.',
        'title'     => 'Изменение Способности :name',
    ],
    'fields'        => [
        'abilities' => 'Способности',
        'ability'   => 'Способность',
        'charges'   => 'Заряды',
        'name'      => 'Название',
        'type'      => 'Тип',
    ],
    'helpers'       => [
        'descendants'   => 'Этот список содержит всех потомков этой Способности и всех потомков ее потомков.',
        'nested'        => 'При свернутом виде Способности будут показаны свернутыми. Способности без родительских Способностей будут видны сразу. На Способности с потомками можно нажать, чтобы их развернуть. Вы можете продолжать нажимать на потомков, пока у них есть еще потомки.',
    ],
    'index'         => [
        'add'           => 'Новая Способность',
        'description'   => 'Создавайте силы, заклинания, трюки и другое для своих объектов.',
        'header'        => 'Способности :name',
        'title'         => 'Способности',
    ],
    'placeholders'  => [
        'charges'   => 'Число зарядов. Ссылайтесь на атрибуты с помощью {Level}*{CHA}',
        'name'      => 'Файрбол, сигнал тревоги, ловкий удар',
        'type'      => 'Заклинание, трюк, атака',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Способности',
        ],
        'title' => 'Способность :name',
    ],
];
