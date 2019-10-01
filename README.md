# JsonApi-Constant

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a set of constants that represents members names of documents using the [JSON:API specification](https://jsonapi.org/).

## Technologies

- PHP 7.2+

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require-dev": {
        "vgirol/jsonapi-constant": "dev-master"
    }
}
```

And then run `composer install` from the terminal.

### Quick Installation

Above installation can also be simplified by using the following command:

```sh
composer require vgirol/jsonapi-constant
```

## Usage

```php
use VGirol\JsonApiConstant\Members;

Members::META_PAGINATION
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```sh
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email [vincent@girol.fr](mailto:vincent@girol.fr) instead of using the issue tracker.

## Credits

- [Vincent Girol](mailto:vincent@girol.fr)
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/VGirol/JsonApi-Constant.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/VGirol/JsonApi-Constant.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/VGirol/JsonApi-Constant
[link-downloads]: https://packagist.org/packages/VGirol/JsonApi-Constant
[link-author]: https://github.com/VGirol
[link-contributors]: ../../contributors
