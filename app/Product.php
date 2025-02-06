<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'sku';
    public $incrementing = false;

    // measurements in cm

    // length
    public const SIZE_NINE_LENGTH = 50;
    public const SIZE_EIGHT_LENGTH = 40;
    public const SIZE_SEVEN_LENGTH = 35;
    public const SIZE_SIX_LENGTH = 30;
    public const SIZE_FIVE_LENGTH = 25;
    public const SIZE_FOUR_LENGTH = 20;
    public const SIZE_THREE_LENGTH = 15;
    public const SIZE_TWO_LENGTH = 10;
    public const SIZE_ONE_LENGTH = 5;
    public const SIZE_ZERO_LENGTH = 2;

    // width
    public const SIZE_NINE_WIDTH = 50;
    public const SIZE_EIGHT_WIDTH = 40;
    public const SIZE_SEVEN_WIDTH = 35;
    public const SIZE_SIX_WIDTH = 30;
    public const SIZE_FIVE_WIDTH = 25;
    public const SIZE_FOUR_WIDTH = 20;
    public const SIZE_THREE_WIDTH = 15;
    public const SIZE_TWO_WIDTH = 10;
    public const SIZE_ONE_WIDTH = 5;
    public const SIZE_ZERO_WIDTH = 2;

    // height
    public const SIZE_NINE_HEIGHT = 50;
    public const SIZE_EIGHT_HEIGHT = 50;
    public const SIZE_SEVEN_HEIGHT = 35;
    public const SIZE_SIX_HEIGHT = 30;
    public const SIZE_FIVE_HEIGHT = 25;
    public const SIZE_FOUR_HEIGHT = 20;
    public const SIZE_THREE_HEIGHT = 15;
    public const SIZE_TWO_HEIGHT = 10;
    public const SIZE_ONE_HEIGHT = 5;
    public const SIZE_ZERO_HEIGHT = 2;

    // weights in kilograms
    public const SIZE_NINE_MIN_WEIGHT = 15;
    public const SIZE_NINE_MAX_WEIGHT = 30;
    public const SIZE_EIGHT_MIN_WEIGHT = 12;
    public const SIZE_EIGHT_MAX_WEIGHT = 14.9;
    public const SIZE_SEVEN_MIN_WEIGHT = 10;
    public const SIZE_SEVEN_MAX_WEIGHT = 11.9;
    public const SIZE_SIX_MIN_WEIGHT = 8;
    public const SIZE_SIX_MAX_WEIGHT = 9.9;
    public const SIZE_FIVE_MIN_WEIGHT = 6;
    public const SIZE_FIVE_MAX_WEIGHT = 7.9;
    public const SIZE_FOUR_MIN_WEIGHT = 4;
    public const SIZE_FOUR_MAX_WEIGHT = 5.9;
    public const SIZE_THREE_MIN_WEIGHT = 3;
    public const SIZE_THREE_MAX_WEIGHT = 3.9;
    public const SIZE_TWO_MIN_WEIGHT = 2;
    public const SIZE_TWO_MAX_WEIGHT = 2.9;
    public const SIZE_ONE_MIN_WEIGHT = 1;
    public const SIZE_ONE_MAX_WEIGHT = 1.9;
    public const SIZE_ZERO_MIN_WEIGHT = 0.5;
    public const SIZE_ZERO_MAX_WEIGHT = 0.9;


    // Volume
    public const SIZE_NINE_VOLUME = 125000;
    public const SIZE_EIGHT_VOLUME = 64000;

    // Density
    public const SIZE_NINE_MIN_DENSITY = 0.00012;
    public const SIZE_NINE_MAX_DENSITY = 0.00024;
    public const SIZE_EIGHT_MIN_DENSITY = 0.0001875;
    public const SIZE_EIGHT_MAX_DENSITY = 0.000234375;

    // var sizeNine = [50,50,50,15,30,125000,0.00012,0.00024];
    public const SIZE_NINE = [
        self::SIZE_NINE_LENGTH, self::SIZE_NINE_WIDTH, self::SIZE_NINE_HEIGHT .
        self::SIZE_NINE_MIN_WEIGHT, self::SIZE_NINE_MAX_WEIGHT,
        self::SIZE_NINE_VOLUME,
        self::SIZE_NINE_MIN_DENSITY, self::SIZE_NINE_MAX_DENSITY
    ];

    // var sizeEight = [40,40,40,12,14.9,64000,0.0001875,0.000234375];
    public const SIZE_EIGHT = [
        self::SIZE_EIGHT_LENGTH, self::SIZE_EIGHT_WIDTH, self::SIZE_EIGHT_HEIGHT,
        self::SIZE_EIGHT_MIN_WEIGHT, self::SIZE_EIGHT_MAX_WEIGHT,
        self::SIZE_EIGHT_VOLUME,
        self::SIZE_EIGHT_MIN_DENSITY, self::SIZE_EIGHT_MAX_DENSITY

    ];

    // var sizeSeven = [35,35,35,10,11.9,42875,0.000233236,0.000279883];
    public const SIZE_SEVEN = [
         self::SIZE_SEVEN_LENGTH, self::SIZE_SEVEN_WIDTH, self::SIZE_SEVEN_HEIGHT,
         self::SIZE_SEVEN_MIN_WEIGHT, self::SIZE_SEVEN_MAX_WEIGHT,

    ];

    // var sizeSix = [30,30,30,8,9.9,27000,0.000296296,0.00037037];
    public const SIZE_SIX = [
        self::SIZE_SIX_LENGTH, self::SIZE_SIX_WIDTH, self::SIZE_SIX_HEIGHT,
        self::SIZE_SIX_MIN_WEIGHT, self::SIZE_SIX_MAX_WEIGHT,
    ];

    // var sizeFive  = [25,25,25,6,7.9,15625,0.000384,0.000512];
    public const SIZE_FIVE = [
        self::SIZE_FIVE_LENGTH, self::SIZE_FIVE_WIDTH, self::SIZE_FIVE_HEIGHT,
        self::SIZE_FIVE_MIN_WEIGHT, self::SIZE_FIVE_MAX_WEIGHT,
    ];

    // var sizeFour  = [20,20,20,4,5.9,8000,0.0005,0.00075];
    public const SIZE_FOUR = [
        self::SIZE_FOUR_LENGTH, self::SIZE_FOUR_WIDTH, self::SIZE_FOUR_HEIGHT,
        self::SIZE_FOUR_MIN_WEIGHT, self::SIZE_FOUR_MAX_WEIGHT,
    ];

    // var sizeThree = [15,15,15,3,3.9,3375,0.000888889,0.001185185];
    public const SIZE_THREE = [
        self::SIZE_THREE_LENGTH, self::SIZE_THREE_WIDTH, self::SIZE_THREE_HEIGHT,
        self::SIZE_THREE_MIN_WEIGHT, self::SIZE_THREE_MAX_WEIGHT,
    ];

    // var sizeTwo   = [10,10,10,2,2.9,1000,0.002,0.003];
    public const SIZE_TWO = [
        self::SIZE_TWO_LENGTH, self::SIZE_TWO_WIDTH, self::SIZE_TWO_HEIGHT,
        self::SIZE_TWO_MIN_WEIGHT, self::SIZE_TWO_MAX_WEIGHT,
    ];

    // var sizeOne   = [5,5,5,1,1.9,125,0.008,0.0152];
    public const SIZE_ONE = [
        self::SIZE_ONE_LENGTH, self::SIZE_ONE_WIDTH, self::SIZE_ONE_HEIGHT,
        self::SIZE_ONE_MIN_WEIGHT, self::SIZE_ONE_MAX_WEIGHT,
    ];

    // var sizeZero  = [2,2,2,0.5,0.9,8,0.0625,0.1125];
    public const SIZE_ZERO = [
        self::SIZE_ZERO_LENGTH, self::SIZE_ZERO_WIDTH, self::SIZE_ZERO_HEIGHT,
        self::SIZE_ZERO_MIN_WEIGHT, self::SIZE_ZERO_MAX_WEIGHT
    ];

    public const PRODUCT_PLACEMENT_SIZES = [
        // 9 Largest - 0 smallest
        self::SIZE_NINE, self::SIZE_EIGHT, self::SIZE_SEVEN, self::SIZE_SIX, self::SIZE_FIVE,
        self::SIZE_FOUR, self::SIZE_THREE, self::SIZE_TWO, self::SIZE_ONE, self::SIZE_ZERO
    ];
}
