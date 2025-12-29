<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa dummy data untuk model Content
        Content::insert([
            [
                'title' => 'Pengantar Islam',
                'content' => 'Islam adalah agama yang diturunkan oleh Allah SWT melalui Nabi Muhammad SAW. Islam mengajarkan ajaran tentang tauhid, akhlak, dan kehidupan akhirat.',
                'group_content_id' => 1,
                'created_at' => now(),
                'created_by' => 1,
                'updated_at' => now(),
                'updated_by' => 1,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Sejarah Masjid Al-Amin',
                'content' => 'Masjid Al-Amin dibangun pada tahun 1985 di Petukangan, Jakarta Selatan. Dengan kapasitas 500 jamaah, masjid ini menjadi pusat kegiatan keagamaan masyarakat sekitar.',
                'group_content_id' => 2,
                'created_at' => now(),
                'created_by' => 2,
                'updated_at' => now(),
                'updated_by' => 2,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Tata Cara Shalat Lima Waktu',
                'content' => 'Shalat lima waktu meliputi Shubuh, Dzuhur, Ashar, Maghrib, dan Isya. Setiap shalat memiliki rakaat dan bacaan yang berbeda-beda.',
                'group_content_id' => 3,
                'created_at' => now(),
                'created_by' => 1,
                'updated_at' => now(),
                'updated_by' => 1,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Kerukunan Beragama di Indonesia',
                'content' => 'Indonesia dikenal sebagai negara dengan kerukunan beragama yang tinggi. Berbagai agama hidup berdampingan secara damai.',
                'group_content_id' => 4,
                'created_at' => now(),
                'created_by' => 3,
                'updated_at' => now(),
                'updated_by' => 3,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Manfaat Bacaan Doa Harian',
                'content' => 'Membaca doa harian dapat mempererat hubungan dengan Allah SWT dan membantu menjaga konsentrasi dalam aktivitas sehari-hari.',
                'group_content_id' => 1,
                'created_at' => now(),
                'created_by' => 2,
                'updated_at' => now(),
                'updated_by' => 2,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
        ]);
    }
}
