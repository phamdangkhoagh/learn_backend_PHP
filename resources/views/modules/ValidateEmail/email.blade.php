<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Email</title>
</head>
<body>
<div class="main-content">
    <h1>Validate Email:</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" name="email">
        <button type="submit">Check</button>
    </form>
    <p>{{ $message }}</p>
</div>
</body>
</html>