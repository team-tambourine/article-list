<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CreateNewArticle</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        />
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/CreateNewArticle.css" />
    </head>
    <body>
        @include('header')
        <div class="container">
            <h2 class="pageTitle">記事タイトル</h2>
            <!-- <div class="border"></div> -->

            <form class="form">
                <input type="text" class="title" />
                <textarea
                    rows="25"
                    type="text"
                    placeholder="プログラミングの知識を共有しよう"
                    class="textarea"
                ></textarea>
                <input type="submit" value="投稿する" class="submitButton" />
            </form>
        </div>
    </body>
</html>
