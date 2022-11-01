
document.getElementById('select').value = ''
function select(opName){
    var select = document.getElementById('select').value;
    if(select == 'add'){
        window.location.href = 'promotionAddPage';
    }
    else {
        document.getElementById('addApper').innerHTML = '<a href="/apperAddPage/'+ select +'/'+ opName.options[opName.selectedIndex].text +'"><img src="/img/plus.svg" width="40px"></a>';
        document.getElementById('managePromotion').innerHTML = '<a href="editPromotionPage/'+ select +'"><img src="/img/setting.svg" width="40px"></a>'
    }
}
var searchVisible = false
function showSearch() {
    if(searchVisible === false){
    document.getElementById('select').style.display = 'none';
    document.getElementById('search').style.display = 'block';
    searchVisible = true;
    }
    else {
        document.getElementById('select').style.display = 'block';
        document.getElementById('search').style.display = 'none';  
        searchVisible = false  
    }
}




// search
let search_inp = document.querySelector('#search');

search_inp.addEventListener('keyup', () => {
    fetch('search/' + search_inp.value, {
        method: 'GET'
    }).then((res)=> {
        return res.text();
    }).then((data) => {
        document.getElementById('data').innerHTML = data;
    })
})



function selectpromotion() {

}
