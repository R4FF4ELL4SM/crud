<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nomes</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <section>
        <nav>
            <a href="/CRUD_YT/index.php">Página Inicial</a>
            <a href="/CRUD_YT/views/login.php">Login</a>
        </nav>
    </section>

    <section class="d-flex justify-content-center"> 
        <section class="m-3 w-50 d-flex justify-content-center">
            <form action="/CRUD_YT/controlers/login.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                   <input type="file" class="form-control" id="foto" name="foto">
                </div>

                <div class="mb-3">
                    <a href="/CRUD_YT/views/cadastro.php" class="btn btn-success">Cadastre-se</a>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </section>
    </section>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Logar</button>
                </div>

            </form>
        </section>
    </section>
    
</body>
</html>