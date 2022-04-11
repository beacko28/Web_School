<!DOCTYPE html>
<html lang="en">
<?php
require_once 'classes.php';
$u = new Usuario;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>ID</label>
        </div>
            <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
            Not a member? <a href="#">Signup</a>
        </div>
        </form>
    </div>
    <?php
if(isset($_POST['usuario']))
{
	$email = addslashes($_POST['login']);
	$senha = addslashes($_POST['senha']);

	if (!empty($email) && !empty($senha))
		{
			$u -> conectar("teste","localhost","root","");
			if($u -> msgErro == "")
			{

				}
				if($u -> logar($usuario,$senha))
				{
					header("location: navbar/index.html");
				}
				else
				{
					?>
					<div class="msg-erro">
					Id e/ou senha estão incorretos!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro; ?>
				</div>
				<?php
			}
		}else
		{
			?>
					<div class="msg-erro">
					Preencha todos os campos
					</div>
					<?php
		}	


?>
</body>
</html>