 ```
    ___        _                     _         _  _      __                                 _
   /   \ __ _ | |_  __ _  ___   ___ | |_  ___ | || |    / /   __ _  _ __  __ _ __   __ ___ | |
  / /\ // _` || __|/ _` |/ __| / _ \| __|/ __|| || |_  / /   / _` || '__|/ _` |\ \ / // _ \| |
 / /_//| (_| || |_| (_| |\__ \|  __/| |_ \__ \|__   _|/ /___| (_| || |  | (_| | \ V /|  __/| |
/___,'  \__,_| \__|\__,_||___/ \___| \__||___/   |_|  \____/ \__,_||_|   \__,_|  \_/  \___||_|
                                      AUSTRALIA COLLECTION - bluora/laravel-datasets-australia
```

Provides datasets for Australia to be used with [H&H|Digital's Laravel Datasets Package](https://github.com/bluora/laravel-datasets).

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-datasets-australia/v/stable.svg)](https://packagist.org/packages/bluora/laravel-datasets) [![StyleCI](https://styleci.io/repos/77714252/shield?branch=master)](https://styleci.io/repos/77714252) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/) [![License](https://poser.pugx.org/bluora/laravel-datasets/license.svg)](https://packagist.org/packages/bluora/laravel-datasets)

## Install

Via composer:

$ composer require bluora/laravel-datasets-australia

## Configuration

Enable this dataset collection by editing config/datasets.php:

```php
return [
    'source' => [
        ...
        'bluora/laravel-datasets-australia',
        ...
    ],
];
```

## Available datasets

* Banks - (apca.com.au)
* BSB - (apca.com.au)
* Postcodes - (https://github.com/charliesome/australia_postcode)

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-datasets/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-datasets-australia/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-datasets/blob/master/LICENSE) for more information.
