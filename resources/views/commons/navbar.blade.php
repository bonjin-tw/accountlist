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
                {{-- ログインページへのリンク --}}
                <li class="nav-item"><a href="#" class="nav-link">ログインする</a></li>
                {{-- 会員登録ページへのリンク --}}
                <li>{!! link_to_route('signup.get','会員登録する',[],['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>