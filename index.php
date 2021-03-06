<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ProtoTorials</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/all.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./css/funcs.js"></script>
</head>
<body>

  <header>

    <nav id="main-nav">
      <div class="left-icons">
        <i class="fas fa-bars menu-icon"></i>
        <div class="logo">
          <a href="#"><img src="img/atom.png" style="width:30px;height:30px;">  ProtoTorials</a>
        </div>
      </div>

      
      <div class="search-bar">
        <input type="text" placeholder="Search">
        <div class="search-icon"><i class="fas fa-search"></i></div>
      </div>

      <div class="right-icons">
        <i class="fas fa-video"></i>
        <i class="fas fa-stream"></i>
        <i class="fas fa-bell"></i>
        <div id="dd" class="wrapper-dropdown-3" tabindex="1" >
          <span><a href="#"><img src="./img/profile.png" alt="profile-pics"></a></span>
          <ul class="dropdown">
            <li><a href="#">My Channel</a></li>
            <li><a href="#">Account</a></li>
            <li onclick="location.href='Login.php';"><a href="Login.php" >Log In</a></li>
          </ul>
        </div>
        <!-- <a href="#"><img src="./img/profile.png" alt="profile-pics"></a> -->
      </div>
    </nav>
    
  </header>
  
  <div id="main-container">
    <div class="left-nav">
      <div class="nav-list">
        
          <a href="#" class="current"><i class="fas fa-home"></i> Home</a>
          <a href="#"><i class="fas fa-fire"></i> Trending</a>
          <a href="#"><i class="fas fa-photo-video"></i> Subscriptions</a>

      </div>
      <div class="nav-list">
          <a href="#"><i class="fas fa-icons"></i> Library</a>
          <a href="#"><i class="fas fa-history"></i> History</a>
          <a href="#"><i class="fas fa-stream"></i> Your videos</a>
          <a href="#"><i class="fas fa-clock"></i> Watch later</a>
          <a href="#"><i class="fab fa-hotjar"></i> Trending</a>
          <a href="#"><i class="fas fa-chevron-down"></i> Show more</a>
      </div>
      <div class="nav-list">
        <div class="header-text">Subscriptions</div>
        <ul>
          <li><a href="#"><img src="./img/thumb.jpg" alt="user1"> freeCodeCamp</a></li>
          <li><a href="#"><img src="./img/profile.png" alt="user1"> Tech</a></li>
          <li><a href="#"><img src="./img/profile.png" alt="user1"> Other Sub</a></li>
          <li><a href="#"><img src="./img/profile.png" alt="user1"> Programmer</a></li>
          <li><a href="#"><img src="./img/profile.png" alt="user1"> Coder</a></li>
          <li><a href="#"><img src="./img/profile.png" alt="user1"> Other Sub</a></li>
          <li><a href="#"><img src="./img/profile.png" alt="user1"> Java channel</a></li>
          <a href="#"><i class="fas fa-chevron-down"></i> Show 80 more</a>
          
          
        </ul>
      </div>

      <div class="nav-list">
        <div class="header-text">More from Prototorials</div>
        
          <a href="#"><i class="fab fa-youtube"></i> Prototorials</a>
          <a href="#"><i class="fas fa-fire"></i> Trending</a>
          <a href="#"><i class="fas fa-video"></i> Live</a>
          <a href="#"><i class="fas fa-lightbulb"></i> Learning</a>
        
      </div>

      <div class="nav-list">
        
          <a href="#"><i class="fas fa-cog"></i> Settings</a>
          <a href="#"><i class="fas fa-flag"></i>Report Video</a>
          <a href="#"><i class="fas fa-question-circle"></i> Help</a>
          <a href="#"><i class="fas fa-info-circle"></i> Send Feedback</a>
    
      </div>

      <footer>
        <div class="left-nav-footer">
          <div class="top-footer">
            <a href="#">About</a>
            <a href="#">Press</a>
            <a href="#">Copyright</a>
            <a href="#">Contact Us</a>
            <a href="#">Creators</a>
            <a href="#">Advertise</a>
            <a href="#">Developers</a>
          </div>

          <div class="bottom-footer">
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
            <a href="#">Policy & Safety</a>
            <a href="#">How ProtoTorials Works</a>
          </div>

          <div class="copyright"><p>&copy; 2020 Google LLC</p></div>

        </div>

      </footer>


    </div>

    <div id="container">

      <div class="recommendations">
        <a href="#">All recommendations</a>
        <a href="#">JavaScript</a>
        <a href="#">HTML</a>
        <a href="#">CSS</a>
        <a href="#">C++</a>
        <a href="#">Java</a>
        <a href="#">Python</a>
        <a href="#">Assembly</a>
        <a href="#">Swift</a>
        <a href="#">Kotlin</a>
        <a href="#">Others</a>
      </div>

    </div>

    <div id="content-container">
      <div class="header-info"><h2>Recommended</h2></div>

      <!-- First Video Section -->
    <section class="video-section">
      <!-- 1st video -->
      <div class="videos">
        <div class="thumbnail"><a href="videoPage.php">
        <video preload="metadata" width="250px" height = "100%" poster="cppCover.png">
        </a></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/thumb.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map in C++ - GeeksForGeeks Tutorial</h2>
            <p class="sub-text">GeeksForGeeks<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">5.4M Views . 2 years ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 2nd video -->
      <div class="videos">
        <div class="thumbnail"><video preload="metadata" width="250px" height = "100%" poster="threeLargest.png"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">C++ Find Largest of Three Values</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 3rd video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 4th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 5th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 6th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 7th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 8th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 9th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 10th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>

    </section>

<!-- Latest Posts Style -->
    <div class="latest-posts">

      <div class="header-info"><h2>Latest ProtoTorials posts</h2></div>

      <!-- Latest posts -->
      <div class="post-container">
        <!-- 1st post -->
        <div class="post-card">
          <div class="post-header">
            <img src="./img/computer.jpg" alt="up7">
            <p class="sub-text">Learn Code • 12hrs days ago</p>
          </div>

          <div class="post-content">
            <div class="left-content">
              Watch our video being posted later on how to learn how to code!
            </div>
            <div class="right-content">
              <img src="./img/thumb.jpg" alt="">
            </div>
          </div>
          

          <div class="post-icons">
            <div class="left-icon">
              <i class="fas fa-thumbs-up"></i><span class="upvotes">6.4k</span>
              <i class="fas fa-thumbs-down"></i>
            </div>

            <div class="right-icon">
              <i class="fas fa-comment-dots"></i><span class="upvotes">64</span>
              <i class="fas fa-ellipsis-v"></i>
            </div>
          </div>
        </div>
        <!-- 2nd post -->
        <div class="post-card">
          <div class="post-header">
            <img src="./img/thumb.jpg" alt="up7">
            <p class="sub-text">Interview Practice • 2 days ago</p>
          </div>

          <div class="post-content">
            <div class="left-content">
              Join us to work on your techincal interview skills! 
            </div>
            <div class="right-content">
              <img src="./img/cpp.png" alt="">
            </div>
          </div>

          <div class="post-icons">
            <div class="left-icon">
              <i class="fas fa-thumbs-up"></i><span class="upvotes">64k</span>
              <i class="fas fa-thumbs-down"></i>
            </div>

            <div class="right-icon">
              <i class="fas fa-comment-dots"></i><span class="upvotes">4k</span>
              <i class="fas fa-ellipsis-v"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="more-icon"><i class="fas fa-chevron-down"></i></div>


    </div>

    <!-- Second Video Section -->
    <section class="video-section second">
      <!-- 1st video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/cpp.png" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/thumb.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">C++ Tutorial for Beginners - Full Course</h2>
            <p class="sub-text">freeCodeCamp.org<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">5.4M Views . 2 years ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 2nd video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 3rd video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/cpp.png" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/thumb.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">C++ Tutorial for Beginners - Full Course</h2>
            <p class="sub-text">freeCodeCamp.org<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">5.4M Views . 2 years ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- thvido -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 5th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 6th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/cpp.png" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/thumb.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">C++ Tutorial for Beginners - Full Course</h2>
            <p class="sub-text">freeCodeCamp.org<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">5.4M Views . 2 years ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 7thvideo -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/cpp.png" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/thumb.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">C++ Tutorial for Beginners - Full Course</h2>
            <p class="sub-text">freeCodeCamp.org<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">5.4M Views . 2 years ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 8th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/computer.jpg" alt="computer">
        </div>
        <div class="info">
          <div class="user-thumb"><img src="./img/dos.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">Map of Computer Science</h2>
            <p class="sub-text">DoS - Domain of Science<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">2.7M Views . 8 months ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>
      <!-- 9th video -->
      <div class="videos">
        <div class="thumbnail"><img src="./img/cpp.png" alt="computer"></div>
        <div class="info">
          <div class="user-thumb"><img src="./img/thumb.jpg" alt="up8"></div>
          <div class="title">
            <h2 class="main-text">C++ Tutorial for Beginners - Full Course</h2>
            <p class="sub-text">freeCodeCamp.org<i class="fas fa-check-circle"></i></p>
            <p class="sub-text">5.4M Views . 2 years ago</p>
          </div>
          <div class="hover-icon"><i class="fas fa-ellipsis-v"></i></div>
        </div>
      </div>

      <div class="more-icon"><i class="fas fa-chevron-down"></i></div>

    </section>

    


    </div>

  </div>


</body>
</html>