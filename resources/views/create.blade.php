<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Workflow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="page" x-data="init()">
        <div class="max-w-4xl mx-auto mt-16 bg-white">
            <div class="shadow-sm border rounded-lg p-6">
                <h2>Workflows</h2>
                <form @submit.prevent="addSection" action="">
                    <h4 class="font-bold mb-2">Select a template</h4>
                    <div class="flex gap-2">
                        <label for="maize">Maize</label>
                        <input type="radio" x-model="templates" id="maize" value="maize">
                    </div>

                    <div class="flex gap-2">
                        <label for="custom">Create a custom template</label>
                        <input type="radio" x-model="templates" id="custom" value="custom">
                    </div>

                    <div class="mt-16" x-show="templates == 'custom'">
                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-2">Add Sections for your custom workflow</h2>
                                <div class="section">
                                    <div class="flex gap-2 mb-2 items-center">
                                        <label class="self-center" for="">Name</label>
                                        <input type="text" class="px-4 py-2 border" x-model="section" id="headers">
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <button @click="addSection" type="button" class="px-6 py-2 bg-blue-500 rounded-sm text-white">Add Section</button>
                                </div>
                            </div>
                            <div>
                                <h2 class="font-bold mb-2">Custom Workflows</h2>
                                <h4>Sections</h4>
                                <ul x-show="sections.length" class="list-disc">
                                    <template x-for="item in sections">
                                        <li x-text="item"></li>
                                    </template>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>

                <button type="button" @click="save" class="px-6 py-2 text-white">Proceed</button>
            </div>
        </div>
    </div>
    <script>
        const init = () => {
          return {
              templates: 'custom',
              sections: [],
              section: '',
              addSection () {
                  this.sections.push(this.section)
                  this.section = ''
              },
              save() {
                  fetch('/save', {
                      method: 'POST',
                      headers: {
                          'Content-Type': 'application/json',
                      },
                      body: this.sections
                  }).then((response) => {
                      window.location.href = '/workflow'
                  })
              }
          }
        }
    </script>
</body>
</html>
