<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasindanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $basindan = [
            [
                'id' => 1,
                'baslik' => 'Basından',
                'fotograf_ana' => '',
                'alt_baslik' => 'Arcadia Bağları',
                "fotograf1" =>"",
                "fotograf2" =>"",
                "fotograf3" =>"",
                "fotograf4" =>"",
                'aciklama' => 'Arcadia Bağlarının ilk günlerinden bu yana kadının gelişmesinin toplumun gelişmesi için kaçınılmaz olduğunun bilinciyle ekibimizin her kademesinde kadın erkek dengesine dikkat ettik. Organizasyon genelinde kadın çalışan oranımız %54, yönetici kadememizde de bu oran %50. <br> Kurucu Zeynep Arca Şallıel, Arcadia Projesi’yle 2016 yılında Garanti Bankası, Ekonomist dergisi ve Kagider tarafından verilen “Yöresinde Fark Yaratan Kadın Girişimci” ödülü olmak üzere birçok kadın girişimci ödülüne layık görüldü.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('basindan')->insert($basindan);
    }
}
