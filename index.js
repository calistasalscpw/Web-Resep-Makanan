// di video nama filenya adalah script.js
let category = document.querySelector("#category");
let ingredient = document.querySelector("#ingredient");
let container = document.querySelector(".mb-3");

category.addEventListener("change", function(){
    let foodCategory = this.value;
    let selectedIngredient = ingredient.value;

    let http = new XMLHttpRequest();

    http.onload = function(){
        if(this.readyState == 4 && this.status == 200){
            let response = JSON.parse(this.responseText);
            let out = "";
            for(let item of response){
                out += `
                    <div class="col-4 mb-5">
                        <div class="card" style="width: 25.8rem; border: none">
                            <img src="${item.photo}" class="card-img-top" alt="" style="border-style: solid; border-radius: 15px; border-width: 2px; height: 12rem;"/> <!-- ambil gambar dari database -->
                            <div class="card-body px-0 py-1">
                                <div class="d-flex justify-content-between">
                                    <span class="badge rounded-pill" style="background-color: #FB6D48; font-size: 15px; font-weight: 400;">
                                        <i class="bi bi-stopwatch" style="font-size: 20px;"></i> ${item.time} minutes<!-- ambil kolom dari tabel -->
                                    </span>
                                    <span class="badge rounded-pill" style="background-color: #FB6D48; font-size: 15px; font-weight: 400;">
                                        <i class="bi bi-person" style="font-size: 20px;"></i> ${item.serving} servings<!-- ambil kolom dari tabel -->
                                    </span>
                                </div>
                                <a href="saverecipe.html" class="card-title stretched-link" style="font-size: 20px; font-weight: 600;">${item.title_recipe}</a><!-- ambil kolom dari tabel -->
                            </div>
                        </div>
                    </div>
                `;
            }
            container.innerHTML = out;
        }
    }

    http.open('POST', "script.php");
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("category="+foodCategory+"&ingredient="+selectedIngredient);
});

// tonton video di menit 7.59