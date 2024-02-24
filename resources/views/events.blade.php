<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MarkDown Parser</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>
    <div class="container mx-auto max-w-3xl mt-20 bg-gray-300">
{{--        <div class=""--}}
{{--             x-data="{--}}
{{--                shiftHeld: false,--}}
{{--             }"--}}
{{--        >--}}
{{--            <form action="" x-on:submit.prevent="console.log('submitted')">--}}
{{--                <textarea--}}
{{--                    cols="30"--}}
{{--                    rows="10"--}}
{{--                    class="border p-2"--}}
{{--                    x-data--}}
{{--                    x-on:keyup.shift="shiftHeld = false"--}}
{{--                    x-on:keydown.shift="shiftHeld = true"--}}
{{--                    x-on:keyup.enter="if (! shiftHeld) {$el.closest('form').dispatchEvent(new Event('submit'))}"--}}
{{--                ></textarea>--}}
{{--            </form>--}}
{{--        </div>--}}

        <div x-data="{ open: false }">
            <div class="p-5">
                <button
                    class="px-4 py-2 text-white bg-blue-500 shadow-md hover:bg-blue-800"
                    x-on:click="open = ! open"
                >Click Me
                </button>
            </div>

            <div
                class="max-w-md p-5"
                x-show="open"
                x-on:click.outside="open = false">
                <div class="bg-indigo-700 p-4 text-white">
                    content
                </div>
            </div>
        </div>
    </div>
</body>
</html>
