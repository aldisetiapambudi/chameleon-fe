<?php

namespace Database\Seeders;

use App\Models\CartItem;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'username' => 'testUsername',
        //     'email' => 'test@mail.com',
        //     'password' => Hash::make('test'),
        //     'token' => 'initoken',
        //     'status' => true,
        //     'is_reseller' => false,
        // ]);

        // CartItem::create([
        //     'id_pengguna' => 'c66a34f3-97fa-40b3-b9f6-a602cc1655dc',
        // ]);

        // Transaction::create([
        //     "id_pengguna" => "c66a34f3-97fa-40b3-b9f6-a602cc1655dc",
        //     "id_alamat" => "d262bdd8-73c1-11ea-92f0-00163e398865",
        //     "waktu_transaksi" => date("Y-m-d H:i:s"),
        //     "waktu_expired" => date("Y-m-d H:i:s"),
        //     "total_harga" => 60200,
        //     "total_ongkir" => 12000,
        //     "status_transaksi" => "kirim",
        //     "bukti_transfer" => "",
        //     "no_resi" => "12312313",
        //     "kurir" => "jnt",
        //     "catatan" => ""
        // ]);

        // Product::create([
        //     'nama_produk' => "aaaaaa",
        //     "deskripsi_produk" => "lorem",
        //     "stok_produk" => 0,
        //     "harga_produk" => 0,
        //     "id_kategori" => "c6e0b913-07d9-11ec-b5c6-020067939a31",
        //     "warna_produk" => "",
        //     "size_produk" => "S,M,L",
        //     "thumbnail_produk" => "CC-18-202108300727-003_0.jpg",
        //     "berat_produk" => 0,
        //     "diskon_produk" => 0,
        //     "label_produk" => "new",
        //     "video_link" => ""
        // ]);
    }
}
