<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Admin',
            'email' => 'admin@anb.com',
            'password' => bcrypt('12345678')],
        ]);

        DB::table('chamados')->insert([
            ['descricao' => '1234',
            'status' => 'Aberto',
            'setor' => 'Suporte'],
        ]);
    }
}
