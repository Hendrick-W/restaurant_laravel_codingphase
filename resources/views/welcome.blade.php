<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
				<link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
		<section id="welcome">
      <div class="welcome-menu">
        <div class="logo">
          <img src="https://cdn.pixabay.com/photo/2017/09/23/21/21/label-2780146_1280.png"/>
        </div>
        <div class="menu">
          <div class="menu-title">
            Menu
          </div>
          <ul class="links">
            <li>
              <a href="#">Menu</a>
            </li>
            <li>
              <a href="#">Waitlist</a>
            </li>
            <li>
              <a href="#">Giftcards</a>
            </li>
            <li>
              <a href="#">Offers</a>
            </li>
          </ul> 
        </div>
        <div class="social-icons">
          <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="location">
          <div class="address">
            234 Bank Street, <br>
            New York, 11747
          </div>
          <div class="phone-number">
            <a href="tel:718219863">718-219-863</a>
          </div>
        </div>
      </div>
      <div class="welcome-jumbo">
        <div class="status">NEW</div>
        <h1>Billy Burger</h1>
        <img src="https://freepngimg.com/thumb/sandwich/74861-king-hamburger-food-ribs-fries-fast-burger.png"
        class="burger-fries"
        />
      </div>
    </section>
    <section id='information'>
      <div class="restaurant-image">
        <img src="img/left-right.jpg"/>
      </div>
      <div class="info">
        <h2>We Started From The Bottom In 1987</h2>
        <div class="paragraphs">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, voluptate doloribus temporibus consequatur alias fugiat placeat ex perspiciatis facilis similique, voluptates sequi facere accusamus aperiam repellendus. Omnis quo adipisci ipsum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, sunt. Ratione ipsum laborum quia, voluptatem vel sed id nesciunt perferendis accusantium error corporis molestiae incidunt modi libero quaerat fuga ipsa. lo</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, voluptate doloribus temporibus consequatur alias fugiat placeat ex perspiciatis facilis similique, voluptates sequi facere accusamus aperiam repellendus. Omnis quo adipisci ipsum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, repellendus esse assumenda tempora officia iste, reprehenderit distinctio, delectus aliquam voluptate maiores fuga dignissimos alias ipsum iure! Labore, maiores. Sit, repudiandae?</p>
        </div>
        <a href="#" class="about-link">
          <span>Learn More about restaurants</span>
          <div class="circle-right">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </a>
      </div>
    </section>
    <section id="food-preview">
      <h2>We have everything you need to kill your hunger</h2>
      <div class="button-rounded">
        View Our Menu
      </div>
      <div class="container">
        <div class="left-button">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="right-button">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="food-slider">
          <div class="sliding-system">
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Starters
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://freepngimg.com/thumb/sandwich/74861-king-hamburger-food-ribs-fries-fast-burger.png"/>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Pizza
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://pngimg.com/uploads/pizza/pizza_PNG43993.png"/>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Wine
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://images.vexels.com/media/users/3/137129/isolated/preview/f8bf3906420d774a87858d7f59f60156-wine-bottle-glass-by-vexels.png"/>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Sides
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://lh3.googleusercontent.com/proxy/dHZ7P087mF3AbeTuqVMbYrQcR026VX_9qkzs3hThg4kXXGgjQ49NbE-QQVonbRL0UoEMpmI4PpPLnnyuaakgdXb3g1_Pm7ivmrnmbWv0fcOcRtyKxlTsh-ieZ7I"/>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Desserts
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://imagesload.net/content/media/c244954523a30dabe1e815e09ae3c70f.png"/>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Drinks
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://imagesload.net/content/media/c244954523a30dabe1e815e09ae3c70f.png"/>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Beers
                </div>
                <p class="food-description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sunt, consequatur quisquam fuga dolores a recusandae temporibus voluptatem repellendus nulla eaque, asperiores, vitae magni vel! Dignissimos non perspiciatis minima id!
                </p>
                <div class="food-image">
                  <img src="https://imagesload.net/content/media/c244954523a30dabe1e815e09ae3c70f.png"/>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </section>
    </body>
</html>
