@extends('admin.admin')
@section('content')
<x-menuadmin menu="form"/>
<section class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create New Article</h6>
                    <form action=""  class="form-floating" method="post" enctype="multipart/form-data">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="floatingTextarea" style="height: 150px;">
                            <h1>{{$headtitle}}</h1>
                            {{html_entity_decode($content)}}
                        </textarea>
                        <script>
                            CKEDITOR.replace('floatingTextarea');
                        </script>
                        <br/>
                        <p>Choose artical picture here:</p>
                        <div id="img-preview">
                            <img style ="width: 533px; height: 325px; object-fit: cover;" src="{{asset($imgtitle)}}" alt="">
                        </div>
                        <hr/>
                        <input type="file" id="imgtitle" name="imgtitle" accept="image/*"/>
                        <hr/>
                        <button type="submit">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@vite(['resources/js/admin/from.js'])
@endsection