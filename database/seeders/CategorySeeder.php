<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['ps4', 'ps5', 'nintendo'];

        foreach ($data as $index => $item) {
            $category = new Category;
            $category->name = $item;
            $category->sort = $index + 1;
            $category->save();
        }
    }
}
