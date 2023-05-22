<!doctype html>
<html>

<head>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet" href="{{asset('css/common.css')}}">
  <link rel="stylesheet" href="{{asset('css/tounraments_container.css')}}">
  <title>VCOM | Tournaments</title>
  <link rel="icon" type="image/png" href="images/logo_head.png"/>
</head>

<body>
  <div id="container">
    <nav>
      <a href="index" id="logo"><img src="images/Лого.svg"></a>

      <label for="drop" class="toggle">
        <div id="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </label>
      <input type="checkbox" id="drop" />
      <ul class="menu">
        <li><a href="tournaments_container">Турніри</a></li>
        <li><a href="https://discord.com/invite/vcom" target="_blank">24/7&nbsp;Підтримка</a></li>
        <a href="index"><img src="images/Текст лого.svg"></a>
      </ul>
    </nav>

    <div id="main">
      <img src="images/Group 45.png">
      <img id="mobile_pic" src="images/R1_1.png">

      <p class="main_text">
        Вас вітає перше українське VALORANT ком`юніті!
      </p>

      <p class="add_text">
        Бажаємо вам приємної гри та гарних тіммейтів! #VCOM
      </p>

      <a class="join_button" href="https://discord.com/invite/vcom" target="_blank">
        Приєднатись
      </a>
    </div>
    <div id="chooser">
      <button class="option active" id="current">
        <div class="text">
          Активні
        </div>
        <span class="third_line"></span>
      </button>
      <button class="option" id="future">
        <div class="text">
          Майбутні
        </div>
        <span class="third_line"></span>
      </button>
      <button class="option" id="past">
        <div class="text">
          Минулі
        </div>
        <span class="third_line"></span>
      </button>
    </div>

    <div id="tournaments_list">
      <?php $tag=false?>
      @foreach($tournaments as $tournament)
      @if($tournament->tournament_state == "active")
      <?php $tag=true?>
      @endif
      @endforeach
      @if($tag)
      <div class="tournaments_list" id="current_list">
        @foreach($tournaments as $tournament)
        @if($tournament->tournament_state == "active")
          <a href="/tournament/{{$tournament->id}}" class="tournament">
            <div class="main_info">
              <img src="{{asset($tournament->tournament_img)}}">
              <div>
                <div>
                  <p>
                    {{$tournament->tournament_name}}
                  </p>
                  <p>
                    {{$tournament->tournament_date}}
                  </p>
                  <p>
                    {{$tournament->tournament_pricepool}} грн
                  </p>
                </div>
                <div>
                  <p>
                    {{$tournament->tournament_rank1}}<br>{{$tournament->tournament_rank2}}
                  </p>
                </div>
              </div>
            </div>
            <p>
            {{$tournament->tournament_desc1}}<br><br>{{$tournament->tournament_desc2}}
            </p>
            <p>
            {{$tournament->tournament_rank1}}{{$tournament->tournament_rank2}}
            </p>
          </a>
        @endif
        @endforeach
      </div>
      @endif
      @if(!$tag)
      <div class="tournaments_list empty" id="current_list">
        <div>
          <img src="images/Group 46.svg">
          <p>
            На жаль, на разі активні турніри відсутні.
          </p>
        </div>
      </div>
      @endif
      <?php $tag=false?>
      @foreach($tournaments as $tournament)
      @if($tournament->tournament_state == "future")
      <?php $tag=true?>
      @endif
      @endforeach
      @if($tag)
      <div class="tournaments_list" id="future_list">
        @foreach($tournaments as $tournament)
        @if($tournament->tournament_state == "future")
        <a href="/tournament/{{$tournament->id}}" class="tournament">
          <div class="main_info">
            <img src="{{asset($tournament->tournament_img)}}">
            <div>
              <div>
                <p>
                  {{$tournament->tournament_name}}
                </p>
                <p>
                  {{$tournament->tournament_date}}
                </p>
                <p>
                  {{$tournament->tournament_pricepool}} грн
                </p>
              </div>
              <div>
                <p>
                  {{$tournament->tournament_rank1}}<br>{{$tournament->tournament_rank2}}
                </p>
              </div>
            </div>
          </div>
          <p>
          {{$tournament->tournament_desc1}}<br><br>{{$tournament->tournament_desc2}}
          </p>
          <p>
          {{$tournament->tournament_rank1}}{{$tournament->tournament_rank2}}
          </p>
        </a>
        @endif
        @endforeach
      </div>
      @endif
      @if(!$tag)
      <div class="tournaments_list empty" id="future_list">
        <div>
          <img src="images/Group 46.svg">
          <p>
            На жаль, на разі немає запланованих турнірів.
          </p>
        </div>
      </div>
      @endif
      <?php $tag=false?>
      @foreach($tournaments as $tournament)
      @if($tournament->tournament_state == "past")
      <?php $tag=true?>
      @endif
      @endforeach
      @if($tag)
      <div class="tournaments_list" id="past_list">
        @foreach($tournaments as $tournament)
        @if($tournament->tournament_state == "past")
        <a href="/tournament/{{$tournament->id}}" class="tournament">
          <div class="main_info">
            <img src="{{asset($tournament->tournament_img)}}">
            <div>
              <div>
                <p>
                  {{$tournament->tournament_name}}
                </p>
                <p>
                  {{$tournament->tournament_date}}
                </p>
                <p>
                  {{$tournament->tournament_pricepool}} грн
                </p>
              </div>
              <div>
                <p>
                  {{$tournament->tournament_rank1}}<br>{{$tournament->tournament_rank2}}
                </p>
              </div>
            </div>
          </div>
          <p>
          {{$tournament->tournament_desc1}}<br><br>{{$tournament->tournament_desc2}}
          </p>
          <p>
          {{$tournament->tournament_rank1}}{{$tournament->tournament_rank2}}
          </p>
        </a>
        @endif
        @endforeach
      </div>
      @endif
      @if(!$tag)
      <div class="tournaments_list empty" id="past_list">
        <div>
          <img src="images/Group 46.svg">
          <p>
            На жаль, ми не провели ще ні 1 турніру.
          </p>
        </div>
      </div>
      @endif
    </div>

    <footer>
      <img src="images/Текст лого.svg">
      <p>
        Усі авторські права і торгові марки належать відповідним власникам
      </p>
      <p>
        VCOM | VALORANT COMMUNITY UA &copy; 2022-2023
      </p>
    </footer>

  </div>
</body>

<script>
  const hamburger = document.getElementById("hamburger");
  const current = document.getElementById("current");
  const future = document.getElementById("future");
  const past = document.getElementById("past");
  const current_list = document.getElementById("current_list");
  const future_list = document.getElementById("future_list");
  const past_list = document.getElementById("past_list");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
  })
  current.addEventListener("click", () => {
    current.classList.add("active");
    future.classList.remove("active");
    past.classList.remove("active");
    current_list.style.left="0%";
    future_list.style.left="100%";
    past_list.style.left="200%";
    current_list.style.position="relative";
    future_list.style.position="absolute";
    past_list.style.position="absolute";
  })
  future.addEventListener("click", () => {
    current.classList.remove("active");
    future.classList.add("active");
    past.classList.remove("active");
    current_list.style.position="absolute";
    future_list.style.position="relative";
    past_list.style.position="absolute";
    current_list.style.left="-100%";
    future_list.style.left="0%";
    past_list.style.left="100%";
  })
  past.addEventListener("click", () => {
    current.classList.remove("active");
    future.classList.remove("active");
    past.classList.add("active");
    current_list.style.position="absolute";
    future_list.style.position="absolute";
    past_list.style.position="relative";
    current_list.style.left="-200%";
    future_list.style.left="-100%";
    past_list.style.left="0%";
  })


</script>

</html>