{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
        <svg
        class="mr-3"
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        viewBox="0 0 512 512"
      >
        <path
          d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z"
        />
      </svg>
        Projects
      </h1>
  </div>
  <div class="container mt-4">
    <a href="/agcms/addproject">
      <button type="button" class="btn btn-primary px-3">Add</button>
    </a>
  </div>
  <div class="container">
    <div class="row mb-2 mt-3">
    {foreach from=$projects item=project}
      <div class="col-md-6">
      <a style="text-decoration: none;" href="/agcms/editprojects/{$project.project_id}">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
      <h3 class="mb-0">
      {$project.title}
      </h3>
      <div class="mb-1 text-muted">{$project.created_on}</div>
      <div class="card-text mb-auto text-dark restriction">{$project.content}</div>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" src="{$project.image_url}" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
      </div>
      </a>
      </div>
    {/foreach}
    </div>
  </div>
  </div>
 

{/block}