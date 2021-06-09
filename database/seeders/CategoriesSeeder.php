<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Cà Phê';
        $category->save();

        $category = new Category();
        $category->name = 'Kem';
        $category->save();

        $category = new Category();
        $category->name = 'Sinh tố';
        $category->save();
    }
}
