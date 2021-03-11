<?php include("./includes/config.php");?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include("./includes/head_tags.php");?>
    <?php include("./includes/link_top.php");?>
</head>
<body>
<?php include("./includes/design_top.php");?>
<?php include("./includes/navigation.php");?>
    <section>    
        <div class="card-login">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="login_validation.php" method="POST">
                        <div class="form-group">
                            <input name="log_user_email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="log_user_pass" type="password" class="form-control" placeholder="Password">
                        </div>
                        <!--Error message if login fail!-->
                        <?php
                            if (isset ($_GET['login']) && $_GET['login']=='error_log'){
                        ?>
                            <div class="text-danger">
                                Os dados inseridos estão incorretos!
                            </div>
                        <?php }?>
                        <!--Error message if session not started!-->
                        <?php
                            if (isset ($_GET['login']) && $_GET['login']=='error_session'){
                        ?>
                            <div class="text-danger">
                                Faça login antes de aceder a estas páginas!
                            </div>
                        <?php }?>
                        <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>   
<?php include("./includes/footer.php");?>
<?php include("./includes/link_bottom.php");?>
</body>
</html>    