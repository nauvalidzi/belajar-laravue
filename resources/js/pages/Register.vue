<template>
    <div class="container">
        <h1>Register</h1>
        <div class="card">
            <h5 class="card-header">Form Register</h5>
            <div class="card-body">
                <form @submit.prevent="handleSubmit">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="Your name" v-model="form.name"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" v-model="form.email"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="phone" class="form-control" id="phone" placeholder="Your phone" v-model="form.phone"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" placeholder="Your password" v-model="form.password"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-2">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
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
                phone: '',
                password: ''
            }
        }
    },
    methods: {
        handleSubmit() {
            axios.post('/api/users', this.form).then((response) => {
                const id = response.data.user.id;
                this.$router.push({
                    name: "Profile",
                    params: { id }
                })
            }).catch((error) => {
                console.log(error)
            })
        }
    }
}
</script>
