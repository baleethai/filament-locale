# This is my package filament-locale

[![Latest Version on Packagist](https://img.shields.io/packagist/v/baleethai/filament-locale.svg?style=flat-square)](https://packagist.org/packages/baleethai/filament-locale)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/baleethai/filament-locale/run-tests?label=tests)](https://github.com/baleethai/filament-locale/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/baleethai/filament-locale/Check%20&%20fix%20styling?label=code%20style)](https://github.com/baleethai/filament-locale/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/baleethai/filament-locale.svg?style=flat-square)](https://packagist.org/packages/baleethai/filament-locale)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require baleethai/filament-locale
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-locale-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-locale-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-locale-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-locale = new Baleethai\FilamentLocale();
echo $filament-locale->echoPhrase('Hello, Baleethai!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Thinnakorn Pattha](https://github.com/baleethai)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
