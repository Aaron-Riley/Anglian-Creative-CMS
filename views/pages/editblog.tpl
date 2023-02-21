{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="content">
            
    <div class="d-flex justify-content-start">
        <h1 class="d-flex align-items-center mt-3">
                <a href="index.php?p=blog" class="text-decoration-none text-white">
                <svg class="mr-3"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                Blog
            </a>
            </h1>
            <h1 class="d-flex align-items-center mt-3 mx-3">
                -
            </h1>
            <h1 class="d-flex align-items-center mt-3">
                <a href="#" class="text-decoration-none text-white">Edit Blog</a>
            </h1>
        </div>
        <div class="container">
            <h3 class="mt-5 d-flex align-items-center">Title</h3>
            <input type="text" class="form-control d-flex align-items-center" placeholder="Title">
            <h3 class="mt-5 d-flex align-items-center">Content</h3>
            <div id="editor">
                <p>This is some sample content.</p>
            </div>
        </div>
        <div class="container">
            <h3 class="mt-5 d-flex align-items-center">Featured Image</h3>
            <input type="file" class="form-control d-flex align-items-center" placeholder="Title">
        <div class="d-flex justify-content-start">
            <button type="button" class="btn btn-primary mt-5 px-3 mr-3">Submit</button>
            <button type="button" class="btn btn-secondary mt-5 px-3">Delete</button>
        </div>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
{/block}