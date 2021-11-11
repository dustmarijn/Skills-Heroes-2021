<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Score Uitslag') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">

                {{--      A table where the information and the calculated number is shown after its been made          --}}
                <table class="table table-striped table-hover table-style">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Uitslag</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Marijn</td>
                        <td>Boeve</td>
                        <td>8.22</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
