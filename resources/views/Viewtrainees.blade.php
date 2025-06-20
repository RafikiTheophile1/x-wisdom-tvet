<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view trainees</title>
</head>
<body>
      <x-nav>
</x-nav> <br><br><center>
    <table  border="2" cellpadding="10" cellspacing="10">
   <tr>
      <th>Id</th>
    <th>Tainee Firstname</th>
    <th>Tainee Lastname</th>
    <th colspan='2'>Action</th>
   </tr>
@foreach($view as $viewtrainee)
   <tr>
    <td>{{$viewtrainee->id}}</td>
    <td>{{$viewtrainee->Traineefname}}</td>
    <td>{{$viewtrainee->Traineelname}}</td>
    <td><a href="{{route('update2',[ 'id' =>$viewtrainee->id]) }}">update</a></td>
    <td>
        <form action="{{route('delete2',$viewtrainee->id)}}" method="post">
          
              @method('DELETE')
             @csrf
            <button>Delete</button>
          
        </form>
    </td>
   </tr>
    @endforeach

    </table>
</center>
    
</body>
</html>
