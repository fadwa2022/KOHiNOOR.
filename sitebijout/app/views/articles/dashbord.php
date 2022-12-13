<?php require  APPROOT .'/views/inc/header.php';?>
  <!-- price section -->
  <section class="price_section layout_padding">
  <div class="container">
  <?php flash('artile add');?>

          <div class="heading_container  d-flex justify-content-between">
            <a href="<?php echo URLROOT; ?> /articles/add" class="btn btn-warning pull-right"  style=" font-size: 1em;"><i class="ri-pencil-line">Add Article</i></a>

          </div>
          <?php flash('artile_message');?>

          <div class="price_container" style=" display: flex;  flex-direction: column;">
          <?php foreach($data['articles'] as $article): ?>

              <div class="box " style="
    display: flex;
    flex-direction: row;
    justify-content: space-around;min-width: 100%;
    height: auto;
    padding: 0%;     margin-bottom: auto;" >
    
                  <div class="name">
                      <h6>
                      <?php echo $article->name_prod ;?>
                      </h6>
                  </div>
              
                  <div class="detail-box">
                      <h5>
                          $<span> <?php echo $article->prix ;?></span>
                          <!-- <span> <?php echo $article->quantite ;?></span> -->
                      </h5>
                  </div>
                  <div class="detail-box">
                      <h5>
                          <span> <?php echo $article->quantite ;?></span>
                      </h5>
                  </div>
                  <div class="img-box" style="width:auto ;">
                      <img src="<?php echo URLROOT; ?> <?php echo $article->image ;?>" alt="">
                  </div>
              </div>
         <?php endforeach;?>

          </div>

      </div>
  </section>
  <!-- end price section -->
  

<?php require  APPROOT .'/views/inc/footer.php';?>
