<template>
    <div class="container">
        <h1>List user (The right way)</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td><a href="" @click.prevent="showuser(user.id)">{{ user.name }}</a></td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: [],
        };
    },
    mounted() {
        this.getUsers()
    },
    methods: {
        getUsers() {
            axios.get("/api/users").then((response) => {
                // console.log(response);
                this.users = response.data;
            });
        },
        profile (id) {
            return "/users/" + id;
        },
        showuser (id) {
            this.$router.push({
                name: "Profile",
                params: { id },
            });
        },
    }
};
</script>
