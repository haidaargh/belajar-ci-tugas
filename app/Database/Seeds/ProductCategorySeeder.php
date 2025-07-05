<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Laptop',
            ],
            [
                'name' => 'Printer',
            ],
        ];

        // Using Query Builder
<<<<<<< HEAD
        $this->db->table('productcategory')->insertBatch($data);
=======
        $this->db->table('product_category')->insertBatch($data);
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
    }
}
