<?php

return [
    'create'        => [
        'description'   => 'Maak een nieuwe gebeurtenis',
        'success'       => 'Gebeurtenis \':name\' gemaakt.',
        'title'         => 'Nieuwe gebeurtenis',
    ],
    'destroy'       => [
        'success'   => 'Gebeurtenis \':name\' verwijderd.',
    ],
    'edit'          => [
        'success'   => 'Gebeurtenis \':name\' bijgewerkt.',
        'title'     => 'Wijzig Gebeurtenis :name',
    ],
    'fields'        => [
        'date'      => 'Datum',
        'image'     => 'Afbeelding',
        'location'  => 'Locatie',
        'name'      => 'Naam',
        'type'      => 'Type',
    ],
    'helpers'       => [
        'date'  => 'Dit veld kan alles bevatten en is niet gekoppeld aan de kalenders van de campaign. Om deze gebeurtenis aan een kalender te koppelen, voeg je deze toe aan de kalender of op het tabblad herinneringen van deze gebeurtenissen.',
    ],
    'index'         => [
        'add'           => 'Nieuwe gebeurtenis',
        'description'   => 'Beheer de gebeurtenissen van :name',
        'header'        => 'Gebeurtenissen van :name',
        'title'         => 'Gebeurtenissen',
    ],
    'placeholders'  => [
        'date'      => 'Een datum voor je gebeurtenis',
        'location'  => 'Kies een locatie',
        'name'      => 'Naam van de gebeurtenis',
        'type'      => 'Ceremonie, Festival, Ramp, Veldslag, Geboorte',
    ],
    'show'          => [
        'description'   => 'Een gedetailleerd overzicht van een gebeurtenis',
        'tabs'          => [
            'information'   => 'Informatie',
        ],
        'title'         => 'Gebeurtenis :name',
    ],
    'tabs'          => [
        'calendars' => 'Kalender Invoeren',
    ],
];
