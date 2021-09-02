# Executor

This library is an object wrapper for an [exec](https://www.php.net/manual/en/function.exec.php) PHP function.

## Installation

```console
composer require piotrpress/executor
```

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

use PiotrPress;

$result = new Executor( 'ls' );

$result->getOutput();
$result->getReturn();
$result->isSuccess(); 
$result->isFailure();

echo $result;
```

## Requirements

PHP >= `7.4` version.

## License

[GPL3.0](license.txt)