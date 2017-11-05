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

];
