<?php

namespace Wame\LaravelNovaMenuSwitcher\Nova\Menu;

use Illuminate\Support\Collection;
use Inertia\Inertia;
use NormanHuth\NovaMenu\MenuCard;

class Switcher
{
    public static function make(
        array|Collection $options,
        string $sessionKey,
        ?string $selected = null,
    ): MenuCard
    {
        return MenuCard::make()

            ->view('menu-switcher::switcher', [
                'options' => $options,
                'sessionKey' => $sessionKey,
                'selected' => $selected,
            ]);
    }
}
