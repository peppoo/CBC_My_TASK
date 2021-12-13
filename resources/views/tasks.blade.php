<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTASK</title>
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div id="wrap" class="wrap">

        <div class="task">
            <!-- タスク作成エリア -->
            <h2>新しいタスクを作成</h2>
            @include('layout.regists')
        </div>

        <!-- タスク一覧表示エリア -->
        <div class="task__area">
            <h2>私のタスク一覧</h2>
            <ul class="task__area-list">
                @include('layout.myTasks')
            </ul>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>