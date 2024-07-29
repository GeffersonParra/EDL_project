<div>
    <x-dropdown>
        <x-slot name="trigger">
            <button>
                <div>{{ Auth::user()->name }}</div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Mi perfil') }}
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
            

    

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Cerrar sesión') }}
        </x-dropdown-link>
    </form>
</div>