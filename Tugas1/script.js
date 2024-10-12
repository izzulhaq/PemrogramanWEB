function input(value) {
    document.getElementById("display").value += value;
}

function clear() {
    document.getElementById("display").value = "";
}

function hitung() {
    let display = document.getElementById("display");
    try {
        display.value = eval(display.value);
    } catch (e) {
        display.value = "Error";
    }
}
