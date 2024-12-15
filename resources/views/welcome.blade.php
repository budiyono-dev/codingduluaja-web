@extends('base_view')

@section('main')
    <main style="background-color: #1B1B1B">
        <form action="{{route('auth.logout.action')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm">logout</button>
        </form>
    </main>
@endsection
