<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/css/app.css')
</head>
<body>
    <!-- {{print_r(URL(''))}} -->
    <div class="one">
        <div class="left">
            <img src="{{ URL('images/menu.png') }}" alt="menu" class="menu">
            <img src="{{ URL('images/cat.png') }}" alt="cat" class="cat">
                
            <h2 class="h2">zaneCoder / mortdash</h2>
            <img src="{{ URL('images/lock.png') }}" alt="lock" class="lock">
        </div>

        <div class="right">
            <div class="search-div">
                <img src="{{url('images/search.png')}}" alt="" class="search-logo">
                <img src="{{url('images/slash.png')}}" alt="" class="slash">
                <input type="text" name="" class="search" value="Type         to search">
            </div>

            <div class="chatbot-div">
                
                <select name="" class="chatbot"></select>
                <img src="{{url('images/bot.png')}}" class="bot">
            </div>
            <p>|</p>

            <div class="plus-div">
                
                <select name="" class="select-plus"></select>
                <img src="{{url('images/plus.png')}}" class="plus">
            </div>
            <div class="circle-div">
                <img src="{{url('images/circle.png')}}" class="circle">
            </div>

            <div class="a-div">
                <img src="{{url('images/1.png')}}" class="a">
            </div>
            <div class="disc-div">
                <img src="{{url('images/disc.png')}}" class="disc">
            </div>
            <div class="logo-div">
                <img src="{{url('images/logo2.png')}}" class="logo">
            </div>
            
        </div>
        
    </div>
    <div class="two">
        <div style="display: flex; align-items: center; margin-left: 15px">
            <p  class="code"><></p>
            <p class="word">Code</p>
        </div>
        <div>
            <p  class="word">Issues</p>
        </div>
        <div>
            <p  class="word">Pull Requests</p>
        </div>
        <div>
            <p  class="word">Actions</p>
        </div>
        <div>
            <p  class="word">Projects</p>
        </div>
        <div>
            <p  class="word">Security</p>
        </div>
        <div>
            <p  class="word">Insights</p>
        </div>
        <div>
            <p  class="word">Settings</p>
        </div>
    </div>
    <div class="three">div three</div>
</body>
</html>