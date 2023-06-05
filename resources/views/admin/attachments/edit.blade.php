@extends('layout.adminLayout')
@section('title')
Edit Attachments {{$attachments->file}}
@endSection
@section('content')
<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Edit Attachments : {{$attachments->file}}

            </h2>


            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Elements
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <form method="POST" action="{{url('admin/attachments/'.$attachments->id)}}"
            enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">File</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                  value="{{$attachments->file}}"
                  name="file"
                />
                @error('file')
                <span class="text-xs text-red-600 dark:text-red-400">
                {{$message}}
                </span>
                @enderror

              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Type</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                  value="{{$attachments->type}}"
                  name="type"
                />
                @error('type')
                <span class="text-xs text-red-600 dark:text-red-400">
                {{$message}}
                </span>
                @enderror

              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">course_id</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                  value="{{$attachments->course_id}}"
                  name="course_id"
                />
                @error('course_id')
                <span class="text-xs text-red-600 dark:text-red-400">
                {{$message}}
                </span>
                @enderror

              </label>
            </div>
            <button class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Update Profile
            </button>
        </form>
</div>

@endSection

@section('js')

@endSection
