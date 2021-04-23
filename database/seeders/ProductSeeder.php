<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert(
         	[
         		[
        	'name'=>'Смартфон iPhone 12 64GB, Blue',
        	'price'=>' 459890',
        	'description'=>'Модель
                            iPhone 12
                            Цвет задней панели
                            синий
                            Серия смартфона
                            iPhone 12',
        	'rank'=>'4',
        	'gallery'=>'https://alser.kz/products/smartfony-apple//vjbdOi187l/smartfon-iphone-12-64gb-blue-w160.png'
       			 ],
       			 [
        	'name'=>'Смартфон iPhone 11 128GB ',
        	'price'=>'369890',
        	'description'=>'Slim Box, Yellow',
        	'rank'=>'4.5',
        	'gallery'=>'https://alser.kz/products/smartfony-apple//kwgJmtAKa/smartfon-iphone-11-128gb-yellow-w160.png'
       			 ],
       			 [
        	'name'=>'Смартфон iPhone 12 Pro Max 256GB Gold' ,
        	'price'=>'734890',
        	'description'=>'Модель
                            iPhone 12 Pro Max
                            Цвет задней панели
                            золотистый
                            Серия смартфона
                            iPhone 12 Pro Max',
        	'rank'=>'5',
        	'gallery'=>'https://alser.kz/products/smartfony-apple//9Xp1WIV4D/smartfon-iphone-12-pro-max-256gb-gold-w160.png'
       			 ],
       			 [
        	'name'=>'Смартфон iPhone 12 64GB Green',
        	'price'=>'459 890',
        	'description'=>'ЗАРЯДНОЕ УСТРОЙСТВО И НАУШНИКИ В КОМПЛЕКТ НЕ ВХОДЯТ!',
        	'rank'=>'3.5',
        	'gallery'=>'https://alser.kz/products/smartfony-apple//oXBJPU4dZ/smartfon-iphone-12-64gb-green-w160.png'
       			 ],
                 [
            'name'=>'Смартфон Apple iPhone 11 128Gb Slim Box Black',
            'price'=>'322000',
            'description'=>'- технология nfc: да - тип экрана: цветной IPS, Liquid',
            'rank'=>'3.5',
            'gallery'=>'https://cdn-kaspi.kz/shop/medias/sys_master/images/images/h90/h99/26542863613982/apple-iphone-11-128gb-slim-box-cernyj-100692388-1.png'
                 ],

        	]
     );
    }
}
