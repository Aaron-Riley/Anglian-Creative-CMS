{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
    <div class="container">
    <div class="d-flex justify-content-start">
    <h1 class="d-flex align-items-center mt-3">
    <a href="/agcms/user" class="text-decoration-none text-white">
    <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
      <path
        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
    </svg>
    Users - Edit User
    </a>
        </h1>
    </div>

    <div id="profile" class="row mt-3 mb-5 text-white">
    <div class="col-lg-6">
    {if $edit_user_data.user_url}
        <img src="{$edit_user_data.user_url}" class="mb-3" alt="Responsive image">
    {else}
        <img src="/agcms/images/placeholder.png" class="mb-3" alt="Responsive image">
    {/if}
      <h3>{$edit_user_data.user_name}</h3>
      <p>{$edit_user_data.user_role}</p>
    </div>

 
    </div>
    <form action="" method="post" class="form-light text-white" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="user_name">Change name</label>
            <input type="text" class="form-control" id="user_name" value="{$edit_user_data.user_name}" name="name">
        </div>
        <div class="form-group mb-3">
        <h3 class="mt-5 d-flex align-items-center text-white">Role</h3>
     

        <select name="role">
          <option value="Global Administrator">Global Administrator</option>
          <option value="Developer">Developer</option>
          <option value="Creator">Creator</option>
        </select>
    </div>
        <div class="form-group">
            <label for="user_profile">Change user picture</label>
            <input type="file" class="form-control-file mt-3" value="{$edit_user_data.user_url}" id="user_profile" name="profileUrl">
            <input type="hidden" name="old_image" value="{$edit_user_data.user_url}">
        </div>
        <button type="submit" name="editUser" class="btn btn-primary mt-3 mb-5">Change details</button>
        {* loop though errors *}
        {if $errors}
        <div class="alert alert-danger" role="alert">
            <ul>
                {foreach $errors as $error}
                <li>{$error}</li>
                {/foreach}
            </ul>

        </div>
        {/if}
        
    </form>
  </div>
{/block}