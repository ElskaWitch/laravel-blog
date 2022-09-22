@extends('layout.layout')
@section('title', 'Acceuil')

@section('content')
		@include('partials.homepage._homeH1')
		@include('partials.homepage._hero')
		<div class="md:flex justify-between">
				<div class="px-5 lg:max-w-4xl max-w-sm">
						<x-card date="May 2, 2016"
								description="I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
                Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco."
								replies='1' title='More Hats !' url_img="girl_hat.jpeg" />
						<x-card date="April 23, 2016"
								description="The trend this summer is hats for men!
                Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla."
								replies='2' title='Hats !' url_img="man_hat.jpeg" />
						<x-card date="April 7, 2016"
								description=" The runway in New York City this weekend is gonna be legendary!
                Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla."
								replies='3' title='Dont miss !' url_img="runway.jpeg" />
				</div>
				<div class="px-5 lg:max-w-xl  max-w-sm">
						@include('partials.homepage._rightSection1')
						@include('partials.homepage._rightSection2Table')
						@include('partials.homepage._rightSection3')
						@include('partials.homepage._rightSection4Tags')
						@include('partials.homepage._rightSection5Photo')
						@include('partials.homepage._rightSection6Follow')
						@include('partials.homepage._rightSection7Sub')
				</div>
		</div>
@endsection
