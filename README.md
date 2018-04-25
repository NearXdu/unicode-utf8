# Simple tools transform unicode to utf8

This tools solve the problem when `target string` is like "head\u4f60\u597d\u4e16\u754ctail"

## Install
```shell
composer require crlt/unicode-utf8
```

## Usage
```php
<?php
require_once "vendor/autoload.php";

$test = new Crlt\Tools\Unicode2Utf();
echo $test->Transform("head\u4f60\u597d\u4e16\u754ctail");

```

## License
MIT

