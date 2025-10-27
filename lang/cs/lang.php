<?php return [
    'plugin' => [
        'name' => 'Časové osy',
        'description' => 'Plugin pro správu časových os',
    ],
    'privileges' => [
        'default' => 'Přístup k pluginu',
        'category' => [
            'default' => 'Kategorie',
            'create' => 'Vytvořit',
            'update' => 'Upravit',
            'delete' => 'Smazat',
        ],
        'event' => [
            'default' => 'Události',
            'create' => 'Vytvořit',
            'update' => 'Upravit',
            'delete' => 'Smazat',
        ],
        'timeline' => [
            'default' => 'Časové osy',
            'create' => 'Vytvořit',
            'update' => 'Upravit',
            'delete' => 'Smazat',
        ],
    ],
    'category' => [
        'field' => [
            'name' => [
                'label' => 'Název',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'events' => [
                'label' => 'Události',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Název',
            ],
            'events_count' => [
                'label' => 'Počet událostí',
            ],
        ],
        'create' => [
            'title' => 'Vytvořit kategorii',
            'flash' => 'Kategorie byla úspěšně vytvořena',
        ],
        'add' => [
            'title' => 'Přidat kategorii',
            'flash' => 'Kategorie byla úspěšně přidána',
        ],
        'update' => [
            'title' => 'Upravit kategorii',
            'flash' => 'Kategorie byla úspěšně upravena',
        ],
        'update_form' => [
            'title' => 'Uložit',
        ],
        'delete' => [
            'flash' => 'Kategorie byla úspěšně smazána',
        ],
        'remove_many' => [
            'title' => 'Odebrat vybrané',
            'flash' => 'Kategorie byly úspěšně odebrány',
        ],
    ],
    'event' => [
        'field' => [
            'name' => [
                'label' => 'Název',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'image' => [
                'label' => 'Obrázek',
            ],
            'categories' => [
                'label' => 'Kategorie',
            ],
            'text' => [
                'label' => 'Text',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Název',
            ],
            'categories' => [
                'label' => 'Kategorie',
            ],
        ],
        'create' => [
            'title' => 'Vytvořit událost',
            'flash' => 'Událost byla úspěšně vytvořena',
        ],
        'add' => [
            'title' => 'Přidat událost',
            'flash' => 'Událost byla úspěšně přidána',
        ],
        'update' => [
            'title' => 'Upravit událost',
            'flash' => 'Událost byla úspěšně upravena',
        ],
        'update_form' => [
            'title' => 'Uložit',
        ],
        'delete' => [
            'flash' => 'Událost byla úspěšně smazána',
        ],
        'remove_many' => [
            'title' => 'Odebrat vybrané',
            'flash' => 'Události byly úspěšně odebrány',
        ],
    ],
    'timeline' => [
        'field' => [
            'name' => [
                'label' => 'Název',
            ],
            'slug' => [
                'label' => 'URL',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Název',
            ],
        ],
        'create' => [
            'title' => 'Vytvořit časovou osu',
            'flash' => 'Časová osa byla úspěšně vytvořena',
        ],
        'update' => [
            'title' => 'Upravit časovou osu',
            'flash' => 'Časová osa byla úspěšně upravena',
        ],
        'delete' => [
            'flash' => 'Časová osa byla úspěšně smazána',
        ],
    ],
    'menu' => [
        'categories' => [
            'label' => 'Kategorie',
        ],
        'events' => [
            'label' => 'Události',
        ],
        'timelines' => [
            'label' => 'Časové osy',
        ],
    ],
    'component' => [
        'timeline' => [
            'name' => 'Časová osa',
            'description' => 'Zobrazí časovou osu',
            'slug' => [
                'title' => 'Časová osa',
                'description' => 'Vyberte časovou osu',
            ],
        ],
    ],
];