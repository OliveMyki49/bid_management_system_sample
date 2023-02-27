<nav class="header-bg navbar navbar-expand-lg " style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand text-white text-bold" href="/"><b>BID</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/addBid">Add Bid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              Side Data
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white text-bold" href="/addTo">Travel Order</a>
          </li>
        </ul>
      </div>
    </div>
    <img class="header-image" src=""/>
  </nav>
  
  {{-- side bar --}}
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <x-sideBar></x-sideBar>
  </div>

<style>
  /*Sample Design For Header*/
  .header-bg {
    background-color: #ffffff;
    background: linear-gradient(rgba(73, 69, 69, 0.5), rgba(39, 37, 37, 0.5)), url("https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80");
    background-repeat: no-repeat;
    background-size:     cover; 
    background-position: center center;
  }
</style>