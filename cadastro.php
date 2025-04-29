<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <main class="w-100" style="max-width: 400px;">
        <form action="">
            <h1 class="h3 mb-4 text-center text-white">Faça o seu Cadastro</h1>
            <!-- Campo para Cadastro do Nome -->
            <div class="mb-3">
                <label for="text" class="form-label text-white">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
            <!-- Campo para Email -->
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu Email">
            </div>
            <!-- Campo para Senha -->
            <div class="mb-3">
                <label for="senha" class="form-label text-white">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite seu Senha">
            </div>
            <!-- Campo para Confirmação de Senha -->
            <div class="mb-3">
                <label for="senha" class="form-label text-white">Confirme sua Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Confirme sua Senha">
            </div>
            <!-- Botão de Enviar -->
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </main>
</body>
</html>
