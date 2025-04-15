<?php 

$error = $_GET['error'] ?? '';

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php require "header.php";?>
<body class="bg-(--gray-100) h-screen">
    
    <header class="flex justify-between text-(--gray-500) px-4 py-2 items-center border-b-1 border-(--gray-300)">
        <img src="assets/Vector/Logo.svg" alt="Logo" class="w-14 mr-20">

        <nav>
            <ul  class="flex gap-6 font-(family-name:--nunito) font-light">
            <li class="">
                    <a href="index.php?route=explore" class="flex items-center ">
                        <svg class="mr-2" width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.8625 11.5953C35.7157 11.4573 35.5378 11.3568 35.3438 11.3024C35.1498 11.2479 34.9456 11.2412 34.7484 11.2828C34.5057 10.4102 34.093 9.59424 33.534 8.88169C32.9749 8.16914 32.2806 7.57406 31.4909 7.13065C30.7012 6.68723 29.8317 6.40421 28.9323 6.29786C28.0329 6.1915 27.1213 6.2639 26.25 6.51089C25.7016 5.31412 24.8211 4.29997 23.7131 3.58897C22.6052 2.87796 21.3164 2.5 20 2.5C18.6836 2.5 17.3948 2.87796 16.2869 3.58897C15.1789 4.29997 14.2984 5.31412 13.75 6.51089C12.8789 6.26358 11.9675 6.1908 11.0681 6.29674C10.1688 6.40268 9.29922 6.68525 8.5094 7.12822C7.71958 7.57118 7.02505 8.16582 6.4657 8.87798C5.90636 9.59014 5.49321 10.4058 5.25 11.2781C5.04466 11.2359 4.83202 11.2461 4.63164 11.3077C4.43126 11.3692 4.24958 11.4802 4.10331 11.6304C3.95705 11.7805 3.85089 11.965 3.79461 12.167C3.73833 12.3689 3.73374 12.5817 3.78125 12.7859L8.55625 33.0734C8.68551 33.6219 8.99628 34.1106 9.43816 34.4603C9.88004 34.81 10.4271 35.0002 10.9906 35H29.0094C29.5729 35.0002 30.12 34.81 30.5618 34.4603C31.0037 34.1106 31.3145 33.6219 31.4437 33.0734L36.2172 12.7859C36.267 12.5737 36.2604 12.3522 36.1982 12.1434C36.136 11.9345 36.0203 11.7456 35.8625 11.5953ZM11.875 8.74995C12.5894 8.74796 13.2932 8.92296 13.9234 9.25933C14.0936 9.34958 14.2823 9.39929 14.4748 9.40459C14.6674 9.40988 14.8585 9.3706 15.0334 9.28983C15.2082 9.20906 15.362 9.08898 15.4828 8.93895C15.6036 8.78893 15.6881 8.61302 15.7297 8.42495C15.9461 7.45374 16.487 6.58529 17.2634 5.96289C18.0397 5.34048 19.005 5.0013 20 5.0013C20.995 5.0013 21.9603 5.34048 22.7367 5.96289C23.513 6.58529 24.0539 7.45374 24.2703 8.42495C24.3119 8.61302 24.3964 8.78893 24.5172 8.93895C24.638 9.08898 24.7918 9.20906 24.9666 9.28983C25.1415 9.3706 25.3326 9.40988 25.5252 9.40459C25.7177 9.39929 25.9064 9.34958 26.0766 9.25933C26.6552 8.95241 27.2953 8.77932 27.9497 8.75283C28.6042 8.72634 29.2562 8.84712 29.8577 9.10626C30.4592 9.3654 30.9949 9.7563 31.4252 10.2501C31.8554 10.7439 32.1694 11.328 32.3437 11.9593L26.3187 13.6781L20.9297 11.5218C20.3339 11.2836 19.6693 11.2836 19.0734 11.5218L13.6828 13.6812L7.65625 11.9593C7.91136 11.0364 8.46219 10.2227 9.22424 9.64299C9.9863 9.06326 10.9175 8.74954 11.875 8.74995ZM10.9906 32.5L6.70469 14.2875L12.6188 15.9765L14.8219 32.5H10.9906ZM22.6562 32.5H17.3438L15.1172 15.8L20 13.8468L24.8828 15.8L22.6562 32.5ZM29.0094 32.5H25.1781L27.3813 15.9765L33.2953 14.2875L29.0094 32.5Z" fill="#7A7B9F"/>
                        </svg>
                        Explorar
                    </a>
                    </li>
                <li class="">
                    <a href="index.php?route=usermovies" class="flex items-center">
                        <svg class="mr-2" width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.75 16.2501H15.9515L32.8125 11.7985C32.9721 11.7565 33.1218 11.6832 33.2529 11.583C33.3841 11.4828 33.4941 11.3576 33.5766 11.2147C33.6591 11.0717 33.7125 10.9139 33.7337 10.7502C33.7548 10.5865 33.7434 10.4202 33.7 10.261L32.425 5.57351C32.2495 4.94287 31.8326 4.40674 31.2647 4.08124C30.6968 3.75574 30.0235 3.66708 29.3906 3.83445L5.5953 10.1157C5.27847 10.1979 4.98123 10.3426 4.72098 10.5411C4.46073 10.7396 4.24271 10.9881 4.07967 11.272C3.91572 11.5523 3.8098 11.8628 3.7682 12.1849C3.72659 12.507 3.75015 12.8341 3.83748 13.147L4.99998 17.4313C4.99998 17.4532 4.99998 17.4766 4.99998 17.5001V31.2501C4.99998 31.9131 5.26338 32.549 5.73222 33.0178C6.20106 33.4867 6.83694 33.7501 7.49998 33.7501H32.5C33.163 33.7501 33.7989 33.4867 34.2678 33.0178C34.7366 32.549 35 31.9131 35 31.2501V17.5001C35 17.1686 34.8683 16.8506 34.6339 16.6162C34.3994 16.3818 34.0815 16.2501 33.75 16.2501ZM30.025 6.25008L30.9625 9.69851L27.4281 10.636L23.0344 8.09851L30.025 6.25008ZM19.6047 9.00008L23.9984 11.5376L18.2265 13.061L13.8328 10.5266L19.6047 9.00008ZM7.19842 15.972L6.26092 12.522L10.4015 11.4282L14.7953 13.9688L7.19842 15.972ZM32.5 31.2501H7.49998V18.7501H32.5V31.2501Z" fill="#7A7B9F"/>
                        </svg>
                        Meus Filmes
                    </a>
                </li>
            </ul>
        </nav>

        <div class="flex gap-4 items-center">
            <p class="font-(family-name:--nunito) font-light">Olá, <?= $_SESSION['user']['name'] ?></p>
            <img src="assets/Vector/Logo.svg" alt="Profile Pic" class="w-8 rounded-sm border-(--purple-light)">
            <img src="assets/icon/SignOut-Regular.svg" alt="Exit Button" class="w-7 bg-(--gray-300) p-1 rounded-md">
        </div>
    </header>

    <main class="flex gap-8 w-4/5 mx-auto mt-24 h-4/6">
        
        <form action="index.php?route=add" method="POST" enctype="multipart/form-data" class="flex gap-10 w-full">
            <section class="w-2/6 ">
                <label for="dropzone-file" class="bg-(--gray-300) w-full h-full flex flex-col gap-4 items-center justify-center rounded-xl text-(--gray-500) font(family-name:--nunito) cursor-pointer">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35 22.5V32.5C35 32.8315 34.8683 33.1495 34.6339 33.3839C34.3995 33.6183 34.0815 33.75 33.75 33.75H6.25C5.91848 33.75 5.60054 33.6183 5.36612 33.3839C5.1317 33.1495 5 32.8315 5 32.5V22.5C5 22.1685 5.1317 21.8505 5.36612 21.6161C5.60054 21.3817 5.91848 21.25 6.25 21.25C6.58152 21.25 6.89946 21.3817 7.13388 21.6161C7.3683 21.8505 7.5 22.1685 7.5 22.5V31.25H32.5V22.5C32.5 22.1685 32.6317 21.8505 32.8661 21.6161C33.1005 21.3817 33.4185 21.25 33.75 21.25C34.0815 21.25 34.3995 21.3817 34.6339 21.6161C34.8683 21.8505 35 22.1685 35 22.5ZM14.6344 12.1344L18.75 8.01719V22.5C18.75 22.8315 18.8817 23.1495 19.1161 23.3839C19.3505 23.6183 19.6685 23.75 20 23.75C20.3315 23.75 20.6495 23.6183 20.8839 23.3839C21.1183 23.1495 21.25 22.8315 21.25 22.5V8.01719L25.3656 12.1344C25.6002 12.3689 25.9183 12.5007 26.25 12.5007C26.5817 12.5007 26.8998 12.3689 27.1344 12.1344C27.3689 11.8998 27.5007 11.5817 27.5007 11.25C27.5007 10.9183 27.3689 10.6002 27.1344 10.3656L20.8844 4.11563C20.7683 3.99941 20.6304 3.90721 20.4787 3.84431C20.3269 3.7814 20.1643 3.74902 20 3.74902C19.8357 3.74902 19.6731 3.7814 19.5213 3.84431C19.3696 3.90721 19.2317 3.99941 19.1156 4.11563L12.8656 10.3656C12.6311 10.6002 12.4993 10.9183 12.4993 11.25C12.4993 11.5817 12.6311 11.8998 12.8656 12.1344C13.1002 12.3689 13.4183 12.5007 13.75 12.5007C14.0817 12.5007 14.3998 12.3689 14.6344 12.1344Z" fill="#A85FDD"/>
                    </svg>

                    Fazer upload
                    <input type="file" name="image" id="dropzone-file" class="hidden">
                </label>
            </section>

            <section class="w-3/5">
                <h2 class="text-(--gray-700) font-(family-name:--rajd) text-xl font-bold tracking-wide">Novo filme</h2>

                

                    <?php  if($error == 'failedmovie'): ?>
                        <div class="text-(--error-base) flex items-center gap-3 border-2 p-2 rounded-lg">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37 29.3892L23.336 5.65948C22.9945 5.07811 22.5071 4.59607 21.9219 4.26113C21.3368 3.9262 20.6743 3.75 20 3.75C19.3258 3.75 18.6633 3.9262 18.0781 4.26113C17.493 4.59607 17.0055 5.07811 16.6641 5.65948L3.00003 29.3892C2.67149 29.9515 2.49835 30.591 2.49835 31.2423C2.49835 31.8935 2.67149 32.5331 3.00003 33.0954C3.33711 33.6803 3.82373 34.165 4.40997 34.4997C4.9962 34.8344 5.66094 35.0071 6.33597 35.0001H33.6641C34.3386 35.0066 35.0027 34.8336 35.5883 34.4989C36.174 34.1642 36.6601 33.6798 36.9969 33.0954C37.3259 32.5334 37.4996 31.894 37.5001 31.2427C37.5007 30.5915 37.3281 29.9518 37 29.3892ZM34.8328 31.8439C34.7137 32.0471 34.5427 32.2149 34.3373 32.3302C34.1319 32.4456 33.8996 32.5042 33.6641 32.5001H6.33597C6.10046 32.5042 5.86811 32.4456 5.66273 32.3302C5.45735 32.2149 5.28634 32.0471 5.16722 31.8439C5.05932 31.6612 5.0024 31.4529 5.0024 31.2407C5.0024 31.0286 5.05932 30.8203 5.16722 30.6376L18.8313 6.90792C18.9528 6.70568 19.1246 6.53834 19.3299 6.42217C19.5353 6.30599 19.7672 6.24494 20.0032 6.24494C20.2391 6.24494 20.471 6.30599 20.6764 6.42217C20.8817 6.53834 21.0535 6.70568 21.175 6.90792L34.8391 30.6376C34.946 30.8208 35.0019 31.0294 35.0008 31.2416C34.9997 31.4537 34.9417 31.6617 34.8328 31.8439ZM18.75 22.5001V16.2501C18.75 15.9186 18.8817 15.6006 19.1161 15.3662C19.3506 15.1318 19.6685 15.0001 20 15.0001C20.3315 15.0001 20.6495 15.1318 20.8839 15.3662C21.1183 15.6006 21.25 15.9186 21.25 16.2501V22.5001C21.25 22.8316 21.1183 23.1496 20.8839 23.384C20.6495 23.6184 20.3315 23.7501 20 23.7501C19.6685 23.7501 19.3506 23.6184 19.1161 23.384C18.8817 23.1496 18.75 22.8316 18.75 22.5001ZM21.875 28.1251C21.875 28.4959 21.7651 28.8585 21.559 29.1668C21.353 29.4751 21.0602 29.7155 20.7176 29.8574C20.3749 29.9993 19.9979 30.0364 19.6342 29.9641C19.2705 29.8917 18.9364 29.7132 18.6742 29.4509C18.412 29.1887 18.2334 28.8546 18.1611 28.4909C18.0887 28.1272 18.1258 27.7502 18.2678 27.4076C18.4097 27.065 18.65 26.7721 18.9583 26.5661C19.2667 26.3601 19.6292 26.2501 20 26.2501C20.4973 26.2501 20.9742 26.4476 21.3259 26.7993C21.6775 27.1509 21.875 27.6278 21.875 28.1251Z" fill="#D04048"/>
                            </svg>

                            <p>Erro ao cadastrar filme!</p>
                        </div>]
                    <?php endif; ?>

                    <div class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3 mt-6">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.75 16.2501H15.9515L32.8125 11.7985C32.9721 11.7565 33.1218 11.6832 33.2529 11.583C33.3841 11.4828 33.4941 11.3576 33.5766 11.2147C33.6591 11.0717 33.7125 10.9139 33.7337 10.7502C33.7548 10.5865 33.7434 10.4202 33.7 10.261L32.425 5.57351C32.2495 4.94287 31.8326 4.40674 31.2647 4.08124C30.6968 3.75574 30.0235 3.66708 29.3906 3.83445L5.5953 10.1157C5.27847 10.1979 4.98123 10.3426 4.72098 10.5411C4.46073 10.7396 4.24271 10.9881 4.07967 11.272C3.91572 11.5523 3.8098 11.8628 3.7682 12.1849C3.72659 12.507 3.75015 12.8341 3.83748 13.147L4.99998 17.4313C4.99998 17.4532 4.99998 17.4766 4.99998 17.5001V31.2501C4.99998 31.9131 5.26338 32.549 5.73222 33.0178C6.20106 33.4867 6.83694 33.7501 7.49998 33.7501H32.5C33.163 33.7501 33.7989 33.4867 34.2678 33.0178C34.7366 32.549 35 31.9131 35 31.2501V17.5001C35 17.1686 34.8683 16.8506 34.6339 16.6162C34.3994 16.3818 34.0815 16.2501 33.75 16.2501ZM30.025 6.25008L30.9625 9.69851L27.4281 10.636L23.0344 8.09851L30.025 6.25008ZM19.6047 9.00008L23.9984 11.5376L18.2265 13.061L13.8328 10.5266L19.6047 9.00008ZM7.19842 15.972L6.26092 12.522L10.4015 11.4282L14.7953 13.9688L7.19842 15.972ZM32.5 31.2501H7.49998V18.7501H32.5V31.2501Z" fill="#7A7B9F"/>
                        </svg>

                        <input type="text" name="title" placeholder="Título" class="focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)">
                    </div>

                    <div class="mt-6 flex gap-6">
                        <div class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 mt-3 pl-3 w-2/4">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5 5H28.75V3.75C28.75 3.41848 28.6183 3.10054 28.3839 2.86612C28.1495 2.6317 27.8315 2.5 27.5 2.5C27.1685 2.5 26.8505 2.6317 26.6161 2.86612C26.3817 3.10054 26.25 3.41848 26.25 3.75V5H13.75V3.75C13.75 3.41848 13.6183 3.10054 13.3839 2.86612C13.1495 2.6317 12.8315 2.5 12.5 2.5C12.1685 2.5 11.8505 2.6317 11.6161 2.86612C11.3817 3.10054 11.25 3.41848 11.25 3.75V5H7.5C6.83696 5 6.20107 5.26339 5.73223 5.73223C5.26339 6.20107 5 6.83696 5 7.5V32.5C5 33.163 5.26339 33.7989 5.73223 34.2678C6.20107 34.7366 6.83696 35 7.5 35H32.5C33.163 35 33.7989 34.7366 34.2678 34.2678C34.7366 33.7989 35 33.163 35 32.5V7.5C35 6.83696 34.7366 6.20107 34.2678 5.73223C33.7989 5.26339 33.163 5 32.5 5ZM11.25 7.5V8.75C11.25 9.08152 11.3817 9.39946 11.6161 9.63388C11.8505 9.8683 12.1685 10 12.5 10C12.8315 10 13.1495 9.8683 13.3839 9.63388C13.6183 9.39946 13.75 9.08152 13.75 8.75V7.5H26.25V8.75C26.25 9.08152 26.3817 9.39946 26.6161 9.63388C26.8505 9.8683 27.1685 10 27.5 10C27.8315 10 28.1495 9.8683 28.3839 9.63388C28.6183 9.39946 28.75 9.08152 28.75 8.75V7.5H32.5V12.5H7.5V7.5H11.25ZM32.5 32.5H7.5V15H32.5V32.5Z" fill="#7A7B9F"/>
                            </svg>

                            <input type="text" name="year" placeholder="Ano" class="w-2/5 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)">
                        </div>

                        <div class="border-2 border-(--gray-300) rounded-lg  flex items-center gap-5 py-2 pl-3 mt-3 w-2/4">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M38.0172 21.25L22.5 5.73282C22.2687 5.49967 21.9934 5.31481 21.69 5.18901C21.3866 5.06321 21.0613 4.99896 20.7328 5.00001H6.25001C5.91849 5.00001 5.60055 5.13171 5.36613 5.36613C5.13171 5.60055 5.00001 5.91849 5.00001 6.25001V20.7328C4.99896 21.0613 5.06321 21.3866 5.18901 21.69C5.31481 21.9934 5.49967 22.2687 5.73282 22.5L21.25 38.0172C21.4822 38.2494 21.7578 38.4336 22.0611 38.5593C22.3645 38.685 22.6896 38.7496 23.018 38.7496C23.3463 38.7496 23.6715 38.685 23.9748 38.5593C24.2782 38.4336 24.5538 38.2494 24.786 38.0172L38.0172 24.786C38.2494 24.5538 38.4336 24.2782 38.5593 23.9748C38.685 23.6715 38.7496 23.3463 38.7496 23.018C38.7496 22.6896 38.685 22.3645 38.5593 22.0611C38.4336 21.7578 38.2494 21.4822 38.0172 21.25ZM23.0172 36.25L7.50001 20.7328V7.50001H20.7328L36.25 23.0172L23.0172 36.25ZM15 13.125C15 13.4959 14.89 13.8584 14.684 14.1667C14.478 14.475 14.1852 14.7154 13.8425 14.8573C13.4999 14.9992 13.1229 15.0363 12.7592 14.964C12.3955 14.8916 12.0614 14.7131 11.7992 14.4508C11.537 14.1886 11.3584 13.8545 11.286 13.4908C11.2137 13.1271 11.2508 12.7501 11.3927 12.4075C11.5347 12.0649 11.775 11.772 12.0833 11.566C12.3917 11.36 12.7542 11.25 13.125 11.25C13.6223 11.25 14.0992 11.4476 14.4508 11.7992C14.8025 12.1508 15 12.6277 15 13.125Z" fill="#7A7B9F"/>
                            </svg>


                            <input type="text" name="category" placeholder="Categoria" class="w-2/5 focus:outline-none text-(--gray-600) opacity-100 font-(family-name:--nunito)">
                        </div>
                    </div>

                    <div class="border-2 border-(--gray-300) rounded-lg mt-6 text-(--gray-600) p-3">
                        <textarea class="w-full h-40 resize-none" name="description" id="" placeholder="Descrição"></textarea>
                    </div>

                    <div class="flex justify-end gap-6 items-center h-24">
                        <a href="index.php?route=explore" class="font-(family-name:--nunito) text-(--gray-500)">Cancelar</a>
                        <button class="cursor-pointer bg-(--purple-base) font-(family-name:--nunito) text-white flex items-center gap-3 px-4 py-2 rounded-lg">Salvar</button>
                    </div>
            </section>
        </form>
    </main>

</body>
</html>