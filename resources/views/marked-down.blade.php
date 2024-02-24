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
<div class="bg-gray-300 h-screen"
     x-data="{
        body: '',
        markdown: '',
        preview() {
            this.markdown = window.marked.parse(this.body)
        }
     }"
    >
    <div class="container mx-auto max-w-xl bg-white p-20 shadow-lg border-slate-200">
        <form @submit.prevent="preview" class="max-w-full ">
            <div class="flex space-x-4">
                <textarea x-model="body" class="border border-slate-200 p-4" cols="20" rows="5"></textarea>
                <div class="self-center">
                    <button class="px-6 text-white bg-blue-600 py-2">Preview</button>
                </div>
            </div>
        </form>

        <div class="mt-10">
            <div class="border shadow-lg px-6 py-4">
                <div x-html="markdown"></div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</body>
</html>
