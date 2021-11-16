<?php

namespace Spatie\CoffeeTile\Http;

use Spatie\CoffeeTile\Models\Coffee;

class CoffeeController
{
    public function __invoke()
    {
        Coffee::create();

        return response()->noContent();
    }
}
