<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Score Opgave') }}
        </h2>
    </x-slot>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <form name="form" style="max-width: 50%;" id="form" method="post" action="{{url('store-form')}}">
                    @csrf
                    <div class="mt-2">
                        <h1>Naam</h1>
                        <div class="p-2">
                            <label for="firstname">Naam van Student</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Voornaam" aria-label="Voornaam"
                                           name="firstname" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Achternaam"
                                           aria-label="Achternaam"
                                           name="lastname" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1>Ja/Nee</h1>
                        <div class="p-2">
                            <label for="yes_no_points">Aantal te behalen punten</label>
                            <input type="number" class="form-control" placeholder="Punten"
                                   aria-label="Punten"
                                   name="yes_no_points" required>
                            <label for="yes_no_dropdown" class="mt-1">Dropdown</label>
                            <select class="form-select" aria-label="yes-no-dropdown" name="yes_no_dropdown" required>
                                <option selected>Ja of Nee?</option>
                                <option value="yes">Ja</option>
                                <option value="no">Nee</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1>Subjectief</h1>
                        <div class="p-2">
                            <label for="subjective_points">Aantal te behalen punten</label>
                            <input type="number" class="form-control" placeholder="Punten"
                                   aria-label="Punten"
                                   name="subjective_points" required>

                            <label for="subjective_jury_1" class="mt-1">Score Jurylid 1</label>
                            <input type="number" class="form-control" placeholder="Punten van Jurylid 1 (0-10)"
                                   aria-label="Punten"
                                   name="subjective_jury_1" max="10" min="0" required>

                            <label for="subjective_jury_2" class="mt-1">Score Jurylid 2</label>
                            <input type="number" class="form-control" placeholder="Punten van Jurylid 2 (0-10)"
                                   aria-label="Punten"
                                   name="subjective_jury_2" max="10" min="0" required>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1>Nominaal</h1>
                        <div class="p-2">
                            <label for="nominal_points">Aantal te behalen punten</label>
                            <input type="number" class="form-control" placeholder="Punten"
                                   aria-label="Punten"
                                   name="nominal_points" required>

                            <label for="nominal_needed" class="mt-1">Benodigde waarde</label>
                            <input type="text" class="form-control" placeholder="Benodigde waarde"
                                   aria-label="Benodigde waarde"
                                   name="nominal_needed" required>

                            <label for="nominal_deviation" class="mt-1">Toegestane afwijking</label>
                            <input type="text" class="form-control" placeholder="Toegestane afwijking"
                                   aria-label="Toegestane afwijking"
                                   name="nominal_deviation" required>

                            <label for="nominal_deviation_points" class="mt-1">Punten aftrek per afwijking van</label>
                            <input type="text" class="form-control" placeholder="Punten aftrek per afwijking"
                                   aria-label="Punten aftrek per afwijking"
                                   name="nominal_deviation_points" required>

                            <label for="nominal_deviation_points_number" class="mt-1">Aantal punten aftrek per afwijking</label>
                            <input type="text" class="form-control" placeholder="Aantal punten aftrek per afwijking"
                                   aria-label="Aantal punten aftrek per afwijking"
                                   name="nominal_deviation_points_number" required>
                        </div>
                    </div>



                    <button class="btn btn-succes" type="submit" style="background-color: limegreen">Opslaan</button>


                </form>

                <div class="container mt-4">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">
                            Laravel 8 - Add Blog Post Form Example
                        </div>
                        <div class="card-body">
                            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="description" class="form-control" required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
