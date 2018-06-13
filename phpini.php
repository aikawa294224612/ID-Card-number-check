<html>
<head>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript">
	var xmlHTTP;
function $_xmlHttpRequest()
{   
    if(window.ActiveXObject)
    {
        xmlHTTP=new ActiveXObject("Microsoft.XMLHTTP");
    }
    else if(window.XMLHttpRequest)
    {
        xmlHTTP=new XMLHttpRequest();
    }
}
function check()
{  
    var select_op=document.getElementById("id").value;
    
    $_xmlHttpRequest();
    xmlHTTP.open("GET","check.php?id="+select_op,true);
	 xmlHTTP.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 2000 00:00:00 GMT' );  //#####
    
        xmlHTTP.onreadystatechange=function check_user()
        {
            if(xmlHTTP.readyState == 4)
            {
                if(xmlHTTP.status == 200)
                {
                    var str=xmlHTTP.responseText;
                    document.getElementById("message").innerHTML=str;
                }
            }
        }
        xmlHTTP.send(null);
    }
	
	function check2()
{  
  
    $_xmlHttpRequest();
    xmlHTTP.open("GET","check2.php",true);
	 xmlHTTP.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 2000 00:00:00 GMT' );  //#####
    
        xmlHTTP.onreadystatechange=function check_user()
        {
            if(xmlHTTP.readyState == 4)
            {
                if(xmlHTTP.status == 200)
                {
                    var str=xmlHTTP.responseText;
                    document.getElementById("message2").innerHTML=str;
                }
            }
        }
        xmlHTTP.send(null);
    }

	</script>
</head>
<body>
<h1>身分證</h1>
<p>驗證是否正確</p>
<input type="text" name="id" id="id"/>
<input type="submit" value="Submit" onclick="check()"/>
<span id="message" style="color:Red"></span>

<p>隨機</p>
<input type="submit" value="Submit" onclick="check2()"/>
<span id="message2" style="color:Red"></span>
</body>
</html>
