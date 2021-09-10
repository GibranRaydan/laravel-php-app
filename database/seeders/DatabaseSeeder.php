<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Product;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        $brands = [
            [
                'id' => 1, 'name' => 'Nike', 'reference' => 'AABB2016880', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'id' => 2, 'name' => 'Adidas', 'reference' => 'AABB2016881', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'id' => 3, 'name' => 'Puma', 'reference' => 'AABB2016882', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'id' => 4, 'name' => 'Asics', 'reference' => 'AABB2016883', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'id' => 5, 'name' => 'Reebok', 'reference' => 'AABB2016884', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'id' => 6, 'name' => 'Fila', 'reference' => 'AABB2016885', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'id' => 7, 'name' => 'Kappa', 'reference' => 'AABB2016886', 'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
        ];

        $products = [
            [
                'id' => 1, 'name' => 'Camisa S1', 'size' => 'S', 'comments' => 'Roja y Azul', 'quantity' => 10, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 1
            ],
            [
                'id' => 2, 'name' => 'Camisa M1', 'size' => 'M', 'comments' => 'Roja y Azul', 'quantity' => 36, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 1
            ],
            [
                'id' => 3, 'name' => 'Camisa L1', 'size' => 'L', 'comments' => 'Roja y Azul', 'quantity' => 14, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 1
            ],
            [
                'id' => 4, 'name' => 'Pantalon S2', 'size' => 'S', 'comments' => 'Negra y Azul, pantalon largo', 'quantity' => 25, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 2
            ],
            [
                'id' => 5, 'name' => 'Pantalon M2', 'size' => 'M', 'comments' => 'Roja y Azul, pantalon corto', 'quantity' => 39, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 2
            ],
            [
                'id' => 6, 'name' => 'Pantalon L2', 'size' => 'L', 'comments' => 'Negra y Amarilla, pantalon largo', 'quantity' => 14, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 2
            ],
            [
                'id' => 7, 'name' => 'Camisa S3', 'size' => 'S', 'comments' => 'Negra y Azul', 'quantity' => 25, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 3
            ],
            [
                'id' => 8, 'name' => 'Camisa M3', 'size' => 'M', 'comments' => 'Roja y Azul', 'quantity' => 39, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 3
            ],
            [
                'id' => 9, 'name' => 'Camisa L3', 'size' => 'L', 'comments' => 'Negra y Amarilla', 'quantity' => 14, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 3
            ],
            [
                'id' => 10, 'name' => 'Zapatos S4', 'size' => 'S', 'comments' => 'Negra y Azul, talla 40', 'quantity' => 56, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 4
            ],
            [
                'id' => 11, 'name' => 'Zapatos M4', 'size' => 'M', 'comments' => 'Roja y Azul, talla 42', 'quantity' => 30, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 4
            ],
            [
                'id' => 12, 'name' => 'Camisa L4', 'size' => 'L', 'comments' => 'Negra y Amarilla, talla 46', 'quantity' => 7, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 4
            ],
            [
                'id' => 13, 'name' => 'Zapatos S5', 'size' => 'S', 'comments' => 'Negra y Azul, talla 40', 'quantity' => 31, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 5
            ],
            [
                'id' => 14, 'name' => 'Zapatos M5', 'size' => 'M', 'comments' => 'Roja y Azul, talla 42', 'quantity' => 40, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 5
            ],
            [
                'id' => 15, 'name' => 'Camisa L5', 'size' => 'L', 'comments' => 'Negra y Amarilla', 'quantity' => 5, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 5
            ],
            [
                'id' => 16, 'name' => 'Zapatos M6', 'size' => 'M', 'comments' => 'Roja y Azul, talla 42', 'quantity' => 35, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 6
            ],
            [
                'id' => 17, 'name' => 'Camisa L6', 'size' => 'L', 'comments' => 'Negra y Amarilla, talla 46', 'quantity' => 7, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 6
            ],
            [
                'id' => 18, 'name' => 'Zapatos S6', 'size' => 'S', 'comments' => 'Negra y Azul, talla 40', 'quantity' => 45, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 6
            ],
            [
                'id' => 19, 'name' => 'Pantalon L7', 'size' => 'L', 'comments' => 'Negra y Amarilla, pantalon largo', 'quantity' => 14, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 7
            ],
            [
                'id' => 20, 'name' => 'Camisa S7', 'size' => 'S', 'comments' => 'Negra y Azul', 'quantity' => 25, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 7
            ],
            [
                'id' => 21, 'name' => 'Camisa M7', 'size' => 'M', 'comments' => 'Roja y Azul', 'quantity' => 39, 'created_at' => $dateNow, 'updated_at' => $dateNow, 'brand_id' => 7
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create(['id' => $brand['id'], 'name' => $brand['name'], 'reference' => $brand['reference'], 'created_at' => $brand['created_at'], 'updated_at' => $brand['updated_at']]);
        }

        foreach ($products as $product) {
            Product::create(['id' => $product['id'], 'name' => $product['name'], 'size' => $product['size'], 'comments' => $product['comments'], 'quantity' => $product['quantity'], 'created_at' => $product['created_at'], 'updated_at' => $product['updated_at'], 'brand_id' => $product['brand_id'],]);
        }
    }
}
