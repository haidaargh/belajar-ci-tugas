<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
            ],
            
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
<<<<<<< HEAD
        $this->forge->createTable('productcategory');
=======
        $this->forge->createTable('product_category');
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
    }

    public function down()
    {
<<<<<<< HEAD
        $this->forge->dropTable('productcategory');
=======
        $this->forge->dropTable('product_category');
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
    }
}
