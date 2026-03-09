<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Alle planeten</h1>
    
    @foreach($planeten as $key => $planet)
        <h2>
            <a href="/planets/{{ $key }}">{{ $planet['name'] }}</a>
        </h2>
        <p>{{ $planet['description'] }}</p>
    @endforeach

</body>
</html>
