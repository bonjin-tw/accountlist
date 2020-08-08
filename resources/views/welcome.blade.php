@extends('layouts.app')

@section('content')
    <div class="center">
        <div class="text-center">
            <h1>パスワード冷蔵庫</h1>
            <p>
                日頃、忘れてしまいがちなアカウントのIDとパスワードをまとめて管理できます。<br>
                会員登録してアカウントを追加するだけの簡単操作！
            </p>
            {{-- 会員登録ページへのリンク --}}
            {!! link_to_route('signup.get','会員登録する',[],['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection