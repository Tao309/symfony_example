## Symfony Example ##

### + docker init
    $ docker-compose up --build

### + symfony init app through composer
    $ php bin/console about

### + Entity
    $ php bin/console do:mi:mi
    $ php bin/console doctrine:fixtures:load

### + custom controller, route for api-platform
    GET /api/animals
    Retrieves the collection of Animal resources.
    
    POST /api/animals
    Creates a Animal resource.
    
    GET /api/animals/{id}
    Retrieves a Animal resource.
    
    PUT /api/animals/{id}
    Replaces the Animal resource.
    
    DELETE /api/animals/{id}
    Removes the Animal resource.
    
    PATCH /api/animals/{id}
    Updates the Animal resource.

### - response for custom api-platform controller actions

### - standard routes

### - validator pool

### + dql functions
* numeric_functions
    * App\DoctrineFunctions\Round
* datetime_functions
    * App\DoctrineFunctions\DateFormat

### - CLI

### + grumphp