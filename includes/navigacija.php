<div class="topara">
    <div class="info">
        <div class="goreDesno">
        <a id="kontaktTelefon" href="tel:+381601234567">+381/60 1234567</a>
            <span>&nbsp|&nbsp</span>
            <span class="zemljaHeader">Srbija</span>
        </div>
    </div>
    <nav class="navigacioniMeni">
        <div class="levo direkcija">
        <?php include 'includes/hamburgerKolekcija.php';?>
                <a href="index.php" class="monaPocetnaLink">MONA</a>
        </div>
        

        <div class="desno direkcija ">

            <ul class="navDugmici">
                
        <?php 
            if(isset($_SESSION['korisnikID']))
            {
                $link = "profil.php";
            }
            else{
                $link = "login.php";
            }
             if(isset($_SESSION["korisnikID"])): 
        ?>

            <a href="skripte/odjava.php">
                <li class="navigacioniDugmici" id="odjavaIkonica">
                    <img src="https://www.svgrepo.com/show/21304/logout.svg" style="width:25px; height:25px; margin-top:20%;" alt="">
                </li>
                </a>
        <?php endif; ?>
                <a href="<?php echo $link;?>">
                <li class="navigacioniDugmici" id="profilIkonica">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><path fill="none" d="M0 0h32v32H0z"></path><path d="M28.44 23.64c-.46-.62-1.08-1.11-1.86-1.47-1.83-.82-3.62-1.44-5.39-1.86-1.76-.42-3.49-.64-5.19-.64s-3.43.21-5.19.64-3.58 1.04-5.44 1.86c-.75.36-1.36.85-1.81 1.47-.46.62-.69 1.31-.69 2.06V28h26.26v-2.3c0-.75-.23-1.44-.69-2.06Zm-.39 3.28H3.95V25.7c0-.49.17-.96.51-1.42.34-.46.82-.85 1.44-1.18 1.63-.82 3.29-1.41 4.97-1.79 1.68-.38 3.39-.56 5.12-.56s3.43.19 5.09.56c1.67.38 3.33.97 5 1.79.62.33 1.1.72 1.44 1.18.34.46.51.93.51 1.42v1.22ZM19.67 5.44C18.69 4.48 17.47 4 16 4s-2.69.48-3.67 1.44-1.47 2.18-1.47 3.65.49 2.74 1.47 3.72 2.2 1.47 3.67 1.47 2.69-.49 3.67-1.47 1.47-2.22 1.47-3.72-.49-2.69-1.47-3.65Zm-.78 6.59c-.78.78-1.75 1.18-2.89 1.18s-2.11-.39-2.89-1.18-1.18-1.75-1.18-2.89.39-2.11 1.18-2.89c.78-.78 1.75-1.18 2.89-1.18s2.11.39 2.89 1.18S20.07 8 20.07 9.14s-.39 2.11-1.18 2.89Z"></path></svg>
                </li>
            </a>
                <a href="korpa.php">
                <li class="navigacioniDugmici" id="korpaIkonica">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><path fill="none" d="M0 0h32v32H0z"></path><path d="M20.5 9.33V8.5c0-1.24-.43-2.31-1.3-3.18C18.33 4.44 17.27 4 16 4s-2.33.44-3.2 1.32c-.87.88-1.3 1.94-1.3 3.18v.83H6.67V28h18.66V9.33H20.5Zm-8-.83c0-.98.34-1.8 1.02-2.47.68-.67 1.51-1 2.48-1s1.81.33 2.48 1c.68.67 1.02 1.49 1.02 2.47v.83h-7V8.5Zm11.8 18.47H7.7v-16.6h3.8v4h1v-4h7v4h1v-4h3.8v16.6Z"></path><path fill="none" d="M0 0h32v32H0z"></path></svg>
                </li>
                </a>
            </ul>
        </div>

    </nav>
    </div>