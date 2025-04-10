<?php 
    require '../../App/Controller/MovieController.php';

    function Films(){
        $film = new MovieController();
        $film->CheckNumberOfFilms();
    }

    

?>


<!DOCTYPE html>
<html lang="pt-br">
<?php require "../../public/header.php";?>
<body class="bg-(--gray-100)">
    
    <header class="flex justify-between text-(--gray-500) px-4 py-2 items-center border-b-1 border-(--gray-300)">
        <img src="../../public/assets/Vector/Logo.svg" alt="Logo" class="w-14 mr-20">

        <nav>
            <ul  class="flex gap-6 font-(family-name:--nunito) font-light">
                <li class="flex items-center bg-(--gray-300) text-(--purple-light) rounded py-2 px-3">
                    <svg width="20" height="20" class="mr-1" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.8625 11.5953C35.7157 11.4573 35.5378 11.3568 35.3438 11.3024C35.1498 11.2479 34.9456 11.2412 34.7484 11.2828C34.5057 10.4102 34.093 9.59424 33.534 8.88169C32.9749 8.16914 32.2806 7.57406 31.4909 7.13065C30.7012 6.68723 29.8317 6.40421 28.9323 6.29786C28.0329 6.1915 27.1213 6.2639 26.25 6.51089C25.7016 5.31412 24.8211 4.29997 23.7131 3.58897C22.6052 2.87796 21.3164 2.5 20 2.5C18.6836 2.5 17.3948 2.87796 16.2869 3.58897C15.1789 4.29997 14.2984 5.31412 13.75 6.51089C12.8789 6.26358 11.9675 6.1908 11.0681 6.29674C10.1688 6.40268 9.29922 6.68525 8.5094 7.12822C7.71958 7.57118 7.02505 8.16582 6.4657 8.87798C5.90636 9.59014 5.49321 10.4058 5.25 11.2781C5.04466 11.2359 4.83202 11.2461 4.63164 11.3077C4.43126 11.3692 4.24958 11.4802 4.10331 11.6304C3.95705 11.7805 3.85089 11.965 3.79461 12.167C3.73833 12.3689 3.73374 12.5817 3.78125 12.7859L8.55625 33.0734C8.68551 33.6219 8.99628 34.1106 9.43816 34.4603C9.88004 34.81 10.4271 35.0002 10.9906 35H29.0094C29.5729 35.0002 30.12 34.81 30.5618 34.4603C31.0037 34.1106 31.3145 33.6219 31.4437 33.0734L36.2172 12.7859C36.267 12.5737 36.2604 12.3522 36.1982 12.1434C36.136 11.9345 36.0203 11.7456 35.8625 11.5953ZM11.875 8.74995C12.5894 8.74796 13.2932 8.92296 13.9234 9.25933C14.0936 9.34958 14.2823 9.39929 14.4748 9.40459C14.6674 9.40988 14.8585 9.3706 15.0334 9.28983C15.2082 9.20906 15.362 9.08898 15.4828 8.93895C15.6036 8.78893 15.6881 8.61302 15.7297 8.42495C15.9461 7.45374 16.487 6.58529 17.2634 5.96289C18.0397 5.34048 19.005 5.0013 20 5.0013C20.995 5.0013 21.9603 5.34048 22.7367 5.96289C23.513 6.58529 24.0539 7.45374 24.2703 8.42495C24.3119 8.61302 24.3964 8.78893 24.5172 8.93895C24.638 9.08898 24.7918 9.20906 24.9666 9.28983C25.1415 9.3706 25.3326 9.40988 25.5252 9.40459C25.7177 9.39929 25.9064 9.34958 26.0766 9.25933C26.6552 8.95241 27.2953 8.77932 27.9497 8.75283C28.6042 8.72634 29.2562 8.84712 29.8577 9.10626C30.4592 9.3654 30.9949 9.7563 31.4252 10.2501C31.8554 10.7439 32.1694 11.328 32.3437 11.9593L26.3187 13.6781L20.9297 11.5218C20.3339 11.2836 19.6693 11.2836 19.0734 11.5218L13.6828 13.6812L7.65625 11.9593C7.91136 11.0364 8.46219 10.2227 9.22424 9.64299C9.9863 9.06326 10.9175 8.74954 11.875 8.74995ZM10.9906 32.5L6.70469 14.2875L12.6188 15.9765L14.8219 32.5H10.9906ZM22.6562 32.5H17.3438L15.1172 15.8L20 13.8468L24.8828 15.8L22.6562 32.5ZM29.0094 32.5H25.1781L27.3813 15.9765L33.2953 14.2875L29.0094 32.5Z" fill="#A85FDD"/>
                    </svg>
                Explorar</li>
                <li class="flex items-center"><img src="../../public/assets/icon/FilmSlate-Regular.svg" alt="FilmSlate" class="w-5"> Meus Filmes</li>
            </ul>
        </nav>

        <div class="flex gap-4 items-center">
            <p class="font-(family-name:--nunito) font-light">Olá, Jordan</p>
            <img src="../../public/assets/Vector/Logo.svg" alt="Profile Pic" class="w-8 rounded-sm border-(--purple-light)">
            <img src="../../public/assets/icon/SignOut-Regular.svg" alt="Exit Button" class="w-7 bg-(--gray-300) p-1 rounded-md">
        </div>
    </header>

    <main>
        <section class="flex justify-between text-(--gray-800) w-11/12 mx-auto mt-16">
            <h2 class="font-(family-name:--remm) text-xl">Explorar</h2>
            <div class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3">
                <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.8844 34.1157L28.0609 26.2939C30.3285 23.5715 31.4592 20.0798 31.2179 16.545C30.9765 13.0102 29.3817 9.70458 26.7652 7.31569C24.1487 4.92681 20.7119 3.63863 17.1698 3.71913C13.6278 3.79963 10.2531 5.24261 7.74777 7.7479C5.24249 10.2532 3.79951 13.6279 3.71901 17.17C3.63851 20.7121 4.92669 24.1488 7.31557 26.7653C9.70445 29.3818 13.0101 30.9767 16.5449 31.218C20.0797 31.4593 23.5714 30.3286 26.2937 28.0611L34.1156 35.8845C34.2318 36.0006 34.3696 36.0928 34.5214 36.1556C34.6731 36.2185 34.8358 36.2508 35 36.2508C35.1642 36.2508 35.3269 36.2185 35.4786 36.1556C35.6304 36.0928 35.7682 36.0006 35.8844 35.8845C36.0005 35.7684 36.0926 35.6305 36.1555 35.4787C36.2183 35.327 36.2507 35.1644 36.2507 35.0001C36.2507 34.8359 36.2183 34.6732 36.1555 34.5215C36.0926 34.3698 36.0005 34.2319 35.8844 34.1157ZM6.24999 17.5001C6.24999 15.2751 6.90979 13.1 8.14596 11.2499C9.38212 9.39989 11.1391 7.95795 13.1948 7.10647C15.2505 6.25498 17.5125 6.03219 19.6948 6.46628C21.877 6.90036 23.8816 7.97182 25.4549 9.54516C27.0283 11.1185 28.0997 13.1231 28.5338 15.3053C28.9679 17.4876 28.7451 19.7496 27.8936 21.8053C27.0422 23.861 25.6002 25.618 23.7502 26.8541C21.9001 28.0903 19.725 28.7501 17.5 28.7501C14.5173 28.7468 11.6578 27.5605 9.54869 25.4514C7.43963 23.3423 6.2533 20.4828 6.24999 17.5001Z" fill="#A85FDD"/>
                </svg>
                <input type="text" placeholder="Pesquisar filme" class="focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)">
            </div>
        </section>
        
        <section class="w-11/12 mx-auto mt-10">
            <?php Films() ?>
        </section>
    </main>

</body>
</html>