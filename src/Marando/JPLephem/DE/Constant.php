<?php

/*
 * Copyright (C) 2015 Ashley Marando
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace Marando\JPLephem\DE;

/**
 * Represents the constants defined within DE headers
 *
 * @property float $DENUM  DE version number
 * @property float $LENUM  Lunare DE version number
 * @property float $TDATEF
 * @property float $TDATEB
 * @property float $JDEPOC
 * @property float $CENTER
 * @property float $CLIGHT
 * @property float $BETA
 * @property float $GAMMA
 * @property float $AU     Definition of the astronomical unit in kilometers
 * @property float $EMRAT  Earth to Moon mass ratio
 * @property float $GM1
 * @property float $GM2
 * @property float $GMB
 * @property float $GM4
 * @property float $GM5
 * @property float $GM6
 * @property float $GM7
 * @property float $GM8
 * @property float $GM9
 * @property float $GMS
 * @property float $XS
 * @property float $YS
 * @property float $ZS
 * @property float $XDS
 * @property float $YDS
 * @property float $ZDS
 * @property float $X1
 * @property float $Y1
 * @property float $Z1
 * @property float $XD1
 * @property float $YD1
 * @property float $ZD1
 * @property float $X2
 * @property float $Y2
 * @property float $Z2
 * @property float $XD2
 * @property float $YD2
 * @property float $ZD2
 * @property float $XB
 * @property float $YB
 * @property float $ZB
 * @property float $XDB
 * @property float $YDB
 * @property float $ZDB
 * @property float $X4
 * @property float $Y4
 * @property float $Z4
 * @property float $XD4
 * @property float $YD4
 * @property float $ZD4
 * @property float $X5
 * @property float $Y5
 * @property float $Z5
 * @property float $XD5
 * @property float $YD5
 * @property float $ZD5
 * @property float $X6
 * @property float $Y6
 * @property float $Z6
 * @property float $XD6
 * @property float $YD6
 * @property float $ZD6
 * @property float $X7
 * @property float $Y7
 * @property float $Z7
 * @property float $XD7
 * @property float $YD7
 * @property float $ZD7
 * @property float $X8
 * @property float $Y8
 * @property float $Z8
 * @property float $XD8
 * @property float $YD8
 * @property float $ZD8
 * @property float $X9
 * @property float $Y9
 * @property float $Z9
 * @property float $XD9
 * @property float $YD9
 * @property float $ZD9
 * @property float $XM
 * @property float $YM
 * @property float $ZM
 * @property float $XDM
 * @property float $YDM
 * @property float $ZDM
 * @property float $XC
 * @property float $YC
 * @property float $ZC
 * @property float $XDC
 * @property float $YDC
 * @property float $ZDC
 * @property float $PHI
 * @property float $THT
 * @property float $PSI
 * @property float $OMEGAX
 * @property float $OMEGAY
 * @property float $OMEGAZ
 * @property float $PHIC
 * @property float $THTC
 * @property float $PSIC
 * @property float $OMGCX
 * @property float $OMGCY
 * @property float $OMGCZ
 * @property float $ASUN
 * @property float $J2SUN
 * @property float $J3SUN
 * @property float $J4SUN
 * @property float $RE
 * @property float $J2E
 * @property float $J3E
 * @property float $J4E
 * @property float $J5E
 * @property float $J2EDOT
 * @property float $K2E0
 * @property float $K2E1
 * @property float $K2E2
 * @property float $TAUE0
 * @property float $TAUE1
 * @property float $TAUE2
 * @property float $TAUER1
 * @property float $TAUER2
 * @property float $ROTEX
 * @property float $ROTEY
 * @property float $DROTEX
 * @property float $DROTEY
 * @property float $AM
 * @property float $K2M
 * @property float $TAUM
 * @property float $LBET
 * @property float $LGAM
 * @property float $IFAC
 * @property float $COBLAT
 * @property float $KVC
 * @property float $PSIDOT
 * @property float $J2M
 * @property float $C22M
 * @property float $J3M
 * @property float $C31M
 * @property float $S31M
 * @property float $C32M
 * @property float $S32M
 * @property float $C33M
 * @property float $S33M
 * @property float $J4M
 * @property float $C41M
 * @property float $S41M
 * @property float $C42M
 * @property float $S42M
 * @property float $C43M
 * @property float $S43M
 * @property float $C44M
 * @property float $S44M
 * @property float $J5M
 * @property float $C51M
 * @property float $S51M
 * @property float $C52M
 * @property float $S52M
 * @property float $C53M
 * @property float $S53M
 * @property float $C54M
 * @property float $S54M
 * @property float $C55M
 * @property float $S55M
 * @property float $J6M
 * @property float $C61M
 * @property float $S61M
 * @property float $C62M
 * @property float $S62M
 * @property float $C63M
 * @property float $S63M
 * @property float $C64M
 * @property float $S64M
 * @property float $C65M
 * @property float $S65M
 * @property float $C66M
 * @property float $S66M
 * @property float $J7M
 * @property float $J8M
 * @property float $J9M
 * @property float $C71M
 * @property float $S71M
 * @property float $C72M
 * @property float $S72M
 * @property float $C73M
 * @property float $S73M
 * @property float $C74M
 * @property float $S74M
 * @property float $C75M
 * @property float $S75M
 * @property float $C76M
 * @property float $S76M
 * @property float $C77M
 * @property float $S77M
 * @property float $C81M
 * @property float $S81M
 * @property float $C82M
 * @property float $S82M
 * @property float $C83M
 * @property float $S83M
 * @property float $C84M
 * @property float $S84M
 * @property float $C85M
 * @property float $S85M
 * @property float $C86M
 * @property float $S86M
 * @property float $C87M
 * @property float $S87M
 * @property float $C88M
 * @property float $S88M
 * @property float $C91M
 * @property float $S91M
 * @property float $C92M
 * @property float $S92M
 * @property float $C93M
 * @property float $S93M
 * @property float $C94M
 * @property float $S94M
 * @property float $C95M
 * @property float $S95M
 * @property float $C96M
 * @property float $S96M
 * @property float $C97M
 * @property float $S97M
 * @property float $C98M
 * @property float $S98M
 * @property float $C99M
 * @property float $S99M
 * @property float $MA0001
 * @property float $MA0002
 * @property float $MA0003
 * @property float $MA0004
 * @property float $MA0005
 * @property float $MA0006
 * @property float $MA0007
 * @property float $MA0008
 * @property float $MA0009
 * @property float $MA0010
 * @property float $MA0011
 * @property float $MA0012
 * @property float $MA0013
 * @property float $MA0014
 * @property float $MA0015
 * @property float $MA0016
 * @property float $MA0017
 * @property float $MA0018
 * @property float $MA0019
 * @property float $MA0020
 * @property float $MA0021
 * @property float $MA0022
 * @property float $MA0023
 * @property float $MA0024
 * @property float $MA0025
 * @property float $MA0026
 * @property float $MA0027
 * @property float $MA0028
 * @property float $MA0029
 * @property float $MA0030
 * @property float $MA0031
 * @property float $MA0032
 * @property float $MA0034
 * @property float $MA0035
 * @property float $MA0036
 * @property float $MA0037
 * @property float $MA0038
 * @property float $MA0039
 * @property float $MA0040
 * @property float $MA0041
 * @property float $MA0042
 * @property float $MA0043
 * @property float $MA0044
 * @property float $MA0045
 * @property float $MA0046
 * @property float $MA0047
 * @property float $MA0048
 * @property float $MA0049
 * @property float $MA0050
 * @property float $MA0051
 * @property float $MA0052
 * @property float $MA0053
 * @property float $MA0054
 * @property float $MA0056
 * @property float $MA0057
 * @property float $MA0058
 * @property float $MA0059
 * @property float $MA0060
 * @property float $MA0062
 * @property float $MA0063
 * @property float $MA0065
 * @property float $MA0068
 * @property float $MA0069
 * @property float $MA0070
 * @property float $MA0071
 * @property float $MA0072
 * @property float $MA0074
 * @property float $MA0075
 * @property float $MA0076
 * @property float $MA0077
 * @property float $MA0078
 * @property float $MA0079
 * @property float $MA0080
 * @property float $MA0081
 * @property float $MA0082
 * @property float $MA0083
 * @property float $MA0084
 * @property float $MA0085
 * @property float $MA0086
 * @property float $MA0087
 * @property float $MA0088
 * @property float $MA0089
 * @property float $MA0090
 * @property float $MA0091
 * @property float $MA0092
 * @property float $MA0093
 * @property float $MA0094
 * @property float $MA0095
 * @property float $MA0096
 * @property float $MA0097
 * @property float $MA0098
 * @property float $MA0099
 * @property float $MA0100
 * @property float $MA0102
 * @property float $MA0103
 * @property float $MA0104
 * @property float $MA0105
 * @property float $MA0106
 * @property float $MA0107
 * @property float $MA0109
 * @property float $MA0110
 * @property float $MA0111
 * @property float $MA0112
 * @property float $MA0113
 * @property float $MA0114
 * @property float $MA0115
 * @property float $MA0117
 * @property float $MA0118
 * @property float $MA0120
 * @property float $MA0121
 * @property float $MA0124
 * @property float $MA0127
 * @property float $MA0128
 * @property float $MA0129
 * @property float $MA0130
 * @property float $MA0132
 * @property float $MA0134
 * @property float $MA0135
 * @property float $MA0137
 * @property float $MA0139
 * @property float $MA0140
 * @property float $MA0141
 * @property float $MA0143
 * @property float $MA0144
 * @property float $MA0145
 * @property float $MA0146
 * @property float $MA0147
 * @property float $MA0148
 * @property float $MA0150
 * @property float $MA0154
 * @property float $MA0156
 * @property float $MA0159
 * @property float $MA0160
 * @property float $MA0162
 * @property float $MA0163
 * @property float $MA0164
 * @property float $MA0165
 * @property float $MA0168
 * @property float $MA0171
 * @property float $MA0172
 * @property float $MA0173
 * @property float $MA0175
 * @property float $MA0176
 * @property float $MA0177
 * @property float $MA0181
 * @property float $MA0185
 * @property float $MA0187
 * @property float $MA0191
 * @property float $MA0192
 * @property float $MA0194
 * @property float $MA0195
 * @property float $MA0196
 * @property float $MA0198
 * @property float $MA0200
 * @property float $MA0201
 * @property float $MA0203
 * @property float $MA0205
 * @property float $MA0206
 * @property float $MA0209
 * @property float $MA0210
 * @property float $MA0211
 * @property float $MA0212
 * @property float $MA0213
 * @property float $MA0216
 * @property float $MA0221
 * @property float $MA0223
 * @property float $MA0224
 * @property float $MA0225
 * @property float $MA0227
 * @property float $MA0230
 * @property float $MA0233
 * @property float $MA0236
 * @property float $MA0238
 * @property float $MA0240
 * @property float $MA0241
 * @property float $MA0247
 * @property float $MA0250
 * @property float $MA0259
 * @property float $MA0266
 * @property float $MA0268
 * @property float $MA0275
 * @property float $MA0276
 * @property float $MA0283
 * @property float $MA0287
 * @property float $MA0303
 * @property float $MA0304
 * @property float $MA0308
 * @property float $MA0313
 * @property float $MA0322
 * @property float $MA0324
 * @property float $MA0326
 * @property float $MA0328
 * @property float $MA0329
 * @property float $MA0334
 * @property float $MA0335
 * @property float $MA0336
 * @property float $MA0337
 * @property float $MA0338
 * @property float $MA0344
 * @property float $MA0345
 * @property float $MA0346
 * @property float $MA0347
 * @property float $MA0349
 * @property float $MA0350
 * @property float $MA0354
 * @property float $MA0356
 * @property float $MA0357
 * @property float $MA0358
 * @property float $MA0360
 * @property float $MA0362
 * @property float $MA0363
 * @property float $MA0365
 * @property float $MA0366
 * @property float $MA0369
 * @property float $MA0372
 * @property float $MA0373
 * @property float $MA0375
 * @property float $MA0377
 * @property float $MA0381
 * @property float $MA0385
 * @property float $MA0386
 * @property float $MA0387
 * @property float $MA0388
 * @property float $MA0389
 * @property float $MA0393
 * @property float $MA0404
 * @property float $MA0405
 * @property float $MA0407
 * @property float $MA0409
 * @property float $MA0410
 * @property float $MA0412
 * @property float $MA0415
 * @property float $MA0416
 * @property float $MA0419
 * @property float $MA0420
 * @property float $MA0423
 * @property float $MA0424
 * @property float $MA0426
 * @property float $MA0431
 * @property float $MA0432
 * @property float $MA0433
 * @property float $MA0442
 * @property float $MA0444
 * @property float $MA0445
 * @property float $MA0449
 * @property float $MA0451
 * @property float $MA0454
 * @property float $MA0455
 * @property float $MA0464
 * @property float $MA0465
 * @property float $MA0466
 * @property float $MA0469
 * @property float $MA0471
 * @property float $MA0476
 * @property float $MA0481
 * @property float $MA0485
 * @property float $MA0488
 * @property float $MA0489
 * @property float $MA0490
 * @property float $MA0491
 * @property float $MA0498
 * @property float $MA0503
 * @property float $MA0505
 * @property float $MA0506
 * @property float $MA0508
 * @property float $MA0511
 * @property float $MA0514
 * @property float $MA0516
 * @property float $MA0517
 * @property float $MA0521
 * @property float $MA0532
 * @property float $MA0535
 * @property float $MA0536
 * @property float $MA0545
 * @property float $MA0547
 * @property float $MA0554
 * @property float $MA0566
 * @property float $MA0568
 * @property float $MA0569
 * @property float $MA0584
 * @property float $MA0585
 * @property float $MA0591
 * @property float $MA0593
 * @property float $MA0595
 * @property float $MA0596
 * @property float $MA0598
 * @property float $MA0599
 * @property float $MA0602
 * @property float $MA0604
 * @property float $MA0618
 * @property float $MA0623
 * @property float $MA0626
 * @property float $MA0635
 * @property float $MA0654
 * @property float $MA0663
 * @property float $MA0667
 * @property float $MA0674
 * @property float $MA0675
 * @property float $MA0680
 * @property float $MA0683
 * @property float $MA0690
 * @property float $MA0691
 * @property float $MA0694
 * @property float $MA0696
 * @property float $MA0702
 * @property float $MA0704
 * @property float $MA0705
 * @property float $MA0709
 * @property float $MA0712
 * @property float $MA0713
 * @property float $MA0735
 * @property float $MA0739
 * @property float $MA0740
 * @property float $MA0747
 * @property float $MA0751
 * @property float $MA0752
 * @property float $MA0760
 * @property float $MA0762
 * @property float $MA0769
 * @property float $MA0772
 * @property float $MA0773
 * @property float $MA0776
 * @property float $MA0778
 * @property float $MA0780
 * @property float $MA0784
 * @property float $MA0786
 * @property float $MA0788
 * @property float $MA0790
 * @property float $MA0791
 * @property float $MA0804
 * @property float $MA0814
 * @property float $MA0849
 * @property float $MA0895
 * @property float $MA0909
 * @property float $MA0914
 * @property float $MA0980
 * @property float $MA1015
 * @property float $MA1021
 * @property float $MA1036
 * @property float $MA1093
 * @property float $MA1107
 * @property float $MA1171
 * @property float $MA1467
 *
 * @author Ashley Marando <a.marando@.me.com>
 */
class Constant
{
    //----------------------------------------------------------------------------
    // Properties
    //----------------------------------------------------------------------------

    /**
     * Holds the public properties of this instance
     *
     * @var array
     */
    protected $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    //----------------------------------------------------------------------------
    // Functions
    //----------------------------------------------------------------------------

    /**
     * Gets the total number of constants stored within this instance
     *
     * @return int
     */
    public function count()
    {
        return count($this->properties);
    }

}
