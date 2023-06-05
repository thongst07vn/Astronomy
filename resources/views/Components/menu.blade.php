<div class="topnav">
  <a @class(['active' => $menu == 'index']) href="/index">Home</a>
  <a @class(['active' => $menu == 'shop']) href="/shop">Shop</a>
  <a @class(['active' => $menu == 'about']) href="/about">About</a>
  <a @class(['active' => $menu == 'signup']) href="/signup">Signup</a>
  <form action="/action_page.php">
    <button type="submit">Signup</button>
  </form>
  <div class="login-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>

<header>
  <section>
        <a href="/"><img src="IMAGE/logo-long.png" alt="#"></a>
    </section>
    <section>
        <nav>
            <ul>
                <li><a href="home">HOME</a></li>
                <li><a href="planet">PLANET</a></li>
                <li><a href="constellation">CONSTELLATION</a></li>
                <li><a href="blog">BLOG</a></li>
                <li><a href="aboutus">ABOUT US</a></li>
            </ul>
        </nav>
    </section>

</header>
