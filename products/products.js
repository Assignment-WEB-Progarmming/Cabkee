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