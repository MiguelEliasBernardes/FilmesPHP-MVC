<?php 

$movies = [["name" => "gru", "img" => "logo.png", "type" => "Animação", "year" => 2024, "rating" => 4.5]]

?>


<!DOCTYPE html>
<html lang="pt-br">
<?php require "../../public/header.php";?>
<body class="bg-(--gray-100)">
    
    <header class="flex justify-between text-(--gray-500) px-4">
        <img src="../../public/assets/Vector/Logo.svg" alt="Logo" class="w-14">

        <nav>
            <ul  class="flex gap-6">
                <li>Explorar</li>
                <li>Meus Filmes</li>
            </ul>
        </nav>

        <div>
            <p>Olá, Jordan</p>
            <img src="" alt="Profile Pic">
            <img src="../../public/assets/icon/SignOut-Regular.svg" alt="Exit Button">
        </div>
    </header>

    <main>
        <section>
            <h2>Explorar</h2>
            <input type="text" placeholder="Pesquisar filme">
        </section>
        
        <section>
            <ul>
                <?php foreach ($movies as $movie): ?>
                    <li class="">
                        <div>
                            <p>4,5</p>
                        </div>

                        <h3>Pobres Criaturas</h3>
                        <p>Tipo - 2023</p>
                    </li>
                <?php endforeach ?>
            </ul>    
        </section>
    </main>

</body>
</html>