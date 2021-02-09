@extends('layouts.dashboard')


@section('content')


<div class="container">

    <h1>Creer un Post pour l'association {{ $assos_id }}</h1>

    <form method="post" action="{{ route('post.store', $assos_id) }}" enctype="multipart/form-data">
        @csrf

        <div class="grix xs1 sm2">
            <div class="form-field">
                <label for="name">Titre du post</label>
                <input name="title" type="text" id="name" class="form-control rounded-1" placeholder="Axentix" required />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="email">Type</label>
                <label class="txt-left hide-sm-up" for="email">Type</label>
                <select name="type" class="form-control rounded-1" id="select">
                    <option selected>Simple</option>
                    <option>Evenement</option>
                    <option>Don</option>
                </select>
            </div>
            <div class="form-field col-sm2">
                <label for="textarea">Description</label>
                <textarea name="description" id="textarea" class="form-control rounded-1" required></textarea>
            </div>

            <div class="form-file">
                <label for="image" class="btn primary rounded-1 shadow-1">Image</label>
                <input type="file" name="image" id="img" accept="image/png, image/jpeg" />
                <div class="form-file-path"></div>
            </div>
            <div class="form-field">
                <label for="name">Public</label>
                <select name="visible" class="form-control rounded-1" id="select">
                    <option selected>Public</option>
                    <option>Privé</option>
                </select>
            </div>

        </div>

        <div style="text-align:center; margin-top: 50px">
            <button style="width: 30%" type="submit" class="btn shadow-1 rounded-1 blue">Valider</button>
        </div>

    </form>


</div>

@endsection('content')