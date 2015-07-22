# Starter package for Laravel 5

## Installation

1. Create `packages/yourname` folder
2. clone this repository:

    git clone add/path/Andy!!

3. Change namespaces to your own in the following files:

    src/StarterServiceProvider.php
    Http/Controllers/TestController.php

    e.g. YourName\Starter

4. Register service provider in `yourroot/config/app.php`:

    YourName\Starter\StarterServiceProvider::class

5. Publish config:

    php artisan vendor:Publish

6. Add folder to autoload files:

    "psr-4": {
        "App\\": "app/",
        "YourName\\Starter\\": "packages/yourname/starter/src/",
    }

7. Composer autoload:

    composer dump-autoload

8. Navigate to 'starter', and you should see "Welcome to your new package!"
