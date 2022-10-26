<?php

namespace App\Models;

class Categories
{
    private static $categories = [
        [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport_news'
        ],
        [
            'id' => 2,
            'title' => 'Политика',
            'slug' => 'politic_news',
        ],
        [
            'id' => 3,
            'title' => 'Искусство',
            'slug' => 'art_news',
        ]
    ];

    public static function getCategories(): array
    {
        return static::$categories;
    }

    public static function getCategoriesId($id): ?array
    {
        foreach (static::getCategories() as $categories) {
            if ($categories['id'] == $id) {
                return $categories;
            }
        }
        return null;
    }
}
