<div>
    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">
        @foreach ($posts as $post)
          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">{{$post->category->name}}</p>
              <h2 class="title">
                <a href="blog-details.html">{{$post->title}}</a>
              </h2>
              <p>{{Str::limit($post->body,100)}}</p>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">{{$post->user->name}}</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">{{$post->updated_at->format('M d Y');}}</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->
        @endforeach
        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">
      <div class="container">
        {{$posts->links('pagination::bootstrap-5')}}
      </div>

    </section><!-- /Blog Pagination Section -->
</div>
