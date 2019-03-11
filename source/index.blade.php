@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <noscript>
        <style>
            .lqip {
                display: none !important;
            }
        </style>
    </noscript>

    @endpush

    @section('title', ' Discord Templates')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')

    <div class="container mx-auto leading-normal">
        <div class="flex p-4 justify-center">
            <div class="flex-1 max-w-lg mt-8">
              <div class="mb-10">
                <h1 class="text-3xl lg:text-4xl mb-6 text-white text-center -mb-px">Free Discord server templates!</h1>
                <p class="text-grey-light text-center">Just click the button to get started.</p>
              </div>
              <p>
                <br>
                <div class="text-center">
                  <a href="/start" class="btn-blue text-white text-center no-underline ">
                    Random template
                  </a>
                  <a href="#" class="btn-black text-white text-center no-underline ">
                    Learn more
                  </a>
                </div>
            </div>
        </div>
    </div>
    @include('_partials.lazyload-image', [
        'src' => 'https://mee6.xyz/assets/8760e4297fb4b5644eabd7fd3b16370a.png',
        'class' => 'absolute pin-b bg-center block mx-auto'
    ])


@endsection
