@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ asset($user->picture ?? 'https://www.w3schools.com/bootstrap4/img_avatar1.png') }}"
                    alt="{{ $user->name }}" class="rounded-circle mb-2" style="max-width: 200px">

                    <h2>{{ $user->name }}</h2>
                    <a href="{{ route('user', ['username'=>$user->username]) }}"> {{ route('user', ['username'=>$user->username]) }} </a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Messages') }}</div>

                <div class="card-body">
                    @foreach ($messages as $message)
                        <div class="card @if(!$loop->last) mb-4 @endif">
                            <div class="card-body">
                                <p class="card-text">{{ $message->message }}</p>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $message->created_at->format('Y/m/d H:i') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
