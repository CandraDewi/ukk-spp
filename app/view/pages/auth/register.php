<!-- Nested Row within Card Body -->
<div class="row">
<div class="col-lg-6 d-none d-lg-block" style="padding-top: 0px;">
        <img src="<?= BASE_URL ?>/assets/img/login.jpg" width="100%">
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create New Account</h1>
            </div>
            <div class="my-3">
            </div>
            <form class="user" action="<?= BASE_URL ?>/register/process" method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="name" name="nama"
                        placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="username" name="username"
                        placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password"
                        id="password" placeholder="Enter Password" required>
                </div>
                <!-- <div class="form-group">
                    <input type="confirm_password" name="confirm_password" class="form-control form-control-user"
                        id="confirm_password" placeholder="Enter Confirmation Password">
                </div> -->
                <button type="submit" class="btn btn-dark btn-user btn-block">
                    Register
                </button>
                <div class="mt-2">
                    <span style="font-size: 14px;">Already have an account? <a href="<?= BASE_URL ?>/login">Sign In Now!</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
                    