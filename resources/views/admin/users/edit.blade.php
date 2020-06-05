@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action='{{ route('admin.users.update', $user)}}' method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">Edit User {{ $user->name }}</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="￼ use￼ user
                            ￼Updater
                            ￼Updateform-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id='name' type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="name"
                                        value="{{ $user->name }}" required autofocus>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                                @foreach ($roles as $role)
                                <div class="form-checkbox">
                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                        id="role-{{ $role->id }}" @if($user->hasRoles($role->name))
                                    checked
                                    @endif>
                                    <label for="role-{{ $role->id }}">{{ $role->name }}</label>
                                </div>
                                @endforeach
                                </ </div> <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary"
                                    action="window.history.go(-1)">Back</button>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    @endsection