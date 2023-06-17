@extends('admin.admin')
@section('content')
<x-menuadmin menu="form"/>
<section class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create New Article</h6>
                    <form  class="form-floating" method="get">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="floatingTextarea" style="height: 150px;">
                        </textarea>
                        <script>
                            CKEDITOR.replace('floatingTextarea');
                        </script>
                        <br>
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection