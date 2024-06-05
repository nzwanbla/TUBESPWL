document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    const user_email = document.getElementById('email').value;
    const user_password = document.getElementById('password').value;


    axios.post('/login', {
      email: user_email,
      password: user_password
    })
    .then(response => {
      localStorage.setItem('app-token', response.data.token);
      localStorage.setItem('user-id', response.data.user_id);
      localStorage.setItem('user-name', response.data.user_name);


      // alert(localStorage.getItem('user-id')); 
      
      axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;
      const token = localStorage.getItem('app-token');
      window.location.href = '/dashboard';
    })
    .catch(error => {
      console.error('Login failed:', error);
      alert('Login failed. Please check your credentials and try again.');
    });
});

  // Ensure the token is included in all subsequent requests
  const token = localStorage.getItem('app-token');
  if (token) {
      axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
  }