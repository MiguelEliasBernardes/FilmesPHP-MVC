<?php 

$movies = [["name" => "gru", "img" => "logo.png", "type" => "Animação", "year" => 2024, "rating" => 4.5]]

?>


<!DOCTYPE html>
<html lang="en">
<?php require "../../public/header.php";?>
<body>
    
    <header>
        <img src="" alt="Logo">

        <nav>
            <ul>
                <li>Explorar</li>
                <li>Meus Filmes</li>
            </ul>
        </nav>

        <div>
            <p>Olá, Jordan</p>
            <img src="" alt="Profile Pic">
            <img src="" alt="Exit Button">
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