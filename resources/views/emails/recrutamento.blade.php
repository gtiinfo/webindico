<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recrutamento - Candidatura</title>
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
    <h1 class="title">Candidatura de Recrutamento</h1>

    <h2>Dados Pessoais</h2>
    <p><strong>Nome Próprio:</strong> {{ $data['name'] }}</p>
    <p><strong>Apelido:</strong> {{ $data['apelido'] }}</p>
    <p><strong>Sexo:</strong> {{ $data['sexo'] }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $data['dataNascimento'] }}</p>
    <p><strong>Nacionalidade:</strong> {{ $data['nacionalidade'] }}</p>

    <h2>Contactos</h2>
    <p><strong>Contacto Telefónico:</strong> {{ $data['contacto'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>

    <h2>Formação Académica</h2>
    <p><strong>Nível Acadêmico:</strong> {{ $data['nivelAcademico'] }}</p>
    <p><strong>Curso:</strong> {{ $data['curso'] }}</p>
    <p><strong>Instituição de Ensino:</strong> {{ $data['instituicaoEnsino'] }}</p>

    <h2>Candidatura</h2>
    <p><strong>Vaga:</strong> {{ $data['vaga'] }}</p>

    <h2>Línguas</h2>
    <p><strong>Português:</strong> {{ $data['linguaPt'] }}</p>
    <p><strong>Inglês:</strong> {{ $data['linguaIng'] }}</p>
    <p><strong>Línguas Locais:</strong> {{ $data['liguaLocais'] }}</p>
    <p><strong>Outras Línguas:</strong> {{ $data['outrasLinguas'] }}</p>

    <h2>Informática</h2>
    <p><strong>Word:</strong> {{ $data['word'] }}</p>
    <p><strong>Excel:</strong> {{ $data['excel'] }}</p>
    <p><strong>Power Point:</strong> {{ $data['powerPoint'] }}</p>
    <p><strong>Access:</strong> {{ $data['access'] }}</p>

    <h2>Experiência Profissional</h2>
    <p><strong>Tem Experiência Profissional?</strong> {{ $data['experiencia'] }}</p>

    <h2>Áreas de Interesses</h2>
    <p><strong>Área:</strong> {{ $data['area'] }}</p>

    <h2>Motivação</h2>
    <p><strong>Motivação para a candidatura:</strong></p>
    <p>{{ $data['motivacao'] }}</p>
</body>
</html>
