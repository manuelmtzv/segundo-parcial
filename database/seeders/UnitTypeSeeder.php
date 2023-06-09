<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnitType;

class UnitTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    UnitType::create(["name" => "Gramos"]);
    UnitType::create(["name" => "Litros"]);
    UnitType::create(["name" => "Kilos"]);
  }
}
