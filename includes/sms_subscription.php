<style type="text/css">
    .error-msg{
          padding: 1%; background: #c76353; color: white; margin-bottom: 1%; margin: 0.5%;
    }
    .subscription p{
      font-weight: bold;
    }
</style>
<script type="text/javascript">
    function ajaxinsert()
    {
        var name = document.getElementById("name");
        var address = document.getElementById("address");
        var email = document.getElementById('email');
        var profession = document.getElementById('profession');
        var mobile = document.getElementById("mobile");
        var ncellmobile = document.getElementById('ncellmobile');
    
        document.getElementById("msg").style = "margin:1%; color:red; display:block";
        if(name.value=="")
        {
            document.getElementById("msg").innerHTML="Please enter your name"; name.focus(); exit();
        }
        if(address.value=="")
        {
            document.getElementById("msg").innerHTML="Please enter your address"; address.focus(); exit();
        }
        if(mobile.value=="" || isNaN(mobile.value) || mobile.value.length>10 || mobile.value.length<10)
        {
            document.getElementById("msg").innerHTML="Please enter valid mobile number"; mobile.focus(); exit();
        }
        else
        {
            //alert(urlname);
            var xmlHttp;
            if(window.XMLHttpRequest)
            {
                xmlHttp=new XMLHttpRequest();
            }
            else
            {
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlHttp.onreadystatechange=function()
            {
                if (xmlHttp.readyState==4)
                {
                    document.getElementById("msg").innerHTML = xmlHttp.responseText;
                }
            };
            
            xmlHttp.open("POST", 'savemobile.php', true);
            var data = new FormData();
            data.append('name', name.value);
            data.append('address', address.value);
            data.append('email', email.value);
            data.append('profession', profession.value);
            data.append('mobile', mobile.value);
            data.append('ncellmobile', ncellmobile.value);
            xmlHttp.send(data);
        }
    }
</script>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'SMS Subscription'; else echo 'SMS Subscription';?></h3></div>
        <!-- <div class="panel-body dynamic">
            
        </div> -->
  
        <div id="msg" style="display: none;"></div>

        <div class="panel-body dynamic subscription">
            <form id="contact_us" name="contact_us" action="#" method="post">
                <div>
                  <p> नाम </p>
                  <input type="text" placeholder="Name *" name="name" id="name">
                </div>
                <div>
                  <p> ठेगाना </p>
                  <input type="text" placeholder="Address *" name="address" id="address">
                </div>
                <div>
                  <p> इमेल </p>
                  <input type="email" placeholder="Email (Optional)" name="email" id="email">
                </div>
                <div>
                  <p> व्यवसाय </p>
                  <input type="text" placeholder="Eg - Farmer, Teacher etc (Optional)" name="profession" id="profession">
                </div>
                <div class="mobile-block">
                  <p> फोन नं. </p>
                  <span>NTC: <input type="number" placeholder="Enter your NTC mobile number *" name="mobile" id="mobile"></span>
                  <span>NCELL: <input type="number" placeholder="Enter your NCELL mobile number(Optional)" name="ncellmobile" id="ncellmobile"></span>
                </div>
                <input class="btn btn-success btn-lg" type="button" name="subscribe" value="Subscribe" onclick="ajaxinsert()">
            </form>
        </div>
    </div>            
</div>