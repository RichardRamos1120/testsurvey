let question_field = document.querySelector(".questions_field");

let questions_field__div1 = document.querySelector("#questions_field__div1");
let questions_field__div2 = document.querySelector("#questions_field__div2");
let next_btn1 = document.querySelector("#next_btn1");
let next_btn2 = document.querySelector("#next_btn2");

let startBtn = document.querySelector("#startbtn");
startBtn.addEventListener("click",()=>{
    startBtn.parentElement.classList.add("hide")
    questions_field__div1.classList.remove("hide")

})

next_btn1.addEventListener("click",()=>{
    questions_field__div1.classList.add("hide");
    questions_field__div2.classList.remove("hide");
})



//input the place
let questions_field__div3 = document.querySelector("#questions_field__div3");

let answ1 = "n/a";
let answ2 = "n/a";
let imgVal;
let question3 = document.querySelector("#question3");
next_btn2.addEventListener("click",()=>{
    questions_field__div2.classList.add("hide");
    questions_field__div3.classList.remove("hide");
    document.querySelector("#next_btn3").classList.remove("hide");

    answ1 = document.querySelector("[name='fav_fruit']");
    answ2 = document.querySelector("[name='visit_country']");

    question3.innerText = `Based on your previous answers you are more likely to enjoy living at ${answ1.value} County inside ${answ2.value} Country`;

    if (answ2.value == "Japan" || answ2.value == "japan"){
        document.querySelector("#answ_img").src = "public/img/japan.png";
        imgVal = document.querySelector("#answ_img").src = "public/img/japan.png";
    }
    else if(answ2.value == "South korea" || answ2.value == "south korea"){
        document.querySelector("#answ_img").src = "public/img/korea.png";
        imgVal = document.querySelector("#answ_img").src = "public/img/korea.png";
    }
    else if(answ2.value == "usa" || answ2.value == "USA"){
        document.querySelector("#answ_img").src = "public/img/usa.png";
        imgVal = document.querySelector("#answ_img").src = "public/img/usa.png";
    }


})

next_btn3.addEventListener("click",()=>{

    generatePdf()


})
//generate pdf file
function generatePdf(){
    const element = document.querySelector("#questions_field__div3");
    html2pdf().from(element).save();
}











