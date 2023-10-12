<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            <!-- Item 1 -->
            @foreach($posts as $post)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="{{ asset('/theme/'.$post->company_logo)}}" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="{{route('post.show',$post->id)}}">{{$post->job_title}}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{$post->company_name}}</div>
                        <ul class="flex">
                        @php 
                            $posts = explode(',',$post->tags);
                            @endphp
                            @foreach($posts as $p)
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                                <a href="#">{{$p}}</a>
                            </li>
                           @endforeach
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{$post->job_loaction}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Item 2 -->
            <!-- <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/stark.png" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="{{route('show_post')}}">Full-Stack Engineer</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">
                            Stark Industries
                        </div>
                        <ul class="flex">
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i>
                            Lawrence, MA
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Item 3 -->
            <!-- <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/wayne.png" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="{{route('show_post')}}">Laravel Developer</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">
                            Wayne Enterprises
                        </div>
                        <ul class="flex">
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> Newark,
                            NJ
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Item 4 -->
            <!-- <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/skynet.png" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="{{route('show_post')}}">Backend Laravel Dev</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">
                            Skynet Systems
                        </div>
                        <ul class="flex">
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                Laravel
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                API
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                Backend
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                Vue
                            </li>
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i>
                            Daytona, FL
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Item 5 -->
            <!-- <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/wonka.png" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="{{route('show_post')}}">Junior Developer</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">
                            Wonka Industries
                        </div>
                        <ul class="flex">
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> San
                            Francisco, CA
                        </div>
                    </div>
                </div>
            </div> -->
        </div>