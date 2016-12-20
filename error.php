<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
		body {
		    background-color: #fff;
		    margin: 40px;
		    font: 13px/20px normal Helvetica, Arial, sans-serif;
		    color: #4F5155;
		}
		h1 {
		    color: #444;
		    background-color: transparent;
		    border-bottom: 1px solid #D0D0D0;
		    font-size: 19px;
		    font-weight: normal;
		    margin: 0 0 14px 0;
		    padding: 14px 15px 10px 15px;
		}
		#container {
		    margin: 10px;
		    border: 1px solid #D0D0D0;
		    -webkit-box-shadow: 0 0 8px #D0D0D0;
		}
		p {
		    margin: 12px 15px 12px 15px;
		}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

    <div id="container">
        <h1>小提示</h1>	
        <p><?php 
		if($_GET['id']==1){
			echo "<p style='color:red;'>"."还TM的想注入，这个是最骚的。少年，加油~~~"."</p>";
		}else if($_GET['id']==2) {
			echo "目测用户名密码不对呢";
		}else{
			echo "嗨呀，服务器坏了，好气";
		}
		
		
		?></p>
    </div>
</body>

</html>