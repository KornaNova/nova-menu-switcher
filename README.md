# Laravel Nova Menu Switcher

## Description

Creates input select that refreshes page and sets value to session.

![img.png](img.png)

![img_1.png](img_1.png)

## Installation 

```shell
composer require wamesk/laravel-nova-menu-switcher
```

## Usage

```php
Nova::mainMenu(function (Request $request) {
    return [
        ...
        Switcher::make([
            'value1' => 'option1',
            'value2' => 'option2',
            'value3' => 'option3',
        ], 'option', 'value2'),
        ...
    ];
});
```
