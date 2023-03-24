<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado Pequeño",
      "barcode" => "999",
      "color" => "Rosado",
      "url_image" => "",
      "print_order" => 1,
      "iva" => 16,
      "cost_base" => "20",
      "cost_min" => "18",
      "cost_max" => "25",
      "price_base" => "28",
      "price_min" => "25",
      "price_max" => "33",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);
    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado Mediano",
      "barcode" => "998",
      "color" => "Rosado",
      "url_image" => "",
      "print_order" => 1,
      "iva" => 16,
      "cost_base" => "20",
      "cost_min" => "18",
      "cost_max" => "25",
      "price_base" => "38",
      "price_min" => "35",
      "price_max" => "45",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);
    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado Grande",
      "barcode" => "997",
      "color" => "Rosado",
      "url_image" => "",
      "print_order" => 1,
      "iva" => 16,
      "cost_base" => "20",
      "cost_min" => "18",
      "cost_max" => "25",
      "price_base" => "50",
      "price_min" => "45",
      "price_max" => "55",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 2,
      "name" => "Nieve Mediana Empleado",
      "barcode" => "996",
      "color" => "Rosado",
      "url_image" => "",
      "print_order" => 1,
      "iva" => 16,
      "cost_base" => "20",
      "cost_min" => "18",
      "cost_max" => "25",
      "price_base" => "22",
      "price_min" => "20",
      "price_max" => "25",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado de Fresa Grande",
      "barcode" => "001",
      "color" => "Rosado",
      "url_image" => "",
      "print_order" => 1,
      "iva" => 16,
      "cost_base" => "20",
      "cost_min" => "18",
      "cost_max" => "25",
      "price_base" => "50",
      "price_min" => "45",
      "price_max" => "60",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado de Vainilla Mediano",
      "barcode" => "002",
      "color" => "Vainilla",
      "url_image" => "",
      "print_order" => 2,
      "iva" => 16,
      "cost_base" => "22",
      "cost_min" => "5",
      "cost_max" => "26",
      "price_base" => "40",
      "price_min" => "75",
      "price_max" => "50",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 2,
      "name" => "Nieve de Mango Mediana",
      "barcode" => "003",
      "color" => "Amarillo",
      "url_image" => "",
      "print_order" => 3,
      "iva" => 16,
      "cost_base" => "25",
      "cost_min" => "22",
      "cost_max" => "30",
      "price_base" => "40",
      "price_min" => "35",
      "price_max" => "50",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 1,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 6,
      "name" => "Cono de Helado",
      "barcode" => "004",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 4,
      "iva" => 16,
      "cost_base" => "5",
      "cost_min" => "4",
      "cost_max" => "6",
      "price_base" => "15",
      "price_min" => "12",
      "price_max" => "20",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado de Chocolate Blanco Pequeño",
      "barcode" => "005",
      "color" => "Blanco",
      "url_image" => "",
      "print_order" => 5,
      "iva" => 16,
      "cost_base" => "15",
      "cost_min" => "13",
      "cost_max" => "18",
      "price_base" => "25",
      "price_min" => "22",
      "price_max" => "30",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 1,
      "name" => "Helado de Vainilla Grande",
      "barcode" => "006",
      "color" => "Blanco",
      "url_image" => "",
      "print_order" => 6,
      "iva" => 16,
      "cost_base" => "20",
      "cost_min" => "18",
      "cost_max" => "23",
      "price_base" => "30",
      "price_min" => "27",
      "price_max" => "35",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 2,
      "name" => "Nieve de Fresa Mediana",
      "barcode" => "007",
      "color" => "Rojo",
      "url_image" => "",
      "print_order" => 7,
      "iva" => 16,
      "cost_base" => "18",
      "cost_min" => "16",
      "cost_max" => "20",
      "price_base" => "25",
      "price_min" => "23",
      "price_max" => "28",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 6,
      "name" => "Barquillo de Vainilla con Chocolate",
      "barcode" => "008",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 8,
      "iva" => 16,
      "cost_base" => "12",
      "cost_min" => "10",
      "cost_max" => "15",
      "price_base" => "20",
      "price_min" => "18",
      "price_max" => "25",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 6,
      "name" => "Sorbete de Limón Pequeño",
      "barcode" => "009",
      "color" => "Amarillo",
      "url_image" => "",
      "print_order" => 9,
      "iva" => 16,
      "cost_base" => "16",
      "cost_min" => "14",
      "cost_max" => "18",
      "price_base" => "25",
      "price_min" => "22",
      "price_max" => "30",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable" => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 2,
      "name" => "Nieve de Coco Grande",
      "barcode" => "011",
      "color" => "Blanco",
      "url_image" => "",
      "print_order" => 11,
      "iva" => 16,
      "cost_base" => "25",
      "cost_min" => "22",
      "cost_max" => "28",
      "price_base" => "32",
      "price_min" => "30",
      "price_max" => "26",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);


    //TOPPINGS id15
    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Topping de Chocolate",
      "barcode" => "012",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 10,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "10",
      "price_min" => "8",
      "price_max" => "13",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Granola",
      "barcode" => "013",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 10,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "4",
      "price_min" => "3",
      "price_max" => "5",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Granola",
      "barcode" => "014",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "4",
      "price_min" => "3",
      "price_max" => "5",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Caramelo",
      "barcode" => "015",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "8",
      "price_min" => "10",
      "price_max" => "13",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Malvaviscos",
      "barcode" => "016",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "11",
      "price_min" => "14",
      "price_max" => "18",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Galletas trituradas",
      "barcode" => "017",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "15",
      "price_min" => "18",
      "price_max" => "20",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 4,
      "name" => "Galletas trituradas",
      "barcode" => "017",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "15",
      "price_min" => "18",
      "price_max" => "20",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    //sabores
    Product::create([
      "unit_type_id" => 1,
      "category_id" => 3,
      "name" => "Vainilla",
      "barcode" => "019",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "7",
      "price_min" => "6",
      "price_max" => "9",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 3,
      "name" => "Chocolate",
      "barcode" => "020",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "7.50",
      "price_min" => "7",
      "price_max" => "8",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 3,
      "name" => "Limón",
      "barcode" => "021",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "6",
      "price_min" => "5",
      "price_max" => "7",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 3,
      "name" => "Mango",
      "barcode" => "022",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "9",
      "price_min" => "7",
      "price_max" => "12",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 3,
      "name" => "Tamarindo ",
      "barcode" => "023",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "8",
      "price_min" => "7",
      "price_max" => "10",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    //extras
    Product::create([
      "unit_type_id" => 1,
      "category_id" => 5,
      "name" => "Sabor extra",
      "barcode" => "024",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "18",
      "price_min" => "15",
      "price_max" => "20",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 6,
      "name" => "Cuchara",
      "barcode" => "025",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "2",
      "price_min" => "1",
      "price_max" => "3",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 6,
      "name" => "Vaso",
      "barcode" => "026",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "4",
      "price_min" => "3",
      "price_max" => "6",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 5,
      "name" => "Topping extra",
      "barcode" => "030",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "13",
      "price_min" => "10",
      "price_max" => "17",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);

    Product::create([
      "unit_type_id" => 1,
      "category_id" => 3,
      "name" => "Rompope",
      "barcode" => "035",
      "color" => "Marrón",
      "url_image" => "",
      "print_order" => 12,
      "iva" => 16,
      "cost_base" => "10",
      "cost_min" => "8",
      "cost_max" => "12",
      "price_base" => "13",
      "price_min" => "10",
      "price_max" => "17",
      "overprice" => "15",
      "is_saleable" => 1,
      "is_ticketable" => 1,
      "is_discountable"  => 1,
      "is_favorite" => 0,
      "is_consigment" => 0,
      "is_product" => 1,
    ]);
  }
}