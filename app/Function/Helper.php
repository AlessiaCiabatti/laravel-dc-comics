<?php

namespace App\Function;
use Illuminate\Support\Str;

// heper di venta un raccoglitore di metodi
class Helper{
    public static function generateSlug($string, $model){
            // della classe Str, usiamo il metodo statico slug
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        $exixts = $model::where('slug', $slug)->first();
        $c = 1;

        while($exixts){
            $slug = $original_slug . '-' . $c;
            $exixts = $model::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}