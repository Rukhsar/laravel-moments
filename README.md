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

3. `currentHour`
    Parameter : none

4. `lastHour`
    Parameter : none

5. `currentDay`
    Parameter : none

6. `lastDay`
    Parameter : none

7. `currentWeek`
    Parameter : none

8. `lastWeek`
    Parameter : none

9. `currentMonth`
    Parameter : none

10. `currentYear`
    Parameter : none

11. `lastYear`
    Parameter : none

12. `lastSeconds`
    Parameter : `(int) $countSeconds`

13. `lastMinutes`
    Parameter : `(int) $countMinutes`

14. `lastHours`
    Parameter : `(int) $countHours`

15. `lastDays`
    Parameter : `(int) $countDays`

16. `lastWeeks`
    Parameter : `(int) $countWeeks`

17. `lastMonths`
    Parameter : `(int) $countMonths`

18. `lastYears`
    Parameter : `(int) $countYears`
