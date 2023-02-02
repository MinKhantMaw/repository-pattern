@extends('layouts.app')
@section('content')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="">Category Name</span>
                                <input type="text" name="name"
                                    class="block w-full @error('name') text-danger @enderror mt-1 rounded-md" placeholder=""
                                    value="{{ old('name') }}" />
                            </label>
                            @error('name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="">Slug</span>
                                <input type="text" name="slug"
                                    class="block w-full @error('slug') text-danger @enderror mt-1 rounded-md" placeholder=""
                                    value="{{ old('slug') }}" />
                            </label>
                            @error('slug')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
