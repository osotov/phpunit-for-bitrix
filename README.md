# phpunit-for-bitrix

Based on [osotov/phpunit-for-bitrix](https://github.com/osotov/phpunit-for-bitrix).

Base test class for unit tests inside 1C-Bitrix framework environment

## note

This package requires latest versions of php (>= 5.5.9) and phpunit (>=4.7.0 <7.0.0)

It might work fine with latest versions (7+) but was tested only with phpunit ^6 (_6.5.8_).

## installation

To install package, run the command below and you will get the latest
version

```sh
composer require dcode/phpunit-for-bitrix
```

Copy phpunit.xml.dist file from package to document root.
Set up your tests directory inside <directory> tag.
If you want to use another bootstrap file set it instead default inside bootstrap attribute.

## usage

If you use _old phpunit_ (>5.0.0) extend `Dcode\Bitrix\TestCase` class in 
your test cases.

This class uses mock framework Mockery to ease mock and stub creation and it uses Faker to help you with creation of
dummy data.
 
For new php unit (>=5.0.0) use `\PHPUnit\Framework\TestCase`.
