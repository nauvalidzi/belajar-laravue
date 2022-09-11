<template>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravue</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <router-link :to="{ name: 'Home' }" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'About' }" class="nav-link">About</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'User' }" class="nav-link">User</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'UserAxios' }" class="nav-link">User Axios</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'UserFetch' }" class="nav-link">User Fetch</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'Users' }" class="nav-link">Users</router-link>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <router-link :to="{ name: 'Register' }" class="nav-link px-3">REGISTER</router-link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
