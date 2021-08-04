<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About page</title>
</head>

<body>

    <div id="app">
        <example-component></example-component>


        <h1>@{{ greet }}</h1>

        <p v-once>@{{ email }}</p>

        {{-- same --}}
        <p v-text="email"></p>
        <p>@{{ email }}</p>

        <input v-model="email" :class="[email.length < 2 ? 'red' : 'green']">

        <br><br>

        <input v-model="count">

        <br><br>

        <div v-if="count == 1">
            count oke
        </div>
        <div v-else-if="count == 2">
            count not oke
        </div>
        <div v-else>
            else
        </div>

        <div v-show="count == 2">
            show data
        </div>

        <button onclick="alert('ok')" v-bind:disabled="count > 2">Submit</button>

        <br><br>

        <input v-model="newColor">
        <button v-on:click="addColor">add</button>

        <ul>
            <li v-for="color in colors">@{{ color . name }}</li>
        </ul>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                greet: "helo",
                email: "once@static.com",
                count: 2,
                newColor: '',
                colors: [{
                        name: "black"
                    },
                    {
                        name: "red"
                    },
                    {
                        name: "silver"
                    },
                    {
                        name: "blue"
                    },
                    {
                        name: "dark"
                    }
                ]
            },
            methods: {
                addColor: function() {
                    return this.colors.push({
                        name: this.newColor
                    })
                }
            },
        })
    </script>
</body>

</html>
