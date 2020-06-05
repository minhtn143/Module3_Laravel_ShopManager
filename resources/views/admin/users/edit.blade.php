@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User {{ $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('admin.users.update',$user) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        @foreach ($roles as $role)
                        <div class="form-checkbox">
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="role-{{ $role->id }}">
                            <label for="role-{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" action="windown.history.go(-1)">Back</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection