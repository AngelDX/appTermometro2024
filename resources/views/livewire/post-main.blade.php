<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Plantel
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-4 mb-2">
            <x-input placeholder="Buscar registro" wire:model.live="search"/>
            <x-button wire:click="create()">Nuevo</x-button>
                @if($isOpen)
                    @include('livewire.manager-create')
                @endif
        </div>
        <!--Tabla lista de items   -->
        <div class="bg-white shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-indigo-500 text-white">
                <tr class="text-left text-xs font-bold  uppercase">
                  <td scope="col" class="px-6 py-3">ID</td>
                  <td scope="col" class="px-6 py-3">Titulo</td>
                  <td scope="col" class="px-6 py-3">Publicado</td>
                  <td scope="col" class="px-6 py-3">Categoria</td>
                  <td scope="col" class="px-6 py-3">Usuario</td>
                  <td scope="col" class="px-6 py-3">Iglesia</td>
                  <td scope="col" class="px-6 py-3 text-center">Opciones</td>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                @foreach($posts as $item)
                <tr class="text-sm font-medium text-gray-900">
                  <td class="px-6 py-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                      {{$item->id}}
                    </span>
                  </td>
                  <td class="px-6 py-4">{{$item->title}}</td>
                  <td class="px-6 py-4"><span class="px-3 py-1 rounded-lg font-bold {{($item->published)?'bg-cyan-500':'bg-red-500'}}">{{($item->published)?'Aceptado':'Rechazado'}}</span></td>
                  <td class="px-6 py-4">{{$item->category->name}}</td>
                  <td class="px-6 py-4">{{$item->user->name}}</td>
                  <td class="px-6 py-4">{{$item->church->name}}</td>
                  <td class="px-6 py-4 flex gap-1">
                    <button class="bg-cyan-800 w-8 h-8 rounded-full text-white text-xl hover:bg-cyan-500"><i class="fa-solid fa-file-pen"></i></button>
                    <button class="bg-red-800 w-8 h-8 rounded-full text-white text-xl hover:bg-red-500"><i class="fa-solid fa-trash-can"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        @if(!$posts->count())
            <p>No existe ningun registro conincidente</p>
        @endif
        @if($posts->hasPages())
        <div class="px-6 py-3">
            {{$posts->links()}}
        </div>
        @endif

        </div>
      </div>
</div>
