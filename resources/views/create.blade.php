@extends('layouts.master')

@section('content')
    
<x-success/>
        <main>
            <div class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Gig
                        </h2>
                        <p class="mb-4">Post a gig to find a developer</p>
                    </header>

                    <form class="w-px-500 p-3 p-md-3" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label
                                for="company"
                                class="inline-block text-lg mb-2"
                                >Company Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full @error('company_name') is-invalid @enderror"
                                name="company_name" value="{{ old('company_name') }}"
                            />
                            @if ($errors->has('company_name'))
                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Job Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full @error('job_title') is-invalid @enderror"
                                name="job_title"  value="{{ old('job_title') }}"
                                placeholder="Example: Senior Laravel Developer"
                            />
                            @if ($errors->has('job_title'))
                                <span class="text-danger">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >Job Location</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full  @error('job_loaction') is-invalid @enderror"
                                name="job_loaction" value="{{ old('job_loaction') }}"
                                placeholder="Example: Remote, Boston MA, etc"
                            />
                            @if ($errors->has('job_loaction'))
                                <span class="text-danger">{{ $errors->first('job_loaction') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2 "
                                >Contact Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full  @error('email') is-invalid @enderror"
                                name="email"value="{{ old('email') }}"
                            />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website/Application URL
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full  @error('website') is-invalid @enderror"
                                name="website"value="{{ old('website') }}"
                            />
                            @if ($errors->has('website'))
                                <span class="text-danger">{{ $errors->first('website') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full  @error('tags') is-invalid @enderror"
                                name="tags"value="{{ old('tags') }}"
                                placeholder="Example: Laravel, Backend, Postgres, etc"
                            />
                            @if ($errors->has('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full  @error('company_logo') is-invalid @enderror"
                                name="company_logo"value="{{ old('company_logo') }}"
                            />
                            @if ($errors->has('company_logo'))
                                <span class="text-danger">{{ $errors->first('company_logo') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Job Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full  @error('job_description') is-invalid @enderror"
                                name="job_description" value="{{ old('job_description') }}"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc"
                            ></textarea>
                            @if ($errors->has('job_description'))
                                <span class="text-danger">{{ $errors->first('job_description') }}</span>
                            @endif
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Create Gig
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>

@endsection
