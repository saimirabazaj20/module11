<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="login">

<form class="form-signin" action="register.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>

    <label for="inputEmail" class="sr-only">Name</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required>

    <label for="inputPassword" class="sr-only">Surname</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Surname" name="surname" required>

    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>

    <label for="inputEmail" class="sr-only">Email</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Email" name="email" required>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
    
    
    <button class="btn btn-lg btn-primary bt-block" type="submit" name="submit">Sign In</button>

    <small>Alredy have an account? <a href="signup.php">Login</a></small>

</form>




</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

