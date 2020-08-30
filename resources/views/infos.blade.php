@extends('template')

@section('titre')
    Form
@endsection


@section('contenu')
    {!! Form::open(['url' => 'users']) !!}
    {!! Form::label('nom', 'Entrez votre nom : ') !!}
    {!! Form::text('nom') !!}
    {!! Form::label('email', 'Entrez votre e-mail : ') !!}
    {!! Form::text('email') !!}
    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection
