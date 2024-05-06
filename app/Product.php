<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'sku';
    public $incrementing = false;

    /*    var sizeNine  = [50,50,50,15,30,125000,0.00012,0.00024];
        var sizeEight = [40,40,40,12,14.9,64000,0.0001875,0.000234375];
        var sizeSeven = [35,35,35,10,11.9,42875,0.000233236,0.000279883];
        var sizeSix   = [30,30,30,8,9.9,27000,0.000296296,0.00037037];
        var sizeFive  = [25,25,25,6,7.9,15625,0.000384,0.000512];
        var sizeFour  = [20,20,20,4,5.9,8000,0.0005,0.00075];
        var sizeThree = [15,15,15,3,3.9,3375,0.000888889,0.001185185];
        var sizeTwo   = [10,10,10,2,2.9,1000,0.002,0.003];
        var sizeOne   = [5,5,5,1,1.9,125,0.008,0.0152];
        var sizeZero  = [2,2,2,0.5,0.9,8,0.0625,0.1125]; */

    // measurements in cm
    public const SIZE_NINE_LENGTH = 50;
    public const SIZE_EIGHT_LENGTH = 40;
    public const SIZE_NINE_WIDTH = 50;
    public const SIZE_EIGHT_WIDTH = 40;
    public const SIZE_NINE_HEIGHT = 50;
    public const SIZE_EIGHT_HEIGHT = 50;

    // weights in kilograms
    public const SIZE_NINE_MIN_WEIGHT = 15;
    public const SIZE_EIGHT_MIN_WEIGHT = 12;

    public const SIZE_NINE_MAX_WEIGHT = 30;
    public const SIZE_EIGHT_MAX_WEIGHT = 14.9;

    public const SIZE_NINE_VOLUME = 125000;
    public const SIZE_EIGHT_VOLUME = 64000;

    public const SIZE_NINE_MIN_DENSITY = 0.00012;
    public const SIZE_NINE_MAX_DENSITY = 0.00024;
    public const SIZE_EIGHT_MIN_DENSITY = 0.0001875;
    public const SIZE_EIGHT_MAX_DENSITY = 0.000234375;

    public const SIZE_NINE = [
        self::SIZE_NINE_LENGTH, self::SIZE_NINE_WIDTH, self::SIZE_NINE_HEIGHT .
        self::SIZE_NINE_MIN_WEIGHT, self::SIZE_NINE_MAX_WEIGHT,
        self::SIZE_NINE_VOLUME,
        self::SIZE_NINE_MIN_DENSITY, self::SIZE_NINE_MAX_DENSITY
    ];

    public const SIZE_EIGHT = [
        self::SIZE_EIGHT_LENGTH, self::SIZE_EIGHT_WIDTH, self::SIZE_EIGHT_HEIGHT,
        self::SIZE_EIGHT_MIN_WEIGHT, self::SIZE_EIGHT_MAX_WEIGHT,
        self::SIZE_EIGHT_VOLUME,
        self::SIZE_EIGHT_MIN_DENSITY, self::SIZE_EIGHT_MAX_DENSITY

    ];

    public const SIZE_SEVEN = [];
    public const SIZE_SIX = [];
    public const SIZE_FIVE = [];
    public const SIZE_FOUR = [];
    public const SIZE_THREE = [];
    public const SIZE_TWO = [];
    public const SIZE_ONE = [];
    public const SIZE_ZERO = [];

    public const PRODUCT_PLACEMENT_SIZES = [
        // 9 Largest - 0 smallest
        self::SIZE_NINE, self::SIZE_EIGHT, self::SIZE_SEVEN, self::SIZE_SIX, self::SIZE_FIVE,
        self::SIZE_FOUR, self::SIZE_THREE, self::SIZE_TWO, self::SIZE_ONE, self::SIZE_ZERO
    ];
}
