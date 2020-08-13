@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- アカウント一覧タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">アカウント一覧</a></li>
            </ul>
        </div>
    </div>
@endsection