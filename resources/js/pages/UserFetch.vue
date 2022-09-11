<template>
    <div class="container">
        <div v-if="id">
            <h1>Hello {{ id }}.</h1>
            <p>
                Back to <router-link :to="{ name: 'UserFetch' }">Users (Fetch)</router-link>
            </p>
        </div>
        <div v-else>
            <h1>List user (Fetch Method)</h1>
            <table class="table table-bordered table-striped">
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
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            users: [],
        };
    },
    mounted() {
        fetch('/api/users')
            .then(response => response.json())
            .then(data => {
                console.log(data)
                this.users = data
            })
    },
    methods: {
        profile(id) {
            return "/user-fetch/" + id;
        },
        showuser(id) {
            this.$router.push({
                name: "UserFetch",
                params: { id },
            });
        },
    }
};
</script>
