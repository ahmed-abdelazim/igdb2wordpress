<?php
// In this file we get companies Id's for ps4 games
//header('Content-Type: application/json');
include("config.php");
include("functions.php");
$my_companies_json = '[
    {
      "id": 2033,
      "developers": [
        90,
        438,
        71,
        428
      ]
    },
    {
      "id": 8500,
      "developers": [
        4483
      ]
    },
    {
      "id": 2957,
      "developers": [
        400
      ]
    },
    {
      "id": 1979,
      "developers": [
        94
      ]
    },
    {
      "id": 2920,
      "developers": [
        454
      ]
    },
    {
      "id": 3152,
      "developers": [
        1005
      ]
    },
    {
      "id": 16735,
      "developers": [
        1883
      ]
    },
    {
      "id": 3256,
      "developers": [
        899,
        841,
        433,
        697,
        3655,
        702,
        1990
      ]
    },
    {
      "id": 18655,
      "developers": [
        8433
      ]
    },
    {
      "id": 3094,
      "developers": [
        94
      ]
    },
    {
      "id": 4,
      "developers": [
        27
      ]
    },
    {
      "id": 16765,
      "developers": [
        5252
      ]
    },
    {
      "id": 6632,
      "developers": [
        659
      ]
    },
    {
      "id": 4756,
      "developers": [
        38
      ]
    },
    {
      "id": 4754,
      "developers": [
        111
      ]
    },
    {
      "id": 1887,
      "developers": [
        222
      ]
    },
    {
      "id": 6030,
      "developers": [
        306,
        308
      ]
    },
    {
      "id": 4755,
      "developers": [
        432
      ]
    },
    {
      "id": 21729
    },
    {
      "id": 4071,
      "developers": [
        1303
      ]
    },
    {
      "id": 386,
      "developers": [
        335
      ]
    },
    {
      "id": 8992,
      "developers": [
        5047,
        5048
      ]
    },
    {
      "id": 5895,
      "developers": [
        2581
      ]
    },
    {
      "id": 17522
    },
    {
      "id": 1968,
      "developers": [
        702
      ]
    },
    {
      "id": 3042,
      "developers": [
        108
      ]
    },
    {
      "id": 7574,
      "developers": [
        277
      ]
    },
    {
      "id": 28513
    },
    {
      "id": 54489,
      "developers": [
        15596
      ]
    },
    {
      "id": 36300,
      "developers": [
        13264
      ]
    },
    {
      "id": 6008,
      "developers": [
        453
      ]
    },
    {
      "id": 4844,
      "developers": [
        292,
        1290
      ]
    },
    {
      "id": 6976,
      "developers": [
        1394
      ]
    },
    {
      "id": 7380,
      "developers": [
        3069
      ]
    },
    {
      "id": 7587,
      "developers": [
        3152
      ]
    },
    {
      "id": 4674,
      "developers": [
        950,
        348
      ]
    },
    {
      "id": 17145,
      "developers": [
        8043
      ]
    },
    {
      "id": 6147,
      "developers": [
        2688
      ]
    },
    {
      "id": 3188,
      "developers": [
        1170
      ]
    },
    {
      "id": 3146,
      "developers": [
        1893
      ]
    },
    {
      "id": 4845,
      "developers": [
        1290
      ]
    },
    {
      "id": 121,
      "developers": [
        58,
        279
      ]
    },
    {
      "id": 5541,
      "developers": [
        2410
      ]
    },
    {
      "id": 5333,
      "developers": [
        160,
        2347
      ]
    },
    {
      "id": 5328,
      "developers": [
        170
      ]
    },
    {
      "id": 7171,
      "developers": [
        6979
      ]
    },
    {
      "id": 7685,
      "developers": [
        292
      ]
    },
    {
      "id": 27512,
      "developers": [
        322
      ]
    },
    {
      "id": 7208,
      "developers": [
        405
      ]
    },
    {
      "id": 5330,
      "developers": [
        555
      ]
    },
    {
      "id": 5327,
      "developers": [
        2344,
        2345,
        2343
      ]
    },
    {
      "id": 4786,
      "developers": [
        2145
      ]
    },
    {
      "id": 7614,
      "developers": [
        694
      ]
    },
    {
      "id": 1354,
      "developers": [
        857
      ]
    },
    {
      "id": 8598,
      "developers": [
        4542
      ]
    },
    {
      "id": 8467,
      "developers": [
        4441
      ]
    },
    {
      "id": 1981,
      "developers": [
        507,
        392
      ]
    },
    {
      "id": 7897,
      "developers": [
        3844
      ]
    },
    {
      "id": 14878,
      "developers": [
        3046
      ]
    },
    {
      "id": 11203,
      "developers": [
        4769
      ]
    },
    {
      "id": 3025,
      "developers": [
        407
      ]
    },
    {
      "id": 2050,
      "developers": [
        292,
        1290
      ]
    },
    {
      "id": 6707,
      "developers": [
        294
      ]
    },
    {
      "id": 1267,
      "developers": [
        823,
        824
      ]
    },
    {
      "id": 19916
    },
    {
      "id": 8409,
      "developers": [
        4380
      ]
    },
    {
      "id": 52555
    },
    {
      "id": 3095,
      "developers": [
        94
      ]
    },
    {
      "id": 8507,
      "developers": [
        4497
      ]
    },
    {
      "id": 8509,
      "developers": [
        741,
        72,
        319
      ]
    },
    {
      "id": 1918,
      "developers": [
        48,
        392,
        3226
      ]
    },
    {
      "id": 74318
    },
    {
      "id": 7610,
      "developers": [
        294
      ]
    },
    {
      "id": 5644,
      "developers": [
        1218
      ]
    },
    {
      "id": 3182,
      "developers": [
        51
      ]
    },
    {
      "id": 120,
      "developers": [
        51
      ]
    },
    {
      "id": 8254,
      "developers": [
        37
      ]
    },
    {
      "id": 1121,
      "developers": [
        38
      ]
    },
    {
      "id": 7334,
      "developers": [
        1012
      ]
    },
    {
      "id": 8566,
      "developers": [
        129
      ]
    },
    {
      "id": 8660,
      "developers": [
        4622
      ]
    },
    {
      "id": 8682,
      "developers": [
        85
      ]
    },
    {
      "id": 7708,
      "developers": [
        507,
        392
      ]
    },
    {
      "id": 1353,
      "developers": [
        857,
        814
      ]
    },
    {
      "id": 9101,
      "developers": [
        4824
      ]
    },
    {
      "id": 7408,
      "developers": [
        396
      ]
    },
    {
      "id": 9192,
      "developers": [
        1242
      ]
    },
    {
      "id": 2552,
      "developers": [
        437
      ]
    },
    {
      "id": 8657,
      "developers": [
        1394
      ]
    },
    {
      "id": 32617
    },
    {
      "id": 9272,
      "developers": [
        2340
      ]
    },
    {
      "id": 9374,
      "developers": [
        5079
      ]
    },
    {
      "id": 8222,
      "developers": [
        1012
      ]
    },
    {
      "id": 9499,
      "developers": [
        1527
      ]
    },
    {
      "id": 1985,
      "developers": [
        170
      ]
    },
    {
      "id": 7292,
      "developers": [
        48
      ]
    },
    {
      "id": 7290,
      "developers": [
        1394
      ]
    },
    {
      "id": 8223,
      "developers": [
        163
      ]
    },
    {
      "id": 9509,
      "developers": [
        428
      ]
    },
    {
      "id": 3087,
      "developers": [
        85
      ]
    },
    {
      "id": 8901,
      "developers": [
        4713
      ]
    },
    {
      "id": 8263,
      "developers": [
        896
      ]
    },
    {
      "id": 9567,
      "developers": [
        5542
      ]
    },
    {
      "id": 9241,
      "developers": [
        5792
      ]
    },
    {
      "id": 10920
    },
    {
      "id": 10996,
      "developers": [
        858
      ]
    },
    {
      "id": 11072,
      "developers": [
        555
      ]
    },
    {
      "id": 11118,
      "developers": [
        19
      ]
    },
    {
      "id": 11077,
      "developers": [
        292
      ]
    },
    {
      "id": 11160
    },
    {
      "id": 18978,
      "developers": [
        9724
      ]
    },
    {
      "id": 11218,
      "developers": [
        1006
      ]
    },
    {
      "id": 7609,
      "developers": [
        4895
      ]
    },
    {
      "id": 11198,
      "developers": [
        711
      ]
    },
    {
      "id": 5639,
      "developers": [
        2513
      ]
    },
    {
      "id": 11393,
      "developers": [
        2428
      ]
    },
    {
      "id": 11502,
      "developers": [
        5322
      ]
    },
    {
      "id": 11006,
      "developers": [
        862
      ]
    },
    {
      "id": 1983,
      "developers": [
        928
      ]
    },
    {
      "id": 9023,
      "developers": [
        4769
      ]
    },
    {
      "id": 11588,
      "developers": [
        3697
      ]
    },
    {
      "id": 11594,
      "developers": [
        1405
      ]
    },
    {
      "id": 6781,
      "developers": [
        2916
      ]
    },
    {
      "id": 7405,
      "developers": [
        1364
      ]
    },
    {
      "id": 11052,
      "developers": [
        6136
      ]
    },
    {
      "id": 11260,
      "developers": [
        6150
      ]
    },
    {
      "id": 2113,
      "developers": [
        94
      ]
    },
    {
      "id": 1938,
      "developers": [
        1211
      ]
    },
    {
      "id": 10324,
      "developers": [
        614
      ]
    },
    {
      "id": 11185,
      "developers": [
        129
      ]
    },
    {
      "id": 10472,
      "developers": [
        2914,
        6212
      ]
    },
    {
      "id": 10728,
      "developers": [
        1933
      ]
    },
    {
      "id": 11790,
      "developers": [
        401
      ]
    },
    {
      "id": 6804,
      "developers": [
        858
      ]
    },
    {
      "id": 5592,
      "developers": [
        2728
      ]
    },
    {
      "id": 533,
      "developers": [
        19
      ]
    },
    {
      "id": 11839,
      "developers": [
        6351
      ]
    },
    {
      "id": 11842,
      "developers": [
        1221
      ]
    },
    {
      "id": 17847,
      "developers": [
        9064
      ]
    },
    {
      "id": 13677,
      "developers": [
        7078,
        9729
      ]
    },
    {
      "id": 18814,
      "developers": [
        2582
      ]
    },
    {
      "id": 11857,
      "developers": [
        2216,
        8134
      ]
    },
    {
      "id": 11328,
      "developers": [
        5999,
        168
      ]
    },
    {
      "id": 112,
      "developers": [
        37
      ]
    },
    {
      "id": 11858,
      "developers": [
        2216,
        8134
      ]
    },
    {
      "id": 18031,
      "developers": [
        126
      ]
    },
    {
      "id": 14747,
      "developers": [
        2729
      ]
    },
    {
      "id": 18320,
      "developers": [
        94
      ]
    },
    {
      "id": 19008
    },
    {
      "id": 19009,
      "developers": [
        5999
      ]
    },
    {
      "id": 16998,
      "developers": [
        834
      ]
    },
    {
      "id": 18078,
      "developers": [
        8537
      ]
    },
    {
      "id": 14415,
      "developers": [
        7231
      ]
    },
    {
      "id": 22152
    },
    {
      "id": 18686,
      "developers": [
        9388
      ]
    },
    {
      "id": 8249,
      "developers": [
        6981
      ]
    },
    {
      "id": 19587,
      "developers": [
        620
      ]
    },
    {
      "id": 18,
      "developers": [
        305
      ]
    },
    {
      "id": 18815,
      "developers": [
        10302
      ]
    },
    {
      "id": 12209,
      "developers": [
        2923
      ]
    },
    {
      "id": 12279,
      "developers": [
        1394
      ]
    },
    {
      "id": 12280,
      "developers": [
        1394
      ]
    },
    {
      "id": 10788,
      "developers": [
        696
      ]
    },
    {
      "id": 12595,
      "developers": [
        14150
      ]
    },
    {
      "id": 12648,
      "developers": [
        6567
      ]
    },
    {
      "id": 9369,
      "developers": [
        6563
      ]
    },
    {
      "id": 10240,
      "developers": [
        6571
      ]
    },
    {
      "id": 5266,
      "developers": [
        2331
      ]
    },
    {
      "id": 28323
    },
    {
      "id": 7868,
      "developers": [
        1389
      ]
    },
    {
      "id": 9741,
      "developers": [
        1259
      ]
    },
    {
      "id": 11083,
      "developers": [
        1309
      ]
    },
    {
      "id": 3250,
      "developers": [
        108
      ]
    },
    {
      "id": 8750,
      "developers": [
        4679
      ]
    },
    {
      "id": 3752,
      "developers": [
        1893
      ]
    },
    {
      "id": 2049,
      "developers": [
        955
      ]
    },
    {
      "id": 29004,
      "developers": [
        12931
      ]
    },
    {
      "id": 11184,
      "developers": [
        6939
      ]
    },
    {
      "id": 13153,
      "developers": [
        1701
      ]
    },
    {
      "id": 11093,
      "developers": [
        6978
      ]
    },
    {
      "id": 1081,
      "developers": [
        851
      ]
    },
    {
      "id": 13177,
      "developers": [
        3701,
        4672
      ]
    },
    {
      "id": 9901,
      "developers": [
        115
      ]
    },
    {
      "id": 8339,
      "developers": [
        294,
        58
      ]
    },
    {
      "id": 12503,
      "developers": [
        908
      ]
    },
    {
      "id": 9730,
      "developers": [
        5212
      ]
    },
    {
      "id": 9214,
      "developers": [
        1394,
        858
      ]
    },
    {
      "id": 13552,
      "developers": [
        2436
      ]
    },
    {
      "id": 11816,
      "developers": [
        2428
      ]
    },
    {
      "id": 13669,
      "developers": [
        1394
      ]
    },
    {
      "id": 3101,
      "developers": [
        393
      ]
    },
    {
      "id": 14144,
      "developers": [
        26,
        794
      ]
    },
    {
      "id": 7606,
      "developers": [
        746
      ]
    },
    {
      "id": 5607,
      "developers": [
        2499
      ]
    },
    {
      "id": 14379,
      "developers": [
        7202
      ]
    },
    {
      "id": 14177,
      "developers": [
        510
      ]
    },
    {
      "id": 11057,
      "developers": [
        694
      ]
    },
    {
      "id": 14681,
      "developers": [
        7280
      ]
    },
    {
      "id": 6059,
      "developers": [
        404
      ]
    },
    {
      "id": 14713
    },
    {
      "id": 14723,
      "developers": [
        335
      ]
    },
    {
      "id": 14724,
      "developers": [
        5542
      ]
    },
    {
      "id": 1014,
      "developers": [
        949,
        733
      ]
    },
    {
      "id": 13182,
      "developers": [
        38
      ]
    },
    {
      "id": 11460,
      "developers": [
        5193,
        5048
      ]
    },
    {
      "id": 11065,
      "developers": [
        834
      ]
    },
    {
      "id": 15100,
      "developers": [
        1033
      ]
    },
    {
      "id": 14902,
      "developers": [
        163
      ]
    },
    {
      "id": 15169,
      "developers": [
        896
      ]
    },
    {
      "id": 15187,
      "developers": [
        5528
      ]
    },
    {
      "id": 3088,
      "developers": [
        1225
      ]
    },
    {
      "id": 23501,
      "developers": [
        10849
      ]
    },
    {
      "id": 15460,
      "developers": [
        111
      ]
    },
    {
      "id": 15464,
      "developers": [
        111
      ]
    },
    {
      "id": 11075,
      "developers": [
        277
      ]
    },
    {
      "id": 25108
    },
    {
      "id": 9498,
      "developers": [
        26,
        27
      ]
    },
    {
      "id": 11081,
      "developers": [
        843
      ]
    },
    {
      "id": 15555,
      "developers": [
        111
      ]
    },
    {
      "id": 15445,
      "developers": [
        108
      ]
    },
    {
      "id": 14369
    },
    {
      "id": 15691,
      "developers": [
        3037
      ]
    },
    {
      "id": 11719,
      "developers": [
        6191
      ]
    },
    {
      "id": 5508,
      "developers": [
        2449
      ]
    },
    {
      "id": 3227,
      "developers": [
        1653
      ]
    },
    {
      "id": 7706,
      "developers": [
        4133
      ]
    },
    {
      "id": 17907,
      "developers": [
        4461
      ]
    },
    {
      "id": 24868,
      "developers": [
        7473
      ]
    },
    {
      "id": 15852,
      "developers": [
        7901
      ]
    },
    {
      "id": 4656,
      "developers": [
        1021
      ]
    },
    {
      "id": 7886,
      "developers": [
        3834
      ]
    },
    {
      "id": 16130
    },
    {
      "id": 11199,
      "developers": [
        4357,
        7963
      ]
    },
    {
      "id": 1184,
      "developers": [
        790,
        791,
        7964
      ]
    },
    {
      "id": 1906,
      "developers": [
        918
      ]
    },
    {
      "id": 2074,
      "developers": [
        347,
        965
      ]
    },
    {
      "id": 12520,
      "developers": [
        6547
      ]
    },
    {
      "id": 11744,
      "developers": [
        5792
      ]
    },
    {
      "id": 12482,
      "developers": [
        4598
      ]
    },
    {
      "id": 9917,
      "developers": [
        5326
      ]
    },
    {
      "id": 78632,
      "developers": [
        1217
      ]
    },
    {
      "id": 5060,
      "developers": [
        2248
      ]
    },
    {
      "id": 17010,
      "developers": [
        8454
      ]
    },
    {
      "id": 7965,
      "developers": [
        5966
      ]
    },
    {
      "id": 3232,
      "developers": [
        294
      ]
    },
    {
      "id": 7351,
      "developers": [
        184
      ]
    },
    {
      "id": 17473
    },
    {
      "id": 11292,
      "developers": [
        837,
        400
      ]
    },
    {
      "id": 18030
    },
    {
      "id": 18043,
      "developers": [
        437
      ]
    },
    {
      "id": 18092,
      "developers": [
        7205
      ]
    },
    {
      "id": 17986,
      "developers": [
        9187
      ]
    },
    {
      "id": 18131,
      "developers": [
        814
      ]
    },
    {
      "id": 7331,
      "developers": [
        401
      ]
    },
    {
      "id": 15488,
      "developers": [
        7781
      ]
    },
    {
      "id": 11182,
      "developers": [
        8595
      ]
    },
    {
      "id": 18263,
      "developers": [
        8799
      ]
    },
    {
      "id": 18336,
      "developers": [
        8999
      ]
    },
    {
      "id": 23168,
      "developers": [
        7901
      ]
    },
    {
      "id": 9767,
      "developers": [
        1065
      ]
    },
    {
      "id": 16823,
      "developers": [
        2488
      ]
    },
    {
      "id": 18161,
      "developers": [
        94
      ]
    },
    {
      "id": 730,
      "developers": [
        536
      ]
    },
    {
      "id": 733,
      "developers": [
        365
      ]
    },
    {
      "id": 13620,
      "developers": [
        1218
      ]
    },
    {
      "id": 19175
    },
    {
      "id": 14740,
      "developers": [
        954
      ]
    },
    {
      "id": 576,
      "developers": [
        243,
        6997
      ]
    },
    {
      "id": 14879,
      "developers": [
        1394
      ]
    },
    {
      "id": 1338,
      "developers": [
        748,
        1224
      ]
    },
    {
      "id": 14326,
      "developers": [
        7185
      ]
    },
    {
      "id": 19459,
      "developers": [
        277
      ]
    },
    {
      "id": 9112,
      "developers": [
        2397
      ]
    },
    {
      "id": 7444,
      "developers": [
        3087
      ]
    },
    {
      "id": 19463,
      "developers": [
        555
      ]
    },
    {
      "id": 14790,
      "developers": [
        3496,
        4357
      ]
    },
    {
      "id": 2358,
      "developers": [
        1118
      ]
    },
    {
      "id": 19550,
      "developers": [
        841,
        899,
        3655
      ]
    },
    {
      "id": 2988,
      "developers": [
        444,
        1926
      ]
    },
    {
      "id": 7352,
      "developers": [
        4681
      ]
    },
    {
      "id": 19605,
      "developers": [
        10120
      ]
    },
    {
      "id": 570,
      "developers": [
        444,
        1926
      ]
    },
    {
      "id": 19600
    },
    {
      "id": 19083,
      "developers": [
        3697
      ]
    },
    {
      "id": 5552,
      "developers": [
        728
      ]
    },
    {
      "id": 19746,
      "developers": [
        13246,
        10190,
        10189
      ]
    },
    {
      "id": 9194,
      "developers": [
        594
      ]
    },
    {
      "id": 17377,
      "developers": [
        8669
      ]
    },
    {
      "id": 19798,
      "developers": [
        836
      ]
    },
    {
      "id": 19799,
      "developers": [
        6071
      ]
    },
    {
      "id": 1405,
      "developers": [
        2736,
        7557
      ]
    },
    {
      "id": 19806,
      "developers": [
        610
      ]
    },
    {
      "id": 8288,
      "developers": [
        2449
      ]
    },
    {
      "id": 11347,
      "developers": [
        1419
      ]
    },
    {
      "id": 2058,
      "developers": [
        905
      ]
    },
    {
      "id": 3221,
      "developers": [
        2345,
        1639
      ]
    },
    {
      "id": 17026,
      "developers": [
        8460
      ]
    },
    {
      "id": 19839,
      "developers": [
        8
      ]
    },
    {
      "id": 19167,
      "developers": [
        9866
      ]
    },
    {
      "id": 16282,
      "developers": [
        1108,
        2345
      ]
    },
    {
      "id": 5004,
      "developers": [
        1474,
        451,
        2230,
        2231
      ]
    },
    {
      "id": 8433,
      "developers": [
        8300
      ]
    },
    {
      "id": 15431,
      "developers": [
        1474
      ]
    },
    {
      "id": 1215,
      "developers": [
        837,
        400
      ]
    },
    {
      "id": 1679,
      "developers": [
        2676,
        2042
      ]
    },
    {
      "id": 18861,
      "developers": [
        7066
      ]
    },
    {
      "id": 19863,
      "developers": [
        10314
      ]
    },
    {
      "id": 16925,
      "developers": [
        8410
      ]
    },
    {
      "id": 20189,
      "developers": [
        2
      ]
    },
    {
      "id": 20332,
      "developers": [
        10355
      ]
    },
    {
      "id": 16927,
      "developers": [
        696
      ]
    },
    {
      "id": 9806,
      "developers": [
        4998
      ]
    },
    {
      "id": 11002,
      "developers": [
        2481
      ]
    },
    {
      "id": 20047,
      "developers": [
        1459
      ]
    },
    {
      "id": 7601,
      "developers": [
        957
      ]
    },
    {
      "id": 18514,
      "developers": [
        9469
      ]
    },
    {
      "id": 8138,
      "developers": [
        4068
      ]
    },
    {
      "id": 17229,
      "developers": [
        8576
      ]
    },
    {
      "id": 7323,
      "developers": [
        552
      ]
    },
    {
      "id": 16302,
      "developers": [
        10002
      ]
    },
    {
      "id": 20981,
      "developers": [
        10417
      ]
    },
    {
      "id": 1265,
      "developers": [
        243,
        6997
      ]
    },
    {
      "id": 4999,
      "developers": [
        71,
        72,
        432,
        1923,
        2149
      ]
    },
    {
      "id": 19874,
      "developers": [
        888
      ]
    },
    {
      "id": 21591,
      "developers": [
        396
      ]
    },
    {
      "id": 21594,
      "developers": [
        1212
      ]
    },
    {
      "id": 21595,
      "developers": [
        407
      ]
    },
    {
      "id": 21606,
      "developers": [
        1883
      ]
    },
    {
      "id": 9181,
      "developers": [
        860
      ]
    },
    {
      "id": 2974,
      "developers": [
        1389
      ]
    },
    {
      "id": 19533
    },
    {
      "id": 21960,
      "developers": [
        3226
      ]
    },
    {
      "id": 19563,
      "developers": [
        164
      ]
    },
    {
      "id": 22017,
      "developers": [
        15835
      ]
    },
    {
      "id": 22092,
      "developers": [
        2952
      ]
    },
    {
      "id": 21623,
      "developers": [
        4595
      ]
    },
    {
      "id": 18433,
      "developers": [
        9431
      ]
    },
    {
      "id": 22430,
      "developers": [
        10576
      ]
    },
    {
      "id": 22439,
      "developers": [
        908
      ]
    },
    {
      "id": 6748,
      "developers": [
        743
      ]
    },
    {
      "id": 2025,
      "developers": [
        947
      ]
    },
    {
      "id": 17502,
      "developers": [
        8794
      ]
    },
    {
      "id": 18146
    },
    {
      "id": 10815,
      "developers": [
        10624
      ]
    },
    {
      "id": 11753,
      "developers": [
        10626
      ]
    },
    {
      "id": 22445,
      "developers": [
        6970
      ]
    },
    {
      "id": 14291,
      "developers": [
        10660
      ]
    },
    {
      "id": 18975,
      "developers": [
        10666
      ]
    },
    {
      "id": 9179,
      "developers": [
        319,
        17
      ]
    },
    {
      "id": 11135,
      "developers": [
        6080
      ]
    },
    {
      "id": 22775,
      "developers": [
        5447
      ]
    },
    {
      "id": 7604,
      "developers": [
        2933,
        10692
      ]
    },
    {
      "id": 8114,
      "developers": [
        4059
      ]
    },
    {
      "id": 10919,
      "developers": [
        377
      ]
    },
    {
      "id": 20104,
      "developers": [
        10307
      ]
    },
    {
      "id": 18819,
      "developers": [
        694
      ]
    },
    {
      "id": 19409,
      "developers": [
        1527
      ]
    },
    {
      "id": 11253,
      "developers": [
        7261
      ]
    },
    {
      "id": 9046,
      "developers": [
        5456
      ]
    },
    {
      "id": 6879,
      "developers": [
        2723,
        404
      ]
    },
    {
      "id": 23499,
      "developers": [
        10848
      ]
    },
    {
      "id": 23579,
      "developers": [
        8975,
        4517
      ]
    },
    {
      "id": 23727,
      "developers": [
        428
      ]
    },
    {
      "id": 20291,
      "developers": [
        428
      ]
    },
    {
      "id": 23839,
      "developers": [
        8530
      ]
    },
    {
      "id": 19918,
      "developers": [
        277
      ]
    },
    {
      "id": 5924,
      "developers": [
        1611,
        1099
      ]
    },
    {
      "id": 22085
    },
    {
      "id": 14159,
      "developers": [
        93
      ]
    },
    {
      "id": 5601,
      "developers": [
        12298
      ]
    },
    {
      "id": 16298,
      "developers": [
        4096
      ]
    },
    {
      "id": 24017,
      "developers": [
        6218,
        10942
      ]
    },
    {
      "id": 3082,
      "developers": [
        1364
      ]
    },
    {
      "id": 24041,
      "developers": [
        10963
      ]
    },
    {
      "id": 24069,
      "developers": [
        26
      ]
    },
    {
      "id": 21537,
      "developers": [
        3051
      ]
    },
    {
      "id": 6732,
      "developers": [
        7320
      ]
    },
    {
      "id": 23477,
      "developers": [
        851
      ]
    },
    {
      "id": 22813,
      "developers": [
        5198
      ]
    },
    {
      "id": 24415,
      "developers": [
        4059
      ]
    },
    {
      "id": 24420,
      "developers": [
        2542
      ]
    },
    {
      "id": 24421,
      "developers": [
        2542
      ]
    },
    {
      "id": 15519
    },
    {
      "id": 14366,
      "developers": [
        4895
      ]
    },
    {
      "id": 12579,
      "developers": [
        1217
      ]
    },
    {
      "id": 19803,
      "developers": [
        1459
      ]
    },
    {
      "id": 24483
    },
    {
      "id": 23176
    },
    {
      "id": 24681,
      "developers": [
        1459
      ]
    },
    {
      "id": 14368,
      "developers": [
        318
      ]
    },
    {
      "id": 20079,
      "developers": [
        3152
      ]
    },
    {
      "id": 18853,
      "developers": [
        9579
      ]
    },
    {
      "id": 24838,
      "developers": [
        9426
      ]
    },
    {
      "id": 12596,
      "developers": [
        1661
      ]
    },
    {
      "id": 19965,
      "developers": [
        552,
        291,
        823
      ]
    },
    {
      "id": 24878,
      "developers": [
        1377
      ]
    },
    {
      "id": 24781,
      "developers": [
        1033
      ]
    },
    {
      "id": 24462,
      "developers": [
        11254
      ]
    },
    {
      "id": 10960,
      "developers": [
        5842
      ]
    },
    {
      "id": 18150,
      "developers": [
        48,
        392,
        774
      ]
    },
    {
      "id": 13521,
      "developers": [
        5024
      ]
    },
    {
      "id": 20045
    },
    {
      "id": 20046,
      "developers": [
        393
      ]
    },
    {
      "id": 18688,
      "developers": [
        11327
      ]
    },
    {
      "id": 19441,
      "developers": [
        38
      ]
    },
    {
      "id": 25081,
      "developers": [
        10075
      ]
    },
    {
      "id": 25082,
      "developers": [
        36
      ]
    },
    {
      "id": 59062
    },
    {
      "id": 21962,
      "developers": [
        10481
      ]
    },
    {
      "id": 20089,
      "developers": [
        448
      ]
    },
    {
      "id": 25206,
      "developers": [
        696
      ]
    },
    {
      "id": 25312,
      "developers": [
        836
      ]
    },
    {
      "id": 12528,
      "developers": [
        10692
      ]
    },
    {
      "id": 25336,
      "developers": [
        11413
      ]
    },
    {
      "id": 8983,
      "developers": [
        326
      ]
    },
    {
      "id": 24920,
      "developers": [
        71,
        432,
        57
      ]
    },
    {
      "id": 3234,
      "developers": [
        580
      ]
    },
    {
      "id": 25639,
      "developers": [
        1394
      ]
    },
    {
      "id": 11598,
      "developers": [
        8382
      ]
    },
    {
      "id": 2137,
      "developers": [
        1062,
        433
      ]
    },
    {
      "id": 1991,
      "developers": [
        1013
      ]
    },
    {
      "id": 22916,
      "developers": [
        620
      ]
    },
    {
      "id": 14746,
      "developers": [
        294
      ]
    },
    {
      "id": 25970
    },
    {
      "id": 25972
    },
    {
      "id": 25983
    },
    {
      "id": 25984
    },
    {
      "id": 11200
    },
    {
      "id": 25989
    },
    {
      "id": 15529
    },
    {
      "id": 17832,
      "developers": [
        1005
      ]
    },
    {
      "id": 51465,
      "developers": [
        8134
      ]
    },
    {
      "id": 26033
    },
    {
      "id": 26035
    },
    {
      "id": 26036
    },
    {
      "id": 26038
    },
    {
      "id": 26064
    },
    {
      "id": 26066
    },
    {
      "id": 26075
    },
    {
      "id": 26042
    },
    {
      "id": 26043
    },
    {
      "id": 26053
    },
    {
      "id": 26061
    },
    {
      "id": 26063
    },
    {
      "id": 26073
    },
    {
      "id": 26081
    },
    {
      "id": 26087
    },
    {
      "id": 26093
    },
    {
      "id": 26095
    },
    {
      "id": 26096
    },
    {
      "id": 26046,
      "developers": [
        71
      ]
    },
    {
      "id": 26085
    },
    {
      "id": 26090
    },
    {
      "id": 26057
    },
    {
      "id": 26086
    },
    {
      "id": 26089
    },
    {
      "id": 26097,
      "developers": [
        15661
      ]
    },
    {
      "id": 26049
    },
    {
      "id": 26052
    },
    {
      "id": 26055
    },
    {
      "id": 26091
    },
    {
      "id": 26065
    },
    {
      "id": 26067
    },
    {
      "id": 26069
    },
    {
      "id": 26088
    },
    {
      "id": 26098
    },
    {
      "id": 2993,
      "developers": [
        294
      ]
    },
    {
      "id": 26109
    },
    {
      "id": 19592,
      "developers": [
        10114
      ]
    },
    {
      "id": 17000,
      "developers": [
        8452
      ]
    },
    {
      "id": 13164,
      "developers": [
        2397
      ]
    },
    {
      "id": 26167,
      "developers": [
        167
      ]
    },
    {
      "id": 6655,
      "developers": [
        5960
      ]
    },
    {
      "id": 2066,
      "developers": [
        2821,
        37
      ]
    },
    {
      "id": 18854,
      "developers": [
        845
      ]
    },
    {
      "id": 10949,
      "developers": [
        2751
      ]
    },
    {
      "id": 26210,
      "developers": [
        11676
      ]
    },
    {
      "id": 11078,
      "developers": [
        1021
      ]
    },
    {
      "id": 26255,
      "developers": [
        9431
      ]
    },
    {
      "id": 26277
    },
    {
      "id": 9497,
      "developers": [
        5088
      ]
    },
    {
      "id": 26369,
      "developers": [
        4753
      ]
    },
    {
      "id": 26442
    },
    {
      "id": 26201,
      "developers": [
        94
      ]
    },
    {
      "id": 2004,
      "developers": [
        393
      ]
    },
    {
      "id": 9784,
      "developers": [
        5254
      ]
    },
    {
      "id": 26523,
      "developers": [
        163
      ]
    },
    {
      "id": 16608,
      "developers": [
        8172
      ]
    },
    {
      "id": 26299,
      "developers": [
        1389
      ]
    },
    {
      "id": 19590,
      "developers": [
        10113
      ]
    },
    {
      "id": 26621,
      "developers": [
        1218
      ]
    },
    {
      "id": 26625,
      "developers": [
        335
      ]
    },
    {
      "id": 12632,
      "developers": [
        6351
      ]
    },
    {
      "id": 18932,
      "developers": [
        9601
      ]
    },
    {
      "id": 19301,
      "developers": [
        9949
      ]
    },
    {
      "id": 8635,
      "developers": [
        4606
      ]
    },
    {
      "id": 17275,
      "developers": [
        2084
      ]
    },
    {
      "id": 14296,
      "developers": [
        7170
      ]
    },
    {
      "id": 8716,
      "developers": [
        935
      ]
    },
    {
      "id": 13559,
      "developers": [
        2821
      ]
    },
    {
      "id": 19787
    },
    {
      "id": 19786,
      "developers": [
        9533
      ]
    },
    {
      "id": 19203,
      "developers": [
        9876
      ]
    },
    {
      "id": 68106
    },
    {
      "id": 7206,
      "developers": [
        2397
      ]
    },
    {
      "id": 58479,
      "developers": [
        13409
      ]
    },
    {
      "id": 1990,
      "developers": [
        1061
      ]
    },
    {
      "id": 22739,
      "developers": [
        3928
      ]
    },
    {
      "id": 25795,
      "developers": [
        79
      ]
    },
    {
      "id": 9732,
      "developers": [
        5214
      ]
    },
    {
      "id": 21596,
      "developers": [
        407
      ]
    },
    {
      "id": 26744,
      "developers": [
        1405
      ]
    },
    {
      "id": 26752,
      "developers": [
        5113
      ]
    },
    {
      "id": 26364,
      "developers": [
        3701,
        4672
      ]
    },
    {
      "id": 6866,
      "developers": [
        395
      ]
    },
    {
      "id": 11544,
      "developers": [
        2499
      ]
    },
    {
      "id": 9174,
      "developers": [
        747
      ]
    },
    {
      "id": 26848,
      "developers": [
        3087
      ]
    },
    {
      "id": 20894,
      "developers": [
        11962
      ]
    },
    {
      "id": 8617,
      "developers": [
        3701
      ]
    },
    {
      "id": 7498,
      "developers": [
        3958
      ]
    },
    {
      "id": 26500,
      "developers": [
        1394
      ]
    },
    {
      "id": 23158,
      "developers": [
        1012
      ]
    },
    {
      "id": 26964
    },
    {
      "id": 26993
    },
    {
      "id": 19455,
      "developers": [
        26
      ]
    },
    {
      "id": 27032,
      "developers": [
        438
      ]
    },
    {
      "id": 27034,
      "developers": [
        12022
      ]
    },
    {
      "id": 19921,
      "developers": [
        620
      ]
    },
    {
      "id": 18088,
      "developers": [
        3150
      ]
    },
    {
      "id": 20872
    },
    {
      "id": 27092,
      "developers": [
        405
      ]
    },
    {
      "id": 12070,
      "developers": [
        12049
      ]
    },
    {
      "id": 19519,
      "developers": [
        717
      ]
    },
    {
      "id": 27128,
      "developers": [
        12070
      ]
    },
    {
      "id": 27208,
      "developers": [
        8366,
        12132
      ]
    },
    {
      "id": 19220,
      "developers": [
        439
      ]
    },
    {
      "id": 19851,
      "developers": [
        15609
      ]
    },
    {
      "id": 27243,
      "developers": [
        12110
      ]
    },
    {
      "id": 27261,
      "developers": [
        12145
      ]
    },
    {
      "id": 25340,
      "developers": [
        7501
      ]
    },
    {
      "id": 17990,
      "developers": [
        12151
      ]
    },
    {
      "id": 11183,
      "developers": [
        12150
      ]
    },
    {
      "id": 26341,
      "developers": [
        1394,
        2161,
        11740
      ]
    },
    {
      "id": 24051,
      "developers": [
        12165,
        1364
      ]
    },
    {
      "id": 26810,
      "developers": [
        8454
      ]
    },
    {
      "id": 15108,
      "developers": [
        655
      ]
    },
    {
      "id": 27371,
      "developers": [
        12183
      ]
    },
    {
      "id": 27430,
      "developers": [
        853
      ]
    },
    {
      "id": 27378,
      "developers": [
        4591
      ]
    },
    {
      "id": 7350,
      "developers": [
        893
      ]
    },
    {
      "id": 36836,
      "developers": [
        747
      ]
    },
    {
      "id": 1879,
      "developers": [
        910
      ]
    },
    {
      "id": 27973,
      "developers": [
        12391
      ]
    },
    {
      "id": 27519,
      "developers": [
        11881
      ]
    },
    {
      "id": 7324,
      "developers": [
        277
      ]
    },
    {
      "id": 19729,
      "developers": [
        10320
      ]
    },
    {
      "id": 26668,
      "developers": [
        2428
      ]
    },
    {
      "id": 7621,
      "developers": [
        1113
      ]
    },
    {
      "id": 25210,
      "developers": [
        11386
      ]
    },
    {
      "id": 26232,
      "developers": [
        10100
      ]
    },
    {
      "id": 427,
      "developers": [
        250
      ]
    },
    {
      "id": 27783
    },
    {
      "id": 26847,
      "developers": [
        12285
      ]
    },
    {
      "id": 27708,
      "developers": [
        1217
      ]
    },
    {
      "id": 27794,
      "developers": [
        3049
      ]
    },
    {
      "id": 27569,
      "developers": [
        12330
      ]
    },
    {
      "id": 27803,
      "developers": [
        9341
      ]
    },
    {
      "id": 23486,
      "developers": [
        12339
      ]
    },
    {
      "id": 25646,
      "developers": [
        6218
      ]
    },
    {
      "id": 27868,
      "developers": [
        7421
      ]
    },
    {
      "id": 7144,
      "developers": [
        3009
      ]
    },
    {
      "id": 27887,
      "developers": [
        48
      ]
    },
    {
      "id": 11549,
      "developers": [
        1217
      ]
    },
    {
      "id": 46450,
      "developers": [
        407
      ]
    },
    {
      "id": 11064,
      "developers": [
        420
      ]
    },
    {
      "id": 26165,
      "developers": [
        294
      ]
    },
    {
      "id": 27992,
      "developers": [
        1405
      ]
    },
    {
      "id": 28002,
      "developers": [
        26
      ]
    },
    {
      "id": 19462,
      "developers": [
        2952
      ]
    },
    {
      "id": 27910
    },
    {
      "id": 36534,
      "developers": [
        7066
      ]
    },
    {
      "id": 19617,
      "developers": [
        10135,
        10134
      ]
    },
    {
      "id": 28048,
      "developers": [
        4223
      ]
    },
    {
      "id": 21773,
      "developers": [
        4223
      ]
    },
    {
      "id": 28063,
      "developers": [
        438
      ]
    },
    {
      "id": 28062,
      "developers": [
        4223
      ]
    },
    {
      "id": 17648,
      "developers": [
        8900
      ]
    },
    {
      "id": 15300,
      "developers": [
        7474
      ]
    },
    {
      "id": 51524,
      "developers": [
        294
      ]
    },
    {
      "id": 10873
    },
    {
      "id": 14761,
      "developers": [
        7398
      ]
    },
    {
      "id": 11646,
      "developers": [
        6135
      ]
    },
    {
      "id": 27667,
      "developers": [
        4423
      ]
    },
    {
      "id": 4843,
      "developers": [
        2171
      ]
    },
    {
      "id": 28133,
      "developers": [
        592
      ]
    },
    {
      "id": 13681,
      "developers": [
        1474
      ]
    },
    {
      "id": 19452,
      "developers": [
        10315
      ]
    },
    {
      "id": 28188,
      "developers": [
        12496
      ]
    },
    {
      "id": 11233,
      "developers": [
        4356
      ]
    },
    {
      "id": 28210,
      "developers": [
        1012
      ]
    },
    {
      "id": 6852,
      "developers": [
        1753
      ]
    },
    {
      "id": 46777,
      "developers": [
        769
      ]
    },
    {
      "id": 36870,
      "developers": [
        1383,
        10692
      ]
    },
    {
      "id": 2176,
      "developers": [
        1021
      ]
    },
    {
      "id": 19345,
      "developers": [
        3369
      ]
    },
    {
      "id": 28366,
      "developers": [
        769
      ]
    },
    {
      "id": 26102,
      "developers": [
        12627
      ]
    },
    {
      "id": 20330,
      "developers": [
        2688
      ]
    },
    {
      "id": 24963,
      "developers": [
        11338
      ]
    },
    {
      "id": 16583,
      "developers": [
        66
      ]
    },
    {
      "id": 28409,
      "developers": [
        5346,
        1474
      ]
    },
    {
      "id": 28444,
      "developers": [
        1394
      ]
    },
    {
      "id": 41592
    },
    {
      "id": 19927,
      "developers": [
        1394
      ]
    },
    {
      "id": 31561,
      "developers": [
        2852
      ]
    },
    {
      "id": 53656,
      "developers": [
        13228
      ]
    },
    {
      "id": 23188,
      "developers": [
        10702
      ]
    },
    {
      "id": 26678,
      "developers": [
        8181
      ]
    },
    {
      "id": 39761,
      "developers": [
        6079
      ]
    },
    {
      "id": 7329,
      "developers": [
        902,
        439
      ]
    },
    {
      "id": 27051,
      "developers": [
        12031
      ]
    },
    {
      "id": 27518,
      "developers": [
        3191
      ]
    },
    {
      "id": 44549
    },
    {
      "id": 44536
    },
    {
      "id": 16932,
      "developers": [
        13222
      ]
    },
    {
      "id": 47990,
      "developers": [
        6079
      ]
    },
    {
      "id": 44542
    },
    {
      "id": 44548
    },
    {
      "id": 44546
    },
    {
      "id": 44540
    },
    {
      "id": 27216,
      "developers": [
        12282
      ]
    },
    {
      "id": 37016,
      "developers": [
        314
      ]
    },
    {
      "id": 24428,
      "developers": [
        7097
      ]
    },
    {
      "id": 44650,
      "developers": [
        858
      ]
    },
    {
      "id": 28168,
      "developers": [
        8134,
        2216
      ]
    },
    {
      "id": 26228,
      "developers": [
        1377
      ]
    },
    {
      "id": 28745
    },
    {
      "id": 22709,
      "developers": [
        10609
      ]
    },
    {
      "id": 8465,
      "developers": [
        4439
      ]
    },
    {
      "id": 28815,
      "developers": [
        293
      ]
    },
    {
      "id": 28825,
      "developers": [
        2075
      ]
    },
    {
      "id": 28408
    },
    {
      "id": 27530,
      "developers": [
        12233
      ]
    },
    {
      "id": 2955,
      "developers": [
        208
      ]
    },
    {
      "id": 28950,
      "developers": [
        2344
      ]
    },
    {
      "id": 42895
    },
    {
      "id": 42916
    },
    {
      "id": 42918
    },
    {
      "id": 51448,
      "developers": [
        1218
      ]
    },
    {
      "id": 42924
    },
    {
      "id": 42936
    },
    {
      "id": 42958
    },
    {
      "id": 41877
    },
    {
      "id": 37064,
      "developers": [
        38,
        12937
      ]
    },
    {
      "id": 44545
    },
    {
      "id": 42946,
      "developers": [
        4895
      ]
    },
    {
      "id": 23281
    },
    {
      "id": 12519,
      "developers": [
        4673
      ]
    },
    {
      "id": 6810,
      "developers": [
        1134
      ]
    },
    {
      "id": 26202,
      "developers": [
        1006
      ]
    },
    {
      "id": 42928
    },
    {
      "id": 42957
    },
    {
      "id": 11567,
      "developers": [
        1056
      ]
    },
    {
      "id": 5638,
      "developers": [
        85
      ]
    },
    {
      "id": 52190,
      "developers": [
        293,
        292
      ]
    },
    {
      "id": 20869
    },
    {
      "id": 42951
    },
    {
      "id": 23373
    },
    {
      "id": 42935
    },
    {
      "id": 42894
    },
    {
      "id": 42915
    },
    {
      "id": 44532
    },
    {
      "id": 28080
    },
    {
      "id": 37145,
      "developers": [
        12941
      ]
    },
    {
      "id": 11222,
      "developers": [
        2678
      ]
    },
    {
      "id": 18012,
      "developers": [
        8860,
        3763
      ]
    },
    {
      "id": 1941,
      "developers": [
        403
      ]
    },
    {
      "id": 7630,
      "developers": [
        1260
      ]
    },
    {
      "id": 44543
    },
    {
      "id": 23212,
      "developers": [
        10798
      ]
    },
    {
      "id": 11206,
      "developers": [
        841,
        899,
        3655
      ]
    },
    {
      "id": 15559,
      "developers": [
        841,
        899,
        433,
        3655
      ]
    },
    {
      "id": 6250,
      "developers": [
        2729
      ]
    },
    {
      "id": 42938
    },
    {
      "id": 8875,
      "developers": [
        1389
      ]
    },
    {
      "id": 51541,
      "developers": [
        13159,
        3701
      ]
    },
    {
      "id": 20063
    },
    {
      "id": 1939,
      "developers": [
        620
      ]
    },
    {
      "id": 37193,
      "developers": [
        26
      ]
    },
    {
      "id": 27331,
      "developers": [
        1405
      ]
    },
    {
      "id": 42945
    },
    {
      "id": 42933
    },
    {
      "id": 7328,
      "developers": [
        403
      ]
    },
    {
      "id": 41878
    },
    {
      "id": 41876
    },
    {
      "id": 41858
    },
    {
      "id": 42922
    },
    {
      "id": 10952,
      "developers": [
        2983
      ]
    },
    {
      "id": 11177,
      "developers": [
        5957
      ]
    },
    {
      "id": 11612,
      "developers": [
        1218
      ]
    },
    {
      "id": 1886,
      "developers": [
        3594
      ]
    },
    {
      "id": 26194,
      "developers": [
        10692
      ]
    },
    {
      "id": 42917
    },
    {
      "id": 17555,
      "developers": [
        8831
      ]
    },
    {
      "id": 3772,
      "developers": [
        427
      ]
    },
    {
      "id": 1936,
      "developers": [
        702
      ]
    },
    {
      "id": 11590,
      "developers": [
        2172
      ]
    },
    {
      "id": 27666
    },
    {
      "id": 9649,
      "developers": [
        5154
      ]
    },
    {
      "id": 19531,
      "developers": [
        19
      ]
    },
    {
      "id": 3029,
      "developers": [
        1421
      ]
    },
    {
      "id": 44149,
      "developers": [
        438
      ]
    },
    {
      "id": 86442,
      "developers": [
        14783
      ]
    },
    {
      "id": 36601,
      "developers": [
        6567
      ]
    },
    {
      "id": 31749
    },
    {
      "id": 5605,
      "developers": [
        6337,
        2498
      ]
    },
    {
      "id": 11070,
      "developers": [
        7276
      ]
    },
    {
      "id": 9478,
      "developers": [
        6023
      ]
    },
    {
      "id": 21062,
      "developers": [
        10426,
        4468,
        11925
      ]
    },
    {
      "id": 45026,
      "developers": [
        13090
      ]
    },
    {
      "id": 23386
    },
    {
      "id": 23215
    },
    {
      "id": 38488
    },
    {
      "id": 38489,
      "developers": [
        9579
      ]
    },
    {
      "id": 13555,
      "developers": [
        5082
      ]
    },
    {
      "id": 43501,
      "developers": [
        3152
      ]
    },
    {
      "id": 24982
    },
    {
      "id": 26951,
      "developers": [
        47
      ]
    },
    {
      "id": 37060,
      "developers": [
        377
      ]
    },
    {
      "id": 25632,
      "developers": [
        6072
      ]
    },
    {
      "id": 28699
    },
    {
      "id": 34099
    },
    {
      "id": 5597,
      "developers": [
        2490
      ]
    },
    {
      "id": 41862
    },
    {
      "id": 27979,
      "developers": [
        26
      ]
    },
    {
      "id": 20886
    },
    {
      "id": 27272,
      "developers": [
        1394
      ]
    },
    {
      "id": 19440,
      "developers": [
        507
      ]
    },
    {
      "id": 24458,
      "developers": [
        11027
      ]
    },
    {
      "id": 5606,
      "developers": [
        38
      ]
    },
    {
      "id": 18907,
      "developers": [
        67
      ]
    },
    {
      "id": 15909,
      "developers": [
        7908
      ]
    },
    {
      "id": 30825,
      "developers": [
        15474
      ]
    },
    {
      "id": 17966,
      "developers": [
        9167
      ]
    },
    {
      "id": 31013
    },
    {
      "id": 7268,
      "developers": [
        1383
      ]
    },
    {
      "id": 17069,
      "developers": [
        7562
      ]
    },
    {
      "id": 28247,
      "developers": [
        696
      ]
    },
    {
      "id": 26567,
      "developers": [
        14803
      ]
    },
    {
      "id": 20228,
      "developers": [
        823
      ]
    },
    {
      "id": 36832,
      "developers": [
        7421
      ]
    },
    {
      "id": 23581,
      "developers": [
        10860
      ]
    },
    {
      "id": 26291
    },
    {
      "id": 32551
    },
    {
      "id": 12527,
      "developers": [
        112
      ]
    },
    {
      "id": 11170,
      "developers": [
        2297
      ]
    },
    {
      "id": 76576,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 22783,
      "developers": [
        10678,
        1113
      ]
    },
    {
      "id": 28842,
      "developers": [
        12721
      ]
    },
    {
      "id": 32536,
      "developers": [
        13984
      ]
    },
    {
      "id": 29873
    },
    {
      "id": 9176,
      "developers": [
        404
      ]
    },
    {
      "id": 11176,
      "developers": [
        9583
      ]
    },
    {
      "id": 18967,
      "developers": [
        112
      ]
    },
    {
      "id": 28092,
      "developers": [
        4598
      ]
    },
    {
      "id": 19765,
      "developers": [
        1394
      ]
    },
    {
      "id": 23954
    },
    {
      "id": 11397,
      "developers": [
        14150
      ]
    },
    {
      "id": 19048,
      "developers": [
        3064
      ]
    },
    {
      "id": 16470
    },
    {
      "id": 35289
    },
    {
      "id": 62164
    },
    {
      "id": 61583,
      "developers": [
        620
      ]
    },
    {
      "id": 86477,
      "developers": [
        4416
      ]
    },
    {
      "id": 2117,
      "developers": [
        116
      ]
    },
    {
      "id": 37026
    },
    {
      "id": 27314,
      "developers": [
        13158,
        1493
      ]
    },
    {
      "id": 53923
    },
    {
      "id": 27785
    },
    {
      "id": 4486,
      "developers": [
        2378
      ]
    },
    {
      "id": 25964,
      "developers": [
        11607
      ]
    },
    {
      "id": 36394
    },
    {
      "id": 21294,
      "developers": [
        14945
      ]
    },
    {
      "id": 19947
    },
    {
      "id": 23636
    },
    {
      "id": 25261,
      "developers": [
        5452
      ]
    },
    {
      "id": 86478,
      "developers": [
        1392
      ]
    },
    {
      "id": 24482,
      "developers": [
        2462
      ]
    },
    {
      "id": 19089,
      "developers": [
        9840
      ]
    },
    {
      "id": 17095,
      "developers": [
        8290
      ]
    },
    {
      "id": 11434,
      "developers": [
        9185
      ]
    },
    {
      "id": 21405
    },
    {
      "id": 86480,
      "developers": [
        14787
      ]
    },
    {
      "id": 18403,
      "developers": [
        8104,
        7712
      ]
    },
    {
      "id": 18857,
      "developers": [
        9580
      ]
    },
    {
      "id": 9877,
      "developers": [
        5299
      ]
    },
    {
      "id": 24783
    },
    {
      "id": 19935,
      "developers": [
        10305
      ]
    },
    {
      "id": 11565,
      "developers": [
        2438
      ]
    },
    {
      "id": 59898
    },
    {
      "id": 19545,
      "developers": [
        4598
      ]
    },
    {
      "id": 23472
    },
    {
      "id": 32631
    },
    {
      "id": 13197,
      "developers": [
        7011
      ]
    },
    {
      "id": 14397
    },
    {
      "id": 6465
    },
    {
      "id": 8815,
      "developers": [
        7170
      ]
    },
    {
      "id": 16313,
      "developers": [
        8035
      ]
    },
    {
      "id": 60326
    },
    {
      "id": 36199
    },
    {
      "id": 33963
    },
    {
      "id": 36049
    },
    {
      "id": 26709,
      "developers": [
        356
      ]
    },
    {
      "id": 52145
    },
    {
      "id": 52119
    },
    {
      "id": 20963,
      "developers": [
        14789
      ]
    },
    {
      "id": 36131
    },
    {
      "id": 60298
    },
    {
      "id": 11058
    },
    {
      "id": 17855,
      "developers": [
        9073
      ]
    },
    {
      "id": 60198
    },
    {
      "id": 19246,
      "developers": [
        9925
      ]
    },
    {
      "id": 21707
    },
    {
      "id": 9648,
      "developers": [
        5185
      ]
    },
    {
      "id": 5643,
      "developers": [
        1218
      ]
    },
    {
      "id": 26612,
      "developers": [
        8900
      ]
    },
    {
      "id": 19039
    },
    {
      "id": 60826
    },
    {
      "id": 11592,
      "developers": [
        12473
      ]
    },
    {
      "id": 26960
    },
    {
      "id": 52539
    },
    {
      "id": 50107
    },
    {
      "id": 8729,
      "developers": [
        894
      ]
    },
    {
      "id": 9907,
      "developers": [
        5322
      ]
    },
    {
      "id": 23280
    },
    {
      "id": 4847,
      "developers": [
        2172,
        926
      ]
    },
    {
      "id": 17848,
      "developers": [
        8668
      ]
    },
    {
      "id": 7084,
      "developers": [
        13
      ]
    },
    {
      "id": 60468
    },
    {
      "id": 19381,
      "developers": [
        862
      ]
    },
    {
      "id": 24961
    },
    {
      "id": 59901
    },
    {
      "id": 25803,
      "developers": [
        11546
      ]
    },
    {
      "id": 13229,
      "developers": [
        7030
      ]
    },
    {
      "id": 9620,
      "developers": [
        2252,
        1956
      ]
    },
    {
      "id": 62324
    },
    {
      "id": 9865,
      "developers": [
        5294
      ]
    },
    {
      "id": 20182
    },
    {
      "id": 60152,
      "developers": [
        14732
      ]
    },
    {
      "id": 24501,
      "developers": [
        11153
      ]
    },
    {
      "id": 28831
    },
    {
      "id": 14364,
      "developers": [
        1006
      ]
    },
    {
      "id": 5445,
      "developers": [
        2412
      ]
    },
    {
      "id": 6880,
      "developers": [
        314
      ]
    },
    {
      "id": 29141,
      "developers": [
        14003
      ]
    },
    {
      "id": 12571,
      "developers": [
        769
      ]
    },
    {
      "id": 76566,
      "developers": [
        13999
      ]
    },
    {
      "id": 72870,
      "developers": [
        1843
      ]
    },
    {
      "id": 76868,
      "developers": [
        401
      ]
    },
    {
      "id": 61517,
      "developers": [
        13973
      ]
    },
    {
      "id": 28552,
      "developers": [
        38
      ]
    },
    {
      "id": 20734,
      "developers": [
        37
      ]
    },
    {
      "id": 76723,
      "developers": [
        37
      ]
    },
    {
      "id": 76885,
      "developers": [
        732
      ]
    },
    {
      "id": 28856,
      "developers": [
        1062
      ]
    },
    {
      "id": 22387,
      "developers": [
        10561
      ]
    },
    {
      "id": 8256,
      "developers": [
        4184
      ]
    },
    {
      "id": 76886,
      "developers": [
        94
      ]
    },
    {
      "id": 76887,
      "developers": [
        1463
      ]
    },
    {
      "id": 76959,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 86502,
      "developers": [
        2252,
        1956
      ]
    },
    {
      "id": 30221,
      "developers": [
        6938,
        845
      ]
    },
    {
      "id": 10403,
      "developers": [
        5547
      ]
    },
    {
      "id": 16815,
      "developers": [
        8305
      ]
    },
    {
      "id": 82370,
      "developers": [
        1405
      ]
    },
    {
      "id": 27080,
      "developers": [
        12044
      ]
    },
    {
      "id": 55080,
      "developers": [
        14014
      ]
    },
    {
      "id": 27771,
      "developers": [
        12319
      ]
    },
    {
      "id": 77175,
      "developers": [
        37
      ]
    },
    {
      "id": 16992,
      "developers": [
        10474
      ]
    },
    {
      "id": 16999,
      "developers": [
        458
      ]
    },
    {
      "id": 26403,
      "developers": [
        11928
      ]
    },
    {
      "id": 19728,
      "developers": [
        12185
      ]
    },
    {
      "id": 14760,
      "developers": [
        7397
      ]
    },
    {
      "id": 54650,
      "developers": [
        2170
      ]
    },
    {
      "id": 9066,
      "developers": [
        943
      ]
    },
    {
      "id": 17446,
      "developers": [
        8714
      ]
    },
    {
      "id": 19407,
      "developers": [
        954
      ]
    },
    {
      "id": 54699,
      "developers": [
        2397
      ]
    },
    {
      "id": 14580,
      "developers": [
        13292
      ]
    },
    {
      "id": 11221,
      "developers": [
        5359
      ]
    },
    {
      "id": 7291,
      "developers": [
        122
      ]
    },
    {
      "id": 25584,
      "developers": [
        11431
      ]
    },
    {
      "id": 28003,
      "developers": [
        12409,
        8252
      ]
    },
    {
      "id": 14748,
      "developers": [
        837
      ]
    },
    {
      "id": 78127,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 86657,
      "developers": [
        14817
      ]
    },
    {
      "id": 71456,
      "developers": [
        14023
      ]
    },
    {
      "id": 75973,
      "developers": [
        2751
      ]
    },
    {
      "id": 30847,
      "developers": [
        9442
      ]
    },
    {
      "id": 19497
    },
    {
      "id": 28548,
      "developers": [
        12684,
        12683
      ]
    },
    {
      "id": 56678,
      "developers": [
        6142
      ]
    },
    {
      "id": 78149,
      "developers": [
        163
      ]
    },
    {
      "id": 78154,
      "developers": [
        1464
      ]
    },
    {
      "id": 78161,
      "developers": [
        37
      ]
    },
    {
      "id": 36766,
      "developers": [
        2412
      ]
    },
    {
      "id": 27419,
      "developers": [
        5068
      ]
    },
    {
      "id": 27434,
      "developers": [
        2219
      ]
    },
    {
      "id": 19919,
      "developers": [
        15835
      ]
    },
    {
      "id": 19696,
      "developers": [
        614
      ]
    },
    {
      "id": 25530
    },
    {
      "id": 76742,
      "developers": [
        1997
      ]
    },
    {
      "id": 55112,
      "developers": [
        14150,
        112
      ]
    },
    {
      "id": 23420,
      "developers": [
        423
      ]
    },
    {
      "id": 69512,
      "developers": [
        2172
      ]
    },
    {
      "id": 36198,
      "developers": [
        1718
      ]
    },
    {
      "id": 11247,
      "developers": [
        7900
      ]
    },
    {
      "id": 54996,
      "developers": [
        208
      ]
    },
    {
      "id": 55020,
      "developers": [
        13317
      ]
    },
    {
      "id": 37134,
      "developers": [
        2438
      ]
    },
    {
      "id": 37088,
      "developers": [
        126
      ]
    },
    {
      "id": 78917,
      "developers": [
        659
      ]
    },
    {
      "id": 26852,
      "developers": [
        406
      ]
    },
    {
      "id": 21063,
      "developers": [
        395
      ]
    },
    {
      "id": 55038,
      "developers": [
        13326
      ]
    },
    {
      "id": 36551,
      "developers": [
        3077
      ]
    },
    {
      "id": 40968
    },
    {
      "id": 68358,
      "developers": [
        13482
      ]
    },
    {
      "id": 52187,
      "developers": [
        303,
        13178
      ]
    },
    {
      "id": 27526,
      "developers": [
        9060
      ]
    },
    {
      "id": 2638,
      "developers": [
        1243
      ]
    },
    {
      "id": 7603,
      "developers": [
        795
      ]
    },
    {
      "id": 28951,
      "developers": [
        115
      ]
    },
    {
      "id": 55176,
      "developers": [
        1021
      ]
    },
    {
      "id": 27241,
      "developers": [
        3087
      ]
    },
    {
      "id": 75285
    },
    {
      "id": 27529,
      "developers": [
        9733
      ]
    },
    {
      "id": 74874,
      "developers": [
        836
      ]
    },
    {
      "id": 24974,
      "developers": [
        11301,
        11302
      ]
    },
    {
      "id": 24369,
      "developers": [
        37
      ]
    },
    {
      "id": 11668,
      "developers": [
        9308
      ]
    },
    {
      "id": 7255,
      "developers": [
        3038
      ]
    },
    {
      "id": 78550,
      "developers": [
        14163
      ]
    },
    {
      "id": 68461,
      "developers": [
        769
      ]
    },
    {
      "id": 56892,
      "developers": [
        14292
      ]
    },
    {
      "id": 65820,
      "developers": [
        14301
      ]
    },
    {
      "id": 80012,
      "developers": [
        1398
      ]
    },
    {
      "id": 28818,
      "developers": [
        12712
      ]
    },
    {
      "id": 19893,
      "developers": [
        3152
      ]
    },
    {
      "id": 2939,
      "developers": [
        2518
      ]
    },
    {
      "id": 80853,
      "developers": [
        314
      ]
    },
    {
      "id": 21592,
      "developers": [
        2145
      ]
    },
    {
      "id": 51995
    },
    {
      "id": 20945,
      "developers": [
        2145
      ]
    },
    {
      "id": 41626
    },
    {
      "id": 15853,
      "developers": [
        47
      ]
    },
    {
      "id": 74552,
      "developers": [
        13653
      ]
    },
    {
      "id": 31792,
      "developers": [
        10955
      ]
    },
    {
      "id": 44280,
      "developers": [
        14327
      ]
    },
    {
      "id": 76726,
      "developers": [
        2431
      ]
    },
    {
      "id": 67625,
      "developers": [
        563
      ]
    },
    {
      "id": 57003,
      "developers": [
        169
      ]
    },
    {
      "id": 87742,
      "developers": [
        1952,
        2252
      ]
    },
    {
      "id": 37067,
      "developers": [
        841
      ]
    },
    {
      "id": 3102,
      "developers": [
        1464,
        2827
      ]
    },
    {
      "id": 34567
    },
    {
      "id": 54218,
      "developers": [
        9969
      ]
    },
    {
      "id": 54217,
      "developers": [
        9969
      ]
    },
    {
      "id": 41620,
      "developers": [
        711
      ]
    },
    {
      "id": 23993,
      "developers": [
        3957
      ]
    },
    {
      "id": 20861
    },
    {
      "id": 8173,
      "developers": [
        51
      ]
    },
    {
      "id": 57002,
      "developers": [
        169
      ]
    },
    {
      "id": 69346
    },
    {
      "id": 54524,
      "developers": [
        3049
      ]
    },
    {
      "id": 29545,
      "developers": [
        16310
      ]
    },
    {
      "id": 23479,
      "developers": [
        3152
      ]
    },
    {
      "id": 26401,
      "developers": [
        94
      ]
    },
    {
      "id": 28289,
      "developers": [
        13661
      ]
    },
    {
      "id": 37143,
      "developers": [
        4895
      ]
    },
    {
      "id": 26933
    },
    {
      "id": 27159
    },
    {
      "id": 18182,
      "developers": [
        9327
      ]
    },
    {
      "id": 28540,
      "developers": [
        38
      ]
    },
    {
      "id": 33309,
      "developers": [
        13759
      ]
    },
    {
      "id": 28044,
      "developers": [
        1113
      ]
    },
    {
      "id": 21317,
      "developers": [
        13978
      ]
    },
    {
      "id": 18157,
      "developers": [
        9311
      ]
    },
    {
      "id": 19525,
      "developers": [
        2219
      ]
    },
    {
      "id": 37094,
      "developers": [
        1030
      ]
    },
    {
      "id": 70833,
      "developers": [
        13671
      ]
    },
    {
      "id": 27283,
      "developers": [
        2481
      ]
    },
    {
      "id": 28170,
      "developers": [
        4602,
        2440
      ]
    },
    {
      "id": 80963,
      "developers": [
        5198
      ]
    },
    {
      "id": 57021,
      "developers": [
        2206
      ]
    },
    {
      "id": 26546,
      "developers": [
        1394
      ]
    },
    {
      "id": 40237
    },
    {
      "id": 36662,
      "developers": [
        965
      ]
    },
    {
      "id": 37291,
      "developers": [
        26
      ]
    },
    {
      "id": 75546,
      "developers": [
        2170
      ]
    },
    {
      "id": 37087
    },
    {
      "id": 28086,
      "developers": [
        3006
      ]
    },
    {
      "id": 28192,
      "developers": [
        12498
      ]
    },
    {
      "id": 55244,
      "developers": [
        1904
      ]
    },
    {
      "id": 36847,
      "developers": [
        277
      ]
    },
    {
      "id": 59849,
      "developers": [
        29
      ]
    },
    {
      "id": 59851,
      "developers": [
        854
      ]
    },
    {
      "id": 81085,
      "developers": [
        794,
        774
      ]
    },
    {
      "id": 8262,
      "developers": [
        4225
      ]
    },
    {
      "id": 59858,
      "developers": [
        4225
      ]
    },
    {
      "id": 61582,
      "developers": [
        13425
      ]
    },
    {
      "id": 29250,
      "developers": [
        13941
      ]
    },
    {
      "id": 81146,
      "developers": [
        1474
      ]
    },
    {
      "id": 27324,
      "developers": [
        13740
      ]
    },
    {
      "id": 30392
    },
    {
      "id": 26226,
      "developers": [
        5542
      ]
    },
    {
      "id": 68279,
      "developers": [
        2344
      ]
    },
    {
      "id": 81203,
      "developers": [
        4679
      ]
    },
    {
      "id": 19448,
      "developers": [
        10821
      ]
    },
    {
      "id": 28863,
      "developers": [
        2952
      ]
    },
    {
      "id": 78153,
      "developers": [
        14861,
        347
      ]
    },
    {
      "id": 30572,
      "developers": [
        5314
      ]
    },
    {
      "id": 65837,
      "developers": [
        2499
      ]
    },
    {
      "id": 28943,
      "developers": [
        14299
      ]
    },
    {
      "id": 29164
    },
    {
      "id": 73075
    },
    {
      "id": 81205,
      "developers": [
        7041
      ]
    },
    {
      "id": 38504,
      "developers": [
        13655
      ]
    },
    {
      "id": 8905
    },
    {
      "id": 23797,
      "developers": [
        1134
      ]
    },
    {
      "id": 81289
    },
    {
      "id": 81355
    },
    {
      "id": 86681,
      "developers": [
        836
      ]
    },
    {
      "id": 21229
    },
    {
      "id": 87854,
      "developers": [
        2206
      ]
    },
    {
      "id": 81576,
      "developers": [
        1474
      ]
    },
    {
      "id": 51378
    },
    {
      "id": 30717
    },
    {
      "id": 19958,
      "developers": [
        1217
      ]
    },
    {
      "id": 63712,
      "developers": [
        1218
      ]
    },
    {
      "id": 20907,
      "developers": [
        4598
      ]
    },
    {
      "id": 2637,
      "developers": [
        4602,
        389,
        1303
      ]
    },
    {
      "id": 39046
    },
    {
      "id": 87855,
      "developers": [
        2206
      ]
    },
    {
      "id": 39044
    },
    {
      "id": 39047
    },
    {
      "id": 72812,
      "developers": [
        837
      ]
    },
    {
      "id": 65530,
      "developers": [
        2428
      ]
    },
    {
      "id": 36144,
      "developers": [
        13438
      ]
    },
    {
      "id": 86225,
      "developers": [
        1952,
        2252
      ]
    },
    {
      "id": 74531,
      "developers": [
        14142
      ]
    },
    {
      "id": 18113,
      "developers": [
        10311
      ]
    },
    {
      "id": 55121,
      "developers": [
        3225
      ]
    },
    {
      "id": 11215,
      "developers": [
        5913
      ]
    },
    {
      "id": 68278,
      "developers": [
        13467
      ]
    },
    {
      "id": 28337,
      "developers": [
        1060
      ]
    },
    {
      "id": 26642,
      "developers": [
        13472
      ]
    },
    {
      "id": 45095,
      "developers": [
        7501
      ]
    },
    {
      "id": 421,
      "developers": [
        324
      ]
    },
    {
      "id": 51385,
      "developers": [
        13473
      ]
    },
    {
      "id": 68284,
      "developers": [
        6181,
        129
      ]
    },
    {
      "id": 27376,
      "developers": [
        12187
      ]
    },
    {
      "id": 41623,
      "developers": [
        294
      ]
    },
    {
      "id": 30152,
      "developers": [
        9056
      ]
    },
    {
      "id": 78754,
      "developers": [
        2546
      ]
    },
    {
      "id": 82120,
      "developers": [
        10003
      ]
    },
    {
      "id": 21598
    },
    {
      "id": 28245,
      "developers": [
        7727,
        1217
      ]
    },
    {
      "id": 45130
    },
    {
      "id": 54612
    },
    {
      "id": 28829,
      "developers": [
        610
      ]
    },
    {
      "id": 23236,
      "developers": [
        10803
      ]
    },
    {
      "id": 20344,
      "developers": [
        13494,
        5457
      ]
    },
    {
      "id": 75865,
      "developers": [
        2676
      ]
    },
    {
      "id": 26190,
      "developers": [
        11668
      ]
    },
    {
      "id": 7194,
      "developers": [
        2946,
        2428,
        5996
      ]
    },
    {
      "id": 26404,
      "developers": [
        94
      ]
    },
    {
      "id": 68481,
      "developers": [
        5346
      ]
    },
    {
      "id": 19474,
      "developers": [
        908
      ]
    },
    {
      "id": 24426,
      "developers": [
        11285
      ]
    },
    {
      "id": 23835,
      "developers": [
        6100,
        3821
      ]
    },
    {
      "id": 68482,
      "developers": [
        5346
      ]
    },
    {
      "id": 67624,
      "developers": [
        5346
      ]
    },
    {
      "id": 8174,
      "developers": [
        4089
      ]
    },
    {
      "id": 30988,
      "developers": [
        12548
      ]
    },
    {
      "id": 30997,
      "developers": [
        14906
      ]
    },
    {
      "id": 20005,
      "developers": [
        453
      ]
    },
    {
      "id": 20004,
      "developers": [
        453
      ]
    },
    {
      "id": 6160,
      "developers": [
        10
      ]
    },
    {
      "id": 36784,
      "developers": [
        14274
      ]
    },
    {
      "id": 86362,
      "developers": [
        14911
      ]
    },
    {
      "id": 52828
    },
    {
      "id": 29065,
      "developers": [
        3009
      ]
    },
    {
      "id": 74963,
      "developers": [
        453
      ]
    },
    {
      "id": 27723,
      "developers": [
        10591
      ]
    },
    {
      "id": 81220,
      "developers": [
        2952
      ]
    },
    {
      "id": 8311,
      "developers": [
        198
      ]
    },
    {
      "id": 20123,
      "developers": [
        2248
      ]
    },
    {
      "id": 38973,
      "developers": [
        690
      ]
    },
    {
      "id": 83731,
      "developers": [
        14481
      ]
    },
    {
      "id": 36950,
      "developers": [
        2
      ]
    },
    {
      "id": 25637
    },
    {
      "id": 83781,
      "developers": [
        13943
      ]
    },
    {
      "id": 53012
    },
    {
      "id": 53011
    },
    {
      "id": 58783,
      "developers": [
        400
      ]
    },
    {
      "id": 83824
    },
    {
      "id": 27435,
      "developers": [
        12207
      ]
    },
    {
      "id": 83886
    },
    {
      "id": 83888
    },
    {
      "id": 83778
    },
    {
      "id": 56347,
      "developers": [
        912
      ]
    },
    {
      "id": 69653,
      "developers": [
        2075
      ]
    },
    {
      "id": 69980,
      "developers": [
        5346
      ]
    },
    {
      "id": 26230
    },
    {
      "id": 71387,
      "developers": [
        13539
      ]
    },
    {
      "id": 27367,
      "developers": [
        12178
      ]
    },
    {
      "id": 89554,
      "developers": [
        315
      ]
    },
    {
      "id": 28966,
      "developers": [
        94
      ]
    },
    {
      "id": 27240,
      "developers": [
        3087
      ]
    },
    {
      "id": 27403,
      "developers": [
        12197
      ]
    },
    {
      "id": 75237,
      "developers": [
        5964
      ]
    },
    {
      "id": 18474
    },
    {
      "id": 14763,
      "developers": [
        859
      ]
    },
    {
      "id": 28128
    },
    {
      "id": 29993,
      "developers": [
        14733
      ]
    },
    {
      "id": 52164,
      "developers": [
        2332
      ]
    },
    {
      "id": 83931,
      "developers": [
        2582
      ]
    },
    {
      "id": 22375,
      "developers": [
        10552
      ]
    },
    {
      "id": 41812,
      "developers": [
        13065
      ]
    },
    {
      "id": 85538,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 1331,
      "developers": [
        854,
        748
      ]
    },
    {
      "id": 31557,
      "developers": [
        14942
      ]
    },
    {
      "id": 36954
    },
    {
      "id": 27697,
      "developers": [
        12283
      ]
    },
    {
      "id": 85561,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 29586,
      "developers": [
        13556
      ]
    },
    {
      "id": 75304,
      "developers": [
        13754
      ]
    },
    {
      "id": 38499
    },
    {
      "id": 85669,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 25076,
      "developers": [
        7156
      ]
    },
    {
      "id": 84108,
      "developers": [
        14739
      ]
    },
    {
      "id": 54709,
      "developers": [
        13291
      ]
    },
    {
      "id": 4788,
      "developers": [
        2147
      ]
    },
    {
      "id": 20470,
      "developers": [
        94
      ]
    },
    {
      "id": 27139,
      "developers": [
        8776
      ]
    },
    {
      "id": 23330,
      "developers": [
        2729
      ]
    },
    {
      "id": 28574,
      "developers": [
        175
      ]
    },
    {
      "id": 27385,
      "developers": [
        12192
      ]
    },
    {
      "id": 54455,
      "developers": [
        13239
      ]
    },
    {
      "id": 5595,
      "developers": [
        2345,
        835
      ]
    },
    {
      "id": 75378,
      "developers": [
        4252
      ]
    },
    {
      "id": 53678,
      "developers": [
        37
      ]
    },
    {
      "id": 32699
    },
    {
      "id": 36462,
      "developers": [
        3152
      ]
    },
    {
      "id": 54788,
      "developers": [
        13771
      ]
    },
    {
      "id": 27441,
      "developers": [
        1418
      ]
    },
    {
      "id": 9609,
      "developers": [
        5136
      ]
    },
    {
      "id": 23161
    },
    {
      "id": 27395,
      "developers": [
        37
      ]
    },
    {
      "id": 18645,
      "developers": [
        4824
      ]
    },
    {
      "id": 56526
    },
    {
      "id": 83993,
      "developers": [
        12438
      ]
    },
    {
      "id": 20454,
      "developers": [
        5169,
        12663
      ]
    },
    {
      "id": 4796,
      "developers": [
        891,
        1303
      ]
    },
    {
      "id": 35020
    },
    {
      "id": 27514,
      "developers": [
        1459
      ]
    },
    {
      "id": 27986,
      "developers": [
        12398
      ]
    },
    {
      "id": 24983
    },
    {
      "id": 58946
    },
    {
      "id": 25577,
      "developers": [
        8461
      ]
    },
    {
      "id": 10989,
      "developers": [
        9433
      ]
    },
    {
      "id": 11602,
      "developers": [
        946,
        6115,
        11883,
        6113
      ]
    },
    {
      "id": 51464,
      "developers": [
        248
      ]
    },
    {
      "id": 38025
    },
    {
      "id": 7829
    },
    {
      "id": 41616
    },
    {
      "id": 11155,
      "developers": [
        746
      ]
    },
    {
      "id": 52133
    },
    {
      "id": 28522,
      "developers": [
        14155
      ]
    },
    {
      "id": 55172,
      "developers": [
        3682
      ]
    },
    {
      "id": 29137
    },
    {
      "id": 36542
    },
    {
      "id": 55162
    },
    {
      "id": 2026
    },
    {
      "id": 10760,
      "developers": [
        14304
      ]
    },
    {
      "id": 75676,
      "developers": [
        2678,
        5346
      ]
    },
    {
      "id": 25113,
      "developers": [
        13845
      ]
    },
    {
      "id": 71455,
      "developers": [
        690
      ]
    },
    {
      "id": 26363,
      "developers": [
        12078
      ]
    },
    {
      "id": 14720,
      "developers": [
        7382
      ]
    },
    {
      "id": 36597,
      "developers": [
        12832
      ]
    },
    {
      "id": 26624,
      "developers": [
        5324
      ]
    },
    {
      "id": 36856,
      "developers": [
        1021
      ]
    },
    {
      "id": 2933,
      "developers": [
        26
      ]
    },
    {
      "id": 28492,
      "developers": [
        48
      ]
    },
    {
      "id": 55046
    },
    {
      "id": 33194
    },
    {
      "id": 53404
    },
    {
      "id": 75700,
      "developers": [
        303,
        5346
      ]
    },
    {
      "id": 75706,
      "developers": [
        1753,
        5346
      ]
    },
    {
      "id": 75705,
      "developers": [
        2678,
        5346
      ]
    },
    {
      "id": 75704,
      "developers": [
        2918,
        5346
      ]
    },
    {
      "id": 75702,
      "developers": [
        817,
        5346
      ]
    },
    {
      "id": 75847,
      "developers": [
        1242
      ]
    },
    {
      "id": 26722,
      "developers": [
        11908
      ]
    },
    {
      "id": 36814,
      "developers": [
        3046
      ]
    },
    {
      "id": 75864,
      "developers": [
        10023
      ]
    },
    {
      "id": 75867
    },
    {
      "id": 75844,
      "developers": [
        1242
      ]
    },
    {
      "id": 75846,
      "developers": [
        1242
      ]
    },
    {
      "id": 18338,
      "developers": [
        14946
      ]
    },
    {
      "id": 5560,
      "developers": [
        11739,
        1802
      ]
    },
    {
      "id": 57020,
      "developers": [
        13401,
        13400
      ]
    },
    {
      "id": 342,
      "developers": [
        224,
        225,
        226,
        2345
      ]
    },
    {
      "id": 89982
    },
    {
      "id": 32358,
      "developers": [
        15237
      ]
    },
    {
      "id": 76054,
      "developers": [
        2678,
        5346
      ]
    },
    {
      "id": 70396,
      "developers": [
        16332
      ]
    },
    {
      "id": 75990,
      "developers": [
        2909
      ]
    },
    {
      "id": 26700,
      "developers": [
        6485,
        1281
      ]
    },
    {
      "id": 20482
    },
    {
      "id": 11172,
      "developers": [
        394
      ]
    },
    {
      "id": 26664,
      "developers": [
        5254
      ]
    },
    {
      "id": 54979,
      "developers": [
        13929
      ]
    },
    {
      "id": 80895,
      "developers": [
        3024
      ]
    },
    {
      "id": 76397
    },
    {
      "id": 80952,
      "developers": [
        11405
      ]
    },
    {
      "id": 76213,
      "developers": [
        1474,
        5346
      ]
    },
    {
      "id": 40170
    },
    {
      "id": 20877
    },
    {
      "id": 17158,
      "developers": [
        8536,
        7193
      ]
    },
    {
      "id": 19520,
      "developers": [
        13947,
        10353
      ]
    },
    {
      "id": 19979,
      "developers": [
        4133
      ]
    },
    {
      "id": 75848,
      "developers": [
        112
      ]
    },
    {
      "id": 7533,
      "developers": [
        3115
      ]
    },
    {
      "id": 6705,
      "developers": [
        2884
      ]
    },
    {
      "id": 76417,
      "developers": [
        13967
      ]
    },
    {
      "id": 16534,
      "developers": [
        1254
      ]
    },
    {
      "id": 47486
    },
    {
      "id": 41637
    },
    {
      "id": 11499
    },
    {
      "id": 16136,
      "developers": [
        10595
      ]
    },
    {
      "id": 19518,
      "developers": [
        10301
      ]
    },
    {
      "id": 10137,
      "developers": [
        5838
      ]
    },
    {
      "id": 32021
    },
    {
      "id": 1644,
      "developers": [
        62,
        11
      ]
    },
    {
      "id": 90009,
      "developers": [
        248
      ]
    },
    {
      "id": 10255,
      "developers": [
        3923
      ]
    },
    {
      "id": 19849
    },
    {
      "id": 26972,
      "developers": [
        13750
      ]
    },
    {
      "id": 26725,
      "developers": [
        5195
      ]
    },
    {
      "id": 86269,
      "developers": [
        404
      ]
    },
    {
      "id": 78249,
      "developers": [
        294
      ]
    },
    {
      "id": 431,
      "developers": [
        401
      ]
    },
    {
      "id": 1942,
      "developers": [
        908
      ]
    },
    {
      "id": 565,
      "developers": [
        401
      ]
    },
    {
      "id": 2134,
      "developers": [
        1006
      ]
    },
    {
      "id": 3185,
      "developers": [
        555
      ]
    },
    {
      "id": 1937,
      "developers": [
        1843
      ]
    },
    {
      "id": 3191,
      "developers": [
        1009
      ]
    },
    {
      "id": 18968,
      "developers": [
        438
      ]
    },
    {
      "id": 3091,
      "developers": [
        94
      ]
    },
    {
      "id": 5772,
      "developers": [
        2542
      ]
    },
    {
      "id": 27277,
      "developers": [
        4483
      ]
    },
    {
      "id": 7451,
      "developers": [
        1459
      ]
    },
    {
      "id": 62711
    },
    {
      "id": 53805
    },
    {
      "id": 8236,
      "developers": [
        4357
      ]
    },
    {
      "id": 6801,
      "developers": [
        398,
        38,
        2921,
        717,
        847
      ]
    },
    {
      "id": 6036,
      "developers": [
        401
      ]
    },
    {
      "id": 5593,
      "developers": [
        2046
      ]
    },
    {
      "id": 3022,
      "developers": [
        928
      ]
    },
    {
      "id": 23431
    },
    {
      "id": 26224,
      "developers": [
        11683
      ]
    },
    {
      "id": 19135,
      "developers": [
        2
      ]
    },
    {
      "id": 7618,
      "developers": [
        4134
      ]
    },
    {
      "id": 1020,
      "developers": [
        365
      ]
    },
    {
      "id": 19136,
      "developers": [
        453
      ]
    },
    {
      "id": 5159,
      "developers": [
        72,
        432,
        319
      ]
    },
    {
      "id": 7768,
      "developers": [
        3689
      ]
    },
    {
      "id": 2346,
      "developers": [
        1104
      ]
    },
    {
      "id": 5329,
      "developers": [
        694
      ]
    },
    {
      "id": 3097,
      "developers": [
        294
      ]
    },
    {
      "id": 7649,
      "developers": [
        3213
      ]
    },
    {
      "id": 3093,
      "developers": [
        94
      ]
    },
    {
      "id": 3775,
      "developers": [
        38,
        896
      ]
    },
    {
      "id": 7729,
      "developers": [
        3497,
        4357
      ]
    },
    {
      "id": 7325,
      "developers": [
        552
      ]
    },
    {
      "id": 8356,
      "developers": [
        4362
      ]
    },
    {
      "id": 7330,
      "developers": [
        439
      ]
    },
    {
      "id": 6072,
      "developers": [
        404
      ]
    },
    {
      "id": 7876,
      "developers": [
        3821
      ]
    },
    {
      "id": 7877,
      "developers": [
        852
      ]
    },
    {
      "id": 7882,
      "developers": [
        555
      ]
    },
    {
      "id": 7599,
      "developers": [
        894
      ]
    },
    {
      "id": 7846,
      "developers": [
        1059,
        694
      ]
    },
    {
      "id": 6057,
      "developers": [
        420
      ]
    },
    {
      "id": 8366,
      "developers": [
        318
      ]
    },
    {
      "id": 7439
    },
    {
      "id": 3839,
      "developers": [
        1924
      ]
    },
    {
      "id": 7399
    },
    {
      "id": 8510,
      "developers": [
        7216
      ]
    },
    {
      "id": 3048,
      "developers": [
        431,
        4357
      ]
    },
    {
      "id": 3096,
      "developers": [
        94
      ]
    },
    {
      "id": 4784,
      "developers": [
        277
      ]
    },
    {
      "id": 7699,
      "developers": [
        1243
      ]
    },
    {
      "id": 8117,
      "developers": [
        4064
      ]
    },
    {
      "id": 5551,
      "developers": [
        2462
      ]
    },
    {
      "id": 3770,
      "developers": [
        55
      ]
    },
    {
      "id": 8252,
      "developers": [
        4180
      ]
    },
    {
      "id": 7717,
      "developers": [
        555
      ]
    },
    {
      "id": 8651,
      "developers": [
        14330
      ]
    },
    {
      "id": 8655,
      "developers": [
        2170
      ]
    },
    {
      "id": 4348,
      "developers": [
        501
      ]
    },
    {
      "id": 8684,
      "developers": [
        4624
      ]
    },
    {
      "id": 8731,
      "developers": [
        716
      ]
    },
    {
      "id": 7686,
      "developers": [
        2973
      ]
    },
    {
      "id": 2031,
      "developers": [
        1242
      ]
    },
    {
      "id": 8211,
      "developers": [
        769
      ]
    },
    {
      "id": 8921,
      "developers": [
        5025
      ]
    },
    {
      "id": 8967,
      "developers": [
        614
      ]
    },
    {
      "id": 9215,
      "developers": [
        5978
      ]
    },
    {
      "id": 7081,
      "developers": [
        7,
        94
      ]
    },
    {
      "id": 7386,
      "developers": [
        414
      ]
    },
    {
      "id": 9523,
      "developers": [
        3689
      ]
    },
    {
      "id": 2903,
      "developers": [
        17
      ]
    },
    {
      "id": 8652,
      "developers": [
        10023
      ]
    },
    {
      "id": 9559,
      "developers": [
        5120
      ]
    },
    {
      "id": 9642,
      "developers": [
        2170
      ]
    },
    {
      "id": 9651
    },
    {
      "id": 9725,
      "developers": [
        5211
      ]
    },
    {
      "id": 2126,
      "developers": [
        1003
      ]
    },
    {
      "id": 7612,
      "developers": [
        5985
      ]
    },
    {
      "id": 7705
    },
    {
      "id": 9912,
      "developers": [
        2933,
        748
      ]
    },
    {
      "id": 9212,
      "developers": [
        4133
      ]
    },
    {
      "id": 5503,
      "developers": [
        164
      ]
    },
    {
      "id": 10088,
      "developers": [
        5447,
        4357
      ]
    },
    {
      "id": 18614,
      "developers": [
        9492
      ]
    },
    {
      "id": 8862,
      "developers": [
        2168
      ]
    },
    {
      "id": 11074
    },
    {
      "id": 9630,
      "developers": [
        126
      ]
    },
    {
      "id": 11158
    },
    {
      "id": 8187,
      "developers": [
        437
      ]
    },
    {
      "id": 9223,
      "developers": [
        1380
      ]
    },
    {
      "id": 9918,
      "developers": [
        293
      ]
    },
    {
      "id": 10184,
      "developers": [
        150
      ]
    },
    {
      "id": 11290,
      "developers": [
        399
      ]
    },
    {
      "id": 6452,
      "developers": [
        3958,
        1913,
        8134
      ]
    },
    {
      "id": 11342,
      "developers": [
        6017
      ]
    },
    {
      "id": 1352,
      "developers": [
        857
      ]
    },
    {
      "id": 11071,
      "developers": [
        277
      ]
    },
    {
      "id": 11409,
      "developers": [
        6054
      ]
    },
    {
      "id": 8260,
      "developers": [
        4223
      ]
    },
    {
      "id": 4759,
      "developers": [
        2121,
        2122
      ]
    },
    {
      "id": 11004,
      "developers": [
        862
      ]
    },
    {
      "id": 11564,
      "developers": [
        2344
      ]
    },
    {
      "id": 11566,
      "developers": [
        400,
        6085
      ]
    },
    {
      "id": 7293,
      "developers": [
        953
      ]
    },
    {
      "id": 9547,
      "developers": [
        5112
      ]
    },
    {
      "id": 2720,
      "developers": [
        636,
        637
      ]
    },
    {
      "id": 11654,
      "developers": [
        170
      ]
    },
    {
      "id": 11275,
      "developers": [
        1459
      ]
    },
    {
      "id": 10128,
      "developers": [
        843
      ]
    },
    {
      "id": 16989,
      "developers": [
        852
      ]
    },
    {
      "id": 11718,
      "developers": [
        769
      ]
    },
    {
      "id": 7789,
      "developers": [
        3701,
        4672
      ]
    },
    {
      "id": 8506,
      "developers": [
        4496
      ]
    },
    {
      "id": 8640,
      "developers": [
        4611
      ]
    },
    {
      "id": 5892,
      "developers": [
        2580,
        4065
      ]
    },
    {
      "id": 9647,
      "developers": [
        5152
      ]
    },
    {
      "id": 17244,
      "developers": [
        8410
      ]
    },
    {
      "id": 11814
    },
    {
      "id": 12530,
      "developers": [
        37,
        8593
      ]
    },
    {
      "id": 18993,
      "developers": [
        1260
      ]
    },
    {
      "id": 8255,
      "developers": [
        2729
      ]
    },
    {
      "id": 7600,
      "developers": [
        1006
      ]
    },
    {
      "id": 9927,
      "developers": [
        818,
        9969
      ]
    },
    {
      "id": 13166,
      "developers": [
        908
      ]
    },
    {
      "id": 8644,
      "developers": [
        4616
      ]
    },
    {
      "id": 11254,
      "developers": [
        5964
      ]
    },
    {
      "id": 11959,
      "developers": [
        2952
      ]
    },
    {
      "id": 10962,
      "developers": [
        1030,
        401
      ]
    },
    {
      "id": 12815,
      "developers": [
        3213
      ]
    },
    {
      "id": 11213,
      "developers": [
        1983
      ]
    },
    {
      "id": 7641,
      "developers": [
        3191
      ]
    },
    {
      "id": 3173,
      "developers": [
        1532
      ]
    },
    {
      "id": 3211,
      "developers": [
        175
      ]
    },
    {
      "id": 24932,
      "developers": [
        795
      ]
    },
    {
      "id": 12216
    },
    {
      "id": 12633,
      "developers": [
        3046
      ]
    },
    {
      "id": 27081,
      "developers": [
        277,
        4148
      ]
    },
    {
      "id": 10090,
      "developers": [
        1269,
        5449
      ]
    },
    {
      "id": 11320,
      "developers": [
        448
      ]
    },
    {
      "id": 11340,
      "developers": [
        6015
      ]
    },
    {
      "id": 9418,
      "developers": [
        6916
      ]
    },
    {
      "id": 11175,
      "developers": [
        852
      ]
    },
    {
      "id": 11157,
      "developers": [
        290
      ]
    },
    {
      "id": 13198,
      "developers": [
        7012
      ]
    },
    {
      "id": 11540,
      "developers": [
        1983
      ]
    },
    {
      "id": 885,
      "developers": [
        591
      ]
    },
    {
      "id": 11525,
      "developers": [
        694
      ]
    },
    {
      "id": 13548,
      "developers": [
        3045
      ]
    },
    {
      "id": 13550,
      "developers": [
        6058,
        6059
      ]
    },
    {
      "id": 11069,
      "developers": [
        292,
        1290
      ]
    },
    {
      "id": 13551,
      "developers": [
        7056
      ]
    },
    {
      "id": 12885,
      "developers": [
        6017
      ]
    },
    {
      "id": 7360,
      "developers": [
        38
      ]
    },
    {
      "id": 1384,
      "developers": [
        1003
      ]
    },
    {
      "id": 11059,
      "developers": [
        2438
      ]
    },
    {
      "id": 3224,
      "developers": [
        223
      ]
    },
    {
      "id": 14327,
      "developers": [
        5193
      ]
    },
    {
      "id": 8258,
      "developers": [
        37
      ]
    },
    {
      "id": 14414,
      "developers": [
        954
      ]
    },
    {
      "id": 2114,
      "developers": [
        537
      ]
    },
    {
      "id": 14523,
      "developers": [
        953
      ]
    },
    {
      "id": 11174,
      "developers": [
        620
      ]
    },
    {
      "id": 14548,
      "developers": [
        148,
        3226,
        2121
      ]
    },
    {
      "id": 14549,
      "developers": [
        4134
      ]
    },
    {
      "id": 1342,
      "developers": [
        261
      ]
    },
    {
      "id": 14647,
      "developers": [
        1012
      ]
    },
    {
      "id": 14692
    },
    {
      "id": 1943,
      "developers": [
        30
      ]
    },
    {
      "id": 9928,
      "developers": [
        115
      ]
    },
    {
      "id": 14701,
      "developers": [
        5757
      ]
    },
    {
      "id": 14903,
      "developers": [
        163
      ]
    },
    {
      "id": 15459,
      "developers": [
        111
      ]
    },
    {
      "id": 15531
    },
    {
      "id": 15548,
      "developers": [
        7832
      ]
    },
    {
      "id": 15552,
      "developers": [
        111
      ]
    },
    {
      "id": 15553,
      "developers": [
        111
      ]
    },
    {
      "id": 15554,
      "developers": [
        111
      ]
    },
    {
      "id": 5574,
      "developers": [
        2474,
        2121
      ]
    },
    {
      "id": 11491,
      "developers": [
        1320
      ]
    },
    {
      "id": 11148,
      "developers": [
        479
      ]
    },
    {
      "id": 8879,
      "developers": [
        1398
      ]
    },
    {
      "id": 5335,
      "developers": [
        999,
        748
      ]
    },
    {
      "id": 15695,
      "developers": [
        7854
      ]
    },
    {
      "id": 15705,
      "developers": [
        2676
      ]
    },
    {
      "id": 15709,
      "developers": [
        1060
      ]
    },
    {
      "id": 493,
      "developers": [
        261
      ]
    },
    {
      "id": 15903,
      "developers": [
        6017
      ]
    },
    {
      "id": 16299
    },
    {
      "id": 11252
    },
    {
      "id": 15198,
      "developers": [
        7577
      ]
    },
    {
      "id": 10872
    },
    {
      "id": 16744,
      "developers": [
        8259
      ]
    },
    {
      "id": 16749,
      "developers": [
        4380
      ]
    },
    {
      "id": 5590,
      "developers": [
        910,
        2486,
        2487
      ]
    },
    {
      "id": 6045,
      "developers": [
        3689
      ]
    },
    {
      "id": 10602,
      "developers": [
        2933
      ]
    },
    {
      "id": 17030,
      "developers": [
        292,
        293
      ]
    },
    {
      "id": 14550,
      "developers": [
        5048,
        8590
      ]
    },
    {
      "id": 12561,
      "developers": [
        6557
      ]
    },
    {
      "id": 5973,
      "developers": [
        2603,
        2345
      ]
    },
    {
      "id": 11133,
      "developers": [
        1012
      ]
    },
    {
      "id": 7687,
      "developers": [
        148
      ]
    },
    {
      "id": 2212,
      "developers": [
        2170
      ]
    },
    {
      "id": 18029
    },
    {
      "id": 11489,
      "developers": [
        858,
        1394
      ]
    },
    {
      "id": 18082,
      "developers": [
        9278
      ]
    },
    {
      "id": 14298,
      "developers": [
        2219
      ]
    },
    {
      "id": 18132,
      "developers": [
        9302
      ]
    },
    {
      "id": 9247,
      "developers": [
        5051
      ]
    },
    {
      "id": 8816,
      "developers": [
        5217
      ]
    },
    {
      "id": 86426
    },
    {
      "id": 7204,
      "developers": [
        3025
      ]
    },
    {
      "id": 7709,
      "developers": [
        7778
      ]
    },
    {
      "id": 18023,
      "developers": [
        7
      ]
    },
    {
      "id": 732,
      "developers": [
        365
      ]
    },
    {
      "id": 18509,
      "developers": [
        9467
      ]
    },
    {
      "id": 11563,
      "developers": [
        2410
      ]
    },
    {
      "id": 1082,
      "developers": [
        37
      ]
    },
    {
      "id": 19399,
      "developers": [
        108
      ]
    },
    {
      "id": 3852,
      "developers": [
        1930
      ]
    },
    {
      "id": 9919,
      "developers": [
        405
      ]
    },
    {
      "id": 11789,
      "developers": [
        749
      ]
    },
    {
      "id": 15167,
      "developers": [
        2542
      ]
    },
    {
      "id": 20969
    },
    {
      "id": 17994,
      "developers": [
        420
      ]
    },
    {
      "id": 847,
      "developers": [
        37
      ]
    },
    {
      "id": 16368,
      "developers": [
        5359
      ]
    },
    {
      "id": 2112,
      "developers": [
        94
      ]
    },
    {
      "id": 17447,
      "developers": [
        1002
      ]
    },
    {
      "id": 19540
    },
    {
      "id": 19553,
      "developers": [
        1009,
        2921
      ]
    },
    {
      "id": 5850,
      "developers": [
        365
      ]
    },
    {
      "id": 19591,
      "developers": [
        9603
      ]
    },
    {
      "id": 8036,
      "developers": [
        5680,
        3957
      ]
    },
    {
      "id": 19607,
      "developers": [
        10124
      ]
    },
    {
      "id": 19611,
      "developers": [
        444,
        1926
      ]
    },
    {
      "id": 25263,
      "developers": [
        400
      ]
    },
    {
      "id": 19681,
      "developers": [
        10155
      ]
    },
    {
      "id": 11214,
      "developers": [
        26
      ]
    },
    {
      "id": 8978,
      "developers": [
        891,
        2431
      ]
    },
    {
      "id": 19163,
      "developers": [
        9864
      ]
    },
    {
      "id": 19708,
      "developers": [
        2238
      ]
    },
    {
      "id": 19457,
      "developers": [
        126
      ]
    },
    {
      "id": 19796,
      "developers": [
        1405
      ]
    },
    {
      "id": 11613,
      "developers": [
        1218
      ]
    },
    {
      "id": 19516,
      "developers": [
        1059,
        694
      ]
    },
    {
      "id": 19869,
      "developers": [
        94
      ]
    },
    {
      "id": 14522,
      "developers": [
        7219
      ]
    },
    {
      "id": 1339,
      "developers": [
        85,
        684
      ]
    },
    {
      "id": 1971,
      "developers": [
        365
      ]
    },
    {
      "id": 974,
      "developers": [
        663
      ]
    },
    {
      "id": 16926,
      "developers": [
        7058
      ]
    },
    {
      "id": 19950
    },
    {
      "id": 20035
    },
    {
      "id": 1365,
      "developers": [
        10321
      ]
    },
    {
      "id": 8654,
      "developers": [
        4620
      ]
    },
    {
      "id": 20188,
      "developers": [
        2
      ]
    },
    {
      "id": 17959,
      "developers": [
        10321,
        4065
      ]
    },
    {
      "id": 19962,
      "developers": [
        1623
      ]
    },
    {
      "id": 18985,
      "developers": [
        10349
      ]
    },
    {
      "id": 20327,
      "developers": [
        1006
      ]
    },
    {
      "id": 20328,
      "developers": [
        1006
      ]
    },
    {
      "id": 6007,
      "developers": [
        1006
      ]
    },
    {
      "id": 15857,
      "developers": [
        85
      ]
    },
    {
      "id": 19552,
      "developers": [
        433
      ]
    },
    {
      "id": 14587,
      "developers": [
        7260
      ]
    },
    {
      "id": 11649,
      "developers": [
        458
      ]
    },
    {
      "id": 20074,
      "developers": [
        6331
      ]
    },
    {
      "id": 6044,
      "developers": [
        1005
      ]
    },
    {
      "id": 20413,
      "developers": [
        10365
      ]
    },
    {
      "id": 9244,
      "developers": [
        1617
      ]
    },
    {
      "id": 20751,
      "developers": [
        10378
      ]
    },
    {
      "id": 19608,
      "developers": [
        10125
      ]
    },
    {
      "id": 18375,
      "developers": [
        3162
      ]
    },
    {
      "id": 19405,
      "developers": [
        2340
      ]
    },
    {
      "id": 568,
      "developers": [
        72,
        319,
        64,
        2149
      ]
    },
    {
      "id": 20048,
      "developers": [
        10075,
        825
      ]
    },
    {
      "id": 21557
    },
    {
      "id": 7642,
      "developers": [
        3192
      ]
    },
    {
      "id": 21597,
      "developers": [
        10444
      ]
    },
    {
      "id": 11423,
      "developers": [
        9537
      ]
    },
    {
      "id": 21609,
      "developers": [
        1843
      ]
    },
    {
      "id": 1908,
      "developers": [
        916
      ]
    },
    {
      "id": 18207,
      "developers": [
        9341
      ]
    },
    {
      "id": 8965,
      "developers": [
        7912
      ]
    },
    {
      "id": 4797,
      "developers": [
        660,
        774
      ]
    },
    {
      "id": 22431,
      "developers": [
        28
      ]
    },
    {
      "id": 17911,
      "developers": [
        9118
      ]
    },
    {
      "id": 20871,
      "developers": [
        318
      ]
    },
    {
      "id": 19562,
      "developers": [
        37
      ]
    },
    {
      "id": 19554,
      "developers": [
        39
      ]
    },
    {
      "id": 22505,
      "developers": [
        437
      ]
    },
    {
      "id": 10648,
      "developers": [
        10625
      ]
    },
    {
      "id": 19855,
      "developers": [
        437
      ]
    },
    {
      "id": 22753,
      "developers": [
        161
      ]
    },
    {
      "id": 15183,
      "developers": [
        7571,
        7572
      ]
    },
    {
      "id": 11201,
      "developers": [
        2170
      ]
    },
    {
      "id": 14765,
      "developers": [
        38
      ]
    },
    {
      "id": 18399,
      "developers": [
        717
      ]
    },
    {
      "id": 20863,
      "developers": [
        19
      ]
    },
    {
      "id": 18859,
      "developers": [
        955
      ]
    },
    {
      "id": 23240,
      "developers": [
        8134
      ]
    },
    {
      "id": 18927,
      "developers": [
        9595
      ]
    },
    {
      "id": 21599,
      "developers": [
        10445
      ]
    },
    {
      "id": 19534,
      "developers": [
        126
      ]
    },
    {
      "id": 23293,
      "developers": [
        94
      ]
    },
    {
      "id": 23319,
      "developers": [
        10822
      ]
    },
    {
      "id": 7584,
      "developers": [
        916
      ]
    },
    {
      "id": 16982,
      "developers": [
        8442
      ]
    },
    {
      "id": 19245,
      "developers": [
        794
      ]
    },
    {
      "id": 20292,
      "developers": [
        428
      ]
    },
    {
      "id": 19948,
      "developers": [
        428
      ]
    },
    {
      "id": 19449,
      "developers": [
        396
      ]
    },
    {
      "id": 23849,
      "developers": [
        2428
      ]
    },
    {
      "id": 23865,
      "developers": [
        1217
      ]
    },
    {
      "id": 496,
      "developers": [
        211,
        37,
        1099
      ]
    },
    {
      "id": 23907,
      "developers": [
        37
      ]
    },
    {
      "id": 13366,
      "developers": [
        4642
      ]
    },
    {
      "id": 19932,
      "developers": [
        5452
      ]
    },
    {
      "id": 2990,
      "developers": [
        1396
      ]
    },
    {
      "id": 24042,
      "developers": [
        10964
      ]
    },
    {
      "id": 19532,
      "developers": [
        28
      ]
    },
    {
      "id": 20065,
      "developers": [
        663
      ]
    },
    {
      "id": 20041
    },
    {
      "id": 24439,
      "developers": [
        11019
      ]
    },
    {
      "id": 24446,
      "developers": [
        11024
      ]
    },
    {
      "id": 19572,
      "developers": [
        4357
      ]
    },
    {
      "id": 24500
    },
    {
      "id": 24499
    },
    {
      "id": 18812,
      "developers": [
        8134
      ]
    },
    {
      "id": 24837,
      "developers": [
        6927
      ]
    },
    {
      "id": 24347,
      "developers": [
        37
      ]
    },
    {
      "id": 23331,
      "developers": [
        552
      ]
    },
    {
      "id": 20787,
      "developers": [
        10383
      ]
    },
    {
      "id": 9267,
      "developers": [
        853
      ]
    },
    {
      "id": 13226,
      "developers": [
        7028
      ]
    },
    {
      "id": 23596,
      "developers": [
        148,
        187
      ]
    },
    {
      "id": 20057,
      "developers": [
        15759
      ]
    },
    {
      "id": 11180,
      "developers": [
        249
      ]
    },
    {
      "id": 24918,
      "developers": [
        4380
      ]
    },
    {
      "id": 24921,
      "developers": [
        1213
      ]
    },
    {
      "id": 24975,
      "developers": [
        11303
      ]
    },
    {
      "id": 24984,
      "developers": [
        843
      ]
    },
    {
      "id": 25040
    },
    {
      "id": 18400,
      "developers": [
        4895
      ]
    },
    {
      "id": 25182,
      "developers": [
        11369
      ]
    },
    {
      "id": 25185,
      "developers": [
        4760
      ]
    },
    {
      "id": 11545,
      "developers": [
        3209
      ]
    },
    {
      "id": 24909,
      "developers": [
        1405
      ]
    },
    {
      "id": 24890,
      "developers": [
        552
      ]
    },
    {
      "id": 11394,
      "developers": [
        2946
      ]
    },
    {
      "id": 2651,
      "developers": [
        63
      ]
    },
    {
      "id": 20324,
      "developers": [
        10348
      ]
    },
    {
      "id": 25708,
      "developers": [
        3046
      ]
    },
    {
      "id": 25746,
      "developers": [
        1956,
        2252
      ]
    },
    {
      "id": 25775,
      "developers": [
        9431
      ]
    },
    {
      "id": 25821,
      "developers": [
        112
      ]
    },
    {
      "id": 19551
    },
    {
      "id": 25921,
      "developers": [
        3046
      ]
    },
    {
      "id": 19000,
      "developers": [
        294
      ]
    },
    {
      "id": 11561,
      "developers": [
        2248
      ]
    },
    {
      "id": 25973
    },
    {
      "id": 25974
    },
    {
      "id": 25975
    },
    {
      "id": 25977
    },
    {
      "id": 25986
    },
    {
      "id": 16880,
      "developers": [
        8366
      ]
    },
    {
      "id": 25990
    },
    {
      "id": 25996
    },
    {
      "id": 25997
    },
    {
      "id": 15525
    },
    {
      "id": 15520
    },
    {
      "id": 1919,
      "developers": [
        434
      ]
    },
    {
      "id": 26030
    },
    {
      "id": 26031
    },
    {
      "id": 26034
    },
    {
      "id": 26037
    },
    {
      "id": 26039
    },
    {
      "id": 26040
    },
    {
      "id": 26059
    },
    {
      "id": 26078
    },
    {
      "id": 26084
    },
    {
      "id": 26092
    },
    {
      "id": 26094
    },
    {
      "id": 26041
    },
    {
      "id": 26044
    },
    {
      "id": 26045
    },
    {
      "id": 26051
    },
    {
      "id": 26054
    },
    {
      "id": 26056
    },
    {
      "id": 26058
    },
    {
      "id": 26060
    },
    {
      "id": 26062
    },
    {
      "id": 26068
    },
    {
      "id": 26071
    },
    {
      "id": 26072,
      "developers": [
        9606
      ]
    },
    {
      "id": 26079
    },
    {
      "id": 26083
    },
    {
      "id": 26074
    },
    {
      "id": 26047
    },
    {
      "id": 26048
    },
    {
      "id": 26070
    },
    {
      "id": 26080
    },
    {
      "id": 26082
    },
    {
      "id": 26077
    },
    {
      "id": 23354,
      "developers": [
        392
      ]
    },
    {
      "id": 26110
    },
    {
      "id": 23910,
      "developers": [
        3087
      ]
    },
    {
      "id": 25310,
      "developers": [
        2170
      ]
    },
    {
      "id": 26282,
      "developers": [
        38
      ]
    },
    {
      "id": 10605,
      "developers": [
        2582
      ]
    },
    {
      "id": 26362,
      "developers": [
        38
      ]
    },
    {
      "id": 26365,
      "developers": [
        11751
      ]
    },
    {
      "id": 26405,
      "developers": [
        11765
      ]
    },
    {
      "id": 25675,
      "developers": [
        13980
      ]
    },
    {
      "id": 19465,
      "developers": [
        1383
      ]
    },
    {
      "id": 25680,
      "developers": [
        11788
      ]
    },
    {
      "id": 13171,
      "developers": [
        6988
      ]
    },
    {
      "id": 13554,
      "developers": [
        404
      ]
    },
    {
      "id": 26548,
      "developers": [
        11805
      ]
    },
    {
      "id": 25238,
      "developers": [
        858
      ]
    },
    {
      "id": 2165,
      "developers": [
        1018
      ]
    },
    {
      "id": 26611,
      "developers": [
        1218,
        2923
      ]
    },
    {
      "id": 6776,
      "developers": [
        2913
      ]
    },
    {
      "id": 14365,
      "developers": [
        4748
      ]
    },
    {
      "id": 11775,
      "developers": [
        2428
      ]
    },
    {
      "id": 13111,
      "developers": [
        2676,
        3055
      ]
    },
    {
      "id": 24465,
      "developers": [
        27
      ]
    },
    {
      "id": 21963,
      "developers": [
        11265
      ]
    },
    {
      "id": 22755,
      "developers": [
        10659
      ]
    },
    {
      "id": 16745,
      "developers": [
        8260
      ]
    },
    {
      "id": 13231,
      "developers": [
        7033
      ]
    },
    {
      "id": 19514,
      "developers": [
        10074
      ]
    },
    {
      "id": 20043,
      "developers": [
        805
      ]
    },
    {
      "id": 26638
    },
    {
      "id": 8642,
      "developers": [
        4614
      ]
    },
    {
      "id": 26181,
      "developers": [
        5214
      ]
    },
    {
      "id": 5523,
      "developers": [
        5317
      ]
    },
    {
      "id": 24022,
      "developers": [
        10947
      ]
    },
    {
      "id": 14759,
      "developers": [
        7396
      ]
    },
    {
      "id": 26748,
      "developers": [
        2431
      ]
    },
    {
      "id": 13561,
      "developers": [
        4252
      ]
    },
    {
      "id": 19576,
      "developers": [
        741
      ]
    },
    {
      "id": 26784,
      "developers": [
        2890
      ]
    },
    {
      "id": 26779,
      "developers": [
        11929
      ]
    },
    {
      "id": 21663,
      "developers": [
        318
      ]
    },
    {
      "id": 26813,
      "developers": [
        11942
      ]
    },
    {
      "id": 26834,
      "developers": [
        3045
      ]
    },
    {
      "id": 26902,
      "developers": [
        3016
      ]
    },
    {
      "id": 26928,
      "developers": [
        453
      ]
    },
    {
      "id": 26929
    },
    {
      "id": 25343,
      "developers": [
        1217
      ]
    },
    {
      "id": 7202,
      "developers": [
        3024
      ]
    },
    {
      "id": 26916,
      "developers": [
        1012
      ]
    },
    {
      "id": 26503,
      "developers": [
        669
      ]
    },
    {
      "id": 15572,
      "developers": [
        85
      ]
    },
    {
      "id": 19082,
      "developers": [
        3697
      ]
    },
    {
      "id": 18364,
      "developers": [
        9413
      ]
    },
    {
      "id": 19920,
      "developers": [
        620
      ]
    },
    {
      "id": 10140,
      "developers": [
        5459
      ]
    },
    {
      "id": 20936
    },
    {
      "id": 21560,
      "developers": [
        845
      ]
    },
    {
      "id": 20935
    },
    {
      "id": 20870
    },
    {
      "id": 18024
    },
    {
      "id": 26499,
      "developers": [
        4245
      ]
    },
    {
      "id": 8361,
      "developers": [
        434
      ]
    },
    {
      "id": 14404,
      "developers": [
        7215
      ]
    },
    {
      "id": 21762,
      "developers": [
        108
      ]
    },
    {
      "id": 25295,
      "developers": [
        8136,
        8562
      ]
    },
    {
      "id": 11162,
      "developers": [
        38
      ]
    },
    {
      "id": 27304,
      "developers": [
        2751
      ]
    },
    {
      "id": 19081,
      "developers": [
        3697
      ]
    },
    {
      "id": 27349
    },
    {
      "id": 2177,
      "developers": [
        1290
      ]
    },
    {
      "id": 27398,
      "developers": [
        12196
      ]
    },
    {
      "id": 27396,
      "developers": [
        8309
      ]
    },
    {
      "id": 27407,
      "developers": [
        12198
      ]
    },
    {
      "id": 11156,
      "developers": [
        1843
      ]
    },
    {
      "id": 11250,
      "developers": [
        5963
      ]
    },
    {
      "id": 20392,
      "developers": [
        2154
      ]
    },
    {
      "id": 36834,
      "developers": [
        747
      ]
    },
    {
      "id": 36838,
      "developers": [
        747
      ]
    },
    {
      "id": 19978,
      "developers": [
        1898
      ]
    },
    {
      "id": 47452,
      "developers": [
        51
      ]
    },
    {
      "id": 27511,
      "developers": [
        12224
      ]
    },
    {
      "id": 26930
    },
    {
      "id": 36837,
      "developers": [
        747
      ]
    },
    {
      "id": 26180,
      "developers": [
        1394
      ]
    },
    {
      "id": 8959,
      "developers": [
        4496
      ]
    },
    {
      "id": 4593,
      "developers": [
        817
      ]
    },
    {
      "id": 26915,
      "developers": [
        2751
      ]
    },
    {
      "id": 14410,
      "developers": [
        168
      ]
    },
    {
      "id": 11542,
      "developers": [
        6077
      ]
    },
    {
      "id": 26941,
      "developers": [
        94
      ]
    },
    {
      "id": 11171,
      "developers": [
        841
      ]
    },
    {
      "id": 10910,
      "developers": [
        292
      ]
    },
    {
      "id": 10148,
      "developers": [
        12300
      ]
    },
    {
      "id": 499,
      "developers": [
        4357
      ]
    },
    {
      "id": 27043,
      "developers": [
        12137,
        2952
      ]
    },
    {
      "id": 19575,
      "developers": [
        10107
      ]
    },
    {
      "id": 27732,
      "developers": [
        12308
      ]
    },
    {
      "id": 18366,
      "developers": [
        7421
      ]
    },
    {
      "id": 26402,
      "developers": [
        1956,
        862,
        2252
      ]
    },
    {
      "id": 9062,
      "developers": [
        10310
      ]
    },
    {
      "id": 27766
    },
    {
      "id": 27767
    },
    {
      "id": 27791,
      "developers": [
        37,
        888
      ]
    },
    {
      "id": 11049,
      "developers": [
        6132
      ]
    },
    {
      "id": 7443,
      "developers": [
        3085
      ]
    },
    {
      "id": 20070,
      "developers": [
        1383
      ]
    },
    {
      "id": 12875,
      "developers": [
        6917
      ]
    },
    {
      "id": 26801,
      "developers": [
        1218
      ]
    },
    {
      "id": 27879,
      "developers": [
        16456
      ]
    },
    {
      "id": 25636,
      "developers": [
        3046
      ]
    },
    {
      "id": 41822,
      "developers": [
        11518,
        4607
      ]
    },
    {
      "id": 42666,
      "developers": [
        13069
      ]
    },
    {
      "id": 27889,
      "developers": [
        48
      ]
    },
    {
      "id": 36506,
      "developers": [
        13112
      ]
    },
    {
      "id": 17713,
      "developers": [
        8961
      ]
    },
    {
      "id": 41827,
      "developers": [
        862
      ]
    },
    {
      "id": 1905,
      "developers": [
        168
      ]
    },
    {
      "id": 41819,
      "developers": [
        1218,
        6059
      ]
    },
    {
      "id": 36403
    },
    {
      "id": 1962,
      "developers": [
        3207
      ]
    },
    {
      "id": 26196,
      "developers": [
        72
      ]
    },
    {
      "id": 15563,
      "developers": [
        7847
      ]
    },
    {
      "id": 44101,
      "developers": [
        26
      ]
    },
    {
      "id": 28075,
      "developers": [
        1309
      ]
    },
    {
      "id": 28069,
      "developers": [
        12438
      ]
    },
    {
      "id": 43363,
      "developers": [
        12438
      ]
    },
    {
      "id": 19858,
      "developers": [
        1220
      ]
    },
    {
      "id": 19959
    },
    {
      "id": 47472
    },
    {
      "id": 46451,
      "developers": [
        407
      ]
    },
    {
      "id": 35792
    },
    {
      "id": 26683,
      "developers": [
        747
      ]
    },
    {
      "id": 27573,
      "developers": [
        12250
      ]
    },
    {
      "id": 19394,
      "developers": [
        10010
      ]
    },
    {
      "id": 25009,
      "developers": [
        261
      ]
    },
    {
      "id": 26179,
      "developers": [
        85
      ]
    },
    {
      "id": 27717,
      "developers": [
        12428
      ]
    },
    {
      "id": 10031,
      "developers": [
        5369
      ]
    },
    {
      "id": 28064,
      "developers": [
        4223
      ]
    },
    {
      "id": 28065,
      "developers": [
        4223
      ]
    },
    {
      "id": 28066,
      "developers": [
        12435
      ]
    },
    {
      "id": 51523,
      "developers": [
        294
      ]
    },
    {
      "id": 26763,
      "developers": [
        2729
      ]
    },
    {
      "id": 28113,
      "developers": [
        12462
      ]
    },
    {
      "id": 52030,
      "developers": [
        13180
      ]
    },
    {
      "id": 11076,
      "developers": [
        2170,
        10332
      ]
    },
    {
      "id": 26193,
      "developers": [
        401
      ]
    },
    {
      "id": 19588,
      "developers": [
        431
      ]
    },
    {
      "id": 23438
    },
    {
      "id": 1969,
      "developers": [
        364,
        37
      ]
    },
    {
      "id": 15490,
      "developers": [
        7782
      ]
    },
    {
      "id": 18637,
      "developers": [
        9506
      ]
    },
    {
      "id": 25253,
      "developers": [
        11397
      ]
    },
    {
      "id": 28187,
      "developers": [
        3051,
        10692
      ]
    },
    {
      "id": 28173,
      "developers": [
        841
      ]
    },
    {
      "id": 28024,
      "developers": [
        12506
      ]
    },
    {
      "id": 14393,
      "developers": [
        7209
      ]
    },
    {
      "id": 26879,
      "developers": [
        404
      ]
    },
    {
      "id": 117,
      "developers": [
        13071,
        10692,
        44
      ]
    },
    {
      "id": 19013,
      "developers": [
        6970
      ]
    },
    {
      "id": 30365,
      "developers": [
        7903
      ]
    },
    {
      "id": 47292,
      "developers": [
        248
      ]
    },
    {
      "id": 47823,
      "developers": [
        7571,
        955
      ]
    },
    {
      "id": 28287,
      "developers": [
        8134
      ]
    },
    {
      "id": 24863,
      "developers": [
        393
      ]
    },
    {
      "id": 28291,
      "developers": [
        6574
      ]
    },
    {
      "id": 26234,
      "developers": [
        10100
      ]
    },
    {
      "id": 38659,
      "developers": [
        51
      ]
    },
    {
      "id": 38780,
      "developers": [
        47
      ]
    },
    {
      "id": 28380,
      "developers": [
        10809
      ]
    },
    {
      "id": 11492,
      "developers": [
        6079
      ]
    },
    {
      "id": 25653,
      "developers": [
        5792
      ]
    },
    {
      "id": 7692,
      "developers": [
        1459
      ]
    },
    {
      "id": 21861
    },
    {
      "id": 17818,
      "developers": [
        95
      ]
    },
    {
      "id": 45111,
      "developers": [
        8552
      ]
    },
    {
      "id": 28081,
      "developers": [
        946
      ]
    },
    {
      "id": 41625
    },
    {
      "id": 28451,
      "developers": [
        5346,
        1474
      ]
    },
    {
      "id": 28452,
      "developers": [
        5346,
        1474
      ]
    },
    {
      "id": 1334,
      "developers": [
        280
      ]
    },
    {
      "id": 47981,
      "developers": [
        8815,
        4614
      ]
    },
    {
      "id": 44652
    },
    {
      "id": 9708,
      "developers": [
        1217
      ]
    },
    {
      "id": 14387,
      "developers": [
        12671
      ]
    },
    {
      "id": 18930,
      "developers": [
        9596
      ]
    },
    {
      "id": 28230
    },
    {
      "id": 53657,
      "developers": [
        13228
      ]
    },
    {
      "id": 26233
    },
    {
      "id": 19333,
      "developers": [
        11674
      ]
    },
    {
      "id": 39760,
      "developers": [
        6079
      ]
    },
    {
      "id": 44547
    },
    {
      "id": 14363,
      "developers": [
        884
      ]
    },
    {
      "id": 18983
    },
    {
      "id": 6856,
      "developers": [
        2020
      ]
    },
    {
      "id": 11225,
      "developers": [
        5914
      ]
    },
    {
      "id": 51437,
      "developers": [
        6938,
        845
      ]
    },
    {
      "id": 14758,
      "developers": [
        419
      ]
    },
    {
      "id": 11161,
      "developers": [
        1225
      ]
    },
    {
      "id": 11529,
      "developers": [
        3697
      ]
    },
    {
      "id": 37078,
      "developers": [
        39
      ]
    },
    {
      "id": 26231
    },
    {
      "id": 19565,
      "developers": [
        834
      ]
    },
    {
      "id": 41879
    },
    {
      "id": 42931
    },
    {
      "id": 42927
    },
    {
      "id": 21712
    },
    {
      "id": 37062,
      "developers": [
        822
      ]
    },
    {
      "id": 42940
    },
    {
      "id": 42954
    },
    {
      "id": 42953
    },
    {
      "id": 51519,
      "developers": [
        13152
      ]
    },
    {
      "id": 8209,
      "developers": [
        4718
      ]
    },
    {
      "id": 42929
    },
    {
      "id": 42926
    },
    {
      "id": 37066,
      "developers": [
        847
      ]
    },
    {
      "id": 23411
    },
    {
      "id": 42949
    },
    {
      "id": 42904
    },
    {
      "id": 19854
    },
    {
      "id": 52044,
      "developers": [
        13182
      ]
    },
    {
      "id": 42944
    },
    {
      "id": 42956
    },
    {
      "id": 42947
    },
    {
      "id": 44651
    },
    {
      "id": 46025
    },
    {
      "id": 40868,
      "developers": [
        14900
      ]
    },
    {
      "id": 36767
    },
    {
      "id": 52043,
      "developers": [
        13181
      ]
    },
    {
      "id": 51683,
      "developers": [
        12273
      ]
    },
    {
      "id": 3212,
      "developers": [
        1505,
        283
      ]
    },
    {
      "id": 24219
    },
    {
      "id": 42934
    },
    {
      "id": 42952
    },
    {
      "id": 27030,
      "developers": [
        851
      ]
    },
    {
      "id": 30804,
      "developers": [
        4459
      ]
    },
    {
      "id": 37146,
      "developers": [
        12943
      ]
    },
    {
      "id": 26948,
      "developers": [
        115
      ]
    },
    {
      "id": 28862,
      "developers": [
        129,
        161
      ]
    },
    {
      "id": 25657,
      "developers": [
        620
      ]
    },
    {
      "id": 6247,
      "developers": [
        2729
      ]
    },
    {
      "id": 26443
    },
    {
      "id": 20058,
      "developers": [
        1394
      ]
    },
    {
      "id": 42948
    },
    {
      "id": 19085,
      "developers": [
        1104
      ]
    },
    {
      "id": 42950
    },
    {
      "id": 42937
    },
    {
      "id": 42942,
      "developers": [
        1254
      ]
    },
    {
      "id": 11667,
      "developers": [
        2161,
        11740,
        26
      ]
    },
    {
      "id": 42939
    },
    {
      "id": 52525,
      "developers": [
        15784
      ]
    },
    {
      "id": 42930
    },
    {
      "id": 42921
    },
    {
      "id": 42923
    },
    {
      "id": 34218,
      "developers": [
        12788
      ]
    },
    {
      "id": 42914
    },
    {
      "id": 44534
    },
    {
      "id": 42920
    },
    {
      "id": 18075,
      "developers": [
        8950
      ]
    },
    {
      "id": 10964,
      "developers": [
        1212
      ]
    },
    {
      "id": 2924,
      "developers": [
        482
      ]
    },
    {
      "id": 60364
    },
    {
      "id": 14389,
      "developers": [
        4535,
        4466
      ]
    },
    {
      "id": 1821,
      "developers": [
        26,
        2161
      ]
    },
    {
      "id": 28067,
      "developers": [
        5112
      ]
    },
    {
      "id": 36535,
      "developers": [
        836,
        11174
      ]
    },
    {
      "id": 36544,
      "developers": [
        14437
      ]
    },
    {
      "id": 28242,
      "developers": [
        10349
      ]
    },
    {
      "id": 18822,
      "developers": [
        928
      ]
    },
    {
      "id": 19450,
      "developers": [
        7522
      ]
    },
    {
      "id": 36594,
      "developers": [
        12830
      ]
    },
    {
      "id": 11398,
      "developers": [
        7217
      ]
    },
    {
      "id": 36595,
      "developers": [
        4362
      ]
    },
    {
      "id": 44122,
      "developers": [
        6054
      ]
    },
    {
      "id": 26197,
      "developers": [
        37
      ]
    },
    {
      "id": 23221,
      "developers": [
        2739
      ]
    },
    {
      "id": 36644,
      "developers": [
        13973
      ]
    },
    {
      "id": 36665,
      "developers": [
        784
      ]
    },
    {
      "id": 12529,
      "developers": [
        7219,
        400
      ]
    },
    {
      "id": 38493
    },
    {
      "id": 38491
    },
    {
      "id": 38492
    },
    {
      "id": 38490
    },
    {
      "id": 51823,
      "developers": [
        4824
      ]
    },
    {
      "id": 6292,
      "developers": [
        2746
      ]
    },
    {
      "id": 27421,
      "developers": [
        407
      ]
    },
    {
      "id": 12517,
      "developers": [
        6545
      ]
    },
    {
      "id": 36649,
      "developers": [
        2514
      ]
    },
    {
      "id": 19470,
      "developers": [
        48
      ]
    },
    {
      "id": 12511,
      "developers": [
        6542
      ]
    },
    {
      "id": 24525
    },
    {
      "id": 37030,
      "developers": [
        19
      ]
    },
    {
      "id": 51954,
      "developers": [
        2449
      ]
    },
    {
      "id": 24445,
      "developers": [
        11023
      ]
    },
    {
      "id": 13668,
      "developers": [
        5024
      ]
    },
    {
      "id": 52737
    },
    {
      "id": 20030
    },
    {
      "id": 21580,
      "developers": [
        12473
      ]
    },
    {
      "id": 76428,
      "developers": [
        9957
      ]
    },
    {
      "id": 52910
    },
    {
      "id": 37141
    },
    {
      "id": 13163,
      "developers": [
        3906
      ]
    },
    {
      "id": 9727,
      "developers": [
        36
      ]
    },
    {
      "id": 17003,
      "developers": [
        6065
      ]
    },
    {
      "id": 19885
    },
    {
      "id": 1593,
      "developers": [
        47
      ]
    },
    {
      "id": 8335,
      "developers": [
        2248
      ]
    },
    {
      "id": 52210
    },
    {
      "id": 17470,
      "developers": [
        3369
      ]
    },
    {
      "id": 27215
    },
    {
      "id": 22399
    },
    {
      "id": 21849
    },
    {
      "id": 5319,
      "developers": [
        356
      ]
    },
    {
      "id": 11422,
      "developers": [
        6194
      ]
    },
    {
      "id": 513,
      "developers": [
        112
      ]
    },
    {
      "id": 36781,
      "developers": [
        13238,
        4466
      ]
    },
    {
      "id": 26914
    },
    {
      "id": 30364
    },
    {
      "id": 52715,
      "developers": [
        7011
      ]
    },
    {
      "id": 26195,
      "developers": [
        5352,
        11686,
        11687
      ]
    },
    {
      "id": 21429,
      "developers": [
        2941
      ]
    },
    {
      "id": 28747
    },
    {
      "id": 1970,
      "developers": [
        38
      ]
    },
    {
      "id": 25656,
      "developers": [
        862
      ]
    },
    {
      "id": 7707,
      "developers": [
        392
      ]
    },
    {
      "id": 34921
    },
    {
      "id": 9591,
      "developers": [
        5129
      ]
    },
    {
      "id": 13365,
      "developers": [
        1434
      ]
    },
    {
      "id": 31430,
      "developers": [
        12468
      ]
    },
    {
      "id": 5062,
      "developers": [
        2248
      ]
    },
    {
      "id": 75245,
      "developers": [
        6136
      ]
    },
    {
      "id": 32983,
      "developers": [
        13983
      ]
    },
    {
      "id": 24028,
      "developers": [
        3152
      ]
    },
    {
      "id": 14673,
      "developers": [
        2676
      ]
    },
    {
      "id": 52154
    },
    {
      "id": 17962,
      "developers": [
        9163
      ]
    },
    {
      "id": 5150,
      "developers": [
        37
      ]
    },
    {
      "id": 9459
    },
    {
      "id": 55028,
      "developers": [
        1394
      ]
    },
    {
      "id": 44141,
      "developers": [
        13971
      ]
    },
    {
      "id": 56407
    },
    {
      "id": 36543,
      "developers": [
        10820
      ]
    },
    {
      "id": 64205
    },
    {
      "id": 54915
    },
    {
      "id": 58036
    },
    {
      "id": 21602,
      "developers": [
        10914
      ]
    },
    {
      "id": 25339,
      "developers": [
        2000
      ]
    },
    {
      "id": 25240
    },
    {
      "id": 1262,
      "developers": [
        47
      ]
    },
    {
      "id": 12078,
      "developers": [
        112
      ]
    },
    {
      "id": 24839,
      "developers": [
        3027
      ]
    },
    {
      "id": 27182
    },
    {
      "id": 26776,
      "developers": [
        11926
      ]
    },
    {
      "id": 27920,
      "developers": [
        2676
      ]
    },
    {
      "id": 25743
    },
    {
      "id": 76736,
      "developers": [
        14138,
        248
      ]
    },
    {
      "id": 19892,
      "developers": [
        3913
      ]
    },
    {
      "id": 13391,
      "developers": [
        7046
      ]
    },
    {
      "id": 40166
    },
    {
      "id": 1249,
      "developers": [
        263
      ]
    },
    {
      "id": 14146,
      "developers": [
        7096
      ]
    },
    {
      "id": 12736,
      "developers": [
        14150
      ]
    },
    {
      "id": 20362,
      "developers": [
        5838
      ]
    },
    {
      "id": 18303,
      "developers": [
        4096,
        9383
      ]
    },
    {
      "id": 23214
    },
    {
      "id": 5162,
      "developers": [
        451
      ]
    },
    {
      "id": 41522
    },
    {
      "id": 25948,
      "developers": [
        8535
      ]
    },
    {
      "id": 24962
    },
    {
      "id": 15932,
      "developers": [
        7577
      ]
    },
    {
      "id": 19657
    },
    {
      "id": 34946
    },
    {
      "id": 33424
    },
    {
      "id": 23245,
      "developers": [
        10807
      ]
    },
    {
      "id": 17232,
      "developers": [
        8580
      ]
    },
    {
      "id": 28213,
      "developers": [
        3697
      ]
    },
    {
      "id": 15426,
      "developers": [
        1474
      ]
    },
    {
      "id": 14381
    },
    {
      "id": 17623,
      "developers": [
        2431
      ]
    },
    {
      "id": 35188
    },
    {
      "id": 34927
    },
    {
      "id": 18363,
      "developers": [
        853
      ]
    },
    {
      "id": 20152
    },
    {
      "id": 26564,
      "developers": [
        2751
      ]
    },
    {
      "id": 21484
    },
    {
      "id": 7782,
      "developers": [
        3697
      ]
    },
    {
      "id": 60653
    },
    {
      "id": 19976,
      "developers": [
        5113
      ]
    },
    {
      "id": 59965
    },
    {
      "id": 52666
    },
    {
      "id": 1940,
      "developers": [
        1213
      ]
    },
    {
      "id": 32856,
      "developers": [
        13017,
        15358
      ]
    },
    {
      "id": 10233,
      "developers": [
        5531
      ]
    },
    {
      "id": 28244,
      "developers": [
        858
      ]
    },
    {
      "id": 54548
    },
    {
      "id": 19464,
      "developers": [
        277
      ]
    },
    {
      "id": 54550,
      "developers": [
        26
      ]
    },
    {
      "id": 25083,
      "developers": [
        292
      ]
    },
    {
      "id": 3225,
      "developers": [
        1641
      ]
    },
    {
      "id": 28177,
      "developers": [
        2438
      ]
    },
    {
      "id": 22173
    },
    {
      "id": 14390,
      "developers": [
        1380
      ]
    },
    {
      "id": 26853,
      "developers": [
        115
      ]
    },
    {
      "id": 7349,
      "developers": [
        3903
      ]
    },
    {
      "id": 76770,
      "developers": [
        5254
      ]
    },
    {
      "id": 33569,
      "developers": [
        10870
      ]
    },
    {
      "id": 8194,
      "developers": [
        4118
      ]
    },
    {
      "id": 36952,
      "developers": [
        1242
      ]
    },
    {
      "id": 61822
    },
    {
      "id": 42693
    },
    {
      "id": 3828,
      "developers": [
        2941
      ]
    },
    {
      "id": 29489
    },
    {
      "id": 20966
    },
    {
      "id": 17136,
      "developers": [
        8290
      ]
    },
    {
      "id": 8822,
      "developers": [
        5273
      ]
    },
    {
      "id": 8347,
      "developers": [
        4328
      ]
    },
    {
      "id": 61825
    },
    {
      "id": 34659
    },
    {
      "id": 7327,
      "developers": [
        702
      ]
    },
    {
      "id": 7843,
      "developers": [
        465
      ]
    },
    {
      "id": 22198
    },
    {
      "id": 68283,
      "developers": [
        1060
      ]
    },
    {
      "id": 22397,
      "developers": [
        7785
      ]
    },
    {
      "id": 18443,
      "developers": [
        1217
      ]
    },
    {
      "id": 10500,
      "developers": [
        5675
      ]
    },
    {
      "id": 52615
    },
    {
      "id": 19645
    },
    {
      "id": 84923,
      "developers": [
        2688
      ]
    },
    {
      "id": 18158,
      "developers": [
        9312
      ]
    },
    {
      "id": 71590
    },
    {
      "id": 76845,
      "developers": [
        14004
      ]
    },
    {
      "id": 28249
    },
    {
      "id": 14297,
      "developers": [
        563
      ]
    },
    {
      "id": 9807,
      "developers": [
        7212
      ]
    },
    {
      "id": 34705,
      "developers": [
        8058
      ]
    },
    {
      "id": 29831,
      "developers": [
        14793
      ]
    },
    {
      "id": 11208,
      "developers": [
        852
      ]
    },
    {
      "id": 76870,
      "developers": [
        13973
      ]
    },
    {
      "id": 76872,
      "developers": [
        13973
      ]
    },
    {
      "id": 56589,
      "developers": [
        13973
      ]
    },
    {
      "id": 20910,
      "developers": [
        946
      ]
    },
    {
      "id": 86496,
      "developers": [
        14794,
        14795
      ]
    },
    {
      "id": 36897,
      "developers": [
        12901
      ]
    },
    {
      "id": 52613
    },
    {
      "id": 76881,
      "developers": [
        7444
      ]
    },
    {
      "id": 76891,
      "developers": [
        108
      ]
    },
    {
      "id": 19564,
      "developers": [
        170
      ]
    },
    {
      "id": 44544,
      "developers": [
        51
      ]
    },
    {
      "id": 10965,
      "developers": [
        965
      ]
    },
    {
      "id": 1812,
      "developers": [
        2161,
        4141,
        1217,
        1093
      ]
    },
    {
      "id": 1813,
      "developers": [
        1093,
        26
      ]
    },
    {
      "id": 1814,
      "developers": [
        1093,
        4242,
        321
      ]
    },
    {
      "id": 27663,
      "developers": [
        4780
      ]
    },
    {
      "id": 31180,
      "developers": [
        12768
      ]
    },
    {
      "id": 37083,
      "developers": [
        1843
      ]
    },
    {
      "id": 11797,
      "developers": [
        9719
      ]
    },
    {
      "id": 52200,
      "developers": [
        8590
      ]
    },
    {
      "id": 54566,
      "developers": [
        858
      ]
    },
    {
      "id": 76869,
      "developers": [
        13973
      ]
    },
    {
      "id": 25651,
      "developers": [
        7912
      ]
    },
    {
      "id": 13062,
      "developers": [
        1405
      ]
    },
    {
      "id": 16300,
      "developers": [
        37
      ]
    },
    {
      "id": 76945,
      "developers": [
        1021
      ]
    },
    {
      "id": 14764,
      "developers": [
        7399
      ]
    },
    {
      "id": 26975,
      "developers": [
        11397
      ]
    },
    {
      "id": 21989,
      "developers": [
        1448
      ]
    },
    {
      "id": 13621,
      "developers": [
        7062
      ]
    },
    {
      "id": 44252
    },
    {
      "id": 47987,
      "developers": [
        15614
      ]
    },
    {
      "id": 36831,
      "developers": [
        769,
        858
      ]
    },
    {
      "id": 11669,
      "developers": [
        6152
      ]
    },
    {
      "id": 7631,
      "developers": [
        905
      ]
    },
    {
      "id": 54539,
      "developers": [
        248
      ]
    },
    {
      "id": 27070,
      "developers": [
        12041
      ]
    },
    {
      "id": 54645,
      "developers": [
        13267
      ]
    },
    {
      "id": 21344,
      "developers": [
        10428
      ]
    },
    {
      "id": 11568,
      "developers": [
        6087
      ]
    },
    {
      "id": 10966,
      "developers": [
        11860
      ]
    },
    {
      "id": 86645,
      "developers": [
        14803
      ]
    },
    {
      "id": 25599,
      "developers": [
        11943
      ]
    },
    {
      "id": 63550
    },
    {
      "id": 54775,
      "developers": [
        2941
      ]
    },
    {
      "id": 11181,
      "developers": [
        6151
      ]
    },
    {
      "id": 27274,
      "developers": [
        12148
      ]
    },
    {
      "id": 78113,
      "developers": [
        14023
      ]
    },
    {
      "id": 78118,
      "developers": [
        15181
      ]
    },
    {
      "id": 78114,
      "developers": [
        2751
      ]
    },
    {
      "id": 35844,
      "developers": [
        14032
      ]
    },
    {
      "id": 3202,
      "developers": [
        1428
      ]
    },
    {
      "id": 27722,
      "developers": [
        10592,
        1398
      ]
    },
    {
      "id": 27323,
      "developers": [
        12408
      ]
    },
    {
      "id": 18164,
      "developers": [
        14027
      ]
    },
    {
      "id": 42976,
      "developers": [
        37
      ]
    },
    {
      "id": 57034,
      "developers": [
        14085
      ]
    },
    {
      "id": 78497,
      "developers": [
        11839
      ]
    },
    {
      "id": 78540,
      "developers": [
        14157
      ]
    },
    {
      "id": 78115,
      "developers": [
        2751
      ]
    },
    {
      "id": 3831,
      "developers": [
        2941
      ]
    },
    {
      "id": 28692,
      "developers": [
        10947
      ]
    },
    {
      "id": 14741,
      "developers": [
        85
      ]
    },
    {
      "id": 54789,
      "developers": [
        946
      ]
    },
    {
      "id": 78472,
      "developers": [
        1383
      ]
    },
    {
      "id": 22182
    },
    {
      "id": 25213,
      "developers": [
        11387
      ]
    },
    {
      "id": 54842,
      "developers": [
        13311
      ]
    },
    {
      "id": 55026,
      "developers": [
        13320
      ]
    },
    {
      "id": 16779,
      "developers": [
        8290
      ]
    },
    {
      "id": 13187,
      "developers": [
        7000
      ]
    },
    {
      "id": 28175,
      "developers": [
        14527
      ]
    },
    {
      "id": 55039,
      "developers": [
        8254
      ]
    },
    {
      "id": 36957,
      "developers": [
        555
      ]
    },
    {
      "id": 37031,
      "developers": [
        184
      ]
    },
    {
      "id": 19297,
      "developers": [
        2248
      ]
    },
    {
      "id": 25586,
      "developers": [
        5324,
        836
      ]
    },
    {
      "id": 359,
      "developers": [
        93
      ]
    },
    {
      "id": 22788,
      "developers": [
        6181,
        852
      ]
    },
    {
      "id": 44158,
      "developers": [
        294
      ]
    },
    {
      "id": 12731,
      "developers": [
        13255
      ]
    },
    {
      "id": 55090,
      "developers": [
        14150
      ]
    },
    {
      "id": 55092,
      "developers": [
        26
      ]
    },
    {
      "id": 54565,
      "developers": [
        7473
      ]
    },
    {
      "id": 26780,
      "developers": [
        1234
      ]
    },
    {
      "id": 27103,
      "developers": [
        163
      ]
    },
    {
      "id": 51693,
      "developers": [
        13164
      ]
    },
    {
      "id": 30206,
      "developers": [
        4999
      ]
    },
    {
      "id": 51460,
      "developers": [
        11369
      ]
    },
    {
      "id": 25170,
      "developers": [
        8255
      ]
    },
    {
      "id": 28706,
      "developers": [
        555
      ]
    },
    {
      "id": 27242,
      "developers": [
        3087
      ]
    },
    {
      "id": 24474,
      "developers": [
        11145
      ]
    },
    {
      "id": 11774,
      "developers": [
        2428
      ]
    },
    {
      "id": 55167,
      "developers": [
        38
      ]
    },
    {
      "id": 54590,
      "developers": [
        10125
      ]
    },
    {
      "id": 10239,
      "developers": [
        5750
      ]
    },
    {
      "id": 37092,
      "developers": [
        4895
      ]
    },
    {
      "id": 11066,
      "developers": [
        11857
      ]
    },
    {
      "id": 86376,
      "developers": [
        14834
      ]
    },
    {
      "id": 75674,
      "developers": [
        1287,
        5346
      ]
    },
    {
      "id": 51679,
      "developers": [
        14833,
        946
      ]
    },
    {
      "id": 55137
    },
    {
      "id": 27547,
      "developers": [
        1217
      ]
    },
    {
      "id": 27060,
      "developers": [
        8584
      ]
    },
    {
      "id": 36813,
      "developers": [
        2145
      ]
    },
    {
      "id": 57692
    },
    {
      "id": 9183,
      "developers": [
        2145
      ]
    },
    {
      "id": 55189,
      "developers": [
        860
      ]
    },
    {
      "id": 21767,
      "developers": [
        14326
      ]
    },
    {
      "id": 41857
    },
    {
      "id": 42932,
      "developers": [
        8385
      ]
    },
    {
      "id": 50199,
      "developers": [
        314
      ]
    },
    {
      "id": 18167,
      "developers": [
        9317
      ]
    },
    {
      "id": 20459,
      "developers": [
        1661
      ]
    },
    {
      "id": 56598
    },
    {
      "id": 87683,
      "developers": [
        741
      ]
    },
    {
      "id": 7504,
      "developers": [
        3108
      ]
    },
    {
      "id": 87684,
      "developers": [
        14846
      ]
    },
    {
      "id": 28204,
      "developers": [
        659
      ]
    },
    {
      "id": 30264
    },
    {
      "id": 19011,
      "developers": [
        169
      ]
    },
    {
      "id": 80927,
      "developers": [
        7785
      ]
    },
    {
      "id": 32172,
      "developers": [
        14853
      ]
    },
    {
      "id": 57004,
      "developers": [
        169
      ]
    },
    {
      "id": 57001,
      "developers": [
        169
      ]
    },
    {
      "id": 7725,
      "developers": [
        37
      ]
    },
    {
      "id": 27696,
      "developers": [
        404
      ]
    },
    {
      "id": 80944,
      "developers": [
        2397
      ]
    },
    {
      "id": 31655,
      "developers": [
        13179
      ]
    },
    {
      "id": 55040,
      "developers": [
        112
      ]
    },
    {
      "id": 74743,
      "developers": [
        47
      ]
    },
    {
      "id": 74744,
      "developers": [
        47
      ]
    },
    {
      "id": 74745,
      "developers": [
        1225
      ]
    },
    {
      "id": 19001,
      "developers": [
        9733
      ]
    },
    {
      "id": 11560,
      "developers": [
        9945
      ]
    },
    {
      "id": 36911,
      "developers": [
        1218
      ]
    },
    {
      "id": 54580,
      "developers": [
        16028
      ]
    },
    {
      "id": 7336,
      "developers": [
        902
      ]
    },
    {
      "id": 36926,
      "developers": [
        37
      ]
    },
    {
      "id": 74500,
      "developers": [
        1459
      ]
    },
    {
      "id": 26772,
      "developers": [
        694
      ]
    },
    {
      "id": 7342,
      "developers": [
        854
      ]
    },
    {
      "id": 18311,
      "developers": [
        8714
      ]
    },
    {
      "id": 68457,
      "developers": [
        13504
      ]
    },
    {
      "id": 36515,
      "developers": [
        396
      ]
    },
    {
      "id": 57700,
      "developers": [
        438
      ]
    },
    {
      "id": 19278,
      "developers": [
        9936
      ]
    },
    {
      "id": 978,
      "developers": [
        37
      ]
    },
    {
      "id": 57838
    },
    {
      "id": 59591,
      "developers": [
        858,
        769
      ]
    },
    {
      "id": 18717
    },
    {
      "id": 5015,
      "developers": [
        690
      ]
    },
    {
      "id": 27718
    },
    {
      "id": 87796
    },
    {
      "id": 74273
    },
    {
      "id": 81195,
      "developers": [
        4427
      ]
    },
    {
      "id": 81201,
      "developers": [
        1012
      ]
    },
    {
      "id": 75297,
      "developers": [
        277
      ]
    },
    {
      "id": 76883,
      "developers": [
        5212
      ]
    },
    {
      "id": 20744,
      "developers": [
        2055
      ]
    },
    {
      "id": 31558,
      "developers": [
        694,
        1059
      ]
    },
    {
      "id": 4001,
      "developers": [
        660
      ]
    },
    {
      "id": 13557,
      "developers": [
        2751
      ]
    },
    {
      "id": 4848,
      "developers": [
        13700,
        2173
      ]
    },
    {
      "id": 7608,
      "developers": [
        4451
      ]
    },
    {
      "id": 75283,
      "developers": [
        13744
      ]
    },
    {
      "id": 41058,
      "developers": [
        248
      ]
    },
    {
      "id": 28061
    },
    {
      "id": 81354
    },
    {
      "id": 32349,
      "developers": [
        15629
      ]
    },
    {
      "id": 63873
    },
    {
      "id": 39566,
      "developers": [
        2617
      ]
    },
    {
      "id": 23177,
      "developers": [
        4598
      ]
    },
    {
      "id": 39045
    },
    {
      "id": 39034
    },
    {
      "id": 87856,
      "developers": [
        2206
      ]
    },
    {
      "id": 82029
    },
    {
      "id": 11169,
      "developers": [
        26
      ]
    },
    {
      "id": 18436,
      "developers": [
        9433
      ]
    },
    {
      "id": 27433,
      "developers": [
        2542
      ]
    },
    {
      "id": 18149,
      "developers": [
        7097
      ]
    },
    {
      "id": 18020,
      "developers": [
        9206
      ]
    },
    {
      "id": 68287,
      "developers": [
        26
      ]
    },
    {
      "id": 68311,
      "developers": [
        13471
      ]
    },
    {
      "id": 68286,
      "developers": [
        1059
      ]
    },
    {
      "id": 68295,
      "developers": [
        1218
      ]
    },
    {
      "id": 36868,
      "developers": [
        547,
        1463
      ]
    },
    {
      "id": 68344
    },
    {
      "id": 28286,
      "developers": [
        3076
      ]
    },
    {
      "id": 82372,
      "developers": [
        11259
      ]
    },
    {
      "id": 68363,
      "developers": [
        2909
      ]
    },
    {
      "id": 53358,
      "developers": [
        407
      ]
    },
    {
      "id": 53359,
      "developers": [
        407
      ]
    },
    {
      "id": 68388
    },
    {
      "id": 11364,
      "developers": [
        1243
      ]
    },
    {
      "id": 55198,
      "developers": [
        2502
      ]
    },
    {
      "id": 88383,
      "developers": [
        14899
      ]
    },
    {
      "id": 15708,
      "developers": [
        2343
      ]
    },
    {
      "id": 36610,
      "developers": [
        2252,
        1956
      ]
    },
    {
      "id": 56057,
      "developers": [
        5996,
        2428
      ]
    },
    {
      "id": 10757,
      "developers": [
        5784
      ]
    },
    {
      "id": 52083,
      "developers": [
        13298
      ]
    },
    {
      "id": 19561,
      "developers": [
        10019
      ]
    },
    {
      "id": 23689,
      "developers": [
        10864
      ]
    },
    {
      "id": 74881,
      "developers": [
        13685
      ]
    },
    {
      "id": 68483,
      "developers": [
        5346
      ]
    }
  ]';
//echo $my_companies_json;
$companies_array = json_decode($my_companies_json,true);
$devQuery = '';
$dev_query_array = array();
foreach ($companies_array as $k => $value){
   if (array_key_exists('developers',$companies_array[$k])){ 
       foreach($companies_array[$k]['developers'] as $devVal){
        $devQuery .= $devVal.',';
        if (strlen($devQuery) > 1900){
            $devQuery = rtrim($devQuery,',');
            array_push($dev_query_array,$devQuery);
            $devQuery = "";    
        }
       }
   }

}
print_r($dev_query_array);

foreach ($dev_query_array as $gameQ){
    $developer = get_json_response ("companies",$gameQ.'?fields=name');
    $myfile = file_put_contents('developers.txt', $developer.PHP_EOL , FILE_APPEND | LOCK_EX);
}

?>