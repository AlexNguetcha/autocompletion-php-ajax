var searchInput = document.querySelector("#search");
var resultDiv = document.querySelector("#result");

searchInput.addEventListener("input", function () {
    let search = searchInput.value;
    resultDiv.innerHTML = "";
    autocomplete(search);
});

function autocomplete(s){
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (this.readyState==4 && this.status==200) {
            let response = JSON.parse(this.responseText);
            for (let i = 0; i < response.length; i++) {
                let data = response[i]+"";
                data = data.replace(s, "<b>"+s+"</b>");
                resultDiv.innerHTML += "<div class='suggestion'>"+data+"</div>";
            }
        }
    }
    let dataString = "search="+s;
    xhr.open("GET", "/completion.php?"+dataString, true);
    xhr.send();
}