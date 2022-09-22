@props(['date', 'url_img', 'description', 'replies', 'title'])

<div class="py-5">
		<div class="bg-white max-w-2xl p-4">
				<div class="text-center font-bold">
						<h2>TITLE HEADING</h2>
						<p class="py-3">Title description, <span class="text-gray-400">{{ $date }}</span> </p>
				</div>
				<img alt="" src="img/{{ $url_img }}">
				<p class="py-5"><span class="font-bold">{{ $title }}</span> {{ $description }}</p>
				<div class="flex justify-between ">
						<button class="px-3 font-black border-2 border-black hover:bg-gray-300"> <i
										class="fa-solid fa-thumbs-up pr-2"></i>Like</button>
						<a href="{{ route('show') }}">Show</a>
						<button class="bg-black text-white px-4 py-2 flex hover:bg-gray-300 hover:text-black">Replies <div class="pl-4">
										<div class="bg-white text-black font-bold px-2">{{ $replies }}</div>
								</div></button>
				</div>
		</div>
</div>
