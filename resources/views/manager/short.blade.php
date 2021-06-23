<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コンテンツ要約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $title }}</h1>
        <div class='short_content'>
            <div class="content__post">
                <h3>短文要約</h3>
                <p>
                    <?php
                    if (empty($short)){
                        echo '（´・人・｀）このコンテンツの短文要約はまだ空です。（´・人・｀）';
                    } else{
                        echo $short;
                    }
                    ?>
                </p> 
            </div>
        </div>
        <div class='back'>[<a href='/initials/{{$id_initial}}'>戻る</a>]</div>
    </body>
</html>