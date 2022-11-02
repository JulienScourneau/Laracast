<x-layout>
    <section class="px-6 py6">
        <main class="max-w-lg mx-auto mt-10">

            <x-panel>
                <h1 class="text-center font-bold text-xl">Log in</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.submit-button>Log in</x-form.submit-button>

                </form>
            </x-panel>

        </main>
    </section>
</x-layout>
