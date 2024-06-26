{extends file="layouts/main.tpl"}
{block name="body"}
  <div class="content">
    <div class="container">
      <div class="d-flex justify-content-start">
        <h1 class="d-flex align-items-center mt-3">
          <a href="/agcms/profile" class="text-decoration-none text-white">
            <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path
                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
            </svg>
            Profile
          </a>
        </h1>
      </div>

      <div id="profile" class="row mt-3 mb-5 text-white">
        <div class="col-lg-6">
         {if $user_data.user_url}
            <img src="{$user_data.user_url}" class="mb-3" alt="Responsive image">
        {else}
            <img src="/agcms/images/placeholder.png" class="mb-3" alt="Responsive image">
        {/if}
          <h3>{$user_data.user_name}</h3>
          <p>{$user_data.user_role}</p>
        </div>
        <div class="col-lg-6">
      
        </div>
        <div class="container">
          <a href="/agcms/changepassword" class="btn btn-primary">Change Password</a>
          <a href="/agcms/editprofile" class="btn btn-secondary">Edit Profile</a>
          <a href="/agcms/editcompany" class="btn btn-secondary">Edit Company</a>

        </div>
      </div>
{/block}