@extends('admin.admin')
@section('content')
<x-menuadmin menu="observatory"/>
<section class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create New Observatory</h6>
                    <form action="observatory"  class="form-floating" method="post" enctype="multipart/form-data">
                    @foreach($edito as $edito)
                        <div class="mb-3">
                            <label for="nameo" class="form-label">OBSERVATORY NAME: </label>
                            <input type="text"  id="nameo" name="nameo" class="form-control" value = "{{$edito->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="instruments" class="form-label">INSTRUMENTS: </label>
                            <input type="text" id="instruments" name="instruments" class="form-control" value = "{{$edito->instruments}}">
                        </div> 
                        <div class="mb-3">
                            <label for="altitude" class="form-label">ALTITUDE: </label>
                            <input type="text" id="altitude" name="altitude" class="form-control" value = "{{$edito->altitude}}">
                        </div>        
                        <div class="mb-3">
                            <label for="type" class="form-label">TYPE: </label>
                            <input type="text" id="type" name="type" class="form-control" value = "{{$edito->type}}">
                        </div>        
                        <div class="mb-3">
                            <label for="description" class="form-label">DESCRIPTION SOURCE: </label>
                            <input type="text" id="description" name="description" class="form-control" value ="{{$edito->descriptionsource}}">
                        </div>
                        <div class="mb-3">
                            <label for="lat" class="form-label">LAT: </label>    
                            <input type="text" id="lat" name="lat" class="form-control" value = "{{Str::limit($edito->lng, 7)}}">
                        </div>
                        <div class="mb-3">
                            <label for="long" class="form-label">LONG: </label>    
                            <input type="text" id="long" name="long" class="form-control" value="{{Str::limit($edito->lat, 7)}}">
                        </div>
                    @endforeach
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection