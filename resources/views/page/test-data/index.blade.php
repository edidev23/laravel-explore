<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test data</title>
</head>

<body>
    <form action="{{ url('send-email') }}" method="post">
        @csrf 

        <button type="submit">send email</button>
    </form>

    <form action="{{ url('send-job') }}" method="post">
        @csrf 

        <button type="submit">send job</button>
    </form>
</body>

</html>
