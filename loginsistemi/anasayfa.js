const kayitOl=document.querySelector("#kayit-ol");
const isim=document.querySelector("#isim");
const soyisim=document.querySelector("#soyisim");
const email=document.querySelector("#email");
const parola=document.querySelector("#parola");
const input = document.querySelector("input");




    

setInterval(function(){

    if(isim.value==""){
        kayitOl.classList.remove("bg-success")
        kayitOl.classList.add("disabled")}
        else{ kayitOl.classList.add("bg-success")
            kayitOl.classList.remove("disabled")
        }
    if(soyisim.value==""){ kayitOl.classList.remove("bg-success")
        kayitOl.classList.add("disabled" )}
        else{ kayitOl.classList.add("bg-success")
            kayitOl.classList.remove("disabled")
        }
    if(email.value==""){ kayitOl.classList.remove("bg-success")
        kayitOl.classList.add("disabled")}
        else{ kayitOl.classList.add("bg-success")
            kayitOl.classList.remove("disabled")
        }
    if(parola.value==""){  kayitOl.classList.remove("bg-success")
        kayitOl.classList.add("disabled")}
        else{ kayitOl.classList.add("bg-success")
            kayitOl.classList.remove("disabled")
        }



},500);