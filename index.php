<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id='container'>
        <div class='gpa' id='g'>
            <h2>GET</h2>
            <label for="x5">
                BMW x5
                <input type="radio" class='gt' id='x5' name="x"/>
            </label>
            <label for="x6">
                BMW x6
                <input type="radio" class='gt' id='x6' name="x"/>
            </label>
            <label for="x3">
                BMW x3
                <input type="radio" class='gt' id='x3' name="x"/>
            </label>
            <button id='sendget'>SEND</button>
        </div>
        <div class='gpa' id='p'>
            <h2>POST</h2>
            <div>
            VW GOLF
            <input type="checkbox" name='golf' id='golf'/>
            </div>
            <div>
            VW Sprinter
            <input type="checkbox" name='spr' id='spr'/>
            </div>
            <div>
            VW Touran
            <input type="checkbox" name='touran' id='tour'/>
            </div>
            <div>
            VW Sharan
            <input type="checkbox" name='sharan' id='shar'/>
            </div>
            <button id='sendpost'>SEND</button>
        </div>
        <div class='gpa' id='a'>
            <h2>AJAX</h2>
            <select name="s" id="s">
                <option value=""></option>
                <option value="mc">C-Class</option>
                <option value="mb">B-Class</option>
                <option value="mg">G-Class</option>
            </select>
        </div>
    </div>
    <div id='result'>
        <div id='bigdiv'>
            <div id='f'></div>
            <div id='t'></div>
            <div id='th'></div>
            <div id='fo'></div>
        </div>
    </div>
    <script>
        $('#sendget').click(function(){
            let car=0;
            if(x5.checked){
                 car=1;
            }
            else if(x6.checked){
                 car=2;
            }
            else{
                car=3;
            }  
             $.get("get.php",{selectedcar:car},function(ardyunq){
                $("#f").css({"background-image": "url(" + + ")"});
                $("#t").css({"background-image": "url(" +  +")"});
                $("#th").css({"background-image": "url(" + + ")"});
                $("#fo").css({"background-image": "url(" + + ")"});
                $("#bigdiv").css({"background-image": "url(" + ardyunq+ ")"});
             })
            }
        )
        $('#sendpost').click(function(){
            let arr=[];
            if(golf.checked){
                 arr.push('https://th.bing.com/th/id/R.b4a298f8da3afede9b672d41706bbf54?rik=%2bme2wMeX2VohGw&pid=ImgRaw&r=0');
            }
            if(tour.checked){
                 arr.push('https://th.bing.com/th/id/R.cfe56e2175a8d0b2ffa1d7a9b01aaab6?rik=YuZvYYOUhJ%2bi9Q&pid=ImgRaw&r=0')
            }
            if(shar.checked){
                arr.push('https://th.bing.com/th/id/R.5090384d77dca406ab618cf62d757849?rik=2%2fq5yBD4woh%2f5g&riu=http%3a%2f%2fwww.carpixel.net%2fw%2f7f48660fc46c4e13cff9a5e4985c3506%2fvolkswagen-sharan-wallpaper-hd-43306.jpg&ehk=2NbS7hjKphVH6A4rtkU0eHU7WkW%2b3mW7%2b631wgwMJWc%3d&risl=&pid=ImgRaw&r=0')
            } 
            if(spr.checked){
                arr.push('https://th.bing.com/th/id/R.f3d487a0254ca5a82dc46cdd24ffcfa5?rik=3XOnexqGqGICig&pid=ImgRaw&r=0')
            } 
            console.log(arr)      
             $.post("post.php",{array:arr},function(ardyunq){
                let norardyunq=JSON.parse(ardyunq)
                console.log(norardyunq)
                $("#bigdiv").css({"background-image": "url(" + + ")"});
                $("#f").css({"background-image": "url(" + norardyunq[0]+ ")"});
                $("#t").css({"background-image": "url(" + norardyunq[1]+ ")"});
                $("#th").css({"background-image": "url(" + norardyunq[2]+ ")"});
                $("#fo").css({"background-image": "url(" + norardyunq[3]+ ")"});
            })
            }
        )

        s.oninput=function(){
            let sv=document.getElementById("s").value;
            console.log(sv)
        $.ajax({
            type:'POST',
            url:'ajax.php',
            cache:false,
            error:function(tvyalner){
                	console.log(tvyalner.status +' '+tvyalner.statusText)
            },
            data:"svalue="+sv,
            success:function(ardyunq){
                $("#f").css({"background-image": "url("+ +")"});
                $("#t").css({"background-image": "url("+  +")"});
                $("#th").css({"background-image": "url("+ +")"});
                $("#fo").css({"background-image": "url("+ +")"});
                $("#bigdiv").css({"background-image": "url(" + ardyunq+ ")"});
            }
        }
        )   
    } 
    </script>
</body>
</html>