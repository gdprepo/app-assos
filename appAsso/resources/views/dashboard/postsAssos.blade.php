@extends('layouts.dashboard')


@section('content')


<div class="container">

    <h1>Choisir une Association pour voir ses Posts</h1>



    <div class="responsive-table">
        <table class="table">
            <thead>


                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>hashtags</th>
                    <th>logo</th>
                    <th>Action(s)</th>

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
                    <td><img style="width: 100%;" src="{{ $assos->image != 'https://via.placeholder.com/250' ? asset('uploads/assos/'.$assos->logo) : 'https://via.placeholder.com/150'  }}" alt=""> </td>
                    <td>
                        <a href="{{ route('post.list', $assos->id) }}">
                        <div class="btn rounded-1 blue press">Selectionner</div>
                        
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection('content')