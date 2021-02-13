# Boatrace Analytics Trimmer

[![Build Status](https://github.com/boatrace-analytics/trimmer/workflows/tests/badge.svg)](https://github.com/boatrace-analytics/trimmer/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-analytics/trimmer/badge.svg?branch=master)](https://coveralls.io/github/boatrace-analytics/trimmer?branch=master)
[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics/trimmer/v/stable)](https://packagist.org/packages/boatrace-analytics/trimmer)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics/trimmer/v/unstable)](https://packagist.org/packages/boatrace-analytics/trimmer)
[![License](https://poser.pugx.org/boatrace-analytics/trimmer/license)](https://packagist.org/packages/boatrace-analytics/trimmer)

## Installation
```
$ composer require boatrace-analytics/trimmer
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Trimmer;

var_dump(Trimmer::trim()); // NULL
var_dump(Trimmer::trim(null)); // NULL
var_dump(Trimmer::trim(' 競艇 ')); // string(6) "競艇"

var_dump(Trimmer::ltrim()); // NULL
var_dump(Trimmer::ltrim(null)); // NULL
var_dump(Trimmer::ltrim(' 競艇 ')); // string(7) "競艇 "

var_dump(Trimmer::rtrim()); // NULL
var_dump(Trimmer::rtrim(null)); // NULL
var_dump(Trimmer::rtrim(' 競艇 ')); // string(7) " 競艇"
```

## License
The Boatrace Analytics Trimmer is open source software licensed under the [MIT license](LICENSE).
