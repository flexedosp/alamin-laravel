<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentModel;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan 3 berita (group_content_id = 1)
        ContentModel::insert([
            [
                'title' => 'Pemerintah Resmi Luncurkan Program Zakat Nasional 2025',
                'content' => 'Dalam acara peluncuran di Jakarta, pemerintah secara resmi meluncurkan Program Zakat Nasional 2025 yang bertujuan meningkatkan kesadaran zakat dan memperluas manfaatnya bagi masyarakat prasejahtera. Program ini akan melibatkan 5000 lembaga amil zakat di seluruh Indonesia.',
                'slug' => 'pemerintah-luncurkan-zakat-nasional-2025',
                'img_header' => 'zakat-header.jpg',
                'group_content_id' => 1,
                'created_at' => now(),
                'created_by' => 'Admin',
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Gempa Bumi 5,4 Skala Richter Guncang Kota Bandung',
                'content' => 'Gempa bumi berkekuatan 5,4 Skala Richter mengguncang Kota Bandung pada hari Senin pagi pukul 06.15 WIB. Tidak ada korban jiwa dilaporkan, tetapi beberapa bangunan mengalami kerusakan ringan, termasuk dua sekolah di wilayah Cimahi.',
                'slug' => 'gempa-bumi-54-skala-richter-guncang-bandung',
                'img_header' => 'gempa-header.jpg',
                'group_content_id' => 1,
                'created_at' => now(),
                'created_by' => 'Admin',
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Pendaftaran Siswa Baru 2025 Resmi Dibuka di Seluruh Sekolah Negeri',
                'content' => 'Pemerintah Daerah Jawa Barat telah membuka pendaftaran siswa baru untuk tahun ajaran 2025/2026 secara online mulai 1 Januari 2025. Calon peserta didik dapat mendaftar melalui portal PPDB Online dengan berbagai pilihan sekolah berdasarkan zonasi.',
                'slug' => 'pendaftaran-siswa-baru-2025-dibuka',
                'img_header' => 'pendaftaran-header.jpg',
                'group_content_id' => 1,
                'created_at' => now(),
                'created_by' => 'Admin',
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
        ]);

        // Menambahkan 3 artikel (group_content_id = 2)
        ContentModel::insert([
            [
                'title' => 'Peran Islam dalam Membentuk Budaya Kehidupan Berkelanjutan',
                'content' => 'Islam tidak hanya mengajarkan tentang ibadah ritual, tetapi juga membentuk kesadaran akan kelestarian alam. Ajaran seperti "Khalifah di bumi" dan larangan pemborosan menekankan pentingnya menjaga lingkungan sebagai kewajiban bersama.',
                'slug' => 'peran-islam-dalam-keberlanjutan-lingkungan',
                'img_header' => 'sustainability-header.jpg',
                'group_content_id' => 2,
                'created_at' => now(),
                'created_by' => 'Admin',
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Tantangan dan Peluang Di Balik Era Digital bagi Generasi Muda Muslim',
                'content' => 'Di tengah kemajuan teknologi, generasi muda muslim dihadapkan pada tantangan moral dan akhlak dalam bermedia sosial. Namun, teknologi juga membuka peluang besar untuk menyebarkan ilmu agama secara global melalui podcast, channel YouTube, dan aplikasi pembelajaran.',
                'slug' => 'tantangan-dan-peluang-era-digital-untuk-muda-muslim',
                'img_header' => 'digital-islam-header.jpg',
                'group_content_id' => 2,
                'created_at' => now(),
                'created_by' => 'Admin',
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
            [
                'title' => 'Membangun Hubungan yang Sehat dalam Keluarga Berdasarkan Nilai Islam',
                'content' => 'Islam menekankan pentingnya keharmonisan keluarga sebagai fondasi masyarakat yang kuat. Dengan menerapkan prinsip saling menghormati, berkomunikasi jujur, dan bersikap sabar, setiap anggota keluarga dapat merasa dicintai dan dihargai.',
                'slug' => 'hubungan-sehat-di-keluarga-berdasarkan-islam',
                'img_header' => 'family-header.jpg',
                'group_content_id' => 2,
                'created_at' => now(),
                'created_by' => 'Admin',
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'deleted_by' => null,
            ],
        ]);
    }
}
