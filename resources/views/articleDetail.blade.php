<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>articleDetail</title>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/articleDetail.css" />
    </head>
    <body>
        @include('header')
        <div class="container">
            <div class="userNameContainer">
                <img class="listItemImage" src="" />
                <div class="userName">userName</div>
                <div class="updatedTime">2020年10月22日に更新</div>
            </div>
            <main>
                <h2 class="listItemTitle">title</h2>
                <div class="textBody">
                    text text text text text text text text text text text text
                    text text text text text text text text text text text text
                    text text text text text text text text text text text text
                    text text text text text text text text text text text text
                    text
                </div>
            </main>
            <div class="border"></div>
            <div class="userNameContainer">
                <img class="listItemImage" src="" />
                <p class="userName">userName</p>
                <p class="updatedTime">2020年10月22日に更新</p>
            </div>
        </div>
    </body>
</html>
