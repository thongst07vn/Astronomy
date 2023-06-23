@extends('admin.admin')
@section('content')
<x-menuadmin menu="form"/>
<section class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create New Article</h6>
                    <form action="form"  class="form-floating" method="post" enctype="multipart/form-data">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="floatingTextarea" style="height: 150px;">
                            <h1>Insert Head Title</h1>
                            <p>This Is Your Content</p>
                        </textarea>
                        <script>
                            CKEDITOR.replace('floatingTextarea');
                        </script>
                        <br/>
                        <p>Choose artical picture here:</p>
                        <img style ="width: 533px; height: 325px; object-fit: cover;" src="{{ asset(Session::get('imgtitle')) }}" alt="#">
                        <img style ="width: 533px; height: 325px; object-fit: cover;" src="{{ asset('storage/imgtitle/noimg.jpg') }}" alt="#">
                        <hr/>
                        <input type="file" name="imgtitle" id="imgtitle">
                        <hr/>
                        <button type="submit">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection