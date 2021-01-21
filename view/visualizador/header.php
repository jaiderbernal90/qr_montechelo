<?php
     include('../../controller/translation/roles.php')
?>
<header class="banner" id="mainHeader" role="banner">
        <!-- Hamburguer -->
        <nav role="navigation">
            <div class="box__notification d-none">
                <i class="fas fa-bell"></i>
            </div>
            <div class="top-header">
                <div class="navBurger">
                    <div class="burger"></div>
                </div>
            </div>
            <div class="bottom-header">
                <img src="../../img/isotopo-montechelo.png" alt="">
            </div>
            <!-- links.  -->
            <div class="nav-icons">
                <div class="box__avatar d-none-desk">
                    <div class="avatar__menu">
                        <img src="../../img/<?php echo $_SESSION['img_profile'];?>" alt="">
                       <h2><?php echo $_SESSION['full_name']?></h2>
                       <span><?php echo translationRole($_SESSION['role']);?></span>
                    </div>
                </div>

                <?php include('links.html');?>
            </div>
        </nav>
    </header>