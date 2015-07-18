# phpunit-for-bitrix

Base test class for unit tests inside 1C-Bitrix framework environment

## note

This package requires latest versions of php (>= 5.5.9).

## installation

To install package, run the command below and you will get the latest
version

```sh
composer require osotov/phpunit-for-bitrix
```

Copy phpunit.xml.dist file from package to document root.
Set up your tests directory inside <directory> tag.
If you want to use another bootstrap file set it instead default inside bootstrap attribute.

## usage

To use this package extend \Osotov\PhpunitForBitrix\BitrixTestCase with your test class.
 
This package uses awesome mock framework Mockery to ease mock and stub creation.

Additionally package uses Faker to help you with creation of dummy data.