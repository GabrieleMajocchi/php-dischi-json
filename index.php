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
    <link rel="stylesheet" href="style/style.css">
    <!-- ---Link to main js--- -->
    <script src="./script/main.js" defer></script>

</head>
<body>

    <div id="app">
        <header>
            <img src="./logo.png" alt="Spotify Logo">
        </header>
        <div class="container">
            <div class="row p-5">
                <div class="col-10 m-auto">
                    <div class="row diskcontainer">
                        <div class="disk col-4 justify-content-center d-flex flex-column align-items-center" v-for="(disk, index) in items"  @click="moreInfo(index)">
                            <img :src="disk.poster" :alt="disk.title" class="my-4">
                            <h4 class="m-0 fw-bold">{{ disk.title }}</h4>
                            <p class="m-0">{{ disk.author }}</p>
                            <p class="m-0 fw-bold mb-4">{{ disk.year }}</p>
                        </div>
                        <div class="info justify-content-center d-flex flex-column align-items-center" v-if="activeInfo">
                            <div class="exit" @click="moreInfo()">
                                X
                            </div>
                            <img :src="info.poster" :alt="info.title" class="my-4">
                            <h4 class="m-0 fw-bold">{{ info.title }}</h4>
                            <p class="m-0">{{ info.author }}</p>
                            <p class="m-0 fw-bold mb-4">{{ info.year }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>