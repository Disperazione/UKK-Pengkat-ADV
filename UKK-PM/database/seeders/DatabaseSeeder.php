<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
        DB::table('petugas')->insert([
            'nama_petugas' => 'Host',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'telp' => '082882828',
            'level' => 'admin'
        ]);
        DB::table('petugas')->insert([
            'nama_petugas' => 'Benjamin',
            'username' => 'petugas',
            'password' => Hash::make('petugas'),
            'telp' => '082882828',
            'level' => 'petugas'
        ]);
        DB::table('masyarakat')->insert([
            'nik' => '023234323',
            'nama' => 'Masyarakat1',
            'username' => 'masyarakat1',
            'password' => Hash::make('password'),
            'telp' => '08121311226',
        ]);
        DB::table('masyarakat')->insert([
            'nik' => '023234323',
            'nama' => 'Masyarakat2',
            'username' => 'masyarakat2',
            'password' => Hash::make('password'),
            'telp' => '08121311226',
        ]);
        DB::table('masyarakat')->insert([
            'nik' => '023234323',
            'nama' => 'Masyarakat3',
            'username' => 'masyarakat3',
            'password' => Hash::make('password'),
            'telp' => '08121311226',
        ]);

        $mass = [1,2,3];
        $foto = ['iphos11.jpg','chrolo.jpg','linux.png'];
        $faker = Faker::create('id_ID');            
            for ($i=0; $i<6; $i++) {
                Pengaduan::create(
                [
                    'tgl_pengaduan' => Carbon::now(),
                    'id_masyarakat' => $faker->randomElement($mass),
                    'isi_laporan' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially uncha",
                    'judul_laporan' => $faker->slug,
                    'foto' => $faker->randomElement($foto),
                    'status' => $faker->randomElement(array('proses','0')),
                    'created_at' => Carbon::now(),
                ]
                 );
             }
    }
}
