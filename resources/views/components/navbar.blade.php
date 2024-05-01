<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OurApp</title>
    <script src="https://kit.fontawesome.com/47cb46ef94.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="mb-5">
        <div class="pr-10 pl-10">
            <div class="p-5 shadow-sm flex justify-between">
                <div class="flex items-center gap-8">
                    <a href="/"><img src='/logo.svg' alt='Logo' width="150" /></a>
                    <div class="lg:flex items-center gap-8 hidden font-medium">
                        <a href="/">
                            <h2 class="hover:scale-105 hover:text-primary cursor-pointer ">Accueil</h2>
                        </a>
                        <h2 class="hover:scale-105 hover:text-primary cursor-pointer ">Services</h2>
                        <h2 class="hover:scale-105 hover:text-primary cursor-pointer ">À propos
                        </h2>
                    </div>
                </div>
                <div>
                    @auth
                        <div class="flex-row my-3 my-md-0">
                            <a href="#" class="text-white mr-2 header-search-icon" title="Search"
                                data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a>
                            <span class="text-white mr-2 header-chat-icon" title="Chat" data-toggle="tooltip"
                                data-placement="bottom"><i class="fas fa-comment"></i></span>
                            <a href="/profile/{{ auth()->user()->username }}" class="mr-2"><img title="My Profile"
                                    data-toggle="tooltip" data-placement="bottom"
                                    style="width: 32px; height: 32px; border-radius: 16px"
                                    src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
                            <a class="btn btn-sm btn-success mr-2" href="/create-post">Create Post</a>
                            <form action="/logout" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-sm btn-secondary">Sign Out</button>
                            </form>
                        </div>
                    @else
                        <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
                            @csrf
                            <div class="flex items-center gap-5">
                                <div
                                    class="p-2 w-40 border border-gray flex gap-3 items-center rounded
                            text-gray-400
                            has-[input:focus]:text-primary
                            has-[input:not(:placeholder-shown)]:text-primary
                            has-[input:focus]:border-primary
                            has-[input:not(:placeholder-shown)]:border-primary
                            transition linear">
                                    <i class="fa-solid fa-user"></i>
                                    <input name="loginusername" type="text" placeholder="Username"
                                        class="w-28 focus:outline-0 text-black"autocomplete="off" />
                                </div>
                                <div
                                    class="p-2 w-40 border border-gray flex gap-3 items-center rounded
                        text-gray-400
                        has-[input:focus]:text-primary
                        has-[input:not(:placeholder-shown)]:text-primary
                        has-[input:focus]:border-primary
                        has-[input:not(:placeholder-shown)]:border-primary
                        transition linear">
                                    <i class="fa-solid fa-lock"></i>
                                    <input name="loginpassword" class="w-28 focus:outline-0 text-black" type="password"
                                        placeholder="Password " />
                                </div>
                                <div>
                                    <button
                                        class="bg-primary text-white text-sm leading-6 font-medium py-2 px-3 rounded hover:bg-[#7C3AED]  transition ">Connexion</button>
                                </div>

                        </form>
                        <a href="signup"
                            class="bg-black text-white text-sm leading-6 font-medium py-2 px-3 rounded hover:bg-[#181818]  transition cursor-pointer">S'inscrire</a>
                    </div>
                @endauth
            </div>
        </div>
        <!-- header ends here -->

        @if (session()->has('success'))
            <div class='container container--narrow '>
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session()->has('failure'))
            <div class='container container--narrow '>
                <div class="alert alert-danger text-center">
                    {{ session('failure') }}
                </div>
            </div>
        @endif

        {{ $slot }}
    </div>
</body>
