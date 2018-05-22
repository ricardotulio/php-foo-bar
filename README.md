# FooBar in PHP

FooBar is a known challenge in computer world that consist in follwing test:

```
Write a program that prints the numbers from 1 to 100. But for multiples of three print "Foo" instead of the number and for the multiples of five print "Bar". For numbers which are multiples of both three and five print "FooBar".
```

## How to run this code
To run this code, you just need to execute the following command:

```
$ php index.php
```

**Have no PHP installed? no problem, you can run using docker:**
```
$ docker run --rm -it -v $(pwd):$(pwd) -w $(pwd) php:7.2-cli index.php
```

## Running tests

### Installing dev dependencies

To execute tests, is necessary to install development dependencies using the following command:

```
$ composer install
```

### Executing tests

```
$ vendor/bin/phpunit
```

or

```
$ composer test
```

### Running Code Sniffer
Just run `$ composer run phpcs`

### Running Mess Detector
Just run `$ composer run phpmd`

### Running both Code Sniffer and Mess Detector
Just run `$ composer run lint`
