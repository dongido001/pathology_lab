

    <div class="container">

      <form class="login-form" action="process" method = "POST">      
  
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
          <!-- error display-->
            <?php if( isset($message) ): ?>
            <div >
              <div role="alert" class="alert alert-danger"> <strong>Error</strong> <?= $message?> </div>
            </div>
           <?php endif; ?>
        <!-- END error display -->    
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus id="username">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
           <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label> -->
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
          <!--  <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
        </div>
      </form>

    </div>
