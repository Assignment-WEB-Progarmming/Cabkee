function show_content(id){
    var stt = document.getElementById("stt_item");
    var item = document.getElementsByClassName("nav-item")[id];
    var link = item.getElementsByClassName("nav-link")[0];
    var menu =  item.getElementsByClassName("dropdown-menu")[0];
    var str = menu.className.toString().split(" ")[1];
    if(!str)
    {
        menu.className += " show";
        link.style ="color:#0f7c39;font-weight: bolder;border-bottom: 2px solid #0f7c39;";
    }
}
function hide_content(id){
    var item = document.getElementsByClassName("nav-item")[id];
    var link = item.getElementsByClassName("nav-link")[0];
    var menu =  item.getElementsByClassName("dropdown-menu")[0];
    menu.className ="dropdown-menu";
    link.style ="color:#666666;font-weight: 500;border-bottom: none;";
}
function set_show_index(num){
    var stt = document.getElementById("stt_item");
    stt.innerHTML = num ;
    update_content();
}

function update_content()
{
    var stt = parseInt(document.getElementById("stt_item").innerHTML.toString());
    show_content(stt);
    for (var i = 0; i < 6; i++) {
        if( i != stt)
            hide_content(i);
    }
}
function hide_all_content()
{
    for (var i = 0; i < 6; i++) {
        hide_content(i);
    }
}