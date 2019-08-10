<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Conf 2019</title>
        <style>
            html {
                width: 100%;
            }
            body {
                text-align: center;
                width: 100%;
                background-color: rgb(35, 30, 51);
            }
            img {
                padding-bottom: 10px;
            }
            table {
                width: 60%;
                margin-left: auto;
                margin-right: auto;
            }
            a:link, a:visited {
                width: 100px;
                border: 1px solid;
                border-color: rgba(240, 240, 240, 0.7);
                color: rgba(240, 240, 240, 0.7);
                padding: 14px 25px;
                text-align: center; 
                text-decoration: none;
                display: inline-block;
            }

            a:hover, a:active {
                color: rgb(104, 227, 219);
                box-shadow: rgba(104, 227, 219, 0.5) 0px 2px 20px 0px;
                border-color: rgb(110, 180, 176);
            }
        </style>
    </head>
    <body>
        <img src="https://laravelconf.tw/static/images/logo-conf-2019.svg" type="contain" alt="">
        <table>
          @foreach($questions as $question)
          @if($loop->index % 5 == 0)
          <tr>
          @endif
            <td><a href="{{ route('ques.show', $question->id) }}">{{ $question->level }}: {{ $question->id }}</a></td>
          @if($loop->index % 5 == 4)
          </tr>
          @endif
          @endforeach
        </table>
    </body>
</html>