const MenuItems = document.getElementById("MenuItems")

MenuItems.style.maxHeight = "0px";

function menutoggle(){
    if(MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight = "200px";
    }
    else{
        MenuItems.style.maxHeight = "0px";
    }
}

//-----js  for product gallery----
const ProductImg = document.getElementById("ProductImg");
const SmallImg = document.getElementsByClassName("small-img");
//var i=-1;
//for(i;i<4;i++){
    SmallImg[0].addEventListener('mouseenter',function(){
        ProductImg.src = SmallImg[0].src;
    })
    SmallImg[1].addEventListener('mouseenter',function(){
        ProductImg.src = SmallImg[1].src;
    })
    SmallImg[2].addEventListener('mouseenter',function(){
        ProductImg.src = SmallImg[2].src;
    })
    SmallImg[3].addEventListener('mouseenter',function(){
        ProductImg.src = SmallImg[3].src;
    })

//}