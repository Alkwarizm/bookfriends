<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workflow</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alyssaxuu/flowy/flowy.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto mt-16 border border-gray-100 relative p-6">
        <div class="flex justify-between">
            <div>
              <h2 class="mb-2 font-bold">Workflow</h2>
              <!--- container -->
                <div class="nested ml-3 space-y-2">
                    <div data-id="1" class="nested-item border border-slate-200 border-b-2 px-4 py-2 bg-gray-300">
                        Land Preparation
                        <div class="nested ml-3 space-y-2">
                            <div data-id="1.1" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">Activity 1
                                <a href="#!" class="remove text-red-600">Remove</a>
                            </div>
                            <div data-id="1.2" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">Activity 2
                                <a href="#!" class="remove text-red-600">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div data-id="2" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">
                        Fertilizer Application
                        <div class="nested ml-3 space-y-2">
                            <div data-id="2.1" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">Activity 3
                                <a href="#!" class="remove text-red-600">Remove</a></div>
                            <div data-id="2.2" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">Activity 4
                                <a href="#!" class="remove text-red-600">Remove</a></div>
                        </div>
                    </div>
                    <div data-id="3" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">
                        Planting
                        <div class="nested ml-3 space-y-2">
                            <div data-id="3.1" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">Activity 5
                                <a href="#!" class="remove text-red-600">Remove</a></div>
                            <div data-id="3.2" class="nested-item border border-slate-200 mb-2 px-4 py-2 bg-gray-300">Activity 6
                                <a href="#!" class="remove text-red-600">Remove</a></div>
                        </div>
                    </div>
                </div>
            <div>
            </div>
        </div>
            <div>
                <!-- Custom blocks that can be dragged into the workflow to customize it -->
                <h2 class="mb-2 font-bold">Custom Items</h2>
                <ul id="custom-items" class="space-y-2">
                    <li data-id="c-1" class="px-4 py-2 bg-blue-300">Spraying</li>
                    <li data-id="c-2" class="px-4 py-2 bg-blue-300">Drilling</li>
                    <li data-id="c-3" class="px-4 py-2 bg-blue-300">Harrowing</li>
                </ul>
            </div>
    </div>
        <div class="mt-16 px-6 flex justify-between">
            <!-- Clicking on this button logs the structure of the workflow using the data-id attribute -->
            <button id="click" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:text-slate-800 hover:bg-blue-1000">Click Me</button>
            <button @click="createActivity" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:text-slate-800">Create Activity</button>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
        // let example = new Sortable(document.getElementById('items'), {
        //     group: {
        //         name: 'nested',
        //         put: ['custom', 'default']
        //     },
        //     dataIdAttr: 'data-id',
        // })

        let example = [];

        window.example = example;

        // element is a child element
        Array.from(document.querySelectorAll('.nested')).forEach((element, index) => {
            // index = 0, is the container
            // console.log(index)
            if (index !== 0) {
                console.log(element.parentElement.dataset)

                example.push({
                    id: element.parentElement.dataset?.id,
                    children:  new Sortable(element, {
                        group: {
                            name: 'default',
                            put: ['custom', 'default']
                        },
                        animation: 150,
                        fallbackOnBody: true,
                        swapThreshold: 0.65,
                        dataIdAttr: 'data-id',
                    })
                })

            } else {

                new Sortable(element, {
                    group: {
                        name: 'default',
                        put: ['custom', 'default']
                    },
                    animation: 150,
                    fallbackOnBody: true,
                    swapThreshold: 0.65,
                    dataIdAttr: 'data-id',
                })
            }
        })

        let custom = new Sortable(document.getElementById('custom-items'), {
            group: {
                name: 'custom',
                pull: 'clone',
                put: false,
            },
            animation: 150,
            sort: false,
            dataIdAttr: 'data-id',
        })

        document.getElementById('click').addEventListener('click', function (e) {
            fetch('/workflow', {
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`,
                    "Content-Type": "application/json",
                },
                method: 'POST',
                body: JSON.stringify(example.map(function (block) {
                    return {
                        id: block.id,
                        children: block.children.toArray(),
                    };
                })),
            })
        })

        Array.from(document.getElementsByClassName('remove')).forEach((element) => {
            element.addEventListener('click', function (e) {
                e.preventDefault();
                element.parentElement.remove()
            })
        })


    </script>
</body>
</html>
