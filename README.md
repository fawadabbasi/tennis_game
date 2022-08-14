# Tennis Refactoring in PHP 
This code was a take home test for a company 
## Installation

The tennis_game uses:

- [PHP 7.2-7.4 or 8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:
- [Git](https://git-scm.com/downloads)

Clone the repository

```sh
git clone git@github.com:fawadabbasi/tennis_game.git
```
or

```shell script
git clone https://github.com/fawadabbasi/tennis_game.git

```

Install all the dependencies using composer

```shell script
composer install
```

## Folders

- `src` - contains the TennisGame interface and three TennisGame classes, which need improving (see
  [top level readme](../README.md) for more information) 
- `tests` - contains the three corresponding TennisGameTests, one for each class. All the tests are passing, and
  shouldn't need to be changed.

## Testing

PHPUnit is pre-configured to run tests. PHPUnit can be run using a composer script. To run the unit tests, 

```shell script
composer test
```
