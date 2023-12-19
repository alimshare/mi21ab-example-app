<link rel="stylesheet" href="/css/login.css">

<div class="login-page">
  <div class="form">

    <form class="login-form" method="POST" action="/postlogin">

        @csrf

        <input type="email" name="email" placeholder="email" />

        <input type="password" name="password" placeholder="password"/>

        <button type="submit">login</button>

    </form>

  </div>
</div>