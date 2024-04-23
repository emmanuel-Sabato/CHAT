const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
}


continueBtn.onclick = () => {
    // This is Ajax code
    let xhr = new XMLHttpRequest(); //creating XML object
    
}