{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
        <div class="d-flex justify-content-start">
            <h1 class="d-flex align-items-center mt-3">
                <a href="/agcms/projects" class="text-decoration-none text-white">
   
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20"viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                    Content
                </a>
            </h1>
            <h1 class="d-flex align-items-center mt-3 mx-3">
                -
            </h1>
            <h1 class="d-flex align-items-center mt-3">
                <a href="#" class="text-decoration-none text-white">Edit Content</a>
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
        <div class="container text-white">
          <h3 class="mt-5 d-flex align-items-center text-white">Hero Title</h3>
          <input type="text" class="form-control d-flex align-items-center" name="hero_title" id="hero_title" value="{$contentData.hero_title}">
          <h3 class="mt-5 d-flex align-items-center text-white">Hero Content</h3>
          <input type="text" class="form-control d-flex align-items-center" name="hero_content" id="hero_content" value="{$contentData.hero_content}">
          <div class="container">
          <h3 class="mt-5 d-flex align-items-center text-white">Featured Hero Image</h3>
          <div class="form-group">
          <input type="file" class="form-control-file mt-3" id="image_hero" name="image_hero">
          <input type="hidden" name="old_image_hero" value="{$contentData.hero_url}">

          </div>  
          <h3 class="mt-5 d-flex align-items-center text-white">Article Title</h3>
          <input type="text" class="form-control d-flex align-items-center" name="article_title" id="article_title" value="{$contentData.article_title}">
          <h3 class="mt-5 d-flex align-items-center text-white">Article Content</h3>
          <input type="text" class="form-control d-flex align-items-center" name="article_content" id="article_content" value="{$contentData.article_content}">

          <h3 class="mt-5 d-flex align-items-center text-white">About Title</h3>
          <input type="text" class="form-control d-flex align-items-center" name="about_title" id="about_title" value="{$contentData.about_title}">
          <h3 class="mt-5 d-flex align-items-center text-white">About Content</h3>
          <input type="text" class="form-control d-flex align-items-center" name="about_content" id="about_content" value="{$contentData.about_content}">
          <div class="container">
          <h3 class="mt-5 d-flex align-items-center text-white">About Image</h3>
          <div class="form-group">
          <input type="file" class="form-control-file mt-3" name="image_about">
          <input type="hidden" name="old_image_about" value="{$contentData.about_url}">

          </div> 
          <h3 class="mt-5 d-flex align-items-center text-white">Mission Title</h3>
          <input type="text" class="form-control d-flex align-items-center" name="mission_title" id="mission_title" value="{$contentData.mission_title}">
          <h3 class="mt-5 d-flex align-items-center text-white">Mission Content</h3>
          <input type="text" class="form-control d-flex align-items-center" name="mission_content" id="mission_content" value="{$contentData.mission_content}">
          <h3 class="mt-5 d-flex align-items-center text-white">Mission Quote</h3>
          <input type="text" class="form-control d-flex align-items-center" name="mission_quote" id="mission_quote" value="{$contentData.mission_quote}">
          <div class="container">
          <h3 class="mt-5 d-flex align-items-center text-white">Mission Image</h3>
          <div class="form-group">
          <input type="file" class="form-control-file mt-3" name="image_mission">
          <input type="hidden" name="old_image_mission" value="{$contentData.mission_url}">
          </div> 
          <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary mt-5" name="changeContent">Submit</button>
          </div>
        </div>
    </form>

{/block}