<?php $lan=$_GET['lan'];?>
<script language="javascript">
  function validateform(fm){
    // alert('sdf');
      if(fm.name.value == ""){
          alert("Please type your Name.");
          fm.name.focus();
          return false;
      } 
      var goodEmail = fm.email.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);    
      if(fm.email.value == ""){
          alert("Please type your E-mail.");
          fm.email.focus();
          return false;
      }
      if (!goodEmail) {
          alert("The Email address you entered is invalid please try again!")
          fm.email.focus()
          return (false);
      }
      if(fm.subject.value == ""){
          alert("Please type Subject.");
          fm.subject.focus();
          return false;
      }     
      if(fm.comment.value == ""){
          alert("Please type your Comment.");
          fm.comment.focus();
          return false;
      }
      if(fm.security_code.value == ""){
          alert("Please enter security code.");
          fm.security_code.focus();
          return false;
      }
      else if(fm.security_code.value.length < 6)
      {
          alert("Please enter valid length security code.");
          fm.security_code.focus();
          return false;
      }
  }
</script>
<style type="text/css">
    .error-msg{
          padding: 1%; background: #c76353; color: white; margin-bottom: 1%; margin: 0.5%;
    }
</style>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'Our Contact Information'; else echo 'हाम्रो सम्पर्क';?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $content=$groups->getByURLName(CONTACT);
                // $contentGet=$conn->fetchArray($content);
                if($lan!='en')
                   echo $content['contents'];
                else echo $content['contentsen'];
            ?>
        </div>
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'Send Us Feedback'; else echo 'प्रतिक्रिया पठाउनुहोस';?></h3></div>
        <?php global $feedbackmsg; if(!empty($feedbackmsg)) $msg = $feedbackmsg; else if(isset($_REQUEST['msg'])) $msg = $_REQUEST['msg'];
        if(!empty($msg)){?>
            <div class="error-msg"><?php echo $msg;?></div>
        <?php }?>
        <div class="panel-body dynamic">
            <form id="contact_us" name="contact_us" action="" method="post" onSubmit="return validateform(this);">
                <div>
                  <p> नाम </p>
                  <input type="text" required="" placeholder="Name *" name="name" id="name">
                </div>
                <div>
                  <p> ठेगाना </p>
                  <input type="text" placeholder="Address" name="address" id="address">
                </div>
                <div>
                  <p> फोन नं. </p>
                  <input type="text" placeholder="Phone" name="phone" id="phone">
                </div>
                <div>
                  <p> ईमेल </p>
                  <input type="text" required="" placeholder="E-Mail *" name="email" id="email">
                </div>
                <div>
                  <p> बिषय </p>
                  <input type="text" required="" placeholder="Subject *" name="subject" id="subject">
                </div>
                <div>
                  <p> प्रतिक्रिया </p>
                  <textarea id="comment" required="" cols="60" name="comment" rows="7" placeholder="Your Comment *"> </textarea><br>
                </div>
                <div>
                    <p>Security Code:</p>
                    <p>
                        <img src="includes/captcha.php?width=110&height=40&characters=6" id="captchaimage" />
                        <a href="javascript: void(0);" onclick="document.getElementById('captchaimage').src = 'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); return false;" class="captchaReload">[ Reload Image ]</a>
                    </p>
                </div>
                <div>
                    <input type="text" required="" placeholder="Enter security code" maxlength="6" name="security_code" id="security_code">
                </div>
                <button type="submit" name="btnFeedback" class="btn btn-success btn-lg"><i class="fa fa-send"></i> Send Feedback</button>
            </form>
        </div>
    </div>            
</div>