@extends('layout.layout')
@section('title', 'Acceuil')

@section('content')
		@include('partials.homepage._homeH1')
		@include('partials.homepage._hero')
		<div class="lg:flex justify-between">
				<div class="px-5 lg:max-w-4xl max-w-sm">
						<x-card date="May 2, 2016"
								description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores perferendis quisquam ullam deleniti, esse suscipit exercitationem totam culpa eveniet aspernatur ea quae. Repellat, perferendis quaerat. Quibusdam dolorum quas nulla voluptatibus, deleniti aliquid, labore exercitationem at aperiam necessitatibus consectetur enim quidem?"
								replies='1' title='More Hats !' url_img="girl_hat.jpeg" />
						<x-card date="April 23, 2016"
								description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores perferendis quisquam ullam deleniti, esse suscipit exercitationem totam culpa eveniet aspernatur ea quae. Repellat, perferendis quaerat. Quibusdam dolorum quas nulla voluptatibus, deleniti aliquid, labore exercitationem at aperiam necessitatibus consectetur enim quidem?"
								replies='2' title='Hats !' url_img="man_hat.jpeg" />
						<x-card date="April 7, 2016"
								description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores perferendis quisquam ullam deleniti, esse suscipit exercitationem totam culpa eveniet aspernatur ea quae. Repellat, perferendis quaerat. Quibusdam dolorum quas nulla voluptatibus, deleniti aliquid, labore exercitationem at aperiam necessitatibus consectetur enim quidem?"
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
