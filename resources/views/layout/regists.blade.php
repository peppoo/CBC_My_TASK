<form action="{{url('register')}}" method="POST">
    {{csrf_field()}}
    <input class="task" type="text" name="task" maxlength="30" placeholder="タスクを入力">
    <input id="addition_btn" type="submit" value="追加">
</form>