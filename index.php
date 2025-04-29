<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <main class="w-100" style="max-width: 400px;">
        <form action="">
            <h1 class="h3 mb-4 text-center text-white">Sistema de Gerenciamento</h1>
            <!-- Campo para Email -->
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Seu Email">
            </div>
            <!-- Campo para Senha -->
            <div class="mb-3">
                <label for="senha" class="form-label text-white">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Sua senha">
            </div>
            <!-- Botão de Enviar -->
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
            <!-- Link para Cadastro -->
            <div class="text-center mt-3">
                <a href="cadastro.php" class="text-white fw-light text-decoration-none">Fazer meu Cadastro</a>
            </div>
        </form>
    </main>
</body>
</html>
