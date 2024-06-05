const token = localStorage.getItem('app-token');

// const user = localStorage.getItem('user-name');
if (token) {
document.getElementById("log").style.visibility = "hidden";
}
else{
document.getElementById("dash").style.visibility = "hidden";
}
