<!DOCTYPE html>
<html>
<head>
    <title>Customer Hobbies</title>
</head>
<body>
  
{{$customer['name']}} - Hobbies
@if(count($customer['hobbies']) > 0)         
    <ul>
        @foreach ($customer['hobbies'] as $hobbie)
            <li>{{$hobbie['name']}}</li>
        @endforeach
    </ul>
@else
    <h2>No Hobbies Found</h2>        
@endif


</body>
</html>