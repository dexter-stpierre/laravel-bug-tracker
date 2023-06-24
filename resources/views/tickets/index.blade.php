<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tickets.store') }}">
            @csrf
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" name="title" required />
                <x-input-error class="mt-4" :messages="$errors->get('title')" class="mt-2" />
            </div>


            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    name="description">{{ old('description') }}</textarea>
                <x-input-error class="mt-4" :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4" type="submit">
                {{ __('Submit') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
