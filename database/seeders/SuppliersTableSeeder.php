<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'company_name' => 'ООО "Поставщик 1"',
                'company_code' => '123456',
                'phone_number' => '+7 (123) 456-78-90',
                'address' => 'г. Москва, ул. Ленина, д. 1',
            ],
            [
                'company_name' => 'ИП "Поставщик 2"',
                'company_code' => '654321',
                'phone_number' => '+7 (123) 456-78-91',
                'address' => 'г. Санкт-Петербург, ул. Пушкина, д. 2',
            ],
            [
                'company_name' => 'ООО "Поставщик 3"',
                'company_code' => '789012',
                'phone_number' => '+7 (123) 456-78-92',
                'address' => 'г. Екатеринбург, ул. Лермонтова, д. 3',
            ],
            [
                'company_name' => 'ООО "Поставщик 4"',
                'company_code' => '901234',
                'phone_number' => '+7 (123) 456-78-93',
                'address' => 'г. Новосибирск, ул. Толстого, д. 4',
            ],
            [
                'company_name' => 'ООО "Поставщик 5"',
                'company_code' => '345678',
                'phone_number' => '+7 (123) 456-78-94',
                'address' => 'г. Краснодар, ул. Гоголя, д. 5',
            ],
        ]);
    }
}
