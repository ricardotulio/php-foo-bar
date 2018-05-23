# FooBar in PHP

FooBar is a known challenge in computer world that consist in follwing test:

```
Write a program that prints the numbers from 1 to 100. But for multiples of
three print "Foo" instead of the number and for the multiples of five print
"Bar". For numbers which are multiples of both three and five print "FooBar".
```

## Dependencies
- PHP 5.6+
- Composer

## Setup
Run `$ composer install` to generate autoload and install development dependencies.

## Running FooBar
To run this code, you just need to execute the following command:

```
$ php index.php
```

## Running tests and linters

### Running tests
Run `$ composer test`.

### Running Code Sniffer
Run `$ composer run phpcs`.

### Running Mess Detector
Run `$ composer run phpmd`.

### Running both Code Sniffer and Mess Detector
Run `$ composer run lint`.

## Considerations

You can use docker instead of php and composer. To run project using docker,
you just need to replace

`$ php ...`

for

`$ docker run --rm -it -v $(pwd):$(pwd) -w $(pwd) php:7.2-cli-alpine php ...`.


To run tests and linters, you need to replace

`$ composer ...`

for

`$ docker run --rm -it -v $(pwd):$(pwd) -w $(pwd) composer composer ...`.
