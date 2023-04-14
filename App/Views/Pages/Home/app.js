var imgFeature = document.querySelector('.img-feature')
var listImg = document.querySelectorAll('.list-img img')
var prevBtn = document.querySelector('.prev')
var nextBtn = document.querySelector('.next')

var currenIndex = 0;

function updateImgByIndex(index){
    document.querySelectorAll('.list-img img').forEach(item=>{
        item.classList.remove('active2')
    })

    currenIndex = index
    imgFeature.src = listImg[index].getAttribute('src')
    listImg[index].classList.add('active2')
}

listImg.forEach((imgElement, index)=>{


    imgElement.addEventListener('click',e=>{
        updateImgByIndex(index)
    })
})

prevBtn.addEventListener('click', e=>{
    if(currenIndex == 0){
        currenIndex = listImg.length - 1
    }
    else{
        currenIndex--
    }
    updateImgByIndex(currenIndex)
})

nextBtn.addEventListener('click', e=>{
    if(currenIndex == listImg.length - 1 ){
        currenIndex = 0
    }
    else{
        currenIndex++
    }
    updateImgByIndex(currenIndex)
})

updateImgByIndex(0)

$(document).ready(function(){
    $(".sidebar-btn").click(function(){
        console.log("sdvnsdivsijvnsdfsjkjsnkdsnvkjdsnjvsd")
        $(".wrapper").toggleClass("Mycollapse");
    });
});
