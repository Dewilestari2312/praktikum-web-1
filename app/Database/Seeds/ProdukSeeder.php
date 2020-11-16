<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'id' => 1,
                        'nama_produk' => 'Topi',
                        'deskripsi_produk'   => 'Ini Topi Keren'
                    ],
                    [
                        'id' => 2,
                        'nama_produk' => 'Bando',
                        'deskripsi_produk'   => 'Ini Bando Keren'
                    ],

                ];

                  $this->db->table('produk')->insertBatch($data);

                // // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                //         $data
                // );

                // // Using Query Builder
              
        }
}