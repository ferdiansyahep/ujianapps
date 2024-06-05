@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Mata pelajaran') }}</h1>
                <a href="{{ route('admin.categories.index') }}"
                    class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Nama mata pelajaran') }}</label>
                    <input type="text" class="form-control" id="name" placeholder="{{ __('nama mata pelajaran') }}"
                        name="name" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                    <label for="name">{{ __('kelas') }}</label>
                    <input type="text" class="form-control" id="name" placeholder="{{ __('kelas') }}" name="name"
                        value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                    <label for="name">{{ __('Guru pengampu') }}</label>
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_kelas">{{ __('Kode kelas') }}</label>
                    <input type="text" class="form-control" id="kode_kelas" placeholder="{{ __('kode kelas') }}"
                        name="kode_kelas" value="{{ old('kode_kelas') }}" />
                </div>
                <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
            </form>
        </div>
    </div>


    <!-- Content Row -->

</div>
@endsection
