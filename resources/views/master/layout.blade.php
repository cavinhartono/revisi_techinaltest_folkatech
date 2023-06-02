<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@stack('title')</title>
</head>

<body>
  <div class="container">
    <header class="header">
      <div class="action">
        <div class="field">
          <form class="input flex between">
            <input type="text" placeholder="Cari produk" />
            <button class="btn primary">
              <span class="icon">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11 4C7.13401 4 4 7.13401 4 11C4 14.866 7.13401 18 11 18C14.866 18 18 14.866 18 11C18 7.13401 14.866 4 11 4ZM2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 15.9706 15.9706 20 11 20C6.02944 20 2 15.9706 2 11Z" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9429 15.9429C16.3334 15.5524 16.9666 15.5524 17.3571 15.9429L21.7071 20.2929C22.0977 20.6834 22.0977 21.3166 21.7071 21.7071C21.3166 22.0976 20.6834 22.0976 20.2929 21.7071L15.9429 17.3571C15.5524 16.9666 15.5524 16.3334 15.9429 15.9429Z" fill="white" />
                </svg>
              </span>
            </button>
          </form>
        </div>
        <a href="#" class="link"></a>
        <a href="#" class="link"></a>
        <ul class="profile">
          <li class="list" style="text-transform: capitalize;">
            {{ Auth::user()->name }}
          </li>
          <li class="list">
            <a href="/logout" class="link">
              <span class="icon"></span>
              <span class="label">Keluar</span>
            </a>
          </li>
        </ul>
      </div>
      <nav class="navbar">
        <button class="btn primary">
          <span class="label">BELANJA</span>
          <span class="icon">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.277 14.7522L8.45062 10.5007C8.27687 10.3076 8.41388 10 8.67361 10H16.3264C16.5861 10 16.7231 10.3076 16.5494 10.5007L12.723 14.7522C12.6038 14.8846 12.3962 14.8846 12.277 14.7522Z" fill="#696969" />
            </svg>
          </span>
        </button>
      </nav>
    </header>
    @yield('content')
  </div>
</body>

</html>