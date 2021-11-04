<?php

namespace Spatie\CoffeeTile\Http;

use Spatie\CoffeeTile\Models\Coffee;
use function Spatie\CoffeeTile\Http\Controllers\response;

class CoffeeController
{
    public function __invoke()
    {
        Coffee::create();

        return response()->noContent();
    }
}
