<x-dialog-modal wire:model="isOpen">
    <x-slot name="title">
    <h3>Registro Noticia</h3>
    </x-slot>
    <x-slot name="content">
    <div class="flex justify-between mx-2 mb-6">
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Titulo de la noticia" class="font-bold"/>
            <x-input wire:model="form.title" type="text" class="w-full"/>
            <x-input-error for="form.title"/>
        </div>
    </div>
    {{-- <div class="flex justify-between mx-2 mb-6">
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Slug de la noticia" class="font-bold"/>
            <x-input wire:model="form.slug" type="text" class="w-full"/>
            <x-input-error for="form.slug"/>
        </div>
    </div> --}}
    <div class="flex justify-between mx-2 mb-6">
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Cuerpo de la noticia" class="font-bold"/>
            <textarea wire:model="form.body" rows="5" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"></textarea>
            <x-input-error for="form.body"/>
        </div>
    </div>
    <div class="flex justify-between mx-2 mb-6 gap-1">
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Categoria" class="font-bold"/>
            <select wire:model="form.category_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                <option>Seleccione una opción</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <x-input-error for="form.category_id"/>
        </div>
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Iglesia" class="font-bold"/>
            <select wire:model="form.church_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                <option>Seleccione una opción</option>
                @foreach ($churchs as $church)
                <option value="{{$church->id}}">{{$church->name}}</option>
                @endforeach
            </select>
            <x-input-error for="form.church_id"/>
        </div>
    </div>
    <div class="flex justify-between mx-2 mb-6">
        <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-checkbox wire:model="form.published"/> ¿Noticia se publicará?
            <x-input-error for="form.published"/>
        </div>
    </div>
    </x-slot>
        <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
            Registrar
        </x-button>
        <!-- <span wire:loading wire:target="store">Cargando...</span> -->
    </x-slot>
</x-dialog-modal>
