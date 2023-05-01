<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'supplier_id' => 1,
                'name' => 'Сыр Чеддер',
                'description' => 'Традиционный английский сыр, отличающийся острым, пикантным вкусом и насыщенным ароматом.',
                'warehouse' => 'ул. Пушкина, д. 10, склад №3',
                'image' => 'cheddar.jpg',
                'price' => 500,
            ],
            [
                'supplier_id' => 1,
                'name' => 'Сыр Бри',
                'description' => 'Мягкий сыр с белой плесенью. Имеет кремовую текстуру и сладковатый, ореховый вкус.',
                'warehouse' => 'ул. Пушкина, д. 10, склад №3',
                'image' => 'brie.jpg',
                'price' => 700,
            ],
            [
                'supplier_id' => 2,
                'name' => 'Мороженое "Эскимо"',
                'description' => 'Классическое ванильное мороженое в глазури из темного шоколада.',
                'warehouse' => 'ул. Лермонтова, д. 5, склад №2',
                'image' => 'eskimo.jpg',
                'price' => 150,
            ],
            [
                'supplier_id' => 3,
                'name' => 'Мед натуральный',
                'description' => 'Натуральный мед с луговых цветов, собранный в экологически чистых районах.',
                'warehouse' => 'ул. Садовая, д. 15, склад №1',
                'image' => 'honey.jpg',
                'price' => 300,
            ],
            [
                'supplier_id' => 4,
                'name' => 'Паста из оливок',
                'description' => 'Натуральная паста из оливок, идеально подходит для закуски к хлебу или приготовления соусов.',
                'warehouse' => 'ул. Лесная, д. 20, склад №4',
                'image' => 'olive_paste.jpg',
                'price' => 250,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
