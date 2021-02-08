@extends('layouts.dashboard')


@section('content')


<div class="container">

    <h1>List des assosiations USER</h1>



    <div class="responsive-table">
        <table class="table">
            <thead>
                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>hashtags</th>
                    <th>logo</th>
                    <th>Action(s)</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($associations as $assos)
                <tr>
                    <td>{{ $assos->title }}</td>
                    <td>{{ $assos->description }}</td>
                    <td>
                        @if ($assos->hashtags != "[]")
                        {{ $assos->hashtags }}
                        @else
                        null
                        @endif
                    </td>
                    <td><img src="{{ $assos->logo }}" alt=""> </td>
                    <td>
                        <div class="btn rounded-1 blue press">Modifier</div>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('assos.delete', $assos->id) }}">
                        @csrf
                        <button type="submit" class="btn rounded-1 blue press">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection('content')