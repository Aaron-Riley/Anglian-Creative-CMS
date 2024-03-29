{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
      <svg class="mr-3"
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
        Blog
      </h1>
  </div>
  <div class="container mt-4">
    <a href="/agcms/addblog">
      <button type="button" class="btn btn-primary px-3">Add</button>
    </a>
  </div>
  <div class="container">
    <div class="row mb-2 mt-3">
    {foreach from=$blogs item=blog}
      <div class="col-md-6">
      <a style="text-decoration: none;" href="/agcms/editblog/{$blog.blog_id}">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
      <h3 class="mb-0">
      {$blog.title}
      </h3>
      <div class="mb-1 text-muted">{$blog.created_on}</div>
      <div class="card-text mb-auto text-dark restriction">{$blog.content}</div>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" src="{$blog.image_url}" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
      </div>
      </a>
      </div>
    {/foreach}
    </div>  
  </div>
</div>

 
{/block}