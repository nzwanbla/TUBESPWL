const token = localStorage.getItem('app-token');
// const user = localStorage.getItem('user-name');
if (token) {
    // localStorage.removeItem('app-token');
    // delete axios.defaults.headers.common['Authorization'];
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
    // alert(user);
}
else{
    window.location.href = '/login';
}
