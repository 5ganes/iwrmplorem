<?php $lan=$_GET['lan']; ?>
<style type="text/css">
    .photo-gallery{
      display: flex;flex-wrap: wrap; margin: 0 0 0em -3em; width: calc(100% + 6em);margin-top: 2%;
    }
    .photo-gallery article{
      width: 24%;margin: 0 0 4% 7%;
    }
    .photo-gallery article img{
      width: 100%; border-radius: 10px;
      -moz-transition: transform 1s;
        -webkit-transition: transform 1s;
        -ms-transition: transform 1s;
      transition: transform 1s;
    }
    .photo-gallery article img:hover{
      box-shadow: 6px 6px 16px gray;
      -moz-transform: rotate(360deg);
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg); opacity: 0.7;
      /*position: absolute; overflow: hidden;*/
    }
    .photo-gallery article h3{
      border-bottom: none;text-align: center;
    }

    @media screen and (max-width: 600px){
      .photo-gallery{
        flex-direction: column;
      }
      .photo-gallery article{
        width: 78%; margin:0 0 4% 11%;
      }
      .photo-gallery img{
        /*width: 80%;*/
      }
    }
    @media screen and (min-width: 601px) and (max-width: 900px){
      .photo-gallery article{
        width: 35%;
      }
    }
</style>

<div class="col-md-9">
    <div class="panel panel-primary">
        <?php $row=$groups->getByURLName('photo-gallery'); ?>         
        <div class="panel-heading"><h3><?php if($lan=='en') echo $row['nameen']; else echo $row['name'];?></h3></div>
        <div class="panel-body dynamic">
            <?php
              if($lan!='en') echo $row['contentsen'];
              else echo $row['contents'];
            ?>
        </div>
        <div class="page-row photo-gallery">
            <?php
            $photo = $groups->getByParentId(PHOTO_GALLERY);
            while($photoGet = $conn->fetchArray($photo)){?>
              <article>
                <p>
                  <a href="<?php if($lan=='en') echo 'en/'; echo $photoGet['urlname'];?>"><img src="<?php echo CMS_GROUPS_DIR.$photoGet['image'];?>"></a>
                </p>
                <h3>
                  <a href="<?php echo $photoGet['urlname'];?>">
                    <?php if($lan=='en') echo $photoGet['nameen']; else echo $photoGet['name'];?>
                  </a>
                </h3>
              </article>
            <?php }?>
        </div>
    </div>            
</div>