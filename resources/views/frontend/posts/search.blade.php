@include('frontend.components.header')

    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url({{url('/')}}/frontend/assets/img/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Kết quả tìm kiếm</h1>
        <p class="lead text-center">Đây là những công việc mới nhất phù hợp với nhu cầu tìm kiếm của bạn!</p>
      </div>

      

    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row item-blocks-condensed">
          <div class="col-xs-12">
              <br>
              <h5>Đây là kết quả tìm kiếm với từ khóa của bạn!</h5>
            </div>
            


            <?php foreach($listPosts as $post) { ?>
            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="/detail/<?php echo $post->id; ?>">
                <header>
                  <img src="{{url('/')}}/frontend/assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4><?php  echo $post->title; ?></h4>
                    <h5>Google</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Menlo park, CA</span>
                    <span class="label label-success">Full-time</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->
            <?php }?>


          </div>

{{ $listPosts->appends(request()->query())->links() }}
          <!-- Page navigation -->
          <nav class="text-center">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <i class="ti-angle-left"></i>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <i class="ti-angle-right"></i>
                </a>
              </li>
            </ul>
          </nav>
          <!-- END Page navigation -->


        </div>
      </section>
    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    @include('frontend.components.footer')