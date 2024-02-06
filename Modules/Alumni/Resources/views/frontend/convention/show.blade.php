@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} - {{ __("Comments") }} @endsection


@section('content')

<section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <p class="mb-8 leading-relaxed">
                <a href="{{route('frontend.comments.index')}}" class="outline outline-1 outline-gray-800 bg-gray-200 hover:bg-gray-100 text-gray-800 text-sm font-semibold mr-2 px-3 py-1 rounded dark:bg-gray-700 dark:text-gray-300">
                    {{ __("Comments") }}
                </a>
            </p>
            <h1 class="text-3xl sm:text-4xl mb-4 font-medium text-gray-800">
                {{$$module_name_singular->name}}
            </h1>

            @include('frontend.includes.messages')
        </div>
    </div>
</section>


<section class="bg-white text-gray-600 py-20 px-20">
    <div class="grid grid-cols-1 gap-6">
        <div class="">
            <div class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5 flex flex-col items-stretch">
                    <h2 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">
                        Post of {{$$module_name_singular->name}}
                    </h2>
                    <p class="my-4 flex-1 h-full font-normal text-gray-700 dark:text-gray-400">
                        {!! $$module_name_singular->comment !!}
                    </p>
                   

                    <hr class="my-4">

                   
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white text-gray-600 py-20 px-20">
  
</section>

@endsection