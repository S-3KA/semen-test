/- метрика -/
function phone_bt(){
    ym(86579063,'reachGoal','phone_bt');
    console.log("phone_bt");
}
function mail_bt(){
    ym(86579063,'reachGoal','mail_bt');
    console.log("mail_bt");
}

/- соц-сети меню -/
function recolor(){
    console.log("s")
    event.target.classList.remove('base_color');
}
function unrecolor(){
    console.log("a")
    event.target.classList.add('base_color');
}

/- форма обратной связи -/
function formclose(){
    let close = document.getElementById('call-form');
    close.classList.toggle("form-hiden");
}
function form_undisabled(){
    let name = document.getElementById('PROPERTY[NAME][0]')
    let phone = document.getElementById('PROPERTY[27][0]')
    let chek = document.getElementById('chek')

    let close = document.getElementById('role');
    // chek.checked = null
    // chek.checked = !chek.checked;
    if (name.value && phone.value != ''){
        // console.log(name.value,phone.value);
        if (chek.value != " " ){
            console.log("все атрибуты введены")
        }
    }
}
function form_undisabled_check() {
    let chek = document.getElementById('chek')
    if (chek.value = "0"){
        chek.value = "1"
    }else if (chek.value = "1") {
        chek.value = "0"
    }
}