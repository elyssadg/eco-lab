@extends('template.layout')

@section('title')
    Forum
@endsection

@section('content')
    <div class="w-[85%] mx-auto">
        <div class="flex justify-between items-center">
            <p class="text-subname text-dark font-normal">Showing {{ $threads->lastItem() - $threads->firstItem() + 1 }} of {{ $threads->total() }} threads</p>
            <button id="thread-btn" class="px-5 py-1.5 rounded bg-mid text-subheading font-medium text-white transition-all duration-200 hover:shadow-md hover:shadow-mid/25">New Thread</button>
        </div>
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
        {{ $threads->links('custom-pagination') }}
    </div>

    <div id="layer" class="w-screen h-screen fixed top-0 left-0 bg-black bg-opacity-20" style="display: none;"></div>
    <div id="new-thread" class="w-1/2 h-max px-24 py-12 bg-white fixed top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 rounded shadow-md" style="display: none;">
        <h1 class="text-title text-mid font-bold">Post New Thread</h1>
        <form method="POST" action="/forum/add" id="new-thread-form" class="mt-10 flex flex-col gap-5" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div>
                <label for="title" class="text-name text-dark font-medium">Title</label>
                <div class="mt-2">
                    <input type="text" id="title" name="title" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Thread Title">
                </div>
            </div>
            <div>
                <label for="message" class="text-name text-dark font-medium">Message</label>
                <div class="mt-2">
                    <textarea type="text" id="message" name="message" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Thread Message"></textarea>
                </div>
            </div>
            <div>
                <label for="title" class="text-name text-dark font-medium">Image</label>
                <div class="mt-2">
                    <input type="file" id="image" name="image" accept="image/*" class="file:border-none file:outline-none file:rounded file:px-3 file:py-1 file:mr-3 file:text-dark text-dark">
                </div>
            </div>
            <div id="form-errors" class="mt-5 text-name text-red-500 font-medium" style="display: none;"></div>
            <div class="mt-10 flex justify-center w-full">
                <button type="submit" class="w-full py-1.5 rounded bg-mid text-subheading font-medium text-white transition-all duration-200 hover:shadow-md hover:shadow-mid/25">Post Thread</button>
            </div>
        </form>
    </div>

    <script>
        let modal = document.getElementById('new-thread');
        let layer = document.getElementById('layer');
        let thread_btn = document.getElementById('thread-btn');

        thread_btn.addEventListener('click', function() {
            modal.style.display = 'block';
            layer.style.display = 'block';
        });

        layer.addEventListener('click', function() {
            modal.style.display = 'none';
            layer.style.display = 'none';
        });
        
        $(document).ready(function() {
            $('#new-thread-form').submit(function(e) {
                e.preventDefault();
                var form_data = new FormData(this);
                $.ajax({
                    url: '/forum/add',
                    method: 'POST',
                    data: form_data,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.error) {
                            $('#form-errors').text(response.error_message).show();
                        } else {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
