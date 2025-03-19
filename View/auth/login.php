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
                <h1 class="text-(--gray-600)">ab filmes</h1>
                <h2 class="text-lg">O guia definitivo para os amantes do cinema</h2>
            </div>
        </section>

        <section class="flex items-center w-1/2 flex-col pt-26 gap-15">
            <ul class="text-base rounded-2xl flex w-1/3 bg-(--gray-300) p-1 justify-center items-center text-center font-(family-name:--nunito) font-light">
                <li class="rounded-xl py-2 w-1/2  bg-(--gray-400) text-(--purple-light) ">Login</li>
                <li class="w-1/2 text-(--gray-600)">Cadastro</li>
            </ul><!-- nav buttons -->

            <form action="">
                <h2 class="font-(family-name:--remm) text-3xl">Acesse sua conta</h2>

                <ul class="flex flex-col gap-5">
                    <li class="border-2 border-(--gray-300) rounded-lg flex items-center gap-5 py-2 pl-3"><div class="h-6 w-6 bg-[url(../../public/assets/icon/Envelope-Regular.svg)] bg-cover bg-center"></div><input type="email" class="w-3/4 focus:outline-none"></li>
                    <li> <input type="text"></li>
                </ul>

                <button>Entrar</button>
            </form><!-- user login -->
        </section>
    </main>
    
</body>
</html>