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
            table {
              border-collapse: collapse;
              text-align: center;
            }

            table, th, td {
              border: 1px solid black;
              padding: 4px  10px;
            }
            
        </style>
    </head>
    <body>
        賓果機號碼為 1-75:
        <ul>
            <li> 1-10 號給 L1 的題目，答對給獎品。</li>
            <li> 11-60 號給 L2 的題目，答對給獎品。</li>
            <li> 61-75 號給 L3 的題目，答對給獎品、答錯給乖乖當安慰獎。</li>
        </ul>
        <ul>
          <li>L1/L2/安慰獎: 144包乖乖</li>
          <li>其他: 紙膠帶 20 個、悠遊卡 6 個、杯墊 6 個、瓶子 3 個、馬克杯1</li>
        </ul>
        <table class="scrollable">
            <thead>
                <tr>
                    <th>題號</th>
                    <th>難度</th>
                    <th>開放時間</th>
                    <th>獎品</th>
                    <th>答對次數</th>
                    <th>答對次數</th>
                    <th>答對次數</th>
                    <th>題號</th>
                    <th>難度</th>
                    <th>開放時間</th>
                    <th>獎品</th>
                    <th>答對次數</th>
                    <th>答對次數</th>
                    <th>答對次數</th>
                </tr>
          </thead>
          <tbody>
            @foreach($questions as $question)
            @if($loop->index % 2 == 0)
            <tr>
            @endif  
              <td>{{ $question->id }}</td>
              <td>{{ $question->time }}</td>
              <td>{{ $question->level }}</td>
              <td>{{ $question->reward }}</td>
              <td></td>
              <td></td>
              <td></td>
            @if($loop->index % 2 == 1)
            </tr>
            @endif
            @endforeach  
          </tbody>
        </table>
    </body>
</html>