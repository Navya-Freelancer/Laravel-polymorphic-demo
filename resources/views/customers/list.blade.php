<!DOCTYPE html>
<html>
<head>
    <title>Customers List</title>
</head>
<body>
    <h1><a href="{{ url('/') }}">Home</a></h1>
    <form action="{{ route('customers') }}" method="GET">
        <input type="text" name="search"/>
        <button type="submit">Search</button>
    </form>

    @if(count($customers) > 0)
        <table>
            <thead>
                <tr>
                    <th> name</th>
                    <th> DOB  </th>
                    <th> mobile </th>
                    <th> adddress </th>
                    <th> Hobbies </th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td> {{$customer['name']}} </td>
                    <td> {{$customer['dob']}} </td>
                    <td> {{$customer['mobile']}} </td>
                    <td> {{$customer['address']}} </td>
                    <td>
                        @foreach ($customer['hobbies'] as $hobbie)
                            {{$hobbie['name']}},
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else 
    <div>
        <h2>No Customers found</h2>
    </div>
    @endif
</body>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
</html>