@extends('layouts.app') @section('content')
<section class="engine"><a href="https://mobirise.info/m">site design templates</a></section>
<section class="mbr-section content5 cid-rlrHCqDuSG mbr-parallax-background" id="content5-21">



    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(91, 104, 107);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Reader's Blog</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    A Bible Study Reader's Blog</h3>


            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rlrJo5p80S" id="content4-23">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <div class="blog-body" id="mBlog" style="margin-top:1em;">
                    <?php
                            if($topic = App\Blog::orderBy('id', 'desc')
                                             ->take(1)->first()){
                                                 include('..\resources\views\blogFolder/'.$topic->blogname.'.blade.php');
                                                 ?>
                        <section class="mbr-section content8 cid-rlrLjz2DKJ" id="content8-29">



                            <div class="container">
                                <div class="media-container-row title">
                                    <div class="col-12 col-md-8">
                                        <div class="mbr-section-btn align-center">
                                            <!-- <a class="btn btn-secondary display-4" href="https://mobirise.co"><strong>Download .DOCX</strong></a>
                                            <a class="btn btn-warning-outline display-4" href="https://mobirise.co"><strong>Download .PDF</strong></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                                             }else{
                                                 echo "<p>No Post for now</p>";
                                             }
                                
                            ?>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection