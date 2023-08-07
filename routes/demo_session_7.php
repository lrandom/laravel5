<?php

use Illuminate\Support\Facades\Route;

Route::get('demo', function () {
    /*    $cars = ['BMW', 'Porches', 'Vinfast'];
        //dd($cars);
        $carsCollect = collect($cars);
        //dd($carsCollect);
        $carsCollect->each(function ($item, $index) {
            echo $item . $index . "\n";
        });

        $num = collect([10, 20, 30]);
        $num->map(function ($item) {
            return $item * 2;
        })->each(function ($item) {
            echo $item;
        });*/

    /*$arr = [
        ['name' => 'BMW', 'price' => 100],
        ['name' => 'Vinfast', 'price' => 200],
        ['name' => 'Porches', 'price' => 300],
    ];
    $arr = collect($arr);

    $arrPluck = $arr->pluck('price', 'name');
    dd($arrPluck);*/

    /*$num = [20, 30, 40, 50];
    $num = collect($num);
    $num->filter(function ($item) {
        return $item > 30;
    })->each(function ($item) {
        echo $item;
    });*/

    /*    $nums = [2, 3, 4, 5, 67];
        $total = 0;
        foreach ($nums as $num) {
            $total += $num;
        }

        $nums = collect([2, 3, 4, 5, 67]);
        $total = $nums->reduce(function ($carry, $item) {
            return $carry + $item;
        });
        echo $total;*/

    /*    $nums = [
            ['name' => 'BMW', 'price' => 100],
            ['name' => 'Vinfast', 'price' => 200],
            ['name' => 'Porches', 'price' => 300],
        ];
        $nums = collect($nums);
        $numFlatten = $nums->flatten()->each(function ($item) {
            echo $item;
        });
        dd($numFlatten);*/

    $mang = ['a', 'b', 'c', 'd', 'e'];
    $mang = collect($mang);
    $mang->toUpper()->each(function ($item) {
        echo $item;
    });

    $pureArr = $mang->toArray();
    dd($pureArr);

});
?>
