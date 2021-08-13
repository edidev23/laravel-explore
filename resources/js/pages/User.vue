<template>
    <div>
        <!-- <section v-if="$route.params.name">
            <h1>User {{ $route.params.name }}</h1>
        </section> -->
        <section v-if="name">
            <h1>Helo {{ name }}.</h1>
            <router-link to="/user">Kembali</router-link>
        </section>

        <section v-else>
            <h1>Data User</h1>

            <ul>
                <li v-for="user in users" :key="user.id">
                    <router-link :to="profile_uri(user.name)">{{
                        user.name
                    }}</router-link>
                    ***
                    <a href="" @click.prevent="lihatuser(user.name)">detail</a>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
export default {
    props: ["name"],
    data() {
        return {
            users: []
        };
    },
    methods: {
        profile_uri(name) {
            return "/user/" + name.toLowerCase();
        },
        lihatuser(name) {
            // this.$router.push("/user/" + name.toLowerCase());
            this.$router.push({
                name: "User",
                params: { name: name.toLowerCase() }
            });
        }
    },
    mounted() {
        axios.get('api/users').then((response) => {
            console.log(response)
            this.users = response.data
        })

        // without library axios
        // fetch("api/users")
        //     .then(response => response.json())
        //     .then(data => {
        //         this.users = data
        //     });
    }
};
</script>
