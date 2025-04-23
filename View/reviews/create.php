<div id="modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
	<div class="bg-gray-900 text-white w-full max-w-md rounded-xl shadow-xl p-6 relative">

		<div class="flex justify-between items-center mb-4">
			<h2 class="text-lg font-semibold">Avaliar filme</h2>
			<button onclick="closeModal()" class="text-gray-400 hover:text-white text-xl font-bold">×</button>
		</div>

		<div class="flex gap-4">
			<img src="<?= $movie['image'] ?>" alt="Capa do filme" class="w-24 h-auto rounded-md" />

			<div>
				<h3 class="text-lg font-bold"><?= $movie['name'] ?></h3>
				<p><span class="font-semibold">Categoria:</span> <?= $movie['category']?></p>
				<p><span class="font-semibold">Ano:</span> <?= $movie['year'] ?></p>

				<div class="mt-2">
				<p class="text-sm mb-1">Sua avaliação:</p>
				<div class="flex gap-1 text-purple-500" id="rating">
					<?php for ($i = 1; $i <= 5; $i++): ?>
						<div class="cursor-pointer" onclick="setRating(<?= $i ?>)" data-index="<?= $i ?>">
							<svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="star-svg">
							<path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z"
								fill="#2a2a2a" />
							</svg>
						</div>
					<?php endfor; ?>
				</div>
				</div>
			</div>
		</div>

		<form action="index.php?route=createReview&movie_id=<?= $movie['id_movie'] ?>" method="POST" class="mt-4">
			<input type="hidden" name="movie_id" value="<?= $movie['id_movie']?>">
			<input type="hidden" name="score" id="nota" value="0">
			<textarea name="comment" rows="4" placeholder="Comentário"
			class="w-full rounded-lg p-3 bg-gray-800 border border-gray-700 text-white resize-none focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>

			<div class="flex justify-end mt-4">
				<button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-lg font-semibold transition">
					Publicar
				</button>
			</div>
		</form>

	</div>
</div>
