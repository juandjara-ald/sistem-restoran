<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Default 2 Role
        User::create([
            'name' => 'Administrator Resto',
            'email' => 'admin@resto.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Kasir Utama',
            'email' => 'kasir@resto.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
        ]);

        // 2. Kategori Menu Awal
        $makanan = Category::create(['nama_kategori' => 'Makanan Berat']);
        $minuman = Category::create(['nama_kategori' => 'Minuman']);
        $camilan = Category::create(['nama_kategori' => 'Camilan']);

        // 3. Contoh Menu Awal
        Menu::create([
            'category_id' => $makanan->id,
            'nama_menu' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'stok' => 30,
            'deskripsi' => 'Nasi goreng dengan telur mata sapi, ayam suwir, dan acar.',
        ]);

        Menu::create([
            'category_id' => $makanan->id,
            'nama_menu' => 'Ayam Bakar Madu',
            'harga' => 30000,
            'stok' => 20,
            'deskripsi' => 'Ayam bakar bumbu madu lengkap dengan nasi putih dan sambal.',
        ]);

        Menu::create([
            'category_id' => $minuman->id,
            'nama_menu' => 'Es Teh Manis',
            'harga' => 6000,
            'stok' => 50,
            'deskripsi' => 'Teh melati segar disajikan dingin.',
        ]);

        Menu::create([
            'category_id' => $camilan->id,
            'nama_menu' => 'Kentang Goreng',
            'harga' => 15000,
            'stok' => 25,
            'deskripsi' => 'Kentang goreng renyah dengan saus sambal dan mayones.',
        ]);
    }
}