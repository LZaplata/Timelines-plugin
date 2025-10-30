<?php return [
    'plugin' => [
        'name' => 'Timelines',
        'description' => 'Plugin for timeline management',
    ],
    'privileges' => [
        'default' => 'Plugin access',
        'category' => [
            'default' => 'Categories',
            'create' => 'Create',
            'update' => 'Update',
            'delete' => 'Delete',
        ],
        'event' => [
            'default' => 'Events',
            'create' => 'Create',
            'update' => 'Update',
            'delete' => 'Delete',
        ],
        'timeline' => [
            'default' => 'Timelines',
            'create' => 'Create',
            'update' => 'Update',
            'delete' => 'Delete',
        ],
    ],
    'category' => [
        'field' => [
            'name' => [
                'label' => 'Name',
            ],
            'slug' => [
                'label' => 'Slug',
            ],
            'events' => [
                'label' => 'Events',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Name',
            ],
            'events_count' => [
                'label' => 'Events count',
            ],
        ],
        'create' => [
            'title' => 'Create category',
            'flash' => 'Category has been successfully created',
        ],
        'add' => [
            'title' => 'Add category',
            'flash' => 'Category has been successfully added',
        ],
        'update' => [
            'title' => 'Edit category',
            'flash' => 'Category has been successfully updated',
        ],
        'update_form' => [
            'title' => 'Save',
        ],
        'delete' => [
            'flash' => 'Category has been successfully deleted',
        ],
        'remove_many' => [
            'title' => 'Remove selected',
            'flash' => 'Categories have been successfully removed',
        ],
    ],
    'event' => [
        'field' => [
            'name' => [
                'label' => 'Name',
            ],
            'slug' => [
                'label' => 'Slug',
            ],
            'image' => [
                'label' => 'Image',
            ],
            'categories' => [
                'label' => 'Categories',
            ],
            'text' => [
                'label' => 'Text',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Name',
            ],
            'categories' => [
                'label' => 'Categories',
            ],
        ],
        'create' => [
            'title' => 'Create event',
            'flash' => 'Event has been successfully created',
        ],
        'add' => [
            'title' => 'Add event',
            'flash' => 'Event has been successfully added',
        ],
        'update' => [
            'title' => 'Edit event',
            'flash' => 'Event has been successfully updated',
        ],
        'update_form' => [
            'title' => 'Save',
        ],
        'delete' => [
            'flash' => 'Event has been successfully deleted',
        ],
        'remove_many' => [
            'title' => 'Remove selected',
            'flash' => 'Events have been successfully removed',
        ],
    ],
    'timeline' => [
        'field' => [
            'name' => [
                'label' => 'Name',
            ],
            'slug' => [
                'label' => 'Slug',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Name',
            ],
        ],
        'create' => [
            'title' => 'Create timeline',
            'flash' => 'Timeline has been successfully created',
        ],
        'update' => [
            'title' => 'Edit timeline',
            'flash' => 'Timeline has been successfully updated',
        ],
        'delete' => [
            'flash' => 'Timeline has been successfully deleted',
        ],
    ],
    'menu' => [
        'categories' => [
            'label' => 'Categories',
        ],
        'events' => [
            'label' => 'Events',
        ],
        'timelines' => [
            'label' => 'Timelines',
        ],
    ],
    'component' => [
        'timeline' => [
            'name' => 'Timeline',
            'description' => 'Displays a timeline',
            'slug' => [
                'title' => 'Timeline',
                'description' => 'Select a timeline',
            ],
        ],
    ],
];
