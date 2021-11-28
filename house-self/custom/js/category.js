const categoryTitle = document.querySelectorAll('.category-title');
const allCategoryPosts = document.querySelectorAll('.all');

for(let i = 0; i < categoryTitle.length; i++){
    categoryTitle[i].addEventListener('click', filterPosts.bind(this, categoryTitle[i]));
}

function filterPosts(item){
    changeActivePosition(item);
    for(let i = 0; i < allCategoryPosts.length; i++){
        if(allCategoryPosts[i].classList.contains(item.attributes.id.value)){
            allCategoryPosts[i].style.display = "block";
        } else {
            allCategoryPosts[i].style.display = "none";
        }
    }
}

function changeActivePosition(activeItem){
    for(let i = 0; i < categoryTitle.length; i++){
        categoryTitle[i].classList.remove('active');
    }
    activeItem.classList.add('active');
};

$('#btnPlus').click(function(){
    var x = Number($("input[name='quality']").val()) + 1;
    var max = parseInt($("input[name='quality']").attr('max'));
    if(x >= max) x = max;
    $("input[name='quality']").val(x);
});

$('#btnSub').click(function(){
    var x = Number($("input[name='quality']").val()) - 1;
    var min = parseInt($("input[name='quality']").attr('min'));
    if(x <= min) x = min;
    $("input[name='quality']").val(x);
});