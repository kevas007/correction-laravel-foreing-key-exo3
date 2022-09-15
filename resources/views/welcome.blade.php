@extends('layouts.index')

@section("content")
<a href="/create">Add</a>
@foreach ($voitures as$voiture )
    <ul>
        <li>
            {{ $voiture->marque }}
        </li>
        <li>
            {{ $voiture->annee }}
        </li>
        <li>
            {{ $voiture->couleur->couleur }}
        </li>
    </ul>
@endforeach
<hr>
@foreach ($couleurs as $couleur )
    <ul>
        <li>
            {{ $couleur->voiture->marque }}
        </li>
        <li>
            {{ $couleur->voiture->annee }}
        </li>
        <li>
            {{ $couleur->couleur }}
        </li>
    </ul>
@endforeach

@endsection
