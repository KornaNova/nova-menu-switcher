<?php

namespace Wame\LaravelNovaMenuSwitcher\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class MenuSwitcherFormSubmitRequest extends FormRequest
{
    public function authorize(): bool
    {
        /** @var User $user */
        $user = auth()->user();

        return $user->can_use_switcher;
    }

    public function rules(): array
    {
        return [
            'menu-switcher' => 'required|string',
        ];
    }
}
