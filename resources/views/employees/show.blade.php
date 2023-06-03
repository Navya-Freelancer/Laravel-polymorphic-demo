<!DOCTYPE html>
<html>
<head>
    <title>Employee Hobbies</title>
</head>
<body>
  
{{$employee['name']}} - Hobbies
@if(count($employee['hobbies']) > 0)         
    <ul>
        @foreach ($employee['hobbies'] as $hobbie)
            <li>{{$hobbie['name']}}</li>
        @endforeach
    </ul>
@else
    <h2>No Hobbies Found</h2>        
@endif


</body>
</html>