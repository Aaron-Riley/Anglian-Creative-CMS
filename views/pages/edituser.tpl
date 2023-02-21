{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
            
    <div class="d-flex justify-content-start">
        <h1 class="d-flex align-items-center mt-3">
            <a href="index.php?p=user" class="text-decoration-none text-white">
            <svg class="mr-3"
            height="20"
            width="20"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
          Users
          </a>
        </h1>
        <h1 class="d-flex align-items-center mt-3 mx-3">
            -
        </h1>
        <h1 class="d-flex align-items-center mt-3">
            <a href="#" class="text-decoration-none text-white">Edit User</a>
        </h1>
    </div>
    <div class="container">
        <h3 class="mt-5 d-flex align-items-center">Featured Image</h3>
        <input type="file" class="form-control d-flex align-items-center">
        <div class="container">
            <h3 class="mt-5 d-flex align-items-center">Name</h3>
            <input type="text" class="form-control d-flex align-items-center" placeholder="Name">
            <h3 class="mt-5 d-flex align-items-center">Role</h3>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Role
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Global Administrator</a></li>
                  <li><a class="dropdown-item" href="#">Developer</a></li>
                  <li><a class="dropdown-item" href="#">Creator</a></li>
                </ul>
              </div>
              <h3 class="mt-5 d-flex align-items-center">Staus</h3>
              <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Status
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Inactive</a></li>
                    <li><a class="dropdown-item" href="#">Suspended</a></li>
                  </ul>
                </div>
        <div class="d-flex justify-content-start">
                <button type="button" class="btn btn-primary mt-5">Submit</button>
        </div>

{/block}