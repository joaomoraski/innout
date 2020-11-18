<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <title>In N' Out</title>
</head>
    <body>
        <form action="#" method="post" class="form-login">
            <div class="login-card card">
                <div class="card-header">
                    <i class="icofont-travelling mr-1"></i>
                    <span class="font-weight-light">In</span>
                    <span class="font-weight-bold mx-2">N'</span>
                    <span class="font-weight-light">Out</span>
                    <i class="icofont-runner-alt-1 ml-1"></i>
                </div>
                <div class="card-body">
                    <?php include(TEMPLATE_PATH . '/messages.php'); ?>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email"
                               class="form-control <?= $errors['email'] ? 'is-invalid' : ''; ?>"
                               placeholder="Informe o e-mail para login."
                               autofocus
                               id="email"
                               value="<?= $_POST['email'] ?>"/>
                        <div class="invalid-feedback">
                            <?= $errors['email']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Informe a senha."
                               class="form-control <?= $errors['password'] ? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?= $errors['password']; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-lg btn-primary">Entrar</button>
                </div>
            </div>
        </form>
    </body>
</html>