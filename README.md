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

The `dd` (dump and die) function as a Blade directive.

```
@dd($var)
```

### dump

The `var_dump` function as a Blade directive.

```
@dump($var)
```

### set

A Blade directive to set value to a PHP variable.

```
@set(5, $var)

// then you can keep using the var in the same Blade view
@if($var > 10)
   ...
@endif

```