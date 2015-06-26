phpnats 
=======

* Master: [![Build Status](https://travis-ci.org/repejota/phpnats.png?branch=master)](https://travis-ci.org/repejota/phpnats)
* Develop: [![Build Status](https://travis-ci.org/repejota/phpnats.png?branch=develop)](https://travis-ci.org/repejota/phpnats)

A PHP client for the [NATS messaging system](https://nats.io).

>  Note: phpnats is under heavy development.

Requirements
------------

* php ~5.3
* [nats](https://github.com/derekcollison/nats) or [gnatsd](https://github.com/apcera/gnatsd)


Usage
-----

### Basic Usage

```php
$client = new \Nats\Connection(verbose=True);
$client.connect();

# Simple Publisher
$client.publish('foo', 'Hello World!');
```


Tests
-----

Tests are in the `tests` folder.
To run them, you need `PHPUnit` and execute `make test`.


License
-------

MIT, see [LICENSE](LICENSE)