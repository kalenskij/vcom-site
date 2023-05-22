<!doctype html>
<html>



<head>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet" href="{{asset('css/common.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <title>VCOM | Main</title>
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
        </div></label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
          <li><a href="tournaments_container">Турніри</a></li>
          <li><a href="https://discord.com/invite/vcom" target="_blank">24/7&nbsp;Підтримка</a></li>
          <a href="index"><img src="images/Текст лого.svg"></a>
        </ul>
      </nav>

      <div id="main">

        <img src="images/Group 42.png">
        <img id="mobile_pic" src="images/Картинка.png">

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


      <div class="divider">
      </div>


      <div id="panels">

        <div>
          <div>
            <img src="images/Group 41.svg">
          </div>
          <p>
            Регулярні турніри з призами й стрімами!
          </p>
          <p>
            У нас Ви зможете проявити себе на справжніх турнірах, які транслюються у реальному часі на Twitch!
          </p>
        </div>

        <div>
          <div>
            <img src="images/Group 43.svg">
          </div>
          <p>
            Пошук тімейтів для гри, праків, турнірів!
          </p>
          <p>
            Найкраще місце для того, щоб знайти друзів для гри!
          </p>
        </div>

        <div>
          <div>
            <img src="images/Group 44.svg">
          </div>
          <p>
            Різноматітні івенти та багато іншого!
          </p>
          <p>
            На нашому сервері постійно проводяться різні інтерактивні івенти та багато активностей!
          </p>
        </div>

      </div>


      <div id="description">
        <div id="text_part">
          <div id="text">
            <div>
              <p class="main_desc_text">
                Вас вітає перше українське VALORANT ком'юніті!
              </p>
              <p class="add_desc_text">
                Бажаємо вам приємної гри та гарних тіммейтів! #VCOM
              </p>
              <p class="text_desc">
                Здебільшого наше ком'юніті націлено на
                розважальний Valorant контент для звичайного
                ком'юніті яке хоче разом гарно провести свій час. 
              </p>
              <p class="text_desc">
                Ми проводимо заходи, розважливі інтерактивні
                ігри, турніри ітд.
              </p>
              <p id="text2">
                У нас є безліч каналів та фільтрів для пошуку
                найкращої команди, з якою можна незабутньо
                провести свій час...
              </p>
            </div>
            <div id="more" class="more">
              <p class="text_desc">
                Ми працюємо та вдосконалюємось кожного дня щоб кожен зміг отримати найкращий досвід гри та розвитку у VALORANT сфері!
              </p>
              <p class="text_desc">
                І ще ми не забуваємо про ESPORT націлене ком'юніті! Як кейс досвіду: Ми вже провели 3 сезонні турніри. Та ставимо за мету розвити наших людей майже у кожній ESPORTS сфері.
              </p>
              <p class="text_desc" style="margin-bottom: 0px;">
                Ми надаємо все можливе для того щоб показатита спробувати себе удійсно і цікавій справі.
              </p>
            </div>
            <button type="button" id="more_button" onclick="toggleText()">
              Детальніше...
            </button>
          </div>
          <div id="picture">
            <img src="images/Neon.png">
            <p>
              Неон (Neon) - Офіційний символ та талісман серверу.
            </p>
          </div>
        </div>
        <div id="cta_part">
          <p>
            Тому - не гаємо часу та нумо покажемо справжній український VALORANT!
          </p>
          <a class="join_button" href="https://discord.com/invite/vcom" target="_blank">
            Приєднатись
          </a>
        </div>
      </div>
      <div id="add_info">
        <div id="tournaments_list">
          <a href="tournament/1" class="tournament one">
            <p>
              VCOM :: FIRST
            </p>
            <p>
              Наш перший тестовий турнір
            </p>
          </a>
          <a href="tournament/2" class="tournament two">
            <p>
              VCOM :: SUMMER
            </p>
            <p>
              Наш перший сезонний турнір
            </p>
          </a>
          <a href="tournament/3" class="tournament three">
            <p>
              VCOM :: LAST DASH
            </p>
            <p>
              Наш внутрішньоспільнотний турнір
            </p>
          </a>
        </div>
        <div id="search_work">
          <img src="images/Люди.svg">
          <div id="jobs_text">
            <p>
              Відкриті вакансії
            </p>
            <p>
              Хочеш стати частиною VCOM? Нижче представлені відкриті вакансії.
            </p>
          </div>
          <div id="jobs">
            <a href="https://discord.com/invite/vcom" target="_blank" class="job">
              <div class="job_text">
                <p>
                  Модератор
                </p>
                <p>
                  Модерування в чаті
                </p>
              </div>
              <img src="images/Arrow1.svg">
            </a>
            <a href="https://discord.com/invite/vcom" target="_blank" class="job">
              <div class="job_text">
                <p>
                  EVENT менеджер
                </p>
                <p>
                  Проводиті івенти на сервері.
                </p>
              </div>
              <img src="images/Arrow1.svg">
            </a>
            <a href="https://discord.com/invite/vcom" target="_blank" class="job">
              <div class="job_text">
                <p>
                  Коментатор
                </p>
                <p>
                  Для VCOM TOURNAMENTS.
                </p>
              </div>
              <img src="images/Arrow1.svg">
            </a>
          </div>
        </div>
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
    function toggleText() {
      var text = document.getElementById("more");
      var text2 = document.getElementById("text2")
      var button = document.getElementById("more_button")
      text.style.display = "block"
      button.style.display = "none"
      text2.textContent = "У нас є безліч каналів та фільтрів для пошуку найкращої команди, з якою можна незабутньо провести свій час."
    }
    const hamburger = document.getElementById("hamburger");
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
    })
  </script>
  </html>