<?php
    // 1
    // function tampilkanHaloDunia(){
    //     echo "Halo dunia! <br>";

    //     tampilkanHaloDunia();
    // }

    // tampilkanHaloDunia();

    //2
    // for($i=1; $i<=25; $i++){
    //     echo "Perulangan ke- {$i} <br>";
    // }

    // 3
    // function tampilkanAngka (int $jumlah, int $indeks = 1){
    //     echo "Perulangan ke-{$indeks} <br>";

    //     if ($indeks < $jumlah){
    //         tampilkanAngka($jumlah, $indeks + 1);
    //     }
    // }
    // tampilkanAngka(20);

    // 4
    $menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Berita",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "Nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]  
            ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ],
    ];

    function tampilkanMenuBertingkat(array $menu){
        echo "<ul>";
        foreach ($menu as $key => $item){
            echo "<li> {$item['nama']}</li>";
        }
        echo "</ul>";
    }
    tampilkanMenuBertingkat($menu);
?>