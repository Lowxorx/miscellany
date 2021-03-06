<?php

return [
    'children'      => [
        'actions'       => [
            'add'   => 'Добавить новый Тэг.',
        ],
        'create'        => [
            'title' => 'Добавить Тэг для :name',
        ],
        'description'   => 'Объекты с этим Тэгом.',
        'title'         => 'Подтэги тэга :name',
    ],
    'create'        => [
        'description'   => 'Создание нового Тэга.',
        'success'       => 'Тэг ":name" создан.',
        'title'         => 'Новый Тэг',
    ],
    'destroy'       => [
        'success'   => 'Тэг ":name" удален.',
    ],
    'edit'          => [
        'success'   => 'Тэг ":name" обновлен.',
        'title'     => 'Редактировать Тэг :name',
    ],
    'fields'        => [
        'characters'    => 'Персонажи',
        'children'      => 'Потомки',
        'name'          => 'Название',
        'tag'           => 'Тэг',
        'tags'          => 'Подтэги',
        'type'          => 'Тип',
    ],
    'helpers'       => [
        'nested'    => 'При свернутом виде тэги будут показаны свернутыми. Тэги без родительских тэгов будут видны сразу. На тэги с подтэгами можно нажать, чтобы их развернуть. Вы можете продолжать нажимать пока есть что разворачивать.',
    ],
    'hints'         => [
        'children'  => 'Этот список содержит все объекты с этим тэгом и со всеми его подтэгами.',
        'tag'       => 'Ниже расположены ближайшие родительские Тэги этого Тэга.',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Свернутый вид',
        ],
        'add'           => 'Новый Тэг',
        'description'   => 'Управление Тэгом :name.',
        'header'        => 'Тэги в :name',
        'title'         => 'Тэги',
    ],
    'new_tag'       => 'Новый Тэг',
    'placeholders'  => [
        'name'  => 'Название Тэга',
        'tag'   => 'Выбрать родительский Тэг',
        'type'  => 'Знания, войны, история, религия, флаги',
    ],
    'show'          => [
        'description'   => 'Детальный вид Тэга.',
        'tabs'          => [
            'children'      => 'Подтэги',
            'information'   => 'Информация',
            'tags'          => 'Тэги',
        ],
        'title'         => 'Тэг :name',
    ],
    'tags'          => [
        'description'   => 'Подтэги',
        'title'         => 'Потомки Тэга :name',
    ],
];
