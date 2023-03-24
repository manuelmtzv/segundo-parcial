<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Category::create(["category_id" => null, "name" => "Helados", "print_order" => 1]);
    Category::create(["category_id" => null, "name" => "Nieves", "print_order" => 2]);
    Category::create(["category_id" => null, "name" => "Sabores", "print_order" => 5]);
    Category::create(["category_id" => null, "name" => "Toppings", "print_order" => 6]);
    Category::create(["category_id" => null, "name" => "Extras", "print_order" => 3]);
    Category::create(["category_id" => null, "name" => "Otros", "print_order" => 4]);
  }
}
