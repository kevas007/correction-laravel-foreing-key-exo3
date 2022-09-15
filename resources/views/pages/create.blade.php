@extends('layouts.index')

@section("content")
<form action="/store" method="post">
    @csrf
<input type="text" name='marque'>
<input type="text" name='annee'>
<select name="couleur_id" id="">
    @foreach ( $couleurs as $couleur )
    <option value="{{ $couleur->id }}">{{ $couleur->couleur }}</option>
    @endforeach
</select>
<input type="submit" value="addd">
</form>

@endsection
