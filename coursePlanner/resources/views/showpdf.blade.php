<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach($data as $data)
    <table border="2">
    <tr>
        <th>Name</th>
        <th>file</th>
    </tr>
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->file}}</td>
    </tr>
    <table>

    @endforeach
</body>
</html>