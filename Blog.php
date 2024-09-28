<?php
  include_once 'header.php';
?>   
<head>
    
    <style>

        .Bcard{
            display: flex;
            justify-content: center;
            flex-wrap:wrap;
            gap: 50px;
            margin-top:45px;
            align-items: center;
            padding-left: 50px;

        }

        .Doctor-card{
            width: 550px;
            height: 650px;
            background-color:rgba(197, 229, 224, 0.774);
            border-radius: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
            rgba(0, 0, 0, 0.3) 0px 30px 60px -30px,
            rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            overflow: hidden;
            transition: transform 0.6s ease;
        }
        .Doctor-card:hover{
            transform:translateY(-20px);
        }
        .Doctor-card img{
            width:100%;
            height:40%;
            object-fit:cover;

        }
        .card-details{
            font-size: 24px;
            margin-bottom: 10px;

        }
        .card-details p{
            font-size: 14px;
            color: gray;
            margin-bottom: 20px;
        }
        .card-btn{
            display: inline-block;
            background-color: blue;
            color:white;
            text-decoration: none;
            border-radius: 5px;
            padding: 8px 16px;
        }

        p.blogD{
            font-family:Arial, Helvetica, sans-serif;
            font-weight:80px;
            text-align: justify;
            text-emphasis: none;
            color: black solid;
            margin-right: 20px;
            margin-left: 20px;

        }

        h3.blogHed{
            text-align: center;
        }

        p.alin1{
        text-align: center;
        }


        h2.bh3{
        margin-left: 200px;
        color: blue;
        text-decoration: underline;
        }
        a.blogbtn{
        float: right;
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: bold;
        background: #1E90FF;
        padding : 15px;
        text-align: center;
        text-decoration:none;
        text-transform: uppercase;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;
        transition-property: box-shadow, transform;
        padding-left: 50px;
        padding-right: 50px;
        margin-right: 250px;
        float: right;
        }

        .blogbtn:hover, .blogbtn:focus, .blogbtn:active{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        }

        /* Reset box model */
        * {
        box-sizing: border-box;
        }

        /* Body styles */
        body {
        font-family: Arial, sans-serif;
        padding: 20px;
        background: #f1f1f1;
        }

        /* Header styles */
        .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
        }

        /* Columns styles */
        .leftcolumn {
        float: left;
        width: 75%;
        }

        .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
        }

        /* Fake image placeholder */
        .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
        margin-bottom: 70px;
        }

        /* Card styles for blog posts and sidebar elements */
        .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
        }

        /* Clear floats after columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Footer styles */
        .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
        }

        /* Responsive layout for smaller screens */
        @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }
        }

         #back-to-top img{
         margin-right: 50px;
        margin-bottom: 50px;
        }


        /* Style for the back-to-top button */
        #back-to-top {
            width: 50px;
            height: 30px;
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background:red;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            transition: opacity 0.3s ease;
            background-color: transparent;
        }
        #back-to-top img{
            width: 40px;
            height: 40px;
        }

        /* Show the button when user scrolls down */
        #back-to-top.show {
            display: block;
        }
      * {
          box-sizing: border-box;
      }
      body {
          font-family: Arial, sans-serif;
          padding: 20px;
          background: #f1f1f1;
      }
      .header {
          padding: 30px;
          font-size: 40px;
          text-align: center;
          background: white;
      }
      .leftcolumn {
          float: left;
          width: 75%;
      }
      .rightcolumn {
          float: left;
          width: 25%;
          padding-left: 20px;
      }
      .fakeimg {
          background-color: #aaa;
          width: 100%;
          padding: 20px;
      }
      .card {
          background-color: white;
          padding: 20px;
          margin-top: 20px;
      }
      .footer {
          padding: 20px;
          text-align: center;
          background: #ddd;
          margin-top: 20px;
      }
      @media screen and (max-width: 800px) {
          .leftcolumn, .rightcolumn {
              width: 100%;
              padding: 0;
          }
      }
  </style>

  <button id="back-to-top" onclick="scrollToTop()"><img src="../images/arr.png"></button>

  <script>
      // Function to scroll back to the top
      function scrollToTop() {
          window.scrollTo({
              top: 0,
              behavior: 'smooth'

          });
      }

      // Show the button when user scrolls down
      window.addEventListener('scroll', function() {
          const button = document.getElementById('back-to-top');
          if (window.scrollY > 200) {
              button.classList.add('show');
          } else {
              button.classList.remove('show');
          }
      });
  </script>

</head>

<body>

  <div class="navbar">
    <nav>
        <img src="../images/Logo.jpg">
        <a href="Home">Home</a>
        <a href="#">About Us</a>
        <a href="#">Services</a>
        <a href="Teamsa.html">Team</a>
        <a href="#">Contact Us</a>
        <a href="Blog.html">Blog</a>
    </nav>
</div>
    <h1 class="bHeader">Blogs</h1>
    <br>
    <br>
    <h2 class="bh3">Featured Posts</h2>

    <div class="testimonials"></div>
        <div class="inner">
          <div class="border">
           <div class="Bcard">
              <div class="Doctor-card">
                <a href="Blog2.html"><img src="../images//Blog_img1.jpg"></a>
                  <div class="card-details">
                    <h3 class="blogHed">Breaking Rabies Boundaries: Anti-Rabies Vaccination Program</h3>
                    <p class="blogD" >Cat, Diseases & Infection, Dog, Health 1 day ago
                    28th September marks World Rabies Day, which encompasses an international awareness movement on the rabies virus and its elimination. 
                    For the second consecutive year, PetVet honors the date through a free anti-rabies vaccination program that intends to mass immunize pets and rescues.
                    Fueled by the success of the preceding year program, PetVet has subsequently organized an anti-rabies vaccination program for the 28th
                     & 29th of September 2024 from 9.00 am to 6.00 pm, in line with the global 2024 theme-Breaking Rabies Boundaries. 
                     In addition to being administered for absolutely free,
                      the vaccines allocated for the program are of high-quality brands - Rabisin and Nobivac. To ensure efficiency,
                    program participants have been urged to book appointments by contacting the PetVet team at 0112 599 799 or filling the form here.</p>
          
                    <p class="alin1">Uncatergorized             |               1 Day Ago</p>
                    </div>
                </div>
                <div class="Doctor-card">
                    <a href="Blog3.html"><img src="../images//Blog_img2.jpeg"></a>
                      <div class="card-details">
                        <h3 class="blogHed">5 Ways to Clean Pet Urine Odor and Stains</h3>
                        <p class="blogD">
                            It doesn't matter how well-trained your dog is, or how often you follow your potty-break schedule. Sometimes, your dog pees. The best way to make sure that dog urine 
                            doesn't leave a bad stain or stench in your home, however, is to clean it up right away, whether it's on the carpet, hardwood floor, or somewhere else.
                            You need to get rid of the smell after your pet pees on the carpet, on a piece of furniture, on your bed linens, or on your clothes. This will keep your pet from peeing 
                            again because animals like to go back to places where they have urinated if the smell isn't completely gone, so it's important to get rid of it.
                            To figure out why your pet is acting this way, it's important to figure out what's going on given the possibility that this could be a sign of a health problem or stress.
                            Here is your one-stop guide to getting rid of pet urine smells for a variety of surfaces. Let's dive right in!
                        </p>
                    
                        <p class="alin1">Uncatergorized       |     April/12/2024</p>
                    </div>
                </div>   
            </div>
        </div>
      </div>
    </div>
  <div>
    <br>
    <br>
    <div>
        <a href="Blog2.html" class="blogbtn" >More</a>
    </div>
    
  <br>
  <br>
  <br><br>
   
  <br>

 
    <div class="header">
        <h2>Blog Name</h2>
    </div>
    <div class="row">
        <div class="leftcolumn">
            <!-- Blog post content goes here -->
            <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description : Mon / Date / Year</h5>
                <div class="fakeimg" style="height:200px;"><input type="file"></div>
                <p>Some text..</p>
            </div>
            <!-- Add more blog posts as needed -->
        </div>
        <div class="rightcolumn">
            <!-- Sidebar content goes here -->
            <div class="card">
                <h2>About Me</h2>
                <div class="fakeimg" style="height:100px;"></div>
                <p>Some text about me...</p>
            </div>
            <!-- Add more sidebar elements (popular posts, follow me, etc.) -->
        </div>
    </div>
    <br>
    <div >
        <a href="#" class="blogbtn" >Post</a>
    </div>

    <br>
    <br>
    <br>
    <br>

    </body>
  </html>
<?php
  include_once 'footer.php';
?>
