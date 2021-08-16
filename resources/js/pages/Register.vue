<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="handleSubmit" action="/users" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    v-model="form.name"
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input
                    type="text"
                    id="Email"
                    v-model="form.email"
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input
                    type="password"
                    id="Password"
                    v-model="form.password"
                    class="form-control"
                />
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</template>

<style></style>

<script>
export default {
    data() {
        return {
            form: {
                name: "",
                email: "",
                password: ""
            }
        };
    },
    methods: {
        handleSubmit() {
            // console.log(this.form);
            axios.post("/users", form).then(res => {
                console.log(res);
            });
        }
    }
};
</script>
