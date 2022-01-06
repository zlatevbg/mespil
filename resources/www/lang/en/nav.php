<?php

return [

    'header' => [
        'home' => [
            'slug' => null,
            'name' => 'Home',
        ],
        'for-end-buyers' => [
            'slug' => 'for-end-buyers',
            'name' => 'For End Buyers',
            'children' => [
                'for-end-buyers' => [
                    'slug' => 'for-end-buyers',
                    'name' => 'Overview',
                ],
                'portugal-properties-for-sale' => [
                    'slug' => 'portugal-properties-for-sale',
                    'name' => 'Portugal Properties for Sale',
                ],
                'the-property-buying-process' => [
                    'slug' => 'the-property-buying-process',
                    'name' => 'The Property Buying Process',
                    'intro' => 'We will guide you through the property buying process and are always on hand to answer any questions you may have.',
                ],
                'questions-and-answers' => [
                    'slug' => 'questions-and-answers',
                    'name' => 'FAQ',
                    'parent' => true,
                ],
            ],
        ],
        'for-investors' => [
            'slug' => 'for-investors',
            'name' => 'For Investors',
            'children' => [
                'for-investors' => [
                    'slug' => 'for-investors',
                    'name' => 'Overview',
                ],
                'portugal-investment-projects' => [
                    'slug' => 'portugal-investment-projects',
                    'name' => 'Portugal Investment Projects',
                ],
                'the-property-investment-process' => [
                    'slug' => 'the-property-investment-process',
                    'name' => 'The Property Investment Process',
                ],
                'questions-and-answers' => [
                    'slug' => 'questions-and-answers',
                    'name' => 'FAQ',
                    'parent' => true,
                ],
            ],
        ],
        'portugal-real-estate-investment-guide' => [
            'slug' => 'portugal-real-estate-investment-guide',
            'name' => 'Portugal',
            'children' => [
                'portugal-real-estate-investment-guide' => [
                    'slug' => 'portugal-real-estate-investment-guide',
                    'name' => 'Portugal Investment Guide',
                ],
                'portugal-golden-visa' => [
                    'slug' => 'portugal-golden-visa',
                    'name' => 'Portugal Golden Visa',
                    'intro' => 'The Golden Visa in Portugal is Europe’s most successful residency-by-investment program.',
                ],
                'nhr-portuguese-tax-residency' => [
                    'slug' => 'nhr-portuguese-tax-residency',
                    'name' => 'NHR - Portuguese Tax Residency',
                    'intro' => 'The Non Habitual Residency enables the individual becoming a tax resident in Portugal to avail of very favourable tax advantages over a maximum 10 year period.',
                ],
            ],
        ],
        'about' => [
            'slug' => 'about',
            'name' => 'About',
        ],
        'contact' => [
            'slug' => 'contact',
            'name' => 'Contact',
        ],
    ],

    'portugal-properties-for-sale' => [
        'parent' => 'portugal-properties-for-sale',
        'children' => [
            'pine-hills-vilamoura-portugal' => [
                'slug' => 'pine-hills-vilamoura-portugal',
                'name' => 'Pine Hills, Vilamoura, Portugal',
            ],
            'no-9-lisbon-portugal' => [
                'slug' => 'no-9-lisbon-portugal',
                'name' => 'No.9, Lisbon, Portugal',
            ],
            'no-57-lisbon-portugal' => [
                'slug' => 'no-57-lisbon-portugal',
                'name' => 'No.57, Lisbon, Portugal',
            ],
            'no-9-faro-portugal' => [
                'slug' => 'no-9-faro-portugal',
                'name' => 'No.9, Faro, Portugal',
            ],
        ],
    ],

    'portugal-investment-projects' => [
        'parent' => 'portugal-investment-projects',
        'children' => [
            'pine-hills-vilamoura-portugal' => [
                'slug' => 'pine-hills-vilamoura-portugal',
                'name' => 'Pine Hills, Vilamoura, Portugal',
            ],
            'no-9-lisbon-portugal' => [
                'slug' => 'no-9-lisbon-portugal',
                'name' => 'No.9, Lisbon, Portugal',
            ],
            'no-57-lisbon-portugal' => [
                'slug' => 'no-57-lisbon-portugal',
                'name' => 'No.57, Lisbon, Portugal',
            ],
            'no-37-lisbon-portugal' => [
                'slug' => 'no-37-lisbon-portugal',
                'name' => 'No.37, Lisbon, Portugal',
            ],/*
            'no-59-lisbon-portugal' => [
                'slug' => 'no-59-lisbon-portugal',
                'name' => 'No.59, Lisbon, Portugal',
            ],*/
            'evaristo-algarve-portugal' => [
                'slug' => 'evaristo-algarve-portugal',
                'name' => 'Evaristo, Algarve, Portugal',
            ],
            'no-24-albufeira-portugal' => [
                'slug' => 'no-24-albufeira-portugal',
                'name' => 'No.24, Albufeira, Portugal',
            ],
            'no-9-faro-portugal' => [
                'slug' => 'no-9-faro-portugal',
                'name' => 'No.9, Faro, Portugal',
            ],
            /*'quinta-do-lago-algarve-portugal' => [
                'slug' => 'quinta-do-lago-algarve-portugal',
                'name' => 'Quinta Do Lago, Algarve, Portugal',
            ],*/
        ],
    ],

    'portugal-real-estate-investment-guide' => [
        'parent' => 'portugal-real-estate-investment-guide',
        'children' => [
            'vilamoura' => [
                'slug' => 'vilamoura',
                'name' => 'Vilamoura, Portugal - Real estate investment guide',
            ],
            'lisbon' => [
                'slug' => 'lisbon',
                'name' => 'Lisbon, Portugal - Real estate investment guide',
            ],
            'faro' => [
                'slug' => 'faro',
                'name' => 'Faro, Portugal - Real estate investment guide',
            ],
        ],
    ],

    'about' => [
        'parent' => 'about',
        'children' => [
            /*'guilherme-barroso' => [
                'slug' => 'guilherme-barroso',
                'name' => 'Guilherme Barroso',
            ],*/
            'antonio-rebelo' => [
                'slug' => 'antonio-rebelo',
                'name' => 'António Rebelo',
            ],
            'aidan-donnelly' => [
                'slug' => 'aidan-donnelly',
                'name' => 'Aidan Donnelly',
            ],
            'tom-oconnor' => [
                'slug' => 'tom-oconnor',
                'name' => 'Tom O’Connor',
            ],
            'andrew-mcadam' => [
                'slug' => 'andrew-mcadam',
                'name' => 'Andrew McAdam',
            ],
            'aaron-tracey' => [
                'slug' => 'aaron-tracey',
                'name' => 'Aaron Tracey',
            ],
            /*'thomas-kottmann' => [
                'slug' => 'thomas-kottmann',
                'name' => 'Thomas Kottmann',
            ],*/
            /*'erica-cash' => [
                'slug' => 'erica-cash',
                'name' => 'Erica Cash',
            ],*/
            'david-horan' => [
                'slug' => 'david-horan',
                'name' => 'David Horan',
            ],
            'erwin-rodenburg' => [
                'slug' => 'erwin-rodenburg',
                'name' => 'Erwin Rodenburg',
            ],
            /*'raj-yedav' => [
                'slug' => 'raj-yedav',
                'name' => 'Raj Yedav',
            ],*/
            'carlos-henrique' => [
                'slug' => 'carlos-henrique',
                'name' => 'Carlos Henrique',
            ],
        ],
    ],

    'footer' => [
        'investment-risks' => [
            'slug' => 'investment-risks',
            'name' => 'Investment Risks',
        ],
        'privacy-policy' => [
            'slug' => 'privacy-policy',
            'name' => 'Privacy Policy',
        ],
        'legal-statement' => [
            'slug' => 'legal-statement',
            'name' => 'Legal Statement',
        ],
        'disclaimer' => [
            'slug' => 'disclaimer',
            'name' => 'Disclaimer',
        ],
    ],

];
