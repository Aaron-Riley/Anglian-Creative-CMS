{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
    <div class="container">
    <div class="d-flex justify-content-start">
    <h1 class="d-flex align-items-center mt-3">
            <a href="index.php?p=profile" class="text-decoration-none text-white">
            <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
            Profile
        </a>
        </h1>
    </div>

    <div id="profile" class="row mt-3 mb-5 text-white">
    <div class="col-lg-6">
    {if $company_data.company_url}
        <img src="{$company_data.company_url}" class="mb-3" alt="Responsive image">
    {else}
        <img src="./images/logo-social.png" class="mb-3" alt="Responsive image">
    {/if}
        <h3>{$company_data.company_name}</h3>
    </div>
    <div class="container">
    <a href="index.php?p=changepassword" class="btn btn-primary">Change Password</a>
    <a href="index.php?p=editprofile" class="btn btn-secondary">Edit Profile</a>
    </div>
    </div>
    <form action="" method="post" class="form-light text-white" enctype="multipart/form-data">
        <div class="form-group mb-3">
        <label for="user_name">Change company name</label>
        <input type="text" class="form-control" id="user_company" value="Anglian Creative" name="company">
    </div>
        <div class="form-group">
            <label for="user_profile">Change company picture</label>
            <input type="file" class="form-control-file mt-3" value="f82485933c273937127_251040530556837_7131760453107023571_n.jpg" id="user_profile" name="companyUrl">
        </div>

        <input type="hidden" name="token" value="" name="old_profileUrl">
        <input type="hidden" name="token" value="" name="old_companyUrl">
        <button type="submit" name="changeProfile" class="btn btn-primary mt-3 mb-5">Change details</button>
    </form>
  </div>
{/block}