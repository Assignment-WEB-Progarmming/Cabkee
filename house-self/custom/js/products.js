function rate_star(id, rate,text)
{
    var node = document.getElementById(id);
    var num = 0 ;
    if(rate > 5) rate = 5;
    for (var i = 1; i <= rate; i++) {
        var star = document.createElement("span");
        star.className = "review-rate-star fa fa-star";
        star.style = "color:orange";
        node.appendChild(star);
        num ++;
    }
    for(var i = num; i < 5; i++){
        var star = document.createElement("span");
        star.className = "review-rate-star fa fa-star-o";
        if(rate - num < 1) {
            if(rate - num >= 0.5)
                star.className = "review-rate-star fa fa-star-half-full";
        }
        star.style = "color:orange";
        node.appendChild(star);
        num ++;
    }
    var textReview = document.createElement("span");
    textReview.className = "review-text";
    textReview.style = "color:black; padding-left: 5px;";
    textReview.innerText = '(' + text + ')';
    node.appendChild(textReview);
    
}
function rate_star_2(id, rate,text)
{
    var node = document.getElementById(id);
    var num = 0 ;
    if(rate > 5) rate = 5;
    for (var i = 1; i <= rate; i++) {
        var star = document.createElement("span");
        star.className = "review-rate-star fa fa-star";
        star.style = "color:orange";
        node.appendChild(star);
        num ++;
    }
    for(var i = num; i < 5; i++){
        var star = document.createElement("span");
        star.className = "review-rate-star fa fa-star-o";
        if(rate - num < 1) {
            if(rate - num >= 0.5)
                star.className = "review-rate-star fa fa-star-half-full";
        }
        star.style = "color:orange";
        node.appendChild(star);
        num ++;
    }
    var textReview = document.createElement("span");
    textReview.className = "review-text";
    textReview.style = "color:#1A9CB7; padding-left: 5px;";
    textReview.innerText =" " + text + " đánh giá";
    node.appendChild(textReview);
    
}

function changeDvvc(dvvc, tien) {
    dvvc = tien;
}

function chuyenHuong(){
    window.location = "product_page.php";
}

function addToCart(id) {
    var sl = Number($("input[name='quality']").val());
    /* $.post('../api/cookie.php', {
        'action': 'add',
        'id': id,
        'num': 1
    }, function(data) {
        location.reload()
    }) */
    $.ajax({
        url: '../api/cookie.php',
        type: 'POST',
        data: {
            'action': 'add',
            'id': id,
            'num': sl
        },
        success: function(data) {
            setTimeout(chuyenHuong, 1500);
            $('#success').html('Thao tác thành công');
            $('#success').show();
        },
        error: function(e) {
            console.log(e.message);
        }
    });
}

function deleteCart(id) {
    /* $.post('cookie.php', {
        'action': 'delete',
        'id': id
    }, function(data) {
        location.reload()
    }) */
    $.ajax({
        url: '../api/cookie.php',
        type: 'POST',
        data: {
            'action': 'delete',
            'id': id,
        },
        success: function(data) {
            location.reload()
        },
        error: function(e) {
            console.log(e.message);
        }
    });
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function checkCookie(cname) {
    var check = getCookie(cname);
    if(check != '') {
        document.getElementById('notLogin').style.display = 'none';
        document.getElementById('yesLogin').style.display = 'unset';
        document.getElementById('sp_notLogin').style.display = 'unset';
    }
}