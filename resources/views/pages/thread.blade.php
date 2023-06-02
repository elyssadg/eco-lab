@extends('template.layout')

@section('title')
    Thread {{ $thread->id }}
@endsection

@section('content')
    <div class="w-[85%] mx-auto flex gap-x-[5%]">
        <!-- Left Side -->
        <div class="w-[65%] h-max">
            <!-- Thread Data -->
            <div class="flex flex-col gap-8 w-full h-max rounded bg-white border border-mid border-opacity-50 shadow-md p-10">
                <div class="flex gap-4">
                    <div class="flex justify-center items-center rounded w-12 h-12 bg-light bg-opacity-20">
                        @if ($thread->user->gender == 'male')
                            <i class="fas fa-male fa-lg text-dark"></i>
                        @else
                            <i class="fas fa-female fa-lg text-dark"></i>
                        @endif
                    </div>
                    <div>
                        <p class="text-subheading text-mid font-medium">
                            {{ $thread->user->username }}
                        </p>
                        <p class="text-name text-mid font-normal">
                            {{ $thread->posting_date }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <h1 class="text-title text-dark font-bold">
                        {{ $thread->title }}
                    </h1>
                    <p class="text->subheading text-dark font-medium">
                        {{ $thread->message }}
                    </p>
                </div>

                <div class="flex items-center gap-1 text-mid">
                    <i class="far fa-thumbs-up fa-lg p-2 hover:bg-light hover:bg-opacity-20 hover:rounded"></i>
                    <p class="text-subheading font-medium">
                        {{ $thread->like->count() }}
                    </p> 
                </div>

                <hr class="bg-mid bg-opacity-20 h-[2px]">

                <form action="" class="w-1/2 flex flex-col gap-5">
                    <textarea class="w-full rounded border-0 outline-none py-2 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Type here to reply"></textarea>
                    <button type="submit" class="w-1/2 px-3 py-1.5 rounded bg-mid text-subheading font-medium text-white transition-all duration-200 hover:shadow-md hover:shadow-mid/25">Post Comment</button>
                </form>
            </div>

            <!-- Comments -->
            @if ($thread->comment->count() == 0)
                <p class="text-name text-mid font-normal">No comments yet</p>
                <p>Be the first to comment!</p>
            @else
            @endif
        </div>
        <!-- Right Side -->
        <div class="w-[30%] h-max flex flex-col gap-5">
            <!-- Popular Threads -->
            <div class="w-full h-max rounded bg-white border border-mid border-opacity-50 p-5 shadow-md">
                <h1 class="text-heading text-mid font-semibold">Popular Threads</h1>
                @foreach ($popular_threads as $popular)
                    <a href="/forum/{{ $popular->id }}">
                        <div class="flex gap-4 p-5">
                            <div class="flex justify-center items-center rounded w-10 h-10 bg-light bg-opacity-20">
                                @if ($popular->user->gender == 'male')
                                    <i class="fas fa-male fa-lg text-dark"></i>
                                @else
                                    <i class="fas fa-female fa-lg text-dark"></i>
                                @endif
                            </div>
                            <div>
                                <p class="text-name text-mid font-normal">
                                    {{ $popular->user->username }}
                                </p>
                                <p class="text-[0.625rem] text-mid font-normal">
                                    {{ $popular->posting_date }}
                                </p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="text-subheading text-dark font-medium truncate">
                                {{ $popular->title }}
                            </div>
                            <div class="text-subname text-dark font-normal h-16 text-multiline-3">
                                {{ $popular->message }}
                            </div>
                        </div>
                    </a>
                    @if (!$loop->last)
                        <hr class="bg-mid bg-opacity-20 h-[2px]">
                    @endif
                @endforeach
            </div>

            <!-- Unread Threads -->
            <div class="w-full h-max rounded bg-white border border-mid border-opacity-50 p-5 shadow-md">
                <h1 class="text-heading text-mid font-semibold">Unanswered Threads</h1>
                @foreach ($unanswered_threads as $unanswered)
                    <a href="/forum/{{ $unanswered->id }}">
                        <div class="flex gap-4 p-5">
                            <div class="flex justify-center items-center rounded w-10 h-10 bg-light bg-opacity-20">
                                @if ($unanswered->user->gender == 'male')
                                    <i class="fas fa-male fa-lg text-dark"></i>
                                @else
                                    <i class="fas fa-female fa-lg text-dark"></i>
                                @endif
                            </div>
                            <div>
                                <p class="text-name text-mid font-normal">
                                    {{ $unanswered->user->username }}
                                </p>
                                <p class="text-[0.625rem] text-mid font-normal">
                                    {{ $unanswered->posting_date }}
                                </p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="text-subheading text-dark font-medium truncate">
                                {{ $unanswered->title }}
                            </div>
                            <div class="text-subname text-dark font-normal h-16 text-multiline-3">
                                {{ $unanswered->message }}
                            </div>
                        </div>
                    </a>
                    @if (!$loop->last)
                        <hr class="bg-mid bg-opacity-20 h-[2px]">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection