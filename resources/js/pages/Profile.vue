<template>
    <div class="container">
        <div v-if="id">
            <h1>Profile {{ detailuser.name }}.</h1>
            <div class="card">
                <div class="card-header">Detail Information</div>
                <div class="card-body">
                    <h5 class="card-title">{{ detailuser.name }}</h5>
                    <p class="card-text">{{ detailuser.email }}</p>
                    <p class="card-text">{{ detailuser.phone }}</p>
                    <router-link :to="{ name: 'Users' }" class="btn btn-primary">Go back to Users</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            detailuser: {}
        };
    },
    mounted() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get("/api/users/" + this.id).then(response => {
                // console.log(response);
                this.detailuser = response.data;
            });
        }
    }
};
</script>
