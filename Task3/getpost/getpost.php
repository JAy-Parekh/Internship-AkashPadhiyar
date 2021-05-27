<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin:3px;
        }
    
    </style>
</head>

<body>
    <div>
        <form action="process.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="Age">Age:</label>
                <input type="number" name="age">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>

</html>