<!doctype html>
<html>

<head>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet" href="{{asset('css/common.css')}}">
  <link rel="stylesheet" href="{{asset('css/tournament.css')}}">
  <title>VCOM :: FIRST</title>
  <link rel="icon" type="image/png" href="images/logo_head.png"/>
</head>

<body>
  <div id="container">
    <nav>
      <a href="index" id="logo"><img src="{{asset('images/Лого.svg')}}"></a>

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
        <a href="index"><img src="{{asset('images/Текст лого.svg')}}"></a>
      </ul>
    </nav>
    <div id="info">
      <img src="{{asset($tournament->tournament_img)}}">
      <div class="info">
        <div class="text">
          <div class="main_tour_text">
            <p>
              {{$tournament->tournament_name}}
            </p>
            <p>
              {{$tournament->tournament_desc1}}<br><br>{{$tournament->tournament_desc2}}
            </p>
          </div>
          <div class="add_tour_text">
            <div>
              <p>
                Дати:
              </p>
              <p>
                {{$tournament->tournament_date}}
              </p>
            </div>
            <div>
              <p>
                Призовий фонд:
              </p>
              <p>
                {{$tournament->tournament_pricepool}} грн
              </p>
            </div>
            <div>
              <p>
                Ранги:
              </p>
              <p>
                {{$tournament->tournament_rank1}}{{$tournament->tournament_rank2}}
              </p>
            </div>
          </div>
        </div>
        <div class="buttons">
          <a href="https://www.twitch.tv/vcomm_ua" target="_blank">
            Трансляція
          </a>
          <a href="https://discord.com/invite/vcom" target="_blank">
            Дискорд
          </a>
        </div>
      </div>
    </div>
    <?php $games=$tournament->games?>
    <div id="mobile_panels">
      <div>
        <img src="{{asset('images/Group 48.svg')}}">
        <p>
          Переможці турніру:
        </p>
        <p>
          1 місце: {{$games[13]->team1_name}}<br>2 місце: {{$games[13]->team2_name}}<br>3 місце: {{$games[12]->team2_name}}
        </p>
      </div>
      <div>
        <img src="{{asset('images/Group 49.svg')}}">
        <p>
          Детальна інформація щодо сітки не відображається на мобільних девайсах
        </p>
      </div>
    </div>
    <div id="bracket">
      <div id="upper_bracket">
        <div id="quater_fin">
          <p>
            Четверть-фінал
          </p>
          <div class="cell">
              {{$games[0]->team1_name}}
            <span></span>
              {{$games[0]->team2_name}}
          </div>
          <div class="cell">
              {{$games[1]->team1_name}}
            <span></span>
              {{$games[1]->team2_name}}
          </div>
          <div class="cell">
              {{$games[2]->team1_name}}
            <span></span>
              {{$games[2]->team2_name}}
          </div>
          <div class="cell">
              {{$games[3]->team1_name}}
            <span></span>
              {{$games[3]->team2_name}}
          </div>
        </div>
        <div id="up_lines1">
          <div class="two_lines">
            <div class="line_down">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="line_up">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="two_lines">
            <div class="line_down">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="line_up">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div id="half_fin">
          <p>
            Напів-фінал
          </p>
          <div class="cell">
              {{$games[6]->team1_name}}
            <span></span>
              {{$games[6]->team2_name}}
          </div>
          <div class="cell">
              {{$games[7]->team1_name}}
            <span></span>
              {{$games[7]->team2_name}}
          </div>
        </div>
        <div id="up_lines2">
          <div class="bigger_lines">
            <div class="bigger_down_line">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="bigger_up_line">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div id="upper_fin">
          <p>
            Верхній фінал
          </p>
          <div class="cell">
              {{$games[10]->team1_name}}
            <span></span>
              {{$games[10]->team2_name}}
          </div>
        </div>
        <div id="grand_fin">
          <p>
            Гранд фінал
          </p>
          <div class="fin_cell">
            <div>
              <a>
                {{$games[13]->team1_name}}
              </a>
            </div>
            <div>
              <a>
                {{$games[13]->team2_name}}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="bottom_bracket">
        <div id="bot_br_1">
          <p>
            Нижня сітка 1
          </p>
          <div class="cell">
              {{$games[4]->team1_name}}
            <span></span>
              {{$games[4]->team2_name}}
          </div>
          <div class="cell">
              {{$games[5]->team1_name}}
            <span></span>
              {{$games[5]->team2_name}}
          </div>
        </div>
        <div id="bot_lines1">
          <div class="two_up_lines">
            <div class="line_up">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="line_up">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div id="bot_br_2">
          <p>
            Нижня сітка 2
          </p>
          <div class="cell">
              {{$games[8]->team1_name}}
            <span></span>
              {{$games[8]->team2_name}}
          </div>
          <div class="cell">
              {{$games[9]->team1_name}}
            <span></span>
              {{$games[9]->team2_name}}
          </div>
        </div>
        <div id="bot_lines2">
          <div class="two_lines">
            <div class="line_down">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="line_up">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div id="bot_br_3">
          <p>
            Нижня сітка 3
          </p>
          <div class="cell">
              {{$games[11]->team1_name}}
            <span></span>
              {{$games[11]->team2_name}}
          </div>
        </div>
        <div id="bot_lines3">
          <div id="line">
            <div class="line_up">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div id="bot_fin">
          <p>
            Нижній фінал
          </p>
          <div class="cell">
              {{$games[12]->team1_name}}
            <span></span>
              {{$games[12]->team2_name}}
          </div>
        </div>
      </div>
    </div>
    <footer>
      <img src="{{asset('images/Текст лого.svg')}}">
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
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
  })
</script>