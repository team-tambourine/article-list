<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/articleList.css" />
        <title>List</title>
    </head>
    <body>
        @include('header')
        <div class="container">
            <h2 class="pageTitle">記事一覧</h2>
            <div class="border"></div>

            @foreach ($articles as $article)
                <div class="listItemContainer">
                    <main class="listItemFlexBox">
                        <img class="listItemImage" src="" />

                        <div class="informationContainer">
                            <a href="/show/{{ $article->id }}">
                                <h4 class="listItemTitle">{{ $article->title }}</h4>
                                <p class="userName">{{ $article->user->name }}</p>
                            </a>
                        </div>
                    </main>
                    <div class="listItemBorder"></div>
                </div>
            @endforeach
            {{-- ↑  foreachで回す部分を少し変えました --}}

            <div class="pageSwitchContainer">
                <a href='' class="buttonLeft">
                    <button class="pageSwitchButton ">
                        <p><</p>
                    </button>
                </a>
                <p class="pageNumber">1/121</p>
                <a href='' class="buttonRight">
                    <button class="pageSwitchButton ">
                        <p>></p>
                    </button>
                </a>
            </div>
        </div>
    </body>
</html>
