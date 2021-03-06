<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/prizes' => ['AppController', 'prizes'],
    '/submitted' => ['AppController', 'submitted'],
    '/results' => ['AppController', 'results'],
    '/results/plays' => ['AppController', 'plays'],
    '/play' => ['AppController', 'play'],
];