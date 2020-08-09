<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">パスワード冷蔵庫</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    {{-- アカウント一覧ページへのリンク --}}
                    <li class="nav-item"><a href="#" class="nav-link">アカウント一覧</a></li>
                    {{-- ログアウトへのリンク --}}
                    <li>{!! link_to_route('logout.get', 'ログアウト',[],['class' => 'nav-link']) !!}</li>
                @else
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login','ログインする',[],['class' => 'nav-link']) !!}</li>
                    {{-- 会員登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get','会員登録する',[],['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>