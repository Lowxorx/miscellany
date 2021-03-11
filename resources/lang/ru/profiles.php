<?php

return [
    'avatar'        => [
        'success'   => 'Аватар обновлен',
    ],
    'description'   => 'Обновление деталей вашего профиля.',
    'edit'          => [
        'success'   => 'Профиль обновлен',
    ],
    'editors'       => [
        'legacy'        => 'Старый (TinyMCE 4)',
        'summernote'    => 'Summernote',
    ],
    'fields'        => [
        'avatar'                    => 'Аватар',
        'email'                     => 'Электронная почта',
        'hide_subscription'         => 'Скрыть мое имя в :hall_of_fame',
        'last_login_share'          => 'Показывать участникам кампании дату моего последнего входа в Kanka',
        'name'                      => 'Имя',
        'new_password'              => 'Новый пароль',
        'new_password_confirmation' => 'Подтверждение нового пароля',
        'newsletter'                => 'Я хочу иногда получать электронные письма',
        'password'                  => 'Текущий пароль',
        'settings'                  => 'Настройки',
        'theme'                     => 'Тема',
    ],
    'newsletter'    => [
        'links'     => [
            'community-vote'    => 'Голосование',
            'news'              => 'Новости',
        ],
        'settings'  => [
            'news'          => 'Новости - будьте в курсе, когда есть :news',
            'newsletter'    => 'Рассылка новостей - получайте рассылку Kanka',
            'votes'         => 'Голосования - будьте в курсе, как только будет открыто новое :vote',
        ],
        'title'     => 'Рассылки',
    ],
    'password'      => [
        'success'   => 'Пароль обновлен',
    ],
    'placeholders'  => [
        'email'                     => 'Ваш адрес электронной почты',
        'name'                      => 'Ваше имя для профиля',
        'new_password'              => 'Ваш новый пароль',
        'new_password_confirmation' => 'Подтвердите ваш новый пароль',
        'password'                  => 'Укажите ваш текущий пароль, чтобы что-либо изменить',
    ],
    'sections'      => [
        'delete'    => [
            'delete'    => 'Удалить мой аккаунт',
            'title'     => 'Удаление вашего аккаунта',
            'warning'   => 'При удалении вашего аккаунта, все ваши данные будут потеряны. Вы уверены?',
        ],
        'password'  => [
            'title' => 'Смена вашего пароля',
        ],
    ],
    'settings'      => [
        'fields'    => [
            'advanced_mentions'     => 'Продвинутые упоминания',
            'date_format'           => 'Формат даты',
            'default_nested'        => 'Свернутый вид по умолчанию',
            'editor'                => 'Текстовый редактор',
            'new_entity_workflow'   => 'Создание нового объекта',
            'pagination'            => 'Число элементов на странице',
        ],
        'helpers'   => [
            'editor_v2' => 'При использовании старого редактора (TinyMCE) не поддерживаются упоминания на мобильных устройствах и не работают некоторые функции, например галерея кампании.',
        ],
        'hints'     => [
            'advanced_mentions'     => 'Если включить, то все упоминания при редактировании объекта будут иметь такой формат: [entity:123].',
            'default_nested'        => 'Если включить, то все списки будут свернуты по умолчанию (когда это возможно).',
            'new_entity_workflow'   => 'При создании объекта, по умолчанию открывается страница со списком объектов. Можете изменить это, чтобы открывался созданный объект.',
        ],
        'success'   => 'Настройки обновлены',
    ],
    'theme'         => [
        'success'   => 'Тема обновлена',
        'themes'    => [
            'dark'      => 'Темная',
            'default'   => 'Стандартная',
            'future'    => 'Будущее',
            'midnight'  => 'Синяя Полночь',
        ],
    ],
    'title'         => 'Обновление вашего профиля',
    'workflows'     => [
        'created'   => 'На созданный объект',
        'default'   => 'К списку объектов',
    ],
];
