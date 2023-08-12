<?php
session_start();

if(!isset($_SESSION['login'])){
echo"invalid credintials";
die;
}

if($_SESSION['login']==false){
    echo"what are you doing son";
    die;
}


include "../utility/connect.php";

$curr=mysqli_query($conn,"select * from galary");
$name=$_SESSION['username'];

while($row=mysqli_fetch_assoc($curr)){
$tags=$row['tags'];
$image=$row['image'];
$desc=$row['discription'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page-Social Book</title>
    <link rel="indexsheet" href="index.css">
    <link rel="stylesheet" href="utils.css">
    <script src="https://kit.fontawesome.com/9001de1482.js" crossorigin="anonymous"></script>
</head>
<body>

<nav>
<div class="nav-left">
            <img src="https://www.svief.org/star/wp-content/uploads/2019/11/SocialBook.png " style="mix-blend-mode: darken;" width="290" height="50" class="logo">
            <ul>
                <li><img src="https://pixlok.com/wp-content/uploads/2021/12/Notification-Icon-SVG-03cde.png" width="40" height="20" > </li>
                <li><img src="https://simpleicon.com/wp-content/uploads/mail-inbox.png" width="40" height="20"></li>
                <li><img src="https://www.iconpacks.net/icons/1/free-video-icon-818-thumb.png" width="40" height="20"></li>
                 
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-21.png" style="mix-blend-mode: darken;" width="20" height="20">
                <input type="text" placeholder="Search" >
            </div>
            <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" width="50" height="50">
            </div>
        </div>

        <div class="settings-menu">

            <div id="dark-btn" >
                <span></span>
            </div>
            <div class="setting-menu-inner">
                <div class="user-Profile">
                    <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" style="mix-blend-mode: darken;" width="40" height="40">
                    <div>
                        <p></p>
                        <a href="profile.php">See Your Profile</a>
                    </div>
                </div>

                <hr>
                <div class="user-Profile">
                    <img src="https://toppng.com/uploads/preview/feedback-icon-give-feedback-icon-11553501810noyagntfwj.png" style="mix-blend-mode: darken;" width="40" height="40">
                    <div>
                        <p>Give Feedback</p>
                        <a href="#">Help us to improve the new design</a>
                    </div>
                </div>
                <hr>
                <div class="settings-links">
                    <img src="https://creazilla-store.fra1.digitaloceanspaces.com/icons/3235326/grey-settings-icon-md.png" style="mix-blend-mode: darken;" width="40" height="40" class="setting-icons">
                    <a href="#">Settings & Privacy  <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-fleche-droite-grise.png" style="mix-blend-mode: darken;" width="30" height="20"></a>
                </div>
                <div class="settings-links">
                    <img src="https://www.seekpng.com/png/detail/242-2425880_one-click-support-customer-service-icon-png.png" style="mix-blend-mode: darken;" width="40" height="40"  class="setting-icons">
                    <a href="Home.html"> Home <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-fleche-droite-grise.png" style="mix-blend-mode: darken;" width="30" height="20"></a>
                </div>
                <div class="settings-links">
                    <img src="https://cdn-icons-png.flaticon.com/512/137/137416.png" style="mix-blend-mode: darken;" width="40" height="40"  class="setting-icons">
                    <a href="uploadpath.html">Upload<img src="https://icones.pro/wp-content/uploads/2021/06/symbole-fleche-droite-grise.png" style="mix-blend-mode: darken;" width="30" height="20"></a>
                </div>
                <div class="settings-links">
                    <img src="https://image.pngaaa.com/528/4790528-middle.png" style="mix-blend-mode: darken;" width="40" height="40"  class="setting-icons">
                    <a href="logout.php">Logout <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-fleche-droite-grise.png" style="mix-blend-mode: darken;" width="30" height="20"></a>
                </div>

            </div>
           
            
        </div>
    </nav>
<div class="profile-container">
<img src="https://marketplace.canva.com/EAE1VRwpe3E/1/0/1600w/canva-pink-glitter-welcome-facebook-cover-page-Vh6qjqUMJK0.jpg" class="cover-img" height="300">
<div class="profile-details">
    <div class="pd-left">
        <div class="pd-row">
            <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" height="100" class="pd-image">
            <div>
                <h3><?php echo"$name"; ?></h3>
                <p>120 Friends - 20 mutual</p>
                <img src="https://medatech.com/wp-content/uploads/2016/06/News-Icon-.jpg" style="mix-blend-mode: darken;" width="30" height="30">
                <img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-and-shapes-6/177800/299-512.png"  style="mix-blend-mode: darken;" width="30" height="30">
                <img src="https://img.favpng.com/11/2/5/computer-icons-icon-design-users-group-png-favpng-aSN9Fyu3Qhy7wxVaa87WtsBsA.jpg" style="mix-blend-mode: darken;" width="30" height="30">
                <img src="<?php echo "$image" ; ?>" style="mix-blend-mode: darken;" width="30" height="30">
                <img src="<?php echo "$image";?>" style="mix-blend-mode: darken;" width="30" height="30">
            </div>
        </div>
    </div>
    <dib class="pd-right">
        <button type="button"><img src="https://static.vecteezy.com/system/resources/previews/012/791/163/original/add-friends-icon-free-vector.jpg" style="mix-blend-mode: darken;" width="30" height="30">Friends</button>
        <button type="button"><img src="https://cdn-icons-png.flaticon.com/512/685/685887.png" style="mix-blend-mode: darken;" width="30" height="30">Message</button>

    </dib>
</div>


<div class="profile-info">
    <div class="info-col">

        <div class="profile-intro">
            <h3>Intro</h3>
            <p class="intro-text">
                Believe in youself and you  can do unbelievable things.
            </p>
            <hr>
            <ul>
                <li> <img src="https://thumbs.dreamstime.com/b/graduate-education-icon-perfect-use-designing-developing-websites-printed-files-presentations-promotional-materials-many-223879447.jpg" style="mix-blend-mode: darken;"  width="50" height="50" >Student at National Institute of Technology Sikkim</li>
                <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt-k-BKNuuEOzWAC0nMFkNpvIpsfKGhOKiZixWyNbOHg&s" style="mix-blend-mode: darken;"  width="50" height="30" >  Went to DPS Delhi</li>
                <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXK7n7XrXsdSGMTn_0Zv1FMedj63lEZQwn8Z6-5ek&s" style="mix-blend-mode: darken;"  width="50" height="40" >Lives in Bangalore, India</li>
            
            </ul>
        </div>

        <div class="profile-intro">
            <h3>Best Memories Collection</h3>
            <div class="photo-box">
                <div><img src="https://img.freepik.com/free-psd/food-social-media-banner-post-template_202595-365.jpg" class="Sidebar-ads"   width="200" height="100"></div>
                <div><img src="https://img.freepik.com/free-psd/food-social-media-banner-post-template_202595-365.jpg" class="Sidebar-ads"   width="200" height="100"></div>
                <div><img src="https://img.freepik.com/free-psd/food-social-media-banner-post-template_202595-365.jpg" class="Sidebar-ads"   width="200" height="100"></div>
                <div><img src="https://img.freepik.com/free-psd/food-social-media-banner-post-template_202595-365.jpg" class="Sidebar-ads"   width="200" height="100"></div>
                <div><img src="<?php  echo"$image"; ?>" class="Sidebar-ads"   width="200" height="100"></div>
                <div><img src="<?php  echo"$image"; ?>" class="Sidebar-ads"   width="200" height="100"></div>
            </div>
        </div>


    </div>
    <div class="post-col">
        <div class="write-post-container">
            <div class="user-Profile">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" style="mix-blend-mode: darken;" width="60" height="60">
                <div>
                    <p><?php  echo"$name"; ?></p>
                    <small>Public <i class="fa-sharp fa-solid fa-caret-down"></i></small>
                </div>
            </div>


            <div class="post-input-container">
                <textarea rows="3" placeholder="What's on your mind?"></textarea>
                <div class="add-post-link">
                    <a href="#"><img src="https://static.vecteezy.com/system/resources/previews/009/385/764/original/video-camera-icon-sign-symbol-design-free-png.png" style="mix-blend-mode: darken;" width="40" height="20" > Live Video</a>
                    <a href="#"><img src="https://icones.pro/wp-content/uploads/2021/02/icono-de-camara-verte.png" width="40" height="20" style="mix-blend-mode: darken;">Photo/Video</a>
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Twemoji_1f600.svg/1200px-Twemoji_1f600.svg.png" width="40" height="20" style="mix-blend-mode: darken;">Feeling/Activity</a>
                    

                </div>
            </div>
        </div>
        <div class="post-container">
            <div class="user-Profile">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" style="mix-blend-mode: darken;" width="60" height="60">
                <div>
                    <p><?php  echo"$name";  ?></p>
                    <span>Yesterday</span>
                </div>
            </div>
            <p> Sunflower</p>
            <img src="https://e0.pxfuel.com/wallpapers/225/960/desktop-wallpaper-sunning-alley-box-hello-subscription-in-2020-sunflower-aesthetic-sunflower-sunset-yellow-tumblr-aesthetic-horizontal-thumbnail.jpg" class="post-image"   width="320" height="200">
             
            <div class="post-row">
                <div class="activity-icons">
                    <img src="https://w7.pngwing.com/pngs/7/748/png-transparent-facebook-like-button-chemical-reaction-computer-icons-facebook-blue-text-hand.png" style="mix-blend-mode: darken;" width="40" height="20" > 120</a>
                    <img src="https://www.seekpng.com/png/detail/119-1196181_comment-comment-icon-png-gray.png" width="40" height="20" style="mix-blend-mode: darken;">45</a>
                    <img src="https://e7.pngegg.com/pngimages/833/675/png-clipart-computer-icons-facebook-inc-share-icon-facebook-messenger-facebook-angle-linkedin-thumbnail.png" width="40" height="20" style="mix-blend-mode: darken;">20</a>
                </div>
            </div>


            <div class="user-Profile">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" style="mix-blend-mode: darken;" width="60" height="60">
                <div>
                    <p><?php  echo"$name"; ?></p>
                    <span>Sunday</span>
                </div>
            </div>
            <p> Fav show!!</p>
            <img src="https://images.wsj.net/im-119666?width=1280&size=1.33333333" class="post-image"   width="320" height="200">
             
            <div class="post-row">
                <div class="activity-icons">
                    <img src="https://w7.pngwing.com/pngs/7/748/png-transparent-facebook-like-button-chemical-reaction-computer-icons-facebook-blue-text-hand.png" style="mix-blend-mode: darken;" width="40" height="20" > 211</a>
                    <img src="https://www.seekpng.com/png/detail/119-1196181_comment-comment-icon-png-gray.png" width="40" height="20" style="mix-blend-mode: darken;">60</a>
                    <img src="https://e7.pngegg.com/pngimages/833/675/png-clipart-computer-icons-facebook-inc-share-icon-facebook-messenger-facebook-angle-linkedin-thumbnail.png" width="40" height="20" style="mix-blend-mode: darken;">50</a>
                </div>
            </div>


            <div class="user-Profile">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" style="mix-blend-mode: darken;" width="60" height="60">
                <div>
                    <p><?php  echo"$name"; ?></p>
                    <span>Thrusday</span>
                </div>
            </div>
            <p> <?php  echo" $desc"; ?>

            </p>
            <img src="$image" class="post-image"   width="320" height="200">
             
            <div class="post-row">
                <div class="activity-icons">
                    <img src="https://w7.pngwing.com/pngs/7/748/png-transparent-facebook-like-button-chemical-reaction-computer-icons-facebook-blue-text-hand.png" style="mix-blend-mode: darken;" width="40" height="20" > 80</a>
                    <img src="https://www.seekpng.com/png/detail/119-1196181_comment-comment-icon-png-gray.png" width="40" height="20" style="mix-blend-mode: darken;">44</a>
                    <img src="https://e7.pngegg.com/pngimages/833/675/png-clipart-computer-icons-facebook-inc-share-icon-facebook-messenger-facebook-angle-linkedin-thumbnail.png" width="40" height="20" style="mix-blend-mode: darken;">10</a>
                </div>
            </div>


            <div class="user-Profile">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" style="mix-blend-mode: darken;" width="60" height="60">
                <div>
                    <p><?php echo"$name"; ?></p>
                    <span>Friday</span>
                </div>
            </div>
           
    </div>
</div>

</div>
<script src="script1.js"></script>
    
</body>
</html>





