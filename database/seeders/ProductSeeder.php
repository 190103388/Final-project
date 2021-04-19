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
         DB::table('product')->insert(
         	[
         		[
        	'name'=>'Қыз-Жібек',
        	'price'=>' 135000',
        	'description'=>'Good',
        	'rank'=>'4',
        	'gallery'=>'https://images.satu.kz/111351851_w640_h640_komplekt-mebeli-dlya.jpg'
       			 ],
       			 [
        	'name'=>'Roza Bella ',
        	'price'=>'490000',
        	'description'=>'Good',
        	'rank'=>'4.5',
        	'gallery'=>'https://interiero.kz/upload/iblock/da4/da48ece545340ffc6419def05d1d15c8.jpg'
       			 ],
       			 [
        	'name'=>'Sakuea',
        	'price'=>'359000',
        	'description'=>'Good',
        	'rank'=>'5',
        	'gallery'=>'https://spim.ru/imgup/f25544_17294___.jpg'
       			 ],
       			 [
        	'name'=>'Версаче 2',
        	'price'=>'159000',
        	'description'=>'Good',
        	'rank'=>'3.5',
        	'gallery'=>'https://alyans-magazin.com/4843-thickbox_default/krovat-veneciya-arbor-drev.jpg'
       			 ],

        	]
     );
    }
}
