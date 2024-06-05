const token = localStorage.getItem('app-token');
const user = localStorage.getItem('user-name');
if (token) {
    alert('You are logged out');
    window.location.href = '/login';
    localStorage.removeItem('app-token');
    localStorage.removeItem('user-name');
    delete axios.defaults.headers.common['Authorization'];
}
else{
    window.location.href = '/login';
}
