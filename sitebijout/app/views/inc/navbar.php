<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>">
          <img src="<?php echo URLROOT; ?>/images/logo.png" alt="">
          <span>
            <?php echo SITENAME; ?>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link " style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/pages/about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/articles/index"> Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/pages/contact"> Contact</a>
              </li>
            
          <?php if(isset($_SESSION['user_id'])) : ?>
            <?php if($_SESSION['user_id'] == 7) : ?>
               <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/articles/dashbord"> Dashbord</a>
              </li> 
              <?php endif; ?>
            <li class="nav-item">
            <a href="<?php echo URLROOT; ?>/users/logout">  <svg    class="d-none d-lg-block" style="margin: 27%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" ><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z" fill="rgba(255,255,255,1)"/></svg>     </a>  
            <a href="<?php echo URLROOT; ?>/users/logout"> <svg   class="d-lg-none" style="margin:40%"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z"/></svg> </a>
            </li>
            
           <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/users/login"> login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/users/register"> register</a>
              </li>
            <?php endif; ?>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
</div>
