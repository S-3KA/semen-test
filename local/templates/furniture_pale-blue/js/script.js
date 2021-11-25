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
    let close = document.getElementById('role');
    if (close.disabled = false){
        close.setAttribute('disabled', true);
    }
    else
    {
        close.removeAttribute('disabled');
    }
}