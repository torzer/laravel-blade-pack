# Laravel Blade Pack

Laravel package with Blade extensions and directives for projects **torzer.com**.

## Installing and setting

### Installing

At `required` section in `composer.json` file add:

```
"require": {
        ...
        "torzer/laravel-blade-pack": "^1",
        ...
    },
```

Then run `composer update`.

### Configuring

In `config/app.php` file, in array `providers` :

```
    'providers' => [
        ...
        Torzer\Common\Blade\ServiceProvider::class,
        ...
    ]
```

## Directives

### dd

The `dd` function as a Blade directive.

```
@dd($var)
```