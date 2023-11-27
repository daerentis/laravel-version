# This is my package laravel-version

[![Latest Version on Packagist](https://img.shields.io/packagist/v/daerentis/laravel-version.svg?style=flat-square)](https://packagist.org/packages/daerentis/laravel-version)
[![Total Downloads](https://img.shields.io/packagist/dt/daerentis/laravel-version.svg?style=flat-square)](https://packagist.org/packages/daerentis/laravel-version)

This package provides a simple way to get the current Laravel version and send it to an external API.

## Installation

You can install the package via composer:

```bash
composer require daerentis/laravel-version
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-version-config"
```

This is the contents of the published config file:

```php
return [
    'endpoint' => 'https://your-domain.com/api/versions',
];
```

## Usage

```php
php artisan laravel-version
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

-   [Christian Strausbach](https://github.com/daerentis)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
