<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h3 class="mb-3 text-capitalize">{{ $type }} Interview Questions</h3>

@if(count($questions))
    <ul class="list-group">
        @foreach($questions as $question)
            <li class="list-group-item">{{ $question }}</li>
        @endforeach
    </ul>
@else
    <p>No questions available.</p>
@endif

</body>
</html>
