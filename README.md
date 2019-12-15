# infogram/unfi

 ![](https://img.shields.io/badge/version-v1.0.*-green.svg)
 ![](https://img.shields.io/badge/php-%5E7.3-blue.svg?logo=php&logoColor=white)
 ![](https://img.shields.io/badge/size-~1%20MB-brightgreen.svg)

### Installation

Install the dependencies and devDependencies in your composer.json.

#### Composer.json


#### Add custom repository - get https clone url
```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/zstevovich/Unfi.git"
        }
],
```
#### Install by composer
```sh
$ composer require infogram/Unfi ^1.0@dev
```
#### OR add package
```
 "require": {
        "infogram/unfi": "^1.0@dev",
        ...
    },
```

````
composer install
composer update
````