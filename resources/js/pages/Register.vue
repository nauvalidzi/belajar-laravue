<template>
    <div class="container">
        <h1>Register</h1>
        <div class="card">
            <h5 class="card-header">Form Register</h5>
            <div class="card-body">
                <form action="">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="Your name"></input>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com"></input>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="phone" class="form-control" id="phone" placeholder="Your phone"></input>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" placeholder="Your password"></input>
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

}
</script>
