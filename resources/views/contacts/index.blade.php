<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact->name }} - {{ $contact->email }}</li>
        @endforeach
    </ul>

    <!-- Links de paginação -->
    {{ $contacts->links() }}
</body>
</html>