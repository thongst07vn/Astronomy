@extends('admin.admin')
@section('content')
<x-menuadmin menu="table"/>
<section class="content">
        <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">User Table</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Avatar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td><img src="{{asset($user->avatar)}}" alt="" style="width: 50px; height: 50px; object-fit: cover;"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Blog Table&nbsp&nbsp<a href="/admin/form" class="fromblog"><i class="fa fa-light fa-circle-plus"></i></a></h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Head Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Image Title</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($blog as $blog)
                            <tr>
                                <td>{{$blog->headtitle}}</td>
                                <td>{!!html_entity_decode(Str::limit($blog->summary, 50))!!}</td>
                                <td><img src="{{asset($blog -> imgtitle)}}" alt="" style="width: 106px; height: 65px; object-fit: cover;"></td>
                                <td><a class="fromblog" href="/admin/form/{{$blog->id}}"><i class="fa fa-light fa-file-pen"></i></a></td>
                                <td><a class="fromblog" href="/admin/delete/{{$blog->id}}"><i class="fa-regular fa-trash-can"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Observatory Table&nbsp&nbsp<a href="/admin/observatory" class="fromblog"><i class="fa fa-light fa-circle-plus"></i></a></h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Observatory Name</th>
                                <th scope="col">Instruments</th>
                                <th scope="col">Altitude</th>
                                <th scope="col">Tyoe</th>
                                <th scope="col">Description Source</th>
                                <th scope="col">Location</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($observatory as $observatory)
                            <tr>
                                <td>{{$observatory->name}}</td>
                                <td>{{$observatory->instruments}}</td>
                                <td>{{$observatory->altitude}}</td>
                                <td>{{$observatory->type}}</td>
                                <td>{{$observatory->descriptionsource}}</td>
                                <td>{{Str::limit($observatory->lng, 7)}} : {{Str::limit($observatory->lat, 7)}}</td>
                                <td><a class="fromblog" href="/admin/delete/observatory/{{$observatory->id}}"><i class="fa-regular fa-trash-can"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Constellation Table</h6>
                    <table class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Abbrevitation</th>
                                <th scope="col">Constellar name</th>
                                <th scope="col">Symbolize</th>
                                <th scope="col">Aceage</th>
                                <th scope="col">Discovered By</th>
                                <th scope="col">Discovered Date</th>
                                <th scope="col">Image</th>
                                <th scope="col">History</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($constellar as $constellar)
                            <tr>
                                <td>{{$constellar->abbr}}</td>
                                <td>{{$constellar->name}}</td>
                                <td>{{$constellar->symbolize}}</td>
                                <td>{{$constellar->acreage}}</td>
                                <td>{{$constellar->discovered_by}}</td>
                                <td>{{$constellar->discovered_date}}</td>
                                <td><img src="{{asset($constellar -> linkspic)}}" alt="" style="width: 106px; height: 65px; object-fit: cover;"></td>
                                <td>{!!html_entity_decode(Str::limit($constellar->history, 50))!!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Zodiac Table</h6>
                    <table class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Zodiac name</th>
                                <th scope="col">Unicode Character</th>
                                <th scope="col">Gloss</th>
                                <th scope="col">Period</th>
                                <th scope="col">Zodiac Element</th>
                                <th scope="col">Image</th>
                                <th scope="col">History</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($zodiac as $zodiac)
                            <tr>
                                <td>{{$zodiac->name}}</td>
                                <td>{{$zodiac->unicode_character}}</td>
                                <td>{{$zodiac->gloss}}</td>
                                <td>{{$zodiac->period}}</td>
                                <td>{{$zodiac->zodiac_element}}</td>
                                <td><img src="{{asset($zodiac -> linkspic)}}" alt="" style="width: 106px; height: 65px; object-fit: cover;"></td>
                                <td>{!!html_entity_decode(Str::limit($zodiac->history, 50))!!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Zodiac Table</h6>
                    <table class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Planet Name</th>
                                <th scope="col">Discovered Date</th>
                                <th scope="col">Atmosphere</th>
                                <th scope="col">Diameter</th>
                                <th scope="col">Distance From Sun</th>
                                <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($planets as $planet)
                            <tr>
                                <td>{{$planet['name']}}</td>
                                <td>{{$planet['discovered_date']}}</td>
                                <td>{{$planet['atmosphere']}}</td>
                                <td>{{$planet['diameter']}}</td>
                                <td>{{$planet['distanceFromParent']}}</td>
                                <td><img src="{{asset($planet['linkspic'])}}" alt="" style="width: 106px; height: 65px; object-fit: cover;"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection