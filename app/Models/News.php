<?php

namespace App\Models;

class News
{
    private static $news = [
        [
            'id' => 1,
            'title' => 'Спортивная новость 1',
            'text' => 'Подробное описание спортивной новости 1',
            'category_id' => 1,
            'slug' => 'novost_sporta_1',
        ],
        [
            'id' => 2,
            'title' => 'Спортивная новость 2',
            'text' => 'Подробное описание спортивной новости 2',
            'category_id' => 1,
            'slug' => 'novost_sporta_2',
        ],
        [
            'id' => 3,
            'title' => 'Спортивная новость 3',
            'text' => 'Подробное описание спортивной новости 3',
            'category_id' => 1,
            'slug' => 'novost_sporta_3',
        ],
        [
            'id' => 4,
            'title' => 'Политическая новость 1',
            'text' => 'Подробное описание политической новости 1',
            'category_id' => 2,
            'slug' => 'novost_politiki_1',
        ],
        [
            'id' => 5,
            'title' => 'Политическая новость 2',
            'text' => 'Подробное описание политической новости 2',
            'category_id' => 2,
            'slug' => 'novost_politiki_2',
        ],
        [
            'id' => 6,
            'title' => 'Политическая новость 3',
            'text' => 'Подробное описание политической новости 3',
            'category_id' => 2,
            'slug' => 'novost_politiki_2',
        ],
        [
            'id' => 7,
            'title' => 'Новость искусства 1',
            'text' => 'Подробное описание новости искусства 1',
            'category_id' => 3,
            'slug' => 'novost_iskusstva_1',
        ],
        [
            'id' => 8,
            'title' => 'Новость искусства 2',
            'text' => 'Подробное описание новости искусства 2',
            'category_id' => 3,
            'slug' => 'novost_iskusstva_2',
        ],
        [
            'id' => 9,
            'title' => 'Новость искусства 3',
            'text' => 'Подробное описание новости искусства 3',
            'category_id' => 3,
            'slug' => 'novost_iskusstva_3',
        ]

    ];

    public static function getNews(): array
    {
        return static::$news;
    }

    public static function getNewsId($id): ?array
    {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return null;
    }

    public static function getNewsCategoryId($category_id): ?array
    {
        $newsByCategory = [];
        foreach (static::getNews() as $news) {
            if ($news['category_id'] == $category_id) {
                $newsByCategory[] = $news;
            }
        }
        return $newsByCategory;
    }
}
