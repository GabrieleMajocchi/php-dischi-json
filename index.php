<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Dischi</title>

    <!-- ---Link to bootstrap--- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- ---Link to axios--- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <!-- ---Link to vue--- -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- ---Link to style--- -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- ---Link to main js--- -->
    <script src="./script/main.js" defer></script>

</head>
<body>
    
    <div id="app">
        <div class="container">
            <div class="row p-5">
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="(disk, index) in items" :key="index">
                            {{ disk.title }} {{ disk.author }} {{ disk.genre }} {{ disk.year }} {{disk.poster}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>