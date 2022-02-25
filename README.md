# 2021_advent-of-code_PHP

## How did we start?
First we created simple PHP project with composer as a package manager by command:

`composer init`

then we added PHPUnit as a dependency. Yes it's rigth - dependency, not dev-dependency,
because this project is about testing and it's heavily based on PHPUnit
and the PHPUnit is acutally the base stone of this project.

`composer require phpunit/phpunit ^9`

## How to run in the docker
Buld the docker image

`docker build -t advent-of-code .`

Run the container

`docker run -ti --rm -v $(PWD):/app advent-of-code`

Build the project in the container

`composer install`

And run the tests in the container

`composer test`
