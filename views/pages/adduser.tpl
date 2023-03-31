{extends file="layouts/main.tpl"}
{block name="body"}
  
  <div class="content">
  
    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
        <a href="/agcms/user" class="text-decoration-none text-white">
          <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
          </svg>
          Users
        </a>
      </h1>
      <h1 class="d-flex align-items-center mt-3 mx-3">
        -
      </h1>
      <h1 class="d-flex align-items-center mt-3">
        <a href="#" class="text-decoration-none text-white">Add New User</a>
      </h1>
    </div>

    
    <form method="POST" enctype="multipart/form-data">
    {if isset($error)}
      <div class="alert alert-danger" role="alert">
          {$error}
      </div>
  {/if}
  
  {if isset($success)}
      <div class="alert alert-success" role="alert">
          {$success}
      </div>
  {/if}
        <div class="container">
          <h3 class="mt-5 d-flex align-items-center text-white">Name</h3>
          <input type="text" class="form-control d-flex align-items-center" name="name" id="name" placeholder="Name">
          <h3 class="mt-5 d-flex align-items-center text-white">Email</h3>
          <input type="email" class="form-control d-flex align-items-center" name="email" id="email" placeholder="Email">
          <h3 class="mt-5 d-flex align-items-center text-white">Password</h3>
          <input type="password" class="form-control d-flex align-items-center" name="password" id="password" placeholder="Password">
          <h3 class="mt-5 d-flex align-items-center text-white">Confirm Password</h3>
          <input type="password" class="form-control d-flex align-items-center" name="password_confirm" id="password_confirm" placeholder="Repeat Password">
          <div class="container">
          <h3 class="mt-5 d-flex align-items-center text-white">Featured Image</h3>
          <div class="form-group">
          <input type="file" class="form-control-file mt-3" value="f82485933c273937127_251040530556837_7131760453107023571_n.jpg" id="user_url" name="user_url">
          </div>  
          <h3 class="mt-5 d-flex align-items-center text-white">Role</h3>
     

          <select name="role">
            <option value="Global Administrator">Global Administrator</option>
            <option value="Developer">Developer</option>
            <option value="Creator">Creator</option>
          </select>

          <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary mt-5" name="addUser">Submit</button>
          </div>
        </div>
    </form>

{/block}