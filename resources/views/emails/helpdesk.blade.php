<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Desk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap"
        rel="stylesheet">
    <style>
        .title {
            position: relative;
            display: flex;
            text-align: center;
            padding: 5px;
            color: #fff;
            background: #00aeef;
            margin-bottom: 15px;
        }

        .content {
            padding: 20px 50px;
        }
    </style>
</head>

<body>
    <h4 class="title">Help Desk</h4>
    <div class="content">
        <p>Nome: {{ $data['name'] }}</p>
        <p>Contacto: {{ $data['contacto'] }}</p>
        <p>Email: {{ $data['email'] }}</p><br>
        @if ($data['mensage'])
            <label for="">Descrição</label><br>
            <p>{{ $data['mensage'] }}</p>
        @endif

    </div>
</body>

</body>

</html>
