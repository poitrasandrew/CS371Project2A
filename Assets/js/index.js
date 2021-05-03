
function toggleForm() {
    document.getElementById("reg-form-btn").classList.toggle("active-form-tab");
    document.getElementById("login-form-btn").classList.toggle("active-form-tab");
    if (document.getElementById("reg-form-btn").classList.contains("active-form-tab")) {
        document.getElementById("registration-form").classList.remove("display-none");
        document.getElementById("login-form").classList.add("display-none");
    }
    else {
        document.getElementById("login-form").classList.remove("display-none");
        document.getElementById("registration-form").classList.add("display-none");
    }
}

function toggleFormToLogin() {
    document.getElementById("reg-form-btn").classList.toggle("active-form-tab");
    document.getElementById("login-form-btn").classList.toggle("active-form-tab");
    document.getElementById("login-form").classList.remove("display-none");
    document.getElementById("registration-form").classList.add("display-none");
}