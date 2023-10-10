@extends('layouts.master')

@section('content')
        <main>
            <!-- Search -->
            <x-serach/>
            <x-success/>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <header>
                        <h1
                            class="text-3xl text-center font-bold my-6 uppercase"
                        >
                            Manage Gigs
                        </h1>
                    </header>

                    <table class="w-full table-auto rounded-sm">
                        <tbody>
                        @foreach($posts as $post)
                            <tr class="border-gray-300">
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                                >
                                    <a href="{{ route('post.show',$post->id)}}">
                                       {{$post->company_name}}
                                    </a>
                                </td>
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a
                                        href="{{ route('post.edit',$post->id) }}"
                                        class="text-blue-400 px-6 py-2 rounded-xl"
                                        ><i
                                            class="fa-solid fa-pen-to-square"
                                        ></i>
                                        Edit</a
                                    >
                                </td>
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                                >
                                <form method="POST" action="{{ route('post.destroy',$post->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="text-red-600" type="submit">
                                            <i
                                                class="fa-solid fa-trash-can"
                                            ></i>
                                            Delete
                                        </button>
                                </form>
                                </td>
                            </tr>

                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

@endsection