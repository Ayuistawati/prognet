<template>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form @submit.prevent="login">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input v-model="form.email" type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input v-model="form.password" type="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="device_name">Device Name</label>
                            <input v-model="form.device_name" type="text" id="device_name" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
                password: '',
                device_name: '',
            },
        };
    },
    methods: {
        login() {
            redaxios.post('/api/auth/login', this.form)
                .then(response => {
                    // Handle success response
                    console.log(response.data);
                })
                .catch(error => {
                    // Handle error response
                    console.error(error.response.data);
                });
        },
    },
};
</script>

<style scoped>
/* Add your component styles here if needed */
</style>
