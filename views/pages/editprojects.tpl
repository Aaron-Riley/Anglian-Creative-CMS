{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
        <div class="d-flex justify-content-start">
            <h1 class="d-flex align-items-center mt-3">
                <a href="/agcms/projects" class="text-decoration-none text-white">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                        <path
                            d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z" />
                    </svg>
                    Projects
                </a>
            </h1>
            <h1 class="d-flex align-items-center mt-3 mx-3">
                -
            </h1>
            <h1 class="d-flex align-items-center mt-3">
                <a href="#" class="text-decoration-none text-white">Edit Project</a>
            </h1>
        </div>
        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview" type="button"
                        role="tab" aria-controls="preview" aria-selected="true">Preview</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button"
                        role="tab" aria-controls="edit" aria-selected="false">Edit</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="preview" role="tabpanel" aria-labelledby="preview-tab">
                    <img src="{$projectData.image_url}" />
                    <div class="container">
                        <h2 class="mt-5 d-flex align-items-center">{$projectData.title}</h2>

                        <div class="text-white">{$projectData.content}</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <h3 class="mt-5 d-flex align-items-center text-white">Title</h3>
                            <input name="title" type="text" class="form-control d-flex align-items-center"
                                placeholder="Title" value="{$projectData.title}">
                            <h3 class="mt-5 d-flex align-items-center text-white">Content</h3>
                            <textarea id="editor" name="content" placeholder="Tell your story...">
                                {$projectData.content}

                                </textarea>
                        </div>
                        <div class="container">
                            <img src="{$projectData.image_url}" />
                            <h3 class="mt-5 d-flex align-items-center text-white">Featured Image</h3>
                            <input type="file" name="image" class="form-control d-flex align-items-center"
                                placeholder="Title">
                                <input type="hidden" name="old_image" value="{$projectData.image_url}">
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mt-5 px-3 mr-2"
                                    name="changeProject">Submit</button>
                                <button type="submit" class="btn btn-secondary mt-5 px-3"
                                    name="deleteProject">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{/block}