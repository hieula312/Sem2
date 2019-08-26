<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4><b>Log In</b></h4>
                <form class="aa-login-form" action="signIn" method="post">
                    @include('alert')
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    {{csrf_field()}}
                    <label for="information">PhoneNumber or Email<span>*</span></label>
                    <input name="information" id="information" type="text" placeholder="PhoneNumber or Email">
                    <input type="hidden" name="filter" id="filter" value="0">
                    <label for="password">Password<span>*</span></label>
                    <input id="password" name="password" type="password" placeholder="Password">
                    <button id="ModalSubmit" class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="register">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>