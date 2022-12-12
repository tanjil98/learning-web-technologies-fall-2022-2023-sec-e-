<html>
<head>
    <title>Login Page</title>
</head>
    <body>
            <form method="POST" action="checkLogin.php" enctype="">
                    <fieldset align="center">
                        <legend>Login </legend>
                        <br><br>
                        <table align="center">
                            <tr>
                                <td>User Id</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="userid" value=""/><br></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                            </tr>
                            <tr>
                                <td><input type="password" name="password" value=""/><br></td>

                            </tr>
                            
                     </table>
                     <div class="field-group">
        <div>
            <input type="checkbox" name="remember" id="remember"
                <?php if(isset($_COOKIE["member_login"])) { ?> checked
                <?php } ?> /> <label for="remember-me">Remember me</label>
        </div>
    </div>
                            <br><hr>
                            <input type="submit" name="" value="login">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="Registration.php">Registraion</a>

                    </fieldset>
            </form>
    </body>
</html>