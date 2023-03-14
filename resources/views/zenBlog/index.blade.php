<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title','United State Celebrities')</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta name="description"  content="@yield('page_description','United State Celebrities')">
  <meta name="keywords"  content="@yield('page_keywords','united-state, celebrities')">

   @include('zenBlog.layout.head')

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- =======NAV Header ======= -->
  @include('zenBlog.layout.nav-header')

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
     @include('zenBlog.components.main-page-slider')

    <!-- ======= Post Grid Section ======= -->
     @include('zenBlog.components.posts.main-post')

  <!-- =======  Category Section ======= -->
    @include('zenBlog.components.categoryPost.category-post')


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('zenBlog.layout.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--- JS files  -->
  @include('zenBlog.layout.js')
  @stack('category-js')

</body>

</html>