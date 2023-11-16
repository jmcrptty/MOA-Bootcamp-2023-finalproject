<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->getCategories();

        \App\Models\User::factory(2)->create();
        Supplier::factory(2)->create();
        // Category::factory(3)->create();
        Item::factory(3)->create();
        // Department::factory(2)->create();
        
    }

    public function getCategories()
    {
        $Categoriesjson = file_get_contents(database_path() . '/categories.json');
        $categories = json_decode($Categoriesjson, true)['categories'];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }
    }

}
