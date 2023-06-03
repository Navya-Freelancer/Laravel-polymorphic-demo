<!DOCTYPE html>
<html>
<head>
    <title>Employees List</title>
</head>
<body>
    <h1><a href="{{ url('/') }}">Home</a></h1>
    <ul>
        @foreach ($employees as $employee)
            <li><a href="{{route('getEmployee', ['id'=> $employee['id']])}}">{{ $employee['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>