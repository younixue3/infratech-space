<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Project;
use App\Models\History;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Services
        $services = [
            [
                'title' => 'Konstruksi & Teknik Sipil',
                'description' => 'Pembangunan jalan, jembatan, dan fasilitas umum dengan standar keamanan tertinggi dan material berkualitas unggul.',
                'icon' => 'engineering',
                'features' => [
                    'Pembangunan Jalan & Jembatan',
                    'Fasilitas Umum & Sosial',
                    'Konstruksi Struktur Baja & Beton',
                    'Standar Keselamatan Internasional'
                ],
                'order' => 1
            ],
            [
                'title' => 'Infrastruktur IT & Jaringan',
                'description' => 'Sistem jaringan serat optik (fiber optic) end-to-end, instalasi perangkat telekomunikasi, dan pusat data modern terintegrasi.',
                'icon' => 'cloud_sync',
                'features' => [
                    'Jaringan Serat Optik Regional',
                    'Pembangunan Pusat Data Modern',
                    'Sistem Interkoneksi Berkecepatan Tinggi',
                    'Manajemen & Keamanan Cyber'
                ],
                'order' => 2
            ],
            [
                'title' => 'Energi Terbarukan',
                'description' => 'Solusi panel surya (photovoltaic) skala industri/komersial dan manajemen efisiensi energi yang ramah lingkungan.',
                'icon' => 'solar_power',
                'features' => [
                    'Instalasi Panel Surya Skala Besar',
                    'Audit & Manajemen Efisiensi Energi',
                    'Sistem Penyimpanan Daya Baterai (ESS)',
                    'Integrasi Sistem Energi Hijau Mandiri'
                ],
                'order' => 3
            ],
            [
                'title' => 'Manajemen Proyek',
                'description' => 'Konsultasi perencanaan, estimasi anggaran (RAB), dan pengawasan proyek profesional guna menjamin presisi, ketepatan waktu, dan efisiensi biaya.',
                'icon' => 'architecture',
                'features' => [
                    'Perencanaan Teknis Detail (DED)',
                    'Pengawasan & Supervisi Lapangan',
                    'Manajemen Risiko & Pengendalian Biaya',
                    'Studi Kelayakan & Analisis Dampak'
                ],
                'order' => 4
            ]
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => Str::slug($service['title'])],
                [
                    'title' => $service['title'],
                    'description' => $service['description'],
                    'icon' => $service['icon'],
                    'features' => $service['features'],
                    'order' => $service['order']
                ]
            );
        }

        // Seed Projects
        $projects = [
            [
                'title' => 'Jembatan Mahakam IV Expansion',
                'category' => 'Infrastruktur Sipil',
                'client' => 'Pemerintah Provinsi Kaltim',
                'location' => 'Samarinda',
                'description' => 'Pembangunan dan ekspansi struktur penopang Jembatan Mahakam IV Samarinda guna meningkatkan kapasitas logistik dan kelancaran mobilitas antar wilayah.',
                'image_url' => '/images/project_bridge.png',
                'year' => 2021,
                'order' => 1,
                'featured' => true
            ],
            [
                'title' => 'Borneo Digital Gateway',
                'category' => 'Teknologi Informasi',
                'client' => 'Kementerian Komunikasi dan Digital',
                'location' => 'Balikpapan',
                'description' => 'Penyediaan interkoneksi jaringan serat optik backbone berkapasitas tinggi bersertifikasi Tier-3 untuk mendukung ekosistem smart city di area IKN.',
                'image_url' => '/images/project_datacenter.png',
                'year' => 2023,
                'order' => 2,
                'featured' => true
            ],
            [
                'title' => 'Kawasan Industri Kariangau Development',
                'category' => 'Urban Development',
                'client' => 'PT Kariangau Interport',
                'location' => 'Kaltim',
                'description' => 'Perencanaan jalan beton bertulang (rigid pavement) serta sistem drainase terpadu di kawasan pelabuhan logistik Kariangau Balikpapan.',
                'image_url' => '/images/project_industrial.png',
                'year' => 2022,
                'order' => 3,
                'featured' => true
            ]
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => Str::slug($project['title'])],
                [
                    'title' => $project['title'],
                    'description' => $project['description'],
                    'category' => $project['category'],
                    'client' => $project['client'],
                    'location' => $project['location'],
                    'image_url' => $project['image_url'],
                    'year' => $project['year'],
                    'order' => $project['order'],
                    'featured' => $project['featured']
                ]
            );
        }

        // Seed Histories (Timeline)
        $histories = [
            [
                'year' => 2018,
                'title' => 'Pendirian & Langkah Awal',
                'description' => 'Infratech Borneo Network resmi didirikan di Balikpapan dengan fokus awal pada penyediaan solusi instalasi jaringan serat optik untuk sektor industri perminyakan dan gas.',
                'order' => 1
            ],
            [
                'year' => 2020,
                'title' => 'Ekspansi Regional & Sipil',
                'description' => 'Memperluas jangkauan layanan ke seluruh provinsi di Kalimantan dan mulai menangani proyek sipil strategis penunjang fasilitas telekomunikasi nasional.',
                'order' => 2
            ],
            [
                'year' => 2023,
                'title' => 'Pilar Digital Ibu Kota Nusantara',
                'description' => 'Terpilih sebagai salah satu mitra kunci dalam instalasi jaringan serat optik smart city pendukung ekosistem digital Ibu Kota Nusantara (IKN).',
                'order' => 3
            ]
        ];

        foreach ($histories as $history) {
            History::updateOrCreate(
                ['year' => $history['year']],
                [
                    'title' => $history['title'],
                    'description' => $history['description'],
                    'order' => $history['order']
                ]
            );
        }
    }
}
