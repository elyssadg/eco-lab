@extends('template.layout')

@section('title')
    Forum
@endsection

@section('content')
    <div class="w-[85%] mx-auto my-20 flex flex-wrap gap-y-10 justify-between">
        @foreach ($threads as $thread)
            <a href="/forum/{{ $thread->id }}" class="w-[30%] h-max bg-white rounded shadow-md border border-mid border-opacity-50">
                <div class="flex gap-4 p-5 border-b border-b-mid border-opacity-20">
                    <div class="flex justify-center items-center rounded w-10 h-10 bg-light bg-opacity-20">
                        <i class="fas fa-male fa-lg text-dark"></i>
                    </div>
                    <div>
                        <p class="text-name text-mid font-normal">
                            {{ $thread->user->username }}
                        </p>
                        <p class="text-[0.625rem] text-mid font-normal">
                            {{ $thread->posting_date }}
                        </p>
                    </div>
                </div>
                <div class="p-5 border-b border-b-mid border-opacity-20">
                    <div class="text-subheading text-dark font-medium truncate">
                        {{ $thread->title }}
                    </div>
                    <div class="text-subname text-dark font-normal h-16 text-multiline-3">
                        {{ $thread->message }}
                    </div>
                </div>
                <div class="flex justify-between px-5 py-3">
                    <div class="flex gap-5">
                        <div class="flex items-center gap-1 text-mid">
                            <i class="far fa-thumbs-up fa-md"></i>
                            <p class="text-subname font-normal">1</p> {{-- bikin total likes --}}
                        </div>
                        <div class="flex items-center gap-1 text-mid">
                            <i class="far fa-comments fa-md"></i>
                            <p class="text-subname font-normal">0</p> {{-- bikin total comments --}}
                        </div>
                    </div>
                    <button class="text-subname text-mid font-normal hover:text-dark hover:border-b-2 hover:border-b-dark transition-all duration-200">Read More</button>
                </div>
            </a>
        @endforeach
    </div>
@endsection