@extends('layouts.app')

{{--TODO Al crear un medico deben añadirsele las clinicas selecionadas.(attach)--}}

@section('content')
    <div class="text-center titulo">
        <h1>Añadir un nuevo médico</h1>
    </div>

    <form action="{{ route('storeMedico') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group  {{$errors->has('imagen') ? ' has-error' : ''}}">
            <label for="imagen">Imagen</label>
            <input class="form-control" type="url" id="imagen" name="imagen" value="{{ old('imagen')}}" >
        </div>
        @if($errors->has('imagen'))
            @foreach($errors->get('imagen') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group  {{$errors->has('nombre') ? ' has-error' : ''}}">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre" value="{{ old('nombre')}}" >
        </div>
        @if($errors->has('nombre'))
            @foreach($errors->get('nombre') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group  {{$errors->has('email') ? ' has-error' : ''}}">
            <label for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" value="{{ old('email')}}" >
        </div>
        @if($errors->has('email'))
            @foreach($errors->get('email') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group  {{$errors->has('especialidad') ? ' has-error' : ''}}">
            <label for="especialidad">Especialidad</label>
            <input class="form-control" type="text" id="especialidad" name="especialidad" value="{{ old('especialidad')}}" >
        </div>
        @if($errors->has('especialidad'))
            @foreach($errors->get('especialidad') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group  {{$errors->has('clinicas') ? ' has-error' : ''}}">
            <div class="btn-group">
                <button type="button" class="btn btn-primary clinicas">Clínicas</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split clinicas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    @foreach($clinicas as $clinica)
                        <li><a href="#" class="small" data-value="{{$clinica->id}}" tabIndex="-1"><input type="checkbox" value="{{$clinica->id}}" name="clinica[]"/>&nbsp;{{$clinica->nombre}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="form-group  {{$errors->has('num_colegiado') ? ' has-error' : ''}}">
            <label for="num_colegiado">Nº de colegiado</label>
            <input class="form-control" type="number" id="num_colegiado" name="num_colegiado" value="{{ old('num_colegiado')}}" >
        </div>
        @if($errors->has('num_colegiado'))
            @foreach($errors->get('num_colegiado') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group  {{$errors->has('curriculum') ? ' has-error' : ''}}">
            <label for="curriculum">Curriculum</label>
            <input class="form-control" type="text" id="curriculum" name="curriculum" value="{{ old('curriculum')}}" >
        </div>
        @if($errors->has('curriculum'))
            @foreach($errors->get('curriculum') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group">
            <button type="submit" class="btn btn-success">Crear</button>
        </div>
    </form>
    @push('scripts')
        <script src="{{ asset('js/dropdown.js') }}" defer></script>
    @endpush
@endsection