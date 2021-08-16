<template>
    <div>
        <!-- <section v-if="$route.params.name">
            <h1>User {{ $route.params.name }}</h1>
        </section> -->
        <section v-if="id">
            <h1>Helo {{ detailUser.name }}.</h1>
            <router-link to="/user">Kembali</router-link>
        </section>

        <section v-else>
            <h1>Data User</h1>

            <ul>
                <li v-for="user in users" :key="user.id">
                    <router-link :to="profile_uri(user.id)">{{
                        user.name
                    }}</router-link>
                    ***
                    <a href="" @click.prevent="lihatuser(user.id)">detail</a>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            users: [],
            detailUser: {}
        };
    },
    watch: {
        $route: "getUsers"
    },
    mounted() {
        this.getUsers();
        // axios.get("/api/users").then(response => {
        //     this.users = response.data;
        //     console.log(this.users);
        // });

        // without library axios
        // fetch("/api/users")
        //     .then(response => response.json())
        //     .then(data => {
        //         this.users = data
        //     });
    },
    methods: {
        getUsers() {
            axios.get("/api/users").then(response => {
                console.log(response);
                this.users = response.data;

                if (this.id) {
                    // jika props ada
                    this.detailUser = this.users.filter(
                        item => item.id == this.id
                    )[0];
                }
            });
        },
        profile_uri(id) {
            return "/user/" + id;
        },
        lihatuser(id) {
            // this.$router.push("/user/" + name.toLowerCase());
            this.$router.push({
                name: "User",
                params: { id: id }
            });
        }
    }
};
</script>
