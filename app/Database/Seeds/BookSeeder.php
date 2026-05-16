<?php

// Dibuat oleh : Nurtyasto Hadi

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'title'     => 'Belajar PHP',
                'author'    => 'Andi',
                'publisher' => 'Informatika',
                'year'      => '2022',
            ],

            [
                'title'     => 'CodeIgniter 4',
                'author'    => 'Budi',
                'publisher' => 'Gramedia',
                'year'      => '2023',
            ],

        ];

        $this->db->table('books')->insertBatch($data);
    }
}