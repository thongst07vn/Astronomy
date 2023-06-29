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
                        <div class="mb-3">
                            <label for="nameo" class="form-label">OBSERVATORY NAME: </label>
                            <input type="text"  id="nameo" name="nameo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="instruments" class="form-label">INSTRUMENTS: </label>
                            <input type="text" id="instruments" name="instruments" class="form-control">
                        </div> 
                        <div class="mb-3">
                            <label for="altitude" class="form-label">ALTITUDE: </label>
                            <input type="text" id="altitude" name="altitude" class="form-control">
                        </div>        
                        <div class="mb-3">
                            <label for="type" class="form-label">TYPE: </label>
                            <input type="text" id="type" name="type" class="form-control">
                        </div>        
                        <div class="mb-3">
                            <label for="description" class="form-label">DESCRIPTION SOURCE: </label>
                            <input type="text" id="description" name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="lat" class="form-label">LAT: </label>    
                            <input type="text" id="lat" name="lat" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="long" class="form-label">LNG: </label>    
                            <input type="text" id="long" name="long" class="form-control">
                        </div>
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection