<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .preview{
            width: 50%;
            left: 0;
            }
        .items-preview{
            padding: 20px;
        	}

        .preview-pic{
        	height: 65px;
        	width: 55px;
        }	
        	
        ul{
        	padding: 200px;
        	list-style: none;
        }
        ul li{
        	display: inline-block;
        	
        	border: 1px solid slategrey;
        	padding: 8px;
        	border-radius: 10px;
        	position: relative;
        }
        
        .preview-tab{
        	display: none;
        	height: 170px;
        	width: 110px;
        	position: absolute;
        	top: -185px;
        }
        ul li:hover .preview-tab{
        	display: block;
        }

        .preview{
        	background-color: #fff;
        }
    </style>
</head>
<body>

<div class="preview">
    <div class="preview-screen"></div>
    <div class="items-preview">
        
        <ul>
        	<li><img class="preview-pic" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
        		<div><img class="preview-tab" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}"></div>
        	</li>
        	<li><img class="preview-pic" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
        		<div><img class="preview-tab" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}"></div>
        	</li>
        	<li><img class="preview-pic" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
        		<div><img class="preview-tab" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}"></div>
        	</li>
        	<li><img class="preview-pic" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
        		<div><img class="preview-tab" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}"></div>
        	</li>
        	<li><img class="preview-pic" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
        		<div><img class="preview-tab" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}"></div>
        	</li>
        </ul>

    </div>
</div>


</body>
</html>