<?php

use App\Models\Products;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 191)->default('Standart');
            $table->string('serial', 191)->default('Standart');
            $table->string('modal', 191)->default('Standart');
            $table->string('engine', 191)->default('Standart');
            $table->string('year', 191)->default('Standart');
            $table->string('packet', 191)->default('Standart');
            $table->string('category', 191)->default('Standart');
            $table->string('product_name', 191)->default('Standart');
            $table->string('title', 191)->default('Standart');
            $table->string('path', 191)->default('Standart');
            $table->timestamps();
        });
        if (Schema::hasTable('products')) {
            $data = [
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A3",
                    "engine" => "1.5 FSI",
                    "year" => "2022",
                    "packet" => "Sedan",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A3",
                    "engine" => "1.0 FSI",
                    "year" => "2022",
                    "packet" => "Sportback",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A3",
                    "engine" => "1.5 FSI",
                    "year" => "2020",
                    "packet" => "Sedan",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A4",
                    "engine" => "2.0 FSI",
                    "year" => "2022",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A4",
                    "engine" => "2.0 TDI",
                    "year" => "2021",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A6",
                    "engine" => "2.0 FSI",
                    "year" => "2020",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "A",
                    "modal" => "A6",
                    "engine" => "3.0 TDI",
                    "year" => "2019",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Audi",
                    "serial" => "Q",
                    "modal" => "Q5",
                    "engine" => "2.0 TDI",
                    "year" => "2020",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X2",
                    "engine" => "1.5 M",
                    "year" => "2021",
                    "packet" => "Sport",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X3",
                    "engine" => "2.0",
                    "year" => "2020",
                    "packet" => "xDrive",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X3",
                    "engine" => "2.0",
                    "year" => "2018",
                    "packet" => "xDrive",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X3",
                    "engine" => "1.6",
                    "year" => "2018",
                    "packet" => "sDrive",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X4",
                    "engine" => "2.0",
                    "year" => "2018",
                    "packet" => "xDrive",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X4",
                    "engine" => "2.0",
                    "year" => "2017",
                    "packet" => "X-Line AT",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X4",
                    "engine" => "2.0",
                    "year" => "2017",
                    "packet" => "Sport AT",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X6",
                    "engine" => "2.0",
                    "year" => "2018",
                    "packet" => "xDrive",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X6",
                    "engine" => "3.0",
                    "year" => "2017",
                    "packet" => "Pure Luxury AT",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "BMW",
                    "serial" => "X",
                    "modal" => "X6",
                    "engine" => "3.0",
                    "year" => "2016",
                    "packet" => "Pure Luxury AT",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Golf",
                    "engine" => "1.0",
                    "year" => "2022",
                    "packet" => " Impression",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Golf",
                    "engine" => "1.0",
                    "year" => "2021",
                    "packet" => " Life DSG",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Golf",
                    "engine" => "1.0",
                    "year" => "2020",
                    "packet" => "Comfortline DSG",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Polo",
                    "engine" => "1.0 TSI",
                    "year" => "2020",
                    "packet" => "Comfortline",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Polo",
                    "engine" => "1.6",
                    "year" => "2019",
                    "packet" => "Comfortline DSG",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Polo",
                    "engine" => "1.0",
                    "year" => "2018",
                    "packet" => "Trendline",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Passat",
                    "engine" => "1.5",
                    "year" => "2022",
                    "packet" => "Business",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Passat",
                    "engine" => "1.5",
                    "year" => "2022",
                    "packet" => "Elegance",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Passat",
                    "engine" => "2.0 TDI",
                    "year" => "2021",
                    "packet" => "Business DSG",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volkswagen",
                    "serial" => "Standart",
                    "modal" => "Passat",
                    "engine" => "2.0 TSI",
                    "year" => "2020",
                    "packet" => "Elegance DSG",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S90",
                    "engine" => "2.0",
                    "year" => "2020",
                    "packet" => "Inscription Plus",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S90",
                    "engine" => "2.0",
                    "year" => "2020",
                    "packet" => "Momentum",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S90",
                    "engine" => "2.0",
                    "year" => "2019",
                    "packet" => "R-Design",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S80",
                    "engine" => "2.0",
                    "year" => "2016",
                    "packet" => "Advance",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S80",
                    "engine" => "2.0",
                    "year" => "2015",
                    "packet" => "Advance",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S80",
                    "engine" => "1.6",
                    "year" => "2014",
                    "packet" => "Premium Powershift",
                    "category" => "Motor Parçası Deneme",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "S",
                    "modal" => "S70",
                    "engine" => "2.4 140 HP",
                    "year" => "2000",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "V",
                    "modal" => "V50",
                    "engine" => "1.6",
                    "year" => "2012",
                    "packet" => "Drive Start-Stop",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "V",
                    "modal" => "V70",
                    "engine" => "1.6",
                    "year" => "2014",
                    "packet" => "Advance Powershift",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ],
                [
                    "brand" => "Volvo",
                    "serial" => "V",
                    "modal" => "V90",
                    "engine" => "2.0",
                    "year" => "2017",
                    "packet" => "Standart",
                    "category" => "Motor Parçası",
                    "product_name" => "Hava Filtesi",
                    "title" => "Title",
                    "path" => "havafiltresi.jpg"
                ]
            ];
            foreach ($data as  $item) {
                $new = new Products();
                $new->brand = $item['brand'];
                $new->serial = $item['serial'];
                $new->modal = $item['modal'];
                $new->engine = $item['engine'];
                $new->year = $item['year'];
                $new->packet = $item['packet'];
                $new->category = $item['category'];
                $new->product_name = $item['product_name'];
                $new->title = $item['title'];
                $new->path = $item['path'];
                $new->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
