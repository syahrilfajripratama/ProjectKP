<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dataProspek;
use App\Models\jenisProspek;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Syahril Fajri Pratama',
            'username' => 'SyahrilFajri',
            'is_admin' => 1,
            'nip' => 123456789,
            'email' => 'syahril799@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Rahmadi Nugroho',
            'username' => 'RahmadiNugroho',
            'nip' => 123457777,
            'email' => 'rahmadiaja@gmail.com',
            'password' => bcrypt('12345')
        ]);
        jenisProspek::create([
            'prospek' => 'Asuransi Kebakaran',
            'slug' => 'kebakaran'
        ]);
        jenisProspek::create([
            'prospek' => 'Asuransi Properti',
            'slug' => 'properti'
        ]);
        jenisProspek::create([
            'prospek' => 'Asuransi Kelautan',
            'slug' => 'kelautan'
        ]);
        dataProspek::create([
            'perusahaan' => 'Kopma Unila',
            'tanggal'=> 2023-01-20,
            'waktu'=> '08:34:00',
            'client' => 'Fikri Novigar',
            'marketers_id' => 1,
            'jenisProspek_id' => 1,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quas incidunt modi amet neque ipsa totam? Reprehenderit atque sit consequuntur!'
        ]);
        dataProspek::create([
            'perusahaan' => 'Sinarmas',
            'tanggal'=> 2023-01-22,
            'waktu'=> '08:34:00',
            'client' => 'Ahmad Handica',
            'marketers_id' => 2,
            'jenisProspek_id' => 1,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quas incidunt modi amet neque ipsa totam? Reprehenderit atque sit consequuntur!'
        ]);
        dataProspek::create([
            'perusahaan' => 'Ada Kenangan',
            'tanggal'=> 2023-01-17,
            'waktu'=> '08:34:00',
            'client' => 'Gavra Alkrisanda',
            'marketers_id' => 1,
            'jenisProspek_id' => 2,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quas incidunt modi amet neque ipsa totam? Reprehenderit atque sit consequuntur!'
        ]);
        dataProspek::create([
            'perusahaan' => 'BUMN',
            'tanggal'=> 2023-01-10,
            'waktu'=> '08:34:00',
            'client' => 'Erick Thohir',
            'marketers_id' => 2,
            'jenisProspek_id' => 3,
            'is_validated' => 1,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quas incidunt modi amet neque ipsa totam? Reprehenderit atque sit consequuntur!'
        ]);
        dataProspek::create([
            'perusahaan' => 'Koperasi Liwa',
            'tanggal'=> 2023-01-16,
            'waktu'=> '08:34:00',
            'client' => 'Rendy Luthfi',
            'marketers_id' => 2,
            'jenisProspek_id' => 2,
            'is_validated' => 1,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quas incidunt modi amet neque ipsa totam? Reprehenderit atque sit consequuntur!'
        ]);
        dataProspek::create([
            'perusahaan' => 'Kebon Raya ITERA',
            'tanggal'=> 2023-01-25,
            'waktu'=> '08:34:00',
            'client' => 'Karomani',
            'marketers_id' => 1,
            'jenisProspek_id' => 2,
            'is_validated' => 1,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quas incidunt modi amet neque ipsa totam? Reprehenderit atque sit consequuntur!'
        ]);


    }
}
