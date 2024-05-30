const token = localStorage.getItem('app-token');
const user = localStorage.getItem('user-name');
if (token) {
    localStorage.removeItem('app-token');
    localStorage.removeItem('user-name');
    delete axios.defaults.headers.common['Authorization'];
    alert('You are logged out');
    window.location.href = '/login';
}
else{
    window.location.href = '/login';
}
