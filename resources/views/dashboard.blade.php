<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Техника') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <x-bladewind::table>
                    <x-slot name="header">
                        <th>Модель</th>
                        <th>Владелец</th>
                        <th>Тип</th>
                        <th>Статус</th>
                    </x-slot>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->brand->brand}} {{$car->brand->model}}</td>
                            <td>{{$car->name->name}}</td>
                            <td>{{$car->type->type}}</td>
                            <td>{{$car->status->status}}</td>
                        </tr>
                    @endforeach
                </x-bladewind::table>
            </div>
        </div>
    </div>
</x-app-layout>
