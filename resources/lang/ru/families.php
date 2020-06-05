<?php

return [
    'create'        => [
        'description'   => 'Создание новой семьи.',
        'success'       => 'Семья ":name" создана.',
        'title'         => 'Новая Семья',
    ],
    'destroy'       => [
        'success'   => 'Семья ":name" удалена.',
    ],
    'edit'          => [
        'success'   => 'Семья ":name" обновлена.',
        'title'     => 'Редактирование Семьи :name',
    ],
    'families'      => [
        'title' => 'Семьи в Семье :name',
    ],
    'fields'        => [
        'families'  => 'Подсемьи',
        'family'    => 'Родительские семьи',
        'image'     => 'Изображение',
        'location'  => 'Локация',
        'members'   => 'Члены',
        'name'      => 'Название',
        'relation'  => 'Связь',
        'type'      => 'Тип',
    ],
    'helpers'       => [
        'descendants'   => 'Этот список содержит все Семьи-потомки этой Семьи, а не только прямые.',
        'nested'        => 'При свернутом виде Семьи будут показаны свернутыми. Семьи без родительских семей будут видны сразу. На семьи с подсемьями можно нажать, чтобы их развернуть. Вы можете продолжать нажимать пока есть что разворачивать.',
    ],
    'hints'         => [
        'members'   => 'Это список членов Семьи. Персонажа можно добавить в Семью во время его редактирования через поле "Семья".',
    ],
    'index'         => [
        'add'           => 'Новая Семья',
        'description'   => 'Управление семьями :name.',
        'header'        => 'Семьи :name',
        'title'         => 'Семьи',
    ],
    'members'       => [
        'helpers'   => [
            'all_members'       => 'Следующий список содержит всех персонажей в этой семье и всех ее подсемьях.',
            'direct_members'    => 'У большинства есть те, кто их покинул или прославил. Следующий список содержит всех персонажей непосредственно этой семьи.',
        ],
        'title'     => 'Члены Семьи :name',
    ],
    'placeholders'  => [
        'location'  => 'Выберите Локацию',
        'name'      => 'Название Семьи',
        'type'      => 'Королевская, знатная, исчезнувшая',
    ],
    'show'          => [
        'description'   => 'Детальный вид Семьи',
        'tabs'          => [
            'all_members'   => 'Все Члены',
            'families'      => 'Семьи',
            'members'       => 'Члены',
            'relation'      => 'Связи',
        ],
        'title'         => 'Семья :name',
    ],
];
