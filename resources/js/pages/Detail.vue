<template>
    <div>
        <section v-if="id">
            <h3>Helo {{ detailUser.name }}.</h3>
            <h5>Email {{ detailUser.email }}</h5>
            <router-link to="/user">Kembali</router-link>
        </section>
    </div>
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            detailUser: {}
        };
    },
    mounted() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get("/api/users/" + this.id).then(response => {
                console.log(response);
                this.detailUser = response.data;
            });
        }
    }
};
</script>
