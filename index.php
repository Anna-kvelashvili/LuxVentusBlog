<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lux Ventus</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100&family=Ubuntu:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="reset.css" />
  </head>
  <body>
    <!-- Header section with burger menu -->
    <header>
      <div class="container">
        <div class="header">
          <nav>
            <div class="navigation-logo">
              <a href="index.html"
                ><img src="./assets/logo.png" alt="Lux Ventus Logo"
              /></a>
            </div>
            <div class="navigation-content">
              <ul class="navigation-links">
                <li><a href="#first-section">Fashion</a></li>
                <li><a href="#second-section">Lifestyle</a></li>
                <li><a href="#third-section">Spiritual</a></li>
                <li><a href="#fourth-section">Mental Health</a></li>
                <li><a href="#last-container">Contact Us</a></li>
                <li><img src="./assets/search1.png" alt="Search Icon" /></li>
              </ul>
            </div>
            <div class="burger-menu" onclick="toggleMenu()">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- Mobile Navigation Menu -->
    <div class="mobile-nav" id="mobileNav">
      <ul>
        <li><a href="#first-section">Fashion</a></li>
        <li><a href="#second-section">Lifestyle</a></li>
        <li><a href="#third-section">Spiritual</a></li>
        <li><a href="#fourth-section">Mental Health</a></li>
        <li><a href="#last-container">Contact Us</a></li>
      </ul>
    </div>

    <!-- First Section -->
    <section class="first-section" id="first-section">
      <div class="first-section-main">
        <div class="first-section-main-text">
          <h5>LUX VENTUS MAGAZINE</h5>
          <h1>We Are the <span>Ventus Fashion</span></h1>
          <p>
            We like to gossip about everything, but we will never forget the
            daily fashion dose.
          </p>
        </div>
      </div>
    </section>

    <!-- Second Section -->
    <section class="second-section" id="second-section">
      <h4>Topics</h4>
      <div class="boxes">
  
       <?php
    
          $topics = [
              ["image" => "./assets/box1.png", "title" => "Lingerie"],
              ["image" => "./assets/box2.png", "title" => "Spring"],
              ["image" => "./assets/box3.png", "title" => "Yoga"],
              ["image" => "./assets/box4.png", "title" => "Glow"],
              ["image" => "./assets/box5.png", "title" => "Ensembles"],
              ["image" => "./assets/box6.png", "title" => "Skin Care"],
          ];
          foreach ($topics as $topic) {
              echo '<div class="box">
                      <img src="' . $topic["image"] . '" alt="' . $topic["title"] . '" />
                      <h5>' . $topic["title"] . '</h5>
                      <button>View More</button>
                    </div>';
          }

          ?>
  
       </div>
    </section>

    <hr />

    <!-- Third Section -->
    <section class="third-section" id="third-section">
      <div class="fashion">
        <button>FASHION</button>
      </div>
      <div class="trends">
        <div class="mallory-reyn">
          <img src="./assets/Mask-group.png" alt="Mallory Reyn" />
          <p>Mallory Reyn</p>
          <p>April 14th, 2023</p>
          <h6>COMING IN HOT!</h6>
        </div>
        <div class="latest-trends">
          <h4>The Latest Trends from the Moon Fashion Week.</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa
            mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien
            fringilla, mattis ligula consectetur, ultrices mauris. Maecenas
            vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.
          </p>
        </div>
        <div class="read-more">
          <img src="./assets/arrow-small-right.png" alt="" />
          <p>READ MORE</p>
        </div>
      </div>
    </section>
    <!-- Fourth-section -->
    <div class="container" id="fourth-section">
      <section class="trending-section">
    <h2>Trending</h2>
    <div class="cards">
        <?php
        $trending = [
          ["category" => "LIFESTYLE", "title" => "10 Things to help you with social stress.", "author" => "Mallory Reyn", "date" => "April 14th, 2023"],
          ["category" => "SUMMER", "title" => "The summer 2023 lineup is finally here.", "author" => "Mallory Reyn", "date" => "April 14th, 2023"]
      ];
      foreach ($trending as $trend) {
          echo '<div class="card">
                  <div class="image-container">
                      <div class="fashion-1">
                          <button>' . $trend["category"] . '</button>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="author-date">
                          <div class="author-left">
                              <img class="author-img" src="./assets/Author.png" alt="Author">
                              <span class="author-name">' . $trend["author"] . '</span>
                          </div>
                          <span class="date">' . $trend["date"] . '</span>
                      </div>
                      <h3 class="card-title">' . $trend["title"] . '</h3>
                      <p class="card-description">Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla...</p>
                      <div class="read-more">
                          <img src="./assets/arrow-small-right.png" alt="Arrow Right">
                          <p>READ MORE</p>
                      </div>
                  </div>
                </div>';
        }
        ?>
    </div>
</section>
    </div>

    <!-- ბოლო სექცია -->
    <?php
$last_posts = [
    [
        "category" => "FASHION",
        "image_class" => "last-section-card1",
        "author_image" => "./assets/Author.png",
        "author" => "Mallory Reyn",
        "date" => "April 14th, 2023",
        "title" => "5 Reasons to avoid shopping on Saturdays",
        "description" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
        "read_more_link" => "#"
    ],
    [
        "category" => "FASHION",
        "image_class" => "last-section-card2",
        "author_image" => "./assets/Author.png",
        "author" => "Mallory Reyn",
        "date" => "April 14th, 2023",
        "title" => "5 Reasons to avoid shopping on Saturdays",
        "description" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
        "read_more_link" => "#"
    ],
    [
        "category" => "FASHION",
        "image_class" => "last-section-card3",
        "author_image" => "./assets/Author.png",
        "author" => "Mallory Reyn",
        "date" => "April 14th, 2023",
        "title" => "5 Reasons to avoid shopping on Saturdays",
        "description" => "Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
        "read_more_link" => "#"
    ]
];
?>

<section class="container" id="last-container">
    <div class="last-section">
        <div class="last-section-cards">
            <?php foreach ($last_posts as $post) : ?>
                <div class="last-section-card">
                    <div class="last-section-card-image <?= $post["image_class"] ?>">
                        <a href="#"><?= $post["category"] ?></a>
                    </div>

                    <div class="last-section-card-texts">
                        <div class="last-section-card-text1">
                            <img src="<?= $post["author_image"] ?>" alt="<?= $post["author"] ?>" />
                            <div class="p">
                                <p><?= $post["author"] ?></p>
                                <p><?= $post["date"] ?></p>
                            </div>
                        </div>

                        <div class="last-section-card-text2">
                            <h1><?= $post["title"] ?></h1>
                            <p><?= $post["description"] ?></p>

                            <div class="last-section-arrow">
                                <a href="<?= $post["read_more_link"] ?>">
                                    <img src="./assets/arrow-small-right.png" alt="Arrow Right" /> READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
    <!-- footer -->
    <?php
$social_links = [
    [
        "platform" => "Facebook",
        "url" => "https://www.facebook.com/",
        "image" => "./assets/facebook.png"
    ],
    [
        "platform" => "Twitter",
        "url" => "https://x.com/?mx=2",
        "image" => "./assets/twitter.png"
    ],
    [
        "platform" => "LinkedIn",
        "url" => "https://www.linkedin.com/",
        "image" => "./assets/linkedin.png"
    ],
    [
        "platform" => "YouTube",
        "url" => "https://www.youtube.com/",
        "image" => "./assets/youtube.png"
    ],
    [
        "platform" => "Instagram",
        "url" => "https://www.instagram.com/",
        "image" => "./assets/instagram.png"
    ]
];
?>
<footer>
    <div class="footer">
        <div class="footer-1">
            <div class="footer-logo">
                <img src="./assets/logo.png" alt="Logo" />
            </div>
            <div class="footer-content">
                <div class="footer-social">
                    <h6>Let's Hang Out</h6>
                    <?php foreach ($social_links as $link) : ?>
                        <a href="<?= $link["url"] ?>" target="_blank" class="socs-foot">
                            <img src="<?= $link["image"] ?>" alt="<?= $link["platform"] ?>" />
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="footer-last">
            <p>© 2023 - Lux Ventus by Zine.E.Falouti</p>
        </div>
    </div>
</footer>

    <script src="script.js"></script>
  </body>
</html>
