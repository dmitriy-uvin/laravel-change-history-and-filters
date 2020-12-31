<html>
<head></head>
<body>
    @foreach($documents as $document)
        <ul>
            <li>{{ $document->name }}</li>
            <li>{{ $document->description }}</li>
            <li>{{ $document->length }}</li>
            <li>{{ $document->type }}</li>
        </ul>
    @endforeach
</body>
</html>
