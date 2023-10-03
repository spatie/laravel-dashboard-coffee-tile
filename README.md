# Coffee brewing statistics for the Spatie office

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-dashboard-coffee-tile.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-dashboard-coffee-tile)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-dashboard-coffee-tile.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-dashboard-coffee-tile)

Over at Spatie we drink a lot of coffee. How much coffee? We had no idea until we created this dashboard tile.

Using a separate Raspberry Pi running [this Python script](https://github.com/spatie/dashboard-coffee-listener/) we can listen to the sounds our office coffee machine makes and update the dashboard tile with the latest statistics.

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

![image](https://user-images.githubusercontent.com/6287961/140376262-2c257983-d38a-4fc0-ac61-518643111d77.png)


## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-dashboard-skeleton-tile.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-dashboard-skeleton-tile)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation and usage

You can install the package via composer:

```bash
composer require spatie/laravel-dashboard-coffee-tile
```

You will also need to publish and run the migrations:

```bash
php artisan vendor:publish --provider="Spatie\CoffeeTile\CoffeeTileServiceProvider" --tag="coffee-tile-migrations"
php artisan migrate
```

In your dashboard view you can add the `livewire:coffee-tile` component. The `total-offset` will offset the total amount of brewed coffees and is optional.

```html
<x-dashboard>
    <livewire:coffee-tile position="e7:e16" total-offset="1337" />
</x-dashboard>
```

Finally, coffees are counted by POST requests to the included `CoffeeController`. Add the following route to your `routes/api.php` file. Endpoint authentication is up to you. Make sure to add a `auth` middleware to this route if you feel it's necessary.

```php
Route::post('/coffee', \Spatie\CoffeeTile\Http\CoffeeController::class);
```

Additionally, you'll need something to hook up your coffee machine to this coffee endpoint. Your machine might have a very cool web UI that can send a webhook to the dashboard or you might need to get creative with an Arduino or Raspberry Pi. 

Our set-up uses a Raspberry Pi to listen to the coffee machine noises to determine when a cup is brewing. This is a separate project that can be found [here](https://github.com/spatie/dashboard-coffee-listener).

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email alex@spatie.be instead of using the issue tracker.

## Credits

- [Alex Vanderbist](https://github.com/AlexVanderbist)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
