<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory(100)->create();

        DB::table('products')->insert([
            'name' => 'Amazfit T-Rex Pro Smartwatch GPS 10 ATM jam tangan 100+ Sports Modes - Meteorite Black',
            'category_id' => 2,
            'description' =>
'Diameter : 47.7x47.7x13.5mm
Berat : 59,4g (dengan tali)
Lebar tali : 22 mm
Water Rasistant : 10 ATM
Layar : 1,3 ""AMOLED HD
Resolusi : 360x360
Layar sentuh : Kaca tempered + lapisan anti sidik jari
Baterai : 390 mAh
Aplikasi : Aplikasi Zepp',
            'price' => 2199000,
            'photo' => 'e9c2c8b9-6cfc-4b85-8d77-ad4672a426a4.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Eggel Valor Amoled SmartWatch',
            'category_id' => 2,
            'description' =>
'❖ GARANSI: 1 Tahun
Satisfaction Guarantee: Tidak puas, Kembalikan barang dalam 7 hari, dan dapatkan uang Anda kembali
❖ Technical Specifications:
Bluetooth Version: 5.0
Display: 1.3” AMOLED Screen
Resolution: 360 * 360 dpi
Waterproof Level: IP68
Case Material: Zinc Alloy
Stap Material: Rubber
Case Diameter: 43mm
Working Time: 5-10 days
Always on Display: 24-36 hours
Operating Temperature: -10 - 45 C',
            'price' => 499000,
            'photo' => '27e17c28-7912-44e6-bd24-6e43b2a020ae.png'
        ]);

        DB::table('products')->insert([
            'name' => 'HUAWEI WATCH GT 2 46mm SmartWatch',
            'category_id' => 2,
            'description' =>
'1. Solusi Daya Revolusioner
Seri HUAWEI WATCH GT selalu menjelajahi batas usia baterai jam tangan pintar. Dengan chip HUAWEI yang dikembangkan sendiri, Kirin A1, desain dual-chip dan teknologi hemat daya yang cerdas, akan melayani Anda siang dan malam hingga 2 minggu.

2. Pelatih Olahraga Profesional
Terobosan baru dalam pelatihan pribadi. HUAWEI WATCH GT 2 melacak latihan Anda dengan sistem penentuan posisi yang tepat dan memonitor detak jantung Anda dengan TruSeen™ 3.5 yang akurat. Ini adalah pendamping profesional untuk kegiatan indoor dan outdoor Anda.

3. Pemantauan Detak Jantung Real-time
HUAWEI TruSeen ™ sekarang ditingkatkan ke versi 3.5 untuk memberikan pengukuran pribadi detak jantung Anda secara lebih efisien dan akurat. Ditambah dengan algoritma denyut jantung AI yang cerdas, ia memonitor detak jantung Anda sepanjang hari, bahkan saat Anda tidur.

4. Pemantauan Detak Jantung Saat Renang
Berkat fitur tahan air 5ATM, HUAWEI WATCH GT 2 dapat memantau detak jantung Anda saat Anda berenang serta SWOLF, jarak, kalori yang terbakar, dan kecepatan Anda.

5. Asisten Kehidupan Anda Sehari-Hari
Untuk membuat kehidupan sehari-hari Anda lebih mudah, HUAWEI WATCH GT 2 mendukung fitur-fitur seperti Bluetooth Calling, Music dalam perangkat, Notifikasi Pesan, pelacakan tidur TruSleepTM 2.0 dan pemantauan tekanan TruRelaxTM.',
            'price' => 1799000,
            'photo' => '250c82b0-84ac-4b82-aff5-330336b52796.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Asus vivobook A416JAO FHD322 i3 1005G1',
            'category_id' => 1,
            'description' =>
'Highlights :
- MENGGUNAKAN PROCESOR INTEL GENERASI 10
- SUDAH INCLUDE OFFICE HOME STUDENT 2019
- MENGGUNAKAN STORAGE TIPE SSD

GARANSI ASUS INDONESIA 2 TAHUN

Barang 100% Baru dan Original',
            'price' => 5459000,
            'photo' => '3c16ceb9-dbe6-400f-b3d5-07212984a343.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Asus vivobook A416JAO FHD322 i3 1005G1 4GB 256ssd W10+OHS 14FHD',
            'category_id' => 1,
            'description' =>
'Card Reader 4-in-1 Card Reader
Audio Chip High Definition (HD) Audio
Speakers Stereo speakers, 1.5W x2, Dolby Audio
Camera 0.3MP with Privacy Shutter
Microphone 2x, Array
Battery Integrated 35Wh
Security Chip Firmware TPM 2.0
Fingerprint Reader None
Other Security Camera privacy shutter
MANAGEABILITY None
Base Warranty 1-year, Depot
Included Upgrade 2Y Depot/CCI -IPENTRY (ESS) (5WS0X58198)
ACCESSORIES None
CERTIFICATIONS
Green Certifications "ENERGY STAR 8.0
ErP Lot 3
RoHS compliant',
            'price' => 4099000,
            'photo' => '5bfb1374-dad2-4e7c-b819-018a7424d141.jpg'
        ]);

    }
}
