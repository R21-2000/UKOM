<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'KyouHobby',
            'alamat' => 'Sentra Niaga, SN5-9 Kota Harapan Indah No.39 5 Blok, RT.10/RW.8, Pusaka Rakyat, Kec. Tarumajaya, Kabupaten Bekasi, Jawa Barat 17214',
            'telepon' => '02188898362',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/logo.png',
            'path_kartu_member' => '/img/pelanggan.png',
        ]);
    }
}
