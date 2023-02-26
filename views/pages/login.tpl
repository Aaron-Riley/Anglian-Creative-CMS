{extends file="layouts/mainlogin.tpl"}
{block name="body"}
    <body id="login">
    <div class="login-box">
        <h2>Login</h2>

        {if isset($error)}
            <div class="alert alert-danger" role="alert">
                {$error}
            </div>
        {/if}
        
        <form>
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
          </div>
          <a name="login" value="1" href="index.php?p=home">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
          </a>
        </form>
      </div>

{/block}