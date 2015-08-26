# Real IP Detection for PHP
Real IP is a Simple PHP library that let you detect real user IP address.

---

- [Installation](#installation)
- [Usage](#usage)

## Installation

Just clone/copy this library to your project.

## Usage

Include artdarek/real-ip library:

```php
 	require '/path/to/your/libraries/dir/RealIP.php';
```

create new instance:

```php
	$ip = new Artdarek\RealIP();
```

you can set some stuff:

```php
	$ip->setDefault('Not found');
	$ip->setMethod('getenv');
```

at the and call detect method:

```php
	$ip->detect();
```
	
and print results (detectd IP address):

```php
	echo $ip->get();
```

You can also chain all methods:

```php
$ip = new Artdarek\RealIP()
	->setDefault('Not found')
    ->setMethod('getenv')
    ->detect()
	->get();
```