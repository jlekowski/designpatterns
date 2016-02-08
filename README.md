[![Build Status](https://travis-ci.org/jlekowski/designpatterns.svg)](https://travis-ci.org/jlekowski/designpatterns)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f1a79fb5-54be-45a9-abb7-11c2e8e40500/mini.png)](https://insight.sensiolabs.com/projects/f1a79fb5-54be-45a9-abb7-11c2e8e40500)

# Design Patterns
#### Implemented:
* [Data Mapper](DataMapper) - as User object and User object Mapper
* [Decorator](Decorator) - as API and user response
* [Factory (Static Factory)](Factory) - as SOAP and REST API clients
* [Strategy](Strategy) - as API clients for version 1 and 2
* [Observer](Observer) - as User object with Cache and Mailer observers


## === Instalation ===
Download composer and:
```
composer install
```

## === Run ===
```
php bin/examples.php
```
OR
```
php DataMapper/example.php
php Decorator/example.php
php Factory/example.php
php Strategy/example.php
php Observer/example.php
```

## === Test ===
```
bin/phpspec run
```
