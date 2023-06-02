@extends('template.layout')

@section('title')
    Forum
@endsection

@section('content')
    <div class="w-[85%] mx-auto">
        <p class="text-subname text-dark font-normal">Showing {{ $threads->lastItem() - $threads->firstItem() + 1 }} of {{ $threads->total() }} threads</p>
    </div>
    <div class="w-[85%] mx-auto mt-5 mb-10 flex flex-wrap gap-x-[5%] gap-y-10">
        @foreach ($threads as $thread)
            <a href="/forum/{{ $thread->id }}" class="w-[30%] h-max bg-white rounded shadow-md border border-mid border-opacity-50">
                <div class="flex gap-4 p-5 border-b border-b-mid border-opacity-20">
                    <div class="flex justify-center items-center rounded w-10 h-10 bg-light bg-opacity-20">
                        @if ($thread->user->gender == 'male')
                            <i class="fas fa-male fa-lg text-dark"></i>
                        @else
                            <i class="fas fa-female fa-lg text-dark"></i>
                        @endif
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
                            <p class="text-subname font-normal">
                                {{ $thread->like->count() }}
                            </p> 
                        </div>
                        <div class="flex items-center gap-1 text-mid">
                            <i class="far fa-comments fa-md"></i>
                            <p class="text-subname font-normal">
                                {{ $thread->comment->count() }}
                            </p>
                        </div>
                    </div>
                    <button class="text-subname text-mid font-normal hover:text-dark hover:border-b-2 hover:border-b-dark transition-all duration-200">Read More</button>
                </div>
            </a>
        @endforeach
    </div>

    <div class="flex justify-center items-center w-[85%] mx-auto text-name text-dark font-normal">
        {{ $threads->links() }}
    </div>
    
@endsection