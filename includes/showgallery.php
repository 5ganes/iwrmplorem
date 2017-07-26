<style type="text/css">
    .photo-gallery{
      display: flex;flex-wrap: wrap; margin: 0 0 0em -3em; width: calc(100% + 6em); margin-top: 2%;
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

    .photo-gallery article img{
      width: 100%; border-radius: 10px;
      -moz-transition: transform 1s;
        -webkit-transition: transform 1s;
        -ms-transition: transform 1s;
      transition: transform 1s;
    }
    .photo-gallery article img:hover{
      box-shadow: 6px 6px 16px gray;
      -moz-transform: rotate(00deg);
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg); opacity: 1; width: 100%;
      /*position: absolute; overflow: hidden;*/
    }
    /* Styles the lightbox, removes it from sight and adds the fade-in transition */
    .lightbox-target {
    position: fixed;
    top: -100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    width: 100%;
    opacity: 0;
    -webkit-transition: opacity .5s ease-in-out;
    -moz-transition: opacity .5s ease-in-out;
    -o-transition: opacity .5s ease-in-out;
    transition: opacity .5s ease-in-out;
    overflow: hidden;
    }

    /* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */
    .lightbox-target img {
      margin: auto;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      max-height: 0%;
      max-width: 0%;
      border: 3px solid white;
      box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
      box-sizing: border-box;
      -webkit-transition: .5s ease-in-out;
      -moz-transition: .5s ease-in-out;
      -o-transition: .5s ease-in-out;
      transition: .5s ease-in-out;
    }

    /* Styles the close link, adds the slide down transition */
    a.lightbox-close {
      display: block;
      width: 50px;
      height: 50px;
      box-sizing: border-box;
      background: white;
      color: black;
      text-decoration: none;
      position: absolute;
      top: -80px;
      right: 0;
      -webkit-transition: .5s ease-in-out;
      -moz-transition: .5s ease-in-out;
      -o-transition: .5s ease-in-out;
      transition: .5s ease-in-out;
    }

    /* Provides part of the "X" to eliminate an image from the close link */
    a.lightbox-close:before {
      content: "";
      display: block;
      height: 30px;
      width: 1px;
      background: black;
      position: absolute;
      left: 26px;
      top: 10px;
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    /* Provides part of the "X" to eliminate an image from the close link */
    a.lightbox-close:after {
      content: "";
      display: block;
      height: 30px;
      width: 1px;
      background: black;
      position: absolute;
      left: 26px;
      top: 10px;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    /* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */
    .lightbox-target:target {
      opacity: 1;
      top: 0;
      bottom: 0;
      left: 0em;
      z-index: 999;
    }

    .lightbox-target:target img {
      max-height: 100%;
      max-width: 100%;left: 0;
    }

    .lightbox-target:target a.lightbox-close {
      top: 0px;
    }
</style>
<script type="text/javascript">
  function imagePopUp(imgurl){
    $('#pop').attr('src', imgurl);
  }
</script>

<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $content=$groups->getById($pageId);
                $contentGet=$conn->fetchArray($content);
                if($lan!='en')
                   echo $contentGet['contents'];
                else echo $contentGet['contentsen'];
            ?>
        </div>
        <div class="page-row photo-gallery">
            <?php
            $row = $groups->getById($pageId);
            $row = $conn->fetchArray($row);
            $photo = $groups->getByParentId($pageId);
            while($photoGet = $conn->fetchArray($photo)){?>
              <article>
                <p>
                <a href="<?php if($lan=='en') echo 'en/'; echo $row['urlname'];?>#goofy" onclick="imagePopUp('<?php echo CMS_GROUPS_DIR.$photoGet['image'];?>')">
                   <img src="<?php echo CMS_GROUPS_DIR.$photoGet['image'];?>">
                </a>
                </p>
                <h3>
                    <?php if($lan=='en') echo $photoGet['shortcontents']; else echo $photoGet['shortcontents'];?>
                </h3>
              </article>
            <?php }?>
        </div>
        <div class="lightbox-target" id="goofy">
           <img id="pop" src=""/>
           <a href="<?php if($lan=='en') echo 'en/'; echo $row['urlname'];?>#" style="background:white; padding: 1em;color: green">Cancel</a>
        </div>
    </div>            
</div>