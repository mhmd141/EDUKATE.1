@extends('layout.adminLayout')
@section('title')
New Attachments
@endSection
@section('content')
<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            New Attachments
            @error('message')
              <p style="color: red;">{{$message}}</p>
                @endIf
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

            <form method="POST" action="{{url('admin/attachments/')}}"
             enctype="multipart/form-data">

              @csrf
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">File</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                  value=""
                  name="file"
                />
                @error('file')
                <span class="text-xs text-red-600 dark:text-red-400">
                {{$message}}
                </span>
                @enderror

              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Courses
                </span>
                <select
                name="course_id"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                <option value="" >Select</option>
                @foreach($attachments as $attachment)
                  <option value="{{$course1->id}}">{{$course1->name}}</option>
                @endforeach
                </select>
              </label>
              @error('course_id')
                <span class="text-xs text-red-600 dark:text-red-400">
                {{$message}}
                </span>
                @enderror
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Type</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                  value=""
                  name="type"
                />
                @error('type')
                <span class="text-xs text-red-600 dark:text-red-400">
                {{$message}}
                </span>
                @enderror
            </div>
            <button class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  SAVE
            </button>
        </form>
</div>

@endSection

@section('js')

@endSection
