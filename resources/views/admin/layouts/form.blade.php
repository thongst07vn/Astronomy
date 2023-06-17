@extends('admin.admin')
@section('content')
<x-menuadmin menu="form"/>
<section class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Floating Label</h6>
                    <form  class="form-floating" method="get">
                        My Editor:<br>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="floatingTextarea" style="height: 150px;">
                        </textarea>
                        <script>
                            CKEDITOR.replace('floatingTextarea');
                        </script>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection