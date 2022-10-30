<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amazon-Clone</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" />
        <!-- Styles -->
       
    </head>
            <body>
                <header>
                    <div class="first">
                        <div class="flex logo">
                    <a href="#"><img src="https://clipartcraft.com/images/amazon-logo-transparent-high-resolution-5.png"alt=""></a>
                    <div class="map flex">
                    <i class="fas fa-map-marker"></i>
                  
                        <div>  
                        
                            <span>Deliver to</span>
                            <span>Germany</span>
                        </div>
                    </div>
        </div>

        <div class="flex input">
            <div>
                <span>All</span>
                <i class="fas fa-caret-down"></i>
                
            </div>
            <input type="text">
            <i class="fa fa-search"><i class="fa-solid fa-magnifying-glass"></i></i>
            
        </div>
        <div class="flex right">
                <div class="flex lang">
                    <img src="https://pngimg.com/uploads/flags/flags_PNG14592.png" alt="">
                    <i class="fas fa-caret-down"></i>
        </div>
        <div class="sign">
            <span>Hello,Sign In</span>
            <div class="flex-ac">
                <span>Account & List</span>
                <i class="fas fa-caret-down"></i>
        </div>
        </div>
        <div class="sign">
            <span>Returns</span>
            <span>& Orders</span>
        </div>
        <div class="flex cart">
        <i class="fas fa-shopping-cart"></i>
        <span class="ca">Cart</span>
        <p>0</p>
            
        </div>
        </div> 
        </div>  
        </div>
        </header>
    </body>
</html>




<style>
*{
    margin:0%;
    padding:0;
    text-decoration: none;
    box-sizing: border-box;
    list-style: none;
}
body{
    width: 100%;
    background-color: aliceblue;
    box-sizing: border-box;
}
.first{
    width: 100%;
    height: 70px;
    background-color: #131a22;
    display: flex;
    align-items: center;
    flex-direction: column;
}
.first img{
    width:130px;
    margin:0 10px;
    padding:5px 10px;
    border:1px solid transparent;
    border-radius:3px;
}
.first{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
}
.flex{
    display:flex;
    justify-content:center;
}
.flex span , i {
        color:white;
 }
.logo{
        flex:0.18;
        margin-right:10px;
        justify-content:space-between;
}
.map{
        border:1px solid transparent;
        border-radius:3px;
}
.map i {
        margin-top:17px;
        padding-left:5px;
        font-size:17px;
}
.map div{
    padding:5px;
    display:flex;
    cursor:pointer;
    flex-direction:column;

}
.map div span:first-child{
font-weight:400;
font-size:13px;

}
.map div span{
    font-weight:bold;
}

.right{
    justify-content:space-between;
    flex:0.29;
    margin-right:10px;
    align-items:center;
}
.input{
    width:100%;
    background-color:white;
    flex:0.53;
    border-radius:5px;
    display:flex;
    margin:0 10px;
    align-items:center;
    overflow:hidden;
    justify-content:space-between;

}


.input input{
    outline:none;
    width:80%;
    font-size:16px;
    padding:10px 2px;
    border:none;
}
.input .fa-search{
    color:rgb(51,51,51);
    padding:10px 15px;
    font-size:20px;
    cursor:pointer;
    background-color:#febd69;
    border-radius:0 5px 5px 0;
}
.input div{
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-right:1px solid gray;
    background-color:rgb(236,234,234);
    padding:6px 0;
}

.input div span{
    border-radius:5px 0 0 5px;
    color:rgb(51,51,51);
    padding:6px 5px;
    font-size:13px;
    cursor:pointer;

}
.input .fa-caret-down{
color:rgb(51,51,51);
cursor:pointer;
padding:5px;
}
.lang i{
    padding:0;
    margin:0;
    color:gray;

}
.lang{
    padding:5px;
    display:flex;
    justify-content:center;
    align-items:flex-end;
    border:1px solid transparent;
    border-radius:3px;
}
.right img{
    width:30px;
    height:30px;
    padding:4px;
    margin:0;
    padding-top:10px;
    cursor:pointer;
}
.sign{
    display:flex;
    flex-direction:column;
    padding:3px 6px;
    cursor:pointer;
    border:1px solid transparent;
    border-radius:3px;

}
.sign span:first-child{
    font-weight:400;
    font-size:13px;
}
.sign span{
    display:inline-block;
    width:100%;
    font-weight:bold;

}
.flex .ac span{
    font-size:15px;
    margin-right:5px;
    font-weight:bold;

}
.fa-shoping-cart{
    font-size:30px;

}
.ca{
    font-size:14px;
    font-weight:bold;
}
.cart{
    align-items:flex-end;
    position:relative;
    padding:5px 10px;
    cursor:pointer;
    border:1px solid transparent;
    border-radius:3px;

}
.cart p{
   position:absolute;
   font-weight:bolder; 
   color:#131a22;
   top:7px;
   left:23px;
}


</style>
