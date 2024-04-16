

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $errors=[];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {$errors["email"]="email non valida";}


    if (strpos($password, "@" || "#") !==false)
    {$errors["password"]="La password non puo contenere i caratteri speciali ex:@, #";}
   

    if ($errors == []) {
        header('location:/U4-W1-D2/success.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
</style>

</head>
<body>

<div class="container mt-5 text-center ">
    <form action="" method="post" novalidate >
        <H1 class="bg-primary">LOG IN</H1>
      <div class="mb-3">
      <div class="mb-3">
        <label for="exampleInputUsername" class="form-label"><h4>Your username</h4></label>
        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
        <label for="exampleInputEmail1"  class="form-label mt-3"><h4>Email address</h4></label>
        <input type="email" name="email" 
        class="form-control <?= isset ($errors['email']) ? 'is-invalid' : ""  ?> " id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="error"><?= $errors["email"] ?? ""  ?></div>
       
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><h4>Password</h4></label>
        <input type="password" name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1">
        <div class="error"><?= $errors["password"] ?? ""  ?></div>
        <div id="emailHelp" class="form-text">We'll never share your Password with anyone else.</div>
      </div>
    
    
      <button  class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>