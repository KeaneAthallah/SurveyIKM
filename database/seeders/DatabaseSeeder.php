<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'test@example.com',
            'password' => Hash::make('111'),
        ]);

        //  Pertanyaan
        \App\Models\Questions::factory()->create([
            'no' => '1',
            'questions_name' => 'Bagaimana pendapat Saudara tentang kesesuaian
persyaratan pelayanan dengan jenis pelayanannya.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '2',
            'questions_name' => 'Bagaimana pemahaman Saudara tentang kemudahan
prosedur pelayanan di unit ini.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '3',
            'questions_name' => 'Bagaimana pendapat Saudara tentang kecepatan
waktu dalam memberikan pelayanan.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '4',
            'questions_name' => 'Bagaimana pendapat Saudara tentang kewajaran
biaya/tarif dalam pelayanan.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '5',
            'questions_name' => 'Bagaimana pendapat Saudara tentang kesesuaian
produk pelayanan antara yang tercantum dalam
standar pelayanan dengan hasil yang diberikan.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '6',
            'questions_name' => 'Bagaimana pendapat Saudara tentang kompetensi/
kemampuan petugas dalam pelayanan.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '7',
            'questions_name' => ' Bagamana pendapat saudara perilaku petugas dalam
pelayanan terkait kesopanan dan keramahan.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '8',
            'questions_name' => 'Bagaimana pendapat Saudara tentang kualitas sarana
dan prasarana.'
        ]);
        \App\Models\Questions::factory()->create([
            'no' => '9',
            'questions_name' => 'Bagaimana pendapat Saudara tentang penanganan
pengaduan pengguna layanan.'
        ]);

        //  Jawaban
        \App\Models\Answers::factory()->create([
            'questions_id' => '1',
            'name' => 'Tidak sesuai',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '1',
            'name' => 'Kurang sesuai',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '1',
            'name' => 'Sesuai',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '1',
            'name' => 'Sangat sesuai',
            'value' => '4'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '2',
            'name' => 'Tidak mudah',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '2',
            'name' => 'Kurang mudah',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '2',
            'name' => 'Mudah',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '2',
            'name' => 'Sangat mudah',
            'value' => '4'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '3',
            'name' => 'Tidak cepat',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '3',
            'name' => 'Kurang cepat',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '3',
            'name' => 'Cepat',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '3',
            'name' => 'Sangat cepat',
            'value' => '4'
        ]);

        \App\Models\Answers::factory()->create([
            'questions_id' => '4',
            'name' => 'Sangat mahal',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '4',
            'name' => 'Cukup mahal',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '4',
            'name' => 'Murah',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '4',
            'name' => 'Gratis',
            'value' => '4'
        ]);


        \App\Models\Answers::factory()->create([
            'questions_id' => '5',
            'name' => 'Tidak sesuai',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '5',
            'name' => 'Kurang sesuai',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '5',
            'name' => 'Sesuai',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '5',
            'name' => 'Sangat sesuai',
            'value' => '4'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '6',
            'name' => 'Tidak kompeten',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '6',
            'name' => 'Kurang kompeten',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '6',
            'name' => 'Kompeten',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '6',
            'name' => 'Sangat kompeten',
            'value' => '4'
        ]);


        \App\Models\Answers::factory()->create([
            'questions_id' => '7',
            'name' => 'Tidak sopan dan ramah',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '7',
            'name' => 'Kurang sopan dan ramah',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '7',
            'name' => 'Sopan dan ramah',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '7',
            'name' => 'Sangat sopan dan ramah',
            'value' => '4'
        ]);

        \App\Models\Answers::factory()->create([
            'questions_id' => '8',
            'name' => 'Buruk',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '8',
            'name' => 'Cukup',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '8',
            'name' => 'Baik',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '8',
            'name' => 'Sangat Baik',
            'value' => '4'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '9',
            'name' => 'Tidak ada',
            'value' => '1'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '9',
            'name' => 'Ada tetapi tidak berfungsi',
            'value' => '2'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '9',
            'name' => 'Berfungsi kurang maksimal',
            'value' => '3'
        ]);
        \App\Models\Answers::factory()->create([
            'questions_id' => '9',
            'name' => 'Dikelola dengan baik',
            'value' => '4'
        ]);
    }
}
