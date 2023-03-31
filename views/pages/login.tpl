{extends file="layouts/mainlogin.tpl"}
{block name="body"}
  <div class="login-box">
        <h2>Login</h2>

        {if isset($error)}
            <div class="alert alert-danger" role="alert">
                {$error}
            </div>
        {/if} 
        
        <form action="" method="post">
          <div class="user-box">
            <input type="email" name="email" id="email">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password">
            <label>Password</label>
          </div>
          <button type="submit" name="login" value="1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
          </button>
        </form>
      </div>

{/block}