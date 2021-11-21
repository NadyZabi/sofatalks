<x-layout>
  <header class="container-flex header-img">
    <div class="col-8 offset-2 text-center text-white">
      <h1 class="pt-5 fw-bolder fs-title">Welcome to SofaTalks club</h1>
      <p class="fs-4 py-4">SofaTalks is an English zoom chat room where we discuss different topics of today's society. We want to hear your opinion!</p>
      @guest
      <a href="{{route('login')}}" class="fs-5 mx-3 mt-5 btn white bg-acc">Log in</a>
      <a href="{{route('register')}}" class="fs-5 mx-3 mt-5 btn white bg-acc">Sign up</a>
      
      @endguest
      
      
    </div>
    
    
  </header>
  <main>
    <div class="row mx-auto my-3">
      <div class="col-12 col-md-6">
        <div class="container-fluid">
          <div class="calendar" id="calendar-app">
            <div class="calendar--view" id="calendar-view">
              <div class="cview__month">
                <span class="cview__month-last" id="calendar-month-last"></span>
                <span class="cview__month-current" id="calendar-month"></span>
                <span class="cview__month-next" id="calendar-month-next"></span>
              </div>
              <div class="cview__header">Sun</div>
              <div class="cview__header">Mon</div>
              <div class="cview__header">Tue</div>
              <div class="cview__header">Wed</div>
              <div class="cview__header">Thu</div>
              <div class="cview__header">Fri</div>
              <div class="cview__header">Sat</div>
              <div class="calendar--view" id="dates">
              </div>
            </div>
            <div class="footer">
              <span><span id="footer-date" class="footer__link">Go to today</span></span>    
            </div>
          </div>
          
        </div>
      </div>
      <div class="col-12 col-md-5 mt-5">
        <h4 class="text-center">Pick your favourite topic for our next discussion</h4>
        <div class="card my-3 shadow">
          <div class="card-body">
            <label class="form-check-label" for="votingRadio1">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </label>
            <input nam type="radio" class="form-check-input" name="votingRadio" id="votingRadio1">
          </div>
        </div>
        <div class="card my-3 shadow">
          <div class="card-body">
            <label class="form-check-label" for="votingRadio2">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </label>
            <input nam type="radio" class="form-check-input" name="votingRadio" id="votingRadio2">
          </div>
        </div>
        <div class="card my-3 shadow">
          <div class="card-body">
            <label class="form-check-label" for="votingRadio3">
              
              <h5 class="card-title">Card title</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </label>
            <input nam type="radio" class="form-check-input" name="votingRadio" id="votingRadio3">
          </div>
        </div>
      </div>
    </div>
    
  </main>
  
  
</x-layout>