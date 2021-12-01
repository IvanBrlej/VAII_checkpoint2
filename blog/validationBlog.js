function validateInput(element, validationFunction) {
    element.oninput = function (event) {
        let result = validationFunction(event.target.value);

        let erId = "er-" + element.id;
        let errorEle = document.getElementById(erId);

        if (result != null) {
            if (errorEle == null) {
                errorEle = document.createElement("div")
                errorEle.classList.add("error");
                errorEle.id = erId;
            }
            errorEle.innerText = result;
            element.after(errorEle);
            element.parentElement.classList.add("has-error");
        } else {
            errorEle?.remove()
            element.parentElement.classList.remove("has-error");
        }
        checkFormState();
    }
    element.dispatchEvent(new Event('input'));
}


function checkFormState() {
    if (document.querySelectorAll(".error").length == 0) {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit-info").style.display = "none";
    } else {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit-info").style.display = "block";
    }
}

window.onload = () => {
    validateInput(document.getElementById("title"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Musíš zadať názov blogu";
        }
        if (value.length < 6) {
            return "Názov musí obsahovať aspoň 6 písmen";
        }
    });

    validateInput(document.getElementById("text"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Blog nesmie byť prázdny";
        }
        if (value.length < 6) {
            return "Blog musí mať aspon 200 písmen";
        }
    });
}