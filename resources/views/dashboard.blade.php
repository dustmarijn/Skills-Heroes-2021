<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Score Opgave') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <form style="max-width: 50%;">
                    <div class="mt-2">
                        <h1>Naam</h1>
                        <div class="p-2">
                            <label for="Voornaam">Naam van Student</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Voornaam" aria-label="Voornaam"
                                           id="lastname" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Achternaam"
                                           aria-label="Achternaam"
                                           id="lastname" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1>Ja/Nee</h1>
                        <div class="p-2">
                            <label for="yes-no-points">Aantal te behalen punten</label>
                            <input type="number" class="form-control" placeholder="Punten"
                                   aria-label="Punten"
                                   id="yes-no-points" required>
                            <label for="yes-no-dropdown" class="mt-1">Dropdown</label>
                            <select class="form-select" aria-label="yes-no-dropdown" id="yes-no-dropdown" required>
                                <option selected>Ja of Nee?</option>
                                <option value="yes">Ja</option>
                                <option value="no">Nee</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1>Subjectief</h1>
                        <div class="p-2">
                            <label for="subjective-points">Aantal te behalen punten</label>
                            <input type="number" class="form-control" placeholder="Punten"
                                   aria-label="Punten"
                                   id="subjective-points" required>

                            <label for="subjective-jury-1" class="mt-1">Score Jurylid 1</label>
                            <input type="number" class="form-control" placeholder="Punten van Jurylid 1 (0-10)"
                                   aria-label="Punten"
                                   id="subjective-jury-1" max="10" min="0" required>

                            <label for="subjective-jury-2" class="mt-1">Score Jurylid 2</label>
                            <input type="number" class="form-control" placeholder="Punten van Jurylid 2 (0-10)"
                                   aria-label="Punten"
                                   id="subjective-jury-2" max="10" min="0" required>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1>Nominaal</h1>
                        <div class="p-2">
                            <label for="Nominal-points">Aantal te behalen punten</label>
                            <input type="number" class="form-control" placeholder="Punten"
                                   aria-label="Punten"
                                   id="Nominal-points" required>

                            <label for="Nominal-needed" class="mt-1">Benodigde waarde</label>
                            <input type="text" class="form-control" placeholder="Benodigde waarde"
                                   aria-label="Benodigde waarde"
                                   id="Nominal-needed" required>

                            <label for="Nominal-deviation" class="mt-1">Toegestane afwijking</label>
                            <input type="text" class="form-control" placeholder="Toegestane afwijking"
                                   aria-label="Toegestane afwijking"
                                   id="Nominal-deviation" required>

                            <label for="Nominal-deviation-points" class="mt-1">Punten aftrek per afwijking van</label>
                            <input type="text" class="form-control" placeholder="Punten aftrek per afwijking"
                                   aria-label="Punten aftrek per afwijking"
                                   id="Nominal-deviation-points" required>

                            <label for="Nominal-deviation-points" class="mt-1">Aantal punten aftrek per afwijking</label>
                            <input type="text" class="form-control" placeholder="Aantal punten aftrek per afwijking"
                                   aria-label="Aantal punten aftrek per afwijking"
                                   id="Nominal-deviation-points" required>
                        </div>
                    </div>



                    <button class="btn btn-succes" type="submit" style="background-color: limegreen">Opslaan</button>


                </form>
            </div>
        </div>
    </div>
</x-app-layout>
