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

                    <form action="{{ route('message') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="form-group">
                            <label for="example">be postive</label>
                            <textarea id="message" name="message" class="form-control" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg mb-2">Send</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
