<?php

return [
    'actions'       => [
        'add_epoch'         => 'Добавить эпоху',
        'add_intercalary'   => 'Добавить промежуточные дни',
        'add_month'         => 'Добавить месяц',
        'add_moon'          => 'Добавить луну',
        'add_season'        => 'Добавить время года',
        'add_week'          => 'Добавить названную неделю',
        'add_weekday'       => 'Добавить день недели',
        'add_year'          => 'Добавить название года',
        'set_today'         => 'Установить текущий день',
        'today'             => 'Сегодня',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Происходит каждый год',
    ],
    'create'        => [
        'description'   => 'Создание нового Календаря.',
        'success'       => 'Календарь ":name" создан.',
        'title'         => 'Новый Календарь',
    ],
    'destroy'       => [
        'success'   => 'Календарь ":name" удален.',
    ],
    'edit'          => [
        'description'   => 'Обновление Календаря.',
        'success'       => 'Календарь ":name" обновлен.',
        'title'         => 'Изменение Календаря :name',
        'today'         => 'Дата Календаря обновлена.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Существующий объект',
            'new'       => 'Новое Событие',
            'switch'    => 'Изменить выбор',
        ],
        'create'    => [
            'description'   => 'Создание События Календаря.',
            'success'       => 'Событие Календаря создано.',
            'title'         => 'Добавление События Календаря :name',
        ],
        'destroy'   => 'Событие удалено из Календаря ":name".',
        'edit'      => [
            'description'   => 'Обновление События Календаря.',
            'success'       => 'Событие Календаря обновлено.',
            'title'         => 'Обновление События Календаря :name',
        ],
        'helpers'   => [
            'add'   => 'Добавьте существующее Событие в этот Календарь.',
            'new'   => 'Или создайте новое Событие, просто предоставив имя.',
        ],
        'modal'     => [
            'title' => 'Добавление События в Календарь',
        ],
        'success'   => 'Событие ":event" добавлено в Календарь.',
    ],
    'events'        => [
        'description'   => 'События в этом Календаре.',
        'title'         => 'События Календаря :name',
    ],
    'fields'        => [
        'colour'                => 'Цвет',
        'comment'               => 'Комментарий',
        'current_day'           => 'Текущий день',
        'current_month'         => 'Текущий месяц',
        'current_year'          => 'Текущий год',
        'date'                  => 'Текущая дата',
        'has_leap_year'         => 'Есть високосные годы',
        'intercalary'           => 'Промежуточные дни',
        'is_incrementing'       => 'Продвижение даты',
        'is_recurring'          => 'Повторяющееся',
        'leap_year_amount'      => 'Лишние дни',
        'leap_year_month'       => 'Месяц',
        'leap_year_offset'      => 'Каждые ... лет',
        'leap_year_start'       => 'Первый високосный год',
        'length'                => 'Продолжительность',
        'length_days'           => '{1} :count день|[2,4] :count дня|[5,*] :count дней',
        'months'                => 'Месяцы',
        'moons'                 => 'Луны',
        'name'                  => 'Название',
        'parameters'            => 'Параметры',
        'recurring_periodicity' => 'Периодичность',
        'recurring_until'       => 'Повторяется до ...',
        'reset'                 => 'Сброс дня недели',
        'seasons'               => 'Времена года',
        'start_offset'          => 'Начальное смещение',
        'suffix'                => 'Обозначение эры',
        'type'                  => 'Тип',
        'week_names'            => 'Названные недели',
        'weekdays'              => 'Дни недели',
    ],
    'helpers'       => [
        'month_type'    => 'Промежуточные месяцы не имеют дней недели, но влияют на луны и времена года.',
        'start_offset'  => 'По умолчанию Календарь начинается с первого дня недели 0 года. Изменение этого поля влияет на расположение первого дня календаря.',
    ],
    'hints'         => [
        'intercalary'       => 'Дни, которые выпадают из обычных месяцев и дней недели. Они влияют на луны, но не на дни недели.',
        'is_incrementing'   => 'Если включено, то текущая дата Календаря будет автоматически продвигаться вперед в 00:00 UTC.',
        'is_recurring'      => 'Событие может быть повторяющимся. Оно будет происходить каждый год в одну и ту же дату.',
        'months'            => 'В вашем Календаре должно быть не меньше 2 месяцев.',
        'moons'             => 'Если добавить в Календарь луны, они будут появляться в Календаре каждую полную и новую луну. Если период лунного цикла длиннее 10 дней, убывание и рост лун тоже будет отображаться.',
        'reset'             => 'Начинать ли каждый месяц/год с первого дня недели.',
        'seasons'           => 'Создайте времена года, просто обозначив, когда каждое из них начитается. Об остальном позаботится Kanka.',
        'weekdays'          => 'Назначьте названия дней недели. Их должно быть не меньше двух.',
        'weeks'             => 'Дайте названия наиболее важным неделям в вашем Календаре.',
        'years'             => 'Некоторые годы настолько важны, что у них есть собственные названия.',
    ],
    'index'         => [
        'add'           => 'Новый Календарь',
        'description'   => 'Управление Календарями :name.',
        'header'        => 'Календари :name',
        'title'         => 'Календари',
    ],
    'layouts'       => [
        'month' => 'Месяц',
        'year'  => 'Год',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Переключатель лет',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Промежуточный',
        'standard'      => 'Обычный',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'month' => 'Ежемесячное',
                'year'  => 'Ежегодное',
            ],
        ],
        'resets'    => [
            ''      => 'Никогда',
            'month' => 'Каждый месяц',
            'year'  => 'Каждый год',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Промежуточные дни',
        'leap_year'     => 'Високосный год',
        'months'        => 'Месяцы',
        'weeks'         => 'Недели',
        'years'         => 'Названные годы',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Продолжительность в днях',
            'month'     => 'В конце какого месяца',
            'name'      => 'Название промежутка',
        ],
        'month'         => [
            'alias' => 'Прозвище месяца',
            'length'=> 'Дни',
            'name'  => 'Название',
            'type'  => 'Тип',
        ],
        'moon'          => [
            'fullmoon'  => 'Дни между полнолуниями',
            'name'      => 'Название луны',
            'offset'    => 'Смещение первого полнолуния',
        ],
        'seasons'       => [
            'day'   => 'Первый день',
            'month' => 'Первый месяц',
            'name'  => 'Название времени года',
        ],
        'weeks'         => [
            'name'      => 'Название недели',
            'number'    => 'Номер недели',
        ],
        'year'          => [
            'name'      => 'Название года',
            'number'    => 'Год',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Цвет',
        'comment'           => 'День рожденья, фестиваль, солнцестояние',
        'date'              => 'Текущая дата',
        'leap_year_amount'  => 'Число лишних дней в високосном году',
        'leap_year_month'   => 'Месяц, в который входят лишние дни',
        'leap_year_offset'  => 'Каждые сколько лет год становится високосным',
        'leap_year_start'   => 'Первый високосный год',
        'length'            => 'Продолжительность события в днях',
        'months'            => 'Число месяцев в году',
        'name'              => 'Название Календаря',
        'recurring_until'   => 'Последний год повторения (оставьте пустым, чтобы повторять вечно)',
        'seasons'           => 'Число времен года',
        'suffix'            => 'Обозначение текущей эры (н. э., до н. э.)',
        'type'              => 'Тип Календаря',
        'weekdays'          => 'Число дней в неделе',
    ],
    'show'          => [
        'description'       => 'Детальный вид Календаря.',
        'missing_details'   => 'Этот Календарь не может быть размещен. Для нормальной работы в Календаре должно быть не меньше 2 месяцев и 2 дней недели.',
        'moon_full_moon'    => 'Полнолуние :moon',
        'moon_new_moon'     => 'Новолуние :moon',
        'moon_waning_moon'  => ':moon убывает',
        'moon_waxing_moon'  => ':moon растет',
        'tabs'              => [
            'events'        => 'События Календаря',
            'information'   => 'Информация',
            'weather'       => 'Погода',
        ],
        'title'             => 'Календарь :name',
    ],
];
