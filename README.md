# Coffee brewing statistics for the Spatie office

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-dashboard-coffee-tile.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-dashboard-coffee-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/laravel-dashboard-coffee-tile/run-tests?label=tests)](https://github.com/spatie/laravel-dashboard-coffee-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-dashboard-coffee-tile.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-dashboard-coffee-tile)

A friendly explanation of what your tile does.

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-dashboard-skeleton-tile.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-dashboard-skeleton-tile)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-dashboard-coffee-tile
```

Add route in api.php

```php
Route::post('/coffee', \Spatie\CoffeeTile\Http\CoffeeController::class);
```

## Usage

In your dashboard view you use the `livewire:my-tile` component.

```html
<x-dashboard>
    <livewire:my-tile position="e7:e16" />
</x-dashboard>
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email alex@spatie.be instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
