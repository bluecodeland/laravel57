@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <img src="uploads/avatar/{{ $user->avatar }}" alt="{{ $user->name }}">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! {{$credit}}
                    {{ $user->mobile }}                </div>
                    <div class="col-12">{{ $user->mobile }} </div>
                    <div>
                        
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection
