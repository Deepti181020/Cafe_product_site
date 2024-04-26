<?php
     include_once "nav_main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- <style>
          #video-row {
            position: relative;
            width: 100vw;
            overflow: hidden;
        }
        /* #video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        } */
        #video-background {
            width: 100%;
            height: auto;
            min-height: 100%;
        } 
    </style> -->
    <style>
    #video-row {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    
    #video-container {
        position: relative;
        width: 100%;
        height: 100vh; /* Set the height of the video container to the viewport height */
        overflow: hidden;
    }
    
    #video-background {
        width: 100%;
        height: auto;
        min-height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); /* Center the video horizontally and vertically */
    }
</style>

</head>
<body>
<div id="heroslider" class="carousel slide" data-bs-ride="carousel">
</div>
    <section id="about">
        <div class="container">
            <div class="row align-items-start bg-dark">
                <!-- <div class="col-lg-2">
                    <img src="" alt="">
                </div> -->
                <div class="col-lg-5">
                    <h1 class="text-danger">About us</h1>
                    <div class="divider text-danger">
                        <p>
                         “We believe in creating an unmatched experience by maintaining the highest standard of quality, hygiene, service and customer satisfaction.”<br><br>

                         “In a world that is increasingly coming closer, we seek to promote the harmony of Indian culture, cuisine and architecture. As a fast-growing Indian company in various countries, it is our commitment to live up to our nation’s promise to give the best to the world. We strive to set benchmarks in various aspects of our businesses in Food, Hospitality, Hoteliering and Real Estate.”</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="row" id="video-row">
                <div class="col-lg-12" id="video-container">
                    <!-- Set the video as background -->
                    <video autoplay loop muted plays-inline id="video-background">
                        <source src="Image_resources/video1.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-8">
                    <h2 class="text-danger ">Who We Are ?</h2>
                    <p>Saffron was started in the year 2001 by the Sankalp Group of Restaurants. Named after the world’s most precious spice, Saffron serves freshest ingredients with the finest taste. Our chefs fuse together flavor and aroma to capture the essence of the traditional North Indian cuisine.<br><br>

                    Saffron has become synonymous with Authentic Vegetarian Barbecue & North Indian Cuisine. The Saffron chain epitomizes the royal experience in flavour, aroma and purity. It was first of its kind as it introduced the unique ” do it yourself ” concept in dining. Saffron’s dining experience comes complete with a grill at the centre of the table and variety of starters skewered and ready for the guests to marinate according to taste and then grill or roast to perfection. This customized dining has been getting a stupendous response from connoisseurs of good food. In fact Saffron has established a stellar customer base that speaks of its popularity.</p>
                </div>
        </div>
        
    </section>
<?php include_once "footer.php"; ?>  
</body>
</html>