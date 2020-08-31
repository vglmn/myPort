@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Envoi d'une photo</div>
            <div class="panel-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger">{!! session('error') !!}</div>
                @endif
                {!! Form::open(['url' => 'photo', 'files' => true]) !!}
                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                    {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
                    <a href="http://127.0.0.1:8000/" class="btn btn-info pull-left">Retourner à l'acceuil</a>
            </div>
        </div>
    </div>
@endsection
