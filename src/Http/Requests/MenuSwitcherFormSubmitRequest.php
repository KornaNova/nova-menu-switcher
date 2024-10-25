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

        $can_use_switcher = $user->can_use_switcher;

        return $can_use_switcher ?? true;
    }

    public function rules(): array
    {
        return [
            'switcher_value' => 'required|string',
            'session_key' => 'required|string',
        ];
    }
}
