<?php

return [

    'scripts' => [
        'text' => ['before_close', 'after_open', 'before_head_close'],
    ],

    'all_site' => [
        'string' => ['copyright','inst','fb'],

        'groups' => [
            'phones' => [
                'string' => [
                    'city_ru', 'number',
                    'city_kk',
                    'city_en'
                ],
            ]
        ]
    ],

    'slider' => [
        'groups' => [
            'slide' => [
                'image' => ['slide', 'mob_slide'],
                'string' => [
                    'slide_title_ru', 'btn_text_ru', 'btn_link_ru',
                    'slide_title_kk', 'btn_text_kk', 'btn_link_kk',
                    'slide_title_en', 'btn_text_en', 'btn_link_en'
                ],
                'text' => [
                    'slide_text_ru',
                    'slide_text_kk',
                    'slide_text_en',
                ],
            ]
        ]
    ],

    'home_utility' => [
        'image' => ['img1', 'img2', 'img3', 'img4'],
        'string' => [
            'block_title_ru', 'item_title1_ru', 'item_title2_ru', 'item_title3_ru', 'item_title4_ru',
            'block_title_kk', 'item_title1_kk', 'item_title2_kk', 'item_title3_kk', 'item_title4_kk',
            'block_title_en', 'item_title1_en', 'item_title2_en', 'item_title3_en', 'item_title4_en',
        ],
        'text' => [
            'item_text1_ru', 'item_text2_ru', 'item_text3_ru', 'item_text4_ru',
            'item_text1_kk', 'item_text2_kk', 'item_text3_kk', 'item_text4_kk',
            'item_text1_en', 'item_text2_en', 'item_text3_en', 'item_text4_en',
        ],
    ],

    'home_influence' => [
        'image' => ['img1', 'img2', 'img3', 'img4', 'img5', 'img6'],
        'string' => [
            'item_title1_ru', 'item_title2_ru', 'item_title3_ru', 'item_title4_ru', 'item_title5_ru', 'item_title6_ru',
            'item_title1_kk', 'item_title2_kk', 'item_title3_kk', 'item_title4_kk', 'item_title5_kk', 'item_title6_kk',
            'item_title1_en', 'item_title2_en', 'item_title3_en', 'item_title4_en', 'item_title5_en', 'item_title6_en',
        ],
        'text' => [
            'item_text1_ru', 'item_text2_ru', 'item_text3_ru', 'item_text4_ru', 'item_text5_ru', 'item_text6_ru',
            'item_text1_kk', 'item_text2_kk', 'item_text3_kk', 'item_text4_kk', 'item_text5_kk', 'item_text6_kk',
            'item_text1_en', 'item_text2_en', 'item_text3_en', 'item_text4_en', 'item_text5_en', 'item_text6_en',
        ],
    ],

    'home_process' => [
        'string' => [
            'block_title_ru',
            'block_title_kk',
            'block_title_en',
        ],
        'text' => [
            'block_text_ru', 'bottom_text_ru',
            'block_text_kk', 'bottom_text_kk',
            'block_text_en', 'bottom_text_en',
        ],
        'groups' => [
            'home_stages' => [
                'image' => ['img'],
                'string' => [
                    'stage_title_ru', 'part1_ru', 'part2_ru',
                    'stage_title_kk', 'part1_kk', 'part2_kk',
                    'stage_title_en', 'part1_en', 'part2_en',
                ],
                'text' => [
                    'part1_text_ru', 'part2_text_ru', 'fact_ru',
                    'part1_text_kk', 'part2_text_kk', 'fact_kk',
                    'part1_text_en', 'part2_text_en', 'fact_en',
                ],
            ]
        ]
    ],

    'about' => [
        'string' => [
            'block_title1_ru', 'block_title2_ru', 'block_title3_ru',
            'block_title1_kk', 'block_title2_kk', 'block_title3_kk',
            'block_title1_en', 'block_title2_en', 'block_title3_en',
        ],
        'text' => [
            'block_text1_ru', 'block_text2_ru', 'block_text3_ru',
            'block_text1_kk', 'block_text2_kk', 'block_text3_kk',
            'block_text1_en', 'block_text2_en', 'block_text3_en',
        ],
    ],

    'composition' => [
        'string' => [
            'block_title_ru',
            'block_title_kk',
            'block_title_en',
        ],
        'text' => [
            'block_text_ru',
            'block_text_kk',
            'block_text_en',
        ],
    ],

    'utility' => [
        'image' => ['img1', 'img2', 'img3', 'img4'],
        'string' => [
            'block_title_ru', 'fact_title1_ru', 'fact_title2_ru', 'fact_title3_ru', 'fact_title4_ru', 'item_title1_ru', 'item_title2_ru', 'item_title3_ru', 'item_title4_ru',
            'block_title_kk', 'fact_title1_kk', 'fact_title2_kk', 'fact_title3_kk', 'fact_title4_kk', 'item_title1_kk', 'item_title2_kk', 'item_title3_kk', 'item_title4_kk',
            'block_title_en', 'fact_title1_en', 'fact_title2_en', 'fact_title3_en', 'fact_title4_en', 'item_title1_en', 'item_title2_en', 'item_title3_en', 'item_title4_en',
        ],
        'text' => [
            'block_text_ru', 'fact_text1_ru', 'fact_text2_ru', 'fact_text3_ru', 'fact_text4_ru', 'item_text1_ru', 'item_text2_ru', 'item_text3_ru', 'item_text4_ru',
            'block_text_kk', 'fact_text1_kk', 'fact_text2_kk', 'fact_text3_kk', 'fact_text4_kk', 'item_text1_kk', 'item_text2_kk', 'item_text3_kk', 'item_text4_kk',
            'block_text_en', 'fact_text1_en', 'fact_text2_en', 'fact_text3_en', 'fact_text4_en', 'item_text1_en', 'item_text2_en', 'item_text3_en', 'item_text4_en',
        ],
    ],

    'influence' => [
        'image' => ['block_img', 'img1', 'img2', 'img3', 'img4', 'img5', 'img6'],
        'string' => [
             'block_title_ru', 'item_title1_ru', 'item_title2_ru', 'item_title3_ru', 'item_title4_ru', 'item_title5_ru', 'item_title6_ru',
             'block_title_kk', 'item_title1_kk', 'item_title2_kk', 'item_title3_kk', 'item_title4_kk', 'item_title5_kk', 'item_title6_kk',
             'block_title_en', 'item_title1_en', 'item_title2_en', 'item_title3_en', 'item_title4_en', 'item_title5_en', 'item_title6_en',
        ],
        'text' => [
            'block_text_ru', 'item_text1_ru', 'item_text2_ru', 'item_text3_ru', 'item_text4_ru', 'item_text5_ru', 'item_text6_ru',
            'block_text_kk', 'item_text1_kk', 'item_text2_kk', 'item_text3_kk', 'item_text4_kk', 'item_text5_kk', 'item_text6_kk',
            'block_text_en', 'item_text1_en', 'item_text2_en', 'item_text3_en', 'item_text4_en', 'item_text5_en', 'item_text6_en',
        ],
    ],

    'mission' => [
        'image' => ['img'],
        'string' => [
            'block_title_ru', 'name_ru', 'under_name_ru',
            'block_title_kk', 'name_kk', 'under_name_kk',
            'block_title_en', 'name_en', 'under_name_en',
        ],
        'text' => [
            'block_text_ru',
            'block_text_kk',
            'block_text_en',
        ],
    ],

    'factory' => [
        'string' => [
            'block1_title_ru', 'block2_title_ru', 'block3_title_ru', 'block4_title_ru', 'area', 'year', 'day', 'horses', 'workers',
            'block1_title_kk', 'block2_title_kk', 'block3_title_kk', 'block4_title_kk',
            'block1_title_en', 'block2_title_en', 'block3_title_en', 'block4_title_en',
        ],
        'text' => [
            'block1_text_ru', 'block2_text_ru', 'center_text_ru', 'block3_text_ru', 'block4_text_ru',
            'block1_text_kk', 'block2_text_kk', 'center_text_kk', 'block3_text_kk', 'block4_text_kk',
            'block1_text_en', 'block2_text_en', 'center_text_en', 'block3_text_en', 'block4_text_en',
        ],
    ],

    'process' => [
        'string' => [
            'top_title_ru', 'item_title1_ru', 'item_title2_ru', 'item_title3_ru',
            'top_title_kk', 'item_title1_kk', 'item_title2_kk', 'item_title3_kk',
            'top_title_en', 'item_title1_en', 'item_title2_en', 'item_title3_en',
        ],
        'text' => [
            'top_text_ru', 'item_text1_ru', 'item_text2_ru', 'item_text3_ru',
            'top_text_kk', 'item_text1_kk', 'item_text2_kk', 'item_text3_kk',
            'top_text_en', 'item_text1_en', 'item_text2_en', 'item_text3_en',
        ],
        'groups' => [
            'part1' => [
                'string' => [
                    'item_title_ru',
                    'item_title_kk',
                    'item_title_en',
                ],
                'text' => [
                    'item_text_ru',
                    'item_text_kk',
                    'item_text_en',
                ],
            ],
            'part2' => [
                'string' => [
                    'item_title_ru',
                    'item_title_kk',
                    'item_title_en',
                ],
                'text' => [
                    'item_text_ru',
                    'item_text_kk',
                    'item_text_en',
                ],
            ],
            'part3' => [
                'string' => [
                    'item_title_ru',
                    'item_title_kk',
                    'item_title_en',
                ],
                'text' => [
                    'item_text_ru',
                    'item_text_kk',
                    'item_text_en',
                ],
            ],
        ]
    ],

    'news' => [
        'groups' => [
            'news_item' => [
                'image' => ['preview', 'preview_mob'],
                'string' => [
                    'item_title_ru', 'pub_date',
                    'item_title_kk',
                    'item_title_en',
                ],
                'text' => [
                    'item_text_ru',
                    'item_text_kk',
                    'item_text_en',
                ],
            ]
        ]
    ],

    'contacts' => [
        'text' => [
            'prod_text_ru', 'distr_text_ru',
            'prod_text_kk', 'distr_text_kk',
            'prod_text_en', 'distr_text_en',
        ],
        'groups' => [
            'cities' => [
                'string' => [
                    'item_title_ru',
                    'item_title_kk',
                    'item_title_en',
                ],
            ],
            'sellers' => [
                'string' => [
                    'item_title_ru',
                    'item_title_kk',
                    'item_title_en',
                ],
                'text' => [
                    'item_text_ru',
                    'item_text_kk',
                    'item_text_en',
                ],
                'cities' => ['superior']
            ],
            'distributors' => [
                'string' => [
                    'item_title_ru', 'lat', 'lon',
                    'item_title_kk',
                    'item_title_en',
                ],
                'text' => [
                    'item_text_ru',
                    'item_text_kk',
                    'item_text_en',
                ],
            ],
        ]
    ]

];
