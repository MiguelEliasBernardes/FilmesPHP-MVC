<!DOCTYPE html>
<html lang="pt-br">
<?php require "header.php"; ?>
<body class="bg-[#0F0F1A]">

    <main class="w-screen h-screen flex p-4 text-white">
        <section class="bg-[url(assets/Image/Login.png)] w-1/2 bg-cover rounded-xl flex flex-col justify-between">
            <div class="p-8">
                <img src="assets/Vector/Logo.svg" alt="logo" class="w-1/10">
            </div><!-- logo img -->
            <div class="w-1/2 p-4 font-(family-name:--remm)">
                <h1 class="text-(--gray-600)">ab filmes</h1>
                <h2 class="text-lg">O guia definitivo para os amantes do cinema</h2>
            </div>
        </section>

        <section class="flex items-center w-1/2 flex-col pt-26 gap-15">
            <ul class="text-base rounded-xl flex w-4/8 bg-(--gray-200) p-1 justify-center items-center text-center font-(family-name:--nunito) font-light">
                <li class="w-1/2 text-(--gray-600)"><a href="login.php">Login</a></li>
                <li class="rounded-xl py-2 w-1/2  bg-(--gray-300) text-(--purple-light) "><a href="#">Cadastro</a></li>
            </ul><!-- nav buttons -->

            <form action="index.php?route=register" method="POST" class="w-4/8 flex flex-col gap-8">
                <h2 class="font-(family-name:--remm) text-2xl text-(--gray-800) opacity-90">Acesse sua conta</h2>

                <ul class="flex flex-col gap-5">
                    <li class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3">
                        <img src="assets/icon/User-Regular.svg" alt="img" class="w-6 h-6" >
                        <input type="text" name="name" class="w-3/4 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)" placeholder="Nome">
                    </li>
                    
                    <li class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3"> 
                        <img src="assets/icon/Envelope-Regular.svg" alt="img" class="w-6 h-6" >
                        <input type="email" name="email" class="w-3/4 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)" placeholder="E-mail">
                    </li>

                    <li class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3">
                        <img src="assets/icon/Password-Regular.svg" alt="img" class="w-6 h-6" >
                        <input type="text" name="password" class="w-3/4 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)" placeholder="Senha">
                    </li>
                </ul>

                <button class="bg-(--purple-base) w-full py-3 rounded-xl font-(family-name:--nunito)">Entrar</button>
            </form><!-- user login -->
        </section>
    </main>
    
</body>
</html>