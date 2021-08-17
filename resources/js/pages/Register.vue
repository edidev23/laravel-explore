<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    v-model="form.name"
                    class="form-control"
                />

                <span class="text-danger" v-if="errors.name">{{
                    errors.name[0]
                }}</span>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input
                    type="text"
                    id="Email"
                    v-model="form.email"
                    class="form-control"
                />

                <span class="text-danger" v-if="errors.email">{{
                    errors.email[0]
                }}</span>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input
                    type="password"
                    id="Password"
                    v-model="form.password"
                    class="form-control"
                />
                <span class="text-danger" v-if="errors.password">{{
                    errors.password[0]
                }}</span>
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
            },
            errors: {}
        };
    },
    methods: {
        handleSubmit() {
            // console.log(this.form);
            axios
                .post("/api/users", this.form)
                .then(res => {
                    console.log(res);
                    if (res.data.status) {
                        this.$noty.success(res.data.message);

                        this.$router.push({
                            name: "User"
                        });
                    }
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    console.log(this.errors);
                });
        }
    }
};
</script>
