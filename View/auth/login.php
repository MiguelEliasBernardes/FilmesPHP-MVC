<?php 
    $wrong = $_GET['error'] ?? '';
?>

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
                <li class="rounded-xl py-2 w-1/2  bg-(--gray-300) text-(--purple-light) "><a href="#">Login</a></li>
                <li class="w-1/2 text-(--gray-600)"><a href="index.php?route=register" class="">Cadastro</a></li>
            </ul><!-- nav buttons -->

            <form action="index.php?route=login" method="POST" class="w-4/8 flex flex-col gap-8">
                <h2 class="font-(family-name:--remm) text-2xl text-(--gray-800) opacity-90">Acesse sua conta</h2>

                <?php if($wrong == 'loginwrong'): ?>
                    <div class="text-(--error-base) flex items-center gap-3 border-2 p-2 rounded-lg">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37 29.3892L23.336 5.65948C22.9945 5.07811 22.5071 4.59607 21.9219 4.26113C21.3368 3.9262 20.6743 3.75 20 3.75C19.3258 3.75 18.6633 3.9262 18.0781 4.26113C17.493 4.59607 17.0055 5.07811 16.6641 5.65948L3.00003 29.3892C2.67149 29.9515 2.49835 30.591 2.49835 31.2423C2.49835 31.8935 2.67149 32.5331 3.00003 33.0954C3.33711 33.6803 3.82373 34.165 4.40997 34.4997C4.9962 34.8344 5.66094 35.0071 6.33597 35.0001H33.6641C34.3386 35.0066 35.0027 34.8336 35.5883 34.4989C36.174 34.1642 36.6601 33.6798 36.9969 33.0954C37.3259 32.5334 37.4996 31.894 37.5001 31.2427C37.5007 30.5915 37.3281 29.9518 37 29.3892ZM34.8328 31.8439C34.7137 32.0471 34.5427 32.2149 34.3373 32.3302C34.1319 32.4456 33.8996 32.5042 33.6641 32.5001H6.33597C6.10046 32.5042 5.86811 32.4456 5.66273 32.3302C5.45735 32.2149 5.28634 32.0471 5.16722 31.8439C5.05932 31.6612 5.0024 31.4529 5.0024 31.2407C5.0024 31.0286 5.05932 30.8203 5.16722 30.6376L18.8313 6.90792C18.9528 6.70568 19.1246 6.53834 19.3299 6.42217C19.5353 6.30599 19.7672 6.24494 20.0032 6.24494C20.2391 6.24494 20.471 6.30599 20.6764 6.42217C20.8817 6.53834 21.0535 6.70568 21.175 6.90792L34.8391 30.6376C34.946 30.8208 35.0019 31.0294 35.0008 31.2416C34.9997 31.4537 34.9417 31.6617 34.8328 31.8439ZM18.75 22.5001V16.2501C18.75 15.9186 18.8817 15.6006 19.1161 15.3662C19.3506 15.1318 19.6685 15.0001 20 15.0001C20.3315 15.0001 20.6495 15.1318 20.8839 15.3662C21.1183 15.6006 21.25 15.9186 21.25 16.2501V22.5001C21.25 22.8316 21.1183 23.1496 20.8839 23.384C20.6495 23.6184 20.3315 23.7501 20 23.7501C19.6685 23.7501 19.3506 23.6184 19.1161 23.384C18.8817 23.1496 18.75 22.8316 18.75 22.5001ZM21.875 28.1251C21.875 28.4959 21.7651 28.8585 21.559 29.1668C21.353 29.4751 21.0602 29.7155 20.7176 29.8574C20.3749 29.9993 19.9979 30.0364 19.6342 29.9641C19.2705 29.8917 18.9364 29.7132 18.6742 29.4509C18.412 29.1887 18.2334 28.8546 18.1611 28.4909C18.0887 28.1272 18.1258 27.7502 18.2678 27.4076C18.4097 27.065 18.65 26.7721 18.9583 26.5661C19.2667 26.3601 19.6292 26.2501 20 26.2501C20.4973 26.2501 20.9742 26.4476 21.3259 26.7993C21.6775 27.1509 21.875 27.6278 21.875 28.1251Z" fill="#D04048"/>
                        </svg>

                        <p>E-mail ou senha incorretos!</p>
                    </div>
                <?php endif; ?>

                <ul class="flex flex-col gap-5">
                    <li class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3"> <img src="assets/icon/Envelope-Regular.svg" alt="img" class="w-6 h-6" /></> <input type="email" name="email" class="w-3/4 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)" placeholder="E-mail"></li>
                    <li class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3"><img src="assets/icon/Password-Regular.svg" alt="img" class="w-6 h-6" /><input type="text" name="password" class="w-3/4 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)" placeholder="Senha"></li>
                </ul>

                <button class="bg-(--purple-base) w-full py-3 rounded-xl font-(family-name:--nunito)">Entrar</button>
            </form><!-- user login -->
        </section>
    </main>

   
    
</body>
</html>