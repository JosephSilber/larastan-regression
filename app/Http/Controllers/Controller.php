<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\LazyCollection;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function test(): LazyCollection
    {
        return LazyCollection::times(5)->flatMap(function ($number) {
            return [$number];
        });
    }
}
