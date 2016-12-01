# Laravel Moments

A laravel trait to deal with time and dates with scope for eloquent models.


## Usage

### Update your Eloquent Models

Simply call `Moments` trait in your model using `use Rukhsar\Moments\Moments`.

```php
<?php

namespace App;

use Rukhsar\Moments\Moments;

class User extends Model
{
    use Moments;

    // your remaining model class content
}

```

Then you can call Moments scopes like below

```
<?php

    $users = User::currentDay()->get();

````

### Available Methods

1. `currentMinute`
    Parameter : none

2. `lastMinute`
    Parameter : none


