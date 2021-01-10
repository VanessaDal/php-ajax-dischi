<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

    <div class="container">
        <div id="app" class="app" >
            <header>
                <div class="logo">BOOLFIX</div>
                <div class="right_header">
                    <input type="search">

                    <button>
                    Cerca
                    </button>
                </div>

            </header>
        
            <section>
                
                <div class="pre-containers" v-for="album in albums">
                    <div class="small-containers">
                        <img :src="album.poster">

                        <div class="info">
                            <p>{{album.title}}</p>
                            <p>{{album.author}}</p>
                            <p>{{album.year}}</p>
                        </div>
                    </div>
                </div>
            
            </section>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>