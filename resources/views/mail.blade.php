<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div>
    @if(count($errors)>0)
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
    </div>
    @endif

    @if($message=Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button><strong>{{$amount}}</strong>
        </div>
    @endif
    <div>
    <form method="POST" action="{{url('/sende')}}">
        {{csrf_field()}}
        <div>
        
        <label>Amount</label>
        <input type="text" name="amount">
        <label>Email</label>
        <input type="text" name="email">
        <input type="submit" name="send" value="send" class="btn btn-info">
        </div>
    </form>
    </div>
    </body>
</html>