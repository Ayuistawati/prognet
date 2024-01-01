<template>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form @submit.prevent="register">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input v-model="form.name" type="text" id="name" class="form-control" required>
                        </div>
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
                        <button type="submit" class="btn btn-primary">Register</button>
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
                name: '',
                email: '',
                password: '',
                device_name: '',
            },
        };
    },
    methods: {
        register() {
            redaxios.post('/api/auth/register', this.form)
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
