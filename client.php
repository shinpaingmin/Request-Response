<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client site</title>
    <style>
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div>
            <h1>Client site</h1>

            <form action="server.php" method="POST" enctype="multipart/form-data">
            <label for="fName">First Name: </label>
            <input type="text" name="fName">
            <br><br><br>

            <label for="lName">Last Name: </label>
            <input type="text" name="lName">
            <br><br><br>

            <select name="Gender" id="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <br><br><br>

            <input type="file" name="myImage">
            <br><br><br>

            <button type="submit">Click to Send</button>
        </form>
        </div>
        
    </div>
</body>
</html>