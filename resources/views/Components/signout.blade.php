<nav class="logout">
    @vite(['resources/js/avt.js'])
    <div class="dropdown">
        <span class="dropbtn"><img src="{{asset($avt)}}"></span>
        <form action="/" method="post" enctype="multipart/form-data">
            <input id="choose-avt"type="file" name="avatar">
            <input id="submit-avt"type="submit" value="Create">
		</form>
        <div id="avatar102">
            <button type="button" id="avatar101">
            <i class="fa-solid fa-camera"></i>
            Change avatar
            </button>
        </div>
        <ul class="dropdown-content">
            <li>&nbsp</li>
            <li><a href="/welcome">Logout</a></li>
        </ul>
    </div>
</nav>
