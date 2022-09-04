<template>
    <div v-if="username">
        <h1>Hello {{ username }}.</h1>
        <p>Back to <router-link :to="{ name: 'User' }">Users</router-link></p>
    </div>
    <div v-else>
        <h1>List user</h1>
        <ul>
            <li v-for="user in users">
                <!-- <router-link :to="profile(user.name)">{{user.name}}</router-link> -->
                <a href="" @click.prevent="showuser(user.name)">{{
                    user.name
                }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["username"],
    data() {
        return {
            users: [
                { id: 1, name: "Cristiano Ronaldo" },
                { id: 2, name: "Lionel Messi" },
                { id: 3, name: "Erling Haaland" },
                { id: 4, name: "Mesut Ozil" },
                { id: 5, name: "Karim Benzema" },
                { id: 6, name: "Toni Kroos" },
                { id: 7, name: "Luca Modric" },
                { id: 8, name: "Neymar Jr." },
                { id: 9, name: "Sergio Ramos" },
                { id: 10, name: "Gianluigi Buffon" },
            ],
        };
    },
    methods: {
        profile(name) {
            return "/user/" + name.toLowerCase();
        },
        showuser(param_name) {
            this.$router.push({
                name: "User",
                params: { username: param_name },
            });
        },
    },
};
</script>
