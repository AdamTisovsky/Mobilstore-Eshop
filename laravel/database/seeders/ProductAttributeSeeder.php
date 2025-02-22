<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductAttribute;

class ProductAttributeSeeder extends Seeder
{
    
    public function run(): void
    {
        ProductAttribute::insert([
            [
                'product_id' => 2,
                'attribute_name' => "Farba",
                'attribute_value' => "Modrá",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 2,
                'attribute_name' => "Úložisko",
                'attribute_value' => "256GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 2,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Apple",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 2,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "12 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 2,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "IOS 16",
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'product_id' => 3,
                'attribute_name' => "Farba",
                'attribute_value' => "Modrá",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 3,
                'attribute_name' => "Úložisko",
                'attribute_value' => "128GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 3,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Apple",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 3,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "12 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 3,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "IOS 15",
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'product_id' => 4,
                'attribute_name' => "Farba",
                'attribute_value' => "Fialová",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 4,
                'attribute_name' => "Úložisko",
                'attribute_value' => "128GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 4,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Apple",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 4,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "12 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 4,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "IOS 14",
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'product_id' => 5,
                'attribute_name' => "Farba",
                'attribute_value' => "Modrá",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 5,
                'attribute_name' => "Úložisko",
                'attribute_value' => "128GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 5,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Apple",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 5,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "12 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 5,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "IOS 13",
                'created_at' => now(),
                'updated_at' => now()
            ],


            // Samsung S24 Ultra
            [
                'product_id' => 1,
                'attribute_name' => "Farba",
                'attribute_value' => "Čierna",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 1,
                'attribute_name' => "Úložisko",
                'attribute_value' => "256GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 1,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Samsung",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 1,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "200 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 1,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "Android 14",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Samsung S23
            [
                'product_id' => 6,
                'attribute_name' => "Farba",
                'attribute_value' => "Čierna",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 6,
                'attribute_name' => "Úložisko",
                'attribute_value' => "256GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 6,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Samsung",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 6,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "50 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 6,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "Android 13",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Samsung S25 Ultra
            [
                'product_id' => 7,
                'attribute_name' => "Farba",
                'attribute_value' => "Čierna",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 7,
                'attribute_name' => "Úložisko",
                'attribute_value' => "1TB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 7,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Samsung",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 7,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "200 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 7,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "Android 15",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Samsung A55
            [
                'product_id' => 8,
                'attribute_name' => "Farba",
                'attribute_value' => "Čierna",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 8,
                'attribute_name' => "Úložisko",
                'attribute_value' => "128GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 8,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Samsung",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 8,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "50 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 8,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "Android 14",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Samsung A35
            [
                'product_id' => 9,
                'attribute_name' => "Farba",
                'attribute_value' => "Čierna",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 9,
                'attribute_name' => "Úložisko",
                'attribute_value' => "128GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 9,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Samsung",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 9,
                'attribute_name' => "Rozlíšenie fotoaparátu",
                'attribute_value' => "50 Mpix",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 9,
                'attribute_name' => "Verzia operačného systému",
                'attribute_value' => "Android 14",
                'created_at' => now(),
                'updated_at' => now()
            ],




            





            [
                'product_id' => 10,
                'attribute_name' => "Uhlopriečka obrazovky",
                'attribute_value' => "139cm",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 10,
                'attribute_name' => "Uhlopriečka v palcoch",
                'attribute_value' => "55 palcov",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 10,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "LG",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 10,
                'attribute_name' => "Druh televízorov",
                'attribute_value' => "OLED",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 10,
                'attribute_name' => "Rozlíšenie",
                'attribute_value' => "3840 x 2160",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Samsung QN90B Neo QLED
            [
                'product_id' => 11,
                'attribute_name' => "Uhlopriečka obrazovky",
                'attribute_value' => "165cm",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' =>11,
                'attribute_name' => "Uhlopriečka v palcoch",
                'attribute_value' => "65 palcov",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 11,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Samsung",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 11,
                'attribute_name' => "Druh televízorov",
                'attribute_value' => "Neo QLED",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 11,
                'attribute_name' => "Rozlíšenie",
                'attribute_value' => "3840 x 2160",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Vizio P-Series Quantum
            [
                'product_id' => 12,
                'attribute_name' => "Uhlopriečka obrazovky",
                'attribute_value' => "152cm",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 12,
                'attribute_name' => "Uhlopriečka v palcoch",
                'attribute_value' => "60 palcov",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 12,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Vizio",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 12,
                'attribute_name' => "Druh televízorov",
                'attribute_value' => "Quantum LED",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 12,
                'attribute_name' => "Rozlíšenie",
                'attribute_value' => "3840 x 2160",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // TCL 6-Series R646
            [
                'product_id' => 13,
                'attribute_name' => "Uhlopriečka obrazovky",
                'attribute_value' => "140cm",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 13,
                'attribute_name' => "Uhlopriečka v palcoch",
                'attribute_value' => "55 palcov",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 13,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "TCL",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 13,
                'attribute_name' => "Druh televízorov",
                'attribute_value' => "QLED",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 13,
                'attribute_name' => "Rozlíšenie",
                'attribute_value' => "3840 x 2160",
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Sony A8H OLED
            [
                'product_id' => 14,
                'attribute_name' => "Uhlopriečka obrazovky",
                'attribute_value' => "164cm",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 14,
                'attribute_name' => "Uhlopriečka v palcoch",
                'attribute_value' => "65 palcov",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 14,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Sony",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 14,
                'attribute_name' => "Druh televízorov",
                'attribute_value' => "OLED",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 14,
                'attribute_name' => "Rozlíšenie",
                'attribute_value' => "3840 x 2160",
                'created_at' => now(),
                'updated_at' => now()
            ],




            [
                'product_id' => 15,
                'attribute_name' => "Vyrobca",
                'attribute_value' => "Apple",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 15,
                'attribute_name' => "Operačný systém",
                'attribute_value' => "macOS",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 15,
                'attribute_name' => "Veľkosť operačnej pamäte",
                'attribute_value' => "8GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 15,
                'attribute_name' => "Úložisko",
                'attribute_value' => "256GB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_id' => 15,
                'attribute_name' => "Výdrž batérie",
                'attribute_value' => "18 hodín",
                'created_at' => now(),
                'updated_at' => now()
            ],







// Dell XPS 13
[
    'product_id' => 16,
    'attribute_name' => "Vyrobca",
    'attribute_value' => "Dell",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 16,
    'attribute_name' => "Operačný systém",
    'attribute_value' => "Windows 11",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 16,
    'attribute_name' => "Veľkosť operačnej pamäte",
    'attribute_value' => "16GB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 16,
    'attribute_name' => "Úložisko",
    'attribute_value' => "512GB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 16,
    'attribute_name' => "Výdrž batérie",
    'attribute_value' => "14 hodín",
    'created_at' => now(),
    'updated_at' => now()
],

// HP Spectre x360
[
    'product_id' => 17,
    'attribute_name' => "Vyrobca",
    'attribute_value' => "HP",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 17,
    'attribute_name' => "Operačný systém",
    'attribute_value' => "Windows 11",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 17,
    'attribute_name' => "Veľkosť operačnej pamäte",
    'attribute_value' => "16GB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 17,
    'attribute_name' => "Úložisko",
    'attribute_value' => "1TB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 17,
    'attribute_name' => "Výdrž batérie",
    'attribute_value' => "17 hodín",
    'created_at' => now(),
    'updated_at' => now()
],

// Lenovo ThinkPad X1 Carbon Gen 10
[
    'product_id' => 18,
    'attribute_name' => "Vyrobca",
    'attribute_value' => "Lenovo",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 18,
    'attribute_name' => "Operačný systém",
    'attribute_value' => "Windows 11 Pro",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 18,
    'attribute_name' => "Veľkosť operačnej pamäte",
    'attribute_value' => "32GB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 18,
    'attribute_name' => "Úložisko",
    'attribute_value' => "1TB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 18,
    'attribute_name' => "Výdrž batérie",
    'attribute_value' => "15 hodín",
    'created_at' => now(),
    'updated_at' => now()
],

// ASUS ROG Zephyrus G14
[
    'product_id' => 19,
    'attribute_name' => "Vyrobca",
    'attribute_value' => "ASUS",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 19,
    'attribute_name' => "Operačný systém",
    'attribute_value' => "Windows 11",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 19,
    'attribute_name' => "Veľkosť operačnej pamäte",
    'attribute_value' => "16GB",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 19,
    'attribute_name' => "Úložisko",
    'attribute_value' => "1TB SSD",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 19,
    'attribute_name' => "Výdrž batérie",
    'attribute_value' => "10 hodín",
    'created_at' => now(),
    'updated_at' => now()
],











[
    'product_id' => 20,
    'attribute_name' => "Vyrobca",
    'attribute_value' => "Samsung",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 20,
    'attribute_name' => "Dotykové",
    'attribute_value' => "nie",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 20,
    'attribute_name' => "Uhlopriečka displeja",
    'attribute_value' => "27 palcov",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 20,
    'attribute_name' => "Pomer strán",
    'attribute_value' => "16:9",
    'created_at' => now(),
    'updated_at' => now()
],
[
    'product_id' => 20,
    'attribute_name' => "Frekvencia",
    'attribute_value' => "180Hz",
    'created_at' => now(),
    'updated_at' => now()
],
    // Dell UltraSharp U2720Q
    [
        'product_id' => 21,
        'attribute_name' => "Vyrobca",
        'attribute_value' => "Dell",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 21,
        'attribute_name' => "Dotykové",
        'attribute_value' => "nie",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 21,
        'attribute_name' => "Uhlopriečka displeja",
        'attribute_value' => "27 palcov",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 21,
        'attribute_name' => "Pomer strán",
        'attribute_value' => "16:9",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 21,
        'attribute_name' => "Frekvencia",
        'attribute_value' => "60Hz",
        'created_at' => now(),
        'updated_at' => now()
    ],

    // LG 27GN950-B
    [
        'product_id' => 22,
        'attribute_name' => "Vyrobca",
        'attribute_value' => "LG",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Dotykové",
        'attribute_value' => "nie",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Uhlopriečka displeja",
        'attribute_value' => "27 palcov",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Pomer strán",
        'attribute_value' => "16:9",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Frekvencia",
        'attribute_value' => "144Hz",
        'created_at' => now(),
        'updated_at' => now()
    ],

    // BenQ PD2700U
    [
        'product_id' => 22,
        'attribute_name' => "Vyrobca",
        'attribute_value' => "BenQ",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Dotykové",
        'attribute_value' => "nie",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Uhlopriečka displeja",
        'attribute_value' => "27 palcov",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Pomer strán",
        'attribute_value' => "16:9",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 22,
        'attribute_name' => "Frekvencia",
        'attribute_value' => "60Hz",
        'created_at' => now(),
        'updated_at' => now()
    ],

    // ASUS TUF Gaming VG27AQ
    [
        'product_id' => 23,
        'attribute_name' => "Vyrobca",
        'attribute_value' => "ASUS",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 23,
        'attribute_name' => "Dotykové",
        'attribute_value' => "nie",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 23,
        'attribute_name' => "Uhlopriečka displeja",
        'attribute_value' => "27 palcov",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 23,
        'attribute_name' => "Pomer strán",
        'attribute_value' => "16:9",
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'product_id' => 23,
        'attribute_name' => "Frekvencia",
        'attribute_value' => "165Hz",
        'created_at' => now(),
        'updated_at' => now()
    ],



            
        ]);
    
    }
}