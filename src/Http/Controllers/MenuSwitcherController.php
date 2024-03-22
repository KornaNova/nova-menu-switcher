<?php

namespace Wame\LaravelNovaMenuSwitcher\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Wame\LaravelNovaMenuSwitcher\Http\Actions\MenuSwitcher\MenuSwitcherFormSubmitAction;
use Wame\LaravelNovaMenuSwitcher\Http\Requests\MenuSwitcherFormSubmitRequest;

class MenuSwitcherController extends Controller
{
    public function formSubmit(MenuSwitcherFormSubmitRequest $request, MenuSwitcherFormSubmitAction $action): RedirectResponse
    {
        $action->handle(
            selected: $request->get('switcher_value'),
            sessionKey: $request->get('session_key')
        );

        return redirect()->back();
    }
}
