@extends('layouts.dashboard')


@section('content')


<div class="container">

    <h1>Les Posts de l'association {{ $association->title }}</h1>



    <div class="responsive-table">
        <table class="table">
            <thead>
                <a href="{{ route('post.add', $association->id) }}">
                    <div style="float: right;" class="btn rounded-1 blue press">Creer</div>
                </a>

                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>type</th>
                    <th>image</th>
                    <th>public</th>
                    <th>Action(s)</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        {{ $post->type }}
                    </td>

                    <td><img style="width: 100%;" src="{{ $post->image != 'https://via.placeholder.com/150' ? asset('uploads/assos/'.$post->image) : 'https://via.placeholder.com/150'  }}" alt=""> </td>
                    <td>
                        @if($post->type = true)
                        true
                        @else
                        false
                        @endif
                    </td>
                    <td>
                        <div class="btn rounded-1 blue press">Modifier</div>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('post.delete', $post->id) }}">
                            @csrf
                            <button type="submit" class="btn rounded-1 blue press">Supprimer</button>
                        </form>
                    </td>
                    <td>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection('content')