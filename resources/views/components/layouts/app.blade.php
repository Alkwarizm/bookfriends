<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookfriends</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="max-w-4xl auto px-6 grid grid-cols-8 gap-12 mt-16">
        <div class="col-span-2 border-r border-slate-200 space-y-6">
            @auth
                <ul>
                    <li>
                        <span href="" class="font-bold text-lg text-slate-600 hover:text-slate-800">{{ auth()->user()->name }}</span>
                    </li>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800">Feed</a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800">My books</a>
                    </li>
                     <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800">Add a book</a>
                    </li>
                     <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800">Friends</a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800">Logout</a>
                    </li>
                </ul>
            @endauth
        </div>
        <div class="col-span-6">
            @isset($header)
                <h1 class="font-bold text-2xl text-slate-800 block py-1">
                    {{ $header }}
                </h1>
            @endisset
            {{ $slot }}
        </div>
    </div>
</body>
</html>
