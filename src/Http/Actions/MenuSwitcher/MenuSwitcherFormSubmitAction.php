<?php

namespace Wame\LaravelNovaMenuSwitcher\Http\Actions\MenuSwitcher;

use Illuminate\Support\Facades\Session;

class MenuSwitcherFormSubmitAction
{
    public function handle(
        string $selected,
        string $sessionKey,
    ): void
    {
        Session::put($sessionKey, $selected);
    }
}
