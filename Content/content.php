<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content.css">
    <script src="../global.js"></script>
</head>
<body>
    <?php include '../topbar.php' ?>
    
    <div class="choice container">
        <a href="" class="left">Videos</a>
        <a href="" class="right">Papers</a>
    </div>

    <?php 
        if($_GET['getContent'] == "papers"){
            while($row = mysqli_fetch_array($result)){
    ?>
                <div class="container">
                    <a href="" class="left">
                        <img src="../Image/contoh thumnail.jpg" alt="">
                        <div class="title">asdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
                    </a>

                    <div class="right">
                        <a href="" class="option">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_967_7002)">
                                <path d="M12 6V9L16 5L12 1V4C7.58 4 4 7.58 4 12C4 13.57 4.46 15.03 5.24 16.26L6.7 14.8C6.25 13.97 6 13.01 6 12C6 8.69 8.69 6 12 6ZM18.76 7.74L17.3 9.2C17.74 10.04 18 10.99 18 12C18 15.31 15.31 18 12 18V15L8 19L12 23V20C16.42 20 20 16.42 20 12C20 10.43 19.54 8.97 18.76 7.74V7.74Z" fill="#323232"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_967_7002">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="" class="option">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_967_6998)">
                                <path d="M14.12 10.47L12 12.59L9.87 10.47L8.46 11.88L10.59 14L8.47 16.12L9.88 17.53L12 15.41L14.12 17.53L15.53 16.12L13.41 14L15.53 11.88L14.12 10.47ZM15.5 4L14.5 3H9.5L8.5 4H5V6H19V4H15.5ZM6 19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7H6V19ZM8 9H16V19H8V9Z" fill="#323232"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_967_6998">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>      
    <?php 
            }
        }else{
            while($row = mysqli_fetch_array($result2)){
    ?>
                <div class="container">
                    <a href="" class="left">
                        <img src="../Image/contoh thumnail.jpg" alt="">
                        <div class="title">asdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
                    </a>

                    <div class="right">
                        <a href="" class="option">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_967_7002)">
                                <path d="M12 6V9L16 5L12 1V4C7.58 4 4 7.58 4 12C4 13.57 4.46 15.03 5.24 16.26L6.7 14.8C6.25 13.97 6 13.01 6 12C6 8.69 8.69 6 12 6ZM18.76 7.74L17.3 9.2C17.74 10.04 18 10.99 18 12C18 15.31 15.31 18 12 18V15L8 19L12 23V20C16.42 20 20 16.42 20 12C20 10.43 19.54 8.97 18.76 7.74V7.74Z" fill="#323232"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_967_7002">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="" class="option">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_967_6998)">
                                <path d="M14.12 10.47L12 12.59L9.87 10.47L8.46 11.88L10.59 14L8.47 16.12L9.88 17.53L12 15.41L14.12 17.53L15.53 16.12L13.41 14L15.53 11.88L14.12 10.47ZM15.5 4L14.5 3H9.5L8.5 4H5V6H19V4H15.5ZM6 19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7H6V19ZM8 9H16V19H8V9Z" fill="#323232"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_967_6998">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>   
    <?php 
            }
        } ?>
    
    <?php include '../nav.php'?>
</body>
</html>