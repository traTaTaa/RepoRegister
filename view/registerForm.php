
<title>Регистрация</title>
<div class="container">
<form action="register_user" method="post">
   <?php echo($data); ?>
   <h4>Registration</h4>
    <?php if(isset($_SESSION["done"])){ ?><div class="alert alert-success" role="alert"> <?php echo $_SESSION["done"]; ?> </div><?php }?>
    <?php if(isset($_SESSION["err"])){ ?><div class="alert alert-danger" role="alert"> <?php echo $_SESSION["err"]; ?> </div><?php }
    unset($_SESSION['done']);
    unset($_SESSION['err']); ?>
    <input type="text" name="login" class="form-control" placeholder="login" required>
    </br>
    <input type="text" name="pass" class="form-control" placeholder="pass" required>
    </br>
    <input type="text" name="email" class="form-control" placeholder="email" required>
    </br>
    <input type="text" name="city" class="form-control" placeholder="city" required>
</br>
<!--    <label>Login:</label><input type="text" placeholder="login" name="login" value=""> </br>-->
<!--    <label>Password:</label><input type="password" placeholder="password" name="pass" > </br>-->
<!--    <label>Email:</label><input type="text" placeholder="email" name="email" > </br>-->
<!--    <label>City:</label><input type="text" placeholder="city" name="city" > </br>-->

<button class="btn btn-lg btn-primary btn-block" type="sumit">Register</button>
    <button class="btn btn-lg btn-primary btn-block" type="sumit">Login</button>
<!--    <button type="submit">Register</button>-->

</form>
</div>



