<template>
    <div class="container">
        <div v-if="id">
            <h1>Hello {{ detailuser.name }}.</h1>
            <p>
                Back to <router-link :to="{ name: 'UserAxios' }">Users (Axios)</router-link>
            </p>
        </div>
        <div v-else>
            <h1>List user (Axios Method)</h1>
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
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            users: [],
            detailuser: {}
        };
    },
    watch: {
        '$route': 'getUsers'
    },
    mounted() {
        this.getUsers()
    },
    methods: {
        getUsers() {
            axios.get("/api/users").then((response) => {
                // console.log(response);
                this.users = response.data;

                if (this.id) {
                    this.detailuser = this.users.filter(item => item.id == this.id)[0]
                }
            });
        },
        profile (id) {
            return "/user-axios/" + id;
        },
        showuser (id) {
            this.$router.push({
                name: "UserAxios",
                params: { id },
            });
        },
    }
};
</script>
