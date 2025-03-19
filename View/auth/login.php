<!DOCTYPE html>
<html lang="pt-br">
<?php require "../../public/header.php"; ?>
<body class="bg-[#0F0F1A]">

    <main class="w-screen h-screen flex p-4 text-white">
        <section class="bg-[url(../../public/assets/Image/Login.png)] w-1/2 bg-cover rounded-xl flex flex-col justify-between">
            <div class="p-8">
                <img src="../../public/assets/Vector/Logo.svg" alt="logo" class="w-1/10">
            </div><!-- logo img -->
            <div class="w-1/2 p-4 font-(family-name:--remm)">
                <p class="text-(--gray-600)">ab filmes</p>
                <h2 class="text-lg">O guia definitivo para os amantes do cinema</h2>
            </div>
        </section>

        <section class="flex items-center justify-center w-1/2 flex-col">
            <ul class="flex w-1/3 bg-(--gray-300) p-1 justify-center items-center text-center">
                <li class="py-3 w-1/2  bg-(--gray-400)">Login</li>
                <li class="w-1/2">Cadastro</li>
            </ul><!-- nav buttons -->
            
            <form action="">
                <h1>Acesse sua conta</h1>
                <input type="email">
                <input type="text">
                <button>Entrar</button>
            </form><!-- user login -->
        </section>
    </main>
    
</body>
</html>