//initialise current link index to 0
var current = 0;
//looop through all links to see which page we are currently on
for(var i = 0; i<document.links.length; i++){
    //if the url of our page matches url of our link then set the index of the link to that index found
    if(document.links[i].href===document.URL){
        current = i;
    }
}
//set the class of current page to active
document.links[current].className = 'active';
//for debugging purposes
console.log(document.links[current]);


//getting translation link from navigation
var translationlink = document.getElementById("translationLink");
//getting translation display section
var translations = document.querySelector(".trans-section");

// geting link of search-box
var searchBox = document.querySelector(".search-box");


//if translationlink clicked, handle event. Toggle display
translationlink.addEventListener("click", function(){
    if(translations.style.display == "none"){
        //make section visible
        translationLink.innerText = "Search";
        translations.style.display = "block";   
        searchBox.style.display = "none";
    }
    else{
        //hide section
        translationLink.innerText= "Translations";
        translations.style.display = "none";
        searchBox.style.display = "flex";

    }
});




//inittialising tables for dif categories
 var greeting_tbl = document.getElementById("greeting-tbl");
 var question_tbl = document.getElementById("question-tbl");
 var response_tbl = document.getElementById("response-tbl");
 var common_tbl = document.getElementById("common-tbl");
 var word_tbl = document.getElementById("word-tbl");

 var selectedCat = document.getElementById("selectedCat");

 selectedCat.addEventListener("click", function(){
    let index = selectedCat.selectedIndex;
    let item = selectedCat.options[index].text;

     switch (item) {
        case "Greeting":
             console.log(item);
             greeting_tbl.style.display = "flex";
             question_tbl.style.display = "none";
             response_tbl.style.display = "none";
             common_tbl.style.display = "none";
             word_tbl.style.display = "none";
             break;
        case "Question":
            console.log(item);
            question_tbl.style.display = "flex";
            greeting_tbl.style.display = "none";
            response_tbl.style.display = "none";
            common_tbl.style.display = "none";
            word_tbl.style.display = "none";
            break;  
        case "Response":
            console.log(item);
            response_tbl.style.display = "flex";
            question_tbl.style.display = "none";
            greeting_tbl.style.display = "none";
            common_tbl.style.display = "none";
            word_tbl.style.display = "none";
            break;
        case "Common phrase": 
            console.log(item);
            common_tbl.style.display = "flex";
            question_tbl.style.display = "none";
            response_tbl.style.display = "none";
            greeting_tbl.style.display = "none";
            word_tbl.style.display = "none";
            break; 
        case "Word":
            console.log(item);
            word_tbl.style.display = "flex";
            question_tbl.style.display = "none";
            response_tbl.style.display = "none";
            common_tbl.style.display = "none";
            greeting_tbl.style.display = "none";
            break;
     
         default:
             
             break;
     }
 })

 
