@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Inscription à la lettre d'information</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'storeEmail']) !!}
                <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                    {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre email')) !!}
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
                <a href="http://127.0.0.1:8000/" class="btn btn-info pull-left">Retourner à l'acceuil</a>
            </div>
        </div>
    </div>
@endsection
