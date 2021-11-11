<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum Chamdana 05211640000152</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>REGISTRATION FORM</h2>
    <form action="https://www.bukalapak.com">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" pattern="[A-Za-z]{0,}" title="Enter alphabet only" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" pattern=".{8,16}" title="Enter 8-16 character" required>
        </div>
        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" placeholder="Enter telephone" pattern="[0-9]{7,}" title="Enter 7 digit or more" name="telephone" required>
        </div>
        <div class="form-group">
            <label for="course">Select your course:</label>
            <select id="course" name="course" required>
                <option selected disabled></option>
                <option value="BTECH">BTECH</option>
                <option value="BBA">BBA</option>
                <option value="BCA">BCA</option>
                <option value="B.COM">B.COM</option>
                <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
            </select>
        </div>
        <div class="form-group">
            <label for="zipcode">Zip Code:</label>
            <input type="text" class="form-control" id="zipcode" placeholder="Enter zipcode" pattern="[0-9]{6}" title="Enter 6 digit" name="zipcode" required>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    </div>
</body>

</html>
