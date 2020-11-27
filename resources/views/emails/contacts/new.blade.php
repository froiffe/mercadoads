<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <p><strong>Página:</strong> {{ app()->getLocale() }}</p>
    <p><strong>Nombre:</strong> {{ $contact->name }}</p>
    <p><strong>Mail:</strong> {{ $contact->email }}</p>
    <p><strong>Empresa:</strong> {{ $contact->business }}</p>
    <p><strong>Inversión:</strong> {{ $contact->investment }}</p>
    <p><strong>País:</strong> {{ $contact->name }}</p>
    <p><strong>Mensaje:</strong> {{ $contact->message }}</p>
    <p><strong>Fecha y hora:</strong> {{ date('d-m-Y H:i', strtotime($contact->created_at)) }}</p>
</body>
</html>
