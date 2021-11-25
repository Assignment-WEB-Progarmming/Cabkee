function payment_way(){
    var icon = document.getElementById("payment-way-icon");
    var way = document.getElementById("payment-way-content");
    var pay_id = document.getElementsByClassName("payment-way-expand")[0];
    var opt = way.value.toString() ;
    switch(opt){
        case "way-1":
            icon.setAttribute("src","./custom/images/cash-icon.png");
            pay_id.style = "display:none";
            break;
        case "way-2":
            icon.setAttribute("src","./custom/images/atm-icon.png");
            document.getElementById("payment-way-expand-text").innerText = "Số tài khoản";
            pay_id.style = "display:flex";
            break;
        case "way-3":
            icon.setAttribute("src","./custom/images/zalopay-icon.png");
            document.getElementById("payment-way-expand-text").innerText = "Số điện thoại";
            pay_id.style = "display:flex";
            break;
        case "way-4":
            icon.setAttribute("src","./custom/images/momo-icon.png");
            document.getElementById("payment-way-expand-text").innerText = "Số điện thoại";
            pay_id.style = "display:flex";
            break;
    }
}