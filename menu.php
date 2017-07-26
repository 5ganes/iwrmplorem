<style type="text/css">
	#menu {
	    height: auto;
	    width: auto;
	}
	#menu ul {
	    margin: 0px;
	    padding: 0px;
	    list-style-type: none;
	}
	#menu ul li {
	    float: left;
	    position: relative;
	}
	#menu ul li a {
	    line-height: 30px;
	    text-decoration: none;
	    text-align: center;
	    display: block;
	    width: 100px;
	    height: 30px;
	    border: thin solid #999;
	    color: #FFF;
	    background-color: #0CF;
	    /*-webkit-transition: all 1s;
	    -moz-transition: all 1s;
	    -ms-transition: all 1s;
	    -o-transition: all 1s;
	    transition: all 1s;*/
	}
	#menu ul li a:hover {
	    background-color: #0C3;
	}
	#menu ul li ul {
	    position: absolute;
	    /*-webkit-transition: height 1s linear 0s;
	    -moz-transition: height 1s linear 0s;
	    -ms-transition: height 1s linear 0s;
	    -o-transition: height 1s linear 0s;*/
	    transition: height 1s linear 0s;
	    height: 0px;
	    overflow:hidden;
	}
	#menu ul li:hover ul {
	    height: 100px;
	    -webkit-transition: height 1s linear 0s;
	    -moz-transition: height 1s linear 0s;
	    -ms-transition: height 1s linear 0s;
	    -o-transition: height 1s linear 0s;
	    transition: height 1s linear 0s;
	}	
</style>

<div id="menu">
	<ul>
    	<li><a href="#">First</a></li>
        <li class="active"><a href="#">Second</a>
        	<ul class="child">
            	<li><a href="#">First child</a></li>
            	<li><a href="#">First child</a></li>
            	<li><a href="#">First child</a></li>
            	<li><a href="#">First child</a></li>
            </ul>
        </li>
        <li><a href="#">Third</a></li>
    </ul>
</div>