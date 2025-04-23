<ul class="grid grid-cols-4 gap-6">
    <?php foreach ($movies as $movie): ?>
        <div class="overflow-hidden flex-grow">
            <li id="<?= $movie['id_movie'] ?>" class="h-96 rounded-xl movie group relative">
                <a href="index.php?route=about&movie_id=<?= $movie['id_movie'] ?>">
                    <div class="bg-[url(<?= $movie['image'] ?>)] absolute inset-0 -z-10 bg-cover bg-center transition-all duration-1000 bg-no-repeat group-hover:scale-110"></div>

                    <div class="bg-gradient-to-b from-transparent to-(--gray-200) flex flex-col justify-between h-full rounded-b-lg transition-all duration-200 hover:bg-(--gray-200)/25">
                        <div class="w-full flex justify-end">
                            <div class="mt-2 mr-2 p-2 flex justify-center items-center bg-(--gray-100)/70 w-24 gap-2 text-white rounded-3xl ">
                                <p class="text-lg" ><?= $movie['score'] ?><span class="text-sm font-light"> / 5</span> </p>
                                <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="white"/>
                                </svg>

                            </div>
                        </div>
                        
        
                        <div class="pl-4 pb-4 ">
                            <h3 class="font-(family-name:--rajd) text-(--gray-800) text-xl font-bold"><?= $movie['name'] ?></h3>
                            <p class="font-(family-name:--nunito) text-(--gray-600) font-bold text-sm"><?= $movie['category'] ?> • <?= $movie['year'] ?></p>
                            <p class="mr-4 break-words opacity-0 translate-y-5 description  invisible duration-200 font-(family-name:--nunito) text-(--gray-600) text-sm group-hover:visible group-hover:h-16  transition-all group-hover:translate-y-0 group-hover:opacity-100"><?= $movie['description'] ?></p>
                        </div>
                    </div>
                </a>
            </li>
        </div>
    <?php endforeach ?>
</ul>    