@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <div class="text-center">
            <h1>アカウント一覧</h1>
            <p>ようこそ、{{ Auth::user()->name }}さん</p>
            <p>
                {{-- アカウント追加ページへのリンク --}}
                {!! link_to_route('accounts.create','アカウント追加',[],['class' => 'btn btn-primary']) !!}
            </p>
            {{-- アカウント一覧 --}}
            @include('accounts.accounts')
        </div>
    @else
        <div class="center">
            <div class="text-center">
                <h1>パスワード冷蔵庫</h1>
                <p>
                    日頃、忘れてしまいがちなアカウントのIDとパスワードをまとめて管理できます。<br>
                    会員登録してアカウントを追加するだけの簡単操作！
                </p>
                {{-- ログインページへのリンク --}}
                {!! link_to_route('login','ログインする',[],['class' => 'btn btn-lg btn-primary']) !!}
                {{-- 会員登録ページへのリンク --}}
                {!! link_to_route('signup.get','会員登録する',[],['class' => 'btn btn-lg btn-primary']) !!}
                
                <p>
                    {{-- パスワードを忘れた方へページへのリンク --}}
                    {!! link_to_route('password.request','パスワードを忘れた方へ') !!}
                </p>
            </div>
        </div>
    @endif
@endsection