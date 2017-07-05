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

### csrf

A directive to remove all the csrf from the layout.

```php
@csrf()
```

Access with Javascript as `window.Laravel.csrfToken`.

If you need to change the namespace to something different than `window.Laravel`.

```php
@csrf('Torzer')
```
Would set it in

```js
window.Torzer.csrfToken
```

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

### explode

The explode function as a Blade directive.

```
@explode(',', $string)
```

### implode

The implode function as a Blade directive.

```
@implode(',', $array)
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

### setJs

A Blade directive to set a PHP Laravel value accessible as a JS variable.

```
@js(token,$token)
```

Then you can access these data from window object in javascript

```
window.token

```