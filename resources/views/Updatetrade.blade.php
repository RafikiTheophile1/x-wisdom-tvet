<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade</title>
</head>
<body>
   <x-nav>
</x-nav>  <br> <center>
   <form action="{{route('updatetrade',  $edit->id) }}" method="POST">
      @method('PUT')
    @csrf

     @if(Session::has('success'))
        {{Session::get('success')}}
        @endif
           @if(Session::has('fail'))
        {{Session::get('fail')}}
        @endif


   <label for="">Trade name</label>
   <input type="text" name="name" value="{{$edit->Trade_name}}"><br><br>
   @error('name'){{$message}}@enderror <br>
   <label for="">Levels</label>
   <input type="text" name="level" value="{{$edit->Trade_level}}"><br><br>
    @error('name'){{$message}}@enderror <br>
    <label for="">Module name</label>
   <input type="text" name="module_name" value="{{$edit->Module_name}}"><br><br>
    @error('module_name'){{$message}}@enderror <br>
<button>Update trade</button>
</center>
   </form> 
</body>
</html>