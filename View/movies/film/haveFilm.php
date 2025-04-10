<?php

$movies = [["name" => "Pobres Criaturas", "img" => "../../public/assets/image/PobresCriaturas.png", "type" => "Animação", "year" => 2024, "rating" => 4.5], ["name" => "Pobres Criaturas", "img" => "../../public/assets/image/Alien.png", "type" => "Animação", "year" => 2024, "rating" => 4.5], ["name" => "Pobres Criaturas", "img" => "../../public/assets/image/Divertidamente2.png", "type" => "Animação", "year" => 2024, "rating" => 4.5], ["name" => "Pobres Criaturas", "img" => "../../public/assets/image/MadMax.png", "type" => "Animação", "year" => 2024, "rating" => 4.5],
["name" => "Pobres Criaturas", "img" => "../../public/assets/image/OCorvo.png", "type" => "Animação", "year" => 2024, "rating" => 4.5]]


?>


<ul class="grid grid-cols-4 gap-6">
    <?php foreach ($movies as $movie): ?>
        <li class=" bg-[url(<?= $movie['img'] ?>)] bg-cover bg-center h-96 rounded-xl ">
            <div class="bg-gradient-to-b from-transparent to-(--gray-200) flex flex-col justify-between h-full rounded-b-lg">
                <div class="w-full flex justify-end">
                    <div class="mt-2 mr-2 p-2 flex justify-center items-center bg-(--gray-100)/70 w-24 gap-2 text-white rounded-3xl ">
                        <p class="text-lg" ><?= $movie['rating'] ?><span class="text-sm font-light"> / 5</span> </p>
                        <svg class="" width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.3719 15.1969C37.2156 14.7165 36.9206 14.293 36.5241 13.98C36.1276 13.6669 35.6473 13.4781 35.1437 13.4375L25.925 12.6938L22.3656 4.08596C22.1731 3.61693 21.8455 3.21573 21.4244 2.93337C21.0033 2.65101 20.5078 2.50024 20.0008 2.50024C19.4938 2.50024 18.9982 2.65101 18.5771 2.93337C18.156 3.21573 17.8284 3.61693 17.6359 4.08596L14.0797 12.6922L4.85623 13.4375C4.35182 13.4802 3.87122 13.6708 3.47463 13.9853C3.07804 14.2999 2.78312 14.7246 2.6268 15.2061C2.47048 15.6875 2.45972 16.2044 2.59587 16.692C2.73202 17.1795 3.00902 17.6161 3.39217 17.9469L10.4234 24.0141L8.28123 33.086C8.16143 33.5788 8.19076 34.0962 8.36551 34.5723C8.54026 35.0485 8.85255 35.462 9.26273 35.7603C9.67291 36.0586 10.1625 36.2284 10.6693 36.248C11.1761 36.2676 11.6774 36.1361 12.1094 35.8703L20 31.0141L27.8953 35.8703C28.3274 36.133 28.8276 36.2619 29.3329 36.2408C29.8382 36.2198 30.3259 36.0497 30.7347 35.752C31.1435 35.4543 31.455 35.0423 31.6301 34.5679C31.8052 34.0935 31.8361 33.5779 31.7187 33.086L29.5687 24.0125L36.6 17.9453C36.9862 17.6151 37.2658 17.1776 37.4032 16.6883C37.5406 16.199 37.5297 15.68 37.3719 15.1969ZM34.975 16.0516L27.3656 22.6141C27.1921 22.7637 27.063 22.9581 26.9924 23.176C26.9219 23.394 26.9126 23.6271 26.9656 23.85L29.2906 33.6625C29.2966 33.6761 29.2972 33.6914 29.2923 33.7053C29.2873 33.7193 29.2772 33.7308 29.264 33.7375C29.2359 33.7594 29.2281 33.7547 29.2047 33.7375L20.6547 28.4797C20.4578 28.3587 20.2311 28.2946 20 28.2946C19.7688 28.2946 19.5422 28.3587 19.3453 28.4797L10.7953 33.7407C10.7719 33.7547 10.7656 33.7594 10.7359 33.7407C10.7227 33.7339 10.7126 33.7224 10.7077 33.7085C10.7027 33.6945 10.7033 33.6792 10.7094 33.6657L13.0344 23.8532C13.0873 23.6303 13.0781 23.3971 13.0075 23.1791C12.937 22.9612 12.8079 22.7668 12.6344 22.6172L5.02498 16.0547C5.00623 16.0391 4.98905 16.025 5.00467 15.9766C5.0203 15.9282 5.0328 15.9344 5.05623 15.9313L15.0437 15.125C15.2728 15.1054 15.492 15.0229 15.6773 14.8867C15.8625 14.7506 16.0066 14.5659 16.0937 14.3532L19.9406 5.03909C19.9531 5.01253 19.9578 5.00003 19.9953 5.00003C20.0328 5.00003 20.0375 5.01253 20.05 5.03909L23.9062 14.3532C23.9942 14.566 24.1392 14.7505 24.3253 14.8861C24.5114 15.0218 24.7314 15.1034 24.9609 15.1219L34.9484 15.9282C34.9719 15.9282 34.9859 15.9282 35 15.9735C35.014 16.0188 35 16.036 34.975 16.0516Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                

                <div class="pl-4 pb-4">
                    <h3 class="font-(family-name:--rajd) text-(--gray-800) text-xl font-bold"><?= $movie['name'] ?></h3>
                    <p class="font-(family-name:--nunito) text-(--gray-600) font-bold text-sm"><?= $movie['type'] ?> • <?= $movie['year'] ?></p>
                </div>
            </div>
        </li>
    <?php endforeach ?>
</ul>    