Veri tabanından cekilen data array olarak şu şekilde gönderilir.
$result = $this->recursive_array_lib->recursive($arr,'ust_id','id',$ust_id);

$arr içeriği aşağıdaki gibidir.
$result örnek çıktısı en alttadır.

Şu şekilde menu çıktısı oluşturulabilir;
recursive_ul_li($result);
 function recursive_ul_li( $tree ) {
                echo '<ul>';
                foreach ( $tree as $item ) {
                    echo "<li id=\"$item[id]\" parent_id=\"$item[ust_id]\" > $item[aciklama] </li>";
                    if ( isset( $item['children'] ) ) {
                        recursive_ul_li( $item['children'] );
                    }
                }
                echo '</ul>';
            }





Array
(
    [0] => Array
        (
            [id] => 282
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => KuafÃ¶r
            [sira_no] => 1
        )

    [1] => Array
        (
            [id] => 283
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => GÃ¼zellik Merkezi
            [sira_no] => 2
        )

    [2] => Array
        (
            [id] => 284
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => ManikÃ¼r & PedikÃ¼r
            [sira_no] => 3
        )

    [3] => Array
        (
            [id] => 285
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => Makyaj
            [sira_no] => 4
        )

    [4] => Array
        (
            [id] => 287
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => Fitness
            [sira_no] => 5
        )

    [5] => Array
        (
            [id] => 288
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => Berber
            [sira_no] => 6
        )

    [6] => Array
        (
            [id] => 290
            [ust_id] => 0
            [tip] => AnaKategoriler
            [aciklama] => Solaryum
            [sira_no] => 7
        )

    [7] => Array
        (
            [id] => 343
            [ust_id] => 282
            [tip] => AnaKategoriler
            [aciklama] => Bay
            [sira_no] => 0
        )

    [8] => Array
        (
            [id] => 344
            [ust_id] => 282
            [tip] => AnaKategoriler
            [aciklama] => Bayan
            [sira_no] => 0
        )

    [9] => Array
        (
            [id] => 345
            [ust_id] => 343
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Hizmetleri
            [sira_no] => 0
        )

    [10] => Array
        (
            [id] => 346
            [ust_id] => 343
            [tip] => AnaKategoriler
            [aciklama] => Makyaj Ve SaÃ§ Åekillendirme
            [sira_no] => 0
        )

    [11] => Array
        (
            [id] => 347
            [ust_id] => 343
            [tip] => AnaKategoriler
            [aciklama] => ManikÃ¼r ,El & Ayak BakÄ±mÄ± ve AÄŸda
            [sira_no] => 0
        )

    [12] => Array
        (
            [id] => 348
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Kesim
            [sira_no] => 0
        )

    [13] => Array
        (
            [id] => 349
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Boyama
            [sira_no] => 0
        )

    [14] => Array
        (
            [id] => 350
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => Perma
            [sira_no] => 0
        )

    [15] => Array
        (
            [id] => 351
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => Sakal TÄ±raÅŸÄ±
            [sira_no] => 0
        )

    [16] => Array
        (
            [id] => 352
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ BakÄ±mÄ±
            [sira_no] => 0
        )

    [17] => Array
        (
            [id] => 353
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => FÃ¶n
            [sira_no] => 0
        )

    [18] => Array
        (
            [id] => 354
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => Damat TÄ±raÅŸÄ±
            [sira_no] => 0
        )

    [19] => Array
        (
            [id] => 355
            [ust_id] => 345
            [tip] => AnaKategoriler
            [aciklama] => Ã‡ocuk TÄ±raÅŸÄ±
            [sira_no] => 0
        )

    [20] => Array
        (
            [id] => 356
            [ust_id] => 346
            [tip] => AnaKategoriler
            [aciklama] => KaÅŸ Alma
            [sira_no] => 0
        )

    [21] => Array
        (
            [id] => 357
            [ust_id] => 347
            [tip] => AnaKategoriler
            [aciklama] => ManikÃ¼r
            [sira_no] => 0
        )

    [22] => Array
        (
            [id] => 358
            [ust_id] => 347
            [tip] => AnaKategoriler
            [aciklama] => PedikÃ¼r
            [sira_no] => 0
        )

    [23] => Array
        (
            [id] => 359
            [ust_id] => 344
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Hizmetleri
            [sira_no] => 0
        )

    [24] => Array
        (
            [id] => 360
            [ust_id] => 344
            [tip] => AnaKategoriler
            [aciklama] => Makyaj Ve SaÃ§ Åekillendirme
            [sira_no] => 0
        )

    [25] => Array
        (
            [id] => 361
            [ust_id] => 344
            [tip] => AnaKategoriler
            [aciklama] => ManikÃ¼r ,El & Ayak BakÄ±mÄ± ve AÄŸda
            [sira_no] => 0
        )

    [26] => Array
        (
            [id] => 362
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Brezilya FÃ¶nÃ¼
            [sira_no] => 0
        )

    [27] => Array
        (
            [id] => 363
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Dip Boyama
            [sira_no] => 0
        )

    [28] => Array
        (
            [id] => 364
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Boyama
            [sira_no] => 0
        )

    [29] => Array
        (
            [id] => 365
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ BakÄ±mÄ±
            [sira_no] => 0
        )

    [30] => Array
        (
            [id] => 366
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => RÃ¶fle ve GÃ¶lge
            [sira_no] => 0
        )

    [31] => Array
        (
            [id] => 367
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Ombre ve Balyaj
            [sira_no] => 0
        )

    [32] => Array
        (
            [id] => 368
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => MaÅŸa
            [sira_no] => 0
        )

    [33] => Array
        (
            [id] => 369
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Perma
            [sira_no] => 0
        )

    [34] => Array
        (
            [id] => 370
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => KÄ±rÄ±k FÃ¶n
            [sira_no] => 0
        )

    [35] => Array
        (
            [id] => 371
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => FÃ¶n
            [sira_no] => 0
        )

    [36] => Array
        (
            [id] => 372
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Keratin YÃ¼klemesi
            [sira_no] => 0
        )

    [37] => Array
        (
            [id] => 373
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Topuz
            [sira_no] => 0
        )

    [38] => Array
        (
            [id] => 374
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Gelin BaÅŸÄ±
            [sira_no] => 0
        )

    [39] => Array
        (
            [id] => 375
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Renk DeÄŸiÅŸimi
            [sira_no] => 0
        )

    [40] => Array
        (
            [id] => 376
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => Coloroskopi
            [sira_no] => 0
        )

    [41] => Array
        (
            [id] => 377
            [ust_id] => 359
            [tip] => AnaKategoriler
            [aciklama] => SaÃ§ Kesimi
            [sira_no] => 0
        )

    [42] => Array
        (
            [id] => 378
            [ust_id] => 360
            [tip] => AnaKategoriler
            [aciklama] => KaÅŸ Alma
            [sira_no] => 0
        )

    [43] => Array
        (
            [id] => 379
            [ust_id] => 360
            [tip] => AnaKategoriler
            [aciklama] => KalÄ±cÄ± Makyaj
            [sira_no] => 0
        )

    [44] => Array
        (
            [id] => 380
            [ust_id] => 361
            [tip] => AnaKategoriler
            [aciklama] => AÄŸda (BÃ¶lgesel)
            [sira_no] => 0
        )

    [45] => Array
        (
            [id] => 381
            [ust_id] => 361
            [tip] => AnaKategoriler
            [aciklama] => PedikÃ¼r
            [sira_no] => 0
        )

    [46] => Array
        (
            [id] => 382
            [ust_id] => 361
            [tip] => AnaKategoriler
            [aciklama] => ManikÃ¼r
            [sira_no] => 0
        )

    [47] => Array
        (
            [id] => 383
            [ust_id] => 361
            [tip] => AnaKategoriler
            [aciklama] => AÄŸda (TÃ¼m VÃ¼cut)
            [sira_no] => 0
        )

)



Örnek $result datası;


Array
(
    [0] => Array
        (
            [id] => 343
            [ust_id] => 282
            [tip] => AnaKategoriler
            [aciklama] => Bay
            [sira_no] => 0
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 345
                            [ust_id] => 343
                            [tip] => AnaKategoriler
                            [aciklama] => SaÃ§ Hizmetleri
                            [sira_no] => 0
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 348
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ Kesim
                                            [sira_no] => 0
                                        )

                                    [1] => Array
                                        (
                                            [id] => 349
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ Boyama
                                            [sira_no] => 0
                                        )

                                    [2] => Array
                                        (
                                            [id] => 350
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => Perma
                                            [sira_no] => 0
                                        )

                                    [3] => Array
                                        (
                                            [id] => 351
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => Sakal TÄ±raÅŸÄ±
                                            [sira_no] => 0
                                        )

                                    [4] => Array
                                        (
                                            [id] => 352
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ BakÄ±mÄ±
                                            [sira_no] => 0
                                        )

                                    [5] => Array
                                        (
                                            [id] => 353
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => FÃ¶n
                                            [sira_no] => 0
                                        )

                                    [6] => Array
                                        (
                                            [id] => 354
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => Damat TÄ±raÅŸÄ±
                                            [sira_no] => 0
                                        )

                                    [7] => Array
                                        (
                                            [id] => 355
                                            [ust_id] => 345
                                            [tip] => AnaKategoriler
                                            [aciklama] => Ã‡ocuk TÄ±raÅŸÄ±
                                            [sira_no] => 0
                                        )

                                )

                        )

                    [1] => Array
                        (
                            [id] => 346
                            [ust_id] => 343
                            [tip] => AnaKategoriler
                            [aciklama] => Makyaj Ve SaÃ§ Åekillendirme
                            [sira_no] => 0
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 356
                                            [ust_id] => 346
                                            [tip] => AnaKategoriler
                                            [aciklama] => KaÅŸ Alma
                                            [sira_no] => 0
                                        )

                                )

                        )

                    [2] => Array
                        (
                            [id] => 347
                            [ust_id] => 343
                            [tip] => AnaKategoriler
                            [aciklama] => ManikÃ¼r ,El & Ayak BakÄ±mÄ± ve AÄŸda
                            [sira_no] => 0
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 357
                                            [ust_id] => 347
                                            [tip] => AnaKategoriler
                                            [aciklama] => ManikÃ¼r
                                            [sira_no] => 0
                                        )

                                    [1] => Array
                                        (
                                            [id] => 358
                                            [ust_id] => 347
                                            [tip] => AnaKategoriler
                                            [aciklama] => PedikÃ¼r
                                            [sira_no] => 0
                                        )

                                )

                        )

                )

        )

    [1] => Array
        (
            [id] => 344
            [ust_id] => 282
            [tip] => AnaKategoriler
            [aciklama] => Bayan
            [sira_no] => 0
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 359
                            [ust_id] => 344
                            [tip] => AnaKategoriler
                            [aciklama] => SaÃ§ Hizmetleri
                            [sira_no] => 0
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 362
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Brezilya FÃ¶nÃ¼
                                            [sira_no] => 0
                                        )

                                    [1] => Array
                                        (
                                            [id] => 363
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ Dip Boyama
                                            [sira_no] => 0
                                        )

                                    [2] => Array
                                        (
                                            [id] => 364
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ Boyama
                                            [sira_no] => 0
                                        )

                                    [3] => Array
                                        (
                                            [id] => 365
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ BakÄ±mÄ±
                                            [sira_no] => 0
                                        )

                                    [4] => Array
                                        (
                                            [id] => 366
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => RÃ¶fle ve GÃ¶lge
                                            [sira_no] => 0
                                        )

                                    [5] => Array
                                        (
                                            [id] => 367
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Ombre ve Balyaj
                                            [sira_no] => 0
                                        )

                                    [6] => Array
                                        (
                                            [id] => 368
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => MaÅŸa
                                            [sira_no] => 0
                                        )

                                    [7] => Array
                                        (
                                            [id] => 369
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Perma
                                            [sira_no] => 0
                                        )

                                    [8] => Array
                                        (
                                            [id] => 370
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => KÄ±rÄ±k FÃ¶n
                                            [sira_no] => 0
                                        )

                                    [9] => Array
                                        (
                                            [id] => 371
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => FÃ¶n
                                            [sira_no] => 0
                                        )

                                    [10] => Array
                                        (
                                            [id] => 372
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Keratin YÃ¼klemesi
                                            [sira_no] => 0
                                        )

                                    [11] => Array
                                        (
                                            [id] => 373
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Topuz
                                            [sira_no] => 0
                                        )

                                    [12] => Array
                                        (
                                            [id] => 374
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Gelin BaÅŸÄ±
                                            [sira_no] => 0
                                        )

                                    [13] => Array
                                        (
                                            [id] => 375
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ Renk DeÄŸiÅŸimi
                                            [sira_no] => 0
                                        )

                                    [14] => Array
                                        (
                                            [id] => 376
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => Coloroskopi
                                            [sira_no] => 0
                                        )

                                    [15] => Array
                                        (
                                            [id] => 377
                                            [ust_id] => 359
                                            [tip] => AnaKategoriler
                                            [aciklama] => SaÃ§ Kesimi
                                            [sira_no] => 0
                                        )

                                )

                        )

                    [1] => Array
                        (
                            [id] => 360
                            [ust_id] => 344
                            [tip] => AnaKategoriler
                            [aciklama] => Makyaj Ve SaÃ§ Åekillendirme
                            [sira_no] => 0
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 378
                                            [ust_id] => 360
                                            [tip] => AnaKategoriler
                                            [aciklama] => KaÅŸ Alma
                                            [sira_no] => 0
                                        )

                                    [1] => Array
                                        (
                                            [id] => 379
                                            [ust_id] => 360
                                            [tip] => AnaKategoriler
                                            [aciklama] => KalÄ±cÄ± Makyaj
                                            [sira_no] => 0
                                        )

                                )

                        )

                    [2] => Array
                        (
                            [id] => 361
                            [ust_id] => 344
                            [tip] => AnaKategoriler
                            [aciklama] => ManikÃ¼r ,El & Ayak BakÄ±mÄ± ve AÄŸda
                            [sira_no] => 0
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 380
                                            [ust_id] => 361
                                            [tip] => AnaKategoriler
                                            [aciklama] => AÄŸda (BÃ¶lgesel)
                                            [sira_no] => 0
                                        )

                                    [1] => Array
                                        (
                                            [id] => 381
                                            [ust_id] => 361
                                            [tip] => AnaKategoriler
                                            [aciklama] => PedikÃ¼r
                                            [sira_no] => 0
                                        )

                                    [2] => Array
                                        (
                                            [id] => 382
                                            [ust_id] => 361
                                            [tip] => AnaKategoriler
                                            [aciklama] => ManikÃ¼r
                                            [sira_no] => 0
                                        )

                                    [3] => Array
                                        (
                                            [id] => 383
                                            [ust_id] => 361
                                            [tip] => AnaKategoriler
                                            [aciklama] => AÄŸda (TÃ¼m VÃ¼cut)
                                            [sira_no] => 0
                                        )

                                )

                        )

                )

        )

)
