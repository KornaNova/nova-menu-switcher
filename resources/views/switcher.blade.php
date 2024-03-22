<script>
    console.log('hahahaha')
</script>

<form dusk="menu-switcher-form" action="{{ route('menu-switcher.form-submit') }}" id="menu-switcher-form" method="POST" target="_self">
    @csrf
    <label for="menu-switcher"></label>
    <select
        onchange="document.getElementById('menu-switcher-form').submit()"
        name="switcher_value"
        id="menu-switcher"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        @foreach($options as $id => $name)
            <option {{ $id === $selected ? 'selected' : null }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
    <input type="hidden" id="session_key" name="session_key" value="{{ $sessionKey }}">
</form>
