# ci3-tdd-stack
A tech stack sample for doing TDD on  CodeIgniter3.

## What is This?
I want to put together a best practice stack for doing TDD on CI3. 

## The Stack
	* CI3
	* Codeception (for integration test)
	* CIUnit (for CI3)
		* [https://github.com/NEKOGET/CIUnit-for-CI3](https://github.com/NEKOGET/CIUnit-for-CI3)
	* Composer

## How to Use

### Composer
* The composer.phar is located at `app/application/composer.phar`. 
* The composer.json is located at `app/application/composer.json`. 

#### Example  
```bash
$ cd app/application
$ php ./composer.phar require "twig/twig"
$ php ./composer.phar install
```

#### Composer commands
[https://getcomposer.org/doc/03-cli.md](https://getcomposer.org/doc/03-cli.md)

### Codeception
* Codeception tests are located in `app/application/tests`
* Codeception binary is located at `app/application/vendor/bin/codecept`

#### Example
```bash
$ cd app/application/tests
$ ../vendor/bin/codecept build
$ ../vendor/bin/codecept run
```

### CIUnit
(still working on it...)

