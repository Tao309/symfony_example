## Symfony Example ##

### + docker init
    $ docker-compose up --build

### + symfony init app through composer
    $ php bin/console about

### + Entities
    $ php bin/console do:mi:mi
    $ php bin/console doctrine:fixtures:load

### - controller

### - validator pool

### + dql functions
* numeric_functions
    * App\DoctrineFunctions\Round
* datetime_functions
    * App\DoctrineFunctions\DateFormat

### - CLI