<form dusk="menu-switcher-form" action="{{ route('menu-switcher.form-submit') }}" id="menu-switcher-form" method="POST" target="_self">
    @csrf
    <input type="hidden" id="switcher_value" name="switcher_value" value="{{ $sessionKey }}">
    <input type="hidden" id="session_key" name="session_key" value="{{ $sessionKey }}">
</form>
<select
    onchange="
        console.log(this.value);
        document.getElementById('switcher_value').value = this.value;
        document.getElementById('menu-switcher-form').submit();
    "
    id="menu-switcher-select"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
>
    <label for="menu-switcher"></label>
    @foreach($options as $id => $name)
        <option {{ $id === $selected ? 'selected' : null }} value="{{ $id }}">{{ $name }}</option>
    @endforeach
</select>
