@extends('front.layout.master')

@section('title', 'Blog')

@section('body')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-seciton">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href=""><i class="fa fa-home"></i>Trang chủ</a>
          <span>Tin tức</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<div class="blog-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Tin Tức</h2>
        </div>
      </div>
      @foreach($blogs as $blog)
      <div class="col-lg-4 col-md-6">
        <div class="single-latest-blog">
          <a class="scale-img" href="#"><img src="front/img/blog/{{ $blog->image }}" alt=""></a>
          <div class="latest-text">
            <a class="text-split2" href="#">
              <h4>{{ $blog->title }}</h4>
            </a>
            <div class="tag-list">
              <div class="tag-item">
                <i class="fa-solid fa-calendar-days"></i>
                {{ date('m/d/Y', strtotime($blog->created_at )) }}
              </div>
            </div>
            <p class="text-split3"> {{ $blog->subtitle }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</div>
<!-- Blog Section End -->

@endsection