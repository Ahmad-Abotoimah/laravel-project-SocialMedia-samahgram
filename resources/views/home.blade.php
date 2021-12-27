<x-layout>

            {{-- <div class="sidebar_inner" data-simplebar>
                <div class="flex flex-col items-center my-6 uk-visible@s">
                    <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transition m-0.5 mr-2  w-24 h-24">
                        <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border-4 border-white rounded-full w-full h-full">
                    </div>
                    <a href="profile/{{$login_user->id}}" class="text-xl font-medium capitalize mt-4 uk-link-reset">  {{$login_user->name}}
                    </a>
                    <div class="flex justify-around w-full items-center text-center uk-link-reset text-gray-800 mt-6">
                        <div>
                            <a href="#">
                                <strong>Post</strong>
                                <div> {{count($login_user->posts)}} </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <strong>Following</strong>
                                <div> {{count($followers)}}</div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <strong>Followers</strong>
                                <div> {{count($following)}}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="-mx-4 -mt-1 uk-visible@s">
                <ul>
                    <li class="active">
                        <a href="feed.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span> Feed </span> </a>
                    </li>
                    <li>
                        <a href="explore.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <span> Explore </span> </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <i class="uil-location-arrow"></i>
                            <span> Messages </span> <span class="nav-tag"> 3</span> </a>
                    </li>
                    <li>
                        <a href="trending.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                            <span> Trending </span> </a>
                    </li>
                    <li>
                        <a href="market.html">
                            <i class="uil-store"></i>
                            <span> Marketplace </span> </a>
                    </li>
                    <li>
                        <a href="setting.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span> Settings </span>
                        </a>
                        <ul>
                            <li><a href="setting.html">General </a></li>
                            <li><a href="setting.html"> Account setting </a></li>
                            <li><a href="setting.html">Billing <span class="nav-tag">3</span> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span> My Profile </span> </a>
                    </li>
                    <li>
                        <hr class="my-2">
                    </li>
                    <li>
                        <a href="form-login.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span> Logout </span> </a>
                    </li>
                </ul>
            </div> --}}

        <div class="main_content">

            <div class="container m-auto">

                <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Feed </h1>

                <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

                    <!-- left sidebar-->
                    <div class="space-y-5 flex-shrink-0 lg:w-7/12">
                            @foreach ($posts as $post )
                        <!-- post 1-->
                        <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                            <!-- post header-->
                            <div class="flex justify-between items-center px-4 py-3">
                                <div class="flex flex-1 items-center space-x-4">
                                    <a href="profile/{{$post->User->id}}">
                                        <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                            <img src="{{$post->User->user_img }}" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                                        </div>
                                    </a>
                                   <a href="profile/{{$post->User->id}}"><span class="block capitalize font-semibold dark:text-gray-100"> {{$post->user->name}} </span></a>
                                </div>
                                <div>
                                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-share-alt mr-1"></i> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-edit-alt mr-1"></i> Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-comment-slash mr-1"></i> Disable comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-favorite mr-1"></i> Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                    <i class="uil-trash-alt mr-1"></i> Delete
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div uk-lightbox>
                                <a href="assets/images/post/img4.jpg">
                                    <img src="{{$post->post_img }}" alt="">
                                </a>
                            </div>


                            <div class="py-3 px-4 space-y-3">

                                <div class="flex space-x-4 lg:font-bold">
                                    <a href="#" class="flex items-center space-x">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                        </div>
                                        <div>                                        <form action="{{ route('like.post', $post->id) }}"
                                            method="post">
                                            @csrf
                                            <button
                                                class="{{ $post->liked() ?  : '' }} ">
                                                like
                                            </button>
                                        </form> </div>

                                        <form action="{{ route('unlike.post', $post->id) }}"
                                            method="post">
                                            @csrf
                                            <button
                                                class="{{ $post->liked() ? 'block' : 'hidden'  }} px-4 py-2 text-black bg-red-600">
                                                unlike
                                            </button>
                                        </form>
                                    </a>
                                    <a href="#" class="flex items-center space-x">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                            </svg>
    <main class="div_set SCxLW  o64aR " role="main">
        <section class="div_set _1SP8R C3uDN j9XKR  ">
            <div class="div_set cGcGK">
                <div>
                    <div>
                        <article class="_8Rm4L bLWKA M9sTE _1gNme  L_LMM SgTZ1   ePUX4 " role="presentation"
                            tabindex="-1">
                            <div class="div_set  qF0y9  Igw0E IwRSH YBx95   _4EzTm  "
                                style="max-height: inherit; max-width: inherit;">
                                <div class="div_set UE9AK ">
                                    <div class="qF0y9  Igw0E   rBNOH  CcYR1  ybXk5_4EzTm  ">
                                        <section class=" div_set Ppjfr">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- h5uC0 mrq0Z" aria-disabled="false" role="button"
                                                    tabindex="0">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <span class="_2dbep " role="link" tabindex="-1"
                                                        style="width: 32px; height: 32px;"><img
                                                            alt="royatv's profile picture" class="_6q-tv"
                                                            crossorigin="anonymous" data-testid="user-avatar"
                                                            draggable="false"
                                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/47225477_330960677497896_6677904311046897664_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=TO0xxIHrne8AX-l5iO6&amp;edm=AJ9x6zYBAAAA&amp;ccb=7-4&amp;oh=00_AT-9nzVqFsyUkBGG-SRL9OxZ-A5Nhuym3vTBRhtTDvYM8Q&amp;oe=61CFDB3F&amp;_nc_sid=cff2a4"></span>
                                                </div>
                                            </div>
                                            <div class="div_set o-MQd z8cbW ">
                                                <div class="div_set  RqtMr">
                                                    <div class="div_set e1e1d"><span class="Jv7Aj mArmR MqpiF  "><a
                                                                class="sqdOP yWX7d _8A5w5   ZIAjV " href="/royatv/"
                                                                tabindex="0">royatv</a></span></div>
                                                </div>
                                                <div class="div_set M30cS">
                                                    <div></div>
                                                    <div class="div_set JF9hh"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="div_set MEAGs">
                                            <button class="wpO6b  " type="button">
                                                <div class="div_set QBdPU ">
                                                    <div class="div_set  qF0y9  Igw0E   rBNOH  YBx95   _4EzTm  "
                                                        style="height: 24px; width: 24px;">
                                                        <svg aria-label="More options" class="_8-yf5 "
                                                            color="#262626" fill="#262626" height="24" role="img"
                                                            viewBox="0 0 24 24" width="24">
                                                            <circle cx="12" cy="12" r="1.5"></circle>
                                                            <circle cx="6" cy="12" r="1.5"></circle>
                                                            <circle cx="18" cy="12" r="1.5"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="div_set _97aPb   ">
                                    <div role="button" class="ZyFrc" tabindex="0">
                                        <div class="div_set eLAPa kPFhm">
                                            <div class="div_set KL4Bh" style="padding-bottom: 100%;"><img
                                                    crossorigin="anonymous" class="FFVAD"
                                                    src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-15/fr/e15/s1080x1080/270047655_599305597804579_3527318811255671558_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=107&amp;_nc_ohc=ib7sxNTVZWoAX8ciMlo&amp;edm=AIQHJ4wBAAAA&amp;ccb=7-4&amp;ig_cache_key=MjczNjU5OTAzMzcyOTY3MTcyMA%3D%3D.2-ccb7-4&amp;oh=00_AT-KqqVbuIAV4kQzCM5Axm04S0BUXudXiIrKNCqhebCj-Q&amp;oe=61CE5818&amp;_nc_sid=7b02f1"
                                                    style="object-fit: cover;"></div>
                                            <div class="div_set _9AhH0"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  ">
                                    <div class="div_set cv3IO  ">
                                        <div class="div_set eo2As  ">
                                            <section class="ltpMr  Slqrh">
                                                <span class="fr66n">
                                                    <button class="wpO6b  " type="button">
                                                        <div class="div_set QBdPU rrUvL">
                                                            <span class="">
                                                                <svg aria-label="Like" class="_8-yf5 "
                                                                    color="#262626" fill="#262626" height="24"
                                                                    role="img" viewBox="0 0 24 24" width="24">
                                                                    <path
                                                                        d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </button>
                                                </span>
                                                <span class="_15y0l">
                                                    <button class="wpO6b " type="button">
                                                        <div class="div_set QBdPU rrUvL">
                                                            <svg aria-label="Comment" class="_8-yf5 "
                                                                color="#262626" fill="#262626" height="24" role="img"
                                                                viewBox="0 0 24 24" width="24">
                                                                <path
                                                                    d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z"
                                                                    fill="none" stroke="currentColor"
                                                                    stroke-linejoin="round" stroke-width="2"></path>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </span>


                                            </section>
                                            <section class="EDfFK ygqzn">
                                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ ybXk5 vwCYk">
                                                    <div class="div_set Nm9Fw"><a class="zV_Nj"
                                                            href="/p/CX6WlJyImIo/liked_by/"
                                                            tabindex="0"><span>12,858</span> likes</a></div>
                                                </div>
                                            </section>
                                            <div class="div_set EtaWk">
                                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  ">
                                                    <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   pjcA_   ">
                                                        <div class="div_set   QzzMF Igw0E IwRSH  eGOV_vwCYk   "
                                                            data-testid="post-comment-root"><span
                                                                class="Jv7Aj mArmR MqpiF  "><a
                                                                    class="FPmhX notranslate MBL3Z" title="royatv"
                                                                    href="/royatv/"
                                                                    tabindex="0">royatv</a></span>&nbsp;<span
                                                                class="_8Pl3R"><span>غادة عبد الرازق تكشف رغبتها
                                                                    في اعتزال الفن وارتداء الحجاب</span><span
                                                                    class="_2UvmX">...&nbsp;<button
                                                                        class="sXUSN">more</button></span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   pjcA_"><a
                                                                class="r8ZrO" href="/p/CX6WlJyImIo/"
                                                                tabindex="0">View all <span>732</span> comments</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="div_set k_Q0X I0_K8  NnvRN"><a class="c-Yi7"
                                                    href="/p/CX6WlJyImIo/" tabindex="0"><time class="_1o9PC Nzb55"
                                                        datetime="2021-12-25T16:00:48.000Z" title="Dec 25, 2021">17
                                                        hours ago</time></a></div>
                                            <section class="sH9wk  _JgwE ">
                                                <div class="div_set RxpZH">
                                                    <form class="X7cDz" method="POST">
                                                        <button class="wpO6b  " type="button">
                                                            <div class="div_set QBdPU ">
                                                                <svg aria-label="Emoji" class="_8-yf5 "
                                                                    color="#262626" fill="#262626" height="24"
                                                                    role="img" viewBox="0 0 24 24" width="24">
                                                                    <path
                                                                        d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <div class="div_set " style="right: 53px; bottom: 355px;">
                                                        </div>
                                                        <textarea aria-label="Add a comment…"
                                                            data-testid="post-comment-text-area"
                                                            placeholder="Add a comment…" class="Ypffh"
                                                            autocomplete="off" autocorrect="off"></textarea>
                                                        <button class="sqdOP yWX7d y3zKF "
                                                            data-testid="post-comment-input-button" disabled=""
                                                            type="submit">Post</button>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="div_set XmSS_"></div>
            <div class="div_set COOzN MnWb5 YT6rB" style="left: 966px;">
                <div class="div_set m0NAq xrWdL">
                    <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   ItkAi   " style="width: 100%;">
                        <div aria-labelledby="f1c71c35275658c f2aa0ffc34ea934 f20d1ca8a74c4d f159aa1bfd7238c"
                            class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm  ">
                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                <div class="div_set RR-M-  _2NjG_" aria-disabled="true" role="button" tabindex="-1">
                                    <canvas class="CfWVH" height="66" width="66"
                                        style="position: absolute; top: -5px; left: -5px; width: 66px; height: 66px;"></canvas>
                                    <a class="_2dbep qNELH kIKUG" href="/abualhaj.designer/" tabindex="0"
                                        style="width: 56px; height: 56px; display: block;"><img
                                            alt="abualhaj.designer's profile picture" class="_6q-tv"
                                            crossorigin="anonymous" data-testid="user-avatar" draggable="false"
                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/269875872_113749254497056_4793415724076752515_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=2UpcfidgHQ4AX8nR0ix&amp;tn=FbojSNBNcCAVwPep&amp;edm=AIQHJ4wBAAAA&amp;ccb=7-4&amp;oh=00_AT_BU2HunmydRDG2FUwUGKm4G4LA4NROUtstEgSSROAYOQ&amp;oe=61CF1550&amp;_nc_sid=7b02f1"></a>
                                </div>
                            </div>
                            <div class="div_set  qF0y9  Igw0E IwRSHYBx95  vwCYk   ">
                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f2aa0ffc34ea934">
                                    <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ ybXk5   vwCYk n4cjz   "><a
                                                class="gmFkV" href="/abualhaj.designer/"
                                                tabindex="0">abualhaj.designer</a></div>
                                    </div>
                                </div>
                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f20d1ca8a74c4d">
                                    <div class="div_set _7UhW9   xLCgt  MMzan   _0PwGv fDxYl ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_vwCYkn4cjz   ">
                                            <div class="div_set _7UhW9   xLCgt  MMzan   _0PwGv fDxYl ">محمد ابو الحاج</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div_set  qF0y9  Igw0E   rBNOH  YBx95   ybXk5_4EzTm  soMvl" id="f1c71c35275658c">
                                <button class="sqdOP yWX7d y3zKF " type="button">
                                    <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Switch</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div_set _8UZ6e">
                    <div class=" qF0y9  Igw0E   rBNOH eGOV_ ybXk5_ 4EzTm   _49XvD XfCBB XTCZH  ">
                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ vwCYk   ">
                            <div class="div_set _7UhW9   xLCgt   qyrsm  _0PwGv uL8Hv ">Suggestions For You</div>
                        </div>
                        <a class="sqdOP yWX7d _8A5w5  ZIAjV " href="/explore/people/" tabindex="0">
                            <div class="div_set _7UhW9  PIoXz qyrsm KV-D4  uL8Hv ">See All</div>
                        </a>
                    </div>
                    <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   pjcA_  WKY0a ">
                        <div class="div_set    tHaIX  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm HVWg4 ">
                            <div style="height: auto; overflow: hidden auto;">
                                <div style="flex-direction: column; padding-bottom: 0px; padding-top: 0px;">
                                    <div aria-labelledby="f2b15f2c8ac22dc f12497ab744395 f139da0bb4a3c8c f1cde44ba153cb"
                                        class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm   XfCBB  HVWg4 ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- " aria-disabled="true" role="button"
                                                    tabindex="-1">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <a class="_2dbep qNELH kIKUG" href="/saif_ghazawi/" tabindex="0"
                                                        style="width: 32px; height: 32px; display: block;"><img
                                                            alt="saif_ghazawi's profile picture" class="_6q-tv"
                                                            crossorigin="anonymous" data-testid="user-avatar"
                                                            draggable="false"
                                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/170161161_270578311467317_7016553906757344724_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=3TssZVNfLm0AX9XT9HL&amp;edm=AHqBGi8BAAAA&amp;ccb=7-4&amp;oh=00_AT_Qg53fkCPUOweKyIYxkY0Qu5EHWzLU7x6NmmQp6C-etQ&amp;oe=61CFB8C7&amp;_nc_sid=a14057"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E IwRSH YBx95  vwCYk   ">
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f12497ab744395">
                                                <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl "><span
                                                        class="Jv7Aj mArmR MqpiF  "><a class="FPmhX notranslate MBL3Z"
                                                            title="saif_ghazawi" href="/saif_ghazawi/"
                                                            tabindex="0">saif_ghazawi</a></span></div>
                                            </div>
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f1cde44ba153cb">
                                                <div class="div_set _7UhW9  PIoXz   MMzan   _0PwGv fDxYl ">Followed by
                                                    mhmadalnwaiseh + 3 more</div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E  rBNOH  YBx95  ybXk5 _4EzTm  soMvl"
                                            id="f2b15f2c8ac22dc">
                                            <button class="sqdOP yWX7d y3zKF " type="button">
                                                <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Follow</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div aria-labelledby="f2672d50c14e624 f3b139b99b06c08 f2f7e727ef02644 f73fe283c3be4"
                                        class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm   XfCBB  HVWg4 ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- " aria-disabled="true" role="button"
                                                    tabindex="-1">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <a class="_2dbep qNELH kIKUG" href="/jehad_abusukkar/" tabindex="0"
                                                        style="width: 32px; height: 32px; display: block;"><img
                                                            alt="jehad_abusukkar's profile picture"
                                                            class="_6q-tv" crossorigin="anonymous"
                                                            data-testid="user-avatar" draggable="false"
                                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/39075478_2262536487107177_1399974745096585216_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=FUg8SqM5PHMAX9a4GLF&amp;edm=AHqBGi8BAAAA&amp;ccb=7-4&amp;oh=00_AT-wzTPqK8Aeq5FHkQwDKFJo0x70_zYgvMSGTxVzKqGpCA&amp;oe=61CF9B04&amp;_nc_sid=a14057"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E IwRSH YBx95  vwCYk   ">
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f3b139b99b06c08">
                                                <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl "><span
                                                        class="Jv7Aj mArmR MqpiF  "><a class="FPmhX notranslate MBL3Z"
                                                            title="jehad_abusukkar" href="/jehad_abusukkar/"
                                                            tabindex="0">jehad_abusukkar</a></span></div>
                                            </div>
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f73fe283c3be4">
                                                <div class="div_set _7UhW9  PIoXz   MMzan   _0PwGv fDxYl ">Followed by
                                                    mohammad_yacoub94 + 4 more</div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E  rBNOH YBx95 ybXk5_4EzTm  soMvl"
                                            id="f2672d50c14e624">
                                            <button class="sqdOP yWX7d y3zKF " type="button">
                                                <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Follow</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div aria-labelledby="f3b72dab259e79c fb08872c83106c f2cdc58834c3838 fe8260d2ad5938"
                                        class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm   XfCBB  HVWg4 ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- " aria-disabled="true" role="button"
                                                    tabindex="-1">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <a class="_2dbep qNELH kIKUG" href="/adelghanim/" tabindex="0"
                                                        style="width: 32px; height: 32px; display: block;"><img
                                                            alt="adelghanim's profile picture" class="_6q-tv"
                                                            crossorigin="anonymous" data-testid="user-avatar"
                                                            draggable="false"
                                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/241692078_6487056101312349_5578672902179096768_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=spdMfmxCVeQAX9lIFHa&amp;tn=FbojSNBNcCAVwPep&amp;edm=AHqBGi8BAAAA&amp;ccb=7-4&amp;oh=00_AT8nEFvNlyYazRNmysh4F-hg5HxAFhEeT9JwnMmvpYieQQ&amp;oe=61CE51D8&amp;_nc_sid=a14057"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E IwRSH YBx95  vwCYk   ">
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="fb08872c83106c">
                                                <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl "><span
                                                        class="Jv7Aj mArmR MqpiF  "><a class="FPmhX notranslate MBL3Z"
                                                            title="adelghanim" href="/adelghanim/"
                                                            tabindex="0">adelghanim</a></span></div>
                                            </div>
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="fe8260d2ad5938">
                                                <div class="div_set _7UhW9  PIoXz   MMzan   _0PwGv fDxYl ">Followed by
                                                    anasyahea + 5 more</div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E   rBNOH  YBx95   ybXk5_4EzTm  soMvl"
                                            id="f3b72dab259e79c">
                                            <button class="sqdOP yWX7d y3zKF " type="button">
                                                <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Follow</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div aria-labelledby="f3eed69f2f810f f337e810d1c4334 f1e88e0ad097e3 f191982e9dfeb68"
                                        class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm   XfCBB  HVWg4 ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- " aria-disabled="true" role="button"
                                                    tabindex="-1">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <a class="_2dbep qNELH kIKUG" href="/amro_mansour_1990/"
                                                        tabindex="0"
                                                        style="width: 32px; height: 32px; display: block;"><img
                                                            alt="amro_mansour_1990's profile picture"
                                                            class="_6q-tv" crossorigin="anonymous"
                                                            data-testid="user-avatar" draggable="false"
                                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/122649627_410743886985173_8426521474407641827_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=tT7l-olvs2kAX9FcGB1&amp;edm=AHqBGi8BAAAA&amp;ccb=7-4&amp;oh=00_AT8yNJWis4snsKDosmThGIpS828nMFNuCZF0yVOP3amnnQ&amp;oe=61CF02FE&amp;_nc_sid=a14057"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E IwRSHYBx95  vwCYk   ">
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f337e810d1c4334">
                                                <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl "><span
                                                        class="Jv7Aj mArmR MqpiF  "><a class="FPmhX notranslate MBL3Z"
                                                            title="amro_mansour_1990" href="/amro_mansour_1990/"
                                                            tabindex="0">amro_mansour_1990</a></span></div>
                                            </div>
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f191982e9dfeb68">
                                                <div class="div_set _7UhW9  PIoXz   MMzan   _0PwGv fDxYl ">Followed by
                                                    mhmadalnwaiseh + 4 more</div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E   rBNOH  YBx95   ybXk5_4EzTm  soMvl"
                                            id="f3eed69f2f810f">
                                            <button class="sqdOP yWX7d y3zKF " type="button">
                                                <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Follow</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div aria-labelledby="f1ed233d39ee20c f357473a5011694 f263a275b467198 f11277e04d246a8"
                                        class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm   XfCBB  HVWg4 ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- " aria-disabled="true" role="button"
                                                    tabindex="-1">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <a class="_2dbep qNELH kIKUG" href="/islamaljaghbeir/" tabindex="0"
                                                        style="width: 32px; height: 32px; display: block;"><img
                                                            alt="islamaljaghbeir's profile picture"
                                                            class="_6q-tv" crossorigin="anonymous"
                                                            data-testid="user-avatar" draggable="false"
                                                            src="https://instagram.famm6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/247727416_301630925109289_5896525438795573853_n.jpg?_nc_ht=instagram.famm6-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=FF5YTU_knBoAX9Jrx3X&amp;edm=AHqBGi8BAAAA&amp;ccb=7-4&amp;oh=00_AT93_kDsDumfXQ6d2C04PrWn9TJYghZwFW4yU__R3C0HHg&amp;oe=61CF4746&amp;_nc_sid=a14057"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E IwRSHYBx95  vwCYk   ">
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f357473a5011694">
                                                <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl "><span
                                                        class="Jv7Aj mArmR MqpiF  "><a class="FPmhX notranslate MBL3Z"
                                                            title="islamaljaghbeir" href="/islamaljaghbeir/"
                                                            tabindex="0">islamaljaghbeir</a></span></div>
                                            </div>
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f11277e04d246a8">
                                                <div class="div_set _7UhW9  PIoXz   MMzan   _0PwGv fDxYl ">Followed by
                                                    mhmadalnwaiseh + 3 more</div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E   rBNOH  YBx95   ybXk5_4EzTm  soMvl"
                                            id="f1ed233d39ee20c">
                                            <button class="sqdOP yWX7d y3zKF " type="button">
                                                <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Follow</div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div>
            <form enctype="multipart/form-data" method="POST" role="presentation"><input accept="image/jpeg,image/png"
                    class="tb_sK" type="file"></form>
        </div>
        <div class="div_set vgS-T"></div>
    </main>
    <x-story />
</x-layout>
