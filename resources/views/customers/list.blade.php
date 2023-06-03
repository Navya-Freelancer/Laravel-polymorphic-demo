<!DOCTYPE html>
<html>
<head>
    <title>Customers List</title>
</head>
<body>
    <h1><a href="{{ url('/') }}">Home</a></h1>
    <ul>
        @foreach ($customers as $customer)
            <li><a href="{{route('getCustomer', ['id'=> $customer['id']])}}">{{ $customer['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>