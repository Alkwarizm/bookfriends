<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Finder</title>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>
    <div class="page"
         x-data="init()"
        >
        <form @submit.prevent="searchImage">
            <input type="search" x-model="search">
            <button type="submit">Search</button>
        </form>

        <div x-show="!loading" style="margin-top: 20px;">
            <img :src="imageUrl" alt="">
            <p style="margin-top: 5px;" x-text="description"></p>
        </div>
    </div>
    <script>
        const init = () => {
            return {
                search: '',
                imageUrl: '',
                description: '',
                loading: true,
                searchImage() {
                  if (this.search.length < 1) return;

                  let api = 'https://api.unsplash.com/search/photos?page=1&per_page=1&client_id=_eyRA-txVW2hNXqXJWj-OkwnilvNe7D9xm0FMHvQVjc';
                  fetch(`${api}&query=${this.search}`)
                      .then((response) => response.json())
                      .then((json) => {
                          this.imageUrl = json.results[0].urls.thumb;
                          this.description = json.results[0].description;
                          this.loading = false
                      })
                },
            }
        };
    </script>
</body>
</html>
