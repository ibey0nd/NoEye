<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NoEYE</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
    body {
		    background-color: #fff;
		    margin: 40px;
		    font: 13px/20px normal Helvetica, Arial, sans-serif;
		    color: #4F5155;
		}
        h1 {
		    color: #444;
		    background-color: transparent;
		    
		    font-weight: normal;
		    margin: 0 0 14px 0;
		    padding: 14px 15px 10px 15px;
		}
    </style>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.html"); 
    }
?>
<div style="text-align:center;"><H1> No EYE</H1></div>


<div style="text-align:center;">
    <H2>http://<?php echo $_SERVER['HTTP_HOST'].'/'.$_SESSION['username'].'/'.'CODE';?></H2>
</div>

<div class="container">
        
		<div class="row" style="margin-top:100px;">
           <!--
           暂时不需要添加项目的功能
			<div class="col-md-4">
               <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">项目列表</h3>
                </div>
                <div class="panel-body">
                    <ul>
                   
                      <li><a href=""><h5>sdfsdfsd</h5></a></li>
                      <li><a href=""><h5>me</h5></a></li>
                      <li><a href=""><h5>user</h5></a></li>
                    </ul>
                </div>
                </div>
		    </div>
-->

            <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    <h3 class="panel-title">数据列表</h3>
                </div>
                <div class="panel-body">

                        <table class="table">
                            <thead>
                                <tr>
                                <th>编号</th>
                                <th>数据</th>
                                <th>来源IP</th>
                                 <th>UA</th>
                                <th>时间</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                require_once './lib/config.php';
                                $username=$_SESSION['username'];
                                $res = mysql_query("select * from record where username='$username'");
                                while($row = mysql_fetch_array($res,MYSQL_ASSOC)){
                                    echo "<tr>";
                                    echo "<td>{$row['id']}</td>";
                                    echo "<td>{$row['data']}</td>";
                                    echo "<td>{$row['ip']}</td>";
                                    echo "<td>{$row['ua']}</td>";
                                    echo "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
                                   
                                    echo "</tr>";
                                    

                                }
                                

                                
                              ?>
                                
                               
                            </tbody>
                            </table>


                  
                </div>
                </div>
		    </div>


            

        





	    </div>
</div>
    
</body>
</html>