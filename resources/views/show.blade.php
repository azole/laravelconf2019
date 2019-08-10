<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Conf 2019 - {{ $question->id }}</title>
        <style>
            html {
                width: 100%;
            }
            body {
                text-align: center;
                width: 100%;
                background-color: rgb(35, 30, 51);
                font-size: 20px;
            }
            img {
                padding-bottom: 10px;
            }
            pre {
                line-height: 1.5rem;
                
            }
            pre > br {
                display: none;
            }
            .question {
                margin: 40px auto;
                width: 800px;
                border: 1px solid;
                border-color: rgba(240, 240, 240, 0.7);
                color: rgba(240, 240, 240, 0.7);
                padding: 14px 25px;
                text-align: center; 
                text-decoration: none;
            }
            .option {
                margin: 10px auto;
                width: 800px;
                border: 1px solid;
                border-color: rgba(240, 240, 240, 0.7);
                color: rgba(240, 240, 240, 0.7);
                padding: 14px 25px;
                text-align: center; 
                text-decoration: none;
                display: inline-block;
                height: 100%;
            }
            .option:hover {
                color: rgb(104, 227, 219);
                box-shadow: rgba(104, 227, 219, 0.5) 0px 2px 20px 0px;
                border-color: rgb(110, 180, 176);
            }

            .clicked {
                color: rgb(104, 227, 219);
                box-shadow: rgba(104, 227, 219, 0.5) 0px 2px 20px 0px;
                border-color: rgb(110, 180, 176);
            }
            .wrong {
                border-color: rgb(242, 140, 84);
                box-shadow: rgba(242, 140, 84, 0.5) 0px 2px 20px 0px;
                color: rgb(242, 140, 84);
            }
            .wrong.option:hover {
                border-color: rgb(242, 140, 84);
                box-shadow: rgba(242, 140, 84, 0.5) 0px 2px 20px 0px;
                color: rgb(242, 140, 84);
            }
            #correct, #wrong, #open {
                display: none;
                border-color: rgb(104, 227, 219);
                color: rgb(104, 227, 219);
            }

            #wrong {
                border-color: rgb(242, 140, 84);
                color: rgb(242, 140, 84);;
            }

        </style>
    </head>
    <body>
        <a href="/">
          <img src="https://laravelconf.tw/static/images/logo-conf-2019.svg" type="contain" alt="">
        </a>
        <div class="question">
            {!! $question->question !!}
        </div>
        
        @if($question->option1)
          
          @if($question->type == 'code')
            <pre data-option="A" class="option" style="text-align:left;">{!! nl2br($question->option1) !!}</pre>
          @else
          <div data-option="A" class="option">
          {!! nl2br($question->option1) !!}
          </div>
          @endif

          @if($question->type == 'code')
            <pre data-option="B" class="option" style="text-align:left;">{!! nl2br($question->option2) !!}</pre>
          @else
          <div data-option="B" class="option">
          {!! nl2br($question->option2) !!}
          </div>
          @endif

          @if($question->option3 && $question->type == 'code')
            <pre data-option="C" class="option" style="text-align:left;">{!! nl2br($question->option3) !!}</pre>
          @elseif($question->option3)
          <div data-option="C" class="option">
          {!! nl2br($question->option3) !!}
          </div>
          @endif

        @else
          <div data-option="open" class="option">開放性答題</div>
        @endif

        <div class="question" id="correct">
            恭喜你答對了！
            @if($question->comment)
            <br>{{ $question->comment }}
            @endif
        </div>

        <div class="question" id="wrong">
            答錯了，請再接再厲！
        </div>

        <div class="question" id="open">
            答案是：{{ $question->comment }}
            <br>你答對了嗎？
        </div>

        <div class="question" id="wrong">
            答錯了，請再接再厲！
        </div>

    <script src="/js/jquery.min.js"></script>
    <script>
        let played = false;
        let answer = "{{ $question->answer }}"
        $('.option').on('click', function() {
            if(played) {
                return;
            }

            played = true;
            let choice = $(this).data('option');

            if(choice == "open") {
              $("#open").show();
            } else if(answer.indexOf(choice) > -1) {
                // 答對了
                $(this).addClass('clicked');
                $("#correct").show();
            } else {
                $(this).addClass('wrong');
                $("#wrong").show();
            }
        });
    </script>
    </body>
</html>