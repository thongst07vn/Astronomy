@extends('admin.admin')
@section('content')
<x-menuadmin menu="observatory"/>
<section class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create New Constellar</h6>
                    <form action="form"  class="form-floating" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="abbr" class="form-label">ABBREVIATION: </label>
                            <input type="text"  id="abbr" name="abbr" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="namec" class="form-label">CONSTELLATION NAME: </label>
                            <input type="text" id="namec" name="namec" class="form-control">
                        </div> 
                        <div class="mb-3">
                            <label for="symbolize" class="form-label">SYMBOLIZE: </label>
                            <input type="text" id="symbolize" name="symbolize" class="form-control">
                        </div>        
                        <div class="mb-3">
                            <label for="acreage" class="form-label">ACREAGE: </label>
                            <input type="text" id="acreage" name="acreage" class="form-control">
                        </div>        
                        <div class="mb-3">
                            <label for="discoveredby" class="form-label">DISCOVERED DATE: </label>
                            <input type="text" id="discoveredby" name="discoveredby" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="adiscovereddate" class="form-label">DISCOVERED BY: </label>    
                            <input type="text" id="discovereddate" name="discovereddate" class="form-control">
                        </div>
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection