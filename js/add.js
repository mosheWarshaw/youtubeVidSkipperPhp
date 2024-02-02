let numOfPairs = 1;
let article = document.getElementsByTagName("article")[0];
let form  = document.getElementsByTagName("form")[0];
let addPartButton = document.getElementById("addPart");
let secondsInput = document.getElementById("groupOfSecondsInputs");
let submitButton = document.getElementById("submit");

addPartButton.addEventListener("click", function(event){
    event.preventDefault();
    
    numOfPairs++;
    secondsInput.insertAdjacentHTML(
        "beforeend",
        `
            <div class="secondsInput">
                <input type="number" name="start${numOfPairs}" min="0" placeholder="start second" class="startInput" />
                <input type="number" name="end${numOfPairs}" min="0" placeholder="end second" class="endInput" />
            </div>
        `
    );
});

submitButton.addEventListener("click", function(event){
    event.preventDefault();
    
    let formData = new FormData(form);
    formData.append("numOfPairs", numOfPairs);
    fetch(
        "responses/add.php",
        {
            method: "POST",
            body: formData
        }
    ).then(
        response => article.innerHTML = "<div id='responseText'>Submission complete</div>"
    );
});