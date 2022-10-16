<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="{{url('uploadPdf')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Course Name">
        <input type="file" name="file">
        <input type="submit">
    </form>
</body>
</html>