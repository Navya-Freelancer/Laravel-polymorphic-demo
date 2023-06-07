<!DOCTYPE html>
<html>
<head>
    <title>Employees List</title>
</head>
<body>
    <h1><a href="{{ url('/') }}">Home</a></h1>

    <form action="{{ route('employees') }}" method="GET">
        <input type="text" name="search"/>
        <button type="submit">Search</button>
    </form>

    @if(count($employees) > 0)
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
                @foreach($employees as $employee)
                <tr>
                    <td> {{$employee['name']}} </td>
                    <td> {{$employee['dob']}} </td>
                    <td> {{$employee['mobile']}} </td>
                    <td> {{$employee['address']}} </td>
                    <td>
                        @foreach ($employee['hobbies'] as $hobbie)
                            {{$hobbie['name']}},
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else 
    <div>
        <h2>No Employees found</h2>
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