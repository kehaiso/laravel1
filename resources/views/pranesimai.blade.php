@extends('layouts.app')
@section('content')
<div class="container">
    <!-- Skirta sistemos pranešimams -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div><br />
    @endif
    <!-- Pranešimų išvedimo dalis -->
    <div class="row">
        <div class="col-md-6">
            <h1>Pranešimų sąrašas</h1>
            <!-- Pranešimų sąrašas -->
            @foreach($pranesimais as $pranesimas)
            <div class="card">
            <div class="card-header card-primary">
        {{$pranesimas->pavadinimas}}
        @if (Auth::user()->id == $pranesimas->uid)
            (<b>{{$pranesimas->name}}</b>)
        @else
            ({{$pranesimas->name}})
        @endif
    </div>
                <div class="card-body">
                    {{$pranesimas->tekstas}}<br>
                    <small>{{$pranesimas->created_at}}</small>
                </div>
            </div>      
            @endforeach
        </div>
        <div class="col-md-6">
            <!-- Forma -->
            <div class="card">
                <div class="card-header">Pridėti pranešimą</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pranesimai.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="pavadinimas" class="col-lg-4 col-form-label">Pavadinimas</label>
                            <div class="col-lg-8">
                                <input id="pavadinimas" type="text" class="form-control{{ $errors->has('pranesimai_pavadinimas') ? ' is-invalid' : '' }}" name="pranesimai_pavadinimas" value="{{ old('pranesimai_pavadinimas') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tekstas" class="col-lg-4 col-form-label">Tekstas</label>
                            <div class="col-lg-8">
                                <textarea id="tekstas" class="form-control{{ $errors->has('pranesimai_tekstas') ? ' is-invalid' : '' }}" name="pranesimai_tekstas" >{{ old('pranesimai_tekstas') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col text-right">
                                <input type="submit" class="btn btn-primary" value="Skelbti">
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection